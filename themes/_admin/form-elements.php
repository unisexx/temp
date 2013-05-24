
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Form Elements - Ace Admin</title>
        <meta name="description" content="Common form elements and layouts" />

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

                    
                    <li>
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-desktop"></i>
                        <span>UI Elements</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li><a href="elements.html"><i class="icon-double-angle-right"></i> Elements</a></li>
                        <li><a href="buttons.html"><i class="icon-double-angle-right"></i> Buttons & Icons</a></li>
                      </ul>
                    </li>

                    
                    <li>
                      <a href="tables.html">
                        <i class="icon-list"></i>
                        <span>Tables</span>
                        
                      </a>
                    </li>

                    
                    <li class="active open">
                      <a href="#" class="dropdown-toggle" >
                        <i class="icon-edit"></i>
                        <span>Forms</span>
                        <b class="arrow icon-angle-down"></b>
                      </a>
                      <ul class="submenu">
                        <li class="active"><a href="form-elements.html"><i class="icon-double-angle-right"></i> Form Elements</a></li>
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
                            <li><a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span></li>
                            <li class="active">Form Elements</li>
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
                            <h1>Form Elements <small><i class="icon-double-angle-right"></i> Common form elements and layouts</small></h1>
                        </div><!--/page-header-->

                        

                        <div class="row-fluid">
<!-- PAGE CONTENT BEGINS HERE -->

    <form class="form-horizontal">
    
        <div class="control-group">
            <label class="control-label" for="form-field-1">Text Field</label>
            <div class="controls">
                <input type="text" id="form-field-1" placeholder="Username">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="form-field-2">Password Field</label>
            <div class="controls">
                <input type="password" id="form-field-2" placeholder="Password">
                <span class="help-inline">Inline help text</span>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-input-readonly">Readonly field</label>
            <div class="controls">
                <input readonly type="text" id="form-input-readonly" value="This text field is readonly!" />
                &nbsp; &nbsp;
                <input type="checkbox" id="id-disable-check" />
                <label class="lbl" for="id-disable-check"> Disable it!</label>
            </div>
        </div>
        
        
        <div class="control-group">
            <label class="control-label" for="form-field-4">Relative Sizing</label>
            <div class="controls">
                <input class="input-mini" type="text" id="form-field-4" placeholder=".input-mini">
                <div class="help-block" id="input-size-slider"></div>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-5">Grid Sizing</label>
            <div class="controls">
                <input class="span1" type="text" id="form-field-5" placeholder=".span1">
                <input class="span11" type="text" placeholder=".span11">
                <div class="help-block" id="input-span-slider"></div>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label">Input with Icon</label>
            <div class="controls">
                <span class="input-icon">
                    <input type="text" id="form-field-icon-1">
                    <i class="icon-leaf"></i>
                </span>
                
                <span class="input-icon input-icon-right">
                    <input type="text" id="form-field-icon-2">
                    <i class="icon-leaf"></i>
                </span>
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="form-field-6">Tooltip and help button</label>
            <div class="controls">
                <input class="ace-tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom">
                <span class="help-button ace-popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
            </div>
        </div>

    
        <div class="form-actions">
            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
        </div>
    
    
        <div class="hr"></div>
        
        <div class="row-fluid">
          <div class="span4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4>Text Area</h4>
                    <span class="widget-toolbar">
                        <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                        <a href="#" data-action="close"><i class="icon-remove"></i></a>
                    </span>
                </div>
                <div class="widget-body">
                 <div class="widget-main">
                    <div class="row-fluid">
                        <label for="form-field-8">Default</label>
                        <textarea class="span12" id="form-field-8" placeholder="Default Text"></textarea>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-9">With Character Limit</label>
                        <textarea class="span12 limited" id="form-field-9" data-maxlength="50"></textarea>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-11">Autosize</label>
                        <textarea id="form-field-11" class="autosize-transition span12"></textarea>
                    </div>
                 </div>
                </div>
            </div>
          </div><!--/span-->
          
          
          
          <div class="span4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4>Masked Input</h4>
                    <span class="widget-toolbar">
                        <a href="#" data-action="settings"><i class="icon-cog"></i></a>
                        <a href="#" data-action="reload"><i class="icon-refresh"></i></a>
                        <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                        <a href="#" data-action="close"><i class="icon-remove"></i></a>
                    </span>
                </div>
                <div class="widget-body">
                 <div class="widget-main">
                    <div class="row-fluid">
                        <label for="form-field-mask-1">Date <small class="text-success">99/99/9999</small></label>
                        <div class="input-append">
                            <input class="input-small input-mask-date" type="text" id="form-field-mask-1" />
                            <span class="btn btn-small"><i class="icon-calendar"></i> Go!</span>
                        </div>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-mask-2">Phone <small class="text-warning">(999) 999-9999</small></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-phone"></i></span>
                            <input class="input-medium input-mask-phone" type="text" id="form-field-mask-2" />
                        </div>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-mask-3">Product Key <small class="text-error">a*-999-a999</small></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-key"></i></span>
                            <input class="input-medium input-mask-product" type="text" id="form-field-mask-3" />
                        </div>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-mask-4">Eye Script <small class="text-info">~9.99 ~9.99 999</small></label>
                        <div>
                            <input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />
                        </div>
                    </div>

                 </div>
                </div>
            </div>
          </div><!--/span-->
          
          
          
          <div class="span4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4>Select Box</h4>
                    <span class="widget-toolbar">
                        <a href="#" data-action="settings"><i class="icon-cog"></i></a>
                        <a href="#" data-action="reload"><i class="icon-refresh"></i></a>
                        <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                        <a href="#" data-action="close"><i class="icon-remove"></i></a>
                    </span>
                </div>
                
                <div class="widget-body">
                 <div class="widget-main">
                    <div class="row-fluid">
                        <label for="form-field-select-1">Default</label>
                        <select id="form-field-select-1">
                              <option value=""></option>
                              <option value='AL'>Alabama</option><option value='AK'>Alaska</option><option value='AZ'>Arizona</option><option value='AR'>Arkansas</option><option value='CA'>California</option><option value='CO'>Colorado</option><option value='CT'>Connecticut</option><option value='DE'>Delaware</option><option value='DC'>District Of Columbia</option><option value='FL'>Florida</option><option value='GA'>Georgia</option><option value='HI'>Hawaii</option><option value='ID'>Idaho</option><option value='IL'>Illinois</option><option value='IN'>Indiana</option><option value='IA'>Iowa</option><option value='KS'>Kansas</option><option value='KY'>Kentucky</option><option value='LA'>Louisiana</option><option value='ME'>Maine</option><option value='MD'>Maryland</option><option value='MA'>Massachusetts</option><option value='MI'>Michigan</option><option value='MN'>Minnesota</option><option value='MS'>Mississippi</option><option value='MO'>Missouri</option><option value='MT'>Montana</option><option value='NE'>Nebraska</option><option value='NV'>Nevada</option><option value='NH'>New Hampshire</option><option value='NJ'>New Jersey</option><option value='NM'>New Mexico</option><option value='NY'>New York</option><option value='NC'>North Carolina</option><option value='ND'>North Dakota</option><option value='OH'>Ohio</option><option value='OK'>Oklahoma</option><option value='OR'>Oregon</option><option value='PA'>Pennsylvania</option><option value='RI'>Rhode Island</option><option value='SC'>South Carolina</option><option value='SD'>South Dakota</option><option value='TN'>Tennessee</option><option value='TX'>Texas</option><option value='UT'>Utah</option><option value='VT'>Vermont</option><option value='VA'>Virginia</option><option value='WA'>Washington</option><option value='WV'>West Virginia</option><option value='WI'>Wisconsin</option><option value='WY'>Wyoming</option>                        </select>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-select-2">Multiple</label>
                        <select id="form-field-select-2" multiple="multiple">
                              <option value='AL'>Alabama</option><option value='AK'>Alaska</option><option value='AZ'>Arizona</option><option value='AR'>Arkansas</option><option value='CA'>California</option><option value='CO'>Colorado</option><option value='CT'>Connecticut</option><option value='DE'>Delaware</option><option value='DC'>District Of Columbia</option><option value='FL'>Florida</option><option value='GA'>Georgia</option><option value='HI'>Hawaii</option><option value='ID'>Idaho</option><option value='IL'>Illinois</option><option value='IN'>Indiana</option><option value='IA'>Iowa</option><option value='KS'>Kansas</option><option value='KY'>Kentucky</option><option value='LA'>Louisiana</option><option value='ME'>Maine</option><option value='MD'>Maryland</option><option value='MA'>Massachusetts</option><option value='MI'>Michigan</option><option value='MN'>Minnesota</option><option value='MS'>Mississippi</option><option value='MO'>Missouri</option><option value='MT'>Montana</option><option value='NE'>Nebraska</option><option value='NV'>Nevada</option><option value='NH'>New Hampshire</option><option value='NJ'>New Jersey</option><option value='NM'>New Mexico</option><option value='NY'>New York</option><option value='NC'>North Carolina</option><option value='ND'>North Dakota</option><option value='OH'>Ohio</option><option value='OK'>Oklahoma</option><option value='OR'>Oregon</option><option value='PA'>Pennsylvania</option><option value='RI'>Rhode Island</option><option value='SC'>South Carolina</option><option value='SD'>South Dakota</option><option value='TN'>Tennessee</option><option value='TX'>Texas</option><option value='UT'>Utah</option><option value='VT'>Vermont</option><option value='VA'>Virginia</option><option value='WA'>Washington</option><option value='WV'>West Virginia</option><option value='WI'>Wisconsin</option><option value='WY'>Wyoming</option>                        </select>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-select-3">Chosen</label>
                        <select class="chzn-select" id="form-field-select-3" data-placeholder="Choose a Country...">
                              <option value=""></option>
                              <option value='AL'>Alabama</option><option value='AK'>Alaska</option><option value='AZ'>Arizona</option><option value='AR'>Arkansas</option><option value='CA'>California</option><option value='CO'>Colorado</option><option value='CT'>Connecticut</option><option value='DE'>Delaware</option><option value='DC'>District Of Columbia</option><option value='FL'>Florida</option><option value='GA'>Georgia</option><option value='HI'>Hawaii</option><option value='ID'>Idaho</option><option value='IL'>Illinois</option><option value='IN'>Indiana</option><option value='IA'>Iowa</option><option value='KS'>Kansas</option><option value='KY'>Kentucky</option><option value='LA'>Louisiana</option><option value='ME'>Maine</option><option value='MD'>Maryland</option><option value='MA'>Massachusetts</option><option value='MI'>Michigan</option><option value='MN'>Minnesota</option><option value='MS'>Mississippi</option><option value='MO'>Missouri</option><option value='MT'>Montana</option><option value='NE'>Nebraska</option><option value='NV'>Nevada</option><option value='NH'>New Hampshire</option><option value='NJ'>New Jersey</option><option value='NM'>New Mexico</option><option value='NY'>New York</option><option value='NC'>North Carolina</option><option value='ND'>North Dakota</option><option value='OH'>Ohio</option><option value='OK'>Oklahoma</option><option value='OR'>Oregon</option><option value='PA'>Pennsylvania</option><option value='RI'>Rhode Island</option><option value='SC'>South Carolina</option><option value='SD'>South Dakota</option><option value='TN'>Tennessee</option><option value='TX'>Texas</option><option value='UT'>Utah</option><option value='VT'>Vermont</option><option value='VA'>Virginia</option><option value='WA'>Washington</option><option value='WV'>West Virginia</option><option value='WI'>Wisconsin</option><option value='WY'>Wyoming</option>                        </select>
                    </div>
                    <hr />
                    <div class="row-fluid">
                        <label for="form-field-select-4">Chosen Multiple</label>
                        <select multiple class="chzn-select" id="form-field-select-4" data-placeholder="Choose a Country...">
                              <option value=""></option>
                              <option value='AL'>Alabama</option><option value='AK'>Alaska</option><option value='AZ'>Arizona</option><option value='AR'>Arkansas</option><option value='CA'>California</option><option value='CO'>Colorado</option><option value='CT'>Connecticut</option><option value='DE'>Delaware</option><option value='DC'>District Of Columbia</option><option value='FL'>Florida</option><option value='GA'>Georgia</option><option value='HI'>Hawaii</option><option value='ID'>Idaho</option><option value='IL'>Illinois</option><option value='IN'>Indiana</option><option value='IA'>Iowa</option><option value='KS'>Kansas</option><option value='KY'>Kentucky</option><option value='LA'>Louisiana</option><option value='ME'>Maine</option><option value='MD'>Maryland</option><option value='MA'>Massachusetts</option><option value='MI'>Michigan</option><option value='MN'>Minnesota</option><option value='MS'>Mississippi</option><option value='MO'>Missouri</option><option value='MT'>Montana</option><option value='NE'>Nebraska</option><option value='NV'>Nevada</option><option value='NH'>New Hampshire</option><option value='NJ'>New Jersey</option><option value='NM'>New Mexico</option><option value='NY'>New York</option><option value='NC'>North Carolina</option><option value='ND'>North Dakota</option><option value='OH'>Ohio</option><option value='OK'>Oklahoma</option><option value='OR'>Oregon</option><option value='PA'>Pennsylvania</option><option value='RI'>Rhode Island</option><option value='SC'>South Carolina</option><option value='SD'>South Dakota</option><option value='TN'>Tennessee</option><option value='TX'>Texas</option><option value='UT'>Utah</option><option value='VT'>Vermont</option><option value='VA'>Virginia</option><option value='WA'>Washington</option><option value='WV'>West Virginia</option><option value='WI'>Wisconsin</option><option value='WY'>Wyoming</option>                        </select>
                    </div>
                 </div>
                </div>
            </div>
          </div><!--/span-->
              
        </div><!--/row-->
        

        <div class="space-24"></div>
    
        <h3 class="header smaller lighter blue">Checkboxes & Radio <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small></h3>



        <div class="row-fluid">
          <div class="span5">
            <div class="control-group">
                <label class="control-label">Checkbox</label>
                <div class="controls">
                    <label>
                        <input name="form-field-checkbox" type="checkbox" /><span class="lbl"> choice 1</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox" type="checkbox" /><span class="lbl">  choice 2</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox" class="ace-checkbox-2" type="checkbox" /><span class="lbl"> choice 3</span>
                    </label>
                    <label>
                        <input name="form-field-checkbox" disabled type="checkbox" /><span class="lbl"> disabled</span>
                    </label>
                </div>
            </div>
          </div>
        
          <div class="span6">
            <div class="control-group">
                <label class="control-label">Radio</label>
                <div class="controls">
                    <label>
                        <input name="form-field-radio" type="radio" /><span class="lbl"> radio option 1</span>
                    </label>
                
                    <label>
                        <input name="form-field-radio" type="radio" /><span class="lbl"> radio option 2</span>
                    </label>
                
                    <label>
                        <input name="form-field-radio" type="radio" /><span class="lbl"> radio option 3</span>
                    </label>
                    
                    <label>
                        <input disabled name="form-field-radio" type="radio" /><span class="lbl"> disabled</span>
                    </label>
                </div>
            </div>
        
          </div>
        </div><!--/row-->
        
        <hr />

        <div class="control-group">
            <label class="control-label">On/Off Switches</label>
            <div class="controls">
                <div class="row-fluid">
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch" type="checkbox" /><span class="lbl"></span></label>
                    </div>
                
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-2" type="checkbox" /><span class="lbl"></span></label>
                    </div>
            
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-3" type="checkbox" /><span class="lbl"></span></label>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-4" type="checkbox" /><span class="lbl"></span></label>
                    </div>
                
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-5" type="checkbox" /><span class="lbl"></span></label>
                    </div>

                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-6" type="checkbox" /><span class="lbl"></span></label>
                    </div>
                    
                    <div class="span3">
                        <label><input name="switch-field-1" class="ace-switch ace-switch-7" type="checkbox" /><span class="lbl"></span></label>
                    </div>
                </div>
                
            </div>
        </div>
        
        <hr />
        
        <div class="row-fluid">
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4>Custom File Input</h4>
                        <span class="widget-toolbar">
                            <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                            <a href="#" data-action="close"><i class="icon-remove"></i></a>
                        </span>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                        <input type="file" id="id-input-file-1" />
                        <input type="file" id="id-input-file-2" />
                        <input multiple type="file" id="id-input-file-3" />
                     </div>
                    </div>
                </div>
            </div>
            
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4>jQuery UI Sliders</h4>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                        <div class="row-fluid">
                            <div class="span1">
                                <div id="slider-range"></div>
                            </div>
                            <div class="span11">
                                <div id="eq">
                                    <span class="ui-slider-green">77</span>
                                    <span class="ui-slider-red">55</span>
                                    <span class="ui-slider-purple">33</span>
                                    <span class="ui-slider-orange">40</span>
                                    <span class="ui-slider-dark">88</span>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
            
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4>Spinners</h4>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                        <input type="text" class="input-mini" id="spinner1" />
                            <div class="space-6"></div>
                        <input type="text" class="input-mini" id="spinner2" />
                            <div class="space-6"></div>
                        <input type="text" class="input-mini" id="spinner3" />
                     </div>
                    </div>
                </div>
            </div>
        </div>




        <hr />
        

        
        
        <div class="row-fluid">
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4>Date Picker</h4>
                        <span class="widget-toolbar">
                            <a href="#" data-action="settings"><i class="icon-cog"></i></a>
                            <a href="#" data-action="reload"><i class="icon-refresh"></i></a>
                            <a href="#" data-action="collapse"><i class="icon-chevron-up"></i></a>
                            <a href="#" data-action="close"><i class="icon-remove"></i></a>
                        </span>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                            <div class="row-fluid">
                                <label for="id-date-picker-1">Date Picker</label>
                            </div>
                            <div class="control-group">
                                <div class="row-fluid input-append date">
                                    <input class="span10 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                            
                            <hr />
                            
                            <div class="row-fluid">
                                <label for="id-date-range-picker-1">Date Range Picker</label>
                            </div>
                            <div class="control-group">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                    <input class="span11" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                                </div>
                            </div>
                            
                            <hr />
                            
                            <div class="row-fluid">
                                <label for="timepicker1">Time Picker</label>
                            </div>
                            <div class="control-group">
                                <div class="input-append bootstrap-timepicker">
                                    <input id="timepicker1" type="text" class="input-small" />
                                    <span class="add-on"><i class="icon-time"></i></span>
                                </div>
                            </div>

                     </div>
                    </div>
                </div>
            </div>
            
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4><i class="icon-tint"></i> Color Picker</h4>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                    
                        <div class="row-fluid">
                            <label for="colorpicker1">Color Picker</label>
                        </div>
                        <div class="control-group">
                            <div class="bootstrap-colorpicker">
                                <input id="colorpicker1" type="text" class="input-mini" />                          
                            </div>
                        </div>
                        
                        <hr />
        
                        <label for="simple-colorpicker-1">Custom Color Picker</label>
                        <select id="simple-colorpicker-1" class="hidden">
                              <option value="#ac725e">#ac725e</option>
                              <option value="#d06b64">#d06b64</option>
                              <option value="#f83a22">#f83a22</option>
                              <option value="#fa573c">#fa573c</option>
                              <option value="#ff7537">#ff7537</option>
                              <option value="#ffad46" selected>#ffad46</option>
                              <option value="#42d692">#42d692</option>
                              <option value="#16a765">#16a765</option>
                              <option value="#7bd148">#7bd148</option>
                              <option value="#b3dc6c">#b3dc6c</option>
                              <option value="#fbe983">#fbe983</option>
                              <option value="#fad165">#fad165</option>
                              <option value="#92e1c0">#92e1c0</option>
                              <option value="#9fe1e7">#9fe1e7</option>
                              <option value="#9fc6e7">#9fc6e7</option>
                              <option value="#4986e7">#4986e7</option>
                              <option value="#9a9cff">#9a9cff</option>
                              <option value="#b99aff">#b99aff</option>
                              <option value="#c2c2c2">#c2c2c2</option>
                              <option value="#cabdbf">#cabdbf</option>
                              <option value="#cca6ac">#cca6ac</option>
                              <option value="#f691b2">#f691b2</option>
                              <option value="#cd74e6">#cd74e6</option>
                              <option value="#a47ae2">#a47ae2</option>
                              <option value="#555">#555</option>
                        </select>

                     </div>
                    </div>
                </div>
            </div>
            
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4><i class="icon-dashboard"></i> Knob Input</h4>
                    </div>
                    <div class="widget-body">
                     <div class="widget-main">
                            <div class="control-group">
                            
                              <div class="row-fluid">
                                <div class="span6">
                                    <input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />
                                </div>
                                <div class="span6">
                                    <input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#87B87F" data-displayPrevious=true data-angleArc=250 data-angleOffset=-125 />
                                </div>
                              </div>
                              <div class="row-fluid">
                                <div class="span12 center">
                                    <input type="text" class="input-small knob" data-min="0" data-max="10"  data-width="150" data-height="150" data-thickness=".2" data-fgColor="#B8877F" data-angleOffset=90 data-cursor="true" />
                                </div>
                              </div>
                            
                            </div>
                     </div>
                    </div>

                </div>
            </div>
        </div>
     </form>
        
        
        <div class="space-24ger"></div>
        
        <h3 class="header smaller lighter green">Form Layouts</h3>
        <div class="row-fluid">
            <div class="span5">
                <div class="widget-box">
                  <div class="widget-header">
                    <h4>Default</h4>
                  </div>
                  <div class="widget-body">
                   <div class="widget-main no-padding">
                    <form>
                      <!-- <legend>Form</legend> -->
                      <fieldset>
                        <label>Label name</label>
                        <input type="text" placeholder="Type something…">
                        <span class="help-block">Example block-level help text here.</span>
                        <label class="pull-right">
                          <input type="checkbox"><span class="lbl"> check me out</span>
                        </label>
                      </fieldset>
                      <div class="form-actions center">
                        <button onclick="return false;" class="btn btn-small btn-success">Submit <i class="icon-arrow-right icon-on-right"></i></button>
                      </div>
                    </form>
                   </div>
                  </div>
                </div>
            </div>


            <div class="span7">
              <div class="row-fluid">
                <div class="widget-box">
                  <div class="widget-header">
                    <h4>Inline Forms</h4>
                  </div>
                  <div class="widget-body">
                   <div class="widget-main">
                    <form class="form-inline">
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox"><span class="lbl"> remember me</span>
                    </label>
                    <button onclick="return false;" class="btn btn-info btn-small"><i class="icon-key"></i>Login</button>
                    </form>
                   </div>
                  </div>
                </div>
              </div>
              
              <div class="space-6"></div>
              
              <div class="row-fluid">
                <div class="widget-box">
                  <div class="widget-header widget-header-small">
                    <h5 class="lighter">Search Form</h5>
                  </div>
                  <div class="widget-body">
                   <div class="widget-main">
                    <form class="form-search">
                    <input type="text" class="input-medium search-query">
                    <button onclick="return false;" class="btn btn-purple btn-small">Search <i class="icon-search icon-on-right"></i></button>
                    </form>
                   </div>
                  </div>
                </div>
              </div>
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
            $('#id-disable-check').on('click', function() {
                var inp = $('#form-input-readonly').get(0);
                if(inp.hasAttribute('disabled')) {
                    inp.setAttribute('readonly' , 'true');
                    inp.removeAttribute('disabled');
                    inp.value="This text field is readonly!";
                }
                else {
                    inp.setAttribute('disabled' , 'disabled');
                    inp.removeAttribute('readonly');
                    inp.value="This text field is disabled!";
                }
            });
        
        
            $(".chzn-select").chosen(); 
            $(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
            
            $('.ace-tooltip').tooltip();
            $('.ace-popover').popover();
            
            $('textarea[class*=autosize]').autosize({append: "\n"});
            $('textarea[class*=limited]').each(function() {
                var limit = parseInt($(this).attr('data-maxlength')) || 100;
                $(this).inputlimiter({
                    "limit": limit,
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });
            });
            
            $.mask.definitions['~']='[+-]';
            $('.input-mask-date').mask('99/99/9999');
            $('.input-mask-phone').mask('(999) 999-9999');
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
            
            
            
            $( "#input-size-slider" ).css('width','200px').slider({
                value:1,
                range: "min",
                min: 1,
                max: 6,
                step: 1,
                slide: function( event, ui ) {
                    var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                    var val = parseInt(ui.value);
                    $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
                }
            });

            $( "#input-span-slider" ).slider({
                value:1,
                range: "min",
                min: 1,
                max: 11,
                step: 1,
                slide: function( event, ui ) {
                    var val = parseInt(ui.value);
                    $('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
                }
            });
            
            
            var $tooltip = $("<div class='tooltip right in' style='display:none;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>").appendTo('body');
            $( "#slider-range" ).css('height','200px').slider({
                orientation: "vertical",
                range: true,
                min: 0,
                max: 100,
                values: [ 17, 67 ],
                slide: function( event, ui ) {
                    var val = ui.values[$(ui.handle).index()-1]+"";
                    
                    var pos = $(ui.handle).offset();
                    $tooltip.show().children().eq(1).text(val);     
                    $tooltip.css({top:pos.top - 10 , left:pos.left + 18});
                    
                    //$(this).find('a').eq(which).attr('data-original-title' , val).tooltip('show');
                }
            });
            $('#slider-range a').tooltip({placement:'right', trigger:'manual', animation:false}).blur(function(){
                $tooltip.hide();
                //$(this).tooltip('hide');
            });
            //$('#slider-range a').tooltip({placement:'right', animation:false});
            
            $( "#slider-range-max" ).slider({
                range: "max",
                min: 1,
                max: 10,
                value: 2,
                //slide: function( event, ui ) {
                //  $( "#amount" ).val( ui.value );
                //}
            });
            //$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
            
            $( "#eq > span" ).css({width:'90%', float:'left', margin:'15px'}).each(function() {
                // read initial values from markup and remove that
                var value = parseInt( $( this ).text(), 10 );
                $( this ).empty().slider({
                    value: value,
                    range: "min",
                    animate: true
                    
                });
            });

            
            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                no_file:'No File ...',
                btn_choose:'Choose',
                btn_change:'Change',
                droppable:false,
                onchange:null,
                thumbnail:false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });
            
            $('#id-input-file-3').ace_file_input({
                style:'well',
                btn_choose:'Drop files here or click to choose',
                btn_change:null,
                no_icon:'icon-cloud-upload',
                droppable:true,
                onchange:null,
                thumbnail:'small',
                before_change:function(files, dropped) {
                    /**
                    if(files instanceof Array || (!!window.FileList && files instanceof FileList)) {
                        //check each file and see if it is valid, if not return false or make a new array, add the valid files to it and return the array
                        //note: if files have not been dropped, this does not change the internal value of the file input element, as it is set by the browser, and further file uploading and handling should be done via ajax, etc, otherwise all selected files will be sent to server
                        //example:
                        var result = []
                        for(var i = 0; i < files.length; i++) {
                            var file = files[i];
                            if((/^image\//i).test(file.type) && file.size < 102400)
                                result.push(file);
                        }
                        return result;
                    }
                    */
                    return true;
                }
                /*,
                before_remove : function() {
                    return true;
                }*/

            }).on('change', function(){
                //console.log($(this).data('ace_input_files'));
                //console.log($(this).data('ace_input_method'));
            });

            
            $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
            .on('change', function(){
                //alert(this.value)
            });
            $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
            $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});

            
            /**
            var stubDataSource = {
            data: function (options, callback) {

                setTimeout(function () {
                    callback({
                        data: [
                            { name: 'Test Folder 1', type: 'folder', additionalParameters: { id: 'F1' } },
                            { name: 'Test Folder 1', type: 'folder', additionalParameters: { id: 'F2' } },
                            { name: 'Test Item 1', type: 'item', additionalParameters: { id: 'I1' } },
                            { name: 'Test Item 2', type: 'item', additionalParameters: { id: 'I2' } }
                        ]
                    });
                }, 0);

            }
            };
            $('#MyTree').tree({ dataSource: stubDataSource , multiSelect:true })
            */
            
            $('.date-picker').datepicker();
            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            });
            
            $('#id-date-range-picker-1').daterangepicker();
            
            $('#colorpicker1').colorpicker();
            $('#simple-colorpicker-1').ace_colorpicker();
        
            
        $(".knob").knob();
    

        });

        </script>

    </body>
</html>
