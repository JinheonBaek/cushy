
             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">event_seat</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">금일 출석자 명단</h4>
                                        <div class="dropdown">
                                            <button href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                                                상태
                                                <b class="caret"></b>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">결석</a></li>
                                                <li><a href="#">출석</a></li>
                                                
                                            </ul>
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
                                                    김할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                
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
                                                    김할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
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
                                                    이할머니
                                                    </a></td>
                                                    <td>010-1234-1234</td>
                                                    <td>10%</td>
                                                    <td>07:03</td>
                                                </tr>  
                                            
                                            </tbody>
                                            
                                        </table>
                                        <div class="col-md-4">
                                        <form role="search">
                                                <div class="form-group form-search is-empty">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="material-input"></span>
                                                </div>
                                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                                    <i class="material-icons">search</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          