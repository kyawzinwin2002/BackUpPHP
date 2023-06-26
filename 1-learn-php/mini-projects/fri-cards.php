<?php include_once("head.php") ?>
<div class=" p-3">
    <?php require_once("fri-logic.php") ?>
    <h1>Create Friend</h1>
    <form method="post"  enctype="multipart/form-data" id="friForm"></form>
    <div class="">
        <div class="">
            <label for="" class=" form-label">Friend's Name</label>
            <input form="friForm" type="text" name="friName" class="form-control">
        </div>
        <div class="">
            <label for="" class=" form-label">Friend's Phone</label>
            <input form="friForm" type="number" name="friPhone" class="form-control">
        </div>
        <div class="">
            <label for="" class=" form-label">Friend's Address</label>
            <textarea class="form-control" name="friAddress" form="friForm" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="">
            <label for="" class="form-label">Fri's Photo</label>
            <input accept="image/jpeg,image/png" form="friForm" type="file" name="friPhoto" class="form-control">
        </div>
        <div class="">
            <input class=" form-check-input" form="friForm" id="realFri" type="checkbox" value="yes" name="realFri">
            <label for="realFri" class=" form-check-label">Real Friend</label>
        </div>
        <div class="">
            <button name="submit" form="friForm" class="btn btn-primary">Create</button>
        </div>
    </div>
    <div class="p-3">
        <h3>Friend List</h3>
        <?php 
        $fileArr = json_decode(file_get_contents("friList.json"), true);
        foreach($fileArr as $key => $file): ?>
        <div class=" card">
            <div class=" card-body">
                <img width="200" height="200" class=" rounded-circle" src="<?= $file["photo"] ?>" alt="">
                <h4><?= $file["friName"] ?></h4>
                <p><?= $file["friPhone"] ?></p>
                <div class=" d-flex">
                    <a href="fri-detail.php?id=<?= $key ?>" class="btn btn-primary">Detail</a>
                    <a href="./fri-del.php?id=<?= $key ?>" class="btn btn-danger">Del</a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>
<?php include_once("footer.php") ?>