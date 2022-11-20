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
	  <th whidth=300>ICMP Header Type</th>
	  <th whidth=300>Code</th>
	  <th whidth=300>ICMPCheckSum</th>
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
 		$jb_sql = "SELECT * FROM icmpcapture LIMIT 100;";
		$jb_result = mysqli_query( $jb_conn, $jb_sql );
		
		while( $jb_row = mysqli_fetch_array($jb_result)) {
	?>
	<tbody>
		<tr align=center>			
                                <td><?php echo $jb_row[ 'Type' ];?></td>
                                <td><?php echo $jb_row[ 'Code' ];?></td>
                                <td><?php echo $jb_row[ 'Checksum' ];?></td>
		
</tr>
      </tbody>
<?php } ?>
    </table>
  </body>
</html>
