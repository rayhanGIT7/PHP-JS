function validatePhoneNumber(phoneNumber) {
  var phonePattern = /^\d{11}$/;
  return phonePattern.test(phoneNumber);
}
      
      function form_validation(){
        var password=document.getElementById('v_pass').value;
        console.log(password);
        var f_name=document.getElementById('v_fname').value;
        var l_name=document.getElementById('v_lname').value;
        var date=document.getElementById('v_date').value;
        var male = document.querySelector('#v_m_gender');
        var female = document.querySelector('#v_f_gender');
        var email=document.getElementById('v_email').value;
        var number =document.getElementById('v_number').value;
        var subject=document.getElementById('v_subject').value;
        

 


        if (f_name=='') {
           document.getElementById('err_fname').innerHTML ="Please enter your first name !";
           
      
        }else if(l_name==''){
            document.getElementById('err_lname').innerHTML ="Please enter your first name !";
           
        }else if(date==''){
              document.getElementById('err_date').innerHTML ="Please enter your Date Of brith !";
           
        }else if (!male.checked && !female.checked) {
   
              document.querySelector('#err_gender').innerHTML= 'Please select a gender';
    
           return false;
        }else if(email==''){
               document.getElementById('err_email').innerHTML ="Please enter your Email !";
           
        }else if (!validatePhoneNumber(number)) {
               document.getElementById('err_number').innerHTML ="Please Enter a valid Phone Number !";

        }else if(subject=='Choose option'){
                document.getElementById('err_subject').innerHTML ="Please Choose your Subject !";
           
                  
        }else if(password==''){
                document.getElementById('err_pass').innerHTML ="Please enter your Password !";          
        }else if (password.length < 8) {
              document.getElementById('err_pass').innerHTML = "Password must be at least 8 characters long!";
        } else if (!password.match(/[A-Z]/)) {
              document.getElementById('err_pass').innerHTML = "Password must contain at least one uppercase letter!";
 

        }else{
              return true;
        }

        
        return false;
    }


   
      
     function showpass()
    {
        var pass = document.getElementById('v_pass');
        if (pass.type=="password") {
          pass.type="text";
        } else{
          pass.type="password";
        }
        
        
    }
    
  //    else if (password.length < 8) {
  //   document.getElementById('err_pass').innerHTML = "Password must be at least 8 characters long!";
  // } else if (!password.match(/[A-Z]/)) {
  //   document.getElementById('err_pass').innerHTML = "Password must contain at least one uppercase letter!";
  // } else if (!password.match(/[a-z]/)) {
  //   document.getElementById('err_pass').innerHTML = "Password must contain at least one lowercase letter!";
  // } else if (!password.match(/\d/)) {
  //   document.getElementById('err_pass').innerHTML = "Password must contain at least one number!";
  // } else if (!password.match(/[^A-Za-z0-9]/)) {
  //   document.getElementById('err_pass').innerHTML = "Password must contain at least one special character!";
  // } else {
   // return true;
 // }

  