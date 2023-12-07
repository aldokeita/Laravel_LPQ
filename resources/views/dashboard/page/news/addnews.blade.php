@extends('dashboard.layout.base')

@section('title','News')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD NEWS</h1>
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
            <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="input" class="form-control" id="title" name="title" required value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" rows="3" name="content" required>{{old('content')}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Category</label>
                    <select id="disabledSelect" class="form-select" name="category" >
                        @foreach ($category as $item )
                        <option value="{{$item->id}}">{{$item->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="formFile" name="photo">
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

@endsection
