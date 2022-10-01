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
            <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
            		
            <?php 			echo form_open_multipart('admin/web_setting/email_config_save','class="form-inner"') ?>
											<?php echo form_hidden('email_config_id',$config->email_config_id) ?>
												<div class="form-group row">
													<label for="address" class="col-xs-3 col-form-label">
														<?php echo display('protocal') ?>
													</label>
													<div class="col-xs-9">
														<input name="protocol" type="text" class="form-control" id="address" placeholder="<?php echo display('protocal') ?>" value="<?php echo @$config->protocol;?>"> </div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-xs-3 col-form-label">
														<?php echo display('mailpath') ?>
													</label>
													<div class="col-xs-9">
														<input name="mailpath" type="text" class="form-control" id="email" placeholder="<?php echo display('mailpath') ?>" value="<?php echo @$config->mailpath;?>"> </div>
												</div>
												<div class="form-group row">
													<label for="phone" class="col-xs-3 col-form-label">
														<?php echo display('Mail_type') ?>
													</label>
													<div class="col-xs-9">
														<input name="mailtype" type="text" class="form-control" id="mailtype" placeholder="<?php echo display('Mail_type') ?>" value="<?php echo @$config->mailtype;?>"> </div>
												</div>
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">
														<?php echo display('smtp_host') ?> : </label>
													<div class="col-xs-9">
														<input type="text" name="smtp_host" value="<?php echo @$config->smtp_host;?>" required="1" class="form-control"> </div>
												</div>
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">
														<?php echo display('smtp_post') ?> : </label>
													<div class="col-xs-9">
														<input type="text" name="smtp_port" value="<?php echo @$config->smtp_port;?>" required="1" class="form-control"> </div>
												</div>
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">
														<?php echo display('sender_email') ?> : </label>
													<div class="col-xs-9">
														<input type="text" name="sender" value="<?php echo @$config->sender;?>" required="1" class="form-control"> </div>
												</div>
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">
														<?php echo display('smtp_password') ?> : </label>
													<div class="col-xs-9">
														<input type="password" name="smtp_password" value="<?php echo @$config->smtp_password;?>" required="1" class="form-control"> </div>
												</div>
												<div class="form-group row">
													<label class="col-xs-3 col-form-label">
														<?php echo display('api_key') ?> : </label>
													<div class="col-xs-9">
														<input type="text" name="api_key" value="<?php echo @$config->api_key;?>" required="1" class="form-control"> </div>
												</div>
												<div class="form-group text-right">
													<button type="reset" class="btn btn-primary w-md m-b-5">
														<?php echo display('reset') ?>
													</button>
													<button type="submit" class="btn btn-success w-md m-b-5">
														<?php echo display('save') ?>
													</button>
												</div>
												<?php echo form_close() ?>
            </div>
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

    






