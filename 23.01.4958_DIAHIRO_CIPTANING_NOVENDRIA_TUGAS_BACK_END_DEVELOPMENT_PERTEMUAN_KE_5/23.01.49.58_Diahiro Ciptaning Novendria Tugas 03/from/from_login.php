<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url']; // Mengambil input URL dari form

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO tabel_url (url) VALUES ('$url')";

    if ($conn->query(query: $sql) === TRUE) {
        echo "URL berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
