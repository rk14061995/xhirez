<section class=" paduj5 backG">
    
    <section class="container-fluid bg_blue" >
        <div class=" row paduj5 py-4 ">
            <div class="col-md-2">
                <img src="<?=base_url('assets/UserImages/profile_picture/')?><?=$userDetails[0]['details']->profile_pic?>" class="img-fluid ">
            </div>
            <div class="col-md-8">
               <div class="py-4 text-white">
                  
                    <h4 class=" mb-0" ><?=
                        ucfirst($userDetails[0]['details']->fullname);
                    ?></h4>
                    <span><?=$userDetails[0]['details']->email?></span>
                    <hr>
                    <span><?=$userDetails[0]['details']->phone_?></span><br>
                    <span><?=$userDetails[0]['details']->address_?></span>
               </div>
            </div>
            <div class="col-md-2">
                <div class="d_center h-100 mt-n2">
                    <?php 
                        if($resumePath){ ?>
                             <a href="<?=base_url('assets/user_resume/').$resumePath?>" class="btn-default btn border p-3 w-100 resumeDownload">Download CV</a>
                    <?php }
                    ?>
                   
                </div>
            </div>
        </div>
    </section>
<section class="paduj5 ">
    <div class="row mx-0">
        <div class="col-md-8">
            <div class="bg-white">
                
                <div class=" p-3  pt-5">
                    <span class="abtFOr border-bottom colBlack"><strong>ABOUT ME</strong></span>
                    <p class="textForm"><?=$userDetails[0]['details']->basic_introduction?></p>
                </div>
                
               
                    <div class="p-3  mt-3 ">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>WORK SUMMARY</strong></span>
                          
                        </div>
                       
                        <div class="work_sumry w-100 ">
                            <div class="content_timeline fnt14 text-left">
                              
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <span class="colBlack">Work Title :</span>
                                    </div>
                                    <div class="col-md-8">
                                        <span><?=$workSummary[0]->work_title?></span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <span class="colBlack">Profile Summary :</span>
                                    </div>
                                    <div class="col-md-8">
                                        <span><?=$workSummary[0]->profile_summary?></span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <span class="colBlack">Total Experience :</span>
                                    </div>
                                    <div class="col-md-8">
                                        <span><?=$workSummary[0]->exp_year?> Yrs - <?=$workSummary[0]->exp_month?> Months</span>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-4">
                                        <span class="colBlack">Current Annual Salary :</span>
                                    </div>
                                    <div class="col-md-8">
                                        <span>Rs. <?=$workSummary[0]->current_salary?> Lakh</span>
                                    </div>
                                </div>  
                            </div>
                        </div>
                       
                    </div>


             <div class="p-3  mt-3 ">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>EMPLOYMENT</strong></span>
                      
                        </div>
                  
                        <div class="employment_div w-100 ">
                            <div class="content_timeline fnt14 text-left">
                                
                                <ul class="timeline">
                                    <?php foreach($employment as $employ): ?>
                                        <li class="event" data-date="<?=$employ->join_year?> - <?=$employ->to_year?>">
                                          
                                            <h5><strong><?=$employ->job_title?></strong> </h5>
                                            <span class="fnt14 colBlack">  <?=$employ->company_name?></span>
                                            <h6 class=" mb-0"><?=$employ->company_address?></h6>
                                  
                                            <small class="TimeMob"><?=$employ->join_year?> - <?=$employ->to_year?></small>
                                            
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                      
                       
                    </div>

               
                    <div class="p-3 mt-3">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>EDUCATION</strong></span>
                    
                        </div>

                        <div class="Education">
                            <div class="content_timeline ">
                                
                                <ul class="timeline ">
                                    <?php foreach($userEducation as $education): ?>
                                        <li class="event" data-date="<?=$education->passing_year?>">
                                            <h5><strong><?=$education->degree?></strong> </h5>
                                          
                                            <span class="fnt14 colBlack">  <?=$education->course_?> ( <?=$education->course_type?> )</span>
                                            <h6 class=" mb-0"><?=$education->institute_?></h6>
                                            <small class="TimeMob"><?=$education->passing_year?></small>
                                            
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        
                    </div>

         
                    <div class="p-3 mt-3">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>SKILLS</strong></span>
                   
                        </div>
                    <?php
                      $skills = $userDetails[0]['skills'];
                        // echo implode(",",$userDetails[0]['skills']);
                    ?>

                        <div class="w-100 mt-2">
                        
                            <?php
                            
                            for($i=0; $i < count($skills) ; $i++): ?>
                                <small class="ml-2 mt-2 border px-2 py-1 rounded d-inline-block"> <?=$skills[$i]?></small>
                             
                            <?php endfor;
                            ?>
                        
                          
                        </div>
                        <div class="mt-3 px-2 skilShw" id="skilShw">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <span>Skills<sub class="text-danger">*</sub></span>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input_tes" name="" placeholder="Skill">
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control input_tes" name="">
                                            <option selected="" disabled=""> Exp. Years</option>
                                            <option value="0" >0 Yrs</option>
                                            <?php for($i=1; $i<13;$i++):?>
                                                <option value="<?=$i?>" ><?=$i?> Yrs</option>
                                            <?php endfor;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center mt-2" >
                                    <button class="btn btn-success">Save</button>
                                    <button class="darkBtn ml-3" type="button" id="cnclskil">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                   
            </div>
        </div>
        <div class="col-md-4 mob_view position-relative">
            <div id="ScrolPOro">
                <div class="proFIle ">
                    <div class="d-flex pb-3">
                        <div class="">
                            <div class="piusa">
                               
                                <?php echo ucfirst(substr($userDetails[0]['details']->fullname,0,1)) ?>
                            </div>
                        </div>

                        <div class="portDFO ">
                            <h5 class="mb-0"><?=ucwords($userDetails[0]['details']->fullname)?></h5>
                            <div class="">
                                <div class="position-relative">
                                    <small><?=ucfirst($userDetails[0]['details']->basic_introduction)?></small>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                  
                    <div class="portDFO ml-0 pb-3 ">
                        <h6 class="mb-0">Skills</h6>
                        <small><?= implode(', ', $skill_s)?></small>
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
                <!-- <div class="proFIle mt-4 bgAzure">
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
                       <a class="lightBTn" href="<?=base_url('assets/user_resume/').$resumePath?>" download>Download</a>
                       <a class="ml-2 lightBTn" data-toggle="modal" data-target="#resumeModal" >Upload Resume</a>
                    </div>
                   
                </div> -->

                
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(function($) {
        $(window).scroll(function fix_element() {
            $('#ScrolPOro').css(
            $(window).scrollTop() > 300
                ? { 'position': 'fixed', 'top': '10px','width':'28%' }
                : { 'position': 'relative', 'top': 'auto','width':'100%' }
            );
            return fix_element;
        }());
    });
</script>

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
            <form action="text-center" id="uploadThisResume">
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

<script type="text/javascript">
    $(document).on('submit','#uploadThisResume',function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url('UserPanel/uploadResume')?>",
            enctype:"multipart/form-data",
            type:"post",
            cache:false,
            contentType:false,
            processData:false,
            data:formData,
            success:function(response){
                console.log(response);
                response=JSON.parse(response);
                if(response.code==1){
                    swal("Great", "Resume Uploaded", "success");
                }else{
                    swal("Sorry", "Something Went Wrong", "error");
                }
            }
        })
    });
</script>