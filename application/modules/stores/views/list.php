<script src="<?php echo base_url('application/modules/ordermanage/assets/js/postop.js'); ?>" type="text/javascript"></script>

<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd">
               <div class="panel-heading">
                <div class="panel-title">
                	<div class="btn-group pull-right form-inline"> 
		                <?php $today = date('d-m-Y'); ?>
		                    <div class="form-group">
		                        <label class="" for="from_date"><?php echo display('start_date') ?></label>
		                        <input type="text" name="from_date" class="form-control datepicker5" id="from_date" value="" placeholder="<?php echo display('start_date') ?>" readonly="readonly" >
		                    </div> 

		                    <div class="form-group">
		                        <label class="" for="to_date"><?php echo display('end_date') ?></label>
		                        <input type="text" name="to_date" class="form-control datepicker5" id="to_date" placeholder="<?php echo "To"; ?>" value="" readonly="readonly">
		                    </div> 
                            <div class="form-group">
		                    <button  class="btn btn-success" id="filterordlist"><?php echo display('search') ?></button>
                            <button  class="btn btn-warning" id="filterordlistrst"><?php echo display('reset') ?></button>
                            </div>
		                   </div>
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
                <div class="panel-body">
					<div class="row">
                             <div class="col-sm-12" id="findfood">
                                <table class="table table-fixed table-bordered table-hover bg-white" id="tallorder">
                                <thead>
                                     <tr>
                                     <th class="text-center">Store Name</th>
                                     <th class="text-center">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                                <?php foreach($store as $value){ ?>
                                <tr role="row" class="odd"><td class="sorting_1" tabindex="0"><?php echo $value['store_name'];?></td>
                                <td class="center">
                                                                        <a href="<?php echo base_url('stores/store/edit/'.$value['id']) ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
									                                        <a href="<?php echo base_url('stores/store/delete/'.$value['id']) ?>" onclick="return confirm('Are You Sure ? ')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>  
                                                                             </td>
                            </tr>
                                <?php } ?>
                            </table>
                            <div class="text-right"></div>
                            </div>
                        </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- <script src="<?php echo base_url('application/modules/ordermanage/assets/js/orderlist.js'); ?>" type="text/javascript"></script> -->
