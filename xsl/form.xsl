<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<div>
 <table border="1">
      <tr bgcolor="#9acd32">
        <th>Position</th>
        <th>Name</th>
        <th>Team</th>
        <th>Club</th>
      </tr>
  <xsl:for-each select="form/person">
<tr>
   <td> <xsl:value-of select="name" /></td>
   <td><xsl:value-of select="favteam" /></td>
   <td><xsl:value-of select="winner" /></td>
   <td><xsl:value-of select="comment" /></td>
</tr>
  </xsl:for-each>
</table>

</div>
</xsl:template>

</xsl:stylesheet>


