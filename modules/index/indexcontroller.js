app.controller('index', ['$scope', '$http', '$timeout', function($scope, $http, $timeout) {

    /*$scope.isinputshow = false;
    $scope.isdocedit = false;*/


    $scope.isclose = false;

    var click_to_change = "click to edit"

    var change_back = "click to save";

    var company_title = "";

    var document_title = "";

    var author = "";

    var documentid = "";

    var revision_number = "";

    var h_id = "";

    $scope.comtitle = "";

    $scope.doc_id = "";

    $scope.auth = "";
    //
    $scope.title = "";

    $scope.rev_number="";

    $scope.date_revise="";

    //console.log($scope.date);

   var newchanges =[{com: ""}, {tit:""}, {auth:""}, {docid:""}, {rev_num: ""}];


   $scope.togglename = click_to_change;



    //to toggle the editor by opening and closing it
    $scope.showEditor = function () {
        var outcome;
        //$scope.IsVisible = $scope.IsVisible ? false : true;
        //$scope.isVisiblePara = $scope.isVisiblePara ? false : true;

        if($scope.isclose){
            //getAllText();
            $scope.isclose = !$scope.isclose;
            $scope.togglename = click_to_change;
        }else{
            $scope.isclose = !$scope.isclose;
            $scope.togglename = change_back;
        }
    };

    //updating the database with the new information fed from the form
    //updateDatabase();



    /* Update the database with changes from the document header*/
    function updateDatabase()
    {
        $scope.postdata = {}
        $scope.postdata.task = "upDate";
        $scope.postdata.updates = newchanges;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            console.log(data);

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    };
    getDataFromDatabase();
    /*Acquire all the information from the header table in the database*/
    function getDataFromDatabase()
    {
        $scope.postdata = {}
        $scope.postdata.task = "fetchAllData";
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            processData(data);
            //console.log(fetchallfromdb);
            //console.log(" " + "line 92 " + " ");

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    };

    function processData(data) {
        var i;
        //console.log(data);
        console.log(data);
        for(i = 0; i < data.length; i++){

            $scope.comtitle = data[i].company_name;
            $scope.doc_id = data[0].doc_id;
            $scope.auth = data[0].author;
            $scope.title = data[0].title;
            $scope.rev_number = data[0].revision_num;
            $scope.date_revise = data[0].date_revise;
            h_id = data[0].h_id;

            console.log($scope.comtitle);
        }
        //console.log($scope.comtitle);
    };

   /* $scope.updateHeaderInformation = function (comp_title, proj_title, auth, doc_id, rev_num) {
        company_title = comp_title;
        document_title = proj_title;
        author = auth;
        documentid = doc_id;
        revision_number = rev_num;
        console.log(comp_title);
    }*/



    $scope.updateDatabaseComTtitle = function(details) {

        var updatedata = {ID: h_id, CompTitle: details};
        $scope.postdata = {}
        $scope.postdata.task = "UpdateCompTitle";
        $scope.postdata.updates = updatedata;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            //console.log(data);
            //console.log("line 134");
            getDataFromDatabase();

        }).error(function (data, status) {

            console.log('An error occurred');
        });
        //console.log(details);

    };

    $scope.updateProjectTitle = function(details){
        var updatedata = {id: h_id, proj_title: details};
        $scope.postdata = {}
        $scope.postdata.task = "UpdatePropTitle";
        $scope.postdata.updates = updatedata;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            //console.log(data);
            getDataFromDatabase();
            console.log("line 134");

        }).error(function (data, status) {
            console.log('An error occurred');
        });
        //console.log(details);
    };

    $scope.updateDatabaseAuthorName = function(details){
        var updatedata = {id: h_id, prop_author: details};
        $scope.postdata = {}
        $scope.postdata.task = "UpdateAuthor";
        $scope.postdata.updates = updatedata;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            //console.log(data);
            getDataFromDatabase();
            console.log("line 134");

        }).error(function (data, status) {
            console.log('An error occurred');
        });
        //console.log(details);
    };

    $scope.updateDatabaseDocID = function(details){
        var updatedata = {id: h_id, doc_id: details};
        $scope.postdata = {}
        $scope.postdata.task = "UpdateDocId";
        $scope.postdata.updates = updatedata;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            //console.log(data);
            getDataFromDatabase();
            //console.log("line 134");

        }).error(function (data, status) {
            console.log('An error occurred');
        });
        //console.log(details);
    };

    $scope.updateRevNum = function(details){
        //console.log(details);
        var updatedata = {id: h_id, r_num: details};
        $scope.postdata = {}
        $scope.postdata.task = "UpdateRevNum";
        $scope.postdata.updates = updatedata;
        $http.post('modules/index/interchange_index.php', $scope.postdata).success(function (data) {
            //console.log(data);
            getDataFromDatabase();
            //console.log("line 134");

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    }
    /*

     $scope.sendFeedback = function(feedback) {
     $scope.postdata = {};
     $scope.postdata.task = "sendFeedback";
     $scope.postdata.feedback = feedback;
     $http.post('interchange.php', $scope.postdata).success(function (data) {
     console.log(data);
     console.log("feed me seymour");
     $("#feedbackmodal").modal("hide");
     }).error(function (data, status) {
     console.log('An error occurred');
     });
     };

     $scope.acceptProposal = function(TheName, TheDate, ThePosition, estimatorApp) {
     $scope.postdata = {};
     $scope.postdata.task = "acceptProposal";
     $scope.postdata.TheName = TheName;
     $scope.postdata.TheDate = TheDate;
     $scope.postdata.ThePosition = ThePosition;
     $scope.postdata.estimatorApp = estimatorApp;
     $http.post('interchange.php', $scope.postdata).success(function (data) {
     console.log(data);
     $scope.showAcceptAlert = 'true';
     }).error(function (data, status) {
     console.log('An error occurred');
     });
     };

     $scope.rejectProposal = function(TheName, TheDate, ThePosition, estimatorApp) {
     $scope.postdata = {};
     $scope.postdata.task = "rejectProposal";
     $http.post('interchange.php', $scope.postdata).success(function (data) {
     console.log(data);
     $scope.showRejectAlert = 'true';
     }).error(function (data, status) {
     console.log('An error occurred');
     });
     };

     $scope.hiThere = function() {
     $scope.postdata = {};
     $scope.postdata.task = "hello";
     $http.post('interchange.php', $scope.postdata).success(function (data) {
     console.log(data);
     }).error(function (data, status) {
     console.log('An error occurred');
     });
     };*/

}]);

jQuery(document).ready(function() {

});