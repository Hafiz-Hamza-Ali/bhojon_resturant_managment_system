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
				<div class="tables">
					<h2 class="title1">Tables</h2>				
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Products:</h4>
						<table class="table"> 
							<thead> 
								<tr> <th>#</th>
									<th>name</th>
									<th>Price</th> 
									<th>Category</th> 
								</tr> 
							</thead> 
						<tbody> 
						<?php foreach ($products as $item):?>
								<tr class="active"> 
									<th scope="row">1</th>
									<td><?php echo $item['name'] ;?></td> 
									<td><?php echo $item['price'] ;?></td> 
									<td><?php echo $item['category'] ;?></td> 
								</tr> 
						<?php endforeach;?>
								
								 </tbody> </table> 
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