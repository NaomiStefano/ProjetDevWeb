<h3> Exercice n°1 </h3>

    <?php
        $arrayJours = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
        $arraySem= array(1,2);
    ?>

    <section id='page4'>
        <table class="tabSem">

            <thead>
                <tr>
                    <th colspan="1">Jour</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($arrayJours as $valeur)
                    {
                        echo '<tr><td>' .$valeur.'</td></tr>';
                    }
                ?>
            </tbody>

        </table>
    </section>

<h3> Exercice n°2 </h3>

    <section id='page4'>
        <table class="tabSem">

            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Ce que je fais</th>
                </tr>
            </thead>

            <tbody>
            <?php
            foreach($arrayJours as $valeur)
            {
                echo '<tr><td>'.$valeur.'</td>';

                if($valeur=='Samedi'||$valeur=='Dimanche')
                {
                    echo '<td>maison</td></tr>';
                }else
                {
                    echo'<td> ecole </td></tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </section>

<h3> Exercice n°3 </h3>


<section id='page4'>
    <table class="tabSem">

        <thead>
        <tr>
            <th>Semaine</th>
            <th>Jour</th>
            <th>Ce que je fais</th>
        </tr>
        </thead>

        <tbody>
        <?php


        foreach($arraySem as $nbreSem)
        {
            echo '<tr><td rowspan="7" id="sem">'.$nbreSem.'</td>';

            foreach($arrayJours as $valeur)
            {

                echo '<td>'.$valeur.'</td>';

                if($valeur=='Samedi'||$valeur=='Dimanche')
                {
                    echo '<td>maison</td></tr>';
                }else
                {
                    echo'<td> ecole </td></tr>';
                }
            }
        }
            ?>
        </tbody>
    </table>
</section>


