$(document).ready(function(){
 
   
    $('#msg-btn').click(function(){
        
        if($('#msg-Text').val()==="" ||$('#msg-phone').val()==="" ||$('#msg-subject').val()==="")
        {
     $('#msg-checksent').html("Input values cannot be empty");
     
 }    else{    
 $.post("Admin/InsertMessage",
              {
           p:$('#msg-phone').val(),
           s:$('#msg-subject').val(),
           t:$('#msg-Text').val(),
       },
              function(data){
     $('#msg-phone').val("");
           $('#msg-subject').val("");
           $('#msg-Text').val("");
           console.log(data);
     $('#msg-checksent').html(data);
     $('#msg-checksent').style.color(red);
     
       }
       
       )}
              });  
    
        
  });
//save farmers data
$(document).ready(function(){
 
   
    $('#signupbtn').click(function(){
        
        if($('#username').val()==="" ||$('#surname').val()==="" ||$('#loan').val()==="" ||$('#password').val()==="" ||$('#email').val()==="" ||$('#group').val()==="" ||$('#firstname').val()==="" ||$('#phone').val()==="")
        {
     $('#msg-notify').html("Input values cannot be empty");
     
 }    else{    
 $.post("Admin/InsertTable",
              {
        surname:$('#surname').val(),
           email:$('#email').val(),
           phone:$('#phone').val(),
     username:$('#username').val(),
     password:$('#password').val(),
     group:$('#group').val(),
     loan:$('#loan').val(),
     firstname:$('#firstname').val(),
       },
              function(data){
           console.log(data);
     $('#msg-notify').html(data);
     $('#msg-notify').style.color(red);
        $('#username').val("");
     $('#surname').val("");
     $('#phone').val("");
     $('#password').val("");
     $('#group').val("");
     $('#loan').val("");
    $('#firstname').val("");
       }
       
       )}
              });  
    
        
  });


$(document).ready(function(){
var weed='';
var fertilize='';
var water='';
var number=$('#phone-number').val();
var state= $('#schedule').find(":selected").text();

    
    

 $('#pending').click(function(){
   if($('#schedule').find(":selected").text()==="weed the farm"){
     weed='pending'; 
      $('#sweed').html(": "+weed); 
    } 
      if($('#schedule').find(":selected").text()==='fertilize the farm'){
         fertilize='pending';
          $('#sfertilize').html(": "+fertilize);
     }
     if($('#schedule').find(":selected").text()==='water the farm'){
         water='pending';
         $('#swater').html(": "+water);
     }
     
 });
$('#urgent').click(function(){
    if($('#schedule').find(":selected").text()==="weed the farm"){
     weed='urgent';
        $('#sweed').html(": "+weed);
    } 
     else if($('#schedule').find(":selected").text()==='fertilize the farm'){
         fertilize='urgent';
            
     $('#sfertilize').html(": "+fertilize);
     }
     else if($('#schedule').find(":selected").text()==='water the farm'){
         water='urgent';
         $('#swater').html(": "+water);
     }
     
    
  
 });
    $('#done').click(function(){
       
    if($('#schedule').find(":selected").text()==="weed the farm"){
     weed='done'; 
        $('#sweed').html(": "+weed);
    } 
     else if($('#schedule').find(":selected").text()==='fertilize the farm'){
         fertilize='done';
         $('#sfertilize').html(": "+fertilize);
     }
     else{
         water='done';
         $('#swater').html(": "+water);
     }
     
 });
    $('#refresh').click(function(){
      weed=""  
       fertilize="";
        water="";
        $('#phone-number').val("");
       $('#sucess').html('');
            $('#alert').html('');
        $('#swater').html(':not selected');
        $('#sweed').html(':not selected');
        $('#sfertilize').html(':not selected');
    })
    
    $('#update').click(function(){
    
         
       if(weed==="" || fertilize==="" || water==="" || $('#phone-number').val()==="") {
           $('#alert').html('all categories needs to be selected for a user including users mobile');
               
       }
        else{
            
            $.post("Admin/InsertSchedule",
              {
        scweed:weed,
           scwater:water,
           scfertilize:fertilize,
                phone:$('#phone-number').val(),
                
       },
              function(data){
                $('#sucess').html('UPDATED SUCCESFULLY!!');
            $('#alert').html('');
             console.log($('#schedule').find(":selected").text());
           console.log(data);
     
     
     
       }
       
       )
            
            }
        
    });
    $('#insert').click(function(){
    
         
       if(weed==="" || fertilize==="" || water==="" || $('#phone-number').val()==="") {
           $('#alert').html('all categories needs to be selected for a user including users mobile');
               
       }
        else{
            
            $.post("Admin/InsertnewSchedule",
              {
        scweed:weed,
           scwater:water,
           scfertilize:fertilize,
                phone:$('#phone-number').val(),
                
       },
              function(data){
                $('#sucess').html('UPDATED SUCCESFULLY!!');
            $('#alert').html('');
             console.log($('#schedule').find(":selected").text());
           console.log(data);
     
     
     
       }
       
       )
            
            }
        
    });
   
   
                     });
// update user tools
$(document).ready(function(){
 
   
    $('#set').click(function(){
        
        if($('#tractor').val()==="" ||$('#seed').val()==="" ||$('#labor').val()==="")
        {
            
     $('#msg-alert').html("Input values cannot be empty");
     
 }    else{    
 $.post("Admin/InsertTools",
              {
        tractor:$('#tractor').val(),
           seed:$('#seed').val(),
           labor:$('#labor').val(),
     
       },
              function(data){
   
           console.log(data);
     $('#msg-alert').html(data);
        $('#tractor').val("");
           $('#seed').val("");
           $('#labor').val("");
     
     
       }
       
       )}
              });  
    
      $('#changes').click(function(){
         if($('#inemail').val()==="" ||$('#infarm').val()==="" ||$('#inphone').val()==="")
        {
            
     $('#inmsg').html("Input values cannot be empty");
     
 }    else{    
 $.post("Updateprofile",
              {
        inemail:$('#inemail').val(),
           ingroup:$('#ingroup').val(),
           inphone:$('#inphone').val(),
     
       },
              function(data){
   
           console.log(data);
     $('#inmsg').html(data);
        $('#inemail').val("");
           $('#ingroup').val("");
           $('#inphone').val("");
     
     
       }
       
       )}  
          
      });  
  });

$(document).ready(function(){
  
    $('#delete-b').click(function(){
        
        if($('#phone-num').val()==="")
        {
            
     $('#delete-alert').html("Input values cannot be empty");
     
 }    else{  
    
 $.post("Admin/Delete",
              {
        phonenum:$('#phone-num').val(),
       },
              function(data){
   
           console.log(data);
     $('#delete-alert').html(data);
        
     
       }
       
       )}
              });  
    
        
  });
$(document).ready(function(){
   $('#addadmin').click(function(){
      document.getElementById('ad-register').classList.toggle('show');  
   }) ;
    
});
//admin login panel
$(document).ready(function(){
    $('#admin-sbmt').click(function(){
        if($('#admin-passsword').val()===""|| $('#admin-phone').val()===""){
            $('#admin-notify').html('Inputs cannot be empty');
        }
        else{
            $.post("Adminlogin/verify",
                 {adminpassword:$('#admin-password').val(),
                 adminphone:$('#admin-phone').val(),
                 },
                  function(data){
                $('#admin-notify').html('Success');
                location.href = 'Admin';
            }
                  )
        }
        
    });
});
//add admins password
$(document).ready(function(){
 
   
    $('#admin-add').click(function(){
        
        if($('#admin-surname').val()==="" || $('#admin-pass').val()==="" ||$('#admin-email').val()==="" ||$('#admin-firstname').val()==="" ||$('#admin-phone').val()==="")
        {
     $('#msg-notify').html("Input values cannot be empty");
     
 }    else{    
 $.post("Admin/InsertadminTable",
              {
        adsurname:$('#admin-surname').val(),
           ademail:$('#admin-email').val(),
           adphone:$('#admin-phone').val(),
     adusername:$('#admin-username').val(),
     adpassword:$('#admin-password').val(),
     
     adfirstname:$('#admin-firstname').val(),
       },
              function(data){
           console.log(data);
     
        $('#admin-username').val("");
     $('#admin-surname').val("");
     $('#admin-phone').val("");
     $('#admin-password').val("");
     
    $('#admin-firstname').val("");
       }
       
       )}
              });  
    
        
  });

 $(document).ready(function(){
   $('#notification-bell').click( function(){
      document.getElementById('notification-panel').classList.toggle('active'); 
   });  
 });
