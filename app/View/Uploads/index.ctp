<div class="container">
<div class="col-md-12">

<!-- ファイルアップページへ -->
<?= $this->Html->link('アップロードページへ', ['action' => 'upload']); ?>

<!-- ファイル一覧表示 -->

<h3>アップロードされたファイル一覧</h3>
<table class="table table-bordered">
    <thead>
        <th>ID</th>
        <th>ファイル名</th>
        <th>登録日</th>
    </thead>

    <tbody>
    <?php foreach ($uploads as $upload) : ?>
    <tr>
        <td style="width: 5%;"><?= h($upload['Upload']['id']); ?></td>
        <td style="width: 55%;"><?= h($upload['Upload']['file_name']); ?></td>
        <td style="width: 40%;"><?= h($upload['Upload']['created']); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>

</table>




<!-- ページネーション -->
<div class="text-center" style="margin-bottom: 40px;">
    <?= $this->paginator->prev('<< 前へ'); ?>&nbsp;
    | <?= $this->paginator->numbers(); ?>&nbsp;|
    <?= $this->paginator->next('次へ >>'); ?>
</div>

</div>
</div>