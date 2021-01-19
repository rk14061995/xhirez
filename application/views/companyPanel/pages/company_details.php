<script src="//geodata.solutions/includes/countrystatecity.js"></script>

<section class="paduj5">
    <section class="py-5">
        <div class=" shadow pt-3">
          <div class=" container">
            <div class="row ">
              <div class="col-md-4">
                <h4 class="topHH">Company Details

                <?php
                  $companuSession = unserialize($this->session->userdata('companySession'));
                  // print_r($companuSession);
                ?>
                </h4>
              </div>
              <div class="col-md-8">
                <!-- <div class="text-right">
                    <button class="btnTo">Post a walk-in</button>
                    <button class="btnTo ml-2">Manage Jobs</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
   	<div class="">
        <div class="">
     

            <div class="mt-5">
              <div class="row mx-0">
                <div class="col-md-12">
                    <div class="pppDSK">
                        <div class="row mx-0 shadow">
                          <div class="col-md-4 pihs active" >
                            <div class="">
                              <a href="">
                                Job Details
                              </a>
                            </div>
                          </div>
                        </div> 
          
                        <div class="mt-3 shadow  p-4">
                        <form id="addNewCompany" >
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <label class="mb-0">Company Name</label>
                                    <input type="text" class="form-control" value="<?=$companyData[0]->company_name?>" required placeholder="Enter Company Name"  name="company">
                                  </div>
                                  <div class="col-md-6 form-group">
                                    <label class="mb-0">Registration No</label>
                                    <input type="text" class="form-control" value="<?=$companyData[0]->company_reg_no?>" placeholder="Eg. RE-1234-01-24/12" required  name="regist">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <label class="mb-0">Website URL</label>
                                        <input type="text" class="form-control" value="<?=$companyData[0]->website_url?>" required placeholder="Eg. www.example.com" name="url">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-0">Email</label>
                                        <input type="email" value="<?=$companyData[0]->company_email?>" disabled class="form-control" >
                                    </div>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Company Phone</label><br>
                                    <input type="text"  class="form-control" value="<?=$companyData[0]->comp_phone?>" required  name="comp_phone">
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Company Logo</label><br>
                                    <input type="file"  value="<?=$companyData[0]->company_logo?>" name="file">

                                    <div class="mt-2">
                                        <img src="<?=base_url('assets/companyImages/logo/').$companyData[0]->company_logo?>" class="img-fluid " width="200px">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  
                                
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <label class="mb-0">Description</label>
                                    <textarea class="form-control" required  name="desc" >
                                        <?=$companyData[0]->comp_desc?>
                                    </textarea>
                                    
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <label class="mb-0">Address</label>
                                    <input type="text" value="<?=$companyData[0]->comp_address?>" class="form-control" required  name="comp_address">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Country</label>
                                    <select name="country" class="countries form-control" id="countryId">
                                        <option value="">Select Country</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">State</label>
                                    <select name="state" class="states form-control" id="stateId">
                                        <option value="">Select State</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">City</label>
                                    <select name="city" class="cities form-control" id="cityId">
                                        <option value="">Select City</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Zip Code</label>
                                    <input type="text" value="<?=$companyData[0]->zipcode?>" class="form-control" name="zipcode">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Certificate of Incorporation</label>
                                    <input type="file"  name="Incorpfile">
                                    <?php 
                                        if($companyData[0]->comp_incorporation){ ?>
                                            <div class="mt-2 ml-3">
                                                <a title="download" download href="<?=base_url('assets/company_assets/company_Incorporation/').$companyData[0]->comp_incorporation?>"> <img src="<?=base_url('assets/images/file.png')?>" class="img-fluid "></a>
                                            </div>
                                    <?php    }
                                    ?>
                                   
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Articles of Association(AOA)</label>
                                    <input type="file"  name="aoa">
                                    <?php 
                                        if($companyData[0]->comp_aoa){ ?>
                                            <div class="mt-2 ml-3">
                                                <a title="download" download href="<?=base_url('assets/company_assets/company_AOA/').$companyData[0]->comp_aoa?>"> <img src="<?=base_url('assets/images/file.png')?>" class="img-fluid "></a>
                                            </div>
                                    <?php    }
                                    ?>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Memorandum of Association(MOA)</label>
                                    <input type="file"  name="moa">
                                    <?php 
                                        if($companyData[0]->comp_moa){ ?>
                                            <div class="mt-2 ml-3">
                                                <a title="download" download href="<?=base_url('assets/company_assets/company_MOA/').$companyData[0]->comp_moa?>"> <img src="<?=base_url('assets/images/file.png')?>" class="img-fluid "></a>
                                            </div>
                                    <?php    }
                                    ?>
                                  </div>
                                  <div class="col-md-3 form-group">
                                    <label class="mb-0">Certificate of GST</label>
                                    <input type="file" name="gst">
                                    <?php 
                                        if($companyData[0]->comp_gst){ ?>
                                            <div class="mt-2 ml-3">
                                                <a title="download" download href="<?=base_url('assets/company_assets/company_GST/').$companyData[0]->comp_gst?>"> <img src="<?=base_url('assets/images/file.png')?>" class="img-fluid "></a>
                                            </div>
                                    <?php    }
                                    ?>
                                  </div>
                                </div>
                                <input type="text" value="<?=$companyData[0]->company_id?>" class="form-control d-none" name="comp_id">
                                <div class="row">
                                  <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Update</button>
                                  </div>
                                </div>
                              </form> 
                        </div>
                    </div>
                </div>
               
              </div>
            </div>
        </div>
   	</div>    
             </section>   
         </section> 

<script>
    $(document).ready(function() {
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor12' );
        $('.js-example-basic-single').select2();
        $('.js-example-basic-multiple').select2();
    });

    $(window).load(function(){
        $(".col-3 input").val("");
            
        $(".input-effect input").focusout(function(){
            if($(this).val() != ""){
                $(this).addclass("has-content");
            }else{
                $(this).removeclass("has-content");
            }
        })
    });
    $(document).ready(function() {
        
    });
</script>
<script type="text/javascript"> 
    $(document).on('submit','#addNewCompany',function(e){
        e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('CompanyAdmin/updateCompanyDetails')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Company!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Company!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Company!", "Already Exist", "error")
                 }
                 setInterval(function(){
                  location.reload();
                 },2000)
                // $("#refresh").load(location.href + " #refresh");
            }
        
         });    
    });

    setTimeout(function(){
       var country = "'<?=$companyData[0]->country?>'";
       var state = "<?=$companyData[0]->state?>";
       var  city= "<?=$companyData[0]->city?>";
      
        $('#countryId option[value='+country+']').attr('selected','selected');
        $('#stateId').html('<option selected="selected" value="'+state+'">'+state+'</option> ' );
        $('#cityId').html('<option selected="selected" value="'+city+'">'+city+'</option> ' );
    }, 1000);
</script>
