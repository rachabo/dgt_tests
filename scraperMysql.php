<?php



$servername = "localhost";
$username = "root";
$password = "comomola";
$dbname = "autoescuela";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$conn->set_charset("utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"$dbname");





$preguntas='[
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P1.jpg",
        "texto": "En las autov\u00edas, \u00bfcu\u00e1l es la velocidad m\u00ednima permitida para turismos?",
        "respuestas": [
            {
                "respuesta": "40 km\/h",
                "correcta": false
            },
            {
                "respuesta": "50 km\/h",
                "correcta": false
            },
            {
                "respuesta": "60 km\/h",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P2.jpg",
        "texto": "Al poner en marcha un motor de gasolina, es conveniente...",
        "respuestas": [
            {
                "respuesta": "Acelerar en vac\u00edo para que se caliente cuanto antes.",
                "correcta": false
            },
            {
                "respuesta": "Iniciar la marcha inmediatamente despu\u00e9s de arrancar el motor.",
                "correcta": true
            },
            {
                "respuesta": "Esperar unos minutos antes de iniciar la marcha para que el motor se caliente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P3.jpg",
        "texto": "La cinta abdominal del cintur\u00f3n de seguridad debe colocarse sobre...",
        "respuestas": [
            {
                "respuesta": "Los huesos de la cadera",
                "correcta": true
            },
            {
                "respuesta": "Los muslos",
                "correcta": false
            },
            {
                "respuesta": "El abdomen",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P4.jpg",
        "texto": "En una intersecci\u00f3n se\u00f1alizada en la que se encuentra un agente regulando el tr\u00e1fico, \u00bfqu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Obedecer las se\u00f1ales del agente.",
                "correcta": true
            },
            {
                "respuesta": "Obedecer las se\u00f1ales de tr\u00e1fico que regulan la prioridad.",
                "correcta": false
            },
            {
                "respuesta": "Aplicar las normas generales de prioridad de paso de los veh\u00edculos que se acerquen por la derecha.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P5.jpg",
        "texto": "Como norma general, \u00bfqu\u00e9 veh\u00edculo tendr\u00e1 preferencia de paso en este estrechamiento cuando la prioridad no est\u00e9 expresamente se\u00f1alizada?",
        "respuestas": [
            {
                "respuesta": "El veh\u00edculo que haya entrado primero al estrechamiento.",
                "correcta": true
            },
            {
                "respuesta": "La motocicleta, porque tiene menos dificultad de maniobra.",
                "correcta": false
            },
            {
                "respuesta": "El veh\u00edculo que tenga que dar marcha atr\u00e1s mayor distancia.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P6.jpg",
        "texto": "\u00bfC\u00f3mo debe sentarse el pasajero de una motocicleta?",
        "respuestas": [
            {
                "respuesta": "De cualquier forma, siempre que vaya c\u00f3modo.",
                "correcta": false
            },
            {
                "respuesta": "A horcajadas y con los pies apoyados en los reposapi\u00e9s laterales.",
                "correcta": true
            },
            {
                "respuesta": "A horcajadas entre la persona que conduce y el manillar de direcci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P7.jpg",
        "texto": "Los agentes de la autoridad encargados de la vigilancia del tr\u00e1fico podr\u00e1n inmovilizar un veh\u00edculo cuando...",
        "respuestas": [
            {
                "respuesta": "Supere los niveles de gases, humos y ruidos permitidos reglamentariamente.",
                "correcta": true
            },
            {
                "respuesta": "Su conductor no disponga del permiso de circulaci\u00f3n original.",
                "correcta": false
            },
            {
                "respuesta": "Su conductor sea sancionado dos veces en el mismo d\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P8.jpg",
        "texto": "Como norma general, una motocicleta, \u00bfpuede circular por el arc\u00e9n?",
        "respuestas": [
            {
                "respuesta": "No, debe circular por la calzada.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero no puede hacerlo en paralelo con otros veh\u00edculos.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero solo si su cilindrada es igual o inferior a 125 c.c.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P9.jpg",
        "texto": "\u00bfPuede el conductor reducir la probabilidad de accidente debida al \u201cfactor v\u00eda\u201d?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, adaptando su conducci\u00f3n a las condiciones del medio.",
                "correcta": true
            },
            {
                "respuesta": "No, porque no puede actuar sobre la v\u00eda ni sobre el entorno.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, si su veh\u00edculo cuenta con los \u00faltimos avances de seguridad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P10.jpg",
        "texto": "Circular por debajo del l\u00edmite m\u00e1ximo de velocidad, \u00bfpuede causar accidentes?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, cuando la velocidad no se adapte a las circunstancias del tr\u00e1fico.",
                "correcta": true
            },
            {
                "respuesta": "No, s\u00f3lo se pueden causar accidentes circulando por encima de ese l\u00edmite.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P11.jpg",
        "texto": "Para transportar una mascota, salvo que exista en el veh\u00edculo un lugar destinado para su transporte, debe estar...",
        "respuestas": [
            {
                "respuesta": "Controlada obligatoriamente por un pasajero.",
                "correcta": false
            },
            {
                "respuesta": "Situada obligatoriamente en los asientos traseros y con el cintur\u00f3n de seguridad del veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "Sujeta de forma que no interfiera en el conductor para evitar perder el control del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P12.jpg",
        "texto": "Cuando se consume alcohol, \u00bfse producen alteraciones en la visi\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, puede aparecer la visi\u00f3n t\u00fanel.",
                "correcta": true
            },
            {
                "respuesta": "No, solamente afecta a la capacidad motora.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero solamente con tasas de alcohol por encima de las permitidas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P13.jpg",
        "texto": "Si presencia un accidente de circulaci\u00f3n, \u00bftiene obligaci\u00f3n de avisar a la Autoridad o a sus agentes si solo hay heridos leves y la seguridad de la circulaci\u00f3n est\u00e1 restablecida?",
        "respuestas": [
            {
                "respuesta": "No, salvo que alguna de las personas implicadas en el accidente lo solicite.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, siempre.",
                "correcta": false
            },
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P14.jpg",
        "texto": "Bajo los efectos del estr\u00e9s la conducci\u00f3n se vuelve...",
        "respuestas": [
            {
                "respuesta": "Menos temeraria.",
                "correcta": false
            },
            {
                "respuesta": "M\u00e1s temeraria.",
                "correcta": true
            },
            {
                "respuesta": "M\u00e1s segura.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-244\/Test244-P15.jpg",
        "texto": "El impacto econ\u00f3mico de los accidentes de tr\u00e1fico afecta a...",
        "respuestas": [
            {
                "respuesta": "todos los ciudadanos, directa o indirectamente.",
                "correcta": true
            },
            {
                "respuesta": "los conductores que tienen un accidente al pagar el seguro de su veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "las compa\u00f1\u00edas aseguradoras en exclusiva.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-01-Niebla.jpg",
        "texto": "La luz antiniebla trasera deber\u00e1 utilizarse en caso de...",
        "respuestas": [
            {
                "respuesta": "Niebla espesa.",
                "correcta": true
            },
            {
                "respuesta": "Circular de noche por una v\u00eda sin asfaltar.",
                "correcta": false
            },
            {
                "respuesta": "Circular al anochecer por una v\u00eda sin arc\u00e9n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-02-R-306.jpg",
        "texto": "\u00bfA qu\u00e9 veh\u00edculos proh\u00edbe el adelantamiento esta se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "A los camiones de m\u00e1s de 3.500 kg. de M.M.A.",
                "correcta": true
            },
            {
                "respuesta": "A todos los veh\u00edculos de motor, incluidos camiones.",
                "correcta": false
            },
            {
                "respuesta": "A todos los camiones de menos de 3.500 kg. de M.M.A.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-03-BICICLETAS-NORAUTO-12.jpg",
        "texto": "Si circula con un turismo en el que sobresale la carga por su parte trasera, \u00bfest\u00e1 obligado a colocar la se\u00f1al de la imagen?",
        "respuestas": [
            {
                "respuesta": "No, porque un turismo no transporta exclusivamente mercanc\u00edas.",
                "correcta": false
            },
            {
                "respuesta": "Solo se colocar\u00e1 cuando la carga sobresalga por la parte delantera.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed; deber\u00e1 colocarse en la parte posterior de la carga.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-04-Chaleco.jpg",
        "texto": "El conductor de un turismo utilizar\u00e1 un chaleco reflectante de alta visibilidad cuando salga del veh\u00edculo y ocupe...",
        "respuestas": [
            {
                "respuesta": "La calzada o el arc\u00e9n de las v\u00edas interurbanas.",
                "correcta": true
            },
            {
                "respuesta": "La calzada de las v\u00edas interurbanas, pero no cuando ocupe el arc\u00e9n.",
                "correcta": false
            },
            {
                "respuesta": "La calzada o el arc\u00e9n de todo tipo de v\u00edas, tanto urbanas como interurbanas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-5-presion-neumaticos.jpg",
        "texto": "Para comprobar la presi\u00f3n de inflado, \u00bfc\u00f3mo deben estar los neum\u00e1ticos?",
        "respuestas": [
            {
                "respuesta": "Fr\u00edos.",
                "correcta": true
            },
            {
                "respuesta": "Calientes.",
                "correcta": false
            },
            {
                "respuesta": "Fr\u00edos o calientes, es igual.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-6-Autopista.jpg",
        "texto": "En una autopista con tres carriles para cada sentido, \u00bfpor cu\u00e1l se debe circular normalmente?",
        "respuestas": [
            {
                "respuesta": "Por cualquiera de ellos.",
                "correcta": false
            },
            {
                "respuesta": "Por el central o el derecho, es indistinto.",
                "correcta": false
            },
            {
                "respuesta": "Por el derecho.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-7-Accidente-y-seguro.jpg",
        "texto": "\u00bfCu\u00e1les son los da\u00f1os no cubiertos por el seguro obligatorio al causante de un accidente?",
        "respuestas": [
            {
                "respuesta": "Los da\u00f1os personales que sufran los ocupantes del veh\u00edculo causante del accidente.",
                "correcta": false
            },
            {
                "respuesta": "Los da\u00f1os personales que sufra el conductor responsable.",
                "correcta": true
            },
            {
                "respuesta": "Los da\u00f1os que se produzcan en el veh\u00edculo contrario.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-8.jpg",
        "texto": "En el carril de circulaci\u00f3n de la derecha, \u00bfse puede estacionar?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque es una v\u00eda con poca circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "No, porque lo proh\u00edbe la marca vial.",
                "correcta": true
            },
            {
                "respuesta": "No, porque hay acera.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-9-P-4.jpg",
        "texto": "La se\u00f1al indica que se aproxima...",
        "respuestas": [
            {
                "respuesta": "A una intersecci\u00f3n en la que tengo prioridad.",
                "correcta": false
            },
            {
                "respuesta": "A una intersecci\u00f3n en la que tienen preferencia los veh\u00edculos que entran por la derecha.",
                "correcta": false
            },
            {
                "respuesta": "A una intersecci\u00f3n con circulaci\u00f3n giratoria.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-10.jpg",
        "texto": "Las se\u00f1ales realizadas con el brazo por los conductores, \u00bfson v\u00e1lidas?",
        "respuestas": [
            {
                "respuesta": "Solo cuando se vean bien.",
                "correcta": true
            },
            {
                "respuesta": "Solo cuando se utilicen de d\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Solo cuando se utilicen en poblado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-11-Ampliada.jpg",
        "texto": "\u00bfEst\u00e1 obligado a circular a una velocidad adecuada si las condiciones meteorol\u00f3gicas o ambientales son adversas?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, y si fuera preciso, debe detenerse sin riesgo para la circulaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, siempre que se circule por v\u00edas de sentido \u00fanico.",
                "correcta": false
            },
            {
                "respuesta": "No, si el veh\u00edculo dispone de todos los sistemas de seguridad m\u00e1s avanzados.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-11-m224.jpg",
        "texto": "Encender el intermitente, \u00bfda preferencia siempre para hacer maniobras?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque he avisado.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero debo hacer la maniobra r\u00e1pidamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-12-Adelantar-dcha.jpg",
        "texto": "En carretera, \u00bfcu\u00e1ndo puede adelantar por la derecha?",
        "respuestas": [
            {
                "respuesta": "Cuando est\u00e9 libre el carril de la derecha.",
                "correcta": false
            },
            {
                "respuesta": "Cuando el veh\u00edculo de delante vaya a girar a la izquierda y exista espacio libre en la calzada.",
                "correcta": true
            },
            {
                "respuesta": "Cuando conduzca por una calzada con m\u00e1s de dos carriles.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-13-Para-en-arcen.jpg",
        "texto": "En esta v\u00eda interurbana, podr\u00e1 parar su veh\u00edculo en la parte transitable del arc\u00e9n...",
        "respuestas": [
            {
                "respuesta": "Para subir o bajar personas.",
                "correcta": false
            },
            {
                "respuesta": "Para descargar objetos, siempre que la parada dure menos de 2 minutos.",
                "correcta": false
            },
            {
                "respuesta": "Por razones de emergencia.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-243\/Test-243-Preg-14-Alberto-Espada-Movil-Ipad-13.jpg",
        "texto": "Mientras conduce, \u00bfqu\u00e9 tel\u00e9fonos est\u00e1 permitido utilizar?",
        "respuestas": [
            {
                "respuesta": "Los sistemas de \u201cmanos libres\u201d.",
                "correcta": true
            },
            {
                "respuesta": "Los sistemas con auriculares.",
                "correcta": false
            },
            {
                "respuesta": "Est\u00e1n permitidos todos los sistemas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P1.jpg",
        "texto": "Cuando termine el adelantamiento, el veh\u00edculo adelantado deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Circular igual que lo est\u00e1 haciendo, con la luz de largo alcance encendida.",
                "correcta": false
            },
            {
                "respuesta": "Reducir la velocidad, obligatoriamente.",
                "correcta": false
            },
            {
                "respuesta": "Cambiar la luz de largo alcance por la luz de cruce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P2.jpg",
        "texto": "En esta v\u00eda, la velocidad m\u00ednima permitida a los turismos es de...",
        "respuestas": [
            {
                "respuesta": "90 km\/h",
                "correcta": false
            },
            {
                "respuesta": "60 km\/h",
                "correcta": true
            },
            {
                "respuesta": "75 km\/h",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P3.jpg",
        "texto": "Esta se\u00f1al indica peligro ante la proximidad...",
        "respuestas": [
            {
                "respuesta": "De un resalto o bad\u00e9n en el pavimento.",
                "correcta": false
            },
            {
                "respuesta": "De un puente m\u00f3vil.",
                "correcta": true
            },
            {
                "respuesta": "De un muelle.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P4.jpg",
        "texto": "En un turismo, la carga puede sobresalir por su parte posterior...",
        "respuestas": [
            {
                "respuesta": "Hasta un 5 por 100 de su longitud.",
                "correcta": false
            },
            {
                "respuesta": "Hasta un 10 por 100 de su longitud y, si la carga fuera indivisible hasta un 15 por 100.",
                "correcta": true
            },
            {
                "respuesta": "No est\u00e1 permitido que sobresalga la carga del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P5.jpg",
        "texto": "\u00bfQu\u00e9 s\u00edntomas nos avisan de que estamos fatigados?",
        "respuestas": [
            {
                "respuesta": "La sensaci\u00f3n de euforia.",
                "correcta": false
            },
            {
                "respuesta": "Suele aumentar el n\u00famero y la duraci\u00f3n de los parpadeos y la visi\u00f3n puede volverse borrosa.",
                "correcta": true
            },
            {
                "respuesta": "No realizar movimientos en el asiento, ni cambios de postura.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P6.jpg",
        "texto": "\u00bfCu\u00e1ndo es obligatorio utilizar la luz de emergencia?",
        "respuestas": [
            {
                "respuesta": "Cuando se inmovilice el veh\u00edculo en una autopista.",
                "correcta": true
            },
            {
                "respuesta": "Cuando se reduzca la velocidad en carretera.",
                "correcta": false
            },
            {
                "respuesta": "Cuando se estacione el veh\u00edculo en doble fila.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P7-2.jpg",
        "texto": "Quiere adelantar a un ciclista que circula por el arc\u00e9n; \u00bfqu\u00e9 distancia lateral debe dejar?",
        "respuestas": [
            {
                "respuesta": "Un metro, al menos.",
                "correcta": false
            },
            {
                "respuesta": "Al menos metro y medio.",
                "correcta": true
            },
            {
                "respuesta": "No importa la distancia porque circula por el arc\u00e9n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P8.jpg",
        "texto": "Hay poca visibilidad por niebla. \u00bfQu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Dejar m\u00e1s distancia de seguridad con el veh\u00edculo de delante.",
                "correcta": true
            },
            {
                "respuesta": "Llevar el pie siempre en el pedal del freno.",
                "correcta": false
            },
            {
                "respuesta": "Circular a la velocidad m\u00ednima de la v\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P9.jpg",
        "texto": "\u00bfQu\u00e9 indica la flecha?",
        "respuestas": [
            {
                "respuesta": "Que hay una curva a la derecha.",
                "correcta": false
            },
            {
                "respuesta": "Que hay un carril de salida a la derecha.",
                "correcta": false
            },
            {
                "respuesta": "Que me acerco a una l\u00ednea continua.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P10.jpg",
        "texto": "Necesita hacer una parada en una calle estrecha; \u00bfpuede ocupar parte de la acera con su veh\u00edculo?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "Solo si no hay se\u00f1al que lo proh\u00edba expresamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-Preguntaextra.jpg",
        "texto": "Uno de los pasajeros del turismo que Vd. conduce no lleva puesto el cintur\u00f3n de seguridad. Si un agente de la autoridad denuncia la infracci\u00f3n, \u00bfqui\u00e9n es el responsable?",
        "respuestas": [
            {
                "respuesta": "El tomador del seguro.",
                "correcta": false
            },
            {
                "respuesta": "El pasajero.",
                "correcta": true
            },
            {
                "respuesta": "El conductor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P12.jpg",
        "texto": "Los neum\u00e1ticos, \u00bfcu\u00e1ndo hay que cambiarlos?",
        "respuestas": [
            {
                "respuesta": " Cuando la profundidad del dibujo sea menor de 1,6 mm.",
                "correcta": true
            },
            {
                "respuesta": "Cuando la profundidad del dibujo sea menor de 2 mm.",
                "correcta": false
            },
            {
                "respuesta": "Cuando la profundidad del dibujo sea menor de 3 mm.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P13.jpg",
        "texto": "\u00bfQu\u00e9 es el tiempo  de reacci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "El tiempo que pasa desde que se empieza una maniobra hasta que se termina.",
                "correcta": false
            },
            {
                "respuesta": "El tiempo que pasa desde que se arranca el veh\u00edculo hasta que se empieza a circular.",
                "correcta": false
            },
            {
                "respuesta": "El tiempo que pasa desde que se ve un peligro hasta que se toma una decisi\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P14.jpg",
        "texto": "El hielo, la nieve, la calzada mojada y las obras, \u00bfde qu\u00e9 factor de riesgo forman parte?",
        "respuestas": [
            {
                "respuesta": "Del factor humano.",
                "correcta": false
            },
            {
                "respuesta": "Del factor veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "Del factor v\u00eda y entorno.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-242\/Test242-P15.jpg",
        "texto": "\u00bfEl estr\u00e9s puede alterar las capacidades para conducir con seguridad?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, porque no afecta a la conducci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P1.jpg",
        "texto": "Al rebasar al autob\u00fas, \u00bfqu\u00e9 peligro debe preverse?",
        "respuestas": [
            {
                "respuesta": "Que puedan cruzar peatones ocultos por el propio autob\u00fas.",
                "correcta": true
            },
            {
                "respuesta": "Que los viajeros bajen por la parte izquierda.",
                "correcta": false
            },
            {
                "respuesta": "Ninguno, no es una situaci\u00f3n de riesgo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P2.jpg",
        "texto": "La marca amarilla en zig-zag indica el lugar de la calzada...",
        "respuestas": [
            {
                "respuesta": "donde no se puede estacionar, pero s\u00ed se puede parar.",
                "correcta": true
            },
            {
                "respuesta": "reservado para el estacionamiento de autobuses.",
                "correcta": false
            },
            {
                "respuesta": "reservado para parada de autob\u00fas, no pudiendo parar otros veh\u00edculos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P3.jpg",
        "texto": "Las se\u00f1ales de obras...",
        "respuestas": [
            {
                "respuesta": "establecen para los tramos de obras una reducci\u00f3n de la velocidad m\u00e1xima en 10 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "tienen distinto s\u00edmbolo y tama\u00f1o que las usadas en tramos sin obras.",
                "correcta": false
            },
            {
                "respuesta": "tienen el mismo significado que las usadas en tramos sin obras.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P5.jpg",
        "texto": "El tiempo de reacci\u00f3n puede aumentar...",
        "respuestas": [
            {
                "respuesta": "despu\u00e9s de una comida ligera.",
                "correcta": false
            },
            {
                "respuesta": "si usamos gafas graduadas.",
                "correcta": false
            },
            {
                "respuesta": "despu\u00e9s de una fuerte discusi\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P6.jpg",
        "texto": "Fumar mientras se conduce...",
        "respuestas": [
            {
                "respuesta": "est\u00e1 prohibido.",
                "correcta": false
            },
            {
                "respuesta": "es recomendable, porque ayuda a mantener la atenci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "no es recomendable, porque puede afectar a la atenci\u00f3n en la conducci\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P7.jpg",
        "texto": "Conducir durante mucho tiempo sin descansar...",
        "respuestas": [
            {
                "respuesta": "mantiene al conductor m\u00e1s atento ante cualquier peligro.",
                "correcta": false
            },
            {
                "respuesta": "disminuye el riesgo de accidente.",
                "correcta": false
            },
            {
                "respuesta": "propicia la aparici\u00f3n de la fatiga.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P8.jpg",
        "texto": "El reposacabezas, \u00bfc\u00f3mo debe colocarse?",
        "respuestas": [
            {
                "respuesta": "A la altura de cuello.",
                "correcta": false
            },
            {
                "respuesta": "Lo m\u00e1s alto posible para que no moleste.",
                "correcta": false
            },
            {
                "respuesta": "A la altura de la cabeza.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/test241-P9.jpg",
        "texto": "Hay hielo en la v\u00eda. \u00bfQu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Circular con el pie en el embrague.",
                "correcta": false
            },
            {
                "respuesta": "Circular a poca velocidad para no tener que frenar.",
                "correcta": true
            },
            {
                "respuesta": "Circular pisando el freno intermitentemente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P10.jpg",
        "texto": "La varilla del aceite del motor, \u00bfpara qu\u00e9 sirve?",
        "respuestas": [
            {
                "respuesta": "Para comprobar la temperatura del aceite.",
                "correcta": false
            },
            {
                "respuesta": "Para comprobar el nivel del aceite.",
                "correcta": true
            },
            {
                "respuesta": "Para comprobar la presi\u00f3n del aceite.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P11.jpg",
        "texto": "Debido a un pinchazo sustituye una de las ruedas de su veh\u00edculo por la de uso temporal. \u00bfCu\u00e1ntos kil\u00f3metros podr\u00e1 circular en esas condiciones?",
        "respuestas": [
            {
                "respuesta": "Tantos como sean necesarios siempre que dicha rueda no haya sido utilizada anteriormente.",
                "correcta": false
            },
            {
                "respuesta": "Los que recomiende, como m\u00e1ximo, cada fabricante, y circulando a la velocidad que se indica en dicha rueda.",
                "correcta": true
            },
            {
                "respuesta": "No hay limitaci\u00f3n de kil\u00f3metros porque se trata de una situaci\u00f3n excepcional.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P12.jpg",
        "texto": "Para circular de noche por una traves\u00eda. \u00bfQu\u00e9 luces son obligatorias?",
        "respuestas": [
            {
                "respuesta": "Las de posici\u00f3n y las cortas.",
                "correcta": true
            },
            {
                "respuesta": "Las de posici\u00f3n y las largas.",
                "correcta": false
            },
            {
                "respuesta": "Las de posici\u00f3n solamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-241\/Test241-P13.jpg",
        "texto": "\u00bfA qu\u00e9 veh\u00edculos proh\u00edbe pasar esta se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "A los veh\u00edculos que tienen m\u00e1s de 3,5 metros de anchura.",
                "correcta": false
            },
            {
                "respuesta": "A los veh\u00edculos que tienen m\u00e1s de 3.500 kilogramos de peso.",
                "correcta": false
            },
            {
                "respuesta": "A los veh\u00edculos que tienen m\u00e1s de 3,5 metros de altura.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-23.jpg",
        "texto": "En esta v\u00eda, la separaci\u00f3n entre los trazos de la l\u00ednea discontinua es sensiblemente m\u00e1s corta que en el caso general; \u00bfqu\u00e9 puede anunciar?",
        "respuestas": [
            {
                "respuesta": "La proximidad de una traves\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "La proximidad de un tramo de v\u00eda que presenta un riesgo especial.",
                "correcta": true
            },
            {
                "respuesta": "La proximidad de un carril especial.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-24.jpg",
        "texto": "En una glorieta regulada exclusivamente por esta se\u00f1al, \u00bfqui\u00e9n tiene prioridad de paso?",
        "respuestas": [
            {
                "respuesta": "Siempre el veh\u00edculo que tenga libre su derecha.",
                "correcta": false
            },
            {
                "respuesta": "El veh\u00edculo que pretende acceder a la glorieta.",
                "correcta": false
            },
            {
                "respuesta": "El veh\u00edculo que se encuentra dentro de la calzada circular.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-25.jpg",
        "texto": "En esta intersecci\u00f3n no hay l\u00ednea de detenci\u00f3n; \u00bfd\u00f3nde hay que detenerse?",
        "respuestas": [
            {
                "respuesta": "Antes de entrar en la intersecci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "A una distancia m\u00ednima de 5 metros antes de la intersecci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Dentro de la intersecci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-26.jpg",
        "texto": "Las se\u00f1ales horizontales o marcas viales de color blanco, \u00bftienen el mismo  significado que las se\u00f1ales verticales?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "No, salvo las se\u00f1ales de \u201cceda el paso\u201d y \u201cstop\u201d.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-27.jpg",
        "texto": "A la vista de la se\u00f1al que realiza el agente, \u00bfcu\u00e1ndo podr\u00e1 reanudar la marcha?",
        "respuestas": [
            {
                "respuesta": "Cuando baje los brazos.",
                "correcta": false
            },
            {
                "respuesta": "Solo cuando cambie de posici\u00f3n o efect\u00fae otra se\u00f1al.",
                "correcta": true
            },
            {
                "respuesta": "Solo cuando lo indique con otra se\u00f1al.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-28.jpg",
        "texto": "Esta se\u00f1al, \u00bfpuede indicar el principio de un paso inferior?",
        "respuestas": [
            {
                "respuesta": "No, indica \u00fanicamente el principio de un t\u00fanel.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, y tambi\u00e9n el principio de un t\u00fanel o de un tramo equiparado a t\u00fanel.",
                "correcta": true
            },
            {
                "respuesta": "No, indica el final de un t\u00fanel o paso inferior.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-29.jpg",
        "texto": "La se\u00f1al proh\u00edbe el paso a los veh\u00edculos...",
        "respuestas": [
            {
                "respuesta": "Cuya anchura m\u00e1xima, incluida la carga, supere la indicada.",
                "correcta": true
            },
            {
                "respuesta": "Cuya altura m\u00e1xima, incluida la carga, supere la indicada.",
                "correcta": false
            },
            {
                "respuesta": "Cuya longitud m\u00e1xima, incluida la carga, supere la indicada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Motos-6\/46-Estructura-proteccion.jpg",
        "texto": "El conductor de una motocicleta que cuenta con estructura de autoprotecci\u00f3n y cintur\u00f3n de seguridad, \u00bfest\u00e1 obligado a utilizar casco?",
        "respuestas": [
            {
                "respuesta": "No, debiendo utilizar el cintur\u00f3n de seguridad.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, como en cualquier motocicleta.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, el casco siempre es obligatorio para los conductores de motocicletas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Motos-6\/47-arcen-150.jpg",
        "texto": "En esta carretera con arc\u00e9n de m\u00e1s de 1,50 metros de ancho, \u00bfa qu\u00e9 velocidad m\u00e1xima puede adelantar una motocicleta?",
        "respuestas": [
            {
                "respuesta": "A 120 km\/h.",
                "correcta": true
            },
            {
                "respuesta": "A 100 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "A 140 km\/h.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Motos-6\/48-Cuando-el-casco-no-tiene-pantalla.jpg",
        "texto": "Cuando el casco no tiene pantalla de protecci\u00f3n, \u00bfes conveniente ponerse unas gafas de seguridad?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque es obligatorio.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, para proteger los ojos.",
                "correcta": true
            },
            {
                "respuesta": "No.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-24.jpg",
        "texto": "En una glorieta regulada exclusivamente por esta se\u00f1al, \u00bfqui\u00e9n tiene prioridad de paso?",
        "respuestas": [
            {
                "respuesta": "Siempre el veh\u00edculo que tenga libre su derecha.",
                "correcta": false
            },
            {
                "respuesta": "El veh\u00edculo que pretende acceder a la glorieta.",
                "correcta": false
            },
            {
                "respuesta": "El veh\u00edculo que se encuentra dentro de la calzada circular.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-011.jpg",
        "texto": "Antes de repostar combustible es necesario...",
        "respuestas": [
            {
                "respuesta": "Parar el motor y apagar las luces, \u00fanicamente.",
                "correcta": false
            },
            {
                "respuesta": "\u00danicamente parar el motor.",
                "correcta": false
            },
            {
                "respuesta": "Parar el motor, desconectar los sistemas el\u00e9ctricos y apagar los tel\u00e9fonos m\u00f3viles.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-25.jpg",
        "texto": "En esta intersecci\u00f3n no hay l\u00ednea de detenci\u00f3n; \u00bfd\u00f3nde hay que detenerse?",
        "respuestas": [
            {
                "respuesta": "Antes de entrar en la intersecci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "A una distancia m\u00ednima de 5 metros antes de la intersecci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Dentro de la intersecci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Senales-3\/Test-240-Preg-28.jpg",
        "texto": "Esta se\u00f1al, \u00bfpuede indicar el principio de un paso inferior?",
        "respuestas": [
            {
                "respuesta": "No, indica \u00fanicamente el principio de un t\u00fanel.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, y tambi\u00e9n el principio de un t\u00fanel o de un tramo equiparado a t\u00fanel.",
                "correcta": true
            },
            {
                "respuesta": "No, indica el final de un t\u00fanel o paso inferior.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Motos-6\/Otra-foto-33.jpg",
        "texto": "\u00bfEs conveniente circular en paralelo junto a un veh\u00edculo de dos ruedas?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "No, salvo en v\u00edas urbanas o con mucho tr\u00e1fico.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-12.jpg",
        "texto": "Si por una emergencia queda inmovilizado en un t\u00fanel, deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Dejar el veh\u00edculo cerrado y salir del t\u00fanel cuanto antes",
                "correcta": false
            },
            {
                "respuesta": "Apagar todas las luces si el t\u00fanel est\u00e1 iluminado y solicitar auxilio a trav\u00e9s del tel\u00e9fono m\u00f3vil",
                "correcta": false
            },
            {
                "respuesta": "Apagar el motor, conectar la se\u00f1al de emergencia y mantener encendidas las luces de posici\u00f3n",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-13.jpg",
        "texto": "A un turismo, \u00bfcu\u00e1ndo le est\u00e1 permitido circular por el arc\u00e9n?",
        "respuestas": [
            {
                "respuesta": "En ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "Cuando por razones de emergencia, circule a velocidad anormalmente reducida.",
                "correcta": true
            },
            {
                "respuesta": "Por razones de fluidez, siempre que el tr\u00e1fico est\u00e9 congestionado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-14.jpg",
        "texto": "Se ve obligado a trasladar en su turismo a un herido. \u00bfDebe respetar las normas de circulaci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, y me asegurar\u00e9 de que no pongo en peligro a otros usuarios.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero s\u00f3lo en las intersecciones.",
                "correcta": false
            },
            {
                "respuesta": "No, y estoy exento de respetar las se\u00f1ales de los agentes.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-15.jpg",
        "texto": "Como norma general, en una v\u00eda interurbana que no dispone de zona peatonal, \u00bfpor qu\u00e9 lado deben circular los peatones?",
        "respuestas": [
            {
                "respuesta": "Por su izquierda.",
                "correcta": true
            },
            {
                "respuesta": "Por su derecha.",
                "correcta": false
            },
            {
                "respuesta": "Indistintamente, por cualquiera de los dos lados.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-16.jpg",
        "texto": "En los estrechamientos en tramos de gran pendiente, si no hay se\u00f1alizaci\u00f3n expresa  al efecto, tendr\u00e1 la preferencia de paso el veh\u00edculo que circule en sentido...",
        "respuestas": [
            {
                "respuesta": "Descendente, salvo si pudiera llegar antes a un apartadero.",
                "correcta": false
            },
            {
                "respuesta": "Ascendente, salvo si pudiera llegar antes a un apartadero.",
                "correcta": true
            },
            {
                "respuesta": "Ascendente, en todo caso.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-17.jpg",
        "texto": "Un turismo con cortinillas contra el sol en las ventanillas traseras, \u00bfpuede circular?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, siempre.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo cuando el veh\u00edculo lleva dos espejos retrovisores exteriores.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-18.jpg",
        "texto": "Circulando por autopista, prev\u00e9 que su veh\u00edculo va a quedar inmovilizado por circunstancias del tr\u00e1fico; \u00bfc\u00f3mo deber\u00e1 advertirlo?",
        "respuestas": [
            {
                "respuesta": "Mediante el empleo reiterado de las luces de frenado.",
                "correcta": true
            },
            {
                "respuesta": "Mediante la luz antiniebla trasera y la se\u00f1al de emergencia.",
                "correcta": false
            },
            {
                "respuesta": "Encendiendo las luces de posici\u00f3n, aunque sea de d\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-19.jpg",
        "texto": "\u00bfC\u00f3mo se deben regular los espejos en los veh\u00edculos?",
        "respuestas": [
            {
                "respuesta": "Con el veh\u00edculo parado en calzada recta.",
                "correcta": true
            },
            {
                "respuesta": "Con el veh\u00edculo en movimiento para ver mejor.",
                "correcta": false
            },
            {
                "respuesta": "Con el veh\u00edculo parado o en movimiento, es igual.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-20.jpg",
        "texto": "Arrojar un cigarro por la ventanilla de un turismo, \u00bfpuede suponer una infracci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, y adem\u00e1s conlleva p\u00e9rdida de puntos.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero no conlleva p\u00e9rdida de puntos.",
                "correcta": false
            },
            {
                "respuesta": "No, pero no se debe hacer.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-21.jpg",
        "texto": "En caso de un accidente donde la ayuda ya est\u00e1 organizada, \u00bfdebe detenerse a prestar auxilio?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, en v\u00edas interurbanas o donde no exista poste SOS.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, debe detenerse y colaborar siempre.",
                "correcta": false
            },
            {
                "respuesta": "No, si no est\u00e1 implicado debe continuar la marcha.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-2\/Test-240-Preg-22.jpg",
        "texto": "Circula con su turismo por esta v\u00eda interurbana con un carril para cada sentido; si no pretende adelantar al cami\u00f3n, \u00bfqu\u00e9 distancia de seguridad debe dejar?",
        "respuestas": [
            {
                "respuesta": "150 metros.",
                "correcta": false
            },
            {
                "respuesta": "La que permita al veh\u00edculo que circule detr\u00e1s, adelantarme con seguridad.",
                "correcta": true
            },
            {
                "respuesta": "50 metros.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/38-Los-sistemas-de-seguridad-pasiva.jpg",
        "texto": "Los sistemas de seguridad pasiva incluyen...",
        "respuestas": [
            {
                "respuesta": "Alumbrado, neum\u00e1ticos, frenos y suspensi\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Frenos, neum\u00e1ticos, airbags y cinturones de seguridad.",
                "correcta": false
            },
            {
                "respuesta": "Cinturones de seguridad, airbags, apoyacabezas y casco.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/39-Los-accidentes-generan.jpg",
        "texto": "Los accidentes de tr\u00e1fico generan...",
        "respuestas": [
            {
                "respuesta": "Da\u00f1os materiales y costes sanitarios, \u00fanicamente.",
                "correcta": false
            },
            {
                "respuesta": "Da\u00f1os materiales, costes sanitarios y administrativos.",
                "correcta": true
            },
            {
                "respuesta": "Un enorme impacto econ\u00f3mico, solamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/40-Esta-obligado-a-control-de-alcohol.jpg",
        "texto": "Un conductor que es requerido por los agentes para una prueba de alcoholemia, \u00bfest\u00e1 obligado a someterse a ella?",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo si est\u00e1 implicado en un accidente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "S\u00f3lo si est\u00e1 implicado en un accidente o ha cometido alguna infracci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/41-dia-de-calor.jpg",
        "texto": "Circulando en un d\u00eda de calor...",
        "respuestas": [
            {
                "respuesta": "Se deben hacer menos descansos, para llegar al destino cuanto antes.",
                "correcta": false
            },
            {
                "respuesta": "Hay que realizar los mismos descansos que si la temperatura es normal.",
                "correcta": false
            },
            {
                "respuesta": "Se deben hacer m\u00e1s descansos, ya que la fatiga aparece m\u00e1s f\u00e1cilmente.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/42-Conduce-bajo-efectos-drogas.jpg",
        "texto": "La persona que conduce bajo los efectos de las drogas...",
        "respuestas": [
            {
                "respuesta": "Pone a todos los que le rodean en un grave riesgo de accidente.",
                "correcta": true
            },
            {
                "respuesta": "Solo pone en riesgo su propia vida.",
                "correcta": false
            },
            {
                "respuesta": "Asume menos riesgos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/43-Movil-con-manos-libres.jpg",
        "texto": "Hablar por un tel\u00e9fono con dispositivo de manos libres durante la conducci\u00f3n...",
        "respuestas": [
            {
                "respuesta": "Permite mantener sin riesgo largas conversaciones al volante.",
                "correcta": false
            },
            {
                "respuesta": "Tiene un cierto riesgo debido a la p\u00e9rdida de atenci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Est\u00e1 prohibido.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/44-Un-conductor-novel.jpg",
        "texto": "Un conductor novel, \u00bfpuede sentirse fatigado m\u00e1s f\u00e1cilmente?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, por la falta de experiencia al volante.",
                "correcta": true
            },
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "\u00danicamente cuando sea una persona mayor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-II-5\/45-Tomar-una-pastilla-para-el-dolor-de-cabeza.jpg",
        "texto": "Tomar un analg\u00e9sico para el dolor de cabeza, \u00bfpuede afectar a la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo si se mezcla con alcohol.",
                "correcta": false
            },
            {
                "respuesta": "No, los analg\u00e9sicos son inofensivos.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/30-Para-ahorrar-combustible.jpg",
        "texto": "Para ahorrar carburante, \u00bfqu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Circular a 90 kil\u00f3metros por hora, siempre.",
                "correcta": false
            },
            {
                "respuesta": "Circular con marchas cortas.",
                "correcta": false
            },
            {
                "respuesta": "Adaptar las marchas a las necesidades del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/31-Los-excesos-de-velocidad.jpg",
        "texto": "Los excesos de velocidad...",
        "respuestas": [
            {
                "respuesta": "Hoy apenas tienen incidencia en los accidentes, debido a la seguridad de los veh\u00edculos.",
                "correcta": false
            },
            {
                "respuesta": "Son responsables de la mayor\u00eda de los accidentes, en v\u00edas de doble sentido solamente.",
                "correcta": false
            },
            {
                "respuesta": "Junto con las distracciones, son responsables de la mayor\u00eda de los accidentes.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/32-La-presion-de-los-neumaticos.jpg",
        "texto": "La presi\u00f3n de los neum\u00e1ticos deber\u00e1 comprobarse con los neum\u00e1ticos:",
        "respuestas": [
            {
                "respuesta": "Fr\u00edos.",
                "correcta": true
            },
            {
                "respuesta": "Calientes.",
                "correcta": false
            },
            {
                "respuesta": "Fr\u00edos o calientes, es indiferente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/33-Circular-en-paralelo-a-dos-ruedas.jpg",
        "texto": "\u00bfEs conveniente circular en paralelo junto a un veh\u00edculo de dos ruedas?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "No, salvo en v\u00edas urbanas o con mucho tr\u00e1fico.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/34-ns63.jpg",
        "texto": "Las l\u00e1mparas de xen\u00f3n...",
        "respuestas": [
            {
                "respuesta": "Aumentan la fatiga ocular del conductor.",
                "correcta": false
            },
            {
                "respuesta": "Mejoran la iluminaci\u00f3n de la v\u00eda y reducen la fatiga ocular del conductor.",
                "correcta": true
            },
            {
                "respuesta": "Iluminan peor la v\u00eda, pero reducen la fatiga ocular del conductor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/35-Utilizacion-reposacabezas.jpg",
        "texto": "\u00bfEs recomendable la utilizaci\u00f3n de los reposacabezas en todos los asientos de un turismo?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, puede evitar lesiones graves en la zona cervical.",
                "correcta": true
            },
            {
                "respuesta": "No, es un elemento que puede ser perjudicial para la seguridad de los ocupantes.",
                "correcta": false
            },
            {
                "respuesta": "No, al ser un elemento decorativo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/36-Conducir-con-sueno.jpg",
        "texto": "Conducir con sue\u00f1o, \u00bfpor qu\u00e9 es peligroso?",
        "respuestas": [
            {
                "respuesta": "Porque disminuye la concentraci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Porque se circula m\u00e1s r\u00e1pido.",
                "correcta": false
            },
            {
                "respuesta": "Porque el viaje dura m\u00e1s.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Seg-Vial-I-4\/37-Autovias-y-autopistas.jpg",
        "texto": "Las autov\u00edas y las autopistas, en general, son en relaci\u00f3n con las carreteras convencionales...",
        "respuestas": [
            {
                "respuesta": "M\u00e1s seguras.",
                "correcta": true
            },
            {
                "respuesta": "Igual de seguras.",
                "correcta": false
            },
            {
                "respuesta": "Menos seguras.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-01.jpg",
        "texto": "Conducir, con un permiso de la clase B, un turismo que arrastra un remolque ligero, \u00bfest\u00e1 permitido?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "Solo si la masa m\u00e1xima autorizada del conjunto no supera los 3.500 kilogramos.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, en cualquier caso.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-02.jpg",
        "texto": "Si en un veh\u00edculo se realiza una reforma t\u00e9cnica de importancia, \u00bfes obligatorio pasar una inspecci\u00f3n t\u00e9cnica extraordinaria?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, en un taller autorizado.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, en una estaci\u00f3n ITV",
                "correcta": true
            },
            {
                "respuesta": "No, no es necesario.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-03.jpg",
        "texto": "\u00bfQu\u00e9 es una detenci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Un estacionamiento sin bajarse del veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "La inmovilizaci\u00f3n del veh\u00edculo por necesidades de la circulaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Una parada por cualquier causa.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-04.jpg",
        "texto": "Como norma general, \u00bfd\u00f3nde est\u00e1 prohibido adelantar?",
        "respuestas": [
            {
                "respuesta": "En las calzadas de menos de 8 m de anchura.",
                "correcta": false
            },
            {
                "respuesta": "En todas las curvas y cambios de rasante.",
                "correcta": false
            },
            {
                "respuesta": "En las intersecciones y en sus proximidades.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-05.jpg",
        "texto": "En un t\u00fanel con un carril para cada sentido de circulaci\u00f3n, \u00bfest\u00e1 permitido adelantar?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, cuando no haya se\u00f1ales que lo proh\u00edban.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, si hay suficiente visibilidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-06.jpg",
        "texto": "Si por cualquier circunstancia tuviera que realizar la operaci\u00f3n de descarga de su veh\u00edculo dentro de la v\u00eda p\u00fablica, \u00bfc\u00f3mo deber\u00e1 hacerlo?",
        "respuestas": [
            {
                "respuesta": "Depositando la mercanc\u00eda en el arc\u00e9n o en la zona peatonal m\u00e1s pr\u00f3xima.",
                "correcta": false
            },
            {
                "respuesta": "Efectuando la descarga lo antes posible, evitando ruidos y molestias innecesarias.",
                "correcta": true
            },
            {
                "respuesta": "En ning\u00fan caso debe realizarse la operaci\u00f3n de descarga dentro de la v\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-07.jpg",
        "texto": "La luz antiniebla trasera deber\u00e1 utilizarse en caso de...",
        "respuestas": [
            {
                "respuesta": "Fuerte viento.",
                "correcta": false
            },
            {
                "respuesta": "Circulaci\u00f3n intensa.",
                "correcta": false
            },
            {
                "respuesta": "Lluvia muy intensa.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-08.jpg",
        "texto": "Un turismo que circula entre la puesta y la salida del sol, \u00bfdebe llevar iluminadas las placas de matr\u00edcula?",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo la delantera.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo la trasera.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, tanto la delantera como la trasera.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-09.jpg",
        "texto": "\u00bfA qu\u00e9 velocidad m\u00e1xima puede circular por una autopista un turismo que arrastra un remolque ligero?",
        "respuestas": [
            {
                "respuesta": "120 km\/h",
                "correcta": false
            },
            {
                "respuesta": "100 km\/h",
                "correcta": false
            },
            {
                "respuesta": "90 km\/h",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-010.jpg",
        "texto": "La utilizaci\u00f3n del carril habilitado para VAO...",
        "respuestas": [
            {
                "respuesta": "Se limita a primeras horas de la ma\u00f1ana.",
                "correcta": false
            },
            {
                "respuesta": "Est\u00e1 prohibida para veh\u00edculos con remolque.",
                "correcta": true
            },
            {
                "respuesta": "Est\u00e1 permitida a ciclomotores.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-240-Especial-Reglamentacion-1\/ESP-TEST-011.jpg",
        "texto": "Antes de repostar combustible es necesario...",
        "respuestas": [
            {
                "respuesta": "Parar el motor y apagar las luces, \u00fanicamente.",
                "correcta": false
            },
            {
                "respuesta": "\u00danicamente parar el motor.",
                "correcta": false
            },
            {
                "respuesta": "Parar el motor, desconectar los sistemas el\u00e9ctricos y apagar los tel\u00e9fonos m\u00f3viles.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239-P01.jpg",
        "texto": "Hay una nube de humo. \u00bfDebe utilizarse alg\u00fan tipo de alumbrado?",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo si viene alg\u00fan veh\u00edculo en sentido contrario.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, la luz antiniebla delantera o la luz de corto o largo alcance.",
                "correcta": true
            },
            {
                "respuesta": "No, porque es de d\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P02-P-33.jpg",
        "texto": "Esta se\u00f1al indica peligro por...",
        "respuestas": [
            {
                "respuesta": "Pavimento deslizante por nieve.",
                "correcta": false
            },
            {
                "respuesta": "La proximidad de un tramo de v\u00eda con visibilidad reducida por niebla, lluvia o nieve.",
                "correcta": true
            },
            {
                "respuesta": "La proximidad de un tramo de la v\u00eda con desprendimientos frecuentes y la presencia de obst\u00e1culos en la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P03.jpg",
        "texto": "\u00bfQu\u00e9 indican los conos en la calzada?",
        "respuestas": [
            {
                "respuesta": "Refuerzan el significado de las l\u00edneas discontinuas del carril.",
                "correcta": false
            },
            {
                "respuesta": "Nada, no son se\u00f1ales de circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "La prohibici\u00f3n de rebasar la l\u00ednea imaginaria que los une.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P04.jpg",
        "texto": "En los cambios de carril en un mismo sentido, \u00bfqui\u00e9n tiene prioridad?",
        "respuestas": [
            {
                "respuesta": "El veh\u00edculo que circula por el carril que se pretende ocupar.",
                "correcta": true
            },
            {
                "respuesta": "El veh\u00edculo que realiza el cambio de carril.",
                "correcta": false
            },
            {
                "respuesta": "Siempre los turismos sobre el resto de veh\u00edculos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P05.jpg",
        "texto": "En esta situaci\u00f3n de aglomeraci\u00f3n, \u00bfpodr\u00e1 circular por el arc\u00e9n?",
        "respuestas": [
            {
                "respuesta": "No, est\u00e1 prohibido.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, si tiene prisa.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, para descongestionar el tr\u00e1fico.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P06.jpg",
        "texto": "Antes de iniciar un adelantamiento, \u00bfqu\u00e9 debe comprobar?",
        "respuestas": [
            {
                "respuesta": "Que los veh\u00edculos que circulan por el mismo carril no llevan encendidos los intermitentes.",
                "correcta": false
            },
            {
                "respuesta": "Que ning\u00fan conductor ha iniciado la maniobra de adelantar a su veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Que los veh\u00edculos que circulan detr\u00e1s mantienen la distancia de seguridad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239-P07.jpg",
        "texto": "El conductor indica con el brazo que va a girar a la izquierda y lleva encendido el intermitente derecho; \u00bfqu\u00e9 se\u00f1al tiene validez?",
        "respuestas": [
            {
                "respuesta": "Ninguna.",
                "correcta": false
            },
            {
                "respuesta": "La del brazo.",
                "correcta": true
            },
            {
                "respuesta": "La del intermitente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239-P08.jpg",
        "texto": "En doble fila, \u00bfqu\u00e9 est\u00e1 prohibido?",
        "respuestas": [
            {
                "respuesta": "Parar.",
                "correcta": false
            },
            {
                "respuesta": "Parar y estacionar.",
                "correcta": false
            },
            {
                "respuesta": "Estacionar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239-P09.jpg",
        "texto": "El sem\u00e1foro de la fotograf\u00eda est\u00e1 estropeado. \u00bfA qui\u00e9n debe ceder el paso en la intersecci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "A los veh\u00edculos que entran por la derecha.",
                "correcta": true
            },
            {
                "respuesta": "A los veh\u00edculos que entran por la izquierda.",
                "correcta": false
            },
            {
                "respuesta": "A todos los veh\u00edculos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239-P10.jpg",
        "texto": "Este veh\u00edculo est\u00e1 averiado y circula a velocidad anormalmente reducida con la luz de emergencia encendida; \u00bfes correcto su comportamiento?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque el veh\u00edculo est\u00e1 averiado.",
                "correcta": true
            },
            {
                "respuesta": "No; las luces de emergencia se usan solo con el veh\u00edculo detenido.",
                "correcta": false
            },
            {
                "respuesta": "No; est\u00e1 prohibido el uso de este alumbrado en v\u00edas urbanas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/Como-afrontar-puerto-montana.jpg",
        "texto": "Por seguridad, \u00bfcu\u00e1l es la forma m\u00e1s aconsejable de bajar un puerto de monta\u00f1a cuando en la calzada existan placas de hielo?",
        "respuestas": [
            {
                "respuesta": "Con la marcha m\u00e1s corta que se pueda para evitar deslizamientos",
                "correcta": true
            },
            {
                "respuesta": "Utilizando el freno de mano para trazar las curvas.",
                "correcta": false
            },
            {
                "respuesta": "A baja velocidad con la marcha m\u00e1s larga que se pueda, evitando frenadas bruscas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P12.jpg",
        "texto": "La velocidad m\u00e1xima gen\u00e9rica para una motocicleta en una carretera convencional con arc\u00e9n pavimentado de m\u00e1s de 1,50 metros de ancho es de...",
        "respuestas": [
            {
                "respuesta": "90 kil\u00f3metros por hora.",
                "correcta": false
            },
            {
                "respuesta": "80 kil\u00f3metros por hora.",
                "correcta": false
            },
            {
                "respuesta": "100 kil\u00f3metros por hora.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P14.jpg",
        "texto": "Al conducir bajo condiciones climatol\u00f3gicas adversas...",
        "respuestas": [
            {
                "respuesta": "Es necesario descansar con m\u00e1s frecuencia.",
                "correcta": true
            },
            {
                "respuesta": "Es menos probable que aparezca la fatiga.",
                "correcta": false
            },
            {
                "respuesta": "No es necesario descansar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P11.jpg",
        "texto": "A la vista de la se\u00f1al, \u00bfes obligatorio detenerse para dejar pasar a un veh\u00edculo que circula en sentido contrario?",
        "respuestas": [
            {
                "respuesta": "No, porque la se\u00f1al otorga prioridad de paso.",
                "correcta": false
            },
            {
                "respuesta": "No, porque la se\u00f1al no afecta a la prioridad de paso.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, mientras no se pueda continuar la marcha sin obligar a detenerse a los veh\u00edculos que circulen en sentido contrario.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201702\/T239P13.jpg",
        "texto": "Esta se\u00f1al indica el lugar a partir del cual...",
        "respuestas": [
            {
                "respuesta": "termina la obligaci\u00f3n de circular, al menos, a 30 km\/h.",
                "correcta": true
            },
            {
                "respuesta": "comienza la obligaci\u00f3n de circular a m\u00e1s de 30 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "termina la recomendaci\u00f3n de circular a m\u00e1s de 30 km\/h.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test-238-P01-160x145.jpg",
        "texto": "Cuando las cintas no quedan bien estiradas, el cintur\u00f3n de seguridad...",
        "respuestas": [
            {
                "respuesta": "pierde eficacia y puede provocar lesiones durante el accidente.",
                "correcta": true
            },
            {
                "respuesta": "protege m\u00e1s en caso de accidente.",
                "correcta": false
            },
            {
                "respuesta": "no reduce su eficacia en caso de accidente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test-238-P02-160x145.jpg",
        "texto": "\u00bfQu\u00e9 indica la se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "Que el carril derecho s\u00f3lo puede ser utilizado por ciclos.",
                "correcta": true
            },
            {
                "respuesta": "Que el carril derecho s\u00f3lo puede ser utilizado por ciclos y ciclomotores.",
                "correcta": false
            },
            {
                "respuesta": "Que por el carril derecho se llega a una senda ciclable.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-p03-160x145.jpg",
        "texto": "En caso de lluvia intensa, \u00bfes recomendable aumentar la distancia de seguridad y reducir la velocidad?",
        "respuestas": [
            {
                "respuesta": "S\u00ed; mejora el agarre de los neum\u00e1ticos, pero no es recomendable reducir la velocidad.",
                "correcta": false
            },
            {
                "respuesta": "No; al reducir la velocidad mayor es la proporci\u00f3n de agua en el asfalto.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed; ya que la adherencia es menor y, por consiguiente, la distancia de frenado aumenta.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P04-160x145.jpg",
        "texto": "Es obligatorio finalizar un adelantamiento...",
        "respuestas": [
            {
                "respuesta": "Incorpor\u00e1ndose al carril derecho a la mayor velocidad posible.",
                "correcta": false
            },
            {
                "respuesta": "\u00danicamente se\u00f1alizando el desplazamiento lateral.",
                "correcta": false
            },
            {
                "respuesta": "Incorpor\u00e1ndose al carril de forma gradual sin obstaculizar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P05-160x145.jpg",
        "texto": "\u00bfQu\u00e9 relaci\u00f3n existe entre la velocidad y el campo de visi\u00f3n del conductor?",
        "respuestas": [
            {
                "respuesta": "A mayor velocidad, menor campo visual.",
                "correcta": true
            },
            {
                "respuesta": "A menor velocidad, menor campo visual.",
                "correcta": false
            },
            {
                "respuesta": "A mayor velocidad, mayor campo visual.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P06-160x145.jpg",
        "texto": "En una autopista o autov\u00eda, \u00bfse puede utilizar la mediana en alg\u00fan caso?",
        "respuestas": [
            {
                "respuesta": "No, nunca.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, para inmovilizar el veh\u00edculo por emergencia cuando no es posible hacerlo en el arc\u00e9n de la derecha.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, para adelantar cuando los carriles est\u00e9n ocupados.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P07-160x145.jpg",
        "texto": "Un agente, con toques de silbato cortos y frecuentes, ordena...",
        "respuestas": [
            {
                "respuesta": "Que se reanude la marcha.",
                "correcta": false
            },
            {
                "respuesta": "Que se detengan los veh\u00edculos a quienes se dirija.",
                "correcta": true
            },
            {
                "respuesta": "Que se inmovilice el veh\u00edculo fuera de la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P08-160x145.jpg",
        "texto": "\u00bfQu\u00e9 efectos puede producir un resfriado en la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Desorientaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Somnolencia y p\u00e9rdida de concentraci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Impulsividad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P09-160x145.jpg",
        "texto": "Cuando tenga que bajar del veh\u00edculo para descargar el equipaje, \u00bfdebe apagar el motor?",
        "respuestas": [
            {
                "respuesta": "No, no es necesario si se trata de una parada breve.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, y adem\u00e1s debe desconectar el sistema de arranque o contacto.",
                "correcta": true
            },
            {
                "respuesta": "No, s\u00f3lo debe dejar accionado el freno de mano.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P10-160x145.jpg",
        "texto": "\u00bfQu\u00e9 factor se relaciona con los accidentes juveniles?",
        "respuestas": [
            {
                "respuesta": "La falta de reflejos.",
                "correcta": false
            },
            {
                "respuesta": "La falta de mantenimiento del veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "La menor percepci\u00f3n del riesgo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P11-160x145.jpg",
        "texto": "Cuando para realizar un cambio de sentido obstaculiza la marcha de los veh\u00edculos que circulan detr\u00e1s, deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Hacer se\u00f1ales con la luz de freno para advertir su maniobra.",
                "correcta": false
            },
            {
                "respuesta": "Esperar hasta que pueda realizar la maniobra.",
                "correcta": false
            },
            {
                "respuesta": "Salir de la calzada por la derecha, si fuera posible, y esperar hasta que las condiciones de la circulaci\u00f3n le permitan hacer la maniobra.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P12-160x145.jpg",
        "texto": "\u00bfEs obligatorio apagar el motor cuando est\u00e1 cargando combustible?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero no es necesario si es el empleado de la gasolinera quien llena el dep\u00f3sito.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, siempre.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-p13-160x145.jpg",
        "texto": "Un traje adecuado para conducir una motocicleta, debe...",
        "respuestas": [
            {
                "respuesta": "Estar muy ajustado al cuerpo para mejorar la est\u00e9tica.",
                "correcta": false
            },
            {
                "respuesta": "Tener colores oscuros.",
                "correcta": false
            },
            {
                "respuesta": "Ser resistente a los golpes y a la abrasi\u00f3n en caso de ca\u00edda.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test238-P14-160x145.jpg",
        "texto": "Fumar al volante...",
        "respuestas": [
            {
                "respuesta": "Es una conducta que puede interferir en la conducci\u00f3n y provocar un accidente.",
                "correcta": true
            },
            {
                "respuesta": "Relaja y proporciona serenidad al fumador, lo que repercute positivamente en la conducci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Es la principal causa de distracci\u00f3n durante la conducci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201612\/Test-238-P15-160x145.jpg",
        "texto": "Fuera de poblado, como norma general , \u00bfpor qu\u00e9 lado de la v\u00eda deber\u00e1n circular los peatones?",
        "respuestas": [
            {
                "respuesta": "Por la derecha en casos de poca visibilidad.",
                "correcta": false
            },
            {
                "respuesta": "Por la izquierda.",
                "correcta": true
            },
            {
                "respuesta": "Indistintamente, por la derecha o por la izquierda siempre que haya un arc\u00e9n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-p01.jpg",
        "texto": "\u00bfEs correcto el uso frecuente del freno de mano cuando se conduce?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, se debe utilizar en curvas cerradas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, siempre que el veh\u00edculo tenga ABS.",
                "correcta": false
            },
            {
                "respuesta": "No, s\u00f3lo se debe utilizar en los casos de inmovilizaci\u00f3n del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P-02.jpg",
        "texto": "El alumbrado de g\u00e1libo es obligatorio para...",
        "respuestas": [
            {
                "respuesta": "Los veh\u00edculos que transporten mercanc\u00edas peligrosas.",
                "correcta": false
            },
            {
                "respuesta": "Los veh\u00edculos de asistencia en carretera.",
                "correcta": false
            },
            {
                "respuesta": "Los veh\u00edculos cuya anchura sea mayor de 2,10 metros.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P03.jpg",
        "texto": "Con el permiso de la clase B, \u00bfqu\u00e9 otros veh\u00edculos se pueden conducir, adem\u00e1s de turismos?",
        "respuestas": [
            {
                "respuesta": "Todos los veh\u00edculos que se pueden conducir con el permiso A.",
                "correcta": false
            },
            {
                "respuesta": "Ciclomotores de dos, tres y cuatro ruedas.",
                "correcta": true
            },
            {
                "respuesta": "Motocicletas de m\u00e1s de 125 cc.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P04.jpg",
        "texto": "Para aumentar la fluidez del tr\u00e1fico, se ha abierto un carril para circular en sentido contrario al habitual, \u00bfqu\u00e9 veh\u00edculos pueden circular por este carril?",
        "respuestas": [
            {
                "respuesta": "Todos los autorizados a circular por la v\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Todos los que pueden circular a m\u00e1s de 60 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "Los turismos sin remolque y las motocicletas.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P05.jpg",
        "texto": "Una fila de escolares est\u00e1 cruzando la calzada. \u00bfDebe cederles el paso?",
        "respuestas": [
            {
                "respuesta": "Solamente en los pasos para peatones.",
                "correcta": false
            },
            {
                "respuesta": "No, cuando no llevan paleta de STOP.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P-06.jpg",
        "texto": "Un sem\u00e1foro con una flecha negra sobre una luz roja fija...",
        "respuestas": [
            {
                "respuesta": "Proh\u00edbe circular por donde indica la flecha.",
                "correcta": true
            },
            {
                "respuesta": "Permite seguir circulando extremando la precauci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Obliga a continuar por donde indica la flecha.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P07.jpg",
        "texto": "En esta autov\u00eda hay mucha niebla. \u00bfSe puede circular a menos de 60 km\/h?",
        "respuestas": [
            {
                "respuesta": "No, porque es una v\u00eda para circulaci\u00f3n r\u00e1pida.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, porque con la niebla se debe moderar la velocidad.",
                "correcta": true
            },
            {
                "respuesta": "No, en autov\u00eda nunca se debe circular a menos de la velocidad m\u00ednima permitida.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P08.jpg",
        "texto": "El alcohol, la fatiga y la velocidad excesiva, \u00bfde qu\u00e9 factor de riesgo forman parte?",
        "respuestas": [
            {
                "respuesta": "Del factor veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "Del factor v\u00eda y entorno.",
                "correcta": false
            },
            {
                "respuesta": "Del factor humano.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/EST-237-P09.jpg",
        "texto": "\u00bfCu\u00e1ntas placas de matr\u00edcula llevan las motocicletas?",
        "respuestas": [
            {
                "respuesta": "Una sola placa en la parte posterior, en posici\u00f3n vertical.",
                "correcta": true
            },
            {
                "respuesta": "Dos, una en la parte delantera y otra en la parte posterior.",
                "correcta": false
            },
            {
                "respuesta": "Una sola placa en la parte delantera.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P-10.jpg",
        "texto": "\u00bfQu\u00e9 indica la l\u00ednea longitudinal amarilla?",
        "respuestas": [
            {
                "respuesta": "Que se puede parar pero no estacionar.",
                "correcta": false
            },
            {
                "respuesta": "Que no se puede parar ni estacionar.",
                "correcta": true
            },
            {
                "respuesta": "Que se puede parar y estacionar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P11.jpg",
        "texto": "Los limpiaparabrisas deben mantenerse en buen estado para circular con seguridad. Para ello se debe...",
        "respuestas": [
            {
                "respuesta": "Comprobar que el dep\u00f3sito que contiene el l\u00edquido limpiaparabrisas est\u00e9 siempre al m\u00e1ximo nivel.",
                "correcta": false
            },
            {
                "respuesta": "Realizar la revisi\u00f3n de las escobillas con el fin de asegurar su m\u00e1xima eficacia.",
                "correcta": true
            },
            {
                "respuesta": "Aplicar sobre el parabrisas el l\u00edquido que recomienda el fabricante para facilitar el desplazamiento de las escobillas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P12.jpg",
        "texto": "En condiciones meteorol\u00f3gicas o ambientales desfavorables, \u00bfc\u00f3mo debe ser la separaci\u00f3n con los veh\u00edculos que circulan delante?",
        "respuestas": [
            {
                "respuesta": "Igual que cuando son favorables.",
                "correcta": false
            },
            {
                "respuesta": "Menor, para ver mejor a los veh\u00edculos que circulan delante.",
                "correcta": false
            },
            {
                "respuesta": "Mayor, para as\u00ed disponer de m\u00e1s tiempo y espacio para reaccionar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P13.jpg",
        "texto": "\u00bfQui\u00e9nes est\u00e1n obligados a someterse a las pruebas de alcoholemia?",
        "respuestas": [
            {
                "respuesta": "Todos los conductores de veh\u00edculos y cualquier usuario implicado directamente como posible responsable en un accidente de circulaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "S\u00f3lo los conductores que presenten s\u00edntomas de embriaguez.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo los conductores de veh\u00edculos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P14.jpg",
        "texto": "Un veh\u00edculo especial de reparaci\u00f3n o conservaci\u00f3n de v\u00edas, al entrar en una autopista, debe utilizar la luz de se\u00f1alizaci\u00f3n V-2...",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo cuando llegue al lugar de trabajo.",
                "correcta": false
            },
            {
                "respuesta": "Desde la entrada de la autopista.",
                "correcta": true
            },
            {
                "respuesta": "S\u00f3lo de noche.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201610\/TEST-237-P15.jpg",
        "texto": "A partir de esta se\u00f1al, circular como m\u00ednimo a 30 kil\u00f3metros por hora...",
        "respuestas": [
            {
                "respuesta": "Es recomendable.",
                "correcta": false
            },
            {
                "respuesta": "Est\u00e1 prohibido.",
                "correcta": false
            },
            {
                "respuesta": "Es obligatorio.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P01.jpg",
        "texto": "Es de noche y necesita inmovilizar su veh\u00edculo en el arc\u00e9n de una carretera por aver\u00eda. \u00bfQu\u00e9 luces debe encender?",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo las luces de posici\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Las luces de emergencia y las luces cortas.",
                "correcta": false
            },
            {
                "respuesta": "Las de posici\u00f3n y las de emergencia.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P02-160x146.jpg",
        "texto": "\u00bfCu\u00e1ndo est\u00e1 bien colocado en el asiento para conducir?",
        "respuestas": [
            {
                "respuesta": "Cuando llevo las piernas un poco dobladas y el cuerpo recto.",
                "correcta": true
            },
            {
                "respuesta": "Cuando llevo las piernas rectas y el cuerpo hacia atr\u00e1s.",
                "correcta": false
            },
            {
                "respuesta": "Cuando llevo las piernas dobladas y el cuerpo hacia adelante.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P03-ESP-160x146.jpg",
        "texto": "Una furgoneta de uso privado dedicada al transporte de personas, con capacidad para nueve plazas, incluido el conductor, \u00bfcu\u00e1ndo debe pasar la primera ITV?",
        "respuestas": [
            {
                "respuesta": "A los tres a\u00f1os de antig\u00fcedad.",
                "correcta": false
            },
            {
                "respuesta": "A los cuatros a\u00f1os de antig\u00fcedad.",
                "correcta": true
            },
            {
                "respuesta": "A los dos a\u00f1os de antig\u00fcedad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P04-160x146.jpg",
        "texto": "El tiempo desde que ve un peligro hasta que act\u00faa, \u00bfc\u00f3mo se llama?",
        "respuestas": [
            {
                "respuesta": "Tiempo de frenado.",
                "correcta": false
            },
            {
                "respuesta": "Tiempo de reacci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Tiempo de detenci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P05-160x146.jpg",
        "texto": "El factor de riesgo que influye en la mayor parte de los accidentes, \u00bfcu\u00e1l es?",
        "respuestas": [
            {
                "respuesta": "El factor v\u00eda y entorno.",
                "correcta": false
            },
            {
                "respuesta": "El factor humano.",
                "correcta": true
            },
            {
                "respuesta": "El factor veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P06-telef-160x146.jpg",
        "texto": "Llevar encendido el tel\u00e9fono m\u00f3vil en el veh\u00edculo, \u00bfpuede resultar peligroso?",
        "respuestas": [
            {
                "respuesta": "No, si no se va a utilizar.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, el sonido del tel\u00e9fono, al igual que otro ruido, puede sorprender al conductor.",
                "correcta": true
            },
            {
                "respuesta": "No, porque no es un ruido que pueda distraer al conductor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P07-160x146.jpg",
        "texto": "Existe un mayor riesgo de somnolencia en v\u00edas con...",
        "respuestas": [
            {
                "respuesta": "muchas curvas.",
                "correcta": false
            },
            {
                "respuesta": "mucho tr\u00e1fico.",
                "correcta": false
            },
            {
                "respuesta": "trazado mon\u00f3tono.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P08-160x146.jpg",
        "texto": "Si un veh\u00edculo tiene el intermitente derecho encendido, pero su conductor se\u00f1aliza con el brazo que va a girar a la izquierda, \u00bfqu\u00e9 se\u00f1al prevalece?",
        "respuestas": [
            {
                "respuesta": "Depende de la circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "La se\u00f1al luminosa.",
                "correcta": false
            },
            {
                "respuesta": "La realizada con el brazo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P09-160x146.jpg",
        "texto": "\u00bfEs aconsejable que los conductores de motocicletas lleven guantes?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "S\u00f3lo en v\u00eda urbana.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P10-160x146.jpg",
        "texto": "\u00bfPuede circular un turismo que expulsa por el tubo de escape m\u00e1s humo de lo permitido?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, mientras no sean gases nocivos.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero \u00fanicamente fuera de poblado.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P11-160x146.jpg",
        "texto": "En v\u00edas interurbanas, los ciclos y ciclomotores de dos ruedas, \u00bfd\u00f3nde deben situarse para girar a la izquierda?",
        "respuestas": [
            {
                "respuesta": "En el carril izquierdo.",
                "correcta": false
            },
            {
                "respuesta": "En el centro, sin invadir el sentido contrario.",
                "correcta": false
            },
            {
                "respuesta": "A la derecha, fuera de la calzada si es posible, e iniciarlo desde ese lugar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P12-160x146.jpg",
        "texto": "Mantener la distancia de seguridad adecuada, sobre todo en ciudad, \u00bfes una recomendaci\u00f3n v\u00e1lida para evitar accidentes con las motocicletas?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque se pueden evitar alcances.",
                "correcta": true
            },
            {
                "respuesta": "No, porque la distancia de seguridad no influye en los accidentes de moto.",
                "correcta": false
            },
            {
                "respuesta": "No, porque esta recomendaci\u00f3n carece de sentido circulando.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P13-160x146.jpg",
        "texto": "El conductor que consume coca\u00edna...",
        "respuestas": [
            {
                "respuesta": "puede volverse m\u00e1s competitivo y agresivo.",
                "correcta": true
            },
            {
                "respuesta": "es m\u00e1s tranquilo y menos competitivo.",
                "correcta": false
            },
            {
                "respuesta": "es m\u00e1s agresivo y menos competitivo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201606\/Test-236-P14-160x146.jpg",
        "texto": "Cuando llueve o hay viento, \u00bfpor qu\u00e9 hay que tener m\u00e1s precauci\u00f3n con los ciclistas?",
        "respuestas": [
            {
                "respuesta": "Porque tienen m\u00e1s probabilidad de caerse.",
                "correcta": true
            },
            {
                "respuesta": "Porque pueden salpicar agua.",
                "correcta": false
            },
            {
                "respuesta": "Porque suelen estorbar el tr\u00e1fico.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-01-N235.jpg",
        "texto": "Los cinturones de seguridad, \u00bfson eficaces para prevenir lesiones?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero s\u00f3lo cuando se conduce a poca velocidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-02-N235.jpg",
        "texto": "Si vende su veh\u00edculo, \u00bfdebe comunicarlo a la Jefatura de Tr\u00e1fico?",
        "respuestas": [
            {
                "respuesta": "No. El nuevo titular es el que tiene que comunicar la compra.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero no hay plazo obligatorio para comunicar la venta.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed. Debo comunicar la venta en el plazo de 10 d\u00edas, indicando los datos del nuevo titular.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-03-N235.jpg",
        "texto": "Los ocupantes del veh\u00edculo van a bajarse, \u00bfpor qu\u00e9 lado deben hacerlo?",
        "respuestas": [
            {
                "respuesta": "Por el lado m\u00e1s pr\u00f3ximo al borde de la v\u00eda, como norma general.",
                "correcta": true
            },
            {
                "respuesta": "Por el lado derecho siempre.",
                "correcta": false
            },
            {
                "respuesta": "Por ambos lados.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-04-N235.jpg",
        "texto": "El agente balancea una luz roja o amarilla, \u00bfa qu\u00e9 obliga?",
        "respuestas": [
            {
                "respuesta": "A disminuir la velocidad.",
                "correcta": false
            },
            {
                "respuesta": "A pasar por el lado correspondiente al brazo con el que realiza la se\u00f1al.",
                "correcta": false
            },
            {
                "respuesta": "A detenerse a los usuarios de la v\u00eda hacia los que dirige la luz.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-05-N235.jpg",
        "texto": "Al aproximarnos a un autob\u00fas con esta se\u00f1al en su parte posterior y que se encuentra parado recogiendo pasajeros, se deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Reducir la velocidad y si fuera preciso detener el veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Avisar de nuestra presencia con r\u00e1fagas de luz.",
                "correcta": false
            },
            {
                "respuesta": "Siempre, parar detr\u00e1s del veh\u00edculo hasta que reanude la marcha.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-06-N235.jpg",
        "texto": "Un cambio de rasante es:",
        "respuestas": [
            {
                "respuesta": "Un tramo de v\u00eda donde hay un cambio de direcci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Un lugar en el que se encuentran dos tramos de v\u00eda de distinta inclinaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Un tramo de v\u00eda donde no se ve el ancho total de la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-07-N235.jpg",
        "texto": "Esta se\u00f1al indica que empieza...",
        "respuestas": [
            {
                "respuesta": "Una autov\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Una autopista.",
                "correcta": true
            },
            {
                "respuesta": "Una carretera con un paso elevado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-08-N235.jpg",
        "texto": "A la vista de esta se\u00f1al, \u00bfpuede pasar conduciendo un ciclomotor?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque no es un veh\u00edculo a motor.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, porque la se\u00f1al s\u00f3lo proh\u00edbe el paso a autom\u00f3viles, y no a ciclomotores.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-09-N235.jpg",
        "texto": "En una intersecci\u00f3n regulada por esta se\u00f1al, \u00bfa qui\u00e9n debe ceder el paso?",
        "respuestas": [
            {
                "respuesta": "A ning\u00fan veh\u00edculo, porque esta se\u00f1al me indica que circulo por la v\u00eda con prioridad.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo a los veh\u00edculos que tengan mayores dificultades de maniobra.",
                "correcta": false
            },
            {
                "respuesta": "A los veh\u00edculos que se aproximen  por mi derecha.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-10-N235.jpg",
        "texto": "Si presencia un accidente con v\u00edctimas y no ha llegado ayuda, \u00bfdebe detenerse para prestar auxilio?",
        "respuestas": [
            {
                "respuesta": "No, puesto que puedo provocar otro accidente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, pero llamar\u00e9 inmediatamente a los servicios policiales y de urgencia.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-11-N235.jpg",
        "texto": "Circula con su turismo por una carretera en la que aparece esta se\u00f1al de restricci\u00f3n con un panel de color amarillo que nos indica que no se permite circular a....",
        "respuestas": [
            {
                "respuesta": "Camiones de M.M.A menor de 3.500 kg ni conjuntos de veh\u00edculos.",
                "correcta": false
            },
            {
                "respuesta": "Cualquier veh\u00edculo de m\u00e1s de 3.500 kg.",
                "correcta": false
            },
            {
                "respuesta": "Camiones de M.M.A mayor de 3.500 kg ni veh\u00edculos articulados.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-12-N235.jpg",
        "texto": "Despu\u00e9s de adelantar al turismo y al cami\u00f3n el turismo verde desea seguir adelantando a otros veh\u00edculos. \u00bfDebe regresar antes al carril derecho?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, siempre.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero solamente cuando circulen veh\u00edculos detr\u00e1s a m\u00e1s velocidad.",
                "correcta": true
            },
            {
                "respuesta": "No, porque en autopistas no es obligatorio.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-13-N235.jpg",
        "texto": "Cuando la goma de un neum\u00e1tico se endurece por envejecimiento, \u00bfes peligroso?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque el veh\u00edculo puede derrapar por falta de agarre.",
                "correcta": true
            },
            {
                "respuesta": "No, porque la goma dura se agarra mejor a la calzada.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero s\u00f3lo cuando la calzada est\u00e1 mojada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-14-N235.jpg",
        "texto": "En el arc\u00e9n de esta v\u00eda, \u00bfpuede inmovilizar su veh\u00edculo para ver el paisaje?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque el arc\u00e9n es ancho.",
                "correcta": false
            },
            {
                "respuesta": "No, porque est\u00e1 prohibido.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, porque no hay se\u00f1ales que lo proh\u00edben.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201604\/P-15-N235.jpg",
        "texto": "La marca vial amarilla continua, \u00bfqu\u00e9 indica?",
        "respuestas": [
            {
                "respuesta": "Proh\u00edbe estacionar solamente.",
                "correcta": false
            },
            {
                "respuesta": "Proh\u00edbe hacer parada y estacionar.",
                "correcta": true
            },
            {
                "respuesta": "Proh\u00edbe hacer parada solamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P01.jpg",
        "texto": "Los dos primeros a\u00f1os con permiso, \u00bfcu\u00e1l es la tasa m\u00e1xima de alcohol?",
        "respuestas": [
            {
                "respuesta": "0,10 mg\/l en aire espirado = 0,2 g\/l en sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,25 mg\/l en aire espirado = 0,5 g\/l en sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,15 mg\/l en aire espirado = 0,3 g\/l en sangre.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-233-P02.jpg",
        "texto": "La l\u00ednea de borde de la calzada, \u00bfse puede atravesar?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, cuando sea necesario y las circunstancias lo permitan.",
                "correcta": true
            },
            {
                "respuesta": "No, est\u00e1 prohibido.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando la l\u00ednea es discontinua; no, cuando es continua.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P03-extendida.jpg",
        "texto": "Si conduce una motocicleta y la calzada est\u00e1 mojada, \u00bfes necesario incrementar la presi\u00f3n de inflado de los neum\u00e1ticos por encima de la recomendada por el fabricante?",
        "respuestas": [
            {
                "respuesta": "No, ya que una mayor presi\u00f3n de inflado no contribuye a aumentar la seguridad de circulaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, porque aumenta la adherencia de los neum\u00e1ticos y mejorar\u00e1 la seguridad de circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, ya que aumenta la seguridad de circulaci\u00f3n y as\u00ed se evitan los derrapes.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P04.jpg",
        "texto": "Al inmovilizar un veh\u00edculo en una autopista es obligatorio se\u00f1alizar la presencia del mismo...",
        "respuestas": [
            {
                "respuesta": "Con la luz de posici\u00f3n, siempre.",
                "correcta": false
            },
            {
                "respuesta": "Con la luz de emergencia, si se dispone de ella y, en su caso, con la de posici\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "\u00danicamente con la luz de emergencia.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P05.jpg",
        "texto": "En un tramo de v\u00eda con un carril de aceleraci\u00f3n, \u00bfse considera adelantamiento que un veh\u00edculo avance m\u00e1s r\u00e1pidamente que otro que lo hace por el carril normal?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, como otro adelantamiento cualquiera.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, porque se trata de una v\u00eda interurbana.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P06.jpg",
        "texto": "Durante el d\u00eda, con niebla densa o lluvia intensa, \u00bfse puede circular con la luz de largo alcance encendida?",
        "respuestas": [
            {
                "respuesta": "No, s\u00f3lo puede encenderse la luz de corto alcance.",
                "correcta": false
            },
            {
                "respuesta": "No, la luz de largo alcance s\u00f3lo puede encenderse de noche.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero es aconsejable encender la luz de cruce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P07.jpg",
        "texto": "En los veh\u00edculos de anchura inferior a un metro, la carga no debe sobresalir por la parte posterior m\u00e1s de...",
        "respuestas": [
            {
                "respuesta": "0,40 metros.",
                "correcta": false
            },
            {
                "respuesta": "0,50 metros.",
                "correcta": false
            },
            {
                "respuesta": "0,25 metros",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P08.jpg",
        "texto": "Esta se\u00f1al vertical, \u00bfqu\u00e9 significa?",
        "respuestas": [
            {
                "respuesta": "Zona de estacionamiento limitado.",
                "correcta": true
            },
            {
                "respuesta": "Estacionamiento prohibido en vado.",
                "correcta": false
            },
            {
                "respuesta": "Estacionamiento prohibido.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P09.jpg",
        "texto": "El funcionamiento del airbag, \u00bfpuede llegar a ser peligroso en un accidente?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, si no se lleva puesto el cintur\u00f3n de seguridad.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, siempre.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P10.jpg",
        "texto": "Al estacionar en una pendiente descendente, \u00bfqu\u00e9 precauciones debe adoptar?",
        "respuestas": [
            {
                "respuesta": "Dejar colocada la primera marcha.",
                "correcta": false
            },
            {
                "respuesta": "Parar el motor, poner el freno de estacionamiento y dejar colocada la marcha atr\u00e1s si la caja de cambios es manual.",
                "correcta": true
            },
            {
                "respuesta": "Parar el motor y poner el freno de estacionamiento, \u00fanicamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P11.jpg",
        "texto": "Conducir con mal tiempo, \u00bfpuede favorecer la fatiga?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, por ello se debe descansar con mayor frecuencia.",
                "correcta": true
            },
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo en los viajes largos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P12.jpg",
        "texto": "La amortiguaci\u00f3n, \u00bfcontribuye a prevenir los accidentes?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "No, s\u00f3lo contribuye al confort.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P13.jpg",
        "texto": "A mayor velocidad aumenta...",
        "respuestas": [
            {
                "respuesta": "La eficacia de los elementos de seguridad del veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "La fatiga que puede aparecer durante la conducci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "La capacidad del conductor para anticiparse a las circunstancias del tr\u00e1fico.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201602\/Test-234-P14.jpg",
        "texto": "Fuera de poblado, los peatones deber\u00e1n circular siempre por su derecha cuando...",
        "respuestas": [
            {
                "respuesta": "La v\u00eda sea de sentido \u00fanico, solamente.",
                "correcta": false
            },
            {
                "respuesta": "Sean impedidos y se desplacen en una silla de ruedas.",
                "correcta": true
            },
            {
                "respuesta": "La circulaci\u00f3n sea nocturna.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/TEST-233-P01.jpg",
        "texto": "La marca amarilla continua...",
        "respuestas": [
            {
                "respuesta": "indica una zona reservada para un uso especial, donde s\u00f3lo puedo parar.",
                "correcta": false
            },
            {
                "respuesta": "indica una zona donde la duraci\u00f3n del estacionamiento est\u00e1 limitada.",
                "correcta": false
            },
            {
                "respuesta": "indica la zona de la v\u00eda donde est\u00e1 prohibido parar y estacionar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/TEST-233-P02-fo55.jpg",
        "texto": "El silenciador...",
        "respuestas": [
            {
                "respuesta": "no es una parte del sistema de escape de los motores.",
                "correcta": false
            },
            {
                "respuesta": "disminuye o silencia las explosiones producidas en el interior del motor.",
                "correcta": true
            },
            {
                "respuesta": "no tiene influencia en la contaminaci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P03.jpg",
        "texto": "La se\u00f1al proh\u00edbe circular a m\u00e1s de 80 km\/h. \u00bfCu\u00e1ndo termina la prohibici\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Despu\u00e9s de la intersecci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Cuando encuentre una se\u00f1al de \u201cfin de prohibido adelantar\u201d.",
                "correcta": false
            },
            {
                "respuesta": "Inmediatamente antes de la intersecci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P04.jpg",
        "texto": "El viento sopla desde el lado derecho a r\u00e1fagas. \u00bfCu\u00e1ndo es m\u00e1s peligroso?",
        "respuestas": [
            {
                "respuesta": "Cuando adelanto a un veh\u00edculo grande.",
                "correcta": true
            },
            {
                "respuesta": "Cuando circulo detr\u00e1s de un veh\u00edculo grande.",
                "correcta": false
            },
            {
                "respuesta": "Cuando un veh\u00edculo grande me adelanta.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P05.jpg",
        "texto": "Si los ocupantes de los asientos traseros de un veh\u00edculo son menores de edad y de estatura igual o inferior a 135 cm de altura, \u00bfqu\u00e9 dispositivos de seguridad deben utilizar?",
        "respuestas": [
            {
                "respuesta": "Un dispositivo de retenci\u00f3n infantil adaptado a su talla y peso.",
                "correcta": true
            },
            {
                "respuesta": "El cintur\u00f3n de seguridad que viene instalado en el veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "Obligatoriamente un sistema de retenci\u00f3n infantil soldado a la carrocer\u00eda del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/TEST-233-P06.jpg",
        "texto": "\u00bfCu\u00e1ndo est\u00e1 permitido utilizar las se\u00f1ales ac\u00fasticas?",
        "respuestas": [
            {
                "respuesta": "Cuando circulo por v\u00edas urbanas solamente.",
                "correcta": false
            },
            {
                "respuesta": "Cuando circulo por cualquier v\u00eda en cualquier circunstancia.",
                "correcta": false
            },
            {
                "respuesta": "Cuando quiero adelantar fuera de poblado.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P07.jpg",
        "texto": "Al adelantar, \u00bfcu\u00e1ndo debe volver al carril derecho?",
        "respuestas": [
            {
                "respuesta": "Despu\u00e9s de recorrer 200 metros por delante del turismo.",
                "correcta": false
            },
            {
                "respuesta": "Despu\u00e9s de 15 segundos.",
                "correcta": false
            },
            {
                "respuesta": "Despu\u00e9s de ver en el espejo la parte delantera del veh\u00edculo adelantado.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P08.jpg",
        "texto": "Para evitar la fatiga en la conducci\u00f3n, conviene descansar...",
        "respuestas": [
            {
                "respuesta": "cada 3 horas o cada 400 kil\u00f3metros.",
                "correcta": false
            },
            {
                "respuesta": "cuando el conductor compruebe que ha perdido totalmente la capacidad de reaccionar.",
                "correcta": false
            },
            {
                "respuesta": "cada 2 horas o cada 200 kil\u00f3metros.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P09.jpg",
        "texto": "El tiempo de absorci\u00f3n del alcohol, \u00bfdepende de la bebida ingerida?",
        "respuestas": [
            {
                "respuesta": "No, la absorci\u00f3n se realiza por el organismo a un ritmo constante, independientemente de la bebida.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, se absorbe m\u00e1s r\u00e1pidamente el alcohol de las bebidas fermentadas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, se absorbe m\u00e1s r\u00e1pidamente el alcohol de las bebidas destiladas.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-PAMPLIADA.jpg",
        "texto": "Al elegir un casco para conducir una motocicleta, \u00bfqu\u00e9 debe tener en cuenta?",
        "respuestas": [
            {
                "respuesta": "Que se pueda sujetar sin tener que llevarlo abrochado.",
                "correcta": false
            },
            {
                "respuesta": "Que tenga buena ventilaci\u00f3n para que no se empa\u00f1e.",
                "correcta": true
            },
            {
                "respuesta": "Que proteja convenientemente de los ruidos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P11.jpg",
        "texto": "La luz rotativa que llevan los veh\u00edculos especiales, \u00bfles concede prioridad frente a los dem\u00e1s conductores?",
        "respuestas": [
            {
                "respuesta": "No, s\u00f3lo se\u00f1aliza su situaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, en cualquier caso.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando circulan con ella encendida.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P12.jpg",
        "texto": "La carga que sobresale por delante de un veh\u00edculo, \u00bfc\u00f3mo debe ir se\u00f1alizada?",
        "respuestas": [
            {
                "respuesta": "Con una luz blanca, de noche o en condiciones que disminuyan sensiblemente la visibilidad.",
                "correcta": true
            },
            {
                "respuesta": "Con una luz blanca, tanto de d\u00eda como de noche.",
                "correcta": false
            },
            {
                "respuesta": "Con una luz blanca y un reflectante blanco, de noche o en condiciones que disminuyan sensiblemente la visibilidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P13.jpg",
        "texto": "Una fila escolar va a cruzar la calzada. \u00bfEs obligatorio cederle el paso?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "Solo si cruza por un paso para peatones.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P14.jpg",
        "texto": "Circulando con lluvia intensa, \u00bfes obligatorio utilizar la luz antiniebla trasera?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, el trasero y el delantero.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201512\/Test-233-P15.jpg",
        "texto": "Un conductor que acaba de obtener su primer permiso de conducci\u00f3n no podr\u00e1 superar la tasa de alcohol de...",
        "respuestas": [
            {
                "respuesta": "0,15 miligramos de alcohol por litro de aire espirado.",
                "correcta": true
            },
            {
                "respuesta": "0,30 miligramos de alcohol por litro de aire espirado.",
                "correcta": false
            },
            {
                "respuesta": "0,25 miligramos de alcohol por litro de aire espirado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P01.jpg",
        "texto": "\u00bfPuede afectar la carga excesiva del veh\u00edculo al correcto funcionamiento de los neum\u00e1ticos?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando se excede de los l\u00edmites de carga permitidos.",
                "correcta": true
            },
            {
                "respuesta": "No, si el veh\u00edculo lleva amortiguadores nuevos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P02.jpg",
        "texto": "Un veh\u00edculo tiene el silenciador del escape estropeado. \u00bfEst\u00e1 permitido circular as\u00ed?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, solamente en carretera.",
                "correcta": false
            },
            {
                "respuesta": "No, pero las motos y ciclomotores pueden circular sin \u00e9l.",
                "correcta": false
            },
            {
                "respuesta": "No, por la contaminaci\u00f3n ac\u00fastica que produce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P03.jpg",
        "texto": "En esta v\u00eda urbana con dos carriles para cada sentido que no tiene l\u00edneas de separaci\u00f3n de carriles, \u00bfpor qu\u00e9 carril se debe circular?",
        "respuestas": [
            {
                "respuesta": "Por el de su derecha.",
                "correcta": true
            },
            {
                "respuesta": "Por el carril que m\u00e1s convenga para mi destino.",
                "correcta": false
            },
            {
                "respuesta": "Por el carril de la derecha y no puedo cambiar al segundo",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P04.jpg",
        "texto": "El filtro del aire, \u00bfpara qu\u00e9 sirve?",
        "respuestas": [
            {
                "respuesta": "Para limpiar el aire que enfr\u00eda el motor.",
                "correcta": false
            },
            {
                "respuesta": "Para limpiar el aire que se mezcla con el combustible.",
                "correcta": true
            },
            {
                "respuesta": "Para limpiar el aire de la calefacci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P05.jpg",
        "texto": "Los dos primeros a\u00f1os con permiso, \u00bfcu\u00e1l es la tasa m\u00e1xima de alcohol?",
        "respuestas": [
            {
                "respuesta": "0,10 mg\/l en aire espirado = 0,2 g\/l en sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,25 mg\/l en aire espirado = 0,5 g\/l en sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,15 mg\/l en aire espirado = 0,3 g\/l en sangre.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P06.jpg",
        "texto": "Si es necesario avisar a un ciclista con se\u00f1ales ac\u00fasticas, \u00bfc\u00f3mo deben realizarse?",
        "respuestas": [
            {
                "respuesta": "A cierta distancia del ciclista, para evitar que se asuste.",
                "correcta": true
            },
            {
                "respuesta": "Es indiferente.",
                "correcta": false
            },
            {
                "respuesta": "Cerca del ciclista.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P07.jpg",
        "texto": "Una motocicleta de 5 a\u00f1os de antiguedad, \u00bfcon qu\u00e9 periodicidad debe pasar la ITV?",
        "respuestas": [
            {
                "respuesta": "Cada dos a\u00f1os.",
                "correcta": true
            },
            {
                "respuesta": "Cada a\u00f1o.",
                "correcta": false
            },
            {
                "respuesta": "Cada 4 a\u00f1os.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P08.jpg",
        "texto": "En ciudad, \u00bfes importante no circular a m\u00e1s de 50 kil\u00f3metros por hora?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, para que, en caso de atropello, el peat\u00f3n tenga m\u00e1s posibilidades de sobrevivir.",
                "correcta": true
            },
            {
                "respuesta": "No, sobre todo en las calles y avenidas anchas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero s\u00f3lo para no ser sancionado por exceso de velocidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P09.jpg",
        "texto": "Si observa que cuando circula en l\u00ednea recta el veh\u00edculo se desv\u00eda hacia un lado, puede ser debido a...",
        "respuestas": [
            {
                "respuesta": "A no mantener girado el volante al m\u00e1ximo durante las maniobras.",
                "correcta": false
            },
            {
                "respuesta": "Un bajo nivel del l\u00edquido de frenos.",
                "correcta": false
            },
            {
                "respuesta": "Una presi\u00f3n distinta en los neum\u00e1ticos de un mismo eje.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P10.jpg",
        "texto": "Los remolques y semirremolques, \u00bfdeben tener tarjeta de inspecci\u00f3n t\u00e9cnica?",
        "respuestas": [
            {
                "respuesta": "No, es suficiente con la del veh\u00edculo que los arrastra.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, todos.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero \u00fanicamente los no ligeros.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P11.jpg",
        "texto": "En un conductor, el consumo de anfetaminas...",
        "respuestas": [
            {
                "respuesta": "Genera comportaminetos impacientes o impulsivos.",
                "correcta": true
            },
            {
                "respuesta": "Favorece la fatiga y el sue\u00f1o.",
                "correcta": false
            },
            {
                "respuesta": "Proporciona un estado de relajaci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P12.jpg",
        "texto": "Un turismo con remolque, \u00bfes 12 obligatorio que lleve una rueda de repuesto del remolque?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, cuando el remolque no es ligero.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P13.jpg",
        "texto": "Cuando una se\u00f1al vertical contradice a una se\u00f1al de balizamiento fijo prevalece la se\u00f1al...",
        "respuestas": [
            {
                "respuesta": "Vertical.",
                "correcta": false
            },
            {
                "respuesta": "M\u00e1s restrictiva.",
                "correcta": false
            },
            {
                "respuesta": "De balizamiento fijo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201511\/N232-P14.jpg",
        "texto": "\u00bfEst\u00e1 permitido estacionar en una calle residencial?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, donde no se estorbe a los peatones.",
                "correcta": false
            },
            {
                "respuesta": "No, est\u00e1 siempre prohibido.",
                "correcta": false
            },
            {
                "respuesta": "No, excepto en los lugares se\u00f1alizados.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-01-Test-230-160x146.jpg",
        "texto": "\u00bfQu\u00e9 veh\u00edculos no pueden circular por esta calzada?",
        "respuestas": [
            {
                "respuesta": "Los camiones, \u00fanicamente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo los turismos de anchura superior a 2 metros.",
                "correcta": false
            },
            {
                "respuesta": "Los veh\u00edculos de anchura superior a 2 metros, inclu\u00edda la carga.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-02-test-230-160x146.jpg",
        "texto": "El personal de obras de la fotograf\u00eda le est\u00e1 ordenando que se detenga. \u00bfEst\u00e1 obligado a obedecerle?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque est\u00e1 autorizado a regular el paso de veh\u00edculos en el tramo de obras.",
                "correcta": true
            },
            {
                "respuesta": "No, porque no es un agente de circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Solamente si circulan veh\u00edculos en sentido contrario.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-03-test-230-160x146.jpg",
        "texto": "\u00bfEs conveniente hacer una revisi\u00f3n exhaustiva del estado del veh\u00edculo si el humo que despide el tubo de escape es de color negro?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque el motor puede estar quemando aceite.",
                "correcta": false
            },
            {
                "respuesta": "No, porque solo es un problema de refrigeraci\u00f3n que suele desaparecer.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, porque en este caso puede deberse a una mala combusti\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-04-test-230-160x146.jpg",
        "texto": "Utilizar el tel\u00e9fono mientras conduce hace que el riesgo de accidente sea...",
        "respuestas": [
            {
                "respuesta": "Igual que si no se utiliza.",
                "correcta": false
            },
            {
                "respuesta": "Mayor que si no se utiliza.",
                "correcta": true
            },
            {
                "respuesta": "Menor que si no se utiliza.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-05-test-230-160x146.jpg",
        "texto": "\u00bfQu\u00e9 proh\u00edbe la marca longitudinal discontinua amarilla?",
        "respuestas": [
            {
                "respuesta": "La parada.",
                "correcta": false
            },
            {
                "respuesta": "El estacionamiento.",
                "correcta": true
            },
            {
                "respuesta": "Ambos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-06-test-230-160x146.jpg",
        "texto": "La velocidad, \u00bfinfluye en la capacidad de anticipaci\u00f3n del conductor?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, a mayor velocidad menor capacidad de anticipaci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Depende de las condiciones de la v\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-07-test-230-160x146.jpg",
        "texto": "\u00bfCu\u00e1l es la funci\u00f3n del sistema antibloqueo de frenos ABS?",
        "respuestas": [
            {
                "respuesta": "Hace que los neum\u00e1ticos se desgasten menos.",
                "correcta": false
            },
            {
                "respuesta": "Impide el bloqueo de las ruedas durante el frenado.",
                "correcta": true
            },
            {
                "respuesta": "Evita el bloqueo de las ruedas solo en calzadas secas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-08-Test-230-160x146.jpg",
        "texto": "En un carril reversible...",
        "respuestas": [
            {
                "respuesta": "No debe cambiar nunca de carril salvo para adelantar.",
                "correcta": false
            },
            {
                "respuesta": "Debe circular como m\u00e1ximo a 100 km\/h y como m\u00ednimo a 60 km\/h",
                "correcta": false
            },
            {
                "respuesta": "Debe llevar encendida la luz de cruce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-09-test-230-160x146.jpg",
        "texto": "\u00bfCu\u00e1ndo hay que ponerse el chaleco reflectante?",
        "respuestas": [
            {
                "respuesta": "Es indiferente.",
                "correcta": false
            },
            {
                "respuesta": "Antes de salir del veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Despu\u00e9s de salir del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-10-test-230-160x146.jpg",
        "texto": "Por la noche, la agudeza visual...",
        "respuestas": [
            {
                "respuesta": "Aumenta.",
                "correcta": false
            },
            {
                "respuesta": "No var\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Se reduce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-11-test-230-160x146.jpg",
        "texto": "Aunque est\u00e9 prohibido el adelantamiento, un turismo podr\u00e1 rebasar, incluso invadiendo el sentido contrario, a...",
        "respuestas": [
            {
                "respuesta": "Cualquier cami\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Conductores de bicicletas.",
                "correcta": true
            },
            {
                "respuesta": "Cualquier autob\u00fas o cami\u00f3n que circule lentamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-12-test-230-160x146.jpg",
        "texto": "Al estacionar un veh\u00edculo provisto de caja de cambios manual en una pendiente descendente, \u00bfqu\u00e9 velocidad dejar\u00e1 colocada?",
        "respuestas": [
            {
                "respuesta": "La primera velocidad.",
                "correcta": false
            },
            {
                "respuesta": "La marcha atr\u00e1s.",
                "correcta": true
            },
            {
                "respuesta": "Punto muerto.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-13-test-230-160x146.jpg",
        "texto": "En curvas y cambios de rasante de visibilidad reducida est\u00e1 prohibido...",
        "respuestas": [
            {
                "respuesta": "Adelantar, \u00fanicamente.",
                "correcta": false
            },
            {
                "respuesta": "Adelantar y cambiar de sentido.",
                "correcta": true
            },
            {
                "respuesta": "Cambiar de sentido, solamente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201507\/Preg-14-Test-230-160x146.jpg",
        "texto": "\u00bfQu\u00e9 se\u00f1ala la flecha de la se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "El lado del refugio por el que los veh\u00edculos han de pasar.",
                "correcta": true
            },
            {
                "respuesta": "Sentido \u00fanico.",
                "correcta": false
            },
            {
                "respuesta": "Recomienda el lado del refugio por el que los veh\u00edculos pueden pasar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p1.jpg",
        "texto": "Ante un paso para peatones se\u00f1alizado con marca vial solamente, \u00bfcu\u00e1ndo hay que detenerse?",
        "respuestas": [
            {
                "respuesta": "Cuando el peat\u00f3n ya est\u00e1 atraves\u00e1ndolo, pero no cuando s\u00f3lo demuestra su intenci\u00f3n de hacerlo.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo cuando lo indique un agente.",
                "correcta": false
            },
            {
                "respuesta": "Siempre que un peat\u00f3n est\u00e9 atraves\u00e1ndolo o demuestre su intenci\u00f3n de hacerlo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p2.jpg",
        "texto": "\u00bfPuede afectar la carga excesiva del veh\u00edculo al correcto funcionamiento de los neum\u00e1ticos?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando se excede de los l\u00edmites de carga permitidos.",
                "correcta": true
            },
            {
                "respuesta": "No, si el veh\u00edculo lleva amortiguadores nuevos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/test-229-foto-p3.jpg",
        "texto": "\u00bfEs recomendable revisar el cintur\u00f3n de seguridad despu\u00e9s de sufrir un accidente?",
        "respuestas": [
            {
                "respuesta": "No, es un elemento de seguridad que no debe cambiarse nunca.",
                "correcta": false
            },
            {
                "respuesta": "No, porque se ha probado su eficacia.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, puede haberse deteriorado el trenzado o los sistemas de anclaje.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p4.jpg",
        "texto": "Como norma general, si circula por esta v\u00eda con una furgoneta cargada con bultos apilados, en caso de frenada de emergencia, \u00bfes importante a tener en cuenta su masa y su volumen?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, por lo que se debe mantener una mayor distancia de seguridad ya que la distancia de frenado es mayor.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, porque al bajar el centro de gravedad resulta f\u00e1cil derrapar y perder el control de la misma. c.\t",
                "correcta": false
            },
            {
                "respuesta": "No, porque a mayor peso mayor estabilidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p5.jpg",
        "texto": "\u00bfDebe se\u00f1alizarse un veh\u00edculo inmovilizado por aver\u00eda en el arc\u00e9n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, con la se\u00f1al de emergencia del veh\u00edculo, los tri\u00e1ngulos de prese\u00f1alizaci\u00f3n de peligro y, en su caso, con las luces de posici\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "No, porque el veh\u00edculo no est\u00e1 en la calzada.",
                "correcta": false
            },
            {
                "respuesta": "No, porque el lugar utilizado para inmovilizarlo, es el apropiado para ese tipo de situaciones.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p6.jpg",
        "texto": "Si durante la conducci\u00f3n conecta el sistema de aire acondicionado, el consumo de carburante...",
        "respuestas": [
            {
                "respuesta": "disminuye si las temperaturas son bajas.",
                "correcta": false
            },
            {
                "respuesta": "aumenta.",
                "correcta": true
            },
            {
                "respuesta": "no var\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p7.jpg",
        "texto": "\u00bfSe debe aumentar la distancia de seguridad cuando exista niebla?",
        "respuestas": [
            {
                "respuesta": "La distancia no influye en la detenci\u00f3n cuando hay niebla.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, para tener m\u00e1s espacio para reaccionar ante cualquier frenada del veh\u00edculo que va delante.",
                "correcta": true
            },
            {
                "respuesta": "No, si se llevan las luces encendidas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p8.jpg",
        "texto": "Por una autov\u00eda est\u00e1 prohibida la circulaci\u00f3n de...",
        "respuestas": [
            {
                "respuesta": "ciclomotores",
                "correcta": true
            },
            {
                "respuesta": "veh\u00edculos especiales",
                "correcta": false
            },
            {
                "respuesta": "turismos con remolque",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p9.jpg",
        "texto": "La presi\u00f3n de inflado del neum\u00e1tico...",
        "respuestas": [
            {
                "respuesta": "debe comprobarse, como m\u00ednimo, dos veces al a\u00f1o.",
                "correcta": false
            },
            {
                "respuesta": "debe comprobarse cada tres meses.",
                "correcta": false
            },
            {
                "respuesta": "debe comprobarse con frecuencia, y siempre antes de iniciar un viaje largo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p10.jpg",
        "texto": "Si un turismo traslada a un enfermo al hospital con urgencia:",
        "respuestas": [
            {
                "respuesta": "Debe respetar las normas de circulaci\u00f3n, sobre todo en las intersecciones.",
                "correcta": true
            },
            {
                "respuesta": "No est\u00e1 obligado a respetar las normas de circulaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo debe respetar las normas que regulan las intersecciones.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p11.jpg",
        "texto": "El equipaje en la baca de un turismo, \u00bfpuede sobresalir por los lados?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, cuando el equipaje es ancho y no se puede dividir.",
                "correcta": false
            },
            {
                "respuesta": "No",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero el ancho total tiene que ser menor de 2,5 metros",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201412\/Test-229-foto-p12.jpg",
        "texto": "Una postura inadecuada en el asiento...",
        "respuestas": [
            {
                "respuesta": "reduce la fatiga.",
                "correcta": false
            },
            {
                "respuesta": "aumenta la fatiga.",
                "correcta": true
            },
            {
                "respuesta": "no influye en la fatiga.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228preg-1.jpg",
        "texto": "El inflado correcto de los neum\u00e1ticos es el...",
        "respuestas": [
            {
                "respuesta": "Recomendado por el fabricante en cada caso. \t",
                "correcta": true
            },
            {
                "respuesta": "Superior al recomendado por el fabricante en un 20%.",
                "correcta": false
            },
            {
                "respuesta": "Adecuado a la forma de conducir de cada persona.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-2.jpg",
        "texto": "\u00bfA qu\u00e9 altura debe quedar la parte central del reposacabezas?",
        "respuestas": [
            {
                "respuesta": "A la altura de los ojos.",
                "correcta": true
            },
            {
                "respuesta": "A la altura del cuello.",
                "correcta": false
            },
            {
                "respuesta": "Es indiferente la altura del reposacabezas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-3.jpg",
        "texto": "Es obligatorio el uso del alumbrado para los turismos...",
        "respuestas": [
            {
                "respuesta": "Entre la puesta y la salida del sol.",
                "correcta": true
            },
            {
                "respuesta": "Durante el d\u00eda al cruzar un paso a nivel.",
                "correcta": false
            },
            {
                "respuesta": "Durante el d\u00eda en traves\u00edas de poblaciones.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-4.jpg",
        "texto": "Un veh\u00edculo que circula por un carril adicional, \u00bfest\u00e1 obligado a llevar alg\u00fan tipo de alumbrado?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, la luz de corto alcance.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, la luz de corto alcance, pero no est\u00e1 obligado cuando circula de d\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, luces de posici\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-5.jpg",
        "texto": "\u00bfQu\u00e9 indica la se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "Prohibido el paso a veh\u00edculos con altura (incluida la carga) mayor a 3,5 metros.",
                "correcta": true
            },
            {
                "respuesta": "Obliga a circular por el arc\u00e9n a los veh\u00edculos con altura superior a 3,5 metros.",
                "correcta": false
            },
            {
                "respuesta": "V\u00eda obligatoria para veh\u00edculos con altura igual o mayor a 3,5 metros.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-6.jpg",
        "texto": "Un turismo de nueva matriculaci\u00f3n de uso privado, \u00bfcu\u00e1ndo deber\u00e1 pasar la pr\u00f3xima inspecci\u00f3n t\u00e9cnica del veh\u00edculo?",
        "respuestas": [
            {
                "respuesta": "A los 3 a\u00f1os desde la fecha de expedici\u00f3n de la Tarjeta de Inspecci\u00f3n T\u00e9cnica.",
                "correcta": false
            },
            {
                "respuesta": "A los 5 a\u00f1os.",
                "correcta": false
            },
            {
                "respuesta": "A los 4 a\u00f1os desde la fecha de matriculaci\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-7.jpg",
        "texto": "La se\u00f1al indica que el carril derecho ...",
        "respuestas": [
            {
                "respuesta": "S\u00f3lo pueden utilizarlo los ciclos.",
                "correcta": true
            },
            {
                "respuesta": "Es obligatorio para los veh\u00edculos de dos ruedas.",
                "correcta": false
            },
            {
                "respuesta": "Es obligatorio para bicicletas, pudiendo ser utilizado por otros usuarios.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-8-ampliada.jpg",
        "texto": "\u00bfEs recomendable hacer una puesta a punto  del veh\u00edculo despu\u00e9s de las vacaciones estivales?",
        "respuestas": [
            {
                "respuesta": "No, si se ha hecho antes del periodo vacacional.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, sobre todo si ha estado en zona de playa porque la arena y la sal pueden acelerar la aparici\u00f3n de puntos de corrosi\u00f3n en la carrocer\u00eda.",
                "correcta": true
            },
            {
                "respuesta": "Solo es recomendable revisar la presi\u00f3n de los neum\u00e1ticos si ha realizado muchos kil\u00f3metros.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-9.jpg",
        "texto": "\u00bfDe qu\u00e9 peligro nos advierte esta se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "Obstrucci\u00f3n en la calzada.",
                "correcta": true
            },
            {
                "respuesta": "Escal\u00f3n lateral",
                "correcta": false
            },
            {
                "respuesta": "Pavimento deslizante",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-10.jpg",
        "texto": "Para ahorrar carburante debo...",
        "respuestas": [
            {
                "respuesta": "Circular m\u00e1s cerca del veh\u00edculo que va delante para disminuir la resistencia del aire.",
                "correcta": false
            },
            {
                "respuesta": "Conducir con suavidad, sin frenazos ni acelerones.",
                "correcta": true
            },
            {
                "respuesta": "Mantener la velocidad lo m\u00e1s elevada y constante posible.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-11.jpg",
        "texto": "Marcas blancas y rojas de la calzada, \u00bfqu\u00e9 indican?",
        "respuestas": [
            {
                "respuesta": "Una zona reservada para la salida de competiciones de coches.",
                "correcta": false
            },
            {
                "respuesta": "Una zona reservada para el estacionamiento de camiones.",
                "correcta": false
            },
            {
                "respuesta": "Una zona reservada para frenado de emergencia, donde no puedo parar ni estacionar.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201409\/Test-228-preg-12.jpg",
        "texto": "Con la lluvia se forma una capa de agua que crea un mayor peligro por...",
        "respuestas": [
            {
                "respuesta": "La posible falta de adherencia de los neum\u00e1ticos al pavimento.",
                "correcta": true
            },
            {
                "respuesta": "El calentamiento de los frenos al mojarse.",
                "correcta": false
            },
            {
                "respuesta": "No se crea ning\u00fan peligro por que el agua refrigera los neum\u00e1ticos y frenan mejor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg01.jpg",
        "texto": "\u00bfQu\u00e9 sistemas de seguridad pueden perder eficacia si no se lleva abrochado el cintur\u00f3n de seguridad?",
        "respuestas": [
            {
                "respuesta": "Los frenos y el ABS.",
                "correcta": false
            },
            {
                "respuesta": "La suspensi\u00f3n y los amortiguadores.",
                "correcta": false
            },
            {
                "respuesta": "Los airbag y los reposacabezas.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg02.jpg",
        "texto": "Una marca longitudinal formada por dos l\u00edneas continuas adosadas...",
        "respuestas": [
            {
                "respuesta": "Tiene el mismo significado que una marca longitudinal continua.",
                "correcta": true
            },
            {
                "respuesta": "Indica que circulamos por un carril reversible.",
                "correcta": false
            },
            {
                "respuesta": "Indica que circulamos por un carril adicional circunstancial.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg03.jpg",
        "texto": "Si por emergencia se queda inmovilizado con su veh\u00edculo dentro de un t\u00fanel, deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Conectar la se\u00f1al de emergencia y mantener encendidas las luces de cruce.",
                "correcta": false
            },
            {
                "respuesta": "Apagar el motor, conectar la se\u00f1al de emergencia y mantener encendidas las luces de posici\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Conectar la se\u00f1al de emergencia, y hacer sonar el claxon.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg04-Ampliada.jpg",
        "texto": "El calor excesivo en el interior del veh\u00edculo, \u00bfpuede aumentar el riesgo en la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque favorece la aparici\u00f3n de fatiga al volante.",
                "correcta": true
            },
            {
                "respuesta": "No, siempre que el conductor lleve ropas ligeras.",
                "correcta": false
            },
            {
                "respuesta": "No, solamente si se conduce con las ventanillas abiertas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg05.jpg",
        "texto": "Para repostar carburante, \u00bfc\u00f3mo debe actuar?",
        "respuestas": [
            {
                "respuesta": "Solo apagar las luces.",
                "correcta": false
            },
            {
                "respuesta": "Parar el motor, apagar las luces, los equipos el\u00e9ctricos y el m\u00f3vil.",
                "correcta": true
            },
            {
                "respuesta": "Solo parar el motor y poner la primera relaci\u00f3n de marchas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg06.jpg",
        "texto": "En una intersecci\u00f3n que no tiene se\u00f1al de preferencia, \u00bfcu\u00e1ndo debe ceder el paso a un veh\u00edculo de tracci\u00f3n animal?",
        "respuestas": [
            {
                "respuesta": "Cuando entra por mi derecha.",
                "correcta": true
            },
            {
                "respuesta": "Nunca, porque no es un veh\u00edculo de motor.",
                "correcta": false
            },
            {
                "respuesta": "Siempre, porque tienen preferencia.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg07.jpg",
        "texto": "\u00bfCu\u00e1l es la misi\u00f3n principal del l\u00edquido refrigerante?",
        "respuestas": [
            {
                "respuesta": "Que el veh\u00edculo tenga calefacci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Que el veh\u00edculo tenga aire acondicionado.",
                "correcta": false
            },
            {
                "respuesta": "Enfriar el motor del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg08.jpg",
        "texto": "La flecha verde est\u00e1 iluminada. Si quiere girar a la derecha, \u00bftiene preferencia de paso?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque la flecha verde me obliga a girar.",
                "correcta": false
            },
            {
                "respuesta": "No, porque la flecha verde me permite pasar pero debo ceder el paso al veh\u00edculo que se aproxima.",
                "correcta": true
            },
            {
                "respuesta": "No, porque la luz roja me proh\u00edbe girar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg09.jpg",
        "texto": "El carril que se observa a la izquierda est\u00e1 abierto para circular en sentido contrario. \u00bfCu\u00e1l es la velocidad m\u00e1xima permitida en ese carril?",
        "respuestas": [
            {
                "respuesta": "100 kil\u00f3metros por hora",
                "correcta": false
            },
            {
                "respuesta": "90 kil\u00f3metros por hora",
                "correcta": false
            },
            {
                "respuesta": "80 kil\u00f3metros por hora",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg10.jpg",
        "texto": "Por el \"carril BUS\", \u00bfse puede circular para adelantar?",
        "respuestas": [
            {
                "respuesta": "No, porque est\u00e1 prohibido.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero debo adelantar r\u00e1pidamente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando no circulan autobuses cerca.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg11.jpg",
        "texto": "Circular demasiado cerca del veh\u00edculo de delante, \u00bfpuede ser peligroso?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, por el riesgo de alcance en caso de frenada.",
                "correcta": true
            },
            {
                "respuesta": "No, cuando los frenos de mi veh\u00edculo est\u00e9n en buen estado.",
                "correcta": false
            },
            {
                "respuesta": "No, cuando circule a la misma velocidad que el veh\u00edculo de delante.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201407\/Test227preg12.jpg",
        "texto": "La influencia del factor de riesgo del veh\u00edculo, \u00bfc\u00f3mo se puede disminuir?",
        "respuestas": [
            {
                "respuesta": "Revisando y manteniendo el veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Manteniendo limpio el motor.",
                "correcta": false
            },
            {
                "respuesta": "Regulando bien la posici\u00f3n del asiento del conductor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-Preg-01-Doble-fila.jpg",
        "texto": "\u00bfEst\u00e1 permitido estacionar en doble fila?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, cuando no haya espacio libre en las proximidades.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, en las v\u00edas urbanas, por un tiempo inferior a dos minutos.",
                "correcta": false
            },
            {
                "respuesta": "No est\u00e1 permitido en ning\u00fan caso.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-Preg-02-Trasvesia.jpg",
        "texto": "En una traves\u00eda sin limitaci\u00f3n espec\u00edfica, \u00bfcu\u00e1l es la velocidad m\u00e1xima permitida para adelantar?",
        "respuestas": [
            {
                "respuesta": "70 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "90 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "50 km\/h.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-preg03-S9.jpg",
        "texto": "Esta se\u00f1al recomienda mantener la velocidad entre los valores indicados...",
        "respuestas": [
            {
                "respuesta": "Siempre que las condiciones meteorol\u00f3gicas o ambientales sean favorables.",
                "correcta": true
            },
            {
                "respuesta": "Cuando las condiciones meteorol\u00f3gicas o ambientales sean desfavorables.",
                "correcta": false
            },
            {
                "respuesta": "En cualquier caso.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-preg04-Depresion.jpg",
        "texto": "Bajo los efectos de la depresi\u00f3n...",
        "respuestas": [
            {
                "respuesta": "Disminuyen las distracciones.",
                "correcta": false
            },
            {
                "respuesta": "Se pierde informaci\u00f3n del entorno.",
                "correcta": true
            },
            {
                "respuesta": "Se tiene m\u00e1s seguridad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-preg05-Postura.jpg",
        "texto": "El conductor, \u00bfest\u00e1 obligado a hacer que los pasajeros mantengan la posici\u00f3n adecuada?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, solo est\u00e1 obligado a cuidar la colocaci\u00f3n de los objetos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-preg06-senales.jpg",
        "texto": "Cuando una se\u00f1al vertical contradice a una se\u00f1al de balizamiento fijo prevalece la se\u00f1al...",
        "respuestas": [
            {
                "respuesta": "Vertical.",
                "correcta": false
            },
            {
                "respuesta": "M\u00e1s restrictivia.",
                "correcta": false
            },
            {
                "respuesta": "De balizamiento fijo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201406\/Test226-preg07-ampliada-sol.jpg",
        "texto": "Los reflejos del sol directo sobre el conductor, \u00bfpueden tener un efecto negativo en la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, por lo que debe encender la luz de largo alcance para facilitar la visibilidad.",
                "correcta": false
            },
            {
                "respuesta": "No, ninguno.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, afectan a la visi\u00f3n haciendo dif\u00edcil distinguir los veh\u00edculos sobre el pavimento.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto1160x146.jpg",
        "texto": "Al cruzarse con el peat\u00f3n, la distancia lateral que debe dejar el veh\u00edculo es...",
        "respuestas": [
            {
                "respuesta": "1,50 metros, al menos.",
                "correcta": true
            },
            {
                "respuesta": "1 metro, al menos",
                "correcta": false
            },
            {
                "respuesta": "2 metros, al menos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto2160x146.jpg",
        "texto": "Las l\u00e1mparas del autom\u00f3vil deben sustituirse...",
        "respuestas": [
            {
                "respuesta": "Solamente en caso de rotura.",
                "correcta": false
            },
            {
                "respuesta": "En cuanto disminuya su intensidad luminosa.",
                "correcta": true
            },
            {
                "respuesta": "Antes de pasar la inspecci\u00f3n t\u00e9cnica del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto3160x146.jpg",
        "texto": "Esta se\u00f1al indica...",
        "respuestas": [
            {
                "respuesta": "Un peligro.",
                "correcta": true
            },
            {
                "respuesta": "Una obligaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Una prohibici\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto4160x146.jpg",
        "texto": "La fatiga al volante es un factor de riesgo para la conducci\u00f3n producida por...",
        "respuestas": [
            {
                "respuesta": "Conducir sin descanso durante demasiado tiempo.",
                "correcta": true
            },
            {
                "respuesta": "Un dise\u00f1o muy ergon\u00f3mico del asiento.",
                "correcta": false
            },
            {
                "respuesta": "Una excesiva ventilaci\u00f3n en el interior del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto5160x146.jpg",
        "texto": "\u00bfDebe facilitar el paso a una ambulancia que utiliza la se\u00f1al luminosa pero no la se\u00f1al ac\u00fastica?",
        "respuestas": [
            {
                "respuesta": "No, porque no circula en servicio urgente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, porque est\u00e1 advirtiendo que circula en servicio urgente.",
                "correcta": true
            },
            {
                "respuesta": "No, porque si no utiliza la se\u00f1al ac\u00fastica se debe a que tiene suficiente espacio para pasar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto6160x146.jpg",
        "texto": "\u00bfPor d\u00f3nde se debe circular en un cambio de rasante de reducida visibilidad?",
        "respuestas": [
            {
                "respuesta": "Dejando completamente libre la mitad de la calzada que corresponda a los que pueden circular en sentido contrario.",
                "correcta": true
            },
            {
                "respuesta": "Por la izquierda, aunque se invada parte del centro de la calzada.",
                "correcta": false
            },
            {
                "respuesta": "Por donde m\u00e1s convenga a mi destino.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto7160x146.jpg",
        "texto": "Si conduciendo le sorprende una lluvia torrencial...",
        "respuestas": [
            {
                "respuesta": "Debe estacionar en un lugar permitido y seguro, manteniendo encendidas las luces de posici\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "Debe acelerar para pasar la tormenta.",
                "correcta": false
            },
            {
                "respuesta": "Debe parar en todo caso, aunque sea en la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto8160x146.jpg",
        "texto": "En el arc\u00e9n de esta autov\u00eda, \u00bfqu\u00e9 le est\u00e1 permitido?",
        "respuestas": [
            {
                "respuesta": "Parar para hablar por tel\u00e9fono m\u00f3vil.",
                "correcta": false
            },
            {
                "respuesta": "Inmovilizar el veh\u00edculo por emergencia o aver\u00eda.",
                "correcta": true
            },
            {
                "respuesta": "Adelantar por la derecha",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto9160x146.jpg",
        "texto": "\u00bfEst\u00e1 permitido circular utilizando solamente el alumbrado de posici\u00f3n del veh\u00edculo entre la puesta y la salida del sol?",
        "respuestas": [
            {
                "respuesta": "No, debe utilizarse adem\u00e1s el alumbrado de cruce o el de carretera.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, en v\u00edas de poblado suficientemente iluminadas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, en cualquier v\u00eda suficientemente iluminada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto10160x146.jpg",
        "texto": "\u00bfQu\u00e9 veh\u00edculos son los m\u00e1s afectados por el viento lateral?",
        "respuestas": [
            {
                "respuesta": "Los camiones.",
                "correcta": false
            },
            {
                "respuesta": "Las motocicletas y los ciclomotores.",
                "correcta": true
            },
            {
                "respuesta": "Los turismos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201404\/Test225foto11160x146.jpg",
        "texto": "En los veh\u00edculos no destinados exclusivamente al transporte de mercanc\u00edas, \u00bfpuede sobresalir una carga indivisible por la parte posterior?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, hasta un 10 por ciento de la longitud del veh\u00edculo.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, hasta un 15 por ciento de la longitud del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-1.jpg",
        "texto": "\u00bfEs recomendable la utilizaci\u00f3n de cojines en los asientos?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, para evitar la fatiga.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, mejora la visibilidad y la seguridad cuando se conduce.",
                "correcta": false
            },
            {
                "respuesta": "No, puede afectar a la eficacia del cintur\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-2.jpg",
        "texto": "\u00bfQu\u00e9 sistema reduce el riesgo de bloqueo de las ruedas en caso de frenazo brusco?",
        "respuestas": [
            {
                "respuesta": "El servofreno.",
                "correcta": false
            },
            {
                "respuesta": "La tracci\u00f3n total.",
                "correcta": false
            },
            {
                "respuesta": "El ABS",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-3.jpg",
        "texto": "Si por circunstancias del tr\u00e1fico prev\u00e9 que va a tener que reducir considerablemente la velocidad, \u00bfqu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Circular con la marcha m\u00e1s corta posible.",
                "correcta": false
            },
            {
                "respuesta": "Deber\u00e1 advertirlo mediante el empleo reiterado de las luces de frenado.",
                "correcta": true
            },
            {
                "respuesta": "Advertirlo mediante se\u00f1ales ac\u00fasticas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-4.jpg",
        "texto": "En la maniobra de marcha atr\u00e1s, \u00bfest\u00e1 exento el conductor del uso del cintur\u00f3n de seguridad?",
        "respuestas": [
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero solo en v\u00edas urbanas.",
                "correcta": false
            },
            {
                "respuesta": "No, debe llevarlo abrochado siempre.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-5.jpg",
        "texto": "Para evitar ruidos excesivos e innecesarios en la conducci\u00f3n, se debe...",
        "respuestas": [
            {
                "respuesta": "Circular con el tubo de escape libre.",
                "correcta": false
            },
            {
                "respuesta": "Utilizar el claxon frecuentemente pero sin producir ruidos estridentes o notas musicales.",
                "correcta": false
            },
            {
                "respuesta": "Cuidar de que el tubo de escape y el silenciador del veh\u00edculo est\u00e9n siempre en buen estado.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-6.jpg",
        "texto": "Si existe gravilla en la calzada, \u00bfqu\u00e9 se debe hacer para evitar la rotura del parabrisas?",
        "respuestas": [
            {
                "respuesta": "Aumentar la separaci\u00f3n con los veh\u00edculos que nos preceden.",
                "correcta": true
            },
            {
                "respuesta": "Aumentar la velocidad para disminuir los efectos del impacto.",
                "correcta": false
            },
            {
                "respuesta": "Nada, porque si el parabrisas est\u00e1 limpio se reduce el riesgo de rotura por gravilla.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-7.jpg",
        "texto": "Si mientras circula con su veh\u00edculo comienza a nevar, \u00bfdebe extremar la precauci\u00f3n y reducir la velocidad?",
        "respuestas": [
            {
                "respuesta": "No, solamente cuando nieve de forma copiosa.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, y en el caso de realizar frenadas y aceleraciones lo har\u00e9 de forma suave y progresiva.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, y, obligatoriamente, pondr\u00e9 las cadenas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-8.jpg",
        "texto": "Una correcta suspensi\u00f3n del veh\u00edculo sirve para:",
        "respuestas": [
            {
                "respuesta": "Mantener el veh\u00edculo siempre en contacto con el suelo.",
                "correcta": true
            },
            {
                "respuesta": "Transmitir el giro del motor a las ruedas.",
                "correcta": false
            },
            {
                "respuesta": "Mantener inmovilizado el veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-9.jpg",
        "texto": "Si la separaci\u00f3n entre los trazos de una l\u00ednea longitudinal discontinua es sensiblemente m\u00e1s corta que en el caso general, anuncia...",
        "respuestas": [
            {
                "respuesta": "La proximidad de un tramo de v\u00eda que presenta un riesgo especial.",
                "correcta": true
            },
            {
                "respuesta": "La proximidad de un tramo con una pendiente mayor al cinco por ciento.",
                "correcta": false
            },
            {
                "respuesta": "La proximidad de una traves\u00eda.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-10.jpg",
        "texto": "El viento por la derecha en los adelantamientos a veh\u00edculos grandes, \u00bfpor qu\u00e9 es peligroso?",
        "respuestas": [
            {
                "respuesta": "Porque frena mi veh\u00edculo y no me deja adelantar.",
                "correcta": false
            },
            {
                "respuesta": "Porque puedo perder el control del veh\u00edculo y salirme de la calzada.",
                "correcta": true
            },
            {
                "respuesta": "Porque no me deja ver la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201402\/Test-224-preg-11.jpg",
        "texto": "En el carril de entrada, \u00bfc\u00f3mo debe circular?",
        "respuestas": [
            {
                "respuesta": "Deteni\u00e9ndome antes de la se\u00f1al.",
                "correcta": false
            },
            {
                "respuesta": "Cediendo el paso a los veh\u00edculos que circulan por la autov\u00eda.",
                "correcta": true
            },
            {
                "respuesta": "Acelerando porque no estoy obligado a ceder el paso.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-01-drogas24.jpg",
        "texto": "Al mezclar las drogas con alcohol...",
        "respuestas": [
            {
                "respuesta": "Las reacciones pueden ser previsibles y, por tanto, controlables.",
                "correcta": false
            },
            {
                "respuesta": "Las reacciones pueden ser imprevisibles y, por tanto, peligrosas.",
                "correcta": true
            },
            {
                "respuesta": "No se producen reacciones porque las drogas anulan la acci\u00f3n del alcohol.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-02-PutnamBBAW7202-240406.jpg",
        "texto": "Los ni\u00f1os alborotando en los asientos traseros, \u00bfpueden provocar que el conductor se distraiga?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, e influir en su estado y comportamiento.",
                "correcta": true
            },
            {
                "respuesta": "No, al conductor no le afecta lo que sucede en los asientos traseros.",
                "correcta": false
            },
            {
                "respuesta": "No, normalmente hacen que se concentre m\u00e1s en la conducci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/PutnamDD1V9907_071009.jpg",
        "texto": "Si circula sobre un pavimento mojado y al realizar una frenada observa que los frenos de su veh\u00edculo fallan, \u00bfqu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Utilizar con precauci\u00f3n el freno de mano de forma suave y progresiva hasta detener el veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Utilizar el freno de motor, introduciendo marchas largas.",
                "correcta": false
            },
            {
                "respuesta": "Pisar a fondo el pedal del freno, accionando el embrague al mismo tiempo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-03-rt120.jpg",
        "texto": "Al descargar mercanc\u00edas de un veh\u00edculo, \u00bfest\u00e1 permitido depositarlas en la acera?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, siempre que no pasen peatones.",
                "correcta": false
            },
            {
                "respuesta": "No, salvo que se se\u00f1alice el lugar para evitar el peligro para los peatones.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-04-LUCIA_33.jpg",
        "texto": "Los conductores, durante los dos a\u00f1os siguientes a la obtenci\u00f3n de su primer permiso o licencia de conducci\u00f3n, no podr\u00e1n superar la tasa de...",
        "respuestas": [
            {
                "respuesta": "0,7 gramos de alcohol por litro de sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,5 gramos de alcohol por litro de sangre.",
                "correcta": false
            },
            {
                "respuesta": "0,3 gramos de alcohol por litro de sangre.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/p-05moto.jpg",
        "texto": "\u00bfPueden algunas motocicletas llevar sistemas de estabilidad de frenado o airbag?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, para evitar accidentes o reducir la gravedad de las lesiones.",
                "correcta": true
            },
            {
                "respuesta": "No, estos sistemas solo est\u00e1n disponibles para los turismos.",
                "correcta": false
            },
            {
                "respuesta": "No, est\u00e1 prohibido.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-06-PutnamJX6X6953-250408.jpg",
        "texto": "El accidente de motocicleta m\u00e1s frecuente es...",
        "respuestas": [
            {
                "respuesta": "La colisi\u00f3n por alcance de veh\u00edculos que van a m\u00e1s velocidad.",
                "correcta": false
            },
            {
                "respuesta": "La colisi\u00f3n frontal o fronto-lateral con otro veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "La colisi\u00f3n frontal con otras motocicletas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/PutnamDD1V4720-110908.jpg",
        "texto": "Los veh\u00edculos no podr\u00e1n circular por las v\u00edas emitiendo...",
        "respuestas": [
            {
                "respuesta": "Niveles de ruido superiores a los l\u00edmites establecidos.",
                "correcta": true
            },
            {
                "respuesta": "Gases por el tubo de escape, porque contamina.",
                "correcta": false
            },
            {
                "respuesta": "Ruidos, de cualquier clase.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-08-PutnamBBAW5567-160206.jpg",
        "texto": "\u00bfCu\u00e1ndo aparece la somnolencia durante la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Solo por la noche.",
                "correcta": false
            },
            {
                "respuesta": "Instantes antes de que el conductor llegue a quedarse dormido.",
                "correcta": false
            },
            {
                "respuesta": "Mucho antes de que el conductor llegue a quedarse dormido.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Normal\/P-09-PutnamBBAW1027-021807.jpg",
        "texto": "Se considera que una v\u00eda est\u00e1 insuficientemente iluminada cuando...",
        "respuestas": [
            {
                "respuesta": "No pueda distinguirse la placa de matr\u00edcula de otro veh\u00edculo a 50 metros.",
                "correcta": false
            },
            {
                "respuesta": "La v\u00eda no permita ver con claridad.",
                "correcta": false
            },
            {
                "respuesta": "Con vista normal no se puede leer una placa de matr\u00edcula a 10 metros o distinguir un veh\u00edculo pintado de oscuro a 50 metros.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/1.-PL28917-160x146.jpg",
        "texto": "\u00bfC\u00f3mo influye el estado de los neum\u00e1ticos en la eficacia de la frenada?",
        "respuestas": [
            {
                "respuesta": "No influye; depende solamente del estado de los frenos.",
                "correcta": false
            },
            {
                "respuesta": "No influye; la eficacia del frenado depende solamente del estado de la calzada.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed influye; unos neum\u00e1ticos en buen estado permiten una mejor adherencia al suelo y una frenada m\u00e1s eficaz",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/2.-Putnam_MG_1839_041111-160x146.jpg",
        "texto": "\u00bfC\u00f3mo se puede detectar que las escobillas est\u00e1n en mal estado?",
        "respuestas": [
            {
                "respuesta": "Observando si la goma est\u00e1 endurecida, en cuyo caso aparecer\u00e1n chirridos, vibraciones y un funcionamiento defectuoso.",
                "correcta": true
            },
            {
                "respuesta": "Por la fecha de caducidad.",
                "correcta": false
            },
            {
                "respuesta": "Despu\u00e9s de la \u00e9poca de lluvias se habr\u00e1n desgastado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/3.-PutnamBBAW5707-230206-160x146.jpg",
        "texto": "En condiciones invernales, para mantener buena adherencia de los neum\u00e1ticos, debemos...",
        "respuestas": [
            {
                "respuesta": "Evitar los movimientos bruscos para reducir la posibilidade de deslizamiento.",
                "correcta": true
            },
            {
                "respuesta": "Circular un poco m\u00e1s deprisa que en verano con el fin de asegurarse de que el motor se mantiene caliente.",
                "correcta": false
            },
            {
                "respuesta": "Bombear siempre los frenos con fuerza cuando sea necesario.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/4.BBAW9889-160x146.jpg",
        "texto": "Las primeras lluvias hacen m\u00e1s resbaladizas las carreteras porque...",
        "respuestas": [
            {
                "respuesta": "Las primeras gotas son m\u00e1s densas y provocan peor drenaje",
                "correcta": false
            },
            {
                "respuesta": "El volumen de precipitaci\u00f3n inicial se concentra en determinadas zonas form\u00e1ndose grandes charcos.",
                "correcta": false
            },
            {
                "respuesta": "El agua se mezcla con la suciedad, aceite y otras materias que hay en el asfalto, creando una capa resbaladiza en la superficie de la carretera.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/5-lluvia2-160x146.jpg",
        "texto": "Circulando en moto, si la carretera se encuentra mojada, \u00bfc\u00f3mo se debe tomar una curva?",
        "respuestas": [
            {
                "respuesta": "Con un \u00e1ngulo de giro m\u00e1s cerrado que si estuviera seca, disminuyendo la inclinaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Con un \u00e1ngulo de giro m\u00e1s abierto que si estuviera seca e inclin\u00e1ndome m\u00e1s.",
                "correcta": false
            },
            {
                "respuesta": "Tratando de no inclir demasiado la motocicleta y abriendo el \u00e1ngulo de giro, si fuera posible.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/6.-se569-160x146.jpg",
        "texto": "La lluvia en la calzada es m\u00e1s peligrosa cuando...",
        "respuestas": [
            {
                "respuesta": "Caen las primeras gotas.",
                "correcta": true
            },
            {
                "respuesta": "Ya lleva mucho tiempo lloviendo.",
                "correcta": false
            },
            {
                "respuesta": "Existen charcos en la calzada.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/7.-DD1V9359-160x146.jpg",
        "texto": "Es importante mantener limpio el cristal de los faros ya que la suciedad...",
        "respuestas": [
            {
                "respuesta": "Modifica la direcci\u00f3n de los rayos luminosos provocando deslumbramientos.",
                "correcta": true
            },
            {
                "respuesta": "Provoca la corrosi\u00f3n del cristal disminuyendo la estanqueidad.",
                "correcta": false
            },
            {
                "respuesta": "Elimina la superficie rugosa que forman los prismas de la superficie exterior.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/8.-00051679_Hd-160x146.jpg",
        "texto": "En caso de decidir poner unos neum\u00e1ticos de invierno, \u00bfcu\u00e1ndo deber\u00e1 cambiar los neum\u00e1ticos de verano por unos de invierno?",
        "respuestas": [
            {
                "respuesta": "Como muy tarde a principios de diciembre.",
                "correcta": false
            },
            {
                "respuesta": "Tan pronto como caigan las primeras nieves.",
                "correcta": false
            },
            {
                "respuesta": "Cuando la temperatura ambiente caiga por debajo de 7 grados cent\u00edgrados, aproximadamente.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/9.PutnamBBAW5802-230206-160x146.jpg",
        "texto": "Al tomar una curva, nota que su veh\u00edculo no gira tanto como deber\u00eda porque los neum\u00e1ticos delanteros han perdido cierta adherencia; \u00bfqu\u00e9 es lo primero que debe hacer?",
        "respuestas": [
            {
                "respuesta": "Aumentar el \u00e1ngulo de viraje para conseguir un mayor agarre.",
                "correcta": false
            },
            {
                "respuesta": "Soltar el pedal del acelerador, y no tocar el pedal del freno, para conseguir m\u00e1s adherencia y tomar la curva.",
                "correcta": true
            },
            {
                "respuesta": "Pisar el pedal de freno con fuerza y corregir la trayectoria.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/10.-Lluvia-en-prueba-160x146.jpg",
        "texto": "\u00bfQu\u00e9 puede hacer para evitar el acuaplanin?",
        "respuestas": [
            {
                "respuesta": "Circular con unos neum\u00e1ticos inflados adecuadamente y una suficiente profudidad en el dibujo de la banda de rodadura.",
                "correcta": true
            },
            {
                "respuesta": "Acelerar para pasar cuanto antes sobre el agua embalsada.",
                "correcta": false
            },
            {
                "respuesta": "No conducir por los surcos que van dejando los veh\u00edculos que van delante.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/11.Alberto-Espada-obesidad-160x146.jpg",
        "texto": "Durante un d\u00eda con temperaturas ambientales muy bajas, \u00bfes correcto conducir con el abrigo puesto?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, para no tener sensaci\u00f3n de fr\u00edo, que puede hacer que nos distraigamos.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, para no tener fr\u00edo y, adem\u00e1s, en caso de accidente protege al ocupante.",
                "correcta": false
            },
            {
                "respuesta": "No, ya que en caso de accidente reduce la eficacia del cintur\u00f3n de seguridad y del pretensor.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201312-Invierno\/12.PutnamDD1V1457-060207-160x146.jpg",
        "texto": "Durante el d\u00eda, \u00bfes recomendable llevar encendida la luz de posici\u00f3n y cruce?",
        "respuestas": [
            {
                "respuesta": "No, durante el d\u00eda est\u00e1 prohibido llevar encendido el alumbrado de posici\u00f3n y cruce si no existen condiciones de baja visibilidad.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, especialmente si nuestro veh\u00edculo no dispone de sistema de luces diurnas (DRL).",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, es obligatorio llevarlo encendido durante el invierno.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-01.jpg",
        "texto": "\u00bfC\u00f3mo se deben colocar los espejos?",
        "respuestas": [
            {
                "respuesta": "Con el coche parado en calzada recta.",
                "correcta": true
            },
            {
                "respuesta": "Con el coche en movimiento para ver mejor.",
                "correcta": false
            },
            {
                "respuesta": "Parado o en movimiento, es igual.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-02.jpg",
        "texto": "El filtro del aire, \u00bfpara qu\u00e9 sirve?",
        "respuestas": [
            {
                "respuesta": "Para limpiar el aire que enfr\u00eda el motor.",
                "correcta": false
            },
            {
                "respuesta": "Para limpiar el aire que se mezcla con el combustible.",
                "correcta": true
            },
            {
                "respuesta": "Para limpiar el aire de la calefacci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-03.jpg",
        "texto": "\u00bfEs conveniente revisar con frecuencia el estado de los neum\u00e1ticos?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, con el fin de que no se ponga en riesgo nuestra seguridad.",
                "correcta": true
            },
            {
                "respuesta": "No, solamente cada 5 a\u00f1os como m\u00e1ximo.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, excepto si los neum\u00e1ticos son sin c\u00e1mara.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-04.jpg",
        "texto": "Debido a una aver\u00eda circula por una autopista a 50 km\/h y dificulta la circulaci\u00f3n. \u00bfQu\u00e9 debe hacer?",
        "respuestas": [
            {
                "respuesta": "Inmovilizar siempre el veh\u00edculo en el arc\u00e9n.",
                "correcta": false
            },
            {
                "respuesta": "Circular por el carril derecho.",
                "correcta": false
            },
            {
                "respuesta": "Circular por el arc\u00e9n y abandonar la v\u00eda por la primera salida.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-05.jpg",
        "texto": "\u00bfPara qu\u00e9 sirve el carril de deceleraci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Para que circulen los veh\u00edculos lentos.",
                "correcta": false
            },
            {
                "respuesta": "Para adelantar por la derecha.",
                "correcta": false
            },
            {
                "respuesta": "Para reducir la velocidad al salir de la autopista.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-06.jpg",
        "texto": "Estaciona su veh\u00edculo en pendiente descendente (en bajada). \u00bfQu\u00e9 velocidad debe dejar puesta?",
        "respuestas": [
            {
                "respuesta": "Ninguna, el freno de mano solamente.",
                "correcta": false
            },
            {
                "respuesta": "La marcha atr\u00e1s.",
                "correcta": true
            },
            {
                "respuesta": "La primera velocidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-07.jpg",
        "texto": "En este tramo de v\u00eda, \u00bfcu\u00e1ndo puede adelantar a una motocicleta?",
        "respuestas": [
            {
                "respuesta": "Nunca, porque est\u00e1 prohibido adelantar.",
                "correcta": false
            },
            {
                "respuesta": "Cuando dejo 1 metro o m\u00e1s de distancia de seguridad lateral y aviso con el claxon.",
                "correcta": false
            },
            {
                "respuesta": "Cuando dejo 1,5 metros o m\u00e1s de distancia de seguridad lateral y no piso la l\u00ednea de separaci\u00f3n.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-08.jpg",
        "texto": "En caso de padecer una alergia respiratoria, \u00bfes conveniente conducir con las ventanillas abiertas?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, cuando el veh\u00edculo est\u00e9 dotado de un filtro para el aire acondicionado.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, porque ayuda a una mejor ventilaci\u00f3n del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-09.jpg",
        "texto": "La funci\u00f3n de los sistemas de seguridad pasiva de un veh\u00edculo consiste en...",
        "respuestas": [
            {
                "respuesta": "Evitar que se produzca un accidente.",
                "correcta": false
            },
            {
                "respuesta": "La misma que la de los elementos de seguridad activa.",
                "correcta": false
            },
            {
                "respuesta": "Evitar o disminuir los da\u00f1os que se produzcan en caso de accidente.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-10.jpg",
        "texto": "\u00bfCu\u00e1ndo se considera que un veh\u00edculo estacionado constituye un grave obst\u00e1culo para la circulaci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "Cuando el tiempo de estacionamiento exceda de 15 minutos.",
                "correcta": false
            },
            {
                "respuesta": "Cuando se efect\u00fae en una zona reservada a carga o descarga, fuera de las horas se\u00f1aladas.",
                "correcta": false
            },
            {
                "respuesta": "Cuando se efect\u00fae en doble fila sin conductor.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201310\/img-test-11.jpg",
        "texto": "\u00bfLe est\u00e1 permitido parar su motocicleta en la parte transitable del arc\u00e9n de una v\u00eda interurbana?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, siempre que sea para tomar o dejar a una persona.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero s\u00f3lo por tiempo inferior a dos minutos.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_01.jpg",
        "texto": "Si ha cambiado de domicilio, \u00bftiene obligaci\u00f3n de comunicarlo a la Jefatura de Tr\u00e1fico?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pero esperar\u00e9 a comunicarlo cuando me caduque la validez del permiso de conducci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, debo comunicar mi nuevo domicilio en el plazo de 15 d\u00edas.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_02.jpg",
        "texto": "Los ocupantes del veh\u00edculo van a bajarse, \u00bfpor qu\u00e9 lado deben hacerlo?",
        "respuestas": [
            {
                "respuesta": "Por el lado m\u00e1s pr\u00f3ximo al borde de la v\u00eda, como norma general.",
                "correcta": true
            },
            {
                "respuesta": "Por el lado derecho siempre.",
                "correcta": false
            },
            {
                "respuesta": "Por ambos lados.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_03.jpg",
        "texto": "En esta situaci\u00f3n, \u00bfcu\u00e1l es la distancia de seguridad entre veh\u00edculos?",
        "respuestas": [
            {
                "respuesta": "60 metros.",
                "correcta": false
            },
            {
                "respuesta": "90 metros.",
                "correcta": false
            },
            {
                "respuesta": "Aquella que me permita detenerme, sin colisionar con \u00e9l.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_04.jpg",
        "texto": "El agente balancea una luz roja o amarilla, \u00bfa qu\u00e9 obliga?",
        "respuestas": [
            {
                "respuesta": "A detenerse a los usuarios de la v\u00eda hacia los que dirige la luz.",
                "correcta": true
            },
            {
                "respuesta": "A disminuir la velocidad. ",
                "correcta": false
            },
            {
                "respuesta": "A pasar por el lado correspondiente al brazo con el que realiza la se\u00f1al.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_05.jpg",
        "texto": "\u00bfQu\u00e9 le indica la flecha verde del sem\u00e1foro?",
        "respuestas": [
            {
                "respuesta": "Que puedo girar a la derecha con prioridad.",
                "correcta": false
            },
            {
                "respuesta": "Que puedo tomar la direcci\u00f3n que indica la flecha, con precauci\u00f3n y dejando pasar a los veh\u00edculos que circulen por el carril al que me incorporo.",
                "correcta": true
            },
            {
                "respuesta": "Que puedo girar a la derecha cuando se encienda la luz verde del sem\u00e1foro principal.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_06.jpg",
        "texto": "La circulaci\u00f3n por un carril en sentido contrario al habitual...",
        "respuestas": [
            {
                "respuesta": "obliga a llevar encendida, al menos, la luz de cruce.",
                "correcta": true
            },
            {
                "respuesta": "est\u00e1 reservada \u00fanicamente a los turismos.",
                "correcta": false
            },
            {
                "respuesta": "no est\u00e1 sujeta a limitaci\u00f3n de velocidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_07.jpg",
        "texto": "Si el intermitente del veh\u00edculo no funciona, \u00bfc\u00f3mo indicar\u00e1 que va a girar a la izquierda?",
        "respuestas": [
            {
                "respuesta": "Con el brazo izquierdo en posici\u00f3n horizontal y la palma de la mano extendida hacia abajo.",
                "correcta": true
            },
            {
                "respuesta": "Extendiendo el brazo izquierdo horizontalmente, con la palma de la mano hacia atr\u00e1s.",
                "correcta": false
            },
            {
                "respuesta": "Doblando el brazo izquierdo hacia arriba, con la palma de la mano extendida.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_08.jpg",
        "texto": "Esta se\u00f1al proh\u00edbe la entrada...",
        "respuestas": [
            {
                "respuesta": "ciclomotores.",
                "correcta": false
            },
            {
                "respuesta": "a bicicletas.",
                "correcta": true
            },
            {
                "respuesta": "a veh\u00edculos de dos ruedas",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_09.jpg",
        "texto": "En esta zona con l\u00ednea amarilla en zig-zag, \u00bfqu\u00e9 est\u00e1 prohibido?",
        "respuestas": [
            {
                "respuesta": "Estacionar.",
                "correcta": true
            },
            {
                "respuesta": "Hacer parada.",
                "correcta": false
            },
            {
                "respuesta": "Hacer parada y estacionar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_10.jpg",
        "texto": "El viento por la derecha en los adelantamientos a veh\u00edculos grandes, \u00bfpor qu\u00e9 es peligroso?",
        "respuestas": [
            {
                "respuesta": "Porque frena mi veh\u00edculo y no me deja adelantar.",
                "correcta": false
            },
            {
                "respuesta": "Porque puedo perder el control del veh\u00edculo y salirme de la calzada.",
                "correcta": true
            },
            {
                "respuesta": "Porque no me deja ver la calzada",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201307\/img_test_11.jpg",
        "texto": "Esta se\u00f1al en un carril de un puesto de peaje, \u00bfqu\u00e9 indica?",
        "respuestas": [
            {
                "respuesta": "Que se puede pagar con telepeaje o con moneda.",
                "correcta": false
            },
            {
                "respuesta": "Que s\u00f3lo se puede pagar con sistema de telepeaje.",
                "correcta": true
            },
            {
                "respuesta": "Que es un carril para autobuses y camiones.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_01.jpg",
        "texto": "Como norma general, las maniobras deben advertirse utilizando:",
        "respuestas": [
            {
                "respuesta": "Preferentemente el brazo.",
                "correcta": false
            },
            {
                "respuesta": "Preferentemente la se\u00f1alizaci\u00f3n luminosa del veh\u00edculo.",
                "correcta": true
            },
            {
                "respuesta": "Indistintamente el brazo o las se\u00f1ales luminosas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_02.jpg",
        "texto": "Programar un navegador GPS mientras se conduce, \u00bfprovoca distracciones que afectan a la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "No, siempre y cuando circule a una velocidad moderada.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, porque el GPS es una ayuda y nunca distrae al conductor.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_03.jpg",
        "texto": "Para evitar atropellos a los ciclistas es conveniente...",
        "respuestas": [
            {
                "respuesta": "hacerles se\u00f1ales ac\u00fasticas para que se aparten.",
                "correcta": false
            },
            {
                "respuesta": "al adelantarlos, dejar en todo momento una separaci\u00f3n lateral suficiente.",
                "correcta": true
            },
            {
                "respuesta": "aumentar la velocidad para adelantarlos cuanto antes.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_04.jpg",
        "texto": "\u00bfEst\u00e1 permitido que la carga de un turismo sobresalga por los laterales?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, se\u00f1alizada con un panel de franjas rojas y blancas.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, cuando no comprometa la estabilidad del veh\u00edculo.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_05.jpg",
        "texto": "En este tramo de v\u00eda de visibilidad reducida, \u00bfest\u00e1 permitido realizar un cambio de sentido?",
        "respuestas": [
            {
                "respuesta": "No, est\u00e1 prohibido.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, se\u00f1alizando la maniobra convenientemente.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando no hay circulaci\u00f3n en sentido contrario.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_06.jpg",
        "texto": "\u00bfQu\u00e9 indica esta se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "La obligaci\u00f3n de girar a la derecha en la intersecci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "La obligaci\u00f3n de girar a la izquierda en la intersecci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "La direcci\u00f3n y el sentido del movimiento giratorio que los veh\u00edculos deben seguir.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_07.jpg",
        "texto": "Si se encuentra un accidente de tr\u00e1fico, \u00bfdebe detenerse para auxiliar y prestar ayuda a las v\u00edctimas?",
        "respuestas": [
            {
                "respuesta": "Solamente si lo solicita alguna autoridad presente.",
                "correcta": false
            },
            {
                "respuesta": "No, ya que al no estar implicado, no tiene ninguna responsabilidad.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, salvo que la ayuda est\u00e9 ya organizada.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_08.jpg",
        "texto": "Circula por un carril delimitado por marcas longitudinales dobles discontinuas en v\u00eda urbana, \u00bfqu\u00e9 precauciones debe adoptar?",
        "respuestas": [
            {
                "respuesta": "Encender la luz de cruce o corto alcance, tanto de d\u00eda como de noche, y no invadir el carril situado m\u00e1s a la izquierda.",
                "correcta": true
            },
            {
                "respuesta": "Circular como m\u00ednimo a 60 km\/h y como m\u00e1ximo a 80 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "Encender la se\u00f1al de emergencia, adem\u00e1s de la luz de cruce, tanto de d\u00eda como de noche.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_09.jpg",
        "texto": "Este panel se coloca debajo de una se\u00f1al de peligro para indicar:",
        "respuestas": [
            {
                "respuesta": "La longitud del tramo peligroso.",
                "correcta": false
            },
            {
                "respuesta": "La distancia a la que termina el peligro.",
                "correcta": false
            },
            {
                "respuesta": "La distancia a la que comienza el peligro.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_10.jpg",
        "texto": "Las alteraciones del sue\u00f1o, \u00bfpueden afectar al estado del conductor?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, pueden provocar estados de nerviosismo y agresividad.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, incrementan los niveles de atenci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201305\/img_test_11.jpg",
        "texto": "La se\u00f1al indica la situaci\u00f3n de:",
        "respuestas": [
            {
                "respuesta": "Un paso a nivel sin barreras de una v\u00eda f\u00e9rrea.",
                "correcta": false
            },
            {
                "respuesta": "Un paso a nivel sin barreras de m\u00e1s de una v\u00eda f\u00e9rrea.",
                "correcta": true
            },
            {
                "respuesta": "Un paso a nivel, con o sin barreras.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_01.jpg",
        "texto": "Mientras conduce, \u00bfes necesario utilizar los espejos retrovisores con regularidad?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, aunque no se vaya a realizar ninguna maniobra.",
                "correcta": true
            },
            {
                "respuesta": "No, s\u00f3lo es necesario usarlos cuando se vaya a realizar una maniobra.",
                "correcta": false
            },
            {
                "respuesta": "El uso de los espejos retrovisores no aporta seguridad adicional a la conducci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_02.jpg",
        "texto": "Cuando se aproxima a un puente m\u00f3vil, \u00bfc\u00f3mo debe actuar?",
        "respuestas": [
            {
                "respuesta": "Reduciendo la velocidad por debajo de la m\u00e1xima permitida.",
                "correcta": true
            },
            {
                "respuesta": "Reduciendo la velocidad pero s\u00f3lo, si el puente se encuentra en movimiento.",
                "correcta": false
            },
            {
                "respuesta": "Extremando la precauci\u00f3n y deteni\u00e9ndose siempre antes de pasar.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_03.jpg",
        "texto": "Con analg\u00e9sicos o anhistam\u00ednicos es conveniente\u2026",
        "respuestas": [
            {
                "respuesta": "tener presente que pueden producir efectos secundarios que afecten a la conducci\u00f3n.",
                "correcta": true
            },
            {
                "respuesta": "no conducir en ning\u00fan caso durante el tiempo que dure el tratamiento.",
                "correcta": false
            },
            {
                "respuesta": "conducir con normalidad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_04.jpg",
        "texto": "Adelantar a varios veh\u00edculos a la vez, \u00bfest\u00e1 permitido?",
        "respuestas": [
            {
                "respuesta": "No.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, cuando se puede volver a la derecha sin peligro en caso de encontrar veh\u00edculos en sentido contrario.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, \u00fanicamente cuando los veh\u00edculos adelantados circulan a velocidad lenta.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_05.jpg",
        "texto": "\u00bfEs obligatorio matricular a un ciclomotor?",
        "respuestas": [
            {
                "respuesta": "No, es opcional.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, es obligatorio para poder circular por las v\u00edas p\u00fablicas.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero \u00fanicamente si es para circular por v\u00edas interurbanas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_06.jpg",
        "texto": "Si es necesario avisar a un ciclista con se\u00f1ales ac\u00fasticas, \u00bfc\u00f3mo deben realizarse?",
        "respuestas": [
            {
                "respuesta": "Cerca del ciclista.",
                "correcta": false
            },
            {
                "respuesta": "A cierta distancia del ciclista, para evitar que se asuste.",
                "correcta": true
            },
            {
                "respuesta": "Es indiferente.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_07.jpg",
        "texto": "\u00bfQu\u00e9 relaci\u00f3n existe entre la velocidad y el campo de visi\u00f3n del conductor?",
        "respuestas": [
            {
                "respuesta": "A menor velocidad, menor campo visual.",
                "correcta": false
            },
            {
                "respuesta": "A mayor velocidad, mayor campo visual.",
                "correcta": false
            },
            {
                "respuesta": "A mayor velocidad, menor campo visual.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_08.jpg",
        "texto": "\u00bfSon evitables los accidentes de circulaci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, en general, son sucesos predecibles.",
                "correcta": true
            },
            {
                "respuesta": "No, se dan al azar.",
                "correcta": false
            },
            {
                "respuesta": "S\u00f3lo mejorando el estado de las v\u00edas.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_09.jpg",
        "texto": "El personal de obras de la fotograf\u00eda le est\u00e1 ordenando que se detenga. \u00bfEst\u00e1 obligado a obedecerle?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, porque est\u00e1 autorizado a regular el paso de veh\u00edculos en el tramo de obras.",
                "correcta": true
            },
            {
                "respuesta": "Solamente si circulan veh\u00edculos en sentido contrario.",
                "correcta": false
            },
            {
                "respuesta": "No, porque no es un agente de circulaci\u00f3n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_10.jpg",
        "texto": "En caso de emergencia, \u00bfes conveniente pisar el pedal de freno a fondo y mantener la m\u00e1xima presi\u00f3n hasta el final?",
        "respuestas": [
            {
                "respuesta": "\u00danicamente si el veh\u00edculo dispone de sistema ABS.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, en cualquier caso.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201303\/img_test_11.jpg",
        "texto": "El consumo de alcohol, \u00bffavorece las distracciones en la conducci\u00f3n?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "No, salvo en situaciones de tr\u00e1fico complejas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Reposacabezas-preg-1-test-218.jpg",
        "texto": "El reposacabezas, \u00bfc\u00f3mo debe colocarse?",
        "respuestas": [
            {
                "respuesta": "A la altura del cuello.",
                "correcta": false
            },
            {
                "respuesta": "Lo m\u00e1s alto posible.",
                "correcta": false
            },
            {
                "respuesta": "A la altura de la cabeza.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Arcen-preg-2-test-218.jpg",
        "texto": "\u00bfEst\u00e1 permitido estacionar en la parte transitable del arc\u00e9n de una v\u00eda interurbana?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, para cargar o descargar mercanc\u00edas.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            },
            {
                "respuesta": "S\u00ed, pero solamente cuando la l\u00ednea del borde de la calzada es discontinua",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Alumbrado-moto-preg-3-test-218.jpg",
        "texto": "\u00bfQu\u00e9 alumbrado llevar\u00e1 encendido una motocicleta durante el d\u00eda?",
        "respuestas": [
            {
                "respuesta": "El de corto alcance o cruce.",
                "correcta": true
            },
            {
                "respuesta": "El de posici\u00f3n o el de corto alcance.",
                "correcta": false
            },
            {
                "respuesta": "Ninguno.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Escape-libre-preg-4-test-218.jpg",
        "texto": "Circular en motocicleta con el llamado \"escape libre\", \u00bfest\u00e1 permitido?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, pero solo en v\u00edas urbanas.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, tanto en v\u00edas urbanas como interurbanas.",
                "correcta": false
            },
            {
                "respuesta": "No.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/R-101-preg-5-test-218.jpg",
        "texto": "Esta se\u00f1al, \u00bfqu\u00e9 indica?",
        "respuestas": [
            {
                "respuesta": "Entrada prohibida solo a veh\u00edculos de motor.",
                "correcta": false
            },
            {
                "respuesta": "Entrada prohibida a toda clase de veh\u00edculos",
                "correcta": true
            },
            {
                "respuesta": "Circulaci\u00f3n prohibida en ambos sentidos para toda clase de veh\u00edculos.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Cruce-preg-6-test-218.jpg",
        "texto": "En una intersecci\u00f3n sin se\u00f1alizaci\u00f3n expresa, la norma general de preferencia de paso es...",
        "respuestas": [
            {
                "respuesta": "Ceder el paso a los veh\u00edculos que circulen por la izquierda.",
                "correcta": false
            },
            {
                "respuesta": "Ceder el paso a los veh\u00edculos m\u00e1s r\u00e1pidos, ciclistas y peatones.",
                "correcta": false
            },
            {
                "respuesta": "Ceder el paso a los veh\u00edculos que se aproximen por la derecha.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Luz-tunel-preg-7-test-218.jpg",
        "texto": "\u00bfDebe encender la luz de corto alcance en un t\u00fanel suficientemente iluminado?",
        "respuestas": [
            {
                "respuesta": "No, porque est\u00e1 iluminado.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed, es obligatorio.",
                "correcta": true
            },
            {
                "respuesta": "No, debe encender la luz de largo alcance.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/201302\/Estres-preg-8-test-218.jpg",
        "texto": "\u00bfEl estr\u00e9s puede alterar las capacidades para conducir con seguridad?",
        "respuestas": [
            {
                "respuesta": "No, en ning\u00fan caso.",
                "correcta": false
            },
            {
                "respuesta": "S\u00ed.",
                "correcta": true
            },
            {
                "respuesta": "No, porque no afecta a la conducci\u00f3n",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P1-250x226.jpg",
        "texto": "El inflado correcto de los neum\u00e1ticos es...",
        "respuestas": [
            {
                "respuesta": "El superior al recomendado en un 10%.",
                "correcta": false
            },
            {
                "respuesta": "El adecuado a los amortiguadores que lleve el coche.",
                "correcta": false
            },
            {
                "respuesta": "El recomendado por el fabricante en cada caso.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P2-250x226.jpg",
        "texto": "La se\u00f1alizaci\u00f3n vertical prevalece sobre...",
        "respuestas": [
            {
                "respuesta": "Los sem\u00e1foros.",
                "correcta": false
            },
            {
                "respuesta": "La se\u00f1alizaci\u00f3n horizontal.",
                "correcta": true
            },
            {
                "respuesta": "Las se\u00f1ales de balizamiento.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/Carril-adicional-250x226.jpg",
        "texto": "El conductor del veh\u00edculo que utiliza el carril adicional...",
        "respuestas": [
            {
                "respuesta": "Circular\u00e1, como m\u00e1ximo, a 100 km\/h.",
                "correcta": false
            },
            {
                "respuesta": "Deber\u00e1 abandonar la v\u00eda en cuanto le sea posible.",
                "correcta": false
            },
            {
                "respuesta": "Llevar\u00e1 encendida, al menos, la luz de cruce.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P4-P-9a-250x226.jpg",
        "texto": "Esta se\u00f1al indica la proximidad de...",
        "respuestas": [
            {
                "respuesta": "Un cruce con una l\u00ednea de tranv\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Un paso a nivel, puente m\u00f3vil o muelle.",
                "correcta": true
            },
            {
                "respuesta": "Un cruce sin prioridad.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P5-250x226.jpg",
        "texto": "En condiciones de niebla espesa deber\u00e1...",
        "respuestas": [
            {
                "respuesta": "Llevar encendida la luz antiniebla delantera solamente.",
                "correcta": false
            },
            {
                "respuesta": "Moderar la velocidad.",
                "correcta": true
            },
            {
                "respuesta": "Circular por el arc\u00e9n.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P6-250x226.jpg",
        "texto": "Si la antigu\u0308edad de su primer permiso de conducci\u00f3n es menor de 2 a\u00f1os, la tasa m\u00e1xima de alcohol permitida para poder conducir es de...",
        "respuestas": [
            {
                "respuesta": "0,25 miligramos de alcohol por litro de aire espirado.",
                "correcta": false
            },
            {
                "respuesta": "0,15 miligramos de alcohol por litro de aire espirado.",
                "correcta": true
            },
            {
                "respuesta": "0,3 miligramos de alcohol por litro de aire espirado.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P7-Laboral-250x226.jpg",
        "texto": "Una vez inmovilizado el veh\u00edculo, los usuarios deber\u00e1n entrar o salir...",
        "respuestas": [
            {
                "respuesta": "Por cualquier lado del veh\u00edculo, tomando las debidas precauciones.",
                "correcta": false
            },
            {
                "respuesta": "Por el lado m\u00e1s pr\u00f3ximo a la acera o al arc\u00e9n, como norma general.",
                "correcta": true
            },
            {
                "respuesta": "Por el lado del conductor, siempre.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P8-CONDUCTORES-Y-SUENO-250x226.jpg",
        "texto": "Para evitar o retrasar la aparici\u00f3n de la fatiga, es aconsejable que el conductor...",
        "respuestas": [
            {
                "respuesta": "Circule a menor velocidad para disminuir los efectos de la fatiga.",
                "correcta": false
            },
            {
                "respuesta": "Mantenga el interior del veh\u00edculo a una temperatura superior a 25 grados.",
                "correcta": false
            },
            {
                "respuesta": "Mantenga bien ventilado el interior del veh\u00edculo.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P9-S-16-250x226.jpg",
        "texto": "\u00bfQu\u00e9 indica la se\u00f1al?",
        "respuestas": [
            {
                "respuesta": "Salida de la autopista o autov\u00eda.",
                "correcta": false
            },
            {
                "respuesta": "Zona para detener un veh\u00edculo en caso de fallo de los frenos.",
                "correcta": true
            },
            {
                "respuesta": "Salida a la derecha con bandas sonoras.",
                "correcta": false
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/P10-y-12-250x226.jpg",
        "texto": "El conductor del veh\u00edculo blanco quiere volver r\u00e1pidamente al carril derecho porque ve un peligro. \u00bfQu\u00e9 debe hacer el conductor del veh\u00edculo verde?",
        "respuestas": [
            {
                "respuesta": "Aumentar la velocidad para que desista de realizar la maniobra.",
                "correcta": false
            },
            {
                "respuesta": "Nada, porque no tiene ninguna obligaci\u00f3n.",
                "correcta": false
            },
            {
                "respuesta": "Reducir la velocidad para facilitarle el retorno al carril.",
                "correcta": true
            }
        ]
    },
    {
        "imagen": "http:\/\/revista.dgt.es\/Galerias\/test\/N-245\/Ampliada-250x226.jpg",
        "texto": "En una calzada con nieve, \u00bfel uso brusco e inadecuado de los frenos puede ser causa de derrape?",
        "respuestas": [
            {
                "respuesta": "S\u00ed, si se frena bruscamente, los neum\u00e1ticos pueden perder la adherencia sobre el pavimento.",
                "correcta": true
            },
            {
                "respuesta": "No, si las ruedas est\u00e1n perfectamente alineadas y equilibradas.",
                "correcta": false
            },
            {
                "respuesta": "No, si los neum\u00e1ticos tienen la presi\u00f3n de inflado recomendada.",
                "correcta": false
            }
        ]
    }
]';


//https://ak-static.cms.nba.com/wp-content/uploads/headshots/nba/latest/260x190/203518.png (imagenes nba.com)

$array = json_decode($preguntas);
//print_r($array);
echo "<TABLE border='1'>";
//$conn = mysqli_connect($servername, $username, $password, $dbname);
foreach($array as $pregunta){
//Mostramos una tabla con los jugadores cargados
echo "<TR>";
        $texto = $pregunta->texto;
        $imagen = $pregunta->imagen;
      

	//Descargamos imagenes
/*
	$url = 'https://ak-static.cms.nba.com/wp-content/uploads/headshots/nba/latest/260x190/'.$id.'.png';
	$img = 'img/'.$id.'.png';
	file_put_contents($img, file_get_contents($url));
*/
        echo "<TD>".$texto."</TD><TD>".$imagen."</TD>";
	//Montamos SQL y la lanzamos
	$id=rand(10000000,99999999);
	$SQL='INSERT INTO preguntas VALUES ('.$id.',"'.$texto.'","'.$imagen.'",0)';
	mysqli_query($conn, $SQL);
echo "</TR>";
	foreach($pregunta->respuestas as $respuesta){
		$idrespuesta=rand(10000000,99999999);
		if ($respuesta->correcta)
			$correcta="true";
		else
			$correcta="false";
		$SQL='INSERT INTO respuestas VALUES ('.$idrespuesta.',"'. $respuesta->respuesta.'",'.$correcta.','.$id.')';
		echo $SQL."<BR>";
		mysqli_query($conn, $SQL);
	}

}
mysqli_close($conn);

?>
