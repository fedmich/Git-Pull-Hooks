<h1>Git Pull Hooks 0.1 by Fed</h1>
<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo shell_exec("/usr/bin/git pull 2>&1");

?>
</pre>