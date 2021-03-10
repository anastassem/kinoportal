<?php
class ViewComments{
	public static function CommentsForm(){
		echo '<form action="insertcomment">
		<input type="hidden" name="id" value="'.$_GET['id'].'">
			Ваш комментарий: <input type="text" name="comment">
		<input class="btn" type="submit" value="Отправить"> </form>';
	}

	public static function CommentsByNews($arr){
		if($arr!=null) {
			echo '<table id="ctable"><th>Комментарий</th><th>Дата</th>';
			foreach ($arr as $value) {
				echo '<tr><td>'.$value['text']."</td><td>".$value['date']."</td></tr>";
			}
			echo '</table>';
		}
		
	}

	public static function CommentsCountWithAncor($value){
		if($value['count']>0) 
		echo '<b><a href="#ctable"/>Комментарий: '.$value['count'].' </a></b>';
	}
	
	public static function CommentsCount($value){
		if($value['count']>0) {
			echo '<b>Комментарий: <font color="#ff8200">'.$value['count'].' </font></b>';
		}
	}
}
