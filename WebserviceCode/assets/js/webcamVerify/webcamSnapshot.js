// webcamSnapshot
// Webcam snapshot library using webcam.js in JavaScript 

// Taking snapshot and showing image in div block
function takeSnapshot() {
	Webcam.snap(
		function(data_uri) {
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			var time = new Date();
			var imgName = time.getTime();
			imgName += '.jpg'

			//Save raw_image_data in mydata value
			document.getElementById('imgName').value = imgName;
			document.getElementById('mydata').value = raw_image_data;

			$(function() {
				var formData = new FormData();
				formData.append('mydata', $('input[name=mydata]').val());
				formData.append('imgName', $('input[name=imgName]').val());

				$.ajax( {
					url: 'assets/js/webcamVerify/upload.php',
					data: formData,
					processData: false,
					contentType: false,
					type: 'POST',
					success: function(data) {
						console.log("로컬 서버에 이미지 업로드 성공");
						getFaceId(imgName);
					}
				}); 
			}); 				
		}
	);

	return false;
}