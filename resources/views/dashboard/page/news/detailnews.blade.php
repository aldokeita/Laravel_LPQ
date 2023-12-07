@extends('dashboard.layout.base')

@section('title','News')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail News</h1>
    </div>
    <a href="{{route('news.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b><-</b> Back</a>
    <a href="{{route('news.edit',$news->id)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="bi bi-pencil-fill"></i>  Edit</a>
    <form action="{{route('news.destroy',$news->id)}}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="return confirm('Hapus berita ?')" type="submit">
            <i class="bi bi-trash3"></i>  Delete
        </button>
    </form>

    <div class="m-10" style="text-align:center">


    <h3>{{$news->title}}</h3>
    <img src="{{asset('storage/'.$news->photo)}}" alt="" width="350px">
    <br>
    <small>Author By : {{$news->user->name}}</small>
    <br>
    <small>Category : {{$news->category->category}}</small>
    <p>{{$news->content}}</p>
    </div>

</div>

@endsection
