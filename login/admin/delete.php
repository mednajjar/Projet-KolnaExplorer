<?php

include '../../config.php';
// _____________________from images table_______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM images WHERE id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// ---------------------------from galerie table-------------------------------
$id = $_GET['id'];

$sql = 'DELETE FROM galerie WHERE gal_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// __________________________from activity table_______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM activity WHERE act_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// _________________________from destination table______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM destination WHERE dest_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// _________________________from events table______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM events WHERE event_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// _________________________from team table______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM team WHERE team_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}
// _________________________from partner table______________________________
$id = $_GET['id'];

$sql = 'DELETE FROM partner WHERE part_id=:id';

$stmt = $db->prepare($sql);

if($stmt->execute(['id'=>$id])){
    header("location: ./homepage.php");
}