	<div class="main-content">
		<div class="header bg-gradient-primary pb-8 pt-5">
			<div class="container-fluid">
				<div class="header-body">
				</div>
			</div>
		</div>
    <div class="container-fluid mt--7">
    	<!-- form -->
	    <div class="row">
        	<div class="col">
          		<div class="card bg-secondary shadow">
            		<div class="card-header bg-white border-0">
              			<div class="row align-items-center">
                			<div class="col-12">
                  				<h3 class="mb-0">Edit Transportation</h3>
                			</div>
              			</div>
            		</div>
					<?php
						foreach($transportation->result() as $detail){
					?>
          			<form action="<?php echo base_url('admin/transportations/edit_transportation_db')?>" method="post" enctype="multipart/form-data">
	            		<div class="card-body">
	        				<div class="pl-lg-4">
	          					<div class="row">
									<input type="hidden" name="editId" value="<?php echo $detail->transportation_id; ?>">
			          				<input type="hidden" readonly name="editImg" value="<?= $detail->image ?>">
	            					<div class="col-lg-6">
	              						<div class="form-group">
	                						<label class="form-control-label" for="input-name">Name</label>
	        								<input type="text" id="input-name" name="editName" class="form-control" autocomplete="off" style="text-transform: capitalize;" value="<?php echo $detail->name; ?>" required>
	              						</div>
	            					</div>
	            					<div class="col-lg-6">
	              						<div class="form-group">
					                        <label class="form-control-label" for="input-duration">Duration</label>
					                        <div class="input-group mb-3">
											  	<input type="text"id="input-duration" name="editDuration" class="form-control" autocomplete="off" style="text-transform: capitalize;" value="<?php echo $detail->duration; ?>" required>
											  	<div class="input-group-append input-group-append-sm">
											    	<span class="input-group-text">Days</span>
											  	</div>
											</div>
					                     </div>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-lg-4">
					                    <div class="form-group">
					                        <label class="form-control-label" for="input-price">Price</label>
					                        <div class="input-group mb-3">
											  	<div class="input-group-prepend">
											    	<span class="input-group-text">$</span>
											  	</div>
											  	<input type="text" id="input-price" name="editPrice" class="form-control" autocomplete="off" style="text-transform: capitalize;" value="<?php echo $detail->price; ?>" required>
											  	<div class="input-group-append">
											    	<span class="input-group-text">.00</span>
											  	</div>
											</div>
					                    </div>
					                </div>
					                <div class="col-lg-4">
					                   	<div class="form-group">
					                        <label class="form-control-label" for="input-guest">Max Guest</label>
					                        <div class="input-group mb-3">
											  	<input type="text" id="input-guest" name="editGuest" class="form-control" autocomplete="off" style="text-transform: capitalize;" value="<?php echo $detail->max_guest; ?>" required>
											  	<div class="input-group-append">
											    	<span class="input-group-text">Guest</span>
											  	</div>
											</div>
					                    </div>
					                </div>
					                <div class="col-lg-4">
					                  	<div class="form-group">
					                        <label class="form-control-label" for="input-image">Image</label>
					                        <div class="input-group mb-3">
											  	<div class="custom-file">
											    	<input type="file" id="imageTransportation" name="imageTransportation" class="form-control-file">
											    	<label class="custom-file-label" for="imageTransportation">Change Image Below</label>
											  	</div>
											</div>
			                        		<!-- <input type="file" id="imagePackage" name="imagePackage[]" multiple="" class="form-control-file" required> -->
					                  	</div>
					                </div>
					            </div>
					        </div>
			                <div class="pl-lg-4">
			                  	<div class="form-group">
			                        <label class="form-control-label" for="input-description">Description</label>
			                    	<textarea id="tinyMce" name="editDescription" class="form-control"><?php echo $detail->description; ?></textarea>
			                  	</div>
			                </div>
			                <div class="pl-lg-4">
			                	<div class="row">
					                <div class="col-lg-6">
				                		<div class="form-group">
	                        				<img style="
	                        					max-width: 50%;
												border: 4px solid #fff;
											    border-radius: 4px;
											    box-shadow: 0 1px 4px rgba(0,0,0,.2);
											    -webkit-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
											    -moz-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
											    -o-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
											    box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);" 
											    src="<?php echo base_url('assets/admin/img/transportations/');?><?= $detail->image ?>">
	                        			</div>
	                        		</div>
                        		</div>
                            </div>
	        			</div>
	                    <div class="card-footer">
	                        <button type="submit" class="btn btn-sm btn-primary">
	                            <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Update
	                        </button>
                            <button onclick="window.location='<?php echo base_url();?>transportations'" type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i>&nbsp;&nbsp;&nbsp;Cancel
                            </button>
	                    </div>
	            	</form>
					<input name="image" type="file" id="upload" onchange="" style="display:none;">
					<?php
						}
					?>
  				</div>
    		</div>
    	</div>
      	<!-- Footer -->
      	<footer class="footer">
	        <div class="row align-items-center justify-content-xl-between">
        	</div>
      	</footer>
    </div>
