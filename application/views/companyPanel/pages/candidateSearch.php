<section class="paduj5 backG py-5">
  <div class="">
    <div class=" shadow pt-3">
      <div class=" container-fluid">
        <div class="row ">
          <div class="col-md-4">
            <h4 class="topHH">Search Candidate</h4>
          </div>
          <div class="col-md-8">
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
    print_r($userData);
?>
<div class=" py-5">
    <div class="row ">
        <div class="col-md-3">
            <div class="filterCandidate">
                <div class="mt-4">
                    <h6>CATEGORIES</h6>

                    <div class="">
                        <ul class="filterList">
                            <?php for($a=0; $a <5; $a++){?>
                                <li>
                                    <div class="">
                                        <input id="'id'<?=$a?>" type='checkbox' class="chkBOx" name=""/>
                                        <label for="'id'<?=$a?>">
                                            <span></span>
                                        Computer Operator
                                        </label>
                                    </div>
                                    <span class="fnt14">(23)</span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <h6>PACKAGE</h6>

                    <div class="">
                        <ul class="filterList">
                            <?php for($a=0; $a <5; $a++){?>
                                <li>
                                    <div class="">
                                        <input id="'pack'<?=$a?>" type='checkbox' class="chkBOx" name=""/>
                                        <label for="'pack'<?=$a?>">
                                            <span></span>
                                            &#8377; 0 - &#8377; 2222  
                                        </label>
                                    </div>
                                    <span class="fnt14">(23)</span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="mt-5">
                    <h6>SPECIALITY</h6>

                    <div class="">
                        <ul class="filterList">
                            <?php for($a=0; $a <5; $a++){?>
                                <li>
                                    <div class="">
                                        <input id="'spec'<?=$a?>" type='checkbox' class="chkBOx" name=""/>
                                        <label for="'spec'<?=$a?>">
                                            <span></span>
                                        Computer Operator
                                        </label>
                                    </div>
                                    <span class="fnt14">(23)</span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row mx-0">
                <div class="col-md-6">
                    <div class="position-relative">
                        <input type="text" placeholder="Name" name="name" class="inspt form-control">
                        <span class="placeMark"><i class="far fa-user"></i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <input type="text" placeholder="Location" name="location" class="inspt form-control">
                        <span class="placeMark"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <button class="w-100 darkBtn pad133"><span class="mr-1"><i class="fas fa-search"></i></span>Search</button>
                    </div>
                </div>
            </div>
            <?php 
                print_r($userData);
            ?>
            <div class="row mx-0">
                <?php   
                    foreach($usersData as $usr){?>
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                                <a href="" class="candidate_profile shadow">
                                    <div class="">
                                        <img src="<?=base_url()?>assets/UserImages/profile_picture/<?=$usr->profile_pic?>" class="img-fluid w-100" alt="Candidate Image">
                                    </div>
                                    <div class="saplCandidate">
                                        <div class="dsp_P border-bottom">
                                            <div class=" ">
                                                <h5><?=$usr->fullname?></h5>
                                            </div>
                                            <!-- <div class="">
                                                <ul class="list-unstyled mb-0 d-flex star_rating">
                                                    <li class="colGold"><i class="fas fa-star"></i></li>
                                                    <li class="colGold"><i class="fas fa-star"></i></li>
                                                    <li class="colGold"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li>(33)</li>
                                                </ul>
                                            </div> -->
                                        </div>
                                        <div class="mt-2">
                                            <p class="fnt12">
                                                <span  class=" fnt12 DpidCan"><i class="fas fa-tag"></i></span> <span class="DpidCan">Skills : </span>
                                                C#, PHP, HTML, Jquery, Bootstrap
                                            </p>
                                        </div>
                                        <div class="dsp_P">
                                            <button href="#" class="darkBtn">
                                            <i class="fa fa-download"></i> Resume</button>
                                            <ul class="employer_work_contact">
                                                <li class= "darkBtn ml-0"><i class="fa fa-phone"></i></li>
                                                <li class="darkBtn"><i class="fa fa-envelope"></i></li>
                                                <!-- <li class="mt-1"><i class="fa fa-comment"></i></li> -->
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </a>
                            </div>

                 <?php   }

                ?>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                    <a href="" class="candidate_profile shadow">
                        <div class="">
                            <img src="<?=base_url()?>assets/web_assets/images/1.jpg" class="img-fluid w-100" alt="Candidate Image">
                        </div>
                        <div class="saplCandidate">
                            <div class="dsp_P border-bottom">
                                <div class=" ">
                                    <h5>FirstName</h5>
                                </div>
                                <div class="">
                                    <ul class="list-unstyled mb-0 d-flex star_rating">
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li>(33)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="fnt12">
                                    <span  class=" fnt12 DpidCan"><i class="fas fa-tag"></i></span> <span class="DpidCan">Skills : </span>
                                    C#, PHP, HTML, Jquery, Bootstrap
                                </p>
                            </div>
                            <div class="dsp_P">
                                <button href="#" class="darkBtn">
                                <i class="fa fa-download"></i> Resume</button>
                                <ul class="employer_work_contact">
                                    <li class= "darkBtn ml-0"><i class="fa fa-phone"></i></li>
                                    <li class="darkBtn"><i class="fa fa-envelope"></i></li>
                                    <!-- <li class="mt-1"><i class="fa fa-comment"></i></li> -->
                                </ul>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                    <a href="" class="candidate_profile shadow">
                        <div class="">
                            <img src="<?=base_url()?>assets/web_assets/images/1.jpg" class="img-fluid w-100" alt="Candidate Image">
                        </div>
                        <div class="saplCandidate">
                            <div class="dsp_P border-bottom">
                                <div class=" ">
                                    <h5>FirstName</h5>
                                </div>
                                <div class="">
                                    <ul class="list-unstyled mb-0 d-flex star_rating">
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li>(33)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="fnt12">
                                    <span  class=" fnt12 DpidCan"><i class="fas fa-tag"></i></span> <span class="DpidCan">Skills : </span>
                                    C#, PHP, HTML, Jquery, Bootstrap
                                </p>
                            </div>
                            <div class="dsp_P">
                                <button href="#" class="darkBtn">
                                <i class="fa fa-download"></i> Resume</button>
                                <ul class="employer_work_contact">
                                    <li class= "darkBtn ml-0"><i class="fa fa-phone"></i></li>
                                    <li class="darkBtn"><i class="fa fa-envelope"></i></li>
                                    <!-- <li class="mt-1"><i class="fa fa-comment"></i></li> -->
                                </ul>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                    <a href="" class="candidate_profile shadow">
                        <div class="">
                            <img src="<?=base_url()?>assets/web_assets/images/1.jpg" class="img-fluid w-100" alt="Candidate Image">
                        </div>
                        <div class="saplCandidate">
                            <div class="dsp_P border-bottom">
                                <div class=" ">
                                    <h5>FirstName</h5>
                                </div>
                                <div class="">
                                    <ul class="list-unstyled mb-0 d-flex star_rating">
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li class="colGold"><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li>(33)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="fnt12">
                                    <span  class=" fnt12 DpidCan"><i class="fas fa-tag"></i></span> <span class="DpidCan">Skills : </span>
                                    C#, PHP, HTML, Jquery, Bootstrap
                                </p>
                            </div>
                            <div class="dsp_P">
                                <button href="#" class="darkBtn">
                                <i class="fa fa-download"></i> Resume</button>
                                <ul class="employer_work_contact">
                                    <li class= "darkBtn ml-0"><i class="fa fa-phone"></i></li>
                                    <li class="darkBtn"><i class="fa fa-envelope"></i></li>
                                    <!-- <li class="mt-1"><i class="fa fa-comment"></i></li> -->
                                </ul>
                            </div>
                            
                        </div>
                    </a>
                </div>
            </div>
        </div>
  </div>
</div>
</section>
<style>
    .filterCandidate{
        background:white;
        padding: 25px;
    }
    .filterCandidate h6{
        padding-bottom: 5px;
    margin-bottom: 12px;
    color: #151515;
    border-bottom: 1px solid #d6d5d5;
    }
    .fnt14{
        font-size: 14px;
    }
    .filterList {
        list-style-type: none;
        padding: 0px;
        margin: 0px;
    }
    .filterList  li{
        margin-bottom: 6px;
        display: flex;
        justify-content: space-between;
    }

        .chkBOx {
        height: 0;
        display:none;
        width: 0;
        }

        .chkBOx + label {
        position: relative;
        display: flex;
        margin:  0;
        font-size:14px;
        align-items: center;
        color: #151515;
        transition: color 250ms cubic-bezier(0.4, 0, 0.23, 1);
        }
        /* .chkBOx + label > ins {
        position: absolute;
        display: block;
        bottom: 0;
        left: 2em;
        height: 0;
        width: 100%;
        overflow: hidden;
        text-decoration: none;
        transition: height 300ms cubic-bezier(0.4, 0, 0.23, 1);
        }
        .chkBOx + label > ins > i {
        position: absolute;
        bottom: 0;
        font-style: normal;
        color: #4fc3f7;
        } */
        .chkBOx + label > span {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 9px;
        width: 17px;
        height: 17px;
        background: transparent;
        border: 2px solid #9e9e9e;
        border-radius: 2px;
        cursor: pointer;
        transition: all 250ms cubic-bezier(0.4, 0, 0.23, 1);
        }

        /* .chkBOx + label:hover,
        .chkBOx:focus + label {
        color: #fff;
        } */
        .chkBOx + label:hover > span,
        .chkBOx:focus + label > span {
        background: rgba(255, 255, 255, 0.1);
        }
        /* .chkBOx:checked + label > ins {
        height: 100%;
        } */

        .chkBOx:checked + label > span {
        border: 8px solid #ffeb3b;
        animation: shrink-bounce 200ms cubic-bezier(0.4, 0, 0.23, 1);
        }
        .chkBOx:checked + label > span:before {
        content: "";
        position: absolute;
        top: 0.6em;
        left: 0.2em;
        font-size: 20px;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        transform: rotate(45deg);
        transform-origin: 0% 100%;
        animation: checkbox-check 125ms 250ms cubic-bezier(0.4, 0, 0.23, 1) forwards;
        }

        @keyframes shrink-bounce {
        0% {
            transform: scale(1);
        }
        33% {
            transform: scale(0.85);
        }
        100% {
            transform: scale(1);
        }
        }
        @keyframes checkbox-check {
        0% {
            width: 0;
            height: 0;
            border-color: #212121;
            transform: translate3d(0, 0, 0) rotate(45deg);
        }
        33% {
            width: 0.2em;
            height: 0;
            transform: translate3d(0, 0, 0) rotate(45deg);
        }
        100% {
            width: 0.2em;
            height: 0.5em;
            border-color: #212121;
            transform: translate3d(0, -0.5em, 0) rotate(45deg);
        }
        }

</style>