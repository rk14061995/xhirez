<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              
                              <div class="row">
                                <div class="col-md-9">
                                  <h4 class="card-title">Add Company</h4>
                                </div>
                                <div class="col-md-3">
                                  <a href="<?=base_url('Admin_Dashboard/viewCompany')?>" class="btn btn-info">View All Companies</a>
                                </div>
                              </div>
                              <hr>
                          </div>
                          <div class="card-block">
                            <div class="card-body">
                              <form id="addNewCompany" >
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" required placeholder="Eg. Greenusys Technology"  name="company">
                                  </div>
                                  <div class="col-md-6">
                                    <label>Registration No</label>
                                    <input type="text" class="form-control" placeholder="Eg. RE-2020-01-24/UK07" required  name="regist">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Website URL</label>
                                    <input type="text" class="form-control" required placeholder="Eg. www.greenusys.com" name="url">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Company Phone</label><br>
                                    <input type="text"  class="form-control" required  name="comp_phone">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Company Logo</label><br>
                                    <input type="file"  required  name="file">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required  name="email">
                                  </div>
                                  <div class="col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" required  name="pass">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Description</label>
                                    <textarea class="form-control" required  name="desc" >
                                      
                                    </textarea>
                                    
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <label>Address</label>
                                    <input type="text" class="form-control" required  name="comp_address">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Country</label>
                                    <select name="country" class="countries form-control" id="countryId">
                                        <option value="">Select Country</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>State</label>
                                    <select name="state" class="states form-control" id="stateId">
                                        <option value="">Select State</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>City</label>
                                    <select name="city" class="cities form-control" id="cityId">
                                        <option value="">Select City</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="zipcode">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Certificate of Incorporation</label>
                                    <input type="file"  required  name="Incorpfile">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Articles of Association(AOA)</label>
                                    <input type="file"  required  name="aoa">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Memorandum of Association(MOA)</label>
                                    <input type="file"  required  name="moa">
                                  </div>
                                  <div class="col-md-3">
                                    <label>Certificate of GST</label>
                                    <input type="file"    name="gst">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
                                  </div>
                                </div>
                              </form> 
                            </div>
                          </div>
                       

                          <!-- <div class="card-block">
                              <div class="card-body">
                                  <h5 class="mt-2">Basic Select</h5>
                                  <fieldset class="form-group">
                                      <select class="form-control" id="basicSelect">
                                        <option>Select Option</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                      </select>
                                  </fieldset>
                                  <h5 class="mt-2">Custom select</h5>
                                  <p>To use custom select add class<code>.custom-select</code> to select.</p>
                                  <fieldset class="form-group">
                                      <select class="custom-select" id="customSelect">
                                          <option selected>Open this select menu</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                  </fieldset>
                                  <h5 class="mt-2">Multiple select</h5>
                                  <p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
                                  <fieldset class="form-group">
                                      <select class="form-control" id="countrySelect" multiple="multiple">
                                          <option selected="selected">United States</option>
                                          <option>Canada</option>
                                          <option selected="selected">United Kingdom</option>
                                          <option>Japan</option>
                                          <option>Australia</option>
                                          <option>Germany</option>
                                          <option selected="selected">India</option>
                                          
                                      </select>
                                  </fieldset>
                              </div>
                          </div> -->
                      </div>
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
        </div>
      </div>
    </div>
   <script type="text/javascript"> 
$(document).on('submit','#addNewCompany',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Company/addCompany')?>",
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
</script>