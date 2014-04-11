(function($, global) {
    var Cacoo = function(apiKey) {
        var apiBase = 'https://cacoo.com/api/v1/';
        return {
            diagram: function(id, success) {
                var url = apiBase + 'diagrams/' + id + '.json';
                return $.ajax({
                    'url': url,
                    'dataType': 'jsonp',
                    'cache': true,
                    'data': {
                        'apiKey': apiKey
                    },
                    'success': success
                });
            }
        };
    };
    global.Cacoo = Cacoo;

})(jQuery, window);