---
{"category_name":"medium","problem_code":"CHEFSHOP","problem_name":"Ingredients","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"iscsi","date_added":"27-04-2015","tags":{"0":"dp","1":"furko","2":"greedy","3":"medium","4":"nov15"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSHOP","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/CHEFSHOP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/CHEFSHOP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/CHEFSHOP.pdf">Vietnamese</a> as well.</h3>
<p>Chef would like go shopping to buy ingredients for his special dish. The local grocery store has some special discount offers. If you want to buy some set of ingredients you will pay for all ingredients except the cheapest one. Chef would like to spend as little money as possible. You have to help him. :)
</p>
<p>
The store is pretty small and stocks only one unit of each ingredients. Opposite each ingredient is a hanging price tag corresponding to it. The salesman walked away for a minute, giving Chef an opportunity to swap some price tags. He would like to swap some tags to minimize his purchase cost.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of ingredients Chef needs to buy. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b> denoting the value  written on the price tags opposite the needed ingredients. The third line contains a single integer <b>M</b> denoting the number of special offers. The following <b>M</b> lines lists inventory of special offers, one offer per line. Each line contains an integer <b>C<sub>i</sub></b> followed by <b>C<sub>i</sub></b> integers denoting the indices of ingredients constituting the <b>i</b><sup>th</sup> discount offer.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimal purchase cost.</p>
<h3>Constraints</h3>
<ul>
<li><b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>15</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>2<sup>N</sup>-1</b></li>
<li><b>2</b> ≤ <b>C<sub>i<sub></sub></sub></b> ≤ <b>N</b></li>
<li>Subtask 1 (15 points):  1 ≤ <b>N</b> ≤  5</li>
<li>Subtask 2 (25 points):  1 ≤ <b>N</b> ≤ 10</li>
<li>Subtask 3 (60 points):  1 ≤ <b>N</b> ≤ 15</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 
1 2 3 4
3
2 1 2
2 3 4
3 1 2 3

<b>Output:</b>
6
</pre>