<?php


require '../simple_html_dom.php';

$servidor="http://revista.dgt.es";
//
// // Find something on the page using css selectors
// get DOM from URL or file
$dom = file_get_html('http://revista.dgt.es/es/test/');

$preguntas = array();
//Todas los enlaces de los tests
foreach($dom->find('ul li a') as $link)
	       {
		$pos = strpos($link->href, "/es/test/");

		if ($pos !== false) {
			////echo $link->href . '<br>';
			$test=$link->href;

			$dom2 = file_get_html($servidor.$test);


			foreach($dom2->find('article.test') as $articulo)

			{
				$pregunta=array();
				//Extraigo imagen de la pregunta
				foreach($articulo->find('img') as $imagen)
				//echo "<B>".$imagen->src . '</B><br>';
	
				//echo "<img src='".$servidor.$imagen->src."'><br>";
				$pregunta["imagen"]=$servidor.$imagen->src;
	
				foreach($articulo->find('section.content_test') as $section)
				{
					//Opción correcta
				       foreach($section->find('p span.opcion') as $correcta)
				       {
					     //echo "Correcta:".$correcta->innertext . '<br>';
				       }
				       //Texto de la pregunta
				       foreach($section->find('h4[class=tit_not]') as $preg)
				       {
					    //echo "<B>".$preg->innertext . '</B><br>';
					    $pregunta["texto"]=trim(substr($preg->innertext,3));
				       }
				       //Todas las respuestas posibles
				       $respuestas=array();
				       foreach($section->find('li') as $resp)
				       {
					     	$respuesta=array();
						$textoresp= explode("n> ",$resp->innertext);
						$respuesta["respuesta"]=$textoresp[1];
						//$respuesta["respuesta"]=$resp->innertext;
						if (stripos($textoresp[0],$correcta->innertext."."))
							$respuesta["correcta"]=true;
						else
							$respuesta["correcta"]=false;
						array_push($respuestas, $respuesta);
						//echo $resp->innertext . '<br>';


				       }
					$pregunta["respuestas"]=$respuestas;
				       
				}
			array_push($preguntas, $pregunta);
			}



		}
}

//print_r(json_encode($preguntas));
header('Content-Type: application/json');
$json_string = json_encode($preguntas, JSON_PRETTY_PRINT);

echo $json_string;
// Find respuestas
/*foreach($dom->find('section.content_test li') as $element)
      //echo $element->innertext . '<br>';
*/
      ////echo $element->href . '<br>'; 
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
