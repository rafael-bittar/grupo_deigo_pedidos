<?php
/*
Template Name: Pedido
*/
get_header();
?>
  
<main id="main-pedido">
    <div>
        <h1>PEDIDO</h1>
    </div>
    <form id="orcamento_form">
    <div id="info">
        <div>
            <label class="order_field">
                Cliente
                <input type="text" name="cliente"></input>
            </label>
            
        </div>

        <div>
            <label class="order_field">
                Solicitante
                <input type="text" name="solicitante"></input>
            </label>
        </div>

        <div>
            <label class="order_field">
                CNPJ
                <input type="text" name="cnpj"></input>
            </label>
        </div>

        <div>
            <label class="order_field">
                Data de entrega
                <input type="datetime-local" name="date_delivery"></input>
            </label>
        </div>

        <div>
            <label class="order_field">
                CEP
                <input type="text" name="cep"></input>
            </label>
        </div>

    </div>

    <div id="pedido">
        
    </div>

    <button type="button" onclick="addItem()">+ ITEM</button>
    <button type="submit">Enviar pedido</button>
    </form>
</main>

<?php get_footer() ?>