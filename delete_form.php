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
    <H1>Delete Reservation</H1>
    <br><br>
    <form action="delete.php" method="POST" style="margin-top: 10px;">
    <table width="" border="0" align="center" bgcolor="white" cellspacing="1" cellpadding="2" id="time">
         <tr>
               <td width="200"> Select the Viewing Room Venue that you want to want to review:</td>
               <td width="400">
                <form>
                  <select name="viewing_room" id="selector">
                    <option> - - Select Viewing Room - - </option>
                    <option value="AVR - VR 1">AVR - Viewing Room 1</option>
                    <option value="AVR - VR 2">AVR - Viewing Room 2</option>
                    <option value="AVR - VR 3">AvR - Viewing Room 3</option>
                    <option value="AVR - VR 4">AVR - Viewing Room 4</option>
                    <option value="AVR - VR 5">AVR - Viewing Room 5</option>
                    <option value="AVR - VR 6">AVR - Viewing Room 6</option>
                    <option value="IBED - VR 1">IBED - Viewing Room 1</option>
                    <option value="IBED - VR 2">IBED - Viewing Room 2</option>
                    <option value="IBED - VR 3">IBED - Viewing Room 3</option>
                  </select>
                  <input name="delete" type="SUBMIT" id="DELETE" value="Search">
                </form>
               </td>
    </table>
    </FORM>
</body>
</HTML>
