---
{"category_name":"medium","problem_code":"CHEFNUMK","problem_name":"Chef and Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"tuananh93","date_added":"9-12-2016","tags":{"0":"cook77","1":"easy","2":"mgch","3":"query"},"editorial_url":"https://discuss.codechef.com/problems/CHEFNUMK","time":{"view_start_date":1482085800,"submit_start_date":1482085800,"visible_start_date":1482085800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/mandarin/CHEFARRB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/russian/CHEFARRB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFARRB.pdf">Vietnamese</a> as well.</h3>

<p>As you know Chef likes problems which involving into newest data structures. Today he has troubes in solving tricky problem. You have array <b>A</b> consisting of <b>N</b> integers and <b>Q</b> queries to it. Queries are next:
- <b>L</b> <b>R</b> <b>K</b>, how many values in segment <b>A</b>[<b>L</b>..<b>R</b>] have frequency not more than <b>K</b>.</p>

<h3>Input</h3>
<p>The first line of input contains <b>T</b> - number of test cases. <b>T</b> test cases follow.</p>
<p>For each test case, first line contains an integer <b>N</b> - number of elements in array, and integer <b>Q</b> - number of queries to it.</p>
<p>Second line contains <b>N</b> positive integer numbers - elements of array <b>A</b>. Each of next <b>Q</b> lines containing three integers <b>L</b>, <b>R</b>, <b>K</b>.</p>

<h3>Output</h3>
<p>For each query output answer for it in separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b>, <b>N</b>, <b>Q</b>, sum over all values of <b>N</b> in the input, sum over all values of <b>Q</b> in the input ≤ <b>200,000</b></li>
<li><b>1</b> ≤ <b>A</b><sub>i</sub> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 3
1 2 3 2 1
2 4 2
1 5 1
1 5 2
<b>Output:</b>
2
1
3

</pre>