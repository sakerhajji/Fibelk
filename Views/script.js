const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})
/********************Show functions*/
let cinema = 0 , sport = 0 , theatre = 0 , music = 0 , livre = 0 , FormConcer =  0 ; 
function showDivCenima() {
	cinema ++ ; 

	var divToShow = document.getElementById("cinma_event");
	if(cinema % 2!=0) 
	divToShow.style.display = "grid";
	else
	divToShow.style.display = "none"; 

  }
  function showDivSport() {
	sport ++ ; 
	var divToShow = document.getElementById("sport_event");
	if(sport % 2 != 0)
	divToShow.style.display = "grid";
	else 
	divToShow.style.display = "none";

  }
  function showDivTheatre() {
	theatre ++ ; 
	var divToShow = document.getElementById("theatre_event");
	if(theatre %2 != 0 ) 
	divToShow.style.display = "grid";
	else
	divToShow.style.display = "none";
  }
  function showDivMusic() {
	music ++ ; 
	var divToShow = document.getElementById("music_event");
	if(music %2 != 0 )
	divToShow.style.display = "grid";
	else
	divToShow.style.display = "none";
  }
  function showDivBook() {
	livre++ ; 
	var divToShow = document.getElementById("livre_event");
	if(livre % 2 != 0 )
	divToShow.style.display = "grid";
	else
	divToShow.style.display = "none";
  }
  function showFormConcer()
  {
	FormConcer  ++ ; 
	var divToShow = document.getElementById("concert");
	if(FormConcer % 2 != 0 )
	divToShow.style.display = "grid";
	else
	divToShow.style.display = "none";
  }

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
					  
				const NomInput = document.getElementById('nom');
				const PrenomInput = document.getElementById('prenom');
				const EmailInput = document.getElementById('email');
				const DateInput = document.getElementById('date');
				const PassInput = document.getElementById('pass');
				const underline = document.querySelectorAll('.underline');
				
				/***verif nom */
					 
					 NomInput.addEventListener('input', function() {
			  const isInputValid = verif_input(NomInput);
			
			  if (isInputValid) {
				underline[1].classList.add('error');
			  } else {
				underline[1].classList.remove('error');
			  }
			});
			/********************************* */
			/***verif prenom */
					 
			PrenomInput.addEventListener('input', function() {
				const isInputValid = verif_input(PrenomInput);
			  
				if (isInputValid) {
				  underline[2].classList.add('error');
				} else {
				  underline[2].classList.remove('error');
				}
			  });
			  /********************************* */

			  /***verif email */
					 
			  EmailInput.addEventListener('input', function() {
				const isInputValid = validateEmail(EmailInput);
			  
				if (isInputValid) {
				  underline[3].classList.add('error');
				} else {
				  underline[3].classList.remove('error');
				}
			  });
			  /********************************* */
			   /***verif date */
					 
			   DateInput.addEventListener('input', function() {
				const isInputValid = verifyDateOfBirth(DateInput);
			  
				if (isInputValid) {
				  underline[4].classList.add('error');
				} else {
				  underline[4].classList.remove('error');
				}
			  });
			  /********************************* */
			     /***verif date */
					 
				 PassInput.addEventListener('input', function() {
					const isInputValid = verif_Pass(PassInput);
				  
					if (isInputValid) {
					  underline[5].classList.add('error');
					} else {
					  underline[5].classList.remove('error');
					}
				  });
				  /********************************* */