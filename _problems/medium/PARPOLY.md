---
{"category_name":"medium","problem_code":"PARPOLY","problem_name":"Polynomial Partition Function","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"2-09-2011","tags":{"0":"binomial","1":"dynamic","2":"june12","3":"laycurse","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/PARPOLY","time":{"view_start_date":1339403708,"submit_start_date":1339403708,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Ciel is participating in an arithmetic contest now.
Why?
Because of the top prize for the contest, a limited edition kitchen knife.
</p>

<p>
But to win the contest she must calculate the values <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) of the function named <i>polynomial partition function</i>.
The polynomial partition function <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) is defined by
</p>
<img src="http://www.codechef.com/download/PARPOLY.png" width="474" height="74" /><br />
<p>
where <strong>P</strong> is a given polynomial <strong>P</strong>(<strong>x</strong>) = <strong>C</strong><sub><strong>D</strong></sub> · <strong>x</strong><sup><strong>D</strong></sup> + <strong>C</strong><sub><strong>D</strong>-1</sub> · <strong>x</strong><sup><strong>D</strong>-1</sup> + ... + <strong>C</strong><sub>1</sub> · <strong>x</strong> + <strong>C</strong><sub>0</sub>.
</p>

<p>
For example,
</p>
<p>
 <strong>f</strong>(1, 3, <strong>X</strong>) = <strong>P</strong>(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(2, 3, <strong>X</strong>) = <strong>P</strong>(0) <strong>P</strong>(3<strong>X</strong>) + <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(2<strong>X</strong>) + <strong>P</strong>(2<strong>X</strong>) <strong>P</strong>(<strong>X</strong>) + <strong>P</strong>(3<strong>X</strong>) <strong>P</strong>(0) = 2 <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(2<strong>X</strong>) + 2 <strong>P</strong>(0) <strong>P</strong>(3<strong>X</strong>)
</p>
<p>
 <strong>f</strong>(3, 1, <strong>X</strong>) = <strong>P</strong>(0) <strong>P</strong>(0) <strong>P</strong>(<strong>X</strong>) + <strong>P</strong>(0) <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(0) + <strong>P</strong>(<strong>X</strong>) <strong>P</strong>(0) <strong>P</strong>(0) = 3 <strong>P</strong>(0)<sup>2</sup> <strong>P</strong>(<strong>X</strong>)
</p>

<p>
Ciel is a great chef. However, she is not very good at arithmetic. So she needs your help to make her win the contest.
For the given values of <strong>P</strong>, <strong>M</strong>, <strong>N</strong> and <strong>X</strong>, your work is to calculate the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>).
The answer can be very large, so you should print the answer modulo 1000000007 (10<sup>9</sup>+7), that is, you need to find the remainder of division of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) by 1000000007 (10<sup>9</sup>+7).
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
The first line for each test case has 3 integers <strong>M</strong>, <strong>N</strong> and <strong>X</strong>.
Then the next line has <strong>D</strong>+2 integers. The first integer denotes <strong>D</strong>, and the (<strong>i</strong>+1)-th integer denotes <strong>C</strong><sub><strong>i</strong>-1</sub>.
</p>

<h3>Output</h3>
<p>
For each test case, print the value of <strong>f</strong>(<strong>M</strong>, <strong>N</strong>, <strong>X</strong>) modulo 1000000007 (10<sup>9</sup>+7).
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 4<br />
1 ≤ <strong>M</strong> ≤ 400<br />
1 ≤ <strong>N</strong> ≤ 800<br />
0 ≤ <strong>X</strong> ≤ 1000000006 (10<sup>9</sup>+6)<br />
0 ≤ <strong>D</strong> ≤ 10<br />
0 ≤ <strong>C</strong><sub><strong>i</strong></sub> ≤ 1000000006 (10<sup>9</sup>+6)<br />
If <strong>D</strong> ≠ 0, then <strong>C</strong><sub><strong>D</strong></sub> ≠ 0<br />
</p>

<h3>Sample Input</h3>
<pre>3
1 3 2
2 0 1 2
2 3 0
1 1 1
3 1 1
3 1 2 3 4</pre>

<h3>Sample Output</h3>
<pre>78
4
30</pre>

<h3>Explanation</h3>
<p>
In the first case, the polynomial is <strong>P</strong>(<strong>x</strong>) = 2 · <strong>x</strong><sup>2</sup> + <strong>x</strong>.
The answer is <strong>P</strong>(3<strong>X</strong>) = <strong>P</strong>(6) = 2 · 36 + 6 = 78.
</p>