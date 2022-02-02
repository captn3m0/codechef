---
{"category_name":"easy","problem_code":"CHSQR","problem_name":"Chef and squares","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fiter","problem_tester":"xcwgf666","date_added":"11-07-2016","tags":{"0":"basic","1":"fiter","2":"nov16","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHSQR","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/CHSQR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/CHSQR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/CHSQR.pdf">Vietnamese</a> as well.</h3>


<p> </p>
<p>
Chef has finished his freshman year in college. As a present, his parents gave him a new problem to solve:<br>
</p>

<p>
Chef has to fill a <b>K x K</b> square grid of integers in a certain way. Let us say that such a grid is <i>valid</i> if:
<ul>
   <li>Each cell contains an integer from <b>1</b> and <b>K</b> (inclusive). </li>
   <li>No integer appears twice in the same row or the same column.</li>
</ul>
</p>

<p>
Let <b>F(K)</b> be maximum possible distance between the center of the square and the closest cell that contains <b>1</b>, among all possible squares with the side length <b>K</b>.
</p>

<p>
Here, we use the following notions:
<ul>
  <li> The distance between cell <b>(x, y)</b> and <b>(i, j)</b> is equal to <b>|x-i|+|y-j|</b>. </li>
  <li> The center of a <b>K x K</b> square is cell <b>((K+1)/2, (K+1)/2)</b> for odd <b>K</b>. </li>
</ul>
</p>


<h3>Input</h3>
<p>
The first line of input contains a single integer <b>T</b> denoting the number of test cases.<br>
Each test case consists of a single line containing a single odd integer <b>K</b>.
</p>

<p> </p>

<h3>Output</h3>
For each test case, print <b>K</b> lines each consisting of <b>K</b> space separated integers giving some square grid where the distance from the center of the grid to the nearest <b>1</b> is exactly <b>F(K)</b>. If there's more than 1 possible answer output any of them.

<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>K<sub>i</sub></b> is odd.</li>
</ul>
<b>Subtask <b>#1</b> (10 points) </b> :
<ul> 
<li> <b>1</b> ≤ <b>T</b> ≤ <b>50</b>  </li>
<li> <b>1</b> ≤ <b>K<sub>i</sub></b>≤ <b>5</b> </li> 
</ul>
<b>Subtask <b>#1</b> (90 points) </b> :
<ul> 
<li> <b>1</b> ≤ <b>T</b> ≤ <b>10</b>  </li>
<li> <b>1</b> ≤ <b>K<sub>i</sub></b> < <b>400</b> </li> 
</ul>



<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1
3</tt>
<b>Output:</b>
<tt>1
3 2 1
1 3 2
2 1 3</tt>

</pre>
<p> </p>
