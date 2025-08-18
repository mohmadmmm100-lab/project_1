<?php
$firstname = mysqli_real_escape_string($conn, $_POST['firstname'] ?? ''); 
$lastname = mysqli_real_escape_string($conn, $_POST['lastname'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$errors = [
    'firstname' => '', 
    'lastname' => '',
    'email' => ''
];
if (isset($_POST['submit'])) {

    if (empty($firstname)) {
        $errors['firstname'] = "الرجاء ادخال الاسم الأول";
    }
    if (empty($lastname)) {
        $errors['lastname'] = "الرجاء ادخال الاسم الأخير";
    }
    if (empty($email)) {
        $errors['email'] = "الرجاء ادخال البريد الإلكتروني";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "الرجاء ادخال ايميل صحيح";
    }

    // only insert if no errors
    if (!array_filter($errors)) {
        $input = "INSERT INTO users(firstname, lastname, email) 
                  VALUES ('$firstname','$lastname','$email')";
        if (mysqli_query($conn, $input)) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>