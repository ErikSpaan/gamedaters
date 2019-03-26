@foreach ($games as $game)
<?php
echo($game->cover . '</br>');
echo('<img src="https://images.igdb.com/igdb/image/upload/t_cover_big/' . $game->cover . '.jpg"/>');
?>
@endforeach