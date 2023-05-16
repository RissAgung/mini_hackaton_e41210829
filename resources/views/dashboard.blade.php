@extends('layout.main')

@section('content')
    <div class="row mb-4">
        <div class="d-flex flex-column gap-3">
            <h1>Data Pegawai</h1>
            <a href="{{ url('add_data') }}" class="btn btn-success">Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Pegawai</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nim</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Prodi</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Cabang olahraga</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-normal">{{ $index->nama }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-normal">{{ $index->nim }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $index->prodi }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $index->cabang_olahraga }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a href="/edit_data/{{ $index->kode_daftar }}" class="btn btn-warning fw-semibold">Edit</a>
                                            <a href="/delete_data/{{ $index->kode_daftar }}" class="btn btn-danger fw-semibold">Hapus</a>
                                        </td>
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

@section('other_js')
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
@endsection
