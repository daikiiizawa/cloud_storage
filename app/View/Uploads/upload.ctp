<div class="container">
<div class="col-md-12">

<!-- ファイル一覧ページへ -->
<?= $this->Html->link('ファイル一覧ページへ', ['action' => 'index']);?>
<p>
    <?= h($currentUser['email']). 'さんは現在'. round($userfilesize/1000000,1). ' MB使用中'?>
    <?= '(残り'. round(100-$userfilesize/1000000,1). ' MB使用可能)'?>
</p>

<!-- ファイルアップロード -->
<?php if ($userfilesize <= 10000000) :?>

    <b>(1)か(2)のどちらかでファイルをアップロードして下さい</b>

    <!-- ドロップゾーン -->
    <p style="padding-top: 20px;">(1).ドラッグ&amp;ドロップでのファイルアップロード</p>
    <form
        action="upload"
        class="dropzone"
        id="myAwesomeDropzone">
    </form>

    <!-- 通常アップロード -->
    <p style="padding-top: 40px;">(2).選択してファイルアップロード</p>
    <form action="add" enctype="multipart/form-data" method="post">
        <input name="file" type="file" />
        <input type="submit" value="登録" class="btn btn-default" />
    </form>

<!-- 1ユーザーの容量上限100MBを超えた場合 -->
<?php else :?>
    <strong>
    <p>ファイル容量が100MBを超えました。</p>
    <p>一覧ページでファイルを削除してからファイルを保存して下さい。</p>
    </strong>

<?php endif ;?>

<p style="color:red;padding-top: 40px;">※. 日本語を含むファイル名は一覧からダウンロードできません</p>
<p style="color:red;">※. 一覧からダウンロード可能なファイルは、名前がすべて半角英数字で構成されるファイルのみです</p>

</div>
</div>