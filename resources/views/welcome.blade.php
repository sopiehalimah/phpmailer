<html>
    <head>
        <title>PHPMailer</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>


    </head>
    <body>
        <div class="container">
            <div class="content">
                <form method="post" action="email/send">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  <table>
                    <tr>
                      <td>Email Tujuan</td>
                      <td><input type="text" name="email"</td>
                    </tr>
                    <tr>
                      <td>Isi</td>
                      <td><textarea name="content"></textarea></td>
                    </tr>
                  </table>
                  <br>
                  <button type="submit">Kirim</button>
                </form>

            </div>
        </div>
    </body>
</html>
