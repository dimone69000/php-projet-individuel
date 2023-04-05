<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">
        <div class="row align-items-start">
            <div class="col-lg-3 col-md-3">

<?php require_once __DIR__ . '/pdo/dsn.php';?>

<?php
$queryNomCours = "SELECT nom from cours where id=" . $_GET['id'];
$stmt = $pdo->query($queryNomCours);
?>
<?php
while ($nomCours = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<h2><?php echo $nomCours['nom'];?></h2>
<?php
}
?>

<?php
$queryChapter = "SELECT id,titre,cours_id from chapitre where cours_id=" . $_GET['id'];
$stmt = $pdo->query($queryChapter);
?>
<?php 
while ($row = $stmt->fetch()) {
?>
<p><a href="contenu-cours.php?id=<?php echo $row['cours_id'];?>&cours_id=<?php echo $row['id']?>"><?php echo $row ['titre'];?></a></p>
<?php
}
?>
            </div>

            <div class="col-lg-7 col-md-7">
            
<?php
$queryContent = "SELECT id,cours_id,contenu FROM chapitre WHERE id=". $_GET['cours_id'];
$stmt = $pdo->query($queryContent);
$contents = $stmt->fetch();
?>
<p><?php echo $contents['contenu'];?></p>

            </div>

            <div class="col-lg-2 col-md-2">
            </div>
        </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>