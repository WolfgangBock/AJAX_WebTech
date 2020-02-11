<?php
$t1 = '{
  "titel" : "Bohemian Rhapsody",
  "artist" : "Queen",
  "autor" : ["Freddy Mercury"],
  "genre" : "Progressive Rock",
  "erschienen" : "31 Oct 1975",
  "album" : "A Night at the Opera",
  "dauer" : {
    "single" : "5:55"
  },
  "label": ["EMI", " Elektra", " Parlophone", " Hollywood"]
}';
$t2 = '{
   "titel" : "Heroes",
   "artist" : "David Bowie",
   "autor" : ["David Bowie", " Brian Eno"],
   "genre" : "Art Rock",
   "erschienen" : "23 Sep 1977",
   "album" : "Heroes",
   "dauer" : {
     "single" : "3:32",
     "album" : "6:07"
   },
   "label": ["RCA Records"]
 }';


$t_id = $_GET['t_id'];
switch ($t_id) {
    case "t1":
        $rueckgabe = $t1;
        break;
    case "t2":
        $rueckgabe = $t2;
        break;

}

echo $rueckgabe;
