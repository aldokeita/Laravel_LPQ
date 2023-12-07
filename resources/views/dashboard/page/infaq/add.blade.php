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
            <form method="POST" action="{{route('infaq.store')}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="bulan" class="form-label">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun" class="form-control" min="1000" minlength="4" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">siswa</label>
                    <select id="disabledSelect" class="form-select" name="siswa_id" >
                        @foreach ($Datas as $item )
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                <label class="form-label" for="tanggal">Nominal</label>
                <input class="form-control" type="number" name="nominal" required>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>

    </div>

@endsection
