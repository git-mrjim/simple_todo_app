<?php require 'partials/header.view.php' ?>

<div class="grid grid-cols-4 justify-center gap-4 mt-16 mx-16">
    <?php 
    
        foreach ($notes as $note) {
            echo '  <div>
                        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">'.$note['title'].'</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">'.$note['note'].'</p>
                        </a>
                    </div>';
        }
    
    ?>
</div>

<form action="/simple_todo_app/add" method="POST" class="fixed bottom-4 right-4">
    <input type="submit" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2" />
    <input type="text" name="id" value="<?= $id ?>" class="hidden" />
    <input type="email" name="email" value="<?= $email ?>" class="hidden" />
    <input type="text" name="isAdding" value="0" class="hidden" />
</form>

<?php require 'partials/footer.view.php' ?>