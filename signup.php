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
            <td><input type="text" name="branch_line" placeholder="0000"></td>
          </tr>
          <tr><td>Status:</td>
            <td>
              <input type="radio" name="status" value="1">Ativo &nbsp
              <input type="radio" name="status" value="2">Inativo
            </td>
          </tr>
          <tr><td colspan="2"><input type="submit" name="submit" value="Cadastrar Usuário"></td></tr>
        </table>
      </fieldset>
    </form>
  </div>
</section>
