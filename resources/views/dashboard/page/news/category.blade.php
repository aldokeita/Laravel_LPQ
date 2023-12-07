@extends('dashboard.layout.base')

@section('title','News')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Add Categories</a>
    </div>


    <div class="m-10" style="text-align:center">

        <div class="table-responsive col-5">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($siswa) --}}
                    @foreach ($categories as $data )
                    <tr >
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->category}}</td>
                        <td style="text-align:center">
                            <form action="{{route('category.destroy',$data->id)}}" method="POST" class="d-inline">
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

@endsection
