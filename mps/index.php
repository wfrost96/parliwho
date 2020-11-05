<?php

  #gender
  $var = $_POST['gender'];
  $gender_selected = "";
  $gender_default_m = "";
  $gender_default_f = "";
  if($var == 'male'){
    $gender_selected = "m";
    $gender_default_m = "selected";
  }
  elseif($var == 'female'){
    $gender_selected = "f";
    $gender_default_f = "selected";
  }
  else{
    $gender_selected = "all";
  }

  #party
  $parties_selected = "";
  $var = $_POST['party'];
  $con_default = "";
  $labour_default = "";
  $snp_default = "";
  $libdem_default = "";
  $dup_default = "";
  $sinn_default = "";
  $plaid_default = "";
  $sdlp_default = "";
  $green_default = "";
  $alliance_default = "";
  $ind_default = "";
  $speaker_default = "";
  if($var == "conservative"){
    $parties_selected = "Conservative";
    $con_default = "selected";
  }
  elseif($var == "labour"){
    $parties_selected = "Labour";
    $labour_default = "selected";
  }
  elseif($var == "snp"){
    $parties_selected = "Scottish National Party";
    $snp_default = "selected";
  }
  elseif($var == "libdem"){
    $parties_selected = "Liberal Democrat";
    $libdem_default = "selected";
  }
  elseif($var == "dup"){
    $parties_selected = "Democratic Unionist Party";
    $dup_default = "selected";
  }
  elseif($var == "sinn_fein"){
    $parties_selected = "Sinn Fein";
    $sinn_default = "selected";
  }
  elseif($var == "plaid"){
    $parties_selected = "Plaid Cymru";
    $plaid_default = "selected";
  }
  elseif($var == "sdlp"){
    $parties_selected = "Social Democratic & Labour Party";
    $sdlp_default = "selected";
  }
  elseif($var == "green"){
    $parties_selected = "Green Party";
    $green_default = "selected";
  }
  elseif($var == "alliance"){
    $parties_selected = "Alliance";
    $alliance_default = "selected";
  }
  elseif($var == "independent"){
    $parties_selected = "Independent";
    $ind_default = "selected";
  }
  elseif($var == "speaker"){
    $parties_selected = "Speaker";
    $speaker_default = "selected";
  }
  else{
    $parties_selected = "all";
  }

  #frontbench
  $frontbench = "";
  $var = $_POST['frontbench'];
  $frontbench_default_y = "";
  $frontbench_default_n = "";
  if($var == "yes"){
    $frontbench = "yes";
    $frontbench_default_y = "selected";
    $payroll_default_y = "selected";
  }
  elseif($var == "no"){
    $frontbench = "no";
    $frontbench_default_n = "selected";
    $payroll_default_y = "selected";
  }
  else{
    $frontbench = "-";
  }

  #payroll
  $payroll = "";
  $var = $_POST['payroll'];
  $payroll_default_y = "";
  $payroll_default_n = "";
  if($var == "yes"){
    $payroll = "yes";
    $payroll_default_y = "selected";
  }
  elseif($var == "no"){
    $payroll = "no";
    $payroll_default_n = "selected";
  }
  else{
    $payroll = "-";
  }

  #cabinet
  $cabinet = "";
  $var = $_POST['cabinet'];
  $cabinet_default_y = "";
  $cabinet_default_n = "";
  if($var == "yes"){
    $cabinet = "yes";
    $cabinet_default_y = "selected";
  }
  elseif($var == "no"){
    $cabinet = "no";
    $cabinet_default_n = "selected";
  }
  else{
    $cabinet = "-";
  }

  #select committees
  $select_committees = "";
  $var = $_POST['select_committees'];
  $select_comm_default_all = "";
  $select_comm_default_none = "";
  if($var == "yes"){
    $select_committees = "yes";
    $select_comm_default_all = "selected";
  }
  elseif($var == "no"){
    $select_committees = "no";
    $select_comm_default_none = "selected";
  }
  else{
    $select_committees = "-";
  }

  #personality
  $personality = "";
  $var = $_POST['personality'];
  $personality = "";

  $agreeableness_selected = "";
  $altruism_selected = "";
  $cooperation_selected = "";
  $modesty_selected = "";
  $morality_selected = "";

  $sympathy_selected = "";
  $trust_selected = "";
  $conscientiousness_selected = "";
  $achievement_striving_selected = "";
  $cautiousness_selected = "";

  $dutifulness_selected = "";
  $orderliness_selected = "";
  $self_discipline_selected = "";
  $self_efficacy_selected = "";
  $extraversion_selected = "";

  $activity_level_selected = "";
  $assertiveness_selected = "";
  $cheerfulness_selected = "";
  $excitement_seeking_selected = "";
  $friendliness_selected = "";

  $gregariousness_selected = "";
  $neuroticism_selected = "";
  $anger_selected = "";
  $anxiety_selected = "";
  $depression_selected = "";

  $immoderation_selected = "";
  $self_consciousness_selected = "";
  $vulnerability_selected = "";
  $openness_selected = "";
  $adventurousness_selected = "";

  $artistic_interests_selected = "";
  $emotionality_selected = "";
  $imagination_selected = "";
  $intellect_selected = "";
  $authority_challenging_selected = "";

  if($var == "agreeableness"){
    $personality = "agreeableness";
    $agreeableness_selected = "selected";
  }
  elseif($var == "altruism"){
    $personality = "altruism";
    $altruism_selected = "selected";
  }
  elseif($var == "cooperation"){
    $personality = "cooperation";
    $cooperation_selected = "selected";
  }
  elseif($var == "modesty"){
    $personality = "modesty";
    $modesty_selected = "selected";
  }
  elseif($var == "morality"){
    $personality = "morality";
    $morality_selected = "selected";
  }

  elseif($var == "sympathy"){
    $personality = "sympathy";
    $sympathy_selected = "selected";
  }
  elseif($var == "trust"){
    $personality = "trust";
    $trust_selected = "selected";
  }
  elseif($var == "conscientiousness"){
    $personality = "conscientiousness";
    $conscientiousness_selected = "selected";
  }
  elseif($var == "achievement_striving"){
    $personality = "achievement_striving";
    $achievement_striving_selected = "selected";
  }
  elseif($var == "cautiousness"){
    $personality = "cautiousness";
    $cautiousness_selected = "selected";
  }

  elseif($var == "dutifulness"){
    $personality = "dutifulness";
    $dutifulness_selected = "selected";
  }
  elseif($var == "orderliness"){
    $personality = "orderliness";
    $orderliness_selected = "selected";
  }
  elseif($var == "self_discipline"){
    $personality = "self_discipline";
    $self_discipline_selected = "selected";
  }
  elseif($var == "self_efficacy"){
    $personality = "self_efficacy";
    $self_efficacy_selected = "selected";
  }
  elseif($var == "extraversion"){
    $personality = "extraversion";
    $extraversion_selected = "selected";
  }

  elseif($var == "activity_level"){
    $personality = "activity_level";
    $activity_level_selected = "selected";
  }
  elseif($var == "assertiveness"){
    $personality = "assertiveness";
    $assertiveness_selected = "selected";
  }
  elseif($var == "cheerfulness"){
    $personality = "cheerfulness";
    $cheerfulness_selected = "selected";
  }
  elseif($var == "excitement_seeking"){
    $personality = "excitement_seeking";
    $excitement_seeking_selected = "selected";
  }
  elseif($var == "friendliness"){
    $personality = "friendliness";
    $friendliness_selected = "selected";
  }

  elseif($var == "gregariousness"){
    $personality = "gregariousness";
    $gregariousness_selected = "selected";
  }
  elseif($var == "neuroticism"){
    $personality = "neuroticism";
    $neuroticism_selected = "selected";
  }
  elseif($var == "anger"){
    $personality = "anger";
    $anger_selected = "selected";
  }
  elseif($var == "anxiety"){
    $personality = "anxiety";
    $anxiety_selected = "selected";
  }
  elseif($var == "depression"){
    $personality = "depression";
    $depression_selected = "selected";
  }

  elseif($var == "immoderation"){
    $personality = "immoderation";
    $immoderation_selected = "selected";
  }
  elseif($var == "self_consciousness"){
    $personality = "self_consciousness";
    $self_consciousness_selected = "selected";
  }
  elseif($var == "vulnerability"){
    $personality = "vulnerability";
    $vulnerability = "selected";
  }
  elseif($var == "openness"){
    $personality = "openness";
    $openness = "selected";
  }
  elseif($var == "adventurousness"){
    $personality = "adventurousness";
    $adventurousness_selected = "selected";
  }

  elseif($var == "artistic_interests"){
    $personality = "artistic_interests";
    $artistic_interests_selected = "selected";
  }
  elseif($var == "emotionality"){
    $personality = "emotionality";
    $emotionality_selected = "selected";
  }
  elseif($var == "imagination"){
    $personality = "imagination";
    $imagination_selected = "selected";
  }
  elseif($var == "intellect"){
    $personality = "intellect";
    $intellect_selected = "selected";
  }
  elseif($var == "authority_challenging"){
    $personality = "authority_challenging";
    $authority_challenging_selected = "selected";
  }

  else{
    $personality = "-";
  }
  #echo $personality;

  #country/region/county
  $area = "";
  $var = $_POST['area'];

  $england_selected = "";
  $scotland_selected = "";
  $wales_selected = "";
  $northern_ireland_selected = "";
  $south_east_selected = "";
  $west_midlands_selected = "";
  $north_west_selected = "";
  $east_midland_selected = "";
  $london_selected = "";
  $east_of_england_selected = "";
  $south_west_selected = "";
  $north_east_selected = "";

  #South East
  $hampshire_selected = "";
  $west_sussex_selected = "";
  $kent_selected = "";
  $buckinghamshire_selected = "";
  $oxfordshire_selected = "";
  $east_sussex_selected = "";
  $berkshire_selected = "";
  $surrey_selected = "";
  $isle_of_wight_selected = "";

  #West Midland
  $hereford_and_worcester_selected = "";
  $staffordshire_selected = "";
  $warwickshire_selected = "";
  $shropshire_selected = "";
  $walsall_selected = "";
  $birmingham_selected = "";
  $coventry_selected = "";
  $dudley_selected = "";
  $sandwell_selected = "";
  $solihull_selected = "";
  $wolverhampton_selected = "";

  #North West
  $cumbria_selected = "";
  $lancashire_selected = "";
  $cheshire_selected = "";
  $trafford_selected = "";
  $oldham_selected = "";
  $tameside_selected = "";
  $wirral_selected = "";
  $bolton_selected = "";
  $sefton_selected = "";
  $bury_selected = "";
  $stockport_selected = "";
  $rochdale_selected = "";
  $wigan_selected = "";
  $liverpool_selected = "";
  $manchester_selected = "";
  $st_helens_selected = "";

  #East Midlands
  $derbyshire_selected = "";
  $nottinghamshire_selected = "";
  $lincolnshire_selected = "";
  $leicestershire_selected = "";
  $northamptonshire_selected = "";

  #Yorkshire and The Humber
  $humberside_selected = "";
  $north_yorkshire_selected = "";
  $barnsley_selected = "";
  $kirklees_selected = "";
  $bradford_selected = "";
  $calderdale_selected = "";
  $doncaster_selected = "";
  $wakefield_selected = "";
  $leeds_selected = "";
  $rotherham_selected = "";
  $sheffield_selected = "";

  #East of England
  $essex_selected = "";
  $bedfordshire_selected = "";
  $norfolk_selected = "";
  $hertfordshire_selected = "";
  $suffolk_selected = "";
  $cambridgeshire_selected = "";

  #South West
  $avon_selected = "";
  $dorset_selected = "";
  $somerset_selected = "";
  $cornwall_selected = "";
  $gloucestershire_selected = "";
  $wiltshire_selected = "";
  $devon_selected = "";

  #North East
  $northumberland_selected = "";
  $county_durham_selected = "";
  $cleveland_selected = "";
  $gateshead_selected = "";
  $south_tyneside_selected = "";
  $newcastle_upon_tyne_selected = "";

  #Scotland
  $north_tyneside_selected = "";
  $aberdeen_city_selected = "";
  $aberdeenshire_selected = "";
  $north_lanarkshire_selected = "";
  $angus_selected = "";
  $argyll_and_bute_selected = "";
  $east_ayrshire_selected = "";
  $south_ayrshire_selected = "";
  $north_ayrshire_selected = "";
  $scottish_borders_selected = "";
  $highland_selected = "";
  $east_dunbartonshire_selected = "";
  $dumfries_and_galloway_selected = "";
  $south_lanarkshire_selected = "";
  $west_dunbartonshire_selected = "";
  $dundee_city_selected = "";
  $fife_selected = "";
  $east_lothian_selected = "";
  $city_of_edinburgh_selected = "";
  $falkirk_selected = "";
  $glasgow_city_selected = "";
  $inverclyde_selected = "";
  $west_lothian_selected = "";
  $midlothian_selected = "";
  $moray_selected = "";
  $na_h_eileanan_an_lar_selected = "";
  $clackmannanshire_selected = "";
  $perth_and_kinross_selected = "";
  $orkney_islands_selected = "";
  $shetland_islands_selected = "";
  $renfrewshire_selected = "";
  $east_renfrewshire_selected = "";
  $stirling_selected = "";

  #Wales
  $neath_port_talbot_selected = "";
  $flintshire_selected = "";
  $gwynedd_selected = "";
  $blaenau_gwent_selected = "";
  $powys_selected = "";
  $bridgend_selected = "";
  $the_vale_of_glamorgan_selected = "";
  $caerphilly_selected = "";
  $cardiff_selected = "";
  $carmarthenshire_selected = "";
  $ceredigion_selected = "";
  $denbighshire_selected = "";
  $wrexham_selected = "";
  $conwy_selected = "";
  $rhondda_cynon_taff_selected = "";
  $swansea_selected = "";
  $merthyr_tydfil_selected = "";
  $monmouthshire_selected = "";
  $torfaen_selected = "";
  $newport_selected = "";
  $pembrokeshire_selected = "";
  $isle_of_anglesey_selected = "";

  #Northern Ireland
  $carrickfergus_selected = "";
  $larne_selected = "";
  $newtownabbey_selected = "";
  $ballymena_selected = "";
  $ballymoney_selected = "";
  $noyle_selected = "";
  $antrim_selected = "";
  $belfast_selected = "";
  $castlereagh_selected = "";
  $lisburn_selected = "";
  $coleraine_selected = "";
  $limavady_selected = "";
  $dungannon_selected = "";
  $fermanagh_selected = "";
  $derry_selected = "";
  $banbridge_selected = "";
  $cookstown_selected = "";
  $magherafelt_selected = "";
  $armagh_selected = "";
  $newry_and_mourne_selected = "";
  $ards_selected = "";
  $north_down_selected = "";
  $craigavon_selected = "";
  $omagh_selected = "";

  if($var == "england"){
    $area = "england";
    $england_selected = "selected";
  }
  elseif($var == "scotland"){
    $area = "scotland";
    $scotland_selected = "selected";
  }
  elseif($var == "wales"){
    $area = "wales";
    $wales_selected = "selected";
  }
  elseif($var == "northern_ireland"){
    $area = "northern_ireland";
    $northern_ireland_selected = "selected";
  }
  elseif($var == "south_east"){
    $area = "south_east";
    $south_east_selected = "selected";
  }
  elseif($var == "west_midlands"){
    $area = "west_midlands";
    $west_midlands_selected = "selected";
  }
  elseif($var == "north_west"){
    $area = "north_west";
    $north_west_selected = "selected";
  }
  elseif($var == "east_midland"){
    $area = "east_midland";
    $east_midland_selected = "selected";
  }
  elseif($var == "london"){
    $area = "london";
    $london_selected = "selected";
  }
  elseif($var == "east_of_england"){
    $area = "east_of_england";
    $east_of_england_selected = "selected";
  }
  elseif($var == "south_west"){
    $area = "south_west";
    $south_west_selected = "selected";
  }
  elseif($var == "north_east"){
    $area = "north_east";
    $north_east_selected = "selected";
  }
  elseif($var == "hampshire"){
    $area = "hampshire";
    $hampshire_selected = "selected";
  }
  elseif($var == "west_sussex"){
    $area = "west_sussex";
    $west_sussex_selected = "selected";
  }
  elseif($var == "kent"){
    $area = "kent";
    $kent_selected = "selected";
  }
  elseif($var == "buckinghamshire"){
    $area = "buckinghamshire";
    $buckinghamshire_selected = "selected";
  }
  elseif($var == "oxfordshire"){
    $area = "oxfordshire";
    $oxfordshire_selected = "selected";
  }
  elseif($var == "east_sussex"){
    $area = "east_sussex";
    $east_sussex_selected = "selected";
  }
  elseif($var == "berkshire"){
    $area = "berkshire";
    $berkshire_selected = "selected";
  }
  elseif($var == "surrey"){
    $area = "surrey";
    $surrey_selected = "selected";
  }
  elseif($var == "isle_of_wight"){
    $area = "isle_of_wight";
    $isle_of_wight_selected = "selected";
  }
  elseif($var == "hereford_and_worcester"){
    $area = "hereford_and_worcester";
    $hereford_and_worcester_selected = "selected";
  }
  elseif($var == "staffordshire"){
    $area = "staffordshire";
    $staffordshire_selected = "selected";
  }
  elseif($var == "warwickshire"){
    $area = "warwickshire";
    $warwickshire_selected = "selected";
  }
  elseif($var == "shropshire"){
    $area = "shropshire";
    $shropshire_selected = "selected";
  }
  elseif($var == "walsall"){
    $area = "walsall";
    $walsall_selected = "selected";
  }
  elseif($var == "birmingham"){
    $area = "birmingham";
    $birmingham_selected = "selected";
  }
  elseif($var == "coventry"){
    $area = "coventry";
    $coventry_selected = "selected";
  }
  elseif($var == "dudley"){
    $area = "dudley";
    $dudley_selected = "selected";
  }
  elseif($var == "sandwell"){
    $area = "sandwell";
    $sandwell_selected = "selected";
  }
  elseif($var == "solihull"){
    $area = "solihull";
    $solihull_selected = "selected";
  }
  elseif($var == "wolverhampton"){
    $area = "wolverhampton";
    $wolverhampton_selected = "selected";
  }
  elseif($var == "cumbria"){
    $area = "cumbria";
    $cumbria_selected = "selected";
  }
  elseif($var == "lancashire"){
    $area = "lancashire";
    $lancashire_selected = "selected";
  }
  elseif($var == "cheshire"){
    $area = "cheshire";
    $cheshire_selected = "selected";
  }
  elseif($var == "trafford"){
    $area = "trafford";
    $trafford_selected = "selected";
  }
  elseif($var == "oldham"){
    $area = "oldham";
    $oldham_selected = "selected";
  }
  elseif($var == "tameside"){
    $area = "tameside";
    $tameside_selected = "selected";
  }
  elseif($var == "wirral"){
    $area = "wirral";
    $wirral_selected = "selected";
  }
  elseif($var == "bolton"){
    $area = "bolton";
    $bolton_selected = "selected";
  }
  elseif($var == "sefton"){
    $area = "sefton";
    $sefton_selected = "selected";
  }
  elseif($var == "bury"){
    $area = "bury";
    $bury_selected = "selected";
  }
  elseif($var == "stockport"){
    $area = "stockport";
    $stockport_selected = "selected";
  }
  elseif($var == "rochdale"){
    $area = "rochdale";
    $rochdale_selected = "selected";
  }
  elseif($var == "wigan"){
    $area = "wigan";
    $wigan_selected = "selected";
  }
  elseif($var == "liverpool"){
    $area = "liverpool";
    $liverpool_selected = "selected";
  }
  elseif($var == "manchester"){
    $area = "manchester";
    $manchester_selected = "selected";
  }
  elseif($var == "st_helens"){
    $area = "st_helens";
    $st_helens_selected = "selected";
  }
  elseif($var == "derbyshire"){
    $area = "derbyshire";
    $derbyshire_selected = "selected";
  }
  elseif($var == "nottinghamshire"){
    $area = "nottinghamshire";
    $nottinghamshire_selected = "selected";
  }
  elseif($var == "lincolnshire"){
    $area = "lincolnshire";
    $lincolnshire_selected = "selected";
  }
  elseif($var == "leicestershire"){
    $area = "leicestershire";
    $leicestershire_selected = "selected";
  }
  elseif($var == "northamptonshire"){
    $area = "northamptonshire";
    $northamptonshire_selected = "selected";
  }
  elseif($var == "humberside"){
    $area = "humberside";
    $humberside_selected = "selected";
  }
  elseif($var == "north_yorkshire"){
    $area = "north_yorkshire";
    $north_yorkshire_selected = "selected";
  }
  elseif($var == "barnsley"){
    $area = "barnsley";
    $barnsley_selected = "selected";
  }
  elseif($var == "kirklees"){
    $area = "kirklees";
    $kirklees_selected = "selected";
  }
  elseif($var == "bradford"){
    $area = "bradford";
    $bradford_selected = "selected";
  }
  elseif($var == "calderdale"){
    $area = "calderdale";
    $calderdale_selected = "selected";
  }
  elseif($var == "doncaster"){
    $area = "doncaster";
    $doncaster_selected = "selected";
  }
  elseif($var == "wakefield"){
    $area = "wakefield";
    $wakefield_selected = "selected";
  }
  elseif($var == "leeds"){
    $area = "leeds";
    $leeds_selected = "selected";
  }
  elseif($var == "rotherham"){
    $area = "rotherham";
    $rotherham_selected = "selected";
  }
  elseif($var == "sheffield"){
    $area = "sheffield";
    $sheffield_selected = "selected";
  }
  elseif($var == "essex"){
    $area = "essex";
    $essex_selected = "selected";
  }
  elseif($var == "bedfordshire"){
    $area = "bedfordshire";
    $bedfordshire_selected = "selected";
  }
  elseif($var == "norfolk"){
    $area = "norfolk";
    $norfolk_selected = "selected";
  }
  elseif($var == "hertfordshire"){
    $area = "hertfordshire";
    $hertfordshire_selected = "selected";
  }
  elseif($var == "suffolk"){
    $area = "suffolk";
    $suffolk_selected = "selected";
  }
  elseif($var == "cambridgeshire"){
    $area = "cambridgeshire";
    $cambridgeshire_selected = "selected";
  }
  elseif($var == "avon"){
    $area = "avon";
    $avon_selected = "selected";
  }
  elseif($var == "dorset"){
    $area = "dorset";
    $dorset_selected = "selected";
  }
  elseif($var == "somerset"){
    $area = "somerset";
    $somerset_selected = "selected";
  }
  elseif($var == "cornwall"){
    $area = "cornwall";
    $cornwall_selected = "selected";
  }
  elseif($var == "gloucestershire"){
    $area = "gloucestershire";
    $gloucestershire_selected = "selected";
  }
  elseif($var == "wiltshire"){
    $area = "wiltshire";
    $wiltshire_selected = "selected";
  }
  elseif($var == "devon"){
    $area = "devon";
    $devon_selected = "selected";
  }
  elseif($var == "northumberland"){
    $area = "northumberland";
    $northumberland_selected = "selected";
  }
  elseif($var == "county_durham"){
    $area = "county_durham";
    $county_durham_selected = "selected";
  }
  elseif($var == "cleveland"){
    $area = "cleveland";
    $cleveland_selected = "selected";
  }
  elseif($var == "gateshead"){
    $area = "gateshead";
    $gateshead_selected = "selected";
  }
  elseif($var == "south_tyneside"){
    $area = "south_tyneside";
    $south_tyneside_selected = "selected";
  }
  elseif($var == "newcastle_upon_tyne"){
    $area = "newcastle_upon_tyne";
    $newcastle_upon_tyne_selected = "selected";
  }
  elseif($var == "north_tyneside"){
    $area = "north_tyneside";
    $north_tyneside_selected = "selected";
  }
  elseif($var == "aberdeen_city"){
    $area = "aberdeen_city";
    $aberdeen_city_selected = "selected";
  }
  elseif($var == "aberdeenshire"){
    $area = "aberdeenshire";
    $aberdeenshire_selected = "selected";
  }
  elseif($var == "north_lanarkshire"){
    $area = "north_lanarkshire";
    $north_lanarkshire_selected = "selected";
  }
  elseif($var == "angus"){
    $area = "angus";
    $angus_selected = "selected";
  }
  elseif($var == "argyll_and_bute"){
    $area = "argyll_and_bute";
    $argyll_and_bute_selected = "selected";
  }
  elseif($var == "east_ayrshire"){
    $area = "east_ayrshire";
    $east_ayrshire_selected = "selected";
  }
  elseif($var == "south_ayrshire"){
    $area = "south_ayrshire";
    $south_ayrshire_selected = "selected";
  }
  elseif($var == "north_ayrshire"){
    $area = "north_ayrshire";
    $north_ayrshire_selected = "selected";
  }
  elseif($var == "scottish_borders"){
    $area = "scottish_borders";
    $scottish_borders_selected = "selected";
  }
  elseif($var == "highland"){
    $area = "highland";
    $highland_selected = "selected";
  }
  elseif($var == "east_dunbartonshire"){
    $area = "east_dunbartonshire";
    $east_dunbartonshire_selected = "selected";
  }
  elseif($var == "dumfries_and_galloway"){
    $area = "dumfries_and_galloway";
    $dumfries_and_galloway_selected = "selected";
  }
  elseif($var == "south_lanarkshire"){
    $area = "south_lanarkshire";
    $south_lanarkshire_selected = "selected";
  }
  elseif($var == "west_dunbartonshire"){
    $area = "west_dunbartonshire";
    $west_dunbartonshire_selected = "selected";
  }
  elseif($var == "dundee_city"){
    $area = "dundee_city";
    $dundee_city_selected = "selected";
  }
  elseif($var == "fife"){
    $area = "fife";
    $fife_selected = "selected";
  }
  elseif($var == "east_lothian"){
    $area = "east_lothian";
    $east_lothian_selected = "selected";
  }
  elseif($var == "city_of_edinburgh"){
    $area = "city_of_edinburgh";
    $city_of_edinburgh_selected = "selected";
  }
  elseif($var == "falkirk"){
    $area = "falkirk";
    $falkirk_selected = "selected";
  }
  elseif($var == "glasgow_city"){
    $area = "glasgow_city";
    $glasgow_city_selected = "selected";
  }
  elseif($var == "inverclyde"){
    $area = "inverclyde";
    $inverclyde_selected = "selected";
  }
  elseif($var == "west_lothian"){
    $area = "west_lothian";
    $west_lothian_selected = "selected";
  }
  elseif($var == "midlothian"){
    $area = "midlothian";
    $midlothian_selected = "selected";
  }
  elseif($var == "moray"){
    $area = "moray";
    $moray_selected = "selected";
  }
  elseif($var == "na_h_eileanan_an_lar"){
    $area = "na_h_eileanan_an_lar";
    $na_h_eileanan_an_lar_selected = "selected";
  }
  elseif($var == "clackmannanshire"){
    $area = "clackmannanshire";
    $clackmannanshire_selected = "selected";
  }
  elseif($var == "perth_and_kinross"){
    $area = "perth_and_kinross";
    $perth_and_kinross_selected = "selected";
  }
  elseif($var == "orkney_islands"){
    $area = "orkney_islands";
    $orkney_islands_selected = "selected";
  }
  elseif($var == "shetland_islands"){
    $area = "shetland_islands";
    $shetland_islands_selected = "selected";
  }
  elseif($var == "renfrewshire"){
    $area = "renfrewshire";
    $renfrewshire_selected = "selected";
  }
  elseif($var == "east_renfrewshire"){
    $area = "east_renfrewshire";
    $east_renfrewshire_selected = "selected";
  }
  elseif($var == "stirling"){
    $area = "stirling";
    $stirling_selected = "selected";
  }
  elseif($var == "neath_port_talbot"){
    $area = "neath_port_talbot";
    $neath_port_talbot_selected = "selected";
  }
  elseif($var == "flintshire"){
    $area = "flintshire";
    $flintshire_selected = "selected";
  }
  elseif($var == "gwynedd"){
    $area = "gwynedd";
    $gwynedd_selected = "selected";
  }
  elseif($var == "blaenau_gwent"){
    $area = "blaenau_gwent";
    $blaenau_gwent_selected = "selected";
  }
  elseif($var == "powys"){
    $area = "powys";
    $powys_selected = "selected";
  }
  elseif($var == "bridgend"){
    $area = "bridgend";
    $bridgend_selected = "selected";
  }
  elseif($var == "the_vale_of_glamorgan"){
    $area = "the_vale_of_glamorgan";
    $the_vale_of_glamorgan_selected = "selected";
  }
  elseif($var == "caerphilly"){
    $area = "england";
    $caerphilly_selected = "selected";
  }
  elseif($var == "cardiff"){
    $area = "cardiff";
    $cardiff_selected = "selected";
  }
  elseif($var == "carmarthenshire"){
    $area = "carmarthenshire";
    $carmarthenshire_selected = "selected";
  }
  elseif($var == "ceredigion"){
    $area = "ceredigion";
    $ceredigion_selected = "selected";
  }
  elseif($var == "denbighshire"){
    $area = "denbighshire";
    $denbighshire_selected = "selected";
  }
  elseif($var == "wrexham"){
    $area = "wrexham";
    $wrexham_selected = "selected";
  }
  elseif($var == "conwy"){
    $area = "conwy";
    $conwy_selected = "selected";
  }
  elseif($var == "rhondda_cynon_taff"){
    $area = "rhondda_cynon_taff";
    $rhondda_cynon_taff_selected = "selected";
  }
  elseif($var == "swansea"){
    $area = "swansea";
    $swansea_selected = "selected";
  }
  elseif($var == "merthyr_tydfil"){
    $area = "merthyr_tydfil";
    $merthyr_tydfil_selected = "selected";
  }
  elseif($var == "monmouthshire"){
    $area = "monmouthshire";
    $monmouthshire_selected = "selected";
  }
  elseif($var == "torfaen"){
    $area = "torfaen";
    $torfaen_selected = "selected";
  }
  elseif($var == "newport"){
    $area = "newport";
    $newport_selected = "selected";
  }
  elseif($var == "pembrokeshire"){
    $area = "pembrokeshire";
    $pembrokeshire_selected = "selected";
  }
  elseif($var == "isle_of_anglesey"){
    $area = "isle_of_anglesey";
    $isle_of_anglesey_selected = "selected";
  }
  elseif($var == "carrickfergus"){
    $area = "carrickfergus";
    $carrickfergus_selected = "selected";
  }
  elseif($var == "larne"){
    $area = "larne";
    $larne_selected = "selected";
  }
  elseif($var == "newtownabbey"){
    $area = "newtownabbey";
    $newtownabbey_selected = "selected";
  }
  elseif($var == "ballymena"){
    $area = "ballymena";
    $ballymena_selected = "selected";
  }
  elseif($var == "ballymoney"){
    $area = "ballymoney";
    $ballymoney_selected = "selected";
  }
  elseif($var == "noyle"){
    $area = "noyle";
    $noyle_selected = "selected";
  }
  elseif($var == "antrim"){
    $area = "antrim";
    $antrim_selected = "selected";
  }
  elseif($var == "belfast"){
    $area = "belfast";
    $belfast_selected = "selected";
  }
  elseif($var == "castlereagh"){
    $area = "castlereagh";
    $castlereagh_selected = "selected";
  }
  elseif($var == "lisburn"){
    $area = "lisburn";
    $lisburn_selected = "selected";
  }
  elseif($var == "coleraine"){
    $area = "coleraine";
    $coleraine_selected = "selected";
  }
  elseif($var == "limavady"){
    $area = "limavady";
    $limavady_selected = "selected";
  }
  elseif($var == "dungannon"){
    $area = "dungannon";
    $dungannon_selected = "selected";
  }
  elseif($var == "fermanagh"){
    $area = "fermanagh";
    $fermanagh_selected = "selected";
  }
  elseif($var == "derry"){
    $area = "derry";
    $derry_selected = "selected";
  }
  elseif($var == "banbridge"){
    $area = "banbridge";
    $banbridge_selected = "selected";
  }
  elseif($var == "cookstown"){
    $area = "cookstown";
    $cookstown_selected = "selected";
  }
  elseif($var == "magherafelt"){
    $area = "magherafelt";
    $magherafelt_selected = "selected";
  }
  elseif($var == "armagh"){
    $area = "armagh";
    $armagh_selected = "selected";
  }
  elseif($var == "newry_and_mourne"){
    $area = "newry_and_mourne";
    $newry_and_mourne_selected = "selected";
  }
  elseif($var == "ards"){
    $area = "ards";
    $ards_selected = "selected";
  }
  elseif($var == "north_down"){
    $area = "north_down";
    $north_down_selected = "selected";
  }
  elseif($var == "craigavon"){
    $area = "craigavon";
    $craigavon_selected = "selected";
  }
  elseif($var == "omagh"){
    $area = "omagh";
    $omagh_selected = "selected";
  }
  else{
    $area = '-';
  }

?>

<html>

  <head>
    <title>List of MPs</title>

    <!--specific style sheet for the portfolio example-->
    <link rel="stylesheet" type="text/css" href="index.css"/>

    <!--start of JavaScript for sorting results table-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="./backend/jquery.tablesorter.js"></script>

    <script>
        $(function(){
          $("#results_table").tablesorter();
        });
    </script>
    <!--end of JavaScript for sorting results table-->

    <?php include "./template_top.php"?>

    <h1 class="center">List of MPs</h1>

    <form action="" method="post">
      <div class="options">
        <div class="option">
          <label for="gender">Gender:</label>
          <select name="gender" id="gender">
            <option value="all">All</option>
            <option value="male" <?php echo $gender_default_m; ?>>Men</option>
            <option value="female" <?php echo $gender_default_f; ?>>Women</option>
          </select>
        </div>
        <div class="option">
          <label for="party">Party:</label>
          <select name="party" id="party">
            <option value="all">All</option>
            <option value="conservative" <?php echo $con_default; ?>>Conservative</option>
            <option value="labour" <?php echo $labour_default; ?>>Labour</option>
            <option value="libdem" <?php echo $libdem_default; ?>>Lib Dem</option>
            <option value="snp" <?php echo $snp_default; ?>>SNP</option>
            <option value="dup" <?php echo $dup_default; ?>>DUP</option>
            <option value="sinn_fein" <?php echo $sinn_default; ?>>Sinn Fein</option>
            <option value="plaid" <?php echo $plaid_default; ?>>Plaid Cymru</option>
            <option value="sdlp" <?php echo $sdlp_default; ?>>SDLP</option>
            <option value="green" <?php echo $green_default; ?>>Green</option>
            <option value="alliance" <?php echo $alliance_default; ?>>Alliance</option>
            <option value="independent" <?php echo $ind_default; ?>>Independent</option>
            <option value="speaker" <?php echo $speaker_default; ?>>Speaker</option>
          </select>
        </div>
        <div class="option">
          <label for="frontbench">Frontbench:</label>
          <select name="frontbench" id="frontbench">
            <option value="-">-</option>
            <option value="yes" <?php echo $frontbench_default_y; ?>>Yes</option>
            <option value="no" <?php echo $frontbench_default_n; ?>>No</option>
          </select>
        </div>
        <div class="option">
          <label for="payroll">Payroll:</label>
          <select name="payroll" id="payroll">
            <option value="-">-</option>
            <option value="yes" <?php echo $payroll_default_y; ?>>Yes</option>
            <option value="no" <?php echo $payroll_default_n; ?>>No</option>
          </select>
        </div>
        <div class="option">
          <label for="cabinet">Cabinet:</label>
          <select name="cabinet" id="cabinet">
            <option value="-">-</option>
            <option value="yes" <?php echo $cabinet_default_y; ?>>Yes</option>
            <option value="no" <?php echo $cabinet_default_n; ?>>No</option>
          </select>
        </div>
        <div class="option">
          <label for="select_committees">Select Committees:</label>
          <select name="select_committees" id="select_committees">
            <option value="-">-</option>
            <option value="yes" <?php echo $select_comm_default_all; ?>>All</option>
            <option value="no" <?php echo $select_comm_default_none; ?>>None</option>
          </select>
        </div>
        <div class="option">
          <label for="personality">Personality:</label>
          <select name="personality" id="personality">
            <option value="-">-</option>
            <option value="agreeableness" <?php echo $agreeableness_selected; ?>>Agreeableness</option>
            <option value="altruism" <?php echo $altruism_selected; ?>>Altruism</option>
            <option value="cooperation" <?php echo $cooperation_selected; ?>>Cooperation</option>
            <option value="modesty" <?php echo $modesty_selected; ?>>Modesty</option>
            <option value="morality" <?php echo $morality_selected; ?>>Morality</option>
            <option value="sympathy" <?php echo $sympathy_selected; ?>>Sympathy</option>
            <option value="trust" <?php echo $trust_selected; ?>>Trust</option>
            <option value="conscientiousness" <?php echo $conscientiousness_selected; ?>>Conscientiousness</option>
            <option value="achievement_striving" <?php echo $achievement_striving_selected; ?>>Achievement striving</option>
            <option value="cautiousness" <?php echo $cautiousness_selected; ?>>Cautiousness</option>
            <option value="dutifulness" <?php echo $dutifulness_selected; ?>>Dutifulness</option>
            <option value="orderliness" <?php echo $orderliness_selected; ?>>Orderliness</option>
            <option value="self_discipline" <?php echo $self_discipline_selected; ?>>Self-discipline</option>
            <option value="self_efficacy" <?php echo $self_efficacy_selected; ?>>Self-efficacy</option>
            <option value="extraversion" <?php echo $extraversion_selected; ?>>Extraversion</option>
            <option value="activity_level" <?php echo $activity_level_selected; ?>>Activity level</option>
            <option value="assertiveness" <?php echo $assertiveness_selected; ?>>Assertiveness</option>
            <option value="cheerfulness" <?php echo $cheerfulness_selected; ?>>Cheerfulness</option>
            <option value="excitement_seeking" <?php echo $excitement_seeking_selected; ?>>Excitement seeking</option>
            <option value="friendliness" <?php echo $friendliness_selected; ?>>Friendliness</option>
            <option value="gregariousness" <?php echo $gregariousness_selected; ?>>Gregariousness</option>
            <option value="neuroticism" <?php echo $neuroticism_selected; ?>>Emotional range</option>
            <option value="anger" <?php echo $anger_selected; ?>>Anger</option>
            <option value="anxiety" <?php echo $anxiety_selected; ?>>Anxiety</option>
            <option value="depression" <?php echo $depression_selected; ?>>Depression</option>
            <option value="immoderation" <?php echo $immoderation_selected; ?>>Immoderation</option>
            <option value="self_consciousness" <?php echo $self_consciousness_selected; ?>>Self-consciousness</option>
            <option value="vulnerability" <?php echo $vulnerability_selected; ?>>Vulnerability</option>
            <option value="openness" <?php echo $openness_selected; ?>>Openness</option>
            <option value="adventurousness" <?php echo $adventurousness_selected; ?>>Adventurousness</option>
            <option value="artistic_interests" <?php echo $artistic_interests_selected; ?>>Artistic interests</option>
            <option value="emotionality" <?php echo $emotionality_selected; ?>>Emotionality</option>
            <option value="imagination" <?php echo $imagination_selected; ?>>Imagination</option>
            <option value="intellect" <?php echo $intellect_selected; ?>>Intellect</option>
            <option value="authority_challenging" <?php echo $authority_challenging_selected; ?>>Authority challenging</option>
          </select>
        </div>
        <div class="option">
          <label for="area">Area:</label>
          <select name="area" id="area">
            <option value="-">-</option>
            <optgroup label="Country">
            <option value="england" <?php echo $england_selected; ?>>England</option>
            <option value="scotland" <?php echo $scotland_selected; ?>>Scotland</option>
            <option value="wales" <?php echo $wales_selected; ?>>Wales</option>
            <option value="northern_ireland" <?php echo $northern_ireland_selected; ?>>Northern Ireland</option>

            <optgroup label="Region">
            <option value="south_east" <?php echo $south_east_selected; ?>>South East</option>
            <option value="west_midlands" <?php echo $west_midlands_selected; ?>>West Midlands</option>
            <option value="north_west" <?php echo $north_west_selected; ?>>North West</option>
            <option value="east_midland" <?php echo $east_midland_selected; ?>>East Midlands</option>
            <option value="london" <?php echo $london_selected; ?>>London</option>
            <option value="east_of_england" <?php echo $east_of_england_selected; ?>>East of England</option>
            <option value="south_west" <?php echo $south_west_selected; ?>>South West</option>
            <option value="north_east" <?php echo $north_east_selected; ?>>North East</option>

            <optgroup label="South East">
            <option value="hampshire" <?php echo $hampshire_selected; ?>>Hampshire</option>
            <option value="west_sussex" <?php echo $west_sussex_selected; ?>>West Sussex</option>
            <option value="kent" <?php echo $kent_selected; ?>>Kent</option>
            <option value="buckinghamshire" <?php echo $buckinghamshire_selected; ?>>Buckinghamshire</option>
            <option value="oxfordshire" <?php echo $oxfordshire_selected; ?>>Oxfordshire</option>
            <option value="east_sussex" <?php echo $east_sussex_selected; ?>>East Sussex</option>
            <option value="berkshire" <?php echo $berkshire_selected; ?>>Berkshire</option>
            <option value="surrey" <?php echo $surrey_selected; ?>>Surrey</option>
            <option value="isle_of_wight" <?php echo $isle_of_wight_selected; ?>>Isle of Wight</option>

            <optgroup label="West Midlands"</option>
            <option value="hereford_and_worcester" <?php echo $hereford_and_worcester_selected; ?>>Hereford & Worcester</option>
            <option value="staffordshire" <?php echo $staffordshire_selected; ?>>Staffordshire</option>
            <option value="warwickshire" <?php echo $warwickshire_selected; ?>>Warwickshire</option>
            <option value="shropshire" <?php echo $shropshire_selected; ?>>Shropshire</option>
            <option value="walsall" <?php echo $walsall_selected; ?>>Walsall</option>
            <option value="birmingham" <?php echo $birmingham_selected; ?>>Birmingham</option>
            <option value="coventry" <?php echo $coventry_selected; ?>>Coventry</option>
            <option value="dudley" <?php echo $dudley_selected; ?>>Dudley</option>
            <option value="sandwell" <?php echo $sandwell_selected; ?>>Sandwell</option>
            <option value="solihull" <?php echo $solihull_selected; ?>>Solihull</option>
            <option value="wolverhampton" <?php echo $wolverhampton_selected; ?>>Wolverhampton</option>

            <optgroup label="North West"</option>
            <option value="cumbria" <?php echo $cumbria_selected; ?>>Cumbria</option>
            <option value="lancashire" <?php echo $lancashire_selected; ?>>Lancashire</option>
            <option value="cheshire" <?php echo $cheshire_selected; ?>>Cheshire</option>
            <option value="trafford" <?php echo $trafford_selected; ?>>Trafford</option>
            <option value="oldham" <?php echo $oldham_selected; ?>>Oldham</option>
            <option value="tameside" <?php echo $tameside_selected; ?>>Tameside</option>
            <option value="wirral" <?php echo $wirral_selected; ?>>Wirral</option>
            <option value="bolton" <?php echo $bolton_selected; ?>>Bolton</option>
            <option value="sefton" <?php echo $sefton_selected; ?>>Sefton</option>
            <option value="bury" <?php echo $bury_selected; ?>>Bury</option>
            <option value="stockport" <?php echo $stockport_selected; ?>>Stockport</option>
            <option value="rochdale" <?php echo $rochdale_selected; ?>>Rochdale</option>
            <option value="wigan" <?php echo $wigan_selected; ?>>Wigan</option>
            <option value="liverpool" <?php echo $liverpool_selected; ?>>Liverpool</option>
            <option value="manchester" <?php echo $manchester_selected; ?>>Manchester</option>
            <option value="st_helens" <?php echo $st_helens_selected; ?>>St. Helens</option>

            <optgroup label="East Midlands"</option>
            <option value="derbyshire" <?php echo $derbyshire_selected; ?>>Derbyshire</option>
            <option value="nottinghamshire" <?php echo $nottinghamshire_selected; ?>>Nottinghamshire</option>
            <option value="lincolnshire" <?php echo $lincolnshire_selected; ?>>Lincolnshire</option>
            <option value="leicestershire" <?php echo $leicestershire_selected; ?>>Leicestershire</option>
            <option value="northamptonshire" <?php echo $northamptonshire_selected; ?>>Northamptonshire</option>

            <optgroup label="Yorkshire and The Humber"</option>
            <option value="humberside" <?php echo $humberside_selected; ?>>Humberside</option>
            <option value="north_yorkshire" <?php echo $north_yorkshire_selected; ?>>North Yorkshire</option>
            <option value="barnsley" <?php echo $barnsley_selected; ?>>Barnsley</option>
            <option value="kirklees" <?php echo $kirklees_selected; ?>>Kirklees</option>
            <option value="bradford" <?php echo $bradford_selected; ?>>Bradford</option>
            <option value="calderdale" <?php echo $calderdale_selected; ?>>Calderdale</option>
            <option value="doncaster" <?php echo $doncaster_selected; ?>>Doncaster</option>
            <option value="wakefield" <?php echo $wakefield_selected; ?>>Wakefield</option>
            <option value="leeds" <?php echo $leeds_selected; ?>>Leeds</option>
            <option value="rotherham" <?php echo $rotherham_selected; ?>>Rotherham</option>
            <option value="sheffield" <?php echo $sheffield_selected; ?>>Sheffield</option>

            <optgroup label="East of England"</option>
            <option value="essex" <?php echo $essex_selected; ?>>Essex</option>
            <option value="bedfordshire" <?php echo $bedfordshire_selected; ?>>Bedfordshire</option>
            <option value="norfolk" <?php echo $norfolk_selected; ?>>Norfolk</option>
            <option value="hertfordshire" <?php echo $hertfordshire_selected; ?>>Hertfordshire</option>
            <option value="suffolk" <?php echo $suffolk_selected; ?>>Suffolk</option>
            <option value="cambridgeshire" <?php echo $cambridgeshire_selected; ?>>Cambridgeshire</option>

            <optgroup label="South West"</option>
            <option value="avon" <?php echo $avon_selected; ?>>Avon</option>
            <option value="dorset" <?php echo $dorset_selected; ?>>Dorset</option>
            <option value="somerset" <?php echo $somerset_selected; ?>>Somerset</option>
            <option value="cornwall" <?php echo $cornwall_selected; ?>>Cornwall</option>
            <option value="gloucestershire" <?php echo $gloucestershire_selected; ?>>Gloucestershire</option>
            <option value="wiltshire" <?php echo $wiltshire_selected; ?>>Wiltshire</option>
            <option value="devon" <?php echo $devon_selected; ?>>Devon</option>

            <optgroup label="North East"</option>
            <option value="northumberland" <?php echo $northumberland_selected; ?>>Northumberland</option>
            <option value="county_durham" <?php echo $county_durham_selected; ?>>County Durham</option>
            <option value="cleveland" <?php echo $cleveland_selected; ?>>Cleveland</option>
            <option value="gateshead" <?php echo $gateshead_selected; ?>>Gateshead</option>
            <option value="south_tyneside" <?php echo $south_tyneside_selected; ?>>South Tyneside</option>
            <option value="newcastle_upon_tyne" <?php echo $newcastle_upon_tyne_selected; ?>>Newcastle upon Tyne</option>
            <option value="north_tyneside" <?php echo $north_tyneside_selected; ?>>North Tyneside

            <optgroup label="Scotland"</option>
            <option value="aberdeen_city" <?php echo $aberdeen_city_selected; ?>>Aberdeen City</option>
            <option value="aberdeenshire" <?php echo $aberdeenshire_selected; ?>>Aberdeenshire</option>
            <option value="north_lanarkshire" <?php echo $north_lanarkshire_selected; ?>>North Lanarkshire</option>
            <option value="angus" <?php echo $angus_selected; ?>>Angus</option>
            <option value="argyll_and_bute" <?php echo $argyll_and_bute_selected; ?>>Argyll & Bute</option>
            <option value="east_ayrshire" <?php echo $east_ayrshire_selected; ?>>East Ayrshire</option>
            <option value="south_ayrshire" <?php echo $south_ayrshire_selected; ?>>South Ayrshire</option>
            <option value="north_ayrshire" <?php echo $north_ayrshire_selected; ?>>North Ayrshire</option>
            <option value="scottish_borders" <?php echo $scottish_borders_selected; ?>>Scottish Borders</option>
            <option value="highland" <?php echo $highland_selected; ?>>Highland</option>
            <option value="east_dunbartonshire" <?php echo $east_dunbartonshire_selected; ?>>East Dunbartonshire</option>
            <option value="dumfries_and_galloway" <?php echo $dumfries_and_galloway_selected; ?>>Dumfries & Galloway</option>
            <option value="south_lanarkshire" <?php echo $south_lanarkshire_selected; ?>>South Lanarkshire</option>
            <option value="west_dunbartonshire" <?php echo $west_dunbartonshire_selected; ?>>West Dunbartonshire</option>
            <option value="dundee_city" <?php echo $dundee_city_selected; ?>>Dundee City</option>
            <option value="fife" <?php echo $fife_selected; ?>>Fife</option>
            <option value="east_lothian" <?php echo $east_lothian_selected; ?>>East Lothian</option>
            <option value="city_of_edinburgh" <?php echo $city_of_edinburgh_selected; ?>>City of Edinburgh</option>
            <option value="falkirk" <?php echo $falkirk_selected; ?>>Falkirk</option>
            <option value="glasgow_city" <?php echo $glasgow_city_selected; ?>>Glasgow City</option>
            <option value="inverclyde" <?php echo $inverclyde_selected; ?>>Inverclyde</option>
            <option value="west_lothian" <?php echo $west_lothian_selected; ?>>West Lothian</option>
            <option value="midlothian" <?php echo $midlothian_selected; ?>>Midlothian</option>
            <option value="moray" <?php echo $moray_selected; ?>>Moray</option>
            <option value="na_h_eileanan_an_lar" <?php echo $na_h_eileanan_an_lar_selected; ?>>Na h-Eileanan an lar</option>
            <option value="clackmannanshire" <?php echo $clackmannanshire_selected; ?>>Clackmannanshire</option>
            <option value="perth_and_kinross" <?php echo $perth_and_kinross_selected; ?>>Perth & Kinross</option>
            <option value="orkney_islands" <?php echo $orkney_islands_selected; ?>>Orkney Islands</option>
            <option value="shetland_islands" <?php echo $shetland_islands_selected; ?>>Shetland Islands</option>
            <option value="renfrewshire" <?php echo $renfrewshire_selected; ?>>Renfrewshire</option>
            <option value="east_renfrewshire" <?php echo $east_renfrewshire_selected; ?>>East Renfrewshire</option>
            <option value="stirling" <?php echo $stirling_selected; ?>>Stirling

            <optgroup label="Wales"></option>
            <option value="neath_port_talbot" <?php echo $neath_port_talbot_selected; ?>>Neath Port Talbot</option>
            <option value="flintshire" <?php echo $flintshire_selected; ?>>Flintshire</option>
            <option value="gwynedd" <?php echo $gwynedd_selected; ?>>Gwynedd</option>
            <option value="blaenau_gwent" <?php echo $blaenau_gwent_selected; ?>>Blaenau Gwent</option>
            <option value="powys" <?php echo $powys_selected; ?>>Powys</option>
            <option value="bridgend" <?php echo $bridgend_selected; ?>>Bridgend</option>
            <option value="the_vale_of_glamorgan" <?php echo $the_vale_of_glamorgan_selected; ?>>The Vale of Glamorgan</option>
            <option value="caerphilly" <?php echo $caerphilly_selected; ?>>Caerphilly</option>
            <option value="cardiff" <?php echo $cardiff_selected; ?>>Cardiff</option>
            <option value="carmarthenshire" <?php echo $carmarthenshire_selected; ?>>Carmarthenshire</option>
            <option value="ceredigion" <?php echo $ceredigion_selected; ?>>Ceredigion</option>
            <option value="denbighshire" <?php echo $denbighshire_selected; ?>>Denbighshire</option>
            <option value="wrexham" <?php echo $wrexham_selected; ?>>Wrexham</option>
            <option value="conwy" <?php echo $conwy_selected; ?>>Conwy</option>
            <option value="rhondda_cynon_taff" <?php echo $rhondda_cynon_taff_selected; ?>>Rhondda, Cynon, Taff</option>
            <option value="swansea" <?php echo $swansea_selected; ?>>Swansea</option>
            <option value="merthyr_tydfil" <?php echo $merthyr_tydfil_selected; ?>>Merthyr Tydfil</option>
            <option value="monmouthshire" <?php echo $monmouthshire_selected; ?>>Monmouthshire</option>
            <option value="torfaen" <?php echo $torfaen_selected; ?>>Torfaen</option>
            <option value="newport" <?php echo $newport_selected; ?>>Newport</option>
            <option value="pembrokeshire" <?php echo $pembrokeshire_selected; ?>>Pembrokeshire</option>
            <option value="isle_of_anglesey" <?php echo $isle_of_anglesey_selected; ?>>Isle of Anglesey</option>

            <optgroup label="Northern Ireland">
            <option value="carrickfergus" <?php echo $carrickfergus_selected; ?>>Carrickfergus</option>
            <option value="larne" <?php echo $larne_selected; ?>>Larne</option>
            <option value="newtownabbey" <?php echo $newtownabbey_selected; ?>>Newtownabbey</option>
            <option value="ballymena" <?php echo $ballymena_selected; ?>>Ballymena</option>
            <option value="ballymoney" <?php echo $ballymoney_selected; ?>>Ballymoney</option>
            <option value="noyle" <?php echo $noyle_selected; ?>>Moyle</option>
            <option value="antrim" <?php echo $antrim_selected; ?>>Antrim</option>
            <option value="belfast" <?php echo $belfast_selected; ?>>Belfast</option>
            <option value="castlereagh" <?php echo $castlereagh_selected; ?>>Castlereagh</option>
            <option value="lisburn" <?php echo $lisburn_selected; ?>>Lisburn</option>
            <option value="coleraine" <?php echo $coleraine_selected; ?>>Coleraine</option>
            <option value="limavady" <?php echo $limavady_selected; ?>>Limavady</option>
            <option value="dungannon" <?php echo $dungannon_selected; ?>>Dungannon</option>
            <option value="fermanagh" <?php echo $fermanagh_selected; ?>>Fermanagh</option>
            <option value="derry" <?php echo $derry_selected; ?>>Derry</option>
            <option value="banbridge" <?php echo $banbridge_selected; ?>>Banbridge</option>
            <option value="cookstown" <?php echo $cookstown_selected; ?>>Cookstown</option>
            <option value="magherafelt" <?php echo $magherafelt_selected; ?>>Magherafelt</option>
            <option value="armagh" <?php echo $armagh_selected; ?>>Armagh</option>
            <option value="newry_and_mourne" <?php echo $newry_and_mourne_selected; ?>>Newry and Mourne</option>
            <option value="ards" <?php echo $ards_selected; ?>>Ards</option>
            <option value="north_down" <?php echo $north_down_selected; ?>>North Down</option>
            <option value="craigavon" <?php echo $craigavon_selected; ?>>Craigavon</option>
            <option value="omagh" <?php echo $omagh_selected; ?>>Omagh</option>
          </select>
        </div>
      </div>
      <p class="centre">
        <input type="submit" name="SubmitButton"/>
      </p>
    </form>

    <p><a href='index.php'>Clear inputs</a></p>

    <?php

      require_once "./config.php";
      #require_once "./config_web.php";

      if ($personality == "-"){
        #now let's build our SELECT str for SQL
        $sql_str = "SELECT * FROM all_mps WHERE ";
        $sql_str .= "("; #parentheses are crucial for the AND bits

        $sql_str .= "1=1 AND ";

        if($gender_selected != "all"){
          $sql_str .= "gender = '\$gender_selected' AND ";
        };

        if($parties_selected != "all"){
          $sql_str .= "party = '\$parties_selected' AND ";
        };

        if($frontbench != "-"){
          $sql_str .= "frontbench = '\$frontbench' AND ";
        };

        if($payroll != "-"){
          $sql_str .= "payroll = '\$payroll' AND ";
        };

        if($cabinet != "-"){
          $sql_str .= "cabinet = '\$cabinet' AND ";
        };

        if($select_committees != "-"){
          if($select_committees == "yes"){
            $sql_str .= "select_committees != 'no' AND ";
          }else{
            $sql_str .= "select_committees = '\$select_committees' AND ";
          };
        };

        if($area != "-"){
          $sql_str .= "(country = '\$area' OR region = '\$area' OR county = '\$area')";
        }

        #check for redundant "and", and then remove if there
        if(substr($sql_str, -5) == " AND "){
          $sql_str = substr($sql_str, 0, -5);
        }

        $sql_str .= ")";
        #echo $sql_str;

        #turn the string into actual code so that the variables are treated as variables.
        eval("\$sql_str = \"$sql_str\";");

        $sql = strval($sql_str);
        #echo $sql;
      }else{ #personality selected, so need to join two tables together

        $sql_str = "SELECT a.name, a.country, a.region, a.county, a.constituency, a.party, a.intake, a.post, a.dep, a.select_committees, ";

        $sql_str .= "b." . $personality;
        $sql_str .= " FROM all_mps a JOIN all_mps_personality b ON a.name=b.name WHERE ";
        $sql_str .= "("; #parentheses are crucial for the AND bits

        $sql_str .= "1=1 AND ";

        if($gender_selected != "all"){
          $sql_str .= "a.gender = '\$gender_selected' AND ";
        };

        if($parties_selected != "all"){
          $sql_str .= "a.party = '\$parties_selected' AND ";
        };

        if($frontbench != "-"){
          $sql_str .= "a.frontbench = '\$frontbench' AND ";
        };

        if($payroll != "-"){
          $sql_str .= "a.payroll = '\$payroll' AND ";
        };

        if($cabinet != "-"){
          $sql_str .= "a.cabinet = '\$cabinet' AND ";
        };

        if($select_committees != "-"){
          if($select_committees == "yes"){
            $sql_str .= "a.select_committees != 'no' AND ";
          }else{
            $sql_str .= "a.select_committees = '\$select_committees' AND ";
          };
        };

        if($area != "-"){
          $sql_str .= "(country = '\$area' OR region = '\$area' OR county = '\$area')";
        }

        #check for redundant "and", and then remove if there
        if(substr($sql_str, -5) == " AND "){
          $sql_str = substr($sql_str, 0, -5);
        }

        $sql_str .= ")";
        #echo $sql_str;

        #turn the string into actual code so that the variables are treated as variables.
        eval("\$sql_str = \"$sql_str\";");

        $sql = strval($sql_str);
        #echo $sql;

        #$sql = "select a.name, a.constituency, a.party, b.anger from all_mps a join all_mps_personality b on a.name=b.name WHERE (1=1 AND a.party = 'Liberal Democrat')";
      }
    ?>

    <!--email results to yourself-->
    <h3>Download or email</h3>
    <form action="email_sent.php" method="post">
      <div class="grid-template-email">
        <div class="email-input-box">
          <label for="email">Email:</label><input type="text" name="email"><br><br>
          <input type="hidden" name="personality" value="<?php echo $personality; ?>">
          <input type="hidden" name="sql" value="<?php echo $sql; ?>">
        </div>
        <div class="email-checkbox-xlsx">
          <input type="checkbox" id="xlsx" name="xlsx" value="xlsx" checked>
          <label for="xlsx">Excel</label><br>
        </div>
        <div class="email-checkbox-csv">
          <input type="checkbox" id="csv" name="csv" value="csv">
          <label for="csv">CSV</label><br>
        </div>
        <div class="email-submit-button">
          <input type="submit" value="Send">
        </div>
        <div class="download-button">
          <button type="button">Download</button>
        </div>
      </div>
    </form>

    <?php

      $result = $con->query($sql);

      if(mysqli_num_rows($result) > 0){
        echo "<table id='results_table'><tbody><thead><tr><td>Name</td><td>Constituency</td><td>Party</td>";
        if($frontbench == "yes"){
          echo "<td>Frontbench</td>";
          echo "<td>Department</td>";
        }
        if($payroll == "yes"){
          echo "<td>Payroll</td>";
          echo "<td>Department</td>";
        }
        if($cabinet == "yes"){
          echo "<td>Cabinet</td>";
          echo "<td>Department</td>";
        }
        if($select_committees == "yes"){
          echo "<td>Select Committees</td>";
        }
        if($personality != "-"){
          echo "<td>" . $personality . "</td>";
        }
        echo "</tr></thead>";
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["constituency"] . "</td>";
          echo "<td>" . $row["party"] . "</td>";
          if($frontbench == "yes"){
            echo "<td>" . $row["post"] . "</td>";
            echo "<td>" . $row["dep"] . "</td>";
          }
          if($payroll == "yes"){
            echo "<td>" . $row["post"] . "</td>";
            echo "<td>" . $row["dep"] . "</td>";
          }
          if($cabinet == "yes"){
            echo "<td>" . $row["post"] . "</td>";
            echo "<td>" . $row["dep"] . "</td>";
          }
          if($select_committees == "yes"){
            echo "<td>" . $row["select_committees"] . "</td>";
          }
          if($personality != "-"){
            echo "<td>" . $row[$personality] . "</td>";
          }
          echo "</tr>";
          }
        echo "</tbody></table>";
      } else {
        echo "No results.";
      }

     ?>

    <?php include "../../template_bottom.php"?>
