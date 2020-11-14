<?php
function returnJSON(array $f) {
    /*
        Usage:
        returnJSON(array(params));
    */
    if(!is_array($f)){ exit; }

    header('Content-Type: application/json');

    exit(json_encode($f));

}
?>