---
{"category_name":"easy","problem_code":"REVERSE","problem_name":"Chef and Reversing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"9-03-2014","tags":{"0":"aug14","1":"berezin","2":"easy","3":"graph","4":"shortest"},"editorial_url":"http://discuss.codechef.com/problems/REVERSE","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/REVERSE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/REVERSE.pdf">Russian</a>.</h3>
<p>Sometimes mysteries happen. Chef found a directed graph with <b>N</b> vertices and <b>M</b> edges in his kitchen! </p>
<p>The evening was boring and chef has nothing else to do, so to entertain himself, Chef thought about a question "What is the minimum number of edges he needs to reverse in order to have at least one path from vertex <b>1</b> to vertex <b>N</b>, where the vertices are numbered from <b>1</b> to <b>N</b>.</p>
<h3>Input</h3>
<p>Each test file contains only one test case.</p>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>M</b>, denoting the number of vertices and the number of edges in the graph respectively. The <b>i</b><sup>th</sup> line of the next <b>M</b> lines contains two space separated integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>, denoting that the <b>i</b><sup>th</sup> edge connects vertices from <b>X<sub>i</sub></b> to <b>Y<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>In a single line, print the minimum number of edges we need to revert. If there is no way of having at least one path from <b>1</b> to <b>N</b>, print <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, M ≤ 100000 = 10<sup>5</sup></b></li>
<li><b>1 ≤ X<sub>i</sub>, Y<sub>i</sub> ≤ N</b></li>
<li>There can be multiple edges connecting the same pair of vertices, There can be self loops too i.e. <b> X<sub>i</sub> = Y<sub>i</sub></b> </li>
</ul>
<p><h3>Example</h3>
<pre><b>Input:</b>
7 7
1 2 
3 2
3 4
7 4
6 2
5 6
7 5

<b>Output:</b>
2
</pre></p>
<h3>Explanation</h3>
<p>We can consider two paths from <b>1</b> to <b>7</b>:</p>
<ul>
<li> <b>1-2-3-4-7</b> </li>
<li> <b>1-2-6-5-7</b> </li>
</ul>
<p>In the first one we need to revert edges <b>(3-2), (7-4)</b>. In the second one - <b>(6-2), (5-6), (7-5)</b>. So the answer is  <b>min(2, 3) = 2</b>.</p>
