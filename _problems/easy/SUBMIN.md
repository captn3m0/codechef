---
{"category_name":"easy","problem_code":"SUBMIN","problem_name":"Little Elephant and Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":"gerald","date_added":"3-01-2014","tags":{"0":"darkshadows"},"editorial_url":"http://discuss.codechef.com/problems/SUBMIN","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/SUBMIN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/SUBMIN.pdf">Russian</a>.</h3>
<p>Little Elephant is playing a game with arrays. He is given an array <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N−1</sub></b> of <b>N</b> integers. And then <b>Q</b> queries are given, each containing an integer <b>K</b>. He has to tell how many subarrays satisfy the condition: the function <b><i>foo</i></b> returns <b>K</b> when it is applied to the subarray.<br />
In this problem, a subarray is defined as a sequence of continuous elements <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub> </b> where <b>0 ≤ i ≤ j ≤ N−1</b>. The function <b><i>foo</i></b>, when applied to an array, returns the minimum of all the elements in the array.<br />
For example, <b><i>foo</i></b> returns <b>5</b> when it is applied to the array <b>[7, 5, 10, 7, 5, 8]</b>. Please note that the subarrays <b>A<sub>i</sub>, A<sub>i+1</sub>, ..., A<sub>j</sub></b> and <b>A<sub>k</sub>, A<sub>k+1</sub>, ..., A<sub>l</sub></b> are different if and only if <b>i ≠ k</b> or <b>j ≠ l</b> in this problem.</p>
<h3>Input</h3>
<p>The first line of input contains <b>N</b>, denoting the size of the array. The next line contains <b>N</b> space separated integers <b>A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>N−1</sub></b>, denoting the array. Then the next line contains <b>Q</b>, denoting the number of queries. Each query consists of one integer per line, denoting <b>K</b>.</p>
<h3>Output</h3>
<p>For each query, print the required number of subarrays.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N ≤ 50</b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ 1000000 (10<sup>6</sup>)</b></li>
<li><b>1 ≤ Q ≤ 10</b></li>
<li><b>1 ≤ K ≤ 1000000 (10<sup>6</sup>)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
4 1 2 3 4
4
3
4
6
1

<b>Output:</b>
2
2
0
8
</pre><h3>Explanation</h3>
<p><b>Query 1.</b> Only the two subarrays <b>[3, 4]</b> and <b>[3]</b> satisfy.</p>
<p><b>Query 2.</b> Again only the two subarrays <b>[4]</b> and <b>[4]</b> satisfy. Please note that these subarrays (<b>A<sub>0</sub></b> and <b>A<sub>4</sub></b>) are considered different.</p>
<p><b>Query 3.</b> No subarray satisfies.</p>
<p><b>Query 4.</b> The eight subarrays <b>[4, 1]</b>, <b>[4, 1, 2]</b>, <b>[4, 1, 2, 3]</b>, <b>[4, 1, 2, 3, 4]</b>, <b>[1]</b>, <b>[1, 2]</b>, <b>[1, 2, 3]</b> and <b>[1, 2, 3, 4]</b> satisfy.</p>
