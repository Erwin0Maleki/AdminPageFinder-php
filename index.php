/*
---------------------------
-  coded by Erwin0maleki  -
---------------------------
*/
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    styles   -->
    <style>
        .yes {
            padding: 2px;
            border:3px solid #3fe53f;
            margin: 1px;
            display: block;
            color: #1a0dab;
        }
        .no {
            padding: 2px;
            border:3px solid #cd413e;
            margin: 1px;
            display: block;
        }
    </style>
</head>
<body>
<form action="">
    <label for="url"> site url : </label>
    <input type="text" name="url">
    <input type="submit" value="submit">
</form>
</body>
</html>
<!--php start script-->
<?php
error_reporting(0);
$admins = array('/admin/', '/administrator/', '/admin1/', '/cms/', '/admin2/', '/admin3/', '/admin4/', '/admin5/', '/usuarios/', '/usuario/', '/administrator/', '/moderator/', '/webadmin/', '/adminarea/', '/bb-admin/', '/adminLogin/', '/admin_area/', '/panel-administracion/', '/instadmin/',
    '/memberadmin/', '/administratorlogin/', '/adm/', '/admin/account.php', '/admin/index.php', '/admin/login.php', '/admin/admin.php', '/admin/account.php',
    '/admin_area/admin.php', '/admin_area/login.php', '/siteadmin/login.php', '/siteadmin/index.php', '/siteadmin/login.html', '/admin/account.html', '/admin/index.html', '/admin/login.html', '/admin/admin.html',
    '/admin_area/index.php', '/bb-admin/index.php', '/bb-admin/login.php', '/bb-admin/admin.php', '/admin/home.php', '/admin_area/login.html', '/admin_area/index.html',
    '/admin/controlpanel.php', '/admin.php', '/admincp/index.asp', '/admincp/login.asp', '/admincp/index.html', '/admin/account.html', '/adminpanel.html', '/webadmin.html',
    '/webadmin/index.html', '/webadmin/admin.html', '/webadmin/login.html', '/admin/admin_login.html', '/admin_login.html', '/panel-administracion/login.html',
    '/admin/cp.php', '/cp.php', '/administrator/index.php', '/administrator/login.php', '/nsw/admin/login.php', '/webadmin/login.php', '/admin/admin_login.php', '/admin_login.php',
    '/administrator/account.php', '/administrator.php', '/admin_area/admin.html', '/pages/admin/admin-login.php', '/admin/admin-login.php', '/admin-login.php',
    '/bb-admin/index.html', '/bb-admin/login.html', '/acceso.php', '/bb-admin/admin.html', '/admin/home.html', 'login.php', '/modelsearch/login.php', '/moderator.php', '/moderator/login.php',
    '/moderator/admin.php', '/account.php', '/pages/admin/admin-login.html', '/admin/admin-login.html', '/admin-login.html', '/controlpanel.php', '/admincontrol.php',
    '/admin/adminLogin.html', '/adminLogin.html', '/admin/adminLogin.html', '/home.html', '/rcjakar/admin/login.php', '/adminarea/index.html', '/adminarea/admin.html',
    '/webadmin.php', '/webadmin/index.php', '/webadmin/admin.php', '/admin/controlpanel.html', '/admin.html', '/admin/cp.html', '/cp.html', '/adminpanel.php', '/moderator.html',
    '/administrator/index.html', '/administrator/login.html', '/user.html', '/administrator/account.html', '/administrator.html', '/login.html', '/modelsearch/login.html',
    '/moderator/login.html', '/adminarea/login.html', '/panel-administracion/index.html', '/panel-administracion/admin.html', '/modelsearch/index.html', '/modelsearch/admin.html',
    '/admincontrol/login.html', '/adm/index.html', '/adm.html', '/moderator/admin.html', '/user.php', '/account.html', '/controlpanel.html', '/admincontrol.html',
    '/panel-administracion/login.php', '/wp-login.php', '/adminLogin.php', '/admin/adminLogin.php', '/home.php', '/admin.php', '/adminarea/index.php',
    '/adminarea/admin.php', '/adminarea/login.php', '/panel-administracion/index.php', '/panel-administracion/admin.php', '/modelsearch/index.php',
    '/modelsearch/admin.php', '/admincontrol/login.php', '/adm/admloginuser.php', '/admloginuser.php', '/admin2.php', '/admin2/login.php', '/admin2/index.php', '/usuarios/login.php',
    '/adm/index.php', '/adm.php', '/affiliate.php', '/adm_auth.php', '/memberadmin.php', '/administratorlogin.php', '/user/login', '/administrator', '/log', '/log.php');
if (isset($_REQUEST['url'])) {
    $url = $_REQUEST['url'];
    if ($url != '' && $url != ' ') {
        echo '<span>result : </span><br>';
        foreach ($admins as $pages) {
            $coin = $url . $pages;
            $toin = get_headers($coin);
            if (strpos($toin[0],'200')) {
                echo '<a class="yes" href="'.$coin.'">' . $coin . '  is responded' . '</a>';
            } else {
                echo '<p class="no">' . $coin . ' didn\'t respond' . '</p>';
            }
        }
    }
}



