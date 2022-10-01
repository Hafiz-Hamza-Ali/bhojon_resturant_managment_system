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
            		
                <?php 			
				echo form_open_multipart('admin/login/common_create','class="form-inner"') ?>
                    <?php echo form_hidden('id',$websetting->id) ?>
                    <div class="form-group row">
                        <label for="email" class="col-xs-3 col-form-label"><?php echo display('email')?></label>
                        <div class="col-xs-9">
                            <input name="email" type="text" class="form-control" id="email" placeholder="<?php echo display('email')?>"  value="<?php echo $websetting->email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-xs-3 col-form-label"><?php echo display('mobile') ?></label>
                        <div class="col-xs-9">
                            <input name="phone" type="text" class="form-control" id="phone" placeholder="<?php echo display('mobile') ?>"  value="<?php echo $websetting->phone ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone2" class="col-xs-3 col-form-label"><?php echo display('phone') ?></label>
                        <div class="col-xs-9">
                            <input name="phone2" type="text" class="form-control" id="phone2" placeholder="<?php echo display('phone') ?>"  value="<?php echo $websetting->phone_optional ?>" >
                        </div>
                    </div>

                    <!-- if setting logo is already uploaded -->
                    <?php if(!empty($websetting->logo)) {  ?>
                    <div class="form-group row">
                        <label for="logoPreview" class="col-xs-3 col-form-label"></label>
                        <div class="col-xs-9">
                            <img src="<?php echo base_url($websetting->logo) ?>" alt="Picture" class="img-thumbnail" />
                        </div>
                    </div>
                    <?php } ?>

                    <div class="form-group row">
                        <label for="logo" class="col-xs-3 col-form-label"><?php echo display('logo') ?></label>
                        <div class="col-xs-9">
                            <input type="file" name="logo" id="logo">
                            <input type="hidden" name="old_logo" value="<?php echo $websetting->logo ?>">
                        </div>
                    </div>
                    <?php if(!empty($websetting->logo_footer)) {  ?>
                    <div class="form-group row">
                        <label for="logoPreview" class="col-xs-3 col-form-label"></label>
                        <div class="col-xs-9">
                            <img src="<?php echo base_url($websetting->logo_footer) ?>" alt="Picture" class="img-thumbnail" />
                        </div>
                    </div>
                    <?php } ?>

                    <div class="form-group row">
                        <label for="logofooter" class="col-xs-3 col-form-label"><?php echo display('footer_logo') ?></label>
                        <div class="col-xs-9">
                            <input type="file" name="logofooter" id="logofooter">
                            <input type="hidden" name="old_footerlogo" value="<?php echo $websetting->logo_footer ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone2" class="col-xs-3 col-form-label"><?php echo display('webdisable') ?></label>
                        <div class="col-sm-9 customesl">
                            <select name="websiteonoff" class="form-control">
                                <option value=""><?php echo display('select_option') ?></option>
                                <option value="1" <?php if($websetting->web_onoff==1){ echo "selected";}?>><?php echo display('webon') ?></option>
                                <option value="0" <?php if($websetting->web_onoff==0){ echo "selected";}?>><?php echo display('weboff') ?></option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="membershipenable" class="col-xs-3 col-form-label"><?php echo display('membershipenable') ?></label>
                        <div class="col-sm-9 customesl">
                            <select name="membershipenable" class="form-control">
                                <option value=""><?php echo display('select_option') ?></option>
                                <option value="1" <?php if($websetting->ismembership==1){ echo "selected";}?>><?php echo display('active') ?></option>
                                <option value="0" <?php if($websetting->ismembership==0){ echo "selected";}?>><?php echo display('inactive') ?></option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-xs-3 col-form-label"><?php echo display('address') ?></label>
                        <div class="col-xs-9">                            
                            <textarea name="address" id="address" class="form-control tinymce2"  placeholder="<?php echo display('address') ?>"  rows="4"><?php echo $websetting->address ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="power_text" class="col-xs-3 col-form-label"><?php echo display('powered_by') ?></label>
                        <div class="col-xs-9">
                            <textarea name="power_text" class="form-control"  placeholder="Powered By Text" maxlength="140" rows="3"><?php echo $websetting->powerbytxt ?></textarea>
                        </div>
                    </div> 
                    <?php 	$scan = scandir('application/modules/');
							$qrm="";
							foreach($scan as $file) {
							   if($file=="qrapp"){
								   if (file_exists(APPPATH.'modules/'.$file.'/assets/data/env')){
								   $qrm=1;
								   }
								   }
							}
							if($qrm==1){
							?>
                    <div class="form-group row">
                    	<label for="qrbgcolor" class="col-xs-3 col-form-label">QR Header Color</label>
                    	<div class="col-xs-3">
                      		<input name="headercolor" class="form-control" type="color" value="<?php echo $websetting->backgroundcolorqr ?>" id="headercolor">
                        </div>
                        <label for="qrfontcolor" class="col-xs-3 col-form-label">QR Header Font Color</label>
                        <div class="col-xs-3">
                      		<input name="headerfontcolor" class="form-control" type="color" value="<?php echo $websetting->qrheaderfontcolor ?>" id="headerfontcolor">
                        </div>
                    </div>
                    
                    <?php } ?>
                    
                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
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

    






