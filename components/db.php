<?
    date_default_timezone_set('Asia/Tashkent');
    function pdo(){
        $dbName = 'db_1';
        $dbUser = 'root';
        $dbPass = '';
        $host = 'localhost';
        return new PDO("mysql:host=$host; dbname=$dbName;", $dbUser, $dbPass);
    }
    function userReg($username, $name, $password, $photo, $time){
        $password = password_hash($password , PASSWORD_DEFAULT);
        $pdo = pdo();
        $query = "INSERT INTO users (username, name, password, photo, time) VALUES (?,?,?,?,?)";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$username, $name, $password, $photo, $time]);
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
            return true;
        }
        else{
            return false;
        }
    }
    function checkUsername($username){
        $pdo = pdo();
        $query = "SELECT username FROM users WHERE username = '$username'";
        $driver = $pdo->prepare($query);
        $result = $driver->execute();
        $user = $driver->fetch(PDO::FETCH_ASSOC);
        if (isset($user) && !empty($user)){
            return false;
        } else {
            return true;
        }
    }
    function getComments(){
        $pdo = pdo();
        $query = "SELECT * FROM comments";
        $driver = $pdo->prepare($query);
        $result = $driver->execute();
        $comments = $driver->fetchAll(PDO::FETCH_ASSOC);
        return $comments;
    }
    function setComments($username, $photo, $comments, $time){
        var_dump($_SESSION);
        $pdo = pdo();
        $query = "INSERT INTO comments (username, photo, comments, time) VALUES (?,?,?,?)";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$username, $photo, $comments, $time]);
        if ($driver->errorInfo()[0] != '00000') {
            var_dump($driver->errorInfo());
        }
        return $result;
    }
    function getId($id){
        $pdo = pdo();
        $query = "SELECT comments FROM comments WHERE id=(?)";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$id]);
        $comments = $driver->fetch(PDO::FETCH_ASSOC);
        if ($driver->errorInfo()[0] != '00000') {
            var_dump($driver->errorInfo());
        }
        return $comments;
    }
    function editComment($id, $descr){
        $pdo = pdo();
        $query = "UPDATE comments SET comments = '$descr' WHERE id = (?)";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$id]);
        if ($driver->errorInfo()[0] != '00000') {
            var_dump($driver->errorInfo());
        }
        return $result;
    }
    function deleteComment($id){
        $pdo = pdo();
        $query = "DELETE FROM `comments` WHERE id = ?";
        $driver = $pdo->prepare($query);
        $result = $driver->execute([$id]);
        if ($driver->errorInfo()[0] != '00000') {
            var_dump($driver->errorInfo());
        }
        return $result;
    }
?>