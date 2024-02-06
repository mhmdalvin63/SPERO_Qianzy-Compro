@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form event</h4>
                <form action="{{ route('event_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar event</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_event">
                      </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Judul event :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Judul event..." name="judul_event">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Subudul event :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Subjudul event..." name="subjudul_event">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Deskripsi event :</label>
                        <textarea class="form-control" placeholder="Masukkan Deskripsi event" id="floatingTextarea" name="deskripsi_event"></textarea>
                        <label for="floatingTextarea" ></label>
                      </div>
                    <div class="modal-footer">
                        <a href="{{ route('event_index') }}" class="btn btn-outline-warning btn-icon-text">
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
