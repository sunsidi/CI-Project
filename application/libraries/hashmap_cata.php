<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hashmap_cata {
       /*
       private $hashmap = array(
				  1 => 'Icebreakers',
				  2 => 'Culture',
				  4 => 'Parties',
				  8 => 'Clubs',
				  16 => 'Concerts',
				  32 => 'Festivals',
				  64 => 'Exploring your city',
				  128 => 'Love & Romance',
				  256 => 'Lounges',
				  512 => 'Bars',
				  1024 => 'Hotspots',
				  2048 => 'Meetups',
				 ); 
				 */

	private $hashmap;
	private $eventmap;
 

				public function __construct()
	{
		$CI =& get_instance();
		$CI->load->helper('url');
		$this->hashmap = array(
				  1 => 'icebreakers',
				  2 => 'meetups',
				  4 => 'parties',
				  8 => 'clubs',
				  16 => 'concerts',
				  32 => 'festivals',
				  64 => 'explore',
				  128 => 'romance',
				  256 => 'lounges',
				  512 => 'bars',
				  1024 => 'hotspots',
				  2048 => 'culture',
				 ); 

		$this->eventmap = array('festivals' =>array(
													  'name'=> 'Festivals',	
													  'image' => 'festivals_icon.png',
													  'pronunciation' => '[fes-te-vels]',
													  'definition' => 'A regularly recurring program of cultural performances, exhibitions, or competitions.',
													  'theme-color-date' => 'rgba(224,176,180,0.9)',
													  'theme-color-1' => 'rgb(224,133,114)',
													  'theme-color-2' => 'rgba(183,70,69,0.8)' ),
								'culture' =>array(
													  'name'=> 'Culture',
													  'image' => 'culture_icon.png',
													  'pronunciation' => '[kuhl-cher]',
													  'definition' => 'Getting out of your comfort zone to try something new.',
													  'theme-color-date' => 'rgba(221,156,152,0.9)',
													  'theme-color-1' => 'rgb(229,93,95)',
													  'theme-color-2' =>'rgba(182,73,68,0.9)'),
								'hotspots' =>array(
													  'name'=> 'Hotspots',
													  'image' => 'hotspots_icon.png',
													  'pronunciation' => '[hat-spats]',
													  'definition' => 'A place where people can showcase their talents.',
													  'theme-color-date' => 'rgba(145,100,107,0.9)',
													  'theme-color-1' => 'rgb(192,69,86)',
													  'theme-color-2' =>'rgba(117,44,52,0.8)'),
								'meetups' =>array(
													  'name'=> 'Meet Ups',
													  'image' => 'meet_ups_icon.png',
													  'pronunciation' => '[meet-uhp]',
													  'definition' => 'where you can find an activity with no boundaries; a party; a group of people with similar interests.',
													  'theme-color-date' => 'rgba(173,129,168,0.9)',
													  'theme-color-1' => 'rgb(168,106,168)',
													  'theme-color-2' =>'rgba(83,30,82,0.8)'),
								'parties' =>array(
													  'name'=> 'Parties',
													  'image' => 'parties_icon.png',	
													  'pronunciation' => '[parh-tees]',
													  'definition' => 'a social event where people meet to celebrate or have fun by eating and drinking, dancing, playing games,etc.',
													  'theme-color-date' => '',
													  'theme-color-1' => 'rgb(80,149,193)',
													  'theme-color-2' =>'rgba(55,139,200,0.8)'),
								'icebreakers' =>array(
													  'name'=> 'Icebreakers',
													  'image' => 'icebreakers_icon.png',
													  'pronunciation' => '[ahys-brey-kers]',
													  'definition' => ' a way to meet people with similar interests.',
													  'theme-color-date' => 'rgba(54,53,93,0.9)',
													  'theme-color-1' => 'rgb(76,92,155)',
													  'theme-color-2' =>'rgba(63,69,117,0.8)'),
								'explore' =>array(
													  'name'=> 'Exploring Your City',
													  'image'=> 'exploring_your_city_icon.png',
													  'pronunciation' => '',
													  'definition' => 'where you can find new things to do around you and get out of your house/apartment/closet.',
													  'theme-color-date' => 'rgba(68,104,118,0.9)',
													  'theme-color-1' => 'rgb(130,207,232)',
													  'theme-color-2' =>'rgba(76,124,144,0.8)'),
								'clubs' =>array(	  
													  'name' =>'Clubs',
													  'image'=>'clubs_icon.png',
													  'pronunciation' => '[kluhb-s]',
													  'definition' => 'a venue where people go to dance and listen to music played by a DJ or live band.',
													  'theme-color-date' => 'rgba(61,39,77,0.9)',
													  'theme-color-1' => 'rgb(134,104,166)',
													  'theme-color-2' =>'rgba(93,72,108,0.9)'),
								'concerts' =>array(
													  'name'=> 'Concerts',
													  'image'=> 'concerts_icon.png',
													  'pronunciation' => '[kan-serts]',
													  'definition' => 'a musical performance(s) given on a public stage, usually before a large crowd.',
													  'theme-color-date' => 'rgba(74,140,106,0.9)',
													  'theme-color-1' => 'rgb(61,142,122)',
													  'theme-color-2' =>'rgba(32,83,60,0.8)'),
								'romance' =>array(
													  'name'=> 'Love and Romance',
													  'image'=> 'heart_image.png',
													  'pronunciation' => '',
													  'definition' => 'where you can find places and events with a good date atmosphere.',
													  'theme-color-date' => 'rgba(145,123,144,0.9)',
													  'theme-color-1' => 'rgb(209,175,220)',
													  'theme-color-2' =>'rgba(111,81,117,0.8)'),
								'lounges' =>array(
													  'name' => 'Lounges',
													  'image'=> 'lounges_icon.png',
													  'pronunciation' => '[lounj-s]',
													  'definition' => "a cocktail bar that's typically in a hotel or restaurant.",
													  'theme-color-date' => 'rgba(168,122,148,0.9)',
													  'theme-color-1' => 'rgb(226,107,158)',
													  'theme-color-2' =>'rgba(137,47,83,0.8)'),
								'bars' =>array(
													  'name'=> 'Bars',
													  'image'=>'bars_icon.png',
													  'pronunciation' => '[bahr-s]',
													  'definition' => 'a room or establishment where drinks a served.',
													  'theme-color-date' => 'rgba(174,146,98,0.9)',
													  'theme-color-1' => 'rgb(192,162,123)',
													  'theme-color-2' =>'rgba(196,149,79,0.8)'),
								'latest'=> array('theme-color-1' =>'rgb(180,182,201)',)

		 ); 

	 }
        
       
       public function hash($hashkey)
       {

	$data = array();
	$count = 0;


		for($i =11;$i>=0;$i--)
		{

			if($hashkey>=pow(2,$i))
			{
				
				$hashkey-=pow(2,$i);
				$data[$count] = $this->hashmap[pow(2,$i)];
				//echo $data[$count]."<br>";
				$count++;

			}
		}

	return $data; 
       }
       public function get_EventMap()
       {
       	return $this->eventmap;
       }




       
       
       
}

?>