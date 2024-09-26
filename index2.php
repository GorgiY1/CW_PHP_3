<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid white;
            border-collapse: collapse;
            border-radius: 10px;
        }
        th, td {
            text-align: center;
            padding: 5px;
            border: 2px solid white;
            border-radius: 10px;
        }
        th {
            background-color: Blue;
            color: white;
            font-size: large;
            border-radius: 10px;
        }
        td {
            background-color: darkgray;
            color: black;
            
        }
    </style>
</head>
<body>
    <?php 
        // function sayHello($name) {
        //     echo "Hello, ".$name."!<hr>";
        // }
        // sayHello("Sergiy");

        // function plus($x = 0,$y = 0) {
        //     return $x + $y;
        // }
        // $result = plus(5,10);
        // echo $result;

        // function display_info($name, $age = 18) {
        //     echo "<div>Name: $name Age: $age</div><hr>";
        // }
        // display_info(age:25, name:"Sergiy");
        // display_info(name:"Bob",age:25);
        // display_info(name:"Alice");

        // function sum(... $nums) {
        //     $res = 0;
        //     foreach ($nums as $num) {
        //         $res += $num;
        //     }
        //     echo $res;
        // }
        // sum(1,2,5,6);

        // $hello = function($name) {
        //     echo "Hello, $name!<hr>";
        // };
        // $hello("Alex");
        
        // $is_even = function($number) {
        //     return $number % 2 == 0;
        // };
        // sum([4,1,3,5,8], $is_even);
        // function sum($numbers, $condition) {
        //     $result = 0;
        //     foreach ($numbers as $number) {
        //         if ($condition($number)) {
        //             $result += $number;
        //         }
        //     }
        //     echo $result;
        // }

        // sum([4,1,3,5,10], fn($n) => $n % 2 === 0);
        // function sum($numbers, $condition) {
        //     $result = 0;
        //     foreach ($numbers as $number) {
        //         if ($condition($number)) {
        //             $result += $number;
        //         }
        //     }
        //     echo $result;
        // }
        
        $smartphones = [
            [
                "id" => 1,
                "brand" => "Apple",
                "model" => "iPhone 13 Pro",
                "color" => "Graphite",
                "storage" => "128GB",
                "price_usd" => "999.99$ "// приклад ціни для iPhone 13 Pro
            ],
            [
                "id" => 2,
                "brand" => "Samsung",
                "model" => "Galaxy S22 Ultra",
                "color" => "Phantom Silver",
                "storage" => "512GB",
                "price_usd" => "1199.99$" // приклад ціни для Galaxy S22 Ultra
            ],
            [
                "id" => 3,
                "brand" => "Google",
                "model" => "Pixel 6 Pro",
                "color" => "Stormy Black",
                "storage" => "256GB",
                "price_usd" => "899.99$" // приклад ціни для Pixel 6 Pro
            ],
            [
                "id" => 4,
                "brand" => "OnePlus",
                "model" => "9 RT",
                "color" => "Neon Blue",
                "storage" => "256GB",
                "price_usd" => "799.99$" // приклад ціни для OnePlus 9 RT
            ],
            [
                "id" => 5,
                "brand" => "Xiaomi",
                "model" => "Mi 12 Ultra",
                "color" => "Cosmic Gray",
                "storage" => "512GB",
                "price_usd" => "1099.99$" // приклад ціни для Mi 12 Ultra
            ],
        ];
    ?>

    <table> 
        <thead>
            <tr>
                <th></th>
                <th>Brand</th>
                <th>Model</th>
                <th>Color</th>
                <th>Memory</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($smartphones as $user): ?>
                    <tr>
                    <?php foreach ($user as $value): ?>
                        <td><i><?php echo $value; ?></i></td>
                    <?php endforeach; ?>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>