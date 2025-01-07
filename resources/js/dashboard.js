document.addEventListener('DOMContentLoaded', function () {
    // Initialize DataTable
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

        // Make an AJAX request to fetch the contact details
        $.ajax({
            url: `/contacts/${contactId}`, // Laravel route
            type: 'GET',
            success: function (data) {
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
            },
            error: function (xhr, status, error) {
                console.error('Error fetching contact details:', error);
                alert('Failed to fetch contact details.');
            }
        });
    }

    // Attach event listener for view buttons
    $('#contacts-table').on('click', '.view-message', function () {
        const contactId = $(this).data('id'); // Get the contact ID from the button
        handleViewMessage(contactId);
    });

    // Reattach event listener after DataTable redraw (on pagination)
    table.on('draw', function () {
        $('#contacts-table').on('click', '.view-message', function () {
            const contactId = $(this).data('id'); // Get the contact ID from the button
            handleViewMessage(contactId);
        });
    });
});
