 
   const el = document.querySelector('#resive_class');
   el.classList.add('categories-container');  
$(document).ready(function() {
 // $("#resive_class").removeClass("categories-container");
 // $(document).bind('click', '#add_class', function(){ 
  		/*$("#resive_class").addClass("categories-container");
	  	$("#resive_class").append(" <ul class='  cont-cat'  style='position: relative; top: 300px; background-color: none !important; height: 500px;'>                      <li class='active' style='><a href='#all' class='a-ho'>Home</a></li>                            <li class='>  <a href='#communication' class='a-ho'>Communication</a></li>                            <li> <a href='#events' class='a-ho'>Events</a></li>                            <li><a href='#tools' class='a-ho'>Business tools</a></li>                            <li ><a href='#signup' class='a-ho'>Sign up</a></li>                            <li><a href='#order' class='a-ho'>Order entry</a></li>                            <li><a href='#global' class='a-ho'>Global requirements</a></li>                            <li><a href='#report' class='a-ho'>Reports</a></li>                          </ul>    ");
   })*/
   $("#resive_class").append(" <ul class='  cont-cat'  style='position: relative; top: 300px; background-color: none !important; height: 500px;'>                      <li class='active' style='><a href='#all' class='a-ho'>Home</a></li>                            <li class='>  <a href='#communication' class='a-ho'>Communication</a></li>                            <li> <a href='#events' class='a-ho'>Events</a></li>                            <li><a href='#tools' class='a-ho'>Business tools</a></li>                            <li ><a href='#signup' class='a-ho'>Sign up</a></li>                            <li><a href='#order' class='a-ho'>Order entry</a></li>                            <li><a href='#global' class='a-ho'>Global requirements</a></li>                            <li><a href='#report' class='a-ho'>Reports</a></li>                          </ul>    ");

});
  
/* $("#add_class").click(function(){
	$("#resive_class").attr("class","categories-container");
});*/
    <li>
            <div id="add_class" class="collapsible-header"><i class="material-icons">menu</i>Options</div>
              <div class="collapsible-body"  style="padding-left: 20px;">
                <span>
                   <nav class="" style="position: relative; top: 300px; background-color: none !important; height: 0px !important;">
                     <!-- Fixed Masonry Filters -->
                      <div class=" menu-cat" id="prueba"  style="position: relative; top: -300px; background-color: none !important;">
                        <div id='resive_class' class=''  style='position: relative; top: 0px; background-color: black !important; opacity: 0.9 !important; height: 0px;' >
                        </div>
                      </div>
                  </nav>
                </span>
              </div>
            </div>
          </li>