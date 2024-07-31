@extends('layouts.frontend.pengeluaran3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pengeluaran</div>
                <div class="card-body">
                    <form action="{{route('pengeluaran.update',$pengeluaran->id)}}" method="POST" >
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
              @endif
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Saldo pengeluaran</label>
                            <input type="text" class="form-control" name="saldo_pengeluaran" value="{{ $pengeluaran->saldo_pengeluaran}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Jenis Bank</label>
                            <select class="form-control" name="id_bank">
                                @foreach( $bank as $data )
                                    <option value="{{$data->id}}">{{$data->jenis_bank}}</option>
                                @endforeach
                            </select>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $pengeluaran->keterangan}}">
                        </div>

                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('pengeluaran')}}" class="btn btn-primary ms-4">Kembali</a>

                        </form>

                </div>
        </div>
    </div>
</div>
</div>
@endsection
