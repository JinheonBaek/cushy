// cogEnrollFace

function addFace(usrName) {
	// console.log("userName");
	var faceListId = "msptest"
	var subscriptionKey = "be21b202637c4e3cb83805831126b21f";
	var imgPath = "https://cushines.xyz/face/EnrollFace/image/" + usrName + '.jpg';

	$(function() {
		var params = {
			// Request parameters
			"userData": usrName
			//"targetFace": "{string}",
		};

		$.ajax({
			url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/facelists/" + faceListId + "/persistedFaces?" + $.param(params),
			beforeSend: function(xhrObj){
				// Request headers
				xhrObj.setRequestHeader("Content-Type","application/json");
				xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
			},
			type: "POST",
			async: false,
			// Request body
			data: "{" +
				"\"url\":\"" + imgPath +
			"\"}",
		})

		.done(function(data) {
            console.log("이미지 등록 성공");
			alert("사용자 등록이 정상적으로 완료되었습니다.")
		})

		.fail(function() {
			console.log("이미지 등록 중 에러 발생");
		});
	});

    var video = document.getElementById('video');
	video.play();
}