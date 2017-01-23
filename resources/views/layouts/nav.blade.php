<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if(!Sentinel::check())
      <ul class="nav navbar-nav">
      
        <li class="active"><a href="/register">Register <span class="sr-only">(current)</span></a></li>
        <li>
        <a href="/login">Login</a>
        </form>
        </li>

      </ul>
      @else
      <ul class="nav navbar-nav navbar-right">
      <h4>Hello, {{Sentinel::getUser()->first_name}}</h4>
        <li>
        <form action="/logout" method="POST" id="logout-form">
        {{csrf_field()}}
        <a href="#" onClick="document.getElementById('logout-form').submit()">Logout</a>
        </form>
        </li>
        <li>
          
        </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>