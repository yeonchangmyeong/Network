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
	  <th whidth=300>UdpLength</th>
	  <th whidth=300>UdpChecksum</th>
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
 		$jb_sql = "SELECT * FROM udpcapture LIMIT 100;";
		$jb_result = mysqli_query( $jb_conn, $jb_sql );
		
		while( $jb_row = mysqli_fetch_array($jb_result)) {
	?>
	<tbody>
		<tr align=center>			
                                <td><?php echo $jb_row[ 'SourcePort' ];?></td>
                                <td><?php echo $jb_row[ 'DestPort' ];?></td>
                                <td><?php echo $jb_row[ 'UdpLength' ];?></td>
                                <td><?php echo $jb_row[ 'UdpChecksum' ];?></td>
		
</tr>
      </tbody>
<?php } ?>
    </table>
  </body>
</html>
