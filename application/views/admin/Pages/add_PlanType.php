<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height mt-1">
                  <div class="col-md-4">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">New Plan </h4>
                              <hr>
                          </div>

                         
                          <div class="card-body">
                            <form id="insertPlan">
                              
                              <div class="row">
                                <div class="col-md-12">
                                  <label>Name</label>
                                  <input type="text" class="form-control" required  name="Companytype"  >
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <label>Currency</label>
                                  <input type="text" class="form-control" required  name="CompanyCurrecy"  >
                                </div>
                                <div class="col-md-6">
                                  <label>Price</label>
                                  <input type="text" class="form-control" required  name="CompanyPrice"  >
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-12">
                                  <label>Description</label>
                                  <textarea class="form-control" required  name="CompanyDesc"></textarea>
                                  <script>
                                          CKEDITOR.replace( 'CompanyDesc' );
                                  </script>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <hr>
                                  <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
                                </div>
                              </div>
                              
                              </form>
                            </div>   
                            
                       
                      </div>
                  </div>
                  <div class="col-md-8">

                    <div class="card">
                      <div class="card-header">
                        <h5>Existing Plans</h5>
                        <hr>
                      </div>
                      
                      <div class="card-body">
                        <table class="table" id="planTable">
                          <thead>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                          </thead>
                          <tbody>
                            <?php $i=1; ?>
                            <?php foreach($plan_type as $type): ?>
                              <tr>
                                <td><?=$i?></td>
                                <td><?=$type->c_type_name?></td>
                                <td><?=$type->CompanyCurrecy .' '.$type->CompanyPrice?></td>
                                <td>Active</td>
                                <td>
                                  <a href="" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                  <a href="" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                              </tr>
                              <?php $i++; ?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
        </div>
      </div>
    </div>
   <script type="text/javascript"> 
    $(document).ready( function () {
          $('#planTable').DataTable();
      } );
$(document).on('submit','#insertPlan',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Company/addCompanyType')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Plan Type!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Plan Type!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Plan Type!", "Already Exist", "error")
                 }
                $("#insert").load(location.href + " #insert");
            }
        
             });     
});
</script>