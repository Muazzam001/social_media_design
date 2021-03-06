<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeMyLink - Activity Log</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
    <?php require_once 'header.php'?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="img/logo.png" class="logo-small" alt="">
                </div>
                <div class="modal-body">
                    <div class="col-md-12 profile-img-section wow fadeInDown">
                        <ul class="list-inline">
                            <li><img src="img/profile-img.png" class="profile-img" alt=""></li>
                            <li class="profile-name">User Name</li>
                        </ul>
                    </div>
                    <div class="col-md-12 menu-section wow fadeIn">
                        <ul class="nav">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <a href="go-live.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">videocam</span></li>
                                        <li>Go Live</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <a href="friends.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">supervisor_account</span></li>
                                        <li>Friends</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <a href="messages.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">chat</span></li>
                                        <li>Messages<span class="badge">3</span></li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".8s">
                                <a href="photos.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">insert_photo</span></li>
                                        <li>Photos</li>
                                    </ul>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="1s">
                                <a href="videos.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">videocam</span></li>
                                        <li>Videos</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 profile-img-section wow fadeInDown">
                        <ul class="nav">
                            <li>
                                <a href="groups.php">
                                    <ul class="list-inline inline">
                                        <li><span class="material-icons">supervisor_account</span></li>
                                        <li>Groups</li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-bar">
        <div class="col-md-12 profile-img-section wow fadeInDown">
            <ul class="list-inline">
                <li><img src="img/profile-img.png" class="profile-img" alt=""></li>
                <li class="profile-name">User Name</li>
            </ul>
        </div>
        <div class="col-md-12 menu-section wow fadeIn">
            <ul class="nav">
                <li class="wow fadeInUp" data-wow-delay=".2s">
                    <a href="go-live.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">videocam</span></li>
                            <li>Go Live</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="friends.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">supervisor_account</span></li>
                            <li>Friends</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="messages.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">chat</span></li>
                            <li>Messages<span class="badge">3</span></li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".8s">
                    <a href="photos.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">insert_photo</span></li>
                            <li>Photos</li>
                        </ul>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay="1s">
                    <a href="videos.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">videocam</span></li>
                            <li>Videos</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-12 profile-img-section wow fadeInDown">
            <ul class="nav">
                <li>
                    <a href="groups.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">supervisor_account</span></li>
                            <li>Groups</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="pages.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">flag</span></li>
                            <li>Pages</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="events.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">event</span></li>
                            <li>Events</li>
                        </ul>
                    </a>
                </li>
                <li>
                    <a href="pokes.php">
                        <ul class="list-inline inline">
                            <li><span class="material-icons">touch_app</span></li>
                            <li>Pokes</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-body wow fadeIn">
        <div class="container-fluid">
            <div class="row">
                <ul class="list-inline heading-friends">
                    <li>
                        <h4>Activity Log</h4>
                    </li>
                </ul>
            </div>
            <table class="table">
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li>
                                <span class="material-icons ac-photo">photo</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Added a new photo</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li><span class="material-icons ac-like">thumb_up</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Liked your post</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li><span class="material-icons ac-chat">chat</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Commented on your post</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li>
                                <span class="material-icons ac-photo">photo</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Added a new photo</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li><span class="material-icons ac-like">thumb_up</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Liked your post</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
                <tr>
                    <td style="width: 350px;">
                        <ul class="list-inline inline">
                            <li><span class="material-icons ac-chat">chat</span></li>
                            <li>
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Page Name</h5>
                                    </li>
                                    <li>
                                        <p class="text-black">4 Hours Ago</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="para">Commented on your post</p>
                    </td>
                    <td class="text-right">
                        <a href="#"><span class="material-icons edit">edit</span></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <ul class="list-inline text-white text-footer text-right">
                <li>&copy Copyright 2017</li>
                <li>|</li>
                <li>MeMyLink</li>
            </ul>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
