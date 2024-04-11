<?php

function Connection(){
    global $connection;
   // propojení s databází  
$connection = mysqli_connect("localhost", "root", "","pojistovaci_evidence");
// upozornění
if ($connection){
    echo "jsme propojeni";
} else {
    die ("Ou, něco se pokazilo");
}   
    
}

function AddData(){
    global $connection;
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $bydliste = $_POST["bydliste"];
    $varianta = $_POST["varianta"];
    
    $query = "INSERT INTO uzivatele (jmeno, prijmeni, bydliste, varianta) VALUES ('$jmeno', '$prijmeni', '$bydliste', '$varianta')";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die ("Nepodařilo se zapsat data do databáze");
    }
}

function UpdateInput(){
    global $connection;
    $jmeno = $_POST["jmeno"];
    $prijmeni= $_POST["prijmeni"];
    $bydliste = $_POST["bydliste"];
    $varianta = $_POST["varianta"];
    $id = $_POST["id"];
    
    $query2 = "UPDATE uzivatele SET jmeno='$jmeno', prijmeni='$prijmeni', bydliste='$bydliste', varianta='$varianta' WHERE id=$id";
    $result2 = mysqli_query($connection, $query2);
    
    if(!$result2){
        die("Query selhalo".mysqli_error($mysql));
    }
}


function DeleteInput(){
    global $connection;
    $jmeno = $_POST["jmeno"];
    $prijmeni= $_POST["prijmeni"];
    $bydliste = $_POST["bydliste"];
    $varianta = $_POST["varianta"];
    $id = $_POST["id"];
    
    $query2 = "DELETE FROM uzivatele WHERE id = $id"; 
    $result2 = mysqli_query($connection, $query2);
    
    if(!$result2){
        die("Query selhalo".mysqli_error($mysql));
    }
}

function SelectData(){
    global $connection;
    global $result;
    $query =  "SELECT * FROM uzivatele";       
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die ("Nepodařilo se vybrat data z databáze");
    }
}


?>

