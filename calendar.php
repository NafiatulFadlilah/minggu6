<!DOCTYPE HTML>
<html>
    <head>
        <style>
            canvas{
                position: fixed;
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <div>
        <canvas width="350" Height="350" id="kanvas" style="background-color:white;">
        </canvas>
        <script>
            var kanvas, x, y, ct;
            var jpetak = 40;
            kanvas=document.getElementById("kanvas");
            ct=kanvas.getContext("2d");
            ct.fillStyle="#DDDDDD";
            ct.beginPath();
            for(y = 0; y < jpetak; y++){
                for(x=0 ; x < jpetak; x++){
                    if((x+y) %2 == 0)ct.rect(x * 25, y * 25, 25, 25);
                }
            }
            ct.fill();
        </script>
            <?php
                echo '<table weight="900px" cellpadding="16px">
                            <tr>
                                <th align="left"><font size="5pt">Maret</font></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th align="right"><font size="5pt">2022</font></th>
                            </tr>
                      </table>';
                echo '<table height="100%" weight="40%" cellpadding="10px">';
                for($i= 0; $i < 6; $i++){
                    if($i == 0){
                        echo '<tr>
                            <th align="center"><font color="#FF0000">Min</font></td><hr>
                            <th align="center">Sen</td><hr>
                            <th align="center">Sel</td><hr>
                            <th align="center">Rab</td><hr>
                            <th align="center">Kam</td><hr>
                            <th align="center">Jum</td><hr>
                            <th align="center">Sab</td><hr>
                        </tr>';
                    }else if($i == 1){
                        echo '<tr>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center">1</td>
                            <td align="center">2</td>
                            <td align="center">3</td>
                            <td align="center">4</td>
                            <td align="center">5</td>
                        </tr>';
                    }else if($i == 2){
                        echo '<tr>
                            <td align="center"><font color="#FF0000"><b>6</font></td>
                            <td align="center">7</td>
                            <td align="center">8</td>
                            <td align="center">9</td>
                            <td align="center">10</td>
                            <td align="center">11</td>
                            <td align="center">12</td>
                        </tr>';
                    }else if($i == 3){
                        echo '<tr>
                            <td align="center"><font color="#FF0000"><b>13</font></td>
                            <td align="center">14</td>
                            <td align="center">15</td>
                            <td align="center">16</td>
                            <td align="center">17</td>
                            <td align="center">18</td>
                            <td align="center">19</td>
                        </tr>';
                    }else if($i == 4){
                        echo '<tr>
                            <td align="center"><font color="#FF0000"><b>20</font></td>
                            <td align="center">21</td>
                            <td align="center">22</td>
                            <td align="center">23</td>
                            <td align="center">24</td>
                            <td align="center">25</td>
                            <td align="center">26</td>
                        </tr>';
                    }else{
                        echo '<tr>
                            <td align="center"><font color="#FF0000"><b>27</font></td>
                            <td align="center">28</td>
                            <td align="center">29</td>
                            <td align="center">30</td>
                            <td align="center">31</td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr>';
                    }  
                } 
                echo '</table>';   
            ?>
            </div>
    </body>
</html>