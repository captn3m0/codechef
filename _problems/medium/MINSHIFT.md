---
{"category_name":"medium","problem_code":"MINSHIFT","problem_name":"Cyclic Shifts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,xcwgf666","date_added":"8-06-2016","tags":{"0":"medium","1":"segment","2":"snckpb16","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/MINSHIFT","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/MINSHIFT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/MINSHIFT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/MINSHIFT.pdf">Vietnamese</a> as well.</h3>
<p>Consider a string <b>T</b>. A cyclic shift of the string <b>T</b> is a string <b>T'</b> obtained by moving an arbitrary (possibly, zero) number of <b>T</b>'s symbols from the beginning to the end. For example, the string <b>chef</b> is a cyclic shift of the string <b>hefc</b>, but the string <b>fehc</b> is not a cyclic shift of the string <b>chef</b>.</p>
<p>The minimal cyclic shift of a string is the lexicographically smallest cyclic shift. For example, the minimal cyclic shift of the string <b>hefc</b> is <b>chef</b>.</p>
<p>You are given a string <b>S</b>. The string <b>S</b> is generated <b>randomly</b>, i.e. any character of <b>S</b> is chosen randomly from the set of lowercase Latin letters, independently of other characters.</p>
<p>You are also given <b>Q</b> queries - one of the following forms:</p>
<ul>
<li><b>0 J C</b>: make the <b>J</b><sup>th</sup> character of <b>S</b> equal to <b>C</b>. <b>C</b> will be chosen randomly from the set of lowercase Latin letters.</li>
<li><b>1 L R P</b>: output the <b>P</b><sup>th</sup> character of the minimal cyclic shift of the string obtained by taking a substring of <b>S</b> from the <b>L</b><sup>th</sup> to the <b>R</b><sup>th</sup> characters, inclusively.</li>
</ul>

<p>Your task is to handle these queries efficiently.</p>
<h3>Input</h3>
<p>There is a single test case per test file.</p>
<p>The first line of input contains randomly generated string <b>S</b>, consisting of lowercase Latin letters.</p>
<p>The second line contains a single integer <b>Q</b>, denoting the number of queries.</p>
<p>Each of the following <b>Q</b> lines describe a single query in one of the formats described above.</p>
<h3>Output</h3>
<p>For each query of the type <b>1 L R P</b>, output a single line containing the <b>P</b><sup>th</sup> character of the minimal cyclic shift of a substring of <b>S</b> starting at the <b>L</b><sup>th</sup> character and ending at the <b>R</b><sup>th</sup> character.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>|S|</b></li>
<li><b>1</b> ≤ <b>J</b> ≤ <b>|S|</b></li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>R - L + 1</b></li>
<li><b>C</b> is a lowercase Latin letter, i.e. from 'a' to 'z'</li>
<li><b>S</b> consists of lowercase Latin letters</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>codechef
5
0 6 q
1 5 7 1
1 3 8 3
0 5 m
1 2 8 7</tt>

<b>Output:</b>
<tt>c
e
o</tt></pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Let's perform all the queries one-by-one:</p>
<ul>
<li>Initially <b>S = "codechef"</b>.</li>
<li>In the first query we change the <b>6</b><sup>th</sup> letter of <b>S</b> to 'q', and it becomes equal to <b>codecqef</b>.</li>
<li>In the second query, we're asked to find the <b>1</b><sup>st</sup> letter of the smallest cyclic shift of the string <b>cqe</b>. The smallest cyclic shift is <b>cqe</b>, and its' first letter is <b>c</b>.</li>
<li>In the third query, we're asked to find the <b>3</b><sup>rd</sup> letter of the smallest cyclic shift of the string <b>decqef</b>. The smallest cyclic shift is <b>cqefde</b>, and its' third letter is <b>e</b>.</li>
<li>In the fourth query we change the <b>5</b><sup>th</sup> letter of <b>S</b>, and it becomes equal to <b>codemqef</b>.</li>
<li>In the fifth query, we're asked to find the <b>7</b><sup>th</sup> letter of the smallest cyclic shift of the string <b>odemqef</b>. The smallest cyclic shift is <b>demqefo</b>, and its' seventh letter is <b>o</b>.</li>
</ul>

