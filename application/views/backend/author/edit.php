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
				<li class="active">Master Author</li>
			</ul><!-- /.breadcrumb -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">

			<div class="page-header">
				<h1>
					Master Author
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Edit Author
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="row">
						<div class="col-xs-10">
							<form method="post" enctype="multipart/form-data" action="<?= base_url('masterauthor/update') ?>">
								<input type="hidden" name="id" value="<?=$d->author_id?>">
								<div class="form-group">
									<label class="control-label">Username</label>
									<div class="clearfix">
										<input type="text" name="user" class="form-control" value="<?=$d->author_username?>" readonly>
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label">Email</label>
									<div class="clearfix">
										<input type="email" name="email" class="form-control" value="<?=$d->author_email?>">
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label">Full Name</label>
									<div class="clearfix">
										<input type="text" name="full" class="form-control" value="<?=$d->author_full_name?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Nick Name</label>
									<div class="clearfix">
										<input type="text" name="nick" class="form-control" value="<?=$d->author_nickname?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Birthdate</label>
									<div class="clearfix">
										<input type="date" name="tgl" class="form-control" value="<?=$d->author_birthdate?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Gender</label>
									<div class="clearfix">
										<select class="form-control" name="gender">
											<option value="L">Laki - Laki / Male</option>
											<option value="P">Perempuan / Female</option>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="control-label" for="stok">Profile</label>
									<div class="clearfix">
										<input type="file" name="file">
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-flat"><span class="fa fa-save"></span> Ubah</button>
									
								</div>
							</form>
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
