window.onload = function() {
	document.querySelector('#shop_ip').onclick = function() {
		ajaxGet();
	}
}

function ajaxGet() {
	var request = new XMLHttpRequest();

	//request.readyState // 0 - new
	//request.readyState // 1 - open
	//request.readyState // 2 - send
	//request.readyState // 3 - ответ частично пришел
	//request.readyState // 4 - ответ пришел полностью

	request.onreadystatechange = function() {
	if(request.readyState == 4 && request.status == 200) {
			document.querySelector('#myip').innerHTML = request.responseText;
		}
	}

	request.open('GET', 'GET.php');
	request.send();
}