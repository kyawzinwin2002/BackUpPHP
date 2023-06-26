<?php include_once("head.php") ?>
<h1>Exchange Calculator</h1>
<?php include("ex-logic.php") ?>
<form method="post"  id="exForm"></form>
<div class="row mb-3 g-3 p-3">
    <div class=" col-12">
        <label for="" class=" form-label">Amount</label>
        <input name="amount" type="number" class=" form-control" form="exForm">
    </div>
    <div class="col-6">
        <label for="">From Currency</label>
        <select class=" form-select" name="from" form="exForm" id="">
            <option value="">Select Currency</option>
            <?php foreach ($exchangeRates as $key => $value) : ?>
                <option value="<?= $key ?>">
                    <?= $key ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-6">
        <label for="">To Currency</label>
        <select class=" form-select" name="to" form="exForm" id="">
            <option value="">Select Currency</option>
            <?php foreach ($exchangeRates as $key => $value) : ?>
                <option value="<?= $key ?>">
                    <?= $key ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-12">
        <button form="exForm" class=" btn btn-primary" name="submit">Calculate</button>
    </div>
</div>
<h4>History</h4>
<ul class=" list-group">
    <li>
        <?php foreach (file("ExchangeRec/exRecord.txt") as $key => $file) : ?>
    <li class=" list-group-item d-flex justify-content-between align-items-center">
        <p><?= $file ?></p>
        <a href="./ex-del.php?id=<?= $key ?>" class="btn btn-danger">Del</a>
    </li>
<?php endforeach; ?>
</li>

</ul>
<?php include_once("footer.php") ?>