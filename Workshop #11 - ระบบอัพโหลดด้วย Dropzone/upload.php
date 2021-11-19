<?php
if (!empty($_FILES)) {
    if(move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name'])){
        echo "Complete";
    }
}
?>
