@extends('index')
@section('title', 'List Barang')
@section('content')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form partner</h4>
                <form action="{{ route('partner_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar partner</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_partner">
                      </div>
                    <div class="modal-footer">
                        <a href="{{ route('partner_index') }}" class="btn btn-outline-warning btn-icon-text">
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
