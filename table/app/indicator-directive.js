angular.module('app').directive('indicator', function () {
    function link(scope, element, attrs) {
        var normal = attrs.normal;
        var value = attrs.value;
        var delimiter = normal / 10;
        scope.diff = value - normal;
        scope.pieces = Math.ceil(value / delimiter) % 10;
        if (scope.pieces === 0)
            element.addClass('empty');
        else if (scope.diff < 0)
            element.addClass('deficit');
        else
            element.addClass('excess');
        scope.value = value;
        scope.categoryName = attrs.categoryName;
    }

    return {
        link: link,
        restrict: 'AE',
        scope: {},
        templateUrl: APP_DIR + '/indicator-directive.html'
    }
});