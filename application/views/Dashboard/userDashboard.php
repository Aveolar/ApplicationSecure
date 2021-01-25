<div class="main" id="main">
  <div class="dash-header ">
        <div class="dashboard-message container-fluid">
          <h3 class=""><b>Welcome Back Seyi</b></h3>
           <h5>Bright day to be at the farm here is the weather forecast for today</h5>
       </div>
   </div>

 <section class="container-fluid"> 
        <h3 class="m2"><b>DASHBOARD</b></h3>
         <h4 class="m3"><b>Urgent/Upcoming Task</b></h4>
      
    <div class="row task">
       <div class="col-md-3  col-sm-3 col-xs-3 bord">Weed the Farm<br><button class="btn btn-1">urgent</button>
             <i class="fa fa-lg fa-long-arrow-right" aria-hidden="true" ></i>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3  bord">Fertilise The plant<br><button class="btn btn-2">pending</button>
              <i class="fa fa-lg fa-long-arrow-right" aria-hidden="true" ></i>
           </div>
          <div class="col-md-3 col-sm-3 col-xs-3 bord">Water the Farm<br><button class="btn btn-3">done</button>
              <i class="fa fa-lg fa-long-arrow-right" aria-hidden="true" ></i>  
           </div>
    </div>
 </section>
 
         <div class="customHr">.</div>
   <section class="calendar-section">
                 <div class="card">
        <h3 class="card-header" id="monthAndYear"></h3>
        <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>

            <tbody id="calendar-body">

            </tbody>
        </table>

        <div class="form-inline">

            <button class="btn  btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

            <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
        </div>
        <br/>
        <form class="form-inline">
            <label class="lead mr-2 ml-2" for="month">Jump To: </label>
            <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                <option value=0>Jan</option>
                <option value=1>Feb</option>
                <option value=2>Mar</option>
                <option value=3>Apr</option>
                <option value=4>May</option>
                <option value=5>Jun</option>
                <option value=6>Jul</option>
                <option value=7>Aug</option>
                <option value=8>Sep</option>
                <option value=9>Oct</option>
                <option value=10>Nov</option>
                <option value=11>Dec</option>
            </select>


            <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
            <option value=1990>1990</option>
            <option value=1991>1991</option>
            <option value=1992>1992</option>
            <option value=1993>1993</option>
            <option value=1994>1994</option>
            <option value=1995>1995</option>
            <option value=1996>1996</option>
            <option value=1997>1997</option>
            <option value=1998>1998</option>
            <option value=1999>1999</option>
            <option value=2000>2000</option>
            <option value=2001>2001</option>
            <option value=2002>2002</option>
            <option value=2003>2003</option>
            <option value=2004>2004</option>
            <option value=2005>2005</option>
            <option value=2006>2006</option>
            <option value=2007>2007</option>
            <option value=2008>2008</option>
            <option value=2009>2009</option>
            <option value=2010>2010</option>
            <option value=2011>2011</option>
            <option value=2012>2012</option>
            <option value=2013>2013</option>
            <option value=2014>2014</option>
            <option value=2015>2015</option>
            <option value=2016>2016</option>
            <option value=2017>2017</option>
            <option value=2018>2018</option>
            <option value=2019>2019</option>
            <option value=2020>2020</option>
            <option value=2021>2021</option>
            <option value=2022>2022</option>
            <option value=2023>2023</option>
            <option value=2024>2024</option>
            <option value=2025>2025</option>
            <option value=2026>2026</option>
            <option value=2027>2027</option>
            <option value=2028>2028</option>
            <option value=2029>2029</option>
            <option value=2030>2030</option>
        </select></form>
    </div>
</div>
<!--<button name="jump" onclick="jump()">Go</button>-->


  </section>





<div class="container wr">
      <div class="row w-row">
     <div class="col-md-6 col-xs-6 weather-container">
  
      <div class="row weather1">
      <div class="col-md-3 col-xs-3"><h6 class="str high">High 29'C</h6><br><h6 class="Low">Low29'C</h6></div>
      <div class="col-md-3 col-xs-3"><h6 class="str Wind">Wind3</h6><br><h6 class="mph">Mph 5</h6></div>
      <div class="col-md-3 col-xs-3"><h6 class="str Wind">Wind3</h6><br><h6 class="mph">Mph 5</h6></div>
     <div class="col-md-3  col-xs-3"><h6 class="str Wind">Wind3</h6><br><h6 class="mph">Mph 5</h6></div>
    
 </div>
     </div>

      <div class="col-md-6 col-xs-6">
             <div class="row">
           <div class="img1">
               <div class="col-md-6 col-xs-6"> <h6 class="high">High 29'C</h6><br><h6 class="Low">Low29'C</h6><span></div>
                <div class="col-md-6 col-xs-6"> <h6 class="high">High 29'C</h6><br><h6 class="Low">Low29'C</h6></span><br></div>
         </div>
           <div class="img2">
                  <div class="col-md-6 col-xs-6 "> <h6 class="high">High 29'C</h6><br><h6 class="Low">Low29'C</h6><span></div>
                      <div class="col-md-6 col-xs-6 "><h6 class="high">High 29'C</h6><br><h6 class="Low">Low29'C</h6></span></div>
         </div>
          </div>
             </div>   
      </div>
  
</div>

</div>
