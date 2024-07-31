@extends('layouts.frontend.pengeluaran2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambahkan Pengeluaran</div>
                <div class="card-body">
                    <form action="{{route('pengeluaran.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Saldo pengeluaran</label>
                            <input type="text" class="form-control" name="saldo_pengeluaran">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Jenis Bank</label>
                            <select class="form-control" name="id_bank">
                                @foreach( $bank as $data )
                                    <option value="{{$data->id}}">{{$data->jenis_bank}}</option>
                                @endforeach
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>



                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{url('pengeluaran')}}" class="btn btn-primary ms-4">Kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
