---
{"category_name":"easy","problem_code":"ICPC16E","problem_name":"Colorful Grids","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"18-10-2016","tags":{"0":"admin3"},"time":{"view_start_date":1477153800,"submit_start_date":1477153800,"visible_start_date":1477153800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given five <b>N</b> x <b>N</b> grids, where each grid consists of <b>N<sup>2</sup></b> unit squares. These grids have been placed in the form of a plus sign(+). For example, image below shows the figure for <b>N</b> = 2.</p>

<p><img src="http://i.imgur.com/FObP43z.jpg"></p>

<p>Your aim is to count total distinct ways to color all <b>5*N<sup>2</sup></b> unit squares with <b>C</b> colors. Two ways are counted as same if one figure can be rotated in the two dimensional plane to obtain the other one.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case contains two space separated integers <b>N</b> and <b>C</b>, in one line.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the required answer modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
1 2

<b>Output:</b>
1
12

</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The only way is to fill all cells with same color.<br/>
<b>Example case 2.</b> Assume that the two colors are 1 and 2. The 12 distinct ways are:<br/>
<br/>
<pre>

     2     
  2 2 2  
     2     
_______

     1     
  2 2 2  
     2     
_______

     2     
  2 1 2  
     2     
_______

     2     
  1 2 1  
     2     
_______

     1     
  2 2 1  
     2     
_______

     1     
  2 1 2  
     2     
_______

     1     
  2 1 2  
     1     
_______

     1     
  2 1 1  
     2     
_______

     1     
  2 2 1  
     1     
_______

     1     
  2 1 1  
     1     
_______

     1     
  1 2 1  
     1     
_______

     1     
  1 1 1  
     1     

</pre></p>