<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = 'your@example.com';
    $subject = 'New Contact Form Submission';
    $messageBody = "Name: $name\nEmail: $email\nMessage: $message";

  
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    
    mail($to, $subject, $messageBody, $headers);

    
    echo json_encode(['success' => true, 'message' => 'Form submitted successfully!']);
    exit();
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

   
    if ($username === 'admin' && $password === 'admin' && $role === 'admin') {
    
        $_SESSION['user'] = ['username' => $username, 'role' => $role];

      
        echo json_encode(['success' => true, 'message' => 'Login successful!']);
        exit();
    } else {
        
        echo json_encode(['success' => false, 'message' => 'Invalid login credentials!']);
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $regUsername = $_POST['username'];
    $regPassword = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

   
    if ($regPassword !== $confirmPassword) {
      
        echo json_encode(['success' => false, 'message' => 'Passwords do not match!']);
        exit();
    }

    
    echo json_encode(['success' => true, 'message' => 'Registration successful!']);
    exit();
}


session_start();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    $stmt = $conn->query("SELECT * FROM contact_submissions");
    $submissions = $stmt->fetch_all(MYSQLI_ASSOC);

    echo json_encode(['success' => true, 'submissions' => $submissions]);
    exit();
} else {
    echo json_encode(['success' => false, 'message' => 'Unauthorized access']);
    exit();
}

?>
