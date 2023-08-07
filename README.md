# BancoDigital

Esse site será um teste de como a pessoa iria entrar com um login e senha, e iria consultar o valor no banco!

```
git clone nome-diretorio --> é utilizado para incluir um clone do diretorio para sua maquina local, assim possibilitando de realizar alterações!
```

<h2>Sempre que for abrir o comando utilizar o comando git status para verificar se tem algo pendente e o git push</h2>

```
git status
git pull

obs: caso o terminal fique no final com : apenas utilizar a tecla q que irá voltar para o pront de comando
```
<h2> Para verificar o log utilizar o git log </h2>

```
git log -- > Irá trazer um historico do Usuario e e-mail que foi alterado
```
<h2> Para criar um arquivo e ele ser ignorado pelo git </h2>

```
Bastar criar um arquivo dentro do diretorio com nome .gitignore
Após isso incluir o nome do arquivo dentro dele que será ignorado
No terminal incluir o codigo:

git add .gitignore
git add README.md
git commit -m "Alterações Gerais"
git push
```
<h2> Nesse site irá ser utilizado as linguagens HTML, JavaScript, Python e MySQL </h2>


git status --> Para verificar se tem alguma atualização pendente

git commit X -m "" --> X é o nome do arquivo, e entre "" para descrever a atualização que foi feita
```
Exemplo: git commit index.html -m "Alterações no HTML"
```


git push --> para subir as atualizações para o GitHub

git add . --> é utilizado para incluir todos os novos arquivos do Git na sua maquina local

git pull --> é utilizado para atualizar seus arquivos de acordo com o Git

<H2> Atualizações entre branch's</h2>

git branch --> irá mostrar quais branch tem no diretorio

git merge nome-da-branch --> é utilizado para unificar uma branch com a atual

```
Exemplo: caso voce não esteja na main utilizar:
    git switch main
utilizar o 
    git merge nome-da-branch 
para que unifique o arquivo de outra branch ao seu main
```
git checkout -b nome-da-branch --> é utilizado para criar um Branch/Diretorio dentro do GitHub

git checkout nome-da-branch --> é utilizado para acessar uma branch
```
Para acessar o outro Branch utilizar o git switch nome-da-branch
```
Para conectar o CSS ao HTML caso seja por Class -> .NomeDaClass

git restore --source CodigoDoCommits . "ESSE . É USADO PARA SER TODOS OS ARQUIVOS"--> é utilizado para voltar versoes do projeto, esse codigo é encontrado dentro do site do projeto em Commits, embaixo do botao verde <> Code 

<h2> Como utilizar os Branches </h2>

Os Branches são para criar áreas de trabalhos para utilização simultanea do codigo, fazendo assim a possibilidade de um não alterar o codigo do outro, para criar uma Branche é utilizado o checkout
Exemplo:

```
git checkout -b nome-da-branche
```

<h2> Revertendo alterações feitas </h2>

Para reverter uma alteração que já foi realizado o commit:
```
git log 
-- verificar o codigo do commit
git revert codigo
```

Se apenas já tiver add o arquivo realizar:

```
git reset HEAD nome-do-arquivo
git checkout -- nome-do-arquivo 
```

<h2> Como guardar alterações pra depois realizar o commit </h2>

Para realizar alterações para realizar alterações futuras, é utilizado o Stash
O pop é utilizado para trazer alterações feitas em uma linha especifica, como por exemplo alterar a linha 12 e salvar, e depois realizar um commit na linha 15, para trazer a linha 12 novamente basta realizar o git stash pop

```
git stash -> para salvar as alterações sem subir o arquivo
git stash list -> para verificar as listas do que foi salvo

git stash pop -> para trazer os arquivos de volta 
```