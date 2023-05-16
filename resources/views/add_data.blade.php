@extends('layout.main')

@section('content')
    <h1 class="mb-4">Tambah Data</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/daftar.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim" id="exampleInputEmail1"
                        value="{{ old('nim') }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prodi</label>
                    <input type="text" name="prodi" class="form-control" value="{{ old('prodi') }}"
                        id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Angkatan</label>
                    <?php $date = getdate(); ?>
                    <select class="form-select" name="angkatan">
                        <?php for ($i = ($date['year'] - 10); $i <= ($date['year']); $i++) : ?>
                        <option <?php echo $i == $date['year'] ? 'selected' : ''; ?> value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cabang Olahraga</label>
                    <select class="form-select" name="olahraga">
                        <option value="Renang">Renang</option>
                        <option value="Bulu Tangkis">Bulu Tangkis</option>
                        <option value="Futsal">Futsal</option>
                        <option value="Bela Diri">Bela Diri</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('other_js')
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
@endsection
