<!-- Edit Modal -->
@foreach ($skill as $item)
    <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit skill</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/skill/' . $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="skill">Skill</label>
                                <textarea class="form-control" name="skill" required>{{ $item->skill }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="skill_description">Skill Description</label>
                                <textarea class="form-control" name="skill_description" required>{{ $item->skill_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="icon">icon</label>
                                <input type="file" class="form-control-file" name="icon">
                                <br>
                                <img src="{{ asset($item->icon) }}" style="width:64px">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
