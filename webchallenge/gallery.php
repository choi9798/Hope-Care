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
.pichover
{
background-color:white;
opacity:0.5;
z-index:2;
position:absolute;top:0px;left:0px;
width:100%;
height:100%;
}
 .pichover
{
background-color:white;
opacity:0.5;
z-index:2;
position:absolute;top:0px;left:0px;
width:100%;
height:100%;
}.headhref
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
.piczoomback
{
position:absolute;
top:0px;
left:0px;
width:100%;
height:100%;
background-color:black;
opacity:0.8;
}
.piczoom
{
position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:10;display:none;
}
.piczoompic
{
position:absolute;top:50%;left:50%;margin-left:-300px;margin-top:-200px;z-index:2;
}
.smallpic
{
cursor:pointer;
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
function pichover(event)
{
var obj=window.event.srcElement||eventTag.target;
obj.style.zIndex='0';
obj.style.webkitFilter=' blur(5px)';
}
function picmouseout()
{
var obj=window.event.srcElement||eventTag.target;
obj.previousSibling.style.zIndex='2';
obj.previousSibling.style.webkitFilter=' blur(0px)';
}
function picnonhover(event)
{
var obj=window.event.srcElement||eventTag.target;
obj.style.zIndex='2';
obj.style.webkitFilter=' blur(0px)';
}function menu()
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
function loaded()
{
document.getElementById('picloading').style.display='none';
}
/*function pichover(event)
{
var obj=window.event.srcElement||eventTag.target;
obj.style.zIndex='0';
obj.style.webkitFilter=' blur(5px)';
}
//function picmouseout()
//{
//var obj=window.event.srcElement||eventTag.target;
//this.previousSibling.style.zIndex='2';




//}
function picnonhover(event)
{
var obj=window.event.srcElement||eventTag.target;
obj.style.zIndex='2';
obj.style.webkitFilter=' blur(0px)';
}*/
/*function detaildisplay(rid)
{
var arr;
arr=new array("asd","dfghiludfhgio");
var obj=window.event.srcElement||eventTag.target;
obj.innerHTML=arr[rid];
}*/
function piczoominshow(idname)
{
document.getElementById(idname+'zoom').style.display='block';
}
function piczoomnone(idname)
{
document.getElementById(idname).style.display='none';
}
</script>
</head>
<body bgcolor=#f4f4f4 onload=loaded()>
<div style="width:100%;height:200px;background-image:url('images/bg123.gif');position:relative;" id=head >
<div style="position:absolute;top:15px;left:15px;"><img src=banner.png width=400px></div>
<div style="position:absolute;bottom:0px;right:5px;background-color: #f88b95;"><table><tr><td onclick="javascript:parent.location.href='index.php'" class=headhref >首頁</td><td onclick="menu()" class=headhref id=headmenuclick>資料</td><td onclick="javascript:parent.location.href='about.php'" class=headhref>關於我們</td></tr></table>
</div></div><br>
<div class=headmenu id=headmenu>
<div id=menu>
<div class=topconner></div>
<div class=menumain><table width="100%" height="100%">
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
<div id=picbox class=box style="height:730px;width:100%;position:relative;">
<div class=title>探訪兒童之家</div>
<center>
<table width=98% height=80% cellpadding=5px style="padding-top:10px;">
<tr>
<td  align=center style="position:relative;">

<img src=activity/DSC_4553.jpg  width=100% id=pic2 onclick="piczoominshow('pic2')" class=smallpic>
</td>
<td  align=center>
<img src=activity/DSC_4561.jpg width=100% id=pic2 onclick="piczoominshow('pic2')" class=smallpic>
</td>
<td  align=center>
<img src=activity/DSC_4563.jpg width=100% id=pic3 onclick="piczoominshow('pic3')" class=smallpic>
</td>
<td  align=center>
<img src=activity/DSC_4564.jpg width=100% id=pic4 onclick="piczoominshow('pic4')" class=smallpic>
</td>
</tr>
<tr>
<td  align=center><img src=activity/DSC_4565.jpg width=100% id=pic5 onclick="piczoominshow('pic5')" class=smallpic></td>
<td  align=center><img src=activity/DSC_4604.jpg width=100% id=pic6 onclick="piczoominshow('pic6')" class=smallpic></td>
<td  align=center><img src=activity/DSC_4606.jpg width=100% id=pic7 onclick="piczoominshow('pic7')" class=smallpic></td>
<td  align=center><img src=activity/DSC_4635.jpg width=100% id=pic8 onclick="piczoominshow('pic8')" class=smallpic></td>
</tr>
<tr>
<td  align=center><img src=activity/DSC_4700.jpg width=100% id=pic9 onclick="piczoominshow('pic9')" class=smallpic></td>
<td  align=center><img src=activity/DSC_4722.jpg width=100% id=pic10 onclick="piczoominshow('pic10')" class=smallpic></td>
<td  align=center><img src=activity/DSC_4727.jpg width=100% id=pic11 onclick="piczoominshow('pic11')" class=smallpic></td>
</tr>
</table>
</center>
<div id=picloading style="z-index:10;width:100%;height:100%;position:absolute;top:0px;left:0px;"><span style="position:absolute;top:50%;left:50%;margin-left:-46px;margin-top:-9px;">圖片加載中...</span></div>
</div>
</div>
<br>
<div id=pic1zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic1zoom')" style="z-index:1;"></div>
<img  src=activity/DSC_4553.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic2zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic2zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4561.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic3zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic3zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4563.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic4zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic4zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4564.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic5zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic5zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4565.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic6zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic6zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4604.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic7zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic7zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4606.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic8zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic8zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4635.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic9zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic9zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4700.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic10zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic10zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4722.jpg width=600px class=piczoompic>
</div>
</div>
<div id=pic11zoom class=piczoom>
<div style="position:relative;width:100%;height:100%;">
<div  class=piczoomback onclick="piczoomnone('pic11zoom')" style="z-index:1;"></div>
<img src=activity/DSC_4727.jpg width=600px class=piczoompic>
</div>
</div>
<div style="position:absolute;top:180px;left:50%;margin-left:-184px;">
<div style="position:relative;">
<input type=search name="keyword"  id="keyword" autocomplete="off" style="width:250px;"  onkeyup="updown(event)" oninput="ajax()" x-webkit-speech required/ ><select id=selector><option value=website>站內</option><option value=google>Google</option></select><input type=button value=搜索 onclick=data()></input>
<div id="hi" ></div>
</div>
</div>
<div style="background-color:white;opacity:0.6;color:rgb(255, 0, 235);font-size:18px;border-radius:6px;position:absolute;top:99px;right:19px;">擁有希望的人才能得到快樂<br>懂得關懷的人才能得到幸福</div>
</body>
</html>
