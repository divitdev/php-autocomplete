<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			/*
			* {
			  box-sizing: border-box;
			}

			body {
			  font: 16px Arial;  
			}
*/
			/*the container must be positioned relative:*/
			.autocomplete {
			  position: relative;
			  display: inline-block;
			}
/*
			input {
			  border: 1px solid transparent;
			  background-color: #f1f1f1;
			  padding: 10px;
			  font-size: 16px;
			}

			input[type=text] {
			  background-color: #f1f1f1;
			  width: 100%;
			}

			input[type=submit] {
			  background-color: DodgerBlue;
			  color: #fff;
			  cursor: pointer;
			}
*/
			.autocomplete-items {
			  position: absolute;
			  border: 1px solid #d4d4d4;
			  border-bottom: none;
			  border-top: none;
			  z-index: 99;
			  /*position the autocomplete items to be the same width as the container:*/
			  top: 100%;
			  left: 0;
			  right: 0;
			}

			.autocomplete-items div {
			  padding: 10px;
			  cursor: pointer;
			  background-color: #fff; 
			  border-bottom: 1px solid #d4d4d4; 
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
			  background-color: #e9e9e9; 
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
			  background-color: DodgerBlue !important; 
			  color: #ffffff; 
			}
		</style>
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

		<script>

			function autocomplete(inp, arr) {
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function(e) {
					var a, b, i, val = this.value;
					/*close any already open lists of autocompleted values*/
					closeAllLists();
					if (!val) { return false;}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);
			  
					/*for each item in the array...*/
					for (i = 0; i < arr.length; i++) {
						/*check if the item starts with the same letters as the text field value:*/
						if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/
							b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
							b.innerHTML += arr[i].substr(val.length);
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/
							b.addEventListener("click", function(e) {
								/*insert the value for the autocomplete text field:*/
								inp.value = this.getElementsByTagName("input")[0].value;
								/*close the list of autocompleted values,
								(or any other open lists of autocompleted values:*/
								document.getElementById("myInputID").value = "Johnny Bravo" + inp.value;
								closeAllLists();
							});
							a.appendChild(b);
						}
					}
				});
				
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});
				
				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
					
				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function (e) {
					closeAllLists(e.target);
				});
			}

			function autocompleteObj(inp, inpId, obj) {
				
				// const obj = Object.assign({}, arr);
				
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function(e) {
					var a, b, i, val = this.value;
					/*close any already open lists of autocompleted values*/
					closeAllLists();
					if (!val) { return false;}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);

					inpId.value = "";

					/*for each item in the object...*/
					var i = 0;
					Object.keys(obj).forEach(function(key) {

						// console.log(key, obj[key]);
						// console.log('key => '+key);
						// console.log('val => ');
						// console.log(obj[key]);
						// console.log('val valText => ');
						// console.log(obj[key].valText);
						
						valKey = String(obj[key].valKey);
						valText = String(obj[key].valText);
						
					
						// console.log("==================");
						// console.log(valText.substr(0, val.length));
						
						
						/*check if the item starts with the same letters as the text field value:*/
						if (valText.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/
							b.innerHTML = "<strong>" + valText.substr(0, val.length) + "</strong>";
							b.innerHTML += valText.substr(val.length);
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input type='hidden' class='autoCompleteText' value='" + valText + "'>";
							b.innerHTML += "<input type='hidden' class='autoCompleteKey' value='" + valKey + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/
							b.addEventListener("click", function(e) {
								/*insert the value for the autocomplete text field:*/
								// inp.value = this.getElementsByTagName("input")[0].value;
								inp.value = this.getElementsByClassName("autoCompleteText")[0].value;
								/*close the list of autocompleted values,
								(or any other open lists of autocompleted values:*/
								// document.getElementById("myInputID").value = "Johnny Bravo" + this.getElementsByTagName("input")[1].value;
								inpId.value = this.getElementsByClassName("autoCompleteKey")[0].value;
								closeAllLists();
							});
							a.appendChild(b);
						}
						
						
						i++;
					});
				});
		  
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});
		  
				inp.addEventListener('focusout', function(e) {
					// console.log('lost focus');
					
					/*seach database if data found set input id*/
					var result = deepSearch(obj, 'valText', (k, v) => v === inp.value);
					// console.log('=========================');
					// console.log(inp);
					// console.log('=========================');
					
					if(result != "" && result)
					{
						inpId.value = result.valKey;
					}					
					
					if (e.currentTarget.contains(e.relatedTarget)) {
					/* Focus will still be within the container */
					} else {
					/* Focus will leave the container */
					}
				});
		  
				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
						
				function  deepSearch (object, key, predicate) {
					if (object.hasOwnProperty(key) && predicate(key, object[key]) === true) return object

					for (let i = 0; i < Object.keys(object).length; i++) {
						const nextObject = object[Object.keys(object)[i]];
						if (nextObject && typeof nextObject === "object") {
							let o = deepSearch(nextObject, key, predicate)
							if (o != null) return o
						}
					}
					return null
				}
				

				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function (e) {
					closeAllLists(e.target);
				});
			}

			/*An array containing all the country names in the world:*/
			// var countries = ["Afghanistan",
				// "Albania",
				// "Algeria",
				// "Andorra",
				// "Angola",
				// "Anguilla",
				// "Antigua & Barbuda",
				// "Argentina",
				// "Armenia",
				// "Aruba",
				// "Australia",
				// "Austria",
				// "Azerbaijan",
				// "Bahamas",
				// "Bahrain",
				// "Bangladesh",
				// "Barbados",
				// "Belarus",
				// "Belgium",
				// "Belize",
				// "Benin",
				// "Bermuda",
				// "Bhutan",
				// "Bolivia",
				// "Bosnia & Herzegovina",
				// "Botswana",
				// "Brazil",
				// "British Virgin Islands",
				// "Brunei",
				// "Bulgaria",
				// "Burkina Faso",
				// "Burundi",
				// "Cambodia",
				// "Cameroon",
				// "Canada",
				// "Cape Verde",
				// "Cayman Islands",
				// "Central Arfrican Republic",
				// "Chad",
				// "Chile",
				// "China",
				// "Colombia",
				// "Congo",
				// "Cook Islands",
				// "Costa Rica",
				// "Cote D Ivoire",
				// "Croatia",
				// "Cuba",
				// "Curacao",
				// "Cyprus",
				// "Czech Republic",
				// "Denmark",
				// "Djibouti",
				// "Dominica",
				// "Dominican Republic",
				// "Ecuador",
				// "Egypt",
				// "El Salvador",
				// "Equatorial Guinea",
				// "Eritrea",
				// "Estonia",
				// "Ethiopia",
				// "Falkland Islands",
				// "Faroe Islands",
				// "Fiji",
				// "Finland",
				// "France",
				// "French Polynesia",
				// "French West Indies",
				// "Gabon",
				// "Gambia",
				// "Georgia",
				// "Germany",
				// "Ghana",
				// "Gibraltar",
				// "Greece",
				// "Greenland",
				// "Grenada",
				// "Guam",
				// "Guatemala",
				// "Guernsey",
				// "Guinea",
				// "Guinea Bissau",
				// "Guyana",
				// "Haiti",
				// "Honduras",
				// "Hong Kong",
				// "Hungary",
				// "Iceland",
				// "India",
				// "Indonesia",
				// "Iran",
				// "Iraq",
				// "Ireland",
				// "Isle of Man",
				// "Israel",
				// "Italy",
				// "Jamaica",
				// "Japan",
				// "Jersey",
				// "Jordan",
				// "Kazakhstan",
				// "Kenya",
				// "Kiribati",
				// "Kosovo",
				// "Kuwait",
				// "Kyrgyzstan",
				// "Laos",
				// "Latvia",
				// "Lebanon",
				// "Lesotho",
				// "Liberia",
				// "Libya",
				// "Liechtenstein",
				// "Lithuania",
				// "Luxembourg",
				// "Macau",
				// "Macedonia",
				// "Madagascar",
				// "Malawi",
				// "Malaysia",
				// "Maldives",
				// "Mali",
				// "Malta",
				// "Marshall Islands",
				// "Mauritania",
				// "Mauritius",
				// "Mexico",
				// "Micronesia",
				// "Moldova",
				// "Monaco",
				// "Mongolia",
				// "Montenegro",
				// "Montserrat",
				// "Morocco",
				// "Mozambique",
				// "Myanmar",
				// "Namibia",
				// "Nauro",
				// "Nepal",
				// "Netherlands",
				// "Netherlands Antilles",
				// "New Caledonia",
				// "New Zealand",
				// "Nicaragua",
				// "Niger",
				// "Nigeria",
				// "North Korea",
				// "Norway",
				// "Oman",
				// "Pakistan",
				// "Palau",
				// "Palestine",
				// "Panama",
				// "Papua New Guinea",
				// "Paraguay",
				// "Peru",
				// "Philippines",
				// "Poland",
				// "Portugal",
				// "Puerto Rico",
				// "Qatar",
				// "Reunion",
				// "Romania",
				// "Russia",
				// "Rwanda",
				// "Saint Pierre & Miquelon",
				// "Samoa",
				// "San Marino",
				// "Sao Tome and Principe",
				// "Saudi Arabia",
				// "Senegal",
				// "Serbia",
				// "Seychelles",
				// "Sierra Leone",
				// "Singapore",
				// "Slovakia",
				// "Slovenia",
				// "Solomon Islands",
				// "Somalia",
				// "South Africa",
				// "South Korea",
				// "South Sudan",
				// "Spain",
				// "Sri Lanka",
				// "St Kitts & Nevis",
				// "St Lucia",
				// "St Vincent",
				// "Sudan",
				// "Suriname",
				// "Swaziland",
				// "Sweden",
				// "Switzerland",
				// "Syria",
				// "Taiwan",
				// "Tajikistan",
				// "Tanzania",
				// "Thailand",
				// "Timor L'Este",
				// "Togo",
				// "Tonga",
				// "Trinidad & Tobago",
				// "Tunisia",
				// "Turkey",
				// "Turkmenistan",
				// "Turks & Caicos",
				// "Tuvalu",
				// "Uganda",
				// "Ukraine",
				// "United Arab Emirates",
				// "United Kingdom",
				// "United States of America",
				// "Uruguay",
				// "Uzbekistan",
				// "Vanuatu",
				// "Vatican City",
				// "Venezuela",
				// "Vietnam",
				// "Virgin Islands (US)",
				// "Yemen",
				// "Zambia",
				// "Zimbabwe"];

			// var countriesObj = [
									// {
											// 'valKey': '1001',
											// 'valText': "Afghanistan",
									// },
									// {
											// 'valKey': '1002',
											// 'valText': "Albania",
									// },
									// {
											// 'valKey': '1003',
											// 'valText': "Algeria",
									// },
									// {
											// 'valKey': '1004',
											// 'valText': "Andorra",
									// },
									// {
											// 'valKey': '1005',
											// 'valText': "Angola",
									// },
									// {
											// 'valKey': '1006',
											// 'valText': "Anguilla",
									// },
									// {
											// 'valKey': '1007',
											// 'valText': "Antigua & Barbuda",
									// },
									// {
											// 'valKey': '1008',
											// 'valText': "Argentina",
									// },
									// {
											// 'valKey': '1009',
											// 'valText': "Armenia",
									// },
									// {
											// 'valKey': '1010',
											// 'valText': "Aruba",
									// },
									// {
											// 'valKey': '1011',
											// 'valText': "Australia",
									// },
									// {
											// 'valKey': '1012',
											// 'valText': "Austria",
									// },
									// {
											// 'valKey': '1013',
											// 'valText': "Azerbaijan",
									// },
									// {
											// 'valKey': '1014',
											// 'valText': "Bahamas",
									// },
									// {
											// 'valKey': '1015',
											// 'valText': "Bahrain",
									// },
									// {
											// 'valKey': '1016',
											// 'valText': "Bangladesh",
									// },
									// {
											// 'valKey': '1017',
											// 'valText': "Barbados",
									// },
									// {
											// 'valKey': '1018',
											// 'valText': "Belarus",
									// },
									// {
											// 'valKey': '1019',
											// 'valText': "Belgium",
									// },
									// {
											// 'valKey': '1020',
											// 'valText': "Belize",
									// },
									// {
											// 'valKey': '1021',
											// 'valText': "Benin",
									// },
									// {
											// 'valKey': '1022',
											// 'valText': "Bermuda",
									// },
									// {
											// 'valKey': '1023',
											// 'valText': "Bhutan",
									// },
									// {
											// 'valKey': '1024',
											// 'valText': "Bolivia",
									// },
									// {
											// 'valKey': '1025',
											// 'valText': "Bosnia & Herzegovina",
									// },
									// {
											// 'valKey': '1026',
											// 'valText': "Botswana",
									// },
									// {
											// 'valKey': '1027',
											// 'valText': "Brazil",
									// },
									// {
											// 'valKey': '1028',
											// 'valText': "British Virgin Islands",
									// },
									// {
											// 'valKey': '1029',
											// 'valText': "Brunei",
									// },
									// {
											// 'valKey': '1030',
											// 'valText': "Bulgaria",
									// },
									// {
											// 'valKey': '1031',
											// 'valText': "Burkina Faso",
									// },
									// {
											// 'valKey': '1032',
											// 'valText': "Burundi",
									// },
									// {
											// 'valKey': '1033',
											// 'valText': "Cambodia",
									// },
									// {
											// 'valKey': '1034',
											// 'valText': "Cameroon",
									// },
									// {
											// 'valKey': '1035',
											// 'valText': "Canada",
									// },
									// {
											// 'valKey': '1036',
											// 'valText': "Cape Verde",
									// },
									// {
											// 'valKey': '1037',
											// 'valText': "Cayman Islands",
									// },
									// {
											// 'valKey': '1038',
											// 'valText': "Central Arfrican Republic",
									// },
									// {
											// 'valKey': '1039',
											// 'valText': "Chad",
									// },
									// {
											// 'valKey': '1040',
											// 'valText': "Chile",
									// },
									// {
											// 'valKey': '1041',
											// 'valText': "China",
									// },
									// {
											// 'valKey': '1042',
											// 'valText': "Colombia",
									// },
									// {
											// 'valKey': '1043',
											// 'valText': "Congo",
									// },
									// {
											// 'valKey': '1044',
											// 'valText': "Cook Islands",
									// },
									// {
											// 'valKey': '1044',
											// 'valText': "Costa Rica",
									// },
									// {
											// 'valKey': '1045',
											// 'valText': "Cote D Ivoire",
									// },
									// {
											// 'valKey': '1046',
											// 'valText': "Croatia",
									// },
									// {
											// 'valKey': '1047',
											// 'valText': "Cuba",
									// },
									// {
											// 'valKey': '1048',
											// 'valText': "Curacao",
									// },
									// {
											// 'valKey': '1049',
											// 'valText': "Cyprus",
									// },
									// {
											// 'valKey': '1050',
											// 'valText': "Czech Republic",
									// },
									// {
											// 'valKey': '1051',
											// 'valText': "Denmark",
									// },
									// {
											// 'valKey': '1052',
											// 'valText': "Djibouti",
									// },
									// {
											// 'valKey': '1053',
											// 'valText': "Dominica",
									// },
									// {
											// 'valKey': '1054',
											// 'valText': "Dominican Republic",
									// },
									// {
											// 'valKey': '1055',
											// 'valText': "Ecuador",
									// },
									// {
											// 'valKey': '1056',
											// 'valText': "Egypt",
									// },
									// {
											// 'valKey': '1057',
											// 'valText': "El Salvador",
									// },
									// {
											// 'valKey': '1058',
											// 'valText': "Equatorial Guinea",
									// },
									// {
											// 'valKey': '1059',
											// 'valText': "Eritrea",
									// },
									// {
											// 'valKey': '1060',
											// 'valText': "Estonia",
									// },
									// {
											// 'valKey': '1061',
											// 'valText': "Ethiopia",
									// },
									// {
											// 'valKey': '1062',
											// 'valText': "Falkland Islands",
									// },
									// {
											// 'valKey': '1063',
											// 'valText': "Faroe Islands",
									// },
									// {
											// 'valKey': '1064',
											// 'valText': "Fiji",
									// },
									// {
											// 'valKey': '1065',
											// 'valText': "Finland",
									// },
									// {
											// 'valKey': '1066',
											// 'valText': "France",
									// },
									// {
											// 'valKey': '1067',
											// 'valText': "French Polynesia",
									// },
									// {
											// 'valKey': '1068',
											// 'valText': "French West Indies",
									// },
									// {
											// 'valKey': '1069',
											// 'valText': "Gabon",
									// },
									// {
											// 'valKey': '1070',
											// 'valText': "Gambia",
									// },
									// {
											// 'valKey': '1071',
											// 'valText': "Georgia",
									// },
									// {
											// 'valKey': '1072',
											// 'valText': "Germany",
									// },
									// {
											// 'valKey': '1073',
											// 'valText': "Ghana",
									// },
									// {
											// 'valKey': '1074',
											// 'valText': "Gibraltar",
									// },
									// {
											// 'valKey': '1075',
											// 'valText': "Greece",
									// },
									// {
											// 'valKey': '1076',
											// 'valText': "Greenland",
									// },
									// {
											// 'valKey': '1077',
											// 'valText': "Grenada",
									// },
									// {
											// 'valKey': '1078',
											// 'valText': "Guam",
									// },
									// {
											// 'valKey': '1079',
											// 'valText': "Guatemala",
									// },
									// {
											// 'valKey': '1080',
											// 'valText': "Guernsey",
									// },
									// {
											// 'valKey': '1081',
											// 'valText': "Guinea",
									// },
									// {
											// 'valKey': '1082',
											// 'valText': "Guinea Bissau",
									// },
									// {
											// 'valKey': '1083',
											// 'valText': "Guyana",
									// },
									// {
											// 'valKey': '1084',
											// 'valText': "Haiti",
									// },
									// {
											// 'valKey': '1085',
											// 'valText': "Honduras",
									// },
									// {
											// 'valKey': '1086',
											// 'valText': "Hong Kong",
									// },
									// {
											// 'valKey': '1087',
											// 'valText': "Hungary",
									// },
									// {
											// 'valKey': '1088',
											// 'valText': "Iceland",
									// },
									// {
											// 'valKey': '1089',
											// 'valText': "India",
									// },
									// {
											// 'valKey': '1090',
											// 'valText': "Indonesia",
									// },
									// {
											// 'valKey': '1091',
											// 'valText': "Iran",
									// },
									// {
											// 'valKey': '1092',
											// 'valText': "Iraq",
									// },
									// {
											// 'valKey': '1093',
											// 'valText': "Ireland",
									// },
									// {
											// 'valKey': '1094',
											// 'valText': "Isle of Man",
									// },
									// {
											// 'valKey': '1095',
											// 'valText': "Israel",
									// },
									// {
											// 'valKey': '1096',
											// 'valText': "Italy",
									// },
									// {
											// 'valKey': '1097',
											// 'valText': "Jamaica",
									// },
									// {
											// 'valKey': '1098',
											// 'valText': "Japan",
									// },
									// {
											// 'valKey': '1099',
											// 'valText': "Jersey",
									// },
									// {
											// 'valKey': '1100',
											// 'valText': "Jordan",
									// },
									// {
											// 'valKey': '1101',
											// 'valText': "Kazakhstan",
									// },
									// {
											// 'valKey': '1102',
											// 'valText': "Kenya",
									// },
									// {
											// 'valKey': '1103',
											// 'valText': "Kiribati",
									// },
									// {
											// 'valKey': '1104',
											// 'valText': "Kosovo",
									// },
									// {
											// 'valKey': '1105',
											// 'valText': "Kuwait",
									// },
									// {
											// 'valKey': '1106',
											// 'valText': "Kyrgyzstan",
									// },
									// {
											// 'valKey': '1107',
											// 'valText': "Laos",
									// },
									// {
											// 'valKey': '1108',
											// 'valText': "Latvia",
									// },
									// {
											// 'valKey': '1109',
											// 'valText': "Lebanon",
									// },
									// {
											// 'valKey': '1110',
											// 'valText': "Lesotho",
									// },
									// {
											// 'valKey': '1111',
											// 'valText': "Liberia",
									// },
									// {
											// 'valKey': '1112',
											// 'valText': "Libya",
									// },
									// {
											// 'valKey': '1113',
											// 'valText': "Liechtenstein",
									// },
									// {
											// 'valKey': '1114',
											// 'valText': "Lithuania",
									// },
									// {
											// 'valKey': '1115',
											// 'valText': "Luxembourg",
									// },
									// {
											// 'valKey': '1116',
											// 'valText': "Macau",
									// },
									// {
											// 'valKey': '1117',
											// 'valText': "Macedonia",
									// },
									// {
											// 'valKey': '1118',
											// 'valText': "Madagascar",
									// },
									// {
											// 'valKey': '1119',
											// 'valText': "Malawi",
									// },
									// {
											// 'valKey': '1120',
											// 'valText': "Malaysia",
									// },
									// {
											// 'valKey': '1121',
											// 'valText': "Maldives",
									// },
									// {
											// 'valKey': '1122',
											// 'valText': "Mali",
									// },
									// {
											// 'valKey': '1123',
											// 'valText': "Malta",
									// },
									// {
											// 'valKey': '1124',
											// 'valText': "Marshall Islands",
									// },
									// {
											// 'valKey': '1125',
											// 'valText': "Mauritania",
									// },
									// {
											// 'valKey': '1126',
											// 'valText': "Mauritius",
									// },
									// {
											// 'valKey': '1127',
											// 'valText': "Mexico",
									// },
									// {
											// 'valKey': '1128',
											// 'valText': "Micronesia",
									// },
									// {
											// 'valKey': '1129',
											// 'valText': "Moldova",
									// },
									// {
											// 'valKey': '1130',
											// 'valText': "Monaco",
									// },
									// {
											// 'valKey': '1131',
											// 'valText': "Mongolia",
									// },
									// {
											// 'valKey': '1132',
											// 'valText': "Montenegro",

									// },
									// {
											// 'valKey': '1133',
											// 'valText': "Montserrat",
									// },
									// {
											// 'valKey': '1134',
											// 'valText': "Morocco",
									// },
									// {
											// 'valKey': '1135',
											// 'valText': "Mozambique",
									// },
									// {
											// 'valKey': '1136',
											// 'valText': "Myanmar",
									// },
									// {
											// 'valKey': '1137',
											// 'valText': "Namibia",
									// },
									// {
											// 'valKey': '1138',
											// 'valText': "Nauro",
									// },
									// {
											// 'valKey': '1139',
											// 'valText': "Nepal",
									// },
									// {
											// 'valKey': '1140',
											// 'valText': "Netherlands",
									// },
									// {
											// 'valKey': '1141',
											// 'valText': "Netherlands Antilles",
									// },
									// {
											// 'valKey': '1142',
											// 'valText': "New Caledonia",
									// },
									// {
											// 'valKey': '1143',
											// 'valText': "New Zealand",
									// },
									// {
											// 'valKey': '1144',
											// 'valText': "Nicaragua",
									// },
									// {
											// 'valKey': '1145',
											// 'valText': "Niger",
									// },
									// {
											// 'valKey': '1146',
											// 'valText': "Nigeria",
									// },
									// {
											// 'valKey': '1147',
											// 'valText': "North Korea",
									// },
									// {
											// 'valKey': '1148',
											// 'valText': "Norway",
									// },
									// {
											// 'valKey': '1149',
											// 'valText': "Oman",
									// },
									// {
											// 'valKey': '1150',
											// 'valText': "Pakistan",
									// },
									// {
											// 'valKey': '1151',
											// 'valText': "Palau",
									// },
									// {
											// 'valKey': '1152',
											// 'valText': "Palestine",
									// },
									// {
											// 'valKey': '1153',
											// 'valText': "Panama",
									// },
									// {
											// 'valKey': '1154',
											// 'valText': "Papua New Guinea",
									// },
									// {
											// 'valKey': '1155',
											// 'valText': "Paraguay",
									// },
									// {
											// 'valKey': '1156',
											// 'valText': "Peru",
									// },
									// {
											// 'valKey': '1157',
											// 'valText': "Philippines",
									// },
									// {
											// 'valKey': '1158',
											// 'valText': "Poland",
									// },
									// {
											// 'valKey': '1159',
											// 'valText': "Portugal",
									// },
									// {
											// 'valKey': '1160',
											// 'valText': "Puerto Rico",
									// },
									// {
											// 'valKey': '1161',
											// 'valText': "Qatar",
									// },
									// {
											// 'valKey': '1162',
											// 'valText': "Reunion",
									// },
									// {
											// 'valKey': '1163',
											// 'valText': "Romania",
									// },
									// {
											// 'valKey': '1164',
											// 'valText': "Russia",
									// },
									// {
											// 'valKey': '1165',
											// 'valText': "Rwanda",
									// },
									// {
											// 'valKey': '1166',
											// 'valText': "Saint Pierre & Miquelon",
									// },
									// {
											// 'valKey': '1167',
											// 'valText': "Samoa",
									// },
									// {
											// 'valKey': '1168',
											// 'valText': "San Marino",
									// },
									// {
											// 'valKey': '1169',
											// 'valText': "Sao Tome and Principe",
									// },
									// {
											// 'valKey': '1170',
											// 'valText': "Saudi Arabia",
									// },
									// {
											// 'valKey': '1171',
											// 'valText': "Senegal",
									// },
									// {
											// 'valKey': '1172',
											// 'valText': "Serbia",
									// },
									// {
											// 'valKey': '1173',
											// 'valText': "Seychelles",
									// },
									// {
											// 'valKey': '1174',
											// 'valText': "Sierra Leone",	
									// },
									// {
										// 'valKey': '1175',
										// 'valText': 	"Singapore",
									// },
									// {
											// 'valKey': '1176',
											// 'valText': "Slovakia",
									// },
									// {
											// 'valKey': '1177',
											// 'valText': "Slovenia",
									// },
									// {
											// 'valKey': '1178',
											// 'valText': "Solomon Islands",
									// },
									// {
											// 'valKey': '1179',
											// 'valText': "Somalia",
									// },
									// {
											// 'valKey': '1180',
											// 'valText': "South Africa",
									// },
									// {
											// 'valKey': '1181',
											// 'valText': "South Korea",
									// },
									// {
											// 'valKey': '1182',
											// 'valText': "South Sudan",
									// },
									// {
											// 'valKey': '1183',
											// 'valText': "Spain",
									// },
									// {
											// 'valKey': '1184',
											// 'valText': "Sri Lanka",
									// },
									// {
											// 'valKey': '1185',
											// 'valText': "St Kitts & Nevis",
									// },
									// {
											// 'valKey': '1186',
											// 'valText': "St Lucia",
									// },
									// {
											// 'valKey': '1187',
											// 'valText': "St Vincent",
									// },
									// {
											// 'valKey': '1188',
											// 'valText': "Sudan",
									// },
									// {
											// 'valKey': '1189',
											// 'valText': "Suriname",
									// },
									// {
											// 'valKey': '1190',
											// 'valText': "Swaziland",
									// },
									// {
											// 'valKey': '1191',
											// 'valText': "Sweden",
									// },
									// {
											// 'valKey': '1192',
											// 'valText': "Switzerland",
									// },
									// {
											// 'valKey': '1193',
											// 'valText': "Syria",
									// },
									// {
											// 'valKey': '1194',
											// 'valText': "Taiwan",
									// },
									// {
											// 'valKey': '1195',
											// 'valText': "Tajikistan",
									// },
									// {
											// 'valKey': '1196',
											// 'valText': "Tanzania",
									// },
									// {
											// 'valKey': '1197',
											// 'valText': "Thailand",
									// },
									// {
											// 'valKey': '1198',
											// 'valText': "Timor L'Este",
									// },
									// {
											// 'valKey': '1199',
											// 'valText': "Togo",
									// },
									// {
											// 'valKey': '1200',
											// 'valText': "Tonga",
									// },
									// {
											// 'valKey': '1201',
											// 'valText': "Trinidad & Tobago",
									// },
									// {
											// 'valKey': '1202',
											// 'valText': "Tunisia",
									// },
									// {
											// 'valKey': '1203',
											// 'valText': "Turkey",
									// },
									// {
											// 'valKey': '1204',
											// 'valText': "Turkmenistan",
									// },
									// {
											// 'valKey': '1205',
											// 'valText': "Turks & Caicos",
									// },
									// {
											// 'valKey': '1206',
											// 'valText': "Tuvalu",
									// },
									// {
											// 'valKey': '1207',
											// 'valText': "Uganda",
									// },
									// {
											// 'valKey': '1208',
											// 'valText': "Ukraine",
									// },
									// {
											// 'valKey': '1209',
											// 'valText': "United Arab Emirates",
									// },
									// {
											// 'valKey': '1210',
											// 'valText': "United Kingdom",
									// },
									// {
											// 'valKey': '1211',
											// 'valText': "United States of America",
									// },
									// {
											// 'valKey': '1212',
											// 'valText': "Uruguay",
									// },
									// {
											// 'valKey': '1213',
											// 'valText': "Uzbekistan",
									// },
									// {
											// 'valKey': '1214',
											// 'valText': "Vanuatu",
									// },
									// {
											// 'valKey': '1215',
											// 'valText': "Vatican City",
									// },
									// {
											// 'valKey': '1216',
											// 'valText': "Venezuela",
									// },
									// {
											// 'valKey': '1217',
											// 'valText': "Vietnam",
									// },
									// {
											// 'valKey': '1218',
											// 'valText': "Virgin Islands (US)",
									// },
									// {
											// 'valKey': '1219',
											// 'valText': "Yemen",
									// },
									// {
											// 'valKey': '1220',
											// 'valText': "Zambia",
									// },
									// {
											// 'valKey': '1221',
											// 'valText': "Zimbabwe"
									// }
								// ];

			// console.log(countriesObj);
			/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
			// autocomplete(document.getElementById("myInput"), countries);

			// autocompleteObj(document.getElementById("myInput"), document.getElementById("myInputID"), countriesObj);
			
			
			
		</script>

	</body>
</html>
