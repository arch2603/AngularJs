app.controller('InvoiceController', ['$scope', '$http', '$timeout', '$filter', function($scope, $http, $timeout, $filter) {

    getAllText();
    $scope.addTexts;

    $scope.totaltext;

    $scope.texttodisplay = "";

    $scope.bullettitle = "Issue Invoices";

    /*= {para: "<p>The Invoicing module allows you to manage all aspects of your Project and Job finances. Create and send invoices with your own letterhead or template, and managepayments all in the one place. " + "With customisation, this module allows for creation of RCTIs, and linking with 3rd party sites to grab the latest exchange rates and commodity prices. " + "With customisation, the invoicing module allows integration with MYOB through their 3rd party API. </p>"};*/

    //var addtexts = {para: totaltext}

    $scope.options = {
                        language: 'en',
                        allowedContent: true,
                        entities: true,
                        uiColor: '#c3dc06'
                        //CKEDITOR: disableAutoInline true;
    };

    $scope.sumoptions = {
        language: 'en',
        allowedContent: true,
        entities: true,
        uiColor: '#dadcb7'
        //CKEDITOR: disableAutoInline true;
    };

    $scope.onReady = function () {

    }

    //addText($scope.totaltext);


    $scope.IsVisible = false;
    $scope.isVisiblePara = true;
    $scope.statusname = "click to open";

    $scope.toggleEditor = function () {
        var outcome;
        //$scope.IsVisible = $scope.IsVisible ? false : true;
        $scope.isVisiblePara = $scope.isVisiblePara ? false : true;

        if($scope.IsVisible){
            //getAllText();
            $scope.IsVisible = !$scope.IsVisible;
            $scope.statusname = "click to open";
            outcome = "close";
            //console.log("line 44");
        }else{
            $scope.IsVisible = !$scope.IsVisible;
            $scope.statusname = "click to save";
            //console.log("line 48");
            outcome = "open";
        }
    };

   /* <li>Create and Manage RCTIs</li>
    <li>Automatically update with latest commodity prices and exchange rates with the option to override</li>
    <li>Manage payments</li>
    <li>Reports that can show upcoming payments, revenue generated per client / site / bin, etc...</li>*/

   /* *********Invoice Summary *************8 */

    $scope.IsSummary = true;
    $scope.IsTextEditor = false;

    //$scope.InvoiceTitle = "Issue Invoices";

    $scope.sumlist = [{invsummarytit:"Issue Invoices"},{summary:["3Create and Manage RCTIs","Automatically update with latest commodity prices and exchange rates with the option to override", "Manage payments", "Reports that can show upcoming payments, revenue generated per client / site / bin, etc..."]}];

    $scope.fileicon = "fa fa-file-text-o";

    $scope.toggleEditorInv = function()
    {
        $scope.IsSummary = $scope.IsSummary ? false : true;
        $scope.IsTextEditor = $scope.IsTextEditor ? false : true;

    }
    //$scope.onchange()
    function getAllText()
    {
        $scope.postdata = {};
        $scope.postdata.task = "getTexts";
        //var customers;
        $http.post('modules/invoice/interchange_inv.php', $scope.postdata).success(function (data) {
            $scope.totaltext = data;
            textToDisplay($scope.totaltext);
            console.log(data);

        }).error(function (data, status) {
            console.log('An error occurred');
        });

    };

    ("split the text by new lines", function () {
        var listinput = element(by.model('sumlist'));
        //var listinput = element(by.binding('sumlist | json'));
        //listinput.sendKeys('abc\ndef\nghi');
        expect(output.getText()),toContain('[\n  "abc",\n  "def",\n  "ghi"\n');

    });

    function textToDisplay(text)
    {
        var i;
        for(i = 0; i < text.length; i++)
        {
            $scope.texttodisplay += "" + text[i].text + " ";
        }
    };

    $scope.$on("ckeditor.ready", function (event) {

            $scope.isReady = true;
    });

    function addText(texts) {
        //console.log(customer);
        $scope.postdata = {}
        $scope.postdata.task = "addText";
        $scope.postdata.addtexts = texts;
        $http.post('modules/invoice/interchange_inv.php', $scope.postdata).success(function (data) {
            //console.log(data);

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    };

    $scope.postChanges = function(texts)
    {
        //console.log(customer);
        $scope.postdata = {}
        $scope.postdata.task = "postChange";
        $scope.postdata.addtexts = texts;
        $http.post('modules/invoice/interchange_inv.php', $scope.postdata).success(function (data) {
            console.log(data);

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    };

    $scope.updateInvoiceSummary = function(texts)
    {
        //console.log(customer);
        $scope.postdata = {}
        $scope.postdata.task = "upDateSumInv";
        $scope.postdata.addtexts = texts;
        $http.post('modules/invoice/interchange_index.php', $scope.postdata).success(function (data) {
            console.log(data);

        }).error(function (data, status) {
            console.log('An error occurred');
        });
    };

    jQuery(document).ready(function() {

    });


}]);