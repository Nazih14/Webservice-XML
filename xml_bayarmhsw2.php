<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");
$s = "select * from `bayarmhsw2`";
if(isset($_GET["TahunID"])){
$s = "select * from `bayarmhsw2` where TahunID='".$_GET["TahunID"]."' and  MhswID='".$_GET["MhswID"]."' ";
}


$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){


/*
 `BayarMhsw2ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BayarMhsw2Ref` bigint(20) NOT NULL DEFAULT '0',
  `BayarMhswID` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `BIPOTMhswID` bigint(20) NOT NULL DEFAULT '0',
  `BIPOTNamaID` bigint(20) NOT NULL DEFAULT '0',
  `Jumlah` bigint(20) NOT NULL DEFAULT '0',
  `LoginBuat` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalBuat` date DEFAULT NULL,
  `LoginEdit` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalEdit` date DEFAULT NULL,
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
*/

				$KRSID=$d["KRSID"];
				$KodeID=$d["KodeID"];
				$KHSID=$d["KHSID"];
				$MhswID=$d["MhswID"];
			    $TahunID=$d["TahunID"];
				$JadwalID=$d["JadwalID"];
				$JadwalResponsiID=$d["JadwalResponsiID"];
				$MKID=$d["MKID"];
				$MKKode=$d["MKKode"];
				$Nama=$d["Nama"];
				$SKS=$d["SKS"];
				$HargaStandar=$d["HargaStandar"];
				$Harga=$d["Harga"];
				$Bayar=$d["Bayar"];
				$Tugas1=$d["Tugas1"];
				$Tugas2=$d["Tugas2"];
				$Tugas3=$d["Tugas3"];
				$Tugas4=$d["Tugas4"];
				$Tugas5=$d["Tugas5"];
				$Presensi=$d["Presensi"];
				$_Presensi=$d["_Presensi"];
				$UTS=$d["UTS"];
				$UAS=$d["UAS"];
				$Responsi=$d["Responsi"];
				$NilaiAkhir=$d["NilaiAkhir"];
				$GradeNilai=$d["GradeNilai"];
				$BobotNilai=$d["BobotNilai"];
				$StatusKRSID=$d["StatusKRSID"];													               
				
				
				
				
							


				
				
												
				print "<record>\n";
				
				print "  <KRSID>$KRSID</KRSID>\n";
				print "  <KodeID>$KodeID</KodeID>\n";
				print "  <KHSID>$KHSID</KHSID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <JadwalID>$JadwalID</JadwalID>\n";
				print "  <JadwalResponsiID>$JadwalResponsiID</JadwalResponsiID>\n";
				print "  <MKID>$MKID</MKID>\n";
				print "  <MKKode>$MKKode</MKKode>\n";
				print "  <SKS>$SKS</SKS>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <HargaStandar>$HargaStandar</HargaStandar>\n";
				print "  <Harga>$Harga</Harga>\n";
				print "  <Bayar>$Bayar</Bayar>\n";
				print "  <Tugas1>$Tugas1</Tugas1>\n";
				print "  <Tugas2>$Tugas2</Tugas2>\n";
				print "  <Tugas3>$Tugas3</Tugas3>\n";
				print "  <Tugas4>$Tugas4</Tugas4>\n";
				print "  <Tugas5>$Tugas5</Tugas5>\n";
				print "  <Presensi>$Presensi</Presensi>\n";
				print "  <_Presensi>$_Presensi</_Presensi>\n";
				print "  <UTS>$UTS</UTS>\n";
				print "  <UAS>$UAS</UAS>\n";
				print "  <Responsi>$Responsi</Responsi>\n";
				print "  <NilaiAkhir>$NilaiAkhir</NilaiAkhir>\n";
				print "  <GradeNilai>$GradeNilai</GradeNilai>\n";
				print "  <BobotNilai>$BobotNilai</BobotNilai>\n";
				print "  <StatusKRSID>$StatusKRSID</StatusKRSID>\n";
				
						
			

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				print "  <KRSID>$KRSID</KRSID>\n";
				print "  <KodeID>$KodeID</KodeID>\n";
				print "  <KHSID>$KHSID</KHSID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <JadwalID>$JadwalID</JadwalID>\n";
				print "  <JadwalResponsiID>$JadwalResponsiID</JadwalResponsiID>\n";
				print "  <MKID>$MKID</MKID>\n";
				print "  <MKKode>$MKKode</MKKode>\n";
				print "  <SKS>$SKS</SKS>\n";
				print "  <HargaStandar>$HargaStandar</HargaStandar>\n";
				print "  <Harga>$Harga</Harga>\n";
				print "  <Bayar>$Bayar</Bayar>\n";
				print "  <Tugas1>$Tugas1</Tugas1>\n";
				print "  <Tugas2>$Tugas2</Tugas2>\n";
				print "  <Tugas3>$Tugas3</Tugas3>\n";
				print "  <Tugas4>$Tugas4</Tugas4>\n";
				print "  <Tugas5>$Tugas5</Tugas5>\n";
				print "  <Presensi>$Presensi</Presensi>\n";
				print "  <_Presensi>$_Presensi</_Presensi>\n";
				print "  <UTS>$UTS</UTS>\n";
				print "  <UAS>$UAS</UAS>\n";
				print "  <Responsi>$Responsi</Responsi>\n";
				print "  <NilaiAkhir>$NilaiAkhir</NilaiAkhir>\n";
				print "  <GradeNilai>$GradeNilai</GradeNilai>\n";
				print "  <BobotNilai>$BobotNilai</BobotNilai>\n";
				print "  <StatusKRSID>$StatusKRSID</StatusKRSID>\n";
				
				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
?>
	