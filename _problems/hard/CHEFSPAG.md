---
{"category_name":"hard","problem_code":"CHEFSPAG","problem_name":"Chef has a Spaghetti Garden","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":9,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"dpraveen","date_added":"14-07-2015","tags":{"0":"kevinsogo"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/CHEFSPAG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/CHEFSPAG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/CHEFSPAG.pdf">Vietnamese</a> as well.</h3>

<p>Chef is tending a really large <i>spaghetti garden</i>. This garden consists of many <i>spaghetti trees</i>. Specifically, there is a spaghetti tree planted for each lattice point location <b>(x, y)</b> with <b>x</b>, <b>y</b> ≥ <b>0</b>. (Yes, there are an infinite number of trees in Chef's garden!)</p>

<p>It's the 1st of April, so it's harvest time for Chef. Chef plans to harvest all <i>spaghetti strands</i> within a certain region today. In case you didn't know, a spaghetti tree bears <i>spaghetti strands</i> as its fruits.</p>

<p>Specifically, Chef plans to harvest all spaghetti strands hanging from every spaghetti tree whose location <b>(x, y)</b> is within the interior or boundary of a certain polygon with <b>N</b> vertices. Also, the spaghetti tree located at <b>(x, y)</b> currently bears exactly <b>F<sub>x+y</sub></b> fruits, where <b>F<sub>k</sub></b> satisfies the following fourth-order recurrence:</p>

<p><b>F<sub>k</sub> = a·F<sub>k-1</sub> + b·F<sub>k-2</sub> + c·F<sub>k-3</sub> + d·F<sub>k-4</sub></b></p>

<p>How many strands of spaghetti will Chef be able to harvest today? Since this number can be very large, output it modulo <b>10<sup>9</sup> + 9</b>. (Note: this is slightly different from the usual mod.)</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains nine space separated integers <b>N</b>, <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b>, <b>F<sub>0</sub></b>, <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, and <b>F<sub>3</sub></b>.</p>
<p>After that, <b>N</b> lines follow. The <b>i<sup>th</sup></b> line contains two integers  <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, denoting that <b>(x<sub>i</sub>, y<sub>i</sub>)</b> is the <b>i<sup>th</sup></b> vertex of the polygon in counterclockwise order.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing the integer: the answer for that test case.</p>


<h3>Constraints</h3>
<ul>
<li>0 ≤ <b>a</b>, <b>b</b>, <b>c</b>, <b>d</b>, <b>F<sub>0</sub></b>, <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b> <b>F<sub>3</sub></b> &lt; <b>10<sup>9</sup> + 9</b></li>
<li>The polygon is simple and non-degenerate.</li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2000</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>16</b></li>
<li>The sum of the <b>N</b> in a single test file is ≤ <b>6000</b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>0</b> ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ <b>100</b></li>
</ul> 
<p></p>
<b>Subtask #2 (30 points):</b>
<ul>
<li><b>0</b> ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul> 
<p></p>
<b>Subtask #3 (60 points):</b>
<ul>
<li><b>0</b> ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul> 
<p></p>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
4 1 2 3 4 0 1 2 3
1 1
2 1
2 2
1 2
4 1 2 3 4 0 1 2 3
1 1
3 1
3 3
1 3
</tt>
<b>Output:</b>
<tt>18
153
</tt>
</pre>

<h3>Explanation</h3>
<p>In both test cases, we have <b>F<sub>k</sub> = k</b> for <b>0 ≤ k ≤ 3</b> and <b>F<sub>k</sub> = F<sub>k-1</sub> + 2·F<sub>k-2</sub> + 3·F<sub>k-3</sub> + 4·F<sub>k-4</sub></b>. So you can check that <b>F<sub>4</sub> = 10</b>, <b>F<sub>5</sub> = 26</b> and <b>F<sub>6</sub> = 63</b></p>
<ul>
<li>In the first test case, Chef will harvest all spaghetti strands in the locations <b>(1, 1)</b>, <b>(1, 2)</b>, <b>(2, 1)</b>, <b>(2, 2)</b>.
The total number is
<b>F<sub>1+1</sub> + F<sub>1+2</sub> + F<sub>2+1</sub> + F<sub>2+2</sub></b> =
<b>F<sub>2</sub> + F<sub>3</sub> + F<sub>3</sub> + F<sub>4</sub></b> =
<b>18</b></li>
<li>In the second test case, Chef will harvest all spaghetti strands in the locations <b>(1, 1)</b>, <b>(1, 2)</b>, <b>(1, 3)</b>, <b>(2, 1)</b>, <b>(2, 2)</b>, <b>(2, 3)</b>, <b>(3, 1)</b>, <b>(3, 2)</b>, <b>(3, 3)</b>.
The total number is
<b>F<sub>1+1</sub> + F<sub>1+2</sub> + F<sub>1+3</sub> + F<sub>2+1</sub> + F<sub>2+2</sub> + F<sub>2+3</sub> + F<sub>3+1</sub> + F<sub>3+2</sub> + F<sub>3+3</sub></b> =
<b>F<sub>2</sub> + F<sub>3</sub> + F<sub>4</sub> + F<sub>3</sub> + F<sub>4</sub> + F<sub>5</sub> + F<sub>4</sub> + F<sub>5</sub> + F<sub>6</sub></b> =
<b>153</b></li>
</ul>
