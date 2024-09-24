<div class="col-md-12">
								<div class="call-to-action text-center">
									<form class="form-inline margin-clear">
										<div class="form-group has-feedback">
											<label class="sr-only" for="subscribe3">Email address</label>
											<input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" name="subscribe3" required="">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Subscribe <i class="fa fa-send"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- section end -->
			</div>
			<!-- banner end -->

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Federal Constituencies'), ['controller' => 'FederalConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Federal Constituency'), ['controller' => 'FederalConstituencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['controller' => 'SenatorialDistricts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['controller' => 'SenatorialDistricts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['controller' => 'StateConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Constituency'), ['controller' => 'StateConstituencies', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="states index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_no') ?></th>
            <th><?= $this->Paginator->sort('latitude') ?></th>
            <th><?= $this->Paginator->sort('longitude') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($states as $state): ?>
        <tr>
            <td><?= $this->Number->format($state->id_no) ?></td>
            <td><?= $state->latitude  ?></td>
            <td><?= $state->longitude ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $state->id_no]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $state->id_no]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $state->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id_no)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
<script type="text/javascript">
 /*function initialize(){
var center = new google.maps.LatLng(9.0543337, 7.3940348);
var options = {
  'zoom': 6,
  'center': center,
  'mapTypeId': google.maps.MapTypeId.TERRAIN
};

var map = new google.maps.Map(document.getElementById("mymap"), options);

var markers = [];
<?php
 foreach ($states as $state){
 $lat=$state->latitude;
 $lon=$state->longitude;
 
 
 echo "latlng = new google.maps.LatLng($lat,$lon);
      var marker = new google.maps.Marker({position: latlng});
  markers.push(marker);";
  
 }
 
 ?>
var markerCluster = new MarkerClusterer(map, markers);

var bermudaTriangle;

  // Define the LatLng coordinates for the polygon's path.
  var triangleCoords = [
    new google.maps.LatLng(6.5421334, 3.528627),
    new google.maps.LatLng(6.808845, 5.1906016),
    new google.maps.LatLng(7.1449906, 3.6337636),
    new google.maps.LatLng(7.5293085, 4.5426569),
    new google.maps.LatLng(7.6698535, 5.357602),
    new google.maps.LatLng(8.1162035, 3.6162934)
  ];

  // Construct the polygon.
  bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });

  bermudaTriangle.setMap(map);
}*/

var keys = [];
var markerCluster = [];
var markers = new Object();
var map;


 function initialize(){
 var center = new google.maps.LatLng(9.0543337, 7.3940348);
 var mapProp = {
  center:center,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
 };
  map=new google.maps.Map(document.getElementById("mymap")
  ,mapProp);

 //styling cluster image..
 /* var clusterStyles = [
  {
    opt_textColor: 'black',
    url: 'images/cluster.png',
    height: 56,
    width: 55
  },
  {
     opt_textColor: 'black',
     url: 'images/cluster2.png',
     height: 53,
     width: 52
  }
  ];*/

  //cluster marker options..
  var mcOptions = {
            // gridSize: 16,
            //styles: clusterStyles,
            maxZoom: 15
             };
  //fetching lat long from data base
  <?php
 foreach ($states as $state){
 $lat=$state->latitude;
 $lon=$state->longitude;
 $states = $state->state;
  
echo "addmarker($lat,$lon,'$states');";
}
?>
  for(var k in markers) keys.push(k);
            for(var i = 0; i < keys.length; i++)
            {
                markerCluster[i] = new MarkerClusterer(map,      markers[keys[i]],mcOptions);
            }
 }
 
 function addmarker(lat, lng, desc)
 {
     var provnce;
     var mycenter = new google.maps.LatLng(lat,lng);
     var marker = new google.maps.Marker({
        position:mycenter,
        title:desc,
        //id: count++
        // animation:google.maps.Animation.BOUNCE
        });
    //clustering markers based on region..
    $.ajax({ url:'https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lng+'&sensor=true',
         async: false,
         success: function(data){
                        // console.log(data.results[0]);
                        // return;
             for (var i=0; i<data.results[0].address_components.length; i++)
             {
                 if (data.results[0].address_components[i].types[0] == "administrative_area_level_1") {
                         //this is the object for province
                         provnce = data.results[0].address_components[i]['long_name'];
                     }
             }
             provnce = provnce.split(" ",1);
             if(markers.hasOwnProperty(provnce))
             {
               markers[provnce].push(marker);
             }
             else
             {
               markers[provnce] = new Array();
               markers[provnce].push(marker);
             }
             // console.log(markers);
             }
         });
 }
    </script>