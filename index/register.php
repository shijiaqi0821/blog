<meta charset="utf-8">
<form action="add.php" method="post">
    <h2 style="color:red">用户注册</h2>
    <table border=1>
        <tr>
            <th>用户</th>
            <th><input type="text" name="name"></th>
        </tr>
        <tr>
            <th>手机号</th>
            <th><input type="text" name="tel"></th>
        </tr>
        <tr>
            <th>邮箱</th>
            <th><input type="text" name="email"></th>
        </tr>
        <tr>
            <th>密码</th>
            <th><input type="password" name="pass"></th>
        </tr>
        <tr>
            <th>确认密码</th>
            <th><input type="password" name="pass1"></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="注册"></th>
        </tr>
    </table>
</form>