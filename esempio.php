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
        
    }else if ($tipo == "register"){
    
        
            $query = "INSERT INTO account (username, pass) VALUES ($username, $password)";
            $result = $conn->query($query);
            if ($conn->query($query) === TRUE) {
                echo "Account inserito con successo";
            } else {
                echo "Errore durante l'inserimento dell'account: " . $conn->error;
            }

    }
}



?>