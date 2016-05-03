(function () {
    var app;
    $(document).ready(function () {
        return app.init();
    });
    app = {
        can_delete: false,
        can_delete_id: 0,
        init: function () {
            return this.bind_events();
        },
        bind_events: function () {
            $(document).on('click', '.tag_form .tag', function (e) {
                var index;
                index = $(this).index() + 1;
                return app.delete_tag(index);
            });
            return $(document).on('keyup', '.tag_form input', function (e) {
                var key;
                key = e.keyCode || e.which;
                if (key === 13 || key === 32 || key === 188) {
                    app.add_tag($(this).val().replace(',', ''));
                    return $(this).val('');
                } else if (key === 8) {
                    if ($(this).val() === '') {
                        return app.delete_tag();
                    }
                } else {
                    app.can_delete = false;
                    return $('.highlight').removeClass('highlight');
                }
            });
        },
        delete_tag: function (id) {
            if (id == null) {
                id = 0;
            }
            if (this.can_delete && id === this.can_delete_id) {
                $('.tag_form .tag.highlight').remove();
                this.can_delete = false;
                return this.can_delete_id = 0;
            } else {
                $('.tag_form .tag').removeClass('highlight');
                this.can_delete = true;
                if (!id) {
                    $('.tag_form .tag:last-of-type').addClass('highlight');
                    return this.can_delete_id = 0;
                } else {
                    $('.tag_form .tag:nth-of-type(' + id + ')').addClass('highlight');
                    return this.can_delete_id = id;
                }
            }
        },
        add_tag: function (name) {
            if (name !== '') {
                return $('.tag_form input').before('<div class=\'tag\'>'+ name + '</div>');
            }
        }
    };
}.call(this));