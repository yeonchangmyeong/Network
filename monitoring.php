<?php
if(isset($_POST['submit']))
    $networktype = $_POST['networktype'];
    $choice = $_POST['choice'];
    echo $choice;

    echo "<br>";#############################################TCP
    if($networktype == "TCP")
    {
        if($choice == "CAP")
        {
            $var = shell_exec("./capturedbinsert.sh");
	    echo $var;
	    
		echo "<script>location.href='result.php';</script>";
        }
        elseif($choice == "UDP")
        {
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "ICMP")
        {
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "TCP")
        {
		$var = shell_exec("./tcpdbinsert.sh");
		shell_exec("sh tcpdbcsv.sh");
		sleep(1);
		shell_exec("sh tcpcopy.sh");
		echo "<script>location.href='tcpresult.php';</script>";
	
        }
        elseif($choice == "Clean")
        {
            $VAR = shell_exec("./tcpclean.sh");
            echo $var;
            echo "<br>"."TCP 데이터 삭제완료 ETH/IP/PAYLOAD/TCPDB/TCPTXT";
        }
        elseif($choice == "allclean")
        {
            $var = shell_exec("./clean.sh");
            echo $var;
            echo "<br>"."모든 데이터 삭제 완료 ";
	}

        else
        {
		echo "<script>location.href='errorpage.html';</script>";
        }
    }###################################################UDP
    elseif($networktype == "UDP")
    {
        if($choice == "CAP")
        {
            	$var = shell_exec("./capturedbinsert.sh");
            	echo $var;
		echo "<script>location.href='result.php';</script>";
        }
        elseif($choice == "Clean")
        {
            $VAR = shell_exec("./udpclean.sh");
            echo $var;
            echo "<br>"."UDP 데이터 삭제완료 ETH/IP/PAYLOAD/UDPDB/UDPTXT";
        }
        elseif($choice == "UDP")
        {
            $var = shell_exec("./udbdbinsert.sh");
	    echo $var;
            echo "<br>"."UDP PRINTED SUCCESSFULLY";
		echo "<script>location.href='udpresult.php';</script>";
        }
        elseif($choice == "TCP")
        {
            $var = shell_exec("");
	    echo $var;
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "ICMP")
        {
            $var = shell_exec("");
	    echo $var;
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "allclean")
        {
            $var = shell_exec("./clean.sh");
            echo $var;
            echo "<br>"."모든 데이터 삭제완료";
        }
        else
        {
		echo "<script>location.href='errorpage.html';</script>";
        }
    }####################################################ICMP
    elseif($networktype == "ICMP")
    {
        if($choice == "CAP")
        {
            	$var = shell_exec("./capturedbinsert.sh");
            	echo $var;
		echo "<script>location.href='result.php';</script>";
	}       
	if($choice == "ICMP")
        {
            $var = shell_exec("./icmpdbinsert.sh");
            echo $var;
            echo "<br>"."ETH/IP header PRINTED SUCCESSFULLY";
		echo "<script>location.href='icmpresult.php';</script>";
        }
        elseif($choice == "TCP")
        {
            $var = shell_exec("");
	    echo $var;
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "UDP")
        {
            $var = shell_exec("");
	    echo $var;
		echo "<script>location.href='errorpage.html';</script>";
        }
        elseif($choice == "Clean")
        {
            $VAR = shell_exec("./icmpclean.sh");
            echo $var;
            echo "<br>"."ICMP 데이터 삭제완료 ETH/IP/PAYLOAD/ICMPDB/ICMPTXT";
        }
        elseif($choice == "allclean")
        {
            $var = shell_exec("./clean.sh");
            echo $var;
            echo "<br>"."모든데이터 삭제 완료";
        }
        else
        {
		echo "<script>location.href='errorpage.html';</script>";
        }
    }
    

function export()
{
   echo "<script>location.href='csvexport.php';</script>";

   
}
if(array_key_exists('test',$_POST))
{	
	export();
}


?>
