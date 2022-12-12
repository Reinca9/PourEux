
const email = document.querySelector('#email');
const email2 = document.querySelector('#email2');
const error = document.querySelector('#errorMailSpan');

email.addEventListener('change',emailValide);
email2.addEventListener('change',emailValide);

function emailValide() {
  if (email.value !== email2.value) {
    error.textContent="Verifier votre email!";
  }
  else {
    error.textContent=null;
  }
}