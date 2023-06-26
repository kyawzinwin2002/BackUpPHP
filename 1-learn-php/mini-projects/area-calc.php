<?php include_once("head.php") ?>
<div class="">
    <h1>Area Calculator</h1>
    <?php include("area-logic.php") ?>
    <form method="post" class="" id="areaForm"></form>

    <div class=" p-3 d-flex flex-column gap-3 w-75">
        <div class="">
            <label for="" class=" form-label">Width : </label>
            <input form="areaForm" name="width" type="number" class=" form-control" required>
        </div>
        <div class="">
            <label for="" class=" form-label">Breadth : </label>
            <input form="areaForm" name="breadth" type="number" class=" form-control" required>
        </div>
        <div class="">
            <button name="submit" form="areaForm" class="btn btn-primary">
                Calculate
            </button>
        </div>
    </div>
    <hr>
    
        <div class="">
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th>Width</th>
                    <th>Breadth</th>
                    <th>Area</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (json_decode(file_get_contents("areaRecord.json"), true) as $key => $result) :  ?>
                    <tr>
                        <td><?= $result["width"] ?> ft</td>
                        <td><?= $result["breadth"] ?> ft</td>
                        <td><?= $result["area"] ?> sqft</td>
                        <td>
                            <a href="./area-del.php?id=<?= $key ?>" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   
</div>
<?php include_once("footer.php") ?>