<div class="container">
<div class="col-md-12">

<!-- ファイルアップページへ -->
<?= $this->Html->link('アップロードページへ', ['action' => 'upload']); ?>
<p>
    <?= h($currentUser['email']). 'さんは現在'. round($userfilesize/1000000,1). ' MB使用中'?>
    <?= '(残り'. round(100-$userfilesize/1000000,1). ' MB使用可能)'?>
</p>

<!-- ファイル一覧表示 -->
<h3><strong>アップロードされたファイル一覧</strong></h3>

<table class="table table-bordered">
    <thead>
        <th>操作</th>
        <th>ファイル名</th>
        <th>ファイルサイズ</th>
    </thead>

    <tbody>
    <?php foreach ($files[1] as $file[1]) : ?>

    <tr>
        <td>
            <input type="checkbox">
            削除
        </td>
        <td><?= h($file[1]); ?></td>

        <td>
            <?= round(filesize(WWW_ROOT.'files/upload/'.$currentUser['id'].'/'.$file[1])/1000,1). ' KB'; ?>
        </td>
    </tr>

    <?php endforeach; ?>
    </tbody>
    <input type="submit" value="選択したデータを削除">

</table>

</div>
</div>