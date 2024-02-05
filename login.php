<?
    // 현재 페이지 주소 값
    $page = $_SERVER["PHP_SELF"];
    
    // 로그인 처리
    if(isset($_GET['id']) && isset($_GET['password'])) {
        $id = $_GET['id'];
        $password = $_GET['password'];

        // 아이디 패스워드 값
        $input_id = "user";
        $input_password = "password";

        // 아이디/패스워드 빈 값인지 확인
        if(empty($id) || empty($password)) {
            echo "<script>alert('아이디와 패스워드를 입력하세요.');history.back(-1);</script>";
        }else {
            // 아이디와 패스워드 일치 여부 확인
            if($id === $input_id && $password === $input_password) {
                echo "<p>Login Success! Hello $id!</p>";
            } else {
                echo "<p>Login Failed!</p>";
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?=$page?>" method="GET">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>