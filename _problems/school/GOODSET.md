---
{"category_name":"school","problem_code":"GOODSET","problem_name":"A Good Set","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"9-05-2017","tags":{"0":"admin2"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/GOODSET.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/GOODSET.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/GOODSET.pdf">Vietnamese</a> as well.</h3>

<p>A set of integers is called <i>good</i> if there does not exist three distinct elements a, b, c in it such that a + b = c.</p>

<p>Your task is simple. Just output any <i>good</i> set of <b>n</b> integers. All the elements in this set should be distinct and should lie between 1 and 500, both inclusive.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting number of test cases. The descriptions of <b>T</b> test cases follow.</li>
<li>The only line of each test case contains an integer <b>n</b>, denoting the size of the needed <i>good</i> set.</li>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>n</b> integers denoting the elements of the <i>good</i> set, in any order. There can be more than one possible good set, and you can output any one of them.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T, n</b> ≤ 100</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (50 points)</b>: 1 ≤ <b>T, n</b> ≤ 10</li>
<li><b>Subtask #2 (50 points)</b>: original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
5
1
2
3
4
5

<b>Output</b>
7
1 2
1 2 4
1 2 4 16
3 2 15 6 10
</pre>

<h3>Explanation</h3>
<p><b>Example 1 and 2.</b> Any set of size less than or equal to 2 is good by definition.</p>
<p><b>Example 3 onwards.</b> For each pair of elements in the set, you can see that their sum doesn't exist in the set.</p>