var subscriptionKey = "d7d5a8e81dc0401bb9d325b04dfe3eec";
var faceList = getFaceList();
var image = "";
var face = "";
var index = 0;

// Get FaceID Using Cognivite API Service
function getFaceId(imgName) {
	var imgPath = "https://cushines.xyz/face/VerifyFace/image/" + imgName;

	$(function() {
		var params = {
			// Request parameters
			"returnFaceId": "true",
			"returnFaceLandmarks": "false",
			//"returnFaceAttributes": "{string}",
		};

		$.ajax( {
			url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect?" + $.param(params),
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
			image = imgName;
			face = faceId[1];
			console.log(imgName + " : getFaceId 성공");
			verifyFace(face);
		})
		.fail(function(data) {
			console.log("getFaceId 실패");
			console.log(data);
		});
	});
}

function verifyFace(faceId) {
	var faceListId = "msptest";

	$(function() {
		var params = {
			// Request parameters
		};

		$.ajax({
			url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/findsimilars?" + $.param(params),
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
				"\"maxNumOfCandidatesReturned\":" + 5 + "," +
				"\"mode\":\"matchPerson\"" +
			"}",
		})
		.done(function(data) {
			for (x = 0; x < faceList.length; x++) {
				if (data[0].persistedFaceId == faceList[x].persistedFaceId) {
					// console.log("verifyFace 성공");
					// console.log("Name : " + faceList[x].userData);
					document.getElementById('name').innerHTML = faceList[x].userData;
					// console.log("Confidence : " + data[0]['confidence']);
					document.getElementById('face').src = "https://cushines.xyz/face/EnrollFace/image/"+ faceList[x].userData +".jpg";
					document.getElementById('verify').innerHTML = "확인";

					var tables = document.getElementById('datatables').getElementsByTagName('tbody')[0];
					var row = tables.insertRow(tables.rows.length);
					var cell = row.insertCell(0);
					var text = document.createTextNode(index.toString());
					index++;
					cell.appendChild(text);

					var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    cell3.appendChild(document.createTextNode("확인"));

                    var cell4 = row.insertCell(3);
                    cell4.appendChild(document.createTextNode("유재욱"));

                    var cell5 = row.insertCell(4);
                    cell5.appendChild(document.createTextNode("학습"));

                    var cell6 = row.insertCell(5);

                    var cell7 = row.insertCell(6);
                    cell7.appendChild(document.createTextNode(faceList[x].userData));

                    var cell7 = row.insertCell(7);
                    var cell7 = row.insertCell(8);
                    var cell7 = row.insertCell(9);
				}
			}

			video.play();

		})
		.fail(function(data) {
			console.log("verify 실패");
		});
	});
}

function getFaceList() {
	var faceListId = "msptest";

	$(function() {
		var params = {
			// Request parameters
		};

		$.ajax({
			url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/" + faceListId + "?" + $.param(params),
			beforeSend: function(xhrObj){
				// Request headers
			xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
			},
			type: "GET",
			// Request body
			data: "{body}",
		})
		.done(function(data) {
			console.log("getFaceList 성공");

			faceList = data['persistedFaces'];
		})
		.fail(function(data) {
			console.log("getFaceList 성공")
		});
	});

	return faceList;
}