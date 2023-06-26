<?php
$width = $_POST["width"];
$breadth = $_POST["breadth"];

if(isset($_POST["submit"])):
$area = $width * $breadth;

$areaRecords = [];

if(file_exists("areaRecord.json") && filesize("areaRecord.json")){
    $areaRecords = json_decode(file_get_contents("areaRecord.json"),true);
}

$data = [
    "width" => $width,
    "breadth" => $breadth,
    "area" => $area
];
array_push($areaRecords,$data);
$stream = fopen("areaRecord.json","w");
$json = json_encode($areaRecords);
fwrite($stream,$json);
fclose($stream);

?>

<table class=" table table-bordered">
    <thead>
        <tr>
            <th>Width</th>
            <th>Breadth</th>
            <th>Area</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $width ?> ft</td>
            <td><?= $breadth ?> ft</td>
            <td><?= $area ?> sqft</td>
        </tr>
    </tbody>
</table>

<?php endif; ?>