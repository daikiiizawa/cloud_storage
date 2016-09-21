<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>


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

<form
    action="upload"
    class="dropzone"
    id="myAwesomeDropzone">
</form>



</div>
</div>