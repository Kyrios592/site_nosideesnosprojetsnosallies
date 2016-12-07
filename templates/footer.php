<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 yellow-footer" style="color: #fefecb">.</div>
        </div>
        <div class="row">
            <nav id="myFooterNavbar" class="navbar navbar-default blue-footer" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <span class="navbar-brand">Système, réseaux, méthodes, enseignes pour mieux nous connecter ...</span>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?section=plan">Plan</a></li>
                        <li><a href="index.php?section=concept">Concept</a></li>
                        <li><a href="index.php?section=contact">Contact</a></li>
                        <li><a href="index.php?section=mentions">Mentions Légales</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 yellow-footer">
                Nos idées sont constructives et nous les transformons en actions pour mieux les mettre en œuvre …<br/>
                <a href="http://www.vdotheque.fr">Espace Relais</a> (Val d'Oise)<br />
                Nos partenaires ( logos : liens sur les sites, en incluant d’autres possibilités … ) Philippe VOLSFELTS tous droits réservés © 2016<br/>
                <?php if (isset($_SESSION['id'])) { ?>
                    <a href="index.php?section=admin">Administration du recrutement</a>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a href="index.php?section=<?php echo (!isset($_GET['section']) ? 'index' : $_GET['section']); ?>">Haut de page</a>
            </div>
        </div>
    </div>
</footer>
