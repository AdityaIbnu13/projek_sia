<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="invoice" class="form-label">Invoice</label>
                    <input type="text" class="form-control" name="invoice">
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="total" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="total">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan">
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