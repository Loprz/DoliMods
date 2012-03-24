<?php
/* Copyright (C) 2012 Regis Houssin <regis@dolibarr.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 */
?>
 
<!-- BEGIN PHP TEMPLATE -->
<script type="text/javascript">
$(document).ready(function () {
	$.extend($.ui.multiselect.locale, {
		addAll:'<?php echo $langs->transnoentities("AddAll"); ?>',
		removeAll:'<?php echo $langs->transnoentities("RemoveAll"); ?>',
		itemsCount:'<?php echo $langs->transnoentities("ItemsCount"); ?>'
	});
	$(function(){
		$(".multiselect").multiselect({
			searchable: false,
			width: $('#selectconcatpdf').width(),
			height: 120
		});
	});
});
</script>
<!-- END PHP TEMPLATE -->