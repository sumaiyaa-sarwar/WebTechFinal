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
			if (document.getElementById("birthday").value == "") {
			  	document.getElementById("birthdayErr").innerHTML = "Date of birth can't be blank";
			  	document.getElementById("birthdayErr").style.color = "red";
			  	 
			}else{
			  	document.getElementById("birthdayErr").innerHTML = "";
				 
			}
			
        }