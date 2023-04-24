const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

/************************************************************** */
function verif_input (input)
{
	if (input.value.length < 2){  return 1;}
	else {return 0 ;}
 }

  function verif_input_mail (input)
  {
	  if (input.value.length < 2){  return 1;}
	  else {return 0 ;}
   }
   function validateEmail(emailId)
   {
   var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(emailId.value.match(mailformat))
   {
 
   return 0;
   }
   else
   {
   
   return 1;
   }
   }    
   function verif_Pass (input)
   {
	   if (input.value.length < 8){  return 1;}
	   else {return 0 ;}
	}
	function verif_CPass (pass1 , pass2 )
   {
	   if (pass1.value != pass2.value){  return 1;}
	   else {return 0 ;}
	}

   function verifyDateOfBirth(DateInput) {
	var dateOfBirth = DateInput.value;
	var dob = new Date(dateOfBirth);
	var today = new Date();
	var age = today.getFullYear() - dob.getFullYear();
	if (today.getMonth() < dob.getMonth() || (today.getMonth() == dob.getMonth() && today.getDate() < dob.getDate())) {
	  age--; // Subtract 1 from age if birthday hasn't occurred yet this year
	}
	if (age < 18) {
	  
	  return 1;
	}
	return 0;
   }
	/**************************************************************************************** */
  

 const NomInput = document.getElementById('nom');
const PrenomInput = document.getElementById('prenom');
const EmailInput = document.getElementById('email');
const DateInput = document.getElementById('date');
const PassInput = document.getElementById('pass');
const CPassInput = document.getElementById('cpass');

NomInput.addEventListener("input", function () {
	 
	const test = verif_input(NomInput);
	
	if (test) {
	NomInput.classList.add("invalid");
  } else {

    NomInput.classList.remove("invalid");
  }
});

/***verif prenom */
					 
PrenomInput.addEventListener('input', function() {
	const test = verif_input(PrenomInput);
	
	if (test) {
		PrenomInput.classList.add("invalid");
  } else {

    PrenomInput.classList.remove("invalid");
  }
  });
  /********************************* */

  /***verif email */
  EmailInput.addEventListener('input', function() {
	const test = validateEmail(EmailInput);
	
	if (test) {

		EmailInput.classList.add("invalid");
  } else {

    EmailInput.classList.remove("invalid");
  }
  });
  /******************************************** */
  /***verif date */
  DateInput.addEventListener('input', function() {
	const test = verifyDateOfBirth(DateInput);
	
	if (test) {

		DateInput.classList.add("invalid");
  } else {

    DateInput.classList.remove("invalid");
  }
  });
  /******************************************** */
    /***verif pass */
	PassInput.addEventListener('input', function() {
		const test = verif_Pass(PassInput);
		
		if (test) {
	
			PassInput.classList.add("invalid");
	  } else {
	
		PassInput.classList.remove("invalid");
	  }
	  });
	  /******************************************** */

	  /***verif cpass */
	  CPassInput.addEventListener('input', function() {
		const test = verif_CPass(PassInput,CPassInput);
		
		if (test) {
	
			CPassInput.classList.add("invalid");
	  } else {
	
		CPassInput.classList.remove("invalid");
	  }
	  });
	  /******************************************** */
	  function valid()
	  {
		if (!(verif_CPass(PassInput,CPassInput)) && !(verif_Pass(PassInput)) && !(verifyDateOfBirth(DateInput)) && !(validateEmail(EmailInput)) && !(verif_input(NomInput) ) && !(verif_input(PrenomInput) ) )
		{
			alert("welcom") ; 
			return 1 ;
		}
		else
		{
			alert("i lya un champ ou des champs non valide") ; 
			return 0 ; 
		}
	  }
	  const button = document.querySelector('#singup');

	  button.addEventListener('click', function(event) {
		// Call the JS function and store the result in a variable
		const result = valid();
	  
		// If the function returns false, prevent the default button behavior and stay on the same page
		if (!result) {
		  event.preventDefault();
		}
	  });

 