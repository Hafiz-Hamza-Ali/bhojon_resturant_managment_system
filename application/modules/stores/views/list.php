<script src="<?php echo base_url('application/modules/ordermanage/assets/js/postop.js'); ?>" type="text/javascript"></script>

<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd">
               <div class="panel-heading">
                <div class="panel-title">
                	
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
