// cogFace
// Using cognitive Face API service for verifing face in JavaScript

// Get FaceID Using Cognivite API Service
function getFaceId(imgName) {
	var faceId;
	var imgPath = "http://jinheon.azurewebsites.net/VerifyPerson/"+ imgName;
	var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";

	$(function() {
		var params = {
			// Request parameters
			"returnFaceId": "true",
			"returnFaceLandmarks": "false",
			//"returnFaceAttributes": "{string}",
		};
		$.ajax( {
			url: "https://westus.api.cognitive.microsoft.com/face/v1.0/detect?" + $.param(params),
			beforeSend: function(xhrObj){
				// Request headers
				xhrObj.setRequestHeader("Content-Type","application/json");
				xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key",subscriptionKey);
			},
			type: "POST",
			async: false,
			// Request body
			data: "{" + 
				"\"url\":\"" + imgPath + 
			"\"}"
		})
		.done(function(data) {
			var str = JSON.stringify(data);
			faceId = str.split(":").toString().split(",");
		})
		.fail(function() {
			alert("error");
		});
	});

	return faceId[1];
}

function verifyFace(faceId) {
	var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";
	var personId = "5ece03f4-925b-4e2e-917d-3a47911fdb3a"
	var personGroupId = "test"

	$(function() {
		var params = {
			// Request parameters
		};

		$.ajax({
			url: "https://westus.api.cognitive.microsoft.com/face/v1.0/verify?" + $.param(params),
			beforeSend: function(xhrObj){
				// Request headers
				xhrObj.setRequestHeader("Content-Type","application/json");
				xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key",subscriptionKey);
			},
			type: "POST",
			// Request body
			data: "{"+
				"\"faceId\":"+faceId+","+
				"\"personId\":\""+personId+"\","+
				"\"personGroupId\":\""+personGroupId+
			"\"}"
		})
		.done(function(data) {
			document.getElementById('resultInfo').innerHTML += JSON.stringify(data) + '<br>';
		})
		.fail(function() {
			alert("error");
		});
	});
}