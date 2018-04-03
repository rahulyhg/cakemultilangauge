<?php
/*
 * Script: include/lang/en.php
 * Author: Andy Gray <andy.gray@astro-consulting.co.uk>
 *
 * Description
 * English strings
 *
 * Review comments
 * - Ascendant <IN> Scorpio - rule - requires trailing sigma to be removed
 * - Planets - typo - check all, requires a 'v' (0xcebd) not a 'u' (0xcf85)
 * - Square - typo - requires a 'v' (0xcebd) not a 'u' (0xcf85)
 * - PROFESSIONAL in <object> <IN> <house> - word omitted in  all cases
 * - Leo gender adjust
 *
 * Modification History
 * - initial spike
 */

$config['lang']['planets']['gr'] = array();
$config['lang']['signs']['gr'] = array();

function gr_a2s( $a ) {
  $s = '';
  for( $c = 0; $c < count($a); $c++ ) {
    $s .= chr($a[$c]);
  }
  return $s;
}

/*
 * Chapter Headings
 */
$chapterHeadings['gr'] = array
    (
     "10001"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xbf, 0xcf, 0x81, 0xce, 0xb5, 0xce, 0xaf, 0xce, 0xb1, 0x20, 0xce, 0x96, 0xcf, 0x89, 0xce, 0xae, 0xcf, 0x82 )),
     "10002"	=>	gr_a2s( array( 0xce, 0xa4, 0xce, 0xb1, 0xcf, 0x85, 0xcf, 0x84, 0xcf, 0x8c, 0xcf, 0x84, 0xce, 0xb7, 0xcf, 0x84, 0xce, 0xb1 )),
     "10003"	=>	gr_a2s( array( 0xce, 0xa3, 0xcf, 0x85, 0xce, 0xbd, 0xce, 0xb1, 0xce, 0xb9, 0xcf, 0x83, 0xce, 0xb8, 0xce, 0xae, 0xce, 0xbc, 0xce, 0xb1, 0xcf, 0x84, 0xce, 0xb1 )),
     "10004"	=>	gr_a2s( array( 0xce, 0x9d, 0xce, 0xbf, 0xce, 0xb7, 0xcf, 0x84, 0xce, 0xb9, 0xce, 0xba, 0xce, 0xae, 0x20, 0xce, 0x99, 0xce, 0xba, 0xce, 0xb1, 0xce, 0xbd, 0xcf, 0x8c, 0xcf, 0x84, 0xce, 0xb7, 0xcf, 0x84, 0xce, 0xb1 )),
     "10005"	=>	gr_a2s( array( 0xce, 0x91, 0xce, 0xbe, 0xce, 0xaf, 0xce, 0xb5, 0xcf, 0x82 )),	/* typo corrected */
     "10006"	=>	gr_a2s( array( 0xce, 0x9a, 0xce, 0xaf, 0xce, 0xbd, 0xce, 0xb7, 0xcf, 0x84, 0xcf, 0x81, 0xce, 0xb1 )),
     "10007"	=>	gr_a2s( array( 0xce, 0xa3, 0xce, 0xbf, 0xcf, 0x86, 0xce, 0xaf, 0xce, 0xb1 )),
     "10008"	=>	gr_a2s( array( 0xce, 0xa0, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xba, 0xce, 0xbb, 0xce, 0xae, 0xcf, 0x83, 0xce, 0xb5, 0xce, 0xb9, 0xcf, 0x82 )),
     "10009"	=>	gr_a2s( array( 0xce, 0xa0, 0xcf, 0x81, 0xcf, 0x89, 0xcf, 0x84, 0xce, 0xbf, 0xcf, 0x84, 0xcf, 0x85, 0xcf, 0x80, 0xce, 0xaf, 0xce, 0xb1 )),
     "10010"	=>	gr_a2s( array( 0xce, 0xa5, 0xcf, 0x80, 0xce, 0xb5, 0xcf, 0x81, 0xce, 0xb2, 0xce, 0xb1, 0xcf, 0x84, 0xce, 0xb9, 0xce, 0xba, 0xcf, 0x8c, 0xcf, 0x84, 0xce, 0xb7, 0xcf, 0x84, 0xce, 0xb1 )),
     "10011"	=>	gr_a2s( array( 0xce, 0x9c, 0xce, 0xb5, 0xcf, 0x84, 0xce, 0xb1, 0xcf, 0x83, 0xcf, 0x87, 0xce, 0xb7, 0xce, 0xbc, 0xce, 0xb1, 0xcf, 0x84, 0xce, 0xb9, 0xcf, 0x83, 0xce, 0xbc, 0xcf, 0x8c, 0xcf, 0x82 )),
     "10012"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xb5, 0xcf, 0x80, 0xcf, 0x81, 0xcf, 0x89, 0xce, 0xbc, 0xce, 0xad, 0xce, 0xbd, 0xce, 0xbf ))
     );
	
/*
 * Objects
 * Sun .. Pluto, N/S Node, Asc, MC, IC, Dsc
 */
$top_object1['gr'] = array
  (
   "1000"	=>	gr_a2s( array( 0xce, 0x89, 0xce, 0xbb, 0xce, 0xb9, 0xce, 0xbf, 0xcf, 0x82 )),
   "1001"	=>	gr_a2s( array( 0xce, 0xa3, 0xce, 0xb5, 0xce, 0xbb, 0xce, 0xae, 0xce, 0xbd, 0xce, 0xb7 )),	/* Mo - typo v not u */
   "1002"	=>	gr_a2s( array( 0xce, 0x95, 0xcf, 0x81, 0xce, 0xbc, 0xce, 0xae, 0xcf, 0x82 )),
   "1003"	=>	gr_a2s( array( 0xce, 0x91, 0xcf, 0x86, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xb4, 0xce, 0xaf, 0xcf, 0x84, 0xce, 0xb7 )),
   "1004"	=>	gr_a2s( array( 0xce, 0x91, 0xcf, 0x81, 0xce, 0xb7, 0xcf, 0x82 )),
   "1005"	=>	gr_a2s( array( 0xce, 0x94, 0xce, 0xaf, 0xce, 0xb1, 0xcf, 0x82 )),
   "1006"	=>	gr_a2s( array( 0xce, 0x9a, 0xcf, 0x81, 0xcf, 0x8c, 0xce, 0xbd, 0xce, 0xbf, 0xcf, 0x82 )),	/* Sa - typo v not u */
   "1007"	=>	gr_a2s( array( 0xce, 0x9f, 0xce, 0xbc, 0xcf, 0x81, 0xce, 0xb1, 0xce, 0xbd, 0xcf, 0x8c, 0xcf, 0x82 )),	/* Ur - typo v not u */
   "1008"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xbf, 0xcf, 0x83, 0xce, 0xb5, 0xce, 0xb9, 0xce, 0xb4, 0xcf, 0x8e, 0xce, 0xbd, 0xce, 0xb1, 0xcf, 0x82 )),	/* Ne - typo v not u */
   "1009"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xbb, 0xce, 0xbf, 0xcf, 0x8d, 0xcf, 0x84, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xb1, 0xcf, 0x82 )),	/* Pl - typo - v not u */
   "1010"	=>	gr_a2s( array( 0xce, 0x92, 0xcf, 0x8c, 0xcf, 0x81, 0xce, 0xb5, 0xce, 0xb9, 0xce, 0xbf, 0xcf, 0x82, 0x20, 0xce, 0x94, 0xce, 0xb5, 0xcf, 0x83, 0xce, 0xbc, 0xcf, 0x8c, 0xcf, 0x82 )),
   "1011"	=>	"S.Node",
   "1012"	=>	gr_a2s( array( 0xce, 0xa9, 0xcf, 0x81, 0xce, 0xbf, 0xcf, 0x83, 0xce, 0xba, 0xcf, 0x8c, 0xcf, 0x80, 0xce, 0xbf, 0xcf, 0x82 )),
   "1013"	=>	gr_a2s( array( 0xce, 0x9c, 0xce, 0xb5, 0xcf, 0x83, 0xce, 0xbf, 0xcf, 0x85, 0xcf, 0x81, 0xce, 0xac, 0xce, 0xbd, 0xce, 0xb7, 0xce, 0xbc, 0xce, 0xb1 )),
   "1014"	=>	gr_a2s( array( 0xce, 0x9d, 0xce, 0xb1, 0xce, 0xb4, 0xce, 0xaf, 0xcf, 0x81 )),
   "1015"	=>	gr_a2s( array( 0xce, 0x9a, 0xce, 0xb1, 0xcf, 0x84, 0xce, 0xb5, 0xcf, 0x81, 0xcf, 0x87, 0xcf, 0x8c, 0xce, 0x85, 0xce, 0xb5, 0xce, 0xbd, 0xce, 0xbf, 0xcf, 0x82 ))
   );
	
/*
 ****************************************************************************
 * Aspect Rules
 * There are three type of rule to apply here
 * Aries, Taurus, <Gemini>, Cancer, <Leo>, Virgo, Libra, Scorpio, Sagittarius
 * Capricorn, Aquarius, <Pisces> - imit final sigma apart from <...>
 * Gemini/Pisces are plural
 * Check Leo rules
 ****************************************************************************
 */
$top_connector['gr'] = array
  (
   "000"	=>	gr_a2s( array( 0xce, 0xa3, 0xcf, 0x8d, 0xce, 0xbd, 0xce, 0xbf, 0xce, 0xb4, 0xce, 0xbf, 0xcf, 0x82 )), 
   "030"	=>	gr_a2s( array( 0xce, 0x97, 0xce, 0xbc, 0xce, 0xb9, 0xce, 0xb5, 0xce, 0xbe, 0xce, 0xac, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )),
   "060"	=>	gr_a2s( array( 0xce, 0x95, 0xce, 0xbe, 0xce, 0xac, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )),
   "120"	=>	gr_a2s( array( 0xce, 0xa4, 0xcf, 0x81, 0xce, 0xaf, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )),
   "045"	=>	gr_a2s( array( 0xce, 0x9f, 0xce, 0xba, 0xcf, 0x84, 0xce, 0xac, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )),
   "090"	=>	gr_a2s( array( 0xce, 0xa4, 0xce, 0xb5, 0xcf, 0x81, 0xce, 0xac, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )), /* typo */
   "135"	=>	gr_a2s( array( 0xce, 0x95, 0xce, 0xbd, 0xce, 0xac, 0xce, 0xbc, 0xce, 0xb9, 0xcf, 0x83, 0xce, 0xb9, 0x20, 0xcf, 0x84, 0xce, 0xb5, 0xcf, 0x84, 0xcf, 0x81, 0xce, 0xac, 0xce, 0xb3, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xbf )),
   "150"	=>	gr_a2s( array( 0xce, 0xa7, 0xce, 0xb9, 0xce, 0xba, 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xb9 )),
   "180"	=>	gr_a2s( array( 0xce, 0x91, 0xce, 0xbd, 0xcf, 0x84, 0xce, 0xaf, 0xce, 0xb8, 0xce, 0xb5, 0xcf, 0x83, 0xce, 0xb7 )),
   "200"	=>	gr_a2s( array( 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xbf, 0xce, 0xbd ))
   );

$top_greek_in_rules = array
  (
   "male"	=>	gr_a2s( array( 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xbf, 0xce, 0xbd )),
   "female"	=>	gr_a2s( array( 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xb7, 0xce, 0xbd )),
   "plural"	=>	gr_a2s( array( 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xbf, 0xcf, 0x85, 0xcf, 0x82 ))
   );
   
$top_sign['gr'] = array
  (
   "1000"	=>  "planet",
   "1001"	=>	"planet",
   "1002"	=>	"planet",
   "1003"	=>	"planet",
   "1004"	=>	"planet",
   "1005"	=>	"planet",
   "1006"	=>	"planet",
   "1007"	=>	"planet",
   "1008"	=>	"planet",
   "1009"	=>	"planet",
   "1010"	=>	"planet",
   "1011"	=>	"planet",
   "1012"	=>	"planet",
   "1013"	=>	"planet",
   "1014"	=>	"planet",
   "1015"	=>	"planet",
   "0100"	=>	"sign",
   "0101"	=>	"sign",
   "0102"	=>	"sign",
   "0103"	=>	"sign",
   "0104"	=>	"sign",
   "0105"	=>	"sign",
   "0106"	=>	"sign",
   "0107"	=>	"sign",
   "0108"	=>	"sign",
   "0109"	=>	"sign",
   "0110"	=>	"sign",
   "0111"	=>	"sign",
   "0001"	=>	"house",
   "0002"	=>	"house",
   "0003"	=>	"house",
   "0004"	=>	"house",
   "0005"	=>	"house",
   "0006"	=>	"house",
   "0007"	=>	"house",
   "0008"	=>	"house",
   "0009"	=>	"house",
   "0010"	=>	"house",
   "0011"	=>	"house",
   "0012"	=>	"house"
   );
	
$top_object2['gr'] = array
  (
   /* planets */
   "1000"	=>	gr_a2s( array( 0xce, 0x89, 0xce, 0xbb, 0xce, 0xb9, 0xce, 0xbf, 0xcf, 0x82 )),
   "1001"	=>	gr_a2s( array( 0xce, 0xa3, 0xce, 0xb5, 0xce, 0xbb, 0xce, 0xae, 0xce, 0xbd, 0xce, 0xb7 )),	/* Mo - typo - v not u */
   "1002"	=>	gr_a2s( array( 0xce, 0x95, 0xcf, 0x81, 0xce, 0xbc, 0xce, 0xae, 0xcf, 0x82 )),
   "1003"	=>	gr_a2s( array( 0xce, 0x91, 0xcf, 0x86, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xb4, 0xce, 0xaf, 0xcf, 0x84, 0xce, 0xb7 )),
   "1004"	=>	gr_a2s( array( 0xce, 0x91, 0xcf, 0x81, 0xce, 0xb7, 0xcf, 0x82 )),
   "1005"	=>	gr_a2s( array( 0xce, 0x94, 0xce, 0xaf, 0xce, 0xb1, 0xcf, 0x82 )),
   "1006"	=>	gr_a2s( array( 0xce, 0x9a, 0xcf, 0x81, 0xcf, 0x8c, 0xce, 0xbd, 0xce, 0xbf, 0xcf, 0x82 )),	/* Sa - type - v not u */
   "1007"	=>	gr_a2s( array( 0xce, 0x9f, 0xcf, 0x85, 0xcf, 0x81, 0xce, 0xb1, 0xce, 0xbd, 0xcf, 0x8c, 0xcf, 0x82 )),	/* Ur - typo - v not u */
   "1008"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xbf, 0xcf, 0x83, 0xce, 0xb5, 0xce, 0xb9, 0xce, 0xb4, 0xcf, 0x8e, 0xce, 0xbd, 0xce, 0xb1, 0xcf, 0x82 )),	/* Ne - typo - v not u */
   "1009"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xbb, 0xce, 0xbf, 0xcf, 0x8d, 0xcf, 0x84, 0xcf, 0x89, 0xce, 0xbd, 0xce, 0xb1, 0xcf, 0x82 )),	/* Pl - typo - v not u */
   "1010"	=>	gr_a2s( array( 0xce, 0x92, 0xcf, 0x8c, 0xcf, 0x81, 0xce, 0xb5, 0xce, 0xb9, 0xce, 0xbf, 0xcf, 0x82, 0x20, 0xce, 0x94, 0xce, 0xb5, 0xcf, 0x83, 0xce, 0xbc, 0xcf, 0x8c, 0xcf, 0x82 )),
   "1011"	=>	"S.Node",
   "1012"	=>	gr_a2s( array( 0xce, 0xa9, 0xcf, 0x81, 0xce, 0xbf, 0xcf, 0x83, 0xce, 0xba, 0xcf, 0x8c, 0xcf, 0x80, 0xce, 0xbf, 0xcf, 0x82 )),
   "1013"	=>	gr_a2s( array( 0xce, 0x9c, 0xce, 0xb5, 0xcf, 0x83, 0xce, 0xbf, 0xce, 0xbc, 0xcf, 0x81, 0xce, 0xac, 0xce, 0xbd, 0xce, 0xb7, 0xce, 0xbc, 0xce, 0xb1 )),
   "1014"	=>	gr_a2s( array( 0xce, 0x9d, 0xce, 0xb1, 0xce, 0xb4, 0xce, 0xaf, 0xcf, 0x81 )),
   "1015"	=>	gr_a2s( array( 0xce, 0x9a, 0xce, 0xb1, 0xcf, 0x84, 0xce, 0xb5, 0xcf, 0x81, 0xcf, 0x87, 0xcf, 0x8c, 0xce, 0xbc, 0xce, 0xb5, 0xcf, 0x85, 0xce, 0xbf, 0xcf, 0x82 )),
   /* signs */
   "0100"	=>	gr_a2s( array( 0xce, 0x9a, 0xcf, 0x81, 0xce, 0xb9, 0xcf, 0x8c /*, 0xcf, 0x82 */)),	/* male */
   "0101"	=>	gr_a2s( array( 0xce, 0xa4, 0xce, 0xb1, 0xcf, 0x8d, 0xcf, 0x81, 0xce, 0xbf /*, 0xcf, 0x82 */)),	/* male */
   "0102"	=>	gr_a2s( array( 0xce, 0x94, 0xce, 0xaf, 0xce, 0xb4, 0xcf, 0x85, 0xce, 0xbc, 0xce, 0xbf, 0xcf, 0x85, 0xcf, 0x82 )),	/* plural */
   "0103"	=>	gr_a2s( array( 0xce, 0x9a, 0xce, 0xb1, 0xcf, 0x81, 0xce, 0xba, 0xce, 0xaf, 0xce, 0xbd, 0xce, 0xbf /*, 0xcf, 0x82 */)),	/* male */
   "0104"	=>	gr_a2s( array( 0xce, 0x9b, 0xce, 0xad, 0xce, 0xbf, 0xce, 0xbd, 0xcf, 0x84, 0xce, 0xb1 )),	/* male and reworded */
   "0105"	=>	gr_a2s( array( 0xce, 0xa0, 0xce, 0xb1, 0xcf, 0x81, 0xce, 0xb8, 0xce, 0xad, 0xce, 0xbd, 0xce, 0xbf /*, 0xcf, 0x82 */)),	/* female */
   "0106"	=>	gr_a2s( array( 0xce, 0x96, 0xcf, 0x85, 0xce, 0xb3 /*, 0xcf, 0x82 */)),	/* male */
   "0107"	=>	gr_a2s( array( 0xce, 0xa3, 0xce, 0xba, 0xce, 0xbf, 0xcf, 0x81, 0xcf, 0x80, 0xce, 0xb9, 0xcf, 0x8c /*, 0xcf, 0x82 */)),	/* male */
   "0108"	=>	gr_a2s( array( 0xce, 0xa4, 0xce, 0xbf, 0xce, 0xb6, 0xcf, 0x8c, 0xcf, 0x84, 0xce, 0xb7 /*, 0xcf, 0x82 */)),	/* male */
   "0109"	=>	gr_a2s( array( 0xce, 0x91, 0xce, 0xb9, 0xce, 0xb3, 0xcf, 0x8c, 0xce, 0xba, 0xce, 0xb5, 0xcf, 0x81, 0xcf, 0x89 /*, 0xcf, 0x82 */)),	/* male */
   "0110"	=>	gr_a2s( array( 0xce, 0xa5, 0xce, 0xb4, 0xcf, 0x81, 0xce, 0xbf, 0xcf, 0x87, 0xcf, 0x8c, 0xce, 0xbf /*, 0xcf, 0x82 */)),	/* male */
   "0111"	=>	gr_a2s( array( 0xce, 0x99, 0xcf, 0x87, 0xce, 0xb8, 0xce, 0xb5, 0xce, 0xaf, 0xcf, 0x82 )),	/* plural */
	/* houses */
   "0001"	=>	gr_a2s( array( 0x31, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0002"	=>	gr_a2s( array( 0x32, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0003"	=>	gr_a2s( array( 0x33, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0004"	=>	gr_a2s( array( 0x34, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0005"	=>	gr_a2s( array( 0x35, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0006"	=>	gr_a2s( array( 0x36, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0007"	=>	gr_a2s( array( 0x37, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0008"	=>	gr_a2s( array( 0x38, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0009"	=>	gr_a2s( array( 0x39, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0010"	=>	gr_a2s( array( 0x31, 0x3a, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0011"	=>	gr_a2s( array( 0x31, 0x31, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ )),
   "0012"	=>	gr_a2s( array( 0x31, 0x32, 0xce, 0xbf, /* 0xcf, 0x82, */ 0x20, 0xce, 0xbf, 0xce, 0xaf, 0xce, 0xba, 0xce, 0xbf /* , 0xcf, 0x82 */ ))
   );
	
$top_pno['gr'] = array
  (
   /* planets */
   "1000"	=>	"01",
   "1001"	=>	"02",
   "1002"	=>	"03",	
   "1003"	=>	"04",
   "1004"	=>	"05",
   "1005"	=>	"06",
   "1006"	=>	"07",
   "1007"	=>	"08",
   "1008"	=>	"09",
   "1009"	=>	"10",
   "1010"	=>	"10",	/* unexpected */
   "1011"	=>	"11",
   "1012"	=>	"00",	/* unexpected */
   "1013"	=>	"13",
   "1014"	=>	"14",
   "1015"	=>	"15",
   /* signs */
   "0100"	=>	"01",
   "0101"	=>	"02",
   "0102"	=>	"03",
   "0103"	=>	"04",
   "0104"	=>	"05",
   "0105"	=>	"06",
   "0106"	=>	"07",
   "0107"	=>	"08",
   "0108"	=>	"09",
   "0109"	=>	"10",
   "0110"	=>	"11",
   "0111"	=>	"12",
   /* houses */
   "0001"=>"01",
   "0002"=>"02",
   "0003"=>"03",
   "0004"=>"04",
   "0005"=>"05",
   "0006"=>"06",
   "0007"=>"07",
   "0008"=>"08",
   "0009"=>"09",
   "0010"=>"10",
   "0011"=>"11",
   "0012"=>"12"
   );

$top_p3['gr'] = array
  (
   "10001"	=>	"01",
   "10002"	=>	"01",
   "10003"	=>	"02",
   "10004"	=>	"03",
   "10005"	=>	"04",
   "10006"	=>	"05",
   "10007"	=>	"06",
   "10008"	=>	"07",
   "10009"	=>	"08",
   "10010"	=>	"09",
   "10011"	=>	"10",
   "10012"	=>	"11"
   );

$top_p1['gr'] = array
  (
   "1000"	=>	"02",
   "1001"	=>	"02",
   "1002"	=>	"02",
   "1003"	=>	"02",
   "1004"	=>	"02",
   "1005"	=>	"02",
   "1006"	=>	"02",
   "1007"	=>	"02",
   "1008"	=>	"01",
   "1009"	=>	"01",
   "1010"	=>	"01",
   "1011"	=>	"02",
   "1012"	=>	"02",
   "1013"	=>	"13",
   "1014"	=>	"14",
   "1015"	=>	"15",
	
   "0100"	=>	"01",
   "0101"	=>	"02",
   "0102"	=>	"03",
   "0103"	=>	"04",
   "0104"	=>	"05",
   "0105"	=>	"06",
   "0106"	=>	"07",
   "0107"	=>	"08",
   "0108"	=>	"09",
   "0109"	=>	"10",
   "0110"	=>	"11",
   "0111"	=>	"12",

   "0001"	=>	"01",
   "0002"	=>	"02",
   "0003"	=>	"03",
   "0004"	=>	"04",
   "0005"	=>	"05",
   "0006"	=>	"06",
   "0007"	=>	"07",
   "0008"	=>	"08",
   "0009"	=>	"09",
   "0010"	=>	"10",
   "0011"	=>	"11",
   "0012"	=>	"12"
	);

$top_p2['gr'] = array
  (
   "10001"	=>	"02",
   "10002"	=>	"03",
   "10003"	=>	"03",
   "10004"	=>	"03",
   "10005"	=>	"03",
   "10006"	=>	"03",
   "10007"	=>	"03",
   "10008"	=>	"03",
   "10009"	=>	"03",
   "10010"	=>	"03",
   "10011"	=>	"03",
   "10012"	=>	"03"
   );

$top_retrograde['gr'] = array
  (
   "0"	=>	'',
   "1"	=>	gr_a2s( array( 0xce, 0xb1, 0xce, 0xbd, 0xce, 0xac, 0xce, 0xb4, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xbc, 0xce, 0xbf, 0xcf, 0x82 ))
   );

$top_transiting['gr'] = gr_a2s( array
				( 0xce, 0xb4, 0xce, 0xb9, 0xce, 0xb5, 0xce, 0xbb, 0xce, 0xb1, 0xcf, 0x8d, 0xce, 0xbd, 0xcf, 0x89, 0xce, 0xbd 
				  ));

$top_professional['gr'] = gr_a2s( array
				  ( 0xce, 0x95, 0xce, 0xa0, 0xce, 0x91, 0xce, 0x93, 0xce, 0x93, 0xce, 0x95, 
				    0xce, 0x9b, 0xce, 0x9c, 0xce, 0x91, 0xce, 0xa4, 0xce, 0x99, 
				    0xce, 0x9a, 0xce, 0x9f
				    ));

$top_personal['gr'] = gr_a2s( array
			      ( 0xce, 0xa0, 0xce, 0xa1, 0xce, 0x9f, 0xce, 0xa3, 0xce, 0xa9, 0xce, 0xa0, 
				0xce, 0x99, 0xce, 0x9a, 0xce, 0x9f ));

/* please read page ... */
$setreport['gr'] = gr_a2s( array
  (
   0xce, 0xa0, 0xce, 0xb1, 0xcf, 0x81, 0xce, 0xb1, 0xce, 0xba, 0xce, 0xb1, 0xce, 0xbb, 0xcf, 0x8e,
   0x20,
   0xce, 0xb4, 0xce, 0xb9, 0xce, 0xb1, 0xce, 0xb2, 0xce, 0xac, 0xcf, 0x83, 0xcf, 0x84, 0xce, 0xb5,
   0x20,
   0xcf, 0x84, 0xce, 0xb7,
   0x20,
   0xcf, 0x83, 0xce, 0xb5, 0xce, 0xbb, 0xce, 0xaf, 0xce, 0xb4, 0xce, 0xb1,
   0x20
   ));

$bSigns['gr'] = array(
	"Aries",
	"Taurus",
	"Gemini",
	"Cancer",
	"Leo",
	"Virgo",
	"Libra",
	"Scorpio",
	"Sagittarius",
	"Capricorn",
	"Aquarius",
	"Pisces"
	);

$transiting_aspects['gr'] = array
  (
   "000"	=>	gr_a2s( array( 0xcf, 0x83, 0xcf, 0x85, 0xce, 0xbd, 0xce, 0xb4, 0xcf, 0x85, 0xce, 0xb1, 0xcf, 0x83, 0xce, 0xbc, 0xce, 0xbf, 0xce, 0xaf )) /*"conjoins" */,
   "060"	=>	gr_a2s( array( 0xce, 0xb8, 0xce, 0xb5, 0xcf, 0x84, 0xce, 0xb9, 0xce, 0xba, 0xce, 0xac )) /* "positive" */,
   "090"	=>	gr_a2s( array( 0xcf, 0x80, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xba, 0xce, 0xbb, 0xce, 0xae, 0xcf, 0x83, 0xce, 0xb5, 0xce, 0xb9, 0xcf, 0x82 )) /* "challenges" */,
   "120"	=>	gr_a2s( array( 0xce, 0xb8, 0xce, 0xb5, 0xcf, 0x84, 0xce, 0xb9, 0xce, 0xba, 0xce, 0xac )) /* "positive" */,
   "180"	=>	gr_a2s( array( 0xcf, 0x80, 0xcf, 0x81, 0xce, 0xbf, 0xce, 0xba, 0xce, 0xbb, 0xce, 0xae, 0xcf, 0x83, 0xce, 0xb5, 0xce, 0xb9, 0xcf, 0x82 )) /* "challenges" */
	);

/*
 * Wheel
 */
$wheel_planets['gr'] = array(
	'Sun',
	'Moon',
	'Mercury',
	'Venus',
	'Mars',
	'Jupiter',
	'Saturn',
	'Uranus',
	'Neptune',
	'Pluto',
	'NNode',
	'SNode',
	'Ascendant',
	'MC',
	'IC',
	'Descendant'
	);

$wheel_top_weekdays['gr'] = array(
	'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
	);

/* House system is Placidus unless untimed in which case it is Equal */
$wheel_top_housesystem['gr']	= "Placidus";
$wheel_top_orbsensitivity['gr']	= "Weak Orbs";
$wheel_top_timezone['gr']		= "Time Zone";
$wheel_top_summertime['gr']		= "Summer Time";

$wheel_info_symbols['gr'] = array(
	'Sun',
	'Moon',
	'Mercury',
	'Venus',
	'Mars',
	'Jupiter',
	'Saturn',
	'Uranus',
	'Neptune',
	'Pluto',
	'N.Node',
	'S.Node',
	'Aries',
	'Taurus',
	'Gemini',
	'Cancer',
	'Leo',
	'Virgo',
	'Libra',
	'Scorpio',
	'Sagittarius',
	'Capricorn',
	'Aquarius',
	'Pisces',
	'Conjunction',
	'Semisextile',
	'Semisquare',
	'Sextile',
	'Square',
	'Trine',
	'Sesquisquare',
	'Quincunx',
	'Opposition',
	'Ascendant',
	'Descendant',
	'Medium Coeli',
	'Immum Coeli',
	'Retrograde'
	);

/*
 * Month info for the Cover sheet
 */

$cover_months['gr'] = array(
	"", "January", "February", "March", "April", "May", "June",
	"July", "August", "September", "October", "November", "December"
	);
	
/*
 * The following are order form labels
 */	
 
$orderform_labels['gr']['name']			= "Name";
$orderform_labels['gr']['email']		= "Email";
$orderform_labels['gr']['emailconfirm']	= "Confirm";


// Added By Amit Parmar (On 08-Feb-2012)

/*
 * Report Header title
*/
$report_header['gr'] = array(
		"Birth-Analysis" 				=> 	"Birth Analysis",
		"Dynamic-Analysis" 				=> 	"Dynamic Analysis ",
		"Birth-and-Dynamic-Analysis" 	=> 	"Birth Analysis + Dynamic Analysis ",
		"Seasonal-Report" 				=> 	"Seasonal Report",
		"Calendar-Report" 				=> 	"Calendar Report");

/*
 * Attitude Title Informations
*/
$attitude_title['gr'] = array(
		"PERSONAL"		=>		"PERSONAL",
		"PROFESSIONAL"	=>		"PROFESSIONAL",
		"COLLECTIVE"	=>		"COLLECTIVE",
		"EMOTIONS"		=>		"EMOTIONS",
		"THE-MIND"  	=>  	"THE MIND",
		"LOVE"			=>		"LOVE",
		"SEX-AND-POWER" => 		"SEX & POWER");

/*
 * Trasit connector (Sun transiting trine Pluto)
*/
$trasit_connector['gr'] = array(
		"transiting" 	=>		"transiting");

/*
 * Retrograde connector
*/
$retrograde_connector['gr'] = array(
		"Retrograde" => " Retrograde");

/*
 * Registered and Unregistered franchise
*/
$isRegistered['gr'] = array(
		"Registered"	=>		"Registered:",
		"Unregistered" 	=> 		"Unregistered");

/*
 * Page number
*/
$page_number_name['gr']= array(
		"Page"	=>		"Page ");
?>
