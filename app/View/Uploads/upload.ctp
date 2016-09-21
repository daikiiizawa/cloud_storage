<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>
<p>
    <?= h($currentUser['email']). 'さんは現在'. round($userfilesize/1000000,1). ' MB使用中'?>
    <?= '(残り'. round(100-$userfilesize/1000000,1). ' MB使用可能)'?>
</p>

<!-- ドラッグアンドドロップエリア -->
<?php if ($userfilesize <= 10000000) :?>

    <form
        action="upload"
        class="dropzone"
        id="myAwesomeDropzone">
    </form>

<?php else :?>
    <strong>
    <p>ファイル容量が100MBを超えました。</p>
    <p>一覧ページでファイルを削除してからファイルを保存して下さい。</p>
    </strong>

<?php endif ;?>

<p style="color:red;padding-top: 10px;">※. 日本語を含むファイル名は一覧からダウンロードできません</p>
<p style="color:red;">※. 一覧からダウンロード可能なファイルは、名前がすべて半角英数字で構成されるファイルのみです</p>

</div>
</div>