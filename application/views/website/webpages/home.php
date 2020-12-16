<section class="mainDiv">
        <section class=" colBackLightBlue">
                
                <div class="container ptTT pb-5">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="padT">
                            <div class="">
                                <h1>
                                    <strong>Drop 
                                        <span class="colBlu">Resume </span>& get your 
                                        <span class="colBlu">Resume </span>
                                    </strong>
                                </h1>
                                <span class="fnt500">Find Jobs, Employment & Career Opportunities</span>
                            </div>
                            <form class="mt-2" action="<?=base_url('Job/searchJob')?>" method="get">
                                <div class="form-group POsrt">
                                    <input type="text" placeholder="Jobs title, skill or company" name="skill_name" class="form-control "/>
                                    <span class="">
                                    <img src='<?=base_url("/assets/images/Search.png")?>' class="img-fluid"/>
                                    </span>
                                </div>
                            <div class="form-group POsrt">
                                <input type="text" placeholder="Town city or postcode" name="city" class="form-control"/>
                                <span class="">
                                <img src='<?=base_url("/assets/images/Town-city-nav.png")?>' class="img-fluid"/>
                                </span>
                            </div>

                            <button class="btn bnlurrt py-2 px-3 bordRAD0"> 
                            <img src='<?=base_url("/assets/images/Find-white.png")?>' class="img-fluid"/> Find Jobs</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                        <img src='<?=base_url("/assets/images/intro.png")?>' class="img-fluid"/>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <section class="container py-5">

     <div class="row">
      <div class="col-md-3">
        <div class="pt-5">
          <h2>Choose Your Sector</h2>

          <span class="fnt500 colGry mt-4">
            I truely believe Augustine's words are true and if you
            look at history you know it is true.
          </span>

          <button class="mt-4 btn btn-default border rounded"><strong>View More Jobs</strong></button>
        </div>
      </div>
      <div class="col-md-9">
        <div class="">
            <div class="row m-0">
                   
              <?php foreach($categories as $cat): ?>

                <div class="col-md-3 mt-3">
                  <a href="<?=base_url('Website/jobsByCategory/').$cat['category_id']?>">
                    <div class="p-3 text-center Fnte">
                      <div class="">
                        <img src='<?=base_url("/assets/category_icon/").$cat['category_icon']?>' class="img-fluid"/>
                      </div>
                      <h5><strong><?=$cat['category_name']?></strong></h5>
                      <span ><?=$cat['total_jobs']?> Open Jobs</span>
                    </div>
                  </a>
                  
                </div>
              <?php endforeach; ?>
             
            </div>
        </div>
      </div>
    </div>
   </section>
    
   <section class="container py-5">
        <div class="text-center">
            <h1>It's simple to get started</h1>
            <span class="colGry">
            Give yourself the power of responsibility. Remind your the only thing stopping you is yourself.
            </span>
        </div>
        <div class="">
            <img src='<?=base_url("/assets/images/getstarted.png")?>' class="img-fluid"/>
        </div>
    </section>


    <section class="container py-5">
    <h4 class="mb-5">Jobs You May Be Interested In</h4>
    <div class="">
      
        <div class="row m-0">
          <?php foreach($interest as $int_job): ?>

            <?php
              date_default_timezone_set('Asia/Kolkata');
              $currentDate=date('Y-m-d h:i:s');
              
              $job_post_Date=date('Y-m-d h:i:s', strtotime($int_job->adde_on));

              $date1 = new DateTime($currentDate);
              $date2 = new DateTime($job_post_Date);
              $interval = $date1->diff($date2);
              // print_r($interval);
              if($interval->d!=0){
                $tim_=$interval->d.'/'.$interval->m.'/'.$interval->y;
              }else if($interval->d==0 && $interval->h==0 ){
                $tim_=$interval->i.' seconds ';
              }else{
                $tim_=$interval->h.' hours ';
              }
            ?>
            <div class="col-md-6 my-1">

              
                <div class="card">
                  <div class="card-body">
                    <div class="row ">
                      <div class="col-md-3">
                        <div class="">
                          <img src='<?=base_url("/assets/images/client1.png")?>' class="img-fluid"/>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="">
                          <a href="<?=base_url('Website/getJobDescription/').$int_job->job_id?>">
                            <h5><?=$int_job->job_title?></h5>
                          </a>
                            <small class="colGry">
                              via 
                              <span class="colBlu">
                                <a href="<?=base_url('Website/getCompanyDetails/').$int_job->added_by_company_id?>"><?=$int_job->company_name?></a>
                                
                                
                              </span>
                            </small>
                              <small class="colGry"><?=$int_job->job_location_?></small>
                            <br/>
                            <small class="colGry"><?=$int_job->category_name?></small><small class="ml-2 colBlu"><?=$int_job->type_name?></small> 
                        </div>
                        
                        <small class="colGry float-right"><?=$tim_?> ago</small>
                        
                      </div>
                      <!-- <div class="col-md-2">
                        <div class="">
                          <div class="border heartIcon rounded-circle p-1">
                            <img src='<?=base_url("/assets/images/Heart.png")?>' class="img-fluid"/>
                          </div>
                          <div class="mt-2">
                              <small class="colGry">
                              <span><img src='<?=base_url("/assets/images/time-icon.png")?>' class="img-fluid"/></span> 
                              1H ago
                              </small>

                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
             
              
              
            </div>
          <?php endforeach; ?>
        </div>
              
    </div>
</section>    
<section class="container py-5"> 
  <div class="row">
    <div class="col-md-6">
      <div class="HIssqq ">
        <?php
          if(count($total_jobs)>1){
            $jobs_Count=count($total_jobs)-1;
          }else{
            $jobs_Count=count($total_jobs);
          }

        ?>
        <h1><?= $jobs_Count ?> + <span class="colBlu"> Browse Jobs</span></h1>
        <h4 class="fnt500">Search all the open positions on the web.</h4>

        <button class="btn bnlurrt fnt24">SEARCH JOBS</button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="">
        <img src='<?=base_url("/assets/images/Browse-illustration.png")?>' class="img-fluid"/>
      </div>
    </div>
  </div>
</section>
<section class="container py-5"> 
  <div class="row">
    <div class="col-md-6">
      <div class="">
         <img src='<?=base_url("/assets/images/why-choose.png")?>' class="img-fluid"/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="Fnte pt-4">
        <h3 class="fnt500 mb-4">Why You Choose Job Among Other Job Site?</h3>
        <small class="colGry mt-5 fnt500 fnt14">I truly believe It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and  

        </small>

        <div class="row m-0 mt-5">
          <div class="col-md-6 px-1">
            <div class="d-flex">
              <div class="ml-2">
                  <img src='<?=base_url("/assets/images/Best-Talented-people.png")?>' class="img-fluid"/>
              </div>
                <h6 class="fnt500">Best talented people</h6>
            </div>
            <div class="d-flex">
              <div class="ml-2">
                  <img src='<?=base_url("/assets/images/Easy-to-communicate.png")?>' class="img-fluid"/>
              </div>
                <h6 class="fnt500">Easy to communicate</h6>
            </div>
          </div>

          <div class="col-md-6 px-1">
            <div class="d-flex">
              <div class="ml-2">
                  <img src='<?=base_url("/assets/images/Easy-to-find-candidate.png")?>' class="img-fluid"/>
              </div>
                <h6 class="fnt500">Easy to find candidate</h6>
            </div>
            <div class="d-flex">
              <div class="ml-2">
                  <img src='<?=base_url("/assets/images/Global-recuritment.png")?>' class="img-fluid"/>
              </div>
                <h6 class="fnt500">Global recruitment option</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class=" colBackLightBlue ">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-7">
          <div class="ptTT">
            <h1>Browse Hundreds Of Jobs</h1>

            <h5 class="mt-2 fnt500">We are efficiently delivering tons of jobs straight to your pocket.</h5>


          </div>
        </div>
         <div class="col-md-5">
          <div class="">
            <img src='<?=base_url("/assets/images/Mobile-application.png")?>' class="img-fluid"/>
          </div>
        </div>
      </div>
    </div>
  </section>
 
            </section>