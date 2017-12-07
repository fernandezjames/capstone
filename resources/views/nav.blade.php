<header>
   <nav>
      <div class="line">
         <div class="top-nav">              
            <div class="logo hide-l">
               <img src="img/logo.png">
            </div>                  
            <p class="nav-text">Custom menu text</p>
            <div class="top-nav s-12 l-5">
               <ul class="right top-ul chevron">
                  <li><a href="{{URL::Route('home')}}">Home</a>
                  </li>
                  <li>
                     <a>Rooms</a>           
                     <ul>
                        <li><a>Single Room</a>
                        </li>
                        <li><a>Family Room</a>
                        </li>
                        <li><a>Family Suite</a>             
                        </li>
                     </ul>
                  </li>
                  <li><a href="{{URL::Route('product')}}">About</a>
                  </li>
                 
               </ul>
            </div>
            <ul class="s-12 l-2">
               <li class="logo hide-s hide-m">
                  <img src="img/logo.png">
               </li>
            </ul>
            <div class="top-nav s-12 l-5">
               <ul class="top-ul chevron">
                  
                  
                  <li><a class="pull-right" data-toggle="modal" data-target="#myModal">Login</a>
                  </li>
               </ul> 
            </div>
         </div>
      </div>
   </nav>
</header>