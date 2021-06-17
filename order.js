function toggle() {
    if( document.getElementById("hidethis").style.display=='none' &&document.getElementById("hidethis1").style.display=='none'){
      document.getElementById("hidethis").style.display = '';
      document.getElementById("hidethis1").style.display = '';
    }else{
      document.getElementById("hidethis").style.display = 'none';
      document.getElementById("hidethis1").style.display = 'none';
    }
}

 

function toggle2(){
    if(document.getElementById("hidethis").style.display!='none' && document.getElementById("hidethis1").style.display!='none'){
        document.getElementById("hidethis").style.display = 'none';
        document.getElementById("hidethis1").style.display = 'none';
    }
}
  
function toggle3(){
    if( document.getElementById("hidethis3").style.display=='none'){
        document.getElementById("hidethis3").style.display = '';
       
      }else{
        document.getElementById("hidethis3").style.display = 'none';
      
      }
}
function toggle4(){
    if(document.getElementById("hidethis3").style.display!='none' ){
      
        document.getElementById("hidethis3").style.display = 'none';
    }
}
function replace(){
    document.ordernow.ad.value=document.ordernow.a.value;
    document.ordernow.su.value=document.ordernow.s.value;
    document.ordernow.po.value=document.ordernow.p1.value;
}
function rem(){
    alert("Not same as Delivery")
    document.ordernow.ad.value="";
    document.ordernow.su.value="";
    document.ordernow.po.value="";
}
function  validateMyForm(){
    var alerts = [];
    if(document.ordernow.pay.value=="online"){
    if(document.ordernow.fn.value=="")
    alerts.push("\nCardholder name cannot be empty");
     if(document.ordernow.card.value=="")
    alerts.push("\ncard number cannot be empty");
     if( document.ordernow.cvv.value=="")
    alerts.push("\ncard cvv number cannot be empty");
    
}
if(document.ordernow.pick.value!="pick" && document.ordernow.pick.value!="deli")
alerts.push("\nplease select a option pickup or delivery");

if(document.ordernow.por.value=="")
alerts.push("\nYour Pizza Order cannot be empty");
if(document.ordernow.n1.value=="")
alerts.push("\nYour Name cannot be empty");
if(document.ordernow.em.value=="")
alerts.push("\nYour email cannot be empty");
if(document.ordernow.cn.value=="")
alerts.push("\nYour Contact number cannot be empty");

if(document.ordernow.pick.value=="deli"){
if(document.ordernow.a.value=="")
alerts.push("\nYour delivery address cannot be empty");
if(document.ordernow.s.value=="")
alerts.push("\nYour delivery Suburb cannot be empty");
if(document.ordernow.p1.value=="")
alerts.push("\nYour delivery post code number cannot be empty");
if((document.ordernow.p1.value).length!=4)
alerts.push("\nYour delivery post code must be 4 digits long");

}

if(document.ordernow.ad.value=="")
alerts.push("\nYour Billing address cannot be empty");
if(document.ordernow.su.value=="")
alerts.push("\nYour BillingSuburb cannot be empty");
if(document.ordernow.po.value=="")
alerts.push("\nYour Billing post code number cannot be empty");
if((document.ordernow.po.value).length!=4)
alerts.push("\nYour Billing post code must be 4 digits long");


if(document.ordernow.pay.value!="online" && document.ordernow.pay.value!="pickup")
alerts.push("\nplease select a option online or pickup");

if(document.ordernow.same.value=="yes"){
    if(document.ordernow.ad.value!=document.ordernow.a.value ||
        document.ordernow.su.value!=document.ordernow.s.value ||
        document.ordernow.po.value!=document.ordernow.p1.value){
alerts.push("\n Delvery Address is not maching with Billing address");
        }
}


if(alerts.length>0)
{
    alert(alerts.join(". "));
    return false;
}else{
    alert("sucessfully done!!!!!");
    return index.html;
}
 
}