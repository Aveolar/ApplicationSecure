<div class="main" id="main">
<div class="profile-dashboard container-fluid col-md-12 text-center">
    <h1><small>PROFILE</small></h1>
<i class="fa fa-5x fa-user profile-icon2"></i>

</div>

    <div class="col-md-12 col-sm-12 text-center">
    <div class="container row">
        <div  class="col-md-6 col-sm-6">
    <h3>
    <?php
                echo $this->session->userdata('firstname').",";
         echo $this->session->userdata('surname')
                ?>
    
    </h3>
        </div>
        <div class=" col-md-6 col-sm-6">
            <i class="fa fa-5x fa-qrcode"></i>
        </div>
    
    </div>
</div>

<div class="frm-groups text-center">
    <input id="ingroup" type="text" placeholder="Farmer-Group::<?php  foreach($details as $key=> $value){
                 
                    echo " $value[farmer_group]";
                };
                                               
                ?>" > <br>
    <input id="inemail" type="text" placeholder="Email::<?php  foreach($details as $key=> $value){
                 
                    echo " $value[email]";
                };
                                               
                ?>" > <br>
    <input id="inphone" type="text" placeholder="Member number:<?php  foreach($details as $key=> $value){
                 
                    echo " $value[phone_number]";
                };
                                               
                ?>" > <br>
<div id="changes" class="text-center"><button class=""> save changes</button></div>
    <div id="inmsg" ></div>
</div>

</div>
</div>