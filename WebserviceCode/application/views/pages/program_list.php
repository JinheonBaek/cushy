
             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">notifications</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">프로그램 목록</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>프로그램명</th>
                                                    <th>
                                                    <div class="dropdown">
                                                        <button href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                                                           담당복지사
                                                            <b class="caret"></b>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">오지연</a></li>
                                                            <li><a href="#">김지연</a></li>
                                                        </ul>
                                                    </div>
                                                    </th>
                                                    <th>
                                                   <div class="dropdown">
                                                        <button href="#" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                                                            카테고리
                                                            <b class="caret"></b>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">공예</a></li>
                                                            <li><a href="#">생활체육</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                    </th> 
                                                    <th>장소</th>
                                                    <th>시간</th>
                                                    <th>수강생</th>
                                                    <th>진행시간</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                
                                                
                                                <tr>
                                                    <td><a href="<?php echo site_url('/program_detail') ?>">
                                                    <?php foreach ($program as $row) { echo $row->program; } ?>
                                                    </a></td>
                                                    <td><a href="<?php echo site_url('/client_detail') ?>">
                                                            <?php foreach ($program as $row) { echo $row->assign; } ?>
                                                    </a></td>
                                                    <td><?php foreach ($program as $row) { echo $row->category; } ?></td>
                                                    <td><?php foreach ($program as $row) { echo $row->place; } ?></td>
                                                    <td><?php foreach ($program as $row) { echo $row->time; } ?></td>
                                                    <td><?php foreach ($program as $row) { echo $row->attendee; } ?></td>
                                                    <td><?php foreach ($program as $row) { echo $row->runningTime; } ?></td>
                                                    
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
          