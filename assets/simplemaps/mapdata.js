// function getData(negeri){
// 	const wilayah = [];
// 	fetch("../../warga/Dashboard/peta_sebaran")
// 		.then((response) => response.json())
// 		.then((returnedData) => {
// 			// const innerArr = Object.values(returnedData);
// 			// wilayah.push(...innerArr);
// 			// console.log(wilayah[0][negeri]);
// 			wilayah = returnedData[0][negeri]
// 			return returnedData[0][negeri]
// 		});
// 	return wilayah
// }
// getData = async () => {
// 	const settings = {
// 		method: "POST",
// 		headers: {
// 			Accept: "application/json",
// 			"Content-Type": "application/json",
// 		},
// 	};
// 	try {
// 		const fetchResponse = await fetch(
// 			`../../warga/Dashboard/peta_sebaran`,
// 			settings
// 		);
// 		const data = await fetchResponse.json();
// 		return data;
// 	} catch (e) {
// 		return e;
// 	}
// };
// let myValue;
// let data = getData().then((response) => {
// 	return response;
// });
// console.log(getData);

// let myValue;
// function currentloginid() {
// 	return fetch('../../warga/Dashboard/peta_sebaran', {
//       method: 'GET',
//     })
//     .then(function(response) {
//       return response.json();
//     })
//     .then(function(data) {
//     //   var data = JSON.parse(data);
//     //   console.log(data);
//       myValue = data
//       return data;
//     })
// }

// currentloginid();
// console.log(myValue);

// const xhr = new XMLHttpRequest();
// xhr.open("GET", "../../warga/Dashboard/peta_sebaran");
// xhr.send();
// xhr.responseType = "json";
// xhr.onload = () => {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     const data = xhr.response;
//     console.log(data);
//   } else {
//     console.log(`Error: ${xhr.status}`);
//   }
// };

// let requestValue;

// const xhr = new XMLHttpRequest();

// xhr.onreadystatechange = function() {
//   if (this.readyState === 4 && this.status === 200) {
//     requestValue = this.responseText;
// 	console.log(requestValue);
//     // do something with requestValue here
//   }
// };

// xhr.open("GET", "../../warga/Dashboard/peta_sebaran");
// xhr.send();

// const inputElement = document.getElementById("wilayah");
// const value = inputElement.value;
// console.log(value);

// const myObject = '<?php echo json_encode($myObject); ?>';
// const jsonString = JSON.stringify(myObject);
// console.log(jsonString);

// // Sample JSON-encoded stdClass Object
// const inputElement = document.getElementById("wilayah");
// const stdObject = inputElement.value.replace('stdClass Object', '');

// // Parse the JSON-encoded stdClass Object into a JavaScript object
// const jsonObject = JSON.parse(stdObject);

// // Convert the JavaScript object to an array of key-value pairs
// const entriesArray = Object.entries(jsonObject);

// // Convert the JavaScript object to an array of keys only
// const keysArray = Object.keys(jsonObject);

// console.log(entriesArray);
// console.log(keysArray);

// Parse the JSON string to get the JavaScript object
const inputElement = document.getElementById("wilayah");
const value = inputElement.value
	.replace("stdClass Object", "")
	.replaceAll("\n", "")
	.replaceAll(" ", "")
	.replaceAll("[", '","')
	.replaceAll("]", '"')
	.replace("(", "[{")
	.replace(")", "}]")
	.replaceAll("=>", ':"')
	.replace('"', "")
	.replace(",", "")
	.replace(new RegExp("}"), '"}');
const jsObject = JSON.parse(value);

var simplemaps_countrymap_mapdata = {
	main_settings: {
		//General settings
		width: "responsive", //'700' or 'responsive'
		background_color: "#FFFFFF",
		background_transparent: "yes",
		border_color: "#ffffff",

		//State defaults
		state_description: "State description",
		state_color: "#88A4BC",
		state_hover_color: "#3B729F",
		state_url: "",
		border_size: 1.5,
		all_states_inactive: "no",
		all_states_zoomable: "yes",

		//Location defaults
		location_description: "Location description",
		location_url: "",
		location_color: "#FF0067",
		location_opacity: 0.8,
		location_hover_opacity: 1,
		location_size: 25,
		location_type: "square",
		location_image_source: "frog.png",
		location_border_color: "#FFFFFF",
		location_border: 2,
		location_hover_border: 2.5,
		all_locations_inactive: "no",
		all_locations_hidden: "no",

		//Label defaults
		label_color: "#d5ddec",
		label_hover_color: "#d5ddec",
		label_size: 22,
		label_font: "Arial",
		hide_labels: "no",
		hide_eastern_labels: "no",

		//Zoom settings
		zoom: "yes",
		manual_zoom: "yes",
		back_image: "no",
		initial_back: "no",
		initial_zoom: "-1",
		initial_zoom_solo: "no",
		region_opacity: 1,
		region_hover_opacity: 0.6,
		zoom_out_incrementally: "yes",
		zoom_percentage: 0.99,
		zoom_time: 0.5,

		//Popup settings
		popup_color: "white",
		popup_opacity: 0.9,
		popup_shadow: 1,
		popup_corners: 5,
		popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
		popup_nocss: "no",

		//Advanced settings
		div: "map",
		auto_load: "yes",
		url_new_tab: "no",
		images_directory: "default",
		fade_time: 0.1,
		link_text: "View Website",
		popups: "detect",
		state_image_url: "",
		state_image_position: "",
		location_image_url: "",
	},
	state_specific: {
		MYS1137: {
			name: "Perak",
			description: jsObject[0].perak+" Data",
		},
		MYS1139: {
			name: "Pulau Pinang",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1140: {
			name: "Kedah",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1141: {
			name: "Perlis",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1143: {
			name: "Johor",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1144: {
			name: "Kelantan",
			description: jsObject[0].kelantan+" Data",
		},
		MYS1145: {
			name: "Melaka",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1146: {
			name: "Negeri Sembilan",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1147: {
			name: "Pahang",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1148: {
			name: "Selangor",
			description: jsObject[0].selangor+" Data",
		},
		MYS1149: {
			name: "Terengganu",
			description: jsObject[0].terengganu+" Data",
		},
		MYS1186: {
			name: "Sabah",
			inactive: "yes",
			color: "#23425d",
		},
		MYS1187: {
			name: "Sarawak",
			inactive: "yes",
			color: "#23425d",
		},
		MYS4831: {
			name: "Kuala Lumpur",
			description: jsObject[0].kuala_lumpur+" Data",
		},
		MYS4832: {
			name: "Putrajaya",
			description: jsObject[0].putrajaya+" Data",
		},
		MYS4833: {
			name: "Labuan",
			inactive: "yes",
			color: "#23425d",
		},
	},
	locations: {},
	labels: {},
	legend: {
		entries: [],
	},
	regions: {},
	data: {
		data: {},
	},
};
