const button = document.getElementById('sendMsssage');

button.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent the default form submission
  const emailInput = document.getElementById('mail').value;

  if (!verifyEmail(emailInput)) {
    alert("Use a valid email syntax such as mail@provider.com");
  } else {
    submitForm();
    
  }
});

async function submitForm() {
  const form = document.getElementById('contact_form');
  const formData = new FormData(form);

  fetch('../db/email.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Assuming the response is in JSON format
  })
  .then(data => {
    console.log(data.message); // Handle the response from the server
    alert(data.message); // Show an alert with the message
    window.open("../pages/Contact.php", "_self"); // Redirect to another page
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });
  

}

function verifyEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}


