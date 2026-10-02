<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $enteredOtp = $_POST['otp'];

    if (!isset($_SESSION['otp']) || !isset($_SESSION['email'])) {
        die("❌ OTP session expired. Please resend OTP.");
    }

    if ($email !== $_SESSION['email']) {
        die("❌ Email does not match OTP.");
    }

    if ($enteredOtp != $_SESSION['otp']) {
        die("❌ Invalid OTP.");
    }

    // ✅ OTP Verified - Continue registration (save to DB if needed)
    echo "<h2>✅ Signup Successful for $name ($email)</h2>";
    session_destroy();
} else {
    echo "❌ Invalid Request";
}
