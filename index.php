<!DOCTYPE html>
<html>
    <head>
        <style>
            .nav{
                position: absolute;
                top:0%;
                width:467px;
                height: 50px;
                background-color: aqua;
            }
            a{
                color: black;
                text-decoration: none;
            }
            .p{
                background-color: aquamarine;
            }
            .con{
                display:grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 1fr;
            }
            .b{
                background-color: antiquewhite;
                margin: 1em;
                width: 300px;
                height: 300px;
            }
            @media(max-width: 500px){
                .nav{
                position: absolute;
                top:0%;
                left:0%;
                width:360px;
                height: 60px;
                background-color: aqua;
                display: flex;
                align-items: center;
                font-weight: bold;
                }
                .p{
                    position:  relative;
                    top: 2em;
                }
                a{
                    color: black;
                    text-decoration: none;
                }
                a:hover{
                    color: tomato;
                }
                .con{
                    display:grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: auto;
                    background-color: azure;
                    padding: 7px;
                }
                .b:hover{
                    width: 307px;
                    height: 307px;
                    justify-content: center;
                    
                }
                .b{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }
        </style>
    </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <nav><div class="nav">
            <a href="#">Home</a>
        </div></nav>
        <div class="p"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aspernatur, voluptate, eligendi eveniet amet quo eos nesciunt, nihil temporibus nam ipsam reiciendis iste accusantium? Temporibus provident vero cumque saepe non?</p>
        </div>
        <br><br><br><br>
        <div class="con">
            <div class="b">1</div>
            <div class="b">2</div>
            <div class="b">3</div>
        </div>
    </body>
</html>
