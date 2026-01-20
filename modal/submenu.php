<div class="cent">新增選單</div>
    <hr>
<form action="./api/insert.php?table=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">
    <table style="width:80%;margin:auto">
        <tr>
            <td>次主選單名稱</td>
            <td>次選單連結網址刪除/td>
            <td>刪除</td>
        </tr>
        <tr>
            <td><input type="text" name="text" id=""></td>
            <td><input type="text" name="href" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改確定"></td>
            <td><input type="reset" value="重置"></td>
            <td><input type="button" value="更多次選單"></td>
        </tr>
    </table>

</form>
