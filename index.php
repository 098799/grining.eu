<?php
$switch = $_GET["i"];



$section = array(
	"home",
	"books", 
	"ink",
	"running", 
	"contact",
	//"sci"
);

$subsection = array(
	"home" => array(), 
	"books" => array(
		"love-and-math",
		"orphans-of-the-sky",
		"run-less-run-faster",
		"what-i-talk-about-when-i-talk-about-running",
	),
	"ink" => array(
		"iroshizuku-momiji",
		"j-herbin-larmes-de-cassis",
		"waterman-inspired-blue",
	), 
	"running" => array(
		"endomondo",
	), 
	"contact" => array()
);



$przymiotniki1 = array(
	"ferociously",
	"aggresively",
	"threateningly",
	"militantly"
);

$przymiotniki2 = array(
	"regular",
	"typical",
	"ordinary",
	"common"
);

$aok="home";
if (in_array($switch,$section)) {$aok=$switch;}
for ($i = 0; $i < count($section); $i++) {
	for ($j = 0; $j < count($subsection[$section[$i]]); $j++){
		if ($switch == $subsection[$section[$i]][$j]) {$aok=$switch;}
	}
}

include("top.html");
include($aok.".html");
include("bottom.html");

?>
