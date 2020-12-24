<section class=" paduj5 backG">
    
    <section class="container-fluid bg_blue" >
        <div class=" row paduj5 py-4 ">
            <div class="col-md-2">
                <img src="<?=base_url('assets/UserImages/profile_picture/')?><?=$userDetails[0]->profile_pic?>" class="img-fluid ">
            </div>
            <div class="col-md-8">
               <div class="py-4 text-white">
                    <h4 class=" mb-0" ><?=
                        ucfirst($userDetails[0]->fullname);
                    ?></h4>
                    <span><?=$userDetails[0]->email?></span>
                    <hr>
                    <span><?=$userDetails[0]->phone_?></span><br>
                    <span><?=$userDetails[0]->address_?></span>
               </div>
            </div>
            <div class="col-md-2">
                <div class="d_center h-100 mt-n2">
                    <a href="<?=base_url('assets/user_resume/').$resumePath?>" class="btn-default btn border p-3 w-100  text-white">Download CV</a>
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
                    <p class="textForm"><?=$jobSeekerDetail->basic_introduction?></p>
                </div>
                
                <script>
                    $(document).on("click","#infoSS",function(){
                        $(".edit_info").show();
                        $(".shw_info").hide();
                    })
                    $(document).on("click","#cnclInfo",function(){
                        $(".shw_info").show();
                        $(".edit_info").hide();
                    })
                </script>
                    <div class="p-3  mt-3 ">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>WORK SUMMARY</strong></span>
                            <small class="text-primary pointer" id="totlExpe"> <i class="fas fa-pencil-alt"></i></small>
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
                        <div class="work_sumryEdit w-100 mt-2">
                            <form class="addWorkSummary">
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Work Title<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input_tes" name="work_title" value="<?=$workSummary[0]->work_title?>" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Profile Summary<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea  class="form-control input_tes" name="profile_summary" placeholder="" required=""><?=$workSummary[0]->profile_summary?></textarea>
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Total Experience<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control input_tes" name="exp_year"  required="">
                                            <?php if($workSummary[0]->exp_year){
                                              ?>
                                                <?php for($i=1; $i<20;$i++):
                                                   if($workSummary[0]->exp_year==$i){ ?>
                                                        <option value="<?=$i?>" selected=""><?=$i?> Yrs</option>
                                                  <?php  }else{ ?>
                                                    <option value="<?=$i?>" ><?=$i?> Yrs</option>
                                                <?php } ?>
                                                <?php endfor;?>
                                         <?php   }else{ 
                                                ?>
                                                <option value="0" selected=""> 0 Yrs</option>
                                                <?php for($i=1; $i<20;$i++):?>
                                                    <option value="<?=$i?>" ><?=$i?> Yrs</option>
                                                <?php endfor;?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control input_tes" name="exp_month"  required="">
                                            <?php if($workSummary[0]->exp_month){
                                              ?>
                                                <?php for($i=1; $i<12;$i++):
                                                   if($workSummary[0]->exp_month==$i){ ?>
                                                        <option value="<?=$i?>" selected=""><?=$i?> Months</option>
                                                  <?php  }else{ ?>
                                                    <option value="<?=$i?>" ><?=$i?> Months</option>
                                                <?php } ?>
                                                <?php endfor;?>
                                            <?php   }else{ 
                                                ?>
                                                <option value="0" selected=""> 0 Months</option>
                                                <?php for($i=1; $i<12;$i++):?>
                                                    <option value="<?=$i?>" ><?=$i?> Months</option>
                                                <?php endfor;?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Current annual salary<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control input_tes" name="current_salary" placeholder="0" required="">
                                            <?php if($workSummary[0]->current_salary){
                                              ?>
                                                <?php for($i=1; $i<24;$i++):
                                                   if($workSummary[0]->current_salary==$i){ ?>
                                                        <option value="<?=$i?>" selected=""><?=$i?> </option>
                                                  <?php  }else{ ?>
                                                    <option value="<?=$i?>" ><?=$i?> </option>
                                                <?php } ?>
                                                <?php endfor;?>
                                            <?php   }else{ 
                                                ?>
                                                <option value="0" selected=""> 0 </option>
                                                <?php for($i=1; $i<24;$i++):?>
                                                    <option value="<?=$i?>" ><?=$i?> </option>
                                                <?php endfor;?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="text-center mt-2">
                                    <input type="submit" value="Save" class="btn btn-success">
                                    <!-- <button class="btn btn-success">Save</button> -->
                                    <a class="darkBtn ml-3" id="wrkCncl">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>

                <script>
                    
                    $(document).on('submit','.addWorkSummary',function(e){
                            e.preventDefault();
                            var formData = new FormData ($(this)[0]);
                            $.ajax({
                                url:"<?=base_url('UserPanel/addWorkSummary')?>",
                                type:"post",
                                cache:false,
                                contentType:false,
                                processData:false,
                                data:formData,
                                success:function(response){

                                }
                            })
                        });
                    $(document).on("click","#totlExpe",function(){
                        $(".work_sumryEdit").show();
                        $(".work_sumry").hide();
                    })
                    $(document).on("click","#wrkCncl",function(){
                        $(".work_sumry").show();
                        $(".work_sumryEdit").hide();
                    })
                </script>

             <div class="p-3  mt-3 ">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>EMPLOYMENT</strong></span>
                            <small class="text-primary pointer" id="shwEmploy"> Add More</small>
                        </div>
                  
                        <div class="employment_div w-100 ">
                            <div class="content_timeline fnt14 text-left">
                                
                                <ul class="timeline">
                                    <?php foreach($employment as $employ): ?>
                                        <li class="event" data-date="<?=$employ->join_year?> - <?=$employ->to_year?>">
                                            <small e_id="<?=$employ->emp_id?>" class="emplEdBtn editdBtn"><i class="fas fa-pencil-alt"></i></small>
                                            <small class="deletedBtn ml-2 empDelete" e_id="<?=$employ->emp_id?>"><i class="fas fa-trash-alt"></i></small>
                                            <h5><strong><?=$employ->job_title?></strong> </h5>
                                            <span class="fnt14 colBlack">  <?=$employ->company_name?></span>
                                            <h6 class=" mb-0"><?=$employ->company_address?></h6>
                                  
                                            <small class="TimeMob"><?=$employ->join_year?> - <?=$employ->to_year?></small>
                                            
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                        <div class="uppdateEmp">

                        </div>
                        <div class="employEdit w-100 mt-2">
                            <form class="addemployment">
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Job Title<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input_tes" name="job_title" value="" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Company Name<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input_tes" name="comp_name" value="" placeholder="Company Name" required="">
                                    </div>
                                </div> 
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Company Address<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control input_tes" name="comp_add" value="" placeholder="Company Address" required=""></textarea>
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Industry of the Company<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="industry" class="form-control input_tes" >
                                            <option selected disabled>select</option>
                                            <?php
                                                foreach($industry_categories as $categories){ ?>
                                                      <option value="<?=$categories->category_id?>"><?=$categories->category_name?></option>
                                            <?php    }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                              
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Duration in this Job<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control input_tes" placeholder="From" name="join_year" type="number" max-lenght="4" required="">
                                          
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control input_tes" placeholder="To" name="to_year" type="number" max-lenght="4" required="">
                                    </div>
                                </div>
                               
                                <div class="text-center mt-2">
                                    <input type="submit" value="Save" class="btn btn-success">
                                  
                                    <a class="darkBtn ml-3" id="empCncl">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>

                <script>
                    $(document).on("click",".empDelete",function(){
                            var oid =$(this).attr("e_id");
                          
                            $.ajax({
                                url:"<?=base_url('UserPanel/deleteEmployment')?>",
                                type:"post",
                                cache:false,
                                data:{
                                        emp_id:oid,
                                    },
                                success:function(response){
                                    response = JSON.parse(response);
                                  
                                    if(response.code==1){
                                      location.reload();
                                    }
                                  
                                }
                            })
                        })
                    $(document).on('submit','.addemployment',function(e){
                            e.preventDefault();
                            var formData = new FormData ($(this)[0]);
                            $.ajax({
                                url:"<?=base_url('UserPanel/addEmployment')?>",
                                type:"post",
                                cache:false,
                                contentType:false,
                                processData:false,
                                data:formData,
                                success:function(response){
                                response = JSON.parse(response);
                                  
                                if(response.code==1){
                                  location.reload();
                                }
                                }
                            })
                        });
                    $(document).on("click","#shwEmploy",function(){
                        $(".employEdit").show();
                        $(".employment_div").hide();
                    })
                    $(document).on("click","#empCncl",function(){
                        $(".employment_div").show();
                        $(".employEdit").hide();
                    })
                    $(document).on("click",".emplEdBtn",function(){
                        var oid =$(this).attr("e_id");
                        $(".employment_div").hide();
                        $(".uppdateEmp").empty();
                        $.ajax({
                                url:"<?=base_url('UserPanel/GetEmployment')?>",
                                type:"post",
                                cache:false,
                              
                                data:{
                                    emp_id:oid
                                },
                                success:function(response){
                                    response = JSON.parse(response);
                             
                                    var categories = response.categories;
                                 
                                    if(response.code==1){
                                        var  html='<form class="updateEmploymentDetails">'+
                                            '<div class="row mx-0 form-group ">'+
                                                '<div class="col-md-4">'+
                                                    '<label>Job Title<sub class="text-danger">*</sub></label>'+
                                                '</div>'+
                                                '<div class="col-md-6">'+
                                                    '<input type="text" class="form-control input_tes" name="job_title" value="'+response.data[0].job_title+'" placeholder="Name" required="">'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row mx-0 form-group ">'+
                                                '<div class="col-md-4">'+
                                                    '<label>Company Name<sub class="text-danger">*</sub></label>'+
                                                '</div>'+
                                                '<div class="col-md-6">'+
                                                    '<input type="text" class="form-control input_tes" name="comp_name" value="'+response.data[0].company_name+'" placeholder="Company Name" required="">'+
                                                '</div>'+
                                            '</div>'+ 
                                            '<div class="row mx-0 form-group ">'+
                                                '<div class="col-md-4">'+
                                                    '<label>Company Address<sub class="text-danger">*</sub></label>'+
                                                '</div>'+
                                                '<div class="col-md-6">'+
                                                    '<textarea type="text" class="form-control input_tes" name="comp_add" value="" placeholder="Company Address" required="">'+response.data[0].company_address+'</textarea>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row mx-0 form-group ">'+
                                                '<div class="col-md-4">'+
                                                    '<label>Industry of the Company<sub class="text-danger">*</sub></label>'+
                                                '</div>'+
                                                '<div class="col-md-6">'+
                                                    '<select name="industry" class="form-control input_tes" >'+
                                                        '<option selected disabled>select</option>';
                                                       
                                                            for($i = 0 ; $i < categories.length;$i++ ){
                                                                if(categories[$i].category_id==response.data[0].category_id){
                                                                    html+= '<option selected value="'+categories[$i].category_id+'">'+categories[$i].category_name+'</option>';
                                                                }else{
                                                                    html+= '<option value="'+categories[$i].category_id+'">'+categories[$i].category_name+'</option>';
                                                                }
                                                            };
                                                 html+=   '</select>'+
                                                '</div>'+
                                            '</div>'+
                                            
                                        
                                            '<div class="row mx-0 form-group ">'+
                                                '<div class="col-md-4">'+
                                                    '<label>Duration in this Job<sub class="text-danger">*</sub></label>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<input class="form-control input_tes" placeholder="From" value="'+response.data[0].join_year+'" name="join_year" type="number" max-lenght="4" required="">'+
                                                    
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<input class="form-control input_tes" placeholder="To" value="'+response.data[0].to_year+'"  name="to_year" type="number" max-lenght="4" required="">'+
                                                '</div>'+
                                            '</div>'+
                                            '<input type="text" class="d-none" name="emp_id" value="'+response.data[0].emp_id+'">'+
                                        
                                            '<div class="text-center mt-2">'+
                                                '<input type="submit" value="Update" class="btn btn-success">'+
                                            
                                                '<button type="reset" class="darkBtn ml-3" >Cancel</button>'+
                                            '</div>'+
                                       '</form>';

                                       $(".uppdateEmp").append(html);
                                    }
                                }
                            })
                    })
                    $(document).on('submit','.updateEmploymentDetails',function(e){
                            e.preventDefault();
                            var formData = new FormData ($(this)[0]);
                            $.ajax({
                                url:"<?=base_url('UserPanel/updateEmploymentDetails')?>",
                                type:"post",
                                cache:false,
                                contentType:false,
                                processData:false,
                                data:formData,
                                success:function(response){
                                response = JSON.parse(response);
                                  
                                if(response.code==1){
                                  location.reload();
                                }
                                }
                            })
                        });
                </script>
                    <div class="p-3 mt-3">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>EDUCATION</strong></span>
                            <small class="text-primary pointer" id="SjjEduca"> Add More</small>
                        </div>

                        <div class="Education">
                            <div class="content_timeline ">
                                
                                <ul class="timeline ">
                                    <?php foreach($userEducation as $education): ?>
                                        <li class="event" data-date="<?=$education->passing_year?>">
                                            <h5><strong><?=$education->degree?></strong> </h5>
                                            <small e_id="<?=$education->id?>" class="educationBtn editdBtn"><i class="fas fa-pencil-alt"></i></small>
                                            <small class="deletedBtn ml-2 eduDelete" e_id="<?=$education->id?>"><i class="fas fa-trash-alt"></i></small>
                                            <span class="fnt14 colBlack">  <?=$education->course_?> ( <?=$education->course_type?> )</span>
                                            <h6 class=" mb-0"><?=$education->institute_?></h6>
                                            <small class="TimeMob"><?=$education->passing_year?></small>
                                            
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="w-100 mt-2 educaEdit" id="">
                            <form id="addEducation" >
                                
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Degree Name<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="deg_name" id="deg_name" placeholder="Degree Name" class="form-control input_tes" required="">
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Course Name<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="course_name" id="course_name" placeholder="Course Name" class="form-control input_tes" required="">
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Institute Name<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="inst_name" id="inst_name" placeholder="Institute Name" class="form-control input_tes" required="">
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Course Type<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <select class="form-control input_tes" id="course_type" name="course_type" required="">
                                            <option  value="Regular">Regular</option>
                                            <option  value="Correspondence">Correspondence</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="row mx-0 form-group ">
                                    <div class="col-md-4">
                                        <label>Passing Year<sub class="text-danger">*</sub></label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" maxlength="4" id="passing_year" class="form-control input_tes" name="passing_year" required="">
                                    </div>
                                </div>
                                <input type="text" value="0" class="d-none"  name="edu_id" id="edu_id">
                                <div class="text-center mt-2" >
                                    <input type="submit" class="btn btn-success" value="Save">
                                    <a class="darkBtn ml-3" id="cnclEdu">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <script>
                        $(document).on("click",".eduDelete",function(){
                            var oid =$(this).attr("e_id");
                          
                            $.ajax({
                                url:"<?=base_url('UserPanel/deleteEducation')?>",
                                type:"post",
                                cache:false,
                                data:{
                                        emp_id:oid,
                                    },
                                success:function(response){
                                    response = JSON.parse(response);
                                  
                                    if(response.code==1){
                                      location.reload();
                                    }
                                  
                                }
                            })
                        })
                          $(document).on("click",".educationBtn",function(){
                            var oid =$(this).attr("e_id");
                            $("#edu_id").val(oid);
                            $.ajax({
                                url:"<?=base_url('UserPanel/GetEducation')?>",
                                type:"post",
                                cache:false,
                              
                                data:{
                                    emp_id:oid
                                },
                                success:function(response){
                                    response = JSON.parse(response);
                                    console.log(response.data[0]);
                                    if(response.code==1){
                                        $("#deg_name").val(response.data[0].degree);
                                        $("#course_name").val(response.data[0].course_);
                                        $("#inst_name").val(response.data[0].institute_ );
                                        $("#course_type option[value="+response.data[0].course_type+"]").prop('selected', true);
                                        $("#passing_year").val(response.data[0].passing_year);
                                        alert(response.data[0].id);
                                       
                                          $(".Education").hide();
                                        $(".educaEdit").show();

                                    }
                                  
                                }
                            })
                        })
                    $(document).on("click","#SjjEduca",function(){
                        $("#edu_id").val("0");
                        $("#addEducation").trigger("reset");
                        $(".educaEdit").show();
                        $(".Education").hide();
                        
                    })
                    $(document).on("click","#cnclEdu",function(){
                        $("#addEducation").trigger("reset");
                        $(".Education").show();
                        $(".educaEdit").hide();
                    })


                    $(document).on('submit','#addEducation',function(e){
                            e.preventDefault();
                            var formData = new FormData ($(this)[0]);
                        
                                $.ajax({
                                    url:"<?=base_url('UserPanel/addUpdateEducation')?>",
                                    type:"post",
                                    cache:false,
                                    contentType:false,
                                    processData:false,
                                    data:formData,
                                    success:function(response){
                                    response = JSON.parse(response);
                                    
                                        if(response.code==1){
                                            location.reload();
                                        }
                                    }
                                })
                         
                        });
                </script>
                    <div class="p-3 mt-3">
                        <div class="dsp_P border-bottom">
                            <span class="fnt14 colBlack"><strong>SKILLS</strong></span>
                            <small class="text-primary pointer" id="eduASA">Add More</small>
                        </div>
                    

                        <div class="w-100 mt-5">
                        
                            <?php
                            
                            foreach($allskills as $skills): ?>
                                <div class="row mx-0 border-bottom p-1 ">
                                    <div class="col-md-8">
                                        <span><?=$skills->skill_name?></span>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span class="pointer"><i class="fas fa-pencil-alt"></i></span>
                                        <span class="ml-3"><i class="fas fa-trash-alt"></i></span>
                                    </div>
                                </div>

                            <?php endforeach;
                            ?>
                        
                            <!-- <hr> -->
                            <!-- <div class="row mx-0 border-bottom p-1">
                                <div class="col-md-8">
                                    <span>Html (0 Yrs)</span>
                                </div>
                                <div class="col-md-4 text-right">
                                    <span id="eduASA"><i class="fas fa-pencil-alt"></i></span>
                                    <span class="ml-3"><i class="fas fa-trash-alt"></i></span>
                                </div>
                            </div> -->
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

                    <script>
                    $(document).on("click","#eduASA",function(){
                        $(".skilShw").show();
                        
                    })
                    $(document).on("click","#cnclskil",function(){
                        
                        $(".skilShw").hide();
                    })
                </script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.js-example-basic-single').select2();
                    });
                </script>
            </div>
        </div>
        <div class="col-md-4 mob_view position-relative">
            <div id="ScrolPOro">
                <div class="proFIle ">
                    <div class="d-flex pb-3">
                        <div class="">
                            <div class="piusa">
                               
                                <?php echo ucfirst(substr($userDetails[0]->fullname,0,1)) ?>
                            </div>
                        </div>

                        <div class="portDFO ">
                            <h5 class="mb-0"><?=ucwords($userDetails[0]->fullname)?></h5>
                            <div class="">
                                <div class="position-relative">

                                    <small><?=ucfirst($jobSeekerDetail->basic_introduction)?></small>
                                   <?php 
                                    if($userDetails[0]->basic_introduction){ ?>
                                        <span title="Update Information" class="pointer infoIcon"><i class="fas fa-edit"></i> </span>
                                    <?php }
                                    ?>
                                </div>
                                <form class="basicInfo mt-2" id="updateBio">
                                    <div class="">
                                        <textarea class="form-control input_tes" name="emp_bio" style="font-size: 11px" rows="10"><?=ucfirst($jobSeekerData[0]->basic_introduction)?></textarea>
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
                                    response=JSON.parse(response);
                                    if(response.code==1){
                                        swal("Great", "Bio Updated", "success");
                                    }else{
                                        swal("Sorry", "Something Went Wrong", "error");
                                    }
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
                       <a class="lightBTn" href="<?=base_url('assets/user_resume/').$resumePath?>" download>Download</a>
                       <a class="ml-2 lightBTn" data-toggle="modal" data-target="#resumeModal" >Upload Resume</a>
                    </div>
                   
                </div>

                
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