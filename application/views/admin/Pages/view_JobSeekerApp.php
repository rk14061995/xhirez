 <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title text-danger">View Seeker Application</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="index.html">User</a>
                  </li> -->
                 <!--  <li class="breadcrumb-item active">List
                  </li> -->
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body collapse show">
              
              <div class="table-responsive refreshlocation">
                <table class="table table-striped" id="applicationTable">
                  <thead>
                    <tr>
                      <th scope="col">SNo</th>
                      <th scope="col">Apply By</th>
                      <th scope="col">Company</th>
                        <th scope="col">Apply For</th>  
                      <th scope="col">Location</th> 
                      <th scope="col">Gender</th> 
                       <!-- <th scope="col">Change Status</th>  -->
                     <!--  <th scope="col">Logo</th> 
                      <th scope="col">Registration No.</th>  -->
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                   foreach($getSeekrApps as $SeekrApps)
                    {
                        // $myImages=explode(',',$SeekrApps->profile_pic);
                        // print_r($SeekrApps);
                       // die;
                      ?>
                    <tr>
                      <th scope="row"><?=$i?></th>
                        <td><?=$SeekrApps->fullname?></td>
                        <td><?=$SeekrApps->company_name?></td>
                        <td><?=$SeekrApps->job_title?></td>
                        <td><?=$SeekrApps->job_location_?></td>
                        <td><?=$SeekrApps->gender_?></td>	
                        <td>
                         <a href="javascript:void(0)" job_application_id="<?=$SeekrApps->job_application_id?>" class="w-100 rounded-pill border-0 p-2  font-weight-bold butn-style1 delete">Delete</a></td>
                    </tr>
                    <?php
                    $i++;
                    }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </div>
    <script type="text/javascript">
     $(document).ready(function(){
          $('.deactivate').on('click',function(){ 
               var deactivate_id=$(this).attr("deactivate_id");
               // alert(deactivate_id);
              $.ajax({
                url:'<?=base_url('Admin_Job/DeactivateJobseeker')?>',
                type:"post",
                data:{deactivate_id:deactivate_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.status==1)
                        {
                        
                    swal("Users", "Status Change", "success");

                         }
                             location.reload();// $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>
    <script type="text/javascript">
     $(document).ready(function(){
          $('.activate').on('click',function(){ 
               var activate_id=$(this).attr("activate_id");
               // alert(activate_id);
              $.ajax({
                url:'<?=base_url('Admin_Job/ActivateJobseeker')?>',
                type:"post",
                data:{activate_id:activate_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.status==1)
                        {
                        
                    swal("User", "Status Change", "success");

                         }
                             location.reload();// $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>
<script type="text/javascript">
        $(document).ready(function(){
          $('.delete').on('click',function(){ 
             var job_application_id=$(this).attr("job_application_id");
              // alert(job_application_id);
           if(confirm("Are you Sure want to delete?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Admin_Dashboard/DeleteJobApp')?>",
                  type:"post",
                  data:{job_application_id:job_application_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response.status==1)
                      {
                        swal('User!','Deleted','error');
                   
                          location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
        $(document).ready( function () {
          $('#applicationTable').DataTable();
      } ); 
      </script>
