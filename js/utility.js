function myTimeprev(){
  var Nowymdhms　=　new Date();
  var NowYear = Nowymdhms.getYear();
  var NowMon = Nowymdhms.getMonth() + 1;
  var NowDay = Nowymdhms.getDate();
  var NowWeek = Nowymdhms.getDay();
  var NowHour = Nowymdhms.getHours();
  var NowMin = Nowymdhms.getMinutes();
  var NowSec = Nowymdhms.getSeconds();
  var Week = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
  myMsg = NowYear+"年"+NowMon+"月"+NowDay+"日("+Week[NowWeek]+")"+NowHour+"時"+NowMin+"分"+NowSec+"秒";
  document.myTime.myMsg.value = myMsg;
}