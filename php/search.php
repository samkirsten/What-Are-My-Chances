<?php
 
// if the 'term' variable is not sent with the request, exit
if ( !isset($_REQUEST['term']) )
	exit;
 
// connect to the database server and select the appropriate database for use
$dblink = mysql_connect('localhost', 'wamc', 'password1') or die( mysql_error() );
mysql_select_db('whataremychances');
 
// query the database table for zip codes that match 'term'
$rs = mysql_query('SELECT hospital, id FROM hospitals WHERE hospital LIKE "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by hospital asc limit 0,10', $dblink);
 
// loop through each zipcode returned and format the response for jQuery
$data = array();
if ( $rs && mysql_num_rows($rs) )
{
	while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
	{
		$data[] = array(
			'label' => $row['hospital'] ,
			'value' => $row['hospital']
		);
	}
}
 
// jQuery wants JSON data
echo json_encode($data);
flush();