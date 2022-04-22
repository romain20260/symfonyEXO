___
# implemented the model to a symfony app 
___
implement the region model in your symfony app (no doctrine). 
expose your model trought two routes, one route to retourne a json of all region and another one to return a json of one region define by a url param.   
___
### constraint : 
  * only use the routing, http foundation and the abstract controller 
  * use the annotation way to create routes
  * routes name : 
    * api/region/all (retourne json to all regions)
    * api/region/[regionName] (retourne json of the region pass in url param)
___

you can use a env variable for the crud connection to your database as you like.
___
next step : 
(when your have look symfony doc about template/twig)

create another controller to serve a html view of this both use cases generate with a twig engine.
* routes name : 
  * region/all
  * region/[regionName]

