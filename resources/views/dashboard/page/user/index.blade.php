@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
            <a href="{{route('user.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Tambah {{$title}}</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($siswa) --}}
                            @foreach ($user as $data )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td style="text-transform: uppercase">{{$data->role}}</td>
                                <td style="text-align:center">
                                    <a href="{{route('siswa.show',$data->id)}}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('siswa.edit',$data->id)}}" class="badge bg-warning"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{route('siswa.destroy',$data->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
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

        <!-- DataTales siswa -->
        <div class="card shadow mb-4 col-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($siswa) --}}
                            @foreach ($siswa as $data )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
