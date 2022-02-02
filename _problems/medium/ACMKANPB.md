---
{"languages_supported":{"0":"NA"},"title":"ACMKANPB","category":"NA","old_version":true,"problem_code":"ACMKANPB","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>  <div id="kanpur">
    <div class="tabular">
      <table id="TBL-5" class="tabular" cellspacing="0" cellpadding="0">
        
          
          
        

        <tr id="TBL-5-1-">
          <td id="TBL-5-1-1" class="td11">
          <a id="x1-3r2" name="x1-3r2"></a> <span class="cmssbx-10x-x-600">B</span></td>

          <td id="TBL-5-1-2" class="td11">
            

            <div class="tabular">
              <table id="TBL-6" class="tabular" cellspacing="0" cellpadding="0">
                
                  
                

                <tr id="TBL-6-1-">
                  <td id="TBL-6-1-1" class="td11"><span class="cmssbx-10x-x-172">Bonus</span></td>
                </tr>

                <tr id="TBL-6-2-">
                  <td id="TBL-6-2-1" class="td11">
                    

                    <div class="tabular">
                      <table id="TBL-7" class="tabular" cellspacing="0" cellpadding="0">
                        
                          
                          
                        

                        <tr id="TBL-7-1-">
                          <td id="TBL-7-1-1" class="td10">Input file:</td>

                          <td id="TBL-7-1-2" class="td01"><span class="cmtt-10x-x-109">stdin</span></td>
                        </tr>

                        <tr id="TBL-7-2-">
                          <td id="TBL-7-2-1" class="td10">Output file:</td>

                          <td id="TBL-7-2-2" class="td01"><span class="cmtt-10x-x-109">stdout</span></td>
                        </tr>

                        <tr id="TBL-7-3-">
                          <td id="TBL-7-3-1" class="td10"></td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </td>
        </tr>

        <tr id="TBL-5-2-">
          <td id="TBL-5-2-1" class="td11">
          </td>
        </tr>
      </table>
    </div>

    <p class="noindent">Kinku is a project manager in his company. Recently, the
    executives decided to give bonus to everyone in his team, so Kinku was asked to give
    a list to them how much bonus each should get. </p>

    <p class="noindent">To do this, he selected some pairs of members, and analyzed who
    should get more bonus, and how more much he should get (at least). That is, if
    employee Tom is better than Jerry, and Tom should get at least 300$ more than Jerry,
    then, if Jerry gets 650$ bonus, Tom has to get atleast 950$ bonus. It should also be
    noted that, every one will get at least a minimum, no one will go empty handed. 
    </p>

    <p class="noindent">Given all the comparisons, you have to find the minimum total
    bonus to be divided among the employees. </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Input</span> </p>

    <p class="noindent">First line contains <span class="cmmi-10x-x-109">T</span>, the
    number of test cases. </p>

    <p class="noindent">Each test case starts with three integers <span class="cmmi-10x-x-109">N</span>(1 <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">N</span> <span class="cmsy-10x-x-109">&le;</span> 100), <span class="cmmi-10x-x-109">M</span>(0 <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">M</span> <span class="cmsy-10x-x-109">&le;</span><img src="/download/problemset0x.png" alt="N-×(N−1) 2" class="frac" align="middle" />) and
    <span class="cmmi-10x-x-109">L</span>(1 <span class="cmsy-10x-x-109">&le;</span>
    <span class="cmmi-10x-x-109">L</span> <span class="cmsy-10x-x-109">&le;</span>
    10000), the number of employees, number of comparisons and minimum bonus. Next
    <span class="cmmi-10x-x-109">M</span> lines each contains three integers,
    <span class="cmmi-10x-x-109">i</span>, <span class="cmmi-10x-x-109">j</span>(1
    <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">i, j</span>
    <span class="cmsy-10x-x-109">&le;</span> <span class="cmmi-10x-x-109">N</span> and
    <span class="cmmi-10x-x-109">c</span>(0 <span class="cmsy-10x-x-109">&le;</span>
    <span class="cmmi-10x-x-109">c</span> <span class="cmsy-10x-x-109">&le;</span> 1000),
    referring that <span class="cmmi-10x-x-109">employee</span><sub><span class="cmmi-8">i</span></sub> should get at least <span class="cmmi-10x-x-109">c</span>$
    more than <span class="cmmi-10x-x-109">employee</span><sub><span class="cmmi-8">j</span></sub> . </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Output</span> </p>

    <p class="noindent">For each test case, output the minimum total bonus on the first
    line, and the bonus given to each employee in the next line. </p>

    <p class="noindent">If comparisons are inconsistent, and it&rsquo;s not possible
    distribute bonus among them, output &ldquo;<span class="cmtt-10x-x-109">Inconsistent</span> <span class="cmtt-10x-x-109">analysis.</span>&rdquo;(without quotes). </p>

    <p class="noindent"><span class="cmssbx-10x-x-144">Sample input and output</span> 
    </p>

    <p class="noindent"></p>

    <div class="obeylines-v">
      

      <div class="tabular">
        <table id="TBL-8" class="tabular" cellspacing="0" cellpadding="0" rules="groups">
          
            
          

          
            
          

          <tr class="hline">
            <td>
              <hr />
            </td>

            <td>
              <hr />
            </td>
          </tr>

          <tr id="TBL-8-1-">
            <td id="TBL-8-1-1" class="td11">
              <div class="multicolumn">
                <span class="cmtt-10x-x-109">stdin</span>
              </div>
            </td>

            <td id="TBL-8-1-2" class="td11">
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

          <tr id="TBL-8-2-">
            <td id="TBL-8-2-1" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">2</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">4</span> <span class="cmtt-10x-x-109">4</span> <span class="cmtt-10x-x-109">100</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">10</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">20</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">40</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">4</span> <span class="cmtt-10x-x-109">5</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">100</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">10</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">10</span> 
                </p>

                <p class="noindent"><span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">10</span></p>
              </div>
            </td>

            <td id="TBL-8-2-2" class="td11">
              <div class="minipage">
                <p class="noindent"><span class="cmtt-10x-x-109">460</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">140</span> <span class="cmtt-10x-x-109">120</span> <span class="cmtt-10x-x-109">100</span>
                <span class="cmtt-10x-x-109">100</span> </p>

                <p class="noindent"><span class="cmtt-10x-x-109">Inconsistent</span>
                <span class="cmtt-10x-x-109">analysis.</span></p>
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

          <tr id="TBL-8-3-">
            <td id="TBL-8-3-1" class="td11">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>    