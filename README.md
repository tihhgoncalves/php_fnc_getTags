# Função de PHP - tihh_getTags()
Função em PHP que você parametriza um texto e ele retorna tags (meta-tags) pra você utilizar no keywords da sua página.

[![Versão](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.php.fnc.getTags)](/releases.md)
[![Versão](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.php.fnc.getTags)](/releases.md)

## Parâmetros
 * ```$texto``` - O texto que você irá inserir que será feita a leitura das tags.
 * ```$num``` = Número de palavras que ele irá retornar *(padrão: 9)*

### Instalação
Para utilizar esse script, utilize o seguinte comando:

```
  bower install https://github.com/tihhgoncalves/tihh.php.fnc.getTags.git --save
```

P.S.: Caso prefira, você pode fazer o download do projeto manualmente.

### Exemplo
```
  <?
  
  required('bower_components/tihh.php.fnc.getTags/load.php');
  
  $texto - 'Olá mundo cruel. Como vai o mundo? Como vai?';
  $tags = tihh_getTags($texto);
  echo($tags); //mundo,como,vai...
  
  ?>
```
### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.php.fnc.getTags/master/logo.png)

Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). 

Mais informações: www.tiago.art.br
