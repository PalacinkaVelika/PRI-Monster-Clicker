<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Monsters</title>
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                    img {
                        max-width: 100px;
                        max-height: 100px;
                    }
                </style>
            </head>
            <body>
                <h2>Monsters</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>HP</th>
                        <th>Armor</th>
                        <th>Speed</th>
                        <th>Loot</th>
                    </tr>
                    <xsl:for-each select="prisery/prisera">
                        <tr>
                            <td><xsl:value-of select="jmeno"/></td>
                            <td><img src="{imgPath}" alt="{jmeno}"/></td>
                            <td><xsl:value-of select="vlastnosti/hp"/></td>
                            <td><xsl:value-of select="vlastnosti/armor"/></td>
                            <td><xsl:value-of select="vlastnosti/speed"/></td>
                            <td><xsl:value-of select="vlastnosti/loot"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
