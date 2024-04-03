<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="invoice" class="form-label">Invoice</label>
                    <input type="text" class="form-control" name="invoice">
                </div>
                <div class="col-md-4">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="col-md-4">
                    <label for="barang" class="form-label">Barang</label>
                    <select name="barang" class="form-select">
                        <option value="1">Laptop Acer</option>
                        <option value="2">Komputer (PC)</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="pelanggan" class="form-label">Pelanggan</label>
                    <select name="pelanggan" class="form-select">
                        <option value="1">PT Sejahtera</option>
                        <option value="2">CV Maju Bersama</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="col-md-3">
                    <label for="harga" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="total" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="total" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
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
<!-- Modal -->
<div class="modal fade" id="editPenjualan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Penjualan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="invoice" class="form-label">Invoice</label>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="invoice" value="PJ110324" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="2024-11-03">
                        </div>
                    </div>
                    <label for="barang" class="form-label">Barang</label>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <select name="barang" class="form-select">
                                <option value="1" selected>Laptop Acer</option>
                                <option value="2">Komputer (PC)</option>
                            </select>
                        </div>
                    </div>
                    <label for="pelanggan" class="form-label">Pelanggan</label>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <select name="pelanggan" class="form-select">
                                <option value="1" selected>PT Sejahtera</option>
                                <option value="2">CV Maju Bersama</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" class="form-control" name="harga" value="10000000">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="total" class="form-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" class="form-control" name="total" value="30000000" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control">Penjualan 3 unit laptop acer</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>