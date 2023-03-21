<div class="card">
                <div class="card-header">{{ __('Add task') }}</div>

                <form action="{{ route('add-task') }}" method="POST">

                            <div class="mb-3">
                                <label for="title" class="form-label">Task</label>
                                <input name="title" type="text" class="form-control" id="titleinput" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input name="description" type="textarea" class="form-control" id="descriptioninput" placeholder="description">
                            </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-success">Submit</button>
                    </div>

                </form>
            </div>