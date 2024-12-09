<?php
include APP_DIR.'views/templates/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamified Dashboard</title>
    <link rel="stylesheet" href="path_to_your_css.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="card">
            <div class="icon">🏆</div>
            <h3>Exam Dashboard</h3>
            <button onclick="window.location.href='exam_dashboard'">Go to Dashboard</button>
        </div>
        <div class="card">
            <div class="icon">🎯</div>
            <h3>Take Exam</h3>
            <button onclick="window.location.href='take_exam'">Start Exam</button>
        </div>
        <div class="card">
            <div class="icon">📜</div>
            <h3>Exam History & Results</h3>
            <button onclick="window.location.href='exam_history'">View History</button>
        </div>
        <div class="card">
            <div class="icon">👤</div>
            <h3>Profile Management</h3>
            <button onclick="window.location.href='profile_management'">Manage Profile</button>
        </div>
    </div>
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #1e1e2f;
        color: #fff;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }

    .dashboard-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        width: 90%;
        max-width: 1200px;
    }

    .card {
        background: linear-gradient(135deg, #6e45e1, #89d4cf);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        padding: 20px;
        text-align: center;
        transition: transform 0.4s, box-shadow 0.4s;
        position: relative;
    }

    .card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        transform: scale(0);
        transition: transform 0.4s ease-in-out;
    }

    .card:hover::before {
        transform: scale(1.5);
    }

    .icon {
        font-size: 50px;
        margin-bottom: 15px;
        color: #fff;
    }

    h3 {
        margin: 10px 0;
        font-size: 20px;
        color: #fff;
    }

    button {
        background: #ff5722;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px 24px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.4s;
    }

    button:hover {
        background: #ff784e;
        transform: scale(1.1);
    }
</style>
</html>
