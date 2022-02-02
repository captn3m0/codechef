---
{"category_name":"hard","problem_code":"EVILBOOK","problem_name":"Evil Book","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"16-09-2011","tags":{"0":"hard","1":"laycurse","2":"march12"},"editorial_url":"http://discuss.codechef.com/problems/EVILBOOK","time":{"view_start_date":1331461098,"submit_start_date":1331461098,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Ciel got enormous cooking power from the <i>Evil Book</i>.
Instead, Ciel must devote 666 magical power to the Evil Book.
</p>

<p>
Other than Ciel, there are <strong>N</strong> chefs in the world.
The <strong>i</strong>-th chef has <strong>C<sub>i</sub></strong> cooking power and <strong>M<sub>i</sub></strong> magical power.
Ciel may get <strong>M<sub>i</sub></strong> magical power by defeating the <strong>i</strong>-th chef in a cooking battle, which needs <strong>C<sub>i</sub></strong> effort.
After that, the <strong>i</strong>-th chef's magical power <strong>M<sub>i</sub></strong> becomes 0.
</p>

<p>
The Evil Book can help her, if she gives <strong>X</strong> magical power to the Evil Book.
That is, by consuming <strong>X</strong> magical power, she can choose some <b>i</b> and multiply by 1/3 both the <strong>i</strong>-th chef's cooking power <strong>C<sub>i</sub></strong> and his magical power <strong>M<sub>i</sub></strong>.
Note that she can't take the help of the Evil Book unless she has at least <strong>X</strong> magical power.
</p>

<p>
Firstly, Ciel has no magical power.
What's the minimum total effort for collecting at least 666 magical power?
</p>

<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
Each test case contains <strong>N</strong>+1 lines.
The first line for each test case has 2 integers <strong>N</strong> and <strong>X</strong>.
The (<strong>i</strong>+1)-th line for each test case has 2 integers <strong>C<sub>i</sub></strong> and <strong>M<sub>i</sub></strong>.
</p>

<h3>Output</h3>
<p>
For each test case, print the minimum total effort (rounded to the nearest integer) for collecting at least 666 magical power.
If it is impossible to collect 666 magical power, print "impossible" without quotes.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 5<br />
1 ≤ <strong>N</strong> ≤ 10<br />
10 ≤ <strong>X</strong> &lt; 666<br />
0 ≤ <strong>C<sub>i</sub></strong> ≤ 1000000000 (10<sup>9</sup>)<br />
0 ≤ <strong>M<sub>i</sub></strong> ≤ 1000000000 (10<sup>9</sup>)<br />
</p>

<h3>Sample Input</h3>
<pre>4
4 10
1 30
110 500
200 700
190 800
2 665
1 250
2 415
2 10
1000000000 1000000000
1000000000 1000000000
2 10
1000000000 1000000000
0 130</pre>

<h3>Sample Output</h3>
<pre>168
impossible
1000000000
1882</pre>

<h3>Output details</h3>

<p>
In the first case, the optimal way is the following.
</p>

<p>
Initially, Ciel's magical power = 0, Total effort = 0<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 30<br />
<strong>C</strong><sub>2</sub> = 110, <strong>M</strong><sub>2</sub> = 500<br />
<strong>C</strong><sub>3</sub> = 200, <strong>M</strong><sub>3</sub> = 700<br />
<strong>C</strong><sub>4</sub> = 190, <strong>M</strong><sub>4</sub> = 800<br />
</p>

<p>
After defeating the 1st chef:<br />
Ciel's magical power = 30, Total effort = 1<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 110, <strong>M</strong><sub>2</sub> = 500<br />
<strong>C</strong><sub>3</sub> = 200, <strong>M</strong><sub>3</sub> = 700<br />
<strong>C</strong><sub>4</sub> = 190, <strong>M</strong><sub>4</sub> = 800<br />
</p>

<p>
After using 3 helps of the Evil Book (<strong>i</strong> = 2, 3, 4):<br />
Ciel's magical power = 0, Total effort = 1<br />
<strong>C</strong><sub>1</sub> = 1, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 36+2/3, <strong>M</strong><sub>2</sub> = 166+2/3<br />
<strong>C</strong><sub>3</sub> = 66+2/3, <strong>M</strong><sub>3</sub> = 233+1/3<br />
<strong>C</strong><sub>4</sub> = 63+1/3, <strong>M</strong><sub>4</sub> = 266+2/3<br />
</p>

<p>
After defeating the 2nd, 3rd and 4th chefs:<br />
Ciel's magical power = 666+2/3, Total effort = 167+2/3 (1 + 36+2/3 + 66+2/3 + 63+1/3)<br />
<strong>C</strong><sub>1</sub> = 10, <strong>M</strong><sub>1</sub> = 0<br />
<strong>C</strong><sub>2</sub> = 36+2/3, <strong>M</strong><sub>2</sub> = 0<br />
<strong>C</strong><sub>3</sub> = 66+2/3, <strong>M</strong><sub>3</sub> = 0<br />
<strong>C</strong><sub>4</sub> = 63+1/3, <strong>M</strong><sub>4</sub> = 0<br />
</p>

<p>
In the fourth case, Ciel should defeat the 2nd chef at first.
Then, after using 12 helps of the Evil Book, the 1st chef's cooking power and magical power become 10<sup>9</sup> / 3<sup>12</sup> = 1881.67642...
</p>