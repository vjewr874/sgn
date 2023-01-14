var palette = [
    ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", "rgb(153, 153, 153)", "rgb(183, 183, 183)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(239, 239, 239)", "rgb(243, 243, 243)", "rgb(255, 255, 255)"],
    ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
    ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
        "rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
];

// RGB转16进制(rgb2hex)
function colorRGB2Hex(color) {
    var rgb = color.split(',');
    var r = parseInt(rgb[0].split('(')[1]);
    var g = parseInt(rgb[1]);
    var b = parseInt(rgb[2].split(')')[0]);

    var hex = "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
    return hex;
}

// 基于颜色插件 获取颜色值
function getFontColor(obj) {
    var fontColor = $(obj).spectrum("get");
    fontColor = 'rgb(' + fontColor._r + ',' + fontColor._g + ',' + fontColor._b + ')';
    return colorRGB2Hex(fontColor);
}

// 基于颜色插件 获取颜色值的透明度
function getAlpha(obj) {
    return $(obj).spectrum("get")._a;
}

// 汉字 字符
function getByteLen(val) {
    var len = 0;
    for (var i = 0; i < val.length; i++) {
        var a = val.charAt(i);
        if (a.match(/[^\x00-\xff]/ig) != null) {
            len += 2;
        } else {
            len += 1;
        }
    }
    return len;
}

// 第三方分享
// 分享位置
/*
 $(".plugin-share .con").click(function () {
 $(".plugin-share .con").removeClass("active");
 $(this).addClass("active");
 });
 */

// 分享方式
$(".plugin-share .s-way .s-ul li").click(function () {
    var $elShow = $(".plugin-share .app-share");
    var i = $(this).data("way");
    $(this).addClass("active").siblings().removeClass("active");
    if (i == 1) {
        $elShow.show();
    } else {
        $elShow.hide();
    }
});

// 第三方分享 点击保存，验证
var wechatId = '';
var wechatSecret = '';
var shareText = '';
var shareUrl = '';
var shareWay = 1;
$("#shareModal .plugin-save").click(function () {
    var $wxId = $("#shareModal input[name=wxId]");
    var $wxSecret = $("#shareModal input[name=wxSecret]");
    var $text = $("#shareModal input[name=text]");
    var $link1 = $("#shareModal input[name=link1]");
    var way = $("#shareModal .s-ul li.active").attr("data-way");

    if (way == 1) {
        if ($wxId.val().length > 0 && $wxSecret.val().length > 0) {
            $wxSecret.next(".error").hide();
        } else {
            $wxSecret.next(".error").show();
        }
        wechatId = $wxId.val();
        wechatSecret = $wxSecret.val();
    } else {
        $wxSecret.next(".error").hide();
        wechatId = '';
        wechatSecret = '';
    }

    if (verifyUrl($link1.val())) {
        $link1.parents(".form-group").removeClass("form-error");
    } else {
        $link1.parents(".form-group").addClass("form-error");
    }
    var errorLEength = $(".plugin-share .error:visible").length;
    if (errorLEength == 0) {
        $("#shareModal").modal("hide");
    } else {
        $("#shareModal").modal("show");
    }
    shareText = $text.val();
    shareUrl = $link1.val();
    shareWay = way;
    share = {"way": way, "wxId": wechatId, "wxSecret": wechatSecret, "shareText": shareText, "shareUrl": shareUrl};
});

$("#keystoreModal .plugin-save").click(function () {
    var storeFileContent = $("input[name=store_file_content]").val();
    var storeStorepass = $("input[name=store_storepass]").val();
    var storeAlias = $("input[name=store_alias]").val();
    var storeKeypass = $("input[name=store_keypass]").val();
    if(storeFileContent){
        if(!(storeStorepass && storeAlias && storeKeypass)){
            layer.msg('请填写必填项');
            return false;
        }
    }
    androidKey = {
        'save':'1',
        'type':'2',
        'file_url': storeFileContent,
        'store_pass': storeStorepass,
        'alias': storeAlias,
        'key_pass': storeKeypass
    }
    $("#keystoreModal").modal("hide");
})

// 左侧栏 显示方式
// 左侧栏背景颜色
$("#colorPicker5").spectrum({
    color: "#f3f3f3",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateAsideBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});

function updateAsideBackground(color) {
    $("#asideModal .aside-modal .a-left .phone .bg").css("background-color", color);
}

// 左侧栏字体颜色
$("#asideFontColor").spectrum({
    color: "#333",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateAsideFontColor(color);
    },
    //选择器面板颜色设置
    palette: palette
});

function updateAsideFontColor(color) {
    $("#asideModal .a-left .aside-nav li .iconfont").css("color", color);
    $("#asideModal .a-left .aside-nav li .text").css("color", color);
}

tab.radioRound({
    el: "#displayMode li",
    checkedClass: "icon-radio-checked"
});
// 左侧栏 顶部显示APP图标
tab.radioTick({
    el: ".plugin-aside .top-show ul li"
});

// 左侧栏 图标显示隐藏
$(".plugin-aside .top-show ul li").click(function () {
    var i = $(this).index();
    var $icon = $("#asideModal .a-left .phone .aside-icon");
    if (i == 0) {
        $icon.show();
    } else {
        $icon.hide();
    }
});

// 左侧栏 显示方式
/*
 $("#displayMode li").click(function () {
 var index = $(this).index();
 $("#asideModal .phone .b-right img").eq(index).show().siblings().hide();
 });
 */

// 左侧栏 下拉框change字体颜色设置、显示链接输入框
$(".plugin-aside .n-list select").change(function () {
    $(this).css("color", "#333");
    var selectedVal = $(this).find(":selected").val();
    // console.log(selectedVal);
    if (selectedVal == "link_app" || selectedVal == "link_url") {
        $(this).parents("dd").find(".n-link").css("visibility", "visible").addClass("link-show");
    } else {
        $(this).parents("dd").find(".n-link").css("visibility", "hidden").removeClass("link-show");
    }
});

// 左侧栏 点击图标
var asideIconIndex = -1;
$(".plugin-aside .n-list .add-icon").click(function () {
    asideIconIndex = $(this).parents("dd").index();
    $("#iconsModal").modal("show");
});

// 左侧栏 设置图标
$(".plugin-modal .icons li").click(function () {
    var i = $(this).index();
    // console.log(i);
    $("#iconsModal").modal("hide");
    $('#asideModal').css({'overflow-y': 'scroll'});
    $("body").css("overflow", "hidden");
    $(".aside-modal .aside-nav li").eq(asideIconIndex).find(".iconfont").attr("class", "fl iconfont icon-" + i);
    $(".plugin-aside .n-list dd").eq(asideIconIndex).find(".add-icon").find(".iconfont").attr({
        "class": "iconfont icon-" + i,
        "data-index": i
    }).css("color", "#333");
});

//左侧栏 增加导航 默认显示1个
$(".plugin-aside .n-list .add-config").click(function () {
    var $dd = $(".plugin-aside .n-list dd:hidden");
    $dd.eq(0).show();
});

// 左侧栏 实时文字
$(".plugin-aside .n-list .n-text").bind("input propertychange", function () {
    var i = $(this).parents("dd").index();
    // console.log(i);
    var thisVal = $(this).val();
    if (thisVal.length == 0) {
        $("#asideModal .a-left .aside-nav li").eq(i).find(".text").text("");
    } else {
        // $("#asideModal .a-left .aside-nav li").eq(i).find(".text").text(thisVal);
        $("#asideModal .a-left .aside-nav li").eq(i).show().find(".text").text(thisVal);
    }
});

// 左侧栏 恢复默认
$(".plugin-aside .set-nav .reset").click(function () {
    // $("#colorPicker4").spectrum("set", "rgb(249, 249, 249)");
    // li恢复到隐藏
    $("#asideModal .a-left .aside-nav li").hide();

    // 去除错误状态
    $(".plugin-aside .n-list").find(".error").remove();

    // 恢复左侧导航文字为空
    $("#asideModal .a-left .aside-nav li .text").text("");

    // 恢复 配置导航显示1个
    $(".plugin-aside .set-nav .n-list dd:nth-of-type(n+2)").hide();

    // 导航名称默认恢复为空
    $(".plugin-aside .n-list .n-text").val('');

    // 恢复图标
    $("#asideModal .a-left .aside-nav li .iconfont").attr("class", "iconfont fl");
    $(".plugin-aside .n-list .add-icon .iconfont").attr({
        "class": "iconfont icon-jia",
        "data-index": ""
    }).css("color", "#eee");

    // select恢复到默认
    $(".plugin-aside .n-list select").each(function () {
        $(this).css("color", "#999");
        $(this).find("option").eq(0).attr("selected", "selected");
    });

    // 链接输入框恢复到默认
    $(".plugin-aside .n-list .n-link").css("visibility", "hidden").val("").removeClass("link-show");
});

// 左侧栏 删除
$(".plugin-aside .n-list .n-delete").click(function () {
    var $this = $(this).parents("dd");
    var i = $this.index();
    $this.hide();
    $this.find(".n-link").removeClass("link-show").show();
    $this.find("select").eq(0).attr("selected", "selected");

    $("#asideModal .a-left .aside-nav li").eq(i).find(".text").text("");
    $("#asideModal .a-left .aside-nav li").eq(i).find(".iconfont").attr("class", "iconfont fl");
});

// 升级提示 select选择自定义，自定义输入框显示
$(".plugin-upgrade-prompt select").change(function () {
    var selectedVal = $(this).find(":selected").val();
    if (selectedVal == 2) {
        $(this).next("input").show();
    } else {
        $(this).next("input").hide();
        $(this).next("input").val("");
    }
});

// 升级提示 选项卡
tab.radioRound({
    el: ".plugin-upgrade-prompt .version li",
    checkedClass: "icon-radio-checked"
});
tab.radioRound({
    el: ".plugin-upgrade-prompt .time li",
    checkedClass: "icon-radio-checked"
});
tab.radioTick({
    el: ".plugin-upgrade-prompt .style li"
});

// URL 拉起APP
$("#urlAppModal .plugin-url-app ul li").click(function () {
    var i = $(this).index();
    if (i == 0) {
        $(this).parents(".plugin-url-app").find(".color-warning").show();
    } else {
        $(this).parents(".plugin-url-app").find(".color-warning").hide();
    }
});

// 下拉刷新
$("#refreshModal .plugin-refresh ul li").click(function () {
    var i = $(this).index();
    if (i == 0) {
        $(this).parents(".plugin-refresh").find(".color-warning").show();
    } else {
        $(this).parents(".plugin-refresh").find(".color-warning").hide();
    }
});

// 加载进度条颜色
$("#colorPicker1").spectrum({
    color: "#157df1",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateLoadingBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});

function updateLoadingBackground(color) {
    $(".plugin-loading .con-1 .tit2 .progress1").css("background-color", color);
    return color;
};

function updateStateBackground(color) {
    $(".plugin-state .state-bgcolor").css("background-color", color);
};

function updateTitleBackground(color) {
    $(".plugin-title .state-bgcolor").css("background-color", color);
};

function updateTitleFontColor(color) {
    $(".plugin-title .title-top .text").css("color", color);
    $(".plugin-title .title-top .iconfont").css("color", color);
}

// 配置插件 index
var activeIndex1;
var activeIndex2;

$(".encapsulation3 .plugin-list1 .col-sm-2").click(function () {
    activeIndex1 = $(this).index();
    // console.log("免费" + activeIndex1);
    activeIndex2 = undefined;
    // console.log("付费" + activeIndex2);
});

$(".encapsulation3 .plugin-list2 .col-sm-2").click(function () {
    activeIndex2 = $(this).index();
    // console.log("付费" + activeIndex2);
    activeIndex1 = undefined;
    // console.log("免费" + activeIndex1);
});

/*
 $(".config-plugin .choose-cancel").click(function () {
 $(this).parents(".plugin-modal").find(".plugin-save").addClass("plugin-cancel");
 });
 */

// 保存按钮 操作
$(".plugin-save").click(function () {
    var has = $(this).hasClass("plugin-cancel");
    if (has) {
        $(".encapsulation3 .plugin-list1 .col-sm-2").eq(activeIndex1).find(".con").removeClass("active");
        $(this).removeClass("plugin-cancel");
    } else {
        $(".encapsulation3 .plugin-list1 .col-sm-2").eq(activeIndex1).find(".con").addClass("active").find(".icon-checkbox1").addClass("icon-checkbox-checked1 add-checked");
    }
});
$(".plugin-save").click(function () {
    var has = $(this).hasClass("plugin-cancel");
    if (has) {
        $(".encapsulation3 .plugin-list2 .col-sm-2").eq(activeIndex2).find(".con").removeClass("active");
        $(this).removeClass("plugin-cancel");
    } else {
        $(".encapsulation3 .plugin-list2 .col-sm-2").eq(activeIndex2).find(".con").addClass("active").find(".icon-checkbox1").addClass("icon-checkbox-checked1 add-checked");
    }
});

$(document).on("click", ".add-checked", function (e) {
    // console.log(123);
    $(".plugin-modal").modal("hide");
    $(this).removeClass("add-checked icon-checkbox-checked1");
    $(this).parents(".con").removeClass("active");
    e.stopPropagation();
});

// 加载动画
$(".plugin-loading .con").click(function () {
    $(this).parents(".plugin-loading").find(".con").removeClass("active");
    $(this).addClass("active");
    var i = $(this).parent(".col-sm-5").index();
    // console.log(i);
    var that = $(this).parents(".plugin-loading").find(".color-picker-wrap");
    if (i == 1) {
        that.hide();
    } else {
        that.show();
    }
});

// 清除缓存
$(".config-plugin .plugin-common .common-ul li").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
    var index = $(this).index();
    if (index == 0) {
        $(this).parents(".plugin-common").find(".bg-text-color").show();
        $(this).parents(".plugin-common").find(".be-hidden").hide();
    } else {
        $(this).parents(".plugin-common").find(".bg-text-color").hide();
        $(this).parents(".plugin-common").find(".be-hidden").show();
    }
});

// 极光推送
$('.plugin-modal .app-key').bind('input propertychange', function () {
    var valLength = $(this).val().length;
    // console.log(valLength);
    if (valLength > 0) {
        $(this).parents(".plugin-modal").find(".plugin-save").prop("disabled", false);
    } else {
        $(this).parents(".plugin-modal").find(".plugin-save").prop("disabled", true);
    }
});

// 退出提示
$(".plugin-exit .mode dd").click(function () {
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parents(".mode").find(".icon-radio").removeClass("icon-radio-checked");
    $(this).find(".icon-radio").addClass("icon-radio-checked");
});

// 引导页
$(".thumbnail").change(function () {
    $("#guideModal .plugin-save").prop("disabled", false);
});

$(".plugin-guide .radio-tick li").click(function () {
    var type = $(this).data("type");
    var $parents = $(this).parents("#guideModal");
    if (type == -1) {
        $(".experience-color", $parents).hide();
        $(".experience-btn", $parents).hide();
    } else {
        $(".experience-color", $parents).show();
        $(".experience-btn", $parents).show();
    }
});

// 引导页 立即体验文字颜色
$("#experienceTextColor").spectrum({
    color: "#fff",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateGuideFontColor(color);
    },
    //选择器面板颜色设置
    palette: palette
});

// console.log(getFontColor("#experienceTextColor"));
function updateGuideFontColor(color) {
    $("#guideModal .experience-btn").css({"color": color, "border-color": color});
};

// 引导页 上传图片预览
$("#guideModal .thumbnail").change(function () {
    var index = $(this).parents(".col-sm-3").index();
    var file = this.files[0];
    var name = $(this).val();
    // console.log(name);

    // 判断文件类型
    var type = (name.substr(name.lastIndexOf("."))).toLowerCase();
    // console.log(type);
    var typeModal = '<div class="modal fade" id="typeModal" tabindex="-1" role="dialog">\
                         <div class="modal-dialog modal-sm" role="document">\
                            <div class="modal-content">\
                                <div class="modal-body">\
                                   <div class="text-center">\
                                        <div><span class="icon icon-modal-error2"></span></div>\
                                        <p class="color-333 mt5">您上传的图片格式不正确，请重新上传！</p>\
                                        <div class="mt15">\
                                           <button type="button" class="ms-btn ms-btn-default w90" data-dismiss="modal">确定</button>\
                                        </div>\
                                    </div>\
                               </div>\
                            </div>\
                        </div>\
                    </div>';

    if (type != ".jpg" && type != ".gif" && type != ".jpeg" && type != ".png") {
        $("#typeModal").remove();
        $("body").append(typeModal);
        $("#typeModal").modal("show");
        return false;
    };

    if (file.size/(1024*1024) > 1) {
        Modal.generalModal({
            backdrop: false, // 点击阴影是否关闭弹窗， // true 开启； false 关闭
            p: '图片过大，请上传1M以内的图片', // 弹窗内容
            align: 'center', // 弹窗内容排列顺序 left center right
            successBtnText: '确定',  // 确定按钮文字
            successBtnModal: true, // 点击确定按钮是否关闭弹窗 true 关闭 false 不关闭
        });
        $(this).val("");
        return false;
    };

    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
        $("#guideModal .modal-aside-left .bg img").eq(index).attr("src", this.result);
    };
});

// 引导页删除上传图片
$(".plugin-guide .upload-img .icon-delete2").click(function () {
    var index = $(this).parents(".col-sm-3").index();
    $("#guideModal .modal-aside-left .bg img").eq(index).attr("src", "");
});

/*
// 状态栏背景颜色
$("#colorPicker22").spectrum({
    color: "#157df1",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateStateBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});

// 标题栏背景颜色 字体颜色
$("#colorPicker3").spectrum({
    color: "#157df1",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateTitleBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});
$("#titFontColor").spectrum({
    color: "#fff",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateTitleFontColor(color);
    },
    //选择器面板颜色设置
    palette: palette
});

// 状态栏 文字颜色
$(".plugin-modal .bg-text-color .writing li").click(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    if (index == 0) {
        $(this).parents(".plugin-state").find(".common-top").removeClass("black").addClass("white");
        // $(this).parents("#asideModal").find(".a-left").find(".aside-nav").removeClass("black").addClass("white")
    } else {
        $(this).parents(".plugin-state").find(".common-top").removeClass("white").addClass("black");
        // $(this).parents("#asideModal").find(".a-left").find(".aside-nav").removeClass("white").addClass("black");
    }
});

// 标题栏 标题文字实时展现
$(".plugin-title .input-title").bind("input propertychange", function () {
    var thisVal = $(this).val();
    $(this).parents(".plugin-title").find(".title-top").find(".text").text(thisVal);
});

// 标题栏 选择左功能键图标
$(".plugin-title .function-keys.f-left li").click(function () {
    var i = $(this).index();
    var no = $(this).hasClass("rule-out");
    var checked = $(this).hasClass("active");
    var disabled = $(this).hasClass("disabled");
    if (disabled) return;
    var $parent = $(this).parents(".function-keys");
    if (checked) {
        $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
        $(".plugin-title .title-top .t-left span").eq(i).hide();
    } else {
        $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        var dis1 = $(this).hasClass("disabled");
        // 不是disabled的状态，点击li，头部预览图标显示
        if (!dis1) {
            $(".plugin-title .title-top .t-left span").eq(i).show();
        }
    }

    var checkedLength = $parent.find(".active").length;

    // 超过2个
    if (checkedLength > 1) {
        $("li", $parent).not(".active").addClass("disabled");
    } else {
        $("li", $parent).not(".active").removeClass("disabled");
    }
    // 点击无
    var dis = $(this).hasClass("disabled");
    if (no && !dis) {
        if (checked) {
            $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
            $("li", $parent).removeClass("disabled");
        } else {
            $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1").parents(".active").siblings().removeClass("active").addClass("disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
            $(".plugin-title .title-top .t-left span").hide();
        }
    } else {
    }
    var aside = $("li[data-aside=1]", $parent).attr("data-aside");
    var $asideChecked = $("li[data-aside=1]", $parent).hasClass("active");
    var asideDis = $("li[data-aside=1]", $parent).hasClass("disabled");
    // 点击侧边栏出提示
    if (aside == 1 && $asideChecked && !asideDis) {
        $parent.next(".plugin-remind").show();
    } else {
        $parent.next(".plugin-remind").hide();
    }
    // 左侧是否选中了侧边栏
    if ($(".plugin-title .function-keys.f-right li[data-right-key='aside']").hasClass("active")) {
        $(".plugin-title .function-keys.f-left li[data-left-key='aside']").addClass("disabled");
    }
    if ($(".plugin-title .function-keys.f-left li[data-left-key='aside']").hasClass("active")) {
        $(".plugin-title .function-keys.f-right li[data-right-key='aside']").addClass("disabled");
    } else {
        if ($(".plugin-title .function-keys.f-right li.disabled").length <= 1) {
            $(".plugin-title .function-keys.f-right li[data-right-key='aside']").removeClass("disabled");
        }
    }
});

// 标题栏 选择右功能键图标
$(".plugin-title .function-keys.f-right li").click(function () {
    var i = $(this).index();
    var no = $(this).hasClass("rule-out");
    var checked = $(this).hasClass("active");
    var $parent = $(this).parents(".function-keys");
    var disabled = $(this).hasClass("disabled");
    if (disabled) return;
    if (checked) {
        $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
        $(".plugin-title .title-top .t-right span").eq(i).hide();
    } else {
        $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        var dis1 = $(this).hasClass("disabled");
        if (!dis1) {
            $(".plugin-title .title-top .t-right span").eq(i).show();
        }
    }

    var checkedLength = $parent.find(".active").length;
    // 超过2个
    if (checkedLength > 1) {
        $("li", $parent).not(".active").addClass("disabled");
    } else {
        $("li", $parent).not(".active").removeClass("disabled");
    }
    // 点击无
    var dis = $(this).hasClass("disabled");
    if (no && !dis) {
        if (checked) {
            $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
            $("li", $parent).removeClass("disabled");
        } else {
            $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1").parents(".active").siblings().removeClass("active").addClass("disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
            $(".plugin-title .title-top .t-right span").hide();
        }
    } else {
    }
    var aside = $("li[data-aside=1]", $parent).attr("data-aside");
    var $asideChecked = $("li[data-aside=1]", $parent).hasClass("active");
    var asideDis = $("li[data-aside=1]", $parent).hasClass("disabled");
    // 点击侧边栏出提示
    if (aside == 1 && $asideChecked && !asideDis) {
        $parent.next(".plugin-remind").show();
        $(".plugin-title .function-keys.f-left li[data-left-key='aside']").addClass("disabled");
    } else {
        $parent.next(".plugin-remind").hide();
        // 获取右侧置灰个数，超过一个不在开启
        if ($(".plugin-title .function-keys.f-left li.disabled").length <= 1) {
            $(".plugin-title .function-keys.f-left li[data-left-key='aside']").removeClass("disabled");
        }
    }
    // 左侧是否选中了侧边栏
    if ($(".plugin-title .function-keys.f-left li[data-left-key='aside']").hasClass("active")) {
        $(".plugin-title .function-keys.f-right li[data-right-key='aside']").addClass("disabled");
    }
    if ($(".plugin-title .function-keys.f-right li[data-right-key='aside']").hasClass("active")) {
        $(".plugin-title .function-keys.f-left li[data-left-key='aside']").addClass("disabled");
    } else {
        if ($(".plugin-title .function-keys.f-left li.disabled").length <= 1) {
            $(".plugin-title .function-keys.f-left li[data-left-key='aside']").removeClass("disabled");
        }
    }
});

$(".plugin-title .function-keys").on("click", ".disabled", function () {
    $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
})

// 标题栏 显示 隐藏
$("#titleShow li").click(function () {
    var i = $(this).index();
    if (i == 1) {
        $(".plugin-title .title-top .t-left span").hide();
        $(".plugin-title .title-top .t-right span").hide();
        $(".plugin-title .function-keys li").removeClass("active disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
        $(".plugin-title .function-keys.f-left li:eq(0)").addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        $(".plugin-title .function-keys.f-right li:eq(0)").addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");

        $(".plugin-title .bg-text-color").hide();
        $(".plugin-title .function-keys-wrap").hide();
    } else {
        $(".plugin-title .title-top .t-left span").eq(0).show();
        $(".plugin-title .title-top .t-right span").eq(0).show();
        $(".plugin-title .bg-text-color").show();
        $(".plugin-title .function-keys-wrap").show();
    }
});

// 标题栏点击保存
$("#titleModal .plugin-save").click(function () {
    var leftKeys = []; // 标题栏左侧功能键
    var rightKeys = []; // 标题栏右侧功能键

    function getKeys(obj, data, arr) {
        $(obj).each(function () {
            var has = $(this).hasClass("active");
            var val = $(this).attr(data);
            if (has) {
                arr.push(val);
            }
        });
    }

    getKeys(".function-keys.f-left li", "data-left-key", leftKeys);
    getKeys(".function-keys.f-right li", "data-right-key", rightKeys);

    var titleBg = getFontColor("#colorPicker3"); // 背景色
    var fontColor = getFontColor("#titFontColor"); // 文字色
    var showTitle = $("#titleShow .active").attr("data-show"); // 显示Or隐藏
    var titleVal = $('#titleModal input[name=title]').val(); // 标题栏文字

    if (showTitle == 1) {
        titleBar = {show: showTitle};
    } else {
        titleBar = {
            show: showTitle,
            bgColor: titleBg,
            titleColor: fontColor,
            title: titleVal,
            leftKey: leftKeys,
            rightKey: rightKeys
        };
    }
    console.log(titleBar);
});
*/


// 状态标题栏 状态栏背景颜色
$("#colorPicker2").spectrum({
    color: "#157df1", //初始化颜色
    showInput: true, //显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateStateBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});

// 状态标题栏 标题栏背景颜色 字体颜色
$("#colorPicker3").spectrum({
    color: "#157df1",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateTitleBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});
$("#titFontColor").spectrum({
    color: "#fff",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateTitleFontColor(color);
    },
    //选择器面板颜色设置
    palette: palette
});

function updateStateBackground(color) {
    $("#titleModal .state-bgcolor").css("background-color", color);
};

function updateTitleBackground(color) {
    $(".plugin-title .title-top").css("background-color", color);
};

function updateTitleFontColor(color) {
    $(".plugin-title .title-top .text").css("color", color);
    $(".plugin-title .title-top .iconfont").css("color", color);
}

// 状态标题栏 状态栏显示、隐藏
$("#titleModal .state-show-toggle li").click(function () {
    var state = $(this).data("state");
    var titleShow = $("#titleShow .active").attr("data-show");
    var $parents = $(this).parents(".config-plugin");
    if (state == 2) {
        $(".state-way ", $parents).hide();
        $(".state-way [data-state-way=1]", $parents).addClass("active").siblings().removeClass("active");
        $(".be-hidden1", $parents).show();
        $("#titleModal .state-top").removeClass("state-top-extension").hide();

        if (titleShow == 1) {
            $(".title-wrap1").show();
            $(".title-wrap1 .title-way").hide();
            $("#titleModal .state-bg-extension").hide();
            $("#titleModal .title-top").hide();
        } else {
            $(".title-wrap1").show();
            $(".title-wrap1 .title-way").show();
            $("#titleModal .state-bg-extension").hide();
            $("#titleModal .title-top").show();
        }
    } else {
        $(".state-way", $parents).show();
        $(".be-hidden1", $parents).hide();
        $("#titleModal .state-top").show();
        $("#titleModal .state-bg-color1").show();
    }
});

// 状态栏标题栏 选择背景图延伸
$("#titleModal .state-way-ul li").click(function () {
    var state = $(this).attr("data-state-way");
    var $parents = $(this).parents("#titleModal");
    if (state == 2) {
        $(".state-bg-color1", $parents).hide();
        $(".title-wrap1", $parents).hide();
        $(".state-bg-extension", $parents).show();
        $(".state-top", $parents).addClass("state-top-extension");
        $(".title-top", $parents).hide();
    } else {
        $(".state-bg-color1", $parents).show();
        $(".title-wrap1", $parents).show();
        $(".state-bg-extension", $parents).hide();
        $(".state-top", $parents).removeClass("state-top-extension");
        $(".title-top", $parents).show();
    }
});

// 状态标题栏 状态栏 字体颜色设置黑白
$("#titleModal .bg-text-color1 .writing li").click(function () {
    var state = $(this).attr("data-state-font-color");
    var $parents = $(this).parents("#titleModal");
    $(this).addClass("active").siblings().removeClass("active");

    if (state == 1) {
        $(".state-top", $parents).removeClass("black").addClass("white");
    } else {
        $(".state-top", $parents).removeClass("white").addClass("black");
    }
});

// 状态标题栏 标题栏显示、隐藏
$("#titleShow li").click(function () {
    var i = $(this).data("show");
    if (i == 1) {
        $("#titleModal .title-way").hide();
        $("#titleModal .title-top").hide();
        $("#titleModal .be-hidden2").show();
        // $(".plugin-title .title-top .t-left span").hide();
        // $(".plugin-title .title-top .t-right span").hide();
        // $(".plugin-title .function-keys li").removeClass("active disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
        // $(".plugin-title .function-keys.f-left li:eq(0)").addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        // $(".plugin-title .function-keys.f-right li:eq(0)").addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");

        // $(".plugin-title .bg-text-color").hide();
        // $(".plugin-title .function-keys-wrap").hide();
    } else {
        $("#titleModal .title-way").show();
        $("#titleModal .title-top").show();
        $("#titleModal .be-hidden2").hide();
        // $(".plugin-title .title-top .t-left span").eq(0).show();
        // $(".plugin-title .title-top .t-right span").eq(0).show();
        // $(".plugin-title .bg-text-color").show();
        // $(".plugin-title .function-keys-wrap").show();
    }
});

// 状态标题栏 标题栏 标题文字实时展现
$(".plugin-title .input-title").bind("input propertychange", function () {
    var thisVal = $(this).val();
    $(this).parents(".plugin-title").find(".title-top").find(".text").text(thisVal);
});

// 状态标题栏 标题栏 选择左功能键图标
$(".plugin-title .function-keys.f-left li").click(function () {
    var i = $(this).index();
    var no = $(this).hasClass("rule-out");
    var checked = $(this).hasClass("active");
    var $parent = $(this).parents(".function-keys");
    var disabled = $(this).hasClass("disabled");
    if (disabled) return;
    var $right = $(".plugin-title .function-keys.f-right");
    var $leftAside = $(".plugin-title .function-keys.f-left li[data-left-key='aside']");
    var $rightAside = $(".plugin-title .function-keys.f-right li[data-right-key='aside']");
    var $leftShare = $(".plugin-title .function-keys.f-left li[data-left-key='share']");
    var $rightShare = $(".plugin-title .function-keys.f-right li[data-right-key='share']");
    if (checked) {
        $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
        $(".plugin-title .title-top .t-left span").eq(i).hide();
    } else {
        $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        var dis1 = $(this).hasClass("disabled");
        // 不是disabled的状态，点击li，头部预览图标显示
        if (!dis1) {
            $(".plugin-title .title-top .t-left span").eq(i).show();
        }
    }
    // 点击左侧侧边栏，右侧侧边栏增加disabled
    if ($leftAside.hasClass("active")) {
        $rightAside.addClass("disabled disabled1");
    } else {
        $rightAside.removeClass("disabled disabled1");
    }
    // 点击左侧分享，右侧分享增加disabled
    if ($leftShare.hasClass("active")) {
        $rightShare.addClass("disabled disabled1");
    } else {
        $rightShare.removeClass("disabled disabled1");
    }

    var checkedLength = $parent.find(".active").length;
    // console.log("left:" + checkedLength);

    // 超过2个
    if (checkedLength > 1) {
        $("li", $parent).not(".active").addClass("disabled");
    } else {
        $("li", $parent).not(".active,.disabled1").removeClass("disabled");
    }

    // console.log($right.find(".active").length);
    if ($right.find(".active").length == 2) {
        if ($rightAside.hasClass("active")) {
            $rightAside.removeClass("disabled");
        } else {
            $rightAside.addClass("disabled");
        }
        if ($rightShare.hasClass("active")) {
            $rightShare.removeClass("disabled");
        } else {
            $rightShare.addClass("disabled");
        }
    }

    /*
        // 点击无
        var dis = $(this).hasClass("disabled");
        if (no && !dis) {
            if (checked) {
                $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
                $("li", $parent).not(".disabled1").removeClass("disabled");
            } else {
                $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1").parents(".active").siblings().removeClass("active").addClass("disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
                $(".plugin-title .title-top .t-left span").hide();
            }
        }
    */
    var aside = $("li[data-aside=1]", $parent).attr("data-aside");
    var $asideChecked = $("li[data-aside=1]", $parent).hasClass("active");
    var asideDis = $("li[data-aside=1]", $parent).hasClass("disabled");
    // 点击侧边栏出提示
    if (aside == 1 && $asideChecked && !asideDis) {
        $parent.next(".plugin-remind").show();
    } else {
        $parent.next(".plugin-remind").hide();
    }
    var share = $("li[data-share=1]", $parent).attr("data-share");
    var $shareChecked = $("li[data-share=1]", $parent).hasClass("active");
    var shareDis = $("li[data-share=1]", $parent).hasClass("disabled");
    // 点击分享出提示
    if (share == 1 && $shareChecked && !shareDis) {
        $parent.next(".plugin-remind").next(".plugin-remind1").show();
    } else {
        $parent.next(".plugin-remind").next(".plugin-remind1").hide();
    }
});

// 状态标题栏 标题栏 选择右功能键图标
$(".plugin-title .function-keys.f-right li").click(function () {
    var i = $(this).index();
    var no = $(this).hasClass("rule-out");
    var checked = $(this).hasClass("active");
    var $parent = $(this).parents(".function-keys");
    var disabled = $(this).hasClass("disabled");
    var $left = $(".plugin-title .function-keys.f-left");
    var $leftAside = $(".plugin-title .function-keys.f-left li[data-left-key='aside']");
    var $rightAside = $(".plugin-title .function-keys.f-right li[data-right-key='aside']");
    var $leftShare = $(".plugin-title .function-keys.f-left li[data-left-key='share']");
    var $rightShare = $(".plugin-title .function-keys.f-right li[data-right-key='share']");
    if (disabled) return;
    if (checked) {
        $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
        $(".plugin-title .title-top .t-right span").eq(i).hide();
    } else {
        $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1");
        var dis1 = $(this).hasClass("disabled");
        if (!dis1) {
            $(".plugin-title .title-top .t-right span").eq(i).show();
        }
    }
    // 点击右侧侧边栏，给左侧侧边栏增加disabled
    if ($rightAside.hasClass("active")) {
        $leftAside.addClass("disabled disabled1");
    } else {
        $leftAside.removeClass("disabled disabled1");
    }
    // 点击右侧分享，给左侧分享增加disabled
    if ($rightShare.hasClass("active")) {
        $leftShare.addClass("disabled disabled1");
    } else {
        $leftShare.removeClass("disabled disabled1");
    }

    var checkedLength = $parent.find(".active").length;
    // console.log("right:" + checkedLength);
    // 超过2个
    if (checkedLength > 1) {
        $("li", $parent).not(".active").addClass("disabled");
    } else {
        $("li", $parent).not(".active,.disabled1").removeClass("disabled");
        // console.log("left:" + $left.find(".active").length);
    }

    // console.log($left.find(".active").length);

    if ($left.find(".active").length == 2) {
        if ($leftAside.hasClass("active")) {
            $leftAside.removeClass("disabled");
        } else {
            $leftAside.addClass("disabled");
        }
        if ($leftShare.hasClass("active")) {
            $leftShare.removeClass("disabled");
        } else {
            $leftShare.addClass("disabled");
        }
    }

    /*
        // 点击无
        var dis = $(this).hasClass("disabled");
        if (no && !dis) {
            if (checked) {
                $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
                $("li", $parent).not(".disabled1").removeClass("disabled");
            } else {
                $(this).addClass("active").find(".iconfont").addClass("icon-checkbox-checked1").parents(".active").siblings().removeClass("active").addClass("disabled").find(".iconfont").removeClass("icon-checkbox-checked1");
                $(".plugin-title .title-top .t-right span").hide();
            }
        } else {
        }
    */

    var aside = $("li[data-aside=1]", $parent).attr("data-aside");
    var $asideChecked = $("li[data-aside=1]", $parent).hasClass("active");
    var asideDis = $("li[data-aside=1]", $parent).hasClass("disabled");
    // 点击侧边栏出提示
    if (aside == 1 && $asideChecked && !asideDis) {
        $parent.next(".plugin-remind").show();
        $(".plugin-title .function-keys.f-left li[data-left-key='aside']").addClass("disabled");
    } else {
        $parent.next(".plugin-remind").hide();
    }
    var share = $("li[data-share=1]", $parent).attr("data-share");
    var $shareChecked = $("li[data-share=1]", $parent).hasClass("active");
    var shareDis = $("li[data-share=1]", $parent).hasClass("disabled");
    // 点击分享出提示
    if (share == 1 && $shareChecked && !shareDis) {
        $parent.next(".plugin-remind").next(".plugin-remind1").show();
    } else {
        $parent.next(".plugin-remind").next(".plugin-remind1").hide();
    }
});

/*
$(".plugin-title .function-keys").on("click", ".disabled", function () {
    $(this).removeClass("active").find(".iconfont").removeClass("icon-checkbox-checked1");
});
*/

// 状态标题栏点击保存取值
$("#titleModal .plugin-save").click(function () {
    stateBar = {}; // 清空状态栏
    titleBar = {}; // 清空标题栏
    // 状态标题栏 状态栏取值
    // 状态栏显示、隐藏
    var showState = $("#titleModal .state-show-toggle .active").attr("data-state"); // 1 显示 2 隐藏
    // 状态栏显示方式
    var stateWay = $("#titleModal .state-way-ul .active").attr("data-state-way"); // 1 自定义 2 背景图延伸
    // 状态栏背景颜色
    var stateBgColor = getFontColor("#colorPicker2");
    // 状态栏背景透明度
    var stateBgColorAlpha = getAlpha("#colorPicker2");
    // 状态栏文字颜色
    var stateFontColor = $("#titleModal .writing .active").attr("data-state-font-color"); // 1 白色 2 黑色

    // 状态标题栏 标题栏取值
    // 标题栏 显示、隐藏
    var showTitle = $("#titleShow .active").attr("data-show"); // // 0 显示 1 隐藏
    // 标题栏 输入文字
    var titleVal = $('#titleModal input[name=title]').val();
    // 标题栏 背景颜色
    var titleBg = getFontColor("#colorPicker3");
    // 标题栏 背景颜色透明度
    var titleBgAlpha = getAlpha("#colorPicker3");
    // 标题栏 字体颜色
    var titleFontColor = getFontColor("#titFontColor");
    // 标题栏 字体透明度
    var titleFontColorAlpha = getAlpha("#titFontColor");
    // 左侧功能键 取值
    var leftKeys = [];
    // 右侧功能键 取值
    var rightKeys = [];

    function getKeys(obj, data, arr) {
        $(obj).each(function () {
            var has = $(this).hasClass("active");
            var val = $(this).attr(data);
            if (has) {
                arr.push(val);
            }
        });
    }

    getKeys(".function-keys.f-left li", "data-left-key", leftKeys);
    getKeys(".function-keys.f-right li", "data-right-key", rightKeys);

    if (showState != 2 && stateWay == 2) showTitle = 1; // 显示状态栏且延伸则标题栏不显示
    titleBar.show = showTitle;
    if (showTitle != 1) {
        titleBar.title = titleVal;
        titleBar.bgColor = titleBg;
        titleBar.bgAlpha = titleBgAlpha;
        titleBar.titleColor = titleFontColor;
        titleBar.titleAlpha = titleFontColorAlpha;
        titleBar.leftKey = leftKeys;
        titleBar.rightKey = rightKeys;
    }
    stateBar.state = showState;
    if (showState != 2) {
        stateBar.way = stateWay;
        if (stateWay == 2) { // 延伸
            stateBar.fontColor = stateFontColor;
        } else { // 自定义颜色
            stateBar.bgColor = stateBgColor;
            stateBar.bgAlpha = stateBgColorAlpha;
            stateBar.fontColor = stateFontColor;
        }
    }
});


// 导航栏背景颜色 字体图标颜色
$("#colorPicker4").spectrum({
    color: "#157df1",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateNavBackground(color);
    },
    //选择器面板颜色设置
    palette: palette
});
$("#navFontColor1").spectrum({
    color: "#ddd",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateNavFontColor1(color);
    },
    //选择器面板颜色设置
    palette: palette
});
$("#navFontColor2").spectrum({
    color: "#fff",//初始化颜色
    showInput: true,//显示输入
    showAlpha: true, // 透明度
    containerClassName: "full-spectrum",
    showInitial: true,//显示初始颜色,提供现在选择的颜色和初始颜色对比
    showPalette: true,//显示选择器面板
    showSelectionPalette: true,//记住选择过的颜色
    maxPaletteSize: 7,//记住选择过的颜色的最大数量
    preferredFormat: "hex",//输入框颜色格式,(hex十六进制,hex3十六进制可以的话只显示3位,hsl,rgb三原色,name英文名显示)
    hideAfterPaletteSelect: true,// 点击左侧选择颜色，面板关闭
    chooseText: "确定",
    cancelText: "取消",
    move: function (color) {//选择器右边面板移动时触发
    },
    show: function () {//选择器面板显示时触发
    },
    beforeShow: function () {//选择器面板显示之前触发,返回false时不显示
    },
    hide: function (color) {//选择器面板隐藏时触发
        updateNavFontColor2(color);
    },
    //选择器面板颜色设置
    palette: palette
});

function updateNavBackground(color) {
    $(".plugin-nav .state-bgcolor").css("background-color", color);
}

function updateNavFontColor1(color) {
    $(".plugin-nav .nav-top ul li").not(":eq(0)").find(".n-icon").css("color", color);
    $(".plugin-nav .nav-top ul li").not(":eq(0)").find(".icon-null").css("border-color", color);
    $(".plugin-nav .nav-top ul li").not(":eq(0)").find(".n-text").css("color", color);
}

function updateNavFontColor2(color) {
    $(".plugin-nav .nav-top ul li").eq(0).find(".n-icon").css("color", color);
    $(".plugin-nav .nav-top ul li").eq(0).find(".icon-null").css("border-color", color);
    $(".plugin-nav .nav-top ul li").eq(0).find(".n-text").css("color", color);
}

// console.log(getFontColor("#navFontColor1"));

// 导航栏 下拉框change字体颜色设置、显示链接输入框
$(".plugin-nav .n-list select").change(function () {
    $(this).css("color", "#333");
    var selectedVal = $(this).find(":selected").val();
    // console.log(selectedVal);
    if (selectedVal == 'link_app' || selectedVal == 'link_url') {
        $(this).parents("dd").find(".n-link").css("visibility", "visible").addClass("link-show");
    } else {
        $(this).parents("dd").find(".n-link").css("visibility", "hidden").removeClass("link-show");
    }
});

// 导航栏 图标、文字3种不同 显示方式
$(".plugin-nav .set-nav .set-bottom ul li").click(function () {
    var i = $(this).index();
    $(".plugin-nav .set-nav .set-bottom ul li").removeClass("active").find(".icon-radio").removeClass("icon-radio-checked");
    $(this).addClass("active").find(".icon-radio").addClass("icon-radio-checked");
    if (i == 0) {
        $(".plugin-nav .n-list .n-text").show();
        $(".plugin-nav .n-list .add-icon").show();

        $(".plugin-nav .nav-top .n-icon").show();
        $(".plugin-nav .nav-top .n-text").show();

        $(".plugin-nav .n-nav .nav-name").show();
        $(".plugin-nav .n-nav .nav-icon").show();
    } else if (i == 1) {
        $(".plugin-nav .n-list .n-text").hide();
        $(".plugin-nav .n-list .add-icon").show();

        $(".plugin-nav .nav-top .n-text").hide();
        $(".plugin-nav .nav-top .n-icon").show();

        $(".plugin-nav .n-nav .nav-name").hide();
        $(".plugin-nav .n-nav .nav-icon").show();
    } else {
        $(".plugin-nav .n-list .n-text").show();
        $(".plugin-nav .n-list .add-icon").hide();

        $(".plugin-nav .nav-top .n-text").show();
        $(".plugin-nav .nav-top .n-icon").hide();

        $(".plugin-nav .n-nav .nav-name").show();
        $(".plugin-nav .n-nav .nav-icon").hide();
    }
});

// 导航栏点击图标
var clickIconIndex = -1;
$(".plugin-nav .n-list .add-icon").click(function () {
    clickIconIndex = $(this).parents("dd").index();
    $("#iconsModal").modal("show");
});

// 导航栏 设置图标
$(".plugin-modal .icons li").click(function () {
    var i = $(this).index();
    // console.log(i);
    $("#iconsModal").modal("hide");
    $('#navModal').css({'overflow-y': 'scroll'});
    $("body").css("overflow", "hidden");
    $(".plugin-nav .nav-top ul li").eq(clickIconIndex).find(".n-icon").attr("class", "n-icon iconfont icon-" + i + "");
    $(".plugin-nav .n-list dd").eq(clickIconIndex).find(".add-icon").find(".iconfont").attr({
        "class": "iconfont icon-" + i,
        "data-index": i
    }).css("color", "#333");
});

/*
 $('#iconsModal').on('hidden.bs.modal', function() {
 $('#navModal').css({'overflow-y':'scroll'});
 });
 */

// 导航栏 增加配置导航 默认显示2个
$(".plugin-nav .n-list .add-config").click(function () {
    $dd = $(".plugin-nav .n-list dd");
    var showLength = $(".plugin-nav .n-list dd:visible").length;
    $(".plugin-nav .nav-top ul li").eq(showLength).css("display", "table-cell");
    $(".plugin-nav .n-list dd:hidden").eq(0).show();
    if (showLength >= 4) {
        $(this).addClass("disabled");
    } else {
        $(this).removeClass("disabled");
    }
});

// 导航栏 实时文字
$(".plugin-nav .n-list .n-text").bind("input propertychange", function () {
    var i = $(this).parents("dd").index();
    // console.log(i);
    var thisVal = $(this).val();
    if (thisVal.length == 0) {
        $(".plugin-nav .nav-top ul li").eq(i).find(".n-text").text('空白');
    } else {
        $(".plugin-nav .nav-top ul li").eq(i).find(".n-text").text(thisVal);
    }
});

// 导航栏 恢复默认
$(".plugin-nav .set-nav .reset").click(function () {
    // $("#colorPicker4").spectrum("set", "rgb(249, 249, 249)");

    // 去除错误状态
    $(".plugin-nav .n-list").find(".error").remove();

    // 恢复文字
    $(".plugin-nav .nav-top ul li .n-text").text('空白');

    // 恢复 配置导航显示2个
    $(".plugin-nav .set-nav .n-list dd:nth-of-type(n+3)").hide();

    // 预览导航 恢复到2个
    $(".plugin-nav .nav-top ul li:nth-of-type(n+3)").hide();

    // 导航名称默认恢复为空
    $(".plugin-nav .n-list .n-text").val('');

    // 恢复图标
    $(".plugin-nav .nav-top .n-icon").attr("class", "n-icon icon-null").css("display", "inline-block");
    $(".plugin-nav .n-list .add-icon .iconfont").attr({
        "class": "iconfont icon-jia",
        "data-index": ""
    }).css("color", "#eee");

    // select恢复到默认
    $(".plugin-nav .n-list select").each(function () {
        $(this).css("color", "#999");
        $(this).find("option").eq(0).attr("selected", "selected");
    });

    // 链接输入框恢复到默认
    $(".plugin-nav .n-list .n-link").css("visibility", "hidden").val("").removeClass("link-show");

    // 新增导航按钮去除disabled
    $(".plugin-nav .n-list .add-config").removeClass("disabled");
});

// 导航栏 删除
$(".plugin-nav .n-list .n-delete").click(function () {
    var $This = $(this).parents("dd");
    var i = $This.index();
    $This.hide();
    $This.find(".n-link").removeClass("link-show").show();
    $This.find("select").eq(0).attr("selected", "selected");
    $(".plugin-nav .nav-top ul li").eq(i).hide();

    var showLength = $(".plugin-nav .n-list dd:visible").length;
    if (showLength < 5) {
        $(".plugin-nav .n-list .add-config").removeClass("disabled");
    } else {
        $(".plugin-nav .n-list .add-config").addClass("disabled");
    }
});

// 导航栏 保存
$("#navModal .plugin-save").click(function () {
    var $dd = $(".plugin-nav .n-list dd:visible");
    // 导航栏
    $("#config8").parent().removeClass("active");
    $("#config8").find(".iconfont").removeClass("icon-checkbox-checked1");
    var navBgColor = getFontColor("#colorPicker4");
    var navBgColorAlpha = getAlpha("#colorPicker4");
    var navDefaultFontColor = getFontColor("#navFontColor1");
    var navDefaultFontColorAlpha = getAlpha("#navFontColor1");
    var navCheckedFontColor = getFontColor("#navFontColor2");
    var navCheckedFontColorAlpha = getAlpha("#navFontColor2");
    var iconNameShow = $("#iconNameShow .active").attr("data-show");

    // 第1个导航配置
    var navName0 = $dd.eq(0).find(".n-text").val();
    var navFun0 = $dd.eq(0).find(":selected").val();
    var navIcon0 = $dd.eq(0).find(".iconfont").attr("data-index");
    var navUrl0 = $dd.eq(0).find(".link-show").val();

    // 第2个导航配置
    var navName1 = $dd.eq(1).find(".n-text").val();
    var navFun1 = $dd.eq(1).find(":selected").val();
    var navIcon1 = $dd.eq(1).find(".iconfont").attr("data-index");
    var navUrl1 = $dd.eq(1).find(".link-show").val();

    // 第3个导航配置
    var navName2 = $dd.eq(2).find(".n-text").val();
    var navFun2 = $dd.eq(2).find(":selected").val();
    var navIcon2 = $dd.eq(2).find(".iconfont").attr("data-index");
    var navUrl2 = $dd.eq(2).find(".link-show").val();

    // 第4个导航配置
    var navName3 = $dd.eq(3).find(".n-text").val();
    var navFun3 = $dd.eq(3).find(":selected").val();
    var navIcon3 = $dd.eq(3).find(".iconfont").attr("data-index");
    var navUrl3 = $dd.eq(3).find(".link-show").val();

    // 第5个导航配置
    var navName4 = $dd.eq(4).find(".n-text").val();
    var navFun4 = $dd.eq(4).find(":selected").val();
    var navIcon4 = $dd.eq(4).find(".iconfont").attr("data-index");
    var navUrl4 = $dd.eq(4).find(".link-show").val();

    var nameOnOff1 = false;
    var iconOnOff1 = false;
    var selectOnOff1 = false;
    var linkOnOff1 = true;

    var iconOnOff2 = false;
    var selectOnOff2 = false;
    var linkOnOff2 = true;

    var nameOnOff3 = false;
    var selectOnOff3 = false;
    var linkOnOff3 = true;

    var vLength1 = $dd.length;
    // url 正则
    var match = /^((ht|f)tps?):\/\/([\w\-]+(\.[\w\-]+)*\/)*[\w\-]+(\.[\w\-]+)*\/?(\?([\w\-\.,@?^=%&:\/~\+#]*)+)?/;

    $dd.find('.error').remove();

    var nameErrorText = "请输入导航名称，四个字以内";
    var selectErrorText = "请选择导航功能";
    var iconErrorText = "请选择图标";
    var linkErrorText = "请输入http://或https://的链接地址";

    // 验证 判断
    // 显示名称和图标
    if (iconNameShow == 0) {
        for (var i = 0; i < vLength1; i++) {
            var This1 = $dd.eq(i);
            var thisNameLength1 = getByteLen($.trim(This1.find(".n-text").val()));
            var thisSelVal1 = This1.find(":selected").val();
            var hasIcon1 = This1.find(".add-icon").find(".iconfont").hasClass("icon-jia");
            var thisUrl1 = This1.find(".link-show").val();
            var linkVisble1 = This1.find(".n-link").hasClass("link-show");

            // 导航功能
            if (thisSelVal1 == 0) {
                This1.addClass("form-error");
                This1.append('<div class="error">' + selectErrorText + '</div>');
                selectOnOff1 = false;
                return false;
            } else {
                This1.removeClass("form-error");
                This1.find(".error").remove();
                selectOnOff1 = true;
            }

            // 名称
            if (thisNameLength1 > 0 && thisNameLength1 <= 8) {
                This1.removeClass("form-error");
                This1.find(".error").remove();
                nameOnOff1 = true;
            } else {
                This1.addClass("form-error");
                This1.append('<div class="error">' + nameErrorText + '</div>');
                nameOnOff1 = false;
                return false;
            }

            // 图标
            if (!hasIcon1) {
                This1.removeClass("form-error");
                This1.find(".error").remove();
                iconOnOff1 = true;
            } else {
                This1.addClass("form-error");
                This1.append('<div class="error">' + iconErrorText + '</div>');
                iconOnOff1 = false;
                return false;
            }
            // console.log(match.tidings(thisUrl1));
            // 链接
            if (linkVisble1) {
                if (!match.test(thisUrl1)) {
                    This1.addClass("form-error");
                    This1.append('<div class="error">' + linkErrorText + '</div>');
                    linkOnOff1 = false;
                    return false;
                } else {
                    This1.removeClass("form-error");
                    This1.find(".error").remove();
                    linkOnOff1 = true;
                }
            } else {
                linkOnOff1 = true;
            }
        }

        if (selectOnOff1 && nameOnOff1 && iconOnOff1 && linkOnOff1) {
            $("#navModal").modal("hide");
            $("#config8").parent().addClass("active");
            $("#config8").find(".iconfont").addClass("icon-checkbox-checked1");
        }
    } else if (iconNameShow == 1) { /*只显示图标*/
        for (var i = 0; i < vLength1; i++) {
            var This2 = $dd.eq(i);
            // var thisNameLength2 = getByteLen(This2.find(".n-text").val());
            var thisSelVal2 = This2.find(":selected").val();
            var hasIcon2 = This2.find(".add-icon").find(".iconfont").hasClass("icon-jia");
            var thisUrl2 = This2.find(".link-show").val();
            var linkVisble2 = This2.find(".n-link").hasClass("link-show");

            // 导航功能
            if (thisSelVal2 == 0) {
                This2.addClass("form-error");
                This2.append('<div class="error">' + selectErrorText + '</div>');
                selectOnOff2 = false;
                return false;
            } else {
                This2.removeClass("form-error");
                This2.find(".error").remove();
                selectOnOff2 = true;
            }

            // 图标
            if (!hasIcon2) {
                This2.removeClass("form-error");
                This2.find(".error").remove();
                iconOnOff2 = true;
            } else {
                This2.addClass("form-error");
                This2.append('<div class="error">' + iconErrorText + '</div>');
                iconOnOff2 = false;
                return false;
            }
            // console.log(match.tidings(thisUrl2));
            // 链接
            if (linkVisble2) {
                if (!match.test(thisUrl2)) {
                    This2.addClass("form-error");
                    This2.append('<div class="error">' + linkErrorText + '</div>');
                    linkOnOff2 = false;
                    return false;
                } else {
                    This2.removeClass("form-error");
                    This2.find(".error").remove();
                    linkOnOff2 = true;
                }
            } else {
                linkOnOff2 = true;
            }
        }

        if (selectOnOff2 && iconOnOff2 && linkOnOff2) {
            $("#navModal").modal("hide");
            $("#config8").parent().addClass("active");
            $("#config8").find(".iconfont").addClass("icon-checkbox-checked1");
        }
    } else { /*只显示名称*/
        for (var i = 0; i < vLength1; i++) {
            var This3 = $dd.eq(i);
            var thisNameLength3 = getByteLen($.trim(This3.find(".n-text").val()));
            var thisSelVal3 = This3.find(":selected").val();
            var thisUrl3 = This3.find(".link-show").val();
            var linkVisble3 = This3.find(".n-link").hasClass("link-show");

            // 导航功能
            if (thisSelVal3 == 0) {
                This3.addClass("form-error");
                This3.append('<div class="error">' + selectErrorText + '</div>');
                selectOnOff3 = false;
                return false;
            } else {
                This3.removeClass("form-error");
                This3.find(".error").remove();
                selectOnOff3 = true;
            }

            // 名称
            if (thisNameLength3 > 0 && thisNameLength3 <= 8) {
                This3.removeClass("form-error");
                This3.find(".error").remove();
                nameOnOff3 = true;
            } else {
                This3.addClass("form-error");
                This3.append('<div class="error">' + nameErrorText + '</div>');
                nameOnOff3 = false;
                return false;
            }

            // 链接
            if (linkVisble3) {
                if (!match.test(thisUrl3)) {
                    This3.addClass("form-error");
                    This3.append('<div class="error">' + linkErrorText + '</div>');
                    linkOnOff3 = false;
                    return false;
                } else {
                    This3.removeClass("form-error");
                    This3.find(".error").remove();
                    linkOnOff3 = true;
                }
            } else {
                linkOnOff3 = true;
            }
        }
        // console.log(nameOnOff3);

        if (selectOnOff3 && nameOnOff3 && linkOnOff3) {
            $("#navModal").modal("hide");
            $("#config8").parent().addClass("active");
            $("#config8").find(".iconfont").addClass("icon-checkbox-checked1");
        }
    }

    if (typeof (navName0) === 'undefined' || iconNameShow == 1) navName0 = '';
    if (typeof (navName1) === 'undefined' || iconNameShow == 1) navName1 = '';
    if (typeof (navName2) === 'undefined' || iconNameShow == 1) navName2 = '';
    if (typeof (navName3) === 'undefined' || iconNameShow == 1) navName3 = '';
    if (typeof (navName4) === 'undefined' || iconNameShow == 1) navName4 = '';

    if (typeof (navFun0) === 'undefined') navFun0 = '';
    if (typeof (navFun1) === 'undefined') navFun1 = '';
    if (typeof (navFun2) === 'undefined') navFun2 = '';
    if (typeof (navFun3) === 'undefined') navFun3 = '';
    if (typeof (navFun4) === 'undefined') navFun4 = '';

    if (typeof (navIcon0) === 'undefined' || iconNameShow == 2) navIcon0 = '';
    if (typeof (navIcon1) === 'undefined' || iconNameShow == 2) navIcon1 = '';
    if (typeof (navIcon2) === 'undefined' || iconNameShow == 2) navIcon2 = '';
    if (typeof (navIcon3) === 'undefined' || iconNameShow == 2) navIcon3 = '';
    if (typeof (navIcon4) === 'undefined' || iconNameShow == 2) navIcon4 = '';

    if (typeof (navUrl0) === 'undefined') navUrl0 = '';
    if (typeof (navUrl1) === 'undefined') navUrl1 = '';
    if (typeof (navUrl2) === 'undefined') navUrl2 = '';
    if (typeof (navUrl3) === 'undefined') navUrl3 = '';
    if (typeof (navUrl4) === 'undefined') navUrl4 = '';
    var dataIconName = [];
    if (navName0 || navFun0 || navIcon0 || navUrl0) dataIconName[0] = {
        text: navName0,
        action: navFun0,
        icon: navIcon0,
        url: navUrl0
    };
    if (navName1 || navFun1 || navIcon1 || navUrl1) dataIconName[1] = {
        text: navName1,
        action: navFun1,
        icon: navIcon1,
        url: navUrl1
    };
    if (navName2 || navFun2 || navIcon2 || navUrl2) dataIconName[2] = {
        text: navName2,
        action: navFun2,
        icon: navIcon2,
        url: navUrl2
    };
    if (navName3 || navFun3 || navIcon3 || navUrl3) dataIconName[3] = {
        text: navName3,
        action: navFun3,
        icon: navIcon3,
        url: navUrl3
    };
    if (navName4 || navFun4 || navIcon4 || navUrl4) dataIconName[4] = {
        text: navName4,
        action: navFun4,
        icon: navIcon4,
        url: navUrl4
    };


    navData = {
        menuBackgroundColor: navBgColor,
        menuBackgroundColorAlpha: navBgColorAlpha,
        menuTextColor: navDefaultFontColor,
        menuTextColorAlpha: navDefaultFontColorAlpha,
        menuPressedTextColor: navCheckedFontColor,
        menuPressedTextColorAlpha: navCheckedFontColorAlpha,
        show: iconNameShow,
        menu: dataIconName
    };
    console.log(navData);
});

// 左侧栏 取值
$("#asideModal .plugin-save").click(function () {
    $("#configAside").parent().removeClass("active");
    $("#configAside").find(".iconfont").removeClass("icon-checkbox-checked1");
    var $dd = $(".plugin-aside .n-list dd:visible");

    // 背景色
    var asideBgColor = getFontColor("#colorPicker5");
    // 背景色透明度
    var asideBgColorAlpha = getAlpha("#colorPicker5");

    // 文字和图标颜色
    var asideFontColor = getFontColor("#asideFontColor");
    // 文字和图标颜色透明度
    var asideFontColorAlpha = getAlpha("#asideFontColor");

    // 显示方式
    // var asideDisplay = $(".plugin-aside .set-nav .set-bottom ul .active").attr("data-display");
    // 显示APP
    var asideShowApp = $(".plugin-aside .top-show ul li.active").attr("data-app-show");

    // 第1个导航配置
    var navName0 = $dd.eq(0).find(".n-text").val();
    var navFun0 = $dd.eq(0).find(":selected").val();
    var navIcon0 = $dd.eq(0).find(".iconfont").attr("data-index");
    var navUrl0 = $dd.eq(0).find(".link-show").val();

    // 第2个导航配置
    var navName1 = $dd.eq(1).find(".n-text").val();
    var navFun1 = $dd.eq(1).find(":selected").val();
    var navIcon1 = $dd.eq(1).find(".iconfont").attr("data-index");
    var navUrl1 = $dd.eq(1).find(".link-show").val();

    // 第3个导航配置
    var navName2 = $dd.eq(2).find(".n-text").val();
    var navFun2 = $dd.eq(2).find(":selected").val();
    var navIcon2 = $dd.eq(2).find(".iconfont").attr("data-index");
    var navUrl2 = $dd.eq(2).find(".link-show").val();

    // 第4个导航配置
    var navName3 = $dd.eq(3).find(".n-text").val();
    var navFun3 = $dd.eq(3).find(":selected").val();
    var navIcon3 = $dd.eq(3).find(".iconfont").attr("data-index");
    var navUrl3 = $dd.eq(3).find(".link-show").val();

    // 第5个导航配置
    var navName4 = $dd.eq(4).find(".n-text").val();
    var navFun4 = $dd.eq(4).find(":selected").val();
    var navIcon4 = $dd.eq(4).find(".iconfont").attr("data-index");
    var navUrl4 = $dd.eq(4).find(".link-show").val();

    // 第6个导航配置
    var navName5 = $dd.eq(5).find(".n-text").val();
    var navFun5 = $dd.eq(5).find(":selected").val();
    var navIcon5 = $dd.eq(5).find(".iconfont").attr("data-index");
    var navUrl5 = $dd.eq(5).find(".link-show").val();

    // 第7个导航配置
    var navName6 = $dd.eq(6).find(".n-text").val();
    var navFun6 = $dd.eq(6).find(":selected").val();
    var navIcon6 = $dd.eq(6).find(".iconfont").attr("data-index");
    var navUrl6 = $dd.eq(6).find(".link-show").val();

    // 第8个导航配置
    var navName7 = $dd.eq(7).find(".n-text").val();
    var navFun7 = $dd.eq(7).find(":selected").val();
    var navIcon7 = $dd.eq(7).find(".iconfont").attr("data-index");
    var navUrl7 = $dd.eq(7).find(".link-show").val();

    // 第9个导航配置
    var navName8 = $dd.eq(8).find(".n-text").val();
    var navFun8 = $dd.eq(8).find(":selected").val();
    var navIcon8 = $dd.eq(8).find(".iconfont").attr("data-index");
    var navUrl8 = $dd.eq(8).find(".link-show").val();

    // 第10个导航配置
    var navName9 = $dd.eq(9).find(".n-text").val();
    var navFun9 = $dd.eq(9).find(":selected").val();
    var navIcon9 = $dd.eq(9).find(".iconfont").attr("data-index");
    var navUrl9 = $dd.eq(9).find(".link-show").val();

    var nameOnOff1 = false;
    var iconOnOff1 = false;
    var selectOnOff1 = false;
    var linkOnOff1 = true;

    var vLength1 = $dd.length;
    // url 正则
    var match = /^((ht|f)tps?):\/\/([\w\-]+(\.[\w\-]+)*\/)*[\w\-]+(\.[\w\-]+)*\/?(\?([\w\-\.,@?^=%&:\/~\+#]*)+)?/;

    $dd.find('.error').remove();

    var nameErrorText = "请输入导航名称，十个字以内";
    var selectErrorText = "请选择导航功能";
    var iconErrorText = "请选择图标";
    var linkErrorText = "请输入http://或https://的链接地址";

    // 验证 判断
    for (var i = 0; i < vLength1; i++) {
        var This1 = $dd.eq(i);
        var thisNameLength1 = getByteLen($.trim(This1.find(".n-text").val()));
        var thisSelVal1 = This1.find(":selected").val();
        var hasIcon1 = This1.find(".add-icon").find(".iconfont").hasClass("icon-jia");
        var thisUrl1 = This1.find(".link-show").val();
        var linkVisble1 = This1.find(".n-link").hasClass("link-show");

        // 导航功能
        if (thisSelVal1 == 0) {
            This1.addClass("form-error");
            This1.append('<div class="error">' + selectErrorText + '</div>');
            selectOnOff1 = false;
            return false;
        } else {
            This1.removeClass("form-error");
            This1.find(".error").remove();
            selectOnOff1 = true;
        }

        // 名称
        if (thisNameLength1 > 0 && thisNameLength1 <= 20) {
            This1.removeClass("form-error");
            This1.find(".error").remove();
            nameOnOff1 = true;
        } else {
            This1.addClass("form-error");
            This1.append('<div class="error">' + nameErrorText + '</div>');
            nameOnOff1 = false;
            return false;
        }

        // 图标
        if (!hasIcon1) {
            This1.removeClass("form-error");
            This1.find(".error").remove();
            iconOnOff1 = true;
        } else {
            This1.addClass("form-error");
            This1.append('<div class="error">' + iconErrorText + '</div>');
            iconOnOff1 = false;
            return false;
        }
        // console.log(match.tidings(thisUrl1));
        // 链接
        if (linkVisble1) {
            if (!match.test(thisUrl1)) {
                This1.addClass("form-error");
                This1.append('<div class="error">' + linkErrorText + '</div>');
                linkOnOff1 = false;
                return false;
            } else {
                This1.removeClass("form-error");
                This1.find(".error").remove();
                linkOnOff1 = true;
            }
        } else {
            linkOnOff1 = true;
        }
    }
    // console.log(linkOnOff1);
    if (selectOnOff1 && nameOnOff1 && iconOnOff1 && linkOnOff1) {
        $("#asideModal").modal("hide");
        $("#configAside").parent().addClass("active");
        $("#configAside").find(".iconfont").addClass("icon-checkbox-checked1");
    }

    if (typeof (navName0) === 'undefined') navName0 = '';
    if (typeof (navName1) === 'undefined') navName1 = '';
    if (typeof (navName2) === 'undefined') navName2 = '';
    if (typeof (navName3) === 'undefined') navName3 = '';
    if (typeof (navName4) === 'undefined') navName4 = '';
    if (typeof (navName5) === 'undefined') navName5 = '';
    if (typeof (navName6) === 'undefined') navName6 = '';
    if (typeof (navName7) === 'undefined') navName7 = '';
    if (typeof (navName8) === 'undefined') navName8 = '';
    if (typeof (navName9) === 'undefined') navName9 = '';

    if (typeof (navFun0) === 'undefined') navFun0 = '';
    if (typeof (navFun1) === 'undefined') navFun1 = '';
    if (typeof (navFun2) === 'undefined') navFun2 = '';
    if (typeof (navFun3) === 'undefined') navFun3 = '';
    if (typeof (navFun4) === 'undefined') navFun4 = '';
    if (typeof (navFun5) === 'undefined') navFun5 = '';
    if (typeof (navFun6) === 'undefined') navFun6 = '';
    if (typeof (navFun7) === 'undefined') navFun7 = '';
    if (typeof (navFun8) === 'undefined') navFun8 = '';
    if (typeof (navFun9) === 'undefined') navFun9 = '';

    if (typeof (navIcon0) === 'undefined') navIcon0 = '';
    if (typeof (navIcon1) === 'undefined') navIcon1 = '';
    if (typeof (navIcon2) === 'undefined') navIcon2 = '';
    if (typeof (navIcon3) === 'undefined') navIcon3 = '';
    if (typeof (navIcon4) === 'undefined') navIcon4 = '';
    if (typeof (navIcon5) === 'undefined') navIcon5 = '';
    if (typeof (navIcon6) === 'undefined') navIcon6 = '';
    if (typeof (navIcon7) === 'undefined') navIcon7 = '';
    if (typeof (navIcon8) === 'undefined') navIcon8 = '';
    if (typeof (navIcon9) === 'undefined') navIcon9 = '';

    if (typeof (navUrl0) === 'undefined') navUrl0 = '';
    if (typeof (navUrl1) === 'undefined') navUrl1 = '';
    if (typeof (navUrl2) === 'undefined') navUrl2 = '';
    if (typeof (navUrl3) === 'undefined') navUrl3 = '';
    if (typeof (navUrl4) === 'undefined') navUrl4 = '';
    if (typeof (navUrl5) === 'undefined') navUrl5 = '';
    if (typeof (navUrl6) === 'undefined') navUrl6 = '';
    if (typeof (navUrl7) === 'undefined') navUrl7 = '';
    if (typeof (navUrl8) === 'undefined') navUrl8 = '';
    if (typeof (navUrl9) === 'undefined') navUrl9 = '';
    var dataIconName = [];
    if (navName0 || navFun0 || navIcon0 || navUrl0) dataIconName[0] = {
        text: navName0,
        action: navFun0,
        icon: navIcon0,
        url: navUrl0
    };
    if (navName1 || navFun1 || navIcon1 || navUrl1) dataIconName[1] = {
        text: navName1,
        action: navFun1,
        icon: navIcon1,
        url: navUrl1
    };
    if (navName2 || navFun2 || navIcon2 || navUrl2) dataIconName[2] = {
        text: navName2,
        action: navFun2,
        icon: navIcon2,
        url: navUrl2
    };
    if (navName3 || navFun3 || navIcon3 || navUrl3) dataIconName[3] = {
        text: navName3,
        action: navFun3,
        icon: navIcon3,
        url: navUrl3
    };
    if (navName4 || navFun4 || navIcon4 || navUrl4) dataIconName[4] = {
        text: navName4,
        action: navFun4,
        icon: navIcon4,
        url: navUrl4
    };
    if (navName5 || navFun5 || navIcon5 || navUrl5) dataIconName[5] = {
        text: navName5,
        action: navFun5,
        icon: navIcon5,
        url: navUrl5
    };
    if (navName6 || navFun6 || navIcon6 || navUrl6) dataIconName[6] = {
        text: navName6,
        action: navFun6,
        icon: navIcon6,
        url: navUrl6
    };
    if (navName7 || navFun7 || navIcon7 || navUrl7) dataIconName[7] = {
        text: navName7,
        action: navFun7,
        icon: navIcon7,
        url: navUrl7
    };
    if (navName8 || navFun8 || navIcon8 || navUrl8) dataIconName[8] = {
        text: navName8,
        action: navFun8,
        icon: navIcon8,
        url: navUrl8
    };
    if (navName9 || navFun9 || navIcon9 || navUrl9) dataIconName[9] = {
        text: navName9,
        action: navFun9,
        icon: navIcon9,
        url: navUrl9
    };

    asideData = {
        asideBgColor: asideBgColor,
        asideBgColorAlpha: asideBgColorAlpha,
        asideFontColor: asideFontColor,
        asideFontColorAlpha: asideFontColorAlpha,
        // asideDisplay: asideDisplay,
        asideShowApp: asideShowApp,
        menu: dataIconName
    };
    console.log(asideData);
});

// 长按图片保存点击保存
$("#photoSaveModal .plugin-save").click(function () {
    supportLongPressSavePicture = $("#photoSaveModal").find("ul>li.active").data('photo-save');
    console.log(supportLongPressSavePicture);
});
// 支持二维码扫码点击保存
$("#identifyCodeModal .plugin-save").click(function () {
    supportQrcodeScan = $("#identifyCodeModal").find("ul>li.active").data('identify-code');
    console.log(supportQrcodeScan);
});
// 支持侧滑返回
$("#skidBackModal .plugin-save").click(function () {
    skidBack = $("#skidBackModal").find("ul>li.active").data('skid-back');
    console.log(skidBack);
});
// 支持无网提示
$("#noNetModal .plugin-save").click(function () {
    noNet = $("#noNetModal").find("ul>li.active").data('no-net');
    console.log(noNet);
});
// 支持APK安装器
$("#installTipModal .plugin-save").click(function () {
    installTip = $("#installTipModal").find("ul>li.active").data('install-tip');
    console.log(installTip);
});
// 支持屏幕常亮
$("#keepScreenModal .plugin-save").click(function () {
    keepScreen = $("#keepScreenModal").find("ul>li.active").data('keep-screen');
    console.log(keepScreen);
});
// 支持隐藏虚拟按键
$("#hideBottomModal .plugin-save").click(function () {
    hideBottom = $("#hideBottomModal").find("ul>li.active").data('hide-bottom');
    console.log(hideBottom);
});
// 网页缩放
// 开启 关闭
$(".plugin-web-zoom .fun li").click(function () {
    var attr = $(this).attr("data-web-zoom");
    if (attr == -1) {
        $(this).parents(".plugin-web-zoom").find(".zoom-in").hide();
    } else {
        $(this).parents(".plugin-web-zoom").find(".zoom-in").show();
    }
});

// 支持网页缩放
$("#webZoomModal .plugin-save").click(function () {
    supportZoom = $("#webZoomModal").find("ul>li.active").data('web-zoom');
    console.log(supportZoom);
});

// 引导页保存
$("#guideModal .plugin-save").click(function () {
    // 是否显示“立即体验”，以及按钮颜色
    supportGuideEnterMainPageButton = $('#guideModal .experience').find("li.active").data('type');
    guideEnterMainPageButtonColor = getFontColor("#experienceTextColor");
    guide = {};
    $('#guideModal').find(".plugin-guide img").each(function (index, element) {
        guide[index] = $(element).attr('src');
    });
});

// UA设置
$("#uaModal .plugin-save").click(function () {
    userAgent = {};
    userAgent.appendUa = $.trim($('#uaModal').find("input[name='appendUa']").val());
    userAgent.completeUa = $.trim($('#uaModal').find("input[name='completeUa']").val());

    if (!userAgent.appendUa && !userAgent.completeUa) {
        $('#uaModal').find("input[name='completeUa']").parents(".form-group").addClass("form-error");
    } else {
        $('#uaModal').find("input[name='completeUa']").parents(".form-group").removeClass("form-error");
    }
    var errorLength = $(".plugin-ua .form-error").length;
    if (errorLength > 0) {
        $("#uaModal").modal("show");
        $("[data-target=#uaModal]").removeClass("active").find(".icon-checkbox1").removeClass("icon-checkbox-checked1 add-checked");
    } else {
        $("#uaModal").modal("hide");
        $("[data-target=#uaModal]").addClass("active").find(".icon-checkbox1").addClass("icon-checkbox-checked1 add-checked");
    }
});


$(".toStore").on('click', function () {
    $('#msModal8').modal('show');
    appName = $("input[name=app]").val();
    url = $("input[name=url]").val();
    device = $("#device").find(".active").attr("data-device");
    screen = $("#screen").find(".active").attr("data-screen");
    version = $("input[name=version]").val();
    bundle = $("input[name=bundle]").val();
    appIcon = $(".pack-step2 #appIcon").find("img").attr('src');// ICON图标
    startPage = $("input[name='startPage']").parent().find("img").attr("src"); // 启动图
    splashShowTime = $(".pack-step2 .start-time ").find("ul>li.active").data("start-time"); // 启动图显示时长
    isSupportShowSplashSkipButton = $(".pack-step2 .show-skip").find("ul>li.active").data("show"); // 是否显示跳过按钮
    // 获取插件
    plugin = {};
    var hasChecked1 = $("#config1").find(".iconfont").hasClass("icon-checkbox-checked1"); // 加载动画
    var hasChecked2 = $("#config2").find(".iconfont").hasClass("icon-checkbox-checked1"); // 清理缓存
    var hasChecked3 = $("#config3").find(".iconfont").hasClass("icon-checkbox-checked1"); // 浏览器
    var hasChecked4 = $("#config4").find(".iconfont").hasClass("icon-checkbox-checked1"); // 退出提示
    var hasChecked5 = $("#config5").find(".iconfont").hasClass("icon-checkbox-checked1"); // 第三方分享
    var hasChecked6 = $("#config6").find(".iconfont").hasClass("icon-checkbox-checked1"); // 极光推送
    var hasChecked7 = $("#config7").find(".iconfont").hasClass("icon-checkbox-checked1"); // 友盟统计
    var hasChecked8 = $("#config8").find(".iconfont").hasClass("icon-checkbox-checked1"); // 导航栏
    var hasChecked9 = $("#config9").find(".iconfont").hasClass("icon-checkbox-checked1"); // 状态栏
    var hasChecked10 = $("#config10").find(".iconfont").hasClass("icon-checkbox-checked1"); // 标题栏
    var hasChecked11 = $("#config11").find(".iconfont").hasClass("icon-checkbox-checked1"); // 引导页
    var configAsideChecked = $("#configAside").find(".iconfont").hasClass("icon-checkbox-checked1"); // 左侧栏
    var longPressSavePictureChecked = $("#configPhotoSave").find(".iconfont").hasClass("icon-checkbox-checked1"); // 长按图片保存
    var qrcodeScanChecked = $("#configIdentifyCode").find(".iconfont").hasClass("icon-checkbox-checked1"); // 扫一扫
    var webZoomChecked = $("#configWebZoom").find(".iconfont").hasClass("icon-checkbox-checked1"); // 网页缩放
    var userAgentChecked = $("#userAgent").find(".iconfont").hasClass("icon-checkbox-checked1");
    var isSkidBack = $("#configSkidBack").find(".iconfont").hasClass("icon-checkbox-checked1"); // 侧滑返回
    var isNoNet = $("#configNoNet").find(".iconfont").hasClass("icon-checkbox-checked1"); // 无网提示
    var isInstallTip = $("#configInstallTip").find(".iconfont").hasClass("icon-checkbox-checked1"); // APK安装器
    var isKeepScreen = $("#configKeepScreen").find(".iconfont").hasClass("icon-checkbox-checked1"); // 屏幕常亮
    var isHideBottom = $("#configHideBottom").find(".iconfont").hasClass("icon-checkbox-checked1"); // 屏幕常亮
    var hasKeystore = $('#configKeystore').find(".iconfont").hasClass("icon-checkbox-checked1"); // 安卓证书
    plugin.supportLongPressSavePicture = 0;
    plugin.supportQrcodeScan = 0;
    plugin.supportZoom = 0;
    plugin.userAgent = {};
    plugin.skidBack = 0;
    plugin.noNet = 0;
    plugin.installTip = 0;
    plugin.keepScreen = 0;
    plugin.hideBottom = 0;
    if (longPressSavePictureChecked) plugin.supportLongPressSavePicture = supportLongPressSavePicture;
    if (qrcodeScanChecked) plugin.supportQrcodeScan = supportQrcodeScan;
    if (webZoomChecked) plugin.supportZoom = supportZoom;
    if (userAgentChecked) plugin.userAgent = userAgent;
    if (isSkidBack) plugin.skidBack = skidBack;
    if (isNoNet) plugin.noNet = noNet;
    if (isInstallTip) plugin.installTip = installTip;
    if (isKeepScreen) plugin.keepScreen = keepScreen;
    if (isHideBottom) plugin.hideBottom = hideBottom;
    // 下拉刷新
    var hasCheckedRefresh = $("#configRefresh").find(".iconfont").hasClass("icon-checkbox-checked1");
    if (hasCheckedRefresh) {
        refreshVal = $("#refreshModal").find(".plugin-refresh").find(".active").attr("data-refresh");
        plugin.refresh = refreshVal;
    } else {
        plugin.refresh = 0;
    }

    // URL 拉起APP
    var hasCheckedUrlApp = $("#configUrlApp").find(".iconfont").hasClass("icon-checkbox-checked1");
    plugin.urlApp = 0;
    if (hasCheckedUrlApp) {
        urlAppVal = $("#urlAppModal").find(".plugin-url-app").find(".active").attr("data-url-app");
        plugin.urlApp = urlAppVal;
    }

    // 加载配置
    if (hasChecked1) {
        way = $("#loadingModal").find(".plugin-loading").find(".active").attr("data-way");
        color = $("#loadingModal").find(".plugin-loading").find(".sp-preview-inner").css("background-color");
        color = colorRGB2Hex(color);
        plugin.loading = {way: way, color: color};
    } else {
        plugin.loading = {};
    }

    // 清理缓存
    if (hasChecked2) {
        plugin.cache = $("#cacheModal").find(".plugin-cache").find(".active").attr("data-cache");
    } else {
        plugin.cache = 0;
    }

    // 浏览器内核
    if (hasChecked3) {
        android = $("#browserModal").find("#androidKernel").find(".active").attr("data-android-kernel");
        ios = $("#browserModal").find("#iosKernel").find(".active").attr("data-ios-kernel");

        plugin.browser = {android: android, ios: ios}
    } else {
        plugin.browser = {};
    }

    // 退出提示
    if (hasChecked4) {
        exit = $("#exitModal").find(".plugin-exit").find(".active").attr("data-exit");
        plugin.exit = exit;
    } else {
        plugin.exit = 0;
    }

    // 第三方分享
    if (hasChecked5) {
        plugin.share = share;
    }

    // 极光推送
    plugin.jPushId = '';
    if (hasChecked6) {
        jPushId = $.trim($('#auroraModal input[name="jPushId"]').val());
        if (jPushId) plugin.jPushId = jPushId;
    }

    // 友盟统计
    plugin.umengKey = '';
    if (hasChecked7) {
        umengIosKey = $.trim($('#alliesModal input[name="umeng_ios_key"]').val());
        umengAndroidKey = $.trim($('#alliesModal input[name="umeng_android_key"]').val());
        plugin.umengKey = {
            ios: umengIosKey,
            android: umengAndroidKey
        };
    }

    // 导航栏
    plugin.nav = '';
    if (hasChecked8 && navData) plugin.nav = navData;
    // 状态标题栏
    plugin.titleBar = '';
    plugin.stateBar = '';
    if (hasChecked10) {
        plugin.titleBar = titleBar;
        plugin.stateBar = stateBar;
    }
    // 侧边栏
    plugin.asideData = '';

    if (configAsideChecked && asideData) plugin.asideData = asideData;

    console.info(plugin);
    // 引导页
    plugin.guide = {};
    if (hasChecked11) {
        plugin.guide = guide;
        plugin.support_guide_enter_main_page_button = supportGuideEnterMainPageButton;
        plugin.guide_enter_main_page_button_color = guideEnterMainPageButtonColor;
    }
    if(hasKeystore) {
        delete androidKey.save;
        plugin.androidKey = androidKey;
    }
    // 是否点击跳过
    //var isSkip = $(this).hasClass('skip');
    formData = new FormData();
    formData.append('id', id);
    formData.append('appName', appName);
    formData.append('url', url);
    formData.append('device', device);
    formData.append('appVersion', version);
    formData.append('bundleId', bundle);
    formData.append('splashMode', screen);
    formData.append('icon', appIcon);
    formData.append('splash', startPage);
    formData.append('isSupportShowSplashSkipButton', isSupportShowSplashSkipButton);
    formData.append('splashShowTime', splashShowTime);
    formData.append('plugin', JSON.stringify(plugin));
    $.ajax({
        url: '/pack/store',
        type: 'POST',
        cache: false,
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            $('#msModal8').modal('hide');
            if (result.code != 200) {
                if (result.code == -10001) {
                    alert(result.msg, function () {
                        window.location.href = '/user/login';
                    });
                } else {
                    alert(result.msg);
                }
                return;
            }

            window.location.href = result.data.url
        }
    });
});

$(function () {
    $(document).on('click', "div[data-target='#navModal']", function () {
        console.info(navData);
        // 设置导航背景色
        if (navData.menuBackgroundColor) {
            $("#colorPicker4").spectrum("set", navData.menuBackgroundColor);
            updateNavBackground(navData.menuBackgroundColor);
        }
        // 字体色
        if (navData.menuTextColor) {
            $("#navFontColor1").spectrum("set", navData.menuTextColor);
            updateNavFontColor1(navData.menuTextColor);
        }
        // 选中色
        if (navData.menuPressedTextColor) {
            $("#navFontColor2").spectrum("set", navData.menuPressedTextColor);
            updateNavFontColor2(navData.menuPressedTextColor);
        }
        //显示类型
        $("#navModal").find("#iconNameShow li[data-show='" + navData.show + "']").trigger('click');
        //设置导航值
        var jsonLength = 0;
        if (navData.menu) {
            $.each(navData.menu, function () {
                jsonLength++;
            });
        }
        // 需要补充的导航个数
        var addLength = jsonLength - 2;
        if (addLength > 0) {
            for (var i = 0; i < addLength; i++) {
                $(".plugin-nav .nav-top ul li").eq(i + 2).css("display", "table-cell");
                $(".plugin-nav .n-list dd:hidden").eq(i + 2).show();
            }
        }
        if (navData.menu) {
            // 填充数据
            $.each(navData.menu, function (key, item) {
                var dd = $(".plugin-nav .n-list dd");
                if (item.text) {
                    dd.eq(key).find("input[name='navText']").val(item.text);
                    $(".plugin-nav .nav-top ul li").eq(key).find(".n-text").text(item.text);
                }
                dd.eq(key).find("select").val(item.action);
                dd.eq(key).find("select").trigger('change');
                if (item.icon) {
                    dd.eq(key).find(".add-icon span").attr('class', 'iconfont icon-' + item.icon);
                    dd.eq(key).find(".add-icon span").css('color', 'rgb(51, 51, 51)');
                    dd.eq(key).find(".add-icon span").attr('data-index', item.icon);
                    $(".plugin-nav .nav-top ul li").eq(key).find(".n-icon").attr("class", "n-icon iconfont icon-" + item.icon + "");
                }
                dd.eq(key).find("input[name='navLink']").val(item.url);
            });
        }
    });

    // 状态标题栏设置默认值
    $(document).on('click', "div[data-target='#titleModal']", function () {
        // 状态栏设置
        if (stateBar.state == 2) { // 隐藏
            $(".plugin-title").find(".state-show-toggle li[data-state='2']").trigger('click');
        } else {
            if (stateBar.way == 2) { // 延伸
                $(".plugin-title .state-way-ul").find("li[data-state-way='2']").trigger('click');
            } else { // 自定义
                $(".plugin-title .state-way-ul").find("li[data-state-way='1']").trigger('click');
                if (stateBar.bgColor) {
                    // 设置背景色
                    $("#colorPicker2").spectrum("set", stateBar.bgColor);
                    updateStateBackground(stateBar.bgColor);
                    //$("$colorPicker2").css('opacity', stateBar.bgAlpha);
                    //$("#titleModal .state-bgcolor").css("opacity", '0.5');
                }
            }
            // 设置文字色
            if (stateBar.fontColor) {
                $(".plugin-title .bg-text-color1").find("li[data-state-font-color=" + stateBar.fontColor + "]").trigger('click');
            }
        }


        // 显示或隐藏
        if (titleBar.show == 1) {
            $(".plugin-title").find("#titleShow li[data-show='1']").trigger('click');
            return;
        }
        if (!titleBar.title) titleBar.title = $("input[name=app]").val();
        $(".plugin-title .input-title").val(titleBar.title);
        $(".plugin-title .input-title").parents(".plugin-title").find(".title-top").find(".text").text(titleBar.title);
        // 设置颜色
        if (titleBar.bgColor) {
            $("#colorPicker3").spectrum("set", titleBar.bgColor);
            updateTitleBackground(titleBar.bgColor);
        }

        if (titleBar.titleColor) {
            $("#titFontColor").spectrum("set", titleBar.titleColor);
            updateTitleFontColor(titleBar.titleColor);
        }
        if (titleBar.leftKey) {
            $.each(titleBar.leftKey, function (key, val) {
                if (!$("#leftKey").find("li[data-left-key='" + val + "']").hasClass('active')) {
                    // 设置功能键
                    $("#leftKey").find("li[data-left-key='" + val + "']").trigger('click');
                    console.log(val);
                }
            });
        }
        if (titleBar.rightKey) {
            $.each(titleBar.rightKey, function (key, v) {
                // 设置功能键，是否选中，选中后不再触发点击
                if (!$("#rightKey").find("li[data-right-key='" + v + "']").hasClass('active')) {
                    $("#rightKey").find("li[data-right-key='" + v + "']").trigger('click');
                    console.log(v);
                }
            });
        }
    });

    // 第三方分享设置默认值
    $(document).on('click', "div[data-target='#shareModal']", function () {
        if (share.way == 1) {
            $(".plugin-share .s-ul").find("li[data-way='1']").trigger('click');
        } else {
            $(".plugin-share .s-ul").find("li[data-way='0']").trigger('click');
        }
        $("#shareModal input[name=wxId]").val(share.wxId);
        $("#shareModal input[name=wxSecret]").val(share.wxSecret);
        $("#shareModal input[name=text]").val(share.shareText);
        $("#shareModal input[name=link1]").val(share.shareUrl);
    });

    // 第三方分享设置默认值
    $(document).on('click', "div[data-target='#keystoreModal']", function () {

        $('#keystoreModal .keystore-wrap').find("input[name='store_file_content']").val(androidKey.file_url);
        $('#keystoreModal .keystore-wrap').find("input[name='store_storepass']").val(androidKey.store_pass);
        $('#keystoreModal .keystore-wrap').find("input[name='store_alias']").val(androidKey.alias);
        $('#keystoreModal .keystore-wrap').find("input[name='store_keypass']").val(androidKey.key_pass);
    });

    // 侧边栏设置默认值
    $(document).on('click', "div[data-target='#asideModal']", function () {
        var iconImg = $(".step2").find("#appIcon img").attr('src');
        $("#asideModal").find(".aside-icon img").attr('src', iconImg);

        // 背景色
        if (asideData.asideBgColor) {
            $("#colorPicker5").spectrum("set", asideData.asideBgColor);
            updateAsideBackground(asideData.asideBgColor);
        }
        // 字体色
        if (asideData.asideFontColor) {
            $("#asideFontColor").spectrum("set", asideData.asideFontColor);
            updateAsideFontColor(asideData.asideFontColor);
        }

        // 显示方式
        $("#asideModal").find("#displayMode li[data-display='" + asideData.asideDisplay + "']").trigger('click');
        // 是否显示APP
        $("#asideModal").find(".top-show li[data-app-show='" + asideData.asideShowApp + "']").trigger('click');
        //设置导航值
        var jsonLength = 0;
        if (asideData.menu) {
            $.each(asideData.menu, function () {
                jsonLength++;
            });
        }
        // 需要补充的导航个数
        var addLength = jsonLength - 1;
        if (addLength > 0) {
            for (var i = 0; i < addLength; i++) {
                $(".plugin-aside .nav-top ul li").eq(i + 1).css("display", "table-cell");
                $(".plugin-aside .n-list dd:hidden").eq(i + 1).show();
            }
        }
        if (asideData.menu) {
            // 填充数据
            $.each(asideData.menu, function (key, item) {
                var dd = $(".plugin-aside .n-list dd");
                if (item.text) {
                    dd.eq(key).find("input[name='navText']").val(item.text);
                    dd.eq(key).find("input[name='navText']").bind('input propertychange', function () {
                        //$(this).val(item.text);
                    }).trigger('propertychange');
                    $(".plugin-aside .nav-top ul li").eq(key).find(".n-text").text(item.text);

                }
                dd.eq(key).find("select").val(item.action);
                dd.eq(key).find("select").trigger('change');
                if (item.icon) {
                    dd.eq(key).find(".add-icon span").attr('class', 'iconfont icon-' + item.icon);
                    dd.eq(key).find(".add-icon span").css('color', 'rgb(51, 51, 51)');
                    dd.eq(key).find(".add-icon span").attr('data-index', item.icon);
                    item.icon.split('menu');
                    $(".aside-modal .aside-nav li").eq(key).find(".iconfont").attr("class", "fl iconfont icon-" + item.icon);
                    $(".plugin-aside .nav-top ul li").eq(key).find(".n-icon").attr("class", "n-icon iconfont icon-" + item.icon + "");
                }
                dd.eq(key).find("input[name='navLink']").val(item.url);
            });
        }
    });

    // // 状态栏设置默认值
    // $(document).on('click', "div[data-target='#stateModal']", function () {
    //     // 设置颜色
    //     $("#colorPicker22").spectrum("set", stateBar.bgColor);
    // });

    //------------------  长按图片保存  -------------------//
    $(document).on('click', "div[data-target='#photoSaveModal']", function () {
        $("#photoSaveModal").find("ul>li[data-photo-save='" + supportLongPressSavePicture + "']").trigger('click');
    });

    //------------------  支持二维码扫码  -------------------//
    $(document).on('click', "div[data-target='#identifyCodeModal']", function () {
        $("#identifyCodeModal").find("ul>li[data-identify-code='" + supportQrcodeScan + "']").trigger('click');
    });

    //------------------  支持侧滑返回  -------------------//
    $(document).on('click', "div[data-target='#skidBackModal']", function () {
        $("#skidBackModal").find("ul>li[data-skid-back='" + skidBack + "']").trigger('click');
    });

    //------------------  支持无网提示  -------------------//
    $(document).on('click', "div[data-target='#noNetModal']", function () {
        $("#noNetModal").find("ul>li[data-no-net='" + noNet + "']").trigger('click');
    });

    //------------------  支持APk安装器  -------------------//
    $(document).on('click', "div[data-target='#installTipModal']", function () {
        $("#installTipModal").find("ul>li[data-install-tip='" + installTip + "']").trigger('click');
    });

    //------------------  支持屏幕常亮  -------------------//
    $(document).on('click', "div[data-target='#keepScreenModal']", function () {
        $("#keepScreenModal").find("ul>li[data-keep-screen='" + keepScreen + "']").trigger('click');
    });
    //------------------  支持网页缩放  -------------------//
    $(document).on('click', "div[data-target='#webZoomModal']", function () {
        $("#webZoomModal").find("ul>li[data-web-zoom='" + supportZoom + "']").trigger('click');
    });

    //------------------  设置引导页的“立即体验”按钮及其颜色  -------------------//
    $(document).on('click', "div[data-target='#guideModal']", function () {
        $("#guideModal").find(".experience ul>li[data-type='" + supportGuideEnterMainPageButton + "']").trigger('click');
        if (supportGuideEnterMainPageButton == -1) {
            $("#experienceTextColor").spectrum("set", '#ffffff');
        } else {
            $("#experienceTextColor").spectrum("set", guideEnterMainPageButtonColor);
        }
    });

    //------------------  UA设置  -------------------//
    $(document).on('click', "div[data-target='#uaModal']", function () {
        $("#uaModal input[name='appendUa']").val(plugin.userAgent.appendUa);
        $("#uaModal input[name='completeUa']").val(plugin.userAgent.completeUa);
    });


    // 提示滚动条
    $(".plugin-modal .modal-body").scroll(function () {
        var sclollTop = $(this).scrollTop();
        // console.log(sclollTop);
        if (sclollTop > 0) {
            $(this).find(".more-gif").hide();
        } else {
            $(this).find(".more-gif").show();
        }
    });

    // 手势配置
    tab.radioRound({
        el: ".gestures-list1 li",
        checkedClass: "icon-radio-checked"
    });


});

