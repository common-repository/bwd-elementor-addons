jQuery(document).ready(function($) {
    function handleElementorAction(action, button, nonce, successMessage) {
        button.prop('disabled', true).text(action === 'install' ? 'Installing...' : 'Activating...');
        
        $.ajax({
            url: bwdeb_es_ajax.ajax_url,
            type: 'post',
            data: {
                action: action === 'install' ? 'bwdeb_install_elementor' : 'bwdeb_activate_elementor',
                nonce: nonce
            },
            success: function(response) {
                if (response.success) {
                    if (action === 'install') {
                        button.text('Elementor Installed').removeClass('button-primary').addClass('button-success');
                        
                        // Replace the Install button with the Activate button
                        button.replaceWith('<button id="bwdeb-activate-elementor" class="button-primary">Activate Elementor</button>');
                    } else {
                        button.text('Elementor Activated').removeClass('button-primary').addClass('button-success');
                        $('.notice-warning').removeClass('notice-warning').addClass('notice-success').find('p').first().text('Elementor has been successfully activated.');
                    }
                } else {
                    button.prop('disabled', false).text(action === 'install' ? 'Install Elementor' : 'Activate Elementor');
                    alert(response.data.message);
                }
            },
            error: function() {
                button.prop('disabled', false).text(action === 'install' ? 'Install Elementor' : 'Activate Elementor');
                alert('An error occurred. Please try again.');
            }
        });
    }

    $('#bwdeb-install-elementor').on('click', function(e) {
        e.preventDefault();
        handleElementorAction('install', $(this), bwdeb_es_ajax.install_nonce, 'Elementor Installed');
    });

    $(document).on('click', '#bwdeb-activate-elementor', function(e) {
        e.preventDefault();
        handleElementorAction('activate', $(this), bwdeb_es_ajax.activate_nonce, 'Elementor Activated');
    });
});
