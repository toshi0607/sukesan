<h1>Sweets一覧</h1>

<table>
  <tr>
    <th>ID</th>
    <th>商品名</th>
    <th>価格</th>
    <th>詳細</th>
<!--    <th>画像</th> -->
  </tr>

<!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

<?php for ($i = 0; $i < count($marriage)) { ?>
  <tr>
    <td><?php echo h($marriage['Sweet']['id']); ?></td>
    <td><?php echo h($marriage['Sweet']['name']); ?></td>
    <td><?php echo h($marriage['Sweet']['price']); ?></td>
    <td><?php echo h($marrigae['Sweet']['discription']); ?></td>
<!--    <td><?php echo h($post['Sweet']['image']); ?></td> -->
  </tr>
<?php } ?>
</table>
