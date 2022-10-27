<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Receipt</title>
</head>
<style>
	table{
		width: 100%;
		border-collapse: collapse;
	}
	body *{
		font-size: 12px;
	}
	p{
		margin:unset; 
	}
	.text-right{
		text-align: right;
	}
	.text-left{
		text-align: left;
	}
	hr{
		border-top:unset ;
		border-width: 2px;
	    border-color: black;
	    border-bottom-style: dashed;
	}
</style>
<?php 
	 $order = $this->db->query("SELECT * FROM pedido where idPedido = $id")->row();
	// $sales = $this->db->query("SELECT * FROM sales where order_id = $id")->row();
	// $queue = $this->db->query("SELECT * FROM queue_list where order_id = $id")->row();
?>
<body>
<!-- 	<p><center><?php echo $_SESSION['system']['name'] ?></center></p>
	<p><center><?php echo $_SESSION['system']['address'] ?></center></p><br>
 <p>Reference ID: <?php echo $order->ref_id ?></p> --> -->
	<hr>
	<table>
		<thead>
			<tr>
				<th class="text-left">Cantidad</th>
				<th class="text-left">Producto</th>
				<th class="text-right">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$items = $this->db->query("SELECT d.unidades as cantidad, p.nombre as producto, d.unidades*p.precio as total FROM detalle d inner join producto p on p.idproducto= d.idProducto where d.idPedido = $id");
				foreach($items->result_array() as $row):
					?>
					<tr>
						<td><?php echo number_format($row['cantidad']) ?></td>
						<td><?php echo ($row['producto']) ?></td>
							
						</td>
						<td class="text-right"><?php echo number_format($row['total'],2) ?></td>
					</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2" class="text-left">Total a pagar</th>
				<th class="text-right"><?php echo number_format($order->precioTotal,2) ?></th>
			</tr>
		
		</tfoot>
	</table>
	<hr>
	<h4>
		<center><b>Nro. Atención</b></center>
	</h4>
	<!-- <h6><center><b><?php echo $queue->queue ?></b></center></h6> -->
	<p><center>This receipt is UNOFFICIAL.</center></p>
</body>
</html>