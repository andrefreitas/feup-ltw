<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="/">
		<html>
			<body>
				<xsl:apply-templates select="*"/>
			</body>
		</html>
	</xsl:template>

	<xsl:template match="name">
		<b><xsl:value-of select="." /></b>
	</xsl:template>

	<xsl:template match="email">
		<i><xsl:value-of select="." /></i><br/>
	</xsl:template>


</xsl:stylesheet>