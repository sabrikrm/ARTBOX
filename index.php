
    <?php include 'header.php'; ?>
    <?php include 'oeuvres.php'; ?>
    <main>
        <div id="liste-oeuvres">
             <?php foreach ($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre-<?php echo $oeuvre['id']; ?>.php">
                    <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                </a>
            </article>
        <?php endforeach; ?>
        </div>
    </main>
    <?php include 'footer.php'; ?>
