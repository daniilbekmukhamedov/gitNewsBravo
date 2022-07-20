<?php
	// HACK PROTECT
	if(!defined('CHECK')){
		die('No hacking!');
	}
	
	out_mod(<<<HTML
	<div class="admin_title">Удаление новостей</div>
HTML
);
	$newsId = (int) $_GET['id'];
	
	if($newsId){
		// Получение новости из базы данных
		$selectSQL = "SELECT * FROM `news_posts` WHERE id='{$newsId}'";
		
		$result = mysqli_query($db, $selectSQL);
		if(mysqli_num_rows($result)){
			$news = mysqli_fetch_assoc($result);
			
			if($_GET['confirm'] == 'true'){
				// производим процесс удаления
				
				$SQL = "DELETE FROM `news_posts` WHERE id='{$newsId}'";
				
				$result = mysqli_query($db, $SQL);
				
				if($result){
					if(mysqli_affected_rows($db)){
						out_mod('<span style="display:block; margin-left:30px;">Новость была успешно удалена. <a href="/?do=admin&section=allnews" style="text-decoration:underline;">К списку всех новостей</a></span>');
					}else{
						out_mod('Новость уже удалена.');
					}
				}else{
					out_mod('Ошибка удаления новости: '.mysqli_errno($db).' '.mysqli_error($db));
				}
				
			}else{
				out_mod(<<<HTML
				<form method="GET" action="">
					<input type="hidden" name="do" value="admin" />
					<input type="hidden" name="section" value="deletenews" />
					<input type="hidden" name="id" value="{$newsId}" />
					<input type="hidden" name="confirm" value="true" />
					<input id="deleteSubmit" type="submit" value="Удалить новость" />
				</form>
				<br/>
				<span style="display:block; margin-left:30px;">
					или <a href="javascript:history.back()" style="text-decoration: underline;">верунться назад</a>.
				</span>
HTML
);
			}


		}else{
			out_mod('<span style="display:block; margin-left:30px;">Новости с таким ID не сущесвует в базе данных</span>');
		}
		
	}else{
		out_mod('Не передна ID новости');
	}
?>