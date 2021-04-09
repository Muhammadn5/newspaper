<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="index.blade.php" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="view-table.blade.php"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="add-post.blade.php"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="category/category.blade.php"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Gallery</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Images</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Images</a></li>
              <li><a href="#"><i class="fa fa-eye"></i>All Videos</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Videos</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Pages</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="menu.blade.php">
              <i class="fa fa-file"></i> <span>Menu</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-bar-chart"></i> <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Reports</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Reports</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
              <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>Active User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
              <li><a href="login.blade.php"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>
	</ul>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> MENU</h1>
		</div>

		<div class="col-sm-4">
		  <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Posts <span class="pull-right"><i class="fa fa-chevron-down"></i></span></a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">
                <p><input type="checkbox" name="postid"> Post 1</p>
                <p><input type="checkbox" name="postid"> Post 2</p>
                <p><input type="checkbox" name="postid"> Post 3</p>
                <p><input type="checkbox" name="postid"> Post 4</p>
                <p><input type="checkbox" name="postid"> Post 5</p>
                <p><input type="checkbox" name="postid"> Post 6</p>
              </div>
              <input type="checkbox" id="select-all" style="display: none;">
              <label for="select-all">Select All</label> <button class="btn btn-sm btn-default pull-right">Add to Menu</button>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Pages <span class="pull-right"><i class="fa fa-chevron-down"></i></span></a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">
                <p><input type="checkbox" name="postid"> Page 1</p>
                <p><input type="checkbox" name="postid"> Page 2</p>
                <p><input type="checkbox" name="postid"> Page 3</p>
                <p><input type="checkbox" name="postid"> Page 4</p>
                <p><input type="checkbox" name="postid"> Page 5</p>
                <p><input type="checkbox" name="postid"> Page 6</p>
              </div>
              <input type="checkbox" id="select-all" style="display: none;">
              <label for="select-all">Select All</label> <button class="btn btn-sm btn-default pull-right">Add to Menu</button>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Custom Links <span class="pull-right"><i class="fa fa-chevron-down"></i></span></a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
              <form class="form-horizontal" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-4">URL</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="http://">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4">Link Text</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-default pull-right">Add to Menu</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Categories <span class="pull-right"><i class="fa fa-chevron-down"></i></span></a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="col-sm-12 panel-bordered-box">
                <p><input type="checkbox" name="postid"> Category 1</p>
                <p><input type="checkbox" name="postid"> Category 2</p>
                <p><input type="checkbox" name="postid"> Category 3</p>
                <p><input type="checkbox" name="postid"> Category 4</p>
                <p><input type="checkbox" name="postid"> Category 5</p>
                <p><input type="checkbox" name="postid"> Category 6</p>
              </div>
              <input type="checkbox" id="select-all" style="display: none;">
              <label for="select-all">Select All</label> <button class="btn btn-sm btn-default pull-right">Add to Menu</button>
            </div>
          </div>
        </div>
      </div>
		</div>

    <div class="col-sm-8">
      <div class="content menu-structure">
          <h3>Menu Structure</h3>
          <p>Drag each item into the order you prefer. Click the arrow on the right of the item to reveal additional configuration options.</p>
          <form method="post">
            <ul class="nav" id="my-ui-list">
              <li><div class="sortable">Menu 1</div></li>
              <li><div class="sortable">Menu 2</div></li>
              <li><div class="sortable">Menu 3</div></li>
              <li><div class="sortable">Menu 4</div></li>
              <li><div class="sortable">Menu 5</div></li>
              <li><div class="sortable">Menu 6</div></li>
            </ul>
            <button class="btn btn-primary">Save Menu</button>
          </form>
      </div>
    </div>
	</div>
</div>


<footer>
	<div class="col-sm-6">
		Copyright &copy; 2018 <a href="http://www.webtrickshome.com">Webtrickshome.com</a> All rights reserved.
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 2.2.3</span>
	</div>
</footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/app.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/sortable.js"></script>
</body>
</html>
