<?php
// Daftar nama-nama khodam
$khodamNames = [
"100% Perfect",
"90% Cocok!",
"80% Terusin",
"70% Remed dikit",
"60% Masih bisa",
"50% Semangat",
"40% Mungkin Bis ",
"30% Terus berjuang",
"20% Coba",
"10% Sadar",
"0% udah tau ga mungkin masih di kejar",
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
];

// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomKhodam() {
    global $khodamNames;
    $randomIndex = array_rand($khodamNames);
    return $khodamNames[$randomIndex];
}
?>