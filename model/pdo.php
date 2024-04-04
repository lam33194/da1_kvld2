<?php
function pdo_get_connection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "duan1_2024";
    try {
        $conn = new PDO('mysql:host='."$servername".'; dbname='."$database".'', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        unset($conn);
    }
}
// Hàm truy vấn nhiều dl
function pdo_query($sql) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $row = $stmt->fetchAll();
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){echo $e->getMessage();} 
    finally {
        unset($conn);
    }
}

// Hàm truy vấn 1 dl
function pdo_query_one($sql) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt -> execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){echo $e->getMessage();} 
    finally {
        unset($conn);
    }
}

// (INSERT UPDATE DELETE)
function pdo_execute($sql){
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $e){echo $e->getMessage();}
    finally {unset($conn);}
}

function validateNull(...$data) {
    foreach ($data as $value) {
        if (!$value || empty($value) || !trim($value)) return false;
    }
    return true;
}