<?php

require '../lib/froala_editor.php';

$response = FroalaEditor\File::delete();

if (!$response) {
  http_response_code(404);
  return;
}

echo stripslashes(json_encode('Success'));

?>