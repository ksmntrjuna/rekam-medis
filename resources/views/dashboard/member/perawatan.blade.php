@extends('../layouts.app')
@section('style')
    <link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet">
@endsection
@section('content')
    <style type="text/css">
        .crop {
            width: 180px;
            height: 150px;
            overflow: hidden;
        }

        .crop img {
            width: 150px;
            height: 180px;
            margin: -20px 0 0 -50px;
        }
    </style>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">{{ $patient->name }}</h5>
                <h6>{{ $patient->nobase }} | {{ $patient->telp }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-curved text-center table-border" id="dataTable" cellspacing="0">
                        <thead>
                            <tr class="font-weight-normal">
                                <th class="font-weight-normal" width="5%">No</th>
                                <th class="font-weight-normal" width="15%">Tanggal</th>
                                @if (Auth::user()->role != 'therapist')
                                    <th class="font-weight-normal" width="40%">Konsultasi</th>
                                @endif
                                @if (Auth::user()->role != 'fo')
                                    <th class="font-weight-normal" width="40%">Perawatan</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $d)
                                <tr class="bayangan">
                                    <td>{{ $i + 1 }}</td>
                                    <td>
                                        {{ date('d-m-Y', strtotime($d->dates)) }}<br>
                                        {{ $d->branch }}
                                    </td>
                                    @if (Auth::user()->role != 'therapist')
                                        <td>
                                            <div class="border p-2">
                                                <div class="row">
                                                    @foreach (Photo::where('nobase', $d->nobase)->where('date', $d->dates)->where('treatment_code', 'KONSULTASI')->get() as $p)
                                                        <div class="col-md-6" style="padding-bottom: 6px;">
                                                            @if ($p->treatmentPosition && $p->treatmentPosition->position)
                                                                <h6><b>{{ $p->treatmentPosition->position->name }}</b></h6>
                                                            @endif
                                                            <img src="{{ asset($p->photo) }}" width="150" height="100"
                                                                style="border-radius: 5px;">
                                                            <h6><i>by:
                                                                    {{ $p->user->name . ' (' . strtoupper($p->user->role) . ')' }}</i>
                                                            </h6>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                @if (Photo::where('nobase', $d->nobase)->where('date', $d->dates)->where('treatment_code', 'KONSULTASI')->count() > 0)
                                                    <a class="btn btn-dark btn-sm mt-1"
                                                        href="{{ url('/dashboard/compare/' . $d->nobase . '/' . $d->dates . '/trm?type=KONSULTASI') }}">
                                                        Compare
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    @endif
                                    @if (Auth::user()->role != 'fo')
                                        <td>
                                            @php
                                                $hasTreatment = false;
                                            @endphp

                                            @foreach (Photo::getByTreatment(date('Y-m-d', strtotime($d->dates)), $d->nobase) as $treatmentCode => $treatments)
                                                @if ($treatmentCode != 'KONSULTASI')
                                                    <div class="border p-2">
                                                        <p><b>{{ $treatmentCode }}</b></p>
                                                        <hr>
                                                        <div class="row">
                                                            @foreach ($treatments as $t)
                                                                <div class="col-md-6" style="padding-bottom: 6px;">
                                                                    <h6><b>{{ $t->treatmentPosition->position->name }}</b>
                                                                    </h6>
                                                                    <img src="{{ asset($t->photo) }}" width="150"
                                                                        height="100" style="border-radius: 5px;">
                                                                    <h6><i>by:
                                                                            {{ $t->user->name . ' (' . strtoupper($t->user->role) . ')' }}</i>
                                                                    </h6>
                                                                    <br>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        @php
                                                            $hasTreatment = true;
                                                        @endphp
                                                    </div>
                                                @endif
                                            @endforeach

                                            @if ($hasTreatment)
                                                <a class="btn btn-dark btn-sm mt-1"
                                                    href="{{ url('/dashboard/compare/' . $d->nobase . '/' . $d->dates . '/trm?type=all') }}">
                                                    Compare
                                                </a>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script src="{{ asset('js/lightbox.js') }}"></script>
@endsection
