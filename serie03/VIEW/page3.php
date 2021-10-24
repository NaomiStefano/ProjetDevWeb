
    <h2> exercice n°1 </h2>
    <section id="page3">
        <?php


            for($i=0;$i<10;$i)
            {
                $i=$i+1;
                echo'Ceci est la ligne n°'.$i.' <br \>';
            }
        ?>
    </section>

    <h2>Exercice n°2 </h2>
    <section id="page3">

        <ul>
                 <?php
                 for($i=0;$i<10;$i)
                     {
                         $i = $i + 1;
                         echo '<li> Ceci est la ligne n°' . $i . '. <br \> </li>';
                     }
                 ?>
        </ul>
    </section>


    <h2> exercice n°3 </h2>;
    <section id="page3">
        <table class="t1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">libellés</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for($i=0;$i<10;$i)
                    {
                        $i=$i+1;
                        echo '<tr> <td>'.$i.'</td> <td>Ceci est la ligne n°'.$i.'</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </section>

    <h2> exercice n°4 </h2>;
    <section id="page3">
        <table class="t1">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">libellés</th>
            </tr>
            </thead>

            <tbody>

            <?php
                for($i=0;$i<10;$i)
                {
                    $i=$i+1;
                    if($i%2==0)
                    {

                        echo '<tr><td><font color="green">'.$i.'</font></td> <td><font color="green">Ceci est la ligne n°'.$i.'</font></td></tr>';
                    }
                    else
                    {
                        echo '<font color="red"><tr><td>'.$i.'</font></td> <td><font color="red">Ceci est la ligne n°'.$i.'</font></td></tr>';
                    }
                }
            ?>
            </tbody>
        </table>
    </section>



