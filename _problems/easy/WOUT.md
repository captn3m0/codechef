---
{"category_name":"easy","problem_code":"WOUT","problem_name":"Way Out","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"laycurse","date_added":"22-02-2015","tags":{"0":"aug15","1":"dynamic","2":"easy","3":"prefix","4":"subarray","5":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/WOUT","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/WOUT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/WOUT.pdf">Russian</a>.</h3>
<p>Oh, no! Chef’s in trouble. He’s got himself stuck in a cave (we don’t know how) and is looking for a way out. The bigger problem is that he needs to get his tractor out of the cave (don't ask why Chef owns a tractor!). He currently faces a large block of height <b>N</b> cells and length <b>N</b> cells, and needs to get his tractor across this block. The block is made up of vertical columns of soil, each of which is one cell long. Each column has a continuous vertical gap, with the <b>i</b><sup>th</sup> column having its gap from the <b>l<sub>i</sub></b><sup>th</sup> cell to the <b>h<sub>i</sub></b><sup>th</sup> cell (starting from the bottom, 0-indexing). That is, in the <b>i</b><sup>th</sup> column, there is no soil from the <b>l<sub>i</sub></b><sup>th</sup> cell to the <b>h<sub>i</sub></b><sup>th</sup> cell (both inclusive). Chef can build additional gaps by clearing some cells of soil. His tractor has height <b>H</b>, and therefore, he needs to build a horizontal corridor of height <b>H</b> passing through all the columns. That is, some consecutive <b>H</b> rows must have no soil. Please see the figures in the example and explanation sections for more details.</p>
<p>Chef is able to clear one cell of soil by spending one unit of energy. Chef is smart, and will figure out a way to build the horizontal corridor while spending the minimum possible amount of energy. To estimate how many of his tasty dishes he will still be able to cook for you tonight, find out what is the minimum possible energy he needs to spend.</p>
<h3>Input</h3>
<p>First line of input contains one integer <b>T</b> - number of test cases. <b>T</b> test cases follow.</p>
<p>Each test case starts with two integers <b>N</b> and <b>H</b> – size of the cave and height of the tractor, respectively. In each of the next <b>N</b> lines are two integers <b>l<sub>i</sub></b> and <b>h<sub>i</sub></b>, respectively indicating lowest and highest number of cell for the gap in the <b>i</b><sup>th</sup> column.</p>
<h3>Output</h3>
<p>One integer – minimum energy required.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ sum of <b>N</b> over all test cases ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>H</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>l<sub>i</sub></b> ≤ <b>h<sub>i</sub></b> &lt; <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<p>Subtask 1 (25 points): <b>T ≤ 100, N ≤ 100</b></p>
<p>Subtask 2 (75 points): No additional constraints</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 3
1 2
1 2
1 2
1 2
5 2
2 3
1 2
2 3
1 2
2 3

<b>Output:</b>
4
2

</pre><h3>Explanation</h3>
<p>In the second case, the figure describes the initial map, where white cells denote empty cells and brown cells denote soil cells.</p>
<p><img width="350" height="225" src="http://www.codechef.com/download/AUG15/bef.png" alt="" /></p>
<p>When we removed soil in two cells as the following figure, then we can make a corridor of height 2, adn this is the optimal way to make a corridor.</p>
<p><img width="350" height="225" src="http://www.codechef.com/download/AUG15/aft.png" alt="" /></p>
