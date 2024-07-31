@extends('layouts.frontend.pengeluaran1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">Tambah Pengeluaran</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Saldo pengeluaran</th>
                            <th scope="col">Jenis Bank</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp

                            @foreach ($pengeluaran as $data)

                          <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$data->saldo_pengeluaran}}</td>
                            <td>{{$data->bank->jenis_bank}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                            <form action="{{route('pengeluaran.destroy', $data->id)}}" method="POST">
                            </td>
                              @csrf
                              @method('DELETE')
                            <td>
                              <a href="{{route('pengeluaran.edit', $data->id)}}" class="btn btn-success">Edit</a>

                                <button class="btn btn-sm btn-danger" type="submit"
                                onclick="return confirm('apakah anda yakin akan menghapus data ini?')">Hapus</button>
                            </td>
                            </form>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
