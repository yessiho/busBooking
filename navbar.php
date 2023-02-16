<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center" style="background-color:purple;">

      <h1 class="logo mr-auto"><a href="./index.php?page=home"><span style="color:white;">Online Transport Scheduling</span></a></h1>

      <nav class="nav-menu d-none d-lg-block" id='top-nav'>
        <ul>
          <li class="nav-home"><a href="./index.php?page=home"><span style="color: white;">Home</span></a></li>
           <li class="nav-schedule"><a href="./index.php?page=schedule"><span style="color:white;">Schedule</span></a></li>                          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>