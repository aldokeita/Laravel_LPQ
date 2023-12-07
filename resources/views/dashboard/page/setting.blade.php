@extends('dashboard.layout.base')

@section('title','Profile Setting')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Setting</h1>
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ubahpass">
            Ubah Password
        </a>
    </div>
    <div class="col-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <table class="table" >
            <tr>
                <td>Nama</td>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>{{$data->role}}</td>
            </tr>
            @if ($data->role=='siswa')
            {{-- @dd($data->siswa) --}}
                <tr>
                    <td>NIS</td>
                    <td>{{$data->siswa->nis}}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{$data->siswa->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{$data->siswa->alamat}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{$data->siswa->jenis_kelamin}}</td>
                </tr>
            @endif
        </table>
    </div>

</div>

<!-- Logout Modal-->
<div class="modal fade" id="ubahpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('updatepassword')}}" method="POST" >
                    @csrf
                    @method('put')

                    <input type="hidden" name="id" value="{{$data->id}}">

                    <div class="mb-3">
                        <label for="oldpass" class="form-label">Password Lama</label>
                        <input type="password" name="oldpass" id="oldpass" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="newpass" class="form-label">Password Baru</label>
                        <input type="password" name="newpass" id="newpass"class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection
