<!DOCTYPE html>
<!-- bron:
        https://developer.mozilla.org/en-US/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images
-->
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Voorbeeld responsive plaatje</title>
    <link
        rel="shortcut icon"
        type="image/png"
        href="favicon.png"
    />
    
</head>

<body>
    <h2>Dieren zeggen elkaar dag</h2>

    <p>Alleen php: </p>

<?php
    $foto = "eendenzoen"  ;
    echo "
            <img srcset= '" . $foto . "_480w.jpg 480w,"
                            . $foto . "_800w.jpg 800w'
                 sizes='(max-width: 600px) 480px,
                        800px'
                 src= '" . $foto . "_800w.jpg'
                 alt='zoenende eenden'>
         ";
?>

<?php $foto="giraffenzoen" 
?>


    <p class="extra-ruimte-na-image">Html met php in de tag: </p>

    <img srcset='<?php echo $foto?>_480w.jpg 480w,
                 <?php echo $foto?>_800w.jpg 800w'
         sizes='(max-width: 600px) 480px,
                800px'
         src='<?php echo $foto?>_800w.jpg'
              alt='zoenende giraffen'>

</body>

<html>