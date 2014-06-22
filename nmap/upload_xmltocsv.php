<html>
<head>
<title>UPLOAD NMAP XML FILE</title>
<style type="text/css">
a {text-decoration: none}
a:hover {text-decoration: underline}
</style>
</head>
<body>
<table width="100%"><tr>
	<td width="200px" valign="top">
		<?php include '../main/menu.php'; ?>
	</td>
	<td valign="top">
	<br><br>
	<table cellspacing="5" cellpadding="5" width="600">
		<tr>
			<td colspan="2">
				<form enctype="multipart/form-data" action="xmltocsv.php" method="POST">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000000" />
				<img src="images/nmap_logo.png"></img>
				<p>The NMAP XML file will be parsed and converted to a comma delimited format for further analysis in your favorite spreadsheet application.</p>
			</td>
		</tr>
		<tr>
			<td><p>Select NMAP XML file: </p></td><td><input name="userfile" type="file" /></td>
		</tr>
		<tr><td colspan="2">
		<table>
			<tr><td width="100px">Host State:</td><td><input type="checkbox" value="up" name="isUp" checked>Up</td><td><input type="checkbox" value="down" name="isDown">Down</td></tr>
		</table>
		<table>
			<tr><td width="100px">Port State:</td><td><input type="checkbox" value="open" name="isOpen" checked>Open</td><td><input type="checkbox" value="closed" name="isClosed">Closed</td><td><input type="checkbox" value="filtered" name="isFiltered">Filtered</td><td><input type="checkbox" value="openfiltered" name="isOpenFiltered">Open|Filtered</td></tr>
		</table>
		</td></tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Process File" />
				</form>
			</td>
		</tr>
	</table>
	</td>
</tr></table>

</body>
</html>
