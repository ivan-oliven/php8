<?php


namespace App\Model;
/* Classe DAO da nossa aplicação. Sua função é criar funções que vão abstrair do banco dados
o CRUJ da nossa aplicação. O interessante de usar essa abordagem é a interdependência de
em relação ao SGBD. Dependendo apenas de algumas pequenas configurações no próprio código
fonte, somente */
class ProdutoDao
{
    // Função que cria um produto da Classe Produto e insere no banco de dados
    public function create(Produto $p)
    {
        // String criada para armazenar a instrução SQL 
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
        //Invocando o método estático 'getCon ()' e o método prepare() -do PDO - 
        //a querie anteriormente criada é colocada aqui dentro, para logo a frente
        //os campos '(?,?)', serem inseridos
        $smt = Conexao::getConn()->prepare($sql);
        //Aqui indico que na primeira occorrência de '?' devo substituir pelo método getNome()
        //do produto da Classe Objeto, que é  passado coomo parâmetro
        $smt->bindValue(1, $p->getNome());
        //o mesmo aqui
        $smt->bindValue(2, $p->getDescricao());
        // Aqui apenas chamo a execução
        $smt->execute();
    }

    public function read()
    {
        //armazena instrução SQL
        $sql = 'SELECT * FROM produtos';
        //coloca ela dentro de uma função prepare()
        $stmt = Conexao::getConn()->prepare($sql);
        //executa a função
        $stmt->execute();

        //Se por ventura essa execução retornar mais que 0 linhas
        //ele armazena o valor na variável $resultado que vai armazenar esse valor em
        //arrays apenas com o valor chave correspondente, para mais na frente ele poder ser
        //revelado
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
// muito parecido com a função create, porém com a atualização
    public function update(Produto $p)
    {
        $sql = 'UPDATE produtos SET nome=?, descricao=? Where id=?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());
        $stmt->execute();
    }

    //Essa função é a mais simples, pois o parâmetro é passado diretamnete. 
    public function delete($id)
    {
        $sql='DELETE FROM produtos WHERE ID=?';
        $stmt= Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }
}
