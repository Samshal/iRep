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
        <li><?= $this->Html->link(__('New State Constituency'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="stateConstituencies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_no') ?></th>
            <th><?= $this->Paginator->sort('state_id') ?></th>
            <th><?= $this->Paginator->sort('state_constituency') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($stateConstituencies as $stateConstituency): ?>
        <tr>
            <td><?= $this->Number->format($stateConstituency->id_no) ?></td>
            <td>
                <?= $stateConstituency->has('state') ? $this->Html->link($stateConstituency->state->id_no, ['controller' => 'States', 'action' => 'view', $stateConstituency->state->id_no]) : '' ?>
            </td>
            <td><?= h($stateConstituency->state_constituency) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $stateConstituency->id_no]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateConstituency->id_no]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateConstituency->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $stateConstituency->id_no)]) ?>
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
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpLxNOc0tA36qKmAOV4_75lUf_5Ecb0pc">
    </script>
    <script type="text/javascript">
    var geocoder;
    var map;
    //var local_govt = {"local":[{"lg":"Amuwo Odofin"}, {"lg":"Surulere"}, {"lg":"Ikeja"}]};
   /* function loadJSON(callback) {   

        var xobj = new XMLHttpRequest();
            xobj.overrideMimeType("application/json");
        xobj.open('GET', 'states.json', true); // Replace 'my_data' with the path to your file
        xobj.onreadystatechange = function () {
              if (xobj.readyState == 4 && xobj.status == "200") {
                // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
                callback(xobj.responseText);
              }
        };
        xobj.send(null);  
     }*/

    
    
    function initialize() {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(9.0543337, 7.3940348);
      var mapOptions = {
        zoom: 6,
        center: latlng,
        'mapTypeId': google.maps.MapTypeId.ROADMAP
      }
      
      map = new google.maps.Map(document.getElementById("mymap"), mapOptions);
      <?
 $query = mysql_query("SELECT * FROM poi_example");
 while ($row = mysql_fetch_array($query)){
 $name=$row['name'];
 $lat=$row['lat'];
 $lon=$row['lon'];
 $desc=$row['desc'];
 echo ("addMarker($lat, $lon,'<b>$name</b><br/>$desc');\n");
 }
 ?>

     /* loadJSON(function(response) {
  		  // Parse JSON string into object
  		    var states = JSON.parse(response);

    		  var latitude = "";
    		  var longitude = "";
              for(var i= 0; i< states.states.length; i++){
                  latitude = states.states[i].latitude;
                  longitude = states.states[i].longitude;
                  latlng = new google.maps.LatLng(latitude, longitude);
      var marker = new google.maps.Marker({
          map: map,
          position: latlng
      });
              }
      });*/
      }

    </script>