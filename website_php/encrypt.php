<?php  echo shell_exec("python3 encrypt.py " . escapeshellarg($_POST["text"]));  ?>