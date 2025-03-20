@extends('admin.layouts.main')

@section('title', 'Testing')

@section('sub-title', 'Show Data')

@section('contents')
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Show Data Testing</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled m-0">
                        <li class="d-flex justify-content-between mb-2">
                            <span>Nama</span>
                            <span class="fw-bold">Irma</span>
                        </li>

                        <li class="d-flex justify-content-between mb-2">
                            <span>Tanggal Lahir</span>
                            <span class="fw-bold">20/10/2003</span>
                        </li>

                        <li class="d-flex justify-content-between mb-2">
                            <span>Email</span>
                            <span class="fw-bold">irmawf26@gmail.com</span>
                        </li>

                        <li class="d-flex justify-content-between mb-2">
                            <span>Nomor Telepon</span>
                            <span class="fw-bold">082260259813</span>
                        </li>

                        <li class="d-flex justify-content-between mb-2">
                            <span>Jenis Kelamin</span>
                            <span class="fw-bold">Perempuan</span>
                        </li>

                        <li class="d-flex justify-content-between">
                            <span>Alamat</span>
                            <span class="fw-bold">BTN Palipi Puskud</span>
                        </li>

                        <li class="d-flex justify-content-between">
                            <span>Jabatan</span>
                            <span class="fw-bold">Manager</span>
                        </li>

                        <li class="d-flex justify-content-between">
                            <span>Keahlian</span>
                            <span class="fw-bold">Pemrograman</span>
                        </li>

                        <li class="d-flex justify-content-between">
                            <span>Status</span>
                            <span class="fw-bold">Aktif</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
