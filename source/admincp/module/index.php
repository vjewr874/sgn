<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-11-16 16:13:54
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace app\admin;class index extends Base{function initialize(){parent::initialize();}function index(){$O5hhC0=call_user_func_array(array($this,"Administrator"),array(1));echo "        <!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">";echo "
        <html lang=\"\">";echo "
        <head>";echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";echo IN_CHARSET;echo "\"/>";echo "
            <title>";echo IN_NAME;echo "管理中心</title>";echo "
            <link href=\"/static/admincp/css/main.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>";echo "
            <style type=\"text/css\">";echo "
                #mod_dialog {";echo "
                    display: none";echo "
                }";echo "
";echo "
                .dialog_mask {";echo "
                    position: fixed;";echo "
                    top: 0;";echo "
                    left: 0;";echo "
                    width: 100%;";echo "
                    height: 100%;";echo "
                    z-index: 10000;";echo "
                    display: -webkit-box;";echo "
                    -webkit-box-pack: center;";echo "
                    -webkit-box-align: center;";echo "
                    background: rgba(0, 0, 0, .4)";echo "
                }";echo "
";echo "
                .dialog_body {";echo "
                    width: 563px;";echo "
                    padding-top: 20px;";echo "
                    border-radius: 7px;";echo "
                    background: #fff";echo "
                }";echo "
";echo "
                .dialog_tit {";echo "
                    margin: 0;";echo "
                    line-height: 22px;";echo "
                    text-align: center;";echo "
                    font-size: 17px;";echo "
                    color: #000";echo "
                }";echo "
";echo "
                .dialog_cont {";echo "
                    margin: 10px 80px 15px;";echo "
                    overflow: hidden;";echo "
                    padding: 0";echo "
                }";echo "
";echo "
                .dialog_txt {";echo "
                    margin: 0 30px 5px;";echo "
                    line-height: 16px;";echo "
                    text-align: center;";echo "
                    font-size: 14px;";echo "
                    color: #000";echo "
                }";echo "
";echo "
                .dialog_txt a {";echo "
                    text-decoration: none;";echo "
                    color: #000";echo "
                }";echo "
";echo "
                .dialog_operate {";echo "
                    position: relative;";echo "
                    display: -webkit-box";echo "
                }";echo "
";echo "
                .dialog_operate:before {";echo "
                    content: \"\";";echo "
                    position: absolute;";echo "
                    top: 0;";echo "
                    left: 0;";echo "
                    right: 0;";echo "
                    z-index: 1;";echo "
                    height: 1px;";echo "
                    background: rgba(0, 0, 0, .3)";echo "
                }";echo "
";echo "
                .dialog_operate .dialog_btn {";echo "
                    display: block;";echo "
                    cursor: pointer;";echo "
                    -webkit-box-flex: 1;";echo "
                    position: relative;";echo "
                    height: 44px;";echo "
                    line-height: 44px;";echo "
                    text-decoration: none;";echo "
                    text-align: center;";echo "
                    font-size: 17px;";echo "
                    color: #157efb;";echo "
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)";echo "
                }";echo "
";echo "
                .dialog_operate .dialog_btn:nth-child(2):before {";echo "
                    content: \"\";";echo "
                    position: absolute;";echo "
                    left: 0;";echo "
                    top: 0;";echo "
                    bottom: 0;";echo "
                    z-index: 1;";echo "
                    width: 1px;";echo "
                    background: rgba(0, 0, 0, .3)";echo "
                }";echo "
";echo "
                .dialog_operate .dialog_btn span {";echo "
                    display: inline-block;";echo "
                    width: 120px";echo "
                }";echo "
";echo "
                .dialog_operate .dialog_btn_strong {";echo "
                    font-weight: bold";echo "
                }";echo "
";echo "
                @media only screen and (-webkit-min-device-pixel-ratio: 1.5) {";echo "
                    .dialog_operate:before {";echo "
                        -webkit-transform: scaleY(.5)";echo "
                    }";echo "
";echo "
                    .dialog_operate .btn:nth-child(2):before {";echo "
                        -webkit-transform: scaleX(.5)";echo "
                    }";echo "
                }";echo "
";echo "
                .SuspendedBall {";echo "
                    position: fixed;";echo "
                    width: 50px;";echo "
                    height: 50px;";echo "
                    background: #3071a9;";echo "
                    border-radius: 10px;";echo "
                    -moz-border-radius: 10px;";echo "
                    -webkit-border-radius: 10px;";echo "
                    filter: alpha(opacity=50);";echo "
                    -moz-opacity: .5;";echo "
                    opacity: .5;";echo "
                    z-index: 999;";echo "
                    cursor: pointer;";echo "
                    right: 0;";echo "
                    bottom: 0";echo "
                }";echo "
";echo "
                .SuspendedBall > div {";echo "
                    width: 30px;";echo "
                    height: 30px;";echo "
                    margin: 10px;";echo "
                    background: #fff;";echo "
                    border-radius: 15px;";echo "
                    -moz-border-radius: 15px;";echo "
                    -webkit-border-radius: 15px;";echo "
                    filter: alpha(opacity=80);";echo "
                    -moz-opacity: .8;";echo "
                    opacity: .8;";echo "
                    background-image: url(\"static/pack/chat/icon/avatar.png\");";echo "
                    background-repeat: no-repeat;";echo "
                    background-size: 80% auto;";echo "
                    background-position-x: 50%;";echo "
                    background-position-y: 50%";echo "
                }";echo "
";echo "
                .talk_mask {";echo "
                    display: none;";echo "
                    position: fixed;";echo "
                    top: 0;";echo "
                    left: 0;";echo "
                    width: 100%;";echo "
                    height: 100%;";echo "
                    z-index: 10000;";echo "
                    -webkit-box-pack: center;";echo "
                    -webkit-box-align: center";echo "
                }";echo "
";echo "
                .talk_body {";echo "
                    position: fixed;";echo "
                    background: #F2F9FD";echo "
                }";echo "
            </style>";echo "
            <script src=\"static/admincp/js/common.js\"></script>";echo "
        </head>";echo "
        <body style=\"margin: 0px\" scroll=\"no\">";echo "
        <div id=\"notice\">";echo "
            <a onclick=\"\$('main').src='?c=update&setup=checkup'\">";echo "
                程序有新版本发布<span>在线升级[<b id=\"build\" style=\"color:red\"></b>]</span>";echo "
            </a>";echo "
        </div>";echo "
        <table id=\"frametable\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" height=\"100%\">";echo "
            <tr>";echo "
                <td colspan=\"2\" height=\"45\">";echo "
                    <div class=\"mainhd\">";echo "
                        <a href=\"?c=index\" class=\"logo\">管理后台</a>";echo "
                        <div class=\"uinfo\" id=\"frameuinfo\">";echo "
                            <p>您好, <em>";echo $_COOKIE['in_adminname'];echo "</em> [<a href=\"?a=logout\">退出</a>]</p>";echo "
                            <p class=\"btnlink\"><a href=\"/\" target=\"_blank\">站点首页</a></p>";echo "
                        </div>";echo "
                        <div class=\"navbg\"></div>";echo "
                        <div class=\"nav\">";echo "
                            <ul id=\"topmenu\">";echo "
                                <li><em>";echo "
                                        <a href=\"?c=body\" id=\"header_index\" hidefocus=\"true\"";echo "
                                           onclick=\"toggleMenu('index', '?c=body');doane(event);\">";echo "
                                            首页";echo "
                                        </a>";echo "
                                    </em>";echo "
                                </li>";echo "
                                ";unset($O5htIAW);$topac=db('action')->where('pid','0')->where('status','1')->order('sort')->select();foreach($topac as $item){echo "                                    <li class=\"navon\"><em>";echo "
                                            <a href=\"?c=";echo $item['c'];echo "&a=";$ӿ�Џ��="strlen";$O5heFbN0=$ӿ�Џ��(2);$O5hbNAZ=0==$O5heFbN0;if($O5hbNAZ)goto O5heWjgx2;if($item['p'])goto O5heWjgx2;$O5hbNB0=gettype(E_PARSE)=="EHMSO";if($O5hbNB0)goto O5heWjgx2;goto O5hldMhx2;O5heWjgx2:$O5hAW='&' . $item['p'];$O5hAX=$O5hAW;goto O5hx1;O5hldMhx2:$O5hAX='';O5hx1:$O5hAY=$item['a'] . $O5hAX;echo $O5hAY;echo "\"";echo "
                                               id=\"header_";echo $item['c'];echo "\" hidefocus=\"true\"";echo "
                                               onclick=\"toggleMenu('";echo $item["c"];echo "', '?c=";echo $item["c"];echo "');doane(event);\">";echo "
                                                ";echo $item['name'];echo "                                            </a>";echo "
                                        </em>";echo "
                                    </li>";echo "
                                ";}echo "                            </ul>";echo "
                            <div class=\"currentloca\">";echo "
                                <p id=\"admincpnav\"></p>";echo "
                            </div>";echo "
                            <div class=\"navbd\"></div>";echo "
                            <div class=\"sitemapbtn\">";echo "
                                <a href=\"javascript:void(0)\" id=\"cpmap\" onclick=\"showMap();return false;\"><img";echo "
                                            src=\"static/admincp/image/btn_map.gif\" title=\"管理中心导航(ESC键)\" width=\"46\"";echo "
                                            height=\"18\"/></a>";echo "
                            </div>";echo "
                        </div>";echo "
                    </div>";echo "
                </td>";echo "
            </tr>";echo "
            <tr>";echo "
                <td valign=\"top\" width=\"130\" class=\"menutd\">";echo "
                    <div id=\"leftmenu\" class=\"menu\">";echo "
                        <ul id=\"menu_index\" style=\"display: none\">";echo "
                            <li>";echo "
                                <a class=\"tabon\" href=\"?c=body\" hidefocus=\"true\" target=\"main\">";echo "
                                    <em onclick=\"menuNewwin(this)\" title=\"新窗口打开\"></em>管理首页</a>";echo "
                            </li>";echo "
                        </ul>";echo "
                        ";foreach($topac as $item){echo "                            <ul id=\"menu_";echo $item['c'];echo "\" style=\"display: none\">";echo "
                                ";unset($O5htIAW);$clist=db('action')->where('pid',$item['id'])->where('status','1')->order('sort')->select();foreach($clist as $citem){echo "                                    <li onclick=\"active('";echo $item["c"];echo "',this)\">";echo "
                                        <a href=\"?c=";echo $citem['c'];echo "&a=";if($citem['p'])goto O5heWjgx4;unset($O5htIvPbNB0);$O5hIobm=true;if(is_object($O5hIobm))goto O5heWjgx4;$�ŷ����="strlen";$O5heFbN0=$�ŷ����(2);$O5hbNAZ=0==$O5heFbN0;if($O5hbNAZ)goto O5heWjgx4;goto O5hldMhx4;O5heWjgx4:$O5hAW='&' . $citem['p'];$O5hAX=$O5hAW;goto O5hx3;O5hldMhx4:$O5hAX='';O5hx3:$O5hAY=$citem['a'] . $O5hAX;echo $O5hAY;echo "\"";echo "
                                           hidefocus=\"true\" target=\"main\">";echo "
                                            <em onclick=\"menuNewwin(this)\"";echo "
                                                title=\"新窗口打开\"></em>";echo $citem['name'];echo "                                        </a>";echo "
                                    </li>";echo "
                                ";}echo "                            </ul>";echo "
                        ";}echo "                    </div>";echo "
                </td>";echo "
                <td valign=\"top\" width=\"100%\" class=\"mask\">";echo "
                    <iframe src=\"?c=body\" id=\"main\" name=\"main\" width=\"100%\" height=\"100%\" frameborder=\"0\"";echo "
                            scrolling=\"yes\"";echo "
                            style=\"overflow: visible\"></iframe>";echo "
                </td>";echo "
            </tr>";echo "
        </table>";echo "
        <div id=\"scrolllink\" style=\"display: none\">";echo "
            <span onclick=\"menuScroll(1)\"><img src=\"static/admincp/image/scrollu.gif\"/></span><span";echo "
                    onclick=\"menuScroll(2)\">";echo "
        <img src=\"static/admincp/image/scrolld.gif\"/></span>";echo "
        </div>";echo "
        <div class=\"copyright\">";echo "
            <p>版本: ";echo IN_VERSION;echo "</p>";echo "
            <p>编码: ";$�������="strtoupper";$O5heF0=$�������(IN_CHARSET);echo $O5heF0;echo "</p>";echo "
            <p>更新: ";echo IN_BUILD;echo "</p>";echo "
        </div>";echo "
        <div id=\"cpmap_menu\" class=\"custom\" style=\"display: none\">";echo "
            <div class=\"cmain\" id=\"cmain\"></div>";echo "
            <div class=\"cfixbd\"></div>";echo "
        </div>";echo "
        <script>";echo "
            var cookiepre = '3KLp_2132_', cookiedomain = '', cookiepath = '/';";echo "
            var headers = new Array('index', 'config_setting', 'app', 'user', 'clean', 'admin', 'global', 'content', 'plugin', 'system'),";echo "
                admincpfilename = '',";echo "
                menukey = '';";echo "
";echo "
            function switchheader(key) {";echo "
                if (!key || !\$('header_' + key)) {";echo "
                    return;";echo "
                }";echo "
                for (var k in top.headers) {";echo "
                    if (\$('menu_' + headers[k])) {";echo "
                        \$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';";echo "
                    }";echo "
                }";echo "
                var lis = \$('topmenu').getElementsByTagName('li');";echo "
                for (var i = 0; i < lis.length; i++) {";echo "
                    if (lis[i].className == 'navon') lis[i].className = '';";echo "
                }";echo "
                \$('header_' + key).parentNode.parentNode.className = 'navon';";echo "
            }";echo "
";echo "
            var headerST = null;";echo "
";echo "
            function previewheader(key) {";echo "
                if (key) {";echo "
                    headerST = setTimeout(function () {";echo "
                        for (var k in top.headers) {";echo "
                            if (\$('menu_' + headers[k])) {";echo "
                                \$('menu_' + headers[k]).style.display = headers[k] == key ? '' : 'none';";echo "
                            }";echo "
                        }";echo "
                        var hrefs = \$('menu_' + key).getElementsByTagName('a');";echo "
                        for (var j = 0; j < hrefs.length; j++) {";echo "
                            hrefs[j].className = '';";echo "
                        }";echo "
                    }, 1000);";echo "
                } else {";echo "
                    clearTimeout(headerST);";echo "
                }";echo "
            }";echo "
";echo "
            function toggleMenu(key, url) {";echo "
                menukey = key;";echo "
                switchheader(key);";echo "
                if (url) {";echo "
                    parent.main.location = admincpfilename + url;";echo "
                    var hrefs = \$('menu_' + key).getElementsByTagName('a');";echo "
                    for (var j = 0; j < hrefs.length; j++) {";echo "
                        hrefs[j].className = '';";echo "
                    }";echo "
                    hrefs[0].className = 'tabon';";echo "
                }";echo "
                setMenuScroll();";echo "
            }";echo "
";echo "
            function active(key, li) {";echo "
                var hrefs = \$('menu_' + key).getElementsByTagName('a');";echo "
                for (var j = 0; j < hrefs.length; j++) {";echo "
                    hrefs[j].className = '';";echo "
                }";echo "
                li.children[0].className = 'tabon'";echo "
            }";echo "
";echo "
            function setMenuScroll() {";echo "
                \$('frametable').style.width = document.body.offsetWidth < 1000 ? '1000px' : '100%';";echo "
                var obj = \$('menu_' + menukey);";echo "
                if (!obj) {";echo "
                    return;";echo "
                }";echo "
                var scrollh = document.body.offsetHeight - 160;";echo "
                obj.style.overflow = 'visible';";echo "
                obj.style.height = '';";echo "
                \$('scrolllink').style.display = 'none';";echo "
                if (obj.offsetHeight + 150 > document.body.offsetHeight && scrollh > 0) {";echo "
                    obj.style.overflow = 'hidden';";echo "
                    obj.style.height = scrollh + 'px';";echo "
                    \$('scrolllink').style.display = '';";echo "
                }";echo "
            }";echo "
";echo "
            function resizeHeadermenu() {";echo "
                var lis = \$('topmenu').getElementsByTagName('li');";echo "
                var maxsize = \$('frameuinfo').offsetLeft - 160, widths = 0, moi = -1, mof = '';";echo "
                if (\$('menu_mof')) {";echo "
                    \$('topmenu').removeChild(\$('menu_mof'));";echo "
                }";echo "
                if (\$('menu_mof_menu')) {";echo "
                    \$('append_parent').removeChild(\$('menu_mof_menu'));";echo "
                }";echo "
                for (var i = 0; i < lis.length; i++) {";echo "
                    widths += lis[i].offsetWidth;";echo "
                    if (widths > maxsize) {";echo "
                        lis[i].style.visibility = 'hidden';";echo "
                        var sobj = lis[i].childNodes[0].childNodes[0];";echo "
                        if (sobj) {";echo "
                            mof += '<a href=\"' + sobj.getAttribute('href') + '\" onclick=\"\$(' + sobj.id + ').onclick()\">&rsaquo; ' + sobj.innerHTML + '</a><br style=\"clear:both\" />';";echo "
                        }";echo "
                    } else {";echo "
                        lis[i].style.visibility = 'visible';";echo "
                    }";echo "
                }";echo "
                if (mof) {";echo "
                    for (var i = 0; i < lis.length; i++) {";echo "
                        if (lis[i].style.visibility == 'hidden') {";echo "
                            moi = i;";echo "
                            break;";echo "
                        }";echo "
                    }";echo "
                    mofli = document.createElement('li');";echo "
                    mofli.innerHTML = '<em><a href=\"javascript:;\">&raquo;</a></em>';";echo "
                    mofli.onmouseover = function () {";echo "
                        showMenu({'ctrlid': 'menu_mof', 'pos': '43'});";echo "
                    }";echo "
                    mofli.id = 'menu_mof';";echo "
                    \$('topmenu').insertBefore(mofli, lis[moi]);";echo "
                    mofmli = document.createElement('li');";echo "
                    mofmli.className = 'popupmenu_popup';";echo "
                    mofmli.style.width = '150px';";echo "
                    mofmli.innerHTML = mof;";echo "
                    mofmli.id = 'menu_mof_menu';";echo "
                    mofmli.style.display = 'none';";echo "
                    \$('append_parent').appendChild(mofmli);";echo "
                }";echo "
            }";echo "
";echo "
            function menuScroll(op, e) {";echo "
                var obj = \$('menu_' + menukey);";echo "
                var scrollh = document.body.offsetHeight - 160;";echo "
                if (op == 1) {";echo "
                    obj.scrollTop = obj.scrollTop - scrollh;";echo "
                } else if (op == 2) {";echo "
                    obj.scrollTop = obj.scrollTop + scrollh;";echo "
                } else if (op == 3) {";echo "
                    if (!e) e = window.event;";echo "
                    if (e.wheelDelta <= 0 || e.detail > 0) {";echo "
                        obj.scrollTop = obj.scrollTop + 20;";echo "
                    } else {";echo "
                        obj.scrollTop = obj.scrollTop - 20;";echo "
                    }";echo "
                }";echo "
            }";echo "
";echo "
            function menuNewwin(obj) {";echo "
                var href = obj.parentNode.href;";echo "
                if (obj.parentNode.href.indexOf(admincpfilename + '?') != -1) {";echo "
                    href += '';";echo "
                }";echo "
                window.open(href);";echo "
                doane();";echo "
            }";echo "
";echo "
            function initCpMenus(menuContainerid) {";echo "
                var key = '', lasttabon1 = null, lasttabon2 = null,";echo "
                    hrefs = \$(menuContainerid).getElementsByTagName('a');";echo "
                for (var i = 0; i < hrefs.length; i++) {";echo "
                    if (menuContainerid == 'leftmenu' && 'action=index'.indexOf(hrefs[i].href.substr(hrefs[i].href.indexOf(admincpfilename + '?') + admincpfilename.length + 1)) != -1) {";echo "
                        if (lasttabon1) {";echo "
                            lasttabon1.className = '';";echo "
                        }";echo "
                        if (hrefs[i].parentNode.parentNode.tagName == 'OL') {";echo "
                            hrefs[i].parentNode.parentNode.style.display = '';";echo "
                            hrefs[i].parentNode.parentNode.parentNode.className = 'lsub desc';";echo "
                            key = hrefs[i].parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(5);";echo "
                        } else {";echo "
                            key = hrefs[i].parentNode.parentNode.id.substr(5);";echo "
                        }";echo "
                        hrefs[i].className = 'tabon';";echo "
                        lasttabon1 = hrefs[i];";echo "
                    }";echo "
                    if (!hrefs[i].getAttribute('ajaxtarget')) hrefs[i].onclick = function () {";echo "
                        if (menuContainerid != 'custommenu') {";echo "
                            var lis = \$(menuContainerid).getElementsByTagName('li');";echo "
                            for (var k = 0; k < lis.length; k++) {";echo "
                                if (lis[k].firstChild && lis[k].firstChild.className != 'menulink') {";echo "
                                    if (lis[k].firstChild.tagName != 'DIV') {";echo "
                                        lis[k].firstChild.className = '';";echo "
                                    } else {";echo "
                                        var subid = lis[k].firstChild.getAttribute('sid');";echo "
                                        if (subid) {";echo "
                                            var sublis = \$(subid).getElementsByTagName('li');";echo "
                                            for (var ki = 0; ki < sublis.length; ki++) {";echo "
                                                if (sublis[ki].firstChild && sublis[ki].firstChild.className != 'menulink') {";echo "
                                                    sublis[ki].firstChild.className = '';";echo "
                                                }";echo "
                                            }";echo "
                                        }";echo "
                                    }";echo "
                                }";echo "
                            }";echo "
                            if (this.className == '') this.className = menuContainerid == 'leftmenu' ? 'tabon' : '';";echo "
                        }";echo "
                        if (menuContainerid != 'leftmenu') {";echo "
                            var hk, currentkey;";echo "
                            var leftmenus = \$('leftmenu').getElementsByTagName('a');";echo "
                            for (var j = 0; j < leftmenus.length; j++) {";echo "
                                if (leftmenus[j].parentNode.parentNode.tagName == 'OL') {";echo "
                                    hk = leftmenus[j].parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(5);";echo "
                                } else {";echo "
                                    hk = leftmenus[j].parentNode.parentNode.id.substr(5);";echo "
                                }";echo "
                                if (this.href.indexOf(leftmenus[j].href) != -1) {";echo "
                                    if (lasttabon2) {";echo "
                                        lasttabon2.className = '';";echo "
                                    }";echo "
                                    leftmenus[j].className = 'tabon';";echo "
                                    if (leftmenus[j].parentNode.parentNode.tagName == 'OL') {";echo "
                                        leftmenus[j].parentNode.parentNode.style.display = '';";echo "
                                        leftmenus[j].parentNode.parentNode.parentNode.className = 'lsub desc';";echo "
                                    }";echo "
                                    lasttabon2 = leftmenus[j];";echo "
                                    if (hk != 'index') currentkey = hk;";echo "
                                } else {";echo "
                                    leftmenus[j].className = '';";echo "
                                }";echo "
                            }";echo "
                            if (currentkey) toggleMenu(currentkey);";echo "
                            hideMenu();";echo "
                        }";echo "
                    }";echo "
                }";echo "
                return key;";echo "
            }";echo "
";echo "
            function lsub(id, obj) {";echo "
                display(id);";echo "
                obj.className = obj.className != 'lsub' ? 'lsub' : 'lsub desc';";echo "
                if (obj.className != 'lsub') {";echo "
                    setcookie('cpmenu_' + id, '');";echo "
                } else {";echo "
                    setcookie('cpmenu_' + id, 1, 31536000);";echo "
                }";echo "
                setMenuScroll();";echo "
            }";echo "
";echo "
            var header_key = initCpMenus('leftmenu');";echo "
            toggleMenu(header_key ? header_key : 'index');";echo "
";echo "
            function initCpMap() {";echo "
                var ul, hrefs, s = '', count = 0;";echo "
                for (var k in headers) {";echo "
                    if (headers[k] != 'index' && headers[k] != 'app' && \$('header_' + headers[k])) {";echo "
                        s += '<tr><td valign=\"top\"><h4>' + \$('header_' + headers[k]).innerHTML + '</h4></td><td valign=\"top\">';";echo "
                        ul = \$('menu_' + headers[k]);";echo "
                        if (!ul) {";echo "
                            continue;";echo "
                        }";echo "
                        hrefs = ul.getElementsByTagName('a');";echo "
                        for (var i = 0; i < hrefs.length; i++) {";echo "
                            s += '<a href=\"' + hrefs[i].href + '\" target=\"' + hrefs[i].target + '\" k=\"' + headers[k] + '\">' + hrefs[i].innerHTML + '</a>';";echo "
                        }";echo "
                        s += '</td></tr>';";echo "
                        count++;";echo "
                    }";echo "
                }";echo "
                var width = 720;";echo "
                s = '<div class=\"cnote\" style=\"width:' + width + 'px\"><span class=\"right\"><a href=\"javascript:void(0)\" class=\"flbc\" onclick=\"hideMenu();return false;\"></a></span><h3>管理中心导航</h3></div>' + '<div class=\"cmlist\" style=\"width:' + width + 'px;height: 410px\"><table id=\"mapmenu\" cellspacing=\"0\" cellpadding=\"0\">' + s + '</table></div>';";echo "
                \$('cmain').innerHTML = s;";echo "
                \$('cmain').style.width = (width > 1000 ? 1000 : width) + 'px';";echo "
            }";echo "
";echo "
            initCpMap();";echo "
            initCpMenus('mapmenu');";echo "
            var cmcache = false;";echo "
";echo "
            function showMap() {";echo "
                showMenu({'ctrlid': 'cpmap', 'evt': 'click', 'duration': 3, 'pos': '00'});";echo "
            }";echo "
";echo "
            function resetEscAndF5(e) {";echo "
                e = e ? e : window.event;";echo "
                actualCode = e.keyCode ? e.keyCode : e.charCode;";echo "
                if (actualCode == 27) {";echo "
                    if (\$('cpmap_menu').style.display == 'none') {";echo "
                        showMap();";echo "
                    } else {";echo "
                        hideMenu();";echo "
                    }";echo "
                }";echo "
                if (actualCode == 116 && parent.main) {";echo "
                    parent.main.location.reload();";echo "
                    if (document.all) {";echo "
                        e.keyCode = 0;";echo "
                        e.returnValue = false;";echo "
                    } else {";echo "
                        e.cancelBubble = true;";echo "
                        e.preventDefault();";echo "
                    }";echo "
                }";echo "
            }";echo "
";echo "
            _attachEvent(document.documentElement, 'keydown', resetEscAndF5);";echo "
            _attachEvent(window, 'resize', setMenuScroll, document);";echo "
            _attachEvent(window, 'resize', resizeHeadermenu, document);";echo "
            if (BROWSER.ie) {";echo "
                \$('leftmenu').onmousewheel = function (e) {";echo "
                    menuScroll(3, e)";echo "
                };";echo "
            } else {";echo "
                \$('leftmenu').addEventListener(\"DOMMouseScroll\", function (e) {";echo "
                    menuScroll(3, e)";echo "
                }, false);";echo "
            }";echo "
            resizeHeadermenu();";echo "
        </script>";echo "
        </body>";echo "
        </html>";echo "
";echo "
        ";}}
?>