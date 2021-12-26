<?php

session_start();//start session.
session_destroy();//destroy session to log out.

header("Location: ../login.php")//move user to the register page to relog-in.

 ?>