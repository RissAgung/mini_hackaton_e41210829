@extends('layout.main')

@section('content')
    <h1 class="mb-4">Edit Data</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/edit_data.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $finalData['nama'] }}"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim" id="exampleInputEmail1"
                        value="{{ $finalData['nim'] }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prodi</label>
                    <input type="text" name="prodi" class="form-control" value="{{ $finalData['prodi'] }}"
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
                        <option @if ($finalData['cabang_olahraga'] === 'Renang') selected @endif value="Renang">Renang</option>
                        <option @if ($finalData['cabang_olahraga'] === 'Bulu Tangkis') selected @endif value="Bulu Tangkis">Bulu Tangkis</option>
                        <option @if ($finalData['cabang_olahraga'] === 'Futsal') selected @endif value="Futsal">Futsal</option>
                        <option @if ($finalData['cabang_olahraga'] === 'Bela Diri') selected @endif value="Bela Diri">Bela Diri</option>
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
