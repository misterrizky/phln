<a href="javascript:;" onclick="load_list(1);" class="button button-rounded button-reveal button-mini button-white button-light float-end">
    <i class="icon-line-arrow-left"></i>
    <span>Kembali</span>
</a>
<h3>
    Peta Sebaran Pelaksanaan PHLN di Lingkungan Ditjen Cipta Karya
</h3>
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("sebaran", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_indonesiaHigh;

// Set projection
chart.projection = new am4maps.projections.Miller();
chart.zoomControl = new am4maps.ZoomControl();
var interfaceColors = new am4core.InterfaceColorSet();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0).lighten(0.5);

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.data = [ {
    "latitude": 4.673135, 
    "longitude": 96.699994,
    "label": "NAD",
    "labelShiftY": 2,
    "title": "N.A.D",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude": 3.577366,  
    "longitude": 98.655561,
    "label": "Sumatera Utara",
    "labelShiftY": 2,
    "title": "Sumatera Utara",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude": -0.944327, 
    "longitude": 100.423528,
    "label": "Sumatera Barat",
    "labelShiftY": 2,
    "title": "Sumatera Barat",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":  0.91667,
    "longitude":  104.45,
    "label": "Kepulauan Riau",
    "labelShiftY": 2,
    "title": "Kepulauan Riau",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR> ->Engineering Service for Water Supply Development Project"
},
{
    "latitude": -2.12914,
    "longitude": 106.11377,
    "label": "Bangka Belitung",
    "labelShiftY": 2,
    "title": "Bangka Belitung",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR> ->Engineering Service for Water Supply Development Project"
},

{
    "latitude":  0.618865,
    "longitude":  101.402143,
    "label": "Riau",
    "labelShiftY": 2,
    "title": "Riau",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR> ->Engineering Service for Water Supply Development Project"
},
{
    "latitude": -2.906487, 
    "longitude":  104.752973,
    "label": "Sumatera Selatan",
    "labelShiftY": 2,
    "title": "Sumatera Selatan",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude": -1.457382, 
    "longitude":  103.599409,
    "label": "Jambi",
    "labelShiftY": 2,
    "title": "Jambi",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude": -3.553647,
    "longitude":  102.401899 ,
    "label": "Bengkulu",
    "labelShiftY": 2,
    "title": "Bengkulu",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project<BR> ->Engineering Service for Water Supply Development Project"
},
{
    "latitude": -4.528987, 
    "longitude": 105.379194,
    "label": "Lampung",
    "labelShiftY": 2,
    "title": "Lampung",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude": -6.431781,  
    "longitude": 105.994428,
    "label": "Banten",
    "labelShiftY": 2,
    "title": "Banten",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project<BR> ->Engineering Service for Water Supply Development Project"
},
{
    "latitude": -6.158779, 
    "longitude": 106.818403,
    "label": "DKI Jakarta",
    "labelShiftY": 2,
    "title": "DKI Jakarta",
    "description": "-> Pamsimas <br>-> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR>-> ENGINEERING SERVICE FOR SANITATION IMPROVEMENT PROJECT<BR> ->Engineering Service for Water Supply Development Project <BR> ->Small Scale Water Treatment Plants for Emergency Relief"
},
{
    "latitude": -6.911904,  
    "longitude": 107.609418,
    "label": "Jawa Barat",
    "labelShiftY": 2,
    "title": "Jawa Barat",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project<BR> -> Engineering Service for Sanitation Improvement Project<BR> ->Engineering Service for Water Supply Development Project"
},
{
    "latitude":-6.911904, 
    "longitude": 110.531782,
    "label": "Jawa Tengah",
    "labelShiftY": 2,
    "title": "Jawa Tengah",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-7.78278, 
    "longitude": 110.36083,
    "label": "D.I Yogyakarta",
    "labelShiftY": 2,
    "title": "D.I Yogyakarta",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},

    {
    "latitude":-7.249882, 
    "longitude": 112.740033,
    "label": "Jawa Timur",
    "labelShiftY": 2,
    "title": "Jawa Timur",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-8.555692, 
    "longitude": 115.442670,
    "label": "Bali",
    "labelShiftY": 2,
    "title": "Bali",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-8.686038,  
    "longitude": 117.222455,
    "label": "NTB",
    "labelShiftY": 2,
    "title": "NTB",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":0.031109, 
    "longitude": 109.257368,
    "label": "Kalimantan Barat",
    "labelShiftY": 2,
    "title": "Kalimantan Barat",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-3.279477, 
    "longitude": 114.970258,
    "label": "Kalimantan Selatan",
    "labelShiftY": 2,
    "title": "Kalimantan Selatan",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-0.600594, 
    "longitude": 117.035688 ,
    "label": "Kalimantan Timur",
    "labelShiftY": 2,
    "title": "Kalimantan Timur",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":3.388202, 
    "longitude": 117.557538,
    "label": "Kalimantan Utara",
    "labelShiftY": 2,
    "title": "Kalimantan Utara",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-2.401660,  
    "longitude": 113.921064,
    "label": "Kalimantan Tengah",
    "labelShiftY": 2,
    "title": "Kalimantan Tengah",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-5.010710, 
    "longitude": 119.611982,
    "label": "Sulawesi Selatan",
    "labelShiftY": 2,
    "title": "Sulawesi Selatan",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-0.688479,  
    "longitude": 119.897626,
    "label": "Sulawesi Tengah",
    "labelShiftY": 2,
    "title": "Sulawesi Tengah",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-2.962718, 
    "longitude": 119.367536,
    "label": "Sulawesi Barat",
    "labelShiftY": 2,
    "title": "Sulawesi Barat",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":0.5412, 
    "longitude": 123.0595,
    "label": "Gorontalo",
    "labelShiftY": 2,
    "title": "Gorontalo",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR>-> Engineering Service for Sanitation Improvement Project"
},

{
    "latitude":1.48218, 
    "longitude": 124.84892,
    "label": "Sulawesi Utara",
    "labelShiftY": 2,
    "title": "Sulawesi Utara",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR>-> Engineering Service for Sanitation Improvement Project"
},
{
    "latitude":-3.912685, 
    "longitude": 122.476667,
    "label": "Sulawesi Tenggara",
    "labelShiftY": 2,
    "title": "Sulawesi Tenggara",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR>-> Engineering Service for Sanitation Improvement Project"
},
{
    "latitude":-10.175788, 
    "longitude": 123.607163,
    "label": "NTT",
    "labelShiftY": 2,
    "title": "NTT",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":-3.897145, 
    "longitude": 128.361559 ,
    "label": "Maluku",
    "labelShiftY": 2,
    "title": "Maluku",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},
{
    "latitude":0.79065, 
    "longitude": 127.38424,
    "label": "Maluku Utara",
    "labelShiftY": 2,
    "title": "Maluku Utara",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project <BR>-> Engineering Service for Sanitation Improvement Project"
},
{
    "latitude":-2.591602, 
    "longitude": 140.6690,
    "label": "Papua",
    "labelShiftY": 2,
    "title": "Papua",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
},


{
    "latitude":-0.758041, 
    "longitude": 134.118395,
    "label": "Papua Barat",
    "labelShiftY": 2,
    "title": "Papua Barat",
    "description": "-> Pamsimas <br> -> IKK Water Supply <br> -> National Slum Upgrading <BR> -> Integrated Participatory Development and Management of Irigation Project"
}, ];

// add events to recalculate map position when the map is moved or zoomed
chart.events.on( "ready", updateCustomMarkers );
chart.events.on( "mappositionchanged", updateCustomMarkers );

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers( event ) {
  
  // go through all of the images
  imageSeries.mapImages.each(function(image) {
    // check if it has corresponding HTML element
    if (!image.dummyData || !image.dummyData.externalElement) {
      // create onex
      image.dummyData = {
        externalElement: createCustomMarker(image)
      };
    }

    // reposition the element accoridng to coordinates
    var xy = chart.geoPointToSVG( { longitude: image.longitude, latitude: image.latitude } );
    image.dummyData.externalElement.style.top = xy.y + 'px';
    image.dummyData.externalElement.style.left = xy.x + 'px';
  });

}

// this function creates and returns a new marker element
function createCustomMarker( image ) {
  
  var chart = image.dataItem.component.chart;

  // create holder
  var holder = document.createElement( 'div' );
  holder.className = 'map-marker';
  holder.title = image.dataItem.dataContext.title;
  holder.style.position = 'absolute';

  // maybe add a link to it?
  if ( undefined != image.url ) {
    holder.onclick = function() {
      window.location.href = image.url;
    };
    holder.className += ' map-clickable';
  }

  // create dot
  var dot = document.createElement( 'div' );
  dot.className = 'dot';
  holder.appendChild( dot );

  // create pulse
  var pulse = document.createElement( 'div' );
  pulse.className = 'pulse';
  holder.appendChild( pulse );

  // append the marker to the map container
  chart.svgContainer.htmlElement.appendChild( holder );

  return holder;
}

}); // end am4core.ready()
</script>
<div id="sebaran" class="content_grafik"></div>