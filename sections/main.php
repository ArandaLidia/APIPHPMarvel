<main>
    <section>
        <h1>La próxima película de Marve: <?php $data["title"]; ?></h1>
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> : <?= $untilMessage; ?> </h3>
        <p>La fecha de estreno es: <?= $data["release_date"]; ?></p>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="poster de">
        <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

</main>