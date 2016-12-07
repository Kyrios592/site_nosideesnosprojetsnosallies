<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 11/29/16
** Time: 3:15 PM
*/
include_once('php_scripts/db_query.php');
$j = 0;
$recruts = get_recruts();
$total = count($recruts);
?>
<div class="container">
    <?php subHeader("images/recrutement.jpg", "RECRUTEMENT")?>   
    <div class="row blue-container" style="margin-bottom: 5px">
        <div class="col-xs-12">
            <h3>8 annonces de recrutement en ligne</h3>
        </div>
    </div>
    <div class="row carousel-container disappear">
        <div id="recrutment-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php for ($i = 0 ; $i < $total ; $i++) {
                    if ($i == 0) {
                        echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" class="active"></li>';
                    } else {
                        echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
                    }
                }
                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                $i = 0;
                foreach ($recruts as $recrut) {
                    ?>
                    <div class="item<?php echo ($i == 0 ? ' active' : ''); ?>">
                        <div class="carousel-text-item">
                            <div class="carousel-text-item-content">
                                <h3><?php echo $recrut['titre']; ?></h3>
                                <h4>Description de l'entreprise :</h4><br />
                                <?php echo $recrut['entreprise'] ?><br /><br />
                                <h4>Missions :</h4><br />
                                <?php echo $recrut['missions'] ?><br /><br />
                                <h4>Compétences :</h4><br />
                                <?php echo $recrut['competences'] ?><br /><br />
                                <h4>Rémunération :</h4><br/>
                                <?php echo $recrut['remuneration'] ?><br /><br />
                                <h4>Contact :</h4><br />
                                <?php echo $recrut['contact'] ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
            <a class="left carousel-control" href="#recrutment-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#recrutment-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row accordion-container">
        <div class="panel-group" id="recrut-accordion">
            <?php foreach($recruts as $recrut) { ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php echo $recrut['id']; ?>">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                               data-parent="#recrut-accordion"
                               href="#collapse<?php echo $recrut['id']; ?>"
                                <?php echo ($i == 0 ? 'aria-expanded="true"' : 'aria-expanded="false"') ?>
                               aria-controls="collapse<?php echo $recrut['id']; ?>">
                                <?php echo $recrut['titre']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo $recrut['id']; ?>"
                         class="panel-collapse collapse<?php echo ($i == 0 ? ' in' : ''); ?>"
                         role="tabpanel"
                         aria-labelledby="heading<?php echo $recrut['id']; ?>">
                        <div class="panel-body">
                            <h4>Description de l'entreprise :</h4><br />
                            <?php echo $recrut['entreprise'] ?><br /><br />
                            <h4>Missions :</h4><br />
                            <?php echo $recrut['missions'] ?><br /><br />
                            <h4>Compétences :</h4><br />
                            <?php echo $recrut['competences'] ?><br /><br />
                            <h4>Rémunération :</h4><br/>
                            <?php echo $recrut['remuneration'] ?><br /><br />
                            <h4>Contact :</h4><br />
                            <?php echo $recrut['contact'] ?>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
    </div>
</div>
