
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UI Elements - Ace Admin</title>
        <meta name="description" content="Common UI Features & Elements" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include'_css.php'?>

    </head>

    <body>
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
           <div class="container-fluid">


              <a class="brand" href="#"><small><i class="icon-leaf"></i> Ace Admin</small> </a>
              <ul class="nav ace-nav pull-right">
                    <li class="grey">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-tasks"></i>
                            <span class="badge">4</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-ok"></i> 4 Tasks to complete
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </div>
                                    <div class="progress progress-mini"><div class="bar" style="width:65%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Hardware Upgrade</span>
                                        <span class="pull-right">35%</span>
                                    </div>
                                    <div class="progress progress-mini progress-danger"><div class="bar" style="width:35%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Unit Testing</span>
                                        <span class="pull-right">15%</span>
                                    </div>
                                    <div class="progress progress-mini progress-warning"><div class="bar" style="width:15%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left">Bug Fixes</span>
                                        <span class="pull-right">90%</span>
                                    </div>
                                    <div class="progress progress-mini progress-success progress-striped active"><div class="bar" style="width:90%"></div></div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See tasks with details
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="purple">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bell-alt icon-animated-bell icon-only"></i>
                            <span class="badge badge-important">8</span>
                        </a>
                        <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-warning-sign"></i> 8 Notifications
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-comment btn btn-mini btn-pink"></i> New comments</span>
                                        <span class="pull-right badge badge-info">+12</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <i class="icon-user btn btn-mini btn-primary"></i> Bob just signed up as an editor ...
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-shopping-cart btn btn-mini btn-success"></i> New orders</span>
                                        <span class="pull-right badge badge-success">+8</span>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <span class="pull-left"><i class="icon-twitter btn btn-mini btn-info"></i> Followers</span>
                                        <span class="pull-right badge badge-info">+4</span>
                                    </div>
                                </a>
                            </li>
                                                                
                            <li>
                                <a href="#">
                                    See all notifications
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="green">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope-alt icon-animated-vertical icon-only"></i>
                            <span class="badge badge-success">5</span>
                        </a>
                        <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                            <li class="nav-header">
                                <i class="icon-envelope"></i> 5 Messages
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Alex's Avatar" class="msg-photo" src="media/images/avatar.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Alex:</span>
                                            Ciao sociis natoque penatibus et auctor ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>a moment ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Susan's Avatar" class="msg-photo" src="media/images/avatar3.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Susan:</span>
                                            Vestibulum id ligula porta felis euismod ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>20 minutes ago</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Bob's Avatar" class="msg-photo" src="media/images/avatar4.png" />
                                    <span class="msg-body">
                                        <span class="msg-title">
                                            <span class="blue">Bob:</span>
                                            Nullam quis risus eget urna mollis ornare ...
                                        </span>
                                        <span class="msg-time">
                                            <i class="icon-time"></i> <span>3:15 pm</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    See all messages
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>                                   
    
                        </ul>
                    </li>


                    <li class="light-blue user-profile">
                        <a class="user-menu dropdown-toggle" href="#" data-toggle="dropdown">
                            <img alt="Jason's Photo" src="media/images/user.jpg" class="nav-user-photo" />
                            <span id="user_info">
                                <small>Welcome,</small> Jason
                            </span>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul id="user_menu" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>




              </ul><!--/.ace-nav-->

           </div><!--/.container-fluid-->
          </div><!--/.navbar-inner-->
        </div><!--/.navbar-->

        <div class="container-fluid" id="main-container">
            <a href="#" id="menu-toggler"><span></span></a><!-- menu toggler -->

            <div id="sidebar">
                
                <div id="sidebar-shortcuts">
                    <div id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success"><i class="icon-signal"></i></button>
                        <button class="btn btn-small btn-info"><i class="icon-pencil"></i></button>
                        <button class="btn btn-small btn-warning"><i class="icon-group"></i></button>
                        <button class="btn btn-small btn-danger"><i class="icon-cogs"></i></button>
                    </div>
                    <div id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- #sidebar-shortcuts -->

                <ul class="nav nav-list">
                    
                    <li>
                      <a href="index.html">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="typography.html">
                        <i class="icon-text-width"></i>
                        <span>Typography</span>
                        
                      </a>
                    </li>

                    
                    <li class="active open">
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-desktop"></i>
                        <span>UI Elements</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li class="active"><a href="elements.html"><i class="icon-double-angle-right"></i> Elements</a></li>
                        <li><a href="buttons.html"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="tables.html">
                        <i class="icon-list"></i>
                        <span>Tables</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-edit"></i>
                        <span>Forms</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="form-elements.html"><i class="icon-double-angle-right"></i> Form Elements</a></li>
                        <li><a href="form-wizard.html"><i class="icon-double-angle-right"></i> Wizard & Validation</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="widgets.html">
                        <i class="icon-list-alt"></i>
                        <span>Widgets</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="calendar.html">
                        <i class="icon-calendar"></i>
                        <span>Calendar</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="gallery.html">
                        <i class="icon-picture"></i>
                        <span>Gallery</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="grid.html">
                        <i class="icon-th"></i>
                        <span>Grid</span>
                        
                      </a>
                    </li>

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-file"></i>
                        <span>Other Pages</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="pricing.html"><i class="icon-double-angle-right"></i> Pricing Tables</a></li>
                        <li><a href="invoice.html"><i class="icon-double-angle-right"></i> Invoice</a></li>
                        <li><a href="login.html"><i class="icon-double-angle-right"></i> Login & Register</a></li>
                        <li><a href="error-404.html"><i class="icon-double-angle-right"></i> Error 404</a></li>
                        <li><a href="error-500.html"><i class="icon-double-angle-right"></i> Error 500</a></li>
                        <li><a href="blank.html"><i class="icon-double-angle-right"></i> Blank Page</a></li>
                      </ul>
                    </li>

                    
                </ul><!--/.nav-list-->

                <div id="sidebar-collapse"><i class="icon-double-angle-left"></i></div>


            </div><!--/#sidebar-->

        
            <div id="main-content" class="clearfix">
                    
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="icon-home"></i> <a href="#">Home</a><span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li><a href="#">UI Elements</a> <span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active">Elements</li>
                        </ul><!--.breadcrumb-->

                        <div id="nav-search">
                            <form class="form-search">
                                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Search ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                            </form>
                        </div><!--#nav-search-->
                    </div><!--#breadcrumbs-->



                    <div id="page-content" class="clearfix">
                        
                        <div class="page-header position-relative">
                            <h1>UI Elements <small><i class="icon-double-angle-right"></i> Common UI Features & Elements</small></h1>
                        </div><!--/page-header-->

                        

                        <div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->


<div class="row-fluid">

 <div class="span6">
    <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
              <li class="active"><a data-toggle="tab" href="#home"><i class="green icon-home bigger-110"></i> Home</a></li>
              <li><a data-toggle="tab" href="#profile">Messages <span class="badge badge-important">4</span></a></li>
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu dropdown-info">
                  <li><a data-toggle="tab" href="#dropdown1">@fat</a></li>
                  <li><a data-toggle="tab" href="#dropdown2">@mdo</a></li>
                </ul>
              </li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane in active">
                <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
              </div>
              <div id="profile" class="tab-pane">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
              </div>
              <div id="dropdown1" class="tab-pane">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
              </div>
              <div id="dropdown2" class="tab-pane">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
              </div>
            </div>
    </div>

 </div><!--/span-->

 <div class="vspace-6"></div>
 
 <div class="span6">
  <div class="tabbable tabs-below">
  
    <div class="tab-content">
      <div id="home2" class="tab-pane in active">
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
      <div id="profile2" class="tab-pane">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
      </div>
      <div id="dropdown12" class="tab-pane">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
      </div>
    </div>
    <ul class="nav nav-tabs" id="myTab2">
      <li class="active"><a data-toggle="tab" href="#home2">Home</a></li>
      <li><a data-toggle="tab" href="#profile2">Profile</a></li>
      <li><a data-toggle="tab" href="#dropdown12">More</a></li>
    </ul>
    
  </div>
 </div>

</div><!--/row-->

<div class="space"></div>

<div class="row-fluid">

 <div class="span6">
   <div class="tabbable tabs-left">
    <ul class="nav nav-tabs" id="myTab3">
      <li class="active"><a data-toggle="tab" href="#home3"><i class="pink icon-dashboard bigger-110"></i> Home</a></li>
      <li><a data-toggle="tab" href="#profile3"><i class="blue icon-user bigger-110"></i> Profile</a></li>
      <li><a data-toggle="tab" href="#dropdown13"><span class="badge badge-success badge-icon"><i class="icon-caret-right"></i></span> More</a></li>
    </ul>
    <div class="tab-content">
      <div id="home3" class="tab-pane in active">
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
      <div id="profile3" class="tab-pane">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
      <div id="dropdown13" class="tab-pane">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
    </div>
  </div>
 </div><!--/span-->

 <div class="vspace-6"></div>

 <div class="span6">
   <div class="tabbable tabs-right tabs-shadow tabs-space">
    <ul class="nav nav-tabs" id="myTab4">
      <li class="active"><a data-toggle="tab" href="#home4">Home</a></li>
      <li><a data-toggle="tab" href="#profile4">Profile</a></li>
      <li><a data-toggle="tab" href="#dropdown14">More</a></li>
    </ul>
    <div class="tab-content">
      <div id="home4" class="tab-pane in active">
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
      <div id="profile4" class="tab-pane">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
      <div id="dropdown14" class="tab-pane">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
      </div>
    </div>
  </div>
 </div><!--/span-->

</div><!--/row-->


<div class="hr hr-double hr-dotted hr18"></div>


<div class="row-fluid">
    <div class="span6">
            <h3 class="header smaller lighter blue">Accordion</h3>
            <div id="accordion2" class="accordion">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div class="accordion-body collapse" id="collapseOne">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a href="#collapseTwo" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div class="accordion-body collapse" id="collapseTwo">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a href="#collapseThree" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div class="accordion-body collapse" id="collapseThree">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    </div>
                  </div>
                </div>
              </div>
    </div><!--/span-->
    
    
    
    
    <div class="span6">
        <h3 class="header smaller lighter green">Progress Bar</h3>
        <div class="row-fluid">
        <div class="span8">
            <div class="progress" data-percent="66%">
                <div class="bar" style="width:66%;"></div>
            </div>
            
            <div class="progress progress-striped">
                <div class="bar" style="width: 20%;" data-percent="20%"></div>
            </div>
            
            <div class="progress progress-small progress-striped active">
                <div class="bar" style="width: 40%;"></div>
            </div>
            
            <div class="progress progress-mini progress-danger">
                <div class="bar" style="width: 35%;"></div>
            </div>
            
            <div class="progress">
                <div class="bar bar-success" style="width: 35%;"></div>
                <div class="bar bar-warning" style="width: 20%;"></div>
                <div class="bar bar-danger" style="width: 10%;"></div>
            </div>
            
            
            <div class="progress progress-info progress-striped">
                <div class="bar" style="width: 20%"></div>
            </div>
            <div class="progress progress-success progress-striped">
                <div class="bar" style="width: 40%"></div>
            </div>
            <div class="progress progress-warning progress-striped">
                <div class="bar" style="width: 60%"></div>
            </div>
            <div class="progress progress-danger progress-striped">
                <div class="bar" style="width: 80%"></div>
            </div>
        </div><!--/span-->
        
        <div class="span4 center">
            <div class="easy-pie-chart percentage" data-percent="20" data-color="#D15B47"><span class="percent">20</span>%</div>
            <hr />
            <div class="easy-pie-chart percentage" data-percent="55" data-color="#87CEEB"><span class="percent">55</span>%</div>
            <hr />
            <div class="easy-pie-chart percentage" data-percent="90" data-color="#87B87F"><span class="percent">90</span>%</div>
        </div><!--/span-->
        
        </div><!--/row-fluid-->
    
    </div><!--/span-->
    

    
</div><!--/row-->


<hr />



<div class="row-fluid">
    <div class="span6">
     <div class="widget-box">
      <div class="widget-header">
        <h4 class="smaller">Tooltips <small>different directions and colors</small></h4>
      </div>
      <div class="widget-body">
       <div class="widget-main">
        <p class="muted">Tight pants next level keffiyeh <a title="Default tooltip" data-rel="tooltip" href="#">you probably</a> haven't heard of them. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a title="Another tooltip" data-rel="tooltip" href="#">have a</a> terry richardson vinyl chambray. A really ironic artisan <a data-rel="tooltip" href="#" data-original-title="Another one here too">whatever</a> keytar, scenester farm-to-table banksy Austin <a title="The last tip!" data-rel="tooltip" href="#">twitter</a> handle.
        </p>
        <hr />
        <p>
            <span class="btn btn-small" data-rel="tooltip" title="Default">Default</span>
            <span class="btn btn-warning btn-small tooltip-warning" data-rel="tooltip" data-placement="left" title="Left Warning">Left</span>
            <span class="btn btn-success btn-small tooltip-success" data-rel="tooltip" data-placement="right" title="Right Success">Right</span>
            <span class="btn btn-danger btn-small tooltip-error" data-rel="tooltip" data-placement="top" title="Top Danger">Top</span>
            <span class="btn btn-info btn-small tooltip-info" data-rel="tooltip" data-placement="bottom" title="Bottm Info">Bottom</span>
        </p>
       </div>
      </div>
     </div>
    </div><!--/span-->

    <div class="span6">
     <div class="widget-box">
      <div class="widget-header">
        <h4 class="smaller">Popovers</h4>
      </div>
      <div class="widget-body">
       <div class="widget-main">
        <p>
            <span class="btn btn-small" data-rel="popover" title="Default" data-content="This is some info we thought you may want to know!">Default</span>
            <span class="btn btn-success btn-small tooltip-success" data-rel="popover" data-placement="right" title="<i class='icon-ok green'></i> Right Success" data-content="This is good, this is working and it's fine!">Right</span>
            <span class="btn btn-warning btn-small tooltip-warning" data-rel="popover" data-placement="left" title="<i class='icon-warning-sign orange'></i> Left Warning" data-content="Please know that this is not going very well!">Left</span>
        </p>
        <p>
            <span class="btn btn-danger btn-small tooltip-error" data-rel="popover" data-placement="top" data-original-title="<i class='icon-bolt red'></i> Top Danger" data-content="Oops! It went wrong, maybe try again!">Top</span>
            <span class="btn btn-info btn-small tooltip-info" data-rel="popover" data-placement="bottom" title="Some Info" data-content="Some piece of info shall be yours!">Bottom</span>
            <span class="btn btn-inverse btn-small popover-notitle" data-rel="popover" data-placement="bottom" data-content="Popover without a title!">No Title</span>
        </p>
       </div>
      </div>
     </div>
    </div><!--/span-->
</div><!--/row-->


<hr />


<div class="row-fluid">
    <div class="span6">
        <h3 class="header smaller lighter green"><i class="icon-bullhorn"></i> Alerts</h3>
        
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
            <strong><i class="icon-remove"></i> Oh snap!</strong>
            Change a few things up and try submitting again. <br />
        </div>
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
            <strong>Warning!</strong>
            Best check yo self, you're not looking too good. <br />
        </div>
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
            <p>
            <strong><i class="icon-ok"></i> Well done!</strong>
            You successfully read this important alert message.
            </p>
            <p>
                <button class="btn btn-small btn-success">Do This</button>
                <button class="btn btn-small">Or This One</button>
            </p>
        </div>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
            <strong>Heads up!</strong>
            This alert needs your attention, but it's not super important. <br />
        </div>
    </div><!--/span-->
    
    <div class="span6">
        <h3 class="row-fluid header smaller lighter orange">
            <span class="span7">
                <i class="icon-bell-alt"></i> Gritter Notifications
            </span><!--/span-->
            <span class="span5">
                <label class="pull-right inline">
                    <small class="muted">Dark:</small>
                    <input id="gritter-light" checked type="checkbox" class="ace-switch ace-switch-5" /><span class="lbl"></span>
                </label>
            </span><!--/span-->
        </h3>

        <p>
            <i>Click to see</i>
        </p>
        <p>
            <button class="btn" id="gritter-regular">Regular</button>
            <button class="btn btn-info" id="gritter-sticky">Sticky</button>
            <button class="btn btn-success" id="gritter-without-image">Without Image</button>
        </p>
        <p>
            <button class="btn btn-danger" id="gritter-error">Error</button>
            <button class="btn btn-warning" id="gritter-max3">Max 3</button>
            <button class="btn btn-inverse" id="gritter-remove">Remove</button>
        </p>
    </div><!--/span-->
</div><!--/row-->


<hr />


<div class="row-fluid">
    <div class="span6">
        <div class="row-fluid">
            <h3 class="header smaller lighter purple">Bootstrap Modals <small>(Bootbox.js)</small> </h3>
            <p>
                <button class="btn" id="bootbox-regular">Regular Dialog</button>
                <button class="btn btn-info" id="bootbox-confirm">Confirm</button>
                <button class="btn btn-success" id="bootbox-options">More Options</button>
            </p>
        </div><!--/row-->
        
        <div class="space-24"></div>
        
        <div class="row-fluid">
            <div class="row-fluid">
                <h3 class="header smaller lighter grey"><i class="icon-spinner icon-spin orange bigger-125"></i> Imageless Spinner <small>(spin.js)</small></h3>
            </div>
            
            <div class="row-fluid">
                <i>Change a value to begin</i>
    
                <div class="pull-right center" id="spinner-preview"></div>
                <form id="spinner-opts">
                    <label>
                        <small>Lines:</small>
                        <input type="text" name="lines" data-min="5" data-max="16" data-step="2" value="12" />
                    </label>
                    <label>
                        <small>Length:</small>
                        <input type="text" name="length" data-min="0" data-max="30" value="7" />
                    </label>
                    <label>
                        <small>Width:</small>
                        <input type="text" name="width" data-min="2" data-max="20" value="4" />
                    </label>
                    <label>
                        <small>Radius:</small>
                        <input type="text" name="radius" data-min="0" data-max="40" value="10" />
                    </label>
                    <label>
                        <small>Corners:</small>
                        <input type="text" name="corners" data-min="0" data-max="1" data-step="0.1" value="1" />
                    </label>
                    <label>
                        <small>Rotate:</small>
                        <input type="text" name="rotate" data-min="0" data-max="90" value="0" />
                    </label>
                    <label>
                        <small>Trail:</small>
                        <input type="text" name="trail" data-min="10" data-max="100" value="60" />
                    </label>
                    <label>
                        <small>Speed:</small>
                        <input type="text" name="speed" data-min="0.5" data-max="2.2" data-step="0.1" value="1" />
                    </label>
                </form>
                
            </div><!--/row-->
            
            
        </div><!--/row-->
    </div><!--/span-->
    
    <div class="span6">
        <h3 class="header smaller lighter red">Bootstrap Wells</h3>
        <div class="well">
            <h4 class="green smaller lighter">Normal Well</h4>
            Use the well as a simple effect on an element to give it an inset effect.
        </div>
        
        <div class="well well-large">
            <h4 class="blue">Large Well</h4>
            Control padding and rounded corners with two optional modifier classes.
        </div>
        
        <div class="well well-small">
            This is a small well
        </div>
    </div><!--/span-->
    
</div><!--/row-->


<div class="row-fluid">
    <div class="span6">
        <h3 class="header smaller lighter green">Dropdowns</h3>
        

        <div class="dropdown dropdown-preview">
            <ul class="dropdown-menu">
                <li><a href="#" tabindex="-1">Action</a></li>
                <li><a href="#" tabindex="-1">Another action</a></li>
                <li><a href="#" tabindex="-1">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#" tabindex="-1">Separated link</a></li>
            </ul>
        </div>
        
        <div class="dropdown dropdown-preview">
            <ul class="dropdown-menu dropdown-danger">
                <li><a href="#" tabindex="-1">Action</a></li>
                <li><a href="#" tabindex="-1">Another action</a></li>
                <li><a href="#" tabindex="-1">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a href="#" tabindex="-1">More options</a>
                    <ul class="dropdown-menu dropdown-danger">
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="dropup dropdown-preview">
            <ul class="dropdown-menu dropdown-purple">
                <li><a href="#" tabindex="-1">Action</a></li>
                <li><a href="#" tabindex="-1">Another action</a></li>
                <li><a href="#" tabindex="-1">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a href="#" tabindex="-1">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="dropup dropdown-preview">
            <ul class="dropdown-menu dropdown-light">
                <li><a href="#" tabindex="-1">Action</a></li>
                <li><a href="#" tabindex="-1">Another action</a></li>
                <li><a href="#" tabindex="-1">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu pull-left">
                    <a href="#" tabindex="-1">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                        <li><a href="#" tabindex="-1">Second level link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        

    </div>
    
    <div class="span6">
        <h3 class="row-fluid header smaller lighter blue">
            <span class="span7">
                <i class="icon-th-large"></i> Pills
            </span><!--/span-->
            <span class="span5">
                <label class="pull-right inline">
                    <small class="muted">Stacked:</small>
                    <input id="id-pills-stacked" checked type="checkbox" class="ace-switch ace-switch-5" /><span for="id-pills-stacked" class="lbl"></span>
                </label>
            </span><!--/span-->
        </h3>
        

        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li class="disabled"><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>

    </div>
</div>

<!-- PAGE CONTENT ENDS HERE -->
                         </div><!--/row-->
    
                    </div><!--/#page-content-->
                      

                    <div id="ace-settings-container">
                        <div class="btn btn-app btn-mini btn-warning" id="ace-settings-btn">
                            <i class="icon-cog"></i>
                        </div>
                        <div id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hidden">
                                        <option data-class="default" value="#438EB9">#438EB9</option>
                                        <option data-class="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-class="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-class="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" /><label class="lbl" for="ace-settings-header"> Fixed Header</label></div>
                            <div><input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" /><label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label></div>
                        </div>
                    </div><!--/#ace-settings-container-->


            </div><!-- #main-content -->


        </div><!--/.fluid-container#main-container-->




        <a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
            <i class="icon-double-angle-up icon-only"></i>
        </a>


        <?php include"_script.php"?>

        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
        $(function() {
    $('#accordion2').on('hide', function (e) {
        $(e.target).prev().children(0).addClass('collapsed');
    })
    $('#accordion2').on('hidden', function (e) {
        $(e.target).prev().children(0).addClass('collapsed');
    })
    $('#accordion2').on('show', function (e) {
        $(e.target).prev().children(0).removeClass('collapsed');
    })
    $('#accordion2').on('shown', function (e) {
        $(e.target).prev().children(0).removeClass('collapsed');
    })
    
    
    
    

    var oldie = $.browser.msie && $.browser.version < 9;
    $('.easy-pie-chart.percentage').each(function(){
        $(this).easyPieChart({
            barColor: $(this).data('color'),
            trackColor: '#EEEEEE',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 8,
            animate: oldie ? false : 1000,
            size:75
        }).css('color', $(this).data('color'));
    });

    $('[data-rel=tooltip]').tooltip();
    $('[data-rel=popover]').popover({html:true});
    
    
        $('#gritter-regular').click(function(){
            $.gritter.add({
                title: 'This is a regular notice!',
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'media/images/avatar1.png',
                sticky: false,
                time: '',
                class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
            });

            return false;
        });

        $('#gritter-sticky').click(function(){
            var unique_id = $.gritter.add({
                title: 'This is a sticky notice!',
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'media/images/avatar.png',
                sticky: true,
                time: '',
                class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-without-image').click(function(){
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'This is a notice without an image!',
                // (string | mandatory) the text inside the notification
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-max3').click(function(){
            $.gritter.add({
                title: 'This is a notice with a max of 3 on screen at one time!',
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'media/images/avatar3.png',
                sticky: false,
                before_open: function(){
                    if($('.gritter-item-wrapper').length >= 3)
                    {
                        return false;
                    }
                },
                class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-error').click(function(){
            $.gritter.add({
                title: 'This is a warning notification',
                text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });
        

        $("#gritter-remove").click(function(){
            $.gritter.removeAll();
            return false;
        });
        
        
        ///////
        
        $("#bootbox-regular").on('click', function() {
            bootbox.prompt("What is your name?", function(result) {
                if (result === null) {
                    //Example.show("Prompt dismissed");
                } else {
                    //Example.show("Hi <b>"+result+"</b>");
                }
            });
        });
        
        $("#bootbox-confirm").on('click', function() {
            bootbox.confirm("Are you sure?", function(result) {
                if(result) {
                    bootbox.alert("You are sure!");
                }
            });
        });
        
        $("#bootbox-options").on('click', function() {
            bootbox.dialog("I am a custom dialog with smaller buttons", [{
                "label" : "Success!",
                "class" : "btn-small btn-success",
                "callback": function() {
                    //Example.show("great success");
                }
                }, {
                "label" : "Danger!",
                "class" : "btn-small btn-danger",
                "callback": function() {
                    //Example.show("uh oh, look out!");
                }
                }, {
                "label" : "Click ME!",
                "class" : "btn-small btn-primary",
                "callback": function() {
                    //Example.show("Primary button");
                }
                }, {
                "label" : "Just a button...",
                "class" : "btn-small"
                }]
            );
        });
        
        
        
        
        
        $('#spinner-opts small').css({display:'inline-block', width:'60px'})
        
        var slide_styles = ['', 'green','red','purple','orange', 'dark'];
        var ii = 0;
        $("#spinner-opts input[type=text]").each(function() {
            var $this = $(this);
            $this.hide().after('<span></span>');
            $this.next().addClass('ui-slider-small').
            addClass("ui-slider-"+slide_styles[ii++ % slide_styles.length]).
            css({'width':'125px' , 'display':'inline-block'}).slider({
                value:parseInt($this.val()),
                range: "min",
                animate:true,
                min: parseInt($this.data('min')),
                max: parseInt($this.data('max')),
                step: parseFloat($this.data('step')),
                slide: function( event, ui ) {
                    $this.attr('value', ui.value);
                    spinner_update();
                }
            });
        });
        
        
        
        
        
        $.fn.spin = function(opts) {
            this.each(function() {
              var $this = $(this),
                  data = $this.data();

              if (data.spinner) {
                data.spinner.stop();
                delete data.spinner;
              }
              if (opts !== false) {
                data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
              }
            });
            return this;
        };

        function spinner_update() {
            var opts = {};
            $('#spinner-opts input[type=text]').each(function() {
                opts[this.name] = parseFloat(this.value);
            });
            $('#spinner-preview').spin(opts);
        }

        
        
        
        
        $('#id-pills-stacked').removeAttr('checked').change(function(){
            $('.nav-pills').toggleClass('nav-stacked');
        });

})

        </script>

    </body>
</html>
