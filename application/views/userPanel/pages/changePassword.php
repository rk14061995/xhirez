<!-- <section class="paduj5 backG">
    <div class="seaHDi">
        <div class="container">
            <div class="SearchBar mx-0">
                <div class="searchSkil">
                    <input type="text" class="form-control INpou" name="" placeholder="Job Title, Skills">
                </div>
                <div class="searchLo">
                    <input type="text" class="form-control INpou" name="" placeholder="Location ">
                </div>
                <div class="searchLo">
                    <select class="form-control INpou" name="">
                        <option selected disabled>Experience</option>
                        <option class="">0-1 year</option>
                        <option class="">1-2 year</option>
                    </select>
                </div>
                <div class="searchbtn">
                    <button class="INpou"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>  -->
<section class="my-5">
    <div class="row mx-0">
        <div class="col-md-4 offset-md-4">
            <div class="">
                <h3 class="colBrown">Change Password</h3>
                <form class=""id="updatePassword">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" placeholder="New Password" name="new_pwd" id="new_pwd">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="cnf_pwd" id="cnf_pwd">
                    </div>
                    <div class="text-center">
                        <button class="darkBtn py-2">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).on('submit','#updatePassword',function(e){
        e.preventDefault();
        if($('#new_pwd').val()==$('#cnf_pwd').val()){
            var formData = new FormData($(this)[0]);
            $.ajax({
                url:"<?=base_url('UserPanel/change_Password')?>",
                type:"post",
                cache:false,
                contentType:false,
                processData:false,
                data:formData,
                success:function(response){
                    console.log(response);
                    response=JSON.parse(response);
                    if(response.code==1){
                        swal("Great", "Password Updated", "success");
                    }else{
                        swal("Ooops", "Failed To Update", "error");
                    }
                }
            });
        }else{
           swal("Sorry", "Password Not Matched", "error"); 
        }
        
    })
</script>