@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$Event->gambar_event)}}" alt="" width="100">
        <form action="{{ route('admin.event_update', $Event->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin</label>
                <input class="form-control mt-5" type="file" id="formFile" name="gambar_event" value="{{ $Event->gambar_event}}">
              </div>
              <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Judul Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Judul Artikel..." name="judul_event" value="{{ $Event->judul_event}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Sub Judul Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Subjudul Artikel..." name="subjudul_event" value="{{ $Event->subjudul_event}}">
            </div>
            <div class="form-group">
                <label for="floatingTextarea">Deskripsi Artikel :</label>
                <textarea class="form-control" placeholder="Masukkan Deskripsi Artikel" id="floatingTextarea" name="deskripsi_event" >{{ $Event->deskripsi_event}}</textarea>
              </div>
              <a href="{{ route('admin.event_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
