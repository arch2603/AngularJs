<div id="invoicingmodule" class="paddingtop80 paddingbottom80 lightgreyg" ng-controller="InvoiceController">
    <div class="contentwrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div id="invdesc">
                        <h2 class="sectionheading">Invoicing Modules</h2>
                        <div ng-show="isVisiblePara" ng-bind-html="texttodisplay" class="col-sm-12">
                        </div>
                        <a href="" ng-model="statusname" ng-click="toggleEditor()" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{statusname}}</a>

                        <div ng-show="IsVisible">
                         <textarea ckeditor="options" ng-model="texttodisplay" ng-change="postChanges(texttodisplay)">

                         </textarea>
                            <!-- <button type="button" ng-click="showTextArea()"><span class="glyphicons glyphicons-duplicate"></span>Submit</button>-->
                            <!-- ckeditor="options"-->
                        </div>
                    </div>

                    <div class="featurestep stepred">
                        <div class="container-fluid">
                            <div class="row">
                                <div>
                                    <div ng-show="IsSummary">
                                        <div class="col-md-2 col-sm-3 iconcol">
                                            <i class={{fileicon}} aria-hidden="true"></i>
                                        </div>

                                        <div class="col-md-10 col-sm-9 contentcol" ">
                                            <h3 ng-model="sumlist" ng-bind="sumlist.invsummarytit"></h3>
                                            <div >
                                                <ul>
                                                    <li ng-repeat="mylst in sumlist.summary" ng-bind-html="mylst">
                                                    </li>
                                                  </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div ng-show="IsTextEditor">
                                         <textarea ckeditor="sumoptions" ng-model="sumlist.invsummarytit" ng-list>

                                         </textarea>
                                        <br>
                                        <!-- <button type="button" ng-click="showTextArea()"><span class="glyphicons glyphicons-duplicate"></span>Submit</button>-->
                                        <!-- ckeditor="options"-->
                                    </div>
                                </div>

                            </div><!-- .row -->

                        </div>
                    </div><!-- . featurestep -->
                    <a href="" ng-click="toggleEditorInv()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        edit</a>










                </div><!-- .col-sm-12 -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .contentwrap -->
</div><!-- #invoicingmodule -->
