<HTML>
<HEAD>
  <TITLE>GNU TeXmacs Guide (FSF GNU project)</TITLE>
</HEAD>
<body COLOR="#000000" BGCOLOR="#00BFFF">
<BASEFONT SIZE=2>

<CENTER>
  <TABLE CELLPADDING="3" HALIGN="center" VALIGN="center">
    <TR>
      <TD><FONT COLOR="#663300" SIZE=+1><B>
        GNU TeXmacs
      </B></FONT></TD>
    </TR>
  </TABLE>
</CENTER>

<TABLE BORDER="0" CELLSPACING="3" CELLPADDING="0" VALIGN="top">
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Welcome.html" TARGET="Main">Welcome</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Samples.html" TARGET="Main">Screen samples</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Manual.html" TARGET="Main">Documentation</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Changes.html" TARGET="Main">Changes</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Authors.html" TARGET="Main">Copyright</A></TD>
  </TR>
</TABLE>
<HR>

<CENTER>
  <TABLE CELLPADDING="3" HALIGN="center" VALIGN="center">
    <TR>
      <TD><FONT COLOR="#663300" SIZE=+1><B>
        Download
      </B></FONT></TD>
    </TR>
  </TABLE>
</CENTER>

<TABLE BORDER="0" CELLSPACING="3" CELLPADDING="0" VALIGN="top">
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="ftp://ftp.texmacs.org/pub/TeXmacs/Install.html" TARGET="Main">Binaries</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="ftp://ftp.texmacs.org/pub/TeXmacs/Compile.html" TARGET="Main">Source code</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="http://packages.debian.org/unstable/editors/texmacs.html" TARGET="Main">Debian package</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="ftp://ftp.texmacs.org/pub/TeXmacs/RPM.html" TARGET="Main">RPM package</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="ftp://ftp.texmacs.org/pub/TeXmacs/Fonts.html" TARGET="Main">Extra fonts</A></TD>
  </TR>
</TABLE>
<HR>

<CENTER>
  <TABLE CELLPADDING="3" HALIGN="center" VALIGN="center">
    <TR>
      <TD><FONT COLOR="#663300" SIZE=+1><B>
        Feedback
      </B></FONT></TD>
    </TR>
  </TABLE>
</CENTER>

<TABLE BORDER="0" CELLSPACING="3" CELLPADDING="0" VALIGN="top">
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="FAQ.html" TARGET="Main">FAQ</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Bugs.html" TARGET="Main">Known bugs</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Suggestions.html" TARGET="Main">Suggestions</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Support.html" TARGET="Main">User support</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Mail.html" TARGET="Main">Contact us</A></TD>
  </TR>
</TABLE>
<HR>

<CENTER>
  <TABLE CELLPADDING="3" HALIGN="center" VALIGN="center">
    <TR>
      <TD><FONT COLOR="#663300" SIZE=+1><B>
        Links
      </B></FONT></TD>
    </TR>
  </TABLE>
</CENTER>

<TABLE BORDER="0" CELLSPACING="3" CELLPADDING="0" VALIGN="top">
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Links1.html" TARGET="Main">Dependencies</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Links2.html" TARGET="Main">Extra plug-ins</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="Links3.html" TARGET="Main">Computer algebra</A></TD>
  </TR>
  <TR VALIGN="Top">
    <TD><IMG SRC="../Images/pootje.gif" VSPACE="1"></TD>
    <TD>&nbsp;<A HREF="http://www.gnu.org" TARGET="Main">GNU home page</A></TD>
  </TR>
</TABLE>
<HR>

<CENTER>
  <TABLE CELLPADDING="3" HALIGN="center" VALIGN="center">
    <TR>
      <TD><FONT COLOR="#663300" SIZE=+1><B>
        Visitors
      </B></FONT></TD>
    </TR>
  </TABLE>
</CENTER>

<CENTER>
<?php
function affiche($i) {
	echo "<A HREF=\"http://www-stats.texmacs.org\" TARGET=\"Main\">";
        switch ($i) {
                case "0": echo "<img src=\"../Images/0.gif\" BORDER=0>";break;
                case "1": echo "<img src=\"../Images/1.gif\" BORDER=0>";break;
                case "2": echo "<img src=\"../Images/2.gif\" BORDER=0>";break;
                case "3": echo "<img src=\"../Images/3.gif\" BORDER=0>";break;
                case "4": echo "<img src=\"../Images/4.gif\" BORDER=0>";break;
                case "5": echo "<img src=\"../Images/5.gif\" BORDER=0>";break;
                case "6": echo "<img src=\"../Images/6.gif\" BORDER=0>";break;
                case "7": echo "<img src=\"../Images/7.gif\" BORDER=0>";break;
                case "8": echo "<img src=\"../Images/8.gif\" BORDER=0>";break;
                case "9": echo "<img src=\"../Images/9.gif\" BORDER=0>";break;
        }
	echo "</A>";
}

// nom du fichier contenant le nombre de visiteurs
$visiteur="Compteur.dat";

//recuperation de la variable

$file = @fopen($visiteur, "r");
$num = fgets($file,4096);
fclose($file);
$num++;
$file = @fopen($visiteur, "w");
fputs($file,$num);
fclose($file);
$i="$num";
$num=strrev($i);
$cpt=0;
while ($i>1){
        $i=$i/10;
        $cpt++;
}
echo "<table cellspacing=0 cellpadding=0 border=0>";
echo "<tr>";
for ($i=0;$i<$cpt;$i++){
        echo "<td>";
        $j=$num % 10;
        $num=$num/10;
        affiche($j);
        echo "</td>";
        }
echo "</tr>";
echo "</table>";
?>
</CENTER>

</BODY>
</HTML>
