@extends('layouts.frontend.bank1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dompet</div>

                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Jenis Bank</th>
                              <th scope="col">No Rekening</th>
                              <th scope="col">Total Saldo</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                              @php $no = 1; @endphp

                              @foreach ($bank as $data)

                            <tr>
                              <th scope="row">{{$no++}}</th>
                              <td>{{$data->jenis_bank}}</td>
                              <td>{{$data->no_rekening}}</td>
                              <td>{{$data->total_saldo}}</td>
                              <td>
                                  <form action="{{route('bank.destroy', $data->id)}}" method="POST">
                                  </td>
                                    @csrf
                                    @method('DELETE')
                                  <td>
                                    <a href="{{route('bank.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                    {{-- <a href="{{route('bank.show', $data->id)}}" class="btn btn-warning">Tampilkan</a> --}}

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
