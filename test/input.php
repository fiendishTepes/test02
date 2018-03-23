<?php include 'cal.php'; $inp = new cal(); $inp->cals($_POST['arr']); ?>
<form method="post" name="fm" id="fm">
    <input type="text" name="arr['name']">
    <input type="text" name="arr['last']">
    <input type="text" name="arr['email']">
    <input type="text" name="arr['phone']">
    <button type="submit">click</button>
</form>
