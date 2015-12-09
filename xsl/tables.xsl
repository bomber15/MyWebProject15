<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
   <xsl:template match="/">
      <html>
         <head>
            <title>groups.xsl</title>
         </head>
         <body>
            <div>
               <table align="center">
                  <tr>
                     <td>
                        <input type="button" value="Home Page" onclick="home.xml" />
                     </td>
                     <td>
                        <a href="https://www.facebook.com/uefaeuro/">
                           <input type="submit" value="Facebook" />
                        </a>
                     </td>
                     <td />
                  </tr>
               </table>
            </div>
            <div>
               <h1>
                  <xsl:value-of select="/europeanCup/groupA//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupA/team">
                     <tr bgcolor="white">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
               <h1>
                  <xsl:value-of select="/europeanCup/groupB//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupB/team">
                     <tr bgcolor="white">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
               <h1>
                  <xsl:value-of select="/europeanCup/groupC//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupC/team">
                     <tr bgcolor="blue">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
               <h1>
                  <xsl:value-of select="/europeanCup/groupD//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupD/team">
                     <tr bgcolor="white">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
               <h1>
                  <xsl:value-of select="/europeanCup/groupE//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupE/team">
                     <tr bgcolor="white">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
               <h1>
                  <xsl:value-of select="/europeanCup/groupF//group" />
               </h1>
               <table border="1" align="center" width="50%" cellpadding="12">
                  <tr bgcolor="white">
                     <th>Team</th>
                     <th>Played</th>
                     <th>Win</th>
                     <th>Loose</th>
                     <th>Draw</th>
                     <th>Scored</th>
                     <th>Points</th>
                  </tr>
                  <xsl:for-each select="/europeanCup/groupF/team">
                     <tr bgcolor="white">
                        <td>
                           <xsl:value-of select="name" />
                        </td>
                        <td>
                           <xsl:value-of select="played" />
                        </td>
                        <td>
                           <xsl:value-of select="win" />
                        </td>
                        <td>
                           <xsl:value-of select="loose" />
                        </td>
                        <td>
                           <xsl:value-of select="draw" />
                        </td>
                        <td>
                           <xsl:value-of select="scored" />
                        </td>
                        <td>
                           <xsl:value-of select="points" />
                        </td>
                     </tr>
                  </xsl:for-each>
               </table>
            </div>
         </body>
      </html>
   </xsl:template>
</xsl:stylesheet>