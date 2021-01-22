<body>  
 <!-this is the header-!>
       <div class="header">
         
        
         
           <h4 class="admin-name">
               
               <?php
             if ($this->session->userdata('admin')){
                 $message="";
                 echo $message.$this->session->userdata('name');
                
                 
                  
             }
               else{
                   echo "a";
                    $this->session->unset_userdata('admin');
               }
              
                
                ?>
               
               </h4>
           <div class="user-p" id="user-p">
              <span> <i class="fa fa-3x fa-user user-icon"></i></span><div><p class="user-text1"><?php echo $this->session->userdata('email');?></p>
               <p class="user-text3">Edit profile</p></div>
           </div>
           
           
          <!-- <i class="fa fa-3x  user-ic fa-user"></i>-->
          
   </div>