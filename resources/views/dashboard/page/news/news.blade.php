@extends('dashboard.layout.base')

@section('title','News')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Berita</h1>
            <a href="{{route('news.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Tambah NEWS</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataSiswa</h6>
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
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($siswa) --}}
                            @foreach ($news as $data )
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->content}}</td>
                                <td style="text-align:center">
                                    <a href="{{route('news.show',$data->id)}}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('news.edit',$data->id)}}" class="badge bg-warning"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{route('news.destroy',$data->id)}}" method="POST" class="d-inline">
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

    </div>

@endsection
