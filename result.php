<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>result</title>
	<style>
      body {
	background-image : url("https://ifh.cc/g/BCvsTm.jpg");
        background-repeat:no-repeat;
        background-size: cover;
	
        font-family: Consolas, monospace;
        font-family: 12px;
      }
      table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr align=center>
          <th whidth=300>EthernetType</th>
          <th whidth=300>SrcMacAddr</th>
          <th whidth=300>DstMacAddr</th>
	  <th whidth=300>IP version</th>
	  <th whidth=300>IP header Length</th>
	  <th whidth=300>TypeOfService</th>
	  <th whidth=300>IP Total Length</th>
	  <th whidth=300>Identification</th>
	  <th whidth=300>TimeToLive</th>
	  <th whidth=300>protocol</th>
	  <th whidth=300>IPchecksum</th>
	  <th whidth=300>Src IP Addr</th>
	  <th whidth=300>Dst IP Addr</th>
        </tr>
      </thead><link rel="stylesheet" href="./selectstyle.css">
 <nav>
        <ul>
            <li><a href="login.html">LoginPage</a></li>
            <li><a href="selection.html">SelectionPage</a></li>
        </ul>
    </nav>

	<?php
  		$jb_conn = mysqli_connect( 'localhost', 'root', '12345678', 'capture' );
 		$jb_sql = "SELECT * FROM capture LIMIT 100;";
		$jb_result = mysqli_query( $jb_conn, $jb_sql );
		
		while( $jb_row = mysqli_fetch_array($jb_result)) {
	?>
	<tbody>
		<tr align=center>			
				<td><?php echo $jb_row['EthernetType'];?></td>
                                <td><?php echo$jb_row[ 'SrcMacAddr' ];?></td>
                                <td><?php echo$jb_row[ 'DstMacAddr' ];?></td>
		        	<td><?php echo $jb_row[ 'IPversion' ];?></td>
		        	<td><?php echo $jb_row[ 'IpHeaderLength' ];?></td>
                                <td><?php echo $jb_row[ 'TypeOfService' ];?></td>
                                <td><?php echo$jb_row[ 'IpTotalLength' ];?></td>
                                <td><?php echo$jb_row[ 'Identification' ];?></td>
                                <td><?php echo $jb_row[ 'TimetoLive' ];?></td>
                                <td><?php echo $jb_row[ 'Protocol' ];?></td>
                                <td><?php echo$jb_row[ 'IpChecksum' ];?></td>
                                <td><?php echo $jb_row[ 'SrcIpAddr' ];?></td>
                                <td><?php echo $jb_row[ 'DstIpAddr' ];?></td>
		
</tr>
      </tbody>
<?php } ?>
    </table>
  </body>
</html>
