<form method="post">
    <h1>Thanh vien C11</h1>
    <input type="text" name="User" placeholder="Nhap vao day"> <br>
    <input type="password" name="Password" placeholder="Nhap vao day"> <br>
    <button type="submit" id="submit">Dang nhap</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["User"] == "admin" && $_POST["Password"] == "admin") {
        echo "hello";
    }else
        echo "sai roi";
}
?>