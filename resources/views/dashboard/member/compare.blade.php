@extends('../layouts.app')
@section('style')
    <link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
    <style type="text/css">
        .nav-tabs {
            background-color: #ffffff;
            border-bottom: 2px solid #ebebeb;
        }

        .nav-tabs>li {
            padding: 10px;
        }

        a:link {
            color: #FFD571;
            text-decoration: none;
        }

        a:visited {
            color: #FFD571;
            text-decoration: none;
        }

        a:hover {
            color: #FFD571;
            text-decoration: none;
        }

        a:active {
            color: #FFD571;
            text-decoration: none;
        }
    </style>
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <!-- ... (kode sebelumnya) ... -->
            </div>
            <div class="card-body">
                <div class="tab-container">
                    <ul class="nav nav-tabs" id="tab">
                        @foreach ($uniqueTreatmentCodes as $treatmentCode)
                            <li class="t t-{{ str_replace(' ', '_', $treatmentCode) }}">
                                <a id="t-{{ str_replace(' ', '_', $treatmentCode) }}"
                                    href="#{{ str_replace(' ', '_', $treatmentCode) }}"
                                    data-toggle="tab">{{ $treatmentCode }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach ($uniqueTreatmentCodes as $treatmentCode)
                            <div id="{{ str_replace(' ', '_', $treatmentCode) }}"
                                class="tab-pane @if ($loop->first) active @endif cont">
                                <div class="row mt-2">
                                    @foreach ($photos->where('treatment_code', $treatmentCode) as $photo)
                                        <div class="col-sm-6 text-center mb-5">
                                            <p><strong>Posisi:</strong> {{ $photo->treatmentPosition->position->name }}
                                            <p>{{ date('d-m-Y', strtotime($photo->created_at)) }}</p>
                                            </p>
                                            <img src="{{ asset($photo->photo) }}" width="500" height="400"
                                                style="border-radius: 5px;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script type="text/javascript">
        var tp = window.location.hash.substr(1);
        $('.t-' + tp).attr('style', 'background: #000; color: #fff;');
        $('#tab a').click(function(e) {
            $('.t').attr('style', 'background: #fff');
            e.preventDefault();
            $(this).tab('show');
            var t = $(this).attr('id');
            $('.' + t).attr('style', 'background: #000; color: #fff;');
        });
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });
        var hash = window.location.hash;
        $('#tab a[href="' + hash + '"]').tab('show');

        // Ambil parameter jenis dari URL
        var urlParams = new URLSearchParams(window.location.search);
        var type = urlParams.get('type');

        // Saring data berdasarkan jenis
        if (type === 'konsultasi') {
            // Saring data konsultasi
            // ...
        } else if (type === 'perawatan') {
            // Saring data perawatan
            // ...
        }
    </script>
@endsection
