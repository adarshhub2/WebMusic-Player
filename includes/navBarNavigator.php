<div id="navBarContainer">

          <nav id="navBar">

            <span tabindex="0" role="link" onclick="openpage('index.php')" class="logo">
              <img src="includes/assets/images/logo.png">
            </span>

            <div class="group">

              <div class="navItem"> 
                <span tabindex="0" role="link" onclick="openpage('search.php')"  class="navItemLink">Search
                  <img src="includes/assets/images/icons/search.png" class="icon" alt="Search">
                </span>
              </div>
            
            </div>

            <div class="group">
              
              <div class="navItem"> 
                <span tabindex="0" role="link" onclick="openpage('browse.php')" class="navItemLink">Browse</span>
              </div>

              <div class="navItem"> 
                <span tabindex="0" role="link" onclick="openpage('yourMusic.php')" class="navItemLink">Your Music</span>
              </div>

              <div class="navItem"> 
                <span tabindex="0" role="link" onclick="openpage('profile.php')" class="navItemLink"><?php echo $userLoggedIn->getUsername(); ?></span>
              </div>

            </div>

    </nav>

</div>