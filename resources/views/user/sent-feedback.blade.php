<x-home-layout>
    <div class="mt-5 flex items-center justify-center">
        <div class="max-w-md w-full  p-8 shadow-xl bg-blue-50 rounded-xl">
            <h2 class="text-2xl font-bold mb-6">Send Feedback</h2>

            <!-- Feedback form -->
            <form action="/user/feedback" method="POST">
                @csrf
                <!-- Name input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Your Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300">
                </div>

                <!-- Email input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Your Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300">
                </div>

                <!-- Feedback message input -->
                <div class="mb-6">
                    <label for="feedback" class="block text-gray-600 text-sm font-medium mb-2">Feedback</label>
                    <textarea id="feedback" name="message" rows="4"
                        class="w-full border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-300"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Submit Feedback
                </button>
            </form>
        </div>
    </div>

</x-home-layout>
