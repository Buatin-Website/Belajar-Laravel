@extends('layouts.dashboard')

@section('title', 'Create Item')

@section('content')
<div class="col-l12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Item</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('item.store') }}" method="post">
                @csrf
                <div class="form-group row">
                  <label for="nama_barang" class="col-3">Nama Barang</label>
                  <input type="text" name="nama_barang" id="nama_barang" class="form-control col-9" placeholder="Masukkan nama barang" required>
                </div>
                <div class="form-group row">
                  <label for="harga" class="col-3">Harga Barang</label>
                  <input type="number" name="harga" id="harga" class="form-control col-9" placeholder="Masukkan harga barang" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save" aria-hidden="true"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
