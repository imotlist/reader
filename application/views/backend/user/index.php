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
							<li class="active">Master Hotel</li>
						</ul><!-- /.breadcrumb -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">

						<div class="page-header">
							<h1>
								Master User
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									List User
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
													Data User
												</div>
											</div>
											<form method="POST" action="<?= base_url('masteruser/simpan')?>" id="validation-form">
												<div class="modal-body">
													
													<div class="form-group">
														<label class="control-label" for="uname">Username</label>
														<div class="clearfix">
															<input type="text" name="uname" id="uname" class="form-control" placeholder="Username" required>
														</div>														
													</div>
													<div class="form-group">
														<label class="control-label" for="uname">Password</label>
														<span class="pull-right">
															<a href="#" onclick="showPass()" id="show">
																<i class="fa fa-eye"></i>
															</a>
															<a href="#" onclick="hidePass()" id="hide" style="display: none">
																<i class="fa fa-eye-slash"></i>
															</a>
														</span>
														<div class="clearfix">
															<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
														</div>														
													</div>
													<div class="form-group">
														<label class="control-label" for="uname">Level</label>
														<div class="clearfix">
															<input type="text" name="level" id="level" class="form-control" placeholder="Level User" required>
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
													<th>Username</th>
													<th>Password</th>
													<th>Level</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $no=1; foreach($user as $h): ?>
													<tr>
														<td class="center"><?= $no++?></td>

														<td><?= $h->username ?></td>
														<td><?= $h->password ?></td>
														<td><?= $h->level ?></td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<a href="#modal-edit<?=$h->id?>" role="button" class="green" data-toggle="modal">
																	<button class="btn btn-xs btn-info">
																		<i class="ace-icon fa fa-pencil bigger-120"></i>
																	</button>
																</a>

																<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('masteruser/hapus/'.$h->id)?>">
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
																			<a href="#modal-table<?=$h->id?>" role="button" data-toggle="modal" class="tooltip-success green" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		
																		<li>
																			<a onclick="return confirm('Hapus Data Ini ?')" href="<?=base_url('masteruser/hapus/'.$h->id)?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div>
															<div id="modal-edit<?=$h->id?>" class="modal fade" tabindex="-1">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<div class="table-header">
																				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																					<span class="white">&times;</span>
																				</button>
																				Edit Data User
																			</div>
																		</div>
																		<form method="POST" action="<?= base_url('masteruser/ubah')?>" id="validation-form">
																			<input type="hidden" name="id" value="<?=$h->id?>">
																			<div class="modal-body">
																				<div class="form-group">
																					<label class="control-label" for="uname">Username</label>
																					<div class="clearfix">
																						<input type="text" name="uname" id="uname" class="form-control" placeholder="Username" required value="<?=$h->username?>">
																					</div>														
																				</div>
																				<div class="form-group">
																					<label class="control-label" for="uname">Password</label>
																					<span class="pull-right">
																						<a href="#" onclick="showPass2(<?=$h->id?>)" id="show<?=$h->id?>">
																							<i class="fa fa-eye"></i>
																						</a>
																						<a href="#" onclick="hidePass2(<?=$h->id?>)" id="hide<?=$h->id?>" style="display: none">
																							<i class="fa fa-eye-slash"></i>
																						</a>
																					</span>
																					<div class="clearfix">
																						<input type="password" name="pass" id="pass<?=$h->id?>" class="form-control" placeholder="New Password">
																					</div>														
																				</div>
																				<div class="form-group">
																					<label class="control-label" for="uname">Level</label>
																					<div class="clearfix">
																						<input type="text" name="level" id="level" class="form-control" placeholder="Level User" required value="<?=$h->level?>">
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

<script type="text/javascript">
	function showPass(){
		document.getElementById('pass').type = 'text';
		document.getElementById('show').style.display = 'none';
		document.getElementById('hide').style.display = 'inline-block';
	}

	function hidePass(){
		document.getElementById('pass').type = 'password';
		document.getElementById('show').style.display = 'inline-block';
		document.getElementById('hide').style.display = 'none';
	}

	function showPass2(id){
		document.getElementById('pass'+id).type = 'text';
		document.getElementById('show'+id).style.display = 'none';
		document.getElementById('hide'+id).style.display = 'inline-block';
	}

	function hidePass2(id){
		document.getElementById('pass'+id).type = 'password';
		document.getElementById('show'+id).style.display = 'inline-block';
		document.getElementById('hide'+id).style.display = 'none';
	}

</script>
