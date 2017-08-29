<!DOCTYPE html5>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine|Encode+Sans">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <title>Schedule</title>
</head>

<body>
  <div class="header">
    <h1>Schedule System</h1>
    <ul>
      <li>HomePage</li>
      <li>Products</li>
      <li>About</li>
    </ul>
  </div>

  <section class="main-content">
    <div class="info-content">
      <h2>Form POST Test</h2>
      <p>This is an example of the PHP POST method, used to insert information into a database via a HTML form.</p>
    </div>
    <div class="form-content">
      <form>
        <fieldset>
          <legend>Cadastro de Usuário</legend>
          <table>
            <tr>
              <td>Nome de Usuário:</td>
              <td><input type="text" name="username"></td>
            </tr>
            <tr>
              <td>E-Mail:</td>
              <td><input type="text" name="email"></td>
            </tr>
            <tr>
              <td>Telefone:</td>
              <td><input type="text" name="phone"></td>
            </tr>
            <tr>
              <td>Ramal:</td>
              <td><input type="text" name="branch_line" placeholder="0000"></td>
            </tr>
            <tr>
              <td>Status:</td>
              <td>
                <input type="radio" name="status" value="1">Ativo &nbsp
                <input type="radio" name="status" value="2">Inativo
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="Submit"></td>
            </tr>
          </table>
        </fieldset>
      </form>
    </div>
  </section>

  <section class="database-content">
    <?php
      include('connection.php');
    ?>
  </section>

</body>
