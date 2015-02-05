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
                <h1>Instruktion til spillet 1864</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <p>Spillet 1864 er et klassisk tårn forsvars spil, hvor det handler om at eleminere fjindes soldater inder de når frem til slottet. De fjændtlige soldater har kun 1 vej at følge, og derfor skal du være stratetisk når du udvælger områder for dine tårne.</p>
                        <br>
                        <p>Der er 3 forskellige tårne at vælge imellem.</p>
                        <ul>
                            <li>Arechers, Koster 15 guld, giver mindst i skade.</li>
                            <li>Fireballs: Koster 25 guld, giver næstmest i skade.</li>
                            <li>Energy: koster 32 guld, giver mest i skade.</li>
                        </ul>
                        <p>for at få højest score, skal du slutte med mest guld. Dette opnår du ved at klare banen med mindst og billigst tårne. Hver bane har sin egen score og du modtager 1 guld i sikkundet.</p>
                    </div>

                    <div class="col-lg-6">
                        <img src="game-media/levelprops.png" alt="" style="width:256px;height:256px">
                        <img src="game-media/buildmenu.png" alt="" style="width:192px;height:192px">
                        <img src="game-media/guld_wawe_hp.png" alt="" style="width:259px;height:99px">
                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>
</section>
