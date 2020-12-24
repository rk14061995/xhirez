<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Portal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/web_assets/')?>css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link rel="stylesheet" href='<?=base_url("assets/css/styleset.css")?>'>
<link rel="stylesheet" href='<?=base_url("assets/css/companyadmin.css")?>'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
        <section class="backPurl ">
           <nav class="navbar navbar-expand-lg navbar-light paduj5">
                <a href='/' class="navbar-brand W20">
                    <img src='<?=base_url("/assets/images/Xhirez-Logo-White.png")?>' class="img-fluid  w_40"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
      
                <div class="collapse navbar-collapse bg_white" id="navbarSupportedContent">
                    <ul class="navbar-nav company_nav company_dash mt-3">
                        <li class="nav-item ">
                            <a class="nav-link active" href="<?=base_url("CompanyAdmin/dashboard")?>">Home </a>
                        </li>
                 <!--        {/* <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Find Candidates  </a>
                            <ul class="dropdown-menu dropMenu py-0">
                                <li><a class="dropdown-item" href="#"> Advance Search</a></li>
                                <li><a class="dropdown-item" href="#"> Manage Search</a></li>
                            </ul>
                        </li> */} -->
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Jobs  </a>
                            <ul class="dropdown-menu dropMenu py-0">
                                <li>
                                    <a href="<?=base_url('Employer-Post-Job')?>" class="dropdown-item" >Post Jobs</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("Employer-Post-Walkin")?>" class="dropdown-item" > Post Walkin Jobs</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("CompanyAdmin/ManageJobs")?>" class="dropdown-item" > Manage Jobs</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Email/ SMS</a>
                            <ul class="dropdown-menu dropMenu py-0">
                                <li>
                                    <a href="<?=base_url("Employer-Email-Template")?>" class="dropdown-item" > New Enail Template</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("Employer-Manage-Email")?>" class="dropdown-item" > Manage Email Template</a>
                                </li>
                                <!-- {/* <li><a to="/company-panel/manage-jobs" class="dropdown-item" > Email Dashboard</a></li> */} -->
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="<?=base_url("Employer-Candidate")?>">Candidate Search </a>
                        </li>
                    </ul>
                    <div class="ml-auto mt-3">
                        <ul class=" ">
                            <li class="nav-item dropdown ">
                                <a class="nav-link  dropdown-toggle usrImg" href="#" data-toggle="dropdown">
                                    <img src='<?=base_url("/assets/images/user-dummy.png")?>' class="img-fluid"></img>
                                </a>
                                <ul class="dropdown-menu dropMenu userDrop py-0">
                                <li><a class="dropdown-item" href="#"> My Contact Details</a></li>
                                    <li><a to="" class="dropdown-item" > My Recent Jobs</a></li>
                                    <li><a to="" class="dropdown-item" > My Recent Searches</a></li>
                                    <li><a to="" class="dropdown-item" > Change Password</a></li>
                                    <li><a to="" class="dropdown-item" > Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    
                        
                    </div>
                    </div> 
                </nav>
        </section>