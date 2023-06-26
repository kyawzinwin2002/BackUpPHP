<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    table{
        width:500px
    }

    th,td{
        border: 1px solid black;
    }

    .bg-danger{
        background-color : red;

    }
</style>
<body>
    <?php 

    $name = "Kyaw Zin Win";
    $age = 21;
    $status = false;
    $fruits = ["apple","banana","grape","mango"];
    $info = [
        "name" => "mg mg",
        "age" => 21,
        "major" => "computer",
        "job" => null,
        "gf" => false
    ];
    $products = [
        [
            "id" => 1,
            "name" => "Pork",
            "price" => 1200,
            "stock" => 300,
            "unit" => "lb"
        ],
        [
            "id" => 2,
            "name" => "Chicken",
            "price" => 1200,
            "stock" => 0,
            "unit" => "lb"
        ],
        [
            "id" => 3,
            "name" => "Pencil",
            "price" => 100,
            "stock" => 370,
            "unit" => "pcs"
        ],
        [
            "id" => 4,
            "name" => "Book",
            "price" => 300,
            "stock" => 0,
            "unit" => "pcs"
        ],
    ];
     ?>
    <h1>Testing PHP Html tags</h1>
    <h2>My Name is <?= $name ?></h2>
    <h2>I'm <?= $age ?> year<?= $age > 1 ? "s":"" ?> old.</h2>

    <?php if($status): ?>
        <div class="">
            <h1>This is True</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quidem consequatur dolor quae mollitia, magni exercitationem quod explicabo cumque aspernatur. Ducimus, aut dolor qui reprehenderit et nisi consequuntur blanditiis molestias!</p>
        </div>
    <?php else: ?>
         <div class="">
            <h1>This is FALSE</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quidem consequatur dolor quae mollitia, magni exercitationem quod explicabo cumque aspernatur. Ducimus, aut dolor qui reprehenderit et nisi consequuntur blanditiis molestias!</p>
        </div>
    <?php endif; ?>

    <hr>

    <h1>Fruits</h1>
    <ul>
        <?php foreach($fruits as $fruit): ?>
            <li><?= $fruit ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h1>Mg Mg's Information</h1>

    <ul>
        <?php foreach($info as $key => $value): ?>
            <li><?= $key . "=>" . $value  ?></li>
        <?php endforeach; ?>
    </ul>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock/Unit</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach($products as $product): ?>
            <tr class="<?= $product['stock'] === 0 ? "bg-danger" : "" ?>">
               
                    <td><?= $product["id"] ?></td>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td><?= $product["stock"] ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>