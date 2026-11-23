import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.getElementById('contactForm');
  const formAlert = document.getElementById('formAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      formAlert.classList.remove('d-none');

      contactForm.reset();

      setTimeout(() => {
        formAlert.classList.add('d-none');
      }, 4000);
    });
  }
});
