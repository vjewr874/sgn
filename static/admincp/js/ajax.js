function createXMLHttpRequest() {
	try {
		XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP");
	} catch(e) {
		try {
			XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e) {
			XMLHttpReq = new XMLHttpRequest();
		}
	}
}
function CheckGrade() {
        createXMLHttpRequest();
        XMLHttpReq.open("GET", "?c=ajax&a=grade", true);
        XMLHttpReq.onreadystatechange = function() {
                if (XMLHttpReq.readyState == 4) {
                        if (XMLHttpReq.status == 200) {
							var data = eval("(" + XMLHttpReq.responseText + ")");
							var grade = data.grade > 0 ? "yes" : "no";
							$("#grade").attr('src', "static/admincp/image/show_" + grade + ".gif");
							$("#enddate").html(data.enddate);
                        }
                }
        };
        XMLHttpReq.send(null);
}
function CheckBuild() {
        createXMLHttpRequest();
        XMLHttpReq.open("GET", "?c=ajax&a=build", true);
        XMLHttpReq.onreadystatechange = function() {
                if (XMLHttpReq.readyState == 4) {
                        if (XMLHttpReq.status == 200) {
                                var data = XMLHttpReq.responseText;
                                if (data.match(/^\d+/)) {
                                    parent.$("#build").html(data);
									parent.$("#notice").show();
                                }
                                CheckGrade();
                        }
                }
        };
        XMLHttpReq.send(null);
}