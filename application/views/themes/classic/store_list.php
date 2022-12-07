
<?php $webinfo = $this->webinfo; ?>

<?php $history = $this->db->select('*')->from('tbl_widget')->where('widgetid', 17)->where('status', 1)->get()->row();
if (!empty($history)) {
?>
    <section class="about_us sect_pad position-relative bg-img-hero">
        <div class="container">
            <div class="row about_inner align-items-center wrap-reverse-md">
                <div class="col-xl-5 col-lg-6">
                    <div class="sect_title mb-4">
                        <h3 class="big_title"><?php echo $history->widget_title; ?> <span><?php echo $history->widget_name; ?></span></h3>
                    </div>
                    <div class="aboutus_text">
                        <?php echo $history->widget_desc; ?>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="img_part mb-5 mb-lg-0" data-wow-delay="0.4s">
                        <?php foreach ($foodhistory as $historyimg) { ?>
                            <img src="<?php echo base_url(!empty($historyimg->image) ? $historyimg->image : 'dummyimage/541x516.jpg'); ?>" class="img-fluid" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!--End About Us-->
<?php $testymenu = $this->db->select('*')->from('tbl_widget')->where('widgetid', 16)->where('status', 1)->get()->row();
if (!empty($testymenu)) {
?>
    <section class="menu_area pb-5">
        <div class="food_menu_topper">
            <div class="text-center">
                <h2 class="food_menu_title"><?php echo $testymenu->widget_name; ?></h2>
                <h4 class="food_menu_title2"><?php echo $testymenu->widget_title; ?> </h4>
            </div>
            <!-- <div class="container">
                <div class="menu-tab-nav position-relative mt-5">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <?php $tm = 0;
                        foreach ($todaymenu_menu as $tmenu) {
                            $tm++; ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if ($tm == 1) {echo "active";} ?>" id="pills-home-tab<?php echo $tm; ?>" data-toggle="pill" href="#pills-<?php echo $tmenu->menutypeid; ?>" onclick="showfood(<?php echo $tmenu->menutypeid; ?>)">
                                    <img src="<?php echo base_url(!empty($tmenu->menu_icon) ? $tmenu->menu_icon : 'assets/img/icons/default.jpg'); ?>" alt="">
                                    <h6><?php echo $tmenu->menutype ?></h6>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div> -->
        </div>
        <div class="container">
            <div class="tab-content menu-tab-content" id="pills-tabContent">
                <div class="row">
                <!-- <?php $tm = 0;
                foreach ($todaymenu_menu as $tmenu2) {
                    $tm++; ?>
                    <div class="tab-pane fade show active" id="pills-<?php echo $tmenu2->menutypeid; ?>" role="tabpanel">

                    </div>
                <?php } ?> -->
                <?php $tm = 0;
                foreach ($todaymenu_food as $tmenu2) {
                   // $tm++; ?>
                    
                <div class="col-xl-6 offset-xl-0 col-lg-8 offset-lg-2">
                            <div class="single_item">
                                <div class="row mb-3">
                                <div id="snackbar551" class="snackbar">Item has been successfully added</div>
                                    <div class="item_img col-sm-3">
                                        <img src="http://localhost/sop/dummyimage/250x250.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="item_details col-sm-6 pl-0">
                                        <a href="http://localhost/sop/details/5/5" class="item_title"><?php echo $tmenu2['ProductName'];?></a>
                                        <h5 class="d-sm-none d-block"><?php echo $tmenu2['price'];?></h5>
                                        <p><?php echo $tmenu2['variantName'];?></p>                                        <div class="d-flex align-items-center jc-xs mt-2">
                                        	                                                <input name="sizeid" type="hidden" id="sizeid_551other" value="5">
                        <input type="hidden" name="catid" id="catid_551other" value="<?php echo $tmenu2['CategoryID'];;?>">
                        <input type="hidden" name="itemname" id="itemname_551other" value="<?php echo $tmenu2['ProductName'];?>">
                        <input type="hidden" name="varient" id="varient_551other" value="<?php echo $tmenu2['variantName'];?>">
                        <input type="hidden" name="cartpage" id="cartpage_551other" value="0">
                         <input name="itemprice" type="hidden" value="<?php echo $tmenu2['price'];?>" id="itemprice_551other">
                            
                          <a onclick="addtocartitem(5,551,'other')" class="simple_btn mt-0 mr-2 text-white">add to cart</a>
                                            <div class="cart_counter">
                                                <button onclick="var result = document.getElementById('sst6551_other'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input type="text" name="qty" id="sst6551_other" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                                <button onclick="var result = document.getElementById('sst6551_other'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            
                                                                                    </div>
                                    </div>
                                    <div class="item_info col-sm-3 text-center">
                                        <h5 class="mb-0"><?php echo $tmenu2->price;?></h5>
                                                                                <div class="rating_area">
                                            <div class="rate-container">
                                                                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                                                               
                                            </div>
                                        </div>
                                                                                <p><?php echo $tmenu2['variantName'];?></p>
                                                                            </div>
                                </div>
                            </div>
                        </div>
           
            <?php } ?> 
                </div>
        </div>
    </section>
<?php } ?>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo display('reserve_table')?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body editinfo">

            </div>
        </div>
    </div>
</div>
<!--End Reservation Area-->
<!--Start Table Chart-->
<section class="table_chart" id="searchreservation" style="background:#f6f6f6;">
    <div class="container">
        <div class="row table_chart_inner" id="addmargind">

        </div>
    </div>
</section>
<!--End Table Chart-->
<!--Start Gallery Area-->

<!--End Gallery Area -->
<?php $history = $story = $this->db->select('*')->from('tbl_widget')->where('widgetid', 22)->where('status', 1)->get()->row();
if (!empty($history)) {
?>
    <section class="contact sect_pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <h4 class="contact_title"><?php echo display('contact_us') ?></h4>
                    <div class="footer_widget_body">
                        <div class="footer-address">
                            <h3><?php echo $webinfo->phone; ?></h3>
                            <h3><a href="#"><?php echo $webinfo->phone_optional; ?></a></h3>
                            <h3><?php echo display('email') ?>: <a href="#"><?php echo $webinfo->email; ?></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-5 mb-lg-0 text-center">
                        <h4 class="contact_title"><?php echo display('opening_time') ?></h4>
                        <div class="schedul_footer">
                            <?php foreach ($openclosetime as $timeshedule) {
                                if ($timeshedule->opentime != "Closed") {
                            ?>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p><strong><?php echo $timeshedule->dayname; ?></strong></p>
                                        <p><?php echo $timeshedule->opentime; ?> - <?php echo $timeshedule->closetime; ?></p>
                                    </div>
                                <?php } else { ?>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p><strong><?php echo $timeshedule->dayname; ?></strong></p>
                                        <p><?php echo $timeshedule->opentime; ?></p>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-5 mb-lg-0 text-center">
                        <h4 class="contact_title"><?php echo display('ourstore') ?></h4>
                        <?php echo $webinfo->address; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<div id="cartitem" style="display:none;"></div>