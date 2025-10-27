<!DOCTYPE html>
<head>
    <title>HTML Aman</title>
</head>
<body>
    <form action="html_aman.php" method="post">
        <label for="input">Nama kamu: </label>
        <input type="text" name="input" id="input"><br><br>

        <label for="email">Email kamu: </label>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $email = $_POST["email"];

    if (empty($input) || empty($email)) {
        echo "Input tidak boleh kosong";
    } else {
        # untuk mendapatkan input dari form
        $input = $_POST['input'];

        # menyaring dan mengamankan inputan
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "Nama: $input" . "<br>";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email";
        } else {
            echo "Email tidak valid";
        }
        # menampilkan output
    }
}
?>