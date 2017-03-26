// cogFace
// Using cognitive Face API service for verifing face in JavaScript

var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";

// Get FaceID Using Cognivite API Service
function getFaceId(imgName) {
	var imgPath = "http://jinheon.azurewebsites.net/VerifyFace/image/"+ imgName;

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
	var faceListId = "msptest";

	$(function() {
		var params = {
			// Request parameters
		};

		$.ajax({
			url: "https://westus.api.cognitive.microsoft.com/face/v1.0/findsimilars?" + $.param(params),
			beforeSend: function(xhrObj){
				// Request headers
				xhrObj.setRequestHeader("Content-Type","application/json");
				xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key",subscriptionKey);
			},
			type: "POST",
			// Request body
			data: "{" +
				"\"faceID\":" + faceId + "," +
				"\"faceListID\":\"" + faceListId + "\"," +
				"\"maxNumOfCandidatesReturned\":" + 10 + "," +
				"\"mode\":\"matchPerson\"" +
			"}",
		})
		.done(function(data) {
			document.getElementById('resultInfo').innerHTML += JSON.stringify(data) + '<br>';
		})
		.fail(function() {
			alert("error");
		});
	});
}
/*
window.onload = function() 
{
	function getFaceList() {
		var faceListId = "msptest";

		$(function() {
			var params = {
				// Request parameters
			};

			$.ajax({
				url: "https://westus.api.cognitive.microsoft.com/face/v1.0/facelists/" + faceListId + "?" + $.param(params),
				beforeSend: function(xhrObj){
					// Request headers
					xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
				},
				type: "GET",
				// Request body
				data: "{body}",
			})
			.done(function(data) {
				document.getElementById('resultInfo').innerHTML += 'getFaceList' + '<br>' + JSON.stringify(data) + '<br>';
			})
			.fail(function() {
				alert("error");
			});
		});
	}
}
*/