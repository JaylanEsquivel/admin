<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style1.css" type="text/css" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <title>Login</title>
    </head>
    <body class="back-login">
        <div class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                    <div class="col-md-4"></div>
                       <div class="col-md-4 text-center">
                          <div class="row margin-log2">
                             <div class="col-md-12 col-sm-12 color-login">
                                <span class="text-center">Login</span>
                             </div>
                             <div class="col-md-12 col-sm-12">
                                 <i class="fa fa-users fa-5x black"></i>
                             </div>
                             <div class="col-md-12 col-sm-12 form-login">
                             <div class="msg1">
                                   <i class="fa fa-exclamation-circle"></i><span> Senha ou Usuario Invalido</span>
                                </div>
                                <form action="" method="post" class="form-group">
                                   <div class="input-group mm">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control marg" type="text" id="user" name="user" placeholder="Email" />
                                   </div>
                                   <div class="input-group mm">
                                    <span class="input-group-addon" style=" padding:6px 9px;"><i class="fa fa-key"></i></span>
                                    <input class="form-control marg" type="password" id="user" name="user" placeholder="Senha" /> 
                                   </div>
                                    <button class="btn btn-block marg mmm" type="submit" name="btsubmit" id="logi">ENTRAR</button>
                                </form>
                                <a href="" class="afs" id="myBtn">Esqueceu a Senha</a><a href="#">Novo Cadastro</a>
                             </div>
                          </div>
                       </div>
                    <div class="col-md-4"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container rp">
         <footer>
           <div class="row">
              <div class="col-md-12">
                 <p>To Be - Sistema de Adiministração de Series © Todos os direitos reservados. 2017</p>
              </div>
           </div>
         </footer>
       </div>
       <!-- JAVASCRIPT --> 
       <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       <!-- JAVASCRIPT --> 
      <script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("msg1").display(block);
    });
});
</script>
    </body>
</html>
