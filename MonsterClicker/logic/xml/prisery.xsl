<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Monsters</title>
                <style>
                    body {
                        background-color: #451952;
                        padding-left: 2vh;
                        padding-right: 2vh;
                        color: #F39F5A;
                        font: small-caps bold 30px Arial, sans-serif;
                    }
                    h2 {
                        text-align: center;
                        color: #F39F5A;
                    }
                    table {
                        width: 80%;
                        margin: 20px auto;
                        border-collapse: collapse;
                        border: 2px solid #666;
                        background-color: #662549;
                        font: small-caps bold 30px Arial, sans-serif;
                    }
                    th, td {
                        border: 1px solid #666;
                        padding: 10px;
                        text-align: center;
                    }
                    th {
                        background-color: #46142f;
                        color: #F39F5A;
                    }
                    td img {
                        max-width: 100px;
                        max-height: 100px;
                        display: block;
                        margin: 0 auto;
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
