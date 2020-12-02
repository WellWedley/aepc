<!DOCTYPE html>
<html>

<body>

    <p>Choisir un élément de la liste :</p>

    <select id="Manche" onchange="onSelect()">
        <option value="1-0">érable</option>
        <option value="1-80">Noyer</option>
        <option value="1-120">Acajou</option>
    </select>

    <p>Quand je choisis une option Manche le prix s'affiche ici.</p>
    <p id="resultManche"></p>

<br>
<br>

    <p>Choisir un élément de la liste :</p>

    <select id="Touche" onchange="onSelect()">
        <option value="2-0">érable</option>
        <option value="2-50">Noyer</option>
        <option value="2-80">Acajou</option>
    </select>

    <p>Quand je choisis une option Touche le prix s'affiche ici.</p>

    <p id="resultTouche"></p>

    <p id="letotal"></p>

    <script>
        onSelect();
        
        function onSelect() {
            const prixManche = Number((document.getElementById("Manche").value).split('-')[1]);
            document.getElementById("resultManche").innerHTML = prixManche;
            const prixTouche = Number((document.getElementById("Touche").value).split('-')[1]);
            document.getElementById("resultTouche").innerHTML = prixTouche;
            
            totalOptions(prixManche,prixTouche);
        }

        function totalOptions(num1,num2) {
            const total = num1 + num2;
            document.getElementById("letotal").innerHTML = '-----------------<br>'+ total;
        }

    </script>



</body>

</html>