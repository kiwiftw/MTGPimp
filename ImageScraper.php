<?php
##Download the cards from SCG##

$jsonData = file_get_contents('./AllSets.json', true);
$json = json_decode($jsonData, true);
echo '<pre>';
echo 'updating card image catalog';

foreach($json as $key => $value){
	$mcSet = '';
	$set = $key;
	//change set to match magiccard.info's card storage technique
	switch ($set) {
		case 'LEA':
			$mcSet = 'AL';
			break;
		case 'LEB':
			$mcSet = 'BE';
			break;
		case '2ED':
			$mcSet = 'UN';
			break;
		case 'TSP':
			$mcSet = 'TS';
			break;
		case 'TSB':
			$mcSet = 'ts';
			break;
		case '3ED':
			$mcSet = 'rv';
			break;
		case 'ICE':
			$mcSet = 'ia';
			break;
		case '4ED':
			$mcSet = '4e';
			break;
		case 'MIR':
			$mcSet = 'mr';
			break;
		case 'PLS':
			$mcSet = 'po';
			break;
		case 'TMP':
			$mcSet = 'tp';
			break;
		case 'UGL':
			$mcSet = 'ug';
			break;
		case 'USG':
			$mcSet = 'us';
			break;
		case 'ATH':
			$mcSet = 'at';
			break;
		case '6ED':
			$mcSet = '6e';
			break;
		case 'S99':
			$mcSet = 'st';
			break;
		case 'MMQ':
			$mcSet = 'mm';
			break;
		case 'IVS':
			$mcSet = 'in';
			break;
		case '7ED':
			$mcSet = '7e';
			break;
		case 'ONS':
			$mcSet = 'on';
			break;
		case '8ED':
			$mcSet = '8e';
			break;
		case 'MRD':
			$mcSet = 'mi';
			break;
		case 'LRW':
			$mcSet = 'lw';
			break;
		case 'UNH':
			$mcSet = 'uh';
			break;
		case '9ED':
			$mcSet = '9e';
			break;
		}	
		if($mcSet == ''){
			$mcSet = $set;
		}
		/*
			timespiral  tsp/tsb ts
			revised		3ed 	rv
			ice age 	ice 	ia
			4th edition 4ed 	4e
			mirage		mir 	mr
			portal		pls 	po
			tempest		tmp 	tp
			unglued		ugl 	ug
			urza's saga usg 	us
			anthologies	ath 	at
			6th 		6ed 	66e
			starter 	S99 	st
			masques 	mmq 	mm
			invasion 	ivs 	in
			7th ed 		7ed 	7e
			onslaught	ons 	on
			8th 		8ed 	8e
			mirrodin 	mrd 	mi
			lorwyn 		lrw 	lw
			unhinged	unh 	uh
			9e 			9ed 	9e

			languages :
			en 
			de
			fr
			it
			es
			pt
			jp
			cn
			ru
		*/
	$x=0;
	do{
		$cardName = $json[$key]['cards'][$x]['name'];
		$cardName = ucwords($cardName);
		$artCardName = str_replace(' ', '', $cardName);
		$artCardName = str_replace(':', '', $artCardName);
		$artCardName = str_replace("'", '', $artCardName);
		$artCardName = str_replace('-','', $artCardName);
		$artCardName = str_replace(',','',$artCardName);
		$artCardName = str_replace('!','', $artCardName);
		$cardNumber = $json[$key]['cards'][$x]['mciNumber'];

		#echo $cardName . ' ' . $cardNumber . ' ' . $language . ' ' . $Set;
		$langArray = array("fr", "de", "it", "es", "pt", "jp", "cn", "ru", "tw", "kr");
		//magiccards.info parser!
		for($i=0;$i<9;$i++){
			$language = $langArray[$i];
			echo $cardNumber;
			$cardURL = "magiccards.info/scans/" . $language . "/" . $mcSet . "/" . $cardNumber . ".jpg";


			//starcity games parser!
			//$cardURL = "http://static.starcitygames.com/sales/cardscans/MTG/" . $set . "/en/nonfoil/" . $artCardName . ".jpg";
			
			##Download every second image reported from the json package
			##Scrape Nonfoils
		if(!($set == 'LEA' || $set == 'LEB')){
			#echo $cardURL . ' ' . $set;
			#echo "<br />";
			$img = '../MTGImages/' . $set . '/nonfoil/' . $language . '/';
			if(!file_exists($img)){
				mkdir($img, 0755, true);
				$errors = error_Get_last();
			}

			$img = $img . $artCardName . '.jpg';
			if(!file_exists($img)){
				#echo 'Putting ' . $cardURL . ' into ' . $img ."\n";
				if(!copy($cardURL, $img)){
					echo "error adding: " . $cardURL . " to " . $img;
					echo "<br />";
				} else { $cardCount++; }
			}
			}
		}
	$x++;
	} while ($cardName != '');
	$y=0;
	}
	/*do{
		$cardCount = 0;
		$cardName = $json[$key]['cards'][$y]['name'];
		$cardName = ucwords($cardName);
		$artCardName = str_replace(' ', '', $cardName);
		$artCardName = str_replace(':', '', $artCardName);
		$artCardName = str_replace("'", '', $artCardName);
		$artCardName = str_replace('-','', $artCardName);
		$artCardName = str_replace(',','', $artCardName);
		$artCardName = str_replace('!','', $artCardName);
		#$cardNumber = $json[$key]['cards'][$y]['mciNumber'];

		//Starcity grabber
		//$cardURL = "http://static.starcitygames.com/sales/cardscans/MTG/" . $set . "/en/foil/" . $artCardName . ".jpg";
		
		##Download every second image reported from the json package
		##Scrape foils
		
		if(!($set == 'LEA' || $set == 'LEB' || $set == '2ED' || $set == '3ED' || $set == '4ED' || $set == '5ED' || $set == '6ED' || $set == 'ARN' || $set == 'ATQ' || $set == 'LEG' || $set == 'DRK' || $set == 'FEM' || $set == 'HML' || $set == 'ICE' || $set == 'ALL' || $set == 'CSP' || $set == 'MIR' || $set == 'VIS' || $set == 'WTH' || $set == 'TMP' || $set == 'STH' || $set == 'EXO' || $set == 'USG' || $set == 'CHR' || $set == 'ATH' || $set == 'POR' || $set == 'PO2' || $set == 'PTK' || $set == 'CEI' || $set == 'VAN' || $set == 'ITP' || $set == 'MGB' || $set == 'pCEL' || $set == 'pARL' || $set == 'RQS' || $set == 'pLGM' || $set == 'pMEI' || $set == 'CED' || $set == 'pDRC' || $set == 'pPRE' || $set == 'pJGP' || $set == 'UGL' || $set == 'pALP' || $set == 'ULG' || $set == 'UDS' || $set == 'S99' || $set == 'pGRU' || $set == 'pWOR' || $set == 'pWOS' || $set == 'MMQ' || $set == 'BRB' || $set == 'pSUS' || $set == 'pFNM' || $set == 'pELP' || $set == 'NMS' || $set == 'S00' || $set == 'PCY' || $set == 'BTD' || $set == 'pMPR' || $set == 'APC' || $set == 'DKM' || $set == 'pGTW' || $set == 'pHHO' || $set == 'pGPX' || $set == 'pMGD' || $set == 'MED' || $set == 'pLPA' || $set == 'pSUM' || $set == 'ME2' || $set == 'pWPN' || $set == 'DD2' || $set == 'DDC' || $set == 'DDD' || $set == 'DDE' || $set == 'DDF' || $set == 'DDG' || $set == 'DDH' || $set == 'DDI' || $set == 'DDJ' || $set == 'DDK' || $set == 'DDL' || $set == 'DDM' || $set == 'DDN' || $set == 'DD3' || $set == 'DDO' || $set == 'DDP' || $set == 'ME3' || $set == 'HO9' || $set == 'PD2' || $set == 'PD3' || $set == 'HOP' || $set == 'PC2' || $set == 'CMD' || $set == 'CM1' || $set == 'C13' || $set == 'C14' || $set == 'C15' || $set == 'ME4' || $set == 'VMA' || $set == 'TPR' || $set == 'pPOD' || $set == 'pCMP' || $set == 'CST' || $set == 'TSB' || $set == 'EVG' || $set == 'DPA' || $set == 'ARC' || $set == 'MD1' || $set == 'CPK' || $set == 'DD3_DVD' || $set == 'DD3_EVG' || $set == 'DD3_GVL' || $set == 'DD3_JVC' || $set == 'FRF_UGIN')){
			
			$img = './images/' . $set . '/foil/EN/';
			if(!file_exists($img)){
				mkdir($img, 0755, true);
			}

			$img = $img . $artCardName . '.jpg';
			if(!file_exists($img)){
				#echo 'Putting ' . $cardURL . ' into ' . $img ."\n";
				if(!copy($cardURL, $img)){
				} else { $cardCount++; }
				#echo "<br />";
			}
		}
	$y++;
	} while ($cardName != '');
*/


?>