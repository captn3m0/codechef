---
{"languages_supported":{"0":"NA"},"title":"ACMKANPA","category":"NA","old_version":true,"problem_code":"ACMKANPA","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>  <div id="kanpur">
    <div class="tabular">
      <table id="TBL-1" class="tabular" cellspacing="0" cellpadding="0">
        
          
          
        

        <tr id="TBL-1-1-">
          <td id="TBL-1-1-1" class="td11">
          <a id="x1-2r1" name="x1-2r1"></a><span class="cmssbx-10x-x-600">A</span></td>

          <td id="TBL-1-1-2" class="td11">
            

            <div class="tabular">
              <table id="TBL-2" class="tabular" cellspacing="0" cellpadding="0">
                
                  
                

                <tr id="TBL-2-1-">
                  <td id="TBL-2-1-1" class="td11"><span class="cmssbx-10x-x-172">Problem with Strings</span></td>
                </tr>

                <tr id="TBL-2-2-">
                  <td id="TBL-2-2-1" class="td11">
                    

                    <div class="tabular">
                      <table id="TBL-3" class="tabular" cellspacing="0" cellpadding="0">
                        
                          
                          
                        

                        <tr id="TBL-3-1-">
                          <td id="TBL-3-1-1" class="td10">Input file:</td>

                          <td id="TBL-3-1-2" class="td01"><span class="cmtt-10x-x-109">stdin</span></td>
                        </tr>

                        <tr id="TBL-3-2-">
                          <td id="TBL-3-2-1" class="td10">Output file:</td>

                          <td id="TBL-3-2-2" class="td01"><span class="cmtt-10x-x-109">stdout</span></td>
                        </tr>

                        <tr id="TBL-3-3-">
                          <td id="TBL-3-3-1" class="td10"></td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>

        <tr id="TBL-1-2-">
          <td id="TBL-1-2-1" class="td11">
          </td>
        </tr>
      </table>
    </div>

    <p class="noindent">Today, we will be unraveling the mysteries of one of the most
    twisted and curly beasts in all existence knots! The problem here is simple: given
    the picture of a string laid out curled on a table, you are to determine if it will
    curl up into a knot when the ends are pulled out.</p>

    <div class="center">
      

      <p class="noindent"></p>

      <div class="verbatim" id="verbatim-1">
        ............... &nbsp;<br />
        ...+------+.... &nbsp;<br />
        ...|......|.... &nbsp;<br />
        ...|...+--H---- &nbsp;<br />
        ...|...|..|.... &nbsp;<br />
        ---I---H--+.... &nbsp;<br />
        ...|...|....... &nbsp;<br />
        ...+---+....... &nbsp;<br />
        ...............
      </div>

      <p class="nopar"></p>
    </div>

    <p class="noindent">The input will consist of a diagram of one single continuous
    string described in a two-dimensional grid of characters such as shown above. The
    &lsquo;<span class="cmsy-10x-x-109">&minus;</span>&rsquo; and &lsquo;<span class="cmsy-10x-x-109">|</span>&rsquo; characters represent a horizontal and vertical
    segment of the string, respectively. &lsquo;+&rsquo; characters represent corners
    where the string turns at right angles on the table. &lsquo;I&rsquo; or
    &lsquo;H&rsquo; characters represent locations where parts of the strings cross:</p>

    <ul class="itemize1">
      <li class="itemize">&lsquo;H&rsquo; represents locations where the horizontal
      string passes over the vertical string</li>

      <li class="itemize">&lsquo;I&rsquo; represents locations where the horizontal
      string passes under the vertical string</li>
    </ul>

    <p class="noindent">The dot character, &lsquo;<span class="obeylines-h"><span class="verb"><span class="cmtt-10x-x-109">.</span></span></span>&rsquo;, obviously,
    represents empty spaces of the table unoccupied by the string. Two horizontally
    adjacent non-empty spaces of the table are connected by the string iff neither of
    them are &lsquo;<span class="obeylines-h"><span class="verb"><span class="cmtt-10x-x-109">|</span></span></span>&rsquo; characters. Similarly, vertically
    adjacent non-empty spaces are connected by the string iff neither of them are
    &lsquo;<span class="obeylines-h"><span class="verb"><span class="cmtt-10x-x-109">-</span></span></span>&rsquo; characters. Inputs will be such that
    every &lsquo;<span class="obeylines-h"><span class="verb"><span class="cmtt-10x-x-109">+</span></span></span>&rsquo; character will represent a proper
    corner where the string turns at a unambiguously at a right angle: formally, every
    &lsquo;<span class="obeylines-h"><span class="verb"><span class="cmtt-10x-x-109">+</span></span></span>&rsquo; character will be connected to exactly
    one vertically adjacent and exactly one horizontally adjacent space. Moreover, to
    further simplify matters, you can assume that the only characters along the border of
    the given diagram, other than dots, will represent endpoints of the string. In short,
    the input will unambiguously specify a valid piece of string starting and ending at
    the border of the input diagram. Finally, assume that the string has negligible width
    and is made of a very smooth material, so that parts of the string can easily slide
    over each other with negligible friction. </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Input</span> </p>

    <p class="noindent">The input will consist of at most 80 test cases. Each test case
    will start with a single line containing two integers, <span class="cmmi-10x-x-109">r</span> and <span class="cmmi-10x-x-109">c</span>, indicating that
    the size of the diagram for that case is of <span class="cmmi-10x-x-109">r</span>
    rows and <span class="cmmi-10x-x-109">c</span> columns. This line will be followed by
    <span class="cmmi-10x-x-109">r</span> more lines, each with exactly <span class="cmmi-10x-x-109">c</span> characters, with characters in each line representing a row
    of the diagram. You may assume that 2 <span class="cmsy-10x-x-109">&le;</span>
    <span class="cmmi-10x-x-109">r,c</span> <span class="cmsy-10x-x-109">&le;</span> 120.
    </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Output</span> </p>

    <p class="noindent">The output should consist of exactly one line for each test case
    in the format Case c: Response, where c is the test case serial number, starting from
    1, and Response is either the string straightened or knotted (without the quotes)
    depending on whether the string will straighten out or coil up into a knot,
    respectively. See the sample for further clarifications. </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Sample input and output</span> 
    </p>

    <p class="noindent"></p>

    <div class="obeylines-v">
      

      <div class="tabular">
        <table id="TBL-4" class="tabular" cellspacing="0" cellpadding="0" rules="groups">
          
            
          

          
            
          

          <tr class="hline">
            <td>
              <hr />
            </td>

            <td>
              <hr />
            </td>
          </tr>

          <tr id="TBL-4-1-">
            <td id="TBL-4-1-1" class="td11">
              <div class="multicolumn">
                <span class="cmtt-10x-x-109">stdin</span>
              </div>
            </td>

            <td id="TBL-4-1-2" class="td11">
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

          <tr id="TBL-4-2-">
            <td id="TBL-4-2-1" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">9</span> <span class="cmtt-10x-x-109">15</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...............</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...+------+....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|......|....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...+--H----</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...|..|....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">---I---H--+....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...|.......</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...+---+.......</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...............</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">9</span> <span class="cmtt-10x-x-109">15</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...............</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...+------+....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|......|....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...+--I----</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...|..|....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">---I---H--+....</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...|...|.......</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...+---+.......</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">...............</span></p>
              </div>
            </td>

            <td id="TBL-4-2-2" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">Case</span> <span class="cmtt-10x-x-109">1:</span> <span class="cmtt-10x-x-109">knotted</span></p>
                

                <p class="noindent"><span class="cmtt-10x-x-109">Case</span> <span class="cmtt-10x-x-109">2:</span> <span class="cmtt-10x-x-109">straightened</span></p>
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

          <tr id="TBL-4-3-">
            <td id="TBL-4-3-1" class="td11">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>    