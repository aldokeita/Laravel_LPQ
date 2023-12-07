@extends('dashboard.layout.base')

@section('title','Add-Siswa')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD NEWS</h1>
            <a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><-Back</a>
        </div>

        <div class="col-6">
            @if (session()->has('success'))
                <div class="alert alert-primary">
                    {{session('success')}}
                </div>
            @endif
            @error('title')
                <div class="div -invalid-feedback">
                    <div class="alert alert-danger alert dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                </div>
            @enderror
            @error('photo')
                <div class="div -invalid-feedback">
                    <div class="alert alert-danger alert dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                </div>
            @enderror

            <form method="POST" action="{{route('siswa.store')}}" >
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="input" class="form-control" id="nama" name="nama" value="{{old('nama')}}" required>
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="Email" name="email" value="{{old('email')}}" required>
                </div>
                <div class="mb-3">
                  <label for="nis" class="form-label">NIS</label>
                  <input type="number" class="form-control" id="nis" name="nis" value="{{old('nis')}}" required>
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" required>
                </div>
                <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                    <select id="disabledSelect" class="form-select" name="jenis_kelamin" >
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="input" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Role</label>
                    <select id="disabledSelect" class="form-select" name="category" >
                        <option value="ketua">Ketua</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="sekretaris">Sekretaris</option>
                        <option value="guru">guru</option>
                    </select>
                </div> --}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

@endsection
