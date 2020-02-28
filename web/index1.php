<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            #menuToggle{
                display: block;
                position: relative;
                top: 50px;
                left: 50px;
                z-index: 1;
                -webkit-user-select: none;
                user-select: none;
            }
            #menuToggle a{
                text-decoration: none;
                color: white;
                transition: color 0.3s ease;
            }
            #menuToggle a:hover{
                
            }
            #menuToggle input{
                display: block;
                width: 40px;
                height: 32px;
                position: absolute;
                top: -7px;
                left: -5px;
                cursor: pointer;
                opacity: 0; /* hide this */
                z-index: 2; /* and place it over the hamburger */
                -webkit-touch-callout: none;
            }

            /* Hamburger */
            #menuToggle span{
                display: block;
                width: 33px;
                height: 4px;
                margin-bottom: 5px;
                position: relative;
                background: #cdcdcd;
                border-radius: 3px;
                z-index: 1;
                transform-origin: 4px 0px;
                transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                    background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                    opacity 0.55s ease;
            }

            #menuToggle span:first-child{
                transform-origin: 0% 0%;
            }

            #menuToggle span:nth-last-child(2){
                transform-origin: 0% 100%;
            }

            /* Transform all the slices of hamburger into a crossmark. */
            #menuToggle input:checked ~ span{
                opacity: 1;
                transform: rotate(45deg) translate(-2px, -1px);
                background: #fff;
            }

            /* But let's hide the middle one. */
            #menuToggle input:checked ~ span:nth-last-child(3){
                opacity: 0;
                transform: rotate(0deg) scale(0.2, 0.2);
            }

            #menuToggle input:checked ~ span:nth-last-child(2){
                transform: rotate(-45deg) translate(0, -1px);
            }

            #menu{
                position: absolute;
                width: 100%;
                margin: -100px 0 0 -60px;
                padding: 50px;
                padding-top: 125px;
                background: #C8102E;
                list-style-type: none;
                -webkit-font-smoothing: antialiased;
                transform-origin: 0% 0%;
                transform: translate(-100%, 0);
                transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
            }
            #menu li{
                padding: 10px 0;
                font-size: 22px;
            }

            /* And let's slide it in from the left */
            #menuToggle input:checked ~ ul{
                transform: none;
            }
        </style>
    </head>
    <body>
        <header>
            <nav role="navigation">
                <div id="menuToggle">
                    <input type="checkbox" />

                    <span></span>
                    <span></span>
                    <span></span>

                    <ul id="menu">
                        <a href="#"><li>Home</li></a>
                        <a href="#"><li>About</li></a>
                        <a href="#"><li>Info</li></a>
                        <a href="#"><li>Contact</li></a>
                        <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
                    </ul>
                </div>
            </nav>
        </header>
    </body>
</html>
