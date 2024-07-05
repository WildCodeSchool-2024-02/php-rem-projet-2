<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>chez cilvie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />+
    <link rel="stylesheet" href="/assets/css/footer.css" />
    <link rel="stylesheet" href="/assets/css/navbar.css" />
    <link rel="stylesheet" href="/assets/css/ref-chaussures.css" />



</head>

<body class="body">
    <header>
        <img class="logo-sylvie" src="/assets/images/logo-cilvie.png" alt="logo" />
        <div class="header-title">
            <div class="neon-border messagedefilant">
                <h1> <span>*ma petite boutique en ligne*</span> </h1>
            </div>
            <div class="like-button">
                <span class="thumb-up">&#128077;</span> Like
            </div>
        </div>
    </header>
    <div class="block-container">
        <aside class="aside">
            <nav>
                <ul>
                    <li><a href="/"><img src="/assets/images/acceuil.png"></a>Acceuil</li>
                    <li><a href="presentation"><img src="/assets/images/apropo.png"></a>N/A</li>
                    <li><a href="contact"><img src="/assets/images/contact.png"></a></li></a>Contact</li>
                    <li><a href="videos-live"><img src="/assets/images/les-lives.png"></a></li></a>les-lives</li>
                    <li><a href="https://www.facebook.com/groups/642571988082126"><img src="/assets/images/davdevep51.png"></a>devweb</li>
                    <li><a href="https://www.facebook.com/groups/850906159520243"><img src="/assets/images/logo-facebook.png"></a>FCB</li>
                    <li><a href="https://www.instagram.com/stylvie02/"><img src="/assets/images/astagram.png"></a>PG/IG</li>
                </ul>
            </nav>
        </aside>
        <div id="mySidenav" class="sidenav">
            <a id="closeBtn" href="#" class="close">&times;</a>
            <ul>
                <li><a href="/"><img src="/assets/images/acceuil.png"></a>Accueil</li>
                <li><a href="presentation"><img src="/assets/images/apropo.png"></a>N/A</li>
                <li><a href="contact"><img src="/assets/images/contact.png"></a>Contact</li>
                <li><a href="https://www.facebook.com/groups/642571988082126"><img src="/assets/images/davdevep51.png"></a>devweb</li>
                <li><a href="https://www.facebook.com/groups/850906159520243"><img src="/assets/images/logo-facebook.png"></a>FCB</li>
                <li><a href="videos-live"><img src="/assets/images/les-lives.png"></a>les-lives</li>
            </ul>
        </div>
        
        <a href="#" id="openBtn" class="button-nav">
            <span class="burger-icon">
                <img src="/assets/images/logo-burger.png" alt="">
            </span>
        </a>
        </div>

      
        <main>
            <img class="photonavbar" src="/assets/images/navbar.png" alt="photo navbar">
            <div class="grid">
                <div class="div-ref-chaussures">
                    <img class="ref-chausssures" src="/assets/les-chaussures/basket.png" alt="ref-les-chaussures" />
                    <div class="ttes-les-pastilles">
                        <div class="pastille vert"></div>
                        <div class="pastille rouge"></div>
                        <div class="pastille jaune"></div>
                        <div class="pastille bleu"></div>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantité:</label>
                        <input type="number" id="quantite" name="quantite" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="taille">taille:</label>
                        <select id="produit" name="produit" required>
                            <option value="Produit A">M</option>
                            <option value="Produit B">XL</option>
                            <option value="Produit C">XXL</option>
                        </select>
                    </div>
                    <p>Réff:03</p>
                    <button type="submit">Soumettre la Commande</button>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <p>&copy 2024 Wild code school<br>made 💓Davdevep51</p>
    </footer>
    <script src="/assets/js/navbar.js"></script>
</body>

</html>