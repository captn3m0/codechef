---
{"category_name":"school","problem_code":"STICKS","problem_name":"Sticks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"27-05-2016","tags":{"0":"cook71","1":"greedy","2":"kingofnumbers","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/STICKS","time":{"view_start_date":1466965800,"submit_start_date":1466965800,"visible_start_date":1466965800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/mandarin/STICKS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/russian/STICKS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/vietnamese/STICKS.pdf">Vietnamese</a> as well.</h3>


<p>
Chef and his little brother are playing with sticks. They have total <b>N</b> sticks. Length of <b>i</b>-th stick is <b>A<sub>i</sub></b>. 
Chef asks his brother to choose any four sticks and to make a rectangle with those sticks its sides. Chef warns his brother to not to break any of the sticks, he has to use sticks as a whole. Also, he wants that the rectangle formed should have the maximum possible area among all the rectangles that Chef's brother can make. 
</p>

<p>
Chef's little brother takes this challenge up and overcomes it. Can you also do so? That is, you have to tell whether it is even possible to create a rectangle? If yes, then you have to tell the maximum possible area of rectangle.
</p> 

<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> denoting the number of test-cases. <b>T</b> test cases follow.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of sticks.</p>
<p>The second line of each test case contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the lengths of sticks.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing an integer representing the maximum possible area for rectangle or -1 if it's impossible to form any rectangle using the available sticks.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ sum of <b>N</b>'s over all test-cases in a single test file ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>3</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5
1 2 3 1 2
4
1 2 2 3</tt>

<b>Output:</b>
<tt>2
-1</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef's brother can choose sticks of lengths 1, 2, 1, 2. He can create a rectangle with area 1 * 2 = 2.</p>
<p><b>Example case 2.</b> It's impossible to choose 4 sticks so that they form a rectangle.</p>