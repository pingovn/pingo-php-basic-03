<html>
<?php
if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	    <label style="font-weight:bold">Nh&#7853;p v�o n&#259;m d&#432;&#417;ng l&#7883;ch: </label>
        <input type="text" name="year">
        <input type="submit" name="submit" value="�&#7893;i sang �m l&#7883;ch">
    </form>
<?php
} else {
    // or display the selected year
    if (isset($_POST['year'])) {
	    $year = $_POST['year'];		
        $chi = array( "T�", "S&#7917;u", "D&#7847;n", "M&#7865;o", "Th�n", "T&#7925;", "Ng&#7885;", "M�i", "Th�n", "D&#7853;u", "Tu&#7845;t", "H&#7907;i" );
        $can = array("Canh", "T�n", "Nh�m", "Qu�", "Gi�p", "&#7844;t", "B�nh", "�inh", "M&#7853;u", "K&#7927;");
        echo "�� l� n&#259;m " . $can[$year % 10] . " " . $chi[($year % 12 + 8) % 12];
    } else {
        echo 'Nothing selected';
    }
}
?>
</html>
