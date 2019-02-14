            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <!-- Import webcam javascript -->
            <script type="text/javascript" src="assets/js/webcamEnroll/webcam.min.js"></script>
            <!-- Import webcamSnapshot javascript -->
            <!-- Import track javascript -->
            <script src="assets/js/webcamEnroll/build/tracking-min.js"></script>
            <!-- Import Object tracker javascript -->
            <script src="assets/js/webcamEnroll/build/data/face-min.js"></script>
            <!-- Import cognitive Face API service library for enroll face in JavaScript -->
            <script type="text/javascript" src="assets/js/webcamVerify/cogFace.js"></script>
            <script type="text/javascript" src="assets/js/webcamVerify/webcamSnapshot.js"></script>


            <style>
                video, canvas {
                	/* Overlap video and canvas at same place */
                	position: absolute;
                }
            </style>

            <script language="JavaScript">

            window.onload = function() {
                    var video = document.getElementById('video');
                    var canvas = document.getElementById('canvas');
                    var context = canvas.getContext('2d');

                                    Webcam.set({
                                        width: 500,
                                        height: 450,
                                        image_format: 'jpeg',
                                        jpeg_quality: 100
                                    });
                                    Webcam.attach('#video');

                    var tracker = new tracking.ObjectTracker('face');
                    tracker.setInitialScale(4);
                    tracker.setStepSize(2);
                    tracker.setEdgesDensity(0.1);

                    context.strokeStyle = '#a64ceb';
                    context.font = '11px Helvetica';
                    context.fillStyle = "#fff";

                    tracking.track('#video', tracker, {camera: true});

                    tracker.on('track', function (event) {
                        context.clearRect(0, 0, canvas.width, canvas.height);

                        if (event.data.length === 0) {

                        }

                        else {
                            event.data.forEach(function (rect) {
                                context.strokeRect(rect.x, rect.y, rect.width, rect.height);
                                context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
                                context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
                            });
                        }
                    });
                };

                // Take Snapshot
                function snapshot() {
                    video.pause();

                    takeSnapshot();
                }
            </script>

            <br><br><br>

            <div class="card-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">school</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">동요 합창 수업 </h4>
                                        <div class="col-md-7">
                                           <div class="frame">
                                           	<!-- Show webcam video -->
                                           	<video id="video" width="500" height="450" preload autoplay loop muted></video>
                                           	<!-- Make canvas for tracking face -->
                                           	<canvas id="canvas" width="500" height="450"></canvas>
                                           </div>
                                           
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="blue">
                                                    <i class="material-icons">person</i>
                                                </div>
                                                <div class="card-content">
                                                    <h4 class="card-title">출석인원</h4>
                                                        <span style="font-size:20pt;" id='count'>0 </span>
                                                        <span style="font-size:20pt;" id='totcount'>/ 30 </span>

                                                    <div id="snapshotButton">
                                                    		<form id="myform">
                                                    		    <input id="mydata" type="hidden" name="mydata" value="">
                                                    			<input id="imgName" type="hidden" name="imgName" value="">
                                                    			<input type=button id="button" value="Take Snapshot" onClick="snapshot()">
                                                    		</form>
                                                    	</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header card-header-icon" data-background-color="blue">
                                                    <i class="material-icons">face</i>
                                                </div>
                                                <div class="card-content">
                                                    <h4 class="card-title">인식결과 확인창</h4>
                                                       <div class="col-md-6">
                                                         <img id ='face' src="https://via.placeholder.com/200x200">
                                                       </div>
                                                       <div class="col-md-6">
                                                          <span style="font-size:15pt;">이름 : </span>
                                                          <span style="font-size:15pt;" id = 'name'></span> <br><br>
                                                          <span style="font-size:15pt;">프로그램 : </span>
                                                          <span style="font-size:15pt;" id = 'program'></span><br><br>
                                                          <span style="font-size:15pt;">출석확인 : </span>
                                                          <span style="font-size:15pt;" id = 'verify'></span>
                                            </div>
    </div>
                                        </div>

                                       
                                </div>
                            </div>

                                    <div class="card">
                                       
                                    <div class="card-content">
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                <tr>
                                                    <th>NO</th>
                                                    <th>상태</th>
                                                    <th>출석</th>
                                                    <th>담당복지사</th>
                                                    <th>카테고리</th>
                                                    <th>사진</th>
                                                    <th>성명</th>
                                                    <th>연락처</th>
                                                    <th>결석률</th>
                                                    <th>출석시간</th>
                                                </tr>
                                            </thead>
                                           
                                            <!--<tbody>
                                                <tr>
                                                    <td>3</td>
                                                    <td>출석</td>
                                                    <td>노인에어로빅</td>
                                                    <td>장복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td>김할머니</td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                
                                                </tr>
                                            </tbody>-->
                                        </table>
                                    </div>
                                    
                                    <button class="btn btn-danger">선택삭제</button>
                                 </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           