<?php echo form_open_multipart(base_url('admin/kategori_fasilitas/edit/'.$kategori_fasilitas->id_kategori_fasilitas)) ?>

<div class="form-group row">
	<label class="col-3">Nama &amp; Status</label>
	<div class="col-6">
		<input type="text" name="nama_kategori_fasilitas" class="form-control" placeholder="Nama kategori fasilitas" value="<?php echo $kategori_fasilitas->nama_kategori_fasilitas ?>" required>
		<small class="text-secondary">Nama Kategori Fasilitas</small>
	</div>
	<div class="col-3">
		<select name="status_kategori_fasilitas" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft" <?php if($kategori_fasilitas->status_kategori_fasilitas=="Draft") { echo 'selected'; } ?>>Draft</option>
		</select>
		<small class="text-secondary">Status Kategori Fasilitas</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Gambar/ Logo</label>
	
	<div class="col-8">
		<input type="file" name="gambar" class="form-control" placeholder="Gambar/ Logo" value="<?php echo $kategori_fasilitas->gambar ?>">
	</div>
	<div class="col-1">
		<?php if($kategori_fasilitas->gambar=="") { echo '-'; }else{ ?>
					<img src="<?php echo base_url('assets/upload/image/thumbs/'.$kategori_fasilitas->gambar) ?>" class="img img-thumbnail">
				<?php } ?>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Keterangan</label>
	<div class="col-9">
		<textarea name="keterangan" placeholder="Keterangan" class="form-control"><?php echo $kategori_fasilitas->keterangan ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Urutan</label>
	<div class="col-9">
		<input type="number" name="urutan" class="form-control" placeholder="Nomor urut tampil" value="<?php echo $kategori_fasilitas->urutan ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<a href="<?php echo base_url('admin/kategori_fasilitas/') ?>" class="btn btn-default">
			<i class="fa fa-arrow-left"></i> Kembali
		</a>
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>


<?php echo form_close(); ?>