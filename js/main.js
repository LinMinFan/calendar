function current_time(){
    　NowDate=new Date();
    　h=NowDate.getHours();
    　m=NowDate.getMinutes();
    　s=NowDate.getSeconds();　
    　document.getElementById('current').innerHTML = '現在時間:'+h+'時'+m+'分'+s+'秒';
    　setTimeout('current_time()',1000);
    }
