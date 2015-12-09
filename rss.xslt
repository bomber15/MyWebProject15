<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
   <xsl:template match="/">
      <html>
         <head>
            <title>web project .</title>
         </head>
         <body>
            <div style="margin-left:33%">
               <table style="float:left;margin-right: 1cm" border="1">
                  <tr bgcolor="#9acd32">
                     <th>RSS FEEDS</th>
                  </tr>
                  <xsl:for-each select="channel">
                     <tr>
                        <td>
                           <xsl:value-of select="title"/>
                           <xsl:value-of select="description"/>
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
            </div>
         </body>
      </html>
   </xsl:template>
</xsl:stylesheet>