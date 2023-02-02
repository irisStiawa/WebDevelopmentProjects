<?php
session_start();
require_once("inc/head.inc.php");



?>

<div id= "page">
    <?php require_once("inc/header.inc.php");
    ?>


    <?php require_once("inc/nav.inc.php");?>

    <aside id ="contentArea">
        <?php
        // print(strcasecmp($_GET["c"], "themes"));
        if(isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "themes") == 0){
            
            require_once("content/themes.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "html") == 0){
            require_once("content/html.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "internet") == 0){
            require_once("content/internet.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "gimp") == 0){
            require_once("content/gimp.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "mathematic") == 0){
            require_once("content/mathematic.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "webdesign") == 0){
            require_once("content/webdesign.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "communication") == 0){
            require_once("content/communication.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "css") == 0){
            require_once("content/css.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "illustrator") == 0){
            require_once("content/illustrator.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "javascript") == 0){
            require_once("content/javascript.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "interface") == 0){
            require_once("content/interface.php");
        }
        else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "process") == 0){
            require_once("content/process.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "hardware") == 0){
            require_once("content/hardware.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "divers") == 0){
            require_once("content/divers.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "php") == 0){
            require_once("content/php.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "network") == 0){
            require_once("content/network.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "databases") == 0){
            require_once("content/databases.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "software") == 0){
            require_once("content/softwaretesting.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "python") == 0){
            require_once("content/python.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "versioning") == 0){
            require_once("content/versioning.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "uml") == 0){
            require_once("content/uml.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "server") == 0){
            require_once("content/server.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "java") == 0){
            require_once("content/java.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "quality") == 0){
            require_once("content/quality.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "xml") == 0){
            require_once("content/xml.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "node") == 0){
            require_once("content/node.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "app") == 0){
            require_once("content/app.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "ssh") == 0){
            require_once("content/ssh.php");
        } else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "linux") == 0){
            require_once("content/linux.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "flask") == 0){
            require_once("content/flask.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "algorithms") == 0){
            require_once("content/algorithms.php");
        }else if (isset($_GET["c"]) && strcmp(strtolower($_GET["c"]), "electronic") == 0){
            require_once("content/electronic.php");
        }
        ?>




    </aside>
    <div id="asideBtn" class="flex-column">
        <a href ="dictonary.php?d=<?php print_r($_GET["c"])?>"><button id ="btnDictonary" class="m1">Code Dictonary</button><a>
        <a href ="#page"><button id ="btnTop" class="m1"> Top of Page</button><a>
    </div>
</div>

<?php require_once("inc/foot.inc.php");?>