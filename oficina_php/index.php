<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Oficina PHP</title>
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <section class="section-fixed">
            <div class="theme-button" id="button-color">
                <span id="button-color-span">G</span>
            </div>
        </section>

        <!-- ECHO & PRINT -->
        <section class="section-base">
            <h2>Echo & Print</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?="Hello World&#60;/br&#62;"?&#62;</p>
                    </br>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;echo "Hello World&#60;/br&#62;";<br>
                    ?&#62;</p>
                    </br>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;echo "Hello" . " World&#60;/br&#62;";<br>
                    ?&#62;</p>
                    </br>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;print "Hello World&#60;/br&#62;";<br>
                    ?&#62;</p></br>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;print "Hello" . " World&#60;/br&#62;";<br>
                    ?&#62;</p>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>Hello World</p>
                    <p>Hello World</p>
                    <p>Hello World</p>
                    <p>Hello World</p>
                    <p>Hello World</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba a mensagem "Hello World" de três formas: usando a abreviação, o comando echo e o comando print.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado esperado</h4>
                    <p>Hello World</p>
                    <p>Hello World Using Echo</p>
                    <p>Hello World Using Print</p>
                </div>
            </div>
        </section>

        <!-- VARIÁVEIS -->
        <section class="section-base">
            <h2>Variáveis</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;$nome = "Erik";</br>
                    &nbsp;&nbsp;$nome = "Luiz";</br>
                    &nbsp;&nbsp;$nome = "Gustavo José";</br>
                    &nbsp;&nbsp;echo $nome;</br>
                    ?&#62;</p>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>Gustavo José</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba seu nome printando-o de uma variável que tenha sofrido pelo menos uma alteração.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado esperado:</h4>
                    <p>?Seu nome?</p>
                </div>
            </div>
        </section>

        <!-- CONSTANTES -->
        <section class="section-base">
            <h2>Constantes</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;const CURSO = "Oficina PHP";</br>
                    &nbsp;&nbsp;echo CURSO;</br>
                    ?&#62;</p>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>Oficina PHP</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba a mensagem "This is PHP" de uma constante.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado Esperado:</h4>
                    <p>This is PHP</p>
                </div>
            </div>
        </section>

        <!-- REQUIRE X INCLUDE -->
        <section class="section-base">
            <h2>Require x Include</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                  <h4>Código:</h4>
                  <p>&#60;?php</br>
                  &nbsp;&nbsp;require "file.php";</br>
                  &nbsp;&nbsp;echo $varimported . "&#60;/br&#62;";</br>
                  ?&#62;</p>
                  <p>&#60;?php</br>
                  &nbsp;&nbsp;include "file.php";</br>
                  &nbsp;&nbsp;echo $varimported . "&#60;/br&#62;";</br>
                  ?&#62;</p>
                  </br>
                </div>
                <div class="result">
                  <h4>Resultado:</h4>
                  <p>Variável Importada!</p>
                  <p>Variável Importada!</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba o valor da constante "oficina" vinda do arquivo "utils/utils.php".
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                  <h4>Tente Você:</h4>
                  <p>...</p>
                </div>
                <div class="result">
                  <h4>Resultado Esperado:</h4>
                  <p>Oficina PHP</p>
                </div>
            </div>
        </section>

         <!-- Estrutura de controle -->
         <section class="section-base">
          <h2>Estruturas de controle</h2>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Código:</h4>
              <p>
                &#60;?php</br>
                &nbsp;&nbsp;$condicao = true;</br>
                &nbsp;&nbsp;if($condicao){</br>
                &nbsp;&nbsp;&nbsp;&nbsp;$condicao = false;</br>
                &nbsp;&nbsp;}</br>
                &nbsp;&nbsp;if($condicao) {</br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo 'Hello 1';</br>
                &nbsp;&nbsp;}else{</br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo 'Hello 2';</br>
                &nbsp;&nbsp;}</br>
                ?&#62;
              </p>
              </br>
            </div>
            <div class="result">
              <h4>Resultado:</h4>
              <p>Hello 2</p>
            </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Exiba a mensagem "condicao verdadeira" de dentro de um 'if' e a mensagem "condicao false" de dentro de um 'else'.
          </h4>
          <div class="code" style="margin-top: 20px;">
            <div>
                <h4>Tente Você:</h4>
                <p>...</p>
            </div>
            <div class="result">
                <h4>Resultado Esperado:</h4>
                <p>condicao verdadeira</p>
                <p>condicao falsa</p>
            </div>
          </div>
        </section>

         <!-- Estrutura de loop -->
         <section class="section-base">
            <h2>Estruturas de Loop</h2>
            <div class="code" style="margin-top: 20px;">
              <div>
                <h4>Código:</h4>
                <p>&#60;?php</br>
                &nbsp;&nbsp;for($i = 0; $i < 10; $i++){</br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "loop " . $i . "&#60;/br&#62;";</br>
                &nbsp;&nbsp;}</br>
                &nbsp;&nbsp;$a = 0;</br>
                &nbsp;&nbsp;while($a < 4){</br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "while " . $a . "&#60;/br&#62;";</br>
                &nbsp;&nbsp;&nbsp;&nbsp;a++;</br>
                &nbsp;&nbsp;}</br>
                ?&#62;</p>
                </br>
              </div>
              <div class="result">
                <h4>Resultado:</h4>
                <p>
                  loop 0</br>
                  loop 1</br>
                  loop 2</br>
                  loop 3</br>
                  loop 4</br>
                  loop 5</br>
                  loop 6</br>
                  loop 7</br>
                  loop 8</br>
                  loop 9</br>
                  while 0</br>
                  while 1</br>
                  while 2</br>
                  while 3</br>
                </p>
              </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba uma contagem regressiva, começando em 9 até 0, e quando for zero, print "Lançar".
            </h4>
            <div class="code" style="margin-top: 20px;">
              <div>
                <h4>Tente Você:</h4>
                <p>...</p>
              </div>
              <div class="result">
                <h4>Resultado Esperado:</h4>
                <p>
                  loop 9</br>
                  loop 8</br>
                  loop 7</br>
                  loop 6</br>
                  loop 5</br>
                  loop 4</br>
                  loop 3</br>
                  loop 2</br>
                  loop 1</br>
                  Lançar</br>
                </p>
              </div>
            </div>
        </section>

        <!-- Array -->
        <section class="section-base">
          <h2>Array</h2>
          <div class="code" style="margin-top: 20px;">
              <div>
                <h4>Código:</h4>
                <p>
                  &#60;?php</br>
                  &nbsp;&nbsp;$named_array = array(</br>
                  &nbsp;&nbsp;&nbsp;&nbsp;"oficina" => "php",</br>
                  &nbsp;&nbsp;&nbsp;&nbsp;"php" => ".php",</br>
                  &nbsp;&nbsp;);</br>
                  </br>
                  &nbsp;&nbsp;var_dump($named_array);</br>
                  &nbsp;&nbsp;echo "&#60;/br&#62;";
                  </br>
                  &nbsp;&nbsp;$array = array("valor", "outro valor");</br>
                  </br>
                  &nbsp;&nbsp;var_dump($array);</br>
                  &nbsp;&nbsp;echo "&#60;/br&#62;";</br>
                  </br>
                  &nbsp;&nbsp;array_push($array, "teste");</br>
                  </br>
                  &nbsp;&nbsp;for($i = 0; $i < count($array); $i++){</br>
                  &nbsp;&nbsp;&nbsp;&nbsp;echo $array[$i] . "&#60;/br&#62;";</br>
                  &nbsp;&nbsp;}</br>
                  </br>
                  &nbsp;&nbsp;echo "== foreach ==&#60;/br&#62;";</br>
                  </br>
                  &nbsp;&nbsp;foreach($array as &$v){</br>
                  &nbsp;&nbsp;&nbsp;&nbsp;echo $v . "&#60;/br&#62;";</br>
                  &nbsp;&nbsp;}</br>
                  &nbsp;&nbsp;unset($v);</br>
                  </br>
                  &nbsp;&nbsp;$array["petter"] = "balloon";</br>
                  </br>
                  &nbsp;&nbsp;var_dump($array);</br>
                  ?&#62;
                </p>
                </br>
              </div>
              <div class="result">
                  <h4>Resultado:</h4>
                  <p>
                    array(2) { ["oficina"]=> string(3) "php" ["php"]=> string(4) ".php" }</br>
                    array(2) { [0]=> string(5) "valor" [1]=> string(11) "outro valor" }</br>
                    valor</br>
                    outro valor</br>
                    teste</br>
                    == foreach ==</br>
                    valor</br>
                    outro valor</br>
                    teste</br>
                    array(4) { [0]=> string(5) "valor" [1]=> string(11) "outro valor" [2]=> string(5) "teste" ["petter"]=> string(7) "balloon" }</br>
                  </p>
              </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Exiba o 'var_dump' de um array que possui dois valores [php, html] e um outro array nomeado, contendo: gian->joker e petter->ballon.
          </h4>
          <div class="code" style="margin-top: 20px;">
              <div>
                  <h4>Tente Você:</h4>
                  <p>...</p>
              </div>
              <div class="result">
                  <h4>Resultado Esperado:</h4>
                  <p>
                    array(2) { [0]=> string(3) "php" [1]=> string(4) "html" }</br>
                    array(2) { ["gian"]=> string(5) "joker" ["petter"]=> string(7) "balloon" }
                  </p>
              </div>
          </div>
        </section>

        <!-- Funções -->
        <section class="section-base">
            <h2>Funções</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                  <h4>Código:</h4>
                  <p>
                    &#60;?php</br>
                    &nbsp;&nbsp;function helloworld() {</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo "Hello World" . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;}</br>
                    &nbsp;&nbsp;function printLine($message) {</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;echo $message . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;}</br>
                    &nbsp;&nbsp;helloworld();</br>
                    &nbsp;&nbsp;printLine("Teste");</br>
                    ?&#62;
                  </p>
                  </br>
                </div>
                <div class="result">
                  <h4>Resultado:</h4>
                  <p>
                    Hello World</br>
                    Teste</br>
                  </p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Crie uma função que recebe um nome e exibe a mensagem "Olá ?NOME?!", onde '?NOME?' é um nome passado.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                  <h4>Tente Você:</h4>
                  <p>...</p>
                </div>
                <div class="result">
                  <h4>Resultado Esperado:</h4>
                  <p>Olá ?NOME?!</p>
                </div>
            </div>
        </section>

        <!-- _GET & _POST -->
        <section class="section-base">
          <h2>_GET & _POST</h2>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Código:</h4>
              <p>
                &#60;?php</br>
                &nbsp;&nbsp;echo $_GET["username"] . '&#60;/br&#62;';</br>
                &nbsp;&nbsp;echo $_POST["password"] . '&#60;/br&#62;';</br>
                ?&#62;
              </p>
              </br>
            </div>
            <div class="result">
                <h4>Resultado:</h4>
                <p>
                  admin</br>
                  adm123</br>
                </p>
            </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Exiba a mensagem "PessoaId: ?id?" onde ?id? é o id passado por um $_POST, e outra mensagem "Nome: ?Nome?" onde ?Nome? venha de um $_GET.
          </h4>
          <div class="code" style="margin-top: 20px;">
            <div>
                <h4>Tente Você:</h4>
                <p>...</p>
            </div>
            <div class="result">
                <h4>Resultado Esperado:</h4>
                <p>PessoaId: 123</p>
                <p>Nome: Teste</p>
            </div>
          </div>
        </section>

        <!-- _SESSION & _COOKIES -->
        <section class="section-base">
          <h2>_SESSION & _COOKIES</h2>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Código:</h4>
              <p>&#60;?php</br>
                &nbsp;&nbsp;setcookie("token", "22423", time() + 100000);</br>
                </br>
                &nbsp;&nbsp;session_start();</br>
                </br>
                &nbsp;&nbsp;echo $_COOKIE["token"] . "&#60;/br&#62;";</br>
                </br>
                &nbsp;&nbsp;$_SESSION["username"] = "admin";</br>
                &nbsp;&nbsp;echo $_SESSION["username"];</br>
                </br>
                &nbsp;&nbsp;unset($_SESSION["newsession"]);</br>
              ?&#62;</p>
              </br>
            </div>
            <div class="result">
              <h4>Resultado:</h4>
              <p>
                22423</br>
                admin</br>
              </p>
            </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Insira e recupere um usuário do $_COOKIE, exibindo-o como 'Saved User: ?user?' onde ?user? é o usuário.
          </h4>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Tente Você:</h4>
              <p>...</p>
            </div>
            <div class="result">
              <h4>Resultado Esperado:</h4>
              <p>Saved User: admin</p>
            </div>
          </div>
        </section>

        <!-- Funções matemáticas -->
        <section class="section-base">
            <h2>Funções Matemáticas</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;echo pow(5, 2) . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo sqrt(9) . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo max(1, 2, 7, 5, 4) . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo min(8, 4, 1, 2, 3) . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo pi(); . "&#60;/br&#62;";</br>
                    ?&#62;</p>
                    </br>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>25</p>
                    <p>3</p>
                    <p>5</p>
                    <p>1</p>
                    <p>3.1415926535898</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Mostre a raiz quadrada de 25.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado Esperado:</h4>
                    <p>5</p>
                </div>
            </div>
        </section>

        <!-- Funções de data -->
        <section class="section-base">
            <h2>Funções de Data</h2></br>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;date_default_timezone_set('America/Sao_Paulo');</br></br>
                    &nbsp;&nbsp;$data = date_create("25-04-2024 19:12:23");</br>
                    &nbsp;&nbsp;echo date_format($data,"d/m/Y, H:i:s") . "&#60;/br&#62;";</br></br>
                    &nbsp;&nbsp;echo date('d/m/Y, H:i:s') . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo date('l, F d') . "&#60;/br&#62;";</br>
                    &nbsp;&nbsp;echo date('Y') . "&#60;/br&#62;";</br>
                    ?&#62;</p>
                    </br>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>25/04/2024, 19:12:23</p>
                    <p>19/03/2024, 14:17:49</p>
                    <p>Tuesday, March 19</p>
                    <p>2024</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Exiba o nome completo do mês atual.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado Esperado:</h4>
                    <p>April</p>
                </div>
            </div>
        </section>

        <!-- Classes -->
        <section class="section-base">
            <h2>Classes</h2>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Código:</h4>
                    <p>&#60;?php</br>
                    &nbsp;&nbsp;class Fruta {</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;// Atributos:</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;public $nome;</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;public $cor;</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;// Construtor:</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;public function __construct($nome, $cor) {</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->nome = $nome;</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->cor = $cor;</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;// Método Imprimir:</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;public function Imprimir() {</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Nome: $this->nome - Cor: $this->cor" . "&#60;/br&#62;";</br></br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}</br></br>
                    &nbsp;&nbsp;}</br></br>
                    &nbsp;&nbsp;$fruta1 = new Fruta("Uva", "Roxa");</br>
                    &nbsp;&nbsp;$fruta1->Imprimir();</br></br>
                    &nbsp;&nbsp;$fruta2 = new Fruta("Morango", "Vermelha");</br>
                    &nbsp;&nbsp;$fruta2->Imprimir();</br>
                    ?&#62;</p>
                    </br>
                </div>
                <div class="result">
                    <h4>Resultado:</h4>
                    <p>Nome: Uva - Cor: Roxa</p>
                    <p>Nome: Morango - Cor: Vermelha</p>
                </div>
            </div>
            <h4 class="praticando">
              <span>PRATICANDO:</span>Instancie 2 objetos referentes à classe "Filme", exibindo seus respectivos nomes e anos de lançamento.
            </h4>
            <div class="code" style="margin-top: 20px;">
                <div>
                    <h4>Tente Você:</h4>
                    <p>...</p>
                </div>
                <div class="result">
                    <h4>Resultado Esperado:</h4>
                    <p>Nome: ?NomeDoFilme? - Ano: ?AnoDeLançamento?</p>
                    <p>Nome: ?NomeDoFilme? - Ano: ?AnoDeLançamento?</p>
                </div>
            </div>
        </section>

        <!-- Conexão MySQL -->
        <section class="section-base">
          <h2>Conexão MySQL</h2>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Código:</h4>
              <p>
                &#60;?php</br>
                &nbsp;&nbsp;$mysqli = new mysqli("localhost", "root", "", "oficinaphp") or die("Unable to connect");</br>
                ?&#62;
              </p>
              </br>
            </div>
            <div class="result">
              <h4>Resultado:</h4>
              <p></p>
            </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Realize a conexão com o banco de dados.
          </h4>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Tente Você:</h4>
              <p>...</p>
            </div>
            <div class="result">
              <h4>Resultado Esperado:</h4>
              <p></p>
            </div>
          </div>
      </section>

        <!-- Execução de SQL -->
        <section class="section-base">
          <h2>Conexão MySQL</h2>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Código:</h4>
              <p>
                &#60;?php</br>
                &nbsp;&nbsp;include "../utils/sqls.php";</br>
                </br>
                &nbsp;&nbsp;$mysqli = new mysqli("localhost", "root", "", "oficinaphp") or die("Unable to connect");</br>
                </br>
                &nbsp;&nbsp;$mysqli->query(createIfNotExistsLinguagensTable);</br>
                </br>
                &nbsp;&nbsp;$mysqli->query(inserirLinguagemSQL);</br>
                </br>
                &nbsp;&nbsp;$res = $mysqli->query(selectLinguagemSQL);</br>
                </br>
                &nbsp;&nbsp;while($row = $res->fetch_assoc()) {</br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "id: " . $row["id"]. " - nome: " . $row["nome"] . "&#60;/br&#62;";</br>
                &nbsp;&nbsp;}</br>
                ?&#62;
              </p>
              </br>
            </div>
            <div class="result">
              <h4>Resultado:</h4>
              <p>id: 1 - nome: php</p>
            </div>
          </div>
          <h4 class="praticando">
            <span>PRATICANDO:</span>Importe e execute os comandos de criação, inserção e seleção vindos do arquivo 'sqls.php'.
          </h4>
          <div class="code" style="margin-top: 20px;">
            <div>
              <h4>Tente Você:</h4>
              <p>...</p>
            </div>
            <div class="result">
              <h4>Resultado Esperado:</h4>
              <p>Oficina: PHP</p>
            </div>
          </div>
      </section>

        <script src="./scripts/index.js"></script>
    </body>
</html>
