<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");
$s = "select * from `bayarmhsw`";
if(isset($_GET["TahunID"])){
$s = "select * from `bayarmhsw` where TahunID='".$_GET["TahunID"]."' and  MhswID='".$_GET["MhswID"]."' ";
}
$q=mysql_query($s);

if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){


/*
CREATE TABLE IF NOT EXISTS `bayarmhsw` (
  `BayarMhswID` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `BayarMhswRef` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `KodeID` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `COAID` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TahunID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `RekeningID` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `PMBID` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `MhswID` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Autodebet` smallint(6) NOT NULL DEFAULT '0',
  `TrxID` int(11) NOT NULL DEFAULT '1',
  `PMBMhswID` smallint(6) NOT NULL DEFAULT '1',
  `Bank` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `BuktiSetoran` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `Tanggal` date NOT NULL DEFAULT '0000-00-00',
  `Jumlah` bigint(20) NOT NULL DEFAULT '0',
  `JumlahLain` bigint(20) NOT NULL DEFAULT '0',
  `CicilanID` bigint(20) NOT NULL DEFAULT '0',
  `Proses` int(11) NOT NULL DEFAULT '0',
  `Keterangan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Cetak` int(11) NOT NULL DEFAULT '0',
  `LoginBuat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalBuat` datetime DEFAULT NULL,
  `LoginEdit` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalEdit` datetime DEFAULT NULL,
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`BayarMhswID`),
  KEY `KodeID` (`KodeID`),
  KEY `RekeningID` (`RekeningID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

*/

				$BayarMhswID=$d["BayarMhswID"];
				$BayarMhswRef=$d["BayarMhswRef"];
				$PMBID=$d["PMBID"];
				$KodeID=$d["KodeID"];
				$TahunID=$d["TahunID"];
			    $RekeningID=$d["RekeningID"];
				$MhswID=$d["MhswID"];
				$Bank=$d["Bank"];
				$BuktiSetoran=$d["BuktiSetoran"];
				$Tanggal=$d["Tanggal"];
				$Jumlah=$d["Jumlah"];
				$JumlahLain=$d["JumlahLain"];
				$CicilanID=$d["CicilanID"];
				$Proses=$d["Proses"];
				$Keterangan=$d["Keterangan"];
				
												
				print "<record>\n";
				
				print "  <BayarMhswID>$BayarMhswID</BayarMhswID>\n";
				// print "  <BayarMhswRef>$BayarMhswRef</BayarMhswRef>\n";
				print "  <PMBID>$PMBID</PMBID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <RekeningID>$RekeningID</RekeningID>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <Bank>$Bank</Bank>\n";
				print "  <BuktiSetoran>$BuktiSetoran</BuktiSetoran>\n";
				print "  <Tanggal>$Tanggal</Tanggal>\n";
				print "  <Jumlah>$Jumlah</Jumlah>\n";
				// print "  <Keterangan>$Keterangan</Keterangan>\n";
				print "  <JumlahLain>$JumlahLain</JumlahLain>\n";
				print "  <CicilanID>$CicilanID</CicilanID>\n";
				print "  <Proses>$Proses</Proses>\n";
				

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";

				print "  <BayarMhswID>$BayarMhswID</BayarMhswID>\n";
				// print "  <BayarMhswRef>$BayarMhswRef</BayarMhswRef>\n";
				print "  <PMBID>$PMBID</PMBID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <RekeningID>$RekeningID</RekeningID>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <Bank>$Bank</Bank>\n";
				print "  <BuktiSetoran>$BuktiSetoran</BuktiSetoran>\n";
				print "  <Tanggal>$Tanggal</Tanggal>\n";
				print "  <Jumlah>$Jumlah</Jumlah>\n";
				// print "  <Keterangan>$Keterangan</Keterangan>\n";
				print "  <JumlahLain>$JumlahLain</JumlahLain>\n";
				print "  <CicilanID>$CicilanID</CicilanID>\n";
				print "  <Proses>$Proses</Proses>\n";
				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
?>
	