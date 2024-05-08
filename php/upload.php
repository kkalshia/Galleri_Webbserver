<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "../index.php">
        <button type = "button">File Uploader</button>
    </a>

        <!-- $target_dir = "../galleryImages";
        $images = glob($target_dir."*.png");
        $images = glob($target_dir."*.jpg");
        $images = glob($target_dir."*.jpeg");
        $images = glob($target_dir."*.gif");
        foreach($images as $image) {
        echo '<br><br><img src="'.$image.'" /><br /><br><br>';
        } -->
     
    <?php 
        $directory = "../galleryImages";
        $images = glob($directory . "/*.jpg");

        foreach($images as $image)
        {
            echo "<img src=".$image.">";
        }

        $directory = "../galleryImages";
        $images = glob($directory . "/*.jpeg");

        foreach($images as $image)
        {
            echo "<img src=".$image.">";
        }

        $directory = "../galleryImages";
        $images = glob($directory . "/*.png");

        foreach($images as $image)
        {
            echo "<img src=".$image.">";
        }

        $directory = "../galleryImages";
        $images = glob($directory . "/*.gif");

        foreach($images as $image)
        {
            echo "<img src=".$image.">";
        }
    ?>
</body>
</html>