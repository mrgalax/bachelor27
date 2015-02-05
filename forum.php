<?php

$action = ($_REQUEST['action']?$_REQUEST['action']:NULL);

function secure($input) {
    global $link;
    return strip_tags(mysqli_escape_string($link,$input));
}

require_once('config/config.php');
require_once('classes/Login.php');

$login = new Login();

if ($login->isUserLoggedIn() == true) {
    switch ($action) {


        case "addPost":
        if (empty($_SESSION['user_name']) || ($_SESSION['user_logged_in'] == 0)) {
            die("not logged in");
        }
        $postDate = date("Y-m-d H:i:s");
        $postTitle = ($_REQUEST['postTitle']?secure($_REQUEST['postTitle']):'N/A');
        $postText = ($_REQUEST['postText']?preg_replace("/\r\n|\r|\n/",'<br/>',secure($_REQUEST['postText'])):'N/A');
        $postIP = $_SERVER['REMOTE_ADDR'];
        $q = "INSERT INTO `forum` (`from`, `date`, `title`, `text`, `ip`) VALUES ('".secure($login->getUsername())."', '$postDate', '".secure($postTitle)."', '".secure($postText)."', '$postIP')";
        $link->query($q);
        break;


    }

    include('views/_header.php');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <!-- Services Section -->
    <section id="services" class="bg-light-gray">
        <div class="container">       
           <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Gæsterbog</h1>
                        <form method="POST">
                            <input type="hidden" name="action" value="addPost">
                            <b>Title</b><br>
                            <input type="text" id="postTitle" class="form-control" size="40" name="postTitle"><br>
                            <b>Message</b><br>
                            <textarea id="postText" class="form-control" name="postText"  cols="50" rows="10"></textarea>
                            <br>
                            <input type="submit" class="btn btn-md btn-success" alt="Submit Post" value="Submit Post">
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $q = "SELECT * FROM forum";
                        $r = $link->query($q);
                        while ($data = $r->fetch_assoc()) {
                            ?>
                            <div class="panel panel-success">
                              <div class="panel-heading">
                              <h4 class="panel-title"><?=$data['title']?></h4>
                            </div>
                            <div class="panel-body">
                                <?=$data['text']?>
                            </div>
                            <div class="panel-footer"><b>Posted By:</b> <?=$data['from']?> <i><?=$data['date']?></i></div>
                        </div>


                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>




<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<?php

} else {
    ?>



    <meta http-equiv="refresh" content="3; url=index.php">
    <h1> Du skall være logged ind! </h1>




    <?php
}

include('views/_footer.php');
?>





