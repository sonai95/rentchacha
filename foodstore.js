var xmlHttp=createXmlHttpRequestObject();
function createXmlHttpRequestObject(){
	var xmlHttp;
	if(window.XMLHttpRequest){
		try{
			xmlHttp=new XMLHttpRequest();
		}
		catch(e){
			xmlHttp=false;
		}
	}
	if(!xmlHttp){
		alert("dont know");
	}
	return xmlHttp;
}
function process(){
	if(xmlHttp.readyState==0||xmlHttp.readyState==4){
		food=encodeURIComponent(document.getElementById("drone").value);
		xmlHttp.open("GET","foodstore.php?food="+food,true);
		xmlHttp.onreadystatechange=handleServerResponse;
		xmlHttp.send(null);
	}
	else{
		setTimeout("process()",1000);
	}
}
function handleServerResponse(){
if(xmlHttp.readyState==4){
	if(xmlHttp.status==200){
		xmlResponse=xmlHttp.responseXML;
		xmlDocumentElement=xmlResponse.documentElement;
		message=xmlDocumentElement.firstChild.data;
		document.getElementById("underinput").innerHTML=message;
		setTimeout("process()",1000);
	}
	else{
		alert("something went wrong!");
	}
}
}