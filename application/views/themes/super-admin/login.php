<?php error_reporting(1) ?>
<div id="page-wrapper">
    <div class="main-page login-page ">
        <h2 class="title1">ADMIN</h2>
        <div class="widget-shadow">
            <div class="login-body">
                <?php echo form_open('admin/login','id="loginForm" novalidate'); ?> 
                <form action="<?php echo base_url(); ?>admin/login" method="post">
                    <input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
                    <input type="password" name="password" class="lock" placeholder="Password" required="">
                    <!-- <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
                        <div class="forgot">
                            <a href="#">forgot password?</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div> -->
                    <input type="submit" name="Sign In" value="Sign Ins">
                </form>
            </div>
        </div>
        
    </div>
</div>