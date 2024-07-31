@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Bank</div>
                <div class="card-body">
                    <form action="{{route('bank.update',$bank->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Jenis Bank</label>
                            <input type="text" class="form-control" name="jenis_bank" value="{{ $bank->jenis_bank}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Rekening</label>
                            <input type="text" class="form-control" name="no_rekening" value="{{ $bank->no_rekening}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Saldo</label>
                            <input type="number" class="form-control" name="total_saldo" value="{{ $bank->total_saldo}}">
                        </div>

                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('bank')}}" class="btn btn-primary ms-4">Kembali</a>

                        </form>

                </div>
        </div>
    </div>
</div>
</div>
@endsection
