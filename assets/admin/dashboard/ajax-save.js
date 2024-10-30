// For save loading text
function showLoadingText(button) {
    button.prop('disabled', true).html('Loading...');
    setTimeout(function() {
        button.prop('disabled', false).html('Save Changes');
    }, 1000);
}
// For show success toast msg
function showSuccessToast(message) {
    var toast = jQuery('<div class="success-toast"></div>').text(message);
    jQuery('.save-toast-message').html(toast);
    toast.css({
        'right': '-450px',
        'position': 'fixed',
        'top': '50px',
        'background': '#fff',
        'color': '#050335',
        'padding': '20px 50px',
        'border': '1px dashed #050335',
        'border-radius': '5px',
        'box-shadow': '0 4px 8px rgba(0,0,0,0.2)',
        'transition': 'right 0.5s ease-in-out',
        'font-size': '22px',
        'font-weight': '500' 
    });
    toast.animate({
        'right': '20px'
    }, 100);
    setTimeout(function() {
        toast.animate({
            'right': '-300px'
        }, 100, function() {
            toast.remove();
        });
    }, 1000);  // Adjust this value to control how long the toast stays visible
}
// For ajax datas
jQuery(document).ready(function($) {
    $(document).on('click', '#bwdtsk-save-settings', function(e) {
        e.preventDefault();
        var button = $(this);
        showLoadingText(button);
        var data = {
            action: 'bwdtsk_save_settings',
            security: bwdtsk_ajax_object.security
        };
        $('input[type="checkbox"]').each(function() {
            var checkboxName = $(this).attr('name');
            data[checkboxName] = $(this).is(':checked') ? 'on' : 'off';
        });

        $.ajax({
            url: bwdtsk_ajax_object.ajax_url,
            type: 'POST',
            data: data,
            success: function(response) {
                if (response.success) {
                    showSuccessToast('Settings Saved successfully!');
                } else {
                    alert('Error: ' + response.data.message);
                }
            },
            error: function(error) {
                console.log(error);
                alert('Error: Failed to save settings.');
            }
        });
    });
});
