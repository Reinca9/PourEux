app = {
  init: () => {
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
    const validEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(app.emailElement.value);
    if (!validEmail) {
      app.errorElement.textContent = "Ceci n'est pas un format d'email valide \n\r";
      return;
    }
    if (app.emailElement.value !== app.matchEmailElement.value) {
      app.errorElement.textContent = "Les deux emails ne correspondent pas";
    }
    else {
      app.errorElement.textContent="";
    }
  },
};

document.addEventListener('DOMContentLoaded',app.init);
