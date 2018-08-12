# First codes
> Essa pasta tem o propósito da resolução de alguns problemas de algoritimos usando a linguagem PHP,
abaixo segue alguns problemas de algoritimos indicando a entrada e a saida desejada dos códigos

### fizzbuzz
- faça um algoritimo que imprima de 1 a 100
- se o número for divisível por 3 imprima  **fizz**
- se o número for divísivel por 5 imprima  **buzz**
- se o número for divisível por 3 e 5 imprima **fizzbuz**
### palindromo
desenvolva uma função  que verifique se uma frase ou palavra é palindromo , ou seja, que se pode ler, indiferentemente, da esquerda para a direita ou vice-versa. Caso seja, o retorno dessa função dve retornar **yes**, caso o contrário, a função deve retornar **no**.
```php
echo isPalindromo("cascata")//=> no
echo isPalindromo("natan")//=> yes
```
### qtdAnswers
desenvolva uma função que receba como primeiro parâmetro um array de notas e segundo parâmetro a posição de uma nota qualquer, a função deve retornar a quantidade de notas que seja maior ou igual à nota que está na posição informada.
```php
echo verificQtdAnswers([10,9,7,7,5], 3);//=> 4;
echo verificQtdAnswers([10,9,7,7,5], 2);//=> 2;
```
### wordRepeat
desenvolva uma função que verifique se uma frase contém palavras repitidas, caso contenha, a função deve retornar **yes**, caso ao contrário, a função deve retornar **no**.
```php
echo verificRepeat("Não estar chovendo");//=> no
echo verificRepeat("Não estar chovendo não");//=> yes
```
### hamming
Uma mutação é simplesmente um erro que ocorre durante a criação ou cópia de um ácido nucleico, em particula de DNA, Porque os ácidos nucléicos são vitais para as funções celulares, as mutações tendem a causar um efeito cascata em toda a célula. Embora as mutações sejam tecnicamente erros, Uma mutação rara pode equipar a célula com um atributo benéfico. O tipo mais simples e mais comum de mutação de ácido nucléico é um ponto mutação, que substitui uma base por outra em um único nucleotídeo. Contando o número de diferenças entre duas cadeias de DNA homólogas tomadas de diferentes genomas com um ancestral comum, obtemos uma medida de o número mínimo de mutações pontuais que poderiam ter ocorrido no caminho evolutivo entre as duas vertentes. Isso é chamado de **"distância de Hamming"**. É encontrado comparando duas cadeias de DNA e contando quantas das nucleotídeos são diferentes do seu equivalente na outra cadeia. Com base nessas informações, desenvolva uma função que calcule a diferença de **Hamming** entre duas cadeias de DNA, afunção deve retornar uma mensagem informando incompatibilidade de comparação caso as duas cadeia não possuirem o mesmo tamanho.
```php
echo distance('A', 'A');//=> 0
echo distance('A', 'G'));//=> 1
echo distance('AG', 'CT'));//=> 2
echo distance('AT', 'CT'));//=> 1
echo distance('GGACG', 'GGTCG'));//=> 1
echo distance('GATACA', 'GCATAA'));//=> 4
echo distance('GGACGGATTCTG', 'AGGACGGATTCT'));//=>9
echo distance('GGACG', 'AGGACGTGG');//=> DNA strands must be of equal length
```
### RNA Transcription
As cadeias de DNA e RNA são uma sequência de nucleotídeos. Os quatro nucleotídeos encontrados no DNA são adenina (**A**), citosina (**C**),guanina (**G**) e timina (**T**). Os quatro nucleotídeos encontrados no RNA são adenina (**A**), citosina (**C**),guanina (**G**) e uracilo (**U**).Dada uma fita de DNA, sua fita de RNA transcrita é formada substituindo cada nucleotídeo com seu complemento:
- G -> C
- C -> G
- T -> A
- A -> U
```php
echo toRna('C'));//=> G
echo toRna('G'));//=> C
echo toRna('T'));//=> A
echo toRna('A'));//=> U
echo toRna('ACGTGGTCTTAA'));//=>UGCACCAGAAUU
```
### Nucleotide Count
A linguagem genética de todos os seres vivos do planeta é o DNA. O DNA é uma molécula grande que é construída a partir de uma sequência extremamente longa de elementos individuais chamados nucleotídeos. 4 tipos existem no DNA e diferem apenas ligeiramente e podem ser representados como os seguintes símbolos: '**A**' para adenina, '**C**' para citosina, '**G**' para guanina e '**T**' timina. Com base nessas informações, calcule quantas vezes cada nucleotídeo ocorre na string.
```php
  echo nucleotideCount('');//=>['a' => 0, 'c' => 0, 't' => 0, 'g' => 0]
  echo nucleotideCount('AAAAAAAAA')//=> ['a' => 9, 'c' => 0, 't' => 0, 'g' => 0]
  echo nucleotideCount('AGCTTTTCATTCTGACTGCAACGGGCAATATGTCTCTGTGTGGATTAAAAAAAGAGTGTCTGATAGCAGC'));//=>['a' => 20, 'c' => 12, 't' => 21, 'g' => 17]    
```
### Difference of Squares
Encontre a diferença entre o quadrado da soma e a soma dos quadrados dos primeiros N números naturais.

O quadrado da soma dos dez primeiros números naturais é :

**(1 + 2 + ... + 10) ² = 55² = 3025.**

A soma dos quadrados dos dez primeiros números naturais é :

**1² + 2² + ... + 10² = 385.*

Daí a diferença entre o quadrado da soma dos primeiros dez números naturais e a soma dos quadrados dos dez primeiros
números naturais é :

**3025 - 385 = 2640.**

```php
echo squareOfSums(5));//=> 225
echo sumOfSquares(5);//=> 55
echo difference(5);//=> 170
echo squareOfSums(10);//=> 3025
echo sumOfSquares(10);//=> 385
echo difference(10);//=> 2640
echo squareOfSums(100);//=> 25502500
echo sumOfSquares(100);//=> 338350
echo difference(100);//=> 25164150
```
### Atbash Cipher
A cifra Atbash é uma simples cifra de substituição que transpõe todas as letras do alfabeto para que o resultado do alfabeto esteja de trás para a frente. A primeira letra é substituída pela última, a segunda com a penúltima e assim por diante.

Uma cifra de Atbash para o alfabeto latino seria a seguinte:

> Simples: abcdefghijklmnopqrstuvwxyz

> Cifra: zyxwvutsrqponmlkjihgfedcba

É uma cifra muito fraca porque tem apenas uma chave possível, e é uma simples cifra de substituição monoalfabética. O texto cifrado é escrito em grupos de tamanho fixo, o tamanho do grupo tradicionalsendo 5 letras e a pontuação é excluída. Isso é para tornar mais difícil adivinhar.

**Exemplos**
- **test** de codificação dá **gvhg**
- Decodificação **gvhg** dá **test**

```php
echo encode('no');//=> ml
echo encode('yes');//=> bvh
echo encode('OMG');//=> lnt
echo encode('O M G');//=> lnt
echo encode('mindblowingly');//=> nrmwy oldrm tob
echo encode('Testing, 1 2 3, testing.');//=> gvhgr mt123 gvhgr mt
echo encode('Truth is fiction.');//=> gifgs rhurx grlm
```
### Word Count
Dada uma frase, conte as ocorrências de cada palavra nessa frase. Por exemplo, para a entrada  **"olly olly in come free"**:

> olly: 2

> in: 1

> come: 1

> free: 1
```php
echo wordCount('word');//=> ['word' => 1]
echo wordCount('one of each');//=> ['one' => 1, 'of' => 1, 'each' => 1]
echo  wordCount('one fish two fish red fish blue fish');//=> ['one' => 1, 'fish' => 4, 'two' => 1, 'red' => 1, 'blue' => 1]
echo wordCount('car : carpet as java : javascript!!&@$%^&');//=> ['car' => 1, 'carpet' => 1, 'as' => 1, 'java' => 1, 'javascript' => 1]
echo wordCount('testing, 1, 2 testing');//=> ['1' => 1, '2' => 1, 'testing' => 2]
echo wordCount('go Go GO Stop stop');//=> ['go' => 3, 'stop' => 2]
echo wordCount("hello\nworld");//=> ['hello' => 1, 'world' => 1]
echo wordCount("hello\tworld");//=> ['hello' => 1, 'world' => 1]
echo wordCount('hello  world');//=> ['hello' => 1, 'world' => 1]
echo wordCount("\t\tIntroductory Course      ");//=> ['introductory' => 1, 'course' => 1]
```



## Tarefas
- [x] fizzbuzz
- [x] palindromo
- [x] qtdAnswers
- [x] wordRepeat
- [ ] hamming
- [ ] RNA Transcription
- [ ] Nucleotide Count
- [ ] Difference of Squares
- [ ] Atbash Cipher
- [ ] Word Count


