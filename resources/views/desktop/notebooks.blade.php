<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/notebooks.css')}}">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <ul class="notes-container">
          <li>
            <a href="#">Projects</a>
            <ul class="subnotes-container">
              <li>
                <a href="#">
                  Something 1
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">Test 1</a></li>
                  <li><a href="#"> Test 2</a></li>
                  <li><a href="#"> Test 3</a></li>
                  <li><a href="#"> Test 4</a></li>
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
          <li>
            <a href="#">Todos</a>
            <ul class="subnotes-container">
              <li>
                <a href="#">
                  Something 1
                </a>
                <ul class="lastnotes-container">
                  <li><a href="#">Test 1</a></li>
                  <li><a href="#"> Test 2</a></li>
                  <li><a href="#"> Test 3</a></li>
                  <li><a href="#"> Test 4</a></li>
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

      <div class="main-content">

      </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/notebooks.js')}}"></script>
  </body>
</html>
