<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();
$VNStat      = array();

$PageOptions['ContactEmail']                         = 'df2et@n18.de';		        // Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.3.9 mod DF2ET';       			// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;   			// Activate automatic refresh
$PageOptions['PageRefreshDelay']                     = '10000';			// Page refresh time in miliseconds

$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;            			// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowLast1ByteOfIP'; 		 	// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';	        			// Character used for  masquerade

$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;     			// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowFullIP';		// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';         		// Character used for  masquerade

$PageOptions['LastHeardPage']['LimitTo']             = 39;                      // Number of stations to show

$PageOptions['ModuleNames'] = array();                                			// Module nomination
$PageOptions['ModuleNames']['A']                     = 'International.';
$PageOptions['ModuleNames']['B']                     = 'Regional';
$PageOptions['ModuleNames']['C']                     = 'Ruhrpott';
$PageOptions['ModuleNames']['D']                     = 'Test';
$PageOptions['ModuleNames']['E']                     = 'Echo Test';
$PageOptions['ModuleNames']['F']                     = 'DMR D-Star Transcoder Test';

$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';  // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, Open D-Star, XRF518, XLX518, N18';        // Meta Tag Values, usefull forSearch Engine
$PageOptions['MetaAuthor']                           = 'DF2ET';                                                      // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';                                              // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';                                               // Meta Tag Values, usefull for Search Engine

$PageOptions['UserPage']['ShowFilter']               = true;                                                         // Show Filter on Users page

$PageOptions['Traffic']['Show']                      = true;                                                        // Enable vnstat traffic statistics

$Service['PIDFile']                                  = '/var/log/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = true;								// xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://xlx518.n18.de';				// dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';		// database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;									// push delay in seconds
$CallingHome['Country']                              = "Germany";						// Country
$CallingHome['Comment']                              = "N18 Open D-Star Reflector";						// Comment. Max 100 character
$CallingHome['HashFile']                             = "/tmp/callinghome.php";				// Make sure the apache user has read and write permissions in this folder.
$CallingHome['LastCallHomefile']                     = "/tmp/lastcallhome.php";                // lastcallhome.php can remain in the tmp folder 
$CallingHome['OverrideIPAddress']                    = "";									// Leave blank for autodetection.
$CallingHome['InterlinkFile']                        = "/xlxd/xlxd.interlink";                 // Path to interlink file

$VNStat['Interfaces']                                = array();
$VNStat['Interfaces'][0]['Name']                     = 'eth0';
$VNStat['Interfaces'][0]['Address']                  = 'eth0';
$VNStat['Binary']                                    = '/usr/bin/vnstat';

?>
