@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
            <a href="{{route('jadwal.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Tambah {{$title}}</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel {{$title}}</h6>
            </div>
            <div class="card-body">
                @if (session()->has('error'))
                    <div class="alert alert-danger alert dismissible fade show" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-danger alert dismissible fade show" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr style="text-align: center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Berakhir</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Datas as $data )
                            <tr style="text-align: center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->jam_mulai}}</td>
                                <td>{{$data->jam_akhir}}</td>
                                <td>{{$data->kelas->kelas}}</td>
                                <td style="text-align: center">
                                    <form action="{{route('jadwal.destroy',$data->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" value="{{$data->kelas}}" name="kelas"> --}}
                                        <button class="badge bg-danger border-0" onclick="return confirm('hapus data ?')"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
