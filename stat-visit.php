<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
widget_css();
$visit = x::visit();

?>

<div id="visit">
	<div class='title'>접속자 통계</div>
	<div class='visit-content-wrapper'>
		<?
		$labels = array("오늘","어제","최대","전체");
		for( $i = 1; $i <= 4; $i++ ){		
		if( number_format($visit[$i]) == 0 ) $no_visit = "no-visit";
		?>
			<span class='label'>
				<?=$labels[$i-1]?>
			</span>
			<span class='value <?=$no_visit?>'>
				<?php echo number_format($visit[$i]) ?>
			</span>
			
			<?			
			if( $i != 4 ) {?>
				<span class='seperator'>|</span>
			<?}?>
		<?
		}
		?>		
		<?php if ( admin() ) {  ?>		
			<span class='seperator'>|</span>
			<a href="<?php echo G5_ADMIN_URL ?>/visit_list.php">상세보기</a>		
		<?php } ?>
	</div>	
</div>