<div class="main" id="main">
    <h2 class="text-center">Admin dashboard</h2>
    <hr>
<div class="container dashboard-container" >
    <div class="col-md-4 col-lg-4 col-xs-4">
        <div> <h4 class="plus" onclick="dropdown()"><i class="fa fa-user-plus"></i></h4></div>
        <p>Create new  admin account</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-4">
          <div> <h4 class="plus" onclick="slideleft()"><i class="fa fa-envelope"></i></h4></div>
        <p>send admin message</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-4">
         <div> <h4 class="plus" onclick="viewTable()"><i class="fa fa-table"></i></h4></div>
        <p>View admins table</p>
    </div>
    </div>
    <!--sign ups form side-->
    <div id="toggle-panel" class="toggle-panel container">
        
        <p class="text-center">sign up a new user's account</p>
        
        <form class="farmer-signup" method="post" action="<?php echo site_url('Admin/InsertTable')?>" >
            <input class="text-center" name="username" type="text" placeholder="username"><br>
         <input class="text-center" name="surname" type="text" placeholder="surname"><br>
            <input class="text-center" type="text" placeholder="firstname" name="first_name"><br>
            <input class="text-center" type="text" placeholder="enter email adress" name="email"> <br>
            
            <input class="text-center" type="text" name="phone" placeholder="enter phone number " ><br>
            <input class="text-center" type="password" name="password" placeholder="enter password" ><br>
            <input class="text-center" type="text"  name="farmer_group" placeholder="enter group "><br>
            
            <button type="submit" class=" btn sign-up-btn">click to sign up</button>
        </form>
        
        <!--message side-->
    
    </div>
    <div class="message-panel" id="message"> 
        <p class="text-center">send message</p>   
        <form class="msg-form">
        TO:<input type="text" ><br>
        Cc:<input type="text"><br>
 Subject:<input type="text" class="s-right">
        </form>
        <hr>
        <form class="msg" >
            <textarea type="text" name="msgText"></textarea><br>
            <button class="text-center btn" type="submit" >Send</button>
        </form>
    
    </div>
    <!--members-table-->
    <div class="view-member" id="view">
    <table class="table table-bordered table-responsive table-hover">
            <thead>
            <tr>
                <th>NO</th>
                <th>FIRSTNAME</th>
                <th>S/NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>GROUPS</th>
               
            </tr>
            </thead>

            <tbody>
        <?php
              
                foreach($view_users as $key=> $value){
                 echo "<tr>
                 <td>$value[id]</td
                 <td>$value[first_name]</td>
                 <td>$value[surname]</td>
                 <td>$value[email]</td>
                 <td>$value[phone_number]</td>
                 <td>$value[username]</td> 
                 <td>$value[password]</td>
                 <td>$value[farmer_group]</td
                 </tr>";
              
                }
                ?>
            </tbody>
        </table>
    </div>

    
   
    <hr>
    
    <div class="container" >
    <div class="col-md-4 col-lg-4 col-xs-12 color-1">
        <div class="plus">16</div>
        <p>Registered users</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12 color-2">
        <div class="plus">102</div>
        <p>subscribed users</p>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12 color-3">
        <div class="plus">50</div>
        <p>Active Users</p>
    </div>
    </div>
    

    
    <hr>

    
</div>