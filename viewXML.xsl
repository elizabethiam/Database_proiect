<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>view</title>
            </head>
            <body>
                <table border="1">
                    <tr bgcolor="red">
                        <th style="width:100px">ID</th>
                        <th style="width:100px">Descr</th>
                        <th style="width:100px">Image</th>
                        <th style="width:100px">Price</th>
                    </tr>
<xsl:for-each select="root/date[id=$id]">
                        <tr>
                            <td style="width:100px"><xsl:value-of select="id"/></td>
                            <td style="width:100px"><xsl:value-of select="descr"/></td>
                            <td style="width:100px"><img src="{image}"/></td>
                            <td style="width:100px"><xsl:value-of select="price"/></td>
                        </tr>
                        </xsl:for-each>
                </table>
<xsl:element name="a">
                       <xsl:attribute name="href">
                            <xsl:value-of select="root/date/back"/>
                         </xsl:attribute>
                        <span>Back</span>
</xsl:element>

            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
