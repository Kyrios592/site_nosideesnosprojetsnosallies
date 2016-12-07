<header>
    <div class="container">
        <div class="row">
            <img src="images/logo.jpg" />
        </div>
        <div class="row">
            <p><em>AVEC L'APPUI DE NOTRE SYSTEME ET LE CONCOURS DE NOS ALLIES ...</em></p>
        </div>
        <div class="row">
            <nav id="myNavbar" class="navbar navbar-default " role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".headerNavbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse headerNavbar">
                        <ul class="nav navbar-nav">
                            <li<?php echo((!isset($_GET['section']) || $_GET['section'] == 'index') ? ' class="active"' : ''); ?>><a href="index.php">Accueil</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'entreprise') ? ' class="active"' : ''); ?>><a href="index.php?section=entreprise">Entreprise</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'avantages') ? ' class="active"' : ''); ?>><a href="index.php?section=avantages">Avantages</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'international') ? ' class="active"' : ''); ?>><a href="index.php?section=international">International</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'projets') ? ' class="active"' : ''); ?>><a href="index.php?section=projets">Projets</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'allies') ? ' class="active"' : ''); ?>><a href="index.php?section=allies">Alliés</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'media') ? ' class="active"' : ''); ?>><a href="index.php?section=media">Média</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'recrutement') ? ' class="active"' : ''); ?>><a href="index.php?section=recrutement">Recrutement</a></li>
                            <li<?php echo((isset($_GET['section']) && $_GET['section'] == 'developpement') ? ' class="active"' : ''); ?>><a href="index.php?section=developpement">Développement</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
