
(function (){
 var cval = "";
 try{cval = document.cookie;}catch(e){cval = "";}
 var l = ""; if("cmp_getlang" in window){ l = window.cmp_getlang().toLowerCase(); }
 var s = document.createElement("script");
 s.src = "https://c.delivery.consentmanager.net/delivery/cmp.php?__cmpcc=1"+(cval.length>0?"&__cmpfcc=1":"")+"&id=93746&o=1728643018&h=https%3A%2F%2Frushroyale.my.games%2Fen&"+window.cmp_params+"&l="+l+"&odw=0&dlt=1&l=en&lp=EN_EN";
 s.type = "text/javascript";
 s.setAttribute("data-cmp-ab","1");
 s.async = true;
 var samesite = window !== top?"None":"Lax";
 if(cval.length==0){ try{ document.cookie = "__cmpcc=1; expires=" + (new Date((new Date()).getTime() + 395 * 86400 * 1000)).toUTCString() + "; path=/"+(location.protocol == "https:" ? ";SameSite="+samesite+";Secure" : ";SameSite=Lax");}catch(e){} }
 if(document.body){ document.body.appendChild(s);}
 else if(document.currentScript){ document.currentScript.parentElement.appendChild(s); }
 else{ document.write(s.outerHTML); }
 })();