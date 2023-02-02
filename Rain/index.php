<head>
    <style>
        body{
            margin-top: -1px;
            margin-left: -1px;
            width: 100%;
        }
        table{
            width: 100%;
            padding-left: 18%;
            border-bottom: 0.2px black solid;
            border-top: 0.2px black solid;
        }
        table:hover{
            border-bottom: 0.2px dodgerblue solid;
            border-top: 0.2px dodgerblue solid;
            background-color: lightblue;
        }
        .img{
            margin-left: 10%;
            width: 2%;
        }
        .file{
            height: 50px;
            width: 50%;
            left: 18%;
            font-size: large;

        }
        .row{
            width: 100%;
            height: 50px;
        }
        .border-25 { border-color: rgba(0,0,0,0.25); }

        nav{
            width: 100%;
            height: 75px;
            background-color: darkgray;
            float: top;
            margin-bottom: -1px;
        }
        ul{
            margin-top: -1px;
            margin-left: -20px;
            width: 70%;
            display: flex;
            align-items: center;
            flex-direction: row;
            float: left;
            height: 100%;
        }
        li{
            padding-left: 10px;
            padding-right: 10px;
            width: auto;
            height: 100%;
            display: flex;
            justify-content: center;
            align-content: center;
        }
        a:hover{
            background-color: gray;
        }
        .center{
            display: flex;
            align-items: center;
            font-size: large;
        }
        .streepnav{
            height: 100%;
            width: 1px;
            background-color: black;
        }
        .aantal{
          margin-left: 90%;
          align-items: center;
          display: flex;
          justify-content: center;
          align-content: center;
        }
        .addbutton{
            float: right;
            right: 0;
            display: flex;
        }
        .addbutton img{
            width: 50px;
            height: 50px;
        }
        /* Dropdown Button */
        .dropbtn {
            padding: 16px;
            font-size: 16px;
            border: none;
            margin-right: 100px;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdownnav {
            position: relative;
            display: inline-block;
            float: right;
            margin-right: 10%;
            margin-top: 10px;

        }
        .dropdown {
            position: relative;
            display: inline-block;
            float: right;
            margin-right: 10%;

        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            top: 50px;
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;

        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}
        .dropdownnav:hover .dropdown-content {display: block;}

        /* Change the background color of the dropdown button when the dropdown content is shown */
        #overlay1 {
            visibility: hidden;
        }
        #overlay2 {
            visibility: hidden;
        }
        #overlay3 {
            visibility: hidden;
        }
        #overlay4 {
            visibility: hidden;
        }
        #overlay5 {
            visibility: hidden;
        }
        #overlay6 {
            visibility: hidden;
        }
        #overlay7 {
            visibility: hidden;
        }
        .overlay{
          display: flex;
          position: fixed;
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.5);
          z-index: 2;
          justify-content: center;
          align-items: center;
        }
        .inputoverlay {
            height: 250px;
            width: 25%;
            background-color:#29465b;
            clip-path: polygon(40px 0, 100% 0, 100% calc(100% - 40px), calc(100% - 40px) 100%, 0 100%, 0 40px);
        }
        .inputoverlayclone{
          height: 312.5px;
          width: 25%;
          background-color:#29465b;
          clip-path: polygon(40px 0, 100% 0, 100% calc(100% - 40px), calc(100% - 40px) 100%, 0 100%, 0 40px);
        }
        .overlayinput{
            justify-items: center;
            align-items: center;
            width: 80%;
            height: 35px;
            clip-path: polygon(15px 0, 100% 0, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%, 0 15px);
            background-color: #fff;
            border: 0;
            padding: 3px 10px;
        }
        .inputflex{
            display: flex;
            height: 50%;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        .inputflexclone{
          display: flex;
          height: 20%;
          width: 100%;
          justify-content: center;
          align-items: center;
        }
        .inputbuttonflex{
            height: 20%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inputclose{
            height: 10%;
            width: 95%;
            margin-top: 15px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .renametext{
            height: 10%;
            width: 100%;
            text-align: center;
            align-items: center;
        }
        .button-style{
          display: flex;
          background: none;
        	color: inherit;
        	border: none;
        	padding: 0;
        	font: inherit;
        	cursor: pointer;
        	outline: inherit;
          width: 100%;
          justify-content: flex-start;
          text-align: center;
        }
    </style>
    <script>
      function onfolder() {
          document.getElementById("overlay1").style.visibility = "visible";
      }
      function onfile() {
          document.getElementById("overlay2").style.visibility = "visible";
      }
      function onrename() {
          document.getElementById("overlay3").style.visibility = "visible";
      }
      function onupload() {
          document.getElementById("overlay4").style.visibility = "visible";
      }
      function onclone() {
          document.getElementById("overlay5").style.visibility = "visible";
      }
      function onpush() {
          document.getElementById("overlay6").style.visibility = "visible";
      }
      function onpushdots() {
          document.getElementById("overlay7").style.visibility = "visible";
      }
    </script>

</head>
<body>


<?php

//print_r($_POST);

if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
		$http = "https://";
	} else {
	$http = "http://";
}
                                                                                                            // nav gedeelte
$link = $http.$_SERVER['HTTP_HOST']."/";
$path = getcwd();
$os = php_uname('s');
if ($os == "Windows NT") {
  $path_win = str_replace('\\','/' ,"$path");
  $path_replace = preg_split("#/#", $path_win);
  $remove = "3";
} else{
  $path_replace = preg_split("#/#", $path);
  $remove = "4";
}
array($path_replace);
$path_count = count($path_replace) - 1;
$EXTENSION_ = array();
// bestanden gedeelte
if (!isset($Bestanden)) {
$Bestanden = scandir("./");
}
$aantal = count($Bestanden);
natsort($Bestanden);        // sorteren van bestanden
$bestand_aantal = array();
                                                                                                              //maken van nieuwe map met de index.php er in
if (!empty($_POST['addfolder'])) {
  $addfolder = str_replace(' ', '-', $_POST['addfolder']);
  if (strpos($addfolder, ".") == false) {
      if (strpos($addfolder, ",") == false){
          if (strpos($addfolder, "\\") == false){
              if (strpos($addfolder, "/") == false){
                  if (strpos($addfolder, "'") == false){
                      if (strpos($addfolder, '"') == false){
                          $dir = $addfolder;

                          $file_to_write = 'index.php';
                          $content_to_write = file_get_contents("index.php");

                          if (is_dir($dir) === false) {
                              mkdir($dir);
                          }
                          $file = fopen($dir . '/' . $file_to_write, "w");
                          fwrite($file, $content_to_write);
                          fclose($file);

                      }else {
                          echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                      }
                  }else {
                      echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                  }

              }else {
                  echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
              }
          }else {
              echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
          }
      }else {
          echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
      }
  }else {
      echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
  }
}

if (isset($_POST['addfm'])){
    $dir = $_POST['addfm'];

    $file_to_write = 'index.php';
    $content_to_write = file_get_contents("index.php");

    if (is_dir($dir) === false) {
        mkdir($dir);
    }
    $file = fopen($dir . '/' . $file_to_write, "w");
    fwrite($file, $content_to_write);
    fclose($file);
}


if (!empty($_POST['addfile'])) {
  $addfile = str_replace(' ', '-', $_POST['addfile']);
      //maken van file
  if (strpos($addfile, ".") == true && !empty($addfile)) {
          fopen($addfile, 'w');
          fclose($addfile);
  }elseif(strpos($addfile, ".") == false && !empty($addfile)) {
          echo  "To add a file it requires an extension";
  }
}

$addimg = $link."fileicons/plus.svg";
$addfileimg = $link."fileicons/addfile.svg";
$addfolderimg = $link."fileicons/addfolder.svg";
$adduploadimg = $link."fileicons/addupload.svg";
$gitcloneimg = $link."fileicons/gitclone.svg";
$gitpullimg = $link."fileicons/gitpull.svg";
$gitpushimg = $link."fileicons/gitpush.svg";
$settingimg = $link."fileicons/more.png";
$deleteimg = $link."fileicons/046-trash-can.svg";
$renameimg = $link."fileicons/pencil.svg";




?>
<div id="overlay1" class="overlay"><div class="inputoverlay">
        <form class="addfolder" action="" method="post">
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="inputflex">
                <input class="overlayinput" type="text" name="addfolder" value="" placeholder="Name folder"><br>
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type="submit" name="add" value="Add folder">
            </div>
        </form>
    </div></div>
<div id="overlay2" class="overlay"><div class="inputoverlay">
        <form class="addfile" action="" method="post">
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="inputflex">
                <input class="overlayinput" type="text" name="addfile" value="" placeholder="Name file"><br>
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type="submit" name="filebutton" value="Add file">
            </div>
        </form>
    </div></div>
<div id="overlay3" class="overlay"><div class="inputoverlay">
        <form class="rename" action="" method="post">
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="renametext"><?php echo $_POST['renameold']; ?></div>
            <div class="inputflex">
                <input style="display: none;" type="text" name="renameoldm" value="<?php echo $_POST['renameold']; ?>"><br>
                <input class="overlayinput" type="text" name="rename" value="" placeholder="New name"><br>
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type="submit" name="renamebutton" value="Rename">
            </div>
        </form>
    </div></div>
<div id="overlay4" class="overlay"><div class="inputoverlay">
        <form class="upload" method='post' action='' enctype='multipart/form-data'>
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="inputflex">
                <input class="overlayupload" type="file" name="file[]" id="file" multiple><br>
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type='submit' name='submit' value='Upload'>
            </div>
        </form>
    </div></div>
<div id="overlay5" class="overlay"><div class="inputoverlayclone">
        <form class="clone" action="" method="post">
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="inputflexclone">
                <input class="overlayinput" type="text" name="username" value="" placeholder="Username" value="">
            </div>
            <div class="inputflexclone">
                <input class="overlayinput" type="password" name="password" placeholder="Password" value="">
            </div>
            <div class="inputflexclone">
                <input class="overlayinput" type="url" name="git" value="<?php echo isset($_POST['git']) ? $_POST['git'] : '' ?>" placeholder="Git url">
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type="submit" name="clone" value="Git Clone">
            </div>
        </form>
    </div></div>
<div id="overlay6" class="overlay"><div class="inputoverlay">
        <form class="commit" action="" method="post">
            <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
            <div class="inputflex">
                <textarea class="overlayinput" rows="5" cols="50%" name="commit" placeholder="Commit Message"></textarea>
            </div>
            <div class="inputbuttonflex">
                <input class="overlayinputbutton" type="submit" name="pluspush" value="Push">
            </div>
        </form>
    </div></div>
    <div id="overlay7" class="overlay"><div class="inputoverlay">
            <form class="commit" action="" method="post">
                <div class="inputclose"><a href="index.php"><img style="width: 25px; height: 25px;" src="<?php echo $link.'fileicons/kruisje.svg'?>"></a></div>
                <div class="inputflex">
                    <input style="display: none;" type="text" name="pushbestand" value="<?php echo $_POST['dotspush']; ?>"><br>
                    <textarea class="overlayinput" rows="5" cols="50%" name="commit" placeholder="Commit Message"></textarea>
                </div>
                <div class="inputbuttonflex">
                    <input class="overlayinputbutton" type="submit" name="pluspush" value="Push">
                </div>
            </form>
        </div></div>
<?php
if (!empty($_POST['renameold'])){
    echo "<script type='text/javascript'> onrename(); </script>";
}
if (!empty($_POST['dotspush'])){
    echo "<script type='text/javascript'> onpushdots(); </script>";
}
 ?>


<nav>
    <ul>
      <a href="<?php echo $link; ?>">
          <li>
              <p class="center">Home</p>
          </li>
      </a>
      <?php
        for ($i=$remove; $i <= $path_count ; $i++) {
          echo "<li class='center'><div  class='streepnav'></div></li>";
          echo "<a href=$link";
          for ($x=$remove; $x <= $i ; $x++) {
            echo $path_replace["$x"]."/";
          }
          echo "><li><p class='center'>" . $path_replace["$i"] . "</p></li></a>";
        }
       ?>
     </ul>
    <a class='addbutton' href='#'>
        <div class='dropdownnav'>
            <div class='addbutton'> <img src=<?php echo $addimg; ?> alt=""> </div>
            <div class='dropdown-content'>
                <a href='#' onclick="onfile()"><img style='height: 25px; width: 25px;' src=<?php echo $addfileimg; ?>> Add file</a>
                <a href='#' onclick="onfolder()"><img style='height: 25px; width: 25px;' src=<?php echo $addfolderimg; ?>> Add folder</a>
                <a href='#' onclick="onupload()" ><img style='height: 25px; width: 25px;' src=<?php echo $adduploadimg; ?>> Upload file</a>
                <a href='#' onclick="onclone()" ><img style='height: 25px; width: 25px;' src=<?php echo $gitcloneimg; ?>> Clone</a>
                <form method="post"><a ><button name="pull" class='button-style'><img style='height: 25px; width: 25px;' src=<?php echo $gitpullimg; ?>> Pull</button></a></form>
                <a href='#' onclick="onpush()" ><img style='height: 25px; width: 25px;' src=<?php echo $gitpushimg; ?>> Push</a>

            </div>
        </div>
    </a>
</nav>
    <?php
    foreach($Bestanden as $bestand) {
      if (is_dir($bestand)) {
          if (isset($_GET['delete'])&&$bestand == $_GET['delete']) {
            if ($os == "Windows NT") {
              shell_exec('rd /s /q ' . $bestand);
            } else{
              shell_exec('rm -rf ' . $bestand);
            }
              continue;
          }
          if (isset($_POST['rename'])&&$bestand == $_POST['renameoldm']) {
              $replacerename = str_replace(' ', '-', $_POST['addfolder']);
              if (strpos($replacerename, ".") == false) {
                  if (strpos($replacerename, ",") == false){
                      if (strpos($replacerename, "\\") == false){
                          if (strpos($replacerename, "/") == false){
                              if (strpos($replacerename, "'") == false){
                                  if (strpos($replacerename, '"') == false){
                                    //rename($bestand, $replacerename);       // dit werkt niet met mappen...
                                      continue;

                                  }else {
                                      echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                                  }
                              }else {
                                  echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                              }

                          }else {
                              echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                          }
                      }else {
                          echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                      }
                  }else {
                      echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
                  }
              }else {
                  echo "de mappen mogen geen: . , \\ // '' ; : bevatten";
              }
          }

      } else {
        if (isset($_GET['delete'])&&$bestand == $_GET['delete']) {
            unlink($bestand);
            continue;
        }

        if (isset($_POST['rename'])&&$bestand == $_POST['renameoldm']) {
          if (strpos($_POST['rename'], ".") == true) {
            $rename = $_POST['rename'];
            rename($bestand, $rename);
              continue;
          }elseif(strpos($_POST['rename'], ".") == false){
                  echo  "To add a file it requires an extension";
          }

        }
      }
        if($bestand == "." || $bestand == ".." || $bestand == ".git" || $bestand == ".idea" || $bestand == "index.php" || $bestand == ".DS_Store" || $bestand == "fileicons") { // dit haat de bestantden er uit die we niet willen laten zien.
            // Don't use it or you die
        } else {
          if (is_dir($bestand)) {
            $img = $link."fileicons/addfolder.svg";
          } else {
            $extension = mime_content_type($bestand);
            $tempexplode = explode(".", "$bestand");
            $extensiondot = end($tempexplode);   // kijkt wat voor bestands type de bestannden hebben.
            if ($extension == "php") {                   // checkt welke bestands type welke svg moet krijgen.
              $img = $link."fileicons/php.svg";
            } elseif ($extension == "html") {
              $img = $link."fileicons/html.svg";
            } elseif ($extensiondot == "css" || $extension== "text/css") { //dot
              $img = $link."fileicons/css.svg";
            } elseif ($extension == "js") {
              $img = $link."fileicons/js.svg";
            } elseif ($extension == "json") {
              $img = $link."fileicons/json.svg";
            } elseif ($extension == "audio/mpeg") {
              $img = $link."fileicons/mp3.svg";
            } elseif ($extension == "video/mpeg") {
              $img = $link."fileicons/mp4.svg";
            } elseif ($extensiondot == "avi") { //dot
                $img = $link."fileicons/avi.svg";
            } elseif ($extension == "text/plain" || $extension == "txt" || $extension == "md") {
              $img = $link."fileicons/txt.svg";
            } elseif ($extension == "application/xml") {
              $img = $link."fileicons/xml.svg";
            } elseif ($extension == "application/x-msdownload") {
                $img = $link."fileicons/exe.svg";
            } elseif ($extensiondot == "iso") { //dot
                $img = $link."fileicons/iso.svg";
            } elseif ($extension == "image/png") {
                $img = $link."fileicons/png.svg";
            } elseif ($extension == "image/jpeg") {
                $img = $link."fileicons/jpg.svg";
            } elseif ($extension == "image/svg+xml") {
                $img = $link."fileicons/svg.svg";
            } elseif ($extension == "image/gif") {
                $img = $link."fileicons/gif.svg";
            } elseif ($extension == "image/vnd.adobe.photoshop") {
                $img = $link."fileicons/psd.svg";
            } elseif ($extension == "application/msword" || $extensiondot == "pages" || $extension == "application/vnd.oasis.opendocument.text" || $extensiondot == "xps") { //dot
                $img = $link."fileicons/doc.svg";
            } elseif ($extension == "application/rtf") {
                $img = $link."fileicons/rtf.svg";
            } elseif ($extension == "application/vnd.ms-powerpoint") {
                $img = $link."fileicons/ppt.svg";
            } elseif ($extensiondot == "pdf") { //dot
                $img = $link."fileicons/pdf.svg";
            } elseif ($extension == "application/zip" || $extension == "application/x-rar-compressed" || $extensiondot == "z7" || $extensiondot == "Z7") { //dot
                $img = $link."fileicons/zip.svg";
            }  else {
              $img = $link."fileicons/file.svg";    // Bestanden die niet hier boven staat of mappen word een file.svg getoont. we kunnen mappen namenlijk niet onderschein.
            }
          }
            // Dit laat alle bestanden zien
            echo "
<a href='$bestand'>
    <table class='border-25' >
        <tr class='row'>
            <td class='img'>
                <img height='28px' width='28px' src='$img'>
            </td>
            <td class='file'>
                <p>$bestand</p>
            </td>
            <td>
            <form id='$bestand' action='' method='post'>

            </form>
            <a href='#'>
            <div class='dropdown'>
                <div class='dropbtn'> <img style='height: 30px; width: 30px;' src=$settingimg> </div>
                    <div class='dropdown-content'>";
                    if (is_dir($bestand)) {
                      echo "<form method='post'><a><button class='button-style' type='submit' form=$bestand name='pullbestand' value=$bestand><img style='height: 25px; width: 25px;' src='$gitpullimg'>Pull</button></a></form>
                            <form method='post'><a><button class='button-style' type='submit' form=$bestand name='dotspush' value=$bestand><img style='height: 25px; width: 25px;' src='$gitpullimg'>Push</button></a></form>";
                    }

              echo "<a href='#' ><button class='button-style' type='submit' form=$bestand name='renameold' value=$bestand ><img style='height: 25px; width: 25px;' src=$renameimg> Rename </button></a>";
                    if (is_dir($bestand)){
                        echo "<form method='post'><a><button class='button-style' type='submit' form=$bestand name='addfm' value=$bestand><img style='height: 25px; width: 25px;' src='$gitpullimg'>Add FM</button></a></form>";
                    }
              echo "<a href='?delete=$bestand'>  <img style='height: 25px; width: 25px;' src=$deleteimg> Delete</a>
                    </div>
                </div>
                </a>
            </td>
        </tr>
    </table>
</a>
";
            array_push($bestand_aantal, "#");// dit telt de bestantden die latenzien worden
        }
    }


     ?>



     <p class="aantal">Aantal: <?php echo count($bestand_aantal); ?></p>



    <?php
    //Upload files
    if(isset($_POST['submit'])){

     // Count total files
     $countfiles = count($_FILES['file']['name']);

     // Looping all files
     for($i=0;$i<$countfiles;$i++){
      $filename = $_FILES['file']['name'][$i];

      // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'][$i],'./'.$filename);

     }
    }


    //git pull command
if (isset($_POST['pull'])) {
    if ($os == "Darwin") { // mac os big sur
        echo shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git pull");

    } else {
        shell_exec("git pull");
    }
}
if (isset($_POST['pluspush'])) {
    if ($os == "Darwin") { // mac os big sur
        shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git add .");
        shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git commit -m ". $_POST['commit']);
        shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git push");


    } else {
        shell_exec("git add .");
        shell_exec("git commit -m ". $_POST['commit']);
        shell_exec("git push");
    }
}

//Git clone command
if (isset($_POST['clone'])) {
    $gitlink = str_replace('http://', '', $_POST['git']);
    if (empty($_POST['username']) && empty($_POST['password'])) {
      if ($os == "Darwin") { // mac os big sur
        shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git clone clone " . $_POST['git']);
        $cloneurltest = $_POST['git'];
      } else {
        shell_exec("git clone " . $_POST['git']);
        $cloneurltest = $_POST['git'];
      }
    } else {
      if ($os == "Darwin") { // mac os big sur
        shell_exec("/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git clone " . "http://" . $_POST['username'] . ":" . $_POST['password'] . "@" . "$gitlink");
        $cloneurltest = "http://" . $_POST['username'] . ":" . $_POST['password'] . "@" . "$gitlink";
      } else {
        shell_exec("git clone " . "http://" . $_POST['username'] . ":" . $_POST['password'] . "@" . "$gitlink");
        $cloneurltest = "http://" . $_POST['username'] . ":" . $_POST['password'] . "@" . "$gitlink";
        }
    }
}

//Git more option in map
if (!empty($_POST["pullbestand"])) {
  $pullbestand = $_POST["pullbestand"];
  if ($os == "Darwin") { // mac os big sur
      shell_exec("cd " . $path ."/". $pullbestand ."/ && ". "/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git pull");
  } else {
      shell_exec("cd " . $path .'\\'. $pullbestand ."\\ && ". "git pull");
  }
}
if (!empty($_POST["pushbestand"])) {
  $pushbestand = $_POST["pushbestand"];
  echo $pushbestand;
  if ($os == "Darwin") { // mac os big sur
      $pushbestandcmd = shell_exec("cd " . $path ."/". $pushbestand ."/ && ". "/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git add . " . "&& " . "/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git commit -m ". $_POST['commit'] . "/Applications/Xcode.app/Contents/Developer/usr/libexec/git-core/git push");
  } else {
      shell_exec("cd " . $path .'\\'. $pushbestand ."\\ && ". "git add . " . "&& " . "git commit -m ". $_POST['commit'] . "git push" );
  }
}
echo $pushbestandcmd;
?>
</body>

<?php
// reset post and reload
if (!empty($_POST['addfile']) || !empty($_POST['addfolder'])) {
  unset($_POST);
  echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
if (!empty($_GET['delete'])) {
  unset($_GET);
  echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
if (!empty($_POST['rename']) || !empty($_POST['renameoldm'])) {
    unset($_POST);
    echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
if (!empty($_POST['submit'])) {
    unset($_POST);
    echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
if (isset($_POST['pull'])) {
    unset($_POST);
    echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
 if (isset($_POST['clone'])) {
    unset($_POST);
    echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}
 ?>
<?php
//Debug

//echo "<br>". print_r($path_replace) . "<br>" . print_r($path_count) . "<br>";

//echo $cloneurltest;
 ?>
