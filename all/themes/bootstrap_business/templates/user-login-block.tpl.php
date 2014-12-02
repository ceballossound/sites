
 
	<table class="borde" width="100%" height="100%">
  		<tr>
    		<td width="33%">
    		<div class="usernamelogin">
    			<?php print $name; // Display username field ?>
    		</div>
    		</td>
    		<td width="33%">
    			<?php print $pass; // Display Password field ?>
			</td>
			<td width="33%">
    			<?php print $submit; // Display submit button ?>
    		</td>
		</tr>
			
    		<td colspan="3">
    			<?php print $rendered; // Display hidden elements (required for successful login) ?>
    		</td>
    				
		</tr>
	</table>
