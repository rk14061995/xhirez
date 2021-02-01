<section class="paduj5">
    <section class="py-5">
        <div class="p-3 border">
            <h6 class="mb-0 text-dark">Important Notice:</h6>
            <p class="mb-0 fnt14">xhirez never sends any emails asking for your username and password. In case, you receive any such emails please do not respond and contact your Account Manager. Xhirez never threatens to close your account.
                You can also inform us at compliance@xhirez.com in case of any fraud emails.</p>
        </div>

        <div class="row mx-0 my-3">
            <div class="col-md-8 pl_0">
                <div class="shadow padHire">
                    <h3 class="mb-0 hIreJ">Find your next Great Hire</h3>
                    <span>Choose from 3.40 crore candidates with exactly the skills you're seeking.</span>
                    <br/><a href="<?=base_url('Employer-Candidate')?>" class="d-inline-block ntns ml-0">Find Candidates</a>
                </div>
            </div>
            <div class="col-md-4 pr_0">
                <div class="shadow padHire">
                    <h5 class="mb-0 loHi">Hire the right talent</h5>
                
                    <ul class="w-100 mt-3 pl-0 htomin d-flex">
                        <li class="">
                            <a href="<?=base_url('Employer-Post-Job')?>" class="ntns ml-0">Post A Job</a>
                        </li>
                        <!-- <li class="">
                        <a href="<?=base_url("CompanyAdmin/PostWalkInJobs")?>" class="ntns">Post A Walkin</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="padie shadow dskTop">
            <div class=" ">
                <h4 class="mb-0 hIreJ">Posted Jobs</h4>
            </div>
            <hr>
            <table class="table" id="manageJobs">
                <thead>
                    <tr>
                        <th>Creation Date</th>
                        <th>Job Details  </th>
                        <th>Applicants</th>
                        <th>Status</th>
                        <th class="text-center"> Actions</th>
                        <th>Available </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                //    print_r($jobs);

                    foreach($jobs as $jobsDetails){ 
                        $date = date("d M Y", strtotime($jobsDetails->adde_on) );
                        ?>
                        <tr>
                            <td>
                                <span><?= $date ?></span> <br/>
                                <span><strong>Views: </strong><span>28</span></span>
                            </td>

                            <td>
                                <a to="/company-panel/job-description" ><h6 class="colBl  mb-0"><?=$jobsDetails->job_title?> </h6></a>
                                <small><?=$jobsDetails->job_location_?> </small>
                            </td>

                            <td>
                                <?php if($jobsDetails->applied > 0){ ?>
                                    <span class="ml-1"><a href="<?=base_url('Employer-Applied-Candidates/'.$jobsDetails->job_id)?>"><?=$jobsDetails->applied?> Applicants</a> </span>

                                <?php }else{ ?>
                                        <span class="ml-1">0 Applicants</span>
                                <?php } ?>
                                
                            </td>
                            <td>
                                <span>Published</span><br/>
                                <small class="ml-1"><?= $date ?></small>
                            </td>
                            <td>
                                <div class="text-center">
                                
                                    <a class="pointer " href="<?=base_url('Employer-Edit-Job/'.$jobsDetails->job_id)?>" title="Edit"><span><i class="fas fa-edit"></i></span></a>
                                    
                                    <span class="ml-2" title="Delete"><a href="javascript:void(0) " class="deleteJob" idd="<?=$jobsDetails->job_id?>"><i class="fas fa-trash-alt"></i></a></span>
                                </div>
                            </td>
                            <td>
                                <?php 
                                    $clas= 'text-success';
                                    $claNam = 'Activated';
                                    if($jobsDetails->job_apps_status == 'deactive'){
                                        $clas= 'text-danger';
                                        $claNam = 'Deactivated';
                                    }
                                ?>
                                <span class="pointer checkStatus" stat="<?=$jobsDetails->job_apps_status?>" idd="<?=$jobsDetails->job_id?>"><strong class="ml-1 <?=$clas?>"><?=$claNam?></strong></span>
                                
                            </td>
                            
                        </tr>

                    <?php   }     

                    ?>

                </tbody>
            </table>
        </div>

        <div class="mt-3 padie shadow">
            <div class="row mx-0">
            <?php 
                for($i=0; $i < 3 ;$i++ ){ 
                    $date = date("d M Y", strtotime($jobs[$i]->adde_on) );
                    ?> 
                        <div class="col-md-4 mt-3 px-1">
                            <div class="border">
                                <div class="rectjobs">
                                    <a href=""><?=$jobs[$i]->job_title?></a>
                                    <br><p class="font10"><?=$date?></p>
                                </div>
                                <div class="ml-3 py-2">
                                    <?php if($jobs[$i]->applied > 0){ ?>
                                        <span class="ml-1"><a href="<?=base_url('Employer-Applied-Candidates/'.$jobs[$i]->job_id)?>"><?=$jobs[$i]->applied?> Applicants</a> </span>

                                    <?php }else{ ?>
                                            <span class="ml-1">0 Applicants</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                <?php } ?>
               
                
            </div>
        </div>

        <div class="mt-3 padie shadow">
            <div class="dpsi border-bottom pb-1">
                <span>Usage Limits</span>
                <a href="">View All</a>
            </div>
            <div class="mt-3">
            <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <h3 class="mb-0 loHi">0</h3>
                            <small>jobs posted in last 30 days</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <h3 class="mb-0 loHi">0</h3>
                            <small>jobs remaining overall</small><br/>
                            <a to="">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <h3 class="mb-0 loHi">843</h3>
                            <small>CV viewed in last 30 days</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <h3 class="mb-0 loHi">0</h3>
                            <small>emails sent in last 30 days</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</section> 
           
<script>
    $(document).ready( function () {
        $('#manageJobs').DataTable();
    } );
</script>