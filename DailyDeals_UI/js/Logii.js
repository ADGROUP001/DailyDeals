
let Loginform = document.querySelector('.login-form')

document.querySelector('#login-btn').onclick = () =>{
    Loginform.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}
const fullNameInput = document.getElementById('full_name');

fullNameInput.addEventListener('keyup', () => {
  const username = fullNameInput.value;
  const isValidUsername = validateUsername(username);

  const errorElement = fullNameInput.nextElementSibling.nextElementSibling;
  if (isValidUsername) {
    errorElement.textContent = '';
  } else {
    errorElement.textContent = 'Username must be between 6 and 30 characters long and can only contain alphanumeric characters and underscores.';
  }
});

function validateUsername(username) {
  const regex = /^[a-zA-Z0-9_]{6,10}$/;
  return regex.test(username);
}
