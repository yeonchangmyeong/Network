<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>result</title>
	<style>
      body {
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
          <th whidth=300>Source Port</th>
          <th whidth=300>Dest Port</th>
          <th whidth=300>Sequence Number</th>
	  <th whidth=300>Acknowledge Number</th>
	  <th whidth=300>Offset Header Length</th>
	  <th whidth=300>UrgFlag</th>
	  <th whidth=300>AckFlag</th>
	  <th whidth=300>PushFlag</th>
	  <th whidth=300>ResetFlag</th>
	  <th whidth=300>SynFlag</th>
	  <th whidth=300>FinishFlag</th>
	  <th whidth=300>WindowSize</th>
	  <th whidth=300>Checksum</th>
	  <th whidth=300>UrgPointer</th>
        </tr>
      </thead>
<link rel="stylesheet" href="./selectstyle.css">
 <nav>
        <ul>
            <li><a href="login.html">LoginPage</a></li>
            <li><a href="selection.html">SelectionPage</a></li>
        </ul>
    </nav>

	<?php
  		$jb_conn = mysqli_connect( 'localhost', 'root', '12345678', 'capture' );
 		$jb_sql = "SELECT * FROM tcpcapture LIMIT 100;";
		$jb_result = mysqli_query( $jb_conn, $jb_sql );
		
		while( $jb_row = mysqli_fetch_array($jb_result)) {
	?>
	<tbody>
		<tr align=center>			
				<td><?php echo $jb_row['SourcePort'];?></td>
                                <td><?php echo$jb_row[ 'DestPort' ];?></td>
                                <td><?php echo$jb_row[ 'SequenceNumber' ];?></td>
		        	<td><?php echo $jb_row[ 'AcknowledgeNumber' ];?></td>
		        	<td><?php echo $jb_row[ 'OffSetHeaderLength' ];?></td>
                                <td><?php echo $jb_row[ 'URGFlag' ];?></td>
                                <td><?php echo$jb_row[ 'AckFlag' ];?></td>
                                <td><?php echo$jb_row[ 'PushFlag' ];?></td>
                                <td><?php echo $jb_row[ 'ResetFlag' ];?></td>
                                <td><?php echo $jb_row[ 'SynFlag' ];?></td>
                                <td><?php echo$jb_row[ 'FinishFlag' ];?></td>
                                <td><?php echo $jb_row[ 'windowSize' ];?></td>
                                <td><?php echo $jb_row[ 'TcpChecksum' ];?></td>
				<td><?php echo $jb_row[ 'UrgPointer' ];?></td>
		
</tr>
      </tbody>
      <?php } ?>
    </table>
</body>
</html>
