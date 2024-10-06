<?php
// Sertakan file koneksi database
include 'connection.php';

// Atur tipe respons menjadi JSON
header('Content-Type: application/json');

// Tentukan aksi berdasarkan request
$action = $_GET['action'] ?? '';
switch($action) {
    // API untuk mengirim data melalui POST
    case 'submit':
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return "berhasil get data";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $moisture = $_POST['moisture'] ?? '';
            $light = $_POST['light'] ?? '';
            $pump_status = $_POST['pump_status'] ?? '';

            if ($moisture && $light && $pump_status) {
                // Masukkan data ke dalam database
                $query = "INSERT INTO sensor_data (moisture, light, pump_status) VALUES ('$moisture', '$light', '$pump_status')";
                if (mysqli_query($conn, $query)) {
                    echo json_encode(['status' => 'success', 'message' => 'Data berhasil dimasukkan']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Kesalahan pada database']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Data tidak valid']);
            }
        }
        break;

    // API untuk mendapatkan status terbaru
    case 'status':
        $result = mysqli_query($conn, "SELECT * FROM sensor_data ORDER BY id DESC LIMIT 1");
        if ($row = mysqli_fetch_assoc($result)) {
            echo json_encode([
                'status' => 'success',
                'data' => [
                    'moisture' => $row['moisture'],
                    'light' => $row['light'],
                    'pump_status' => $row['pump_status']
                ]
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Tidak ada data']);
        }
        break;

    default:
        echo json_encode(['status' => 'error', 'message' => 'Aksi tidak valid']);
        break;
}
?>