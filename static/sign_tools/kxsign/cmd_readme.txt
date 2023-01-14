Chữ ký dòng lệnh bao gồm chữ ký, quản lý ứng dụng, quản lý người dùng, quản lý khóa thời gian 4 phần chức năng

xem xét lại
Tham số đầu tiên của dòng lệnh chỉ định chức năng, tham số này không thể điều chỉnh vị trí và phải được chỉ định trước --sign là chữ ký, --user là chức năng sửa đổi thông tin người dùng, --app là chức năng sửa đổi ứng dụng thông tin và lệnh sử dụng "-" ở đầu, các tham số bắt đầu bằng "-". Sau đó làm theo thông tin tham số theo yêu cầu của lệnh chức năng
Nếu tham số đơn giản thì không cần ngoặc kép, nếu là tham số phức tạp như dấu cách, dấu "-", ký tự đặc biệt, chữ Hán, v.v. thì bạn cần đặt trong ngoặc kép là được. dấu ngoặc kép "" ở trạng thái nhập tiếng Anh
Ngoài lệnh đầu tiên và giá trị của lệnh đầu tiên, các tham số khác có thể điều chỉnh thứ tự. Vị trí của tham số -c trong ví dụ sau là khác nhau, nhưng chúng đều hợp lệ
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
Ví dụ về chữ ký chung 
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa
Mô tả: Chữ ký bắt đầu bằng tham số --sign, theo sau là tệp ipa đã ký,
 -c chỉ định chứng chỉ, -m chỉ định tệp mô tả, -p chỉ định mật khẩu chứng chỉ
 -o chỉ định địa chỉ lưu trữ của tệp đã ký

指定自定义的权限配置entilement.plist签名     
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -e myentilement.plist -o resign-wechat.ipa
Lưu ý: Giống như các chữ ký cơ bản thông thường, bạn có thể chỉ định tham số -e để chỉ định tệp cấu hình quyền của riêng mình. Điều này có thể được sử dụng cho một số lần đẩy hoặc những
 yêu cầu cấu hình quyền đặc biệt khi không thể hoàn thành chữ ký thông thường.

自动删除锁签名例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -dt 
So với chữ ký thông thường thì có thêm một tham số -dt nghĩa là xóa khóa thời gian, nghĩa là xóa khóa thời gian

自动插入时间锁例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -at 20190701
Khi thit bit ngdượt dùng được cài đặt sau, -t 2 th 2 th -c hiện siêu ký tự sự cố ipa.khi sử dụng -t 2, nếu không nó không thể cài đặt được.

更新签名
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -replace 100876
更新现有的应用 -r 100876 参数，100876是应用的编号，可以通过 kxsign -apps 查看所有app id值,最新版本支持 -r uuid

修改应用id后签名
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o resign-wechat.ipa -id com.tencent.wechat22222222
把应用id 改成com.tencent.wechat22222222 sau khi ký lại
Thông tin có thể được sửa đổi cũng là -n để chỉ định tên sửa đổi và -v để chỉ định số phiên bản sửa đổi

组合签名例子
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p "123456" -o resign-wechat.ipa -id "com.tencent.wechat3" -n "微信马甲3" -v "1.0.0" -dt -at 20190902
Các tham số trên có thể được sử dụng kết hợp, dưới đây là một ví dụ, tự động xóa khóa thời gian,
 tự động chèn khóa thời gian và đặt ngày hết hạn thành 20190902,
 sau đó thay đổi id thành com.tencent.wechat3 của riêng bạn, 
thay đổi tên đến WeChat vest 3 và đặt Thay đổi số phiên bản thành 1.0.0

dấu hiệu siêu thứ hai
Siêu chữ ký thứ hai là một thuật toán chữ ký cho hệ thống siêu chữ ký. Sử dụng thuật toán này có thể cải thiện tốc độ rất nhiều.
 Tốc độ tăng có thể giảm từ 200 giây xuống 10 giây. Hiệu quả là rõ ràng. Tất cả các siêu hệ thống đều nên sử dụng thuật toán này .

上传ipa到系统或者ipa修改后，使用参数  -t 1   对ipa进行预处理，预处理使用的证书和描述匹配就可以，不要求有效，也不需要和真实签一致
kxsign --sign wechat.ipa -c my.p12 -m my.mobileprovision -p 123456 -o procedued-wechat.ipa -t 1

Khi thiết bị người dùng được cài đặt sau, -t 2 thực hiện siêu chữ ký thực sự trên ipa. Nếu ipa chưa được xử lý trước hoặc ipa đã được sửa đổi sau khi xử lý trước,
 thì ipa cần được xử lý trước trước khi sử dụng -t 2, nếu không nó có thể không được cài đặt.
kxsign --sign procedued-wechat.ipa.ipa -c my2.p12 -m my2.mobileprovision -p 123456 -o resign-wechat.ipa -t 2


三、应用管理
查看先有的应用列表
kxsign --apps 
Lưu ý: Ứng dụng đã xóa sẽ không xem được nữa, và thông tin ứng dụng đã được hiển thị trong json

查看具体某给app的信息
kxsign -- apps  3aa99adf-72e7-441a-be5b-518c050a79b2 



修改应用信息签名到期时间
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k expire_time -v 20190801
Lệnh "app" để sửa đổi thông tin ứng dụng ít hơn một chữ "s" so với lệnh "apps" để xem ứng dụng. Lệnh được theo sau bởi thẻ id của ứng dụng để chỉ định ứng dụng nào sẽ được sửa đổi.
-k指定是对应用的哪个信息进行修改,-k 后面可以跟的修改内容包括：
expire_time（到期时间，格式20190102）,is_bid(是否被禁用,1表示禁用,0不禁用),is_deleted(是否删除),alert_msg(app过期提醒信息),description(应用的备注),contact(应用的联系人信息)
-v Đó là một giá trị mới được đặt. Giá trị này khác nhau tùy theo -k. Ví dụ: nếu
 is_bid, nó hợp lệ để chuyển vào 0 hoặc 1 và expire_time chỉ hợp lệ nếu định dạng ngày giống với
 20191201. Đối với mô tả, mọi thông tin có thể được đặt thành hợp lệ

ví dụ sau
Sửa đổi thời gian hết hạn ứng dụng
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k expire_time -v 20190801
修改应用描述信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k description -v "Phiên bản mới nhất của WeChat vest tính phí 150 nhân dân tệ"
修改应用到期提醒信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k alert_msg -v "Chữ ký đã hết hạn, vui lòng liên hệqq2462611616"
删除app
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k is_deleted -v 1
禁用app
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k is_bid -v 1
给app设置个联系人信息
kxsign --app 3aa99adf-72e7-441a-be5b-518c050a79b2 -k contact -v "张三qq2462611616"



四、时间锁与模块管理

Kiểm tra các mô-đun trong ứng dụng
kxsign --llib game.ipa
--llibNó sẽ hiển thị tất cả các mô-đun có sẵn trong phần mềm, bao gồm các mô-đun chức năng thông thường, 
mô-đun trình cắm và mô-đun khóa thời gian, nhưng không phải tất cả chúng đều là khóa và nó cần được đánh giá theo tên và mô tả. Nội dung hiển thị bao gồm tên ,
 tệp và des, và tên là Tên của mô-đun, cần được chỉ định khi xóa, tệp là tệp mà mô-đun được tham chiếu và cần được chỉ định khi xóa mô-đun


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
