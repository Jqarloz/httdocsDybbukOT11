<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
    </head>
    <style type="text/css">
    	body,html{
    		height: 100%;
    	}
    	.modal {
    		position: fixed;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		background: rgba(0,0,0,.5);
    		display: none;
    	}
    	.container {
    		width: 50%;
    		max-height: 1000px;
    		margin: 0 auto;
    	}
    	article{
    		margin-top: 160px;
    		background: #FFF;
    		padding: 24px;
    		box-shadow: 0 1px 2px rgba(0,0,0,.9);
    	}
    	.bgimg {
		    background-image: url("<?PHP echo $layout_name; ?>/images/img/header1.jpg");
            background-repeat: repeat;
            background-size: 110% 150%;
		    color: white;
		    font-size: 25px;
		}
		.middle {
		    text-align: center;
		}
        .letra{
            font-size:20px;
            color: white;
            text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;
        }
        .letra2{
            font-size:20px;
            color: white;
            text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;
        }
        table {
            border-collapse: separate;
            border-spacing:  5px;
        }
    </style>
    <body>
    <div>
        <table class="table" width="100%">
            <tr align="center">
                <center><h3 class="letra2">Te regalamos puntos por subir LEVEL</h3></center>
            </tr>
            <tr>
                <center><p><b>Comando: </b> !reset</p></center>
            </tr>
            <tr>
                <p>  <b>¿En que consiste?</b> El sistema de reset puede ser utilizado para cualquiera que quiera ganar Premium Points cumpliendo con los requerimientos que se muestran en la tabla; Para que el sistema que se ejecute debe tener primero el nivel requerido... de acuerdo también si el player tiene días VIP o no; Si el comando se ejecuta el sistema te dará los premiums points que le corresponde de acuerdo a los numero de reset que haz echo. <b>OJO!: por ejemplo, el si eres nivel 900 y quieres ejecutar el comando, pero nunca haz echo un reset, el sistema no te dará 60 puntos como se muestra en la tabla, si no 10 puntos que es lo que corresponde al primer reset...</b> Es por eso que debes aprovechar cada vez que estés cerca de tu primera meta.</p>
            </tr>
            <tr>
                <center><b>IMPORTANTE:</b> El sistema solo te quita nivel. La <b>Vida</b>, <b>Mana</b> y <b>Skills</b> no son afectados. </center>
            </tr>
        </table>
    </div>
    <div class="bgimg">
        <table width="100%">
            <thead align="center">
                <tr>
                    <td><h4 class="letra">N° Resets</h4></td>
                    <td><h4 class="letra">Nivel sin VIP</h4></td>
                    <td><h4 class="letra">Nivel con VIP</h4></td>
                    <td><h4 class="letra">¡Puntos!</h4></td>
                </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td><p class="letra2">1-4</p></td>
                    <td><p class="letra2">350</p></td>
                    <td><p class="letra2">330</p></td>
                    <td><p class="letra2">10</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">5-9</p></td>
                    <td><p class="letra2">400</p></td>
                    <td><p class="letra2">380</p></td>
                    <td><p class="letra2">12</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">10-14</p></td>
                    <td><p class="letra2">450</p></td>
                    <td><p class="letra2">430</p></td>
                    <td><p class="letra2">15</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">14-19</p></td>
                    <td><p class="letra2">500</p></td>
                    <td><p class="letra2">480</p></td>
                    <td><p class="letra2">18</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">20-24</p></td>
                    <td><p class="letra2">530</p></td>
                    <td><p class="letra2">510</p></td>
                    <td><p class="letra2">20</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">24-29</p></td>
                    <td><p class="letra2">560</p></td>
                    <td><p class="letra2">540</p></td>
                    <td><p class="letra2">22</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">30-34</p></td>
                    <td><p class="letra2">590</p></td>
                    <td><p class="letra2">570</p></td>
                    <td><p class="letra2">25</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">35-39</p></td>
                    <td><p class="letra2">620</p></td>
                    <td><p class="letra2">600</p></td>
                    <td><p class="letra2">28</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">40-44</p></td>
                    <td><p class="letra2">640</p></td>
                    <td><p class="letra2">620</p></td>
                    <td><p class="letra2">30</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">45-49</p></td>
                    <td><p class="letra2">660</p></td>
                    <td><p class="letra2">640</p></td>
                    <td><p class="letra2">32</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">50-54</p></td>
                    <td><p class="letra2">680</p></td>
                    <td><p class="letra2">660</p></td>
                    <td><p class="letra2">35</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">54-59</p></td>
                    <td><p class="letra2">700</p></td>
                    <td><p class="letra2">680</p></td>
                    <td><p class="letra2">38</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">60-64</p></td>
                    <td><p class="letra2">750</p></td>
                    <td><p class="letra2">730</p></td>
                    <td><p class="letra2">40</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">65-69</p></td>
                    <td><p class="letra2">800</p></td>
                    <td><p class="letra2">780</p></td>
                    <td><p class="letra2">45</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">70-74</p></td>
                    <td><p class="letra2">850</p></td>
                    <td><p class="letra2">830</p></td>
                    <td><p class="letra2">50</p></td>
                </tr>
                <tr>
                    <td><p class="letra2">75+</p></td>
                    <td><p class="letra2">900</p></td>
                    <td><p class="letra2">850</p></td>
                    <td><p class="letra2">60</p></td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr width="300px">
    <img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.0-9/19275270_1478656645513195_6175150706006287922_n.png?oh=434a48033f222a88dbee2d9893d4b3a2&oe=59DAA987">
    </body>
</html>
