// Taking snapshot and showing image in div block

function takeSnapshot() {
	// console.log("takeSnapshot inside");
	Webcam.snap(
		function(data_uri) {
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			var usrName = document.getElementById('username').value;
			var imgName = usrName + '.jpg';

			// Show snapshot image source code : img src = data_uri ('<img src="'+data_uri+'"/>')

			// Upload snapshot image on server for jpeg format

			$(function() {
				var formData = new FormData();
				formData.append('mydata', raw_image_data);
				formData.append('imgname', imgName);

				$.ajax( {
					url: '/cushy/assets/js/webcamEnroll/upload.php',
					data: formData,
					async: false,
					processData: false,
					contentType: false,
					type: 'POST',
					success: function(data) {
						//Enroll face in Cognitive API
						console.log("로컬 서버에 이미지 저장 완료");
						addFace(usrName);
					}
				}); 
			}); 				
		}
	);

	return false;
}