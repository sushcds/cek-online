<?php
// Daftar nama-nama khodam
$khodamNames = [
    "Ayam",
    "Beruang ",
    "Singa",
    "Kupu-kupu",
    "Kura kura",
    "Kerbau",
    "Sapi",
    "Bekicot",
    "Kambing",
    "Ular",
    "Babi",
    "Katak",
    "Kangguru",
    "Kuda",
    "Aligator",
    "Cacing",
    "Cicak",
    "Capung",
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
];

// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomKhodam() {
    global $khodamNames;
    $randomIndex = array_rand($khodamNames);
    return $khodamNames[$randomIndex];
}
?>