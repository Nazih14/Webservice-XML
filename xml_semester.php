<?php
header("Content-type: text/xml");

mysql_connect("localhost","root","root");
mysql_select_db("sisbam");

if(isset($_GET["MhswID"])){
	$MhswID=$_GET["MhswID"];


	//http://192.168.1.14/webservices/xml_semester.php?MhswID=0110112001
	
$s = "select * from `dosen` where `MhswID` like '$MhswID' order by  `TahunID` asc";
$q=mysql_query($s);
if(mysql_num_rows($q)>0){
	$TotalSKS=0;
	print "<mahasiswa>\n";
			while($d=mysql_fetch_array($q)){
				$KHSID=$d["KHSID"];
				$TahunID=$d["TahunID"];
				$KodeID=$d["KodeID"];
				$ProgramID=$d["ProgramID"];
			    $ProdiID=$d["ProdiID"];
				$MhswID=$d["MhswID"];
				$SKS=$d["SKS"];
				$IP=$d["IP"];
				$TotalSKS +=$SKS;
												
				print "<record>\n";
				
				print "  <TahunID>$TahunID</TahunID>\n";
				print "  <KodeID>$KodeID</KodeID>\n";
				print "  <ProgramID>$ProgramID</ProgramID>\n";
				print "  <ProdiID>$ProdiID</ProdiID>\n";
				print "  <MhswID>$MhswID</MhswID>\n";
        print "  <BIPOTNamaID>$BIPOTNamaID</BIPOTNamaID>\n";
        print "  <BayarMhswID>$BayarMhswID</BayarMhswID>\n";
				// print "  <SKS>$SKS</SKS>\n";
				// print "  <IP>$IP</IP>\n";
				// print "  <sukses>sukses</sukses>\n";
				// print "  <TotalSKS>$TotalSKS</TotalSKS>\n";			

				print "</record>\n";
			}
	print "</mahasiswa>\n";
}
else{
	$null="null";
	print "<mahasiswa>\n";
		print "<record>\n";
				print "  <TotalSKS>$null</TotalSKS>\n";
				
		print "</record>\n";
	print "</mahasiswa>\n";
	}
}
else{
print "<mahasiswa>\n";
		print "<record>\n";
				print "  <TahunID>null</TahunID>\n";
		print "</record>\n";
	print "</mahasiswa>\n";

}
?>
	