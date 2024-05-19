
//hakan karadereli 
//ögrenci no: 231030087
// hocam ödevi videodan izlediğim kadar yaptım nedenini soracak olursanız ödev sorularını bulamadık silinmiş 
// yoksa ilk gün yapacaktım.


/*1. Ödev:
var tarih = new Date();
var saat = tarih.getHours();
if (saat < 12) {
  alert("Günaydın");
}
*/
//----------------------------------------------------------------

/* 2.Ödev
var tarih2 = new Date();
var saat2 = tarih2.getHours();
if (saat2 <18) {
  alert("Henüz akşam olmadı");
} else {
  alert("Akşam oldu");
}
*/
//----------------------------------

/* 3.Ödev
var tarih3 = new Date();
var saat3 = tarih3.getHours();
if (saat3 < 12) {
  alert("Günaydın");
} else if (saat3 < 18) {
  alert("Henüz gündüz");
} else {
  alert("Akşam oldu");
}
*/

//----------------------------------------------------------------
/*4.Ödev
var bugun =new Date();
var gunIndex =bugun.getDay();
var gunAdi;

switch (gunIndex) {
    case 0:
    gunAdi ="Pazar";
    break;
    case 1:
    gunAdi="Pazartesi";
    break;
    case 2:
    gunAdi="Salı";
    break;
    case 3:
    gunAdi="Çarşamba";
    break;
    case 4:
    gunAdi="Perşembe";
    break;
    case 5:
    gunAdi="Cuma";
    break;
    case 6:
    gunAdi="Cumartesi";
    break;
    default:
    gunAdi="Geçersiz gün";
}
alert("Bugün " + gunAdi + "  + Gündür.");
*/
//------------------------------------------------------------------------------------------------

/*5.ödev
var bugun =new Date();
var gungun= bugun.getDay();

switch(gungun){
    case 0:
        alert("Pazar günü");
        break;
    case 1:
        alert("Cumartesi günü");
        break;
        default:
            alert("İş günü değil");
}
*/
//6 Ödev
/*
var bugun =new Date();
var gungun= bugun.getDay();

switch(gungun){
    case 0:
        alert("Tatil günü");
        break;
    case 6:
        case 3:
        alert("Hafta yeni başladi");
        break;
        
        case 4:
            alert("Perşenbe");
        default:
            alert("İş günü değil");
}*/

//////////////////////////////////////

//7 ödev
/*var renkler =["Kırmızı","turuncu","sarı","yeşil","mavi","lacivet","mor"];
var i; uzunluk=renkler.length;
for (i=0; i< uzunluk; i++){
    alert(renkler[i]);

}
*/
/* 8 ödev 
var i,toplam=0;
for(i=0; i <5; i++){
    toplam+=i;

}
alert(i);*/
//

/*var i, sonuc=0;
for(i =0; i <11; i +=2){
    sonuc +=i

}
alert(sonuc);
*/
/*"use strict";
var a=7;
let b=6;
var c=a+b;
console.log(c);
*/
/*var kisi={
  adi:"ali",
  soyAdi:"sa",
  yas:19,
  adSoy: function(){
    return this.adi +" "+ this.soyAdi;

  }
};
console.log(kisi.adSoy());*/
/*var ad=new String("Ali");
var isim=new String("Ali");
console.log(ad===isim);
*/
/*
var x=0==="";
console.log(x);*/


function Topla(x,y){
  if(y===undefined){
    y = 7;
  }
return x+y;


}
console.log(Topla(4));