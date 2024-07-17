<?php
include 'db_connect.php';
if (isset($_GET['action']) && $_GET['action'] == 'delet') {
    $stmt = $conn->prepare("DELETE FROM task_list WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $stmt->close();
    header('location:view_project.php');
}
?>
