---
{"category_name":"hard","problem_code":"WRDSUM","problem_name":"Weird Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 7","source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"iscsi","date_added":"4-08-2015","tags":{"0":"alex_2oo8","1":"biginteger","2":"bignum","3":"dynamic","4":"feb16","5":"hard","6":"interpolation"},"editorial_url":"http://discuss.codechef.com/problems/WRDSUM","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/WRDSUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/WRDSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/WRDSUM.pdf">Vietnamese</a> as well.</h3>


<p>Recently, Chef Alex invented a weird function <b>F</b>.</p>
<p>Give an integer <b>n</b> (<b>n</b> ≥ <b>2</b>), consider the prime factorization <b>n = p<sub>1</sub><sup>k<sub>1</sub></sup> · p<sub>2</sub><sup>k<sub>2</sub></sup> · … · p<sub>r</sub><sup>k<sub>r</sub></sup></b>.<br/>
Let <b>g = gcd(k<sub>1</sub>, k<sub>2</sub>, … k<sub>r</sub>)</b> and <b>m<sub>i</sub> = k<sub>i</sub> / g</b>.<br/>
The function <b>F</b> is defined as: <b>F(n) = p<sub>1</sub><sup>m<sub>1</sub></sup> · p<sub>2</sub><sup>m<sub>2</sub></sup> · … · p<sub>r</sub><sup>m<sub>r</sub></sup></b>.</p>

<p>Now, Alex is interested in summing up the value of this function for the first <b>N</b> natural numbers (other than <b>1</b>, since its prime factorization is undefined). That is, he wants to evaluate the following expression for a given value of <b>N</b>: <b>F(2) + F(3) + … + F(N)</b>.</p>

<p>As the above sum can be extremely large, output it modulo <b>998244353</b>.</p>

<h3>Input</h3>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. <br />
For each test case, the only line of input contains a single integer <b>N</b>.

<h3>Output</h3>
For each test case, output a single line containing one integer — the above sum modulo <b>998244353</b>.

<h3>Subtasks</h3>
<ul>
    <li>Subtask #1: <b>T = 10<sup>3</sup></b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>7</sup></b> (8 points)</li>
    <li>Subtask #2: <b>T = 600</b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b> (12 points)</li>
    <li>Subtask #3: <b>T = 1</b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b> (16 points)</li>
    <li>Subtask #4: <b>T = 10<sup>3</sup></b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b> (18 points)</li>
    <li>Subtask #5: <b>T = 1</b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>500</sup></b> (20 points)</li>
    <li>Subtask #6: <b>T = 1</b>; <b>100</b> ≤ <b>N</b> ≤ <b>10<sup>2016</sup></b> (26 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6
120
121
124
125
44761
31415926535897932384626433832795

<b>Output:</b>
6855
6866
7235
7240
2741
382417086
</pre>

<h3>Explanation</h3>
<b>Example case 2.</b> <b>F(121) = 11</b>, thus the answer for this case is by eleven more than for the previous one.
<p> </p>
<b>Example case 3.</b> <b>F(122) = 122; F(123) = 123; F(124) = 124</b>, thus the answer for this case is <b>6866 + 122 + 123 + 124 = 7235</b>.
<p> </p>
<b>Example case 4.</b> <b>F(125) = 5</b>, thus the answer for this case is by five more than for the previous one.
<p> </p>
<b>Example case 5.</b> Here the actual sum is <b>998247094</b> that is equal to <b>2741</b> modulo <b>998244353</b>.
<p> </p>
<b>Example case 6.</b> This case corresponds to the last two subtasks, where the value of <b>N</b> doesn't fit into 64-bit integer.