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



</head>

<body class="body">

    <header>
        <img class="logo-sylvie" src="/assets/images/logo-cilvie.png" alt="logo" />
        <div class="header-title">
            <div class="neon-border messagedefilant">
                <h1> <span>*ma petite boutique en ligne*</span> </h1>
            </div>
           
        </div>
    </header>

    <div class="block-container">
        <aside class="aside">
            <nav>
                <ul>
                    <li><a href="/"><img src="/assets/images/acceuil.png"></a>Acceuil</li>
                    <li><a href="presentation"><img src="/assets/images/apropo.png"></a>N/A</li>
                    <li><a href="contact"><img src="/assets/images/contact.png"></a>Contact</li>
                    <li><a href="https://www.facebook.com/groups/642571988082126"><img src="/assets/images/davdevep51.png"></a>devweb</li>
                    <li><a href="https://www.facebook.com/groups/850906159520243"><img src="/assets/images/logo-facebook.png"></a>FCB</li>
                    <li><a href="https://www.instagram.com/stylvie02/"><img src="/assets/images/astagram.png"></a>PG/IG</li>
                    <li><a href="videos-live"><img src="/assets/images/les-lives.png"></a>les-lives</li>
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
                    <div class="submit"><input type="submit" class="button-contact" value="envoyer" /></div>
                </form>

            </section>
        </main>
    </div>
    <footer>
        <p>&copy 2024 Wild code school<br>made 💓Davdevep51 </p>
    </footer>

</body>

</html>