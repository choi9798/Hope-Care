<?php
require_once('func.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Hope & Care</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body
{
font-family:Arial,微軟正黑體;
}
.title
{
width:100%;
height:30px;
background-color:#ededed;
box-shadow:-4px -0px 3px rgba(20%,20%,40%,0.5);
color:#ff867f;
}
.headhref
{
transition: color 0.5s ease;
-moz-transition: color 0.5s ease;
-webkit-transition: color 0.5s ease;
-o-transition: color 0.5s ease;
cursor:pointer;
color:white;
}
.itemmenu
{
cursor:pointer;
color:white;
}
.itemmenu:hover
{
background-color:#fff0ef;
color:black;
}
.headhighlight
{
color:#dddddd;
border-bottom:2px solid #e27287;
}
.headhref:hover
{
color:#dddddd;
border-bottom:2px solid #e27287;
}
.foothref
{
transition: color 0.5s ease;
-moz-transition: color 0.5s ease;
-webkit-transition: color 0.5s ease;
-o-transition: color 0.5s ease;
cursor:pointer;
color:#fe554c;
text-decoration:none;
}

.foothref:hover
{
color:#ffc0bc;
border-bottom:2px solid #e27287;
}
#main
{
background-color:white;
width:100%;
min-height:600px;
}
.box
{
background-color:#ffffff;
}
.subtitle
{
color:#ff867f;
font-size:20px;
}
.subsubtitle
{
font-size:17px;
color:#534ace;
padding-left:5px;
}
.person
{
color:#ff867f;
padding-left:15px;
}
.menu
{
position:relative;
}
.menumain
{
width:200px;
background-color:#e27287;
opacity:0.7;
position:absolute;top:10px;right:10px;
}
.topconner
{
width: 0px;
height: 0px;
border-style: solid;
border-width: 0 10px 10px 10px;
border-color: transparent transparent #e27287 transparent;
position:absolute;right:76px;

}
.headmenu
{
position:absolute;top:209px;right:7px;z-index:1;opacity:0;
transition: opacity 0.5s ease;
-moz-transition: opacity 0.5s ease;
-webkit-transition: opacity 0.5s ease;
-o-transition: opacity 0.5s ease;
}
.item
{
height:40px;
cursor:pointer;
}
.item:hover
{
background-color:#fff0ef;
}
#hi
{
width:250px;
text-align:left;
float:center;
position:absolute;left:0px;
background-color:#e27287;
opacity:0.7;
}
.search
{
height:30px;
border-bottom:1px solid #F0F0F0;
cursor:pointer;
color:#ffffff;
}
.search:hover
{
background-color:#F0F0F0;
color:#ff867f;
}
</style>
<script>
var headmenu=0;
var sum=0;
var select=0;
var checkmax=0;
var max=0;
var textvalue='';
function data()
{
	var select=document.getElementById('selector').value;
	var data=document.getElementById('keyword').value;
	if(select=='website')
	{
		window.location.assign('data.php?keyword='+data);
	}else
	{
		window.location.assign('https://www.google.com/search?q='+data);
	}
}
function updown(e)
{
	if(e.keyCode=='38'||e.keyCode=='40')
	{
		if(document.getElementById("keyword").value!='')
		{
			if(e.keyCode=='40')
			{
				max=document.getElementById('countednum').innerText;
				if(select!=0)
				{
					document.getElementById(select).style.background='#e27287';
					document.getElementById(select).style.color='#ffffff';
				}
				select++;
				if(select>max)
				{
					select=0;
				}
				if(select!=0)
				{
					document.getElementById("keyword").value=document.getElementById(select).innerHTML;
					document.getElementById(select).style.background='#F0F0F0';
					document.getElementById(select).style.color='#ff867f';
				}else
				{
					document.getElementById("keyword").value=textvalue;
				}
			}else
			{
				if(select>=0)
				{
					if(select!=0)
					{
						document.getElementById(select).style.background='#e27287';
						document.getElementById(select).style.color='#ffffff';
					}
					select--;
					if(select==-1)
					{
						select=max;
					}					
					if(select!=0)
					{
						document.getElementById("keyword").value=document.getElementById(select).innerHTML;
						document.getElementById(select).style.background='#F0F0F0';
						document.getElementById(select).style.color='#ff867f';
					}else
					{
						document.getElementById("keyword").value=textvalue;
					}
				}
			}
		}
	
	}
	if(e.keyCode=='13')
	{
		data();
	}
}
function ajax()
{
	textvalue=document.getElementById('keyword').value;
	if(document.getElementById('keyword').value!='')
	{
		var a=document.getElementById("keyword").value;
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				select=0;
				var ca=xmlhttp.responseText.indexOf("[wht]");
				document.getElementById("hi").innerHTML=xmlhttp.responseText.substring(0,ca);
				}
			};
			xmlhttp.open("GET","searchch.php?search="+a,true);
			xmlhttp.send();
	}else
	{
		document.getElementById('hi').innerHTML='';
	}
}
function menu()
{
if(headmenu==0)
{
document.getElementById('headmenu').style.opacity='1';
document.getElementById('headmenuclick').style.color='#f88b95';
document.getElementById('headmenuclick').style.borderBottom='2px solid #e27287';
headmenu=1;
}
else
{
document.getElementById('headmenu').style.opacity='0';
document.getElementById('headmenuclick').style.color='white';
document.getElementById('headmenuclick').style.borderBottom='';
headmenu=0;
}
}
</script>
</head>
<body bgcolor=#f4f4f4>
<div style="width:100%;height:200px;background-image:url('images/bg123.gif');position:relative;" id=head >
<div style="position:absolute;top:15px;left:15px;"><img src=banner.png width=400px></div>
<div style="position:absolute;bottom:0px;right:5px;background-color: #f88b95;"><table><tr><td onclick="javascript:parent.location.href='index.php'" class=headhref >首頁</td><td onclick="menu()" class=headhref id=headmenuclick>資料</td><td onclick="javascript:parent.location.href='about.php'" class=headhref>關於我們</td></tr></table>
</div></div><br>
<div class=headmenu id=headmenu>
<div id=menu>
<div class=topconner></div>
<div class=menumain>
<table width="100%" height="100%">
<?php 
require_once('func.php');
$pdox=con();
$pdox->query('SET NAMES `utf8`');
$dbhx=$pdox->prepare("SELECT * FROM `data`");
$dbhx->execute();
while($row=$dbhx->fetch())
{
echo "<tr><td class=itemmenu onclick=\"javascript:parent.location.href='data.php?keyword={$row['topic']}'\">{$row['topic']}</td></tr>";
}
?></table></div>
</div>
</div>
<div id=main>
<div class=title>熱門關注</div>
<table width=100% height=80%>
<?php
require_once('func.php');
$pdo=con();
$pdo->query('SET NAMES `utf8`');
$dbh=$pdo->prepare("SELECT * FROM `data` ORDER BY `search` desc LIMIT 14");
$dbh->execute();
while($row=$dbh->fetch())
{
echo "<tr onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\"><td class=item>".$row['topic']."</td></tr>";
}
?>
</table>
</div>
<br>

<div style="position:absolute;top:180px;left:50%;margin-left:-184px;">
<div style="position:relative;">
<input type=search name="keyword"  id="keyword" autocomplete="off" style="width:250px;"  onkeyup="updown(event)" oninput="ajax()" x-webkit-speech required/ ><select id=selector><option value=website>站內</option><option value=google>Google</option></select><input type=button value=搜索 onclick=data()></input>
<div id="hi" ></div>
</div>
</div>
<div style="background-color:white;opacity:0.6;color:rgb(255, 0, 235);font-size:18px;border-radius:6px;position:absolute;top:99px;right:19px;">擁有希望的人才能得到快樂<br>懂得關懷的人才能得到幸福</div>
</body>
</html>
