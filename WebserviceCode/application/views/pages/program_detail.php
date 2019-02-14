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
                                    <h4 class="card-title">방과후교실</h4>
                                        <div class="col-md-5">
                                           
                                            <h5>상태 : <button class="btn btn-info btn-xs">ACTION</button></h5>
                                            <h5>담당자 : 유재욱 </h5>
                                            <h5>장소 : 복지관 5층 </h5>
                                            <h5>시작시간 : 15:00 </h5>
                                            <h5>종료시간 : 16:00 </h5>
                                            <h5>총인원 : 30 </h5>
                                            
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <button class="btn btn-info"><a href="https://cushines.xyz/cushy/program_attendcheck">출석체크</a></button>
                                             <button class="btn btn-danger">수업삭제</button>
                                        </div>
                                       
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">수강생 목록</h4>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>
                                                     <div class="dropdown">
                                                        <button href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                                                           상태
                                                            <b class="caret"></b>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">출석</a></li>
                                                            <li><a href="#">결석</a></li>
                                                        </ul>
                                                    </div>
                                                    </th>
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
                                           
                                            <tbody>
                                                
                                                
                                                <!--<tr>
                                                    <td>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="no3">
                                                        </label>
                                                    </div>
                                                    </td>
                                                    <td>결석</td>
                                                    <td>노인에어로빅</td>
                                                    <td>장복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td>김할머니</td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>-</td>
                                                
                                                </tr>-->

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <button class="btn btn-info"><a href="<?php echo site_url('/program_addclient')?>">수강생 추가</a> </button>
                                    <button class="btn btn-info"><a href="<?php echo site_url('/program_addclient')?>">삭제 </a> </button>
                                </div>
                                <!-- end content-->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        

           