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
				<li class="active">Master Novel</li>
			</ul><!-- /.breadcrumb -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">

			<div class="page-header">
				<h1>
					Master Novel
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						List Novel
					</small>
				</h1>
				<div class="pull-right">
					<a href="<?=base_url('mnovel/create')?>"> 
						<button class="btn btn-success">Input Baru</button>
					</a>
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
										<th>Judul</th>
										<th>Genre</th>
										<th>Status</th>
										<th>Tgl Publish</th>
										<th>Author</th>
										<th>Thumb</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($novel as $n): ?>
										<tr>
											<td class="center"><?= $no++?></td>

											<td><?= $n->novel_judul ?></td>
											<td><?= $n->novel_genre ?></td>
											<td><?= $n->novel_status ?></td>
											<td><?= $n->novel_tgl ?></td>
											<td><?= $n->author_id ?></td>
											<td></td>
											<td>
												<div class="hidden-sm hidden-xs btn-group">
													<a href="<?=base_url('mnovel/edit/').$n->novel_id?>">
														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>
													</a>
													<a href="<?=base_url('mnovel/detail/').$n->novel_id?>">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-list bigger-120"></i>
														</button>
													</a>

													<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('mnovel/hapus/'.$n->novel_id)?>">
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
																<a href="<?=base_url('mnovel/edit/').$n->novel_id?>" title="Edit">
																	<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																	</span>
																</a>
															</li>
															<li>
																<a href="<?=base_url('mnovel/detail/').$n->novel_id?>" title="Edit">
																	<span class="blue">
																		<i class="ace-icon fa fa-list bigger-120"></i>
																	</span>
																</a>
															</li>
															<li>
																<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('mnovel/hapus/'.$n->novel_id)?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="ace-icon fa fa-trash-o bigger-120"></i>
																	</span>
																</a>
															</li>
															
														</ul>
													</div>
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
