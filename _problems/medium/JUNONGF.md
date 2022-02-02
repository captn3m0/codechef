---
{"category_name":"medium","problem_code":"JUNONGF","problem_name":"Juno Puzzle for May","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYTH","36":"PYTH 3.4","37":"RUBY","38":"SCALA","39":"SCM guile","40":"SCM qobi","41":"ST","42":"TCL","43":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"mischievous_me","problem_tester":"pieguy","date_added":"21-03-2013","tags":{"0":"exponentiation","1":"may13","2":"medium","3":"mischievous_me","4":"number","5":"simple"},"editorial_url":"http://discuss.codechef.com/problems/JUNONGF","time":{"view_start_date":1368441000,"submit_start_date":1368441000,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3><b>Problem description</b></h3>

<p>Chef Juno's girlfriend, May, is a programmer and a mathematician, and she loves solving problems. Everyday Chef Juno comes up with new problems for her to solve, otherwise she gets bored and depressed. He doesn't want her to feel so, but he has run out of all problems. He consults his Chef friends, who came up with a new problem.</p>
<p>The Chef City is an <b>N</b>-dimensional city of dimensions L[0]*..*L[N-1] and each of the (L[0]*..*L[N-1]) cells may have 0 to <b>V</b>-1 restaurants. They want to know the number of ways they can open restaurants in each cell of the city such that the sum of the number of restaurants in every sub-block(see details) in Chef City is divisible by <b>V</b>.</p>
<p>Chef Juno realizes that this number could be very huge given the size of Chef City, so to make this problem a little easier for his girlfriend (and for himself, as he should himself know the solution ;)), he wants the answer modulo 1000000007. But before asking her this problem, he wants to know the answer himself. So he turns to you for help. Please help him :)
</p>
<p><b>Details</b></p>
<p>A sub-block of an N-dimensional hyperrectangle can be defined as an N-dimensional hyperrectangle of<br />
1*1*..L[i]..*1*1 dimensions for i ranging from 0 to N-1, where the ith dimension is L[i].<br />
For example, in a 2*3*2 cuboid, we can have sub-blocks of<br />
2*1*1, 1*3*1 and 1*1*2 dimensions and each of the 12 cells can have<br />
0 to V-1 restaurants in such a way that the sum of the number of restaurants in every sub-block is divisible by V.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of T test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>V</b> and <b>N</b>.</p>
<p>Since the input file size may go large, we ask you to generate the input using the following scheme.<br /><br />
You have two lines of 6 integers each.<br /><br />
The first line consists of the integers <b>P[0], P[1], A0, B0, C0, M0</b>.<br /><br />
The second line consists of the integers <b>Q[0], Q[1], A1, B1, C1, M1</b>.</p>
<p>Using the above, you can generate arrays P[] and Q[] as follows:<br /><br />
P[i] = A0 * A0 * P[i-1] + B0 * P[i-2] + C0 modulo (M0)<br /><br />
Q[i] = A1 * A1 * Q[i-1] + B1 * Q[i-2] + C1 modulo (M1)<br /><br />
for i>=2 and i &lt; N</p>
<p>From this, the ith dimension can be calculated as follows: <br /><br />
The ith dimension, L[i] = P[i]*(M1)+Q[i]+1 for i>=0 and i &lt; N</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer. As was mentioned above, you should print this number modulo 1000000007.</p>
<h3>Constraints</h3>

<p>1 &lt;= T &lt;= 100000</p>
<p>2 &lt;= N &lt;= 100</p>
<p>1 &lt;= V &lt;= 2^63 - 1</p>
<p>0&lt;=A[0],A[1],B[0],B[1],C[0],C[1]&lt;=100000</p>
<p>0 &lt;= P[0], P[1] &lt; max(10^5+1, M0)<br />
and</p>
<p>0 &lt;= Q[0], Q[1] &lt; max(10^5+1, M1)</p>
<p>1&lt;=M0 and M1&lt;=2^31-1</p>
<p>All N dimensions after calculation will be between 1 and 2^63 – 1.</p>
<h3>Example</h3>
<pre><b>Input:</b>
<p></p>
3
1 2
1 1 1 1 1 1
1 1 1 1 1 1
3 2
1 1 1 1 1 2
2 1 1 1 1 1
3 3
1 1 1 1 1 2
1 1 0 0 0 2
<b>Output:</b>
1
729
387420489
</pre><h3>Explanation</h3>
<p><b>Test case 1</b>: Since V is equal to 1, there is only way to open restaurants in the 2 dimensional city of dimensions 3*3:</p>
<p>| 0 0 0 |</p>
<p>| 0 0 0 |</p>
<p>| 0 0 0 |</p>
<p>Here the sum of the number of restaurants opened in every sub-block of dimensions 1*3 and 3*1<br />
 is divisible by 1.
</p>
<p>
<b>Test case 2</b>: Here the dimensions of the city are 4*3 and V=3.<br />
So one of the ways to open restaurants in each cell of the<br />
city is:</p>
<p>|1 0 2|</p>
<p>|2 1 0|</p>
<p>|1 2 0|</p>
<p>|2 0 1|</p>
<p>Here the sum of the number of restaurants opened in every sub-block of dimensions 1*3 and 4*1<br />
is divisible by V=3.
</p>
<p>
<b>Test case 3</b>: Here we are given a 3-dimensional hyperrectangle<br />
of dimensions 4*4*3 and V is 3.<br />
So in each of the 48 cells, we can open 0 to 2 restaurants, but we have to ensure that sum of the number of restaurants in every 4*1*1 sub-block, 1*4*1 sub-block and 1*1*3 sub-block is divisible by 3.
</p>
