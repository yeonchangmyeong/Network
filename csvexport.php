<?php
    include("exportconfigdb.php");
    if(isset($_POST)){
        $fileName = "captureFile.csv";
   
        echo (writeUserFile($fileName))?$fileName:"-1";
        $fileName1 = "tcp.csv";
	echo (writeUserFile1($fileName1))?$fileName1:"-1";
    
        $fileName2 = "udp.csv";
	echo (writeUserFile2($fileName2))?$fileName2:"-1";
    
        $fileName3 = "icmp.csv";
	echo (writeUserFile3($fileName3))?$fileName3:"-1";
    
    }
    
#######################################################captureFile
    function writeUserFile($fileName){
        try {
            $user = DB::getConnect()->query("select * from capture");
            $file =  fopen($fileName, "w") ;
            $fileText = "";
            fwrite($file, pack("CCC",0xef,0xbb,0xbf)); 
            $fileText = "EthernetType,SrcMacAddr,DstMacAddr,IP version,IP header,Length	TypeOfService,	IP Total Length	,Identification	,TimeToLive,protocol	,IPchecksum	,Src IP Addr,	Dst IP Addr\n";
            while(($row=$user->fetch_array())!=null){
                $fileText .= $row["EthernetType"].",".$row["SrcMacAddr"].","
                            .$row["DstMacAddr"].",".$row["IPversion"].",".$row["IpHeaderLength"].",".$row["TypeOfService"].",".$row["IpTotalLength"].",".$row["Identification"].",".$row["TimetoLive"].",".$row["Protocol"].",".$row["IpChecksum"].",".$row["SrcIpAddr"].",".$row["DstIpAddr"]."\n";
            };
            fwrite($file,$fileText);
            return  true;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
#######################################################TCP
    function writeUserFile1($fileName){
        try {
            $user = DB::getConnect()->query("select * from tcpcapture");
            $file =  fopen($fileName, "w") ;
            $fileText = "";
            fwrite($file, pack("CCC",0xef,0xbb,0xbf)); 
            $fileText = "SourcePort,DestPort,SequenceNumber,AcknowledgeNumber,OffSetHeaderLength,URGFlag,AckFlag,
		PushFlag,ResetFlag,SynFlag,FinishFlag,windowSize,TcpChecksum,UrgPointer\n";
            while(($row=$user->fetch_array())!=null){
		    $fileText .= $row["SourcePort"].",".$row["DestPort"].",".$row["SequenceNumber"].","
			    .$row["AcknowledgeNumber"].",".$row["OffSetHeaderLength"].",".$row["URGFkag"].","
			    .$row["AckFlag"].",".$row["PushFlag"].",".$row["ResetFlag"].",".$row["SynFlag"].","
			    .$row["FinishFlag"].",".$row["windowSize"].",".$row["TcpChecksum"].",".$row["UrgPointer"]."\n";
            };
            fwrite($file,$fileText);
            return  true;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }
############################################################UDP
    function writeUserFile2($fileName){
       try {
            $user = DB::getConnect()->query("select * from udpcapture");
            $file =  fopen($fileName, "w") ;
            $fileText = "";
            fwrite($file, pack("CCC",0xef,0xbb,0xbf)); 
            $fileText = "SourcePort,DestPort,UdpLength,UdpChecksum\n";
            while(($row=$user->fetch_array())!=null){
                $fileText .= $row["SourcePort"].",".$row["DestPort"].",".$row["UdpLength"].","
                            .$row["UdpPCheckSum"]."\n";
            };
            fwrite($file,$fileText);
            return  true;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

   
    ###################################################icmp
    function writeUserFile3($fileName){
       try {
            $user = DB::getConnect()->query("select * from icmpcapture");
            $file =  fopen($fileName, "w") ;
            $fileText = "";
            fwrite($file, pack("CCC",0xef,0xbb,0xbf)); 
            $fileText = "ICMP Header Type,Code, ICMPCheckSum\n";
            while(($row=$user->fetch_array())!=null){
                $fileText .= $row["Type"].",".$row["Code"].","
                            .$row["ICMPCheckSum"]."\n";
            };
            fwrite($file,$fileText);
            return  true;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }
sleep(3);
header("Location:selection.html");





















?>
