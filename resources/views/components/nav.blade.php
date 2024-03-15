
<header class="header_area">

    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand" href="{{ URL::to('') }}"><img src="{{ asset('public/images/main-logo.jpg') }}" alt="" title="" class="border"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/our-hotels">Our Hotels</a></li>
              <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/about-us">About Us</a></li> 
              <li class="nav-item {{ request()->is('prospective-projects') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/prospective-projects">Prospective projects</a></li>
              <li class="nav-item {{ request()->is('careers') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/careers">Careers</a></li>
              <li class="nav-item {{ request()->is('news-and-blogs') ? 'active' : '' }}"><a class="nav-link" href="{{ URL::to('') }}/news-and-blogs">News & Blogs</a></li>
            </ul>
            
          </div>
          <!--
            <div class="dropdown">
                <div class="dropdown-content">
                    <img src="https://th.bing.com/th?id=OSK.f03e1696a324ecc7fdd23273149c60c8&w=188&h=132&c=7&o=6&pid=SANGAM" alt="English" onclick="selectLanguage('en')" width="30px"/>
                    <img src="https://th.bing.com/th?id=OSK.44f572d236befdf2da3517ee8689097e&w=217&h=145&o=6&pid=SANGAM" alt="Spanish" onclick="selectLanguage('es')" width="30px"/>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIAIQAvAMBIgACEQEDEQH/xAAZAAEAAwEBAAAAAAAAAAAAAAAABAUGAQP/2gAIAQEAAAAAAe9+BFqwGaAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAl7cCvzQHYIEvbgV+aA7BAmbYCvzQHdoB0AAP//EABoBAQEBAAMBAAAAAAAAAAAAAAADAQIEBQb/2gAKAgIQAxAAAAC8gxGoZzn6YN73ghx2FgykvXaHf+cDjsLBlJeu0O/84HHYWDKS9dod/wCcDjsLBlJeu0O/84HHYWDKS9dod/5wOOwsGUl67Q73zgZsLBlJewBfwwwAOQH/xAAmEAAAAwYHAQEBAAAAAAAAAAABAwQAAgUwNHIUFUBTVHOSESBR/9oACAEBAAE/AM/WbZLZ+s2yWz9Ztktn6zbJbP1m2S2frNsls/WbZLJY2rOUkFC4V8ffb7+1ih9OQJjgAIg8DZ0q2ymzpVtlNnSrbKbOlW2U2dKtsps6VbZTZ0q2ymzpVtlSIfXJO0JEUoxvd0EPrknaEiKUY3u6CH1yTtCRFKMb3dBD65J2hIilGN7ugh9ck7QkRSjG93QQ+uSdoSIpRje7oIfXJO0JEUoxvd0EPrknaEiKUg3u6CH1yTtCRFKMb3dBD65J2hIilGN7ugh9ck7QkRSjG93QQ+uSdoSIpRje7oIfXJO0JEUoxvd0EPrknaEiKUY3u6BBXJe0JEUoxvdk4JHxSfANgkfFJ8A2CR8UnwDYJHxSfANgkfFJ8A2CR8UnwDYJHxSfAM6kSuCDzqcoBsCQ844+Hx9wHg/gg2FS8crwDYVLxyvANhUvHK8A2FS8crwDYVLxyvANhUvHK8A2FS8crwDYVLxyvAN//8QAHBEBAAEFAQEAAAAAAAAAAAAAATEAEiAwUREC/9oACAECAQE/ALfnlW/PKt+eU/J5GDFXPaue1c9q57gw4MOhhwYdDDgw6GHBh0MODDoYcGHQw4MOPrXrXrXrp//EACERAAEBCQEBAQAAAAAAAAAAAAEDAAISIDAxM1JyE1ER/9oACAEDAQE/AIj9aI/WiP1gT+yJAFRwH63gjoG8EdA3gjoG8EdBILyI5XOhQF5EcrnQoC8iOVzoUBeRHK50KAvIjlc6FAXkRyudCgLyI5XOhVie2LRPbFonti0T2xb/2Q==" alt="French" onclick="selectLanguage('fr')"  width="30px"/>
                </div>
            </div>
            <div id="google_translate_element"></div>
            -->
        </div>
      </nav>
    </div>
	</header>
