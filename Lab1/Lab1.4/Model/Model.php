<?php
function get_products(){
    include 'config.php';

    $sql = "SELECT * FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        $stmt->close();
        $conn->close();
        return $rows;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}
?>
