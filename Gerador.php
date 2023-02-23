<!DOCTYPE HTML>  
<html>
<head>
<!-- Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- Popover -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- CSS Info -->
<link rel="stylesheet" type="text/css" href="styleinfo.css" media="screen" />
</head>
<body>  
<?php
$nomeErr = $mailErr = $cargoErr =  $telErr = $filialErr = $opcaoErr = "";
$nome = $mail = $cargo = $tel = $filial = $opcao = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Necessario um nome";
  } else {
    $nome = test_input($_POST["nome"]);
  if (!preg_match("/^[A-Za-z -  -  - -' ]*$/",$nome)) {
    $nomeErr = "";
    }
  }
  if (empty($_POST["email"])) {
    $mailErr = "Necessario um E-mail";
  } else {
    $mail = test_input($_POST["email"]);
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "Formato de E-mail Inválido";
    }
  }

  if (empty($_POST["cargo"]))  {
    $cargoErr = "Necessario um Cargo";
  } else {
    $cargo = ($_POST["cargo"]);
  }

  if (empty($_POST["tel"])) {
    $telErr = "Necessario um Ramal";
  } else {
    $tel = test_input($_POST["tel"]);
  }

  if (empty($_POST["filial"])) {
    $filialErr = "Complete com a Filial";
  } else {
    $filial = test_input($_POST["filial"]);
  }

  if (empty($_POST["opcao"])) {
    $opcaoErr = "Complete com a Opção";
  } else {
    $opcao = test_input($_POST["opcao"]);
}
  $nome;
  $image;
  $mail;
  $cargo;
  $tel;
  $filial;
  $opcao;
  $nome = $nome;
  strlen($nome);
  $email = $mail;
  strlen($mail);
  $cargo = $cargo;
  strlen($cargo);

  $asskinto = "&lt;br/&gt;&lt;br/&gt;&lt;table style=&quot;border-collapse: collapse; width: 700px;&quot; border=&quot;0&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=&quot;width: 100%;&quot;&gt;&lt;img src=&quot;https://www.lamotors.com.br/email/$email.png&quot; width=700px alt=&quot;Toyopar! Surpreendente como um Toyota.&quot;&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;
&lt;td style=&quot;width: 100%;&quot;&gt;&lt;span style=&quot;color: #b8b8b8; font-size: 7pt;&quot;&gt;A presente mensagem (incluindo qualquer anexo) foi transmitida para uso exclusivo do destinat&aacute;rio, podendo nela conter informa&ccedil;&otilde;es confidenciais e/ou privilegiadas protegidas por lei e de propriedade restrita do Grupo TOYOPAR. Caso a tenha recebido em sua caixa de entrada por erro de transmiss&atilde;o, queira, por gentileza, informar ao remetente e exclu&iacute;-la de imediato de seu sistema. &Eacute; terminantemente proibida a sua reprodu&ccedil;&atilde;o, distribui&ccedil;&atilde;o, publica&ccedil;&atilde;o, modifica&ccedil;&atilde;o, c&oacute;pia ou qualquer a&ccedil;&atilde;o baseada em seu conte&uacute;do, sem a expressa autoriza&ccedil;&atilde;o por escrito do remetente. O Grupo TOYOPAR conta com recursos t&eacute;cnicos para monitoramento da navega&ccedil;&atilde;o e da utiliza&ccedil;&atilde;o dos e-mails enviados e recebidos. E-mails podem transferir v&iacute;rus, cabendo ao destinat&aacute;rio observar os procedimentos de seguran&ccedil;a e a integridade do acesso. Opini&otilde;es particulares aqui veiculadas pertencem ao remetente e n&atilde;o propriamente ao Grupo TOYOPAR. Entendimentos e assun&ccedil;&atilde;o de obriga&ccedil;&otilde;es pelos representantes legais do Grupo TOYOPAR depender&atilde;o dos termos e condi&ccedil;&otilde;es dispostos em seus atos constitutivos e da legisla&ccedil;&atilde;o vigente.&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;" ;

  $asstoy = "&lt;br/&gt;&lt;br/&gt;&lt;table style=&quot;border-collapse: collapse; width: 700px;&quot; border=&quot;0&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td style=&quot;width: 100%;&quot;&gt;&lt;img src=&quot;https://www.lamotors.com.br/email/$email.png&quot; width=700px alt=&quot;Toyopar! Surpreendente como um Toyota.&quot;&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;
&lt;td style=&quot;width: 100%;&quot;&gt;&lt;a href=&quot;https://www.toyopar.com.br/kinto&quot;&gt;&lt;img src=&quot;https://www.lamotors.com.br/email/kinto.png&quot; width=700px alt=&quot;Kinto; Conhe&ccedil;a a locadora da Toyota.&quot;&gt;&lt;/a&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td style=&quot;width: 100%; text-align: justify&quot;&gt;&lt;span style=&quot;color: #b8b8b8; font-size: 7pt;&quot;&gt;A presente mensagem (incluindo qualquer anexo) foi transmitida para uso exclusivo do destinat&aacute;rio, podendo nela conter informa&ccedil;&otilde;es confidenciais e/ou privilegiadas protegidas por lei e de propriedade restrita do Grupo TOYOPAR. Caso a tenha recebido em sua caixa de entrada por erro de transmiss&atilde;o, queira, por gentileza, informar ao remetente e exclu&iacute;-la de imediato de seu sistema. &Eacute; terminantemente proibida a sua reprodu&ccedil;&atilde;o, distribui&ccedil;&atilde;o, publica&ccedil;&atilde;o, modifica&ccedil;&atilde;o, c&oacute;pia ou qualquer a&ccedil;&atilde;o baseada em seu conte&uacute;do, sem a expressa autoriza&ccedil;&atilde;o por escrito do remetente. O Grupo TOYOPAR conta com recursos t&eacute;cnicos para monitoramento da navega&ccedil;&atilde;o e da utiliza&ccedil;&atilde;o dos e-mails enviados e recebidos. E-mails podem transferir v&iacute;rus, cabendo ao destinat&aacute;rio observar os procedimentos de seguran&ccedil;a e a integridade do acesso. Opini&otilde;es particulares aqui veiculadas pertencem ao remetente e n&atilde;o propriamente ao Grupo TOYOPAR. Entendimentos e assun&ccedil;&atilde;o de obriga&ccedil;&otilde;es pelos representantes legais do Grupo TOYOPAR depender&atilde;o dos termos e condi&ccedil;&otilde;es dispostos em seus atos constitutivos e da legisla&ccedil;&atilde;o vigente.&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;" ;  

  if (strlen($nome) > 20) {
     $size = "_max.png";
  } elseif (strlen($cargo) > 20) {
     $size = "_max.png";
  } elseif (strlen($email) > 21) {
     $size = "_max.png";
  } else {
     $size = "_med.png";
  }

  if (strlen($filial) == 0) {
     $filial = "template_lda";
  }
  $filial.$size;


//
// ASSINATURA KINTO
//

  if ($filial=="template_kintolda") {
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 30,41 "'.$nome.'" \'';
  $function = ' \'text 30,63 "'.$cargo.'" \'';
  $email = 'text 30,80 '.$mail;
  $phone = 'text 30,99 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asskinto; 
  $cmd = 'convert -fill white -pointsize 22 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.'.png -resize 650 -quality 100 '.$image;
  }elseif ($filial=="template_kintoapa") {
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 30,41 "'.$nome.'" \'';
  $function = ' \'text 30,63 "'.$cargo.'" \'';
  $email = 'text 30,80 '.$mail;
  $phone = 'text 30,99 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asskinto; 
  $cmd = 'convert -fill white -pointsize 22 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.'.png -resize 650 -quality 100 '.$image;
  }elseif ($filial=="template_kintosap") {
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 30,41 "'.$nome.'" \'';
  $function = ' \'text 30,63 "'.$cargo.'" \'';
  $email = 'text 30,80 '.$mail;
  $phone = 'text 30,99 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asskinto; 
  $cmd = 'convert -fill white -pointsize 22 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.'.png -resize 650 -quality 100 '.$image;
  }elseif ($filial=="template_kintotel") {
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 30,41 "'.$nome.'" \'';
  $function = ' \'text 30,63 "'.$cargo.'" \'';
  $email = 'text 30,80 '.$mail;
  $phone = 'text 30,99 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asskinto; 
  $cmd = 'convert -fill white -pointsize 22 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.'.png -resize 650 -quality 100 '.$image;
  }

//
// TAMANHO GRANDE
// ASS
//

  if($filial=="template_lda" and strlen($email) > 21) {
  $fontfile2 = '/home/headless/assinatura/ToyotaType-Regular.ttf';
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 19,30 "'.$nome.'" \'';
  $function = ' \'text 19,50 "'.$cargo.'" \'';
  $email = 'text 35,83 '.$mail;
  $phone = 'text 35,98 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asstoy;
  $cmd = 'convert -fill white -pointsize 16 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 14 -font '.escapeshellarg($fontfile2).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 10 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.$size.' -resize 650 -quality 100 '.$image;
}else{
  $fontfile2 = '/home/headless/assinatura/ToyotaType-Regular.ttf';
  $fontfile = '/home/headless/assinatura/ToyotaType-Bold.ttf';
  $name = ' \'text 19,30 "'.$nome.'" \'';
  $function = ' \'text 19,50 "'.$cargo.'" \'';
  $email = 'text 35,83 '.$mail;
  $phone = 'text 35,98 '.escapeshellarg($tel);
  $image = "output.png";
  $msg2 = $asstoy;
  $cmd = 'convert -fill white -pointsize 16 -font '.escapeshellarg($fontfile).' -draw '.$name.' -pointsize 14 -font '.escapeshellarg($fontfile2).' -draw '.$function.' -pointsize 13 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($email).' -pointsize 10 -font '.escapeshellarg($fontfile).' -draw '.escapeshellarg($phone).' /home/headless/assinatura/'.$filial.$size.' -resize 650 -quality 100 '.$image;
  }


  if($opcao=="gerar") {
     $msg = 'Imagem Gerada com Sucesso!!!';	  
     
     shell_exec($cmd);
   } else {
     $msg = 'Imagem Gerada e Enviada com Sucesso!!!';
     shell_exec($cmd);
    
     $cmd2 = 'cp '.$image.' '.$mail.'.png && timeout 6 ftp-upload --passive --verbose -h lamotors.com.br -u email@lamotors.com.br --password lamotors@2021 -d /email/ '.$mail.'.png';
     shell_exec($cmd2);

     $cmd3 = 'rm -f '.$mail.'.png';
     shell_exec($cmd3);
 }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="titulo">Gerador de Assinatura</a></nav>
<br>
	<img id="logotoy" src ="LogoToyopar.svg" alt="Toyopar" />

  <div class="square" id="Principal">
  	<p><span class="error">* Obrigatorio</span></p>
  		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="col">
  		<input type="text" class="form-control w-25 form-control-sm" name="nome" placeholder="Nome" value="<?php echo $nome;?>">
  	<span class="error">* <?php echo $nomeErr;?></span>
  </div>
  <div class="col">
  		<input type="text" class="form-control w-25 form-control-sm" name="email" placeholder="E-mail" value="<?php echo $mail;?>">
  	<span class="error">* <?php echo $mailErr;?></span>
  </div>
  <div class="col">
  		<input type="text" class="form-control w-25 form-control-sm" name="cargo" placeholder="Cargo" value="<?php echo $cargo;?>">
 	<span class="error">* <?php echo $cargoErr;?></span>
  </div>
  <div class="col">
   		<input type="text" class="form-control w-25 form-control-sm" name="tel" placeholder="(43) 1234-5678" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}" value="<?php echo $tel;?>">
  	<span class="error">* <?php echo $ramalErr;?></span>
  </div>
  <div id="Toyopar">
  Filial:
  <br>
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_lda") echo "checked";?> value="template_lda">Londrina
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_apa") echo "checked";?> value="template_apa">Apucarana
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_sap") echo "checked";?> value="template_sap">Santo Antonio
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_tel") echo "checked";?> value="template_tel">Telemaco
  </div>
  <div>
 	 	<label>Venda direta:</label> <input type="checkbox" class="vendad" />
  </div>
  <div id="Kinto" style="display:none">
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_kintolda") echo "checked";?> value="template_kintolda">Londrina
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_kintoapa") echo "checked";?> value="template_kintoapa">Apucarana
 		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_kintosap") echo "checked";?> value="template_kintosap">Santo Antonio
  		<input type="radio" name="filial" <?php if (isset($filial) && $filial=="template_kintotel") echo "checked";?> value="template_kintotel">Telemaco
  </div>
  <br>
  		<input type="radio" name="opcao" <?php if (isset($opcao) && $opcao=="gerar") echo "checked";?> value="gerar">Apenas Gerar
 		<input type="radio" name="opcao" <?php if (isset($opcao) && $opcao=="enviar") echo "checked";?> value="enviar">Gerar e Enviar via FTP
  	<span class="error">* <?php echo $opcaoErr;?></span>
  <br><br>
  		<button class="btn-primary btn-sm" onclick="load()" type="submit" name="submit" style="background-color: red;border: none;">Processar</button>
  <br><br>
<div id="codigoass">
	<textarea class="js-copytextarea"><?php echo $msg2; ?></textarea>
</div>
  </form>
  <img src = <?php echo $image; ?> />
  <br>
  <?php echo $msg; ?>
  <input type="button" id="copy" class="js-textareacopybtn btn-primary btn-sm" value="Copiar" style="background-color: red;border: none;" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
<p id="check"><i class="bi bi-check-lg"></i></p>
  </div>
<!-- Bootstrap core JavaScript  -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script><!-- Bootstrap core JavaScript  -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>

$('.vendad').click(function() {
    $('#Kinto').toggle(150);
});

var copyTextareaBtn = document.querySelector('#copy');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.focus();
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    popover('Copying text command was ' + msg);
  } catch (err) {
    popover('Oops, unable to copy');
  }
});

function load(){
	
}
</script>
</body>
</html>
