<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
	// document.body.style.marginTop="-45px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 
             <div class="panel-heading">
                <div class="panel-title">
                    <h4>All Table QR CODE<small class="pull-right"><a class="btn btn-info" onclick="printDiv('printableArea')" title="Print"><span class="fa fa-print"></span>
						</a></small></h4>
                </div>
            </div>
            <div class="panel-body" id="printableArea">
                
                <?php if (!empty($tablelist)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($tablelist as $table) { ?>
                                <div class="col-md-4" style="background: #f4f4f4;padding-top: 15px;">
                                    <img src="https://chart.apis.google.com/chart?cht=qr&amp;chs=200x210&amp;chl=<?php echo base_url("scanmenu/") ?><?php echo $table->tableid; ?>&amp;chld=H|0" alt="qr1" style="width:100%;">
                                    <p align="center"><strong><?php echo $table->tablename; ?> QR Code</strong></p>
                                  </div>
                                   <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                <div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</div>

