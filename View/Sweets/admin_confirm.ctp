<form  action="/club86cake3/sweets/admin_notice" method="post" >

    <h3>商品確認画面</h3>
    <table>
    <tr>
        <th>ID</th>
        <th>商品名</th>
        <th>価格</th>
        <th>詳細</th>
    </tr>

    <td><?php echo h($this->data["Sweet"]["id"]); ?></td>
    <td><?php echo h($this->data["Sweet"]["name"]); ?></td>
    <td><?php echo h($this->data["Sweet"]["price"]); ?></td>
    <td><?php echo h($this->data["Sweet"]["description"]); ?></td>
    </table>



<!--
saburo画面に飛ばすためのボタンを作って、saburoにとばします。
 -->

 <input type="submit" value="登録する" >
</form>