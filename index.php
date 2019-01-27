<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>
		Get Data From Database Using AJAX 
	</h2>
	<div id="data">
		
	</div>
	<script>
	//ajax call
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var asynchronous = true;

    //sending ajax request 
    ajax.open(method,url,asynchronous);
    ajax.send();

    //receiving response form data.php

    ajax.onreadystatechange = function()
    {
    	if(this.readyState == 4 && this.status == 200)
    	{
    		// mconverting jason back t array;
    		var data = JSON.parse(this.responseText);
    		console.log(data);

    		var html = "";
    		for(var i=0;i<data.length;i++)
    		{
    			var author = data[i].author;
    			var message = data[i].message;

    			html +="<p>"+author+"  = ";
    			html +=""+message+"</p> ";
    		}
    		document.getElementById('data').innerHTML = html;
    	}
    }

</script>
</body>
</html>
