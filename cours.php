<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">
        <div class="row align-items-start">
            <div class="col-lg-3 col-md-3">

<?php require_once __DIR__ . '/pdo/dsn.php';?>

<h2>Introduction</h2>

<?php
$queryChapter = "SELECT id,titre from chapitre";
$stmt = $pdo->query($queryChapter);
?>
<?php 
while ($row = $stmt->fetch()) {
?>
<p><a href="contenu-cours.php?id=<?php echo $row['id'];?>"><?php echo $row ['titre']; ?></a></p>
<?php
}
?>
            </div>

            <div class="col-lg-7 col-md-7">
            
            </div>

            <div class="col-lg-2 col-md-2">
            </div>
        </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>