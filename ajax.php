<!-- <?php 
// if(isset($_GET['show'])){
//     include $_GET['show'];
// }
?>

<input type="submit" onclick="window.location='ajax.php?show=include.php'" > -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
function load(){
    if(window.XMLHttpRequest){
        xmlthttp=new XMLHttpRequest();
    }else{
        xmlhttp=new ActionXObject('Microsoft.XMLHTTP');
    }
    
}
</script>

    <input type="submit" onclick="load();" >
    <div id="div"></div>
</body>
</html>