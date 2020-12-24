  <section class="paduj5">
             <section class="py-5">
             <div class=" shadow pt-3">
      <div class=" container">
        <div class="row ">
          <div class="col-md-4">
            <h4 class="topHH">Post Job</h4>
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
           <!-- <div class="row py-5">
              <div class="col-md-7">
                <div class="m-auto w-75">

                  <div class="form__group field">
                    <select  class="form__field" type="text" placeholder="">
                      <option value="" selected disabled>Select from previous job</option>
                    </select>
                    
                  </div>
               
                </div>
              </div>
            </div> -->

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
                          <!-- <div class="col-md-4 pihs">
                            <div class="">
                              <span href="">
                                Desired Candidate Details
                              </span>
                            </div>
                          </div> -->
                          <!-- <div class="col-md-4 pihs">
                            <div class="">
                              <a href="">
                                Job Scheduling
                              </a>
                            </div>
                          </div> -->
                        

                        <!-- <div class="mt-3 shadow bg-white p-3">
                            <p class="">Please select which type of job you want to post:</p>
                            <div class="matchds">
                                 <div class="d-flex">
                                    <div class="">
                                      <input type="radio" name="macth"/>
                                    </div>
                                    <div class="ml-2"> Smart Match <sup>*</sup></div>
                                  </div>
                            </div>
                        </div> -->

                        <div class="mt-3 shadow  p-4">
                            <form class="position-relative" method="POST" action="<?=base_url('CompanyAdmin/addPost')?>">
                              <div class="form__group field">
                                <input type="text" class="form__field" placeholder="Name" name="name" id='name' required />
                                <label for="name" class="form__label">Job Title</label>
                              </div>
 
                              <div class="form__group">
                                <label>Employment type</label>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" checked name="employType" id="permanent"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="permanent"> Permanent</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employType" id="contractual"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="contractual"> Contractual</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employType" id="intern"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="intern"> Internship</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employType" id="wfh"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="wfh"> Work from home</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             <div class="row mx-0">
                              <div class="form__group field col-md-6 px-2">
                                  <input type="number" class="form__field" value="1" min="1" placeholder="Name" id="vacancies" required />
                                  <label for="vacancies" class="form__label">Number of Vacancies <sup class="text-danger">*</sup></label>
                                </div>
                                <div class="form__group field col-md-6 px-2">
                                  <select type="number" class="form__field" name="industry" required >
                                  <option selected disabled>select</option>
                                              <?php
                                                  foreach($industry as $categories){ ?>
                                                        <option value="<?=$categories->category_id?>"><?=$categories->category_name?></option>
                                              <?php    }
                                              ?>
                                    </select>
                                  <label for="vacancies" class="form__label">Industry of the employer <sup class="text-danger">*</sup></label>
                                </div>
                             </div>
                            
                             <div class="form__group field">
                             	<label for="vacancies" class="form__label mb-3">Job Description <sup class="text-danger">*</sup></label>
                                <div class="pt-3">
                               
                                    <textarea class="editor" name="editor12" ></textarea>
                                </div>
                               <div class=""><small>Min char 100 and Max char 5000.</small></div>
                             </div>

                             <div class="row mx-0">
                             	<div class="col-md-6 pl-0">
                             		<div class="form__group field">
		                                <input type="number" class="form__field" name="minExp" required >
		                                  
		                               <label for="vacancies" class="form__label">Min Exp <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             	<div class="col-md-6 pr-0">
                             		<div class="form__group field">
                                    <input type="number" class="form__field" name="maxExp" required >
                                    <label for="vacancies" class="form__label">Max Exp <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             </div>

                             <div class="form__group">
                                <label>Salary type</label>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" checked name="salaryType" id="yrs"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="yrs"> Yearly</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="salaryType" id="mnth"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="mnth"> Monthly</label>
                                    </div>
                                  </div>
                                 
                                </div>
                              </div>	

                              <div class="row mx-0">
                             	<div class="col-md-6 pl-0">
                             		<div class="form__group field">
                                    <input type="number" class="form__field" name="minSalary" required >
		                               <label for="vacancies" class="form__label">Min Salary <sup class="text-danger">*</sup></label>
		                            </div>
		                                <!-- <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox"  name="employ"/>
                                      </div>
                                      <div class="ml-2"> <small> Hide Salary from Candidates</small></div>
                                    </div> -->
                             	</div>
                             	<div class="col-md-6 pr-0">
                             		<div class="form__group field">
                                    <input type="number" class="form__field" name="maxSalary" required >
		                               <label for="vacancies" class="form__label">Max Salary <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             </div>

                            <div class="">
	                            <div class="form__group field">
                                  <textarea class="form__field" name="company_address" rows="4" required ></textarea>
	                                <label for="vacancies" class="form__label">Location of the Job <sup class="text-danger">*</sup></label>
	                            </div>
                                  <!-- <div class="d-flex">
                                    <div class="">
                                      <input type="checkbox"  name="employ" id="internalLoctn"/>
                                    </div>
                                    <div class="ml-2"> <small> include international locations</small></div>
                                  </div> -->
	                        </div>

	                        <!-- <div class="form__group field" id="locInter">
	                            <div class="">
	                                <select  class="js-example-basic-single form__field"id="industry" required >
	                                   <option selected disabled>Select International Location</option>
	                                   <option value="AL">s</option>
									
									                    <option value="WY">ss</option>
	                                 </select>
	                             	
	                            </div>
	                            
	                        </div>	 -->
	                     
                             <div class="form__group">
                                <label>Job type</label>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" checked name="jobtype" id="fullTIme"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="fullTIme"> Full time</label>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="jobtype" id="partTIme"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="partTIme"> Part time</label>
                                    </div>
                                  </div>
                                 
                                </div>
                              </div>


                              <div class="form__group">
                                <label>Shift type</label>
                                <div class="row">
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" checked name="shiftTiming" id="morning" />
                                      </div>
                                      <label class="ml-2 mb-0" for="morning"> Morning</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name="shiftTiming" id="noon"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="noon"> Noon</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name="shiftTiming" id="evening"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="evening"> Evening</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name="shiftTiming" id="night"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="night"> Night</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name="shiftTiming" id="split"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="split"> Split</label>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name="shiftTiming" id="rotating"/>
                                      </div>
                                      <label class="ml-2 mb-0" for="rotating"> Rotating</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <select class="js-example-basic-multiple form-control" name="skills[]" multiple="multiple">
                                  <?php foreach($Skills as $skill): ?>
                                    <option value="<?=$skill->skill_id?>"><?=ucwords($skill->skill_name)?></option>
                                    
                                      <?php endforeach;?>
                                </select>
                              </div>

                              <!-- <div class="mt-2">
                                <h5 class="my-4">Company Details</h5>
                                <div class="row mx-0">
                                  <div class="col-md-6">
                                    <div class="s">
                                        <span>Company Name</span>
                                        <h6 class="mt-3">Margdarshakam India</h6>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="s">
                                      <label>Hiring For</label>
                                      <input type="text" placeholder="" name="" class="form-control pamInput"/>
                                    </div>
                                  </div>
                                </div>

                                <div class="">
                                  <div class="form__group field">
                                    <label for="vacancies" class="form__label mb-3">Company Description<sup class="text-danger">*</sup></label>
                                     <div class="pt-3"> 
                                      <textarea class="editor" name="editor1" ></textarea>
                                     </div>
                                    <div class=""><small>Min char 100 and Max char 5000.</small></div>
                                  </div>
                                </div>

                                <div class="d-flex mt-2">
                                  <div class="">
                                    <input type="checkbox"  name="employ" id="internalLoctn"/>
                                  </div>
                                  <div class="ml-2"> <small> Hide Company Detail and Name from candidates</small></div>
                                </div>

                                <div class="row mx-0">
                                  <div class="col-md-6">
                                    <div class="s">
                                      <label>Telephone </label>
                                      <input type="text" placeholder="" name="" class="form-control pamInput"/>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="s">
                                      <label>Email </label>
                                      <input type="text" placeholder="" name="" class="form-control pamInput"/>
                                    </div>
                                  </div>
                                </div>
                              </div> -->

                              <div class="w-100 mt-4 row mx-0 htomin">
                                <div class="col-md-2 col-6">
                                  <button class="ntns">Next</button>
                                </div>
                                <div class="col-md-4 col-6">
                                  <button class="ntns">Save as draft</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="">
                        <div class="row mx-0 py-3 Calok">
                            <div class="col-md-2 pr-0">
                              <div class="">
                                <img src={require("../../assets/images/writing.png")} class="img-fluid " alt="" />
                               
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
                $('.js-example-basic-multiple').select2();
            });
         </script>
        