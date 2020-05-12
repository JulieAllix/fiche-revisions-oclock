<?php require 'partials/head.php'; ?>

<body>

<?php // require 'partials/logo.php'; ?>
<?php require 'partials/toggleSwitch.php'; ?>
<script src="../js/toggleSwitch.js"></script>

    <header>

    <h1>Fiche de révisions : Tutoriels - JavaScript</h1>
    <?php require 'partials/main-nav-bar.php'; ?>

    </header>

    <main id="wrapper">

        <section id="first-section">

            <article class="topic">

                <h2>Smooth Page transitions</h2>

                    <h3>Installations</h3>

                        <ul>
                            <li>Vériier que Node est installé<em class="gras"></em></li>
                            <li><em class="gras">npm init</em> (presser enter à chaque question)</li>
                            <li><em class="gras">npm install -g parcel-bundler</em></li>
                            <li><em class="gras">parcel index.html</em> va créer un serveur</li>
                            <li>Les packages qui vont servir à faire les animations sont :<em class="gras"></em></li>
                            <li><em class="gras">npm install gsap</em></li>
                            <li><em class="gras">npm install @dogstudio/highway</em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

                    <h3>GSAP</h3>

                        <ul>
                            <li><em class="gras">TimelineMax</em> permet d'enchaîner différentes animations ensemble (v2.1.3 de GSAP)</li>
                            <li><em class="gras">< script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></ script></em></li>
                            <li><em class="gras">TweenMax</em> gère les animations</li>
                            <li><em class="gras">< script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous">< /script></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>

            </article> 


        
        </section>

        <section id="second-section">

            <article class="topic">

                <h2>Tutos Figma</h2>

                    <h3></h3>

                        <ul>
                            <li>Format HD pour le cadre: <em class="gras">1920 x 1080</em></li>
                        </ul>

                   
                    <h3></h3>
                        <p></p>
                        <p></p>
                    
            </article>

            <article class="topic">

                <h2></h2>

                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
                        </ul>
                    
                    <h3></h3>

                        <ul>
                            <li><em class="gras"></em></li>
                            <li><em class="gras"></em></li>
                        </ul>
    
            </article>

        </section>

    </main>

<?php require 'partials/footer.php'; ?>