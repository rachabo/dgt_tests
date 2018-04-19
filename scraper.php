<?php
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
//$html = scraperwiki::scrape("http://foo.com");
$html = scraperwiki::scrape("http://revista.dgt.es/es/test/");
$servidor="http://revista.dgt.es";
//
// // Find something on the page using css selectors
$dom = new simple_html_dom();
$dom->load($html);
//print_r($dom->find("table.list"));

// Find  preguntas
/*foreach($dom->find('h4[class=tit_not]') as $element)
       echo "<B>".$element->innertext . '</B><br>';

*/

foreach($dom->find('article.test') as $articulo)
{
	//Extraigo imagen de la pregunta
	foreach($articulo->find('img') as $imagen)
	echo "<B>".$imagen->src . '</B><br>';
	

	echo "<img src='".$servidor.$imagen->src."'><br>";

	

	foreach($articulo->find('section.content_test') as $section)
	{
	       //Texto de la pregunta
	       foreach($section->find('h4[class=tit_not]') as $pregunta)
	       {
		    echo "<B>".$pregunta->innertext . '</B><br>';
	       }
	       //Todas las respuestas posibles
	       foreach($section->find('li') as $respuesta)
	       {
		     echo $respuesta->innertext . '<br>';

	       }
	       //Opción correcta
	       foreach($section->find('p span.opcion') as $correcta)
	       {
		     echo "Correcta:".$correcta->innertext . '<br>';

	       }
	}
}
// Find respuestas
/*foreach($dom->find('section.content_test li') as $element)
      echo $element->innertext . '<br>';
*/
      //echo $element->href . '<br>'; 
//
// // Write out to the sqlite database using scraperwiki library
//scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
//scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
