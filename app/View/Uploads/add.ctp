<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>

<!-- アップロードフォーム -->

<div class="uploads form">
    <?= $this->Form->create('Upload', [
            'type' => 'file',
            'url' => [
                'action' => 'add'
            ]]); ?>

    <fieldset>
        <h3>ファイルアップロード画面</h3>
        <?= $this->Form->file('file'); ?>
    </fieldset>
    <?= $this->Form->end('登録する');?>
</div><!-- form -->

</div>


<!-- ドロップゾーン -->
<form action="file-upload.php" class="dropzone"></form>

