<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Forma</title>
            </head>
            <body>
                
    <table border="1">
         <tr bgcolor="red">
                <th style="width:300px">Username</th>
                <th style="width:300px">Passowrd</th>
                </tr>
    <xsl:for-each select="root/date">
        <tr>
             <td style="width:300px"><xsl:value-of select="username"/></td>
             <td style="width:300px"><xsl:value-of select="password"/></td>
         </tr>
    </xsl:for-each>
        </table>        
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>

