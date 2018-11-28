@extends('')

</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0, user-scalable=no">

        <title>talkHouse</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/home.css">

        <!-- Styles -->
        <style>
            
            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

            /* .position-ref {
                position: relative;
            }
 */
            

            

            

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px; }
            
                .log{
  color:rgb(25,18,74);
}

*{box-sizing:  border-box;}
@font-face {
  font-family: "Montserrat"; src: url('montserrat/Montserrat-Medium.ttf');
}
background{
  color: rgb(192, 177, 177)
}
body{
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
}

.container-fluid{
      background-color: #fff;
      height: 80px;
      }


footer a{
  font-size: 15px;
}


header{

  padding: 15px;
  text-align: center;

}
a{
  margin-top: 20px;
  color: rgb(25,18,74);
  text-decoration:none;
  outline:none; /* retira as bodas do click  */
}

.card-header{
  background-color: rgb(241,242,243);
}
/* .btn-link{
  color: rgb(25,18,74);
} */

/* .slide{
    height: 100%; width: 100%; background-color: rgb(0, 0, 0);
    background-image: url("../image/imagemCadastro.jpeg");
    background-position: 0px -90px    ;
    background-size: 100%;
    padding-bottom: 1280px;
    position: fixed;
    animation: scrollBgGridLinks 35s linear 0s 1 normal forwards running;
} */
.transparencia{
    bottom: 0px; left: 0px; right: 0px; top: 0px; 
    position:absolute; 
    /* background: rgba(250, 247, 247, 0.5); */
}
.logoCadastro{
  height: 10%;
  width: 10%;

}
.text-center{
  color: rgb(25,18,74);
}

.fotoPerfil{
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
.top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


/* .logo{
  border-radius: 260px
} */

        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

             <div class=" jumbotron-fluid">
         <div class="row">
         <div class="col">
                            <a   href="#" class="display-4"><img src= "imagem/logo.png" width="200" name="logo"></a>
                    </div>
         
        <div class="col">
        <form action="auth/LoginController.php" method = "post">
                <table cellspacing="0" role="presentation">
                   
                        <tbody>
                        <tr> 
                                        <td >    
                                             <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                            </div>
                                        </td>
                                        <td >  
                                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                                            <input type="password" name="senha" class="form-control " id="inlineFormInputName2" placeholder="password">

                                        </td>
                                        <td class="alinhaDireita ">      
                                                <button type="submit" class="btn btn-primary mb-2">Login</button>
                                        </td>

                        </tr>
                                    
                                    <td >
                                    <a href= "#"> Esqueceu a Senha?</a>
                                    </td>
                                    <td class="tdAlingCenter" >
                                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                        <label class="form-check-label" for="inlineFormCheck">
                                        Lembrar Usuario?
                                        </label>
                                    </td>
                                    <td>
                                        
                                    </td> 
                                    
                        </tbody>
                        </tr>
                        </table> 
                    </form> 
                </div>
            </div>          
        </div>  
 
   <video autoplay muted loop class="video" >
    <source src= "imagem/files.mp4" type="video/mp4">
    </video> 
   
   <div class="content">
        <div class="page-wrapper">
            <div class="page-margin"></div>
                <div class="float-left span60 desktop-only">
                     <div class= "caixa">
                    <h1><br>
                        Bem-vindo(a) a </><span style= "color:#ab0127;">talk</span>House
                    </h1>
                    
                    
                    <div class="wc-feat-float">
                        <i class="icon-group" style="font-size: 50px;"></i>
                        <div class="feat-msg">
                            <strong>O canal para você conectar e compartilhar com as professores e alunos da Digital House.</strong>
                            <p>
                                Nunca fique de fora! Mantenha contato com colegas, professores e amigos o tempo todo!
                            </p>
                        </div>
                        <div class="float-clear"></div>
                    </div>

                    <div class="wc-feat-float">
                        <i class="icon-tablet" style="font-size: 80px;"></i>
                        <div class="feat-msg">
                            <strong>De saída? Ganhe mobilidade!</strong>
                            <p>
                                Um site para todos os dispositivos. Se você usa desktop, tablet ou smartphone,<br> mantenha contato com seus amigos!
                            </p>
                        </div>
                        <div class="float-clear"></div>
                    </div>

                    <div class="wc-feat-float">
                        <i class="icon-globe" style="font-size: 70px;"></i>
                        <div class="feat-msg">
                            <strong>Saiba o que está acontecendo na Digital House!</strong>
                            <p>
                                Fique à frente do mundo. Fique de olho na evolução ao seu redor!
                            </p>
                        </div>
                        <div class="float-clear"></div>
                    </div>
        </div>
    </div>
                 <form class="formulario_bemvindo" action= "view/cadastroview.php" method="post" enctype="multipart/form-data">

                    <label><h3>Criar uma nova conta</h3></label>
                    <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputNomel4">Nome</label>
                                <input type="text" name="nome" class="form-control" id="inputNome" placeholder="" >
                                </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">E-mail</label>
                            <input type="email" name="email" class="form-control" id="inputEmail14" placeholder="email@email.com" >
                            </div>
                    </div>   


                     <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <label for="inputSenha">Senha</label>
                                    <input type="password" name="senha"class="form-control" id="inputPassword14" placeholder="*******">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputSenha2">Confirmar Senha</label>
                                    <input type="password" name="confirmarSenha"class="form-control" id="inputConfirmePassword14" placeholder="*******">
                                </div>
                      </div>


                      <div class="form-row">
                                        <div class="form-group col-md-6" >
                                        <label for="inputState">Campus</label>
                                        <select id="inputState" class="form-control" name="campus">
                                        <option value="vilaOlimpia">Vila Olímpia, SP - Brasil</option>
                                        <option value="argentina">Buenos Aires - Argentina</option>
                                        </select>
                      </div>

                       <div class="form-group col-md-6">
                                        <label for="inputState">Curso</label>
                                        <select id="inputState" class="form-control" name="curso">
                                        <option value="fullstack">Desenvolvimento Web Full Stack</option>
                                        <option value="mobile">Desenvolvimento Mobile</option>
                                        <option value="marketing">Marketing Digital</option>
                                        <option value="datascience">Data Science</option>
                                        <option value="gestao">Gestão de Negócios Digitais</option>
                                        </select>
                        </div>
                                    
                                   
                        <div class="form-group col-md-12 rounded float-right  " >    
                                    <label for="upload-foto" class="btn btn-primary mb-2">Upload Foto </label>  
                                    <input type="submit"  class="btn btn-primary mb-2"value= "Cadastre-se "> 
                                    <input type="file" accept="image/*" id="upload-foto" name="fotoPerfil" >    
                         </div>
                        
                   
                </form>
       
       
       
         </div>
    </div>
 </div>


<footer >
    <div style="bottom: 10px; left: 0px; margin-bottom: 6px; position: absolute; text-align: center; width: 100%;">
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Sobre TalkHouse</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Termo de serviço</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Ajuda</a>
        <a href= "#"style="color: rgb(255, 255, 255); font-size: 11px; font-weight: normal; max-width: 135px; padding: 4px 7px;">Trabalhe conosco</a>

    </div>

</footer>
    </body>
</html>
