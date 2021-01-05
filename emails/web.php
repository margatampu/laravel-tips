Route::get('email/{email}', function ($email) {
    $user = new App\User;
    $user->email = $email;
    return $user->notify(new App\Notifications\EmailExampleNotification);
});
