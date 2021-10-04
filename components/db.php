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
        return $result;
    }
    function userSign($username, $password){
        $pdo = pdo();
        $query = "SELECT * FROM users WHERE username = ?";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$username]);
        $user = $driver->fetch(PDO::FETCH_ASSOC);
        if ($user['username'] == $username && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['photo'] = $user['photo'];
            var_dump($_SESSION);
            echo true;
        }
        else{
            echo false;
        }
        var_dump($user);
    }
    userSign('fgdfg', 123456);
?>