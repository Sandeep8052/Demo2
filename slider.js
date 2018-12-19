var arr=["raj.jpg","IMG_1402.jpg","1.jpg","2.jpg","113c.jpg","Apple_Macbook_Pro_15_35781448-4070.jpg","OriginalPng.jpg","HPp62005UK2._V165305585_.jpg","51gmSzLFsUL.jpg","IMG_0770.jpg"];
var i=0;
function slider(){
var a=document.getElementById("img1");
a.src="image/"+arr[i];
i++;
if(i==arr.length)
{
i=0;
}
window.setTimeout("slider()",1000);
}

