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
                                  <span id="<?=$type->c_type_id?>" class="fetchData btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                  <span id="<?=$type->c_type_id?>" class="deletr btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="updateType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updatePlan">
            <div class="row">
              <div class="col-md-12">
                <label>Name</label>
                <input type="text" id="type_name" class="form-control" required  name="Companytype"  >
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Currency</label>
                <input type="text" id="type_currency" class="form-control" required  name="CompanyCurrecy"  >
              </div>
              <div class="col-md-6">
                <label>Price</label>
                <input type="text" id="type_price" class="form-control" required  name="CompanyPrice"  >
              </div>
            </div>
            <input type="text" id="type_id" class="d-none" required  name="type_id"  >
            <div class="row">
              <div class="col-md-12">
                <label>Description</label>
                <textarea class="form-control" required  name="CompanyDescription" id="type_description"></textarea>
                <script>
                        CKEDITOR.replace( 'CompanyDescription' );
                </script>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <hr>
                <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Update</button>
              </div>
            </div>
          
          </form>
      </div>
    
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
                      swal("Plan Type!", "Added Successfully", "success")
                    }
                    if(obj.status==2)
                    {
                    swal("Plan Type!", "Already Exist", "error")
                    }
                    $("#insert").load(location.href + " #insert");
                }
            
                });     
    });

    $(document).on('submit','#updatePlan',function(e){
        e.preventDefault();
            var formData= new FormData($(this)[0]);
            // alert('cas');
            $.ajax({
                url:"<?=base_url('Admin_Company/updateCompanyType')?>",
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
                      swal("Plan Type!", "Updated Successfully", "success")
                    }
                  
                    location.reload();
                }
            
                });     
    });

$(document).on('click','.deletr',function(e){
     e.preventDefault();
     var id = $(this).attr("id");
     var ele =$(this);
   
         $.ajax({
            url:"<?=base_url('Admin_Company/deletePlan')?>",
             type:"post",
             catche:false,
             data:{
               id:id
             },
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
                  swal("Plan Type!", "Deleted Successfully", "success")
                 }
                
                ele.parent().parent().remove();
            }
        
          });     
});


$(document).on('click','.fetchData',function(e){
     e.preventDefault();
     var id = $(this).attr("id");
     var ele =$(this);
   
         $.ajax({
            url:"<?=base_url('Admin_Company/fetchType')?>",
             type:"post",
             catche:false,
             data:{
               id:id
             },
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
                    $('#updateType').modal('show');
                    $('#type_name').val(obj.data[0].c_type_name);
                    $('#type_currency').val(obj.data[0].CompanyCurrecy);
                    $('#type_price').val(obj.data[0].CompanyPrice);
                    $('#type_description').val(obj.data[0].CompanyDesc);
                    $('#type_id').val(obj.data[0].c_type_id);
                  console.log(obj.data);
                 }
                
                ele.parent().parent().remove();
            }
        
          });     
});
</script>