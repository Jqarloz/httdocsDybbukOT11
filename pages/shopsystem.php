<?php
if(!defined('INITIALIZED'))
	exit;

if($config['site']['shop_system'])
{
	if($logged)
	{
		$user_premium_points = $account_logged->getCustomField('premium_points');
	}
	else
	{
		$user_premium_points = 'Login first';
	}
	function getItemByID($id)
	{
		$id = (int) $id;
		$SQL = $GLOBALS['SQL'];
		$data = $SQL->query('SELECT * FROM '.$SQL->tableName('z_shop_offer').' WHERE '.$SQL->fieldName('id').' = '.$SQL->quote($id).';')->fetch();
		if($data['offer_type'] == 'item')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'container')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['container_id'] = $data['itemid1'];
			$offer['container_count'] = $data['count1'];
			$offer['item_id'] = $data['itemid2'];
			$offer['item_count'] = $data['count2'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'armas')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['armas_id'] = $data['itemid1'];
			$offer['armas_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'equipo')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['equipo_id'] = $data['itemid1'];
			$offer['equipo_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'soporte')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['soporte_id'] = $data['itemid1'];
			$offer['soporte_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'edit')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['edit_id'] = $data['itemid1'];
			$offer['edit_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		return $offer;
	}

	function getOfferArray()
	{
		$offer_list = $GLOBALS['SQL']->query('SELECT * FROM '.$GLOBALS['SQL']->tableName('z_shop_offer').';');
		$i_item = 0;
		$i_container = 0;
		$i_armas = 0;
		$i_equipo = 0;
		$i_soporte = 0;
		$i_edit = 0;
		while($data = $offer_list->fetch())
		{
			if($data['offer_type'] == 'item')
			{
				$offer_array['item'][$i_item]['id'] = $data['id'];
				$offer_array['item'][$i_item]['item_id'] = $data['itemid1'];
				$offer_array['item'][$i_item]['item_count'] = $data['count1'];
				$offer_array['item'][$i_item]['points'] = $data['points'];
				$offer_array['item'][$i_item]['description'] = $data['offer_description'];
				$offer_array['item'][$i_item]['name'] = $data['offer_name'];
				$i_item++;
			}
			elseif($data['offer_type'] == 'container')
			{
				$offer_array['container'][$i_container]['id'] = $data['id'];
				$offer_array['container'][$i_container]['container_id'] = $data['itemid1'];
				$offer_array['container'][$i_container]['container_count'] = $data['count1'];
				$offer_array['container'][$i_container]['item_id'] = $data['itemid2'];
				$offer_array['container'][$i_container]['item_count'] = $data['count2'];
				$offer_array['container'][$i_container]['points'] = $data['points'];
				$offer_array['container'][$i_container]['description'] = $data['offer_description'];
				$offer_array['container'][$i_container]['name'] = $data['offer_name'];
				$i_container++;
			}
			elseif($data['offer_type'] == 'armas')
			{
				$offer_array['armas'][$i_armas]['id'] = $data['id'];
				$offer_array['armas'][$i_armas]['armas_id'] = $data['itemid1'];
				$offer_array['armas'][$i_armas]['armas_count'] = $data['count1'];
				$offer_array['armas'][$i_armas]['points'] = $data['points'];
				$offer_array['armas'][$i_armas]['description'] = $data['offer_description'];
				$offer_array['armas'][$i_armas]['name'] = $data['offer_name'];
				$i_armas++;
			}
			elseif($data['offer_type'] == 'equipo')
			{
				$offer_array['equipo'][$i_equipo]['id'] = $data['id'];
				$offer_array['equipo'][$i_equipo]['equipo_id'] = $data['itemid1'];
				$offer_array['equipo'][$i_equipo]['equipo_count'] = $data['count1'];
				$offer_array['equipo'][$i_equipo]['points'] = $data['points'];
				$offer_array['equipo'][$i_equipo]['description'] = $data['offer_description'];
				$offer_array['equipo'][$i_equipo]['name'] = $data['offer_name'];
				$i_equipo++;
			}
			elseif($data['offer_type'] == 'soporte')
			{
				$offer_array['soporte'][$i_soporte]['id'] = $data['id'];
				$offer_array['soporte'][$i_soporte]['soporte_id'] = $data['itemid1'];
				$offer_array['soporte'][$i_soporte]['soporte_count'] = $data['count1'];
				$offer_array['soporte'][$i_soporte]['points'] = $data['points'];
				$offer_array['soporte'][$i_soporte]['description'] = $data['offer_description'];
				$offer_array['soporte'][$i_soporte]['name'] = $data['offer_name'];
				$i_soporte++;
			}
			elseif($data['offer_type'] == 'edit')
			{
				$offer_array['edit'][$i_edit]['id'] = $data['id'];
				$offer_array['edit'][$i_edit]['edit_id'] = $data['itemid1'];
				$offer_array['edit'][$i_edit]['edit_count'] = $data['count1'];
				$offer_array['edit'][$i_edit]['points'] = $data['points'];
				$offer_array['edit'][$i_edit]['description'] = $data['offer_description'];
				$offer_array['edit'][$i_edit]['name'] = $data['offer_name'];
				$i_edit++;
			}
		}
		return $offer_array;
	}
	if(($action == '') or ($action == 'item') or ($action == 'container') or ($action == 'armas') or ($action == 'equipo') or ($action == 'soporte') or ($action == 'edit'))
	{
		unset($_SESSION['viewed_confirmation_page']);
		$offer_list = getOfferArray();

		if(empty($action))
		{
			if(count($offer_list['item']) > 0)
				$action = 'item';
			elseif(count($offer_list['container']) > 0)
				$action = 'container';
			elseif(count($offer_list['armas']) > 0)
				$action = 'armas';
			elseif(count($offer_list['equipo']) > 0)
				$action = 'equipo';
			elseif(count($offer_list['soporte']) > 0)
				$action = 'soporte';
			elseif(count($offer_list['edit']) > 0)
				$action = 'edit';
		}

		function selectcolor($value)
		{
			if($GLOBALS['action'] == $value)
				return '#505050; color: #FFFFFF';
			else
				return '#303030; color: #aaaaaa';
		}

		if((count($offer_list['item']) > 0) or (count($offer_list['container']) > 0) or (count($offer_list['armas']) > 0) or (count($offer_list['equipo']) > 0) or (count($offer_list['soporte']) > 0) or (count($offer_list['edit']) > 0))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=4><TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white colspan="2"><B>Choose a categorie: </B>';
			if(count($offer_list['item']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=item" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('item').';">ITEMS</a>';
			if(count($offer_list['container']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=container" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('container').';">CONTAINERS</a>';
			if(count($offer_list['armas']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=armas" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('armas').';">ARMAS</a>';
			if(count($offer_list['equipo']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=equipo" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('equipo').';">VIP</a>';
			if(count($offer_list['soporte']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=soporte" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('soporte').';">SOPORTE</a>';
			if(count($offer_list['edit']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=edit" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('edit').';">EDIT</a>';
			$main_content .= '</TD></TR></TD></TR></table><table BORDER=0 CELLPaDDING="4" CELLSPaCING="1" style="width:100%;font-weight:bold;text-align:center;"><tr style="background:#505050;"><td colspan="3" style="height:px;"></td></tr></table>';
		}

		//show list of items offers
		if((count($offer_list['item']) > 0) and ($action == 'item'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['item'] as $item)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$item['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $item['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($item['name']).'</b> ('.$item['points'].' points)<br />'.htmlspecialchars($item['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="itemform_'.$item['id'].'"><input type="hidden" name="buy_id" value="'.$item['id'].'"><div class="navibutton"><a href="" onClick="itemform_'.$item['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
		//show list of containers offers
		if((count($offer_list['container']) > 0) and ($action == 'container'))
		{
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['container'] as $container)
			{
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$container['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $container['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($container['name']).'</b> ('.$container['points'].' points)<br />'.htmlspecialchars($container['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="contform_'.$container['id'].'"><input type="hidden" name="buy_id" value="'.$container['id'].'"><div class="navibutton"><a href="" onClick="contform_'.$container['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
		//show list of ARMAS offers
		if((count($offer_list['armas']) > 0) and ($action == 'armas'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['armas'] as $armas)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$armas['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $armas['armas_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($armas['name']).'</b> ('.$armas['points'].' points)<br />'.htmlspecialchars($armas['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="armasform_'.$armas['id'].'"><input type="hidden" name="buy_id" value="'.$armas['id'].'"><div class="navibutton"><a href="" onClick="armasform_'.$armas['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
		//show list of equipo offers
		if((count($offer_list['equipo']) > 0) and ($action == 'equipo'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['equipo'] as $equipo)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$equipo['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $equipo['equipo_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($equipo['name']).'</b> ('.$equipo['points'].' points)<br />'.htmlspecialchars($equipo['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="equipoform_'.$equipo['id'].'"><input type="hidden" name="buy_id" value="'.$equipo['id'].'"><div class="navibutton"><a href="" onClick="equipoform_'.$equipo['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
		//show list of soporte offers
		if((count($offer_list['soporte']) > 0) and ($action == 'soporte'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['soporte'] as $soporte)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$soporte['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $soporte['soporte_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($soporte['name']).'</b> ('.$soporte['points'].' points)<br />'.htmlspecialchars($soporte['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="soporteform_'.$soporte['id'].'"><input type="hidden" name="buy_id" value="'.$soporte['id'].'"><div class="navibutton"><a href="" onClick="soporteform_'.$soporte['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
		//show list of edit offers
		if((count($offer_list['edit']) > 0) and ($action == 'edit'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['edit'] as $edit)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$edit['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $edit['edit_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($edit['name']).'</b> ('.$edit['points'].' points)<br />'.htmlspecialchars($edit['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="editform_'.$edit['id'].'"><input type="hidden" name="buy_id" value="'.$edit['id'].'"><div class="navibutton"><a href="" onClick="editform_'.$edit['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}

		if((count($offer_list['item']) > 0) or (count($offer_list['container']) > 0) or (count($offer_list['armas']) > 0) or (count($offer_list['equipo']) > 0) or (count($offer_list['soporte']) > 0) or (count($offer_list['edit']) > 0))
		{
			$main_content .= '<table BORDER=0 CELLPaDDING="4" CELLSPaCING="1" style="width:100%;font-weight:bold;text-align:center;">
			<tr style="background:#505050;">
					<td colspan="3" style="height:px;"></td>
			</tr>
			</table>';
		}
	}
	if($action == 'select_player')
	{
		unset($_SESSION['viewed_confirmation_page']);
		if(!$logged) {
			$errormessage .= 'Please login first.';
		}
		else
		{
			$buy_id = (int) $_REQUEST['buy_id'];
			if(empty($buy_id))
			{
				$errormessage .= 'Please <a href="?subtopic=shopsystem">select item</a> first.';
			}
			else
			{
				$buy_offer = getItemByID($buy_id);
				if(isset($buy_offer['id'])) //item exist in database
				{
					if($user_premium_points >= $buy_offer['points'])
					{
						$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%">
						<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Selected Offer</b></td></tr>
						<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Name:</b></td><td width="550">'.htmlspecialchars($buy_offer['name']).'</td></tr>
						<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Description:</b></td><td width="550">'.htmlspecialchars($buy_offer['description']).'</td></tr>
						</table><br />
						<form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_id" value="'.$buy_id.'">
						<table border="0" cellpadding="4" cellspacing="1" width="100%">
						<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Give item to player from your account</b></td></tr>
						<tr bgcolor="'.$config['site']['lightborder'].'"><td width="110"><b>Name:</b></td><td width="550"><select name="buy_name">';
						$players_from_logged_acc = $account_logged->getPlayersList();
						if(count($players_from_logged_acc) > 0)
						{
							foreach($players_from_logged_acc as $player)
							{
								$main_content .= '<option>'.htmlspecialchars($player->getName()).'</option>';
							}
						}
						else
						{
							$main_content .= 'You don\'t have any character on your account.';
						}
						$main_content .= '</select>&nbsp;<input type="submit" value="Give"></td></tr>
						</table>
						</form><br /><form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_id" value="'.$buy_id.'">
							<table border="0" cellpadding="4" cellspacing="1" width="100%">
							<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Give item to other player</b></td></tr>
							<tr bgcolor="'.$config['site']['lightborder'].'"><td width="110"><b>To player:</b></td><td width="550"><input type="text" name="buy_name"> - name of player</td></tr>
							<tr bgcolor="'.$config['site']['darkborder'].'"><td width="110"><b>From:</b></td><td width="550"><input type="text" name="buy_from">&nbsp;<input type="submit" value="Give"> - your nick, \'empty\' = Anonymous</td></tr>
							</table><br />
							</form>';

					}
					else
					{
						$errormessage .= 'For this item you need <b>'.$buy_offer['points'].'</b> points. You have only <b>'.$user_premium_points.'</b> premium points. Please <a href="?subtopic=shopsystem">select other item</a> or buy premium points.';
					}
				}
				else
				{
					$errormessage .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem">select item</a> again.';
				}
			}
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
	}
	elseif($action == 'confirm_transaction')
	{
		if(!$logged)
		{
			$errormessage .= 'Please login first.';
		}
		else
		{
			$buy_id = (int) $_POST['buy_id'];
			$buy_name = trim($_POST['buy_name']);
			$buy_from = trim($_POST['buy_from']);
			if(empty($buy_from))
			{
				$buy_from = 'Anonymous';
			}
			if(empty($buy_id))
			{
				$errormessage .= 'Please <a href="?subtopic=shopsystem">select item</a> first.';
			}
			else
			{
				if(!check_name($buy_from))
				{
					$errormessage .= 'Invalid nick ("from player") format. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a> or contact with administrator.';
				}
				else
				{
					$buy_offer = getItemByID($buy_id);
					if(isset($buy_offer['id'])) //item exist in database
					{
						if($user_premium_points >= $buy_offer['points'])
						{
							if(check_name($buy_name))
							{
								$buy_player = new Player();
								$buy_player->find($buy_name);
								if($buy_player->isLoaded())
								{
									$buy_player_account = $buy_player->getAccount();
									if($_SESSION['viewed_confirmation_page'] == 'yes' && $_POST['buy_confirmed'] == 'yes')
									{
										if($buy_offer['type'] == 'item')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['item_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('item').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'container')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['item_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote($buy_offer['container_id']).', '.$SQL->quote($buy_offer['container_count']).', '.$SQL->quote('container').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Container of items added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this container with items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'armas')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['armas_id']).', '.$SQL->quote($buy_offer['armas_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('armas').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'equipo')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['equipo_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('equipo').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'soporte')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['soporte_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('soporte').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'edit')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['edit_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('edit').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('').', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
									}
									else
									{
										$set_session = TRUE;
										$_SESSION['viewed_confirmation_page'] = 'yes';
										$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%">
										<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="3" class="white"><b>Confirm Transaction</b></td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Name:</b></td><td width="550" colspan="2">'. htmlspecialchars($buy_offer['name']).'</td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Description:</b></td><td width="550" colspan="2">'. htmlspecialchars($buy_offer['description']).'</td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Cost:</b></td><td width="550" colspan="2"><b>'. htmlspecialchars($buy_offer['points']).' premium points</b> from your account</td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>For Player:</b></td><td width="550" colspan="2"><font color="red">'.htmlspecialchars($buy_player->getName()).'</font></td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>From:</b></td><td width="550" colspan="2"><font color="red">'.htmlspecialchars($buy_from).'</font></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td colspan="3"></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Transaction?</b></td><td width="275" align="left">
										<form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_confirmed" value="yes"><input type="hidden" name="buy_id" value="'.$buy_id.'"><input type="hidden" name="buy_from" value="'.htmlspecialchars($buy_from).'"><input type="hidden" name="buy_name" value="'.htmlspecialchars($buy_name).'"><input type="submit" value="Accept"></form></td>
										<td align="right"><form action="?subtopic=shopsystem" method="POST"><input type="submit" value="Cancel"></form></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td colspan="3"></td></tr>
										</table> 
										';
									}
								}
								else
								{
									$errormessage .= 'Player with name <b>'.htmlspecialchars($buy_name).'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a>.';
								}
							}
							else
							{
								$errormessage .= 'Invalid name format. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a> or contact with administrator.';
							}
						}
						else
						{
							$errormessage .= 'For this item you need <b>'.$buy_offer['points'].'</b> points. You have only <b>'.$user_premium_points.'</b> premium points. Please <a href="?subtopic=shopsystem">select other item</a> or buy premium points.';
						}
					}
					else
					{
						$errormessage .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem">select item</a> again.';
					}
				}
			}
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
		if(!$set_session)
		{
			unset($_SESSION['viewed_confirmation_page']);
		}
	}
	elseif($action == 'show_history')
	{
		if(!$logged)
		{
			$errormessage .= 'Please login first.';
		}
		else
		{
			$items_history_received = $SQL->query('SELECT * FROM '.$SQL->tableName('z_shop_history_item').' WHERE '.$SQL->fieldName('to_account').' = '.$SQL->quote($account_logged->getId()).' OR '.$SQL->fieldName('from_account').' = '.$SQL->quote($account_logged->getId()).';');
			if(is_object($items_history_received))
			{
				foreach($items_history_received as $item_received)
				{
					if($account_logged->getId() == $item_received['to_account'])
						$char_color = 'green';
					else
						$char_color = 'red';
					$items_received_text .= '<tr bgcolor="'.$config['site']['lightborder'].'"><td><font color="'.$char_color.'">'.htmlspecialchars($item_received['to_name']).'</font></td><td>';
					if($account_logged->getId() == $item_received['from_account'])
						$items_received_text .= '<i>Your account</i>';
					else
						$items_received_text .= htmlspecialchars($item_received['from_nick']);
					$items_received_text .= '</td><td>'.htmlspecialchars($item_received['offer_id']).'</td><td>'.date("j F Y, H:i:s", $item_received['trans_start']).'</td>';
					if($item_received['trans_real'] > 0)
						$items_received_text .= '<td>'.date("j F Y, H:i:s", $item_received['trans_real']).'</td>';
					else
						$items_received_text .= '<td><b><font color="red">Not realized yet.</font></b></td>';
					$items_received_text .= '</tr>';
				}
			}
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'"></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><center><B>Transactions History</B></center></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'"></TD></TR>
				</table><br>';
				
			if(!empty($items_received_text))
			{
				$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
					<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white colspan="5"><B>Item Transactions</B></TD></TR>
					<tr bgcolor="'.$config['site']['darkborder'].'"><td><b>To:</b></td><td><b>From:</b></td><td><b>Offer name</b></td><td><b>Bought on page</b></td><td><b>Received on OTS</b></td></tr>
					'.$items_received_text.'
					</table><br />';
			}
			if(empty($items_received_text))
				$errormessage .= 'You did not buy/receive any item.';
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
	}
	$main_content .= '<br><TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
		<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Premium Points</B></TD></TR>
		<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b><font color="green">You have premium points: </font></b>'.$user_premium_points.'</TD></TR>
		</table>';
}
else
	$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
	<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=center CLASS=white ><B>Shop Information</B></TD></TR>
	<TR><TD BGCOLOR="'.$config['site']['darkborder'].'"><center>Shop is currently closed. [to admin: edit it in \'config/config.php\']</TD></TR>
	</table>';