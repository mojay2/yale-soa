document.addEventListener('DOMContentLoaded', function () {
    // Initialize DataTable for Contacts
    var table = $('#contacts-table').DataTable({
        responsive: true,
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Function to handle the view message action
    function handleViewMessage(contactId) {
        // Reset modal fields before fetching new data
        $('#modalFirstName').text('');
        $('#modalLastName').text('');
        $('#modalEmail').text('');
        $('#modalContactNumber').text('');
        $('#modalSubject').text('');
        $('#modalMessage').text('');

        console.log('Fetching contact with ID:', contactId);

        // Make a fetch request to fetch the contact details
        fetch(`/contacts/${contactId}`, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Contact data received:', data);

            if (data && data.first_name && data.last_name && data.email) {
                $('#modalFirstName').text(data.first_name);
                $('#modalLastName').text(data.last_name);
                $('#modalEmail').text(data.email);
                $('#modalContactNumber').text(data.contact_number);
                $('#modalSubject').text(data.subject);
                $('#modalMessage').text(data.message);
            } else {
                console.error('Missing expected data fields:', data);
                alert('Contact data is missing or invalid.');
            }
        })
        .catch(error => {
            console.error('Error fetching contact details:', error);
            alert('Failed to fetch contact details.');
        });
    }

    $('#contacts-table').on('click', '.view-message', function () {
        const contactId = $(this).data('id');
        handleViewMessage(contactId);
    });

    table.on('draw', function () {
        $('#contacts-table').on('click', '.view-message', function () {
            const contactId = $(this).data('id');
            handleViewMessage(contactId);
        });
    });
});


// document.addEventListener('DOMContentLoaded', function () {
//     // Initialize DataTable
//     var table = $('#posts-table').DataTable({
//         responsive: true,
//     });

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     function handleViewPost(postId) {
//         // Reset modal fields before fetching new data
//         $('#modalFirstNamePosts').text('');
//         $('#modalLastNamePosts').text('');
//         $('#modalTitle').text('');
//         $('#modalBody').text('');

//         console.log('Fetching post with ID:', postId);

//         // Make a fetch request to fetch the post details
//         fetch(`/posts/${postId}`, {
//             method: 'GET',
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             console.log('Post data received:', data);

//             if (data && data.first_name && data.last_name && data.title) {
//                 $('#modalFirstNamePosts').text(data.first_name);
//                 $('#modalLastNamePosts').text(data.last_name);
//                 $('#modalTitle').text(data.title);
//                 $('#modalBody').text(data.body);
//             } else {
//                 console.error('Missing expected data fields:', data);
//                 alert('Post data is missing or invalid.');
//             }
//         })
//         .catch(error => {
//             console.error('Error fetching post details:', error);
//             alert('Failed to fetch post details.');
//         });
//     }

//     $('#posts-table').on('click', '.view-post', function () {
//         const postId = $(this).data('id');
//         handleViewPost(postId);
//     });

//     table.on('draw', function () {
//         $('#posts-table').on('click', '.view-post', function () {
//             const postId = $(this).data('id');
//             handleViewPost(postId);
//         });
//     });

// });


// // TODO: aksdjfljalsdkfjkla


// document.addEventListener('DOMContentLoaded', function () {
//     document.querySelectorAll('.change-status').forEach(function (button) {
//         button.addEventListener('click', function () {
//             var postId = button.getAttribute('data-id');
//             document.getElementById('statusModal').dataset.postId = postId; // Save post ID in modal data attribute
//         });
//     });

//     document.getElementById('saveStatus').addEventListener('click', function () {
//         var postId = document.getElementById('statusModal').dataset.postId;
//         var status = document.getElementById('statusDropdown').value;

//         fetch(`/posts/${postId}/status`, {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//             },
//             body: JSON.stringify({
//                 status: status
//             })
//         })
//         .then(response => response.json())
//         .then(data => {
//             alert(data.message);
//             location.reload(); // Reload the page to reflect the status update
//         })
//         .catch(error => {
//             alert('An error occurred while updating the status.');
//             console.error(error);
//         });
//     });

//     document.querySelectorAll('.archive-post').forEach(function (button) {
//         button.addEventListener('click', function () {
//             var postId = button.getAttribute('data-id');
//             document.getElementById('archiveModal').dataset.postId = postId; // Save post ID in modal data attribute
//         });
//     });

//     document.getElementById('archiveConfirm').addEventListener('click', function () {
//         var postId = document.getElementById('archiveModal').dataset.postId;

//         fetch(`/posts/${postId}/archive`, {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             alert(data.message);
//             location.reload();
//         })
//         .catch(error => {
//             alert('An error occurred while archiving the post.');
//             console.error(error);
//         });
//     });
// });


document.addEventListener('DOMContentLoaded', function () {
        var table = $('#posts-table').DataTable({
        responsive: true,
    });

    // Function to handle 'view post' modal
    function handleViewPost(postId) {
        // Reset modal fields before fetching new data
        $('#modalFirstNamePosts').text('');
        $('#modalLastNamePosts').text('');
        $('#modalTitle').text('');
        $('#modalBody').text('');

        console.log('Fetching post with ID:', postId);

        // Fetch post details
        fetch(`/posts/${postId}`, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Post data received:', data);

            if (data && data.first_name && data.last_name && data.title) {
                $('#modalFirstNamePosts').text(data.first_name);
                $('#modalLastNamePosts').text(data.last_name);
                $('#modalTitle').text(data.title);
                $('#modalBody').text(data.body);
            } else {
                console.error('Missing expected data fields:', data);
                alert('Post data is missing or invalid.');
            }
        })
        .catch(error => {
            console.error('Error fetching post details:', error);
            alert('Failed to fetch post details.');
        });
    }

    // Function to handle 'change status' modal
    function handleChangeStatus(postId) {
        // Save the post ID to the modal for later use
        $('#statusModal').data('postId', postId);
    }

    // Function to handle 'archive post' modal
    function handleArchivePost(postId) {
        // Save the post ID to the modal for later use
        $('#archiveModal').data('postId', postId);
    }

    // Event delegation for pagination (for view, status, and archive buttons)
    $('#posts-table').on('click', '.view-post', function () {
        const postId = $(this).data('id');
        handleViewPost(postId);
    });

    $('#posts-table').on('click', '.change-status', function () {
        const postId = $(this).data('id');
        handleChangeStatus(postId);
    });

    $('#posts-table').on('click', '.archive-post', function () {
        const postId = $(this).data('id');
        handleArchivePost(postId);
    });

    // Handle status change submission
    $('#saveStatus').on('click', function () {
        const postId = $('#statusModal').data('postId');
        const status = $('#statusDropdown').val(); // Get selected status value

        // Make the fetch request to update status
        fetch(`/posts/${postId}/status`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ status })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Post status updated successfully.');
                $('#statusModal').modal('hide');
                location.reload(); // Reload the page to reflect changes (or update the UI accordingly)
            } else {
                alert('Failed to update status.');
            }
        })
        .catch(error => {
            console.error('Error updating status:', error);
            alert('Error updating status.');
        });
    });

    // Handle archive post submission
    $('#archiveConfirm').on('click', function () {
        const postId = $('#archiveModal').data('postId');

        // Make the fetch request to archive the post
        fetch(`/posts/${postId}/archive`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Post archived successfully.');
                $('#archiveModal').modal('hide');
                location.reload(); // Reload the page to reflect changes (or update the UI accordingly)
            } else {
                alert('Failed to archive post.');
            }
        })
        .catch(error => {
            console.error('Error archiving post:', error);
            alert('Error archiving post.');
        });
    });

    // Re-attach event listeners after table draw (for dynamic content like pagination)
    table.on('draw', function () {
        $('#posts-table').on('click', '.view-post', function () {
            const postId = $(this).data('id');
            handleViewPost(postId);
        });

        $('#posts-table').on('click', '.change-status', function () {
            const postId = $(this).data('id');
            handleChangeStatus(postId);
        });

        $('#posts-table').on('click', '.archive-post', function () {
            const postId = $(this).data('id');
            handleArchivePost(postId);
        });
    });
});
