 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>BOSCA PORT QR SYSTEM :: Sales Report</title>

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="http://localhost/bhojon_resturant_managment_system/assets/img/icons/m.png" type="image/x-icon">


<!-- Start Global Mandatory Style -->
<!-- jquery-ui css -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap tag input-->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<!-- Bootstrap rtl -->

<!-- Lobipanel css -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/lobipanel.min.css" rel="stylesheet" type="text/css"/>
<!-- Pace css -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/flash.css" rel="stylesheet" type="text/css"/>

<link href="http://localhost/bhojon_resturant_managment_system/assets/css/all.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css"/>

<!-- Font Awesome -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

<!-- Pe-icon -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
<!-- Themify icons -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/themify-icons.css" rel="stylesheet" type="text/css"/>
<!-- select2.min -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/select2.min.css" rel="stylesheet" type="text/css"/>
<!-- timepicker -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/jquery-ui-timepicker-addon.min.css" rel="stylesheet" type="text/css"/>
<!-- datatable -->
<link href="http://localhost/bhojon_resturant_managment_system/assets/datatables/css/dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/toastr/toastr.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/kitchen.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/print.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/extra.css" rel="stylesheet" type="text/css" />
<!-- End Global Mandatory Style

<!- Theme style --> 
<link href="http://localhost/bhojon_resturant_managment_system/assets/css/custom.min.css" rel="stylesheet" type="text/css"/>

<!-- Theme style rtl -->

<!-- Include module style -->
<link href=http://localhost/bhojon_resturant_managment_system/application/modules/accounts/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/addon/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/androidpos/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/facebooklogin/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/hrm/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/itemmanage/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/ordermanage/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/production/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/purchase/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/qrapp/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/report/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/reservation/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/role/assets/css/style.css rel="stylesheet"><link href=http://localhost/bhojon_resturant_managment_system/application/modules/setting/assets/css/style.css rel="stylesheet">

<!-- jQuery -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>


        <style>
        .loading:after {
  content: ' .';
  animation: dots 1s steps(5, end) infinite;}
        @keyframes dots {
  20%, 20% {
    color: rgba(0,0,0,1);
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  40% {
    color: #F00;
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  60% {
    text-shadow:
      .25em 0 0 #F00,
      .5em 0 0 rgba(0,0,0,0);}
  80%, 100% {
    text-shadow:
      .25em 0 0 #666,
      .5em 0 0 #666;}}
       
        </style>
    </head>

    <body class="hold-transition sidebar-mini ">
        <!-- Site wrapper -->
       
        <div class="wrapper">
        <script>
        $(document).ready(function()
        {
            
            setTimeout(function () {
                $('.page-loader-wrapper').fadeOut();
            }, 2000);
            
        });
        
        </script>
            <header class="main-header"> 
                <a href="http://localhost/bhojon_resturant_managment_system/dashboard/home" class="logo"> 
    <span class="logo-lg">
        <img src="http://localhost/bhojon_resturant_managment_system/assets/img/icons/2022-05-31/c1.jpg" alt="">
    </span>
</a>
<style>
    @keyframes anim_opa {
      50%  {opacity: 0.2}
    }
    .navbar-nav li .lang_box{
        line-height: 36px;
        color: #374767;
    }
    .navbar-nav li .lang_options{
        min-width: 90px;    
    }
</style>
<!-- Header Navbar -->
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="pe-7s-keypad"></span>
    </a>
    <span class="top-fixed-link">
    </span>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Order Alert -->
                         <li><a id="fullscreen" href="#" class="getid1"><i class="pe-7s-expand1"></i></a></li>
            <li class="dropdown messages-menu">
          
                <a href="http://localhost/bhojon_resturant_managment_system/reservation/reservation" class="dropdown-toggle">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success reservenotif">0</span>
                </a>
                <input name="csrfres" id="csrfresarvation" type="hidden" value="csrf_test_name" />
                <input name="csrfhash" id="csrfhashresarvation" type="hidden" value="636ed97d31f7133f3750640828f57e55" />
            </li> 
            <!-- Messages -->
            
            <!-- settings -->
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/home/profile"><i class="pe-7s-users"></i> Profile</a></li>
                    <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/home/setting"><i class="pe-7s-settings"></i> Setting</a></li>
                    <li><a href="http://localhost/bhojon_resturant_managment_system/logout"><i class="pe-7s-key"></i>  Logout</a></li>
                                    </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle lang_box" data-toggle="dropdown"> ENG</a>
                <ul class="dropdown-menu lang_options">
                                        <li><a href="javascript:;" onclick="addlang(this)" data-url="http://localhost/bhojon_resturant_managment_system/hungry/setlangue/english">
                        English</a></li>
                                    </ul>
            </li>
        </ul>
    </div>
</nav>            </header>

 
            <!-- Left side column. contains the sidebar -->
                         <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
    <!-- Sidebar user panel -->?
    <div class="user-panel text-center">
        <div class="image">
                        <img src="http://localhost/bhojon_resturant_managment_system/./assets/img/user/ckh_300x300.png" class="img-circle" alt="User Image">
        </div>
        <div class="info">
            <p>FARIZAL  MUSTAFFA</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
        </div>
    </div> 


    <!-- sidebar menu -->
    <ul class="sidebar-menu">

        <li class="treeview ">
            <a href="http://localhost/bhojon_resturant_managment_system/dashboard/home"><i class="ti-home"></i> <span>Dashboard</span> 
            </a>
        </li>



        <!-- *************************************
        **********STATS OF CUSTOM MODULES*********
        ************************************* -->
        
<li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-shopping-cart' aria-hidden='true'></i> <span>Roles</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                  
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/dashboard/home/role">Role List</a>
                                </li>
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/dashboard/home/rolelist">Add Role</a>
                                </li>

                           

                        <!-- endforeach -->
                       
                    </ul>
                </li> 

                <li class="treeview">
                    
                    <a href="javascript:void(0)">
                        <i class="fa fa-first-order" aria-hidden="true"></i> <span>Stores</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/stores/Store/add">Add Store</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/stores/Store/index">Store List</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li>
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-first-order' aria-hidden='true'></i> <span>Manage Order</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/pos_invoice">POS Invoice</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/orderlist">Order List</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/pendingorder">Pending Order</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/completelist">Complete Order</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/cancellist">Cancel Order</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/allkitchen">Kitchen Dashboard</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/counterboard">Counter Dashboard</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/counterlist">Counter List</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/possetting">POS Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/ordermanage/order/soundsetting">Sound Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-tags' aria-hidden='true'></i> <span>Reservation</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/reservation/reservation/index">Reservation</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/reservation/reservation/tablebooking">Add Booking</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/reservation/reservation/unavailablelist">Unavailable Day</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/reservation/reservation/setting">Reservation Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-shopping-cart' aria-hidden='true'></i> <span>Purchase Manage</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/purchase/index">Purchase Item</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/purchase/create">Add Purchase</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/purchase/return_form">Purchase Return</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/purchase/return_invoice">Return Invoice</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/supplierlist/index">Supplier Manage</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/supplierlist/supplier_ledger_report">Supplier Ledger</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/purchase/purchase/stock_out_ingredients">Stock Out Ingredients</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-line-chart' aria-hidden='true'></i> <span>Report</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/index">Purchase Report</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/productwise">Stock Report (Food Items)</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/ingredientwise">Stock Report (Kitchen)</a>
                                </li>

                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Sales Report                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrpt">Sales Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrptItems">Items Sales Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/servicerpt">Service Charge Report </a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrptwaiter">Waiters Sales Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/kichansrpt">Kitchen Sales Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrptdelvirytype">Delivery Type Sales Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrptCasher">Sale Report Cashier</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/cashregister">Cash Register Report</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrpt2">Sale Report Filtering</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrptbydate">Sale By Date</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/payroll_commission">Commission</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/table_sale">Sale By Table</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-cube' aria-hidden='true'></i> <span>Food Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Manage Category                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_category/create">Add Category</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_category/index">Category List</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Manage Food                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/create">Add Food</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/index">Food List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/addgroupfood">Add Group Item</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/foodvarientlist">Food Variant</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/availablelist">Food Availability</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/item_food/todaymenutype">Menu Type</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Manage Add-ons                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/menu_addons/create">Add Add-ons</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/menu_addons/index">Add-ons List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/itemmanage/menu_addons/assignaddons">Add-ons Assign List</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-product-hunt' aria-hidden='true'></i> <span>Production</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/production/production/productionunit">Set Production Unit</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/production/production/index">Production Set List</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/production/production/create">Add Production</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/production/production/possetting">Production Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-gear' aria-hidden='true'></i> <span>Setting</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Payment Method Setting                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/paymentmethod/index">Payment Method List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/paymentmethod/paymentsetup">Payment Setup</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/shippingmethod/index">Shipping Method Setting</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Manage Table                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/restauranttable/index">Table List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/restauranttable/tablesetting">Table Setting</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Customer Type                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/customerlist/index">Customer List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/customertype/index">Customer Type List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/thirdpratycustomer/index">Third-Party Customers</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/card_terminal/index">Card Terminal List</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">kitchen Setting                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/kitchensetting/index">Kitchen List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/kitchensetting/assignkitchen">Kitchen Assign</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/kitchensetting/kitchen_dashboardsetting">Kitchen Dashboard Setting</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Unit Measurement                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/unitmeasurement/index">Unit Measurement List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/ingradient/index">Ingredient List</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">SMS Setting                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/smsetting/sms_configuration">SMS Configuration</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/smsetting/sms_template">SMS Template</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Bank                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/bank_list/index">Bank List</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/setting/bank_list/bank_transaction">Bank Transaction</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/language/index">Language</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/setting/index">Application Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/serversetting/index">App Setting</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/setting/factoryreset">Factory Reset</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/currency/index">Currency</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/country_city_list/index">Country</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/country_city_list/statelist">State</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/country_city_list/citylist">City</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/setting/Commissionsetting/payroll_commission">Commission</a>
                                </li>

                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='ti-bag'></i> <span>Accounts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/show_tree">Chart of Accounts</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/supplier_payments">Supplier Payment</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/cash_adjustment">Cash Adjustment</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/debit_voucher">Debit Voucher</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/credit_voucher">Credit Voucher</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/contra_voucher">Contra Voucher</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/journal_voucher">Journal Voucher</a>
                                </li>

                                                    <!-- endforeach -->
                                                     
                               
                                <li class="">
                                    <a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/aprove_v">Voucher Approval</a>
                                </li>

                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Accounts Report                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/voucher_report">Voucher Report</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/cash_book">Cash Book</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/bank_book">Bank Book</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/general_ledger">General Ledger</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/trial_balance">Trial Balance</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/profit_loss_report">Profit Loss</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/cash_flow_report">Cash Flow</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/coa_print">COA Print</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/accounts/accounts/balance_sheet">Balance Sheet</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                        <li class="treeview ">
                    
                    <a href="javascript:void(0)">
                        <i class='fa fa-users'></i> <span>Human Resource</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu">  
                                                                            <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">HRM                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Employees/create_position">Designation</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Employees/viewEmhistory">Add Employee</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Employees/manageemployee">Manage Employee</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Employees/emp_payment_view">Manage Employee Salary</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Attendance                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Home/index">Attendance Form</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Home/attenlist">Attendance Report</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Expense                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Cexpense/add_expense_item">Add Expense Item</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Cexpense/manage_expense_item">Manage Expense Item</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Cexpense/add_expense">Add Expense</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Cexpense/manage_expense">Manage Expense</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Cexpense/expense_statement_form">Expense Statement</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Award                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Award_controller/create_award">New Award</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Recruitment                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Candidate/caninfo_create">Add New Candidate</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Candidate/candidateinfo_view">Manage Candidate</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Candidate_select/create_shortlist">Candidate Shortlist</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Candidate_select/create_interview">Interview</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Candidate_select/create_selection">Candidate Selection</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Department                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Department_controller/create_dept">Department</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Division_controller/division_form">Add Division</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Division_controller/index">Manage Division </a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Leave                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Leave/create_weekleave">Weekly Holiday</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Leave/holiday_view">Holiday</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Leave/add_leave_type">Add Leave Type</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Leave/others_leave">Leave Application</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Loan                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Loan/create_grandloan">Grant Loan</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Loan/create_installment">Loan Installment</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Loan/loan_report">Loan Report</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                                    
                            <!-- multilevel menu/link -->
                            <!-- extract $label to compare with segment -->
                                                            <li class="">
                                    <a href="#">Payroll                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu"> 
                                                                                    <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Payroll/create_salary_setup">Salary Type Setup</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Payroll/create_s_setup">Salary Setup</a></li>
                                                                                        <li class=""><a href="http://localhost/bhojon_resturant_managment_system/hrm/Payroll/create_salary_generate">Salary Generate</a></li>
                                             
                                    </ul>
                                </li> 
                                

                            <!-- endif -->
                                                    <!-- endforeach -->
                                            </ul>
                </li> 
            <!-- end if -->
                    <!-- end foreach -->
                
        
        

        

 <li class="treeview active">
                    
                    <a href="javascript:void(0)">
                        <i class="fa fa-facebook"></i> <span>Facebook Setting</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu menu-open">
                     <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/facebooklogin/facebookloginback/showsetting"><i class="fa fa-hand-o-right"></i><span>Facebook Api</span> </a></li>
                     
                     
                    </ul>
                </li><li class="treeview active">
                    
                    <a href="javascript:void(0)">
                        <i class="fa fa-qrcode"></i> <span>QR App</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a> 

                    <ul class="treeview-menu menu-open">
                                          <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/qrapp/qrmodule/index"><i class="fa fa-adn"></i><span>QR Order List</span> </a></li>
                                          <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/qrapp/qrmodule/tableqrcode"><i class="fa fa-adn"></i> <span>All Table QR</span></a></li>
                                          <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/qrapp/qrmodule/qrpaymentsetting"><i class="fa fa-adn"></i> <span>QR Payment Setting</span></a></li>
                                        </ul>
                </li>
   

  

        <!-- *************************************
        **********ENDS OF CUSTOM MODULES*********
        ************************************* -->

        <li class="header">Default </li>

                <li class="treeview ">
            <a href="#">
                <i class="ti-user"></i><span>User</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/user/form">Add User</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/user/index">User List</a></li> 
            </ul>
        </li>
        
        <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/addon/module/index"><i class="fa fa-adn"></i><span>Modules</span> </a></li>
        <li class="treeview"><a href="http://localhost/bhojon_resturant_managment_system/addon/theme/index"><i class="fa fa-adn"></i><span>Themes</span> </a></li>
        <li class="treeview ">
            <a href="#">

                <i class="ti-lock"></i><span>Role Permission</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/permission_setup">Permission Setup</a></li> 
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/role/create_system_role">Add Role</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/role/role_list">Role List</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/role/user_access_role">User Access Role</a></li>
           
            </ul>
        </li>
        
    

        
         <li class="treeview ">
            <a href="#">
                <i class="ti-settings"></i><span>Web Setting</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/">Common Setting</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/storetime">Manage Store Time</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/bannersetting">Banner Setting</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/menusetting">Menu Setting</a></li>
                <!--<li><a href=""></a></li>
                <li><a href=""></a></li>-->
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/seosetting">SEO Setting</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/socialtting">Social Setting</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/widgetsetting">Widget Setting</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/email_config_setup">Email Setting</a></li> 
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/rating">Customer Rating</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/couponlist">Coupon List</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/web_setting/subscribeList">Subscribe List</a></li> 
            </ul>
        </li>
        <li class="treeview ">
           <a href="http://localhost/bhojon_resturant_managment_system/dashboard/autoupdate"><i class="ti-reload"></i> <span>Auto Update</span></a>
        </li>
                <!-- ends of admin area -->

        <li class="treeview ">
            <a href="#">
                <i class="ti-comments"></i><span>Message</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/message/new_message">New</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/message/index">Inbox</a></li>
                <li><a href="http://localhost/bhojon_resturant_managment_system/dashboard/message/sent">Sent</a></li> 
            </ul>
        </li>       
    </ul> 
</div> <!-- /.sidebar -->            </aside>
                        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper ">
                <!-- Content Header (Page header) -->
                                <section class="content-header">
                    <div class="header-icon"><i class="pe-7s-home"></i></div>
                    <div class="header-title">
                        <h1> <!--/--> Customer</h1>
                        <small>Transaction</small>
                    </div>
                </section>
                
                <!-- Main content -->
                <div class="content">
                    <!-- load messages -->
                                        <!-- load custom page -->
                    <script src="http://localhost/bhojon_resturant_managment_system/application/modules/report/assets/js/salereportfrm.js" type="text/javascript"></script>
<link href="http://localhost/bhojon_resturant_managment_system/application/modules/report/assets/css/salereportfrm.css" rel="stylesheet" type="text/css"/>

<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">
                    <fieldset class="border p-2">
                       <legend  class="w-auto">Sales Report</legend>
                    </fieldset>
                    <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <form action="http://localhost/bhojon_resturant_managment_system/report/index" class="form-inline" method="post" accept-charset="utf-8">
                                                                                                   <input type="hidden" name="csrf_test_name" value="636ed97d31f7133f3750640828f57e55" />
                                                    <div class="form-group" style="display:none;">
                                <label class="" for="from_date">From</label>
                                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="01-01-2021" placeholder="From" readonly="readonly" >
                            </div> 

                            <div class="form-group">
                                <label class="" for="to_date">To</label>
                                <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="To" value="10-01-2023" readonly="readonly">
                            </div> 
                            <div class="form-group">
                                 <select name="paytype" class="postform resizeselect form-control " id="paytype">
<option value="" >Select Method</option>
<option value="1">Card Payment</option>
<option value="3">Paypal</option>
<option value="4" selected="selected">Cash Payment</option>
<option value="9">Stripe Payment</option>
<option value="14">Billplz</option>
</select>
<script type="text/javascript">
    $( document ).ready(function() {
    getreport();
});
</script>

                            </div> 
                             <div class="form-group">
                                
                                <input type="text" name="invoice_no" class="form-control" id="invoie_no" placeholder="Invoice No">
                            </div> 
                            <a  class="btn btn-success" onclick="getreport()">Search</a>
                          
                            <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')">Print</a>
                           </div>
                          
                            
                       </form>                  </div>
                </div>
            </div>
        </div>
                    <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Customer Transactions</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="purchase_div">
                            <div class="text-center" style="display: none;">
                                <h3> BOSCA PORT </h3>
                                <h4>TAMAN RUMPUN BAHAGIA </h4>
                                <h4> Print Date: 10/01/2023 02:33:54 </h4>
                            </div>
                            <div class="table-responsive" id="getresult2">
                                
                            </div>
                        </div>
                        <div class="text-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div> 
            </div>
        </div>
    </div>
<input type="hidden" id="today" value="10-01-2023">
<script src="http://localhost/bhojon_resturant_managment_system/application/modules/report/assets/js/salereportfrm_script.js" type="text/javascript"></script>                </div> <!-- /.content -->


            </div> <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    TAMAN RUMPUN BAHAGIA 
                </div>

                <strong>
                    2020©Copyright                </strong>
                    <a href="http://localhost/bhojon_resturant_managment_system/report/reports/sellrpt">
                    BOSCA PORT QR SYSTEM</a>
            </footer>
             
        </div> <!-- ./wrapper -->
 
        <!-- Start Core Plugins-->

        
<!-- jquery-ui --> 
<script src="http://localhost/bhojon_resturant_managment_system/ordermanage/order/showljslang" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/ordermanage/order/basicjs" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap tag input-->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/bootstrap-tagsinput.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/fastclick.min.js" type="text/javascript"></script>
<!-- Select2 -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/select2.min.js" type="text/javascript"></script>
<!-- bootstrap timepicker -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery-ui-sliderAccess.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery-ui-timepicker-addon.min.js" type="text/javascript"></script>
<!-- tinymce js -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/tinymce/tinymce.min.js" type="text/javascript"></script>
<!-- dataTables js -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/datatables/js/dataTables.min.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/datatables/js/buttons.colVis.min.js" type="text/javascript"></script>

<!-- AdminBD frame -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/frame.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/jquery.confirm.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/fontawesome-iconpicker.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/toastr/toastr.min.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/pusher.min.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/mousetrap-master/mousetrap.min.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/print.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/masonry-package.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/images.loaded.js" type="text/javascript"></script>
<!-- End Core Plugins -->

<!-- Dashboard js -->
<script src="http://localhost/bhojon_resturant_managment_system/assets/js/dashboard.js" type="text/javascript"></script>
<script src="http://localhost/bhojon_resturant_managment_system/application/modules/template/assets/js/template.js" type="text/javascript"></script>

<!-- Include module Script -->
<script src=http://localhost/bhojon_resturant_managment_system/application/modules/accounts/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/androidpos/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/hrm/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/itemmanage/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/ordermanage/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/production/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/purchase/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/qrapp/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/report/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/reservation/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/role/assets/js/script.js?v=1.4 type="text/javascript"></script><script src=http://localhost/bhojon_resturant_managment_system/application/modules/setting/assets/js/script.js?v=1.4 type="text/javascript"></script>        <script>
        var url = window.location;
        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href != url;
        }).parent().removeClass('active');

        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
        </script>
<input name="segment1" id="segment1" type="hidden" value="report" />
<input name="segment2" id="segment2" type="hidden" value="reports" />
<input name="segment3" id="segment3" type="hidden" value="sellrpt" />
<input name="segment4" id="segment4" type="hidden" value="" />
<input name="segment5" id="segment5" type="hidden" value="" />
    </body>
</html>
