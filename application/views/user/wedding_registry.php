
<section style=" background-image:url(http://www.tapchidanong.org/product_images/uploaded_images/anh-dep-hop-qua-noel-3382-14-.jpg); background-size:cover">
  <div class="container">
    <div class="row">
      <div class="board"> 
      <h3 class="text-center" style="padding-top:10px; margin-bottom:10px; color:#1ead67">Steps To Complete Your Wedding Registry</h3>
        <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
        <div class="board-inner">
          <ul class="nav nav-tabs" id="myTab">
            <div class="liner"></div>
            <li class="active" id="homeli"> <a href="#" data-toggle="tab" title="Create Your Wedding Page" id="hometab"> <span class="round-tabs one"> <i class="fa fa-pencil-square-o"></i></span> </a></li>
            <li id="giftli"><a href="#" data-toggle="tab" title="Create Gift Registry" id="gift"> <span class="round-tabs two"> <i class="glyphicon glyphicon-gift"></i> </span> </a> </li>
            <li><a href="#" data-toggle="tab" title="Finalized" id="finalize"> <span class="round-tabs three"> <i class="glyphicon glyphicon-ok"></i> </span> </a> </li>
            
            
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="home">
            <div class="col-lg-3">
              <div> <img style="display:none" class="img-responsive target-male" src="<?php echo base_url()?>img/female-thumb.jpg"/> <img style="" class="img-responsive target-female" src="<?php echo base_url()?>img/male-thumb.jpg" /><br />
              </div>
              <div>
                <div class="col-lg-8 remove-sapce"><span class="upld-heading">Upload Your picture</span></div>
                <div class="col-lg-2 remove-sapce"><img id="male" src="<?php echo base_url()?>img/male.png" class="img-responsive center-block" /></div>
                <div class="col-lg-2 remove-sapce"><img id="female" src="<?php echo base_url()?>img/female.png" class="img-responsive center-block" /></div>
              </div>
              <div class="clearfix"></div>
              <div style="text-align:justify; font-size:12px; padding-top:10px;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
            </div>
            <div class="col-lg-9 wedding">
              <h2 class="head-large">Create Your Wedding Page</h2>
              <div class="col-lg-6">
                <input type="text" placeholder="Enter Your Name :" name="name" id="name" onblur="validate_text(this.id)" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Enter Your Spouse Name :" name="spouse_name" id="spouse_name" onblur="validate_text(this.id)" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Wedding Date :" name="wedding_date" id="wedding_date" onblur="validate_text(this.id)"  />
              </div>
              <div class="col-lg-4">
                <input type="text" placeholder="Email Address :" name="email" id="email"  onblur="validate_text(this.id)" onchange="valid_email(this.id)"/>
				<span id="emailid-error"></span>
              </div>
              
              <div class="col-lg-2">
                <button class="add-gifts" style="float:none; margin-top:15px; padding:12px 7px"> <i class="fa fa-bell-o" aria-hidden="true"></i> Invite Spouse</button>
              </div>
              
              <div class="col-lg-6">
                <input type="text" placeholder="Venue :" name="venue" id="venue" />
              </div>
              <div class="col-lg-6">
                <select name="days" id="days">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="clearfix"></div>
              
              <!--<h3 class="bank-detals">Bank Account Details :</h3>-->
              <!--<div class="col-lg-12">
                <input type="text" placeholder="Account Holder name :" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Bank Name :" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="IFSC (Indian Financial System Code) :" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="The SWIFT BIC code :" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Account number :" />
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Retype account number :" />
              </div>-->
              <div class="col-lg-12">
                <input type="text" placeholder="Enter Your Phone Number :" name="contact_no" id="contact_no" onblur="validate_text(this.id)" onchange="valid_contact(this.id)" maxlength="11" /><span id="contact-error"></span>
              </div>
              <div class="col-lg-12">
                <textarea placeholder="Couple summary/story (optional)" name="summary" id="summary" ></textarea>
              </div>
              <div class="col-lg-12">
                <button class="btn-continue" onclick="personal_info()"><i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;&nbsp;
               Continue..</button>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="tab-pane fade" id="gift-repository">
            <div class="col-lg-3">
              <div> <img style="display:none" class="img-responsive target-male" src="<?php echo base_url()?>img/female-thumb.jpg"/> <img style="" class="img-responsive target-female" src="<?php echo base_url()?>img/male-thumb.jpg" /><br />
              </div>
              <div>
                <div class="col-lg-8 remove-sapce"><span class="upld-heading">Upload Your picture</span></div>
                <div class="col-lg-2 remove-sapce"><img id="male" src="<?php echo base_url()?>img/male.png" class="img-responsive center-block" /></div>
                <div class="col-lg-2 remove-sapce"><img id="female" src="<?php echo base_url()?>img/female.png" class="img-responsive center-block" /></div>
              </div>
              <div class="clearfix"></div>
              <div style="text-align:justify; font-size:12px; padding-top:10px;"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </div>
            </div>
            <div class="col-lg-9">
              <div class="col-lg-12 remove-space">
                <button class="add-gifts" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Add Gifts </button>
              </div>
              <hr />
              <div id="gift-refresh">
              <?php $info=$this->session->all_userdata();
			    
			  if($info['Item'] !=''){
			
			   foreach($info['Item'] as $item){
			   ?>
			     <div class="alt-row ">
			   <div class="col-lg-4">
                  <div class="pop"> <a href="" target="_blank"> <span class="screen">
                    <div class="edit-ico"><i class="fa fa-pencil-square-o"> </i><i class="fa fa-trash"></i> </div>
                    </span> <img src="<?php echo base_url()?>img/default.png" class="img-responsive"> </a> </div>
                </div>
                <div class="col-lg-6"><span class="gift-ietm-list"><strong>Item Name</strong> : <?php echo $item['itemname']?></span> <span class="gift-ietm-list"><strong>Approximate Cost</strong> : <i aria-hidden="true" class="fa fa-inr"></i><?php echo $item['cost']?></span> <span class="gift-ietm-list"><strong>Item specifications :</strong> 
                  <p><?php echo $item['item_specification'];?></p>
                  </span> 
                  <span class="gift-ietm-list"><strong>Web URL</strong> : <?php echo $item['weburl'];?></span>
                  <div class="clearfix"></div>
                  <br />
					<button class="add-gifts" style="float:none; background-color:#F05856"><i class="fa fa-gift" aria-hidden="true"></i> Buy This Gift</button>
                  
                  </div>
                <div class="clearfix"></div>
              </div>
				  <?php 
				 
		       }
			  }
			  ?>
             </div> 
             
            
              
             
              
              <!--<div class="alt-row">
                <div class="col-lg-4">
                  <div class="pop"> <a href="" target="_blank"> <span class="screen">
                    <div class="edit-ico"><i class="fa fa-pencil-square-o"> </i><i class="fa fa-trash"></i> </div>
                    </span> <img src="<?php echo base_url()?>img/default.png" class="img-responsive"> </a> </div>
                </div>
                <div class="col-lg-6"><span class="gift-ietm-list"><strong>Item Name</strong> : Loreum Lopsom</span> <span class="gift-ietm-list"><strong>Approximate Cost</strong> : <i aria-hidden="true" class="fa fa-inr"></i> 400.00</span> <span class="gift-ietm-list"><strong>Item specifications :</strong> 
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                  </span> 
                  <span class="gift-ietm-list"><strong>Web URL</strong> : www.loreumlipsom.com</span>
                  <div class="clearfix"></div>
                  <br />
					<button class="add-gifts" style="float:none; background-color:#F05856"><i class="fa fa-gift" aria-hidden="true"></i> Buy This Gift</button>
                  
                  </div>
                <div class="clearfix"></div>
              </div>-->
              
            <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog"> 
                  
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center" style="color:#fff; font-size:24px">Add Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-3"><img src="<?php echo base_url()?>img/default.png" class="img-responsive" /></div>
                      
                      <div class="col-lg-3 col-lg-offset-3 remove-sapce"><span class="gift-head">Use Default</span></div>
                      <div class="col-lg-3 remove-sapce"><span class="gift-head">Upload Image</span></div>
                      <div class="clearfix"></div>
                      <hr />
                      <div class="row top-space">
                        <div class="col-lg-3">Item Name<span style="color:#F00">*</span></div>
                        <div class="col-lg-9">
                          <input class="gift-fld" type="text" placeholder="Your Item Name" name="item" id="item" onblur="validate_text(this.id)" />
						  <span id="item-error"></span>
                        </div>
                      </div>
                      <div class="row top-space">
                        <div class="col-lg-3">Approximate Cost<span style="color:#F00">*</span></div>
                        <div class="col-lg-9">
                          <input class="gift-fld" type="text" placeholder="Your Item Cost" name="cost" id="cost" onblur="validate_text(this.id)" onchange="valid_cost(this.id)" />
						    <span id="item-cost"></span>
                        </div>
                      </div>
                      <div class="row top-space">
                        <div class="col-lg-3">Website URL </div>
                        <div class="col-lg-9">
                          <input class="gift-fld" type="text" placeholder="Your Website URL" name="weburl" id="weburl" onchange="valid_url(this.id)" />
						    <span id="url-error"></span>
                        </div>
                      </div>
                      <div class="row top-space">
                        <div class="col-lg-3">Item Specifications </div>
                        <div class="col-lg-9">
                          <textarea class="gift-fld-area" placeholder="Item Specifications" name="item_specification" id="item_specification"></textarea>
                        </div>
                      </div>
                    </div>
					<input type="hidden" name="url" id="url" value="<?php echo base_url()?>" />
                    <div class="modal-footer">
                      <button type="button" class="btn-save"  onclick="itme_info()"><i class="fa fa-paper-plane-o"></i>
 Save Changes</button>
<!-- data-dismiss="modal"-->
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="clearfix"></div>
            
            <div class="col-lg-12 remove-sapce">
            <button id="" class="btn-continue" onclick="continue_active()"><i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;&nbsp;
                Continue..</button>
            </div>
            </div>
            
          </div>
          <div class="tab-pane fade" id="messages">
          <img class="center-block" src="<?php echo base_url()?>img/face.png" class="img-responsive" />
          
            <h3 class="head text-center">Thank You for Choosing My Tofah</h3>
            <p class="narrow text-center"> Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim. </p><br />
<br />
<div>
		<button style="margin:0 auto; display:block; margin-bottom:20px;" id="" class="btn-continue" onclick="active()">Activate</button>
     
     </div>     </div>
          <div class="tab-pane fade" id="settings">
            <h3 class="head text-center">Loreum Lipsom</h3>
            <p class="narrow text-center"> Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim. </p>
          </div>
          <div class="tab-pane fade" id="doner">
            <div class="text-center"> <i class="img-intro icon-checkmark-circle"></i> </div>
            <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
            <p class="narrow text-center"> Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim. </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</section>
