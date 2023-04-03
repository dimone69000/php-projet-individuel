<?php require_once __DIR__ . '/../pdo/dsn.php';


$query = "SELECT * FROM cours";
$stmt = $pdo->query($query);

$courses = $stmt->fetchAll();

?>
<?php
foreach ($courses as $course) {
?>
    <p><a href="cours.php?id=<?php echo $course['id']; ?>"><?php echo $course['nom']; ?></a></p>
<?php
}
?>