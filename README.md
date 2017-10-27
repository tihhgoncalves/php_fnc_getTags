![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.php.fnc.getTags/master/logo.png)

# php_fnc_getTags()
Função em PHP que você parametriza um texto e ele retorna tags (meta-tags) pra você utilizar no keywords da sua página.

## Parâmetros
 * ```$texto``` - O texto que você irá inserir que será feita a leitura das tags.
 * ```$num``` = Número de palavras que ele irá retornar *(padrão: 9)*

### Exemplo
```
  $texto - 'Olá mundo cruel. Como vai o mundo? Como vai?';
  $tags = php_fnc_getTags($texto);
  echo($tags); //mundo,como,vai...
```
### Autor
Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). Mais informações: www.tiago.art.br
