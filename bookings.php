<?php
$con=@mysql_connect('127.0.0.1','root','');

if(!$con)
{
 die("No such user:". mysql_error());
}
mysql_select_db('Puzzle', $con);
$sql="INSERT INTO BookNow (Name,Package,DayOfVisiting,CountOfPeople,ContactNo,Price)
VALUES ('$_POST[name]', '$_POST[package]', '$_POST[dov]','$_POST[nop]', '$_POST[contno]', '$_POST[price]')";

if(!mysql_query($sql, $con))
{
die("Error".mysql_error());
}
echo '<center><b><h1>Thankyou for booking</b><h1></center>';
echo '<center><table><tr><th>HOUSE RULES<br><br></th></tr><tr><td>All guests are advised to secure all their belongings at all times and always lock all the doors and windows when leaving the villa. The resort shall not be held liable for any loss of belongings.
<br><br></td></tr><tr><td>Guests must maintain peace and serenity within the resort at all times. <b>VIDEOKE, SOUND SYSTEM AND/OR OTHER DEVICES EMITTING DISTURBING NOISE</b> must be turned off after <b>12 MIDNIGHT</b>. Using VIDEOKE, SOUND SYSTEM and/or OTHER DEVICES IN THE CABIN AREA ARE PROHIBITED.
<br><br></td></tr><tr><td>For overnight stay, ALL VILLAS/SAWALIS/CABINS SHOULD BE TOTALLY CLEARED BY 12 NOON to give the housekeeper enough time to clean the rooms for the next guests.
<br><br></td></tr><tr><td>When ready for check-out, the guests should inform the housekeepers or roving security guards for assistance and for checking of items inside the villa/sawali/cabin to ensure that the resort facilities are complete and on good condition upon check-out. Once the checklist is cleared, the guests may vacate the villa/sawali/cabin.
<br>** Replacement fee or repair cost will automatically be charged to the guest if any item is lost or damage, including damages on the villas/sawali/cabin itself.
<br><br></td></tr><tr><td><b>For extension, please inform the office 2 hours ahead of time, to know whether the said villa/sawali/cabin. Extension of overnight accommodations can only be entertained DEPENDING ON THEIR AVAILABILITY. <br>
</b><br>** If it is, you will be allowed only 5 hours to pay per hour of stay and 50% per head entrance fee. Beyond 5 hours, you will be charged the amount of villa/sawali/cabin in full and 50% per head entrance fee.
<br><br></td></tr><td><tr>The management has the right to charge and do necessary actions, if needed, on guests caught trespassing or using other villa/sawali/cabin/cottage.
<br><br></td></tr><tr><td>Reservation fee is <b>non-refundable</b>.<br><br></td></tr>
<tr><td><b>STRICTLY NO LITTERING IN THE RESORT.</b> Throw all the trash in the designated trash bins including cigarette butts.
<br><br></td></tr><tr><td><b>For inquiries and other concerns, the office is available for transaction from 8am to 5pm only.
</b><br><br></td></tr><tr><td><b>Guests are advised to take time to read all our general rules</b> – located at the entrance of the resort, near the function hall and on the left side of the lagoon area.
<br><br></td></tr></center></table>';
echo '<center><b>We encourage all our valued guests to please be considerate enough and to be mindful of all the rules and regulations for everyone to enjoy their stay at <br>Puzzles Resort.</b.';
mysql_close($con)
?>
