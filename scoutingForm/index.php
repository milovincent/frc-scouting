<!doctype html>

<html class="no-js" lang="en">
<head>
  <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scouting - Bovine Intervention</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>


  <form id='scoutingForm' onsubmit="check()" method="post" action="app.php" name="scoutingForm">
    <!-- reveal -->
    <div class="reveal" id="startingInfo" data-reveal data-options="closeOnClick:false;closeOnEsc:false;">
      <div class="grid-x grid-padding-x">
        <div class="medium-4 cell">
          <label>Scout Name</label>
          <input class='required' type="text" id='scoutName' value='' name='scoutName' />
        </div>
        <div class="medium-2 cell">
          <label>Match Number</label>
          <input class='required' type="number" id='matchNumber' name='matchNumber' min='1' step='1' />
        </div>
        <div class="medium-2 cell">
          <label>Team Number</label>
          <select  class='required' id='teamNumber' name='teamNumber'>
            <option value="" disabled selected>Select...</option>
            <option value='449'>Blair Robot Project (449)</option>
            <option value='614'>Night Hawks (614)</option>
            <option value='686'>Bovine Intervention (us, you dingus)</option>
            <option value='836'>The RoboBees (836)</option>
            <option value='888'>Robotiators (888)</option>
            <option value='1111'>Power Hawk Robotics (1111)</option>
            <option value='1123'>AIM Robotics (1123)</option>
            <option value='1389'>The Body Electric (1389)</option>
            <option value='1446'>Robo Knights (1446)</option>
            <option value='1629'>The Garrett Coalition (1629)</option>
            <option value='1719'>The Umbrella Corporation (1719)</option>
            <option value='1727'>REX (1727)</option>
            <option value='1885'>ILITE Robotics (1885)</option>
            <option value='1915'>MTHS Firebird Robotics (1915)</option>
            <option value='2186'>Dogs of Steel (2186)</option>
            <option value='2199'>Robo-Lions (2199)</option>
            <option value='2377'>C Company (2377)</option>
            <option value='2537'>Space RAIDers (2537)</option>
            <option value='2849'>Ursa Major (2849)</option>
            <option value='2900'>The Mighty Penguins (2900)</option>
            <option value='2912'>Panther Robotics (2912)</option>
            <option value='2914'>TIGER PRIDE (2914)</option>
            <option value='2961'>Crimson Tide Engineers/Coolidge Colts (2961)</option>
            <option value='2988'>RoboGenesis (2988)</option>
            <option value='3373'>Team RoboHawk (3373)</option>
            <option value='3389'>TEC Tigers (3389)</option>
            <option value='3650'>RoboRaptors (3650)</option>
            <option value='3714'>SOAR (3714)</option>
            <option value='3748'>Ragnarok Robotics (3748)</option>
            <option value='3793'>CyberTitans (3793)</option>
            <option value='3941'>Absolute Zero Electricity (3941)</option>
            <option value='4099'>The Falcons (4099)</option>
            <option value='4456'>Mech Cadets (4456)</option>
            <option value='4464'>Team Illusion (4464)</option>
            <option value='4472'>SuperNOVA (4472)</option>
            <option value='4505'>McDonogh Robotics (4505)</option>
            <option value='4514'>Calvert STEAM Works (4514)</option>
            <option value='4541'>CAV-ineers (4541)</option>
            <option value='4638'>Jagbots (4638)</option>
            <option value='4821'>CyberUs (4821)</option>
            <option value='4949'>Robo Panthers (4949)</option>
            <option value='5115'>Knight Riders (5115)</option>
            <option value='5243'>Aegis Robotics (5243)</option>
            <option value='5338'>RoboLoCo (5338)</option>
            <option value='5549'>Gryphon Robotics (5549)</option>
            <option value='5587'>Titan Robotics (5587)</option>
            <option value='5830'>LIFE Engineering (5830)</option>
            <option value='5841'>The Patriots (5841)</option>
            <option value='5945'>|CTRL| Absolute Control (5945)</option>
            <option value='6213'>Team Quantum (6213)</option>
            <option value='6239'>The Irrational Engineers (6239)</option>
            <option value='6326'>Baltimore Bolts (6326)</option>
            <option value='6584'>AHC Transformers (6584)</option>
            <option value='6863'>Cyber Squirrels (6863)</option>
            <option value='6893'>Bladerunners (6893)</option>
            <option value='7714'>RedRoad (7714)</option>
            <option value='7770'>Infinite Voltage (7770)</option>
            <option value='7879'>TigerBots (7879)</option>
            <option value='7886'>Cadet Robotics (7886)</option>
          </select>
        </div>
        <div class="medium-2 cell">
          <label>Team Position</label>
          <select class='required' id='teamPosition' name='teamPosition'>
            <option value="" disabled selected>Select...</option>
            <option value='redFar'>Red Far</option>
            <option value='redCenter'>Red Center</option>
            <option value='redClose'>Red Close</option>
            <option value='blueFar'>Blue Far</option>
            <option value='blueCenter'>Blue Center</option>
            <option value='blueClose'>Blue Close</option>
          </select>
        </div>
        <div class="medium-2 cell">
          <label>Robot Position</label>
          <select class='required' id='robotPosition' name='robotPosition'>
            <option value="" disabled selected>Select...</option>
            <option value='1'>Level 1</option>
            <option value='2'>Level 2</option>
            <option value='3'>Level 3</option>
          </select>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <button id='begin' class=" cell auto align-center button secondary" >Please fill out all fields</button>
      </div>
    </div>

    <div class="grid-x">
      <div class="cell small-12" >
        <div class="callout dark tight sticky" data-options="stickyOn: small" data-sticky data-margin-top="0">
          <div class="grid-x grid-padding-x">
            <div class='cell small-4 medium-4 large-offset-3 large-2'>
              <label>Foul</label>
              <button class='button foul'  type='button' id='foul'/>0</button>
              <input id='foulVal' type='number' value=0 name='foul' class='hidden'>
            </div>
            <div class='cell small-4 medium-4 large-offset-3 large-2'>
              <label>Tech Foul</label>
              <button class='button foul'  type='button' id='techFoul'/>0</button>
              <input id='techFoulVal' type='number' value=0 name='techFoul' class='hidden'>
            </div>
          </div>
          <!-- This sticky element would stick to the window, with a marginTop of 0 -->
        </div>
      </div>
      <div class="cell small-12">
        <div style='width:100%'>
          <svg width="100%" height="100%" viewBox="0 0 2991 1404" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
              <g id="court" transform="matrix(0.867579,0,0,1,-63.9296,-95.821)">
                  <rect x="73.687" y="95.821" width="3447.38" height="1403.26" style="fill:none;"/>
                  <clipPath id="_clip1">
                      <rect x="73.687" y="95.821" width="3447.38" height="1403.26"/>
                  </clipPath>
                  <g clip-path="url(#_clip1)">
                      <g transform="matrix(1.15263,0,0,1,-190.196,95)">
                          <rect x="0.687" y="0.821" width="3447.38" height="1403.26"/>
                      </g>
                      <g id="blue-hab-1" transform="matrix(1.58688,0,0,1.16247,-590.5,-126.235)">
                          <rect x="730.623" y="552.385" width="135.168" height="496.688" style="fill:rgb(0,0,255);stroke:white;stroke-width:0.78px;"/>
                      </g>
                      <g id="blue-hab-2" transform="matrix(1.15263,0,0,0.899596,-273.226,403.898)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(0,0,255);stroke:white;stroke-width:1.05px;"/>
                      </g>
                      <g id="blue-hab-3" transform="matrix(1.15263,0,0,0.899596,-273.226,62.3632)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(0,0,255);stroke:white;stroke-width:1.05px;"/>
                      </g>
                      <g id="blue-hab-4" transform="matrix(1.15263,0,0,1.16143,-273.226,66.8006)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(0,0,255);stroke:white;stroke-width:0.92px;"/>
                      </g>
                      <g id="blue-side-1">
                          <g id="player-hatch" class="player-hatch" transform="matrix(1.15263,0,0,0.806735,-265.342,-50.8761)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
                          </g>
                          <g id="player-cargo" class="player-cargo" transform="matrix(1.15263,0,0,0.4385,-265.342,178.277)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.3px;"/>
                          </g>
                          <g id="depot" class="depot" transform="matrix(1.21612,0,0,0.4385,-304.487,391.021)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.24px;"/>
                          </g>
                          <g id="peek" class="peek" transform="matrix(0.549338,0,0,3.00567,77.657,-511.59)">
                              <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
                          </g>
                      </g>
                      <g id="red-side-1" transform="matrix(-1,0,-0,1,3594.75,-6.84041)">
                          <g id="player-hatch1" serif:id="player-hatch" class="player-hatch" transform="matrix(1.15263,0,0,0.806735,-300.326,-44.0357)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
                          </g>
                          <g id="player-cargo1" serif:id="player-cargo" class="player-cargo" transform="matrix(1.15263,0,0,0.439155,-300.326,184.998)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.29px;"/>
                          </g>
                          <g id="depot1" serif:id="depot" class="depot" transform="matrix(1.20459,0,0,0.439155,-325.955,397.743)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.25px;"/>
                          </g>
                          <g id="peek1" serif:id="peek" class="peek" transform="matrix(0.549338,0,0,3.00567,77.657,-511.59)">
                              <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
                          </g>
                      </g>
                      <g id="blue-side-2" transform="matrix(1,0,0,-1,-4.3472,1601.74)">
                          <g id="player-hatch2" serif:id="player-hatch" class="player-hatch" transform="matrix(1.15263,0,0,0.806735,-265.98,-44.0357)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
                          </g>
                          <g id="player-cargo2" serif:id="player-cargo" class="player-cargo" transform="matrix(1.15263,0,0,0.434618,-265.98,185.823)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.3px;"/>
                          </g>
                          <g id="depot2" serif:id="depot" class="depot" transform="matrix(1.21829,0,0,0.434618,-301.675,384.726)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.24px;"/>
                          </g>
                          <g id="peek2" serif:id="peek" class="peek" transform="matrix(0.618697,0,0,3.00567,77.6093,-511.59)">
                              <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
                          </g>
                      </g>
                      <g id="red-side-2" transform="matrix(-1,0,0,-1,3599.1,1594.9)">
                          <g id="player-hatch3" serif:id="player-hatch" class="player-hatch" transform="matrix(1.15263,0,0,0.806735,-295.979,-44.0357)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
                          </g>
                          <g id="player-cargo3" serif:id="player-cargo" class="player-cargo" transform="matrix(1.15263,0,0,0.438519,-295.979,185.114)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.3px;"/>
                          </g>
                          <g id="depot3" serif:id="depot" class="depot" transform="matrix(1.19773,0,0,0.438519,-318.806,375.012)">
                              <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.25px;"/>
                          </g>
                          <g id="peek3" serif:id="peek" class="peek" transform="matrix(0.549338,0,0,3.00567,77.657,-511.59)">
                              <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
                          </g>
                      </g>
                      <g id="red-hab-1" transform="matrix(-1.58688,0,0,1.16247,4215.15,-126.235)">
                          <rect x="730.623" y="552.385" width="135.168" height="496.688" style="fill:rgb(255,0,0);stroke:white;stroke-width:0.78px;"/>
                      </g>
                      <g id="red-hab-3" transform="matrix(-1.15263,0,0,0.899596,3897.88,403.898)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:white;stroke-width:1.05px;"/>
                      </g>
                      <g id="red-hab-2" transform="matrix(-1.15263,0,0,0.899596,3897.88,62.3632)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:white;stroke-width:1.05px;"/>
                      </g>
                      <g id="red-hab-4" transform="matrix(-1.15263,0,0,1.16143,3897.88,66.8006)">
                          <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:white;stroke-width:0.92px;"/>
                      </g>
                      <g transform="matrix(0.0367196,0,0,51.2847,2825.01,-13326.6)">
                          <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:rgb(255,0,0);stroke:white;stroke-width:0.03px;"/>
                      </g>
                      <g transform="matrix(0.0367196,0,0,51.2847,1831.51,-13326.6)">
                          <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:rgb(255,0,0);stroke:white;stroke-width:0.03px;"/>
                      </g>
                      <g transform="matrix(0.0367196,0,0,51.2847,1765.59,-13326.6)">
                          <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:rgb(0,0,255);stroke:white;stroke-width:0.03px;"/>
                      </g>
                      <g transform="matrix(0.0367196,0,0,51.2847,783.384,-13326.6)">
                          <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:rgb(0,0,255);stroke:white;stroke-width:0.03px;"/>
                      </g>
                      <g id="blue-cargo" transform="matrix(1.15263,0,0,1,196.424,-102.915)">
                          <g id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                      </g>
                      <g id="red-cargo" transform="matrix(1.15263,0,-0,1,746.226,-102.915)">
                          <g id="cargo-miss1" serif:id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch1" serif:id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss1" serif:id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="cargo1" serif:id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                      </g>
                      <g id="blue-rocket-2" transform="matrix(1.15263,0,0,1,-141.946,-523.702)">
                          <g id="cargo-miss2" serif:id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch2" serif:id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss2" serif:id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="cargo2" serif:id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                      </g>
                      <g id="red-rocket-2" transform="matrix(1.15263,0,-0,1,1086.9,-523.702)">
                          <g id="cargo-miss3" serif:id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch3" serif:id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss3" serif:id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="cargo3" serif:id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                      </g>
                      <g id="blue-rocket-1" transform="matrix(1.15263,0,0,1,-171.021,356.203)">
                          <g id="cargo-miss4" serif:id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch4" serif:id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss4" serif:id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="cargo4" serif:id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                      </g>
                      <g id="red-rocket-1" transform="matrix(1.15263,0,-0,1,1115.98,356.203)">
                          <g id="cargo-miss5" serif:id="cargo-miss" class="cargo-miss">
                              <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-289.789,49.8431)">
                                      <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,-25.3811,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>
                          <g id="hatch5" serif:id="hatch" class="hatch">
                              <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="stroke:rgb(0,0,255);stroke-width:17.33px;"/>
                              </g>
                              <g transform="matrix(1.2511,0,0,1.2511,-125.251,-118.967)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="hatch-miss5" serif:id="hatch-miss" class="hatch-miss">
                              <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                                  <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              </g>
                              <g>
                                  <g transform="matrix(1.2511,0,0,1.2511,-125.251,49.8431)">
                                      <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                                  </g>
                                  <g transform="matrix(1,0,0,1,139.937,73.5226)">
                                      <path d="M1156.8,879.125L1057.26,978.657" style="fill:none;stroke:black;stroke-width:26.67px;"/>
                                  </g>
                              </g>
                          </g>

                          <g id="cargo5" serif:id="cargo" class="cargo">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z"/>
                              <g transform="matrix(1.2511,0,0,1.2511,-289.789,-118.967)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                          <circle cx="1160.65" cy="912.846" r="210.394" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          <g transform="matrix(-1.83697e-16,1,-1,-1.83697e-16,2073.5,-247.804)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(-1,-1.22465e-16,1.22465e-16,-1,2321.3,1825.69)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <g transform="matrix(6.12323e-17,-1,1,6.12323e-17,247.804,2073.5)">
                              <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                          </g>
                          <path d="M1160.65,702.452C1044.45,702.452 950.257,796.649 950.257,912.846L1160.65,912.846L1160.65,702.452Z" style="fill:none;stroke:rgb(255,0,0);stroke-width:17.33px;"/>
                      </g>
                      <g id="broke" transform="matrix(1.56806,0,0,1.56806,147.569,-894.304)">
                          <g transform="matrix(0.73507,0,0,0.637732,-47.1164,631.434)">
                              <circle cx="1504.38" cy="1216.41" r="140.491" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:3.28px;"/>
                          </g>
                          <g transform="matrix(0.313995,0,0,0.272416,612.889,1078.08)">
                              <text x="1175.06px" y="1251.5px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:121.338px;fill:rgb(242,242,242);">B<tspan x="1274.82px 1374.58px 1481.09px 1580.85px " y="1251.5px 1251.5px 1251.5px 1251.5px ">ROKE</tspan></text>
                          </g>
                      </g>
                      <g id="field" transform="matrix(-1.56806,-1.66603e-16,2.21342e-16,-1.56806,3467.81,1606.6)">
                          <g id="drop-cargo">
                              <g id="drop" transform="matrix(0.574954,-0.866707,0.998994,0.498818,-133.561,1188.14)">
                                  <path d="M905.527,789.86C937.048,771.661 956.466,738.029 956.466,701.631C956.466,683.748 951.758,666.179 942.817,650.692L854.588,701.631L905.527,789.86Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:2.09px;"/>
                              </g>
                              <g transform="matrix(-0.48655,-5.16948e-17,5.95851e-17,-0.42212,1445.53,999.092)">
                                  <text x="592.03px" y="597.663px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:56.877px;fill:rgb(242,242,242);">D<tspan x="638.793px 685.555px 735.484px " y="597.663px 597.663px 597.663px ">ROP</tspan></text>
                              </g>
                          </g>
                          <g id="drop-hatch" transform="matrix(-0.00289686,-0.867576,1.15263,-0.00289686,142.614,1718.28)">
                              <g id="drop1" serif:id="drop" transform="matrix(0.574954,-0.866707,0.998994,0.498818,-133.561,1188.14)">
                                  <path d="M905.527,789.86C937.048,771.661 956.466,738.029 956.466,701.631C956.466,683.748 951.758,666.179 942.817,650.692L854.588,701.631L905.527,789.86Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:2.09px;"/>
                              </g>
                              <g transform="matrix(0.00114119,-0.422119,0.486548,0.000990071,825.402,1042.94)">
                                  <text x="592.03px" y="597.663px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:56.877px;fill:rgb(242,242,242);">D<tspan x="638.793px 685.555px 735.484px " y="597.663px 597.663px 597.663px ">ROP</tspan></text>
                              </g>
                          </g>
                          <g id="field-hatch">
                              <g id="_-Pie-" serif:id="(Pie)" transform="matrix(0.574954,-0.866707,0.998994,0.498818,-133.561,1188.14)">
                                  <path d="M803.648,613.402C772.127,631.601 752.709,665.234 752.709,701.631C752.709,719.515 757.417,737.083 766.358,752.57L854.588,701.631L803.648,613.402Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:2.09px;"/>
                              </g>
                              <g transform="matrix(0.545161,0,0,0.472971,402.472,477.869)">
                                  <path d="M1096.18,721.608C1118.14,721.608 1135.96,739.431 1135.96,761.385C1135.96,783.339 1118.14,801.163 1096.18,801.163C1074.23,801.163 1056.41,783.339 1056.41,761.385C1056.41,739.431 1074.23,721.608 1096.18,721.608ZM1096.18,741.496C1107.16,741.496 1116.07,750.408 1116.07,761.385C1116.07,772.362 1107.16,781.274 1096.18,781.274C1085.21,781.274 1076.3,772.362 1076.3,761.385C1076.3,750.408 1085.21,741.496 1096.18,741.496Z" style="fill:rgb(255,232,22);"/>
                              </g>
                          </g>
                          <g id="field-cargo">
                              <g id="_-Pie-1" serif:id="(Pie)" transform="matrix(0.574954,-0.866707,0.998994,0.498818,-133.561,1188.14)">
                                  <path d="M766.358,752.57C784.557,784.091 818.19,803.509 854.588,803.509C872.471,803.509 890.039,798.802 905.527,789.86L854.588,701.631L766.358,752.57Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:2.09px;"/>
                              </g>
                              <g transform="matrix(0.545161,0,0,0.472971,514.072,477.869)">
                                  <circle cx="1096.18" cy="761.385" r="39.778" style="fill:rgb(229,69,0);"/>
                              </g>
                          </g>
                      </g>
                      <g id="autoMove">
                          <g transform="matrix(1.15263,0,-2.84146e-32,1,73.6873,95.821)">
                              <path d="M992.177,664.339C992.177,646.113 977.379,631.315 959.153,631.315L731.769,631.315C713.543,631.315 698.745,646.113 698.745,664.339L698.745,730.388C698.745,748.614 713.543,763.412 731.769,763.412L959.153,763.412C977.379,763.412 992.177,748.614 992.177,730.388L992.177,664.339Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:3.28px;"/>
                          </g>
                          <g transform="matrix(0.562765,0,0,0.488243,638.883,438.266)">
                              <text x="537.229px" y="716.177px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:67.767px;fill:rgb(242,242,242);">M<tspan x="600.456px 659.944px 711.921px 763.898px 819.614px 845.218px 870.823px " y="716.177px 716.177px 716.177px 716.177px 716.177px 716.177px 716.177px ">OVED IN</tspan></text>
                              <text x="483.644px" y="786.161px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:67.767px;fill:rgb(242,242,242);">S<tspan x="535.621px 591.337px 647.053px 702.768px 754.745px 801.692px 861.18px 916.896px " y="786.161px 786.161px 786.161px 786.161px 786.161px 786.161px 786.161px 786.161px ">ANDSTORM</tspan></text>
                          </g>
                      </g>
                      <g id="undo">
                          <g transform="matrix(1.15263,0,0,1,73.6873,95.821)">
                              <path d="M2359.48,688.95C2359.48,664.057 2339.27,643.847 2314.38,643.847L2094.68,643.847C2069.79,643.847 2049.58,664.057 2049.58,688.95L2049.58,779.155C2049.58,804.048 2069.79,824.258 2094.68,824.258L2314.38,824.258C2339.27,824.258 2359.48,804.048 2359.48,779.155L2359.48,688.95Z" style="fill:rgb(22,22,22);fill-opacity:0.8;stroke:white;stroke-width:3.28px;"/>
                          </g>
                          <g transform="matrix(0.77978,0,0,0.676521,987.941,342.186)">
                              <text x="1920.31px" y="757.116px" style="font-family:'Arial-BoldMT', 'Arial', sans-serif;font-weight:700;font-size:101.258px;fill:rgb(242,242,242);">U<tspan x="2003.56px 2086.81px 2170.07px " y="757.116px 757.116px 757.116px ">NDO</tspan></text>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>



        </div>
        <div id='height-select'>
          <svg width="100%" height="100%" viewBox="0 0 782 807" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
              <g transform="matrix(1,0,0,1,268.986,291.078)">
                  <g transform="matrix(0.867579,0,0,1,-63.9296,-95.821)">
                      <g id="radial-menu" transform="matrix(1,0,0,1,-885.601,-88.0137)">
                          <g id="high">
                              <g transform="matrix(-0.576316,0.866025,-0.998209,-0.5,2157.97,-186.826)">
                                  <path d="M928.148,569.01L1252.75,746.167C1252.75,746.167 934.299,1168.56 522.694,746.167L846.831,569.01C846.831,569.01 879.574,622.365 928.148,574.728" style="fill-opacity:0.0117647;"/>
                              </g>
                              <g transform="matrix(2.38541,0,0,2.06953,-1021.5,-120.914)">
                                  <path d="M891.379,147.255C857.69,147.255 830.379,174.566 830.379,208.255C830.379,218.963 833.198,229.482 838.552,238.755L870.862,220.101C868.783,216.499 867.688,212.414 867.688,208.255C867.688,195.171 878.295,184.564 891.379,184.564L891.379,147.255Z" style="fill:rgb(22,22,22);stroke:rgb(13,40,242);stroke-width:1.58px;"/>
                              </g>
                              <g transform="matrix(1.15263,0.00238522,-0.00274928,0.999997,171.422,184.032)">
                                  <g>
                                      <g transform="matrix(0.136917,-0.990582,0.990582,0.136917,512.805,841.275)">
                                          <text x="739.18px" y="126.358px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">H</text>
                                      </g>
                                      <g transform="matrix(0.355547,-0.934658,0.934658,0.355547,382.099,761.336)">
                                          <text x="743.137px" y="103.586px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">I</text>
                                      </g>
                                      <g transform="matrix(0.559082,-0.829113,0.829113,0.559082,250.099,659.932)">
                                          <text x="745.525px" y="94.82px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">G</text>
                                      </g>
                                      <g transform="matrix(0.791949,-0.610587,0.610587,0.791949,112.803,479.32)">
                                          <text x="759.755px" y="74.132px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">H</text>
                                      </g>
                                  </g>
                              </g>
                          </g>
                          <g id="medium">
                              <g transform="matrix(-0.576316,-0.866025,0.998209,-0.5,1071.2,1350.89)">
                                  <path d="M928.148,569.01L1252.75,746.167C1252.75,746.167 934.299,1168.56 522.694,746.167L846.831,569.01C846.831,569.01 879.574,622.365 928.148,574.728" style="fill-opacity:0.0117647;"/>
                              </g>
                              <g id="medium1" serif:id="medium" transform="matrix(2.38541,0,0,2.06953,-1021.5,-120.914)">
                                  <path d="M944.207,238.755C949.561,229.482 952.379,218.963 952.379,208.255C952.379,174.566 925.069,147.255 891.379,147.255L891.379,184.603C904.442,184.603 915.031,195.192 915.031,208.255C915.031,212.407 913.938,216.485 911.862,220.081L944.207,238.755Z" style="fill:rgb(22,22,22);stroke:rgb(13,40,242);stroke-width:1.58px;"/>
                              </g>
                              <g transform="matrix(-0.651649,0.824846,-0.950744,-0.565358,1754.82,-289.092)">
                                  <g>
                                      <g transform="matrix(-0.238131,-0.971233,0.971233,-0.238131,769.538,919.787)">
                                          <text x="745.526px" y="158.067px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">M</text>
                                      </g>
                                      <g transform="matrix(0.0677643,-0.997701,0.997701,0.0677643,557.782,860.81)">
                                          <text x="739.521px" y="131.929px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">E</text>
                                      </g>
                                      <g transform="matrix(0.343906,-0.939004,0.939004,0.343906,382.293,768.029)">
                                          <text x="740.749px" y="110.445px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">D</text>
                                      </g>
                                      <g transform="matrix(0.527363,-0.84964,0.84964,0.527363,278.559,678.721)">
                                          <text x="749.333px" y="88.984px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">I</text>
                                      </g>
                                      <g transform="matrix(0.693927,-0.720045,0.720045,0.693927,172.341,567.289)">
                                          <text x="753.452px" y="80.925px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">U</text>
                                      </g>
                                      <g transform="matrix(0.896497,-0.443051,0.443051,0.896497,51.3406,347.527)">
                                          <text x="769.472px" y="63.881px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">M</text>
                                      </g>
                                  </g>
                              </g>
                          </g>
                          <g id="low">
                              <g transform="matrix(1.15263,0,0,1,79.625,-234.505)">
                                  <path d="M928.148,569.01L1252.75,746.167C1252.75,746.167 934.299,1168.56 522.694,746.167L846.831,569.01C846.831,569.01 879.574,622.365 928.148,574.728" style="fill-opacity:0.00784314;"/>
                              </g>
                              <g transform="matrix(2.39974,0,0,2.08197,-1034.28,-123.664)">
                                  <path d="M838.552,238.755C849.448,257.628 869.586,269.255 891.379,269.255C913.172,269.255 933.31,257.628 944.207,238.755L911.835,220.065C907.616,227.373 899.818,231.875 891.379,231.875C882.94,231.875 875.143,227.373 870.923,220.065L838.552,238.755Z" style="fill:rgb(22,22,22);stroke:rgb(13,40,242);stroke-width:1.57px;"/>
                              </g>
                              <g transform="matrix(-0.58629,-0.860972,0.992384,-0.508653,1458.06,1075.02)">
                                  <g>
                                      <g transform="matrix(0.140769,-0.990042,0.990042,0.140769,511.783,839.439)">
                                          <text x="739.51px" y="124.871px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">L</text>
                                      </g>
                                      <g transform="matrix(0.405493,-0.914098,0.914098,0.405493,343.059,741.383)">
                                          <text x="741.495px" y="106.953px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">O</text>
                                      </g>
                                      <g transform="matrix(0.70418,-0.710022,0.710022,0.70418,162.835,558.228)">
                                          <text x="751.34px" y="83.698px" style="font-family:'ArialMT', 'Arial', sans-serif;font-size:32px;fill:white;">W</text>
                                      </g>
                                  </g>
                              </g>
                          </g>

                      </g>

                  </g>
              </g>
          </svg>

        </div>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-center">
      <input id='submit-form' class='cell small-12 success button' type="submit" value="Send" name="submittedData" />
    </div>
    <div class="grid-x grid-padding-x align-center">
      <input id='comments' class='cell small-12 ' type="textarea" value='' name="comments" />
    </div>

  </form>
  <div class='grid-x align-center'>
    <div class='cell medium-4 center-text' id='message'></div>
  </div>
  <style>
  .red {
    background:red;
  }
  .blue {
    background: blue;
  }
  .rocket {
    height: 40px;
  }
  #court {
    border: 1px solid black;
  }
  .station {
    height:80px;
    margin-top:40px;
    margin-bottom:40px;
  }
  </style>
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/what-input/dist/what-input.js"></script>
  <script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
<!--
<div class="large-12 cell">
<label>Select Box</label>
<select>
<option value="husker">Husker</option>
<option value="starbuck">Starbuck</option>
<option value="hotdog">Hot Dog</option>
<option value="apollo">Apollo</option>
</select>
</div>
-->
