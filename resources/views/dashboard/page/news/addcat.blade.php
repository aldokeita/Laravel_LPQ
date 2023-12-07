@extends('dashboard.layout.base')

@section('title','News')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD CATEGORY</h1>
            <a href="{{route('category.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><-Back</a>
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
            <form method="POST" action="{{route('category.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <input type="input" class="form-control" id="Category" name="category" required value="{{old('category')}}" autofocus>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>

    </div>

@endsection
