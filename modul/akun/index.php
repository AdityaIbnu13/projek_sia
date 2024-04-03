<div class="card mb-3">
    <div class="card-body">
        <form action="/proses_form_akun" method="post" id="formAkun">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="nama_akun">Nama akun</label>
                    <input type="text" class="form-control" name="nama_akun" id="nama_akun">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="jenis_akun">Jenis akun</label>
                    <input type="text" class="form-control" name="jenis_akun" id="jenis_akun">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="type_saldo">Type saldo</label>
                    <select class="form-select" name="type_saldo" id="type_saldo">
                        <option value="debit">Debit</option>
                        <option value="kredit">Kredit</option>
                    </select>
                </div>
            </div>
            <hr class="text-secondary">
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

