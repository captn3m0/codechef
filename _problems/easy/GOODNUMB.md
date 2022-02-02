---
{"category_name":"easy","problem_code":"GOODNUMB","problem_name":"Good Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"23-06-2016","tags":{"0":"admin2"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
A number is called a square free number if there does not exist a number greater than 1, whose square divides the number evenly/perfectly. For example, number 8 is not a square free number as number 4 (which is square of 2), divides 8. Similarly, number 4 is also not a square free number. However numbers 1, 3, 6 all are square free numbers.
</p>

<p>
A number <b>n</b> is called a <em>good number</em> if following properties hold.
<ul>
<li>It is a square free number.</li>
<li>Let <b>s</b> denote the sum of all divisors of <b>n</b> (including non-trivial divisors like 1 and itself). Let <b>c</b> denote the number of prime numbers dividing <b>s</b>. Number <b>c</b> should be a prime number.</li>
</ul>
</p>

<p>
You will two numbers <b>L, R</b>, you have to find sum of divisors (including non-trivial) of all the good numbers in the range <b>L</b> to <b>R</b>, both inclusive.
</p>

<p>Please note that <b>0</b> is not considered a prime number.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of the each test case contains two space separated integers <b>L, R</b> denoting the range for which you have to find sum of divisors of good numbers.</p>

<h3>Output</h3>
<p>For each test case, output a single line corresponding to answer of the test case.</p>

<h3>Constraints and Subtasks</h3>
<p>
<b>Subtask #1 (30 points)</b>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li>1 ≤ <b>L ≤ R ≤</b> <b>10<sup>3</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #2 (70 points)</b>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li>1 ≤ <b>L ≤ R ≤</b> <b>10<sup>5</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input</b>
2
1 5
6 10

<b>Output:</b>
6
30
</pre>

<h3>Explanation</h3>
<p>
<ul>
<li>Following number in the range 1 to 10 are square free numbers : 1, 2, 3, 5, 6, 7, 10.</li>
<li>Sum of their divisors will be 1, 3, 4, 6, 12, 8, 18 respectively.</li>
<li>Number of prime divisors of their sum of divisors will be 0, 1, 1, 2, 2, 1, 2 respectively.</li>
<li>So, the number 5, 6, 10 are good numbers.</li>
</ul>
</p>

<p><b>Example case 1</b>. Only good number in 1 to 5 is 5. Sum of divisors of 5 is 6.</p>
<p><b>Example case 2</b>. In the range 6 to 10, number 6 and 10 are good. Sum of their divisors is 12 + 18 = 30.</p>
