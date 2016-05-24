<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");

if(isset($_REQUEST["user"])){
	$user=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];

	

	// http://localhost/webservices/xml_login.php?user=0110112001&pass=01

$s = "select * from `mhsw` where `Login` like '$user' order by `MhswID` desc";
$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	print "<mahasiswa>\n";
			$d=mysql_fetch_array($q);
				// $KHSID=$d["KHSID"];
				$TahunID=$d["TahunID"];
				$KodeID=$d["KodeID"];
				$ProgramID=$d["ProgramID"];
			    $ProdiID=$d["ProdiID"];
				$MhswID=$d["MhswID"];
				// $SKS=$d["SKS"];
				$IP=$d["IP"];
				$TotalSKS=$d["TotalSKS"];
				$Login=$d["Login"];
				$LevelID=$d["LevelID"];
				$Password=$d["Password"];
			    $NIMSementara=$d["NIMSementara"];
				$Nama=$d["Nama"];
				$Foto=$d["Foto"];
				$PenasehatAkademik=$d["PenasehatAkademik"];
				$Kelamin=$d["Kelamin"];
				$WargaNegara=$d["WargaNegara"];
				$TempatLahir=$d["TempatLahir"];
				$TanggalLahir=$d["TanggalLahir"];
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
				print "  <TotalSKS>$TotalSKS</TotalSKS>\n";
				print "  <sukses>sukses</sukses>\n";

				print "  <alamat>$Alamat $Kota $RT/$RW, $KodePos $Propinsi</alamat>\n";

				print "  <pass>$pass</pass>\n";


				print "</record>\n";
	print "</mahasiswa>\n";
}else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				// print "  <TotalSKS>$null</TotalSKS>\n";
				// print "  <user>$user</user>\n";

				// print "  <pass>".left(password($pass),10)."</pass>\n";

				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
}else{
		$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
		print "Data Kosong\n";
		print "</record>\n";
	print "</mahasiswa>\n";
}

?>
	