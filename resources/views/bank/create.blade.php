@extends('layouts.frontend.table')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambahkan Jenis Bank</div>
                <div class="card-body">
                    <form action="{{route('bank.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Bank</label>
                            <input type="text" class="form-control" name="jenis_bank">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                            <input type="text" class="form-control" name="no_rekening">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total Saldo</label>
                            <input type="text" class="form-control" name="total_saldo">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{url('bank')}}" class="btn btn-primary ms-4">Kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
