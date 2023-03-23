<?php
require_once('plugins/login-password-less.php');

return new AdminerLoginPasswordLess(password_hash($_ENV["ADMINER_PASSWORD"], PASSWORD_DEFAULT));
