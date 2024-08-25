<?php
// Data kehadiran
$kehadiran = array(
    'Jan' => 80,
    'Feb' => 70,
    'Mar' => 90,
    'Apr' => 85,
    'Mei' => 75,
    'Jun' => 95,
    'Jul' => 80,
    'Agu' => 70,
    'Sep' => 90,
    'Okt' => 85
);

// Fungsi untuk menghitung persentase
function persentase($nilai) {
    return number_format($nilai, 2) . '%';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Kehadiran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Grafik Kehadiran</h1>
        <div class="flex flex-wrap justify-center">
            <?php foreach ($kehadiran as $bulan => $nilai) : ?>
                <div class="w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 p-4">
                    <div class="bg-white rounded shadow-md p-4">
                        <h2 class="text-lg font-bold mb-2"><?= $bulan ?></h2>
                        <p class="text-2xl font-bold mb-2"><?= persentase($nilai) ?></p>
                        <div class="bar-chart w-full h-20 bg-gray-200 rounded">
                            <div class="bar-chart-value w-<?= $nilai ?>% h-20 bg-green-500 rounded"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>