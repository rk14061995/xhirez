<?php
  // $jobDetails->job_title
    $jobSkills=implode(',',$jobDetails[0]['skills']);
    // print_r($jobSkills);
    $jobDetails=$jobDetails[0]['JD'];
 
?>



<section class="paduj5 backG">

    <div class="  pt-4">
        <div class="container">
           <div class="">
              <div class="row mx-0">
                <div class="col-md-8">
                   <div class="bg-white shadow px-4 pt-1 pb-4 UYhu">
                     <h4 class="colBrown">Job Details</h4>
                      <div class="row mt-3 mx-0 form-group">
                          <div class="col-md-4">
                              <strong><?=$jobDetails->job_title?></strong>
                          </div>
                          <div class="col-md-8">
                              <span>Hiring for <?=$jobDetails->job_title?> <?=$jobDetails->job_location?> II Exp min <?=$jobDetails->min_work_exp?> years</span>
                          </div>
                      </div>

                      <div class="row mt-3 mx-0 form-group">
                          <div class="col-md-4">
                              <strong>Employment type</strong>
                          </div>
                          <div class="col-md-8">
                              <span><?=$jobDetails->type_name?></span>
                          </div>
                      </div>
                      <div class="row mt-3 mx-0 form-group">
                        <div class="col-md-4">
                            <strong>Industry of the Employer</strong>
                        </div>
                        <div class="col-md-8">
                            <span><?=$jobDetails->category_name?></span>
                        </div>
                      </div>
                      <!-- <div class="row mt-3 mx-0 form-group">
                        <div class="col-md-4">
                            <strong>Department / Functional Area of the Job</strong>
                        </div>
                        <div class="col-md-8">
                            <span>Media Planning / Buying, Application Programming / Maintenance</span>
                        </div>
                      </div> -->
                    <div class="row mt-3 mx-0 form-group">
                      <div class="col-md-4">
                          <strong>Job Description</strong>
                      </div>
                      <div class="col-md-8">
                        <?=$jobDetails->job_desc?>
                        <!-- <strong>
                          We are seeking experienced Full stack developer between 5- 10 years who have hands-on development experience in Java, J2EE, Web services, Frameworks, and UI Technologies. This position is for a technology expert who will be responsible for multiple applications.
                        </strong> -->
                          <!-- <br>
                          <br>
                          <strong>Skills :</strong>
                          <span>Excellent communication, teamwork and interpersonal skills.
                            Strong analytical capability and problem-solving skills.
                            Bachelor of Science in Computer Science or relevant technical degree.
                            More than 5 years of work experience in software development.
                            OOPS, Database Knowledge (Sybase/ DB2)</span>
                            <br>
                          <br> -->
                          <!-- <strong>Required Technical Skills : </strong>
                          <ul class="list-unstyled">
                              <li>
                                <span>Java / Core Java / Advanced Java</span>
                              </li>
                              <li>
                                <span>Spring/ Hibernate/ Struts/ CDI</span>
                              </li>
                              <li>
                                <span>EJB, Web services,</span>
                              </li>
                              <li>
                                <span>Angular 4 above</span>
                              </li>
                              <li>
                                <span>JSP, Servlets</span>
                              </li>
                              <li>
                                <span>JavaScript toolkits</span>
                              </li>
                              <li>
                                <span>Web/Application Servers</span>
                              </li>
                              <li>
                                <span> OO and Relational Modeling skills</span>
                              </li>
                              <li>
                                <span> Tomcat, Apache Webservers</span>
                              </li>
                              <li>
                                <span>Desired Technical Skills:</span>
                              </li>
                              <li>
                                <span> CSS, HTML5 a plus</span>
                              </li>
                              <li>
                                <span>ExtJS, Jquery</span>
                              </li>
                              <li>
                                <span> Location: Collabera Bangalore</span>
                              </li>
                              <li>
                                <span>Max Budget: 12 LPA</span>
                              </li>
                              <li>
                                <span>Joining: Immediate to 15 Days only</span>
                              </li>
                                
                          </ul> -->

                          <div class="mt-4">
                            <strong>Interested can share updated resume at <?=$jobDetails->hr_email_id?></strong>
                          </div>
                      </div>
                    </div>
                    <div class="row mt-3 mx-0 form-group">
                      <div class="col-md-4">
                          <strong>Keywords / Skills</strong>
                      </div>
                      <div class="col-md-8">
                          <span><?=$jobSkills?></span>
                      </div>
                    </div>
                    <!-- <div class="row mt-3 mx-0 form-group">
                      <div class="col-md-4">
                          <strong>Mandatory Skills</strong>
                      </div>
                      <div class="col-md-8">
                          <span>java, angular</span>
                      </div>
                    </div> -->
                    <!-- <div class="row mt-3 mx-0 form-group">
                      <div class="col-md-4">
                          <strong>Total Experience</strong>
                      </div>
                      <div class="col-md-8">
                          <span>5 Yrs to 8 Yrs</span>
                      </div>
                    </div> -->
                 <!--  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Salary Type</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Yearly</span>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Annual Salary Offered</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Rs 7 Lakh / Yr to Rs 12 Lakh / Yr</span>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Location of the Job</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Bangalore</span>
                    </div>
                  </div>
 -->
                 <!--  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Job Type :</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Full time</span>
                    </div>
                  </div> -->

                
                  <!-- <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Shift Type :</strong>
                    </div>
                    <div class="col-md-8">
                        <span>- Not Mentioned -</span>
                    </div>
                  </div>

                  <h5 class="mt-3 mb-2">Desired Candidate Details</h5>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Industry</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Any</span>
                    </div>
                  </div> -->
                 <!--  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Current Location:</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Any</span>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Annual Salary</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Any to Any</span>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Team Size Managed</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Any</span>
                    </div>
                  </div> -->

                  <!-- <h5 class="mt-3 mb-2">Company Details</h5>

                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Company Name</strong>
                    </div>
                    <div class="col-md-8">
                        <span>Margdarshakam India</span>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Company Description</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex">
                          <div class="">
                            <input type="checkbox" name="">
                          </div>
                          <div class="">
                            <strong class="ml-1"> Hide Company Information from candidates</strong>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Telephone</strong>
                    </div>
                    <div class="col-md-8">
                       <input type="text" name="" class="form-control pamInput">
                    </div>
                  </div> -->

                  <!-- <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Email</strong><sup class="text-danger">*</sup>
                    </div>
                    <div class="col-md-8">
                       <input type="email" placeholder="email" name="" class="form-control pamInput">
                       <div class="d-flex">
                        <div class="">
                          <input type="checkbox" name="">
                        </div>
                        <div class="ml-1">
                          <strong > Hide Company Information from candidates</strong>
                        </div>
                      </div>  
                    </div>
                  </div>
                  <div class="row mt-3 mx-0 form-group">
                    <div class="col-md-4">
                        <strong>Applications on Email</strong>
                    </div>
                    <div class="col-md-8">
                       <select  name="" class="form-control pamInput">
                          <option >Receive All Applications Immediately</option>
                        </select>
                    </div>
                  </div>
                  <div class="d-flex pl-2">
                    <div class="">
                      <input type="checkbox" name="">
                    </div>
                    <div class="">
                      <span class="ml-2"> I agree to the  <a href="">terms of use</a>.</span>
                    </div>
                  </div> 

                  <ul class="w-100 mt-4 pl-0 htomin">
                      <li class="">
                        <button class="ntns ml-0">Save Changes</button>
                      </li>
                      <li class="">
                        <button class="ntns">Republish</button>
                      </li>
                      <li class="">
                        <button class="ntns">Expire</button>
                      </li>
                      <li class="">
                        <button class="ntns">Cancel</button>
                      </li>

                  </ul> -->
                </div>
              </div>

                <div class="col-md-4">
                    <div class="">
                       

                        <div class="">
                          <div id="tabs" class="project-tab shadow">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">JD Preview</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Search Preview</a>
                                   
                                </div>
                            </nav>
                            <div class="tab-content mt-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                  <div class="p-2 sideBoa">
                                    <h5 class="mb-2">Hiring for Java full Stack Developer II Bangalore II Exp min 5 years</h5>
                                    <span class="text-info">Margdarshakam India </span>

                                    <div class="row">
                                        <div class="col-md-4 px-0">
                                          <div class="PoaSid">
                                            <span><i class="fas fa-briefcase"></i></span>
                                            <span class="ml-1">5 Yrs to 8 Yrs</span>
                                          </div>
                                        </div>
                                        <div class="col-md-4 px-0">
                                          <div class="PoaSid">
                                            <span><i class="fas fa-wallet"></i></span>
                                            <span class="ml-1">Rs 7 to 12 Lakh / Yr</span>
                                          </div>
                                        </div>
                                        <div class="col-md-4 px-0">
                                          <div class="PoaSid">
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            <span class="ml-1">Bangalore</span>
                                          </div>
                                        </div>
                                    </div>

                                      <h6 >Job Description</h6>

                                      <div class="scrolaj">
                                        <span>We are seeking experienced Full stack developer between 5- 10 years who have hands-on development experience in Java, J2EE, Web services, Frameworks, and UI Technologies. This position is for a technology expert who will be responsible for multiple applications.
                                            Skills :Excellent communication, teamwork and interpersonal skills.Strong analytical capability and problem-solving skills.Bachelor of Science in Computer Science or relevant technical degree.More than 5 years of work experience in software development.OOPS, Database Knowledge (Sybase/ DB2)Required Technical Skills : Java / Core Java / Advanced JavaSpring/ Hibernate/ Struts/ CDIEJB, Web services,Angular 4 aboveJSP, ServletsJavaScript toolkitsWeb/Application Se</span>
                                      </div>
                                      
                                      <h6 >Department</h6>
                                        <span>Media Planning / Buying, Application Programming / Maintenance</span>
                                      
                                      <h6>Industry</h6>  

                                        <span>IT - Software</span>
                                        <h6>Skills</h6>
                                        <span>Java,Hibernate,Struts,"Spring Framework","Core Java",Servlets,"Advanced Java",Angular</span>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="p-2 sideBoa poki">
                                      <h5 class="mb-2">Hiring for Java full Stack Developer II Bangalore II Exp min 5 years</h5>
                                    <div class="dpsi">
                                      <span class="text-info">Margdarshakam India </span>
                                      <span>Posted on : 20/Oct/2020</span>
                                    </div>

                                    <ul class="mt-2 pl-4 dfle">
                                        <li class="">
                                          <span>5 Yrs to 8 Yrs</span>
                                        </li>
                                        <li class=" ml-5">
                                          <span>Bangalore</span>
                                        </li>
                                    </ul>

                                    <div class="scrolaj">
                                        <span>We are seeking experienced Full stack developer between 5- 10 years who have hands-on development experience in Java, J2EE, Web services, Frameworks, and UI Technologies. This position is for a technology expert who will be responsible for multiple applications.
                                            Skills :Excellent communication, teamwork and interpersonal skills.Strong analytical capability and problem-solving skills.Bachelor of Science in Computer Science or relevant technical degree.More than 5 years of work experience in software development.OOPS, Database Knowledge (Sybase/ DB2)Required Technical Skills : Java / Core Java / Advanced JavaSpring/ Hibernate/ Struts/ CDIEJB, Web services,Angular 4 aboveJSP, ServletsJavaScript toolkitsWeb/Application Se</span>
                                      </div>
                                      <div class="position-relative">
                                        <div class="pSkils">
                                          <div class="">
                                            <span><strong>Skills :</strong>
                                              <small class="ml-1">Java,Hibernate,Struts,"Spring Framework","Core Java",Servlets,"Advanced Java",Angular</small>
                                            </span>
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
   	</div>
</section> 
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    $(document).on("change","#internalLoctn",function(){
        if($(this).is(":checked")){
        $("#locInter").show();
    }
    else if($(this).is(":not(:checked)")){
        $("#locInter").hide();
    }
    });
</script>
<script>
    $(window).load(function(){
    $(".col-3 input").val("");
    
    $(".input-effect input").focusout(function(){
        if($(this).val() != ""){
        $(this).addClass("has-content");
        }else{
        $(this).removeClass("has-content");
        }
    })
    });
</script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>