<?php
require_once 'cert-arrays.php';
?>

<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Ramon</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/skills.css">
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../css/splash.css">
    <link rel="shortcut icon" href="../img/rabbit.png" type="image/x-icon">
</head>

<body class="font-josefin dark:bg-slate-950 dark:text-white bg-slate-400 text-black h-screen flex flex-col justify-between transition-all duration ease-in-out" id="hidden-scroll">

    <!-- <div id="splash" class="fixed w-screen h-screen flex justify-center items-center dark:bg-black bg-slate-100 backdrop:blur-lg z-10">
        <div class="loader">
            <span class="loader-text">loading</span>
            <span class="load"></span>
        </div>
    </div> -->

    <header>
        <nav
            class="navbar w-full md:h-24 h-36 dark:bg-slate-900 bg-slate-300 animar
        grid md:grid-cols-2 md:grid-rows-1 grid-rows-2 border-b-2 dark:border-b-white border-b-black border-opacity-30 md:justify-items-stretch justify-items-center">

            <span class="md:col-start-1 row-start-1 flex items-center m-5 text-2xl justify-center 
            dark:bg-slate-800 bg-slate-200 w-60 p-5 border dark:border-white border-black dark:border-opacity-60 border-opacity-30 rounded-xl
            font-semibold cursor-default">Ramon Coelho</span>

            <ul class="md:col-start-2 md:row-start-1 row-start-2 flex md:justify-end gap-10 items-center m-7">
                <li>
                    <a href="../index.html" class="nav-a dark:text-white text-black transition-all
                    dark:after:bg-yellow-400 dark:before:bg-yellow-400
                    after:bg-violet-700 before:bg-violet-700
                    dark:hover:text-yellow-100 hover:text-violet-900">
                        HOME
                    </a>
                </li>

                <li>
                    <a href="./sobre.php" class="nav-a dark:text-white text-black transition-all
                    dark:after:bg-yellow-400 dark:before:bg-yellow-400
                    after:bg-violet-700 before:bg-violet-700
                    dark:hover:text-yellow-100 hover:text-violet-900">
                        SOBRE
                    </a>
                </li>

                <li>
                    <button class="border-2 border-black rounded-full dark:border-slate-400 border-opacity-35">
                        <label class="switch">
                            <input id="input" type="checkbox" checked="darkTheme" onclick="toggleDarkMode()" />
                            <div class="slider round">
                                <div class="sun-moon">
                                    <svg id="moon-dot-1" class="moon-dot" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="moon-dot-2" class="moon-dot" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="moon-dot-3" class="moon-dot" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="light-ray-1" class="light-ray" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="light-ray-2" class="light-ray" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="light-ray-3" class="light-ray" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>

                                    <svg id="cloud-1" class="cloud-dark" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="cloud-2" class="cloud-dark" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="cloud-3" class="cloud-dark" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="cloud-4" class="cloud-light" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="cloud-5" class="cloud-light" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                    <svg id="cloud-6" class="cloud-light" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="50"></circle>
                                    </svg>
                                </div>
                                <div class="stars">
                                    <svg id="star-1" class="estrela" viewBox="0 0 20 20">
                                        <path
                                            d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z">
                                        </path>
                                    </svg>
                                    <svg id="star-2" class="estrela" viewBox="0 0 20 20">
                                        <path
                                            d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z">
                                        </path>
                                    </svg>
                                    <svg id="star-3" class="estrela" viewBox="0 0 20 20">
                                        <path
                                            d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z">
                                        </path>
                                    </svg>
                                    <svg id="star-4" class="estrela" viewBox="0 0 20 20">
                                        <path
                                            d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </button>
                </li>
            </ul>

        </nav>
    </header>

    <section>
        <div class="grid md:grid-cols-2 md:grid-rows-2 gap-20 p-20 grid-cols-1 grid-rows-4 justify-items-center">      
        <?php

            foreach($certificado as $card){
                echo "<div class='w-full h-96 border border-white row-auto
                        flex items-center flex-col p-5 gap-5 col-auto
                        text-center font-light text-lg'>";

                echo "<p class='p-5 font-bold text-xl'>" . $card['nome'] . "</p>";
                
                echo "<p>" . $card['periodo'] . "</p>";
                echo "<p>" . $card['duracao'] . "</p>";
                echo "<p>" . $card['lugar'] . "</p>";

                echo "</div>";

            }
        ?>
        </div>

        
    </section>



    <footer>
        <div class="lg:h-72 dark:bg-slate-900 bg-slate-300 border-t-2 dark:border-t-white border-t-black border-opacity-30 animar
        grid lg:grid-cols-3 lg:grid-rows-2 ">

            <div class="lg:col-start-1 lg:row-start-1 flex flex-col justify-center items-center gap-3">
                <span class="text-2xl font-bold">Site desenvolvido com:</span>

                <div class="flex gap-10">
                    <div class="tailwind w-16 h-16 flex items-center justify-center rounded-full"></div>
                    <div class="js w-16 h-16 flex items-center justify-center rounded-full"></div>
                    <div class="php w-16 h-16 flex items-center justify-center rounded-full"></div>
                </div>
            </div>

            <div
                class="lg:col-start-2 lg:col-span-2 lg:row-start-1 text-lg font-light text-justify flex items-center justify-center m-7">
                <p>Este site foi desenvolvido com o objetivo de facilitar o contato, além de servir como uma
                    plataforma para demonstrar meus conhecimentos e habilidades. Aqui, você
                    encontrará meus projetos, tecnologias com as quais tenho experiência e uma visão geral
                    do meu trabalho como desenvolvedor.</p>
            </div>

            <div class="lg:col-start-3 lg:row-start-2 flex flex-col justify-center items-center gap-3">
                <span class="text-2xl font-bold">ENVIE UM EMAIL</span>

                <div class="flex justify-center w-full">
                    <a class="email w-16 h-16 flex items-center justify-center rounded-full"
                        href="mailto:coelhomeloramon@outlook.com"></a>
                </div>
            </div>

            <div class="lg:col-start-1 lg:row-start-2 flex flex-col justify-center items-center gap-3">

                <span class="text-2xl font-bold">CONEXÕES</span>

                <div class="flex justify-evenly w-full">
                    <a class="linkedin w-16 h-16 flex items-center justify-center rounded-full" target="_blank"
                        href="https://www.linkedin.com/in/coelhoramon/"></a>
                    <a class="github w-16 h-16 flex items-center justify-center rounded-full" target="_blank"
                        href="https://github.com/ramonespier"></a>
                    <a class="insta w-16 h-16 flex items-center justify-center rounded-full" target="_blank"
                        href="https://www.instagram.com/c.ooelho/"></a>
                    <a class="zap w-16 h-16 flex items-center justify-center rounded-full" target="_blank"
                        href="tel:+55 11 99999-9999"></a>
                </div>
            </div>

            <p class="lg:col-start-2 lg:row-start-2 flex flex-col justify-end items-center font-light m-2">&copy; 2025
                Ramon Coelho Melo,
                todos os direitos reservados.</p>

        </div>

    </footer>

    <script src="../js/tema.js"></script>
    <script src="../js/splash-screen.js"></script>


</body>

</html>