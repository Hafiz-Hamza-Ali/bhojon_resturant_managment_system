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

		<!--left-fixed -navigation-->
		
		<!-- header-starts -->

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Create Store</h2>


					<div class="row">
						<!-- <h3 class="title1">General Form :</h3> -->
						<div class="" style="margin-left: 21%;">
                         <?php echo form_open('admin/login/post','id="store_id" novalidate'); ?>  
							<form class="form-horizontal" data-toggle="validator" role="form" id="store_id"action="<?php echo base_url(); ?>admin/login/post" method="post">
								<div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Name</label> -->
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control input-lg name" id="focusedinput" placeholder="Enter Store Name" style="margin-bottom: 50px;" required='required'>
									</div>
									<div class="col-sm-2 valid n-valid">
										<p class="help-block margin-bottom: 50px;" style="color: red;">Name Field is required</p>
									</div>
								</div>
                                <div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Email</label> -->
									<div class="col-sm-8">
										<input type="email" name="email" class="form-control input-lg email" id="focusedinput" placeholder="Enter Store Email" style="margin-bottom: 50px;">
									</div>
									<div class="col-sm-2 valid e-valid" >
										<p class="help-block margin-bottom: 50px;"  style="color: red;">Email Field is required</p>
									</div>
								</div>
                                <div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Number</label> -->
									<div class="col-sm-8">
										<input type="text" name="number" class="form-control input-lg number" id="focusedinput" placeholder="Enter Store Number" style="margin-bottom: 50px;">
									</div>
									<div class="col-sm-2 valid nu-valid">
										<p class="help-block margin-bottom: 50px;"  style="color: red;">Number Field is required</p>
									</div>
								</div>
                                <div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Address</label> -->
									<div class="col-sm-8 ">
										<input type="text" name="address" class="form-control input-lg address" id="focusedinput" placeholder="Enter Store Address" style="margin-bottom: 50px;">
									</div>
									<div class="col-sm-2 valid a-valid">
										<p class="help-block margin-bottom: 50px;"  style="color: red;">Address Field is required</p>
									</div>
								</div>
                                <!-- <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Id</label>
									<div class="col-sm-8">
										<input type="hidden" name="category_id" class="form-control input-lg" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>      -->
                                <div class="form-group">
									<!-- <label for="focusedinput" class="col-sm-2 control-label">Status</label> -->
									<!-- <label for="selector1" class="col-sm-2 control-label">Dropdown Select</label> -->
									<div class="col-sm-8"><select name="status" id="selector1" class="form-control input-lg status" style="margin-bottom: 50px;">
									<option disabled selected>Status</option>
										<option value="1" >Active</option>
										<option value="0">Inactive</option>
									</select></div>
									<div class="col-sm-2 valid s-valid">
										<p class="help-block margin-bottom: 50px;"  style="color: red;">Status Field is required</p>
									</div>
								</div>                           
								
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">       </label>
									<div class="col-sm-8">
                                        <!-- <button class="col-sm-2 control-label label-input-lg" type="submit">Submit</button> -->
										<input type="submit" class="form-control input-lg btn-primary input-sm" id="largeinput" placeholder="Large Input">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2022 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='<?php echo base_url(); ?>assets/super-admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<!-- <script>
        $('#store_id').submit(function(e) {
        e.preventDefault();


    //    var title = $("input[name='title']").val();
    //    var description = $("textarea[name='description']").val();

    var data=$('#store_id').serialize();
    console.log(data);
        $.ajax({
           url: '/sop/admin/store/post',
           type: 'POST',
           data: {data: data},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
                $("tbody").append("<tr><td>"+title+"</td><td>"+description+"</td></tr>");
                alert("Record added successfully");  
           }
        });


    });

      $('.sidebar-menu').SidebarNav()
    </script> -->
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->

		<script src="<?php echo base_url(); ?>assets/super-admin/js/classie.js"></script>
			<!--scrolling js-->
	
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
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<script src="<?php echo base_url(); ?>assets/super-admin/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>assets/super-admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>assets/super-admin/js/bootstrap.js"> </script>
	
</body>
</html>