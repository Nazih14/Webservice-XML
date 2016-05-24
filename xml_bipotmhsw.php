<?php
header("Content-type: text/Json");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");
$s = "select * from `bipotmhsw`";
if(isset($_GET["TahunID"])){
$s = "select * from `bipotmhsw` where TahunID='".$_GET["TahunID"]."' and  MhswID='".$_GET["MhswID"]."' ";
}
$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){

/*
CREATE TABLE IF NOT EXISTS `bipotmhsw` (
  `BIPOTMhswID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BIPOTMhswRef` bigint(20) NOT NULL DEFAULT '0',
  `KodeID` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `COAID` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `PMBMhswID` smallint(6) NOT NULL DEFAULT '1',
  `PMBID` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `MhswID` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `TahunID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `BIPOT2ID` bigint(20) NOT NULL DEFAULT '0',
  `BIPOTNamaID` bigint(20) NOT NULL DEFAULT '0',
  `TambahanNama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TrxID` int(11) NOT NULL DEFAULT '1',
  `Jumlah` int(11) NOT NULL DEFAULT '1',
  `Besar` bigint(20) NOT NULL DEFAULT '0',
  `Dibayar` bigint(20) NOT NULL DEFAULT '0',
  `Dispensasi` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `NomerDispensasi` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Catatan` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Draft` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `LoginBuat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalBuat` date DEFAULT NULL,
  `LoginEdit` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalEdit` date DEFAULT NULL,
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `FieldLama` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Diskon` bigint(20) DEFAULT NULL,
  `Sisa` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`BIPOTMhswID`),
  KEY `PMBID` (`PMBID`),
  KEY `MhswID` (`MhswID`),
  KEY `TahunID` (`TahunID`),
  KEY `BIPOT2ID` (`BIPOT2ID`),
  KEY `BIPOTNamaID` (`BIPOTNamaID`),
  KEY `PMBMhswID` (`PMBMhswID`),
  KEY `BIPOTMhswRef` (`BIPOTMhswRef`),
  KEY `KodeID` (`KodeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2465 ;
*/

				$KHSID=$d["BIPOTNamaID"];
				$TahunID=$d["TahunID"];
				$KodeID=$d["KodeID"];
				$PMBID=$d["PMBID"];
				$ProgramID=$d["ProgramID"];
			    $ProdiID=$d["ProdiID"];
				$MhswID=$d["MhswID"];
				$BIPOTMhswID=$d["BIPOTNamaID"];
				$Nama=$d["Nama"];
				$Besar=$d["Besar"];
				$Dibayar=$d["Dibayar"];
				$Jumlah=$d["Jumlah"];
				$Dispensasi=$d["Dispensasi"];
				$Diskon=$d["Diskon"];
				$Sisa=$d["Sisa"];
				$Catatan=$d["Catatan"];
												
				print "<record>\n";
				
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <Besar>$Besar</Besar>\n";
				print "  <Dibayar>$Dibayar</Dibayar>\n";
				print "  <Dispensasi>$Dispensasi</Dispensasi>\n";
				print "  <Diskon>$Diskon</Diskon>\n";
				print "  <Jumlah>$Jumlah</Jumlah>\n";
				print "  <Sisa>$Sisa</Sisa>\n";
				print "  <Catatan>$Catatan</Catatan>\n";
				
			

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <Besar>$Besar</Besar>\n";
				print "  <Dibayar>$Dibayar</Dibayar>\n";
				print "  <Dispensasi>$Dispensasi</Dispensasi>\n";
				print "  <Diskon>$Diskon</Diskon>\n";
				print "  <Jumlah>$Jumlah</Jumlah>\n";
				print "  <Sisa>$Sisa</Sisa>\n";
				print "  <Catatan>$Catatan</Catatan>\n";
				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
?>
	