<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nama_barang" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="harga_beli" class="form-label">Harga beli</label>
                    <input type="number" class="form-control" name="harga_beli">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="harga_jual" class="form-label">Harga jual</label>
                    <input type="number" class="form-control" name="harga_jual">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Data Barang</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barang</th>
                        <th>Harga beli</th>
                        <th>Harga jual</th>
                        <th>Stok</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laptop ASUS</td>
                        <td>Rp. 10.000.000</td>
                        <td>Rp. 12.000.000</td>
                        <td>5</td>
                        <td>
                            <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Monitor Samsung</td>
                        <td>Rp. 5.000.000</td>
                        <td>Rp. 6.000.000</td>
                        <td>10</td>
                        <td>
                            <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>