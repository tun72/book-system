<x-home-layout>

    <div class="container">
        <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" />
                <label class="form-label" for="form6Example3">Title</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control" />
                <label class="form-label" for="form6Example4">Slug</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="file" id="form6Example5" class="form-control" />

            </div>

            <div class="form-outline mb-4">
                <input type="file" id="form6Example5" class="form-control" />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Body</label>
            </div>

            <div class="form-outline mb-4">
                <label for="" class="me-3">Is free</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" />
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2" />
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>



            </div>

            <div class="form-outline mb-4">
                <input type="number" id="form6Example4" class="form-control" />
                <label class="form-label" for="form6Example4">GGcoin</label>
            </div>





            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
        </form>
    </div>
</x-home-layout>
