<form action="">

  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <button type="submit">Enviar</button>


</form>

<?php
 
// a key do form recebido é o name de cada input
//a value seria o que a pessoa digitou dentro do campo

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {

        echo "Nome do campo ".$key. "<br>";

        echo "Valore do campo ".$value. "<br><br>";

        echo "<hr>";
    }
}

?>