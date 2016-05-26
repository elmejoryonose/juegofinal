<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 

$uno=rand(0,99);
$dos=rand(0,99);
$operacion=rand(1,2);

if($operacion==1){
	$tipooperacion="+";
	$resultado=$uno+$dos;
}else{
	$tipooperacion="-";
	$resultado=$uno-$dos;
}

?>

<label><h2><?php echo $uno; ?>&nbsp;&nbsp;<?php echo $tipooperacion; ?>&nbsp;&nbsp;<?php echo $dos; ?></h2></label><br />
<?php $botoncorrecto=rand(1,3);

switch ($botoncorrecto) {
    case 1: ?>
    <input type="button" value="<?php echo $resultado; ?>" onclick="alert('Respuesta Correcta');" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo rand(0,200); ?>" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo rand(0,200); ?>" />       
       <?php break;
    case 2: ?>
        
    <input type="button" value="<?php echo rand(0,200); ?>" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo $resultado; ?>" onclick="alert('Respuesta Correcta');" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo rand(0,200); ?>" />
<?php        break;
    case 3: ?>
       <input type="button" value="<?php echo rand(0,200); ?>" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo rand(0,200); ?>" />&nbsp;&nbsp;&nbsp;
    <input type="button" value="<?php echo $resultado; ?>" onclick="alert('Respuesta Correcta');" /> 
<?php        break;
}


?>

</body>
</html>