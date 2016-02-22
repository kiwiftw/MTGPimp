<?php
##Download the cards from SCG##

$jsonData = file_get_contents('./AllSets.json', true);
$json = json_decode($jsonData, true);
echo '<pre>';
echo 'updating card image catalog';

foreach($json as $key => $value){
	$set = $key;
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
		/*echo "Name: " . $artCardName;
		echo '<br />';
		echo "Card Number: " . $cardNumber;
		echo '<br />';*/
		$cardURL = "http://static.starcitygames.com/sales/cardscans/MTG/" . $set . "/en/nonfoil/" . $artCardName . ".jpg";
		#echo $cardURL;
		#echo '<br />';
		#echo '<br />';
		
		##Download every second image reported from the json package
		##Scrape Nonfoils
		$img = './images/' . $set . '/nonfoil/EN/';
		if(!file_exists($img)){
			mkdir($img, 0755, true);
			$errors = error_Get_last();
		}

		$img = $img . $artCardName . '.jpg';
		if(!file_exists($img)){
			#echo 'Putting ' . $cardURL . ' into ' . $img ."\n";
			if(!copy($cardURL, $img)){
				#echo "failed to copy $cardURL\n"
			} else { $cardCount++; }
		}
	$x++;
	} while ($cardName != '');
	$y=0;
	do{
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
		#echo "Name: " . $artCardName;
		#echo '<br />';
		#echo "Card Number: " . $cardNumber;
		#echo '<br />';
		$cardURL = "http://static.starcitygames.com/sales/cardscans/MTG/" . $set . "/en/foil/" . $artCardName . ".jpg";
		#echo $cardURL;
		#echo '<br />';
		#echo '<br />';
		
		##Download every second image reported from the json package
		##Scrape Nonfoils
		
		if(!($set == 'LEA' || $set == 'LEB' || $set == '2ED' || $set == '3ED' || $set == '4ED' || $set == '5ED' || $set == '6ED' || $set == 'ARN' || $set == 'ATQ' || $set == 'LEG' || $set == 'DRK' || $set == 'FEM' || $set == 'HML' || $set == 'ICE' || $set == 'ALL' || $set == 'CSP' || $set == 'MIR' || $set == 'VIS' || $set == 'WTH' || $set == 'TMP' || $set == 'STH' || $set == 'EXO' || $set == 'USG' || $set == 'CHR' || $set == 'ATH' || $set == 'POR' || $set == 'PO2' || $set == 'PTK' || $set == 'CEI' || $set == 'VAN' || $set == 'ITP' || $set == 'MGB' || $set == 'pCEL' || $set == 'pARL' || $set == 'RQS' || $set == 'pLGM' || $set == 'pMEI' || $set == 'CED' || $set == 'pDRC' || $set == 'pPRE' || $set == 'pJGP' || $set == 'UGL' || $set == 'pALP' || $set == 'ULG' || $set == 'UDS' || $set == 'S99' || $set == 'pGRU' || $set == 'pWOR' || $set == 'pWOS' || $set == 'MMQ' || $set == 'BRB' || $set == 'pSUS' || $set == 'pFNM' || $set == 'pELP' || $set == 'NMS' || $set == 'S00' || $set == 'PCY' || $set == 'BTD' || $set == 'pMPR' || $set == 'APC' || $set == 'DKM' || $set == 'pGTW' || $set == 'pHHO' || $set == 'pGPX' || $set == 'pMGD' || $set == 'MED' || $set == 'pLPA' || $set == 'pSUM' || $set == 'ME2' || $set == 'pWPN' || $set == 'DD2' || $set == 'DDC' || $set == 'DDD' || $set == 'DDE' || $set == 'DDF' || $set == 'DDG' || $set == 'DDH' || $set == 'DDI' || $set == 'DDJ' || $set == 'DDK' || $set == 'DDL' || $set == 'DDM' || $set == 'DDN' || $set == 'DD3' || $set == 'DDO' || $set == 'DDP' || $set == 'ME3' || $set == 'HO9' || $set == 'PD2' || $set == 'PD3' || $set == 'HOP' || $set == 'PC2' || $set == 'CMD' || $set == 'CM1' || $set == 'C13' || $set == 'C14' || $set == 'C15' || $set == 'ME4' || $set == 'VMA' || $set == 'TPR' || $set == 'pPOD' || $set == 'pCMP' || $set == 'CST' || $set == 'TSB' || $set == 'EVG' || $set == 'DPA' || $set == 'ARC' || $set == 'MD1' || $set == 'CPK' || $set == 'DD3_DVD' || $set == 'DD3_EVG' || $set == 'DD3_GVL' || $set == 'DD3_JVC' || $set == 'FRF_UGIN')){
			
			$img = './images/' . $set . '/foil/EN/';
			if(!file_exists($img)){
				mkdir($img, 0755, true);
			}

			$img = $img . $artCardName . '.jpg';
			if(!file_exists($img)){
				#echo 'Putting ' . $cardURL . ' into ' . $img ."\n";
				if(!copy($cardURL, $img)){
					/*
					$errors = error_Get_last();
					$file = 'errors.txt';
					$current = file_get_contents($file);
					$current .= $error . "\n";
					file_put_contents($file, $errors);
					*/

				} else { $cardCount++; }
				#echo "<br />";
			}
		}
	$y++;
	} while ($cardName != '');
}

?>