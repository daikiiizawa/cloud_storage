<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>

<!-- アップロードフォーム -->
<h3>ファイルアップロード画面</h3>

<?= $this->Form->create('Upload', [
        'type' => 'file',
        'url' => [
            'action' => 'add'
        ]]); ?>
<?= $this->Form->file('file'); ?>
<?= $this->Form->end('登録する');?>

</div>
</div>

<!-- ドロップゾーン -->


