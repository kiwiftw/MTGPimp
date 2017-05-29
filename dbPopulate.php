<?php
## Function Section
function setData($set){
	$Data = array(
		"Limited Edition Alpha" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Limited Edition Beta" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Unlimited Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Arabian Nights" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Antiquities" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Revised Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,French,German,Italian"),
		"Legends" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Italian"),
		"The Dark" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Italian"),
		"Fallen Empires" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Fourth Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Ice Age" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,French,German,Italian,Portuguese,Spanish"),
		"Chronicles" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Japanese"),
		"Renaissance" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "French,German,Italian"),
		"Homelands" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,French,German,Italian,Portuguese,Spanish"),
		"Alliances" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,French,German,Italian,Portuguese,Spanish"),
		"Mirage" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Visions" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Fifth Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Portal" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Japanese,Spanish"),
		"Weatherlight" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Tempest" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Stronghold" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Exodus" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Portal Second Age" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Urza's Saga" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Spanish"),
		"Anthologies" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Urza's Legacy" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Classic Sixth Edition" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Urza's Destiny" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Portal Three Kingdoms" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,Japanese"),
		"Starter 1999" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English"),
		"Mercadian Masques" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Nemesis" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Starter 2000" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,French,German,Italian,Japanese,Spanish"),
		"Prophecy" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Invasion" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Beatdown Box Set" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English"),
		"Planeshift" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Seventh Edition" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Apocalypse" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Odyssey" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Deckmasters" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Torment" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Judgment" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Onslaught" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Legions" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Scourge" => array("Frame" =>  "Original","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Eighth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Mirrodin" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Darksteel" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Fifth Dawn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Champions of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Betrayers of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Saviors of Kamigawa" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Spanish"),
		"Ninth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,,Portuguese,Russian,Spanish"),
		"Ravnica: City of Guilds" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Guildpact" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Dissension" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Coldsnap" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Time Spiral" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Time Spiral \"Timeshifted\"" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Planar Chaos" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Future Sight" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Tenth Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Lorwyn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Morningtide" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Eventide" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Shadowmoor" => array("Frame" => "8th", "Foil" => "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Shards of Alara" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Conflux" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Alara Reborn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Magic 2010" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Zendikar" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Worldwake" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Rise of the Eldrazi" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Archenemy" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Magic 2011" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Scars of Mirrodin" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Mirrodin Besieged" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"New Phyrexia" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Commander (2011)" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Magic 2012" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,French,German,Italian,Japanese,Spanish"),
		"Innistrad" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Dark Ascension" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Avacyn Restored" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Magic 2013" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,French,German,Italian,Japanese,Spanish"),
		"Return to Ravnica" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Commander's Arsenal" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Gatecrash" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Dragon's Maze" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Modern Masters" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Magic 2014 Core Set" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Theros" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Commander 2013 Edition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Born of the Gods" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,French,German,Italian,Japanese,Spanish"),
		"Journey into Nyx" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Modern Event Deck" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Magic: The Gathering—Conspiracy" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Magic 2015 Core Set" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Khans of Tarkir" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Commander 2014" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Fate Reforged" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Dragons of Tarkir" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Modern Masters 2015 Edition" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Magic Origins" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Japanese"),
		"Battle for Zendikar" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Zendikar Expeditions" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Commander 2015" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Oath of the Gatewatch" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,French,German,Italian,Japanese,Spanish"),
		"Shadows over Innistrad" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Eternal Masters" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Eldritch Moon" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Italian"),
		"Conspiracy: Take the Crown" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Kaladesh" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Japanese"),
		"Commander 2016" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Aether Revolt" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Amonkhet" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),

		## Premium Deck Series
		"Premium Deck Series: Fire and Lightning" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Premium Deck Series: Graveborn" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Premium Deck Series: Slivers" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),

		## Duel Decks
		"Duel Decks Anthology" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,French,German,Italian,Japanese,Spanish"),
		"Duel Decks Anthology, Divine vs. Demonic" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks Anthology, Elves vs. Goblins" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks Anthology, Garruk vs. Liliana" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks Anthology, Jace vs. Chandra" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Phyrexia vs. the Coalition" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Duel Decks: Ajani vs. Nicol Bolas" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Blessed vs. Cursed" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Duel Decks: Divine vs. Demonic" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Duel Decks: Elspeth vs. Kiora" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Duel Decks: Elspeth vs. Tezzeret" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Elves vs. Goblins" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Garruk vs. Liliana" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Duel Decks: Heroes vs. Monsters" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Izzet vs. Golgari" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Jace vs. Chandra" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Duel Decks: Jace vs. Vraska" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Duel Decks: Knights vs. Dragons" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"Duel Decks: Nissa vs. Ob Nixilis" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Japanese"),
		"Duel Decks: Sorin vs. Tibalt" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Duel Decks: Speed vs. Cunning" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		"Duel Decks: Venser vs. Koth" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"Duel Decks: Zendikar vs. Eldrazi" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English"),
		
		## From the Vault
		"From the Vault: Angels" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"From the Vault: Annihilation (2014)" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"From the Vault: Dragons" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"From the Vault: Exiled" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"From the Vault: Legends" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"From the Vault: Lore" => array("Frame" =>  "2015","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"From the Vault: Realms" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		"From the Vault: Relics" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Portuguese,Russian,Spanish"),
		"From the Vault: Twenty" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English,Chinese Simplified,Chinese Traditional,French,German,Italian,Japanese,Korean,Portuguese,Russian,Spanish"),
		## Land Sets

		## Unsets
		"Unhinged" => array("Frame" =>  "8th","Foil" =>  "Yes","Languages" => "English"),
		"Unglued" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),

		## Weird sets! 
		"Dragon Con" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Media Inserts" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Legend Membership" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Rivals Quick Start Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Arena League" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Celebration" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Multiverse Gift Box" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Introductory Two-Player Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Portal Demo Game" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Prerelease Events" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Judge Gift Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Asia Pacific Land Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Guru" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Wizards of the Coast Online Store" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Battle Royale Box Set" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Super Series" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Friday Night Magic" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"European Land Program" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Magic Player Rewards" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Release Events" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Two-Headed Giant Tournament" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Gateway" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Champs and States" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Coldsnap Theme Decks" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Happy Holidays" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Pro Tour" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Grand Prix" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Worlds" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Magic Game Day" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Launch Parties" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"15th Anniversary" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Summer of Magic" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Wizards Play Network" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Duels of the Planeswalkers" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"World Magic Cup Qualifiers" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Modern Event Deck 2014" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Clash Pack" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Ugin's Fate promos" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Magic: The Gathering-Commander" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Welcome Deck 2016" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Masterpiece Series: Kaladesh Inventions" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Modern Masters 2017 Edition" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Duel Decks: Mind vs. Might" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English"),
		"Masterpiece Series: Amonkhet Invocations" => array("Frame" =>  "Original","Foil" =>  "No","Languages" => "English")
	);
	## Run through the array to return the values from the specified set
	$values = $Data[$set];
	return $values;
}

function addSet($value, $set, $conn, $safeSet){
	$returnedData = setData($set);

	$frame = $returnedData["Frame"];
	$border = ucfirst($value["border"]);
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
		$pk_id = $value1["id"];
		$sql = "INSERT INTO Cards (pk_id, CardName, Border, SetName, Frame, Foil, Language)
				VALUES ('$pk_id','$cardName', '$border', '$safeSet', '$frame', '$foil', '$language')
				ON DUPLICATE KEY 
				UPDATE 	CardName='$cardName',
						Border='$border',
						SetName='$safeSet',
						Frame='$frame',
						Foil='$foil',
						Language='$language';";
		if ($conn->query($sql) === TRUE) {
			## Worked, no need to fill up the screen :)	   
		} else {
		    echo mysqli_error($conn);
		}
		## Increment pk_id for the next run
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
			#dropSet($safeSet, $conn);
			addSet($value, $set, $conn, $safeSet);
		}
	}
}

function refreshSpecific($json,$setName, $conn){
	// delete specific set data and insert set data
	$safeSet = mysqli_real_escape_string($conn, $setName);
	#dropSet($safeSet, $conn);
	
	foreach($json as $key => $value){
		$set = $value["name"];
		if($set == $setName){
			addSet($value, $set, $conn, $safeSet);
		}
	}
}

### END FUNCTION SECTION ###
$time_pre = microtime(true);

$config = parse_ini_file('../private/config.ini'); 
$conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
   
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
	}
}

$conn->close();
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Execution in Seconds: " . $exec_time . "<br/>";

?>