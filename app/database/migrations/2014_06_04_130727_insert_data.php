<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Ẩm thực",
				"HOBBYCODE" => "am-thuc"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Văn học",
				"HOBBYCODE" => "van-hoc"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Game",
				"HOBBYCODE" => "game"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Âm nhạc",
				"HOBBYCODE" => "am-nhac"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Khoa học",
				"HOBBYCODE" => "khoa-hoc"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Thể thao",
				"HOBBYCODE" => "the-thao"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Kinh nghiệm sống",
				"HOBBYCODE" => "kinh-nghiem-song"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Ngoại ngữ",
				"HOBBYCODE" => "ngoai-ngu"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Tin học",
				"HOBBYCODE" => "tin-hoc"
			)
		);
		DB::table('hobbies')->insert(array(
				"HOBBYNAME" => "Tình yêu",
				"HOBBYCODE" => "tinh-yeu"
			)
		);
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn thích nhất món ăn nào?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Món ăn ở vùng miền nào làm bạn cảm thấy ngon miệng nhất?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn thích ban nhạc nào nhất?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn đã từng chơi nhạc cụ nào chưa?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn có biết Roger Federer là ai không?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Môn thể thao bạn thích nhất là gì?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Trước một chuyến dã ngoại ở một nơi xa xôi hẻo lánh, bạn sẽ mang theo cái gì?"
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Tình yêu đối với bạn là như thế nào?"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Thức ăn nhanh"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Đồ ăn truyền thống"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Hamburger"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Món nào cũng ngán"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Bắc"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Trung"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Nam"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền nào cũng ngon hết"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Linkin' Park"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Secret Garden"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Slaghterhouse"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Westlife"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Trống"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Kèn"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Guitar"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Chưa biết"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Chưa nghe nói đến bao giờ"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Anh ấy là một huyền thoại"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bóng đá"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Cầu lông"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bóng chuyền"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bơi lội"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Thức ăn"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Dao"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bật lửa"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Áo ấm"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Rất quan trọng"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Có cũng được, không có cũng không sao"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Tớ muốn là FA"
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Tình yêu là cái gì vậy? Có ăn được không?"
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 1,
			"QUESTIONID" => 1
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 1,
			"QUESTIONID" => 2
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 4,
			"QUESTIONID" => 3
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 4,
			"QUESTIONID" => 4
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 6,
			"QUESTIONID" => 5
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 6,
			"QUESTIONID" => 6
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 7,
			"QUESTIONID" => 7
		));
		DB::table('hobby_has_question')->insert(array(
			"HOBBYID" => 10,
			"QUESTIONID" => 8
		));
		
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 1,
			"ANSWERID" => 1
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 1,
			"ANSWERID" => 2
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 1,
			"ANSWERID" => 3
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 1,
			"ANSWERID" => 4
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 2,
			"ANSWERID" => 5
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 2,
			"ANSWERID" => 6
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 2,
			"ANSWERID" => 7
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 2,
			"ANSWERID" => 8
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 3,
			"ANSWERID" => 9
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 3,
			"ANSWERID" => 10
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 3,
			"ANSWERID" => 11
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 3,
			"ANSWERID" => 12
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 4,
			"ANSWERID" => 13
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 4,
			"ANSWERID" => 14
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 4,
			"ANSWERID" => 15
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 4,
			"ANSWERID" => 16
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 5,
			"ANSWERID" => 17
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 5,
			"ANSWERID" => 18
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 6,
			"ANSWERID" => 19
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 6,
			"ANSWERID" => 20
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 6,
			"ANSWERID" => 21
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 6,
			"ANSWERID" => 22
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 7,
			"ANSWERID" => 23
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 7,
			"ANSWERID" => 24
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 7,
			"ANSWERID" => 25
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 7,
			"ANSWERID" => 26
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 8,
			"ANSWERID" => 27
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 8,
			"ANSWERID" => 28
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 8,
			"ANSWERID" => 29
		));
		DB::table('question_has_answer')->insert(array(
			"QUESTIONID" => 8,
			"ANSWERID" => 30
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
