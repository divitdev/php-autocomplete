<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
	</head>     
	<body>

		<h2>Autocomplete</h2>

		<p>Start typing:</p>

		<!--Make sure the form has the autocomplete function switched off:-->
		<form autocomplete="off" action="/action_page.php">
		
		<?php
		
			$countriesObj = array(
								array(
									'valKey' => '1001',
									'valText' => 'Afghanistan',
								),
								array(
									'valKey' => '1002',
									'valText' => 'Albania',
								),
								array(
									'valKey' => '1003',
									'valText' => 'Algeria',
								),
								array(
									'valKey' => '1004',
									'valText' => 'Andorra',
								),
								array(
									'valKey' => '1005',
									'valText' => 'Angola',
								),
								array(
									'valKey' => '1006',
									'valText' => 'Anguilla',
								),
								array(
									'valKey' => '1007',
									'valText' => 'Antigua & Barbuda',
								),
								array(
									'valKey' => '1008',
									'valText' => 'Argentina',
								),
								array(
									'valKey' => '1009',
									'valText' => 'Armenia',
								),
								array(
									'valKey' => '1010',
									'valText' => 'Aruba',
								),
								array(
									'valKey' => '1011',
									'valText' => 'Australia',
								),
								array(
									'valKey' => '1012',
									'valText' => 'Austria',
								),
								array(
									'valKey' => '1013',
									'valText' => 'Azerbaijan',
								),
								array(
									'valKey' => '1014',
									'valText' => 'Bahamas',
								),
								array(
									'valKey' => '1015',
									'valText' => 'Bahrain',
								),
								array(
									'valKey' => '1016',
									'valText' => 'Bangladesh',
								),
								array(
									'valKey' => '1017',
									'valText' => 'Barbados',
								),
								array(
									'valKey' => '1018',
									'valText' => 'Belarus',
								),
								array(
									'valKey' => '1019',
									'valText' => 'Belgium',
								),
								array(
									'valKey' => '1020',
									'valText' => 'Belize',
								),
								array(
									'valKey' => '1021',
									'valText' => 'Benin',
								),
								array(
									'valKey' => '1022',
									'valText' => 'Bermuda',
								),
								array(
									'valKey' => '1023',
									'valText' => 'Bhutan',
								),
								array(
									'valKey' => '1024',
									'valText' => 'Bolivia',
								),
								array(
									'valKey' => '1025',
									'valText' => 'Bosnia & Herzegovina',
								),
								array(
									'valKey' => '1026',
									'valText' => 'Botswana',
								),
								array(
									'valKey' => '1027',
									'valText' => 'Brazil',
								),
								array(
									'valKey' => '1028',
									'valText' => 'British Virgin Islands',
								),
								array(
									'valKey' => '1029',
									'valText' => 'Brunei',
								),
								array(
									'valKey' => '1030',
									'valText' => 'Bulgaria',
								),
								array(
									'valKey' => '1031',
									'valText' => 'Burkina Faso',
								),
								array(
									'valKey' => '1032',
									'valText' => 'Burundi',
								),
								array(
									'valKey' => '1033',
									'valText' => 'Cambodia',
								),
								array(
									'valKey' => '1034',
									'valText' => 'Cameroon',
								),
								array(
									'valKey' => '1035',
									'valText' => 'Canada',
								),
								array(
									'valKey' => '1036',
									'valText' => 'Cape Verde',
								),
								array(
									'valKey' => '1037',
									'valText' => 'Cayman Islands',
								),
								array(
									'valKey' => '1038',
									'valText' => 'Central Arfrican Republic',
								),
								array(
									'valKey' => '1039',
									'valText' => 'Chad',
								),
								array(
									'valKey' => '1040',
									'valText' => 'Chile',
								),
								array(
									'valKey' => '1041',
									'valText' => 'China',
								),
								array(
									'valKey' => '1042',
									'valText' => 'Colombia',
								),
								array(
									'valKey' => '1043',
									'valText' => 'Congo',
								),
								array(
									'valKey' => '1044',
									'valText' => 'Cook Islands',
								),
								array(
									'valKey' => '1044',
									'valText' => 'Costa Rica',
								),
								array(
									'valKey' => '1045',
									'valText' => 'Cote D Ivoire',
								),
								array(
									'valKey' => '1046',
									'valText' => 'Croatia',
								),
								array(
									'valKey' => '1047',
									'valText' => 'Cuba',
								),
								array(
									'valKey' => '1048',
									'valText' => 'Curacao',
								),
								array(
									'valKey' => '1049',
									'valText' => 'Cyprus',
								),
								array(
									'valKey' => '1050',
									'valText' => 'Czech Republic',
								),
								array(
									'valKey' => '1051',
									'valText' => 'Denmark',
								),
								array(
									'valKey' => '1052',
									'valText' => 'Djibouti',
								),
								array(
									'valKey' => '1053',
									'valText' => 'Dominica',
								),
								array(
									'valKey' => '1054',
									'valText' => 'Dominican Republic',
								),
								array(
									'valKey' => '1055',
									'valText' => 'Ecuador',
								),
								array(
									'valKey' => '1056',
									'valText' => 'Egypt',
								),
								array(
									'valKey' => '1057',
									'valText' => 'El Salvador',
								),
								array(
									'valKey' => '1058',
									'valText' => 'Equatorial Guinea',
								),
								array(
									'valKey' => '1059',
									'valText' => 'Eritrea',
								),
								array(
									'valKey' => '1060',
									'valText' => 'Estonia',
								),
								array(
									'valKey' => '1061',
									'valText' => 'Ethiopia',
								),
								array(
									'valKey' => '1062',
									'valText' => 'Falkland Islands',
								),
								array(
									'valKey' => '1063',
									'valText' => 'Faroe Islands',
								),
								array(
									'valKey' => '1064',
									'valText' => 'Fiji',
								),
								array(
									'valKey' => '1065',
									'valText' => 'Finland',
								),
								array(
									'valKey' => '1066',
									'valText' => 'France',
								),
								array(
									'valKey' => '1067',
									'valText' => 'French Polynesia',
								),
								array(
									'valKey' => '1068',
									'valText' => 'French West Indies',
								),
								array(
									'valKey' => '1069',
									'valText' => 'Gabon',
								),
								array(
									'valKey' => '1070',
									'valText' => 'Gambia',
								),
								array(
								
									'valKey' => '1071',
									'valText' => 'Georgia',
								),
								array(
									'valKey' => '1072',
									'valText' => 'Germany',
								),
								array(
									'valKey' => '1073',
									'valText' => 'Ghana',
								),
								array(
									'valKey' => '1074',
									'valText' => 'Gibraltar',
								),
								array(
									'valKey' => '1075',
									'valText' => 'Greece',
								),
								array(
									'valKey' => '1076',
									'valText' => 'Greenland',
								),
								array(
									'valKey' => '1077',
									'valText' => 'Grenada',
								),
								array(
									'valKey' => '1078',
									'valText' => 'Guam',
								),
								array(
									'valKey' => '1079',
									'valText' => 'Guatemala',
								),
								array(
									'valKey' => '1080',
									'valText' => 'Guernsey',
								),
								array(
									'valKey' => '1081',
									'valText' => 'Guinea',
								),
								array(
									'valKey' => '1082',
									'valText' => 'Guinea Bissau',
								),
								array(
									'valKey' => '1083',
									'valText' => 'Guyana',
								),
								array(
									'valKey' => '1084',
									'valText' => 'Haiti',
								),
								array(
									'valKey' => '1085',
									'valText' => 'Honduras',
								),
								array(
									'valKey' => '1086',
									'valText' => 'Hong Kong',
								),
								array(
									'valKey' => '1087',
									'valText' => 'Hungary',
								),
								array(
									'valKey' => '1088',
									'valText' => 'Iceland',
								),
								array(
									'valKey' => '1089',
									'valText' => 'India',
								),
								array(
									'valKey' => '1090',
									'valText' => 'Indonesia',
								),
								array(
								
									'valKey' => '1091',
									'valText' => 'Iran',
								),
								array(
								
									'valKey' => '1092',
									'valText' => 'Iraq',
								),
								array(
								
									'valKey' => '1093',
									'valText' => 'Ireland',
								),
								array(
									'valKey' => '1094',
									'valText' => 'Isle of Man',
								),
								array(
									'valKey' => '1095',
									'valText' => 'Israel',
								),
								array(
									'valKey' => '1096',
									'valText' => 'Italy',
								),
								array(
									'valKey' => '1097',
									'valText' => 'Jamaica',
								),
								array(
									'valKey' => '1098',
									'valText' => 'Japan',
								),
								array(
									'valKey' => '1099',
									'valText' => 'Jersey',
								),
								array(
									'valKey' => '1100',
									'valText' => 'Jordan',
								),
								array(
									'valKey' => '1101',
									'valText' => 'Kazakhstan',
								),
								array(
									'valKey' => '1102',
									'valText' => 'Kenya',
								),
								array(
									'valKey' => '1103',
									'valText' => 'Kiribati',
								),
								array(
									'valKey' => '1104',
									'valText' => 'Kosovo',
								),
								array(
									'valKey' => '1105',
									'valText' => 'Kuwait',
								),
								array(
									'valKey' => '1106',
									'valText' => 'Kyrgyzstan',
								),
								array(
									'valKey' => '1107',
									'valText' => 'Laos',
								),
								array(
									'valKey' => '1108',
									'valText' => 'Latvia',
								),
								array(
									'valKey' => '1109',
									'valText' => 'Lebanon',
								),
								array(
									'valKey' => '1110',
									'valText' => 'Lesotho',
								),
								array(
									'valKey' => '1111',
									'valText' => 'Liberia',
								),
								array(
									'valKey' => '1112',
									'valText' => 'Libya',
								),
								array(
									'valKey' => '1113',
									'valText' => 'Liechtenstein',
								),
								array(
									'valKey' => '1114',
									'valText' => 'Lithuania',
								),
								array(
									'valKey' => '1115',
									'valText' => 'Luxembourg',
								),
								array(
									'valKey' => '1116',
									'valText' => 'Macau',
								),
								array(
									'valKey' => '1117',
									'valText' => 'Macedonia',
								),
								array(
									'valKey' => '1118',
									'valText' => 'Madagascar',
								),
								array(
									'valKey' => '1119',
									'valText' => 'Malawi',
								),
								array(
									'valKey' => '1120',
									'valText' => 'Malaysia',
								),
								array(
									'valKey' => '1121',
									'valText' => 'Maldives',
								),
								array(
									'valKey' => '1122',
									'valText' => 'Mali',
								),
								array(
									'valKey' => '1123',
									'valText' => 'Malta',
								),
								array(
									'valKey' => '1124',
									'valText' => 'Marshall Islands',
								),
								array(
									'valKey' => '1125',
									'valText' => 'Mauritania',
								),
								array(
									'valKey' => '1126',
									'valText' => 'Mauritius',
								),
								array(
									'valKey' => '1127',
									'valText' => 'Mexico',
								),
								array(
									'valKey' => '1128',
									'valText' => 'Micronesia',
								),
								array(
									'valKey' => '1129',
									'valText' => 'Moldova',
								),
								array(
									'valKey' => '1130',
									'valText' => 'Monaco',
								),
								array(
									'valKey' => '1131',
									'valText' => 'Mongolia',
								),
								array(
									'valKey' => '1132',
									'valText' => 'Montenegro',
								),
								array(
									'valKey' => '1133',
									'valText' => 'Montserrat',
								),
								array(
									'valKey' => '1134',
									'valText' => 'Morocco',
								),
								array(
									'valKey' => '1135',
									'valText' => 'Mozambique',
								),
								array(
									'valKey' => '1136',
									'valText' => 'Myanmar',
								),
								array(
									'valKey' => '1137',
									'valText' => 'Namibia',
								),
								array(
									'valKey' => '1138',
									'valText' => 'Nauro',
								),
								array(
									'valKey' => '1139',
									'valText' => 'Nepal',
								),
								array(
									'valKey' => '1140',
									'valText' => 'Netherlands',
								),
								array(
									'valKey' => '1141',
									'valText' => 'Netherlands Antilles',
								),
								array(
									'valKey' => '1142',
									'valText' => 'New Caledonia',
								),
								array(
									'valKey' => '1143',
									'valText' => 'New Zealand',
								),
								array(
									'valKey' => '1144',
									'valText' => 'Nicaragua',
								),
								array(
									'valKey' => '1145',
									'valText' => 'Niger',
								),
								array(
									'valKey' => '1146',
									'valText' => 'Nigeria',
								),
								array(
									'valKey' => '1147',
									'valText' => 'North Korea',
								),
								array(
									'valKey' => '1148',
									'valText' => 'Norway',
								),
								array(
									'valKey' => '1149',
									'valText' => 'Oman',
								),
								array(
									'valKey' => '1150',
									'valText' => 'Pakistan',
								),
								array(
									'valKey' => '1151',
									'valText' => 'Palau',
								),
								array(
									'valKey' => '1152',
									'valText' => 'Palestine',
								),
								array(
									'valKey' => '1153',
									'valText' => 'Panama',
								),
								array(
									'valKey' => '1154',
									'valText' => 'Papua New Guinea',
								),
								array(
									'valKey' => '1155',
									'valText' => 'Paraguay',
								),
								array(
									'valKey' => '1156',
									'valText' => 'Peru',
								),
								array(
									'valKey' => '1157',
									'valText' => 'Philippines',
								),
								array(
									'valKey' => '1158',
									'valText' => 'Poland',
								),
								array(
									'valKey' => '1159',
									'valText' => 'Portugal',
								),
								array(
									'valKey' => '1160',
									'valText' => 'Puerto Rico',
								),
								array(
									'valKey' => '1161',
									'valText' => 'Qatar',
								),
								array(
									'valKey' => '1162',
									'valText' => 'Reunion',
								),
								array(
									'valKey' => '1163',
									'valText' => 'Romania',
								),
								array(
									'valKey' => '1164',
									'valText' => 'Russia',
								),
								array(
									'valKey' => '1165',
									'valText' => 'Rwanda',
								),
								array(
									'valKey' => '1166',
									'valText' => 'Saint Pierre & Miquelon',
								),
								array(
									'valKey' => '1167',
									'valText' => 'Samoa',
								),
								array(
									'valKey' => '1168',
									'valText' => 'San Marino',
								),
								array(
									'valKey' => '1169',
									'valText' => 'Sao Tome and Principe',
								),
								array(
									'valKey' => '1170',
									'valText' => 'Saudi Arabia',
								),
								array(
									'valKey' => '1171',
									'valText' => 'Senegal',
								),
								array(
									'valKey' => '1172',
									'valText' => 'Serbia',
								),
								array(
									'valKey' => '1173',
									'valText' => 'Seychelles',
								),
								array(
									'valKey' => '1174',
									'valText' => 'Sierra Leone',	
								),
								array(
									'valKey' => '1175',
									'valText' => 'Singapore',
								),
								array(
									'valKey' => '1176',
									'valText' => 'Slovakia',
								),
								array(
									'valKey' => '1177',
									'valText' => 'Slovenia',
								),
								array(
									'valKey' => '1178',
									'valText' => 'Solomon Islands',
								),
								array(
									'valKey' => '1179',
									'valText' => 'Somalia',
								),
								array(
									'valKey' => '1180',
									'valText' => 'South Africa',
								),
								array(
									'valKey' => '1181',
									'valText' => 'South Korea',
								),
								array(
									'valKey' => '1182',
									'valText' => 'South Sudan',
								),
								array(
									'valKey' => '1183',
									'valText' => 'Spain',
								),
								array(
									'valKey' => '1184',
									'valText' => 'Sri Lanka',
								),
								array(
									'valKey' => '1185',
									'valText' => 'St Kitts & Nevis',
								),
								array(
									'valKey' => '1186',
									'valText' => 'St Lucia',
								),
								array(
									'valKey' => '1187',
									'valText' => 'St Vincent',
								),
								array(
									'valKey' => '1188',
									'valText' => 'Sudan',
								),
								array(
									'valKey' => '1189',
									'valText' => 'Suriname',
								),
								array(
									'valKey' => '1190',
									'valText' => 'Swaziland',
								),
								array(
									'valKey' => '1191',
									'valText' => 'Sweden',
								),
								array(
									'valKey' => '1192',
									'valText' => 'Switzerland',
								),
								array(
									'valKey' => '1193',
									'valText' => 'Syria',
								),
								array(
									'valKey' => '1194',
									'valText' => 'Taiwan',
								),
								array(
									'valKey' => '1195',
									'valText' => 'Tajikistan',
								),
								array(
									'valKey' => '1196',
									'valText' => 'Tanzania',
								),
								array(
									'valKey' => '1197',
									'valText' => 'Thailand',
								),
								array(
									'valKey' => '1198',
									'valText' => 'Timor L Este',
								),
								array(
									'valKey' => '1199',
									'valText' => 'Togo',
								),
								array(
									'valKey' => '1200',
									'valText' => 'Tonga',
								),
								array(
									'valKey' => '1201',
									'valText' => 'Trinidad & Tobago',
								),
								array(
									'valKey' => '1202',
									'valText' => 'Tunisia',
								),
								array(
									'valKey' => '1203',
									'valText' => 'Turkey',
								),
								array(
									'valKey' => '1204',
									'valText' => 'Turkmenistan',
								),
								array(
									'valKey' => '1205',
									'valText' => 'Turks & Caicos',
								),
								array(
									'valKey' => '1206',
									'valText' => 'Tuvalu',
								),
								array(
									'valKey' => '1207',
									'valText' => 'Uganda',
								),
								array(
									'valKey' => '1208',
									'valText' => 'Ukraine',
								),
								array(
									'valKey' => '1209',
									'valText' => 'United Arab Emirates',
								),
								array(
									'valKey' => '1210',
									'valText' => 'United Kingdom',
								),
								array(
									'valKey' => '1211',
									'valText' => 'United States of America',
								),
								array(
									'valKey' => '1212',
									'valText' => 'Uruguay',
								),
								array(
									'valKey' => '1213',
									'valText' => 'Uzbekistan',
								),
								array(
									'valKey' => '1214',
									'valText' => 'Vanuatu',
								),
								array(
									'valKey' => '1215',
									'valText' => 'Vatican City',
								),
								array(
								
									'valKey' => '1216',
									'valText' => 'Venezuela',
								),
								array(
								
									'valKey' => '1217',
									'valText' => 'Vietnam',
								),
								array(
									'valKey' => '1218',
									'valText' => 'Virgin Islands (US)',
								),
								array(
									'valKey' => '1219',
									'valText' => 'Yemen',
								),
								array(
									'valKey' => '1220',
									'valText' => 'Zambia',
								),
								array(
								
									'valKey' => '1221',
									'valText' => 'Zimbabwe'
								)
							);
							
			$countriesObj = json_encode($countriesObj);
		?>
			<div class="autocomplete" style="width:300px;">
				<input id="myInput" type="text" name="myCountry" placeholder="Country">
			</div>
			<input type="submit">
			<input id="myInputID" type="text" name="myCountryID" placeholder="Country ID">
			
			<div class="autocomplete" style="width:300px;">
				<input id="myInput2" type="text" name="myCountry" placeholder="Country" onInput='javascript:autocompleteObj(document.getElementById("myInput2"), document.getElementById("myInputID2"), <?php echo $countriesObj;?>);'>
			</div>
			<input id="myInputID2" type="text" name="myCountryID" placeholder="Country ID">
		</form>
		
		<script src="autocomplete.js"></script>

	</body>
</html>
