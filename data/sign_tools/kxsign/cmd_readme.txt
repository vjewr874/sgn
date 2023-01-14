命令行签名包括了签名，应用管理，用户管理，时间锁管理4部分功能

综述
命令行第一个参数指定功能，这个参数不能调整位置，必须第一个指定，--sign是签名,--user是修改用户信息功能,--app是修改app信息功能 ，命令使用 "--" 开头，参数使用 "-" 开头。然后跟功能命令需要的参数信息
参数 如果是简单的可以不用双引号，如果是复杂的参数，例如有空格，带"-"，特殊字符，汉字等的需要用 双引号括起来，并且是英语输入状态下的双引号 ""
除了第一个命令和第一个命令的值外，其他参数可以调整顺序。下面例子 -c 参数的位置不一样，但是他们都是有效的
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa
kxsign --sign wechat.ipa  -m my.mobileprovision -p "kjkj7&8*" -c my.p12 -o resign-wechat.ipa

一、用户管理

注册用户 
kxsign --email 123456@qq.com -p 123456  -c
使用邮箱123456@qq.com创建账号，密码设置为123456
注意需要加参数 -c  表示是创建账号

登陆账号
kxsign --email 123456@qq.com -p 123456 
使用123456@qq.com，密码123456登陆账号，注意末尾没有 -c参数，表示是登陆账号
如果账号在其他电脑登陆，则当前电脑会掉线，需要重新登陆

查看用户信息
kxsign --user info

找回用户密码
kxsign --user fpass -v abc@gmail.com

修改用户密码
kxsign --user password -v "123456789" -o "123456"
把老的用户密码123456改成123456789

退出登陆
kxsign --user logout

激活软件
kxsign --user code -v "aa99adf-72e7-441"
输入激活码激活软件,-v后面跟你得到的激活码。激活码在s.kxapp.com官网上付费后自动返回获得激活码。

修改统一的签名到期提醒
kxsign --user alert_msg -v "签名到期了，请联系xxx"

设置到期后弹窗提示后再闪退
kxsign --user expired_alert -v 1

设置到期后直接闪退奔溃
kxsign --user expired_alert -v 0

更新应用安装量和运行量报告
kxsign --user report -v 1

二、签名功能
普通签名例子     
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa
说明：签名都是以  --sign 参数开始 ，后面是被签名的ipa文件，-c 指定证书，-m  指定描述文件  ，-p 指定证书密码  -o 指定签名完后文件的存放地址

指定自定义的权限配置entilement.plist签名     
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -e myentilement.plist -o resign-wechat.ipa
说明：和普通基本签名一样，可以指定  -e 参数来指定自己的权限配置文件 ，这个对一些推送或者需要特殊权限配置的在普通签名无法完成的时候可以用

自动删除锁签名例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -dt 
和普通签名相比多了一个参数  -dt 表示  delete time lock，删除时间锁的意思

自动插入时间锁例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -at 20190701
和普通相比 多了 -at 20190701参数，表示 add time lock，就是添加时间锁的意思,-at 后面是签名到期的时间

更新签名
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -replace 100876
更新现有的应用 -r 100876 参数，100876是应用的编号，可以通过 kxsign -apps 查看所有app id值,最新版本支持 -r uuid

修改应用id后签名
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -id com.tencent.wechat22222222
把应用id 改成com.tencent.wechat22222222 后重新签名
可以修改的信息还有 -n 指定修改名称 ，-v 指定修改版本号

组合签名例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p "123456" -o resign-wechat.ipa -id "com.tencent.wechat3" -n "微信马甲3" -v "1.0.0" -dt -at 20190902
上面各种参数可以组合使用，下面是一个例子，自动删除时间锁，自动插入时间锁设置到期日期20190902，然后把id修改为自己的com.tencent.wechat3，把名字修改为微信马甲3,把版本号改成1.0.0

超级秒签
超级秒签是针对超级签名系统的一种签名算法，使用此算法能极大的提高速度，提高速度可能由200秒缩减到10秒，效果明显，建议超级系统都使用此算法

上传ipa到系统或者ipa修改后，使用参数  -t 1   对ipa进行预处理，预处理使用的证书和描述匹配就可以，不要求有效，也不需要和真实签一致
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o procedued-wechat.ipa -t 1

后面用户设备安装的时候  -t 2   对ipa进行真实的超级签名，如果ipa未进行预处理或者预处理后又修改了ipa，需要对ipa进行预处理才能使用 -t 2,否则可能出现无法安装的情况
kxsign --sign procedued-wechat.ipa.ipa -c my2.p12 -m my2.mobileprovision -p 123456 -o resign-wechat.ipa -t 2


三、应用管理
查看先有的应用列表
kxsign --apps 
说明：被删除了的应用将无法再查看，应用信息已json显示

查看具体某给app的信息
kxsign -- apps  3aa99adf-72e7-441a-be5b-518c050a79b2 



修改应用信息签名到期时间
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k expire_time -v 20190801
修改app信息的命令"app"比查看app命令"apps"少了个"s",命令后面紧跟着应用的id标记，指定是对哪个app进行修改，
-k指定是对应用的哪个信息进行修改,-k 后面可以跟的修改内容包括：
expire_time（到期时间，格式20190102）,is_bid(是否被禁用,1表示禁用,0不禁用),is_deleted(是否删除),alert_msg(app过期提醒信息),description(应用的备注),contact(应用的联系人信息)
-v 是设置的新的值，这个值根据-k不同不一样，例如 is_bid,则传入0或者1有效，expire_time 则只有 格式类似20191201这种日期格式有效，而对于description,则可以设置任何信息都有效

下面举例
修改应用到期时间
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k expire_time -v 20190801
修改应用描述信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k description -v "微信马甲最新版收150元"
修改应用到期提醒信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k alert_msg -v "签名已经到期，请联系qq2462611616"
删除app
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k is_deleted -v 1
禁用app
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k is_bid -v 1
给app设置个联系人信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k contact -v "张三qq2462611616"



四、时间锁与模块管理

查看应用里面的模块
kxsign --llib game.ipa
--llib将显示所有软件里面是有到的模块，包括正常功能模块，插件模块和时间锁模块，但不是所有的都是锁，需要根据名称和描述进行判断
显示内容包括name，file，和des，name是模块的名字，删除的时候需要指定，file是模块是在哪个文件中引用了，删除模块的时候需要指定


删除指定模块
kxsign --dlib game.ipa -o changed.ipa -i "@executable_path/Frameworks/libNewTimeDylib.dylib##gamebinary" "@executable_path/Frameworks/libNewTimeService.dylib##WeChat" 
--dlib 表示delete lib标记,-o 表示修改后的ipa的存储路径，-i 表示input，哪些标记要删除，这些标记可以通过--llib查看。模块名字和模块所在文件使用 ## 隔开, name##file

插入新的模块
kxsign --alib game.ipa -o changed.ipa -i "abc.dylib"  "my.framework"
--alib表示  add lib跟需要修改的ipa，-o 表示修改后的ipa的存储路径，-i 表示要插入的 模块，后面跟模块列表 


检验证书密码,查看证书信息
kxsign --cert dev.p12 -p 123456
会校验证书是否过期，是否被吊销

修改证书密码 ,把密码123456改成123456789
kxsign --cert dev.p12 -p 123456 -np 123456789

存储证书 
kxsign --cert dev.p12 -p 123456 -m dev.mobileprovision -s

查看存储的证书
kxsign --certs list

查看代理文件授权的证书，假设授权文件叫abc.license
kxsign -certs list -v abc.license

删除存储的证书,假设证书的id是2223
kxsign -certs delete -v 2223



查看ipa里面的infoplist
kxsign --info abc.ipa
或者直接查看plist内容
kxsign --info Info.plist

更多使用技巧可以加群946505735了解及时动态，那样可以常上官网http://s.kxapp.com下载最新版本
