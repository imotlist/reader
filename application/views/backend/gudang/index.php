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
				<li class="active">Gudang</li>
			</ul><!-- /.breadcrumb -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">

			<div class="page-header">
				<h1>
					Master Gudang
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						List Gudang
					</small>
				</h1>
				<div class="pull-right">
					<a href="#modal-table" role="button" class="green" data-toggle="modal"> 
						<button class="btn btn-success">Input Baru</button>
					</a>
					<div id="modal-table" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											<span class="white">&times;</span>
										</button>
										Data Gudang
									</div>
								</div>
								<form method="POST" action="<?= base_url('gudang/simpan')?>" id="validation-form">
									<div class="modal-body">
										
										<div class="form-group">
											<label class="control-label" for="nama">Gudang</label>
											<div class="clearfix">
												<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Gudang ..." required>
											</div>
										</div>												
									</div>
									<div class="modal-footer no-margin-top">
										<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
											<i class="ace-icon fa fa-times"></i>
											Tutup
										</button>
										<button type="submit" class="btn btn-sm btn-success pull-right">
											<i class="ace-icon fa fa-save"></i>
											Simpan
										</button>
									</div>
								</form>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div>
				</div>
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
							<table id="simple-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center" width="30">No</th>
										<th>Gudang</th>
										<th width="200">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($gudang as $h): ?>
										<tr>
											<td class="center"><?= $no++?></td>

											<td><?= $h->gudang_nama ?></td>
											<td>
												<div class="hidden-sm hidden-xs btn-group">
													<a href="#modal-edit<?=$h->gudang_id?>" role="button" class="green" data-toggle="modal">
														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>
													</a>
													<a href="<?= base_url('gudang/gudang_detail/'.$h->gudang_id)?>">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-list bigger-120"></i>
														</button>
													</a>

													<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('gudang/hapus/'.$h->gudang_id)?>">
														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>
													</a>
												</div>

												<div class="hidden-md hidden-lg">
													<div class="inline pos-rel">
														<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
															<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
															
															<li>
																<a href="#modal-edit<?=$h->gudang_id?>" role="button" data-toggle="modal" class="tooltip-success green" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																	</span>
																</a>
															</li>
															<li>
																<a href="<?= base_url('gudang/gudang_detail/'.$h->gudang_id)?>" title="detail">
																	<span class="blue">
																		<i class="ace-icon fa fa-list bigger-120"></i>
																	</span>
																</a>
															</li>
															
															<li>
																<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('gudang/hapus/'.$h->gudang_id)?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="ace-icon fa fa-trash-o bigger-120"></i>
																	</span>
																</a>
															</li>
															
														</ul>
													</div>
												</div>
												<div id="modal-edit<?=$h->gudang_id?>" class="modal fade" tabindex="-1">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<div class="table-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																		<span class="white">&times;</span>
																	</button>
																	Edit Data Gudang
																</div>
															</div>
															<form method="POST" action="<?= base_url('gudang/ubah')?>" id="validation-form">
																<input type="hidden" name="id" value="<?=$h->gudang_id?>">
																<div class="modal-body">
																	
																	<div class="form-group">
																		<label class="control-label" for="nama">Gudang</label>
																		<div class="clearfix">
																			<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Gudang ..." required value="<?=$h->gudang_nama?>">
																		</div>
																	</div>														
																</div>
																<div class="modal-footer no-margin-top">
																	<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
																		<i class="ace-icon fa fa-times"></i>
																		Tutup
																	</button>
																	<button type="submit" class="btn btn-sm btn-success pull-right">
																		<i class="ace-icon fa fa-save"></i>
																		Ubah
																	</button>
																</div>
															</form>
														</div><!-- /.modal-content -->
													</div><!-- /.modal-dialog -->
												</div>

											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<div>
								
									<?php 
							          echo $this->pagination->create_links();
							        ?>
							    
							</div>
						</div><!-- /.span -->
					</div><!-- /.row -->

					<!-- #section:custom/extra.hr -->
					<div class="hr hr32 hr-dotted"></div>


					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
