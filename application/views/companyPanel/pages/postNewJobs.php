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
           <div class="row py-5">
              <div class="col-md-7">
                <div class="m-auto w-75">

                  <div class="form__group field">
                    <select  class="form__field" type="text" placeholder="">
                      <option value="" selected disabled>Select from previous job</option>
                    </select>
                    
                  </div>
               
                </div>
              </div>
            </div>

            <div class="">
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
                          <div class="col-md-4 pihs">
                            <div class="">
                              <a href="">
                                Desired Candidate Details
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4 pihs">
                            <div class="">
                              <a href="">
                                Job Scheduling
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="mt-3 shadow bg-white p-3">
                            <p class="">Please select which type of job you want to post:</p>
                            <div class="matchds">
                                 <div class="d-flex">
                                    <div class="">
                                      <input type="radio" name="macth"/>
                                    </div>
                                    <div class="ml-2"> Smart Match <sup>*</sup></div>
                                  </div>
                            </div>
                        </div>

                        <div class="mt-3 shadow  p-4">
                            <div class="position-relative">
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
                                        <input type="radio" checked name="employ"/>
                                      </div>
                                      <div class="ml-2"> Permanent</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employ"/>
                                      </div>
                                      <div class="ml-2"> Contractual</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employ"/>
                                      </div>
                                      <div class="ml-2"> Internship</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="employ"/>
                                      </div>
                                      <div class="ml-2"> Work from home</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form__group field">
                                <input type="number" class="form__field" value="1" min="1" placeholder="Name" id="vacancies" required />
                                <label for="vacancies" class="form__label">Number of Vacancies <sup class="text-danger">*</sup></label>
                              </div>
                              <div class="form__group field">
                                 <select type="number" class="form__field"id="industry" required >
                                    <option selected disabled>select</option>
                                  </select>
                                <label for="vacancies" class="form__label">Industry of the employer <sup class="text-danger">*</sup></label>
                              </div>
                              <div class="form__group field">
                                <select type="number" class="form__field"id="industry" required >
                                   <option selected disabled>select</option>
                                 </select>
                               <label for="vacancies" class="form__label">Department / Functional Area of the Job <sup class="text-danger">*</sup></label>
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
		                                <select type="number" class="form__field"id="industry" required >
		                                   <option selected disabled>select</option>
		                                 </select>
		                               <label for="vacancies" class="form__label">Min Exp <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             	<div class="col-md-6 pr-0">
                             		<div class="form__group field">
		                                <select type="number" class="form__field"id="industry" required >
		                                   <option selected disabled>select</option>
		                                 </select>
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
                                        <input type="radio" checked name="salary"/>
                                      </div>
                                      <div class="ml-2"> Yearly</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="salary"/>
                                      </div>
                                      <div class="ml-2"> Monthly</div>
                                    </div>
                                  </div>
                                 
                                </div>
                              </div>	

                              <div class="row mx-0">
                             	<div class="col-md-6 pl-0">
                             		<div class="form__group field">
		                                <select  class="form__field"id="industry" required >
		                                 
		                                 </select>
		                               <label for="vacancies" class="form__label">Min Salary <sup class="text-danger">*</sup></label>
		                            </div>
		                            <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox"  name="employ"/>
                                      </div>
                                      <div class="ml-2"> <small> Hide Salary from Candidates</small></div>
                                    </div>
                             	</div>
                             	<div class="col-md-6 pr-0">
                             		<div class="form__group field">
		                                <select  class="form__field"id="industry" required >
		                                 
		                                 </select>
		                               <label for="vacancies" class="form__label">Max Salary <sup class="text-danger">*</sup></label>
		                            </div>
                             	</div>
                             </div>

                            <div class="">
	                            <div class="form__group field">
	                                <select  class="form__field"id="industry" required >
	                                   <option selected disabled>Select Job Location</option>
	                                 </select>
	                               <label for="vacancies" class="form__label">Location of the Job <sup class="text-danger">*</sup></label>
	                            </div>
	                            <div class="d-flex">
                                  <div class="">
                                    <input type="checkbox"  name="employ" id="internalLoctn"/>
                                  </div>
                                  <div class="ml-2"> <small> include international locations</small></div>
                                </div>
	                        </div>

	                        <div class="form__group field" id="locInter">
	                            <div class="">
	                                <select  class="js-example-basic-single form__field"id="industry" required >
	                                   <option selected disabled>Select International Location</option>
	                                   <option value="AL">s</option>
									
									  <option value="WY">ss</option>
	                                 </select>
	                             	
	                            </div>
	                            
	                        </div>	
	                     
                             <div class="form__group">
                                <label>Job type</label>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" checked name="jobtype"/>
                                      </div>
                                      <div class="ml-2"> Full time</div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="radio" name="jobtype"/>
                                      </div>
                                      <div class="ml-2"> Part time</div>
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
                                        <input type="checkbox" checked name=""/>
                                      </div>
                                      <div class="ml-2"> Morning</div>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name=""/>
                                      </div>
                                      <div class="ml-2"> Noon</div>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name=""/>
                                      </div>
                                      <div class="ml-2"> Evening</div>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name=""/>
                                      </div>
                                      <div class="ml-2"> Night</div>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name=""/>
                                      </div>
                                      <div class="ml-2"> Split</div>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="d-flex">
                                      <div class="">
                                        <input type="checkbox" name=""/>
                                      </div>
                                      <div class="ml-2"> Rotating</div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="mt-2">
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
                              </div>

                              <div class="w-100 mt-4 row mx-0 htomin">
                                <div class="col-md-2 col-6">
                                  <button class="ntns">Next</button>
                                </div>
                                <div class="col-md-4 col-6">
                                  <button class="ntns">Save as draft</button>
                                </div>
                              </div>
                            </div>
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
      
         </script>