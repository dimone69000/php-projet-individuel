<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">
        <div class="row align-items-start">
            <div class="col-lg-3 col-md-3">

<?php require_once __DIR__ . '/pdo/dsn.php';?>

<h2>Introduction</h2>

<?php
$queryChapter = "SELECT id,titre from chapitre";
$stmt = $pdo->query($queryChapter);
$chapters = $stmt->fetchAll();
?>

<?php 
foreach ($chapters as $chapter) {
?>
<p><a href="contenu-cours.php?id=<?php echo $chapter ['id'];?>"><?php echo $chapter ['titre']; ?></a></p>
<?php
}
?>
            </div>

            <div class="col-lg-7 col-md-7">
            
<?php
$queryContent = "SELECT * FROM chapitre";
$stmt = $pdo->query($queryContent);
$contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<p><?php echo $contents[$_GET['id']-1]['contenu'];?></p>

            </div>

            <div class="col-lg-2 col-md-2">
            </div>
        </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>