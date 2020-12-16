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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
  <section class="colBackLightBlue">
    <nav class="navbar navbar-expand-lg  container">
                <a href="<?=base_url('Website')?>" class="navbar-brand W20">
                    <img src='<?= base_url("assets/images/Xhirez-Logo.png")?>' class="img-fluid w-50"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
      
        <div class="collapse navbar-collapse bg_white" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto maiHead pl-3">
            <li class="nav-item ">
              <a href="<?=base_url('Website')?>" class="nav-link active" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="<?=base_url('Employer-Login')?>"> Business</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="<?=base_url('Agency-Login')?>"> Staffing Agencies</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url('Website/features')?>">Features</a>
            </li>
      
          </ul>
          <div class="form-inline my-2 my-lg-0 fnt500">
           <a href="<?=base_url('Employee-Login')?>" class="colGry ">
              <img src='<?= base_url("assets/images/Login-Icon.png") ?>' class="img-fluid"/>
                <span class="ml-2">LOGIN</span>
            </a> 
           <span class="mx-1">/</span>
           <a href="<?=base_url('Employee-SignUp')?>" class="colGry">
               <span class="ml-2">REGISTER</span>
            </a>
             
          </div>
        </div>
      </nav>
  </section>