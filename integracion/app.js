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
		angular.forEach($scope.posts, function(value, key) {
			
			$http.get(value._links['wp:featuredmedia'][0].href).success(function(response2){
				$scope.posts[key].imagesrc = response2.guid["rendered"];

				console.log("cat", $scope.posts[key].categories);
				$scope.posts[key].category = $scope.posts[key].categories[0];
				console.log("catcon:", $scope.posts[key].category);
				//return response2.guid["rendered"];
			});

		});
	});
}







});

app.filter('trustAsHtml',['$sce', function($sce) {
	return function(text) {
		return $sce.trustAsHtml(text);
	};
}]);
