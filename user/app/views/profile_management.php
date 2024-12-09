<?php include APP_DIR . 'views/templates/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Management</title>
    <link rel="stylesheet" href="path_to_your_css.css">
</head>
<body>
    <div class="dashboard">
        <h1>Manage Your Profile</h1>
        <p>Update your personal information and account details.</p>
        <div class="profile-container">
            <form action="update_profile.php" method="POST" class="form-card">
                <div class="form-group">
                    <label for="full_name">👤 Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">📧 Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">🔒 Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="phone">📱 Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="address">🏠 Address</label>
                    <textarea id="address" name="address" placeholder="Enter your address"></textarea>
                </div>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #1e1e2f;
        color: #fff; /* White font color */
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dashboard {
        text-align: center;
        margin-bottom: 30px;
    }

    .dashboard h1 {
        font-size: 36px;
        margin-bottom: 10px;
        color: #fff; /* White font color */
    }

    .dashboard p {
        font-size: 16px;
        color: #fff; /* White font color */
    }

    .profile-container {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .form-card {
        background: linear-gradient(135deg, #2a5298, #1e9e9e); /* Teal and blue gradient */
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        padding: 20px 30px;
        width: 100%;
        max-width: 500px;
        transition: transform 0.4s, box-shadow 0.4s;
    }

    .form-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #fff; /* White font color */
    }

    input, textarea, button {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        border: none;
        box-sizing: border-box;
    }

    input, textarea {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff; /* White font color */
    }

    input:focus, textarea:focus {
        outline: none;
        background-color: rgba(255, 255, 255, 0.2);
    }

    textarea {
        resize: none;
        height: 80px;
    }

    button {
        background-color: #1e9e9e; /* Teal */
        color: #fff; /* White font color */
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2a5298; /* Blue */
    }
</style>
</html>
