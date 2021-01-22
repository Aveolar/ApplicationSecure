$(document).ready(function(){
 
   
    $('#sbm-btn').click(function(){
        
        if($('#description').val()==="" ||$('#quantity').val()==="" ||$('#amount').val()==="")
        {
     $('#input-message').html("input values cannot be empty");
     
 }    else{    
 $.post("InsertHistory",
              {
           d:$('#description').val(),
           q:$('#quantity').val(),
           a:$('#amount').val(),
       },
              function(data){
           console.log(data);
            $('#input-message').html(data);
       }
       
       )}
              });  
    
        
  });

                    




let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

let monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {

    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // clearing all previous cells
    tbl.innerHTML = "";

    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;
    selectYear.value = year;
    selectMonth.value = month;

    // creating all cells
    let date = 1;
    for (let i = 0; i <6; i++) {
        // creates a table row
        let row = document.createElement("tr");

        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            else if (date > daysInMonth) {
                break;
            }

            else {
                let cell = document.createElement("td");
                let cellText = document.createTextNode(date+"  ");
               
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.classList.add("bg-info");
                } // color today's date
                cell.appendChild(cellText);
                row.appendChild(cell);
                date++;
            }


        }

        tbl.appendChild(row); // appending each row into calendar body.
    }

}
 function editable(){
     var x=document.getElementById("st-input1").readOnly=true;;
    var y=document.getElementById("st-input2").readOnly=true;; 
    var z=document.getElementById("st-input3").readOnly=true;;
 }

function dropdown(){
   document.getElementById("toggle-panel").classList.toggle('active');
    
if ( document.getElementById("view").classList.contains('active') ){document.getElementById("view").classList.remove("active")
                                                                         }
if ( document.getElementById("message").classList.contains('active') ){document.getElementById("message").classList.remove("active")
                                                                         }


    
}
function slideleft(){
    document.getElementById("toggle-panel").classList.toggle("left");
    document.getElementById("message").classList.toggle("active");
       
if ( document.getElementById("view").classList.contains('active') ){document.getElementById("view").classList.remove("active")
                                                                         }
if ( document.getElementById("toggle-panel").classList.contains('active') ){document.getElementById("toggle-panel").classList.remove("active")
                                                                         }
    
}

function toggleSidebar(){
document.getElementById("side-nav").classList.toggle('active');
document.getElementById("main").classList.toggle('active');
document.getElementById("span").classList.toggle('active');
    
}
function viewTable(){
document.getElementById("view").classList.toggle('active');
       
if ( document.getElementById("message").classList.contains('active') ){document.getElementById("message").classList.remove("active")
                                                                         }
if ( document.getElementById("toggle-panel").classList.contains('active') ){document.getElementById("toggle-panel").classList.remove("active")
                                                                         }
    
}
function toggleobjective(){
  document.getElementById("objective").classList.toggle('active');
       
if ( document.getElementById("message").classList.contains('active') ){document.getElementById("message").classList.remove("active")
                                                                         }
if ( document.getElementById("toggle-panel").classList.contains('active') ){document.getElementById("toggle-panel").classList.remove("active")
                                                                         }
    if ( document.getElementById("delete").classList.contains('active') ){document.getElementById("delete").classList.remove("active")
                                                                         }
    if ( document.getElementById("pricetag").classList.contains('active') ){document.getElementById("pricetag").classList.remove("active")
                                                                         }
    if ( document.getElementById("view").classList.contains('active') ){document.getElementById("view").classList.remove("active")
                                                                         }
      
}
function toggledelete(){
  document.getElementById("delete").classList.toggle('active');
       
if ( document.getElementById("message").classList.contains('active') ){document.getElementById("message").classList.remove("active")
                                                                         }
if ( document.getElementById("toggle-panel").classList.contains('active') ){document.getElementById("toggle-panel").classList.remove("active")
                                                                         }
    if ( document.getElementById("objective").classList.contains('active') ){document.getElementById("objective").classList.remove("active")
                                                                         }
    if ( document.getElementById("pricetag").classList.contains('active') ){document.getElementById("pricetag").classList.remove("active")
                                                                         }
    if ( document.getElementById("view").classList.contains('active') ){document.getElementById("view").classList.remove("active")
                                                                         }
      
}
function toggleprice(){
  document.getElementById("pricetag").classList.toggle('active');
       
if ( document.getElementById("message").classList.contains('active') ){document.getElementById("message").classList.remove("active")
                                                                         }
if ( document.getElementById("toggle-panel").classList.contains('active') ){document.getElementById("toggle-panel").classList.remove("active")
                                                                         }
    if ( document.getElementById("objective").classList.contains('active') ){document.getElementById("objective").classList.remove("active")
                                                                         }
    if ( document.getElementById("delete").classList.contains('active') ){document.getElementById("delete").classList.remove("active")
                                                                         }
    if ( document.getElementById("view").classList.contains('active') ){document.getElementById("view").classList.remove("active")
                                                                         }
      
}
 
$(document).ready(function(){
    
      $('#weather-p').load('load',function(){
          
          $.ajax({
             url:'https://api.openweathermap.org/data/2.5/weather?q=ibadan' + "&units=metric"+"&APPID=3b9fbf22b7d6bc1a56c78101142d4a48",
             type:"GET",
             dataType:"jsonp",
                     success:function(data){
                console.log(data);
                         console.log(data['weather']);
                          $('#weather-text').html(data['main'].temp);
                         $('#weather-name').html(data.name);
                         $('#description').html(data['weather'][0].description);
                             
                          
                    }
        });
         var d=new Date();
          var weekday=new Array(7);
          weekday[0]="Sunday";
            weekday[1]="Monday";
          weekday[2]="Tuesday";
            weekday[3]="Wednesday";
            weekday[4]="Thursday";
            weekday[5]="Friday";
            weekday[6]="Saturday";
          var n=weekday[d.getDay()];
          
     $('#day').html(n); 
          
          var d=new Date();
          d.getHours();
          d.getMinutes();
          d.getSeconds();
          $('#time').html(d); 
    } )
    
 });


function toggleinput(){
document.getElementById("input-dash").classList.toggle('active');
       
if ( document.getElementById("farm-dash").classList.contains('active') ){document.getElementById("farm-dash").classList.remove("active")
                                                                         }
if ( document.getElementById("labour-dash").classList.contains('active') ){document.getElementById("labour-dash").classList.remove("active")
                                                                         }
    document.getElementById("customLr").classList.toggle('active');
       
if ( document.getElementById("custom-Lrf").classList.contains('active') ){document.getElementById("custom-Lrf").classList.remove("active")
                                                                         }
if ( document.getElementById("custom-Lrl").classList.contains('active') ){document.getElementById("custom-Lrl").classList.remove("active")
                                                                         }
    
    
    
}
function togglenotification(){
  document.getElementById('notification-panel').classList.toggle('active');   
}
function togglefarm(){
document.getElementById("farm-dash").classList.toggle('active');
       
if ( document.getElementById("input-dash").classList.contains('active') ){document.getElementById("input-dash").classList.remove("active")
                                                                         }
if ( document.getElementById("labour-dash").classList.contains('active') ){document.getElementById("labour-dash").classList.remove("active")
                                                                         }
     document.getElementById("customLrf").classList.toggle('active');
       
if ( document.getElementById("custom-Lr").classList.contains('active') ){document.getElementById("custom-Lr").classList.remove("active")
                                                                         }
if ( document.getElementById("custom-Lrl").classList.contains('active') ){document.getElementById("custom-Lrl").classList.remove("active")
                                                                         }
    
    
}
function togglelabour(){
document.getElementById("labour-dash").classList.toggle('active');
       
if (document.getElementById("farm-dash").classList.contains('active') ){document.getElementById("farm-dash").classList.remove("active")
                                                                         }
if ( document.getElementById("input-dash").classList.contains('active') ){document.getElementById("input-dash").classList.remove("active")
                                                                         }
     document.getElementById("customLrl").classList.toggle('active');
       
if ( document.getElementById("custom-Lr").classList.contains('active') ){document.getElementById("custom-Lr").classList.remove("active")
                                                                         }
if ( document.getElementById("custom-Lrf").classList.contains('active') ){document.getElementById("custom-Lrf").classList.remove("active")
                                                                         }
    
    
}

function togglecost(){

   document.getElementById('transaction-details').classList.toggle('show');  
}
function togglehistory(){

   document.getElementById('history-panel').classList.toggle('show');  
}






