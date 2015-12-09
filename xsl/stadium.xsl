<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
   <xsl:template match="/">
      <div>
         <table border="1">
            <tr bgcolor="#9acd32">
               <th>City</th>
               <th>Seats</th>
            </tr>
            <xsl:for-each select="stadiums/stadium">
               <tr>
                  <td>
                     <xsl:value-of select="name" />
                  </td>
                  <td>
                     <xsl:value-of select="seats" />
                  </td>
               </tr>
            </xsl:for-each>
         </table>
      </div>
   </xsl:template>
</xsl:stylesheet>