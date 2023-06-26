<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <input multiple type="file" name="certificates[]">        
        <button>Submit</button>
    </form>
</body>

</html>