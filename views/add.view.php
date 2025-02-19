<?php require 'partials/header.view.php' ?>

<form action="#" method="POST" class="mt-10 max-w-sm mx-auto">
    <input type="text" name="id" value="<?= $id ?>" class="hidden" />
    <input type="text" name="isAdding" value="1" class="hidden" />
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter a title" required />
    </div>
    <div class="mb-5">    
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your note</label>
        <textarea id="message" name="note" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

<?php require 'partials/footer.view.php' ?>