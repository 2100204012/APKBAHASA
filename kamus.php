<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kamus Bahasa</title>
    <style>
        /* Gaya CSS untuk membuat tabel geser */
        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
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
        }

        /* Style untuk tabel kamus */
        table {
            width: 100%;
            border-collapse: collapse;
           
        }

        /* Style untuk header kolom */
        th {
            background-color: #333;
            color: white;
            font-weight: normal;
            padding: 8px;
        }

        /* Style untuk sel dalam tabel */
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        /* Style untuk kata dalam Bahasa Inggris */
        .word-english {
            font-weight: bold;
        }

        /* Style untuk terjemahan kata dalam Bahasa Indonesia */
        .word-indonesian {
            color: #555;
        }

        /* Style untuk terjemahan kata dalam Bahasa Spanyol */
        .word-spanish {
            color: #555; 
        }

        /* Style untuk footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Kamus Bahasa</h1>
    </header>

    <main>
        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Ba'Ahe</th>
                    <th>Bahasa Bakati</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Array dengan 50 kata beserta terjemahannya dalam tiga bahasa
                $kamus = array(
                    "Orang" => array("Urakng", "Kayo"),
                    "Baring" => array("Guring", "Gurikng"),
                    "Senang" => array("Repo", "Sanang"),
                    "Siapa" => array("Sae", "Asi"),
                    "Bagaimana" => array("Ampahe/Lempahe", "Pang'mbe"),
                    "Berapa" => array("Sangahe", "Mani"),
                    "Jatuh" => array("Jantuk", "Jantu"),
                    "Kapan" => array("Mule/Mile", "Ngina"),
                    "Kesini" => array("Ka'dian", "Yak'diah"),
                    "Kesana" => array("Ka'naun", "Yak'tet"),
                    "Tidak" => array("Ina'k", "Kati"),
                    "Itu" => array("Koa", "Koh"),
                    "Kerja" => array("Karaja", "Karaje"),
                    "Perempuan" => array("Bini", "Mahung"),
                    "Bujang" => array("Bujakng", "Bujak"),
                    "Malu" => array("Supant/Supe", "Mangun"), 
                    "Cantik" => array("Cante/Cega", "Bangkok"),
                    "Bagus" => array("Edo", "Lamus"),
                    "Panas" => array("Angat", "Paras"),
                    "Kita" => array("Diri'k", "Ite"),
                    "Nanti" => array("Ana", "Jana"),
                    "Pergi" => array("Ampus", "Ano"),
                    "Besok" => array("Ampagi", "Jangkap"),
                    "Datang" => array("Atak'ng", "Utukng"),
                    "Apa" => array("Ahe", "Jai"),
                    "Jalan Kaki" => array("Bajalat'n Paha", "Bajalat kaja"),
                    "Berlari" => array("Bageleh/Singkunyar", "Baga'ga"),
                    "Berdiri" => array("Badiri", "Nage"),
                    "Berpikir" => array("Bapikir", "Mikir"),
                    "Bertemu" => array("Batamu", "Badaput"),
                    "Bekerja" => array("Bakaraja", "Karaje"),
                    "Meminta" => array("Bapinta", "Mahe"), 
                    "Besar" => array("Aya'k", "Aho"),          
                    "Masak" => array("Nyuman", "Nanuk'ng"),
                    "Jangan" => array("Ame", "K'a"),
                    "Keluarga" => array("Page", "Paradi"),
                    "Sayur" => array("Ampahat'n", "Dangkayu"),
                    "Hati" => array("Ati", "Ate"),
                    "Mandi" => array("Mani'", "Mamu"),
                    "Tidur" => array("Tidur", "Bus"),
                    "Mata" => array("Mata", "Matu"),
                    "Mulut" => array("Molot", "Baba"),
                    "Tangan" => array("Kokot", "Barek'ng"),
                    "Rambut" => array("Buuk", "Abok'ng"),
                    "Leher" => array("Tegek", "Jangok"),
                    "Gigi" => array("Gigi", "Japu"),
                    "Kaki" => array("Paha", "Kaja"),
                    "Lelaki" => array("Nang laki", "Are"), 
                    "Orang Tua" => array("Urakng Tuha", "Sadama"),
                    "Keponakan" => array("Kamenakatn", "sanggun"),
                    "Air" => array("Ai'k", "Pait"),
                    "Lumpur" => array("Locak", "Lolok"),
                    "Banjir" => array("Banjir", "Aba"),
                    "Ular" => array("Ular", "Dipa"),
                    "Babi" => array("Babot'n", "Dare"),
                    "Kucing" => array("Ucikng", "Oreng"),
                    "Ayam" => array("Manok", "Siap"),
                    "Anjing" => array("Asu'k", "Kasu"),
                    "Ikan" => array("Ikatn", "Ikat'n"),
                    "Tupai" => array("Tupe", "Tupe"),
                    "Suka" => array("Suka", "Suke"),
                    "Kamu" => array("Kao", "Imu'k"),
                    "Saya" => array("Aku", "Kit"),
                    "Bernyanyi" => array("Banyanyi", "Ngado"), 
                    "Mandi" => array("Manik", "Mamu"),
                    "Malas" => array("Malas", "Ruhe"),
                    "Bertemu" => array("Batamu", "Badaput'n"),
                    "Rindu" => array("Reho", "Lingas"),
                    "Marah" => array("Bera", "Baji"),
                    "Menangis" => array("Nangis/Ngeak", "Munse"),
                    "Ketawa" => array("Galak", "Guluk"),
                    "Sakit Hati" => array("Sakit Ati", "Anap Ate"),
    
                    // Tambahkan kata-kata lain di sini
                );

                // Menampilkan kata-kata dalam kamus
                foreach ($kamus as $english => $translations) {
                    echo '<tr>';
                    echo '<td class="word-english">' . $english . '</td>';
                    echo '<td class="word-indonesian">' . $translations[0] . '</td>';
                    echo '<td class="word-spanish">' . $translations[1] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>