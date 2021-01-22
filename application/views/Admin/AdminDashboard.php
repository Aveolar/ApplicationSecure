<div class="main text-center" id="main">
    <h2 class="text-center">Admin dashboard</h2>
    <hr>
<div class="container dashboard-container" >
    <div class="col-md-4 col-lg-4 col-xs-4">
        <div> <h4 class="plus" onclick="dropdown()"><i class="fa fa-user-plus"></i></h4></div>
        <p>Create new  farmer account</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-4">
          <div> <h4 class="plus" onclick="slideleft()"><i class="fa fa-envelope"></i></h4></div>
        <p>send message</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-4">
         <div> <h4 class="plus" onclick="viewTable()"><i class="fa fa-table"></i></h4></div>
        <p>View farmers table</p>
    </div>
    </div>
    <!--sign ups form side-->
    <div id="toggle-panel" class="toggle-panel container">
        
        <h5 style="color:black" class=" signuptext">SIGN UP A NEW FARMER</h5>
        
         <div class="farmer-signup text-center"  >
             
            <input id="username" class="text-center" name="username" type="text" placeholder="username"><br>
         <input id="surname" class="text-center" name="surname" type="text" placeholder="surname"><br>
            <input id="firstname" class="text-center" type="text" placeholder="firstname" name="first_name"><br>
            <input id="email" class="text-center" type="text" placeholder="enter email adress" name="email"> <br>
            
            <input id="phone" class="text-center" type="text" name="phone" placeholder="enter phone number " ><br>
            <input id="password" class="text-center" type="password" name="password" placeholder="enter password" ><br>
            <input id="group" class="text-center" type="text"  name="farmer_group" placeholder="enter group "><br>
            <input id="loan" class="text-center" type="text"  name="loan" placeholder="assign loan amount "><br>
             <div class="msg-notify" id="msg-notify"></div>
            <button id="signupbtn"  class="btn sign-up-btn">click to sign up</button>
             
        </div>
        
        <!--message side-->
    
    </div>
    <div class="message-panel text-center" id="message"> 
        <p class="text-center"></p>   
        <div class="msg-form">
        TO:<br>
            <input  id="msg-phone"type="text" name="msg-phone" placeholder=" input farmer's mobile nummber">
            <br>  
        Subject:<br>
            <input id="msg-subject" name="msg-subject" placeholder="subject" type="text" class="s-right">
        </div>
        <hr>
        <div class="msg" >
            <textarea id="msg-Text" type="text" name="msg-Text"></textarea><br>
            <button id="msg-btn" class="text-center msg-btn">send</button>
        </div>
        <div id="msg-checksent" class="msg-checksent"></div>
    </div>
    <!--members-table-->
    <div class="view-member" id="view">
        <div class="over-f">
    <table class="table table-bordered table-responsive table-hover">
            <thead>
            <tr>
                <th>FIRSTNAME</th>
                <th>S/NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>LOAN</th>
            
               
            </tr>
            </thead>

            <tbody>
        <?php
                
                foreach($view_users as $key=> $value){
                 echo "<tr>
                <td> $value[first_name]</td>
                 <td>$value[surname]</td>
                 <td>$value[email]</td>
                 <td>$value[phone_number]</td>
                 <td>$value[username]</td> 
                 <td>$value[password]</td>
                 <td>$value[loan]</td
                 </tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>

    
    <div class="container " >
    <div class="col-md-4 col-lg-4 col-xs-4">
        <div><h4 class="plus" onclick="toggleobjective()"><i class="fa fa-calendar"></i></h4></div>
        <p>Schedule farmers Objectives</p>
    </div>
        
    <div class="col-md-4 col-lg-4 col-xs-4">
       <div> <h4 class="plus" onclick="toggleprice()"><i class="fa fa-tags"></i></h4></div>
        <p>Set Tool's price</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-4">
        <div> <h4 class="plus" onclick="toggledelete()"><i class="fa fa-trash"></i></h4></div>
        <p>Delete farmers Account</p>
    </div>
    
</div>
    <div  id="objective" class="objective">
        <hr>
        <div class="view-pan container">
            <div style="color:red" id="alert"></div>
            <h6 > Weed the farm <span id="sweed">:not selected</span></h6>
            <h6 > Fertilize the farm <span id="sfertilize">:not selected</span></h6>
            <h6 > Water the farm <span id="swater">:not selected</span></h6>
            <div style="color:green" id="sucess"></div>
        </div>
        <input id="phone-number" placeholder="enter farmer's mobile number" class="">
        <select id="schedule" >
        <option value="0">weed the farm</option>
            <option value="1">fertilize the farm</option>
            <option value="2">water the farm</option>
        </select>
        <button id="pending" class="bt1">Pending</button>
         <button id="urgent" class="bt3">Urgent</button>
        <button id="done" class="bt2">Done</button>
        <button id="insert" class="bt2">Insert</button>
        <button id="update" class="bt4">Update data</button>
        <button id="refresh" class="bt5">Refresh</button>
        
    
    </div>
    <div id="pricetag" class="pricetag">
        <hr>
     <input id="tractor" placeholder="Tractor's price e.g 1500 in naira" class="">
         <input id="seed" placeholder="Seed's price e.g 1500 in naira" class="">
         <input id="labor" placeholder="Labour's price e.g 1500 in naira" class="">
        <button  id="set" class="">Set</button>
        <div id="msg-alert"></div>
    </div>
    <!-- delete panel-->
    <div id="delete" class="delete">
        <hr>
    <input id="phone-num" placeholder="enter farmers phone number e.g 08032279381" >
        <button id="delete-b" >Delete</button>
        <div id="delete-alert" class="delete-alert"></div>
    </div>
    <hr>
    
    <div class="container-fluid row text-center" >
    <div class="col-md-6 col-lg-6 col-xs-12 color-1">
        <div class="plus">
             <?php
                $count=0;
                foreach($view_users as $key=> $value){
                 $count++;   
                }
            
            
            echo"$count";
            
            ?>
                <i class="fa fa-sign-in"></i>  </div>
        <p>Registered users</p>
    </div>
    <div class="col-md-6 col-lg-6 col-xs-12 color-2">
        <div class="plus">0</div>
        <p>Active users</p>
    </div>
    
    </div>
    

    
    <hr>

    <div class="admin-register row  text-center">
       
        <button id="addadmin">Add new admin</button>
         <hr>
       
        <div id="ad-register" class="admin-register-panel text-center">
             <h4> SIGN UP A NEW ADMIN</h4>
        <input id="admin-firstname" class="" placeholder="enter admin's Firstname"><br>
             <input id="admin-surname" class="" placeholder="enter admin's surname"><br>
             <input id="admin-phone" class="" placeholder="enter  admin's phonenumber"><br>
            <input id="admin-email" class="" placeholder="enter  admin's email adress"><br>
             <input type="password" id="admin-password" class="" placeholder="enter  admin's password"><br>
             <input type="password" class="" placeholder="re-enter  admin's password"><br>
            <button id="admin-add" >ADD</button>
        </div>
    </div>  
</div>