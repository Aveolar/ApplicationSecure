<div class="main" id="main">
<div class="Fname container-fluid">
          <h3 class=""><b> <?php
             if ($this->session->userdata('farmer')){
                 $message=" ";
                 echo $message.$this->session->userdata('firstname');
                 
             }
               else{
                   echo " a";
                     $this->session->unset_userdata('farmer');
                  
               }
              
                
                ?></b></h3>
           <h5>Stay in touch with your financial status</h5>
       </div>
<div><h4 class="finance"><small><b>FINANCE</b></small></h4>

    </div>
            <div class="blue-bord">
      <i class="faside fa fa-bar-chart fa-3x" aria-hidden="true"></i>  <br>
           <b class="white"> Ledger       <span class="arr">  </span></b> <br>
     <b class="white2">Account Balance    <span class="arr"> <?php foreach($loan as $key=> $value){
                 
                    echo " $value[loan]";
                };
                                               
                ?></span></b></b>
</div>
       <div onclick="togglecost()"><h1 class="plus">+</h1></div>
       <div id="transaction-details" class="transaction-details">
          <div class="cost-form text-center">
            <label class="text-center">ADD ADDITIONAL COST INCURED</label><br>  
              <input name="description" type="text" placeholder="add service descriptions" id="description" ><br>
              <input  name="quantity" type="text" placeholder="add quantity" id="quantity"><br>
               <input  name="amount" type="text" placeholder="add amount" id="amount"><br>
    <div   class=" button-panel text-left" ><button id="sbm-btn" class="add-btn">ADD</button>
        
       <div class="input-message text-center " id="input-message"></div>

</div>
          </div> 
           
          
       </div>
    <button onclick="togglehistory()" id="hist-btn" class="history-btn">VIEW HISTORY</button> 
    <div id="history-panel" class="history-panel">
     <table class="table table-bordered table-responsive-sm" id="history-table">
            <thead>
            <tr>
                <th>S/NO</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Date/Time</th>
            </tr>
            </thead>

            <tbody id="history-body">
<?php
                $num=1;
                foreach($history as $key=> $value){
                 echo "<tr>
                 <td>$num</td>
                <td> $value[description]</td>
                 <td>$value[amount]</td>
                 <td>$value[quantity]</td>
                 <td>$value[date]</td>
                 </tr>";
                    $num=$num+1;
                }
                ?>
            </tbody>
        </table>
    
    </div>
       
<div class="container tools">
   <div class="row">
        <div class="col-md-4 col-lg-4  col-xs-12 b1"><small><b><h4>Tractor<h4 class="red"> 
            <?php
            foreach($tool as $key=> $value){
                 
                    echo " NGN $value[tractor]";
                };
                                               
                ?> 
            </h4></h4></b></small></div>
        <div class="col-md-4  col-lg-4 col-xs-12 b1"><small><b><h4>Seed</h4><h4 class="red" ><?php
            foreach($tool as $key=> $value){
                 
                    echo " NGN $value[seed]";
                };
                                               
                ?> </h4></b></small></div>
        <div class="col-md-4 col-lg-4 col-xs-12 b1"><small><b><h4>Labour</b></h4><h4 class="red" > <?php
            foreach($tool as $key=> $value){
                 
                    echo " NGN $value[labour]";
                };
                                               
                ?> </h4></b></small></div>
  </div>
</div>
</div>
