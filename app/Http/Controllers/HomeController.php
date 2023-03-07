<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData["title"]="Home Page-SotmAfrica2023";
        $viewData['subtitle']="About";

        return view('home')->with('viewData', $viewData);
    }

    public function about()
    {
        $viewData=[];
        $viewData['title']="About Page-SotmAfrica2023";
        $viewData['first paragraph']="The State of the Map Africa (SotM Africa) is a bi-annual regional conference that celebrates the culture of open mapping, open data, GIS and its impact across Africa. The first SotM Africa conference was hosted by the OSM community in Uganda in 2017, in 2019 in Cote d’Ivoire and online in 2021.";
        $viewData['second paragraph']="This year’s conference will build on a new strategy envisioned for OpenStreetMap Africa as a renewed, strong,and growing network, and as part of the global open mapping movement.";
        $viewData['third paragraph']="This year’s conference will provide a diverse and fun space for everyone to collaborate and be a part of the OpenStreetMap Africa community. We will also lay the foundation that will provide us with a solid base for the open, collaborative, and participatory community that we want to build and is needed for our movement to diversify and thrive. We hope you will join us.";
        $viewData['fourth paragraph']="OSM Africa is a regional community of contributors, users and supporters of OpenStreetMap from countries within the African continent. This includes mappers, scientific researchers, humanitarians, NGOs, government agencies, small business and global companies having and/or supporting work within the continent.The network is aimed at growing and producing a complete and well detailed map of Africa on OpenStreetMap in order to advance the quality, completeness and sustainability of geospatial data in Africa.";

        return view('about')->with('viewData', $viewData);
    }

    public function aboutFr()
    {
        $viewData=[];
        $viewData['title']="About Page-SotmAfrica2023 fr";

        return view('aboutfr')->with('viewData', $viewData);
    }
}
