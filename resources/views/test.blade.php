      <div ng-controller="TypeHeadCtrl" ng-repeat="post in posts" class="panel panel-default"ng-show="$scope.searchresult">
      <div class="panel-body media">

        <div class="">
          <div class="">
            <p class="meta">by <% post.subject_name %></p>
            <p class="meta-comments"><% post.id %> comments</p>
          </div>
        </div>
      </div>
    </div>