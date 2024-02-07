@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form event</h4>
                <form action="{{ route('admin.wedo_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar event</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_event">
                      </div> --}}
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Icon wedo :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Icon wedo..." name="icon_wedo">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Judul wedo :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Judul wedo..." name="judul_wedo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Deskripsi wedo :</label>
                        <textarea class="form-control" placeholder="Masukkan Deskripsi wedo" id="floatingTextarea" name="deskripsi_wedo"></textarea>
                        <label for="floatingTextarea" ></label>
                      </div>
                    <div class="modal-footer">
                        <a href="{{ route('admin.wedo_index') }}" class="btn btn-outline-warning btn-icon-text">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-outline-primary btn-icon-text">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
