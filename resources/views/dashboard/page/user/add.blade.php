@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD {{$title}}</h1>
            <a href="{{route('user.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><-Back</a>
        </div>

        <div class="col-6">
            @if (session()->has('success'))
                <div class="alert alert-primary">
                    {{session('success')}}
                </div>
            @endif

            <form method="POST" action="{{route('user.store')}}" >
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="input" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="Email" name="email" value="{{old('email')}}" required>
                </div>
                <div class="mb-3">
                <label for="disabledSelect" class="form-label">Role</label>
                    <select id="disabledSelect" class="form-select" name="role" >
                        <option value="Ketua">Ketua</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Guru">Guru</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection
