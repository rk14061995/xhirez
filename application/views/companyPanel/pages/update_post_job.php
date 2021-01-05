<section class="paduj5">
             <section class="py-5">
             <div class=" shadow pt-3">
      <div class=" container">
        <div class="row ">
          <div class="col-md-4">
            <h4 class="topHH">Post Job

            <?php
              $companuSession = unserialize($this->session->userdata('companySession'));
              // print_r($companuSession);
            ?>
            </h4>
          </div>
          <div class="col-md-8">
            <div class="text-right">
                <button class="btnTo">Post a walk-in</button>
                <button class="btnTo ml-2">Manage Jobs</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   	<div class="">
        <div class="">
     

            <div class="mt-5">
              <div class="row mx-0">
                <div class="col-md-8">
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
                            <form class="position-relative" method="POST" id="postNewJob">
                              <div class="form__group field">
                                <input type="text" class="form__field" placeholder="Name" name="name" id='name' value="<?=$jobdata[0]->job_title?>" required />
                                <label for="name" class="form__label">Job Title</label>
                              </div>
                              <div class="row form__group mx-0">
                                <div class="col-md-6 pl-0">
                                  <div class="form__group field">
                                      <select class="form__field" name="jobType" required >
                                          <option selected >Select</option>
                                          <?php 
                                              foreach($jobType as $jobs){ 
                                                    if($jobdata[0]->job_type == $jobs->type_id){ ?>
                                                            <option value="<?=$jobs->type_id?>" selected ><?=$jobs->type_name?></option>
                                            <?php   }else{ ?>
                                                            <option value="<?=$jobs->type_id?>" ><?=$jobs->type_name?></option>
                                            <?php   }
                                                  }
                                          ?>
                                      </select>
                                    <label for="vacancies" class="form__label">Job Type <sup class="text-danger">*</sup></label>
                                  </div>
                                </div>
                              </div>
                              <div class="row  form__group">
                                <div class="col-md-12">
                                  <label>Skill Needed</label>
                                 <?php 
                                    
                                     $ski = explode(',',$jobdata[0]->skills);
                                     sort($ski);
                                     
                                  ?>
                                 
                                    <select class="js-example-basic-multiple form-control" name="skills[]" multiple="multiple">
                                    <?php
                                            $d =0;
                                         foreach($skills as $skill){
                                            if($d < count($ski)){
                                              
                                                if($ski[$d]==$skill->skill_id){ ?>
                                                    <option selected value="<?=$skill->skill_id?>"><?=ucwords($skill->skill_name)?></option>
                                               <?php  $d++; }else{ ?>
                                                    <option value="<?=$skill->skill_id?>"><?=ucwords($skill->skill_name)?></option>
                                            <?php   }
                                            }else{ ?>
                                                <option value="<?=$skill->skill_id?>"><?=ucwords($skill->skill_name)?></option>
                                           <?php }
                                      
                                        }?>
                                    </select>
                                </div>
                              </div>
                             <div class="row  form__group mx-0">
                              <div class="form__group field col-md-6 px-2">
                                  <input type="number" class="form__field" value="1" min="1" value="<?=$jobdata[0]->vacancies_?>" placeholder="Name" id="vacancies" required />
                                  <label for="vacancies" class="form__label">Number of Vacancies <sup class="text-danger">*</sup></label>
                                </div>
                                <div class="form__group field col-md-6 px-2">
                                  <select type="number" class="form__field" name="industry" required >
                                  <option selected disabled>select</option>
                                              <?php
                                                  foreach($industry as $categories){ 
                                                    if($jobdata[0]->job_category == $categories->category_id){ ?>
                                                        <option selected value="<?=$categories->category_id?>"><?=$categories->category_name?></option>
                                        <?php   }else{ ?>
                                                        <option value="<?=$categories->category_id?>"><?=$categories->category_name?></option>
                                        <?php   }
                                              }
                                       ?>
                                    </select>
                                  <label for="vacancies" class="form__label">Industry of the employer <sup class="text-danger">*</sup></label>
                                </div>
                             </div>
                            
                             <div class="form__group field">
                             	<label for="vacancies" class="form__label mb-3">Job Description <sup class="text-danger">*</sup></label>
                                <div class="pt-3">
                               
                                    <textarea class="editor" name="editor12" ><?=$jobdata[0]->job_desc?></textarea>
                                </div>
                               <div class=""><small>Min char 100 and Max char 5000.</small></div>
                             </div>

                             <div class="row form__group mx-0">
                             	<div class="col-md-6 pl-0">
                             		<div class="form__group field">
		                                <select type="number" class="form__field" name="minExp" required >
                                        <option selected>Minimum</option>
                                        <?php for($min_exp=0; $min_exp <= 30 ; $min_exp++){
                                                if($jobdata[0]->min_work_exp==$min_exp){ ?>
                                                    <option selected value="<?=$min_exp?>"><?=$min_exp?> Y</option>
                                            <?php }else{ ?>
                                                    <option  value="<?=$min_exp?>"><?=$min_exp?> Y</option>
                                        <?php     }
                                             } 
                                        ?>
                                    </select>
		                               <label for="vacancies" class="form__label">Min Exp <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             	<div class="col-md-6 pr-0">
                             		<div class="form__group field">
                                    <select class="form__field" name="maxExp" required >
                                        <option selected>Maximum</option>
                                        <?php for($max_exp=0; $max_exp <= 30 ; $max_exp++){ 
                                          
                                          if($jobdata[0]->max_work_exp==$max_exp){ ?>
                                                    <option selected  option  value="<?=$max_exp?>"><?=$max_exp?> Y</option>
                                            <?php }else{ ?>
                                                <option  value="<?=$max_exp?>"><?=$max_exp?> Y</option>
                                        <?php     }
                                             } 
                                        ?> 
                                    </select>
                                    <label for="vacancies" class="form__label">Max Exp <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             </div>

                         
                                      
                              <h6 class="mt-5 mb-0 "><strong>Annual Salary</strong></h6>
                            <div class="row mx-0">
                              <div class="col-md-3 pl-0">
                             		<div class="form__group field">
                                    <select class="form__field" name="currency_type" id="currency_type" required >
                                        <option selected>Currency</option> 
                                        <?php
                                          foreach($currency as $currencytype)
                                          { 
                                            if($jobdata[0]->currency_type==$currencytype->curr_id){ ?>
                                                    <option selected value="<?=$currencytype->curr_id?>"><?=ucwords($currencytype->currency_name)?></option>
                                            <?php }else{ ?>
                                                <option value="<?=$currencytype->curr_id?>"><?=ucwords($currencytype->currency_name)?></option>
                                        <?php   }
                                            }
                                        ?>
                                    </select>
		                               <label for="currency_type" class="form__label">Min Salary <sup class="text-danger">*</sup></label>
		                            </div>
		                               
                              </div>
                             	<div class="col-md-3 pl-0">
                             		<div class="form__group field">
                                    <select class="form__field" name="minSalary" id="minSalary" required >
                                        <option selected>Minimum</option> 
                                           <?php for($min_sal=0; $min_sal <= 30 ; $min_sal++){ 
                                                if($jobdata[0]->min_annual_sal == $min_sal){ ?>
                                                        <option selected value="<?=$min_sal?>"><?=$min_sal?></option>
                                                <?php }else{ ?>
                                                        <option  value="<?=$min_sal?>"><?=$min_sal?></option>
                                            <?php     }
                                                } 
                                            ?> 
                                    </select>
		                               <label for="minSalary" class="form__label">Min Salary <sup class="text-danger">*</sup></label>
		                            </div>
		                               
                             	</div>
                             	<div class="col-md-3 pr-0">
                             		<div class="form__group field">
                                    <select class="form__field" name="maxSalary" id="maxSalary" required >
                                      <option selected>Maximum</option> 
                                        <?php for($max_sal=0; $max_sal <= 30 ; $max_sal++){
                                            if($jobdata[0]->max_annaul_sal == $max_sal){ ?>
                                                <option selected value="<?=$max_sal?>"><?=$max_sal?></option>
                                           <?php }else{ ?>
                                                <option  value="<?=$max_sal?>"><?=$max_sal?></option>
                                          
                                        <?php       }
                                                } 
                                        ?>   
                                    </select>
		                               <label for="maxSalary" class="form__label">Max Salary <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                            </div>

                            <div class="">max_annaul_sal
	                            <div class="form__group field">
                                  <textarea class="form__field" name="company_address" id="company_address" rows="4" required ><?=$jobdata[0]->job_location_?></textarea>
	                                <label for="company_address" class="form__label">Location of the Job <sup class="text-danger">*</sup></label>
	                            </div>
                               
	                          </div>

                            <div class="row form__group ">
                              <div class="col-md-4">
                                <div class="form__group field">
                                  <label class="form__label">UG Qualifications </label>
                                  <input type="text" class="form__field"  value="<?=$jobdata[0]->ug_qualification?>"  name="ugqualification">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form__group field">
                                  <label class="form__label">PG Qualifications</label>
                                  <input type="text" class="form__field" value="<?=$jobdata[0]->pg_qualification?>"   name="pgqualification">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form__group field">
                                  <label class="form__label">Doctorate/Ph.D</label>
                                  <input type="text" class="form__field" value="<?=$jobdata[0]->phd_qualification?>"  name="doctorate_phd"> 
                                </div>
                              </div>
                            </div>                              
                            <input type="text" value="<?=$jobdata[0]->job_id?>" class="d-none" name="job_id">
                            <input type="text" value="<?=$jobdata[0]->company_id?>" class="d-none" name="company_id">

                              <div class="w-100 mt-4 row mx-0 htomin">
                                <div class="col-md-2 col-6">
                                  <button class="ntns">Update</button>
                                </div>
                                <!-- <div class="col-md-4 col-6">
                                  <button class="ntns">Save as draft</button>
                                </div> -->
                              </div>
                            </form>
                        </div>
                    </div>
                </div>

<script type="text/javascript">
  $(document).on('submit','#postNewJob',function(e){
    e.preventDefault();
    var formData= new FormData($(this)[0]);
         // alert('cas');
      $.ajax({
        url:"<?=base_url('CompanyAdmin/updateJobPost')?>",
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
                   },3000);
                  // $("#refresh").load(location.href + " #refresh");
                }
      });  
  });
</script>
                <div class="col-md-4">
                    <div class="">
                        <div class="row mx-0 py-3 Calok">
                            <div class="col-md-2 pr-0">
                              <div class="">
                                <img src="../assets/images/writing.png" class="img-fluid " alt="" />
                               
                              </div>
                            </div>
                            <div class="col-md-10">
                              <div class="">
                               <h6> Do you have Additional Questions?</h6>
                                <p>Use our new Questionnaire feature and ask questions from job seekers before they apply. Explore</p>
                              </div>
                            </div>
                        </div>

                        <div class="mt-4">
                          <div id="tabs" class="project-tab shadow">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">JD Preview</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Search Preview</a>
                                   
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                  <div class="p-2">
                                    11
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="p-2 poki">
                                      
                                      <div class="pSkils">
                                          <div class="">
                                            <span>Skills</span>
                                          </div>
                                          <div class="">
                                            <a href="">Apply</a>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                
                            </div>
                          </div>
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
        