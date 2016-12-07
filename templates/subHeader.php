<?php
/*
** Created by PhpStorm.
** User: ferdin_k
** Date: 11/23/16
** Time: 5:33 PM
*/

function subHeader($img, $name)
{
    ?><div class="row">
        <div class="col-md-12">
            <h4><b><em>FAISONS AVANCER NOS IDEES ET NOS PROJETS AVEC NOS ALLIES ...</em></b></h4>
            <h5><b>BIENVENUE SUR NOS IDEES, NOS PROJETS, NOS ALLIES </b>- <?php echo $name; ?></h5>
        </div>
    </div>
    <div class="row vertical-align">
        <div class="col-md-4 text-center center-block">
            <img src="<?php echo $img; ?>" />
        </div>
        <div class="col-md-4 text-center disappear">
            <img src="images/15.jpg" />
        </div>
        <div class="col-md-4 text-center disappear">
            <div id="scrollContainer" onmouseover="copySpeed=pauseSpeed" onMouseout="copySpeed=speed">
                <div id="scroll" style="position: absolute; width: 98%;">
                    <p>
                        Faisons avancer nos idées, nos<br />
                        projets, nos alliés ... en nous<br />
                        démarquant et en innovant.<br />
                        Parlons-en ensemble.
                    </p>
                </div>
            </div>
            <p>Nos idées, nos projets, nos alliés ...</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>ENSEMBLE, FAISONS AVANCER NOS IDEES, NOS PROJETS, NOS ALLIES ...</h5>
        </div>
    </div><?php
}
