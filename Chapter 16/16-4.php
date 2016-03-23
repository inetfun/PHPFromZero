<?php
//*************************************************
//名称：16-4.php
//功能：解析一个XML文档程序。
//*************************************************

$xml_file = "16-5.xml";
echo "<table border=0 cellpadding=5>"; 
echo "<tr><th colspan=2>XML Articles</th></tr>";
function startElement($parser_instance, $element_name, $attrs)
{     
	switch($element_name){
		case "URL":echo "<tr><td><a href=\"";
		break;         
		case "SUMMARY":echo "<td>";                            
		break;    
		} 
}
function characterData($parser_instance, $xml_data)
{     
	echo $xml_data;
}

function endElement($parser_instance, $element_name) {
	switch($element_name) { 
		case "URL":echo "\">";                             
		break;         
		case "TITLE":echo "</a></td>";                   
		break;        
		case "SUMMARY":echo "</td></tr>";              
		break;     
		} 
		}
$parser = xml_parser_create();
xml_set_element_handler($parser, "startElement", "endElement");
xml_set_character_data_handler($parser, "characterData");
if (!($filehandler = fopen($xml_file, "r")))
{    
	die("could not open XML input");
}
while ($data = fread($filehandler, 4096)) {   
	if (!xml_parse($parser, $data, feof($filehandler))) {  
		die(sprintf("XML error: %s at line %d", xml_error_string(xml_get_error_code($parser)),
		xml_get_current_line_number($parser))); 
		}
}
fclose($filehandler); xml_parser_free($parser);
echo "</table>";
?>    