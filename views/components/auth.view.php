<div>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow shadow-lg md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="<?= $authSignup ? 'controllers/signup.php' : 'controllers/login.php' ?>" method="POST">
                        <input type="text" name="IsLogin" value="1" class="hidden" />
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" placeholder="name@company.com" required="">
                        </div>
                        <?php 
                        
                            if ($authSignup) {
                                echo '  <div>
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your name</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" placeholder="John Doe" required="">
                                        </div>
                                    ';
                            }

                        ?>
                        
                        <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><?= $authSignup ? 'Signup' : 'Login' ?></button>
                        <p class="text-sm font-light text-gray-500 text-gray-400">
                            <?= $authSignup ? 'Do you have an account?' : 'Don’t have an account yet?' ?> <a href="<?= $authSignup ? '/simple_todo_app/' : '/simple_todo_app/signup' ?>" class="font-medium text-indigo-600 hover:underline"><?= $authSignup ? 'Login' : 'Sign up' ?></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>