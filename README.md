# Configurações

É necessário criar no .env as seguintes variáveis:

```bash
CSV_FOLDER='caminho para a pasta onde estão os ficheiros CSV'
```

# Issues

- HLD1.0: Melhorar este método para fazer paginação e para encontrar outras palavras traduzidas (pode ter mais de uma tradução). Era giro colocar as palavras destacadas.

# Preenchimento com informação

- Preencher os Crioulos que faltam a partir de https://en.wikipedia.org/wiki/Portuguese-based_creole_languages

# Menu

Fazer um menu para o GuestLayout

# Ideias

- Quando o utilizador está a escrever, pode automaticamente adaptar-se.

- O utilizador inseriu uma palavra que não tem definição. Seria giro pedir uma sugestão de definição.

- À medida que a palavra vai sendo escrita, pode ir sugerindo, colocando uma opção "artificial" ao lado da que o utilizador pode escolher (aceitar).

- Depois de inserido, caso seja colocado noutra língua, perguntar se tem o mesmo significado.

- Verificar se existem palavras semelhantes (distância Levenshtein)

# Person

- Retirar as redes sociais do Person para uma tabela à parte

# Performance

Os language codes podiam ser estáticos, em vez de serem carregados a cada vez que se vai buscar uma palavra.

# Import

Verificar se na importação de palavras, é mesmo uma palavra.