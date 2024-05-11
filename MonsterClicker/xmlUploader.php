<?php
if ($_FILES["fileToUpload"]["error"] > 0) {
    echo "Error: " . $_FILES["fileToUpload"]["error"] . "<br>";
} else {
    $xmlFile = $_FILES["fileToUpload"]["tmp_name"];

    $xsdFile = "logic/xml/prisery.xsd";
    $dom = new DOMDocument();
    $dom->load($xmlFile);
    if ($dom->schemaValidate($xsdFile)) {
        $xslFile = "logic/xml/prisery.xsl";
        $xsl = new DOMDocument();
        $xsl->load($xslFile);
        $proc = new XSLTProcessor();
        $proc->importStylesheet($xsl);
        echo $proc->transformToXML($dom);
    }
}
?>
