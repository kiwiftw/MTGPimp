<?php
## Function Section
function setData($set){
	$Data = array(
		"Limited Edition Alpha" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Limited Edition Beta" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Unlimited Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Arabian Nights" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Antiquities" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Revised Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,4,5,6"),
		"Legends" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,6"),
		"The Dark" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,6"),
		"Fallen Empires" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Fourth Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Ice Age" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,4,5,6,9,11"),
		"Chronicles" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,7"),
		"Renaissance" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "4,5,6"),
		"Homelands" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,4,5,6,9,11"),
		"Alliances" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,4,5,6,9,11"),
		"Mirage" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,9,11"),
		"Visions" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Fifth Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Portal" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,2,3,4,5,7,11"),
		"Weatherlight" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Tempest" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Stronghold" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Exodus" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,3,4,5,6,7,8,9,11"),
		"Portal Second Age" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,4,5,6,7,9,11"),
		"Urza's Saga" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1,2,3,4,5,6,7,8,9,11"),
		"Anthologies" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Urza's Legacy" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Classic Sixth Edition" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Urza's Destiny" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Portal Three Kingdoms" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,7"),
		"Starter 1999" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1"),
		"Mercadian Masques" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Nemesis" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Starter 2000" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,4,5,6,7,11"),
		"Prophecy" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Invasion" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Beatdown Box Set" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1"),
		"Planeshift" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Seventh Edition" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Apocalypse" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Odyssey" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Deckmasters" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Torment" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Judgment" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Onslaught" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Legions" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Scourge" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Eighth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Mirrodin" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,11"),
		"Darksteel" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Fifth Dawn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Champions of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Betrayers of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Saviors of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,3,4,5,6,7,9,11"),
		"Ninth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,,9,10,11"),
		"Ravnica: City of Guilds" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Guildpact" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Dissension" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Coldsnap" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Time Spiral" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Time Spiral \"Timeshifted\"" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Planar Chaos" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Future Sight" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Tenth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Lorwyn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Morningtide" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Eventide" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Shadowmoor" => array("Frame" => "8th", "Foil" => "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Shards of Alara" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Conflux" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Alara Reborn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Magic 2010" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Zendikar" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Worldwake" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Rise of the Eldrazi" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Archenemy" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Magic 2011" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Scars of Mirrodin" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Mirrodin Besieged" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"New Phyrexia" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Commander (2011)" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Magic 2012" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,4,5,6,7,11"),
		"Innistrad" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Dark Ascension" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Avacyn Restored" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Magic 2013" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,4,5,6,7,11"),
		"Return to Ravnica" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Commander's Arsenal" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Gatecrash" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Dragon's Maze" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Modern Masters" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Magic 2014 Core Set" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Theros" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Commander 2013 Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Born of the Gods" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,4,5,6,7,11"),
		"Journey into Nyx" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,7"),
		"Modern Event Deck" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Magic: The Gathering—Conspiracy" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Magic 2015 Core Set" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Khans of Tarkir" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,7"),
		"Commander 2014" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Fate Reforged" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Dragons of Tarkir" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,7"),
		"Modern Masters 2015 Edition" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Magic Origins" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,7"),
		"Battle for Zendikar" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,7"),
		"Zendikar Expeditions" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Commander 2015" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Oath of the Gatewatch" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,4,5,6,7,11"),
		"Shadows over Innistrad" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,7"),
		"Eternal Masters" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Eldritch Moon" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,6"),
		"Conspiracy: Take the Crown" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Kaladesh" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,7"),
		"Commander 2016" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Aether Revolt" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Amonkhet" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),

		## Premium Deck Series
		"Premium Deck Series: Fire and Lightning" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Premium Deck Series: Graveborn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Premium Deck Series: Slivers" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),

		## Duel Decks
		"Duel Decks Anthology" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,4,5,6,7,11"),
		"Duel Decks Anthology, Divine vs. Demonic" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks Anthology, Elves vs. Goblins" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks Anthology, Garruk vs. Liliana" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks Anthology, Jace vs. Chandra" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Phyrexia vs. the Coalition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Duel Decks: Ajani vs. Nicol Bolas" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Blessed vs. Cursed" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Duel Decks: Divine vs. Demonic" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Duel Decks: Elspeth vs. Kiora" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Duel Decks: Elspeth vs. Tezzeret" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Elves vs. Goblins" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Garruk vs. Liliana" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Duel Decks: Heroes vs. Monsters" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Izzet vs. Golgari" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Jace vs. Chandra" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Duel Decks: Jace vs. Vraska" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Duel Decks: Knights vs. Dragons" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"Duel Decks: Nissa vs. Ob Nixilis" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,7"),
		"Duel Decks: Sorin vs. Tibalt" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Duel Decks: Speed vs. Cunning" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		"Duel Decks: Venser vs. Koth" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"Duel Decks: Zendikar vs. Eldrazi" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1"),
		
		## From the Vault
		"From the Vault: Angels" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"From the Vault: Annihilation (2014)" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"From the Vault: Dragons" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"From the Vault: Exiled" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"From the Vault: Legends" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"From the Vault: Lore" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"From the Vault: Realms" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		"From the Vault: Relics" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,9,10,11"),
		"From the Vault: Twenty" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1,2,3,4,5,6,7,8,9,10,11"),
		## Land Sets

		## Unsets
		"Unhinged" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "1"),
		"Unglued" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),

		## Weird sets! 
		"Dragon Con" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Media Inserts" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Legend Membership" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Rivals Quick Start Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Arena League" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Celebration" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Multiverse Gift Box" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Introductory Two-Player Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Portal Demo Game" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Prerelease Events" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Judge Gift Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Asia Pacific Land Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Guru" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Wizards of the Coast Online Store" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Battle Royale Box Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Super Series" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Friday Night Magic" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"European Land Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Magic Player Rewards" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Release Events" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Two-Headed Giant Tournament" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Gateway" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Champs and States" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Coldsnap Theme Decks" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Happy Holidays" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Pro Tour" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Grand Prix" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Worlds" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Magic Game Day" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Launch Parties" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"15th Anniversary" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Summer of Magic" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Wizards Play Network" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Duels of the Planeswalkers" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"World Magic Cup Qualifiers" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Modern Event Deck 2014" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Clash Pack" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Ugin's Fate promos" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Magic: The Gathering-Commander" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Welcome Deck 2016" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Masterpiece Series: Kaladesh Inventions" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Modern Masters 2017 Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Duel Decks: Mind vs. Might" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1"),
		"Masterpiece Series: Amonkhet Invocations" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "1")
	);
	## Run through the array to return the values from the specified set
	$values = $Data[$set];
	return $values;
}

function addSet($value, $set, $conn, $safeSet){
	$border = ucfirst($value["border"]);
	$returnedData = setData($set);
	$frame = $returnedData["Frame"];
	$foil = $returnedData["Foil"];
	$language = $returnedData["Languages"];

	$frame = mysqli_real_escape_string($conn, $frame);
	$border = mysqli_real_escape_string($conn, $border);
	$language = mysqli_real_escape_string($conn, $language);
	$foil = mysqli_real_escape_string($conn, $foil);
	## 

	$cards = $value["cards"];

	foreach($cards as $key1 => $value1){
		$cardName = $value1["name"];
		$cardName = mysqli_real_escape_string($conn, $cardName);

		$sql = "INSERT INTO Cards (CardName, Border, SetName, Frame, Foil, Language)
				VALUES ('$cardName', '$border', '$safeSet', '$frame', '$foil', '$language');";
		if ($conn->query($sql) === TRUE) {
			## Worked, no need to fill up the screen :)	   
		} else {
		    echo mysqli_error($conn);
		}
	}
}

function dropSet($safeSet, $conn){
		$sql = "DELETE FROM Cards WHERE SetName = '$safeSet'";
		if ($conn->query($sql) === TRUE) {
		    ## Worked, no need to fill up the screen :)
		} else {
		    echo mysqli_error($conn);
		}
}

function refreshAll($json, $conn){
	// delete all values and then insert all values again
	foreach($json as $key => $value){
		$set = $value["name"];
		## ignore online only sets
		if($set == "Collector's Edition" || $set == "International Collector's Edition" || $set == "Masters Edition" || $set == "Masters Edition II" || $set == "Masters Edition III" || $set == "Masters Edition IV" || $set == "Vintage Masters" || $set == "Tempest Remastered" || $set == "Vanguard" || $set == "Planechase" || $set == "Planechase 2012 Edition" || $set == "Planechase Anthology"){
		} else {
			$safeSet = mysqli_real_escape_string($conn, $set); 
			dropSet($safeSet, $conn);
			addSet($value, $set, $conn, $safeSet);
		}
	}
}

function refreshSpecific($json,$setName, $conn){
	// delete specific set data and insert set data
	$safeSet = mysqli_real_escape_string($conn, $setName);
	dropSet($safeSet, $conn);
	
	foreach($json as $key => $value){
		$set = $value["name"];
		if($set == $setName){
			addSet($value, $set, $conn, $safeSet);
		}
	}
}

function addNew($json, $conn){
	// run the add set stuff
	foreach($json as $key => $value){
		$set = $value["name"];
		## ignore online only sets
		if($set == "Collector's Edition" || $set == "International Collector's Edition" || $set == "Masters Edition" || $set == "Masters Edition II" || $set == "Masters Edition III" || $set == "Masters Edition IV" || $set == "Vintage Masters" || $set == "Tempest Remastered" || $set == "Vanguard" || $set == "Planechase" || $set == "Planechase 2012 Edition" || $set == "Planechase Anthology"){
		} else {
			$numCardsInSet = count($value["cards"]);
			$safeSet = mysqli_real_escape_string($conn, $set);
			$countCardsInDB = "Select CardName, COUNT(*) as total FROM Cards WHERE SetName = '$safeSet'";
			$result = $conn->query($countCardsInDB);
			$data = mysqli_fetch_assoc($result);
			$cardCount = $data["total"];

			if($cardCount == 0) {
				echo "Adding $set to DB.<br/>";
				addSet($value, $set, $conn, $safeSet);
			}
		}
	}
}

### END FUNCTION SECTION ###
$time_pre = microtime(true);

$servername = "localhost";
$username = "pcort";
$password = "password";
$dbname = "MTGPimp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	$jsonData = file_get_contents('./AllSets.json', true);
	#$jsonData =  file_get_contents('./LEA.json', true);  ## Use this line for testing purposes.
	$json = json_decode($jsonData, true);

	$functionToCall = $_POST["Action"];

	switch ($functionToCall) {
		case "RefreshAll":
			refreshAll($json, $conn);
			break;
		case "RefreshSpecific":
			$set = $_POST["SetToRefresh"];
			refreshSpecific($json, $set, $conn);
			break;
		case "AddNew":
			addNew($json, $conn);
			break;
	}
}

$conn->close();
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Execution in Seconds: " . $exec_time . "<br/>";

?>