<?php
function sanitize($input) {
    return htmlspecialchars(trim($input));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
