<div class="container">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#modal_barang">
    <i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>Nama Barang</td>
                <td>Keterangan</td>
                <td colspan="3">Aksi</td>
            </tr>
        </table>
        <?= $this->pagination->create_links(); ?>
        
    <!-- Modal -->
	<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BARANG</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <?= form_open_multipart('dg_admin/data_barang/insert'); ?>
	        	<div class="form-group">
	        		<label>Nama Barang</label>
	        		<input type="text" name="nama_brg" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<input type="text" name="keterangan" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Kategori</label>
	        		<select class="form-control" name="kategori">
	        			<option>Pakaian Pria</option>
	        			<option>Accessories</option>
	        			<option>Shoes</option>
	        			<option>Kaset</option>
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" name="harga" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Stok</label>
	        		<input type="text" name="stok" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Gambar Produk</label>
	        		<input type="file" name="gambar" class="form-control">
	        	</div>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	        <?= form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>