<header>
   <nav>
      <div class="line">
         <div class="top-nav">              
            <div class="logo hide-l">
               <img src="img/logo.png">
            </div>                  
            <p class="nav-text">Custom menu text</p>
            <div class="top-nav s-12 l-5" style="height: 50px;">
               <ul class="right top-ul chevron">
                  <li><a href="{{URL::Route('home')}}">Home</a>
                  </li>
                  <li><a href="{{URL::Route('rooms')}}">Rooms</a>
                  </li>
                  <li>
                     <a>About</a>           
                     <ul>
                        <li><a href="{{URL::Route('contact')}}">Contacts</a>
                        </li>
                        <li><a href="{{URL::Route('mission')}}">Mission&Vision</a>
                        </li>
                        <li><a href="{{URL::Route('history')}}">History</a>             
                        </li>
                     </ul>
                  </li>
                  
                 
               </ul>
            </div>
            <ul class="s-12 l-2">
               <li class="logo hide-s hide-m">
                  <img src="img/logo.png">
               </li>
            </ul>
            <div class="top-nav s-12 l-5" style="height: 50px;">
               <ul class="top-ul chevron">
                  
                  
                  <li><a class="pull-right" data-toggle="modal" data-target="#myModal">Login</a>
                  </li>
               </ul> 
            </div>
         </div>
      </div>
   </nav>
</header>