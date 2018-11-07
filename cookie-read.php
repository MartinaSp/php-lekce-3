
<?php
// uložení cookie
setcookie('user', 'John', time() +3600);

// zobrazení všech cookie
var_dump($_COOKIE);