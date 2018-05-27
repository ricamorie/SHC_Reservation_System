<?php
include ("avr_viewroom_2.php");
?>

<html>
<head>
  <style type="text/css">
    table {
      border: 3px solid black;
      border-radius: 25px 25px 25px 25px;
    }
  </style>
</head>
    <H1>UPDATE Reservation</H1>
    <br><br>
    <form action="update.php" method="POST" style="margin-top: 10px;">
    <table width="" border="0" align="center" bgcolor="white" cellspacing="1" cellpadding="2" id="time">
         <tr>
               <td width="200">Type your name to edit your reservation:</td>
               <td width="400">
                <form>
                  <input type="text" name="res_name" style="width: 250px;">
                  <input name="delete" type="SUBMIT" id="UPDATE" value="Search">
                </form>
               </td>
    </table>
    </form>
</body>
</HTML>
