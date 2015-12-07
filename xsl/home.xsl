<?xml version="1.0"?>
 <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   <xsl:template match="/">
      <html>
          <head>
              <title>Home Page
              </title>
           </head>
        <body>
          <xsl:apply-templates/>
        </body>
      </html>
    </xsl:template>
    
   <xsl:template match="details">
     <div>
       <xsl:value-of select="."/>
     </div>
     <br />
   </xsl:template>
 
   <xsl:template match="/content/description/p[@id='1']">
     <div>
       <xsl:apply-templates/>
     </div>
     <br />
   </xsl:template>
   
   <xsl:template match="/content/description/p[@id='2']">
     <div>
       <xsl:apply-templates/>
     </div>
     <br />
   </xsl:template>
   
   <xsl:template match="/content/description/p[@id='3']">
     <div>
       <xsl:apply-templates/>
     </div>
     <br />
   </xsl:template>
 </xsl:stylesheet>