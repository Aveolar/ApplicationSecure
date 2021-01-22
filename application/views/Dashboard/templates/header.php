<body>  
 <!--this is the header-->
       <div class="header ">
        <div class="toggle-button" onclick="toggleSidebar()" id="span">
       <span class="mmenu"></span>
        <span class="mmenu"></span>
         <span class="mmenu"></span>
</div>
         <i onclick="togglenotification()" id="notification-bell" class="fa fa-bell fa-3x" aria-hidden="true"></i>
                                           <span class="notification"><p class="text-center notification-text">
                                             <?php
                $num=0;
                foreach($message as $key=> $value){
                    $num=$num+1;   
                }
                                               echo $num;
                ?>  <p></span>
           <div id="notification-panel" class="message-boarder text-center">
               
                <?php
                $num=0;
                foreach($message as $key=> $value){
                 echo"<hr>"  ;
                    echo "<p><b>$value[subject]</b></p>";
                    echo "<p>$value[message]</p>";
                };
                                               
                ?>  </div>
   </div>