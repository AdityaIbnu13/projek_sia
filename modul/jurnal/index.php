<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="invoce" class="form-label">Invoice</label>
                <input type="text" class="form-control" name="invoice">
            </div>
            <div class="mb-3 col-md-4">
                <label for="jenis-invoice" class="form-label">Jenis Invoice</label>
                <select class="form-select" name="jenis-invoice">
                    <option value="pembayaran">pembayaran</option>
                    <option value="penjualan">penjualan</option>
                    <option value="pembelian">pembelian</option>
                 </select>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="nama-akun" class="form-label">Nama Akun</label>
                    <select class="form-select" name="nama-akun">
                        <option value="1">kas</option>
                        <option value="1">piutang Usaha</option>
                        <option value="1">perlengkapan</option>
                        <option value="1">Hutang Usaha</option>
                        <option value="1">Modal</option>
                    </select>
                 </div>
                 <div class="mb-3 col-md-4">
                    <label for="nominal" class="form-label">nominal</label>
                    <input type="number" class="form-control" name="nominal">
                  </div>
                  <div class="mb-3 col-md-4">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" name="type">
                        <option value="debit">Debit</option>
                        <option value="kredit">Kredit</option>
                    </select>
                </div>
             </div>
             <div class="row">
                <div class="mb-3 col">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" name="keterangan" rows="3"></textarea>
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
        <h3>Data jurnal</h3>
    </div>
    <div class="card-body">
        <div class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Invoice</th>
                    <th>Jenis Invoice</th>
                    <th>Tanggal</th>
                    <th>Akun</th>
                    <th>Type</th>
                    <th>Keterangan</th>
                    <th><i class="bi bi-gear-fill"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>#PB020324</td>
                    <td>Pembelian</td>
                    <td>2022-03-20</td>
                    <td>Kas</td>
                    <td>Rp. 10.000.000</td>
                    <td>Debit</td>
                    <td>-</td>
                    <td>
                        <a herf="#editjurnal" class="text-decoration-none" data-bs-toggle="modal">
                            <i class="bi bi-pencil-square text-success"></i>
                        </a>
                        <a href="" class="text-decoration-none">
                            <i class="bi bi-trash text-danger"></i>
                          </a>
                        </td>
                        <!-- Modal -->
                            <div class="modal tade" id="editJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Jurnal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-labek="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label for="invoice" class="form-label">Invoice</label>
                                                <input type="text" class="form-control" name="invoice" value="#PB020324">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="Jenis-invoice" class="form-label">Jenis Invoice</label>
                                                <select class="form-select" name="jenis-invoice">
                                                    <option selected vslue="pembayaran">pembayaran</option>
                                                    <option value="penjualan">penjualan</option>
                                                    <option value="pembelian">pembelian</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal" value="2022-03-20">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label for="nama-akun" class="form-label">Nama Akun</label>
                                                <select class="form-select" name="nama-akun">
                                                    <option selected value="1">kas</option>
                                                    <option value="2">piutang usaha</option>
                                                    <option value="3">perlengkapan</option>
                                                    <option value="4">Hutang Usaha</option>
                                                    <option value="5">Modal</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="nominal" class="form-label">Nominal</label>
                                                <input type="number" class="form-control" name="nominal" value="10000000">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="type" class="form-label">Type</label>
                                                <select class="form-select" name="type">
                                                    <option selecyted value="debit">Debit</option>
                                                    <option value="kredit">kredit<optional>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col">
                                                <label for="keterangan" class="form-label">keterengan</label>
                                                <textarea class="form-control" name="keterangan" rows="3"> - </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="buttpn" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>#PJ020324</td>
                      <td>penjualan</td>
                      <td>2022-03-20</td>
                      <td>Kas</td>
                      <td>Rp. 10.000.000</td>
                      <td>kredit</td>
                      <td>-</td>
                      <td>
                        <a href="#editJurnal" class="text-decoration-none" data-bs-toggle="modal">
                            <i class="bi bi-pencil-square text-success"></i>
                        </a>
                        <a href="" class="text-decoration-none">
                            <i class="bi bi-trash text-danger"></i>
                        </a>
                    </td>
                </tr>
        </tbody>
</div>
        
                      

                                
                                                

                                            
                                            

                            

                
            