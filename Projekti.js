function validateContactForm() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  if (name === '' || email === '' || message === '') {
      document.getElementById('contactResult').innerHTML = 'Please fill in all fields.';
  } else {
      // Perform further processing or submit the form
      document.getElementById('contactResult').innerHTML = 'Form submitted successfully!';
      // Reset form
      document.getElementById('contactForm').reset();
  }
}
function validateLogin() {
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var role = document.getElementById('role').value;

  // Example validation (replace this with your actual validation logic)
  if (username === 'admin' && password === 'admin' && role === 'admin') {
      // If admin logs in, perform admin actions
      document.getElementById('loginResult').innerText = 'Admin login successful!';
  } else if (username === 'user' && password === 'user' && role === 'user') {
      // If user logs in, perform user actions
      document.getElementById('loginResult').innerText = 'User login successful!';
  } else {
      // Invalid login
      document.getElementById('loginResult').innerText = 'Invalid login credentials!';
  }
}

function validateRegistration() {
  var email = document.getElementById('email').value;
  var regUsername = document.getElementById('regUsername').value;
  var regPassword = document.getElementById('regPassword').value;
  var confirmPassword = document.getElementById('confirmPassword').value;


  if (regPassword !== confirmPassword) {
      document.getElementById('registerResult').innerText = 'Passwords do not match!';
  } else {
      
      document.getElementById('registerResult').innerText = 'Registration successful!';
  }
}
document.addEventListener('DOMContentLoaded', function () {
  
  fetchSubmissions();


  window.logout = function () {
      window.location.href = 'logout.php';
  };
});

function fetchSubmissions() {
  
  fetch('fetch_submissions.php')
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              displaySubmissions(data.submissions);
          } else {
              console.error('Error fetching submissions:', data.message);
          }
      })
      .catch(error => console.error('Error fetching submissions:', error));
}

function displaySubmissions(submissions) {
  const submissionsList = document.getElementById('submissionsList');

  submissions.forEach(submission => {
      const listItem = document.createElement('li');
      listItem.textContent = `Name: ${submission.name}, Email: ${submission.email}, Message: ${submission.message}`;
      submissionsList.appendChild(listItem);
  });
}
var swiper = new Swiper(".swiper-conatiner", {
  slidesPerView: 1,
  spaceBetween: 30,
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

