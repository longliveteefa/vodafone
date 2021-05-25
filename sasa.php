<?php
echo '<div class="col-sm-1">';
echo '<li class="nav-item dropdown xd">
<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Menu <span class="lnr lnr-menu"></span>
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  <li><a class="dropdown-item"'; echo 'href=';echo"logout?";echo $id_session;echo '>Logout</a></li>
  <li><a class="dropdown-item" href="#">Profile</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="#">Add Post</a></li>
</ul>
</li>';
echo '</div>';
?>