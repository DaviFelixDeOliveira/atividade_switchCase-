<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-decoration:none;
        }
        .vermelho {
            color: red;
        }
        .azul{
            color: blue;
        }
        .verde{
            color:green;
        }
        .teste{
            background-color: #E6FFFF;
            border: 10px solid #7751FC;
            border-radius: 7px;
            padding: 150px;
            display: inline-block;
            left:30%;
            top:10%;
            position: absolute;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            text-decoration:underline;
            font-size: 20px;
                    
        }
        

        .cssbuttons-io-button {
  background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
  color: white;
  font-family: inherit;
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 17px;
  border-radius: 10em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  overflow: hidden;
  position: absolute;
  right: 25%;
  bottom: 10%;
  height: 2.8em;
  padding-right: 3.3em;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: 500;
  box-shadow: 0 0 1.6em rgba(183, 33, 255,0.3),0 0 1.6em hsla(191, 98%, 56%, 0.3);
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.cssbuttons-io-button .icon {

    text-decoration:none;
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 10em;
  right: 0.3em;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #B721FF;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.9);
}


    </style>
</head>
<body>


<?php



$favcolor = $_POST['favcolor'];
switch ($favcolor) {
    case 'vermelho':
        echo "<div class='vermelho  teste'>sua cor favorita é vermelho!</div>";
        break;
    case 'azul':
        echo "<div class = 'azul teste'>sua cor favorita é azul!</div>";
        break;
    case 'verde':
        echo "<div class ='verde teste'>sua cor favorita é verde!</div>";
        break;
    
        default:
        echo "<div class ='teste'>Sua cor preferida não é vermelha, verde nem azul...</div>";
        break;
}
?>

<a href="index.html"><button class="cssbuttons-io-button"> voltar
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
    </svg>
  </div>
</button></a>

</body>
</html>