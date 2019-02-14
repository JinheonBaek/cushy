            <br><br><br>
            <div class="card-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                          <!--
                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Launch demo modal
                          </button>
                          -->

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>



                            <div class="card">


                                <div class="card-content card-chart">
                                    <h4 class="card-title">최근 출석 현황</h4>
                                    <p class="category">Last 12months statistics</p>
                                    <div class="ct-chart" id="websiteViewsChart"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="card">
	                            <div class="card-header" data-background-color="blue">
		                            <h4 class="card-title">오늘의 프로그램</h4>
		                            <p class="category">오늘 진행되는 프로그램입니다. </p>
	                            </div>

                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <th>프로그램</th>
                                                <th>강사</th>
                                                <th>시간</th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>종이접기</td>
                                                    <td>오지연</td>
                                                    <td>13:00~13:30</td>

                                                </tr>
                                                <tr>
                                                    <td>에어로빅</td>
                                                    <td>이지연</td>
                                                    <td>09:30~10:00</td>

                                                </tr>
                                                <tr>
                                                    <td>요가 </td>
                                                    <td>김지연</td>
                                                    <td>14:00~14:30</td>

                                                </tr>
                                                <tr>
                                                    <td>독서모임</td>
                                                    <td>박지연</td>
                                                    <td>15:00~16:00</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
		                                <div class="stats">

			                                <i class="material-icons">check_circle</i> <a href="<?php echo site_url('/program_list')?>">자세히 보기</a>
		                                </div>
	                                </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
	                            <div class="card-header" data-background-color="blue">
		                            <h4 class="card-title">클라이언트 관리 </h4>
		                            <p class="category">클라이언트 출석 현황입니다. </p>
	                            </div>
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <th>이름</th>
                                                <th>최근출석</th>
                                                <th>결석일수</th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>오지연</td>
                                                    <td>17.05.18</td>
                                                    <td>0</td>

                                                </tr>
                                                <tr>
                                                    <td>김지연</td>
                                                    <td>17.05.16</td>
                                                    <td>2</td>

                                                </tr>
                                                <tr>
                                                    <td>박지연</td>
                                                    <td>17.05.18</td>
                                                    <td>0</td>

                                                </tr>
                                                <tr>
                                                    <td>이지연</td>
                                                    <td>17.05.17</td>
                                                    <td>1</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
		                                <div class="stats">
			                                <i class="material-icons">check_circle</i> <a href="<?php echo site_url('/attendance_today')?>">자세히 보기</a>
		                                </div>
	                                </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                           <div class="card">
	                            <div class="card-header" data-background-color="blue">
		                            <h4 class="card-title">복지관 공지사항</h4>
		                            <p class="category">복지관 공지사항입니다. </p>
	                            </div>
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <th>이름</th>
                                                <th>공지사항</th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>운영자</td>
                                                    <td>긴급점검</td>


                                                </tr>
                                                <tr>
                                                    <td>운영자</td>
                                                    <td>긴급점검</td>

                                                </tr>
                                                <tr>
                                                    <td>운영자</td>
                                                    <td>로그인 안 된다고 하지 마세요.</td>

                                                </tr>
                                                <tr>
                                                    <td>운영자</td>
                                                    <td>고소 하시려면 하시든가.</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
		                                <div class="stats">
			                                 <i class="material-icons">check_circle</i> <a href="<?php echo site_url('/notice')?>">자세히 보기</a>
		                                </div>
	                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
