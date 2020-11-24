@extends('layouts.master-user')

@section('content')
<div class="section-body">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Paket</h4>
        </div>
        @if (session('success'))
        <div class="card-body">
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
        </div>
        @endif
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data_paket as $no => $paket)
                    <tr>
                        <th scope="row">{{ $no+1 }}</th>
                        <td>{{ $paket->nama_paket }}</td>
                        <td>Rp. {{ $paket->harga }}</td>
                        <td class="text-center">
                            <a href="{{ route('show.paket.petowner', $paket->id) }}" class="badge badge-info btn-edit">Detail</a>
                            <a href="{{ route('sale.paket.petowner', $paket->id) }}" class="badge badge-info btn-edit">Pesan</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection