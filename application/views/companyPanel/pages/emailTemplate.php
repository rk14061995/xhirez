 <section class="paduj5">
                <section class="py-5">
                <div class="container-fluid shadow pt-3 ">
      <div class=" container">
        <div class="row ">
          <div class="col-md-4">
            <h4 class="topHH">Email Template</h4>
          </div>
         
        </div>
      </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="">
            <div class="row">
                <div id="tabs" class="project-tab w-100">
                    <nav class="boes">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Email Template</a>
                           
                        </div>
                    </nav>
                    <div class="tab-content boes w-100" id="nav-tabContent"> 
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="p-2 pt-4">
                                <div class="">
                                   <form class="">
                                        <div class="titlsj">
                                            <h5>Message Details</h5>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Template Type<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="d-flex">
                                                    <div class="">
                                                      <input type="checkbox" name=""/>
                                                    </div>
                                                    <div class="ml-1">
                                                        <span >Search</span>
                                                    </div>
                                                </div>  
                                                <div class="">
                                                    <small>(Only Application type templates can be used to send emails to job applicants)</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex">
                                                    <div class="">
                                                      <input type="checkbox" name=""/>
                                                    </div>
                                                    <div class="ml-1">
                                                      <span >Application</span>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Template Name<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                               <input type="text" name="" class="form-control pamInput"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Your Email Id <sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                               <input type="text" name="" class="form-control pamInput"/>
                                               <div class="">
                                                   <small>(This will be used as the 'reply to' email and all responses will be sent to this email id)</small>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Telephone<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                               <input type="text" name="" class="form-control pamInput"/>
                                                <div class="">
                                                    <small>(Suggested format: Job | Job Title | Experience | Location | Salary)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Email Body:<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                                <CKEditor activeClass="editor" content="" onChange="" />
                                            </div>
                                        </div>

                                        <div class="titlsj mt-4">
                                            <h5>Job Details</h5>
                                        </div>
                                        <div class="">
                                            <small>Kindly enter details of the job for which you are contacting the candidates. This information is mandatory.</small>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                            
                                            </div>
                                            <div class="col-md-4">
                                                <div class="d-flex titlsj py-2">
                                                    <div class="">
                                                      <input type="checkbox" name=""/>
                                                    </div>
                                                    <div class="ml-1">
                                                      <span >Application</span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Job Title:<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" name="" class="form-control pamInput"/>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Job Title:<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-5">
                                                <select  name="" class="form-control pamInput">
                                                    <option >Min Exp</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-5">
                                                <select  name="" class="form-control pamInput">
                                                    <option >Max Exp</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Locations:<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-10">
                                                <select  name="" class="js-example-basic-single form-control pamInput">
                                                    <option selected disabled>Select Location</option>
                                                  </select>
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-3 mx-0 form-group">
                                            <div class="col-md-2">
                                                <strong>Salary:<sup class="text-danger">*</sup></strong>
                                            </div>
                                            <div class="col-md-5">
                                                <select  name="" class="form-control pamInput">
                                                    <option >Min Salary</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-5">
                                                <select  name="" class="form-control pamInput">
                                                    <option >Max Salary</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="col-md-10 ml-auto">

                                            <button class=" logBt">Preview</button>
                                            <button class="ml-2 logBt">Cancel</button>
                                        </div>
                                    </form>
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