<?php
function handleError($message) {
    error_log($message);
    echo "Oops! Something went wrong.";
}

set_error_handler(function($severity, $message) {
    handleError($message);
});
