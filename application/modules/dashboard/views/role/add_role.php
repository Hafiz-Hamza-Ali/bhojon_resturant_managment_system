
<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">
                    <?php echo form_hidden('purID', (!empty($intinfo->purID)?$intinfo->purID:null)) ?>
                    <fieldset class="border p-2">
                       <legend  class="w-auto"><?php echo 'Add Role' ?></legend>
                    </fieldset>
                    <?php echo isset($role->id)? form_open_multipart('dashboard/home/updaterole',array('class' => 'form-vertical', 'id' => 'insert_purchase','name' => 'insert_purchase')): form_open_multipart('dashboard/home/addrole',array('class' => 'form-vertical', 'id' => 'insert_purchase','name' => 'insert_purchase'))?>
                    <input name="url" type="hidden" id="url" value="" />
                    <!-- <form action="<?php echo base_url('dashboard/home/addrole') ?>" class="form-vertical" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off"> -->
                    <?php
                    if(isset($role->id))
                    {
                        ?>
    <input  class="form-control" name="id" type="hidden" id="url" value="<?php echo isset($role->id)?$role->id:'' ?>" />
                        <?php
                    }
                    
                    
                    ?>
                    <div class="row">
                             <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label"><?php echo 'Title' ?> <i class="text-danger">*</i>
                                    </label>
                                    <?php  ?>
                                    <div class="col-sm-6">
                                    <input required="required" class="form-control" name="title" type="text" id="url" value="<?php echo isset($role->title)?$role->title:'' ?>" />
						
                                    </div>
                                </div> 
                            </div>
                            
                        </div>
                     
                     <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add_purchase" class="btn btn-success btn-large" name="add-purchase" value="<?php echo display('submit') ?>">
                            </div>
                        </div>
                        </form>
                </div> 
            </div>
        </div>
    </div>
    <div id="cntra" hidden>
    <option value="" data-title=""><?php echo display('select');?> <?php echo display('ingredients');?></option>
<?php foreach ($ingrdientslist as $ingrdients) {?><option value="<?php echo $ingrdients->id;?>" data-title="<?php echo $ingrdients->ingredient_name;?>"><?php echo $ingrdients->ingredient_name;?></option><?php }?>
</div>
<script src="<?php echo base_url('application/modules/production/assets/js/production.js'); ?>" type="text/javascript"></script>
