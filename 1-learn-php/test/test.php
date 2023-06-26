<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="tserver.php" method="post" enctype="multipart/form-data" class=" p-3 d-flex flex-column gap-3">
        <input type="file" class="form-control" name="photo" accept="image/jpeg,image/png" >
        <button class="btn btn-primary">Submit</button>
    </form>
</body>
</html>