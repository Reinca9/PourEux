app = {
  init: () => {
    console.log('je suis initialisé');
    app.emailElement = document.querySelector('#email');
    app.matchEmailElement = document.querySelector('#email2');
    app.errorElement = document.querySelector('#errorMailSpan');
    app.addListeners();
  },

  addListeners: () => {
    app.emailElement.addEventListener('change', app.validateEmail);
    app.matchEmailElement.addEventListener('change', app.validateEmail);
  },

  validateEmail: () => {
    if (app.emailElement.value !== app.matchEmailElement.value) {
      app.errorElement.textContent="Verifier votre email!";
    }
    else {
      app.errorElement.textContent="";
    }
  },
};

document.addEventListener('DOMContentLoaded',app.init);
