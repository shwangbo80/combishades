<?php
function print_log($arg)
{
    echo '
<pre>' . var_export($arg, true) . '</pre>';
}
?>