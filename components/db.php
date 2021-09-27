<?
    function pdo(){
        $dbName = 'db_1';
        $dbUser = 'root';
        $dbPass = '';
        $host = 'localhost';
        return new PDO("mysql:host=$host; dbname=$dbName;", $dbUser, $dbPass);
    }
    function userReg($username, $name, $password, $photo){
        $password = password_hash($password , PASSWORD_DEFAULT);
        $pdo = pdo();
        $query = "INSERT INTO users (username, name, password, photo) VALUES (?,?,?,?)";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$username, $name, $password, $photo]);
        if ($driver->errorInfo()[0] != '00000') {
            var_dump($driver->errorInfo());
        }
    }
    return $result;
?>