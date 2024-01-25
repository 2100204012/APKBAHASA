<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Translate Bahasa</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

select,
textarea {
    margin-bottom: 15px;
    padding: 8px;
    font-size: 16px;
}

input[type="submit"] {
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.result-box {
    margin-top: 20px;
    background-color: #e0f7fa;
    padding: 10px;
    border-radius: 4px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Translate Bahasa Ba'Ahe - Bahasa Bakati</h1>
        
        <form action="" method="post">
            <label for="source-language">Bahasa Asal:</label>
            <select name="source-language" id="source-language">
                <option value="en">Ba'Ahe</option>
                <option value="id">Bakati</option>
                <option value="es">Indonesia</option>
                <!-- Tambahkan opsi bahasa lain sesuai kebutuhan -->
            </select>

            <label for="target-language">Bahasa Tujuan:</label>
            <select name="target-language" id="target-language">
                <option value="en">Ba'Ahe</option>
                <option value="id">Bakati</option>
                <option value="es">Indonesia</option>
                <!-- Tambahkan opsi bahasa lain sesuai kebutuhan -->
            </select>

            <label for="text-to-translate">Teks untuk Diterjemahkan:</label>
            <textarea name="text-to-translate" id="text-to-translate" rows="4" cols="50"></textarea>

            <input type="submit" name="translate" value="Terjemahkan">
        </form>

        <?php
        if (isset($_POST['translate'])) {
            $source_language = $_POST['source-language'];
            $target_language = $_POST['target-language'];
            $text_to_translate = $_POST['text-to-translate'];

            // Implementasikan logika terjemahan sesuai kebutuhan
            // Misalnya, Anda dapat menggunakan layanan terjemahan eksternal seperti Google Translate API.
            // Atau Anda dapat menulis fungsi sendiri untuk menerjemahkan teks.

            // Contoh sederhana:
            $translated_text = translateText($text_to_translate, $source_language, $target_language);

            echo "<div class='result-box'>";
            echo "<p>Hasil Terjemahan:</p>";
            echo "<p>$translated_text</p>";
            echo "</div>";
        }

        function translateText($text, $source_language, $target_language) {
            // Implementasikan logika terjemahan sesuai kebutuhan
            // Ini hanyalah contoh sederhana, Anda dapat menggunakan layanan terjemahan atau API.
            // Pastikan untuk mengganti logika ini sesuai kebutuhan Anda.
            $translations = [
                'en' => ['id' => 'Jai', 'es' => 'Apa', 'en' => 'Ahe'],
                'id' => ['en' => 'Ahe', 'es' => 'Apa', 'id' => 'Jai'],
                'es' => ['en' => 'Ahe', 'id' => 'Jai', 'es' => 'Apa'],
                
                // Tambahkan terjemahan untuk bahasa lain sesuai kebutuhan
            ];

            if (isset($translations[$source_language][$target_language])) {
                return $translations[$source_language][$target_language];
            } else {
                return "Tidak ada terjemahan yang tersedia.";
            }
        }
        ?>
    </div>
</body>
</html>