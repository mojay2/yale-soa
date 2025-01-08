    <!-- View post modal -->
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModalLabel">Post Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 id="postTitle"></h3>
                    <p id="postBody"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Post submit modal -->
    <div class="modal fade" id="submitPostModal" tabindex="-1" aria-labelledby="submitPostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-4">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="submitPostModalLabel">Submit a New Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Please note that all posts are subject to approval before being published. The
                        review process typically takes 1-3 business days. Thank you for your patience!</p>

                    <form action="{{ route('post.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Post Body</label>
                            <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
