<section class="paduj5 backG py-5">

<div class=" py-4 bg-white">
<div class=" px-3">
    <h5>Candidates applied for : <strong><?=$jobData[0]->job_title?></strong></h5>
</div>
<hr>
    <div class="row ">
    
        <div class="col-md-12">
   
            <div class="row mx-0">
                <?php   
                //   print_r($usersData);
                    foreach ($usersData as $usr) {
                      
                      ?>
                    
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                                <div class="candidate_profile shadow">
                                    <div class="">
                                        <img src="<?=base_url()?>assets/UserImages/profile_picture/<?=$usr['details']->profile_pic?>" class="img-fluid w-100 h250" alt="Candidate Image">
                                    </div>
                                    <div class="saplCandidate">
                                        <div class="dsp_P border-bottom">
                                            <a href="<?=base_url('Employer-User-Profile/'.$usr['details']->user_id)?>" target="_blank " class="colBrown">
                                                <span><strong><?=ucwords($usr['details']->fullname)?></strong> </span>
                                            </a>
                                          
                                        </div>
                                        <div class="mt-2">
                                            <p class="fnt12">
                                                <span  class=" fnt12 DpidCan"><i class="fas fa-tag"></i></span> <span class="DpidCan">Skills : </span>
                                                <?php
                                                $skl = implode(",",$usr['skills']);
                                                 echo   substr($skl,0,20);
                                                ?>
                                             
                                            </p>
                                        </div>
                                        <div class="dsp_P">
                                            <?php
                                                if($usr['details']->resume_path){ ?>
                                                    <a type="button" href="<?=base_url()?>assets/user_resume/<?=$usr['details']->resume_path?>" class="darkBtn" download> 
                                                    <i class="fa fa-download"></i> Resume</a>
                                            <?php    }
                                            ?>
                                            <ul class="employer_work_contact">
                                                <li class= " mr-1"><a href="tel:<?=$usr['details']->phone_?>"  class="darkBtn"><i class="fa fa-phone"></i></a></li>
                                                <li class=""><a href="mailto: <?=$usr['details']->email?>" class="darkBtn"><i class="fa fa-envelope"></i></a></li>
                                                <!-- <li class="mt-1"><i class="fa fa-comment"></i></li> -->
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                 <?php   }

                ?>
                
            </div>
        </div>
  </div>
</div>
</section>
<style>
.h250 {
    height: 250px;
}
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