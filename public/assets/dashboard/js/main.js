$(document).ready(function() {
    $('.edit-category-btn').on('click', function() {
        var categoryId = $(this).data('id');
        var categoryName = $(this).data('name');
        var categoryStatus = $(this).data('status');
        var categoryImg = $(this).data('img');

        // Set the form action to the edit route
        $('#myModal form').attr('action', '/edit-category/' + categoryId);

        // Populate the modal input fields
        $('#myModal input[name="name"]').val(categoryName);
        $('#myModal select[name="status"]').val(categoryStatus);
        
        // Add image preview if needed
        if (categoryImg) {
            $('#myModal .modal-body').prepend('<img src="' + categoryImg + '" alt="Current Image" height="90px" width="90px" style="border-radius: 50%; margin-bottom: 10px;">');
        }
    });

    // Clear the image preview when modal is closed
    $('#myModal').on('hidden.bs.modal', function () {
        $('#myModal img').remove();
    });
    
    // Show dropdown menu on hover
    $('#dropdownWrapper').hover(function() {
        $('#dropdownMenu').stop(true, true).fadeIn(200);
    }, function() {
        $('#dropdownMenu').stop(true, true).fadeOut(200);
    }); 
 // collapse dropdown menu
    const accordion = document.querySelectorAll('.accordion-button');
    accordion.forEach((item)=>{
        $(item).click(function() {
            $(item).toggleClass('active');
        })
    });
    //show hide dashboard sidebar
    $('.bars-btn').click(function() {
        $('#aside').toggleClass('show');
    });

    //settings page
    $('#logo').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#preview-img').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(file);
        }

        
    });

    // rich text editor
    var quill = new Quill('#editor', {
        theme: 'snow'  });

        document.getElementById('input-img1').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        
        
        
});