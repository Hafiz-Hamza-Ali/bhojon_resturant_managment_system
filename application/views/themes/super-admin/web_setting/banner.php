<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/super-admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/super-admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url(); ?>assets/super-admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='<?php echo base_url(); ?>assets/super-admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="<?php echo base_url(); ?>assets/super-admin/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/super-admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="<?php echo base_url(); ?>assets/super-admin/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/super-admin/js/custom.js"></script>
<link href="<?php echo base_url(); ?>assets/super-admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
    <?php $this->load->view('themes/super-admin/sidebar.php'); ?>
	<?php $this->load->view('themes/super-admin/topbar.php'); ?>
	
	
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div id="add0" class="modal fade add0" role="dialog">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button> <strong><?php echo display('add_banner');?></strong> </div>
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<div class="panel">
										<div class="panel-body">
											<?php echo  form_open_multipart('admin/web_setting/add_banner') ?>
												<div class="form-group row">
													<label for="ptype" class="col-sm-4 col-form-label">
														<?php echo display('banner_type') ?> *</label>
													<div class="col-sm-8 customesl">
														<?php if(empty($type)){$type = array('' => '--Select--');}
						echo form_dropdown('banner_type',$type,(!empty($type->stype_id)?$type->stype_id:null),'class="form-control" id="ptype" required') ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="title" class="col-sm-4 col-form-label">
														<?php echo display('bannersize') ?> *</label>
													<div class="col-sm-3">
														<input name="width" class="form-control" type="number" placeholder="<?php echo display('width') ?>" required> </div>
													<div class="col-sm-1">X</div>
													<div class="col-sm-3">
														<input name="height" class="form-control" type="number" placeholder="<?php echo display('height') ?>" required> </div>
												</div>
												<div class="form-group row">
													<label for="title" class="col-sm-4 col-form-label">
														<?php echo display('title') ?> *</label>
													<div class="col-sm-8">
														<input name="title" class="form-control" type="text" placeholder="<?php echo display('title') ?>" id="suppliername" value=""> </div>
												</div>
												<div class="form-group row">
													<label for="subtitle" class="col-sm-4 col-form-label">
														<?php echo display('subtitle') ?> *</label>
													<div class="col-sm-8">
														<input name="subtitle" class="form-control" type="text" placeholder="<?php echo display('subtitle') ?>" id="email" value=""> </div>
												</div>
												<div class="form-group row">
													<label for="mobile" class="col-sm-4 col-form-label">
														<?php echo display('image') ?>
													</label>
													<div class="col-sm-8">
														<input type="file" accept="image/*" name="picture"><a class="cattooltipsimg" data-toggle="tooltip" data-placement="top" title="Use only .jpg,.jpeg,.gif and .png Image. full Size: 1920X902,thumbnail Size:263X332,263X177"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </div>
												</div>
												<div class="form-group row">
													<label for="url" class="col-sm-4 col-form-label">
														<?php echo display('link_url') ?> *</label>
													<div class="col-sm-8">
														<input name="url" class="form-control" type="text" placeholder="<?php echo display('link_url') ?>"> </div>
												</div>
												<div class="form-group row">
													<label for="lastname" class="col-sm-4 col-form-label">
														<?php echo display('status') ?> *</label>
													<div class="col-sm-8 customesl">
														<select name="status" class="form-control">
															<option value="" selected="selected">
																<?php echo display('select_option') ?>
															</option>
															<option value="1" selected="selected">
																<?php echo display('active') ?>
															</option>
															<option value="0">
																<?php echo display('inactive') ?>
															</option>
														</select>
													</div>
												</div>
												<div class="form-group text-right">
													<button type="reset" class="btn btn-primary w-md m-b-5">
														<?php echo display('reset') ?>
													</button>
													<button type="submit" class="btn btn-success w-md m-b-5">
														<?php echo display('Ad') ?>
													</button>
												</div>
												<?php echo form_close() ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer"> </div>
				</div>
			</div>
			<div id="edit" class="modal fade" role="dialog">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button> <strong><?php echo display('banner_edit');?></strong> </div>
						<div class="modal-body editbanner"> </div>
					</div>
					<div class="modal-footer"> </div>
				</div>
			</div>
			<div class="row" style=" padding-left: 14%; !important">
				<div class="col-sm-12 col-md-12">
					<div class="panel panel-bd ">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="btn-group pull-right" id="addbanner"> <a data-target="#add0" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus"></i> <?php echo display('add_banner')?></a> </div>
								<h4><?php echo (!empty($title)?$title:null) ?></h4> </div>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover" id="RoleTbl">
								<thead>
									<tr>
										<th>
											<?php echo display('sl_no') ?>
										</th>
										<th>
											<?php echo display('title') ?>
										</th>
										<th>
											<?php echo display('image') ?>
										</th>
										<th>
											<?php echo display('bannersize') ?>
										</th>
										<th>
											<?php echo display('status') ?>
										</th>
										<th>
											Action
										</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($baller_list)) ?>
										<?php $sl = 1; ?>
											<?php foreach ($baller_list as $value) { ?>
												<tr>
													<td>
														<?php echo $sl++; ?>
													</td>
													<td>
														<?php echo $value->title; ?>
													</td>
													<td><img src="<?php echo base_url(!empty($value->image)?$value->image:'assets/img/icons/default.jpg'); ?>" alt="Image" height="64"></td>
													<td>
														<?php echo display('width') ?>:
															<?php echo $value->width; ?> X
																<?php echo display('height') ?>:
																	<?php echo $value->height; ?>
													</td>
													<td>
														<?php if($value->status==1){echo display('active');}else{ echo display('inactive');} ?>
													</td>
													<td>
													<a href="<?php echo base_url("admin/login/delete_banner/$value->slid") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
													</td>
												</tr>
												<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div id="add0" class="modal fade in hiding addbanner" role="dialog" style="display: block;">
				<div class="modal-dialog modal-md" id="modals" style="display: none; !important">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">×</button> <strong id="banners_id">Add Banner</strong> </div>
						<div class="modal-body">
							<div class="row">
								<div class="col-sm-12 col-md-12">
									<div class="panel">
										<div class="panel-body">
											<form action="http://localhost/sop/dashboard/web_setting/create" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off">
												<input type="hidden" name="csrf_test_name" value="a5841ffee6a1b5723775721efe03b679" autocomplete="off">
												<div class="form-group row">
													<label for="ptype" class="col-sm-4 col-form-label">Banner Type *</label>
													<div class="col-sm-8 customesl">
														<select name="banner_type" class="form-control select2-hidden-accessible" id="ptype" required="" tabindex="-1" aria-hidden="true">
															<option value="" selected="selected">Name</option>
															<option value="1">Home Top Slider</option>
															<option value="2">Home our story</option>
															<option value="3">Home our menu</option>
															<option value="4">Menu Page right Banner</option>
															<option value="5">Classic theme Home story</option>
															<option value="6">Classic theme Home reservation</option>
															<option value="7">Classic theme Home gallery</option>
															<option value="8">Menu Page Offer Banner Right</option>
															<option value="9">Cart Page Offer Banner Right</option>
															<option value="10">Contact Us</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ptype-container"><span class="select2-selection__rendered" id="select2-ptype-container"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
														</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>
												<div class="form-group row">
													<label for="title" class="col-sm-4 col-form-label">Banner Size *</label>
													<div class="col-sm-3">
														<input name="width" class="form-control" type="number" placeholder="Width" required="" autocomplete="off"> </div>
													<div class="col-sm-1">X</div>
													<div class="col-sm-3">
														<input name="height" class="form-control" type="number" placeholder="Height" required="" autocomplete="off"> </div>
												</div>
												<div class="form-group row">
													<label for="title" class="col-sm-4 col-form-label">Title *</label>
													<div class="col-sm-8">
														<input name="title" class="form-control" type="text" placeholder="Title" id="suppliername" value="" autocomplete="off"> </div>
												</div>
												<div class="form-group row">
													<label for="subtitle" class="col-sm-4 col-form-label">Sub Title *</label>
													<div class="col-sm-8">
														<input name="subtitle" class="form-control" type="text" placeholder="Sub Title" id="email" value="" autocomplete="off"> </div>
												</div>
												<div class="form-group row">
													<label for="mobile" class="col-sm-4 col-form-label">Image </label>
													<div class="col-sm-8">
														<input type="file" accept="image/*" name="picture" autocomplete="off"><a class="cattooltipsimg" data-toggle="tooltip" data-placement="top" title="Use only .jpg,.jpeg,.gif and .png Image. full Size: 1920X902,thumbnail Size:263X332,263X177"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </div>
												</div>
												<div class="form-group row">
													<label for="url" class="col-sm-4 col-form-label">Link URL *</label>
													<div class="col-sm-8">
														<input name="url" class="form-control" type="text" placeholder="Link URL" autocomplete="off"> </div>
												</div>
												<div class="form-group row">
													<label for="lastname" class="col-sm-4 col-form-label">Status *</label>
													<div class="col-sm-8 customesl">
														<select name="status" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
															<option value="" selected="selected">Select Option</option>
															<option value="1" selected="selected">Active</option>
															<option value="0">Inactive</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-status-8h-container"><span class="select2-selection__rendered" id="select2-status-8h-container" title="Active"><span class="select2-selection__clear">×</span>Active</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
														</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>
												<div class="form-group text-right">
													<button type="reset" class="btn btn-primary w-md m-b-5">Reset</button>
													<button type="submit" class="btn btn-success w-md m-b-5">Add</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer"> </div>
				</div>
			</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <!-- <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p> -->
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='<?php echo base_url(); ?>assets/super-admin/js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $( document ).ready(function() {
            $(".addbanner").hide();
});
    //     $(document).on("click","#add0",function() {
    //         $("#modals").removeAttr("style");
    // });
    $(document).on("click",".close",function() {
        $("#modals").removeAttr("style");
        $(".hiding").removeAttr("style");
    });
    // $(document).on("click","#addbanner",function() {
    //     // alert();
    //     $("#modals").removeAttr("style");
    //     $(".addbanner").show();
    // });
    
        </script>
<script src="<?php echo base_url('application/modules/dashboard/assest/js/banner.js'); ?>" type="text/javascript"></script>
    <script>
			$('.valid').hide();
			$( "#store_id" ).submit(function( event ) {
				$('.valid').hide();
				//alert();
				let name=$('.name').val();
				let email=$('.email').val();
				let number=$('.number').val();
				let address=$('.address').val();
				let status=$('.status').val();
				
				if(!name)
				{
					//alert();
					$('.n-valid').show();
					return false;
				}

				if(!email)
				{
					//alert();
					$('.e-valid').show();
					return false;
				}

				if(!number)
				{
					//alert();
					$('.nu-valid').show();
					return false;
				}

				if(!address)
				{
					//alert();
					$('.a-valid').show();
					return false;
				}


				if(!status)
				{
					//alert();
					$('.s-valid').show();
					return false;
				}				

				
			});
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url(); ?>assets/super-admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="<?php echo base_url(); ?>assets/super-admin/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>assets/super-admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>assets/super-admin/js/bootstrap.js"> </script>
	
</body>
</html>

    



