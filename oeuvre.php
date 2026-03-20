<?php
include 'oeuvres.php';


$id = $_GET['id'];


$oeuvreDetail = null;

foreach ($oeuvres as $oeuvre) {
    if ($oeuvre['id'] == $id) {
        $oeuvreDetail = $oeuvre;
        break;
    }
}


if ($oeuvreDetail == null) {
    header('Location: index.php');
    exit;
}
?>

<?php include 'header.php'; ?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvreDetail['image']; ?>" alt="<?php echo $oeuvreDetail['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvreDetail['titre']; ?></h1>
            <p class="description"><?php echo $oeuvreDetail['artiste']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvreDetail['description']; ?>
            </p>
        </div>
    </article>
</main>

<?php include 'footer.php'; ?>