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

*{
text-decoration:none;
}
.box
{
background-color:#ffffff;if
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
.headhighlight
{
color:#f88b95;
border-bottom:2px solid #e27287;
}
.headhref:hover
{
color:#f88b95;
border-bottom:2px solid #e27287;
}
.more
{
transition: color 0.5s ease;
-moz-transition: color 0.5s ease;
-webkit-transition: color 0.5s ease;
-o-transition: color 0.5s ease;
cursor:pointer;
color:#f0b6c1;
width:50px;
}

.more:hover
{
color:#f88b95;
}
.bar
{
background-color:#f88b95;
height:25px;
}
.title
{
width:100%;
height:30px;
background-color:#ededed;
box-shadow:-4px -0px 3px rgba(20%,20%,40%,0.5);
color:#ff867f;
}
.topic
{
width:70px;
}
.subbox
{
height:50%;
}
.item
{
cursor:pointer;
}
.item:hover
{
background-color:#fff0ef;
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
.foothighlight
{
color:#ffc0bc;
border-bottom:2px solid #e27287;
text-decoration: none;
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
color:white;
position:absolute;top:10px;right:10px;
}
.topconner
{
width: 0px;
height: 0px;
border-style: solid;
border-width: 0 10px 10px 10px;
border-color: transparent transparent #e27287 transparent;
position:absolute;right:82px;

}
.headmenu
{
position:absolute;top:209px;right:7px;z-index:-1;opacity:0;
transition: opacity 0.5s ease;
-moz-transition: opacity 0.5s ease;
-webkit-transition: opacity 0.5s ease;
-o-transition: opacity 0.5s ease;
}
.commentbox
{
width:100%;
color:white;
background-color:#ffaca8;
word-break:break-all;
border-radius:6px ;
min-height: 60px;

padding-left: 5px;
}
.commentmain
{
position:relative;
width:300px;
}
.commentconner
{
width: 0px;
height: 0px;
border-style: solid;
border-width: 15px 15px 0 0;
border-color: #ffaca8 transparent transparent transparent;
position:absolute;left:16px;
}
.pic
{
opacity:0;
display:none;
transition: opacity 0.5s ease;
-moz-transition: opacity 0.5s ease;
-webkit-transition: opacity 0.5s ease;
-o-transition: opacity 0.5s ease;

}
#picloading
{
background-color:black;
opacity:0.7;
display:block;
color:white;
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
</style>
<script>
var headmenu=0;
var picsum=0;
var timer=1;
var sum=0;
var select=0;
var checkmax=0;
var max=0;
var textvalue='';
var currenttime=6;
document.getElementById('currenttime').innerHTML=currenttime;
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
function menu()
{
	if(headmenu==0)
	{
		document.getElementById('headmenu').style.opacity='1';
		document.getElementById('headmenuclick').style.color='#f88b95';
		document.getElementById('headmenuclick').style.borderBottom='2px solid #e27287';
		document.getElementById('headmenu').style.zIndex='1';
		headmenu=1;
	}
	else
	{
		document.getElementById('headmenu').style.opacity='0';
		document.getElementById('headmenuclick').style.color='white';
		document.getElementById('headmenuclick').style.borderBottom='';
		document.getElementById('headmenu').style.zIndex='-1';
		headmenu=0;
	}
}

function loaded()
{
	document.getElementById('picloading').style.display='none';
	picshow();
}

function picshow()
{
	if(picsum==11)
	{
		document.getElementById('pic'+picsum).style.display='none';
		document.getElementById('pic'+picsum).style.opacity='0';
		picsum=0;
	}
	if(picsum==0)
	{
		picsum++;
		picon();
	}else
	{
		document.getElementById('pic'+picsum).style.display='none';
		document.getElementById('pic'+picsum).style.opacity='0';
		picsum++;
		picon();
	}
currenttimeload();
	setTimeout("picshow()",7000);
}
function currenttimeload()
{
if(currenttime>=0)
{
document.getElementById('currenttime').innerHTML=currenttime;
currenttime--;
setTimeout("currenttimeload()",1000);
}else
{
currenttime=6;
}
}
function picon()
{
	if(timer>0)
	{
		document.getElementById('pic'+picsum).style.display='block';
		timer--;
		setTimeout("picon()",1000);
	}else
	{
		document.getElementById('pic'+picsum).style.opacity='1';
		timer=1;
	}
}
function nextpic()
{

}
function prevpic()
{

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
function displaynone()
{
document.getElementById('videoplay').style.display='none';
}
</script>
</head>
<body bgcolor=#f4f4f4 onload=loaded()>
<div style="width:100%;height:200px;background-image:url('images/bg123.gif');position:relative;" id=head >
<div style="position:absolute;bottom:0px;right:5px;"><table><tr><td onclick="javascript:parent.location.href='index.php'" class=headhighlight>首頁</td><td onclick="menu()" class=headhref id=headmenuclick>資料</td><td onclick="javascript:parent.location.href='about.php'" class=headhref>關於我們</td></tr></table>
</div></div><br>
<table width=100% cellspacing="0" cellpadding="10" height=500px;>
<tr>
<td width=50% style="min-width:500px;">
<div class=box style="width:100%;height:500px;">
<div class=title><table width=100% height=100%><tr><td>統計圖</td><td align=right class=more onclick="javascript:parent.location.href='chart.php'">更多</td></tr></table></div>
<table width=100% height=90% cellspacing=0　cellpadding=0>
<?php
require_once('func.php');
$pdo=con();
$pdo->query('SET NAMES `utf8`');
$dbh=$pdo->prepare("SELECT * FROM `data` ORDER BY `search` desc LIMIT 10");
$dbh->execute();
$max=$row=$dbh->fetch();
$res=400;
echo "<tr class=item onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\">
<td align=left class=topic>{$row['topic']}</td><td>
<div class=bar style=\"width:{$res}px;\"></div>
</td>
<td>{$row['search']}</td>
</tr>";
while($row=$dbh->fetch())
{
$result=((int)$row['search']/((int)$max['search']))*400;
$result=round($result,0);
echo "<tr class=item onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\">
<td align=left class=topic>{$row['topic']}</td><td>
<div class=bar style=\"width:{$result}px;\"></div>
</td>
<td>{$row['search']}</td>
</tr>";
}
?>

<tr class=item>
<td align=left class=topic>topic1</td><td>
<div class=bar style="width:10px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic2</td><td>
<div class=bar style="width:20px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic3</td><td>
<div class=bar style="width:30px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic4</td><td>
<div class=bar style="width:40px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic5</td><td>
<div class=bar style="width:50px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic6</td><td>
<div class=bar style="width:60px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic7</td><td>
<div class=bar style="width:70px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic8</td><td>
<div class=bar style="width:80px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic9</td><td>
<div class=bar style="width:90px;"></div>
</td>
</tr>
<tr class=item>
<td align=left class=topic>topic10</td><td>
<div class=bar style="width:100px;"></div>
</td>
</tr>

</table>
</div>
</td>
<td width=50%>
<div class=headmenu id=headmenu>
<div id=menu>
<div class=topconner></div>
<div class=menumain><table width=100% height=100%><?php
$pdox=con();
$dbhx=$pdox->prepare("SELECT * FROM `data`");
$dbhx->execute();
while($row=$dbhx->fetch())
{
echo "<tr><td class=itemmenu onclick=\"javascript:parent.location.href='data.php?keyword={$row['topic']}'\">{$row['topic']}</td></tr>";
}
?></table></div>
</div>
</div>
<div id=picbox class=box style="height:500px;width:100%;">
<div class=subbox>
<div class=title id=latestpost><table width=100% height=100%><tr><td>最近關注</td><td align=right class=more onclick="javascript:parent.location.href='latestpost.php'">更多</td></tr></table></div>
<table width=100% height=80%>
<?php
require_once('func.php');
$pdo=con();
$pdo->query('SET NAMES `utf8`');
$dbh=$pdo->prepare("SELECT * FROM `data` ORDER BY `date` desc LIMIT 5");
$dbh->execute();
while($row=$dbh->fetch())
{
echo "<tr onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\"><td class=item>".$row['topic']."</td></tr>";
}
?>
</table>
</div>
<div class=subbox>
<div class=title><table width=100% height=100%><tr><td>熱門關注</td><td align=right class=more onclick="javascript:parent.location.href='heatpost.php'">更多</td></tr></table></div>
<table width=100% height=80%>
<?php
require_once('func.php');
$pdo=con();
$pdo->query('SET NAMES `utf8`');
$dbh=$pdo->prepare("SELECT * FROM `data` ORDER BY `search` desc LIMIT 5");
$dbh->execute();
while($row=$dbh->fetch())
{
echo "<tr onclick=\"javascript:parent.location.href='data.php?keyword=".$row['topic']."'\"><td class=item>".$row['topic']."</td></tr>";
}
?>
</table>
</div>
</div>
</td>
</tr>
</table>
<table width=100% cellspacing="0" cellpadding="10" height=200px;>
<tr>
<td width=50%>
<div id=picbox class=box style="height:500px;width:100%;position:relative;">
<div class=title><table width=100% height=100%><tr><td>圖片集</td><td align=right class=more onclick="javascript:parent.location.href='gallery.php'">更多</td></tr></table></div>
<table width=100% height=80% style="margin-top:10px;">
<tr>
<td style="width:100%-200px;" align=center>
<div id=pic1 class=pic><img src=activity/DSC_4553.jpg width=100%></div>
<div id=pic2 class=pic><img src=activity/DSC_4561.jpg width=100%></div>
<div id=pic3 class=pic><img src=activity/DSC_4563.jpg width=100%></div>
<div id=pic4 class=pic><img src=activity/DSC_4564.jpg width=100%></div>
<div id=pic5 class=pic><img src=activity/DSC_4565.jpg width=100%></div>
<div id=pic6 class=pic><img src=activity/DSC_4604.jpg width=100%></div>
<div id=pic7 class=pic><img src=activity/DSC_4606.jpg width=100%></div>
<div id=pic8 class=pic><img src=activity/DSC_4635.jpg width=100%></div>
<div id=pic9 class=pic><img src=activity/DSC_4700.jpg width=100%></div>
<div id=pic10 class=pic><img src=activity/DSC_4722.jpg width=100%></div>
<div id=pic11 class=pic><img src=activity/DSC_4727.jpg width=100%></div></td>
</tr>
<tr>
<td><span id=currenttime></span></td>
</tr>
</table>
<div id=picloading style="width:100%;height:100%;position:absolute;top:0px;left:0px;"><span style="position:absolute;top:50%;left:50%;margin-left:-46px;margin-top:-9px;">圖片加載中...</span></div>
</div>
</td>
<td width=50%>
<div id=picbox class=box style="height:500px;width:100%;">
<div class=title><table width=100% height=100%><tr><td>最新留言</td><td align=right class=more onclick="javascript:parent.location.href='latestcomment.php'">更多</td></tr></table></div>
<div style="padding-left:10px;padding-top:10px;padding-bottom:5px;">
<?php
require_once('func.php');
$pdo=con();
$dbh=$pdo->prepare("SELECT * FROM `chat` ORDER BY `time` desc LIMIT 0,4");
$dbh->execute();

while($row=$dbh->fetch())
{
echo "<div class=commentmain><div class=commentbox>{$row['content']}<br></div><div class=commentconner></div><br>
<a href=\"data.php?keyword={$row['topic']}\"><div class=commentuser style=\"display:inline; color:rgb(34, 193, 255)\">asd</div>
(<a href=\"data.php?keyword={$row['topic']}\"><div style=\" color:gray;display:inline\">{$row['topic']}</div></a>)
</div><br>";
}
?>
</div>
</div>
</td>
</tr>
</table>

<div id=footer class=box style="height:100px;width:100%;">
<table width=100% height=100%>
<tr>
<td valign=top>
<a href="index.php" class=foothighlight>首頁</a>
<a href="data.html" class=foothref>資料</a>
<a href="about.php" class=foothref>關於我們</a>
</td>
<td valign=bottom align=right >© Copyright by WHT 2013</td>
</tr>
</table>
</div>
<div style="position:absolute;top:180px;left:50%;margin-left:-184px;">
<div style="position:relative;">
<input type=search name="keyword"  id="keyword" autocomplete="off" style="width:250px;"  onkeyup="updown(event)" oninput="ajax()" x-webkit-speech required/ ><select id=selector><option value=website>站內</option><option value=google>Google</option></select><input type=button value=搜索 onclick=data()></input>
<div id="hi" ></div>
</div>
</div>
<div style="background-color:white;opacity:0.6;color:rgb(255, 0, 235);font-size:18px;border-radius:6px;position:absolute;top:99px;right:19px;">擁有希望的人才能得到快樂<br>懂得關懷的人才能得到幸福</div>
<?php
@session_start();
if($_SESSION['video']==null)
{
$_SESSION['video']=0;
}
if($_SESSION['video']!=1)
{
echo "
<div style=\"position:fixed;top:0px;left:0px;background-color:black;opacity:0.9;width:100%;height:100%;\" onclick=\"displaynone();\" id=videoplay>
<div style=\"position:relative;width:100%;height:100%;\">
<div style=\"position:absolute;top:50%;left:50%;margin-top:-180px;margin-left:-320px;width:640px;height:360px;\">
    <iframe width=\"100%\" height=\"100%\" src=\"//www.youtube.com/embed/Ks2xfxS7IcE?rel=0\" frameborder=\"0\" allowfullscreen></iframe>

</div>
</div>
</div>
";
$_SESSION['video']=1;
}
?>
</body>
</html>
