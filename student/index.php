
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <?php
  if(!isset($_SESSION))
  session_start();
  $user=$_SESSION['user'];
  $roll=$_SESSION['roll'];echo $roll;
   if(!session_start())
   {
       header("Location:loginstudent.php");
   }
   
   ?>
<head>
    <title>::LFHS::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link  rel="stylesheet" href="style.css" type="text/css">
    <link href="images/title.gif" rel="shortcut icon" type="image/x-icon"> </head>

<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#E2F0FE">
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td valign="top" height="18" colspan="2">
            <style type="text/css">
                <!--
                .style1 {color: #336666}
                -->
            </style>



            <img src="images/nitk.jpg" title="LITTLE FLOWERS HIGH SCHOOL" style="height: 125px ;width: 125px;position: absolute;left: 1100px; top:35px"/>
            


            <a  name="top"></a>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2"><img  src="images/pimg.jpg" width="1021" height="103"></td>
                </tr>
                <tr>
                    <td height="2" colspan="2"></td>
                </tr>
                <tr>
                    <td height="2" colspan="2"></td>
                </tr>
                
                    <td height="2" colspan="2"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
                <tr><td width="13%" background="images/side.gif"  valign="top"> <style type="text/css">
                            <!--
                            .style1 {
                                font-size: 13px;
                                font-weight: bold;
                                color: #99FF00;
                            }
                            -->
                        </style>
                        <table width="160" border="0" cellspacing="2" cellpadding="15">  <tr>
                            <tr>
                                <td height="26"><a  href="index.php"><font size="+1">Home</font></a></td>
                            </tr>

                            <tr>
                                <td height="26" ><a  href="../client_user/student.php"><font size="+1">student</font></a></td>
                            </tr>

                            <tr>
                                <td height="26" ><a  href="../client_user/staff1.php"><font size="+1">Staff</font></a></td>
                            </tr>

                           
                            <tr>
                                <td height="26" ><a  href="../client_user/contact1.php"><font size="+1">Contact us</font></a></td>
                            </tr>
                           
                            <td>&nbsp;</td>
                            </tr>

                        </table>
                    </td>
                    <td width="83%" valign="top" bgcolor="#E6FBF4">
                        <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
                            <tr>
                                <td><table width="100%"  border="0" cellspacing="1" cellpadding="1" align="center" class="border">
                                        <tr>
                                            <td  bgcolor="#E2F0FE">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tr><td align="center" valign="middle" colspan="4"  background="images/header.gif"class=title><img src="images/decoration_head.png" align="absmiddle">&nbsp;&nbsp;Welcome&nbsp;&nbsp;<?php echo $user;?>&nbsp;&nbsp;<img src="images/decoration_head.png" align="absmiddle"></td>
                                                    </tr>
                                                </table>
                                                <br><table cellpadding="0" cellspacing="0" width="100%">
                                                    <tr> <td align="right" colspan="3" width="80">
                                                            <a href="profile.php"> <img src="images/profile.png"   height="45" width="45"   ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="smessage.php"> <img src="images/msg.png"   height="45" width="45"   ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="snotification.php"> <img src="images/notify.png"   height="35" width="35"    ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="ssetting.php"> <img src="images/setting.png"   height="40" width="40"   ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="slogout.php"> <img src="images/logout.jpg"   height="40" width="40"   ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
                                                    </tr>
                                                        </td>  <?php
                                                    mysql_connect("localhost", "root","");
                                                    mysql_select_db("student") or die(" could not connect to DB");
                                                    $sql = "SELECT a,b from photo ";
                                                    $result = mysql_query($sql);
                                                    while($row= mysql_fetch_array($result))
                                                    {
                                                      $a=$row['a'];
                                                      $b=$row['b'];

                                                    ?><table width="100%" cellpadding="0" cellspacing="5" bgcolor="#F4F4F4">
                                                        <tr>

                                                        <tr>
                                                            <td height="135" align="center">


                                                                 <font color="#33666666" style="font-size:12px"><img src="../admin/upload/admin/<?php echo $b;?>" width="600px" height="350px"></font><br><br><br><br>
                                                                <font color="#33666666" style="font-size:12px"><img src="../admin/upload/admin/<?php echo $a;?>" width="600px" height="350px"></font>
                                                                <br>
                                                                <br>


                                                            </td>
                                                        </tr>
                                                    </table>
                                                    </tr><?php }?>
                                                </table>
                                            </td>
                                        </tr>
                                    </table></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td colspan="2" valign="top" height="2"></td>
                </tr><tr><td colspan="2" height="20" valign="top">		     <table width="100%"  border="0" cellspacing="1" cellpadding="1" background="images/bottom.gif">
                            <tr>
                                <td height="26" align="center" valign="bottom"><div align="center">&copy; All Rights Reserved &copy <strong> A&A </strong> </div></td>
                            </tr>
                        </table>
                        <div align="center"></div>
                    </td>
                </tr>
            </table></td>
    </tr>
</table>
</body>
</html>