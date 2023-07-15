<?php
$targetDirectory = "uploads/"; // アップロードしたファイルを保存するディレクトリを指定します

// ファイルがエラーなくアップロードされたかどうかを確認します
if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

    // ファイルを指定したディレクトリに移動します
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "ファイルがアップロードされました。";
    } else {
        echo "ファイルのアップロード中にエラーが発生しました。";
    }
} else {
    echo "ファイルのアップロード中にエラーが発生しました。";
}
?>
