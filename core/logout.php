<?php
session_start（）;
// logout.php？logoutにアクセスしたユーザーをログアウトする
if（isset（$ _GET [ ' logout ' ]）））{
	session_destroy（）;
	設定解除（$ _SESSION [ ' user ' ]）;
	header（" Location：index.php "）;
} 他 {
	header（" Location：index.php "）;
}
