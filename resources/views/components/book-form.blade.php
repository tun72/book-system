@props(['type', 'genres', 'book' => null])

<div class="container col-8 shadow p-3 rounded mt-5">
    <h4 class="mb-4">Book {{ $type == 'create' ? 'Create' : 'Update' }}</h4>


    <form action="{{ $type == 'create' ? '/book/new-book' : '/book/' . $book->id . '/book-update' }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        @if ($type == 'update')
            @method('PATCH')
        @endif
        <!-- 2 column grid layout with text inputs for the first and last names -->

        <!-- Text input -->
        <div class="mb-4">
            <div class="form-outline">
                <input type="text" id="form6Example3" class="form-control" name="title"
                    value="{{ old('title', $book?->title) }}" />
                <label class="form-label" for="form6Example3">Title</label>
            </div>
            <x-error name="title" />
        </div>


        <!-- Text input -->
        <div class="mb-4">
            <div class="form-outline">
                <input type="text" id="form6Example4" class="form-control" name="slug"
                    value="{{ old('slug', $book?->slug) }}" />
                <label class="form-label" for="form6Example4">Slug</label>
            </div>
            <x-error name="slug" />
        </div>

        <div class="mb-4">
            <img src="{{ old('image', $book?->image) }}" alt="" width="150" height="200">
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label text-primary mb-1">Image</label>
                <input class="form-control" type="file" id="formFileMultiple" name="image" />
            </div>
            <x-error name="image" />
        </div>

        <div class="mb-3 row">
            <div class="col-6">
                <div class="dropdown">
                    <button class="btn shadow-0 border border-secondary dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false" style="width: 100%">
                        Choose Genres
                    </button>
                    <ul class="dropdown-menu overflow-scroll genres-list" aria-labelledby="dropdownMenuButton"
                        style="width: 100%; height: 300px">
                        @foreach ($genres as $gen)
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value={{ $gen->id }}
                                            id="Checkme1" name="genres[]"
                                            {{ old('genres[]', $book?->genres)?->contains($gen->id) ? "checked" : "false" }} />
                                        <label class="form-check-label" for="Checkme1">{{ $gen->name }}</label>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <x-error name="genres" />
            </div>

            <div class="col-3">
                <div class="form-outline">
                    <input type="number" id="form6Example4" class="form-control" name="ggcoin"
                        value="{{ old('ggcoin', $book?->ggcoin) }}" />
                    <label class="form-label" for="form6Example4">GGcoin</label>
                </div>
                <x-error name="ggcoin" />
            </div>

            <div class="col-3">
                <div class="form-outline">
                    <input type="number" id="form6Example4" class="form-control" name="publish"
                        value="{{ old('publish', $book?->publish) }}" />
                    <label class="form-label" for="form6Example4">Publish Year</label>
                </div>
                <x-error name="publish" />
            </div>
        </div>
        <div>

        </div>
        <!-- Message input -->
        <div class="mb-4">
            <div class="form-outline">
                <textarea class="form-control" id="form6Example7" rows="4" name="body">{{ old('body', $book?->body) }}</textarea>
                <label class="form-label" for="form6Example7">Body</label>
            </div>
            <x-error name="publish" />
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>

</div>
