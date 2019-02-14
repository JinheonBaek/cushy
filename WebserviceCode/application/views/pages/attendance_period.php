
             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">기간별 출석관리</h4>
                                         <!-- input with datetimepicker -->
                                         <div class ="row">
                                         <div class ="col-md-4">
                                        <div class="form-group">
                                            <label class="label-control">start</label>
                                            <input type="text" class="form-control datetimepicker" value="10/05/2016"/>
                                        </div>
                                        </div>
                                        <div class ="col-md-4">
                                        <div class="form-group">
                                            <label class="label-control">end</label>
                                            <input type="text" class="form-control datetimepicker" value="10/05/2016"/>
                                        </div>
                                        </div>
                                        </div>

                                       
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
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
                                           
                                            <tbody>
                                                
                                                
                                                <tr>
                                                    <td>3</td>
                                                    <td>출석</td>
                                                    <td><a href="<?php echo site_url('/program_detail') ?>">
                                                    노인에어로빅
                                                    </a></td>
                                                    <td>장복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td><a href="<?php echo site_url('/client_detail') ?>">
                                                    오할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>-</td>
                                                
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>출석</td>
                                                    <td><a href="<?php echo site_url('/program_detail') ?>">
                                                    노인에어로빅
                                                    </a></td>
                                                    <td>김복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td><a href="<?php echo site_url('/client_detail') ?>">
                                                    이할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>출석</td>
                                                    <td><a href="<?php echo site_url('/program_detail') ?>">
                                                    노인에어로빅
                                                    </a></td>
                                                    <td>김복지</td>
                                                    <td>생활체육</td>
                                                    <td>사진1</td>
                                                    <td><a href="<?php echo site_url('/client_detail') ?>">
                                                    김할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>-</td>
                                                </tr>  
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          