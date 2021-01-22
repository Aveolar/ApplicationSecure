var today= new Date();
var currentMonth=today.getMonth();
var currentYear=today.getFullYear();
var months=["jan","feb","mar","APRIL","may","june","july","aug","sept","oct","nov","dec"];
var monthandYear=document.getElementById("month-year");

showCalendar(currentYear,currentMonth);
function showCalendar(year,month){
    var firstDay=new Date(year,month).getDay();
    var DaysinMonth=32-new Date(year,month,32).getDate();
    var tbl=document.getElementById("calender-body");
    //initialising the date and month

    monthandYear.innerHTML=months[month]+"  "+ year;
    
    var date=1;
    for(var i=0;i<6;i++){
       var row=document.createElement("tr") ;
       for(var j=0;j<7;j++){
           if(i===0 & j<firstDay){
               var cell=document.createElement("td");
            var cellText=document.createTextNode(""); 
            cell.appendChild(cellText);
            row.appendChild(cell);
           }
            else if(date>DaysinMonth){
              break; 
            }
             else{
                 cell=document.createElement('td');
                 cellText=document.createTextNode(date);
                cell.appendChild(cellText);
                row.appendChild(cell);
             }
             date++;
            
         }
          tbl.appendChild(row);
    }
}

function toggleSidebar(){
document.getElementById("side-nav").classList.toggle('active');
document.getElementById("main").classList.toggle('active');
document.getElementById("span").classList.toggle('active');
}


var xhttp=new xhttpRequest();