---
{"category_name":"medium","problem_code":"LIKECS05","problem_name":"Mixing Colors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":"kingofnumbers","date_added":"8-09-2017","tags":{"0":"cook86","1":"fft","2":"inclusn","3":"likecs","4":"likecs","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/LIKECS05","time":{"view_start_date":1505673000,"submit_start_date":1505673000,"visible_start_date":1505673000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS05.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/russian/LIKECS05.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS05.pdf">Vietnamese</a> as well.</h3>

<p>Chef Dobby had recently studied about <a href="https://en.wikipedia.org/wiki/Primary_color">Primary</a> and <a href="https://en.wikipedia.org/wiki/Secondary_color">Secondary</a> colors. He came to know that by mixing colors he can sometimes get a new colour. For this problem we consider only 3 colors : <b>Red, Green and Yellow</b>. The different ways of mixing them and the final colour we obtain is shown below.</p>

<p align="center"><img src="https://cook86.discuss.codechef.com/upfiles/img-1.png" alt="Mixing Colors-1"></p>

<p>Bhuvan, Chef Tobby friend, was playing another game on grid of size <b>N * N</b> where rows are numbered from 1 to N from up to bottom and columns are numbered from 1 to N from left to right. Chef Dobby wasn't happy as the Bhuvan grid had no colors at all. So, he thought of coloring Bhuvan's grid. So Chef Tobby started his operation, but Bhuvan said that he could only colour the grid <b>M</b> times. Chef Tobby decided that each of his operation could be one of the following : </p>

<ol>
<li>Color <b>row i</b> with red color.</li>
<li>Color <b>row i</b> with green color.</li>
<li>Color <b>col j</b> with red color.</li>
<li>Color <b>col j</b> with green color.</li>
<li>Color <b>diagonal x (= i + j)</b> with red color.</li>
<li>Color <b>diagonal x (= i + j)</b> with green color.</li>
</ol>

<p>
<br><br>
<b>Note:</b> diagonal x is the set of all cells that are in intersection of row i and column j such that i+j = x.
</p>

<b>Note2:</b> if a cell is already colored then we apply the mixture rules in the above picture between the new color and the existing color.</p>
<br>
<p>Bhuvan's asks you to determine the number of cells of each color after all the operations are performed.</p>

<h3>Input section</h3>
<p>The first line contains 2 integers, <b>N</b> and <b>M</b>, denoting the size of the grid and number of opeartions performed by Chef Tobby.</p>

<p>Each of the next <b>M</b> lines contains <b>3</b> space separated integers, <b>type, idx, color</b>, which mean the following : </p>

<ol>
<li>type = 1, operation performed on row</li>
<li>type = 2, operation performed on column</li>
<li>type = 3, operation performed on diagonal</li>
<li>idx = index of corresponding row, column or diagonal</li>
<li>color = 0, color the cells of grid Green</li>
<li>color = 1, color the cells of grid Red</li>
</ol>

<br>
<p><b>The input files are upto 1 MB. So prefer to use faster I/O methods, for example : scanf/printf in C++, Buffered-Reader in Java etc.</b></p>

<h3>Output section</h3>
<p>Output 4 integers, denoting the number of cells with no color, cells with red color, cells with green color and cells with yellow color in the grid after all the operations are performed.</p>

<h3>Input constraints</h3>
<pre>
1 ≤ N ≤ 10<sup>5</sup>
1 ≤ M ≤ 10<sup>5</sup>
1 ≤ type ≤ 3
1 ≤ idx_row, idx_column ≤ N
2 ≤ idx_diagonal ≤ 2 * N
0 ≤ color ≤ 1
</pre>

<h3>Sample Input</h3>
<pre>
5 10
2 4 1
3 3 1
2 1 1
3 7 0
1 3 1
3 3 0
3 8 0
1 5 0
2 4 1
2 2 0
</pre>

<h3>Sample Output</h3>
<pre>
4 6 7 8
</pre>

<h3>Explanation</h3>
<p>You can refer to the below image which shows the colored grid after each step.</p>

<p align="center"><img src="https://cook86.discuss.codechef.com/upfiles/img-2_Jh81yrs.png" alt="Mixing Colors-1"></p>