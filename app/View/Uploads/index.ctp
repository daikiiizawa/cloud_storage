<div class="container">
<div class="col-md-12">

<!-- ファイルアップページへ -->
<?= $this->Html->link('アップロードページへ', ['action' => 'upload']); ?>

<!-- ファイル一覧表示 -->

<h3>アップロードされたファイル一覧</h3>
<table class="table table-bordered">
    <thead>
        <th>操作</th>
        <th>ファイル名</th>
    </thead>

    <tbody>
    <?php foreach ($files[1] as $file[1]) : ?>
    <tr>
        <td>
            <input type="checkbox" value="1" id="PostPublished" />
            削除
        </td>
        <td><?= h($file[1]); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    <input type="submit" value="選択したデータを削除">

</table>


</div>
</div>