<link rel="icon" type="image/png" href="asyrv/img/asyrv-logo-1.png" />
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="asyrv/">ASYRV</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav pull-right navbar-nav">
            <li class="dropdown" id="menuLogin">
                <?php
                    include('config.php');
                    if(isset($_SESSION['user'])){
                        echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'> " . ucfirst(($_SESSION['user'])) . " <b class='caret'></b></a>";
                        echo "<ul class='dropdown-menu'>";
                        echo "<li><a href='asyrv/logout.php'>Salir</a></li>";
                        echo "</ul>";
                    }else{
                      echo "<a class='dropdown-toggle' href='#' data-toggle='dropdown' id='navLogin'>Login</a>";
                      echo "<div class='dropdown-menu' style='padding:17px;'>";
                      echo "<form class='form' method='POST' id='formLogin' action='asyrv/login.php'>"; 
                      echo "<input name='username'  id='username' placeholder='Username' type='text'><br>";
                      echo "<input name='password'  id='password' placeholder='Password' type='password'><br><br>";
                      echo "<button type='submit' id='btnLogin' class='btn btn-primary pull-right'>Ingreso</button>";
                      echo "</form></div>";
                    }
                ?>

                
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#myModal">Acerca de ASYRV</a>
            
            

      </li>
  </ul>

</div>
<!-- /.navbar-collapse -->
</div>


