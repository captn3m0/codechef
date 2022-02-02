---
{"languages_supported":{"0":"NA"},"title":"ACMKANPC","category":"NA","old_version":true,"problem_code":"ACMKANPC","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>  <div id="kanpur">
    <div class="tabular">
      <table id="TBL-9" class="tabular" cellspacing="0" cellpadding="0">
        
          
          
        

        <tr id="TBL-9-1-">
          <td id="TBL-9-1-1" class="td11">
          <a id="x1-4r3" name="x1-4r3"></a> <span class="cmssbx-10x-x-600">C</span></td>

          <td id="TBL-9-1-2" class="td11">
            

            <div class="tabular">
              <table id="TBL-10" class="tabular" cellspacing="0" cellpadding="0">
                
                  
                

                <tr id="TBL-10-1-">
                  <td id="TBL-10-1-1" class="td11"><span class="cmssbx-10x-x-172">Traffic Jam</span></td>
                </tr>

                <tr id="TBL-10-2-">
                  <td id="TBL-10-2-1" class="td11">
                    

                    <div class="tabular">
                      <table id="TBL-11" class="tabular" cellspacing="0" cellpadding="0">
                        
                          
                          
                        

                        <tr id="TBL-11-1-">
                          <td id="TBL-11-1-1" class="td10">Input file:</td>

                          <td id="TBL-11-1-2" class="td01"><span class="cmtt-10x-x-109">stdin</span></td>
                        </tr>

                        <tr id="TBL-11-2-">
                          <td id="TBL-11-2-1" class="td10">Output file:</td>

                          <td id="TBL-11-2-2" class="td01"><span class="cmtt-10x-x-109">stdout</span></td>
                        </tr>

                        <tr id="TBL-11-3-">
                          <td id="TBL-11-3-1" class="td10"></td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>

        <tr id="TBL-9-2-">
          <td id="TBL-9-2-1" class="td11">
          </td>
        </tr>
      </table>
    </div>

    <p class="noindent">Traffic Jam is becoming a major problem in the city of 'Faka'
    these days. Every day, you need to go to work from home through a one-way road that
    can be modeled as a series of straight line segments (aka piece-wise linear) of
    positive length. To be more explicit, suppose there are one way straight line paths
    named P, Q and R in your way. P starts at your home &amp; ends at the starting point
    of Q. Q starts from the ending point of P &amp; ends at starting point of R.
    Similarly, R starts at ending point of Q &amp; ends at your destination. Two
    non-adjacent line segments in a road will never intersect with each other. 
    </p>

    <p class="noindent">Now, you start from home for work and immediately get irritated
    by the heavy and annoying traffic jam. So you wish you could fly to your destination
    in order to avoid spending the whole day on road. Your new vehicle Aerocar comes as
    the solution to you. With this car, you can leave the road &amp; start to fly from
    any point (The aerocar has a vertical take-off &amp; landing similar to that of a
    helicopter) and land back to the road any time. Now, though you would have liked to
    fly all the way and thus avoiding the traffic, you need to resist the temptation due
    to the fact that flying requires more fuel than driving. You need 1 unit of fuel to
    travel every unit distance along the path while F units per unit distance while
    flying. Now you need to write a program that, given the description of the road, can
    calculate the minimum possible fuel amount needed to complete your journey. 
    </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Input</span> </p>

    <p class="noindent">Each test case starts with a couple of integers <span class="cmmi-10x-x-109">N</span>(1 <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">N</span> <span class="cmsy-10x-x-109">&le;</span> 25) &amp;
    <span class="cmmi-10x-x-109">F</span>(2 <span class="cmsy-10x-x-109">&le;</span>
    <span class="cmmi-10x-x-109">F</span> <span class="cmsy-10x-x-109">&le;</span> 5).
    <span class="cmmi-10x-x-109">N</span> is the number of line segments in the road. F
    is the amount of fuel required for every unit distance traveled while flying. Next
    (<span class="cmmi-10x-x-109">N</span> + 1) lines each has two integers, <span class="cmmi-10x-x-109">x</span>(<span class="cmsy-10x-x-109">&minus;</span>1000
    <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">x</span>
    <span class="cmsy-10x-x-109">&le;</span> 1000) &amp; <span class="cmmi-10x-x-109">y</span>(<span class="cmsy-10x-x-109">&minus;</span>1000
    <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">y</span>
    <span class="cmsy-10x-x-109">&le;</span> 1000). Assuming the road is placed on a
    planar 2d grid, the integers in the <span class="cmmi-10x-x-109">i</span><span class="cmsy-10x-x-109">&prime;</span>th line denotes the x and y co-ordinates of the
    starting point of the <span class="cmmi-10x-x-109">i</span><span class="cmsy-10x-x-109">&prime;</span>th line segment while the the end point co-ordinates
    by the <span class="cmmi-10x-x-109">i</span><span class="cmsy-10x-x-109">&prime;</span>th line segment are given at the (<span class="cmmi-10x-x-109">i</span> + 1)<span class="cmsy-10x-x-109">&prime;</span>th line. The
    last test case will be followed by a case with <span class="cmmi-10x-x-109">N</span>
    = <span class="cmmi-10x-x-109">F</span> = 0 indicating the end of input. This case
    should not be processed. </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Output</span> </p>

    <p class="noindent">For each test case except the last one, print one line of the
    form &ldquo;Case <span class="cmmi-10x-x-109">X</span> : <span class="cmmi-10x-x-109">Y</span> &rdquo;, where <span class="cmmi-10x-x-109">X</span> is the
    serial number of output &amp; <span class="cmmi-10x-x-109">Y</span> is the minimal
    possible units of fuel required. Print 3 digits after decimal point for <span class="cmmi-10x-x-109">Y</span> . The output will be tested by a special judge program and
    outputs with precision error smaller than 10<sup><span class="cmsy-8">&minus;</span><span class="cmr-8">3</span></sup> shall be considered as
    correct. </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Sample input and output</span> 
    </p>

    <p class="noindent"></p>

    <div class="obeylines-v">
      

      <div class="tabular">
        <table id="TBL-12" class="tabular" cellspacing="0" cellpadding="0" rules="groups">
          
            
          

          
            
          

          <tr class="hline">
            <td>
              <hr />
            </td>

            <td>
              <hr />
            </td>
          </tr>

          <tr id="TBL-12-1-">
            <td id="TBL-12-1-1" class="td11">
              <div class="multicolumn">
                <span class="cmtt-10x-x-109">stdin</span>
              </div>
            </td>

            <td id="TBL-12-1-2" class="td11">
              <div class="multicolumn">
                <span class="cmtt-10x-x-109">stdout</span>
              </div>
            </td>
          </tr>

          <tr class="hline">
            <td>
              <hr />
            </td>

            <td>
              <hr />
            </td>
          </tr>

          <tr id="TBL-12-2-">
            <td id="TBL-12-2-1" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">5</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">5</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">10</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">2</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">2</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">-2</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">5</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">1</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">-7</span> <span class="cmtt-10x-x-109">0</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">10</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0</span></p>
              </div>
            </td>

            <td id="TBL-12-2-2" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">Case</span> <span class="cmtt-10x-x-109">1:</span> <span class="cmtt-10x-x-109">10.000</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">Case</span> <span class="cmtt-10x-x-109">2:</span> <span class="cmtt-10x-x-109">5.464</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">Case</span> <span class="cmtt-10x-x-109">3:</span> <span class="cmtt-10x-x-109">22.283</span></p>
              </div>
            </td>
          </tr>

          <tr class="hline">
            <td>
              <hr />
            </td>

            <td>
              <hr />
            </td>
          </tr>

          <tr id="TBL-12-3-">
            <td id="TBL-12-3-1" class="td11"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>    