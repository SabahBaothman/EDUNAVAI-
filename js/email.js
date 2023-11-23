const button = document.getElementById('sendMsssage');

button.addEventListener('click', (event) => {
  const emailInput = document.getElementById('mail');
  const characters = emailInput.value.split('');

  for (let i = 0; i < characters.length; i++) {
    const randomIndex = Math.floor(Math.random() * characters.length);
    const tempChar = characters[i];
    characters[i] = characters[randomIndex];
    characters[randomIndex] = tempChar;
  }


  const scrambledEmail = characters.join('');
  emailInput.value = scrambledEmail;

  alert("The email has been scrambled, the scrambled email is: "+emailInput.value); 
});
