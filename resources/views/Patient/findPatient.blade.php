<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>اعمال إدارية</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#"><span>اسم</span> المستشفى  </a></h1>  <!--we will get it from database later on-->
				<p>بيانات المرضى</p>
			</div>
			<div id="menu">
				<ul>
					<li ><a href="./create">مريض جديد</a></li>
					<li class="current_page_item"><a >تحديث بيانات</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#"> نعديل بيانات المريض </a></h2>
						<h3 class="title"><a href="#">بيانات المريض </a></h3>
						<div style="clear: both;">&nbsp;</div>
						<div class="col-lg-6">
						<div class ="row" >                  
						<div class ="col-sm">
						<div class="card">
						<div class="card-body card-block">
						
								
						<form action="/Application/public/Patient/updatePatient" method="POST" enctype="multipart/form-data" class="form-horizontal">  
						 {{csrf_field()}}
						 
                          <div class="row form-group">

													<div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label" ><p> رقم المريض القومى </p></label></div>
													</div>
	<div id="search" >
								<form method="get" action="/Application/public/Patient/findPatient">
									<div>
										<input type="text" name="PatientNationalId" id="search-text" value="" />
										<input type="submit" id="search-submit" value="اذهب" />
									</div>
								</form>
							</div>
                    </form>
                      </div>
                      
                      
                      
                      </div>
                      
            </div>
          </div>
						
					</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="اذهب" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
						
						<li>
							
							<ul>
								<li><a href="#">تعديل حجز</a></li>
								<li><a href="#"> إلغاء أو حذف  حجز</a></li>
								<li><a href="#">خروج</a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
</body>
</html>
