@extends('admin.layouts.main')

@section('title', 'Testing')

@section('sub-title', 'Tambah Data')

@section('contents')
    <div class="row">
        <div class="col">
            <div class="card">
                <h5 class="card-header">@yield('sub-title') - @yield('title')</h5>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Masukkan nama karyawan">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone"
                                    placeholder="Masukkan nomor telepon">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="male">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="message" placeholder="Masukkan alamat karyawan"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Unggah Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="selectOption" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="selectOption">
                                    <option selected>Pilih jabatan...</option>
                                    <option value="1">Manager</option>
                                    <option value="2">Supervisor</option>
                                    <option value="3">Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Keahlian</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="keahlian1">
                                    <label class="form-check-label" for="keahlian1">Pemrograman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="keahlian2">
                                    <label class="form-check-label" for="keahlian2">Desain Grafis</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="keahlian3">
                                    <label class="form-check-label" for="keahlian3">Manajemen</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">Aktif</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox2">
                                    <label class="form-check-label" for="checkbox2">Cuti</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox3">
                                    <label class="form-check-label" for="checkbox3">Pensiun</label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10 text-end">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
