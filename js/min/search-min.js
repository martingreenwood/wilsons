function sortlist(){var e=document.getElementById("vehicle_makes"),t=new Array;for(i=1;i<e.length;i++)t[i-1]=e.options[i].text.toUpperCase()+","+e.options[i].text+","+e.options[i].value+","+e.options[i].selected;for(t.sort(),i=1;i<e.length;i++){var s=t[i-1].split(",");e.options[i].text=s[1],e.options[i].value=s[2],"true"==s[3]?e.options[i].selected=!0:e.options[i].selected=!1}$j("#loading").removeClass("show")}$j=jQuery,$j("#vehicle_types").change(function(){$j("#loading").addClass("show");var e=document.getElementById("vehicle_types").value,t=document.getElementById("vehicle_makes");document.getElementById("vehicle_makes").options.length=0,document.getElementById("vehicle_makes").innerHTML='<option value="">Select make...</option>';var s=null,i=new XMLHttpRequest;i.open("GET","wp-json/wp/v2/cars?filter[vehicle_type]="+e),i.send(null),i.addEventListener("readystatechange",function(){if(this.readyState===this.DONE){var e=JSON.parse(this.responseText),t=JSON.stringify(e),s=[],i=[];for(var n in e){var l=e[n],a=l.vehicle_make,o=null,r=new XMLHttpRequest,c=null;r.open("GET","wp-json/wp/v2/vehicle_make/"+a),r.send(null),r.addEventListener("readystatechange",function(){if(this.readyState===this.DONE){var e=JSON.parse(this.responseText);$j.each(e,function(t,n){var l=e.name,a=e.slug;-1==$j.inArray(e.name,s)&&(s.push(e.name,e.slug),i.push(e),c='<option value="'+a+'">'+l+"</option>",document.getElementById("vehicle_makes").innerHTML+=c,sortlist())})}})}}})}),$j("#vehicle_makes").change(function(){document.getElementById("vehicle_results").innerHTML="",document.getElementById("loader").className="",document.getElementById("loader").innerHTML="<h3>Loading, Please wait...</h3>",$j("html, body").animate({scrollTop:$j("#loader").offset().top-120},800);var e=document.getElementById("vehicle_types").value,t=document.getElementById("vehicle_makes").value,s=null,i=new XMLHttpRequest;i.open("GET","wp-json/wp/v2/cars?filter[vehicle_type]="+e+"&filter[vehicle_make]="+t),i.send(null),i.addEventListener("readystatechange",function(){if(this.readyState===this.DONE){var e=JSON.parse(this.responseText),t=JSON.stringify(e);for(var s in e){var i=e[s],n=i.title.rendered,l=i.link,a=i.acf.vehicle_pdf;void 0==a&&(a="");var o=i.acf.vehicle_price,r=i.acf.synopsis,c=i.acf.search_results_image;vehicle_result_html='<div class="search_result"><div class="img"><img src="'+c+'"></div><div class="vehicle_info"><h2 class="title">'+n+'</h2><h3 class="price">'+o+'</h3><div class="synopsis">'+r+'</div><div class="read-mores"><a class="more" href="'+l+'">Read More</a><a class="pdf" href="'+a+'"">Download Brochure</a></div></div></div>',document.getElementById("loader").className="hide",document.getElementById("vehicle_results").innerHTML+=vehicle_result_html}}})});