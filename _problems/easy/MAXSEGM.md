---
{"category_name":"easy","problem_code":"MAXSEGM","problem_name":"Maximum Unique Segment","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"grumpy_gordon","problem_tester":"lg5293","date_added":"21-06-2017","tags":{"0":"easy","1":"grumpy_gordon","2":"ltime49","3":"two"},"editorial_url":"https://discuss.codechef.com/problems/MAXSEGM","time":{"view_start_date":1498323600,"submit_start_date":1498323600,"visible_start_date":1498323600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/mandarin/MAXSEGM.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/russian/MAXSEGM.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/vietnamese/MAXSEGM.pdf">vietnamese</a> as well.</h3>

<p>You are given 2 arrays <b>W</b> =  (<b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, .., <b>W<sub>N</sub></b>) and <b>C</b> =  (<b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, .., <b>C<sub>N</sub></b>) with <b>N</b> elements each. A range [l, r] is <i>unique</i> if all the elements <b>C<sub>l</sub></b>, <b>C<sub>l+1</sub></b>, .., <b>C<sub>r</sub></b> are unique (ie. no duplicates). The <i>sum</i> of the range is <b>W<sub>l</sub></b> +  <b>W<sub>l+1</sub></b> + ... + <b>W<sub>r</sub></b>.</p>

<p>You want to find an <i>unique</i> range with the maximum <i>sum</i> possible, and output this sum.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of each testcase follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>, denoting the size of the arrays.</li>
<li>The second line contains <b>N</b> space-separated integers : <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, .., <b>C<sub>N</sub></b>.</li>
<li>The third line contains <b>N</b> space-separated integers : <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, .., <b>W<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, output a single integer in a new line, which should be the maximum possible <i>sum</i> of an <i>unique</i> range.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000000</b></li>
<li><b>0</b> ≤ <b>C<sub>i</sub></b> < <b>N</b></li>
<li><b>0</b> ≤ <b>W<sub>i</sub></b> ≤ <b>1000000000</b>
</li> <li><b>1</b> ≤ Sum of <b>N</b> over all test cases ≤ <b>1000000</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): Sum of <b>N</b> over all test cases ≤ <b>10000</b></li>
<li>Subtask #2 (70 points): Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
0 1 2 0 2
5 6 7 8 2

<b>Output:</b>
21
</pre>

<h3>Explanation</h3>
<p>The range [2, 4] is an <i>unique</i> range because (1, 2, 0) has no duplicates. Its <i>sum</i> is 6 + 7 + 8 = 21. This is the maximum possible, and hence is the answer.</p>