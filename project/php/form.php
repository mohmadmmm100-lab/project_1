<?php
$firstname = mysqli_real_escape_string($conn, $_POST['firstname'] ?? ''); 
$lastname = mysqli_real_escape_string($conn, $_POST['lastname'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$errors = [
    'firstname' => '', 
    'lastname' => '',
    'email' => ''
];
if(isset($_POST['submit'])) {
$input = " insert into users(firstname,lastname,email) values ('$firstname','$lastname','$email')";
if (empty($firstname)) {
    $errors['firstname'] = "الرجاء ادخال الاسم الأول";
} if (empty($lastname)) {
    $errors['lastname'] = "الرجاء ادخال الاسم الأخير";
} if (empty($email)) {
    $errors['email'] = "الرجاء ادخال البريد الإلكتروني";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "الرجاء ادخال ايميل صحيح";
} else {
if (mysqli_query($conn, $input)) {
   header("Location: " . $_SERVER['PHP_SELF']);
} else {
    echo 'Error: ' . mysqli_error($conn);
}}
}
?>