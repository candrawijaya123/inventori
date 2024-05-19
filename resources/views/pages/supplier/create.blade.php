@extends('layouts.app', ['title' => 'Tambah Supplier'])


@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Supplier</h4>
                <form class="forms-sample" action="{{ route('supplier.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="number" class="form-control @error('kode_supplier') is-invalid @enderror"
                            name="kode_supplier" id="kode_supplier" placeholder="Isi Kode Supplier..">
                        @error('kode_supplier')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" class="form-control  @error('nama_supplier') is-invalid @enderror"
                            name="nama_supplier" id="nama_supplier" placeholder="Isi Nama Supplier..">
                        @error('nama_supplier')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telpon">Telpon</label>
                        <input type="number" class="form-control  @error('telpon') is-invalid @enderror" name="telpon"
                            id="telpon" placeholder="Isi Telpon Supplier..">
                        @error('telpon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="4"></textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-light ">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection
