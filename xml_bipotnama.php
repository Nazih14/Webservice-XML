<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");
$s = "select * from `bipotnama`";

if(isset($_GET["TahunID"])){
$s = "select * from `bipotnama` where TahunID='".$_GET["TahunID"]."' and  MhswID='".$_GET["MhswID"]."' ";
}

$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){


/*
 `BIPOTNamaID` int(11) NOT NULL AUTO_INCREMENT,
  `KodeID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `RekeningID` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Urutan` int(11) NOT NULL DEFAULT '0',
  `Nama` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Singkatan` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `TrxID` int(2) NOT NULL DEFAULT '0',
  `Baris` int(11) NOT NULL DEFAULT '0',
  `Detil` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `DefJumlah` bigint(20) NOT NULL DEFAULT '0',
  `DefBesar` bigint(20) NOT NULL DEFAULT '0',
  `Diskon` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `KenaDenda` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `DipotongBeasiswa` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `Catatan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `TglBuat` date DEFAULT NULL,
  `LoginBuat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TglEdit` date DEFAULT NULL,
  `LoginEdit` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
*/

				$BIPOTNamaID=$d["BIPOTNamaID"];
				$KodeID=$d["KodeID"];
				$RekeningID=$d["RekeningID"];
				$Nama=$d["Nama"];
			    $TrxID=$d["TrxID"];
				$Baris=$d["Baris"];
				$Detil=$d["Detil"];
				$DefBesar=$d["DefBesar"];
				$DefJumlah=$d["DefJumlah"];
				$Diskon=$d["Diskon"];
				$KenaDenda=$d["KenaDenda"];
				$Catatan="-";//$d["Catatan"];
				$NA=$d["NA"];
				$TglBuat=$d["TglBuat"];
				$LoginBuat=$d["LoginBuat"];
				$TglEdit=$d["TglEdit"];
				$LoginEdit=$d["LoginEdit"];
				
												
				print "<record>\n";
				
				print "  <BIPOTNamaID>$BIPOTNamaID</BIPOTNamaID>\n";
				print "  <KodeID>$KodeID</KodeID>\n";
				print "  <RekeningID>$RekeningID</RekeningID>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <TrxID>$TrxID</TrxID>\n";
				
				// print "  <Baris>$Baris</Baris>\n";
				print "  <Detil>$Detil</Detil>\n";
				print "  <DefBesar>$DefBesar</DefBesar>\n";
				print "  <DefJumlah>$DefJumlah</DefJumlah>\n";
				print "  <Diskon>$Diskon</Diskon>\n";
				print "  <Catatan>$Catatan</Catatan>\n";
				
				
				
			

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				
				print "  <BIPOTNamaID>$BIPOTNamaID</BIPOTNamaID>\n";
				print "  <KodeID>$KodeID</KodeID>\n";
				print "  <RekeningID>$RekeningID</RekeningID>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <TrxID>$TrxID</TrxID>\n";
				
				// print "  <Baris>$Baris</Baris>\n";
				print "  <Detil>$Detil</Detil>\n";
				print "  <DefBesar>$DefBesar</DefBesar>\n";
				print "  <DefJumlah>$DefJumlah</DefJumlah>\n";
				print "  <Diskon>$Diskon</Diskon>\n";
				print "  <Catatan>$Catatan</Catatan>\n";
				
				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
?>
	