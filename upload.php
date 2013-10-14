<?php
if (is_uploaded_file($_FILES["f1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], "upfiles/" . $_FILES["f1"]["name"])) {
  // このファイルと同じディレクトリに存在する「upfiles」ディレクトリに保存される
    chmod("files/" . $_FILES["f1"]["name"], 0644);
    echo $_FILES["f1"]["name"] . "をアップロードしました。";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}
?>
