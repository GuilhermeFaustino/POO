<article style="
        padding: 5px 20px;
        background: #eeeeee;
        --webkit-border-radius: 4px;
        --moz-border-raius: 4px;
        border-raius: 4px; ">

<h1><?= $profile->nome;  ?></h1>
    <p>
        Trablaha na <?= $profile->company; ?></br>
        <a href="mailto:<?= $profile->email; ?>">Enviar Email</a>
    </p>
</article>