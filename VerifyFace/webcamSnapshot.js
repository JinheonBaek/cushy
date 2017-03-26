// webcamSnapshot
// Webcam snapshot library using webcam.js in JavaScript 

//Taking snapshot and showing image in div block
function takeSnapshot() {
	//Hide snapshot_button
	$("#snapshotButton").hide();

	Webcam.snap(
		function(data_uri) {
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			var time = new Date();
			var imgName = time.getTime();
			imgName += '.jpg'

			//Show snapshot image source code : img src = data_uri ('<img src="'+data_uri+'"/>')

			//Show snapshot image in div block
			document.getElementById('resultInfo').innerHTML = '서버에 데이터를 저장중입니다.' + '<br>';

			//Save raw_image_data in mydata value
			document.getElementById('mydata').value = raw_image_data;

			document.getElementById('imgName').value = imgName;

			//Upload snapshot image on server for jpeg format
			$(function() {
				var formData = new FormData();
				formData.append('mydata', $('input[name=mydata]').val());
				formData.append('imgName', $('input[name=imgName]').val());

				$.ajax( {
					url: 'upload.php',
					data: formData,
					processData: false,
					contentType: false,
					type: 'POST',
					success: function(data) {
						document.getElementById('resultInfo').innerHTML += '서버에 데이터 저장이 완료되었습니다.' + '<br>';

						//Get faceID using Cognitive API & Verify face using Cognitive API
						verifyFace(getFaceId(imgName));
						document.getElementById('resultInfo').innerHTML += '얼굴 식별이 완료되었습니다.' + '<br>';

						//Show snapshot_button
						$("#snapshotButton").show();
						video.play();
					}
				}); 
			}); 				
		}
	);
}