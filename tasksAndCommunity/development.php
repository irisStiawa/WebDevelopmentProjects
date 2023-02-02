<?php
    session_start();

    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    if(isset($_POST['linkTitle'])){
        $upload_folder = 'img/userIcons/';
        $file_path = basename($_FILES['inputLinkPicture']['name']);
        $filetype = substr($file_path, strrpos($file_path, '.'));
        $imgName = strval(time()).strval(rand(100,9999)).$filetype;
    
        $upload_path = $upload_folder.$imgName;

        
        if(move_uploaded_file($_FILES['inputLinkPicture']['tmp_name'], $upload_path)){
            
            $sqlAddLink = "INSERT INTO links (userID, linkTitle, link, linkpicture) VALUES ($_SESSION[id], '$_POST[linkTitle]', '$_POST[link]', '$upload_path')";

            $stmtAddLink=$pdo->prepare($sqlAddLink);
            $stmtAddLink->execute();

            if(!$stmtAddLink){
                print_r($pdo->errorinfo());
            } 

        } else {
            echo 'Error: File loading';
        }
    }

    if(isset($_POST['uploadFile'])){
        $upload_folder = 'files/';
        $file_path = basename($_FILES['inputFileUpload']['name']);
        $filetype = substr($file_path, strrpos($file_path, '.')+1);
        $imgName = strval(time()).strval(rand(100,9999)).'.'.$filetype;
    
        $upload_path = $upload_folder.$imgName;

        
        if(move_uploaded_file($_FILES['inputFileUpload']['tmp_name'], $upload_path)){

            $sqlAddFile = "INSERT INTO files (userID, filenames, category, datatyp, community, datapath) VALUES ($_SESSION[id], '$_POST[filename]', '$_POST[category]', '$filetype', '$_POST[toCommunity]', '$upload_path')";

            $stmtAddFile=$pdo->prepare($sqlAddFile);
            $stmtAddFile->execute();

            if(!$stmtAddFile){
                print_r($pdo->errorinfo());
            } 

        } else {
            echo 'Error: File loading';
        }
    
    }
    $sqlgetLink = "SELECT * FROM links WHERE userID = $_SESSION[id]";

    $stmtgetLink=$pdo->prepare($sqlgetLink);
    $stmtgetLink->execute();

    $links = [];

    while($link = $stmtgetLink->fetch()){
        $links[] = $link;
    }

    $sqlgetFiles = "SELECT * FROM files WHERE userID = $_SESSION[id] OR community = 1";

    $stmtgetFiles=$pdo->prepare($sqlgetFiles);
    $stmtgetFiles->execute();

    $files = [];

    while($file = $stmtgetFiles->fetch()){
        $files[] = $file;
    }

    require_once('inc/head.inc.php');
    
?>

    <div id = "developmentMain" class = " container-fluid p-0 d-flex flex-column justify-content-center align-items-end"></div>

    <?php require_once('inc/nav.inc.php'); ?>

    <div id="developmentContainer" class="container-fluid d-flex p-3 ">
        <div id ="containerFiles" class = " mt-3 col col-lg-6 col-sm-10">
            <div class= 'd-flex flex-wrap justify-content-center mb-3 '>
                <button id="btnLoadFile" class= "btn mr-2 " type="submit">+ADD <span class ="blendOut">File</span></button>
                <form action="development.php" method="post">
                <?php
                    if(isset($_POST['private']) || !isset($_POST['private']) && !isset($_POST['public'])){
                        echo <<<EOT
                        <button id="private" name='private'  class=" btn mr-2 active"><i class="fas fa-list-ul mr-1"></i>private <span class ="blendOut">Files</span></button>
                        EOT;
                    } else {
                        echo <<<EOT
                        <button id="private" name='private' class=" btn mr-2"><i class="fas fa-list-ul mr-1"></i>private <span class ="blendOut">Files</span></button>
                        EOT;
                    } 
                    ?>
                </form>
                <form action="development.php" method="post">
                    <?php
                    if(isset($_POST['public'])){
                        echo <<<EOT
                        <button id="public" name='public' class=" active btn "><i class="fas fa-list-ul mr-1"></i>public <span class ="blendOut">Files</span></button>
                        EOT;
                    } else if (isset($_POST['private']) || !isset($_POST['private']) && !isset($_POST['public'])){
                        echo <<<EOT
                        <button id="public" name='public' class="btn "><i class="fas fa-list-ul mr-1"></i>public <span class ="blendOut">Files</span></button>
                        EOT;
                    }
                    ?>
                
                </form>
                <select id = "select" class="btn rounded ml-2" aria-label="Default select example">
                    <option value = "all" selected>All</option>
                    <option value="html">Html</option>
                    <option value="css">Css</option>
                    <option value="js">Javascript</option>
                    <option value="php">Php</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="frames">Frameworks</option>
                    <option value="notes">Notes</option>
                    <option value="other">Other</option>
                </select>
                    
            </div>
        
            <div id="uploadedFiles" class="rounded p-2">
                <?php                     
                    foreach($files as $createFile){
                        $typ = "";
                        switch($createFile->datatyp){
                            case 'doc':
                                $typ = 'word';
                                break;
                            case 'docx':
                                $typ = 'word';
                                break;
                            case 'xls': 
                                $typ = 'excel';
                                break;
                            case'xlsx': 
                                $typ = 'excel';
                                break;
                            case 'pdf': 
                                $typ = 'pdf';
                                break;
                            case 'zip': 
                                $typ = 'zip';
                                break;
                            case 'ppt': 
                                $typ = 'powerpoint';
                                break;
                            case 'pptx': 
                                $typ = 'powerpoint';
                                break;
                            case 'htm': 
                                $typ = 'html';
                                break;
                            case 'html': 
                                $typ = 'html';
                                break;
                            case 'css': 
                                $typ = 'css';
                                break;
                            case 'js': 
                                $typ = 'js';
                                break;
                            case 'php': 
                                $typ = 'php';
                                break;
                        }
                        
                        if(!isset($_POST['public'])|| isset($_POST['private'])){

                            if($createFile->community == 0){
                            
                                echo <<<EOT
                                <div category= "$createFile->category" class="fileContainer d-flex justify-content-between align-items-center">
                                    <div class= "d-flex align-items-center"> 
                                        <div class="divFileLogo py-1">
                                            <img src="img/projectImages/$typ.png" alt="logo" class = "fileLogo">
                                        </div>
                                    </div>
                                    <p class="m-0 fileTitle">$createFile->filenames</p>
                                    <div>
                                        <a href="$createFile->datapath" class="text-dark" download><i id = "$createFile->fileID" title= "Download file" datatyp="$createFile->datatyp" class="fas fa-download"></i></a>
                                        <i title= 'Delete file' id = '$createFile->fileID' class='delete fa fa-trash  px-2'></i>
                                    </div>
                                </div>
                                EOT;
                            }
                        } else {
                            if($createFile->community == 1){
                            
                                echo <<<EOT
                                <div category= "$createFile->category" class="fileContainer d-flex justify-content-between align-items-center">
                                    <div class= "d-flex align-items-center"> 
                                        <div class="divFileLogo py-1">
                                            <img src="img/projectImages/$typ.png" alt="logo" class = "fileLogo">
                                        </div>
                                    </div>
                                    <p class="m-0 fileTitle">$createFile->filenames</p>
                                    <div>
                                    <a href="$createFile->datapath" class="text-dark" download><i id = "$createFile->fileID" title= "Download file" datatyp="$createFile->datatyp" class="fas fa-download px-2"></i></a>
                                    </div>
                                </div>
                                EOT;
                            }
                        }
                    }
                ?>
                
            </div>


        </div>
        <div id="devLinks" class = " rounded d-flex col col-lg-6 col-sm-10 p-3" title="Add new Link">
            <a class= "linkAddLinks m-3" target="_blank" class= "p-2">
                <div id="btnNewLink" class="d-flex justify-content-center align-items-center"><i class="fas fa-link"></i>
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://www.google.com/" title="Google" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/google.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://www.w3schools.com/" title="W3 Schools" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/w3schools.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://wiki.selfhtml.org/" title="Self HTML" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/selfhtml.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://www.php.net/docs.php" title="PHP Documentation" class= "p-2">
                <div class="userLink  d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/php.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "www. https://regex101.com/" title="Regular Expressions 101" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/regex101.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://mkaz.blog/code/python-string-format-cookbook/" title="Python 'f' Strings" >
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/mkaz.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://docs.python.org/3/contents.html" title="Python Documentation" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/python.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "www. https://www.sqlitetutorial.net/sqlite-java/" title="SQLite Tutorial" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/sqlite.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://nodejs.org/en/docs/" title="Node.js Documentation" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/node.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://color.adobe.com/de/create/color-wheel" title="Adobe Color" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/adobeColor2.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://userinterfacedesign.ch/" title="User Interface Design" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/userinterfacedesign2.png" alt="logo">
                    </div>
            </a>
            <a class= "linkAddLinks m-3" target="_blank" href= "https://css-tricks.com/" title="CSS Tricks" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="img/projectImages/csstrick.png" alt="logo">
                    </div>
            </a>

            <?php 
            
            foreach($links as $link) {
                echo <<<EOT
                <a class= "linkAddLinks m-3" target="_blank" href= "$link->link" title="$link->linktitle" class= "p-2">
                <div class="userLink d-flex justify-content-center align-items-center" >
                    <img class="logoLink" src="$link->linkpicture" alt="logo">
                </div>
                </a>
                EOT;
            }
            
            ?>
        </div>
        

        <!-- <div class ="deleteLink">
                        <i class=" p-1 fas fa-minus" linkID = "$link->linkID"></i>
                    </div> -->



    </div>

    <?php 
    require_once('inc/addlink.inc.php');
    require_once('inc/addfiles.inc.php');  
    require_once('inc/footer.inc.php');?>
    <script src="script/development.js"></script>
    <?php require_once('inc/foot.inc.php');?>