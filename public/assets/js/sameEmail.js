
function sameEmail(email,email2) {
  if (email != email2) {
    var error = document.querySelector('#errorMailSpan');
    error.innerHTML="<p id='verifMail'>Verifier votre email!</p>";
  }
  else {
    return;
  }
}

function validEmail() {
  const email = document.querySelector('#email').value;
  const email2 = document.querySelector('#email2').value;

  sameEmail(email, email2);
console.log('#email#');
}