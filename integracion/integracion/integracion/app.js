var app = angular.module('taragui2018', ['taragui2018']);
angular.module('taragui2018').controller('TaraguiCtrl', function ($scope,$http) {


//$scope.getProductsBySubId(1);


$scope.getBlogPosts = function(){
	$scope.posts = [];
	$http.get('http://taragui2018.ctrlztest.com.ar/integracion/getBlogPosts.php').success(function(response){
		console.log(response);
		console.log(response.data);
		$scope.posts = response.data;
	});
}

$scope.getBlogPostsFromWordpress = function(){
	$scope.posts = [];
	$http.get('https://2018.taragui.com/wp-json/wp/v2/posts?per_page=10').success(function(response){
		console.log(response);
		
		$scope.posts = response;
	});
}




});

 app.filter('trustAsHtml',['$sce', function($sce) {
    return function(text) {
      return $sce.trustAsHtml(text);
    };
  }]);
