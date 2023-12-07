@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
            <a href="{{route('infaq.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Tambah {{$title}}</a>
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
                            <tr>
                                <th>no</th>
                                <th>Tanggal</th>
                                <th>Siswa</th>
                                <th>Nominal</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Datas as $data )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->bulan}}, {{$data->tahun}}</td>
                                <td>{{$data->siswa->nama}}</td>
                                <td>Rp. {{$data->nominal}}</td>
                                @if ($data->payment)
                                <td> Lunas</td>
                                @else
                                <td>
                                    <form action="{{route('paymentinfaq',$data->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" value="{{$data->id}}" name="id_infaq">
                                        <button class="btn btn-danger" onclick="return confirm('Apakah Sudah di Bayar ?')">Pay</button>
                                    </form>
                                </td>
                                @endif
                                <td style="text-align:">
                                    <form action="{{route('infaq.destroy',$data->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" value="{{$data->kelas}}" name="kelas"> --}}
                                        <button class="badge bg-danger border-0" onclick="return confirm('Hapus Data ?')"><i class="bi bi-trash3"></i></button>
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
