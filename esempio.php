<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST["action"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if($tipo == 'login'){
        $sql = "SELECT * FROM account where username='$username' AND pass='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "benvenuto" . "<br>";
            }
        }else {
            session_start();
            $_SESSION['valore'] = $_POST['username'];
            header("Location: " . 'accessofallito.php');
            exit; 
        }
        
    }else if ($tipo == "register") {
        $sql = "INSERT INTO account (username, pass) VALUES ('$username', '$password')";
        
        try {
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                session_start();
                $_SESSION['valore'] = $_POST['username'];
                header("Location: " . 'accessofallito.php');
                exit; 
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) { // Errore di chiave duplicata
                // Gestisci l'errore della chiave duplicata qui
                session_start();
                $_SESSION['valore'] = $_POST['username'];
                header("Location: " . 'registrazionefallita.php');
                exit;
            } else {
                // Gestisci altri tipi di errore del database qui
                echo "Errore del database: " . $e->getMessage();
            }
        }
    }
    
}



?>