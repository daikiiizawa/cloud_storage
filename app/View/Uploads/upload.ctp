<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>
<p>
    <?= h($currentUser['email']). 'さんは現在'. round($userfilesize/1000000,1). ' MB使用中'?>
    <?= '(残り'. round(100-$userfilesize/1000000,1). ' MB使用可能)'?>
</p>

<!-- 設定できない要因分析 -->
<script>
$(function(){
Dropzone.autoDiscover = false;
Dropzone.options.myAwesomeDropzone = {
    paramName: "file",         // input fileの名前
    parallelUploads: 1,            // 1度に何ファイルずつアップロードするか
    maxFiles: 10,                      // 1度にアップロード出来るファイルの数
    maxFilesize: 1,                // 1つのファイルの最大サイズ(1=1M)
    dictFileTooBig: "ファイルが大きすぎます。 ({{filesize}}MiB). 最大サイズ: {{maxFilesize}}MiB.",
    dictMaxFilesExceeded: "一度にアップロード出来るのは10ファイルまでです。",
    };
};
</script>

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

</div>
</div>