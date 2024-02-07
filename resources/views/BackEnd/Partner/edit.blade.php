@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$Partner->gambar_partner)}}" alt="" width="100">
        <form action="{{ route('admin.partner_update', $Partner->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin</label>
                <input class="form-control mt-5" type="file" id="formFile" name="gambar_partner" value="{{ $Partner->gambar_partner}}">
              </div>
              <a href="{{ route('admin.partner_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection
