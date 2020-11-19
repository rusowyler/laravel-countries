<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class AT_Austria extends Seeder 
{  
 
    /** 
    * Attribute that defines the language of countries 
    *  
    * @var string 
    */ 
    public $lang = 'en'; 
 
    /** 
    * Attribute that defines the language of countries 
    *  
    * @var string 
    */ 
    public $region = 'europe'; 
 
    /** 
    * Run the database seeds. 
    *  
    * @return void 
    */ 
    public function run() 
    {  
        $this->name = 'Austria'; 
        $this->official_name = 'Republic of Austria'; 
        $this->iso_alpha_2 = 'AT'; 
        $this->iso_alpha_3 = 'AUT'; 
        $this->iso_numeric = '40'; 
        $this->international_phone = '43'; 
 
        $this->languages = ["de"]; 
        $this->tld = [".at"]; 
        $this->wmo = 'OS'; 
        $this->geoname_id = '2782113'; 
 
        $this->emoji = [ 
            'img' => '🇦🇹', 
            'uCode' => 'U+1F1E6 U+1F1F9', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#ff0000', 
                '#ffffff', 
            ], 
            'rgb' => [ 
                '255,0,0', 
                '255,255,255', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '47 20 N', 
                'desc' => '47.58843994140625', 
            ], 
            'longitude' => [ 
                'classic' => '13 20 E', 
                'desc' => '14.14021110534668', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '49.016667', 
                'min' => '46.377222', 
            ], 
            'longitude' => [ 
                'max' => '19', 
                'min' => '1.2', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "at" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [13.833611, 48.773605],
            [13.858055, 48.770554],
            [13.88361, 48.763611],
            [13.99, 48.717773],
            [14.007221, 48.710274],
            [14.049166, 48.674721],
            [14.051388, 48.671944],
            [14.0525, 48.668327],
            [14.0525, 48.664162],
            [14.184166, 48.596107],
            [14.278332, 48.582497],
            [14.390276, 48.592499],
            [14.446388, 48.618889],
            [14.505554, 48.628326],
            [14.608889, 48.628883],
            [14.615, 48.628052],
            [14.652498, 48.609444],
            [14.656387, 48.607498],
            [14.70028, 48.581379],
            [14.704166, 48.583611],
            [14.706665, 48.586662],
            [14.718611, 48.602219],
            [14.720276, 48.605827],
            [14.721388, 48.643326],
            [14.715832, 48.652771],
            [14.714722, 48.660553],
            [14.722221, 48.684715],
            [14.72611, 48.69194],
            [14.730276, 48.698608],
            [14.812498, 48.781387],
            [14.815832, 48.783882],
            [14.830276, 48.787498],
            [14.836388, 48.787498],
            [14.849443, 48.786385],
            [14.885555, 48.782776],
            [14.958887, 48.794716],
            [14.984999, 48.939163],
            [14.978054, 48.973053],
            [14.978054, 48.977219],
            [14.98111, 48.984718],
            [14.996944, 49.0075],
            [15.011389, 49.015274],
            [15.025833, 49.018883],
            [15.031387, 49.018608],
            [15.065554, 49.014717],
            [15.156666, 48.999718],
            [15.301388, 48.987778],
            [15.353333, 48.985832],
            [15.364721, 48.983604],
            [15.3925, 48.97361],
            [15.451666, 48.951111],
            [15.509722, 48.921661],
            [15.519165, 48.918327],
            [15.546665, 48.912216],
            [15.564439, 48.909164],
            [15.584999, 48.899162],
            [15.683332, 48.864716],
            [15.68861, 48.863327],
            [15.746387, 48.858604],
            [15.849432, 48.859703],
            [15.964167, 48.804718],
            [16.021664, 48.777222],
            [16.060555, 48.760277],
            [16.081108, 48.754715],
            [16.103333, 48.75],
            [16.333054, 48.733055],
            [16.370552, 48.733887],
            [16.376389, 48.734444],
            [16.386387, 48.736382],
            [16.395275, 48.739441],
            [16.403332, 48.74305],
            [16.413055, 48.750549],
            [16.417774, 48.756943],
            [16.430832, 48.782219],
            [16.451664, 48.806389],
            [16.457497, 48.811943],
            [16.461941, 48.813332],
            [16.537498, 48.812775],
            [16.54361, 48.811943],
            [16.644997, 48.79055],
            [16.65583, 48.787773],
            [16.667221, 48.781387],
            [16.711666, 48.746384],
            [16.782776, 48.720551],
            [16.78833, 48.719162],
            [16.827221, 48.715828],
            [16.838608, 48.71666],
            [16.863052, 48.722221],
            [16.871944, 48.724998],
            [16.875832, 48.727219],
            [16.885277, 48.729439],
            [16.899719, 48.722221],
            [16.913055, 48.708885],
            [16.91861, 48.703331],
            [16.919998, 48.700272],
            [16.946182, 48.619064],
            [16.943333, 48.573326],
            [16.933331, 48.532776],
            [16.907497, 48.506943],
            [16.866943, 48.470276],
            [16.864441, 48.467216],
            [16.855831, 48.44944],
            [16.840275, 48.376389],
            [16.839996, 48.372215],
            [16.84222, 48.365273],
            [16.845276, 48.358604],
            [16.8475, 48.355827],
            [16.920555, 48.283882],
            [16.927219, 48.280273],
            [16.94972, 48.278049],
            [16.950832, 48.257774],
            [16.953888, 48.242775],
            [16.975277, 48.188332],
            [16.998016, 48.169701],
            [17.023331, 48.150276],
            [17.03075, 48.145859],
            [17.040051, 48.142464],
            [17.069145, 48.135265],
            [17.081108, 48.088333],
            [17.116665, 48.038605],
            [17.166386, 48.012497],
            [17.146942, 48],
            [17.108055, 47.971382],
            [17.060555, 47.876938],
            [17.054443, 47.847221],
            [17.054996, 47.799721],
            [17.058609, 47.789444],
            [17.068607, 47.768326],
            [17.071663, 47.728607],
            [17.053886, 47.709442],
            [16.955276, 47.694717],
            [16.910831, 47.690826],
            [16.824444, 47.683884],
            [16.768608, 47.684715],
            [16.761944, 47.685272],
            [16.7575, 47.686943],
            [16.737221, 47.700829],
            [16.734444, 47.703331],
            [16.729164, 47.713051],
            [16.725555, 47.727493],
            [16.723331, 47.730553],
            [16.715832, 47.734718],
            [16.635555, 47.760277],
            [16.612221, 47.759163],
            [16.561386, 47.75666],
            [16.555832, 47.756104],
            [16.450554, 47.698051],
            [16.426941, 47.671387],
            [16.425831, 47.668327],
            [16.429443, 47.666107],
            [16.44833, 47.659721],
            [16.493053, 47.64666],
            [16.590832, 47.629166],
            [16.602497, 47.628609],
            [16.624722, 47.635826],
            [16.630833, 47.635826],
            [16.636665, 47.63472],
            [16.645275, 47.631943],
            [16.648888, 47.629715],
            [16.663887, 47.617218],
            [16.668888, 47.611664],
            [16.713886, 47.543884],
            [16.705276, 47.521111],
            [16.655205, 47.458153],
            [16.592499, 47.425278],
            [16.482777, 47.418053],
            [16.470833, 47.419716],
            [16.459164, 47.419167],
            [16.454998, 47.41777],
            [16.451942, 47.415276],
            [16.450554, 47.41111],
            [16.450554, 47.407219],
            [16.456387, 47.368889],
            [16.491108, 47.283882],
            [16.491665, 47.279999],
            [16.477219, 47.261383],
            [16.47361, 47.259438],
            [16.469166, 47.257774],
            [16.444721, 47.244438],
            [16.420555, 47.213333],
            [16.420555, 47.20916],
            [16.421944, 47.205826],
            [16.452499, 47.148888],
            [16.456108, 47.146942],
            [16.461666, 47.146385],
            [16.466942, 47.146942],
            [16.505554, 47.114998],
            [16.510555, 47.009995],
            [16.510555, 47.00666],
            [16.506943, 47.004715],
            [16.497776, 47.00222],
            [16.481388, 47.000549],
            [16.445, 47.004715],
            [16.412498, 47.007774],
            [16.346943, 47.009995],
            [16.302776, 47.011383],
            [16.276665, 46.988052],
            [16.253609, 46.958328],
            [16.139721, 46.879997],
            [16.136108, 46.877777],
            [16.111805, 46.86972],
            [16.009308, 46.835487],
            [15.99361, 46.834717],
            [15.988609, 46.833611],
            [15.985554, 46.831108],
            [15.985554, 46.826942],
            [15.987778, 46.759163],
            [15.988054, 46.751106],
            [15.868332, 46.723053],
            [15.849722, 46.723328],
            [15.832777, 46.722221],
            [15.806665, 46.718605],
            [15.602499, 46.686661],
            [15.406111, 46.652496],
            [15.139444, 46.657219],
            [15.105276, 46.657219],
            [15.100555, 46.656105],
            [15.074408, 46.648571],
            [15.064444, 46.651939],
            [15.045832, 46.652222],
            [14.870554, 46.615829],
            [14.864443, 46.610832],
            [14.834999, 46.574715],
            [14.832499, 46.566666],
            [14.824999, 46.541382],
            [14.814722, 46.512772],
            [14.811666, 46.509995],
            [14.544998, 46.407494],
            [14.478054, 46.419441],
            [14.159443, 46.440826],
            [14.154165, 46.44194],
            [14.150555, 46.443886],
            [14.131666, 46.458328],
            [14.12611, 46.467773],
            [14.119165, 46.476662],
            [14.112499, 46.48111],
            [14.084721, 46.488609],
            [14.079721, 46.489716],
            [13.936943, 46.515831],
            [13.845554, 46.519997],
            [13.77611, 46.518326],
            [13.718655, 46.526611],
            [13.611111, 46.54805],
            [13.558054, 46.555832],
            [13.551943, 46.556664],
            [13.428888, 46.563049],
            [13.2575, 46.561943],
            [12.827499, 46.630272],
            [12.82361, 46.632217],
            [12.787777, 46.644997],
            [12.768888, 46.650833],
            [12.76222, 46.651108],
            [12.753332, 46.648331],
            [12.747929, 46.644493],
            [12.743332, 46.641388],
            [12.738609, 46.640274],
            [12.732498, 46.641106],
            [12.728054, 46.642494],
            [12.692499, 46.659721],
            [12.590277, 46.658882],
            [12.554443, 46.661659],
            [12.486174, 46.682365],
            [12.440554, 46.690826],
            [12.410276, 46.702774],
            [12.398333, 46.708328],
            [12.388887, 46.715553],
            [12.378611, 46.726662],
            [12.301666, 46.84111],
            [12.232222, 46.888885],
            [12.189722, 46.906105],
            [12.181389, 46.909721],
            [12.160276, 46.928055],
            [12.13611, 46.966942],
            [12.127777, 47.001663],
            [12.127222, 47.00972],
            [12.128887, 47.013329],
            [12.134165, 47.019165],
            [12.138332, 47.020828],
            [12.152777, 47.024437],
            [12.185276, 47.028885],
            [12.189999, 47.029999],
            [12.19861, 47.033882],
            [12.204443, 47.039162],
            [12.223888, 47.063049],
            [12.230833, 47.07222],
            [12.23111, 47.080826],
            [12.22611, 47.086662],
            [12.221666, 47.088333],
            [12.189165, 47.094719],
            [12.183054, 47.094444],
            [12.140131, 47.084812],
            [12.075277, 47.059441],
            [11.766666, 46.978882],
            [11.755833, 46.977493],
            [11.736387, 46.977776],
            [11.725832, 46.979996],
            [11.71361, 46.994164],
            [11.706665, 46.998604],
            [11.628611, 47.012497],
            [11.615276, 47.013054],
            [11.483889, 47.01416],
            [11.186388, 46.970276],
            [11.171389, 46.96666],
            [11.164444, 46.962219],
            [11.118055, 46.929993],
            [11.111666, 46.924995],
            [11.099443, 46.914993],
            [11.096666, 46.912498],
            [11.094444, 46.909164],
            [11.094721, 46.904999],
            [11.098888, 46.89444],
            [11.098055, 46.885277],
            [11.096666, 46.88166],
            [11.072498, 46.824997],
            [11.070276, 46.821938],
            [11.018888, 46.774162],
            [11.014721, 46.772499],
            [10.887777, 46.771111],
            [10.834166, 46.786942],
            [10.791666, 46.801384],
            [10.764444, 46.822777],
            [10.766109, 46.826385],
            [10.764444, 46.83416],
            [10.758055, 46.838882],
            [10.689444, 46.872215],
            [10.684721, 46.873604],
            [10.679443, 46.874718],
            [10.666943, 46.874718],
            [10.651388, 46.871941],
            [10.6425, 46.868889],
            [10.599722, 46.857773],
            [10.566387, 46.849159],
            [10.560833, 46.84861],
            [10.497776, 46.85527],
            [10.477777, 46.864441],
            [10.474443, 46.866943],
            [10.471235, 46.871353],
            [10.488913, 46.934212],
            [10.487499, 46.937775],
            [10.429998, 46.984161],
            [10.400833, 47.001106],
            [10.391109, 47.003609],
            [10.385555, 47.002777],
            [10.357222, 46.997215],
            [10.353611, 46.994995],
            [10.345833, 46.986382],
            [10.323332, 46.955551],
            [10.313332, 46.933609],
            [10.231388, 46.878883],
            [10.22361, 46.874992],
            [10.170555, 46.857216],
            [10.15111, 46.852776],
            [10.141807, 46.851341],
            [10.140276, 46.851105],
            [10.122776, 46.849716],
            [10.109444, 46.850273],
            [10.058887, 46.866386],
            [9.934999, 46.912773],
            [9.879444, 46.939156],
            [9.87611, 46.941658],
            [9.87361, 46.958603],
            [9.873333, 46.962769],
            [9.875555, 46.970543],
            [9.880833, 46.98082],
            [9.889444, 46.993324],
            [9.893055, 47.000267],
            [9.891943, 47.003876],
            [9.875555, 47.022491],
            [9.870277, 47.023598],
            [9.719444, 47.050278],
            [9.6325, 47.056664],
            [9.598635, 47.063835],
            [9.603611, 47.065826],
            [9.610277, 47.070274],
            [9.627222, 47.086388],
            [9.634998, 47.094994],
            [9.63611, 47.103607],
            [9.633888, 47.130554],
            [9.622776, 47.150551],
            [9.566387, 47.243889],
            [9.533569, 47.274544],
            [9.539999, 47.284164],
            [9.599722, 47.354164],
            [9.605276, 47.359993],
            [9.614443, 47.367493],
            [9.624422, 47.367252],
            [9.625832, 47.367218],
            [9.631388, 47.36805],
            [9.641666, 47.369995],
            [9.650555, 47.373055],
            [9.664999, 47.381386],
            [9.669998, 47.387772],
            [9.673054, 47.394997],
            [9.673332, 47.398605],
            [9.65361, 47.455551],
            [9.65111, 47.458328],
            [9.646944, 47.460274],
            [9.611666, 47.468887],
            [9.594166, 47.46833],
            [9.590277, 47.470276],
            [9.567499, 47.491104],
            [9.562222, 47.496666],
            [9.559721, 47.499718],
            [9.557772, 47.505783],
            [9.566724, 47.540451],
            [9.577914, 47.537418],
            [9.607064, 47.529514],
            [9.610482, 47.529514],
            [9.651506, 47.529514],
            [9.692531, 47.529514],
            [9.7292, 47.535297],
            [9.736387, 47.546944],
            [9.743055, 47.560829],
            [9.749443, 47.570831],
            [9.763054, 47.584717],
            [9.773611, 47.591385],
            [9.782499, 47.594444],
            [9.808332, 47.594719],
            [9.81361, 47.593605],
            [9.955, 47.539719],
            [10.043055, 47.495277],
            [10.231388, 47.381386],
            [10.232777, 47.373604],
            [10.231388, 47.369995],
            [10.211666, 47.322495],
            [10.173332, 47.274719],
            [10.221943, 47.275276],
            [10.228054, 47.275551],
            [10.232777, 47.276665],
            [10.274443, 47.288887],
            [10.329443, 47.308327],
            [10.337221, 47.312492],
            [10.339998, 47.314995],
            [10.429722, 47.396111],
            [10.473331, 47.435555],
            [10.474165, 47.43972],
            [10.469721, 47.476387],
            [10.469166, 47.480553],
            [10.467499, 47.483604],
            [10.458332, 47.491104],
            [10.436388, 47.52916],
            [10.426943, 47.576942],
            [10.429998, 47.57972],
            [10.434166, 47.581383],
            [10.443609, 47.583885],
            [10.4725, 47.591385],
            [10.478054, 47.591942],
            [10.482777, 47.590553],
            [10.484444, 47.587219],
            [10.484165, 47.582771],
            [10.569443, 47.540276],
            [10.690832, 47.553886],
            [10.909443, 47.518051],
            [10.971109, 47.403328],
            [10.97361, 47.400551],
            [10.978333, 47.399162],
            [10.98361, 47.398048],
            [11.008333, 47.395828],
            [11.02861, 47.395271],
            [11.095554, 47.396111],
            [11.112499, 47.396942],
            [11.296389, 47.428886],
            [11.457499, 47.512215],
            [11.505278, 47.509163],
            [11.554443, 47.515549],
            [11.574444, 47.519997],
            [11.577776, 47.521942],
            [11.583611, 47.527222],
            [11.683054, 47.584717],
            [11.919998, 47.614166],
            [12.006388, 47.624443],
            [12.059999, 47.620552],
            [12.111111, 47.614716],
            [12.141388, 47.611107],
            [12.195745, 47.608124],
            [12.199377, 47.61026],
            [12.20472, 47.61496],
            [12.206388, 47.618607],
            [12.207777, 47.62722],
            [12.206856, 47.639534],
            [12.201111, 47.657494],
            [12.455, 47.66777],
            [12.508888, 47.635277],
            [12.512777, 47.633331],
            [12.518055, 47.632217],
            [12.566666, 47.641937],
            [12.57639, 47.644165],
            [12.596943, 47.667496],
            [12.602777, 47.672775],
            [12.606943, 47.674438],
            [12.665833, 47.684998],
            [12.722776, 47.684441],
            [12.735554, 47.684166],
            [12.74472, 47.681107],
            [12.82361, 47.627495],
            [12.829166, 47.622215],
            [12.830832, 47.618889],
            [12.827776, 47.616386],
            [12.814444, 47.616943],
            [12.808887, 47.616386],
            [12.800278, 47.613052],
            [12.787777, 47.589439],
            [12.78611, 47.585831],
            [12.789444, 47.579437],
            [12.80361, 47.55722],
            [12.809721, 47.552216],
            [12.952686, 47.478477],
            [12.963055, 47.475555],
            [13.004999, 47.469444],
            [13.011665, 47.469162],
            [13.016666, 47.470276],
            [13.050278, 47.493889],
            [13.053055, 47.496384],
            [13.054998, 47.5],
            [13.100277, 47.640831],
            [13.099998, 47.644997],
            [13.08, 47.684441],
            [13.074999, 47.690277],
            [13.058332, 47.706108],
            [13.034443, 47.722221],
            [13.024443, 47.724998],
            [13.019165, 47.725273],
            [13.014166, 47.724159],
            [13.003332, 47.717773],
            [12.995554, 47.714165],
            [12.99111, 47.712494],
            [12.984999, 47.712219],
            [12.923611, 47.714722],
            [12.9175, 47.715553],
            [12.911943, 47.720833],
            [12.910831, 47.724442],
            [12.911388, 47.729164],
            [12.912498, 47.733055],
            [12.939722, 47.784721],
            [12.94861, 47.79277],
            [12.967777, 47.807777],
            [12.973331, 47.813332],
            [13.008888, 47.854164],
            [12.966665, 47.906944],
            [12.918888, 47.957771],
            [12.865342, 47.994598],
            [12.863194, 48],
            [12.858332, 48.012215],
            [12.853333, 48.017776],
            [12.8375, 48.029999],
            [12.805555, 48.049721],
            [12.792776, 48.059441],
            [12.768332, 48.079163],
            [12.764166, 48.085274],
            [12.754444, 48.105553],
            [12.753332, 48.109161],
            [12.754999, 48.116943],
            [12.758333, 48.123886],
            [12.760832, 48.12722],
            [12.7675, 48.131943],
            [12.867498, 48.200829],
            [12.874998, 48.204994],
            [13.017776, 48.259438],
            [13.154444, 48.292221],
            [13.258055, 48.298882],
            [13.27861, 48.303055],
            [13.291943, 48.307495],
            [13.313055, 48.315826],
            [13.334999, 48.328606],
            [13.394999, 48.366104],
            [13.419167, 48.38694],
            [13.421665, 48.389999],
            [13.423332, 48.393608],
            [13.435833, 48.423607],
            [13.439999, 48.435272],
            [13.457222, 48.513329],
            [13.457777, 48.517776],
            [13.447498, 48.544441],
            [13.443609, 48.550552],
            [13.435276, 48.556938],
            [13.434999, 48.561104],
            [13.441666, 48.565552],
            [13.450554, 48.568886],
            [13.505278, 48.583054],
            [13.515276, 48.585274],
            [13.526943, 48.584999],
            [13.602777, 48.568054],
            [13.651667, 48.554161],
            [13.657776, 48.549164],
            [13.666943, 48.537216],
            [13.674721, 48.533051],
            [13.683054, 48.529442],
            [13.725996, 48.515587],
            [13.8025, 48.581108],
            [13.804998, 48.58416],
            [13.822777, 48.617218],
            [13.825277, 48.625275],
            [13.826944, 48.638885],
            [13.826666, 48.643051],
            [13.814722, 48.738052],
            [13.833611, 48.773605]
          ]
        ]
      }
    }
  ]
}
'; 
    }  
 
} 
 