---
{"category_name":"medium","problem_code":"CIELNUM3","problem_name":"Ciel Numbers III","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":null,"date_added":"4-07-2012","tags":{"0":"cook24","1":"laycurse","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CIELNUM3","time":{"view_start_date":1342982939,"submit_start_date":1342982939,"visible_start_date":1342982428,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Tomya is a girl. She loves Chef Ciel very much.
</p>

<p>
Tomya also loves <i>Ciel numbers</i>.
The definition of Ciel numbers are following.
</p>

<p>
Ciel numbers are defined as the positive integers <b>k</b>
such that <b>d</b>(<b>k</b>, 8) ≥ <b>d</b>(<b>k</b>, 5) ≥ <b>d</b>(<b>k</b>, 3) and <b>d</b>(<b>k</b>, <b>i</b>) = 0 for all <b>i</b> = 0, 1, 2, 4, 6, 7, 9,
where <b>d</b>(<b>k</b>, <b>i</b>) denotes the number of the digit <b>i</b> in the decimal representation of the integer <b>k</b>.
For example, the first few Ciel numbers are 8, 58, 85, 88, 358, 385, 538, 583, 588, 835, 853, 858, 885, 888, ....
</p>

<p>
Now Tomya defines the <i><b>x</b>-pseudo Ciel numbers</i> as follows for non-negative integers <b>x</b>:
</p>
<ul>
<li>
A positive integer <b>k</b> is a 0-pseudo Ciel numbers if and only if <b>k</b> is a Ciel number.
</li>
<li>
For <b>x</b> ≥ 1, a positive integer <b>k</b> is a <b>x</b>-pseudo Ciel numbers if and only if<br />
<b>k</b> is not a <b>y</b>-pseudo Ciel number for all 0 ≤ <b>y</b> &lt; <b>x</b><br />
and, there exists a (<b>x</b>-1)-pseudo Ciel number <b>s</b> such that <b>s</b> have the same number of digits as <b>k</b>
and exactly one digit differ from <b>k</b> in their decimal notations.
</li>
</ul>

<p>
For example,<br />
583, 58588, 355388, and 5358388 are 0-pseudo Ciel numbers, and<br />
523, 58558, 355308, and 5354388 are 1-pseudo Ciel numbers, and<br />
123, 55558, 353308, and 5314388 are 2-pseudo Ciel numbers, and<br />
124, 55555, 333308, and 1314388 are 3-pseudo Ciel numbers.<br />
</p>

<p>
In this problem, your task is to find the largest <b>x</b>-pseudo Ciel number less than or equal to <b>N</b>.
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
Each test case contains 2 integers <b>x</b> and <b>N</b> in one line.
</p>

<h3>Output</h3>
<p>
For each test case, print the largest <b>x</b>-pseudo Ciel number less than or equal to <b>N</b>.
If there are no such numbers, print "-1" (excluding quotes).
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 10000 (10<sup>4</sup>)<br />
0 ≤ <b>x</b> ≤ 1000000000 (10<sup>9</sup>)<br />
1 ≤ <b>N</b> &lt; 10<sup>100000</sup><br />
The sum of the length of <b>N</b> in one judge input file does not exceed 1000000 (10<sup>6</sup>).<br />
</p>

<h3>Sample Input</h3>
<pre>5
0 58600
2 128
1 5354389
1 1
2 1</pre>

<h3>Sample Output</h3>
<pre>58588
128
5354388
1
-1</pre>