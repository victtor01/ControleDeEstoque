
<main class="center justifycenter times" id="boxLogin">
    <header class="fullscrenn justifycenter column" style="margin: 0px 100px 0px 0px">
        <h1 class="title" style="color:#ef9b0b;"> Fastrise  </h1>
        <p class="subtitle arial textalign"> O Fastrise o ajuda a controlar melhor o estoque da sua empresa. </p>
    </header>
    <section id="sectionLogin" class="fullscrenn shadowbox justifycenter">
        <form action="/login" method="POST" style="padding: 15px;" class="fullscrenn column">
            <label class="fullwidth">
                <span> E-mail: *</span>
                <div>
                    <input class="fullwidth formatinput" style="height: 3rem;" 
                    type="email" name="email" id="" placeholder="Email" required autocomplete="off">
                </div>
            </label>
            <label class="fullwidth">
                <span> Password: *</span>
                <div>
                    <input class="fullwidth formatinput" style="height: 3rem;" 
                    type="password" name="senha" id="" placeholder="Senha" required autocomplete="off">
                </div>
            </label>
            <button class="fullwidth formatbutton" id="buttonLogin" type="submit" id="acessar" name="acessar"> Acessar </button>
            <a href="" class="title" style="justify-content:left; text-decoration-line:underline; width: 40% ; font-weight: 400; font-size: 10pt; color: black"> Esqueceu a senha? </a>
            <div class="justifycenter fullwidth" style="color: rgba(0,0,0,0.4);"> <hr class="fullwidth"> <span class="justifycenter" style=" margin: 0px 6px 0px 6px"> Ou </span> <hr class="fullwidth"> </div>
            <button class="formatbutton" id="button_cadastro"> Cadastrar-se </button>
        </form>
    </section>
</main>
