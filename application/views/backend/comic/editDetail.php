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
				<li class="active">Master comic</li>
			</ul><!-- /.breadcrumb -->

			<!-- /section:basics/content.searchbox -->
		</div>

		<!-- /section:basics/content.breadcrumbs -->
		<div class="page-content">

			<div class="page-header">
				<h1>
					Master comic
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Edit Chapter
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="row">
						<div class="col-xs-10">
							<form method="post" enctype="multipart/form-data" action="<?= base_url('mcomic/updateDetail') ?>">
								<input type="hidden" name="id" value="<?=$d->comic_id?>">
								<input type="hidden" name="idc" value="<?=$d->chapter_id?>">
								<div class="form-group">
									<label class="control-label">Judul</label>
									<div class="clearfix">
										<input type="text" name="judul" class="form-control" required value="<?=$d->chapter_judul?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">Content</label>
									<div class="clearfix">
										<textarea class="form-control" rows="7" name="content" required><?=$d->chapter_content?></textarea>
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
