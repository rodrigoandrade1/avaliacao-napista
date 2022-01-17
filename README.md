<h1>Documentação</h1><br>
API REST para gerenciamento de estoque e venda de produtos utilizando a forma de pagamento cartão de crédito.<br>

<h2>Resource URL</h2>
<strong>https://127.0.0.1:8000/api/produtos</strong><br>
Response: JSON<br>
Requer autenticação? <strong>Não</strong><br>

<h2>Rotas</h2>
<strong>Adicionar produtos ao estoque</strong><br>
POST -> https://127.0.0.1:8000/api/produtos<br>
BODY:<br>
"nome" -> obrigatório<br>
"valor_unitario" -> obrigatório<br>
"qtde_estoque" -> obrigatório<br>
<br>
<strong>Listar produtos disponíveis</strong><br>
GET -> https://127.0.0.1:8000/api/produtos<br>
Dados de retorno -><br>
"nome", "valor_unitario", "qtde_estoque"<br>
<br>
<strong>Detalhar um produto</strong><br>
GET -> https://127.0.0.1:8000/api/produtos/{id}<br>
Dados de retorno -><br>
"nome", "valor_unitario", "qtde_estoque", "ultima_venda"<br>
<br>
<strong>Comprar um produto</strong><br>
POST -> https://127.0.0.1:8000/api/compras<br>
BODY:<br>
"produto_id" -> obrigatório<br>
"qtde_comprada" -> obrigatório<br>
"cartao" -> obrigatório<br>
    "titular", "numero", "data_expiracao", "bandeira", "cvv"<br>
<br>
<strong>Remover produto do estoque</strong><br>
DELETE -> https://127.0.0.1:8000/api/produtos/{id}<br>


