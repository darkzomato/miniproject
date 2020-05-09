<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
session_unset();
session_destroy();
header('location:log.php');

?>
<script language="javascript">
document.location="log.php";
</script>
