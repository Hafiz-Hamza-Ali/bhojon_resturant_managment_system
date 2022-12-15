<style>
    .sidebar-menu > li > a > .fa {
     width:14px !important;
    }
</style>
<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
	<aside class="sidebar-left">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>admin/dashboard">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-th"></i>
					<span style="font-size:13px;">User Management</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>admin/view/users"><i class="fa fa-angle-right"></i>View Users</a></li>
					<!-- <li><a href="<?php echo base_url(); ?>admin/roles/add"><i class="fa fa-angle-right"></i>Add Roles</a></li> -->
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-laptop"></i>
					<span>Store Management</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>admin/store/create"><i class="fa fa-angle-right"></i> Create Store</a></li>
					<li><a href="<?php echo base_url(); ?>admin/store/list"><i class="fa fa-angle-right"></i> All Stores</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-pie-chart"></i>
					<span style="font-size:13px;">Subscriptions Management</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>admin/subscription/list"><i class="fa fa-angle-right"></i>Subscription Authority</a></li>
					<li><a href="<?php echo base_url(); ?>admin/login/payments"><i class="fa fa-angle-right"></i>Payment Options</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-pie-chart"></i>
					<span style="font-size:13px;">Products</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>/admin/products"><i class="fa fa-angle-right"></i>Products</a></li>
					<!-- //<li><a href="<?php echo base_url(); ?>#"><i class="fa fa-angle-right"></i>Payment Options</a></li> -->
					</ul>
				</li>
				<li class="treeview">
            <a href="#">
                <i class="ti-settings"></i><span>Web Setting</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
			<li><a href="<?php echo base_url(); ?>admin/login/payment_view">Payment Setting</a></li>
                <li><a href="<?php echo base_url(); ?>admin/login/common_view">Common Setting</a></li>
                <!-- <li><a href="http://localhost/sop/dashboard/web_setting/storetime">Manage Store Time</a></li> -->
                <li><a href="<?php echo base_url(); ?>admin/login/web_view">Banner Setting</a></li>
                <li><a href="<?php echo base_url(); ?>admin/login/menusetting">Menu Setting</a></li>
                <!--<li><a href=""></a></li>
                <li><a href=""></a></li>-->
                <!-- <li><a href="http://localhost/sop/dashboard/web_setting/seosetting">SEO Setting</a></li>
                <li><a href="http://localhost/sop/dashboard/web_setting/socialtting">Social Setting</a></li>
                <li><a href="http://localhost/sop/dashboard/web_setting/widgetsetting">Widget Setting</a></li> -->
                <li><a href="<?php echo base_url(); ?>admin/web_setting/email_config_setup">Email Setting</a></li> 
                <!-- <li><a href="http://localhost/sop/dashboard/rating">Customer Rating</a></li>
                <li><a href="http://localhost/sop/dashboard/couponlist">Coupon List</a></li>
 			    <li><a href="http://localhost/sop/dashboard/web_setting/subscribeList">Subscribe List</a></li>  -->
            </ul>
        </li>
				
				<!-- <li class="treeview">
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-laptop"></i>
					<span>UI Elements</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>assets/super-admin/general.html"><i class="fa fa-angle-right"></i> General</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>assets/super-admin/widgets.html">
					<i class="fa fa-th"></i> <span>Widgets</span>
					<small class="label pull-right label-info">08</small>
					</a>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-edit"></i> <span>Forms</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>assets/super-admin/forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-table"></i> <span>Tables</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>assets/super-admin/tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-envelope"></i> <span>Mailbox </span>
					<i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>assets/super-admin/inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="<?php echo base_url(); ?>#">
					<i class="fa fa-folder"></i> <span>Examples</span>
					<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
					<li><a href="<?php echo base_url(); ?>assets/super-admin/login.html"><i class="fa fa-angle-right"></i> Login</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
					<li><a href="<?php echo base_url(); ?>assets/super-admin/blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
					</ul>
				</li>
				<li class="header">LABELS</li>
				<li><a href="<?php echo base_url(); ?>#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
				<li><a href="<?php echo base_url(); ?>#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
				<li><a href="<?php echo base_url(); ?>#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
				</ul> -->
			</div>
			<!-- /.navbar-collapse -->
		</nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->