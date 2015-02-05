<?php

require_once('config/config.php');
require_once('classes/Login.php');

session_start();

$login = new Login();

include('views/_header.php');

?>

<!DOCTYPE html>
    <html lang="en">
    <!-- Services Section -->
    <section id="services" class="bg-light-gray">
        <div class="container">
           <div class="row">
            <div class="col-lg-12">
                <h1>Highscore</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $q = "SELECT MAX(score) AS HighestPrice FROM score;";
                        $r = $link->query($q);
                        while ($score = $r->fetch_assoc()) {

                            ?>
                            <div class="panel panel-success">

                                <div class="panel-footer"><b>rekod:</b> <?=$score['HighestPrice']?>    </div>
                            </div>


                        <?php
                        }
                        ?>

                    </div>
                    <div class="col-lg-6">
                        <?php
                        $q = "SELECT users.user_name, score.score, score.map FROM score JOIN users ON score.user_id = users.user_id";
                        $r = $link->query($q);
                        while ($score = $r->fetch_assoc()) {
                            ?>
                            <div class="panel panel-success">

                                <div class="panel-footer"><b>rekord sat af:</b> <?=$score['user_name']?> <i> <b>bene spillet:</b> <?=$score['map']?></i>  <i> <b>highscore er:</b> <?=$score['score']?></i>  </div>
                            </div>


                        <?php
                        }
                        ?>
                    </div>


                    </div>

                </div>
            </div>
          </div>
       </div>
</section>
