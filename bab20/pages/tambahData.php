<div class="col-12 col-sm-12 col-md-9 shadow-sm bg-white p-4 h-100">
	<div id="myTabContent" class="tab-content">
		<div id="orders" role="tabpanel" aria-labelledby="orders-tab" class="tab-pane  fade  active show">
			<h3 class="font-weight-bold mb-3 text-primary text-center">Tambah Master Buku Baru</h3> 
			<hr class="mb-3"> 
			<form novalidate="novalidate" method="POST" enctype="multipart/form-data">
				<div class="bg-white card mb-2 order-list shadow-sm">
					<div class="gold-members p-4">
						<div class="form-group mb-3">
							<label for="" class="mb-1">Nama Buku : </label> 
							<div class="input-group flex-nowrap">
							  <span class="input-group-text"><i class="fas fa-book"></i></span>
							  <input type="text" class="form-control" name="nama_buku" placeholder="Nama Buku" aria-label="Nama Buku" aria-describedby="addon-wrapping">
							</div>
						</div>
						
						<div class="form-group mb-3">
							<label for="" class="mb-1">Satuan : </label> 
							<div class="input-group">
							  <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-check"></i></label>
							  <select name="satuan" class="form-select" id="inputGroupSelect01">
							    <option selected>Pilih...</option>
							    <option value="pcs">pcs</option>
							    <option value="pack">pack</option>
							  </select>
							</div>

						</div>

						<div class="form-group mb-3">
							<label for="" class="mb-1">Harga Satuan : </label> 
							<div class="input-group flex-nowrap">
							  <span class="input-group-text"><i class="fas fa-hand-holding-usd"></i></span>
							  <input type="text" class="form-control" name="harga" placeholder="Rp." aria-label="Rp." aria-describedby="addon-wrapping">
							</div>
						</div>

						<div class="form-group mb-3">
							<label for="" class="mb-1">Gambar : </label> 
							<div class="input-group">
							  <label class="input-group-text" for="inputGroupFile01"><i class="fas fa-upload"></i></label>
							  <input type="file" class="form-control" name="gambar">
							</div>

						</div>

						<div class="form-group mb-3">
							<label for="" class="mb-1">Deskripsi : </label> 
							  <textarea class="form-control" name="deskripsi" rows="3"></textarea>
						</div>
							

						<div class="form-group mb-3">
						<div class="d-grid gap-2 d-md-flex justify-content-md-end">
							<a href="index.php" class="btn btn-md btn-dark router-link-active"><i class="fa fa-times"></i> Cancel</a> 
							<button type="submit" name="submit" class="btn btn-sm btn-success float-right"><i class="fa fa-check"></i> Save</button>
						</div>
						</div>

					</div> 
				</form>
			</div>
	</div>
</div>