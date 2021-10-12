<?php
use App\Models\Unit;
// use Auth;
class Helper{
	
	public static function unitList($userId)
    {
		$unitlist = Unit::where('status',1)->where('user_id',$userId)->orderBy('created_at', 'desc')->get();
		//echo "<pre/>";
	//	print_r($unitlist); die;
		?>
			<?php
			foreach($unitlist as $unit) 
			{
			?>
			<li class='launcher to'>
				<router-link to="/teams/<?= $unit->id; ?>" class="sidetext liteam">
					<img src="/custom/images/unity.png" class='unity'><span> <?= $unit->unit_name; ?></span>
				</router-link>
			</li>
			<?php
			} 
			?>
		<?php
    } 
	
	
}

?>