---
{"category_name":"medium","problem_code":"MANYLIST","problem_name":"Many Lists","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"logic_iu","date_added":"24-08-2015","tags":{"0":"hard","1":"ltime28","2":"segment","3":"sets","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/MANYLIST","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"hand_edited":true,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/mandarin/MANYLIST.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/russian/MANYLIST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME28/vietnamese/MANYLIST.pdf">Vietnamese</a></h3>
<p>There are <b>N</b> sets numbered <b>1</b> to <b>N</b>, all initially empty.</p>
<p>Your task is to perform two kinds of queries:</p>
<ul>
<li><b>0 l r x</b> : add the number <b>x</b> to all the sets numbered from <b>l</b> to <b>r</b>. (Note that a set, by definition, can never contain duplicate elements. So a number is only added to a set if it was not already present.)</li>
<li><b>1 q</b> : output the size of the set numbered <b>q</b>.</li>
</ul>

<h3>Input</h3>
<p>The first line contains two space separated integers <b>N</b> and <b>M</b> denoting the number of lists and the number of the queries respectively.</p>
<p>The following <b>M</b> lines describe the queries. Each of these lines describes exactly one query in the format specified above.</p>
<h3>Output</h3>
<p>For each query of type <b>1</b>, output the size of the specified set.</p>
<h3>Constraints</h3>
<ul>
<li>Subtask 1 (14 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li>Subtask 2 (25 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li>Subtask 3 (61 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>2.5 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>q</b>, <b>x</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 5
0 2 4 4
0 3 5 5
0 1 5 5
1 5
1 3</tt>

<b>Output:</b>
<tt>1
2</tt>

</pre><h3>Explanation</h3>
<p>Have a look at the sets during the operations:</p>
<ul>
<li>Initially, all the sets are empty: ({}, {}, {}, {}, {}).</li>
<li>In the first query we add <b>4</b> to sets numbered 2 to 4 to get: ({}, {4}, {4}, {4}, {}).</li>
<li>In the second query we add <b>5</b> to the sets numbered 3 to 5 to get: ({}, {4}, {4, 5}, {4, 5}, {5}).</li>
<li>In the third query we add <b>5</b> to all the sets to get: ({5}, {4, 5}, {4, 5}, {4, 5}, {5}).</li>
<li>The <b>5</b><sup>th</sup> set is {5}, its size is <b>1</b>.</li>
<li>The <b>3</b><sup>rd</sup> set is {4, 5}, and its size is <b>2</b>.</li>
</ul>

