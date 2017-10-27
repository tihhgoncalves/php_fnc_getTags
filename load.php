<?
/**
 * Função em PHP que você parametriza um texto e ele retorna tags
 * (meta-tags) pra você utilizar no keywords da sua página.
 *
 * Versão: 1.0
 *
 * @param $texto
 * @param int $num (default 9)
 * @return string
 */
function tihh_getTags($texto, $num = 9){

  $texto = strip_tags($texto);
  $texto = trim($texto);
  $texto = strtolower($texto);

  $tirar = array(
    '.', ',', ';', '!', '?', ':', '/', '\\', '|', '(', ')', '[', ']', '{', '}',
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
  );
  $texto = str_replace($tirar, ' ', $texto);

  $palavras = explode(' ', $texto);

  $ocorrencias = array();

  foreach($palavras as $palavra){

    if(isset($ocorrencias[$palavra]))
      $ocorrencias[$palavra]++;
    else
      $ocorrencias[$palavra] = 1;

  }

  arsort($ocorrencias);
  //print_r($ocorrencias);exit;
  $list = array();

  //retira palavras insignificantes...
  $tirar = array(
    'da', 'de', 'do', 'a', 'o', 'as', 'os' , 'e', 'em', 'das', 'dos', 'que', 'por', 'se', 'g', 'min', 'hrs',
    'um', 'uma', 'uns', 'com', 'sem', 'pra', 'para', 'até', 'pro', 'pros', 'na', 'nas', 'à', 'às', 'está', 'estás'
  );

  foreach($ocorrencias as $x=>$ocorrencia){

    foreach($tirar as $t){
      if($x == $t)
        unset($ocorrencias[$x]);
    }


  }

  //seleciona palavras
  foreach($ocorrencias as $x=>$ocorrencia){

    if(!empty(trim($x))) {
      $list[] = trim($x);
    }

    if (count($list) >= $num) {
      return implode(',', $list);
    }
  }

  return null;

}

?>