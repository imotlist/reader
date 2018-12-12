<div class="main-content">
	<div class="main-content-inner">
		<!-- #section:basics/content.breadcrumbs -->
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Admin</a>
				</li>
				<li class="active">Tambah Stok Gudang</li>
			</ul><!-- /.breadcrumb -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">

			<div class="page-header">
				<h1>
					Gudang
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Stok Barang
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<?php if($this->session->flashdata('berhasil')): ?>
						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<?= $this->session->flashdata('berhasil') ?>
						</div>
					<?php endif; ?>

					<?php if($this->session->flashdata('gagal')): ?>
						<div class="alert alert-block alert-danger">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<?= $this->session->flashdata('gagal') ?>
						</div>
					<?php endif; ?>

					<div class="row">
						<div class="col-xs-12">
							<form method="POST" action="<?= base_url('stokgudang/instok')?>" id="validation-form">
									<div class="modal-body">
										<div class="form-group">
											<div class="col-md-3">
												<label class="control-label">Gudang</label>
												<div class="clearfix">
													<select name="gudang_id" class="form-control" id="gudang_id">
															<option value="0">--Pilih Gudang--</option>
														<?php foreach($gudang as $g): ?>
															<option value="<?=$g->gudang_id?>"><?=$g->gudang_nama?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
											<div class="col-md-3">
												<label class="control-label">Barang</label>
												<div class="clearfix">
													<select name="barang_id" class="form-control" id="barang_id">
															<option value="0">--Pilih Barang--</option>
													</select>
												</div>
											</div>
											<div class="col-md-3">
												<label class="control-label" for="stok">Stok Awal</label>
												<div class="clearfix">
													<input type="text" name="stok" id="stok" class="form-control" placeholder="Stok Saat Ini ..." readonly>
												</div>	
											</div>
											<div class="col-md-3">
												<label class="control-label" for="qty">Stok Masuk</label>
												<div class="clearfix">
													<input type="number" name="qty" id="qty" class="form-control" placeholder="Jumlah Stok Masuk ..." required>
												</div>		
											</div>
											<br>
											<div class="col-md-6" style="margin-top: 50px">
												<button type="submit" class="btn btn-sm btn-success">
													<i class="ace-icon fa fa-save"></i>
													Simpan
												</button>
											</div>
										</div>
																							
									</div>
								</form>
						</div><!-- /.span -->
					</div><!-- /.row -->
					<!-- #section:custom/extra.hr -->

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script type="text/javascript">

	$(function(){

		$.ajaxSetup({
			type:"POST",
			url: "<?= base_url('stokgudang/ambil_data') ?>",
			cache: false,
		});

		$("#gudang_id").change(function(){

			var value=$(this).val();
			if(value>0){
			$.ajax({
			data:{mod:'gudang',id:value},
			success: function(respond){
				$("#barang_id").html(respond);
				console.log(respond);
			}

			})
			}

		});

		$("#barang_id").change(function(){

			var value=$(this).val();
			var idg = $('#gudang_id').val();
			if(value>0){
			$.ajax({
			data:{mod:'barang',id:value,idg:idg},
			success: function(respond){
				$("#stok").val(respond);
				console.log(respond);
			}

			})
			}

		});

	})

</script>