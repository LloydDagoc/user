<?php include APP_DIR . 'views/templates/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Results</title>
    <link rel="stylesheet" href="path_to_your_css.css">
</head>
<body>
    <div class="dashboard">
        <h1>Your Exam Results</h1>
        <p>View detailed history and review your answers!</p>
        <div class="dashboard-container">

            <!-- Exam History Section -->
            <div class="card">
                <h3>📜 Exam History</h3>
                <div class="content">
                    <?php if (!empty($examHistory)) { ?>
                        <ul>
                            <?php foreach ($examHistory as $exam) { ?>
                                <li>
                                    <strong><?php echo $exam['exam_title']; ?></strong>
                                    <p>Date Taken: <?php echo $exam['date_taken']; ?></p>
                                    <p>Score: <?php echo $exam['score']; ?>%</p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p>No exam history available.</p>
                    <?php } ?>
                </div>
            </div>

            <!-- Review Answers Section -->
            <div class="card">
                <h3>🔍 Review Answers</h3>
                <div class="content">
                    <?php if (!empty($examHistory)) { ?>
                        <ul>
                            <?php foreach ($examHistory as $exam) { ?>
                                <li>
                                    <strong><?php echo $exam['exam_title']; ?></strong>
                                    <p>Date Taken: <?php echo $exam['date_taken']; ?></p>
                                    <button onclick="window.location.href='review_answers.php?exam_id=<?php echo $exam['exam_id']; ?>'">Review Answers</button>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p>No exams available for review.</p>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #1e1e2f;
        color: #fff;
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
    }

    .dashboard p {
        font-size: 16px;
        color: #b0b0b0;
    }

    .dashboard-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        width: 90%;
        max-width: 1200px;
    }

    .card {
        background: linear-gradient(135deg, #ff914d, #ff6a00); /* Orange gradient */
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        padding: 20px;
        text-align: left;
        transition: transform 0.4s, box-shadow 0.4s;
    }

    .card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    h3 {
        margin: 10px 0;
        font-size: 20px;
        color: #fff;
    }

    .content ul {
        list-style-type: none;
        padding: 0;
    }

    .content ul li {
        margin: 10px 0;
        padding: 10px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
    }

    .content ul li strong {
        display: block;
        font-size: 16px;
        color: #fff;
    }

    .content ul li p {
        margin: 5px 0;
        font-size: 14px;
        color: #f0f0f0;
    }

    .content ul li button {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .content ul li button:hover {
        background-color: #45a049;
    }
</style>
</html>
