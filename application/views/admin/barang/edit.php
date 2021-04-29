<?php 
foreach($barang->result() as $data);
?>
<!-- Modal -->
<div class="modal fade" id="modedit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center">Edit Barang</h4>
            </div>
            <form method="post" action="<?php echo base_url('barang/edit'); ?>">
            <input type="hidden" name="id_barang" value="<?php echo $data->id_barang; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $data->nama_barang; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select class="form-control" name="jenis_barang">
                        <option <?php if($data->jenis_barang=='Alat Tulis'){ echo 'selected'; } ?>>Alat Tulis</option>
                        <option <?php if($data->jenis_barang=='Peralatan PC'){ echo 'selected'; } ?>>Peralatan PC</option>
                        <option <?php if($data->jenis_barang=='Kabel'){ echo 'selected'; } ?>>Kabel</option>
                        <option <?php if($data->jenis_barang=='Printer'){ echo 'selected'; } ?>>Printer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stok Barang</label>
                    <input type="number" name="stok_barang" class="form-control" value="<?php echo $data->stok_barang; ?>">
                </div>
                <div class="form-group">
                    <label>Satuan Barang</label>
                    <select class="form-control" name="satuan_barang">
                        <option <?php if($data->satuan_barang=='Pack'){ echo 'selected'; } ?>>Pack</option>
                        <option <?php if($data->satuan_barang=='Lusin'){ echo 'selected'; } ?>>Lusin</option>
                        <option <?php if($data->satuan_barang=='Biji'){ echo 'selected'; } ?>>Biji</option>
                        <option <?php if($data->satuan_barang=='Kardus'){ echo 'selected'; } ?>>Kardus</option>
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