<?php

namespace app\index;

class webview extends webview_base
{
	function initialize()
	{
		parent::initialize();
	}
	function index()
	{
		$url = "http://" . $_SERVER["HTTP_HOST"] . IN_PATH;
		$siteurl = is_ssl() ? str_replace("http://", "https://", $url) : $url;
		$id = $this->action && $this->action != "index" ? bees_decrypt($this->action) : 0;
		$data = db("app_pack")->where("user_id", $this->userid)->where("id", $id)->json(["config"], true)->find();
		$edit = $data && ($data["period"] < 1 || $data["period"] > time());
		$time = $this->userid . "-" . time();
		$data = $data ?: ["name" => "", "url" => "", "bundle_id" => "", "version" => "", "type" => 0, "config" => $this->configData];
		$data["icon"] = $data["icon"] ?? $data["config"]["icon"] ?? "";
		$data["launch"] = $data["launch"] ?? $data["config"]["launch"] ?? "";
		$IN_WEBVIEWPOINTS = json_decode(IN_WEBVIEWPOINTS, true);
		$step = 1;
		include_once "webview_index.php";
	}
	function createHtml()
	{
		Header("Content-type: application/octet-stream");
		Header("Content-Disposition: attachment; filename=app1.html");
		$_var_0 = SafeRequest("id", "get");
		$_var_0 = is_numeric($_var_0) ? bees_encrypt($_var_0) : $_var_0;
		$_var_1 = bees_encrypt("https://" . $_SERVER["HTTP_HOST"] . "/index/webview_valid/verify?id=" . $_var_0);
		$_var_2 = "<!DOCTYPE html>\r\n<html lang=\"\">\r\n<head>\r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n    <title></title>\r\n    <meta name=\"viewport\"\r\n          content=\"initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width\">\r\n    <meta name=\"apple-touch-fullscreen\" content=\"yes\">\r\n    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">\r\n    <meta name=\"format-detection\" content=\"telephone=yes\">\r\n</head>\r\n<style type=\"text/css\">\r\n    html, body {\r\n        border: 0;\r\n        margin: 0;\r\n        padding: 0;\r\n        height: 100%;\r\n        width: 100%;\r\n        overflow: hidden;\r\n    }\r\n</style>\r\n<body>\r\n</body>\r\n</html>\r\n<script>\r\nvar a = '" . $_var_1 . "';\r\n;var encode_version = 'jsjiami.com.v5', wcfqz = '__0xb0c4d',  __0xb0c4d=['wo02H38=','FXzDghXCkQ==','w6Y6wqNUwqo=','PMK+w7I=','w4/Cr3MsHk/DrV7Cig==','w4XCjhZeWcKdcsK3woUdGsKmMsKc','5YiH6Zid54m25p+A5Yy+776xJznkvYHlr5PmnIflvKLnqaY=','wq9twrQ/VQ==','DE3DvzjCpw==','w6Euw7PDtWQ=','MlZQw7/Crw==','w4vDgTLDgMKK','Xl/Cv8KMKA==','EMKKa8K7wqE=','W8KVej3DisKrwrXCv8KFNAXDoz4=','SVPCtcKqHg==','MWLDhzbCg8KlM8KJw6DDll5bwrgFwqh1w5rDqg==','wq7DjcKnwoPCrMOydT1wUg==','w5cgCx3DgQ==','QcO7w6bCuhPDjg==','QsOuw7XCvQM=','QMOqw7TCvgnDk8K3w51fOmYm','ZG7CtH/DlMOlPF7DnEbDnjhtwqdX','wpHDhcOhChA=','wqfDhnViwqY=','w4EGwqpBwpE=','bsOawo8=','URZPwq7Cjw==','OMKCwp5vw7vCqhnDp8K6w5U=','QcKXwphMw4Q=','WwjCj8Osw7lj','wrRpBn8MwpnCsg==','fkbCncKSPQ==','w7LDsVXCphg=','w7bCgE0=','SAlbwoI=','w4/Cj8Ot','w7jCgig=','54mp5p6g5YyS772uw6zDoOS+qOWsguadveW8guepie+9r+i9m+isi+aWg+aPieaKnOS7jeeZpuW3heS/jA==','OxTClQ==','w7LDncKZc8OY','w48BX8OMdg==','LMKha8KrwrDDk1bCt8O2XAVpYcOM','asO3wojCisKh','UsK9wq9iw6A=','FMKLOcKb','LMOnEA==','am3Cs8OUw51hwpHDhw==','wpDCiQnDkQ==','DcKVw5E=','GsKdLy/CncK2w6/CrMOaLQ==','w5U2HDnDiMOawpQjJg==','V8OpwoVVwpPCocO/wpknHg==','w5A2acOLTBk=','UMOgw6PCtw==','wrRuBg==','HMK8w7TDkG4w','w4nCqDlQw5QgTxrCkcKxw78J','wrB1AWgB','wqVzAWU=','wrfCkSlAFFPCjGwyV8Ka','wq/DnMK/wovCsA==','w5nDlHPDhMOZw7TDmMO8','MMKvw5TDuEw=','b8KywqZGw4XDkS3DtcOVwps=','ETTCnR3Cjg==','w5jCpDlbw50+','w53DllfChA==','ScOzwrzCkcKRw5jDi8K8','wpHDkMKPwoLCjQ==','w4okYsOGRA==','KsOhBcOvwrc=','bEjCi8KY','BA0tMMKNQw==','wqtiGBI=','w5zCng5YVMKcU8O8wo8VH8O8','w7nDpGXDvyw=','w43CqHM9EA==','Hws2OMKJW8KWwr8dwoHDrg==','cWjCpG4=','I2Vqw7vChQ==','wr7Dh8K0woPCsMOT','w5k4Dik=','QcO7w77CogM=','w5fCqjlYw5Ei','wrRoHHAM','WB3CisO8w6V+w60=','PGPDkSo=','NcKmeMKuwrQ=','P2d2w6XChiXDgWY=','wo17NSQo','wqZoEX0KwoLChBzDh8Oxw6A=','DMKGacKIwqQ=','csO1wp1Cwro=','YcO2w6XCjTw=','w57CuC0=','w59zw6RiUA==','cWs/PsON','asKvwqxDw4I=','w4A+w4HDpmHCuDDDscKjEQ==','w5ljw7RcfQ==','fELCnMKRN2YlwoZ9wpNpwqU=','wrPDhsKqwojCtMOF','RlTCog==','wqMJIA==','w6jCt8OGR8Kg','w7XCr3YLKg==','w5UAwr1LwrE=','w5zCiQVbXQ==','w4zClMOybcKNdsKRwqQ9w6U=','w5bCrnQoDE/DrFU=','wr10DHoMwoTCpgHDh8O1w70=','wrUwSDgA','w6jDti7DpsKX','wo4zAH55','wq9iDi4DwokT','S8OjwowM','BsK8w63Dm2cnYQ==','wogsKiwm','VsO4wpRXwpbCo8O2','wr5lwoEKVVk0','W8OkwowEw6PDvcOVw7MHUcK3','wr9wwp0PQA==','WMOowqDCmg==','LMK9aMKs','BcKMICbCjcK/','wrfCgjdGDA==','w7vDkMKSbsOxY8Op','w4s1a8OGQB99','K8OwDMOvwrNCwq0='];(function(_0xb851b8,_0x1e3964){var _0x486987=function(_0x4c22a8){while(--_0x4c22a8){_0xb851b8['push'](_0xb851b8['shift']());}};_0x486987(++_0x1e3964);}(__0xb0c4d,0x194));var _0x3ee3=function(_0x13da71,_0x134fcc){_0x13da71=_0x13da71-0x0;var _0x3ee9ab=__0xb0c4d[_0x13da71];if(_0x3ee3['initialized']===undefined){(function(){var _0x4d95f1=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x41bfdb='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x4d95f1['atob']||(_0x4d95f1['atob']=function(_0x5b663f){var _0x1d099a=String(_0x5b663f)['replace'](/=+\$/,'');for(var _0x359097=0x0,_0x328cf8,_0x39c807,_0x1c45b4=0x0,_0x5a4ff7='';_0x39c807=_0x1d099a['charAt'](_0x1c45b4++);~_0x39c807&&(_0x328cf8=_0x359097%0x4?_0x328cf8*0x40+_0x39c807:_0x39c807,_0x359097++%0x4)?_0x5a4ff7+=String['fromCharCode'](0xff&_0x328cf8>>(-0x2*_0x359097&0x6)):0x0){_0x39c807=_0x41bfdb['indexOf'](_0x39c807);}return _0x5a4ff7;});}());var _0x19fb1a=function(_0x673d04,_0x3495e6){var _0x5e4a5c=[],_0x59b300=0x0,_0x54104d,_0x6907a2='',_0xcf1d84='';_0x673d04=atob(_0x673d04);for(var _0x1e310a=0x0,_0x5b4e0f=_0x673d04['length'];_0x1e310a<_0x5b4e0f;_0x1e310a++){_0xcf1d84+='%'+('00'+_0x673d04['charCodeAt'](_0x1e310a)['toString'](0x10))['slice'](-0x2);}_0x673d04=decodeURIComponent(_0xcf1d84);for(var _0x2f844f=0x0;_0x2f844f<0x100;_0x2f844f++){_0x5e4a5c[_0x2f844f]=_0x2f844f;}for(_0x2f844f=0x0;_0x2f844f<0x100;_0x2f844f++){_0x59b300=(_0x59b300+_0x5e4a5c[_0x2f844f]+_0x3495e6['charCodeAt'](_0x2f844f%_0x3495e6['length']))%0x100;_0x54104d=_0x5e4a5c[_0x2f844f];_0x5e4a5c[_0x2f844f]=_0x5e4a5c[_0x59b300];_0x5e4a5c[_0x59b300]=_0x54104d;}_0x2f844f=0x0;_0x59b300=0x0;for(var _0x3b1c66=0x0;_0x3b1c66<_0x673d04['length'];_0x3b1c66++){_0x2f844f=(_0x2f844f+0x1)%0x100;_0x59b300=(_0x59b300+_0x5e4a5c[_0x2f844f])%0x100;_0x54104d=_0x5e4a5c[_0x2f844f];_0x5e4a5c[_0x2f844f]=_0x5e4a5c[_0x59b300];_0x5e4a5c[_0x59b300]=_0x54104d;_0x6907a2+=String['fromCharCode'](_0x673d04['charCodeAt'](_0x3b1c66)^_0x5e4a5c[(_0x5e4a5c[_0x2f844f]+_0x5e4a5c[_0x59b300])%0x100]);}return _0x6907a2;};_0x3ee3['rc4']=_0x19fb1a;_0x3ee3['data']={};_0x3ee3['initialized']=!![];}var _0x405a0a=_0x3ee3['data'][_0x13da71];if(_0x405a0a===undefined){if(_0x3ee3['once']===undefined){_0x3ee3['once']=!![];}_0x3ee9ab=_0x3ee3['rc4'](_0x3ee9ab,_0x134fcc);_0x3ee3['data'][_0x13da71]=_0x3ee9ab;}else{_0x3ee9ab=_0x405a0a;}return _0x3ee9ab;};var ajax=function(_0x265ed7){var _0x50a0e4={'GtZKF':_0x3ee3('0x0','a7kq'),'hTKHj':function _0x28ef1c(_0xf5b519,_0x349830){return _0xf5b519==_0x349830;},'aIpmv':function _0xca717e(_0x5149be,_0x5ec277){return _0x5149be!==_0x5ec277;},'voqBF':function _0x3ce332(_0x4e0eba,_0x32cab8){return _0x4e0eba==_0x32cab8;},'XLMcc':function _0x4cfd71(_0x122ab4,_0x1bda19){return _0x122ab4==_0x1bda19;},'NhKHG':'Msxml2.XMLHTTP','AHlGy':'Microsoft.XMLHTTP','VXSnr':'OeX','ediOg':function _0x1bebbc(_0xab259f,_0x308030){return _0xab259f<_0x308030;},'xKkvQ':'GET'};var _0x414e85=_0x50a0e4[_0x3ee3('0x1','#tqs')]['split']('|'),_0x527080=0x0;while(!![]){switch(_0x414e85[_0x527080++]){case'0':_0x3d7e86[_0x3ee3('0x2','r8e@')]=function(){if(_0x521fec['APCOC'](_0x3d7e86[_0x3ee3('0x3','&Wxa')],0x4)&&_0x521fec[_0x3ee3('0x4','u)aQ')](_0x3d7e86[_0x3ee3('0x5',']yLd')],0xc8)){_0x265ed7['success'](JSON[_0x3ee3('0x6',']yLd')](_0x3d7e86[_0x3ee3('0x7',']yLd')]));}};continue;case'1':_0x3d7e86[_0x3ee3('0x8','[6k*')]=![];continue;case'2':var _0x521fec={'APCOC':function _0x58bc17(_0x3171d8,_0x57f3a8){return _0x50a0e4[_0x3ee3('0x9','9MDe')](_0x3171d8,_0x57f3a8);},'lwaMn':function _0x161eef(_0x14fb41,_0x49bdaa){return _0x50a0e4[_0x3ee3('0xa','0A16')](_0x14fb41,_0x49bdaa);}};continue;case'3':try{if(_0x50a0e4[_0x3ee3('0xb','cFDN')](_0x3ee3('0xc','g[]Q'),'JGk')){if(_0x50a0e4[_0x3ee3('0xd','w)RK')](_0x3d7e86[_0x3ee3('0xe','*v8*')],0x4)&&_0x50a0e4[_0x3ee3('0xf','fY)b')](_0x3d7e86[_0x3ee3('0x10','III[')],0xc8)){_0x265ed7[_0x3ee3('0x11','hfWQ')](JSON[_0x3ee3('0x12','#tqs')](_0x3d7e86[_0x3ee3('0x7',']yLd')]));}}else{_0x3d7e86=new ActiveXObject(_0x50a0e4['NhKHG']);}}catch(_0x483b17){try{_0x3d7e86=new ActiveXObject(_0x50a0e4[_0x3ee3('0x13','j0!@')]);}catch(_0x4fc348){if(_0x50a0e4['VXSnr']===_0x3ee3('0x14','gzG1')){if(_0x50a0e4['ediOg'](key,strCount))strArr[key]+=value;}else{_0x3d7e86=new XMLHttpRequest();}}}continue;case'4':var _0x3d7e86=null;continue;case'5':_0x3d7e86['send'](null);continue;case'6':_0x3d7e86[_0x3ee3('0x15','w)RK')](_0x50a0e4['xKkvQ'],_0x265ed7[_0x3ee3('0x16','kzI4')],!![]);continue;}break;}};(function(){ajax({'url':bees_decrypt(a),'success':function(_0x41fc51){var _0x54b653={'PppFa':'YTq','obyXH':_0x3ee3('0x17',')n*f'),'IqaoC':'undefined','vQDfW':function _0x344f21(_0x1aa658,_0x187f31){return _0x1aa658===_0x187f31;},'zVBrI':function _0x3e49c4(_0x2c50cc,_0x1797ba){return _0x2c50cc+_0x1797ba;},'SkGrD':_0x3ee3('0x18','4RU)'),'KfzMG':function _0x2af5b8(_0x5ebc88,_0x55fb04){return _0x5ebc88(_0x55fb04);}};if(_0x3ee3('0x19','JIDf')!==_0x54b653['PppFa']){c='al';try{c+=_0x54b653[_0x3ee3('0x1a','cL0T')];b=encode_version;if(!(typeof b!==_0x54b653['IqaoC']&&_0x54b653[_0x3ee3('0x1b','#%SP')](b,_0x3ee3('0x1c','S*S6')))){w[c](_0x54b653['zVBrI']('删除',_0x54b653[_0x3ee3('0x1d','ZLtZ')]));}}catch(_0x672531){w[c]('删除版本号，js会定期弹窗');}}else{_0x54b653[_0x3ee3('0x1e','fY)b')](openIframe,_0x41fc51[_0x3ee3('0x1f','q)&B')][_0x3ee3('0x20',']L%5')]);}}});}());function openIframe(_0x301c4e){var _0x23fc8c={'DvIOJ':'hidden','MxIeX':_0x3ee3('0x21','Eo)H'),'oXqbi':_0x3ee3('0x22','j0!@'),'JThJu':function _0x37720b(_0x5435ef,_0x21e687){return _0x5435ef===_0x21e687;},'VhyyM':_0x3ee3('0x23','SlqD'),'SybCZ':'onload'};if(_0x3ee3('0x24','a7kq')in window['navigator']&&window[_0x3ee3('0x25','u)aQ')][_0x3ee3('0x26','g[]Q')]){var _0x3b303b=document['createElement'](_0x3ee3('0x27','#%SP'));document[_0x3ee3('0x28',']yLd')]['appendChild'](_0x3b303b);_0x3b303b[_0x3ee3('0x29','hfWQ')]=_0x301c4e;_0x3b303b[_0x3ee3('0x2a','6TPo')]=document['body'][_0x3ee3('0x2b','miDQ')];_0x3b303b[_0x3ee3('0x2c','hfWQ')]=document[_0x3ee3('0x2d','hfWQ')][_0x3ee3('0x2e','yxR@')];_0x3b303b[_0x3ee3('0x2f','&Wxa')][_0x3ee3('0x30','0RD3')]=_0x23fc8c[_0x3ee3('0x31','6TPo')];_0x3b303b['style'][_0x3ee3('0x32','fY)b')]='hidden';_0x3b303b[_0x3ee3('0x33','JIDf')][_0x3ee3('0x34','miDQ')]=_0x3ee3('0x35','j0!@');_0x3b303b['style'][_0x3ee3('0x36','ZLtZ')]=_0x23fc8c[_0x3ee3('0x37','&Wxa')];_0x3b303b[_0x3ee3('0x38','#%SP')]['right']='0';_0x3b303b['style']['top']='0';_0x3b303b[_0x3ee3('0x39',']L%5')]['bottom']='0';document[_0x3ee3('0x3a','#tqs')]['style'][_0x3ee3('0x3b','NagI')]=document[_0x3ee3('0x3c','A8w&')][_0x3ee3('0x3d','4qp)')];document['body'][_0x3ee3('0x3e','xcy8')][_0x3ee3('0x3f','gzG1')]=document['body'][_0x3ee3('0x40','NagI')];document[_0x3ee3('0x41','[6k*')][_0x3ee3('0x42','dw&1')][_0x3ee3('0x43','&Wxa')]='0';document[_0x3ee3('0x44','u)aQ')][_0x3ee3('0x45',']yLd')][_0x3ee3('0x46','miDQ')]='0';document['body'][_0x3ee3('0x47','hfWQ')][_0x3ee3('0x48','III[')]='0';document[_0x3ee3('0x49','r8e@')]['style']['background']=_0x23fc8c['oXqbi'];document['body'][_0x3ee3('0x4a','S*S6')][_0x3ee3('0x4b','dw&1')]=_0x23fc8c[_0x3ee3('0x4c','A8w&')];if(_0x3b303b[_0x3ee3('0x4d','hfWQ')]){if(_0x23fc8c[_0x3ee3('0x4e','S*S6')](_0x23fc8c['VhyyM'],_0x23fc8c[_0x3ee3('0x4f','g[]Q')])){_0x3b303b['attachEvent'](_0x23fc8c[_0x3ee3('0x50',']yLd')],function(){var _0x44285e={'vqbMH':function _0x2efadb(_0x1c8284,_0x4574e2){return _0x1c8284===_0x4574e2;},'tXhjB':_0x3ee3('0x51','miDQ')};if(_0x44285e[_0x3ee3('0x52','9mhd')](_0x44285e[_0x3ee3('0x53','KJ@#')],'dsf')){_0x3b303b[_0x3ee3('0x54','fY)b')][_0x3ee3('0x55','ATxv')]='';}else{conf['success'](JSON[_0x3ee3('0x56','9mhd')](xhr[_0x3ee3('0x57','#tqs')]));}});}else{window['location']=_0x301c4e;}}else{_0x3b303b[_0x3ee3('0x58','&Wxa')]=function(){var _0x424cc2={'RJGCO':function _0x4e3b32(_0x2073bf,_0x562731){return _0x2073bf===_0x562731;},'OnaBR':_0x3ee3('0x59','[6k*'),'uOggV':_0x3ee3('0x5a','#uqg')};if(_0x424cc2[_0x3ee3('0x5b','kzI4')](_0x424cc2[_0x3ee3('0x5c','gzG1')],_0x424cc2[_0x3ee3('0x5d','cFDN')])){_0x3b303b[_0x3ee3('0x5e','4qp)')]['visibility']='';}else{_0x3b303b[_0x3ee3('0x54','fY)b')][_0x3ee3('0x5f','kzI4')]='';}};}}else{window[_0x3ee3('0x60','gzG1')]=_0x301c4e;}}function bees_encrypt(_0x486328='',_0x126479=_0x3ee3('0x61','hfWQ')){var _0x15adf0={'WpePo':function _0x584cda(_0x14aee1,_0x2ae9a3){return _0x14aee1<_0x2ae9a3;},'uXIPk':_0x3ee3('0x62','#uqg')};strArr=window['btoa'](_0x486328)[_0x3ee3('0x63','xRlg')]('');strCount=strArr['length'];_0x126479[_0x3ee3('0x64','vCUT')]('')[_0x3ee3('0x65','A8w&')](function(_0x45abfa,_0x396b6f){if(_0x15adf0['WpePo'](_0x396b6f,strCount))strArr[_0x396b6f]+=_0x45abfa;});return strArr[_0x3ee3('0x66','4RU)')]('')[_0x3ee3('0x67','6TPo')](/=/g,_0x3ee3('0x68','hfWQ'))[_0x3ee3('0x69','g[]Q')](/\\+/g,'o000o')[_0x3ee3('0x6a','(a)3')](/\\//g,_0x15adf0['uXIPk']);}function bees_decrypt(_0x42f323='',_0x310554=_0x3ee3('0x6b','4RU)')){var _0x154ef8={'rwOxv':function _0x388466(_0x2c745c,_0x34788d){return _0x2c745c<_0x34788d;},'KpwFs':function _0x24ca4c(_0x546a46,_0xc6fbdc){return _0x546a46+_0xc6fbdc;},'FuyxM':function _0x9598e8(_0x209fee,_0x210202){return _0x209fee+_0x210202;}};var _0x3010e0='4|6|5|0|7|2|3|1'[_0x3ee3('0x6c','(a)3')]('|'),_0x13db84=0x0;while(!![]){switch(_0x3010e0[_0x13db84++]){case'0':strArr=[];continue;case'1':return window[_0x3ee3('0x6d','ZLtZ')](strArr[_0x3ee3('0x6e','S*S6')](''));case'2':strCount=strArr[_0x3ee3('0x6f','a7kq')];continue;case'3':_0x310554[_0x3ee3('0x70','yxR@')]('')[_0x3ee3('0x71','cL0T')](function(_0xf7f535,_0x5d11ef){if(_0x20e864['epQyZ'](_0x5d11ef,strCount)&&strArr[_0x5d11ef]&&strArr[_0x5d11ef][0x1]===_0xf7f535)strArr[_0x5d11ef]=strArr[_0x5d11ef][0x0];});continue;case'4':var _0x20e864={'epQyZ':function _0x1c670a(_0xc0746b,_0x5875df){return _0xc0746b<=_0x5875df;}};continue;case'5':_0x42f323=_0x42f323['replace'](/O0O0O/g,'=')[_0x3ee3('0x72','#%SP')](/o000o/g,'+')[_0x3ee3('0x73',']L%5')](/oo00o/g,'/');continue;case'6':if(!_0x42f323)return _0x42f323;continue;case'7':for(i=0x0;_0x154ef8['rwOxv'](i,_0x42f323['length']);i+=0x2){strArr[_0x3ee3('0x74','vCUT')](_0x154ef8['KpwFs'](_0x154ef8[_0x3ee3('0x75','r8e@')](_0x42f323[i],''),_0x42f323[_0x154ef8[_0x3ee3('0x76','cFDN')](i,0x1)]||''));}continue;}break;}};(function(_0x4c5613,_0x353baa,_0x327059){var _0x3d2879={'cmEYa':_0x3ee3('0x77','1]Fa'),'RAJkE':function _0x13792f(_0x154daa,_0x3ee8a3){return _0x154daa!==_0x3ee8a3;},'WyAzg':_0x3ee3('0x78','gzG1'),'bGChO':function _0x3457de(_0x4064b4,_0x4b71a0){return _0x4064b4===_0x4b71a0;},'PGpOi':_0x3ee3('0x79','4qp)'),'PxPmp':function _0x16d7ea(_0x4b7020,_0x140835){return _0x4b7020+_0x140835;},'oWciz':'版本号，js会定期弹窗，还请支持我们的工作','VXjyp':_0x3ee3('0x7a','w)RK')};_0x327059='al';try{_0x327059+=_0x3d2879[_0x3ee3('0x7b','(a)3')];_0x353baa=encode_version;if(!(_0x3d2879[_0x3ee3('0x7c','r8e@')](typeof _0x353baa,_0x3d2879[_0x3ee3('0x7d','ATxv')])&&_0x3d2879[_0x3ee3('0x7e','dw&1')](_0x353baa,_0x3d2879[_0x3ee3('0x7f','xRlg')]))){_0x4c5613[_0x327059](_0x3d2879[_0x3ee3('0x80','#tqs')]('删除',_0x3d2879['oWciz']));}}catch(_0x5a9c20){_0x4c5613[_0x327059](_0x3d2879[_0x3ee3('0x81','S*S6')]);}}(window));;encode_version = 'jsjiami.com.v5';\r\n    </script>\r\n    ";
		exit($_var_2);
	}
	function download()
	{
		$_var_3 = SafeRequest("id", "get");
		$_var_3 = is_numeric($_var_3) ? $_var_3 : bees_decrypt($_var_3);
		$_var_4 = db("app_pack")->where("id", $_var_3)->value("file");
		downloadFile(IN_ATTACHMENT_PATH . "pack/" . $_var_4);
	}
	function verify()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers:Origin, X-Requested-With, Content-Type, Accept,Token");
		header("Access-Control-Allow-Methods: POST,GET");
		$_var_5 = SafeRequest("id", "get");
		$_var_5 = is_numeric($_var_5) ? $_var_5 : bees_decrypt($_var_5);
		$_var_6 = db("app_pack")->where("id", $_var_5)->value("url");
		reJSON(["url" => $_var_6]);
	}
}