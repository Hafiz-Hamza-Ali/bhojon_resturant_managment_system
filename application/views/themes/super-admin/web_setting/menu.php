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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

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
            <div class="row">
     <div class="col-sm-12 col-md-12">
         <div class="panel panel-bd ">
             <div class="panel-heading">
                 <div class="panel-title">
                     <h4><?php echo (!empty($title)?$title:null) ?></h4>
                 </div>
             </div>
             <div class="panel-body">
                      <?php echo  form_open('admin/login/createmenu',array('id'=>'menuurl')) ?>
                         <div class="form-group row">
                             <label for="menuname" class="col-sm-4 col-form-label"><?php echo display('menu_name') ?> *</label>
                             <div class="col-sm-8">
                                 <input name="menuname" id="menuname" class="form-control" type="text" placeholder="<?php echo display('menu_name') ?>">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="Menuurl" class="col-sm-4 col-form-label"><?php echo display('menu_url') ?></label>
                             <div class="col-sm-8">
                                 <input readonly="readonly" name="Menuurl" id="Menuurl" class="form-control" type="text" placeholder="<?php echo display('menu_url') ?>">
                             </div>
                         </div>
                         <div class="form-group row">
                         <label for="category" class="col-sm-4 col-form-label"><?php echo display('sub_menu') ?></label>
                         <div class="col-sm-8">
                         <select name="menuid" class="form-control" id="menuid">
                             <option value="" selected="selected"><?php echo display('sub_menu') ?></option> 
                             <?php foreach($allmenu as $menu){?>
                             <option value="<?php echo $menu->menuid;?>" class='bolden'><strong><?php echo $menu->menu_name;?></strong></option>
                                 <?php if(!empty($menu->sub)){
                                 foreach($menu->sub as $submenu){?>
                                 <option value="<?php echo $submenu->menuid;?>">&nbsp;&nbsp;&nbsp;&mdash;<?php echo $submenu->menu_name;?></option>
                             <?php } } } ?>
                         </select>
                         </div>
                     </div>
                         <div class="form-group row">
                         <label for="lastname" class="col-sm-4 col-form-label"><?php echo display('status') ?></label>
                         <div class="col-sm-8 customesl">
                             <select name="status" id="status"  class="form-control">
                                 <option value=""><?php echo display('select_option') ?></option>
                                 <option value="1" selected="selected"><?php echo display('active') ?></option>
                                 <option value="0"><?php echo display('inactive') ?></option>
                               </select>
                         </div>
                     </div>
                         <div class="form-group text-right menu_dashboard_display"  id="upbtn">
                             <button type="submit" class="btn btn-success w-md m-b-5" id="btnchnage"><?php echo display('Ad') ?></button>
                         </div>
                     <?php echo form_close() ?>
                     <table class="table table-bordered table-hover" id="RoleTbl">
                         <thead>
                             <tr>
                                 <th><?php echo display('sl_no') ?></th>
                                 <th><?php echo display('menu_name') ?></th>
                                 <th><?php echo display('menu_url') ?></th>
                                 <th><?php echo display('parent_menu') ?></th>
                                 <th><?php echo display('status') ?></th>
                                <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if (!empty($allmenu)){ ?>
                             <?php $sl = 1; ?>
                             <?php foreach ($allmenu as $value) { ?>
                             <tr>
                                 <td><?php echo $sl++; ?></td>
                                 <td><?php echo $value->menu_name; ?></td>
                                 <td><?php echo $value->menu_slug; ?></td>
                                 <td></td>
                                 <td><?php if($value->isactive==1){ echo "Active";}else{ echo "Inactive";} ?></td>
                                
                             </tr>
                             <?php if(!empty($value->sub)){
                                 foreach($value->sub as $submenu){?> 
                                     <tr>
                                 <td><?php echo $sl++; ?></td>
                                 <td><?php echo $submenu->menu_name; ?></td>
                                 <td><?php echo $submenu->menu_slug; ?></td>
                                 <td><?php echo $value->menu_name;?></td>
                                 <td><?php if($submenu->isactive==1){ echo "Active";}else{ echo "Inactive";} ?></td>
                                 <td>
                                    <a onclick="editmenu('<?php echo $value->menu_name; ?>','<?php echo $value->menu_slug; ?>','<?php echo $value->isactive; ?>',<?php echo $value->parentid; ?>,<?php echo $value->menuid; ?>)"  data-toggle="tooltip" data-placement="left" title="Update" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                	
                                </td>
                             </tr>
                                 <?php }}?>
                             
                             <?php  } }  ?>
                             
                         </tbody>
                     </table>
 
 
             </div>
         </div>
     </div>
 </div>	
                 		
         
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
        function editmenu(menuname,menuurl,status,parent,menuid){
           // alert(status)
	$("#menuname").val(menuname);
	$("#Menuurl").val(menuurl);
	$("#menuid").val(parent).trigger('change');
//	$("#status").select2("val", status);
	$("#btnchnage").text("Update");
	$("#upbtn").show();
    var base_url = window.location.origin;
	$('#menuurl').attr('action', base_url+"/sop/dashboard/web_setting/editmenu/"+menuid);
	}
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
<!-- <script src="<?php echo base_url('application/modules/dashboard/assest/js/banner.js'); ?>" type="text/javascript"></script> -->
    <script>
           setTimeout(function() { 
            $("[name='status']").on('change', function(){
                $values=$(".sel_val").val()
                $(".status_val").val($values);
                
            });
        }, 2000);
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

    






