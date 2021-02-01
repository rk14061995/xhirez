 <section class="paduj5">
             <section class="py-5">
                <div class="container-fluid shadow pt-3 ">
                    <div class=" container">
                        <div class="row ">
                        <div class="col-md-4">
                            <h4 class="topHH">Manage Jobs</h4>
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
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Account Jobs</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Jobs Started</a>
                                            
                                        </div>
                                    </nav>
                                    <div class="tab-content boes w-100" id="nav-tabContent"> 
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <?php 
                                         //   print_r($jobs) 
                                        
                                        ?>
                                            
                                            <!-- <div class="p-2 mt-4">
                                                <div class="Piauj">
                                                    <div class="posu">
                                                        <input type="text" placeholder="Job title, Id or Ref no." name="" class="form-control"/>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>All Jobs</option>
                                                        </select>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>Jobs Type</option>
                                                        </select>
                                                    </div>
                                                    <div class="posu">
                                                        <div class="d-flex">
                                                            
                                                                <input type="date" placeholder="Start Date" name="" class="pInpt form-control"/>
                                                        
                                                            <span class="mx-2">to</span>
                                                            
                                                                <input type="date" placeholder="End Date" name="" class="pInpt form-control"/>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>Posted By:</option>
                                                        </select>
                                                    </div>
                                                    <div class="ml-1 srchBtn">
                                                        <span ><i class="fa fa-search" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="mt-4">
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
                                                                    <a href="" ><h6 class="colBl  mb-0"><?=$jobsDetails->job_title?> </h6></a>
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
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="p-2 mt-4">
                                                <div class="Piauj">
                                                    <div class="posu">
                                                        <input type="text" placeholder="Job title, Id or Ref no." name="" class="form-control"/>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>All Jobs</option>
                                                        </select>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>Jobs Type</option>
                                                        </select>
                                                    </div>
                                                    <div class="posu">
                                                        <div class="d-flex">
                                                            
                                                                <input type="date" placeholder="Start Date" name="" class="pInpt form-control"/>
                                                        
                                                            <span class="mx-2">to</span>
                                                            
                                                                <input type="date" placeholder="End Date" name="" class="pInpt form-control"/>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="posu">
                                                        <select name="" class="form-control">
                                                            <option selected>Posted By:</option>
                                                        </select>
                                                    </div>
                                                    <div class="ml-1 srchBtn">
                                                        <span ><i class="fa fa-search" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mt-4">
                                                    <div class="text-center colGry">
                                                        <h6>You have no jobs.</h6>
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
         <script type="text/javascript">
  $(document).on('click','.checkStatus',function(e){
    e.preventDefault();
    var ele =$(this);
    var stat=$(this).attr("stat");
    var job_id = $(this).attr("idd");
      $.ajax({
        url:"<?=base_url('CompanyAdmin/changeJobStatus')?>",
         type:"post",
         catche:false,
         data:{
             job_id:job_id
         },
         success:function(response){
            var obj=JSON.parse(response);
            console.log(obj.status);
            if(obj.status==0){
                swal("Job!", "Try Again", "error")
            }
            if(obj.status==1){
              //  swal("Job!", "Status Changed", "success");
                if(stat=='active'){
                    ele.attr('stat','deactive');
                    ele.find('strong').removeClass('text-success');
                    ele.find('strong').addClass('text-danger');
                    ele.find('strong').html('Deactivated')
                }else{
                    ele.attr('stat','active');
                    ele.find('strong').addClass('text-success');
                    ele.find('strong').removeClass('text-danger');
                    ele.find('strong').html('Activated');
                }
                //swal("Job!", "Status Changed", "success");
            }
           
        }
      });  
  });

  $(document).on('click','.deleteJob',function(e){
    e.preventDefault();
    var ele=$(this);
     var job_id = $(this).attr("idd");
      $.ajax({
        url:"<?=base_url('CompanyAdmin/deleteJob')?>",
         type:"post",
         catche:false,
         data:{
             job_id:job_id
         },
         success:function(response){
            var obj=JSON.parse(response);
            console.log(obj.status);
            if(obj.status==0){
                swal("Job!", "Try Again", "error")
            }
            if(obj.status==1){
                ele.parent().parent().parent().parent().remove();
              swal("Job!", "Deleted", "success");
                
            }
           
        }
      });  
  });
</script>
<script>
$(document).ready( function () {
    $('#manageJobs').DataTable();
} );
</script>