
	<div id="content">
        <div class="container-fluid">
            <div id="filter">
                <form class="form-inline">
                    <label>Filter:</label>
                    <select name="users-filter" id="users-filter-select" class="selectpicker" data-style="btn-primary">
                        <option value="all">All</option>
                        <option value="friends">Friends of Friends</option>
                        <option value="name">by Name</option>
                    </select>
                    <div id="users-filter-trigger">
                        <div class="select-friends hidden">
                            <select name="users-filter-friends" class="selectpicker" data-style="btn-primary" data-live-search="true">
                                <option value="0">Select Friend</option>
                                <option value="1">Mary D.</option>
                                <option value="2">Michelle S.</option>
                                <option value="3">Adrian Demian</option>
                            </select>
                        </div>
                        <div class="search-name hidden">
                            <input type="text" class="form-control" name="user-first" placeholder="First Last Name" id="name" />
                            <a href="#" class="btn btn-primary btn-sm hidden" id="user-search-name"><i class="fa fa-search"></i> Search</a>
                        </div>
                    </div>
                </form>
            </div>
		
            <div class="timeline row" data-toggle="gridalicious">
				    	   	<?php
if ($random_users != false)
  foreach ($random_users->result() as $key => $R): ?>
                <div class="timeline-block">
                    <div class="panel panel-default user-box">
                        <div class="panel-body">
                            <div class="media">
                                <img src="images/people/50/guy-5
.jpg" alt="people" class="media-object img-circle pull-left" />
                                <div class="media-body">
                                    <a href="" class="username"><?php echo $R->fullname; ?></a>
                                    <div class="profile-icons">
                                        <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span> <span><i class="fa fa-video-camera"></i> 3 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body bordered">
                            <p class="common-friends">Common Friends</p>
                            <div class="user-friend-list">
                                <a href="#">
                                    <img src="images/people/50/guy-2
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/guy-6
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-8
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-7
.jpg" alt="people" class="img-circle" />
                                </a>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                        </div>
                    </div>
                </div>
      <?php endforeach;?>
        
          
            </div>
        </div>
</div>
<script src="<?php echo base_url('/public/user/js/scripts.min.js');?>"></script>
