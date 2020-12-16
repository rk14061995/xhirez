<section class="paduj5 backG">
    
    <section class="container py-5" >
        <div class="bg-white row p-3 border ">
            <div class="col-md-2">
                <img src="<?=base_url('assets/UserImages/profile_picture/default.png')?>" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-8">
                <h4 class="colDark">fullname</h4>
                <hr>
                <small>basic_introduction</small><br>
                <small>email</small><br>
                <small>phone_</small>
            </div>
        </div>

        <div class="row bg-white p-3 border mt-3">
            <div class="col-md-6">
                <h4>Resume</h4>
                <a href="<?=base_url('assets/user_resume/')?>" download>Uploaded Resume</a>
            </div>
            <div class="col-md-6 text-right">
                <label for="resume" class="btn btn-default border px-3 upR">Upload Resume</label>
                <input type="file" class="d-none file" name="file" id="file" >
            <!-- <input type="file" name="file" id="file">  -->
            </div>
        </div>

        <div class="bg-white p-3 border mt-3 mx-n3">
            <div class="row p-0 mx-0">
                    <div class="col-md-6">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <spann class="text-primary pointer" id="infoSS"> <i class="fas fa-pencil-alt"></i></spann>
                    </div>
            </div>
            <div class="shw_info w-100">
                <div class="row mx-0">
                    <div class="col-md-3 onuNl">
                        <strong>Name</strong><br>
                        <strong>Email</strong><br>
                        <strong>Mobile</strong><br>
                        <strong>Date of Birth</strong><br>
                        <strong>Location</strong><br>
                        <strong>Gender</strong><br>
                    </div>
                    <div class="col-md-6">
                        <span>fullname</span><br>
                        <span>email</span><br>
                        <span>phone</span><br>
                        <span>dob</span><br>
                        <span>address</span><br>
                        <span>gender</span>
                        
                    </div>
                </div>
            </div>


            <div class="edit_info bg-white w-100">
                <form class="">
                    <div class="row mx-0 form-group">
                        <div class="col-md-4">
                            <label>Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="full_name" placeholder="Name" readonly>
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Email Id<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Email" readonly>
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Phone Number<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone" >
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Date of Birth<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name=""  >
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Current Location<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="address" placeholder="" >
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Gender<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="" required="">
                                <option selected="" value="male">Male</option>
                                <option selected="" value="male">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success">Save</button>
                        <button class="darkBtn ml-3" type="button" id="cnclInfo">Cancel</button>
                    </div>
                </form>
            </div>
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
        <div class="p-3 bg-white border mt-3 mx-n3">
            <div class="row p-0 mx-0">
                <div class="col-md-6">
                    <h4>Work Summary</h4>
                    <hr>
                </div>
                <div class="col-md-6 text-right">
                    <spann id="totlExpe" class="text-primary pointer"><i class="fas fa-pencil-alt"></i></spann>
                </div>
            </div>
                
            <div class="work_sumry w-100">
            
                    <div class="row mx-0">
                        <div class="col-md-3 onuNl">
                            <strong>Work Title</strong><br>
                            <strong>Profile Summary</strong><br>
                            <strong>Total Experience</strong><br>
                    
                        </div>
                        <div class="col-md-6">
                            <span>work_title</span><br>
                            <span>profile_summary</span><br>
                            <span>' Years '.' Months'</span><br>
                        </div>
                    </div>
                    <hr>
              
            </div>
            <div class="work_sumryEdit w-100 mt-2">
                <form class="addWorkSummary">
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Work Title<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="work_title" placeholder="Name" required="">
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Profile Summary<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <textarea  class="form-control" name="profile_summary" placeholder="" required=""></textarea>
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Total Experience<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="exp_year"  required="">
                                <option value="0" selected=""> 0 Yrs</option>
                                <?php for($i=1; $i<24;$i++):?>
                                    <option value="<?=$i?>" ><?=$i?> Yrs</option>
                                <?php endfor;?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="exp_month"  required="">
                                <option value="0" selected=""> 0 Month</option>
                                <?php for($i=1; $i<13;$i++):?>
                                    <option value="<?=$i?>" ><?=$i?> Month</option>
                                <?php endfor;?>
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
        $(document).on("click","#totlExpe",function(){
            $(".work_sumryEdit").show();
            $(".work_sumry").hide();
        })
        $(document).on("click","#wrkCncl",function(){
            $(".work_sumry").show();
            $(".work_sumryEdit").hide();
        })
    </script>


        <div class="p-3 bg-white border mt-3 mx-n3">
            <div class="row p-0 mx-0">
                <div class="col-md-6">
                    <h4>Education</h4>
                    <hr>
                </div>
                <div class="col-md-6 text-right">
                    <span id="SjjEduca" class="text-primary pointer"><i class="fas fa-pencil-alt"></i></spann>
                </div>
            </div>
            <div class="p-4">
            
                    
                    <div class="">
                        <h6 class="mx-0">degree</h6>
                        <small>course_</small><br>
                        <small>institute_ ( course type) | passing year </small>
                    </div>
                    <hr>
                
            </div>
            <div class="w-100 mt-2 educaEdit" id="">
                <form id="addEducation" >
                    
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Degree Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="deg_name" placeholder="Degree Name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Course Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="course_name" placeholder="Course Name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Institute Name<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="inst_name" placeholder="Institute Name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Course Type<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            
                            <select class="form-control" name="course_type" required="">
                                <option  value="Regular">Regular</option>
                                <option  value="Part Time">Part Time</option>
                                <option  value="Correspondence">Correspondence</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row mx-0 form-group ">
                        <div class="col-md-4">
                            <label>Passing Year<sub class="text-danger">*</sub></label>
                        </div>
                        <div class="col-md-6">
                            
                            <select class="form-control" name="passing_year" required="">
                                <option value="" selected>Year of Passing</option>
                                <option  value="">2015</option>
                                <option value="203">2014</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="text-center mt-2" >
                        <input type="submit" class="btn btn-success" value="Save">
                        <a class="darkBtn ml-3" id="cnclEdu">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <script>
        $(document).on("click","#SjjEduca",function(){
            $(".educaEdit").show();
            
        })
        $(document).on("click","#cnclEdu",function(){
            
            $(".educaEdit").hide();
        })
    </script>
        <div class="p-3 bg-white border mt-3 mx-n3">
            <div class="row p-0 mx-0">
                <div class="col-md-6">
                    <h4>Skills</h4>
                    <hr>
                </div>
                <div class="col-md-6 text-right">
                    <span class="text-primary pointer" id="eduASA" >Add Skill</span>
                </div>
            </div>

            <div class="w-100">
               
              
                    <div class="row mx-0 border-bottom p-1">
                        <div class="col-md-8">
                            <span>skill_name</span>
                        </div>
                        <div class="col-md-4 text-right">
                            <span class="pointer"><i class="fas fa-pencil-alt"></i></span>
                            <span class="ml-3"><i class="fas fa-trash-alt"></i></span>
                        </div>
                    </div>
               
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
                        <input type="text" class="form-control" name="" placeholder="Skill">
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" name="">
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

    </section>

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
</section>