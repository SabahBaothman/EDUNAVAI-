document.addEventListener('DOMContentLoaded', function () {
    // Add an event listener to the form on submit
    document.getElementById('form').addEventListener('submit', function (event) {
        // Check validation before submitting the form
        if (!validateForm()) {
            // Prevent the form submission if there are validation errors
            event.preventDefault();
        }
    });

    // Function to validate the form and display error messages
    function validateForm() {


        // Get the values of the first, last name, email, phone, address, comments, and course interest inputs
        var firstName = document.getElementById('firstName').value.trim();
        var lastName = document.getElementById('lastName').value.trim();
        var email = document.getElementById('email').value.trim();
        var age = document.getElementById('age').value.trim();
        var phoneNumber = document.getElementById('phoneNumber').value.trim();
        var address = document.getElementById('address').value.trim();
        var city = document.getElementById('city').value.trim();
        var country = document.getElementById('country').value.trim();
        var comments = document.getElementById('comments').value.trim();
        var courseInterest = document.getElementById('courseInterest').value;
        var subscribe = document.getElementById('subscribe').checked;
        var promotionalEmails = document.getElementById('promotional-emails').checked;
        var productUpdates = document.getElementById('product-updates').checked;
        // Get the .label2 element
        var label2 = document.querySelector('.label2');
        var satisfactionLevel = document.querySelector('input[name="satisfaction"]:checked');


        // Get the error elements
        var firstNameError = document.querySelector('#firstName + .error');
        var lastNameError = document.querySelector('#lastName + .error');
        var emailError = document.querySelector('#email + .error');
        var ageError = document.querySelector('#age + .error');
        var phoneNumberError = document.querySelector('#phoneNumber + .error');
        var addressError = document.querySelector('#address + .error');
        var cityError = document.querySelector('#city + .error'); // new field
        var countryError = document.querySelector('#country + .error');
        var commentsError = document.querySelector('#comments + .error');
        var courseInterestError = document.querySelector('#courseInterest + .error');
        var subscriptionOptionsError = document.getElementById('subscriptionOptionsError');
        var satisfactionLevelError = document.getElementById('satisfactionLevelError');




        // Reset previous error messages
        firstNameError.textContent = '';
        lastNameError.textContent = '';
        emailError.textContent = '';
        ageError.textContent = '';
        phoneNumberError.textContent = '';
        addressError.textContent = '';
        cityError.textContent = '';
        countryError.textContent = '';
        commentsError.textContent = '';
        courseInterestError.textContent = '';
        subscriptionOptionsError.textContent = '';
        satisfactionLevelError.textContent = '';


        console.log('Validating form...');

        // Flag to track if there are any validation errors
        var hasErrors = false;

        // Check if first name is empty or doesn't start with a capital letter
        if (firstName === '') {
            console.log('First name is empty.');
            firstNameError.textContent = 'First name cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        } else if (!isFirstLetterCapital(firstName)) {
            console.log('First name does not start with a capital letter.');
            firstNameError.textContent = 'First name must start with a capital letter';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if last name is empty or doesn't start with a capital letter
        if (lastName === '') {
            console.log('Last name is empty.');
            lastNameError.textContent = 'Last name cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        } else if (!isFirstLetterCapital(lastName)) {
            console.log('Last name does not start with a capital letter.');
            lastNameError.textContent = 'Last name must start with a capital letter';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if email is empty or not in a valid format
        if (email === '') {
            console.log('Email is empty.');
            emailError.textContent = 'Email cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        } else if (!isValidEmail(email)) {
            console.log('Email is not in a valid format.');
            emailError.textContent = 'Enter a valid email address';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if phone number is empty or doesn't start with 5 and has 10 digits
        if (phoneNumber === '') {
            console.log('Phone number is empty.');
            phoneNumberError.textContent = 'Phone number cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        } else if (!isValidPhoneNumber(phoneNumber)) {
            console.log('Phone number is not valid.');
            phoneNumberError.textContent = 'Enter a valid phone number starting with 5 and having 10 digits';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if address is empty
        if (address === '') {
            console.log('Address is empty.');
            addressError.textContent = 'Address cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        }

        if (city === '') {
            console.log('City is empty.');
            cityError.textContent = 'City cannot be empty';
            hasErrors = true; 
        }
        
        // Check if country is empty
        if (country === '') {
            console.log('Country is empty.');
            countryError.textContent = 'Country cannot be empty';
            hasErrors = true; 
        }

        // Check if comments is empty
        if (comments === '') {
            console.log('Comments are empty.');
            commentsError.textContent = 'Comments cannot be empty';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if course interest is not selected
        if (courseInterest === 'select') {
            console.log('Course interest is not selected.');
            courseInterestError.textContent = 'Select your primary interest';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if age is a number
        if (isNaN(parseInt(age, 10))) {
            console.log('Age is not a valid number.');
            ageError.textContent = 'Enter a valid age';
            hasErrors = true; // Set flag to indicate validation error
        }


        // Check if at least one subscription option is selected
        if (!subscribe && !promotionalEmails && !productUpdates) {
            console.log('No subscription option is selected.');
            subscriptionOptionsError.innerHTML = 'Select at least one subscription option';
            hasErrors = true; // Set flag to indicate validation error
        }

        // Check if satisfaction level is not selected
        if (!satisfactionLevel) {
            console.log('Satisfaction level is not selected.');
            satisfactionLevelError.innerHTML = 'Select your satisfaction level';
            hasErrors = true; // Set flag to indicate validation error
        }



        // If any validation errors occurred, return false
        if (hasErrors) {
            console.log('Form has validation errors.');
            return false;
        }

        // If all validations pass, return true
        console.log('Form is valid.');
        return true;
    }

    // Function to check if the first letter is capital
    function isFirstLetterCapital(name) {
        return /^[A-Z]/.test(name);
    }

    // Function to check if the email is in a valid format
    function isValidEmail(email) {
        // You can use a simple regex for basic email validation
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // Function to check if the phone number is in a valid format
    function isValidPhoneNumber(phoneNumber) {
        // You can use a simple regex for basic phone number validation
        return /^5\d{9}$/.test(phoneNumber);
    }
});
