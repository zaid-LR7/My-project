<?php

$errors = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'emailError' => ''
];

    $firstName = $lastName = $email = '';

if (isset($_POST['submit'])){
    
    $firstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $lastName =  mysqli_real_escape_string($conn, $_POST['LastName']);
    $email =     mysqli_real_escape_string($conn, $_POST['email']);

    if(empty($firstName)){
        $errors['FirstNameError'] = 'رجاء أدخل الإسم الأول.';
    }
    
    if(empty($lastName)){
        $errors['LastNameError'] = 'رجاء أدخل الإسم الأخير.';
    }
    
    if(empty($email)){
        $errors['emailError'] = 'رجاء أدخل البريد الإلكتروني.';
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'رجاء أدخل بريد إلكتروني صحيح.';
    }

    if(!array_filter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
        $lastName =  mysqli_real_escape_string($conn, $_POST['LastName']);
        $email =     mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "INSERT INTO users (FirstName, LastName, Email) VALUES ('$firstName', '$lastName', '$email')";
    
        if(mysqli_query($conn, $sql)){
        header("Location: " . $_SERVER['PHP_SELF']);
        }
        
        else{
            echo "Error : " . mysqli_error($conn);
        }
    }
}