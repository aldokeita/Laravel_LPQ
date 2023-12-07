@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
            <a href="{{route('kelas.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b>+</b> Tambah {{$title}}</a>
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
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Siswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($Datas) --}}
                            @foreach ($Datas as $key => $data )
                            <tr >
                                <td>{{$loop->iteration}}</td>
                                <td>{{$key}}</td>
                                <td>
                                    <ol>
                                        @foreach($data as $item)
                                            @isset($item->siswa->nama)
                                            <li>{{ $item->siswa->nama }}</li>
                                            @endisset

                                        @endforeach
                                    </ol>
                                </td>
                                @foreach($data as $item)
                                    @empty($item->siswa->nama)
                                    <td style="text-align:">
                                        <a href="{{route('kelas.show',$item->id)}}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                        <form action="{{route('kelas.destroy',$item->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{$item->kelas}}" name="kelas">
                                            <button class="badge bg-danger border-0" onclick="return confirm('hapus data ?')"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </td>

                                    @endempty
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
