<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboardfasdfasf</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Rubik:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/resources/assets/admin/css/main.css">
<link href="{{url('/')}}/resources/assets/admin/images/favicon.ico" rel="icon" type="image/x-icon" />
</head>

<body class="fixed-left">
<div id="wrapper" class="main-wrapper d-flex"><!-- #BeginLibraryItem "/Library/left-sidebar-hr.lbi" -->
  <div id="slidemenu" class="left side-menu nav-menu">
    <div class="nav-wrapper">
      	<ul class="nav flex-column logout-container">
        	<li class="nav-item dropdown"> <a class="company-section nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
          	<div class="bg-white p-10 m-0 rounded-circle text-primary lineheight1"><i class="far fa-building"></i></div>
          	<div class="nav-menu-text d-inline-block ml-10"><span class="d-block menu-title">Umang's Company</span> <span class="user-name">Umang Patel - Admin</span></div>
          	</a>
          	<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:void(0)">Projects &amp; Permanent Tasks</a> <a class="dropdown-item" href="javascript:void(0)">User Settings</a> <a class="dropdown-item" href="javascript:void(0)">Payoneer Settings</a> <a class="dropdown-item" href="javascript:void(0)">Work Schedules</a> <a class="dropdown-item" href="javascript:void(0)">Your Integrations</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html">Sign Out</a> </div>
        	</li>
      	</ul>
      	<ul class="nav flex-column">
	        <li class="nav-item"><a class="nav-link" href="dashboard.html"><i class="far fa-chart-bar"></i><span class="nav-menu-text">Dashboard</span></a> </li>
	        <li class="nav-item"><a class="nav-link" href="client.html"><i class="fas fa-users"></i><span class="nav-menu-text">Client</span></a> </li>
	        <li class="nav-item"><a class="nav-link" href="project.html"><i class="fas fa-hand-holding-usd"></i><span class="nav-menu-text">Project</span></a></li>
	        <li class="nav-item"><a class="nav-link" href="library.html"><i class="fas fa-users"></i><span class="nav-menu-text">Library</span></a> </li>
	        <li class="nav-item"><a class="nav-link" href="checklist.html"><i class="fas fa-list-ul"></i><span class="nav-menu-text">Template</span></a> </li>
	        <li class="nav-item"><a class="nav-link" href="mis-report.html"><i class="fas fa-file-invoice-dollar"></i><span class="nav-menu-text">MIS Reports</span></a></li>
	        <li class="nav-item"><a class="nav-link" href="settings.html"><i class="fas fa-sliders-h"></i><span class="nav-menu-text">Settings</span></a> </li>
      	</ul>
    </div>
    <div class="fixed-bottom bg-gray">
      <button class="btn button-menu-mobile open-left pull-left btn-default m-l-40 m-r-20 bg-none f-22 p-l-5 p-r-5 p-t-10 p-b-10 menu-icon-button"><i class="fa fa-chevron-left"></i></button>
    </div>
  </div>
  <!-- #EndLibraryItem -->
  <div class="content-wrapper hr-manager-admin">
  	@yield('content')
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="custModal" tabindex="-1" role="dialog" aria-labelledby="custModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="custModalLabel">Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <table class="table-bordered table-striped table w-100">
          <tbody>
            <tr>
              <td>Set as a Favorite :</td>
              <td><div class="text-orange"> <i class="font-20 far fa-star"></i> </div></td>
            </tr>
            <tr>
              <td>Assign Priority :</td>
              <td><div class="text-orange"> <i class="font-20 mr-5 fas fa-flag-checkered text-danger"></i> <i class="font-20 mr-5 fas fa-flag-checkered text-primary"></i> <i class="font-20 mr-5 fas fa-flag-checkered text-success"></i> </div></td>
            </tr>
            <tr>
              <td>Move to Trash :</td>
              <td><div class="text-orange"> <i class="font-20 far fa-trash-alt"></i> </div></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-orange">Save</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/bootstrap/popper.min.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/bootstrap/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/fontawesome/fontawesome.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/fontawesome/solid.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/fontawesome/brands.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/fontawesome/regular.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/detect/detect.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/jquery-slimScroll/jquery.slimscroll.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/loader.js"></script> 
<!--Pie Chart End--> 
<script type="text/javascript" src="{{url('/')}}/resources/assets/admin/js/custom.js"></script> 
<script type="text/javascript">
function headertab(id,id1) {
	$(id).addClass('active').siblings('.page-title').removeClass('active');
	$('.header-tab-content').removeClass('active');
	$('#tab-'+id1).addClass('active');
};
</script>
</body>
</html>