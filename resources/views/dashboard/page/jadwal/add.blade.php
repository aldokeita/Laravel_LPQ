@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
            <a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><-Back</a>
        </div>

        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

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
            <form method="POST" action="{{route('jadwal.store')}}" enctype="multipart/form-data">
                @csrf
                {{-- <div class="mb-3">
                  <label for="kelas" class="form-label">Nama Kelas</label>
                  <input type="input" class="form-control" id="kelas" name="kelas" required value="{{old('nama')}}">
                </div> --}}

                <div class="mb-3">
                <label class="form-label" for="tanggal">Tanggal:</label>
                <input class="form-control" type="date" name="tanggal" required>
                </div>

                <div class="mb-3">
                <label class="form-label" for="jam_mulai">Jam Mulai:</label>
                <input class="form-control" type="time" name="jam_mulai" required>
                </div>

                <div class="mb-3">
                <label class="form-label" for="jam_akhir">Jam Akhir:</label>
                <input class="form-control" type="time" name="jam_akhir" required>
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">kelas</label>
                    <select id="disabledSelect" class="form-select" name="kelas_id" >
                        @foreach ($kelas as $item )
                        <option value="{{$item->id}}">{{$item->kelas}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </form>
        </div>

    </div>

@endsection
