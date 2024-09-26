<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        table {
            border: 1px solid white;
            border-collapse: collapse;
            border-radius: 10px;
        }
        th, td {
            text-align: center;
            padding: 5px;
            border: 1px solid white;
            border-radius: 10px;
        }
        th {
            background-color: crimson;
            color: white;
            font-size: large;
            border-radius: 10px;
        }
        td {
            background-color: darkgray;
            color: black;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php
        //$numbers = array(4,5,true,2.5);
        /*
        $numbers = [4,5,true,2.5];
        print_r($numbers);
        $numbers [10] = "Hello";
        print_r($numbers);

        echo $numbers[7]."<br>";
        $numbers[7] = 10;
        echo $numbers[7]."<br>";

        $numbers[] = 14;
        print_r($numbers);*/

        /*
        $static_arr = new SplFixedArray(3);
        $static_arr[0] = 2;
        //$static_arr[1] = 5;
        $static_arr[2] = 1;
        print_r($static_arr);
        
        if ($static_arr[1] === null) {
            echo "null";
        }
        */

        /*
        $numbers = [
            0 => 5,
            1 => 10,
            8 => 4,
            8 => 5
        ];
        print_r($numbers);
        */

        // $numbers = [4 => 2.5];
        // $numbers[] = 14;
        // print_r($numbers);

        $users = [
            [
                "id" => 1,
                "name" => "alex",
                "email" => "alex@gamil.com"
            ],
            [
                "id" => 2,
                "name" => "bob",
                "email" => "bob@gamil.com"
            ],
            [
                "id" => 3,
                "name" => "felix",
                "email" => "felix@gamil.com"
            ],
        ];
        ?>
        <table> 
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>e-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
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