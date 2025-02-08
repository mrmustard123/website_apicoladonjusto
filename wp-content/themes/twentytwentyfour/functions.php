<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );
/*
function validar_cantidad_minima_en_carrito($valid, $producto_id, $cantidad) {
    $minimo = 25; // Defin� la cantidad m�nima
	
	switch($product_id){
		case 87:
			if ($cantidad < $minimo) {
				wc_add_notice('La cantidad minima de compra para "' . get_the_title($producto_id) . '" es de ' . $minimo . ' unidades. Haga clic en la foto del producto para alterar la cantidad', 'error');
			return false; // Bloquea la adici�n al carrito
    }

    return $valid;
}
add_filter('woocommerce_add_to_cart_validation', 'validar_cantidad_minima_en_carrito', 10, 3);

function cambiar_textos_woocommerce($translated_text, $text, $domain) {
    switch ($translated_text) {
        case 'Add to cart':
            return 'A�adir al carrito';
        case 'Proceed to checkout':
            return 'Finalizar compra';
        case 'Place order':
            return 'Realizar pedido';
    }
    return $translated_text;
}
add_filter('gettext', 'cambiar_textos_woocommerce', 20, 3);
*/
/*
function forzar_cantidad_minima_al_agregar($cantidad, $producto_id) {
	switch($producto_id){
	case 87:
		$minimo = 25; // Cantidad m�nima de compra
		break;
	case 102:
		$minimo=20;
		break;
	}

    // Si el usuario intenta agregar menos del m�nimo, ajustamos la cantidad a 25
    if ($cantidad < $minimo) {
        return $minimo;
    }

    return $cantidad;
}
add_filter('woocommerce_add_to_cart_quantity', 'forzar_cantidad_minima_al_agregar', 10, 2);
*/
/*
function forzar_cantidad_minima_en_carrito($cart) {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $producto_id = $cart_item['product_id'];
        
        // Obtener la cantidad m�nima del producto desde los metadatos
        $minimo = get_post_meta($producto_id, '_min_qty', true);
        
        // Si no hay un valor definido, usar 25 como m�nimo por defecto
        $minimo = (!empty($minimo) && is_numeric($minimo)) ? (int) $minimo : 25;

        if ($cart_item['quantity'] < $minimo) {
            $cart->set_quantity($cart_item_key, $minimo); // Ajusta la cantidad autom�ticamente
            
            // Agrega un mensaje de aviso
            wc_add_notice("La cantidad m�nima de compra para '{$cart_item['data']->get_name()}' es de $minimo unidades.", 'error');
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'forzar_cantidad_minima_en_carrito');
*/
/*
function forzar_cantidad_minima_en_carrito($cart) {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    global $wpdb;

    // Obtener todas las reglas de cantidad mínima
    $resultados = $wpdb->get_results("SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key = 'mmqw_rule_groups'", ARRAY_A);

    // Crear un array con las cantidades mínimas por producto
    $cantidades_minimas = [];

    foreach ($resultados as $fila) {
        $reglas = maybe_unserialize($fila['meta_value']);

        if (!empty($reglas) && is_array($reglas)) {
            foreach ($reglas as $grupo) {
                if (isset($grupo['mmqw_group_min_qty']) && isset($grupo['mmqw_rule']['0']['mmqw_rule_condition_value']['0'])) {
                    $producto_id = (int) $grupo['mmqw_rule']['0']['mmqw_rule_condition_value']['0'];
                    $minimo = (int) $grupo['mmqw_group_min_qty'];
                    $cantidades_minimas[$producto_id] = $minimo;
                }
            }
        }
    }

    // Recorrer el carrito y aplicar las cantidades mínimas
    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $producto_id = $cart_item['product_id'];

        if (isset($cantidades_minimas[$producto_id]) && $cart_item['quantity'] < $cantidades_minimas[$producto_id]) {
            $cart->set_quantity($cart_item_key, $cantidades_minimas[$producto_id]); // Ajusta la cantidad automáticamente

            // Agrega un mensaje de aviso
            wc_add_notice("La cantidad mínima de compra para '{$cart_item['data']->get_name()}' es de {$cantidades_minimas[$producto_id]} unidades.", 'error');
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'forzar_cantidad_minima_en_carrito');
*/

function forzar_cantidad_minima_en_carrito($cart) {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    global $wpdb;

    // Obtener todas las reglas de cantidad mínima
    $resultados = $wpdb->get_results("SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key = 'mmqw_rule_groups'", ARRAY_A);

    // Crear un array con las cantidades mínimas por producto
    $cantidades_minimas = [];

    foreach ($resultados as $fila) {
        $reglas = maybe_unserialize($fila['meta_value']);

        if (!empty($reglas) && is_array($reglas)) {
            foreach ($reglas as $grupo) {
                if (isset($grupo['mmqw_group_min_qty']) && isset($grupo['mmqw_rule']['0']['mmqw_rule_condition_value']['0'])) {
                    $producto_id = (int) $grupo['mmqw_rule']['0']['mmqw_rule_condition_value']['0'];
                    $minimo = (int) $grupo['mmqw_group_min_qty'];
                    $cantidades_minimas[$producto_id] = $minimo;
                }
            }
        }
    }

    // Recorrer el carrito y aplicar las cantidades mínimas
    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $producto_id = $cart_item['product_id'];

        if (isset($cantidades_minimas[$producto_id]) && $cart_item['quantity'] < $cantidades_minimas[$producto_id]) {
            $cart->set_quantity($cart_item_key, $cantidades_minimas[$producto_id]); // Ajusta la cantidad automáticamente

            // Agrega un mensaje de aviso
            wc_add_notice("La cantidad mínima de compra para '{$cart_item['data']->get_name()}' es de {$cantidades_minimas[$producto_id]} unidades.", 'error');
        }
    }
}
add_action('woocommerce_before_calculate_totals', 'forzar_cantidad_minima_en_carrito');

function script_forzar_cantidad_minima() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        function validarCantidad(input) {
            let min_valor = parseInt(input.getAttribute("min")) || 1;
            let nuevo_valor = parseInt(input.value);

            if (nuevo_valor < min_valor) {
                alert("La cantidad mínima permitida para este producto es " + min_valor + " unidades.");
                input.value = min_valor;
                input.dispatchEvent(new Event('change', { bubbles: true })); // Simular evento change para WooCommerce
            }
        }

        function observarCambios() {
            document.querySelectorAll('input.wc-block-components-quantity-selector__input, input.qty').forEach(input => {
                input.addEventListener('change', function() {
                    validarCantidad(input);
                });

                let minusButton = input.parentElement.querySelector('.wc-block-components-quantity-selector__button--minus');
                if (minusButton) {
                    minusButton.addEventListener('click', function() {
                        setTimeout(() => validarCantidad(input), 100);
                    });
                }
            });
        }

        // Ejecutar al cargar la página
        observarCambios();

        // Detectar cambios en el carrito dinámicamente (por si WooCommerce lo recarga)
        const observer = new MutationObserver(() => {
            observarCambios();
        });

        observer.observe(document.body, { childList: true, subtree: true });
    });
    </script>
    <?php
}
add_action('wp_footer', 'script_forzar_cantidad_minima');








