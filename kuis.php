<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Bahasa</title>
    <style>
        /* Style untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Style untuk header */
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        /* Style untuk main content */
        main {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Style untuk form kuis */
        .quiz-form {
            max-width: 600px;
            width: 100%;
        }

        /* Style untuk label pertanyaan */
        .question-label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        /* Style untuk label pilihan jawaban */
        .choice-label {
            display: block;
            margin-bottom: 5px;
        }

        /* Style untuk input jawaban */
        input[type="radio"] {
            margin-right: 5px;
        }

        /* Style untuk tombol submit */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Style untuk footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kuis Bahasa</h1>
    </header>

    <main>
        <form class="quiz-form" action="" method="POST">
            <?php
            $questions = array(
                "Apa arti bahasa Bakati sae.....?",
                "Apa arti bahasa Bakati Sangahe....?",
                "Apa arti bahasa Bakati Bini....?",
                "Apa arti bahasa Bakati Edo....?",
                "Apa arti bahasa Bakati Angat....?",
                "Apa arti bahasa Bakati Ampagi....?",
                "Apa arti bahasa Bakati Ampus....?",
                "Apa arti bahasa Bakati Bapinta....?",
                "Apa arti bahasa Bakati page....?",
                "Apa arti bahasa Bakati Molot....?",
                "Apa arti bahasa Ba'Ahe kayo....?",
                "Apa arti bahasa Ba'Ahe sanang....?",
                "Apa arti bahasa Ba'Ahe asi....?",
                "Apa arti bahasa Ba'Ahe jantu....?",
                "Apa arti bahasa Ba'Ahe ngina....?",
                "Apa arti bahasa Ba'Ahe yak'diah....?",
                "Apa arti bahasa Ba'Ahe koh....?",
                "Apa arti bahasa Ba'Ahe kati....?",
                "Apa arti bahasa Ba'Ahe karaje....?",
                "Apa arti bahasa Ba'Ahe mangun....?",
                // Tambahkan pertanyaan lain di sini
            );

            $choices = array(
                array("A. Kati", "B. Jai", "C. Oman", "D. Karimut", "E. Unyung"),
                array("A. Keraje", "B. Utung", "C. Mani", "D. Karimut", "E. Jakap"),
                array("A. Ite", "B. Karimut", "C. Imu", "D. Mahung", "E. Namau"),
                array("A. Imu", "B. Bajalat Kaja", "C. Ano", "D. jana", "E. Lamus"),
                array("A. Aho", "B. Mahe", "C. Mikir", "D. Nage", "E. Paras"),
                array("A. Utung", "B. Karimut", "C. Imu", "D. Jagkap", "E. Jai"),
                array("A. Lamus", "B. Ano", "C. Rohe", "D. Imu", "E. Kati"),
                array("A. Mahe", "B. Karimut", "C. Iti", "D. Bangam", "E. Karimut"),
                array("A. Imu", "B. Paradi", "C. Ore", "D. Oman", "E. Mamu"),
                array("A. Baba", "B. Kati", "C. Lamus", "D. Mari", "E. Kati"),
                array("A. Sae", "B. Sangahe", "C. Urangk", "D. Diri'k", "E. Jantuk"),
                array("A. Ana", "B. Angat", "C. Karaja", "D. Guring", "E. Repo"),
                array("A. Ampus", "B. Bini", "C. Ina'k", "D. Sae", "E. Koa"),
                array("A. Jantuk", "B. Bujakng", "C. Atak'ng", "D. Ampagi", "E. Badiri"),
                array("A. Cega", "B. Supe", "C. Mule/Mile", "D. Batamu", "E. Tumare"),
                array("A. Sae", "B. Jahe", "C. Ka'Dian", "D. Ame", "E. Dirik"),
                array("A. Koa", "B. Ampagi", "C. Keant", "D. Guring", "E. Repo"),
                array("A. Angat", "B. Ina'k", "C. Sangahe", "D. Karaja", "Ampus"),
                array("A. Bera", "B. Repo", "C. Jantuk", "D. Bujakng", "E. Karaja"),
                array("A. Supant/Supe", "B. Galak", "C. Banyanyi", "D. Reho", "E. Bera"),
                // Tambahkan pilihan jawaban untuk pertanyaan lain di sini
            );

            // Menampilkan pertanyaan dan pilihan jawaban
            for ($i = 0; $i < count($questions); $i++) {
                $questionNumber = $i + 1;
                echo '<label class="question-label" for="question' . $questionNumber . '">' . $questionNumber . '. ' . $questions[$i] . '</label>';

                // Menampilkan pilihan jawaban
                for ($j = 0; $j < count($choices[$i]); $j++) {
                    echo '<label class="choice-label">';
                    echo '<input type="radio" name="answer' . $questionNumber . '" value="' . chr(65 + $j) . '"> '; // chr(65) = 'A'
                    echo $choices[$i][$j];
                    echo '</label>';
                }
            }
            ?>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = 0;

            // Menentukan jawaban yang benar
            $correctAnswers = array("B", "C", "D", "E", "E", "D", "B", "A", "B", "A", "C", "E", "D", "A", "C", "C", "A", "B", "E", "A", /* Tambahkan jawaban lain di sini */);

            // Memeriksa jawaban dan menghitung skor
            for ($i = 0; $i < count($correctAnswers); $i++) {
                $userAnswer = strtoupper($_POST["answer" . ($i + 1)]);
                $correctAnswer = $correctAnswers[$i];

                if ($userAnswer == $correctAnswer) {
                    $score++;
                }
            }

            // Menampilkan hasil kuis
            echo '<h2>Hasil Kuis:</h2>';
            echo '<p>Skor Anda: ' . $score . ' dari ' . count($questions) . '</p>';
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Website Bahasa</p>
    </footer>
</body>
</html>