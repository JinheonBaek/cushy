// cogFace
// Using cognitive Face API service for verifing face in JavaScript

var subscriptionKey = "954a1ea97e6e4b1082fa95c2b8cede52";
var faceList = getFaceList();

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
			async: false,
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

			for (x = 0; x < faceList.length; x++) {
				if (data[0].persistedFaceId == faceList[x].persistedFaceId) {
					document.getElementById('resultInfo').innerHTML += '<br>' + 'User Name' + '<br>' + faceList[x].userData + '<br>';
				}
			}

			uploadData();

		})
		.fail(function() {
			alert("error");
		});
	});
}

function uploadData(){
	var time = new Date();
	var fileName = time.getTime();
	fileName += '.txt'
	var formData = new FormData();
	data = document.getElementById("resultInfo").innerHTML;
    formData.append("fileObj", data);
	formData.append("fileName", fileName);
 
    $.ajax({
        url: 'uploadData.php',
        processData: false,
        contentType: false,
    	data: formData,
        type: 'POST',
        success: function(result){
			
        }
    });
}

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
			document.getElementById('resultInfo').innerHTML += '<br>' + 'Cognitive API Server에서 FaceList 불러오기를 완료했습니다.' + '<br>' + '[FaceList]' + '<br>';

			faceList = data['persistedFaces'];

			for (x=0; x < faceList.length; x++) {
				document.getElementById('resultInfo').innerHTML += faceList[x].persistedFaceId;
				document.getElementById('resultInfo').innerHTML += faceList[x].userData + '<br>';
			}

			/*
			for (x in data) {
				document.getElementById("resultInfo").innerHTML += x + " " + JSON.stringify(data[x]) + "<br>";
				document.getElementById("resultInfo").innerHTML += x + " " + data[x][0].persistedFaceId + "<br>";
			}
			*/
		})
		.fail(function() {
			alert("error");
		});
	});

	return faceList;
}