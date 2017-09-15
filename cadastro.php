<?php require_once 'header.php' ?>

<section class="main-content">
  <div class="info-content">
    <h2>Form POST Test</h2>
    <p>This is an example of the PHP POST method, used to insert information into a database via a HTML form.</p>
  </div>
  <div class="form-content">
    <form action="include/signup.inc.php" method="POST" accept-charset="UTF-8">
      <fieldset><legend>Cadastro de Usuário</legend>
        <table>
          <tr><td>Nome de Usuário:</td>
            <td><input type="text" name="name"></td>
          </tr>
          <tr><td>E-Mail:</td>
            <td><input type="text" name="email"></td>
          </tr>
          <tr><td>Telefone:</td>
            <td><input type="text" name="phone"></td>
          </tr>
          <tr><td>Ramal:</td>
            <td><input type="text" name="branch_line"></td>
          </tr>
          <tr><td>Status:</td>
            <td>
              <input type="radio" name="status" value="1">Ativo &nbsp
              <input type="radio" name="status" value="2">Inativo
            </td>
          <tr><td>Senha:</td>
            <td><input type="password" name="password"></td>
          </tr>
          </tr>
          <tr><td colspan="2"><input type="submit" name="submit" value="Cadastrar Usuário"></td></tr>
        </table>
      </fieldset>
    </form>
  </div>
</section>

<?php
  // Messages to the user regarding the signup
  $message = $_GET["signup"];
  if ($message) {
    echo "<section class='signup-message'>";
    // Different messages for each case
    switch ($message) {
      case "empty":
        echo "Há campos vazios no cadastro.";
        break;
      case "invalidmail":
        echo "O e-mail inserido não é válido.";
        break;
      case "invalidname":
        echo "O nome inserido já está sendo utilizado.";
        break;
      case "success":
        echo "Cadastro efetuado com sucesso!";
        break;
    }
    $message = null;
    echo"</section>";
  }

?>

<?php require_once 'footer.php' ?>
