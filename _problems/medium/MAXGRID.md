---
{"category_name":"medium","problem_code":"MAXGRID","problem_name":"Maximum Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kevind","problem_tester":"xcwgf666","date_added":"28-06-2016","tags":{"0":"aug16","1":"kevind","2":"medium","3":"segment","4":"sweepline"},"editorial_url":"http://discuss.codechef.com/problems/MAXGRID","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/MAXGRID.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/MAXGRID.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/MAXGRID.pdf">Vietnamese</a> as well.</h3>


<p> There is an infinite grid given to you. Some of the cells in this infinite grid have gems in them. Each gem a parameter beauty associated with it which is given by a positive integer.</p>

<p>You will be given an integer <b>L</b>. You have to find maximum sum of beauties inside any square sub-grid with its side length being less than or equal to <b>L</b>. Let <b>S</b> be that number, i.e. the maximum sum of beauties for some sub-grid with side length no greater than <b>L</b>. You also have to find minimum side length such that there exists some sqaure sub-grid with that given side length with sum of beauties of gems inside it being equal to <b>S</b>.</p>

<h3>Input</h3>
<p>First line of the input contains two space separated <b>N</b> and <b>L</b>, denoting the number of gems and the maximum allowed size of the sub-grid, respectively.</p>
<p>Each of the next <b>N</b> lines contains three space separated integers - 
<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> and <b>c<sub>i</sub></b> denoting the <b>x</b>-coordinate, <b>y</b>-coordinate and the value of the <b>i</b><sup>th</sup> gem respectively. </p>

<h3>Output</h3>
<p>Output a single line containing two space separated integers: the maximum value of the sum of beauties of gem in some square sub-grid of the length not greater than <b>L</b> and the minimum side length of the square-grid which contains that much sum of beauties of gems inside it, respectively.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>L</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>c<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (15 points):</b> <b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>2000</b></li>
<li><b>Subtask #2 (25 points):</b> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>2000</b></li>
<li><b>Subtask #3 (60 points):</b> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 2
1 1 1
2 1 1
3 1 5</tt>

<b>Output:</b>
<tt>6 2</tt>
</pre>

<h3>Explanation</h3>
<p>In the given example, you can create a 2X2 sub-grid with top-left corner as (2,1) and bottom right corner as (3,2) with value 6. All other sub-grids have value lower than or equal to this sub-grid.</p>