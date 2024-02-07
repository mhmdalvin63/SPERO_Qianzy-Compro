@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            {{-- @if(auth()->user()->level == "admin") --}}
            <div class="card-title d-flex justify-content-end mb-5">
                <a href="{{ route('admin.event_create') }}" class="btn btn-primary btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>
                    Upload
                </a>
                {{-- <a href="" class="btn btn-primary">
              Add Category
          </a> --}}
            </div>
            {{-- @endif --}}
            <div class="table-responsive text-center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Subjudul</th>
                            <th>Deskripsi</th>
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <th>Aksi</th>
                            {{-- @endif --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Event as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            {{-- <td><img src="../storage/image/{{$item->gambar_barang}}" alt="" width="200px"></td> --}}
                            <td><img src="{{asset('storage/image/'.$item->gambar_event)}}" alt="" width="75"></td>
                            <td>{{$item->judul_event}}</td>
                            <td>{{$item->subjudul_event}}</td>
                            <td>{{$item->deskripsi_event}}</td>
                            {{-- <td>{{$item->nama_petugas}}</td> --}}
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <td class="d-flex gap-3 justify-content-center align-items-center">
                                {{-- <a href="{{ route('kb_show', $item->id )}}" class="btn btn-outline-primary
                                btn-icon-text">
                                Lihat
                                </a> --}}
                                <a href="{{ route('admin.event_edit', $item->id )}}"
                                    class="btn btn-outline-success btn-icon-text">
                                    Edit
                                </a>
                                <form action="{{ route('admin.event_delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                                </form>
                            </td>
                            {{-- @endif --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
