@extends('../layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">USER</h5>
            </div>
            <div class="card-body">
                @if ($data)
                    <form action="{{ url('/dashboard/user/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="name" required
                                    value="{{ $data->name }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                                <input type="text" class="form-control" placeholder="NIK" name="username" required
                                    value="{{ $data->username }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email"
                                    value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Role</label>
                                <select class="form-control" name="role" required="">
                                    @foreach ($role as $r)
                                        <option value="{{ $r->name }}" @if ($data->role == $r->name) selected @endif>
                                            {{ strtoupper($r->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($data->role != 'super admin')
                                <div class="form-group col-md-6">
                                    <label>Brand</label>
                                    <select class="form-control" name="brand" required="" disabled>
                                        <option value="{{ optional($data->brand)->id }}" selected>
                                            {{ optional($data->brand)->name }}</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Cabang</label>
                                    <select class="form-control select2" style="width: 100%;" name="branch" required="">
                                        @foreach ($outlets as $outlet)
                                            <option value="{{ $outlet->code }}"
                                                @if ($data->branch == $outlet->code) selected @endif>
                                                {{ $outlet->outlet_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark"> Simpan </button>
                    </form>
                    <hr>

                    <div class=" py-3">
                        <h5 class="m-0 font-weight-bold text-primary" style="color: black !important;">UBAH PASSWORD</h5>
                    </div>
                    <form action="{{ url('/dashboard/user/password') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Password</label>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Ulangi</label>
                                <input type="password" class="form-control" placeholder="Ulangi Password"
                                    name="confirmation" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark"> Simpan </button>
                    </form>
                @else
                    <p>Data tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection