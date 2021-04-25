<?php
function FtoC($fahrenheit) {
    $celsius=round(5/9*($fahrenheit-32),2);
    return $celsius;
}
?>