<?php
@session_start();
@ob_start();
define("mDATA","data/");
define("mPAGE","include/");
// define("mCLASS","class/");
// include_once(mDATA."connection.php");
// define("SITE",$siteURL);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--ICON ENTEGRATION-->
</head>

<body>
<?php
  include_once(mDATA."header.php");
  include_once(mPAGE."home.php");  
  // if($_GET && !empty($_GET["page"])){
  //   $page=$_GET["page"].".php";
  //   if(file_exists(mPAGE.$page)){
  //     include_once(mPAGE.$page);

  //   }else{
  //     include_once(mPAGE."home.php");  
  //   }

  // }else{
  //   include_once(mPAGE."home.php");    
  // }


  include_once(mDATA."footer.php");
 ?>
    

</body>

</html>