<?php
function alert_url($msg, $url) {
    echo '<script type="text/javascript">alert("' . $msg . '"); window.location = "' . $url . '";</script>';
}
?>
