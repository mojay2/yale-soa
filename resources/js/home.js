document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('postModal');

    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // The button that triggered the modal
        const postId = button.getAttribute('data-id'); // Get the post ID from data-id

        // Fetch the post data from the server using the post ID
        fetch(`/posts/${postId}`)
            .then(response => response.json())
            .then(post => {
                // Populate the modal with the post details
                document.getElementById('postTitle').innerText = post.title;
                document.getElementById('postBody').innerText = post.body;
            })
            .catch(error => {
                console.error('Error fetching post:', error);
            });
    });
});
