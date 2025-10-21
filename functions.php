<?php
function setup_scripts()
{
    //########### JS ##########
    // Chamando o arquivo APP JS para as edições do tema
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true);
    // LOCATE THE SCRIPT WITH THE AJAX URL VARIABLE
    wp_localize_script('app-js', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));

    //########### CSS ##########
    // Chamando o arquivo APP CSS para as edições do tema
    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'), 'all'); 
}
add_action('wp_enqueue_scripts', 'setup_scripts');

function create_pedidos_header_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'pedidos_cabecalho';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        quote_id varchar(20) NOT NULL,
        cliente varchar(255),
        solicitante varchar(255),
        cnpj varchar(50),
        data_entrega datetime,
        cep varchar(20),
        data_pedido datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE (quote_id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function create_pedidos_items_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'pedidos_itens';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        quote_id varchar(20) NOT NULL,
        /* COMPRA */
        fornecedor_compra varchar(255) NOT NULL,
        codigo_compra varchar(100),
        item_compra varchar(255) NOT NULL,
        descricao_item varchar(255) NOT NULL,
        peso_item decimal(10,2) DEFAULT 0.00,
        formato_item varchar(100),
        quantidade_compra int DEFAULT 1,
        vlr_un_compra decimal(10,2) DEFAULT 0.00,
        /* GRAVAÇÃO */
        fornecedor_gravacao varchar(255) NOT NULL,
        tipo_gravacao varchar(255) NOT NULL,
        quantidade_gravacao int DEFAULT 1,
        vlr_un_gravacao decimal(10,2) DEFAULT 0.00,
        /* VENDA */
        margem_comissao decimal(10,2) DEFAULT 0.00,
        margem_lucro decimal(10,2) DEFAULT 0.00,
        margem_bv decimal(10,2) DEFAULT 0.00,
        quantidade_venda int DEFAULT 1,
        observacoes text DEFAULT NULL,
        PRIMARY KEY (id),
        INDEX (quote_id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
