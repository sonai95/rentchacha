var myapp=angular.module("mymodule",['ngRoute']).config(function($routeProvider){
	$routeProvider.when('/sm',{templateUrl:'Template/sm.html',controller:'suvadeep'})
				  .when('/dm',{templateUrl:'Template/dm.html',controller:'diptonil'})
				  .when('/or',{templateUrl:'Template/or.html',controller:'other'})
}
	).controller("mycontroller",function($scope){
	$scope.search=function(input){
		if(!input){
			return input;
		}
		var output="";
		var i;
		for(i=0;i<input.length;i++){
			if(i>0 && input[i]==input[i].toUpperCase()){
				output=output + " ";
			}
			output=output+input[i];
		}
		$scope.output=output;
	}
	
});
