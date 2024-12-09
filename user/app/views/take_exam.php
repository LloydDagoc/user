<?php include APP_DIR . 'views/templates/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Exams</title>
    <link rel="stylesheet" href="path_to_your_css.css">
    <script>
        let currentQuestionIndex = 0;
        let timer;
        let remainingTime = 300; // 5 minutes countdown

        // Countdown timer
        function startTimer() {
            const timerElement = document.getElementById('timer');
            timer = setInterval(() => {
                remainingTime--;
                const minutes = Math.floor(remainingTime / 60);
                const seconds = remainingTime % 60;
                timerElement.textContent = `Time Remaining: ${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
                if (remainingTime <= 0) {
                    clearInterval(timer);
                    alert("Time's up! Your answers will be submitted automatically.");
                    submitAnswers();
                }
            }, 1000);
        }

        // Navigate between questions
        function navigateQuestion(direction) {
            const questions = document.querySelectorAll('.question-container');
            questions[currentQuestionIndex].classList.add('hidden');
            currentQuestionIndex += direction;
            currentQuestionIndex = Math.max(0, Math.min(currentQuestionIndex, questions.length - 1));
            questions[currentQuestionIndex].classList.remove('hidden');
        }

        // Submit answers
        function submitAnswers() {
            clearInterval(timer);
            alert("Answers submitted successfully!");
            document.getElementById('exam-form').submit();
        }
    </script>
</head>
<body>
    <div class="dashboard">
        <h1>Available Exams</h1>
        <div class="exam-list">
            <!-- Example of dynamically populated exams -->
            <?php
            // Assume $exams is an array of available exams fetched from the database
            $exams = [
                ['id' => 1, 'title' => 'Math Exam'],
                ['id' => 2, 'title' => 'Science Exam'],
                ['id' => 3, 'title' => 'History Exam'],
            ];

            foreach ($exams as $exam) {
                echo "<div class='exam-card'>
                        <h3>{$exam['title']}</h3>
                        <button onclick='startExam({$exam['id']})'>Start Exam</button>
                      </div>";
            }
            ?>
        </div>
        <div id="exam-section" class="hidden">
            <h2 id="exam-title"></h2>
            <p id="timer">Time Remaining: 5:00</p>
            <form id="exam-form" method="POST" action="submit_exam.php">
                <div id="question-section">
                    <!-- Example dynamic questions -->
                    <?php
                    // Example of dynamic questions fetched from a question bank
                    $questions = [
                        ['id' => 1, 'text' => 'What is 2 + 2?', 'options' => ['3', '4', '5', '6']],
                        ['id' => 2, 'text' => 'Which planet is known as the Red Planet?', 'options' => ['Earth', 'Mars', 'Venus', 'Jupiter']],
                    ];

                    foreach ($questions as $index => $question) {
                        $hiddenClass = $index === 0 ? '' : 'hidden';
                        echo "<div class='question-container $hiddenClass'>
                                <p>{$question['text']}</p>";
                        foreach ($question['options'] as $option) {
                            echo "<label>
                                    <input type='radio' name='question_{$question['id']}' value='$option' required> $option
                                  </label>";
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
                <button type="button" onclick="navigateQuestion(-1)" id="prev-btn" class="hidden">Previous</button>
                <button type="button" onclick="navigateQuestion(1)" id="next-btn">Next</button>
                <button type="button" onclick="submitAnswers()">Submit</button>
            </form>
        </div>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #1e1e2f;
        color: white;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dashboard {
        width: 90%;
        max-width: 800px;
    }

    .exam-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .exam-card {
        background: linear-gradient(135deg, #2a5298, #1e9e9e);
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        transition: transform 0.4s, box-shadow 0.4s;
    }

    .exam-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    button {
        background-color: #1e9e9e;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2a5298;
    }

    .hidden {
        display: none;
    }

    .question-container {
        margin: 20px 0;
    }
</style>
</html>
