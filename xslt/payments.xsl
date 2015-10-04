<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/payments">
	<html>
		<head>
			<title>Payments from IFMB</title>
		</head>
		<body>
			<table border="1">
				<tr>
					<th>Invoice</th>
					<th>Value</th>
					<th>Date</th>
				</tr>
				<xsl:for-each select="payment">
					<tr>
						<td><xsl:value-of select="invoice" /></td>
						<td><xsl:value-of select="value" /></td>
						<td><xsl:value-of select="date" /></td>
					</tr>
				</xsl:for-each>
			</table>
		</body>
	</html>
	</xsl:template>
</xsl:stylesheet>