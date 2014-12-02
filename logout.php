<?php
session_start();
unset($_SESSION['username']);
session_destroy();
?>
<script language="javascript">
    window.alert('Logout sukses.. jangan lupa update terus.. :)');
    document.location="login.php";
</script>
