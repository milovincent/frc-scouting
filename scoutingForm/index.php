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
                <label class='color-dark'>Put (mostly) this alliance's color load in a crate</label>
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
