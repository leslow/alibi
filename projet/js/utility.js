function ajaxCall(url, method){

	var domain = ['.com','.net','.fr','127.0.0.1','127.0.0.1:80','127.0.0.1:8000','local.dev'];
	var url = url;
	var method = method || 'GET';
	
	var xhr;
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else{
		xhr = new ActiveXObject('Microsoft.XMLHTTP');
	}

	xhr.onreadystatechange = function(){
		if(xhr.readyState == XMLHttpRequest.DONE){
			if(xhr.status == 200){
				return console.log(xhr);
			}
			else if( xhr.status == 400){
				return console.log(xhr);
			}
			else{
				return console.log(xhr);
			}
		}
	}

	xhr.open(method,url,true);
	xhr.send();
}
