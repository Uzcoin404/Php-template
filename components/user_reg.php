<?
    function pdo(){
        $dbName = 'db_1';
        $dbUser = 'root';
        $dbPass = '';
        $host = 'localhost';
        return new PDO("mysql:host=$host; dbName=$dbName;", $dbUser, $dbPass);
    }
    function userReg($username, $name, $password, $photo){
        $pdo = pdo();
        $query = "INSERT INTO users (username, name, password, photo) VALUES (?,?,?,?)";
        $driver = $pdo->prepare($query);
        $driver->execute([$username, $name, $password, $photo]);
        if ($driver->errorInfo()[0] == '00000') {
            var_dump($driver->errorInfo());
        }
    }
    userReg('uzcoin404', 'Suyunbek', '1234', 'img');
?>