<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/_header.php' ?>
    <title>Dr. Akhilesh Das Gupta Institute of Technology & Management</title>
</head>

<body class="bg-secondary">
    <?php include 'partials/_navbar.php' ?>
    <div class="container text-center">
        <div id="gallery" class="d-flex flex-wrap">
            
        </div>
    </div>
    <?php include 'partials/_footer.php' ?>
</body>
<script>
    let imgContainer = document.getElementById('gallery');

    for (let index = 1; index < 8; index++) {
           imgContainer.innerHTML +=`<div class="m-2"><img src="img/gallery/${index}.jpg" alt=""></div>`;        
    }
</script>

</html>