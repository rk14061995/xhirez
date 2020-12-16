<section class="paduj5">
    <section class="py-5">
        <div class="shadow pt-3 ">
          <div class=" container">
            <div class="row ">
              <div class="col-md-4">
                <h4 class="topHH mb-0">Manage email templates</h4>
                <small class="ml-2">(You have created 22 templates out of 50)</small>
              </div>

              <div class="col-md-8">
                <ul class="d-flex list-unstyled polo justify-content-end">
                    <li class="dskTop">
                        <a href="">My email template</a>
                    </li>
                    <li  class="dskTop">
                        <a href=""> Email templates shared by others</a>
                    </li>
                    <li>
                        <button>Create a new email template</button>
                    </li>
                </ul>

              </div>
            </div>
          </div>
        </div>

      
        <div class="mt-4 ">
            <div class="shadow p-3">
                <div class="text-right py-2">
              
                    <button class="ntns disBtn" disabled="true" id="deltBn"><i class="far fa-trash-alt"></i> Delete</button>
                </div>
                <div class="table-responsive ">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div class="">
                                          <input type="checkbox" name="" class="" id="allSelct"/>
                                        </div>
                                        <div class="ml-1">
                                          Template name
                                        </div>
                                    </div> 
                                </th>
                                <th>Last Used on</th>
                                <th>Last Modified on</th>
                                <th>Created On</th>
                                <th>Status</th>
                                <th>Share/Unshare</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="">
                                          <input type="checkbox" name="" class="tableCH"/>
                                        </div>
                                        <div class="ml-1">
                                          <a href="" >Selenium tester/SDET</a>
                                        </div>
                                    </div> 
                                </td>	
                               
                                <td>18 Sep 2020	</td>
                                <td>18 Sep 2020	</td>
                                <td>18 Sep 2020	</td>
                                <td>Accepted</td>
                                <td>
                                    <a href="" >Share</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="">
                                          <input type="checkbox" name="" class="tableCH"/>
                                        </div>
                                        <div class="ml-1">
                                          <a href="" >Selenium tester/SDET</a>
                                        </div>
                                    </div> 
                                </td>	
                               
                                <td>18 Sep 2020	</td>
                                <td>18 Sep 2020	</td>
                                <td>18 Sep 2020	</td>
                                <td>Accepted</td>
                                <td>
                                    <a href="" >Share</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        
            </div>
        </div> 
    </section>   
</section> 
            <script>
                 $(document).ready(function(){
                    $(".tableCH").change(function(){
                        if($(this).prop("checked") == true){
                            $("#deltBn").attr('disabled','false');
                            $("#deltBn").removeClass('disBtn');
                        }
                        else if($(this).prop("checked") == false){
                            $("#deltBn").attr('disabled','true');
                            $("#deltBn").addClass('disBtn');
                        }
                        
                    });
                    $(document).on('change',"#allSelct",function(){
                        if($(this).prop("checked") == true){
                            $(".tableCH").prop('checked', true);
                            $("#deltBn").attr('disabled','false');
                            $("#deltBn").removeClass('disBtn');
                        }
                        else if($(this).prop("checked") == false){
                            $(".tableCH").prop('checked', false);
                            $("#deltBn").attr('disabled','false');
                            $("#deltBn").addClass('disBtn');
                        }
                    })
                })
            </script>