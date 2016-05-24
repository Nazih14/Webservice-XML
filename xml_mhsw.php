<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");
$s = "select * from `mhsw`";
$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){


/*
`KHSIDKHSID` bigint(20) NOT NULL AUTO_INCREMENT,
  `TahunID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `KodeID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ProgramID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ProdiID` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `MhswID` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `StatusMhswID` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT 'P',
  `Sesi` int(11) NOT NULL DEFAULT '0',
  `SKS` int(11) NOT NULL DEFAULT '0',
  `IP` decimal(5,2) NOT NULL DEFAULT '0.00',
  `BIPOTID` int(11) NOT NULL DEFAULT '0',
  `SaldoAwal` bigint(20) NOT NULL DEFAULT '0',
  `Biaya` int(11) NOT NULL DEFAULT '0',
  `Potongan` int(11) NOT NULL DEFAULT '0',
  `Bayar` int(11) NOT NULL DEFAULT '0',
  `Tarik` int(11) NOT NULL DEFAULT '0',
  `JumlahLain` bigint(20) NOT NULL DEFAULT '0',
  `TotalSKS` int(11) NOT NULL DEFAULT '0',
  `JumlahMK` int(11) NOT NULL DEFAULT '0',
  `MaxSKS` int(11) NOT NULL DEFAULT '0',
  `IPS` decimal(5,2) NOT NULL DEFAULT '0.00',
  `CetakKRS` int(11) NOT NULL DEFAULT '0',
  `Cetak` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `KaliCetak` int(11) NOT NULL DEFAULT '0',
  `Tutup` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `Autodebet` smallint(6) NOT NULL DEFAULT '0',
  `Blok` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `KeteranganBlok` text COLLATE latin1_general_ci NOT NULL,
  `NoSurat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TglSurat` date NOT NULL DEFAULT '0000-00-00',
  `Keterangan` text COLLATE latin1_general_ci,
  `LoginBuat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalBuat` date DEFAULT NULL,
  `LoginEdit` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TanggalEdit` date DEFAULT NULL,
  `NA` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `IPMigrasi` decimal(5,2) NOT NULL DEFAULT '0.00',
  `IPSMigrasi` decimal(5,2) NOT NULL DEFAULT '0.00',
*/

				$MhswID=$d["MhswID"];
				$Login=$d["Login"];
				$LevelID=$d["LevelID"];
				$Password=$d["Password"];
			    $NIMSementara=$d["NIMSementara"];
				$Nama=$d["Nama"];
				$Foto=$d["Foto"];
				$ProgramID=$d["ProgramID"];
				$ProdiID=$d["ProdiID"];
				$PenasehatAkademik=$d["PenasehatAkademik"];
				$Kelamin=$d["Kelamin"];
				$WargaNegara=$d["WargaNegara"];
				$TanggalLahir=$d["TanggalLahir"];
				$TempatLahir=$d["TempatLahir"];
				$Agama=$d["Agama"];
				$Alamat=$d["Alamat"];
				$Kota=$d["Kota"];
				$RT=$d["RT"];
				$RW=$d["RW"];
				$KodePos=$d["KodePos"];
				$Propinsi=$d["Propinsi"];
				$Negara=$d["Negara"];
				$Handphone=$d["Handphone"];
				$Email=$d["Email"];
				$IPK=$d["IPK"];
				$TotalSKS=$d["TotalSKS"];
				$StatusMhswID=$d["StatusMhswID"];
				$TahunID=$d["TahunID"];
				$IP=$d["IP"];

				$TglBuat=$d["TglBuat"];
				$LoginBuat=$d["LoginBuat"];
				$TglEdit=$d["TglEdit"];
				$LoginEdit=$d["LoginEdit"];
			
						
						
															
				print "<record>\n";
				
				print "  <Foto>$Foto</Foto>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <StatusMhswID>$StatusMhswID</StatusMhswID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <ProgramID>$ProgramID</ProgramID>\n";
				print "  <ProdiID>$ProdiID</ProdiID>\n";
				print "  <PenasehatAkademik>$PenasehatAkademik</PenasehatAkademik>\n";		
				print "  <Email>$Email</Email>\n";
				print "  <Agama>$Agama</Agama>\n";
				print "  <Handphone>$Handphone</Handphone>\n";
				print "  <IPK>$IPK</IPK>\n";
				print "  <IP>$IP</IP>\n";
				print "  <alamat>$Alamat $Kota $RT/$RW, $KodePos $Propinsi</alamat>\n";
				
				print "  <sukses>sukses</sukses>\n";
				


				
				
				
			

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				
				print "  <Foto>$Foto</Foto>\n";
				print "  <Nama>$Nama</Nama>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
				print "  <StatusMhswID>$StatusMhswID</StatusMhswID>\n";
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <ProgramID>$ProgramID</ProgramID>\n";
				print "  <ProdiID>$ProdiID</ProdiID>\n";
				print "  <PenasehatAkademik>$PenasehatAkademik</PenasehatAkademik>\n";		
				print "  <Email>$Email</Email>\n";
				print "  <Agama>$Agama</Agama>\n";
				print "  <Handphone>$Handphone</Handphone>\n";
				print "  <IPK>$IPK</IPK>\n";
				print "  <IP>$IP</IP>\n";
				print "  <alamat>$Alamat $Kota $RT/$RW, $KodePos $Propinsi</alamat>\n";
				
				print "  <sukses>sukses</sukses>\n";

		print "</record>\n";
	print "</mahasiswa>\n";
	}
?>
	