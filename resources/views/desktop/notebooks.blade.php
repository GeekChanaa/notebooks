<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/notebooks.css')}}">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar">
        <ul class="notes-container">
          <li>
            <div class="note-bg">
            </div>
            <svg version="1.1" id="bookmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 viewBox="0 0 56.868 56.868" style="enable-background:new 0 0 56.868 56.868;" xml:space="preserve">
            	<path d="M46.934,0.011V0h-36.91c-3.358,0-6.09,2.731-6.09,6.09v50.778l19-12.666l19,12.666V32v-7V14h2v11h9V6.136
            		C52.934,2.819,50.262,0.096,46.934,0.011z"/>
            </svg>
            <a href="#">Projects</a>
            <ul class="subnotes-container">
              <li>
                <a href="#">
                  Something 1
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">Another1</a></li>
                  <li><a href="#"> Another2</a></li>
                  <li><a href="#"> Another3</a></li>
                  <li><a href="#"> Another4</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  Something 2
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">New1</a></li>
                  <li><a href="#"> New2</a></li>
                  <li><a href="#"> New3</a></li>
                  <li><a href="#"> New4</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <div class="note-bg">
            </div>
            <svg version="1.1" id="bookmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 56.868 56.868" style="enable-background:new 0 0 56.868 56.868;" xml:space="preserve">
            <path d="M46.934,0.011V0h-36.91c-3.358,0-6.09,2.731-6.09,6.09v50.778l19-12.666l19,12.666V32v-7V14h2v11h9V6.136
            C52.934,2.819,50.262,0.096,46.934,0.011z"/>
            </svg>
            <a href="#">Todos</a>
            <ul class="subnotes-container">
              <li>
                <a href="#">
                  Something 1
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">Hopaa 1</a></li>
                  <li><a href="#"> Hopaa 2</a></li>
                  <li><a href="#"> Hopaa 3</a></li>
                  <li><a href="#"> Hopaa 4</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  Something 2
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">Test 1</a></li>
                  <li><a href="#"> Test 2</a></li>
                  <li><a href="#"> Test 3</a></li>
                  <li><a href="#"> Test 4</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-content">
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/notebooks.js')}}"></script>
  </body>
</html>
