<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class2.1</title>
</head>
<body>
    <?php
        // $arr = ["key1"=>"value1","key2"=>"value2","key3"=>"value3","key4"=>"value4"];
        // foreach($arr as $key=>$value){
        //     echo "<pre>";
        //     echo $key." => ".$value;
        //     echo "</pre>";
        // }
        

        //multidimensional array 
        // $multi_dimensional = array(
        //     array(
        //         'name' => 'niranjan',
        //         'address' => 'bhaktapur'
        //     ),
        //     array(
        //         'name' => 'sunil',
        //         'address' => 'suryabinayak'
        //     ),
        //     array(
        //         'name' => 'luja',
        //         'address' => 'inacho'
        //     )
        // );
        // echo "<pre>";
        // print_r($multi_dimensional);
        // echo "</pre>";

        // $girls = ['sita','gita','rita','mita','nita'];
        // $imploded_girls = implode(" ", $girls);
        // echo $imploded_girls;

        // $exploded_girls = explode(" ", $imploded_girls);
        // echo "<pre>";
        // print_r($exploded_girls);
        // echo "</pre>";

        // $email="banmala@example.com";
        // echo filter_var($email, FILTER_VALIDATE_EMAIL);

        // echo "<pre>";
        // print_r($_SERVER)
        // ob_start();
        // header('location: index.php');
        // echo(Date("Y y / m / d "));
        // echo "<br>";
        // echo(Date("h:i:s"));
        // echo "<br>";
        // echo(Date(" a"));
        // echo "<br>";
        // echo(Date(" M l D"));

        date_default_timezone_set("Asia/Kathmandu");
        echo(Date("Y / m / d  h:i:s  a"));
        echo "<br>";
        echo "<br>";
        echo(mktime(5,45,45,12,29,1999));
        echo "<br>";
        echo(Date("Y / m / d  h:i:s  a",mktime(5,45,45,12,29,1999)));
        echo "<br>";
        $TMP =  strtotime("10:30 pm april 15 2014");
        echo(Date("Y/M/d h:i:s a", $TMP));
        echo "<br>";
        echo(strtotime("today"));
        echo "<br>";
        
    ?>
</body>
</html>