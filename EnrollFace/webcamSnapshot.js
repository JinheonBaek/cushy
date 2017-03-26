// webcamSnapshot
// Webcam snapshot library using webcam.js in JavaScript 

//Taking snapshot and showing image in div block
function takeSnapshot() {
	//Hide snapshot_button
	$("#snapshotButton").hide();

	Webcam.snap(
		function(data_uri) {
			var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
			var usrname = document.getElementById('usrname').value;
			var imgName = usrname + '.jpg';

			//Show snapshot image source code : img src = data_uri ('<img src="'+data_uri+'"/>')

			//Show snapshot image in div block
			document.getElementById('resultInfo').innerHTML = '서버에 데이터를 저장중입니다.' + '<br>';

			//Save raw_image_data in mydata value
			document.getElementById('mydata').value = raw_image_data;

			document.getElementById('imgname').value = imgName;

			//Upload snapshot image on server for jpeg format
			$(function() {
				var formData = new FormData();
				formData.append('mydata', $('input[name=mydata]').val());
				formData.append('imgname', $('input[name=imgname]').val());

				$.ajax( {
					url: 'upload.php',
					data: formData,
					processData: false,
					contentType: false,
					type: 'POST',
					success: function(data) {
						document.getElementById('resultInfo').innerHTML += '서버에 데이터 저장이 완료되었습니다.' + '<br>';

						//Enroll face in Cognitie API
						addFace(usrName);

						//Show snapshot_button
						$("#snapshotButton").show();
						video.play();
					}
				}); 
			}); 				
		}
	);
}