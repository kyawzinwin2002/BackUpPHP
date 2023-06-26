<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        max-width: 100vw;
        max-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class=" p-3 d-flex mother flex-column gap-3 justify-content-center">
        <h1 class=" mx-auto text-primary
         ">File Creator</h1>

        <form action="server.php" method="post" class=" d-flex flex-column gap-4">
            <div class="">
                <label for="" class="form-label">File Name</label>
                <input name="fileName" type="text" class="form-control" required>
            </div>
            <div class="">
                <label for="" class="form-label">File Extension</label>
                <select required class=" form-select" name="fileExt" id="">
                    <option value="">
                        Select
                    </option>
                    <option value=".txt">
                        .txt
                    </option>
                    <option value=".pdf">
                        .pdf
                    </option>
                    <option value=".json">
                        .json
                    </option>
                </select>
            </div>
            <div class="">
                <button name="createSubmit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</body>

</html>