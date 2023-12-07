@extends('dashboard.layout.base')

@section('title',$title)

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
    </div>
    <a href="{{route('kelas.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><b><-</b> Back</a>
    <form action="{{route('kelas.destroy',1)}}" method="POST" class="d-inline">
        @csrf
        @method('delete')

        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="return confirm('Hapus berita ?')" type="submit">
            <i class="bi bi-trash3"></i>  Delete
        </button>
    </form>

    {{-- @dd($siswa) --}}
    <div class="col-5 m-10" style="text-align:center">
        <h1>{{$data->kelas}}</h1>
        <h3>Santri Yang terdaftar</h3>
        <hr>
        <h5>Tambah Santri    </h5>
        @if ($errors->any())
            <div style="color: red;">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('addsiswakelas')}}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="row">
                    <div class="col-8">
                        <select id="disabledSelect" class="form-select" name="siswa_id" >
                            @foreach ($listsiswa as $item )
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="hidden" name="idkelas" value="{{$data->id}}">
                        <input type="hidden" name="kelas" value="{{$data->kelas}}">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>

        <div class="table-responsive">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>action</th>
            </tr>
            @foreach ($siswa as $item)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td style="text-align: left">
                        {{$item->siswa->nama}}
                    </td>
                    <td>
                        <form action="{{route('deletesiswakelas')}}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name="id">
                            <input type="hidden" value="{{$data->id}}" name="idkelas">
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ?')"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>

</div>

@endsection
