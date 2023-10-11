<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="assets/fonts/remixicon.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Montserrat:wght@300&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

    <header class="header">

        <h1 class="header__title">DAMS</h1>
        <ul class="header__category header__category-flex">
            <li>Início</li>
            <li>Tecnologia</li>
            <li>Política</li>
            <li>Esportes</li>
        </ul>


<?php if(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"] == 1): ?>

        <div class="hidden user-logged user-logged-flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
            <div>Seja bem-vindo(a),<br> <b>T1wre3</b></div>
            
            <div class="user-logged__dropdown-menu">
                <button class="btn-mostrar-conteudo" onclick="showOrHideMenu()">&#x25BC</button>
                <ul id="user__dropdown-menu" class="dropdown-menu hidden">
                    <li class="dropdown-item">
                        <button class="btn-sair">
                            <a href="sair.php" class="btn-sair__texto">Sair</a> 
                            <!-- mudar link -->
                        </button>
                    </li>
                </ul>
            </div>
			
<?php elseif(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"] == 0 || !isset($_SESSION["is_logged_in"])): ?>			

			<div class="user-login">
				<a href="registro-cliente.php" class="btn-register">Cadastrar</a>
				<a href="login-user-screen.php" class="btn-login">Entrar</a>
			</div>

        </div>
<?php endif; ?>
        
        

    </header>
    
 
    <main class="main">

        <div class="search-input">
            <form action="get">
                
                <input type="search" name="" id="" placeholder="Procurar por...">
                <i class="ri-search-line ri-xl"></i>
                
            </form>
        </div>


        <div class="popular-area">
            <div class="cardbox">
                <div class="cardbox__item cardbox__item_background-img">
                    <label class="category" for="">
                        Esportes
                    </label>
                    <p class="item__description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, dolorem!
                    </p>
                </div>
                <div class="cardbox__item cardbox__item_background-img">
                    <label class="category" for="">
                        Esportes
                    </label>
                    <p class="item__description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, dolorem!
                    </p>
                </div>
                <div class="cardbox__item cardbox__item_background-img">
                    <label class="category" for="">
                        Esportes
                    </label>
                    <p class="item__description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, dolorem!
                    </p>
                </div>
            </div>
        </div>

        <aside class="anuncio">
            Anúncio
        </aside>

        <div class="noticias-gerais noticias-wrapper">
            <div class="cardbox">
                <h3 class="categoria-noticias_titulo">Notícias gerais</h3>
                <div class="cardbox__item">
                <img src="assets/img/alan-joyce.webp"
                alt="" class="item__picture">
                <div class="category" for="">Política</div>
                <p class="item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, maxime voluptate assumenda quas deserunt doloribus enim iusto sequi eos tempora suscipit cumque veritatis officia, similique itaque aspernatur, impedit at vitae!</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/elon-musk.webp" 
                alt="" 
                class="item__picture">
                <div class="category">Política</div>
                <p class="item__description">Nihil, natus? Sint neque accusamus veritatis! Ipsam sapiente non nam voluptate alias necessitatibus ducimus incidunt iusto aliquid blanditiis similique eum labore nostrum, earum tempora a numquam? Iusto enim reprehenderit minus?</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/florida-sola-painels.webp"
                alt="" 
                class="item__picture">
                <div class="category">Política</div>
                <p class="item__description">Dolorum ea repellat accusamus officiis quae blanditiis fugit, repellendus impedit, excepturi molestias vitae deserunt dolores accusantium cupiditate ut nihil totam molestiae ratione iste possimus placeat? Animi aliquam accusantium sed unde?</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/flying-taxis.webp" 
                alt=""
                class="item__picture">
                <div class="category">Exclusivo</div>
                <p class="item__description">Dolorum assumenda, porro debitis laudantium iusto perferendis repellendus provident aliquid optio deleniti consectetur rerum, in molestias hic corrupti, facere aspernatur tempore! Pariatur quaerat hic laboriosam magnam vel fugiat ullam in.</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/sea-animals.webp" 
                alt="" class="item__picture">
                <div class="category">Dia-a-dia</div>
                <p class="item__description">Iure, dolor. Unde laudantium ducimus voluptatum eius quae molestias doloribus? Omnis dolorem expedita animi quis ullam. Quibusdam minus quisquam ipsam. Molestias eligendi deserunt quam quibusdam. Repudiandae illo aliquam at explicabo!</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/woman-holding-umbrella.webp" 
                alt="" 
                class="item__picture">
                <div class="category">Dia-a-dia</div>
                <p class="item__description">Temporibus ad quae delectus, voluptates eum exercitationem rem! Expedita magnam quo earum voluptates odio doloremque at sapiente illo a incidunt ullam ex, rerum nulla velit nesciunt placeat necessitatibus? Est, facilis?</p>
                </div>
            </div>
            <button class="btn-read-more">Saiba mais -></button>
        </div>


        <div class="noticias-tecnologia noticias-wrapper">
            <div class="cardbox">
                <h3 class="categoria-noticias_titulo">Tecnologia</h3>
                <div class="cardbox__item">
                <img src="assets/img/alan-joyce.webp"
                alt="" class="item__picture">
                <div class="category" for="">Política</div>
                <p class="item__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, maxime voluptate assumenda quas deserunt doloribus enim iusto sequi eos tempora suscipit cumque veritatis officia, similique itaque aspernatur, impedit at vitae!</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/elon-musk.webp" 
                alt="" 
                class="item__picture">
                <div class="category">Política</div>
                <p class="item__description">Nihil, natus? Sint neque accusamus veritatis! Ipsam sapiente non nam voluptate alias necessitatibus ducimus incidunt iusto aliquid blanditiis similique eum labore nostrum, earum tempora a numquam? Iusto enim reprehenderit minus?</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/florida-sola-painels.webp"
                alt="" 
                class="item__picture">
                <div class="category">Política</div>
                <p class="item__description">Dolorum ea repellat accusamus officiis quae blanditiis fugit, repellendus impedit, excepturi molestias vitae deserunt dolores accusantium cupiditate ut nihil totam molestiae ratione iste possimus placeat? Animi aliquam accusantium sed unde?</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/flying-taxis.webp" 
                alt=""
                class="item__picture">
                <div class="category">Exclusivo</div>
                <p class="item__description">Dolorum assumenda, porro debitis laudantium iusto perferendis repellendus provident aliquid optio deleniti consectetur rerum, in molestias hic corrupti, facere aspernatur tempore! Pariatur quaerat hic laboriosam magnam vel fugiat ullam in.</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/sea-animals.webp" 
                alt="" class="item__picture">
                <div class="category">Dia-a-dia</div>
                <p class="item__description">Iure, dolor. Unde laudantium ducimus voluptatum eius quae molestias doloribus? Omnis dolorem expedita animi quis ullam. Quibusdam minus quisquam ipsam. Molestias eligendi deserunt quam quibusdam. Repudiandae illo aliquam at explicabo!</p>
                </div>
                <div class="cardbox__item">
                <img 
                src="assets/img/woman-holding-umbrella.webp" 
                alt="" 
                class="item__picture">
                <div class="category">Dia-a-dia</div>
                <p class="item__description">Temporibus ad quae delectus, voluptates eum exercitationem rem! Expedita magnam quo earum voluptates odio doloremque at sapiente illo a incidunt ullam ex, rerum nulla velit nesciunt placeat necessitatibus? Est, facilis?</p>
                </div>
            </div>
            
            <button class="btn-read-more">Saiba mais -></button>
            
        </div>

        <aside class="anuncio">
            Anúncio
        </aside>

    </main>

    <footer class="footer_flex-wrapper">
        <!-- top-footer -->
        <div class="footer-top">
            
            <div class="footer__logo" for="">DASM</div>

            <div class="footer__informations">
                
                <div class="informations__item inicio">
                <label class="informations__title">Início</label>
                <ul>
                    <li>Notícias</li>
                </ul>
            </div>

                <div class="informations__item sobre-nos">
                    <label class="informations__title" for="">Sobre Nós</label>
                    <ul>
                        <li>Informações da empresa</li>
                        <li>Contato</li>
                    </ul>
                </div>

                <div class="informations__item suporte">
                    <label class="informations__title" for="">Suporte</label>
                    <ul>
                        <li>FAQ</li>
                        <li>Telefone</li>
                        <li>Chat</li>
                    </ul>
                </div>



        

            </div>

            <div class="footer__social-media">
                <i class="ri-twitter-x-line ri-2x"></i>
                <i class="ri-instagram-line ri-2x"></i>
                <i class="ri-facebook-circle-line ri-2x"></i>
            </div>
            
        </div>
        
        <!-- bottom-footer -->
        <div class="footer-bottom">
            <p class="direitos-reservados">
                @2023 Copyrigth - DAMS
            </p>
        </div>
        
        

    </footer>
    
<script src="js/index.js"></script>
</body>
</html>
