<div id="galeria" class="galeria max-widht1">  
  <h1 class="title">
    galería
  </h1>
  <div class="instagram max-widht1" layout="row" ng-controller="instagramCTRL">
    <a ng-repeat="x in images|limitTo:9" href="{{x.permalink}}" class="image  wow fadeInLeft" target="_blank" style="background: url('{{x.media_url}}');">
      <div class="instagram-hover" layout="row" layout-align="center center">
        <i class="icon-insta"></i>
      </div>
    </a>
  </div>
  <a href='https://instagram.com/lidobeachclub' class="button wow fadeInUp">
    <span class="black">ver más</span>
  </a>
</div>