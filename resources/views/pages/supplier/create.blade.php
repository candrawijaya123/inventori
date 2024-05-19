@extends('layouts.app', ['title' => 'Tambah Supplier'])


@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Supplier</h4>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="namaSupplier">Nama Supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" id="namaSupplier"
                            placeholder="Isi Nama Supplier..">
                    </div>
                    <div class="form-group">
                        <label for="telpon">Telpon</label>
                        <input type="number" class="form-control" name="telpon" id="telpon"
                            placeholder="Isi Telpon Supplier..">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection
