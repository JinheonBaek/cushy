<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form id="RegisterValidationDoc" action="" method="">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">클라이언트 등록</h4>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                이름
                                </label>
                                <input class="form-control"
                                       id="name"
                                       name="name"
                                       type="text"
                                       required="true"/>
                            </div>
                            <div class="form-group label-floating">
                               <div class="form-group">
                                <label class="control-label">생년월일</label>
                                    <input type="text" id="birth" class="form-control datetimepicker" value="" placeholder="YYYY-MM-DD"/>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <div class="row">
                                <div class= "col-md-4">
                                    성별 :
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios">
                                                남
                                            </label>
                                            <label>
                                                <input type="radio" name="optionsRadios" checked="true">
                                                여
                                            </label>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    생활계층 :
                                        <div class="dropdown">
                                            <button href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                                                목록
                                                <b class="caret"></b>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">노인(일반)</a></li>
                                                <li><a href="#">노인(수급자)</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">성인</a></li>
                                                <li><a href="#">아동</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                             연락처
                                        </label>
                                        <input class="form-control"
                                            name="number"
                                            id="tel"
                                            type="text"
                                            required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">
                                             담당복지사
                                        </label>
                                        <input class="form-control"
                                               id="assign"
                                            name="welfare"
                                            type="text"
                                            required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div><br><br>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="modal_open">
                              사진 등록
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width:700px;">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">사진 등록하기</h4>
                                  </div>
                                  <div class="modal-body" style="height:500px;">

                                    <!-- Hidden form and button to upload image on server -->
                                    <div id="EnrollInfo">
                                      <form id="myform">
                                        이름: <input type="text" name="username" id="username"><br>
                                        <input type="button" id="snapshotButton" value="Take Snapshot" onclick="snapshot()">
                                      </form>
                                    </div>

                                    <div class="track">
                                      <p id="trackInfo"></p>
                                    </div>

                                    <div class="result">
                                      <p id="resultInfo"> </p>
                                    </div>
                                    <!--사진 찍기-->
                                    <div class="frame">
                                      <!-- Show webcam video -->
                                        <video id="video" width="640" height="480" preload autoplay loop muted></video>
                                      <!-- Make canvas for traking face -->
                                      <canvas id="canvas" width="640" height="480"></canvas>
                                    </div>
                                  </div>
                                  <div class="modal-footer" style="padding-top: 50px;">

                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <!--<button type="button" class="btn btn-primary" value="Take Snapshot" onClick="snapshot()">Save changes</button>-->
                                  </div>
                                </div>
                              </div>
                            </div>

                            </div>
                            </div>
                            <button type="submit" id="register" class="btn btn-info btn-fill">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    video, canvas {
      /* Overlap video and canvas at same place */
      position: absolute;
    }
</style>
<script>
    var username = "";

    // Take Snapshot
    function snapshot() {
        video.pause();
        // console.log("TakeSnapshot");
        takeSnapshot();
    }

    $('#register').click(function() {
        var name = $('#name').val();
        var birth = $('#birth').val();
        var tel = $('#tel').val();
        var assign = $('#assign').val();
        var alias = $('#username').val();

        var params = name + ":" + birth + ":" + tel + ":" + assign + ":" + alias;

        $.ajax({
            url: "https://cushines.xyz/cushy/register/" + params + "/2",
            type: "GET",
            async: false
            // Request body
        })

            .done(function() {
                alert("회원 가입에 성공했습니다.");
                window.location.href = "https://cushines.xyz/cushy";
            })
    });

$(document).ready(function() {
    $.getScript("assets/js/webcamEnroll/webcam.min.js", function () {
    });
    $.getScript("assets/js/webcamEnroll/webcamSnapshot.js", function () {
    });
    $.getScript("assets/js/webcamEnroll/build/tracking-min.js", function () {
    });
    $.getScript("assets/js/webcamEnroll/build/data/face-min.js", function () {
    });
    $.getScript("assets/js/webcamEnroll/cogEnrollFace.js", function () {
    });
    $("#modal_open").click(function () {
        Webcam.set({
            width: 640,
            height: 480,
            image_format: 'png',
            jpeg_quality: 100
        });
        Webcam.attach('#video');

        var video = document.getElementById('video');
        var canvas = document.getElementById('canvas');
        var info = document.getElementById('trackInfo');
        var context = canvas.getContext('2d');

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
                    info.innerHTML = rect.width + '*' + rect.height;
                });
            }
        });
    });
});
</script>
