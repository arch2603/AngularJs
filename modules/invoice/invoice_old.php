<div id="invoicingmodule" class="paddingtop80 paddingbottom80 lightgreyg" ng-controller="InvoiceController">
    <div class="contentwrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="sectionheading">Invoicing Modules</h2>
                    <div ng-show="isVisiblePara">
                        <p ng-bind-html="texttodisplay" ></p>
                    </div>


                    <a href="" ng-click="showHideTA()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        click to edit</a>

                    <div ng-show="IsVisible">
                         <textarea ckeditor="options" ng-model="texttodisplay" ng-change="postChanges(texttodisplay)">

                         </textarea>
                        <br>
                       <!-- <button type="button" ng-click="showTextArea()"><span class="glyphicons glyphicons-duplicate"></span>Submit</button>-->
                        <!-- ckeditor="options"-->
                    </div>




                    <div class="featurestep stepred">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-2 col-sm-3 iconcol">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                </div>

                                <div class="col-md-10 col-sm-9 contentcol">
                                    <h3>Issue Invoices</h3>
                                    <ul>
                                        <li>Create and Manage RCTIs</li>
                                        <li>Automatically update with latest commodity prices and exchange rates with the option to override</li>
                                        <li>Manage payments</li>
                                        <li>Reports that can show upcoming payments, revenue generated per client / site / bin, etc...</li>
                                    </ul>
                                </div>

                            </div><!-- .row -->
                        </div>
                    </div><!-- . featurestep -->











                </div><!-- .col-sm-12 -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .contentwrap -->
</div><!-- #invoicingmodule -->
