<section class="mainDiv backSet">
    <div class="container bg-white">
       <div class=" py-4">
        <form action="<?=base_url('Job/searchJob')?>" method="get">
            <div class="SearchBar mx-0">
                    <div class="searchSkil">
                        <input type="text" class="form-control INpou" name="skill_name" placeholder="Job Title, Skills">
                    </div>
                    <div class="searchLo">
                        <input type="text" class="form-control INpou" name="city" placeholder="Location ">
                    </div>
                    <div class="searchLo">
                        <select class="form-control INpou" name="exp_">
                            <option selected="" disabled="">Experience</option>
                            <option class="">0-1 year</option>
                            <option class="">1-2 year</option>
                        </select>
                    </div>
                    <div class="searchbtn">
                        <button class="INpou"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="py-3">
                <ul class="d-flex mb-0 list-unstyled polaD">
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary" id="dateFilter">
                                <option selected disabled>Dates</option>
                                <option value="24" >Last 24 hours</option>
                                <option value="72">Last 3 days</option>
                                <option value="168" >Last 7 days</option>
                                <option value="336">Last 14 days</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" id="locFilter"  name="salary">
                                <option selected disabled>Location</option>
                                <option value="Noida">Noida</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" id="salFilter" name="salary">
                                <option selected disabled>Salary</option>
                                    <option value="2lakh">< 2Lakh (P.A)</option>
                                    <option value="2_5">2-5Lakh (P.A)</option>
                                    <option value="6_8">6-8Lakh (P.A)</option>
                                    <option value="9_12">9-12Lakh (P.A)</option>
                                    <option value="13_16">13-16Lakh (P.A)</option>
                                    <option value="17_25">17-25Lakh (P.A)</option>
                            </select>
                        </span>
                    </li>
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" id="expFilter" name="experience">
                                <option selected disabled>Experience</option>
                                <option value="_1">< 1 Year</option>
                                    <option value="1_2">1-2 Years</option>
                                    <option value="3_5">3-5 Years</option>
                                    <option value="6_8">6-8 Years</option>
                                    <option value="9_10">9-10 Years</option>
                                    <option value="10_">> 10 years</option>
                            </select>
                        </span>
                    </li>
                    <!-- <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary">
                                <option selected disabled>Remote</option>
                                <option>Remote</option>
                                <option>Temparary Remote</option>
                            </select>
                        </span>
                    </li> -->
                    <li class="">
                        <span>
                            <select class="form-control filtSearch" name="salary" id="eduFilter">
                                <option selected disabled>Education</option>
                                <option>10<sup>th</sup></option>
                                <option>12<sup>th</sup></option>
                                <option>Diploma</option>
                                <option>Bachelor's degree</option>
                                <option>Master's degree</option>
                            </select>
                        </span>
                    </li>
                </ul>
            </div>
       </div>
        <div class="row">
            <div class="col-md-5">
                <div class="">
                    <div class="my-2 px-2 dsp_P">
                        <div class="">
                            <ul class="d-flex mb-0 list-unstyled">
                                <li class="mr-1">
                                    <div class=""><small>Filter By:</small></div>
                                </li>
                                <li class="ml-1">
                                    <span>
                                        <select class="form-control filtSearch" name="salary">
                                            
                                        </select>
                                    </span>
                                </li>
                                <li class="ml-1">
                                    <span>
                                        <select class="form-control filtSearch" name="experience">
                                            <option selected disabled>Experience</option>
                                            <option>10K-20K</option>
                                            <option>10K-20K</option>
                                        </select>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <!-- <small>Page 1 of 639 jobs</small> -->
                             <small> <?=$totaljobs?> jobs found</small>
                        </div>
                    </div>
                    <div class="">
                        <?php foreach($jobs as $dt){ ?>
                            <a href="javascript:void(0)" class="viewJob particularJob" d-post="<?=$dt['details']->job_id?>">
                                <div class="dsp_P">
                                    <div class="">
                                        <h4 class="viewJobTitle"><?=$dt['details']->job_title?></h4>  
                                    </div>
                                    <div class="">
                                        <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                                    </div>
                                </div>
                                <div class="">
                                    <h6 class="mb-0"><?=$dt['details']->company_name?></h6>
                                    <span class=""><?=$dt['details']->company_address?></span>
                                    <h6 class="my-2"><span>&#8377; 23000</span> - <span>&#8377; 43000</span></h6>

                                </div>
                                <hr>
                                <div class="">
                                    <!-- <h6><strong>Requirements</strong></h6> -->
                                    <span>Minimum Work Exp: <?=$dt['details']->min_work_exp?>     Years</span>

                                    <p>
                                        <?=substr($dt['details']->job_desc,0, 250)?> 
                                    </p>
                                </div>
                                <div class="">

                                    <?php
                                        
                                        $date1=date_create(date('Y-m-d'));
                                        $date2=date_create($dt['details']->adde_on);
                                        $diff=date_diff($date1,$date2);
                                        // print_r($diff);
                                        $ago="";
                                        if($diff->d!=0){
                                            $ago=$diff->d.' days ago';
                                        }else{
                                            if($diff->i!=0){
                                                $ago=$diff->i.' minutes ago';
                                            }else{
                                                $ago=$diff->s.' seconds ago';
                                            }
                                            
                                        }
                                    ?>
                                    <small><?=$ago?></small>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="resumeSh " id="resPre">
                    <div class="viewDet stickyRes">
                        <div class="viewTopHed">
                           <div class="dsp_P">
                                <h4 class="viewJobTitle" id="jb_title">Title</h4>
                                <span class="mr-4 bookmarkIcon pointer"><i class="fas fa-bookmark"></i></span>
                           </div>
                            <h6 id="comp_name_">Company Name </h6>
                            <ul class="details_jon">
                                <li>
                                    <small id="work_exp">1 to 3 years</small>
                                </li>
                                <li class="osl">
                                    <small id="job_location">Location</small>
                                </li>
                                <li class="osl">
                                    <small id='qualification'>Qualification</small>
                                </li>
                            </ul>
                            <div class="">
                                <!-- <button class=" darkBtn">Apply </button> -->
                               <a href="<?=base_url('Employee-Login')?>" class=" darkBtn">Apply</a>
                            </div>
                        </div>
                        <div class="scrollDetails" id="style-3">
                            <div class="" id="jb_description">
                                <!-- <p>
                                    We are an engineering firm looking for someone to work on our Laravel PHP based program that manages timesheets, work details, etc. Our current application was used to manage 150 peoples data and needs to be scaled up to be able to
                                    handle 5000 people.
                                </p>
                                <p>Software developer with 5 years of work experience working on ERP or SAAS applications is a must. You will be asked to help us find the limitations of our existing software then plan out and execute the upgrades.</p>
                                <p>Some of your day to day tasks will be:</p>
                                <ul>
                                    <li>Create and maintain features list based on business need</li>
                                    <li>Lead daily standup meetings to discuss coding progress</li>
                                    <li>Write code and participate in code reviews</li>
                                    <li>Ensure all components are tested thoroughly, maintain staging site</li>
                                    <li>Have a willing attitude ready to take on new challenges</li>
                                </ul>
                                <p>
                                    As you can see from the list of daily activities, they are all technical in nature and varied in job type. We are a distributed team working remotely so you must be self motivated because you will not have a direct manager to
                                    monitor you.
                                </p>
                                <p>If you have worked as a software engineer and specifically as a Laravel PHP developer then you will be a good fit for this role.</p>
                                <p>These are some of prerequisites for this job</p>
                                <ul>
                                    <li>You should have 5 years of programming experience</li>
                                    <li>Knowledge of Laravel PHP is a must</li>
                                    <li>Knowledge of AWS is a big plus</li>
                                    <li>A good eye for design is a plus</li>
                                    <li>Knowledge of big data management is a plus</li>
                                    <li>Be ready to work 2 to 3 days remotely</li>
                                </ul>
                                <p>Job Type: Full-time</p>
                                <p>Pay: ₹65,000.00 - ₹75,000.00 per month</p>
                                <p>
                                    COVID-19 considerations:<br />
                                    You will be working remotely.
                                </p>
                                <p>Experience:</p>
                                <ul>
                                    <li>total work: 5 years (Required)</li>
                                </ul>
                                <p>Education:</p>
                                <ul>
                                    <li>Bachelor's (Required)</li>
                                </ul>
                                <p>Work Remotely:</p>
                                <ul>
                                    <li>Yes, always</li>
                                </ul> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

    // Array ( [skill_name] => php [city] => dehradun )

    if($getData['skill_name']){
        $skill_name=$getData['skill_name'];
    }else{
        $skill_name='';
    }
    if($getData['city'] ){
        $city=$getData['city'];
    }else{
        $city='';
    }
   
    
?>
<script>
    $('#resPre').hide();
    var skill='<?= $skill_name; ?>';
    var city='<?= $city; ?>';
    $(document).on('change','#dateFilter',function(){
        var hours_ago=$(this).val();
        
        var url="<?=base_url('Job/searchJob')?>?hours_ago="+hours_ago+"&skill_name="+skill+"&city="+city;
        console.log(url);
         window.location.href=url;



    });
    $(document).on('change','#locFilter',function(){
        var location=$(this).val();
  
        console.log('Location : '+location+' SKill: '+skill+' City: '+city );
        var url="<?=base_url('Job/searchJob')?>?location="+location+"&skill_name="+skill+"&city="+city;
        console.log(url);
        window.location.href=url;



    });
    $(document).on('change','#salFilter',function(){
        var sal_range=$(this).val();

       
        var url="<?=base_url('Job/searchJob')?>?sal_range="+sal_range+"&skill_name="+skill+"&city="+city;
        console.log(url);
         window.location.href=url;



    }); 
    $(document).on('change','#eduFilter',function(){
        var edu_r=$(this).val();
  
        // var date='<?= $date; ?>';
        // var location='<?= $location; ?>';
        //  var exp_='<?= $exp_; ?>';
        // var sal_range='<?= $sal_range; ?>';

        // console.log('Location : '+location+' SKill: '+skill+' City: '+city );
       var url="<?=base_url('Job/searchJob')?>?edu_r="+edu_r+"&skill_name="+skill+"&city="+city;
        console.log(url);
         window.location.href=url;



    });
    $(document).on('change','#expFilter',function(){
        var exp_=$(this).val();
  
        // var date='<?= $date; ?>';
        // var location='<?= $location; ?>';
        // var sal_range='<?= $sal_range; ?>';
        // var edu_r='<?= $edu_r; ?>';
       
        var url="<?=base_url('Job/searchJob')?>?exp_="+exp_+"&skill_name="+skill+"&city="+city;
        console.log(url);
         window.location.href=url;



    });
    
    $(document).on('click','.particularJob',function(){
        var job_id= $(this).attr('d-post');
        // alert(job_id+' Job Id: ');
        $('#resPre').show();
        $.ajax({
            url:"<?=base_url('Job/getJobDetails')?>",
            type:'post',
            data:{postId:job_id},
            success:function(response){
                response=JSON.parse(response);
                if(response.code==1){
                    var data_=response.data.details;
                    var skills=response.data.skills;
                    if(data_.pg_qualification!=""){
                        var qlf=data_.ug_qualification+', '+data_.pg_qualification;
                    }else{
                        var qlf=data_.ug_qualification;
                    }
                    if(data_.phd_qualification!=""){
                        var qlf=data_.ug_qualification+', '+data_.pg_qualification+', '+data_.phd_qualification;
                    }else{
                        var qlf=data_.ug_qualification+', '+data_.pg_qualification;
                    }
                    
                    // 1 to 3 years
                    var work_exp=data_.min_work_exp+' - '+data_.max_work_exp+' years';
                    $('#jb_title').text(data_.job_title);
                    $('#comp_name_').text(data_.company_name);
                    $('#jb_description').empty();
                    $('#jb_description').append(data_.job_desc);
                    $('#job_location').text(data_.job_location_);
                    $('#work_exp').text(work_exp);
                    $('#qualification').text(qlf);
                    
                    
                }else{

                }
            }
        })
    });
</script>