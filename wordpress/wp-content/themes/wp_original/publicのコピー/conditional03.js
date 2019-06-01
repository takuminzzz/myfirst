function timeAnnounce(){
var myClock = new Date();
var myHour = myClock.getHours();
if(myHour > 9 && myHour < 18){
var announce = 'カフェタイム';
}else if(myHour >= 18 && myHour < 22){
var announce = 'ディナータイム';
}else{
var announce = '営業時間外';
}
var myMessage = announce;
return myMessage;
}
