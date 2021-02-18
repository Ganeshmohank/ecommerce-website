<title>
    an footer
  </title>
  <head>
  
  </head>
  <footer class="site-footer">
      <div class="container">
              <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="fot ">Copyright &copy; <?php echo date('Y') ?> All Rights Reserved by</p> 
                        <a  class="fot1"style="font-weight:Bold">GMK PRODO</a>

                    </div>
                </div>
        </div>
  </footer>
  <style>
      .fot{
        padding-left:400px;
      }
      .fot1{
          padding-left:500px;
      }
      .site-footer{
        background:wheat;
        padding-top: 1.5em;
        padding-bottom: 1.5em;
      }
      @media(max-width:767px){
        .site-footer{  
        width:370px;
        }
        .fot{
            padding-left:20px;
            width:360px;

        }
        .fot1{
            padding-left:100px;
        }
      }
  </style>