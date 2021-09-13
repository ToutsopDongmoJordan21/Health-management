 var headerText=[
    "HEALTH MANAGEMENT SYSTEM",
    "WELCOME TO OUR SIDE",
    "WE CAN REFER YOU TO A DOCTOR",
    ];
 function changetext(){
   for(var i=0;i<=3;i++){
     document.getElementById("title").innerHTML=headerText[i];
     console.log(headerText[i]);
     if(i==3){
       i=0;
     }
   }
 }

setInterval(changetext,200);

console.log("hello world");
