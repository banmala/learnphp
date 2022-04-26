   <?php
   // function debugger($data,$is_die=false){
    // <!-- //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>"; -->
    //     if($is_die){
    //         exit();
    //     }
    // }

    // $_SERVER['PHP_AUTH_USER']="banmala";
    // debugger($_SERVER);
    // session_start();
    // $_SESSION['AdminName']="banmala";
    // debugger($_SESSION);
    // session_unset();

    // ob_start();
    // @header('location: session.php');
    //session
    //superglobal variables
    //scope from opening of the browser to the exit of the broswer i.e until the browser session is break

    // Cookies
    // setcookie("__NAME__",'Sunil Banmala',time()+(60*60*24*6),'/');
    // debugger($_COOKIE);
?>
<!-- //OOP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usr=array(
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com"),
            array("name"=>"sunil banmala","email"=>"banmala@gmail.com")
        );
    ?>
    <table>
        <thead>
            <th>S.N</th>
            <th>User Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
                if(isset($usr) && !empty($usr)){
                    foreach($usr as $key=>$value){
            ?>
            <tr>
                <td><?php echo($key+1 ); ?></td>
                <td><?php echo($value['name']); ?></td>
                <td><?php echo($value['email']); ?></td>
            </tr>
            <?php
                    }
                }
            ?>
            
        </tbody>
    </table>
</body>
</html>