
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jobs Posted </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($jobsPosted)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Application (Receieved)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($jobsApplication)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Application (Accepted)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($jobsApplication_rej)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Application (Rejected)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=count($jobsApplication_acp)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
    <?php
    // print_r($jobsApplication);
      // $compData=unserialize($this->session->userdata('logged_company'));
    // print_r($compData);
    ?>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block ">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Company Logo</h1>
                <hr>
              </div>
              <form class="user" id="compLogo">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                   <img src="<?=base_url('assets/companyImages/logo/').$compData[0]->company_logo?>" width="50%" onerror='this.src="<?=base_url('assets/companyImages/logo/default.png')?>"'>
                  </div>

                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="file" name="comp_logo" >
                  </div>

                </div>

                <input type="submit" name="" value="Upload Logo" class="btn btn-primary btn-user btn-block">
       
                
              
              </form>
              <hr>
              
            </div>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Company Details</h1>
                <hr>
              </div>
              <form class="user" id="compDetail">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Company Name" name="comp_name" value="<?=$compData[0]->company_name?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Phone Number" name="comp_phone" value="<?=$compData[0]->comp_phone?>">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                   <input type="email" name="comp_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Company Email Address" value="<?=$compData[0]->company_email?>" readonly>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Company URL" name="comp_website" value="<?=$compData[0]->website_url?>">
                  </div>
                  
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <label>Company Description</label>
                    <textarea class="form-control form-control-user"  rows="5" name="comp_desc"><?=$compData[0]->comp_desc?></textarea>
                    
                  </div>
                </div>

                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <label>Company Address</label>
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Company Address" name="comp_address" value="<?=$compData[0]->comp_address?>">
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <label>Company Registratio Number</label>
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Company Address" name="comp_reg" value="<?=$compData[0]->company_reg_no?>">
                  </div>
                </div>
                <input type="submit" name="" value="Update Account" class="btn btn-primary btn-user btn-block">
       
              
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<script type="text/javascript">
  $(document).ready(function(){
    $('#compDetail').on('submit',function(e){
      e.preventDefault();
      var formData=new FormData($(this)[0]);
      console.log("Working Fine");
      $.ajax({
        url:"<?=base_url('CompanyLogic/updateCompDetails')?>",
        type:"post",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          // console.log(response);
          response=JSON.parse(response);
          if(response.code==1){
            swal("Great..","Updated Successfully.","success");
          }else{
            swal("Ooops..","Something went wrong","error");
          }
          location.reload();
        }
      });
    });
    $('#compLogo').on('submit',function(e){
      e.preventDefault();
      var formData=new FormData($(this)[0]);
      console.log("Working Fine");
      $.ajax({
        url:"<?=base_url('CompanyLogic/uploadLogo')?>",
        type:"post",
        cache:false,
        enctype:'multipart/form-data',
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          // console.log(response);
          response=JSON.parse(response);
          if(response.code==1){
            swal("Great..","Updated Successfully.","success");
          }else{
            swal("Ooops..","Something went wrong","error");
          }
          location.reload();
        }
      });
    });
  });
</script>