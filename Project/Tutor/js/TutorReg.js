function validateform(){}  
    function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else{
          document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";
      }
      
        }
        //email check
        function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }else{
          document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "black";
      }
      
        }

        //check pass
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<6){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }
        //confirm pass
        function confirmPass(){
          if (document.getElementById("confirm_password").value == "") {
          document.getElementById("confirmPassErr").innerHTML = "Password can't be blank";
          document.getElementById("confirmPassErr").style.color = "red";
          document.getElementById("confirm_password").style.borderColor = "red";
      }else if(document.getElementById("confirm_password").value.length<6){
          document.getElementById("confirm_password").style.borderColor = "red";
          document.getElementById("confirmPassErr").style.color = "red";
        document.getElementById("confirmPassErr").innerHTML = "Password must be at least 6 characters long.";
      }
      else{
        document.getElementById("confirmPassErr").innerHTML = "";
          document.getElementById("confirmPassErr").style.color = "red";
        document.getElementById("confirm_password").style.borderColor = "black";
      }
        }
        //gender
         
        function checkgender() {
      if (document.getElementById("gender").value == "") {
          document.getElementById("genderErr").innerHTML = "gender can't be blank";
          document.getElementById("genderErr").style.color = "red";
           
      }else{
          document.getElementById("genderErr").innerHTML = "";
      }
      
        }

        //dob
         
        function checkDOB() {
      if (document.getElementById("dob").value == "") {
          document.getElementById("dobErr").innerHTML = "Date of birth can't be blank";
          document.getElementById("dobErr").style.color = "red";
           
      }else{
          document.getElementById("dobErr").innerHTML = "";
         
      }
      
        }