<?php
include 'config.php'; 

$data = json_decode(file_get_contents("php://input"), true);

$orderID = $data['orderID'];
$paymentStatus = $data['paymentStatus'];

$sql = "UPDATE Comments SET payment = :paymentStatus WHERE ID_comments = (SELECT ID_comments FROM Comments ORDER BY ID_comments DESC LIMIT 1)";

$stmt = $bdd->prepare($sql);
$stmt->bindParam(':paymentStatus', $paymentStatus, PDO::PARAM_BOOL);

try {
    $stmt->execute();
    echo json_encode(["message" => "Payment status updated successfully"]);
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}

$stmt->closeCursor();
?>
