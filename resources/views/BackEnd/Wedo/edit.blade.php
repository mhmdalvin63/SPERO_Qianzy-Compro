@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="card">
    <div class="card-body">
        {{-- <img src="{{asset('storage/image/'.$Wedo->gambar_wedo)}}" alt="" width="100"> --}}
        <form action="{{ route('wedo_update', $Wedo->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            {{-- <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin</label>
                <input class="form-control mt-5" type="file" id="formFile" name="icon_Wedo" value="{{ $Wedo->icon_Wedo}}">
              </div> --}}
              <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">icon Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan icon Artikel..." name="icon_wedo" value="{{ $Wedo->icon_wedo}}">
            </div>
              <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Judul Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Judul Artikel..." name="judul_wedo" value="{{ $Wedo->judul_wedo}}">
            </div>
            <div class="form-group">
                <label for="floatingTextarea">Deskripsi Artikel :</label>
                <textarea class="form-control" placeholder="Masukkan Deskripsi Artikel" id="floatingTextarea" name="deskripsi_wedo" >{{ $Wedo->deskripsi_wedo}}</textarea>
              </div>
              <a href="{{ route('wedo_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
