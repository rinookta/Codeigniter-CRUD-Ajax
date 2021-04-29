<!-- Modal -->
<div class="modal fade" id="modtambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center">Tambah Barang</h4>
            </div>
            <form method="post" action="<?php echo base_url('barang/tambah'); ?>">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select class="form-control" name="jenis_barang">
                        <option>Alat Tulis</option>
                        <option>Peralatan PC</option>
                        <option>Kabel</option>
                        <option>Printer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="number" name="stok_barang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Satuan Barang</label>
                    <select class="form-control" name="satuan_barang">
                        <option>Pack</option>
                        <option>Lusin</option>
                        <option>Biji</option>
                        <option>Kardus</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-sm">Simpan</button>
                <a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
            </div>
            </form>
        </div><!-- // .c-modal__content -->
    </div><!-- // .c-modal__dialog -->
</div><!-- // .c-modal -->