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

    <div class="grid-x">
      <div class="cell small-12" data-sticky-container>
        <div class="callout dark tight sticky" data-options="stickyOn: small" data-sticky data-margin-top="0">
          <div class="grid-x grid-padding-x">
            <div class='cell small-4 medium-4 large-offset-3 large-2'>
              <label>Penalty</label>
              <button class='button foul'  type='button' id='foul'/>0</button>
              <input id='foulVal' type='number' value=0 name='foul' class='hidden'>
            </div>
            <!--<div class='cell small-4 medium-4 large-2 large-offset-2'>
              <label>Time</label>
              <button class='button success foul' type='button' value="Start" id='time'/>    
              Start
            </button>
            <input type="text" value="0" class='hidden' id="seconds" />

          </div>-->
        </div>
        <!-- This sticky element would stick to the window, with a marginTop of 0 -->
      </div>
      <div class='grid-x'>
        <div class='cell auto' id='message'>When things happen, this spot will tell you what</div>
          <div class="button cell medium-3" data-open="exampleModal1">Click me for a modal</div>
      </div>
      <div style='width:100%'>
<svg width="100%" height="100%" viewBox="0 0 2991 1404" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
    <g id="court" transform="matrix(0.867579,0,0,1,-63.9296,-95.821)">
        <rect x="73.687" y="95.821" width="3447.38" height="1403.26" style="fill:none;"/>
        <clipPath id="_clip1">
            <rect x="73.687" y="95.821" width="3447.38" height="1403.26"/>
        </clipPath>
        <g clip-path="url(#_clip1)">
            <g transform="matrix(1.15263,0,0,1,-189.876,95)">
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
            <g transform="matrix(1.15263,0,0,0.806735,-273.226,-44.0357)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,-0.896878,-270.429,1659.72)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.05px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,0.920524,-273.226,97.4658)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.04px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,-0.911852,-270.429,1482.12)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.04px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,0.911852,2435.65,100.8)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.04px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,-0.903262,2438.44,1478.82)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,111,0);stroke:white;stroke-width:1.05px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,0.806735,2437.04,-44.0357)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.1px;"/>
            </g>
            <g transform="matrix(1.15263,0,0,0.896878,2437.04,1152.69)">
                <rect x="542.106" y="181.84" width="176.062" height="202.694" style="fill:rgb(255,230,0);stroke:white;stroke-width:1.05px;"/>
            </g>
            <g id="red-hab-1" transform="matrix(-1.58688,0,0,1.16247,4215.15,-126.235)">
                <rect x="730.623" y="552.385" width="135.168" height="496.688" style="fill:rgb(255,0,0);stroke:black;stroke-width:0.78px;"/>
            </g>
            <g id="red-hab-3" transform="matrix(-1.15263,0,0,0.899596,3897.88,403.898)">
                <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:black;stroke-width:1.05px;"/>
            </g>
            <g id="red-hab-2" transform="matrix(-1.15263,0,0,0.899596,3897.88,62.3632)">
                <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:black;stroke-width:1.05px;"/>
            </g>
            <g id="red-hab-4" transform="matrix(-1.15263,0,0,1.16143,3897.88,66.8006)">
                <rect x="544.532" y="552.385" width="186.091" height="165.711" style="fill:rgb(255,0,0);stroke:black;stroke-width:0.92px;"/>
            </g>
            <g id="blue-driver-penalty-2" transform="matrix(0.549338,0,0,3.00567,77.657,-511.59)">
                <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
            </g>
            <g transform="matrix(0.485884,0,0,3.00567,3304.12,-511.59)">
                <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
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
            <g id="blue-driver-penalty-1" transform="matrix(0.549338,0,0,3.00567,77.657,431.497)">
                <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
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
            <g id="red-cargo" transform="matrix(-1.15263,0,0,1,3421.83,-102.915)">
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
            <g id="red-rocket-2" transform="matrix(-1.15263,0,0,1,3762.51,-523.702)">
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
            <g id="red-rocket-1" transform="matrix(-1.15263,0,0,1,3791.58,356.203)">
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
            <g transform="matrix(0.485884,0,0,3.00567,3304.12,431.497)">
                <rect x="0.687" y="263.306" width="441.453" height="24.583" style="fill:white;"/>
            </g>
        </g>
    </g>
</svg>

      </div>

<div class='grid-x' id='court'>
  <div class='cell grid-x'>
    <div class='cell medium-offset-2 medium-2'>
      <div class='red rocket' id='red-rocket1'></div>
    </div>
    <div class='cell medium-offset-4 medium-2'>
      <div class='blue rocket' id='blue-rocket1'></div>
    </div>
  </div>
  <div class='cell grid-x'>
    <div class='cell medium-1'>
      <div class='station blue'></div>
    </div>
    <div class='cell medium-offset-10 medium-1'>
      <div class='station red'></div>
    </div>
  </div>

  <div class='cell grid-x'>
    <div class='cell medium-offset-2 medium-2'>
    <div class='red rocket' id='red-rocket2'></div>
  </div>
    <div class='cell medium-offset-4 medium-2'>
    	<div class='blue rocket' id='blue-rocket2'></div>
  	</div>
</div>

  </div>
 <div class="reveal" id="exampleModal1" data-reveal>
  <h1>Awesome. I Have It.</h1>
  <p class="lead">Your couch. It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      <div class="grid-x top-of-page grid-padding-x grid-container">
        <div class="large-12 medium-12 cell">
          <div class="grid-x grid-padding-x">
            <div class="medium-4 cell">
              <label>Scout Name</label>
              <input type="text" id='scoutName' name='scoutName' />
            </div>
            <div class="medium-2 cell">
              <label>Match Number</label>
              <input type="number" name='matchNumber' min='1' step='1' />
            </div>
            <div class="medium-2 cell">
              <label>Team Number</label>
            <select name='teamNumber'>
            <option value="" disabled selected>Select your option</option>
            <option value='5338'>5338</option>
            <option value='401'>401</option>
            <option value='87'>87</option>
            <option value='686'>686</option>
            <option value='5587'>5587</option>
            <option value='5115'>5115</option>
            <option value='4541'>4541</option>
            <option value='449'>449</option>
            <option value='9401'>9401</option>
            <option value='4242'>4242</option>
            </select> 
          </div>
            <div class="medium-2 cell">
              <label>Team Position</label>
              <input type="text" name='teamPosition'  />
            </div>
            <div class="medium-2 cell">
              <label>Robot Position</label>
              <input type="text" name='robotPosition'  />
            </div>
          </div>
          <strong>Auto</strong>
          <div class='callout light'>
            <div class=" grid-x grid-padding-x">
              <div class="large-3 medium-4 cell">
                <div class="switch">
                  <label class='color-dark'>Moved</label>
                  <input class="switch-input" value="yes" id="autoMoved" type="checkbox" name="autoMoved">
                  <label class="switch-paddle" for="autoMoved"> </label>
                </div>
              </div>
              <div class="large-3 medium-4 cell">
                <div class="switch">
                  <label class='color-dark'>Put a ball in a crate</label>
                  <input class="switch-input" value="yes" id="autoBallInCrate" type="checkbox" name="autoBallInCrate">
                  <label class="switch-paddle" for="autoBallInCrate"> </label>
                </div>
              </div>
              <div class="large-3 medium-4 cell">
                <div class="switch">
                  <label class='color-dark'>Put a bunny in a crate</label>
                  <input class="switch-input" value="yes" id="autoBunnyInCrate" type="checkbox" name="autoBunnyInCrate">
                  <label class="switch-paddle" for="autoBunnyInCrate"> </label>
                </div>
              </div>
            </div>
            <div class="grid-x grid-padding-x">
              <div class='auto cell'>
                <label>Comments
                 <textarea name="autoComments" placeholder="(Topheavy, Wobbly, Falls over, crate placement, broke down, did it go past the line, etc (to be completed at the end of the match))" rows='2' cols='80'></textarea>
               </label>
             </div>
           </div>
         </div>
         <strong>Teleop</strong>
         <div class='callout light'>
          <div class=" grid-x grid-padding-x">
            <div class="large-3 medium-4 cell">
              <div class="switch">
                <label class='color-dark'>Put (mostly) THIS alliance's color load in a crate</label>
                <div class='flex'>
                  <button onclick="countDown('goodBallInCrate')" class='button'  type='button' id='goodBallInCrate'/>-</button>
                  <input id='goodBallInCrateVal' type='number' value='0' name='goodBallInCrate' class='val'>
                  <button onclick="countUp('goodBallInCrate')" class='button'  type='button' id='goodBallInCrate'/>+</button>
                </div>
              </div>
            </div>
            <div class="large-3 medium-4 cell">
              <div class="switch">
                <label class='color-dark'>Put (mostly) the other alliance's color load in a crate</label>
                <div class='flex'>
                  <button onclick="countDown('badBallInCrate')" class='button'  type='button' id='badBallInCrate'/>-</button>
                  <input id='badBallInCrateVal' type='number' value='0' name='badBallInCrate' class='val'>
                  <button onclick="countUp('badBallInCrate')" class='button'  type='button' id='badBallInCrate'/>+</button>
                </div>
              </div>
            </div>
        <div class="large-3 medium-4 cell">
              <div class="switch">
                <label class='color-dark'>Put (mostly) the other alliance's color load on the floor</label>
                <div class='flex'>
                  <button onclick="countDown('badBallOnFloor')" class='button'  type='button' id='badBallOnFloor'/>-</button>
                  <input id='badBallOnFloorVal' type='number' value='0' name='badBallOnFloor' class='val'>
                  <button onclick="countUp('badBallOnFloor')" class='button'  type='button' id='badBallOnFloor'/>+</button>
                </div>
              </div>
            </div>
        <div class="large-3 medium-4 cell">
              <div class="switch">
                <label class='color-dark'>Put (mostly) this alliance's color load on the floor</label>
                <div class='flex'>
                  <button onclick="countDown('goodBallOnFloor')" class='button'  type='button' id='goodBallOnFloor'/>-</button>
                  <input id='goodBallOnFloorVal' type='number' value='0' name='goodBallOnFloor' class='val'>
                  <button onclick="countUp('goodBallOnFloor')" class='button'  type='button' id='goodBallOnFloor'/>+</button>
                </div>
              </div>
            </div>
            <div class="large-3 medium-4 cell">
              <div class="switch">
                <label class='color-dark'>Put a bunny in a crate</label>
                <div class='flex'>
                  <button onclick="countDown('bunnyInCrate')" class='button'  type='button' id='bunnyInCrate'/>-</button>
                  <input id='bunnyInCrateVal' type='number' value=0 name='bunnyInCrate' class='val'>
                  <button onclick="countUp('bunnyInCrate')" class='button'  type='button' id='bunnyInCrate'/>+</button>
                </div>
              </div>
            </div>
          </div>
            <div class="grid-x grid-padding-x">
              <div class='auto cell'>
                <label>Comments
                  <textarea name="teleopComments" placeholder='(topheavy, wobbly, falls over, cube placement errors or strategies, broke down, what fouls and tech fouls did it commit, etc (to be completed at the end of the match))' rows='2' cols='80'></textarea>
                </label>
              </div>
            </div>
          </div>
        <div class="grid-x grid-padding-x">
          <input id='submit-form' class='success button' type="submit" value="Send" name="submittedData" />
        </div>
      </div>
    </form>
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
