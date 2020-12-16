<section class="paduj5 backG">
    <div class="seaHDi">
        <div class="container">
            <div class="SearchBar mx-0">
                <div class="searchSkil">
                    <input type="text" class="form-control INpou" name="" placeholder="Job Title, Skills">
                </div>
                <div class="searchLo">
                    <input type="text" class="form-control INpou" name="" placeholder="Location ">
                </div>
                <div class="searchLo">
                    <select class="form-control INpou" name="">
                        <option selected disabled>Experience</option>
                        <option class="">0-1 year</option>
                        <option class="">1-2 year</option>
                    </select>
                </div>
                <div class="searchbtn">
                    <button class="INpou"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</section> 
<section class="paduj5 mt-5 ">
    <div class="row mx-0">
        <div class="col-md-3">
            <div class="">
                <div class="proFIle ">
                    <div class="d-flex pb-3">
                        <div class="">
                            <div class="piusa">
                               
                                <?php echo ucfirst(substr($jobSeekerData[0]->fullname,0,1)) ?>
                            </div>
                        </div>

                        <div class="portDFO ">
                            <h5 class="mb-0"><?=ucwords($jobSeekerData[0]->fullname)?></h5>
                            <div class="">
                                <div class="position-relative">
                                    <small><?=ucfirst($jobSeekerData[0]->basic_introduction)?></small>
                                   <?php 
                                    if($jobSeekerData[0]->basic_introduction){ ?>
                                        <span title="Update Information" class="pointer infoIcon"><i class="fas fa-edit"></i> </span>
                                    <?php }
                                    ?>
                                </div>
                                <form class="basicInfo mt-2" id="updateBio">
                                    <div class="">
                                        <textarea class="form-control" name="emp_bio" style="font-size: 11px" rows="10"><?=ucfirst($jobSeekerData[0]->basic_introduction)?></textarea>
                                    </div>
                                    <div class="mt-1 text-right">
                                        <button class="darkBtn fnt12 mr-2 cancelInfo" type="button" >Cancel</button>
                                        <button class="darkBtn fnt12 ">Update</button>
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <script>
                        $(document).on('submit','#updateBio',function(e){
                            e.preventDefault();
                            var formData = new FormData ($(this)[0]);
                            $.ajax({
                                url:"<?=base_url('Employee-Update-Bio')?>",
                                type:"post",
                                cache:false,
                                contentType:false,
                                processData:false,
                                data:formData,
                                success:function(response){

                                }
                            })
                        });
                        $(document).on("click",".infoIcon",function(){
                            $(".basicInfo").slideToggle();
                        })
                        $(document).on("click",".cancelInfo",function(){
                            $(".basicInfo").slideToggle();
                        })
                    </script>
                    <div class="portDFO ml-0 pb-3 ">
                        <h6 class="mb-0">Skills</h6>
                        <small>HTML, Bootstrap, jquery</small>
                    </div>
                   <div class="ml-0 pt-3 border-top">
                        <div class=" dsp_P">
                            <h6 class="mb-0 progtext">Profile Score</h6>
                            <h6 class="progtext poor">Poor</h6>
                        </div>
                        <div class="proGressBack">
                            <div class="ProgRess" style="width:40%"></div>
                        </div>
                   </div>
                </div>
                <div class="proFIle mt-4 bgAzure">
                    <div class="d-flex pb-3">
                        
                        <div class="portDFO ml-0">
                            <h5 class="mb-1">Would you like to update your resume?</h5>
                            <small class="">Last updated on 14 Dec 2016</small>
                        </div>
                        <div class="">
                            <img src="<?=base_url('assets/images/notepads.png')?>" class="img-fluid">
                        </div>
                    </div>
                    <div class=" ml-0 py-3 ">
                       <a class="lightBTn">Yes, Update</a>
                       <a class="ml-2 lightBTn" data-toggle="modal" data-target="#resumeModal" >Upload Resume</a>
                    </div>
                   <div class="ml-0 pt-3 border-top">
                        <p class="font12 mb-3">Build impressive resume instantly with ready to use templates.</p>
                        <a class=" darkBtn">Build your Resume</a>
                   </div>
                </div>

                
            </div>
        </div>
        <div class="col-md-8">
            <div class="row " id="pre_view_">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill typeBorder" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active jobtsType" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Matched</a>
                            <a class="nav-item nav-link jobtsType" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Saved</a>
                            <a class="nav-item nav-link jobtsType" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Applied</a>
                        </div>
                    </nav>
                    <div class="tab-content mt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="">
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <div class="">
                                            <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                                            <small>date</small>
                                        </div>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <div class="">
                                            <button class=" darkBtn">Apply </button>
                                            <button class=" darkBtn ml-2">Apply on website</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon ">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="">
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon ">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <div class="">
                                            <button class=" darkBtn">Apply </button>
                                            <button class=" darkBtn ml-2">Apply on website</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="">
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon ">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="row" id="job_search">
                <div class="col-md-12">
                    
                    <div class="tab-content mt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-hom0e" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="">
                                <?php foreach($latest_jobs as $l_job): ?>
                                    <div class="JObsList">
                                        <div class="dsp_P">
                                            <a href=""><h6><?=ucwords($l_job->job_title)?> </h6></a>
                                            <div class="">
                                                <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                                                <small><?=date('d-m-Y',strtotime($l_job->adde_on))?></small>
                                            </div>
                                            
                                        </div>
                                        <div class="">
                                            <small><?=ucwords($l_job->company_name)?></small>
                                            <ul class="details_jon">
                                                <li>
                                                    <small><?=$l_job->min_work_exp.' to '.$l_job->max_work_exp.' years'?></small>
                                                </li>
                                                <li class="osl">
                                                    <small><?=ucwords($l_job->job_location_)?></small>
                                                </li>
                                                <li class="osl">
                                                    <small>
                                                        <?php
                                                        $ug_=$l_job->ug_qualification;
                                                        $pg_=$l_job->pg_qualification;
                                                        $phd_=$l_job->phd_qualification;
                                                       // if($ug_=='NA' || $ug_==''){
                                                       //      $ug_='';
                                                       // }
                                                       // if($pg_=='NA' || $pg_==''){
                                                       //      $pg_='';
                                                       // }
                                                       // if($phd_=='NA' || $phd_==''){
                                                       //      $phd_='';
                                                       // }
                                                       echo 'UG: '.$ug_.' | '.'PG: '.$pg_.' | '.'PHD: '.$phd_;
                                                        ?>
                                                           

                                                        </small>
                                                </li>
                                            </ul>
                                            <small class="">
                                                Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                            </small>
                                        </div>
                                    
                                        <div class="bottom_btn">
                                            <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                            <div class="">
                                                <button class=" darkBtn">Apply </button>
                                                <button class=" darkBtn ml-2">Apply on website</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="">
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon ">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="">
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                                <div class="JObsList">
                                    <div class="dsp_P">
                                        <a href=""><h6>Name </h6></a>
                                        <small>date</small>
                                    </div>
                                    <div class="">
                                        <small>Company Name </small>
                                        <ul class="details_jon ">
                                            <li>
                                                <small>1 to 3 years</small>
                                            </li>
                                            <li class="osl">
                                                <small>Location</small>
                                            </li>
                                            <li class="osl">
                                                <small>Qualification</small>
                                            </li>
                                        </ul>
                                        <small class="">
                                            Key skills: C/ C++certification, deep development knowledge, good communication skills, self motivated, goal driven
                                        </small>
                                    </div>
                                
                                    <div class="bottom_btn">
                                        <small><strong>Skills : </strong>c, communication, cognitive assessment, communication skills, boost c</small>
                                        <button class=" darkBtn">Apply on website</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>            
            </div>
        </div>
    </div>
</section>

    <style>
      
    </style>
<div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h4 class="modal-title" id="exampleModalLabel">Upload Resume</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
            <form action="text-center">
                <div class="form-group">
                    <label class="btn-default pointer" for="resumeupload"> <img src="<?=base_url('assets/images/resume.png')?>" class="img-fluid"> <small>Click here to  upload resume</small> </label>
                        <input id="resumeupload" type="file" name="resume" class="d-none">
                   
                </div>
                <div class="">
                    <button class=" darkBtn w-100">Upload</button> 
                </div>
            </form>
        </div>
      </div>
     
    </div>
  </div>
</div>