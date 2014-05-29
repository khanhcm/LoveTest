<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'BaseFacebook' => $vendorDir . '/facebook/php-sdk/src/base_facebook.php',
    'CreateAnswersTable' => $baseDir . '/app/database/migrations/2014_05_24_023642_create_answers_table.php',
    'CreateHobbiesTable' => $baseDir . '/app/database/migrations/2014_05_24_023514_create_hobbies_table.php',
    'CreateHobbyHasQuestionTable' => $baseDir . '/app/database/migrations/2014_05_24_023759_create_hobby_has_question_table.php',
    'CreateQuestionHasAnswerTable' => $baseDir . '/app/database/migrations/2014_05_24_023727_create_question_has_answer_table.php',
    'CreateQuestionsTable' => $baseDir . '/app/database/migrations/2014_05_24_023625_create_questions_table.php',
    'CreateUserLikeHobbyTable' => $baseDir . '/app/database/migrations/2014_05_24_023831_create_user_like_hobby_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2014_05_24_023608_create_users_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Facebook' => $vendorDir . '/facebook/php-sdk/src/facebook.php',
    'FacebookApiException' => $vendorDir . '/facebook/php-sdk/src/base_facebook.php',
    'FacebookLoginController' => $baseDir . '/app/controllers/FacebookLoginController.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Profile' => $baseDir . '/app/models/Profile.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserController' => $baseDir . '/app/controllers/UserController.php',
);