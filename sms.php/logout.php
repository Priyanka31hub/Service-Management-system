<?php
session_start();
session_destroy(); //session pura destroy karenga aur redirect karenga page index.php mai.
echo "<script>location.href='index.php'</script>"
?>