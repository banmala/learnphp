<?php
//database creation 
// try{
//     $servername = 'localhost';
//     $dbname = 'learnphp';
//     $username = 'root';
//     $password = "";
//     $sql = "
//         CREATE TABLE fruits(
//             id int not null primary key auto_increment,
//             fruitname varchar(20),
//             created_date datetime default current_timestamp,
//             updated_date datetime on update current_timestamp
//         )
//     ";

//     $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //PDO::ERRMODE_SILENT 
//     //PDO::ERRMODE_WARNING
//     $conn->exec('SET NAMES UTF8');
//     echo "Database Connected Successfully!!";
    
//     $conn->exec($sql);
//     echo "Fruits Table Created Successfully!!";

// }catch(PDOException $e){
//     echo $e->getMessage();
// }   

//Database insertion
// try{
//     $servername = 'localhost';
//     $dbname = 'learnphp';
//     $username = 'root';
//     $password = "";
//     $sql = "
//         insert into fruits set 
            
//             fruitname = 'mango'

//     ";

//     $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //PDO::ERRMODE_SILENT 
//     //PDO::ERRMODE_WARNING
//     $conn->exec('SET NAMES UTF8');
//     echo "Database Connected Successfully!!";
    
//     $conn->exec($sql);
//     echo "Fruits Table Created Successfully!!";

//     echo "<br>";
//     echo $conn->lastInsertId();

// }catch(PDOException $e){
//     echo $e->getMessage();
// }

//prepare statement and bind parameter
// a. reduce parsing time 
// b. useful against sql injection
// c. minimize band width
// try{
//     $servername = 'localhost';
//     $dbname = 'learnphp';
//     $username = 'root';
//     $password = "";
//     $sql = "
//         insert into fruits set 
            
//             fruitname = :fruitname


//     ";

//     $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //PDO::ERRMODE_SILENT 
//     //PDO::ERRMODE_WARNING
//     $conn->exec('SET NAMES UTF8'); //sql prepare + sql execute
//     echo "Database Connected Successfully!!";
    
//     $stmt = $conn->prepare($sql);
//     $stmt->bindValue(':fruitname','Guava',PDO::PARAM_STR);
//     $stmt->execute();

//     $stmt->bindValue(':fruitname','Watermelon',PDO::PARAM_STR);
//     $stmt->execute();


// }catch(PDOException $e){
//     echo $e->getMessage();
// }

// Read data from database
try{
    $servername = 'localhost';
    $dbname = 'learnphp';
    $username = 'root';
    $password = "";
    $sql = "
        select * from fruits
            where fruitname like '%a%' 
            order by fruitname asc 
            limit 2,2

    ";//desc for descending order 
    // limit offset, number of data
    //limit 4 offset 2 ==> limit 2,4 are same 

    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //PDO::ERRMODE_SILENT 
    //PDO::ERRMODE_WARNING
    $conn->exec('SET NAMES UTF8'); //sql prepare + sql execute
    echo "Database Connected Successfully!!";
    
    $stmp = $conn->prepare($sql);
    $stmp->execute();

    $data = $stmp->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    print_r($data);

}catch(PDOException $e){
    echo $e->getMessage();
}
   

//delete operation
// try{
//     $servername = 'localhost';
//     $dbname = 'learnphp';
//     $username = 'root';
//     $password = "";
//     $sql = "
//         delete from  fruits
//             where fruitname = 'mango'

//     ";

//     $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //PDO::ERRMODE_SILENT 
//     //PDO::ERRMODE_WARNING
//     $conn->exec('SET NAMES UTF8'); //sql prepare + sql execute
//     echo "Database Connected Successfully!!";
    
//     $stmp = $conn->prepare($sql);
//     $stmp->execute();

// }catch(PDOException $e){
//     echo $e->getMessage();
// }


//update
// try{
//     $servername = 'localhost';
//     $dbname = 'learnphp';
//     $username = 'root';
//     $password = "";
//     $sql = "
//         update fruits set
//             fruitname = 'orange'
//         where fruitname = 'watermelon'
//     ";

//     $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     //PDO::ERRMODE_SILENT 
//     //PDO::ERRMODE_WARNING
//     $conn->exec('SET NAMES UTF8'); //sql prepare + sql execute
//     echo "Database Connected Successfully!!";
    
//     $stmp = $conn->prepare($sql);
//     $stmp->execute();

// }catch(PDOException $e){
//     echo $e->getMessage();
// }