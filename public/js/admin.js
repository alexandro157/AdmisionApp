!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2072496249683294');
fbq('track', 'PageView');

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-122594926-1');



function showContent() {
    element = document.getElementById("content-otro");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display='block';
  
    }else {
        element.style.display='none';
    }
  }
  
  document.getElementById("btn-master").onclick = function(){      
   document.getElementById("content-otro").style.display='none';
  };
  
  document.getElementById("close").onclick = function(){      
   document.getElementById("content-otro").style.display='none';
  };
  