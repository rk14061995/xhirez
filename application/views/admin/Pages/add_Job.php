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
                              <div class="col-md-10">
                                <h4 class="card-title">Post New Job</h4>
                              </div>
                              <div class="col-md-2">
                                <a href="<?=base_url('Admin_Dashboard/view_Job')?>" class="btn btn-info">View All Jobs</a>
                              </div>

                            </div>
                            <hr>
                              
                             
                          </div>
                          
                              <div class="card-body">
                                <form id="postNewJob" >
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Category</label>
                                          <select class="form-control" name="jcat">
                                            <option>Select Option</option>
                                            <?php
                                            foreach($getCategory as $category)
                                              {
                                                ?>
                                                <option value="<?=$category->category_id?>"><?=$category->category_name?></option>
                                            <?php
                                            }?>
                                          </select>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Type</label>
                                          <select class="form-control" name="jtype">
                                            <option>Select Option</option>
                                            <?php
                                            foreach($getJobtype as $jobtype)
                                              {
                                                ?>
                                                <option value="<?=$jobtype->type_id?>"><?=$jobtype->type_name ?></option>
                                            <?php
                                            }?>
                                          </select>
                                        </div>
                                        
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Company</label>
                                          <select class="form-control" name="jcompany" id="basicSelect">
                                            <option>Select Option</option>
                                            <?php
                                            foreach($getCompany as $company)
                                            { 
                                              // print_r($company);?>  
                                            <option value="<?=$company->company_id?>"><?=$company->company_name?></option>
                                             <?php
                                           }?>
                                           </select>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Job Location</label>
                                          <input type="text" class="form-control" name="joblocation" placeholder="Eg. Noida ">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label>Job Title</label>
                                          <input type="text" class="form-control" required  name="jtitle">
                                        </div>
                                      </div>
                                      <div class="row">
                                        
                                        <div class="col-md-6">
                                          <label>Vacancy</label>
                                          <input type="number" class="form-control" required  name="jvacancies"> 
                                        </div>
                                        <div class="col-md-6">
                                          <label>Last Date</label>
                                          <input type="date" id="field" min="" class="form-control" required  name="jlastdate">
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label>Skill Needed</label>
                                          <select class="js-example-basic-multiple form-control" name="skills[]" multiple="multiple">
                                            <?php foreach($Skills as $skill): ?>
                                              <option value="<?=$skill->skill_id?>"><?=ucwords($skill->skill_name)?></option>
                                              
                                               <?php endforeach;?>
                                          </select>
                                        </div>
                                        
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <label>Work Experience</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <select class="form-control"  required name="minimumwork">
                                                <option selected>Minimum</option>
                                                
                                                <?php for($min_exp=0; $min_exp <= 30 ; $min_exp++){ ?>
                                                  <option  value="<?=$min_exp?>"><?=$min_exp?> Y</option>
                                                <?php } ?>
                                              </select>
                                            </div>
                                            <div class="col-md-6">
                                              <select class="form-control"  required name="maximumwork">
                                                <option selected>Maximum</option>
                                                
                                                <?php for($max_exp=0; $max_exp <= 30 ; $max_exp++){ ?>
                                                  <option  value="<?=$max_exp?>"><?=$max_exp?> Y</option>
                                                <?php } ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <label>Annual CTC</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <select class="form-control"   required name="currencytype">
                                                <option selected>Currency</option> 
                                                <?php
                                                  foreach($currency as $currencytype)
                                                  { 
                                                    // print_r($company);?>  
                                                  <option value="<?=$currencytype->curr_id?>"><?=ucwords($currencytype->currency_name)?></option>
                                                   <?php
                                                 }?>
                                              </select>
                                            </div>
                                            <div class="col-md-4">
                                              <select class="form-control"   required name="minisalary">
                                                <option selected>Minimum</option> 
                                                 <?php for($min_sal=0; $min_sal <= 30 ; $min_sal++){ ?>
                                                  <option  value="<?=$min_sal?>"><?=$min_sal?></option>
                                                <?php } ?> 
                                              </select>
                                            </div>
                                            <div class="col-md-4">
                                              <select class="form-control"   required name="maxxsalary">
                                                <option selected>Maximum</option> 
                                                <?php for($max_sal=0; $max_sal <= 30 ; $max_sal++){ ?>
                                                  <option  value="<?=$max_sal?>"><?=$max_sal?></option>
                                                <?php } ?>   
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label>UG Qualifications</label>
                                          <input type="text" class="form-control" required  name="ugqualification">
                                        </div>
                                        <div class="col-md-4">
                                          <label>PG Qualifications</label>
                                          <input type="text" class="form-control" required  name="pgqualification">
                                        </div>
                                        <div class="col-md-4">
                                          <label>Doctorate/Ph.D</label>
                                          <input type="text" class="form-control" required  name="doctorate_phd"> 
                                        </div>
                                      </div>
                                        </div>
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label>Description</label>
                                          
                                          <textarea class="form-control" required  name="jdesc"></textarea>
                                          <script>
                                                  CKEDITOR.replace( 'jdesc' );
                                          </script>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    
                                  </div>

                                  
                                  <div class="row">
                                    <div class="col-md-12">
                                      <hr>
                                      <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                  </div>
                                </form>
                                 
                               
                              </div>
                         
                       

                      </div>
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
            <!-- Button trigger modal-->
<!--Modal: Currency modal-->

<!--Modal: currency modal-->

<!--Modal: Min Annual salary-->

<!--Min Annual salary-->

<!--Min Annual salary-->
        </div>
      </div>
    </div>

<script type="text/javascript">
  $(document).on('submit','#postNewJob',function(e){
    e.preventDefault();
    var formData= new FormData($(this)[0]);
         // alert('cas');
      $.ajax({
        url:"<?=base_url('Admin_Job/addJobpostedddd')?>",
         type:"post",
         catche:false,
         contentType:false,
         processData:false,
         data:formData,
         success:function(response){
                   var obj=JSON.parse(response);
                    console.log(obj.status);
                   if(obj.status==0){
                      swal("Job!", "Try Again", "error")
                   }
                   if(obj.status==1){
                    swal("Job!", "Added", "success")
                   }
                   if(obj.status==2){
                   swal("JOb!", "Already Exist", "error")
                   }
                   setInerval(function(){
                      location.reload();
                   },2000);
                  // $("#refresh").load(location.href + " #refresh");
                }
      });  
  });
</script>

    <script type="text/javascript"> 
$(document).on('submit','#maxsalary',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addMaxSalalry')?>",
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
                    swal("Maximum Salary!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Maximum Salary!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Maximum Salary!", "Already Exist", "error")
                 }
                $("#maxsalaryrefresh").load(location.href + " #maxsalaryrefresh");
            }
        
             });    
       
});
</script>
     <script type="text/javascript"> 
$(document).on('submit','#minsalary',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addMinSalary')?>",
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
                    swal("Minimun Salary!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Minimun Salary!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Minimun Salary!", "Already Exist", "error")
                 }
                $("#minsalaryrefresh").load(location.href + " #minsalaryrefresh");
            }
        
             });    
       
});
</script>
    <script type="text/javascript"> 
$(document).on('submit','#currency',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addNewCurrency')?>",
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
                    swal("Currency!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Currency!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Currency!", "Already Exist", "error")
                 }
                $("#currencyrefresh").load(location.href + " #currencyrefresh");
            }
        
             });    
    

    
});
</script>
   <script type="text/javascript"> 
$(document).on('submit','#insert',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addJobpostedddd')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response){
                       var obj=JSON.parse(response);
                        console.log(obj.status);
                       if(obj.status==0){
                          swal("Job!", "Try Again", "error")
                       }
                       if(obj.status==1){
                        swal("Job!", "Added", "success")
                       }
                       if(obj.status==2){
                       swal("JOb!", "Already Exist", "error")
                       }
                      $("#refresh").load(location.href + " #refresh");
                    }
        
             });    
    

    
});
</script>
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("field").setAttribute("min", today);
  $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });

</script>