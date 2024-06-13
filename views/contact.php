<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //traitement des données de l'utilisateur
}
?>
<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chez cilvie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <link rel="stylesheet" href="/assets/css/contact.css" />
    <link rel="stylesheet" href="/assets/css/footer.css" />
    <link rel="stylesheet" href="/assets/css/navbar.css" />
    <link rel="stylesheet" href="/assets/css/presentation.css" />
    <link rel="stylesheet" href="/assets/css/les-lives.css">

</head>
</head>

<body class="body">
    <header>
        <img class="logo-sylvie" src="/assets/images/logo-cilvie.png" alt="logo" />
        <div class="header-title">

        </div>
    </header>

    <div class="block-container">

        <aside class="aside">
            <nav>
                <ul>
                    <li><a href="/"><img src="/assets/images/acceuil.png"></a></li>
                    <li><a href="presentation"><img src="/assets/images/apropo.png"></a></li>
                    <li><a href="contact"><img src="/assets/images/contact.png"></a></li>
                    <li><a href="videos-live"><img src="/assets/images/les-lives.png"></a></li>
                </ul>
            </nav>
        </aside>
        <main class="container">
            <div class="neon-border">
                <h1 class="titrecontact">pour me contacter (stylvie) </h1>
            </div>

            <section>

                <form>
                    <fieldset>
                        <label>Nom*</label>
                        <input type="text" name="text" placeholder="écrire ici votre nom:" aria-label="Text" />
                        <label>Prénom*</label>
                        <input type="texe" name="text" placeholder="écrire ici votre prenom : " aria-label="Email" autocomplete="email" />
                        <label>Email*</label>
                        <input type="tel" name="tel" placeholder="écrire ici votre mail :" aria-label="text:" autocomplete="tel" />
                        <label>n°telephonne * </label>
                        <input type="tel" name="tel" placeholder="écrire ici votre numéro  Tel" aria-label="Tel" autocomplete="tel" />
                        <label>Message</label>
                        <textarea name="bio" placeholder="écrire votre texte ici: " aria-label="Professional short bio"></textarea>

                    </fieldset>
                    <div class="submit"><input type="submit" value="envoyer" /></div>
                </form>

            </section>
        </main>
    </div>

    <div class="footercontainer">
        <p>&copy 2024 Wild code school<br>made 💓by wilders image </p>
        <a href="https://www.facebook.com/groups/850906159520243"><img class="logofbook" src="assets\images\logo-facebook.png"></a>
        <a href="https://www.instagram.com/stylvie02/?fbclid=IwZXh0bgNhZW0CMTAAAR135bri9_aOdu9Al-btQtlrKpM6cM7n4KCWw-AH1uJBZP0iJYBki9PNFPY_aem_AUN13yVYYQsQkOUjGngv-zfkWEfTVOyJgoi1pQGn4G_nQAYaJ6RUDbrRC1_wDkHP6h0_mAFsZNakStMTWnXINyeK"><img class="logoastagram" src="assets\images\astagram.png"></a>
        <a href="https://www.facebook.com/groups/642571988082126"><img class="logoasdavdevep51" src="assets\images\davdevep51.png"></a>
        <div class="footer-logo">

</body>

</html>