# PHP OTP Email Verification System 🔐

A simple OTP (One-Time Password) email verification system built with PHP and PHPMailer. Users enter their email, receive a 6-digit OTP code via Gmail SMTP, and verify it to complete signup.

## ✨ Features
- **6-digit OTP Generation** using PHP's `rand()` function
- **Gmail SMTP Integration** via PHPMailer for reliable email delivery
- **Session-based OTP Storage** — no database required
- **OTP Verification** with email matching and session expiry check
- **Clean UI** with animations (handshake GIFs)

## 🛠️ Requirements
- PHP 7.4+
- Composer (for PHPMailer)
- A Gmail account with an [App Password](https://myaccount.google.com/apppasswords)

## 🚀 Setup
1. Install dependencies:
```bash
composer install
```

2. Edit `send_otp.php` and replace the placeholder credentials with your Gmail and App Password:
```php
$mail->Username = 'your-email@gmail.com';
$mail->Password = 'your-gmail-app-password';
```

3. Run with XAMPP or any PHP server and open `indexOtp.html` in your browser.

## 📂 Files
- `indexOtp.html` — OTP input form UI
- `indexx.html` — Signup form UI
- `send_otp.php` — Sends OTP email via Gmail SMTP
- `verify_signup.php` — Verifies the OTP and completes registration
- `style.css` — Styling
