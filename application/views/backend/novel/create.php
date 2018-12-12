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
						Create Novel
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="row">
						<div class="col-xs-10">
							<form method="post" enctype="multipart/form-data" action="<?= base_url('mnovel/simpan') ?>">
								
								<div class="form-group">
									<label class="control-label">Judul</label>
									<div class="clearfix">
										<input type="text" name="judul" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Deskripsi</label>
									<div class="clearfix">
										<textarea class="form-control" rows="7" name="desc" required></textarea>
									</div>
								</div>		
								<div class="form-group">
									<label class="control-label">Status</label>
									<div class="clearfix">
										<select class="form-control" name="status">
											<option value="1">On Going</option>
											<option value="2">Tamat</option>
											<option value="3">Haiatus</option>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Genre</label>
									<div class="clearfix">
										<select class="form-control" name="genre">
											<option value="Mystery">Mystery</option>
											<option value="Slice Of Life">Slice Of Life</option>
											<option value="Horror">Horror</option>											
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Author</label>
									<div class="clearfix">
										<select class="form-control" name="author">
											<option value="">--pilih--</option>
											<?php foreach($author as $a): ?>
												<option value="<?= $a->author_id?>"><?= $a->author_username?></option>
											<?php endforeach ?>
										</select>

									</div>
								</div>								
								<div class="form-group">
									<label class="control-label">Cover</label>
									<div class="clearfix">
										<input type="file" name="file">
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-flat"><span class="fa fa-save"></span> Simpan</button>
									
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
