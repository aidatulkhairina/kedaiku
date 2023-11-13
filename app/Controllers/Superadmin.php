<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - SimpleAuth
 * --------------------------------------------------------------------
 *
 * This content is released under the MIT License (MIT)
 *
 * @package    SimpleAuth
 * @author     GeekLabs - Lee Skelding 
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://github.com/GeekLabsUK/SimpleAuth
 * @since      Version 1.0
 * 
 */

 namespace App\Controllers;

class Superadmin extends BaseController
{
	public function index()
	{
		$data = [];

		$today = date('Y-m-d');
		$first_day = date('Y-m').'-01';
		$last_day = date('Y-m-t');

		$sql = 'SELECT 
		DATE_FORMAT(created_at, "%Y-%m-%d") AS "day_date",

		SUM(orders.total_amount) AS "main_total",
		COUNT(*) AS "total_orders"
		FROM orders
		WHERE
			orders.created_at >= "2023-11-08 00:00:00"
			AND orders.created_at <= "2024-09-15 23:59:59"
		GROUP BY DATE_FORMAT(created_at, "%Y-%m-%d")
		ORDER BY day_date ASC;';


		$sql_today = 'SELECT 
			DATE_FORMAT(created_at, "%Y-%m-%d") AS "day_date",

			SUM(orders.total_amount) AS "main_total",
			COUNT(*) AS "total_orders"
			FROM orders
			WHERE
				orders.created_at >= "'.$today.' 00:00:00"
				AND orders.created_at <= "'.$today.' 23:59:59"
			GROUP BY DATE_FORMAT(created_at, "%Y-%m-%d")
			ORDER BY day_date ASC;';

		// $sql_month = 'SELECT 
		// 	DATE(created_at) AS "day_date",
		// 	SUM(orders.total_amount) AS "main_total",
		// 	COUNT(*) AS "total_orders"
		// 	FROM orders
		// 	WHERE
		// 		orders.created_at >= "2023-11-10 00:00:00"
		// 		AND orders.created_at <= "2023-11-11 23:59:59"
		// 	GROUP BY DATE(created_at)
		// 	ORDER BY day_date ASC;';

		$sql_month = 'SELECT 
		"Total" AS day_date,
		SUM(orders.total_amount) AS main_total,
		COUNT(*) AS total_orders
	FROM orders
	WHERE
		orders.created_at >= "2023-11-1 00:00:00"
		AND orders.created_at <= "2023-11-30 23:59:59"
	
	UNION
	
	SELECT 
		DATE_FORMAT(created_at, "%Y-%m-%d") AS day_date,
		SUM(orders.total_amount) AS main_total,
		COUNT(*) AS total_orders
	FROM orders
	WHERE
		orders.created_at >= "'.$first_day.' 00:00:00"
		AND orders.created_at <= "'.$last_day.' 23:59:59"
	GROUP BY DATE_FORMAT(created_at, "%Y-%m-%d");';

		

			$db = \Config\Database::connect();
			$query = $db->query($sql);
			$query_today = $db->query($sql_today);
			$query_month = $db->query($sql_month);

			$data['graph'] = $query->getResultArray();
			$data['today_data'] = $query_today->getResultArray();
			$data['month_data'] = $query_month->getResultArray();

		return view('ecom-dashboard', $data);
	}

	//--------------------------------------------------------------------

}
