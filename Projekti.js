const users = [];

document.getElementById('login-btn').addEventListener('click', toggleLoginForm);
document.getElementById('signup-btn').addEventListener('click', toggleSignupForm);

function toggleLoginForm() {
    console.log('toggleLoginForm executed');
    const loginFormContainer = document.getElementById('login-form-container');
    const signupFormContainer = document.getElementById('signup-form-container');

    loginFormContainer.style.display = 'block';
    signupFormContainer.style.display = 'none';
}

function toggleSignupForm() {
    console.log('toggleSignupForm executed');
    const loginFormContainer = document.getElementById('login-form-container');
    const signupFormContainer = document.getElementById('signup-form-container');

    loginFormContainer.style.display = 'none';
    signupFormContainer.style.display = 'block';
}
function login() {
    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    // Check if the user exists
    const user = users.find(u => u.username === username && u.password === password);

    if (user) {
        alert('Login successful');
    } else {
        alert('Invalid username or password');
    }
}

function signup() {
    const username = document.getElementById('signup-username').value;
    const password = document.getElementById('signup-password').value;

    // Check if the username is already taken
    const existingUser = users.find(u => u.username === username);

    if (existingUser) {
        alert('Username already taken. Please choose another.');
    } else {
        // Add the new user to the database
        users.push({ username, password });
        alert('Signup successful. You can now login.');
    }
}