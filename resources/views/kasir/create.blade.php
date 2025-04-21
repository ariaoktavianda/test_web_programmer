@extends('layouts.sbadmin2')

@section('content')
<div class="card">
    <div class="card-header">Form Pembayaran</div>
        <div class="card-body">
                <form action="{{ route('kasir.store') }}" method="POST">
                            @csrf
                                        <input type="hidden" name="administrasi_id" value="{{ $administrasi->id }}">
            <div class="form-group">
                            <label>Data Pasien</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->pasien->nama_pasien}}" disabled>
                                            <label>Nomor HP</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->pasien->nomor_hp}}" disabled>
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->pasien->alamat}}" disabled>
                                            <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->pasien->jenis_kelamin}}" disabled>
                                            <label>Poli</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->poli}}" disabled>
                                            <label>Dokter</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->dokter->nama_dokter}}" disabled>
                                            <label>Keluhan</label>
                                            <input type="text" class="form-control" value="{{ $administrasi->keluhan}}" disabled>

                                                        </div>
            <div class="form-group">
                            <label>Biaya</label>
                                            <input type="number" name="total" class="form-control" value="{{ $administrasi->biaya }}" required>
                                                        </div>
            <button type="submit" class="btn btn-success">Bayar</button>
                    </form>
                        </div>
                        </div>
                        @endsection