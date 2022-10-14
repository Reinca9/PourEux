
function validEmail() {
  const email = document.querySelector('#email').value;
  const email2 = document.querySelector('#email2').value;
  const error = document.querySelector('#errorMailSpan');

  if (email !== email2) {
    error.textContent="Verifier votre email!";
  }
  else {
    error.textContent="";
  }
}