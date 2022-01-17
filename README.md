<h1>Documentação</h1>
API REST para gerenciamento de estoque e venda de produtos utilizando a forma de pagamento cartão de crédito.

<h2>Resource URL</h2>
<strong>https://127.0.0.1:8000/api/produtos</strong>
Response: JSON
Requer autenticação? <strong>Não</strong>

<h1>Rotas</h2>
<strong>Adicionar produtos ao estoque</strong>
POST -> https://127.0.0.1:8000/api/produtos
BODY:
"nome" -> obrigatório
"valor_unitario" -> obrigatório
"qtde_estoque" -> obrigatório
<br>
<strong>Listar produtos disponíveis</strong>
GET -> https://127.0.0.1:8000/api/produtos
Dados de retorno ->
"nome", "valor_unitario", "qtde_estoque"
<br>
<strong>Detalhar um produto</strong>
GET -> https://127.0.0.1:8000/api/produtos/{id}
Dados de retorno ->
"nome", "valor_unitario", "qtde_estoque", "ultima_venda"
<br>
<strong>Comprar um produto</strong>
POST -> https://127.0.0.1:8000/api/compras
BODY:
"produto_id" -> obrigatório
"qtde_comprada" -> obrigatório
"cartao" -> obrigatório
    "titular", "numero", "data_expiracao", "bandeira", "cvv"
<br>
<strong>Remover produto do estoque</strong>
DELETE -> https://127.0.0.1:8000/api/produtos/{id}


