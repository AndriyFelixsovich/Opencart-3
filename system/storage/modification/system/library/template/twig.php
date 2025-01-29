<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}

	public function render($filename, $code = '') {
		if (!$code) {
			$file = DIR_TEMPLATE . $filename . '.twig';

			if (defined('DIR_CATALOG') && is_file(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig')) {	
                $code = file_get_contents(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig');
            } elseif (is_file(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig')) {
                $code = file_get_contents(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig');
            } elseif (is_file($file)) {
				$code = file_get_contents($file);
			} else {
				throw new \Exception('Error: Could not load template ' . $file . '!');
				exit();
			}
		}

		// initialize Twig environment
		$config = array(
			'autoescape'  => false,
			'debug'       => true,
			'auto_reload' => true,
			'cache'       => DIR_CACHE . 'template/'
		);

		try {
            $loader = new \Twig\Loader\FilesystemLoader(DIR_TEMPLATE);

			$twig = new \Twig\Environment($loader, $config);
            $twig->addExtension(new \Twig\Extension\DebugExtension());

            // add custom functions and filters
            $twig->addGlobal('currency_format', function ($number, $currency = 'USD') {
                return $number. '&nbsp;'. $currency;
            });

            $twig->addGlobal('date_format', function ($date, $format = 'Y-m-d') {
                return date($format, strtotime($date));
            });

            $twig->addGlobal('url', function ($route, $params = array()) {
                return \Registry::get('url')->link($route, $params);
            });

            $twig->addGlobal('base', function () {
                return \Registry::get('config')->get('base_url');
            });

            $twig->addGlobal('language', function () {
                return \Registry::get('language');
            });

			return $twig->render($filename . '.twig', $this->data);
		} catch (Exception $e) {
			trigger_error('Error: Could not load template ' . $filename . '!');
			exit();
		}
	}
}
