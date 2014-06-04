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
			"QUESTIONNAME" => "Bạn thích nhất món ăn nào?",
			"HOBBYID" => 1
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Món ăn ở vùng miền nào làm bạn cảm thấy ngon miệng nhất?",
			"HOBBYID" => 1
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn thích ban nhạc nào nhất?",
			"HOBBYID" => 4
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn đã từng chơi nhạc cụ nào chưa?",
			"HOBBYID" => 4
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Bạn có biết Roger Federer là ai không?",
			"HOBBYID" => 6
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Môn thể thao bạn thích nhất là gì?",
			"HOBBYID" => 6
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Trước một chuyến dã ngoại ở một nơi xa xôi hẻo lánh, bạn sẽ mang theo cái gì?",
			"HOBBYID" => 7
		));
		DB::table('questions')->insert(array(
			"QUESTIONNAME" => "Tình yêu đối với bạn là như thế nào?",
			"HOBBYID" => 10
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Thức ăn nhanh",
			"QUESTIONID"=>1
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Đồ ăn truyền thống",
			"QUESTIONID"=>1
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Hamburger",
			"QUESTIONID"=>1
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Món nào cũng ngán",
			"QUESTIONID"=>1
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Bắc",
			"QUESTIONID"=>2
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Trung",
			"QUESTIONID"=>2
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền Nam",
			"QUESTIONID"=>2
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Miền nào cũng ngon hết",
			"QUESTIONID"=>2
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Linkin' Park",
			"QUESTIONID"=>3
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Secret Garden",
			"QUESTIONID"=>3
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Slaghterhouse",
			"QUESTIONID"=>3
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Westlife",
			"QUESTIONID"=>3
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Trống",
			"QUESTIONID"=>4
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Kèn",
			"QUESTIONID"=>4
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Guitar",
			"QUESTIONID"=>4
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Chưa biết",
			"QUESTIONID"=>4
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Chưa nghe nói đến bao giờ",
			"QUESTIONID"=>5
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Anh ấy là một huyền thoại",
			"QUESTIONID"=>5
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bóng đá",
			"QUESTIONID"=>6
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Cầu lông",
			"QUESTIONID"=>6
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bóng chuyền",
			"QUESTIONID"=>6
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bơi lội",
			"QUESTIONID"=>6
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Thức ăn",
			"QUESTIONID"=>7
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Dao",
			"QUESTIONID"=>7
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Bật lửa",
			"QUESTIONID"=>7
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Áo ấm",
			"QUESTIONID"=>7
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Rất quan trọng",
			"QUESTIONID"=>8
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Có cũng được, không có cũng không sao",
			"QUESTIONID"=>8
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Tớ muốn là FA",
			"QUESTIONID"=>8
		));
		DB::table('answers')->insert(array(
			"ANSWERNAME"=>"Tình yêu là cái gì vậy? Có ăn được không?",
			"QUESTIONID"=>8
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
