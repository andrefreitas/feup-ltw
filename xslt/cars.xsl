<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/cars">
	<registrations>
	  <xsl:for-each select="car">
	    <xsl:element name="registration">
	      <xsl:value-of select="registration"/> :  <xsl:value-of select="@owner"/> 
	    </xsl:element>
	 
	  </xsl:for-each>
	</registrations>
	</xsl:template>
</xsl:stylesheet>