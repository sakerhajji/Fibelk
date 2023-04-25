


function CinemanameValidation() {

   // let lNameInput = document.getElementById("Nomcine");
    var lNameInput = document.getElementsByName("NomCin")[0].value;
    e1 = document.getElementById("erreur1");
    //var letters = /^[A-Za-z]+$/;

    if (lNameInput.length < 3) {

        e1.style.color="red";

        //lNameError = " Le nom doit compter au minimum 3 caractères.";
        //document.getElementById("nomEr").innerHTML = lNameError;

        //return false;
    }
    //if (!lNameInput.value.match(letters)) {
      //  lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        //lNameValid2 = false;
        //document.getElementById("nomEr").innerHTML = lNameError2;
        //return false;
    //}
    else {
    //document.getElementById("nomEr").innerHTML =
        //"<p style='color:green'> Correct </p>";

    //return true; 
    e1.style.color="green";

}
}

function OkNomCinema()
{
    const input = document.querySelector('input');

    input.onkeyup = function() {
      const word = this.value ;
      if (word.length < 3) {
        this.classList.remove('green');
        this.classList.add('red');
      } else {
        this.classList.remove('red');
        this.classList.add('green');
      }
    }

}





