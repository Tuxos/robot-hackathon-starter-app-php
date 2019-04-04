<?php

// Partnerconference Robo Hackathon PHP Module
//
// Please enter your config in "config.php"
//
// Commands:
// Show power in volt    : getpower();  
// Show distance in mm   : getdistance();  
// Show status           : getstatus();
// Show remote_status    : getremotestatus();
// Go forward in cm      : forward("length in cm");  
// Go backward in cm     : backward("length in cm");  
// Turn left in degrees  : turnleft("degrees");  
// Turn right in degrees : turnright("degrees");

// Start coding here

header("Content-type: image/png");
// erstellen eines leeren Bildes mit 400px Breite und 300px Höhe
$bild = imagecreatetruecolor(400, 300);
// Hintergrundfarbe erstellen
imagecolorallocate($bild, 150, 150, 0);
 
// Farben festlegen
$farbe1 = imagecolorallocate($bild, 255, 255, 0);
$farbe2 = imagecolorallocate($bild, 0, 255, 0);
$farbe3 = imagecolorallocate($bild, 0, 0, 255);
// Viereck zeichen
// mit folgenden Kordinaten (x1, y1, x2, y2, Farbe);
imagefilledrectangle ($bild, 20, 75, 350,250, $farbe1);
imagefilledrectangle ($bild, 150, 100, 200, 280, $farbe2);
imagefilledrectangle ($bild, 220, 150, 330, 190, $farbe3);
// Ausgabe des Bildes
imagepng($bild);

?>
