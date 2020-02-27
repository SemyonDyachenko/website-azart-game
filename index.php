<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рулетка</title>
    <script src="https://kit.fontawesome.com/82dfa1c121.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="scripts/script.js"></script>
</head>
<body>
    <?php require 'header.php'; ?>



<script> 

function changeTheme()
{
    let el = document.getElementsByTagName("body");
    if(el.style.background == "#ffffff"){
        el.style.background == "radial-gradient(circle, #1D294E, #131C34, #0B0F1D)";
    }
    if(el.style.background == "radial-gradient(circle, #1D294E, #131C34, #0B0F1D)")
    {
        el.style.background = "#ffffff";
    }
}


</script>


</body>
</html>