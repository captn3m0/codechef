---
{"category_name":"medium","problem_code":"TMRATING","problem_name":"Best Buggy Ratings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"6 - 9","source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"maksflow","date_added":"11-04-2012","tags":{"0":"cook21","1":"flying_ant","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/TMRATING","time":{"view_start_date":1335119152,"submit_start_date":1335119152,"visible_start_date":1335119400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">A rating system for cricket players is built by Mr.Bugs Bunny and as expected, it has lot of bugs. The initial ratings of N players  ( numbered 0 to N-1 ) are given and we refer it as array V<sub>0</sub>. The system is expected to answer simple queries of the form, find the top-2 maximum ratings among players from i to j ( inclusive ). Top-2 maximum means the first two elements of the ratings sorted in non-increasing order.
Due to bugs in the system, an unexpected update occurs after output of each query and this creates a new version of the ratings array V. We refer the Kth version of the ratings arrays as V<sub>K</sub>. Also, for a query, the system queries on some previous version of V. Mr. Bunny gave the exact details of the bugs as follows,<br />
<br />
Given Q queries numbered 1 to Q in order and values of A B C D M,<br />
<ul>
<li>For a query number K, the query is made on the array V<sub>t</sub> , where t = ( A * R1 + D ) % K, and R1 is the maximum rating in the query range of the previous query. For the first query, consider R1 = 0.
</li>
<br />
<li>For a query number K, let R1 and R2 be the top-2 maximum ratings ( R1 ≥ R2 ). After it outputs this answer, the system changes the rating of a player. Specifically, the rating of player number ( B * R1 + D ) % N is changed to ( C * R2 + D ) % M. This update is on the array V<sub>(K-1)</sub> and a new version V<sub>K</sub> is created.
</li>
</ul>
<br />
</p><p align="justify">You can not fix these bugs, but can you guess the output produced by this system. For more clarity, check the pseudo code below.
<pre>
read array V<sub>0</sub>;
R1 = 0, R2 = 0;
for K = 1 to Q
     t = ( A * R1 + D ) % K
     read qi qj
     R1, R2 = top-2 Maximum ratings in range [qi..qj] in the array V<sub>t</sub>
     Output R1 R2
     V<sub>K</sub> = Update array V<sub>(K-1)</sub> by changing V<sub>(K-1)</sub> [ ( B * R1 + D ) % N ] = ( C * R2 + D ) % M
end-for
</pre>
<br />
<u>Note:</u> Take care of potential overflows in intermediate calculations in the equations mentioned above. The authors algorithm doesn't depend on the values of A B C D M, they are just used to generate some values.
<br />
<h3>Input</h3>
</p><p align="justify">First line contains 6 integers N M A B C D and the second line contains N integers, the initial ratings of N players in order ( 2 ≤ N, A, B, C, D ≤ 100,000 ;  0 ≤ V<sub>0</sub>[i] , M &lt; 1,000,000,000 ; M ≥ 2 ). Next line contains Q ( number of queries 1 ≤ Q ≤ 100,000 ), followed by Q lines. The Kth line in this has the query number K, and has two integers qi qj ( 0 ≤ qi &lt; qj &lt; N ).

<h3>Output</h3>
</p><p align="justify">For each query, output the top-2 maximum ratings R1 R2 ( R1 ≥ R2 ) in a new line.

<h3>Example</h3>

<pre>
<b>Input:</b>
6 1000 2 2 2 2
1 2 3 4 5 6
4
0 5
0 3
1 3
2 5

<b>Output:</b>
6 5
4 3
12 4
12 8
</pre>

<br />
<b>Explanation:</b><br /><br />
V<sub>0</sub> = { 1, 2, 3, 4, 5, 6 }<br /><br />

1.) t = 0 --&gt; top-2 max of V<sub>0</sub>[0..5] =  6 ,  5<br />
Updating V<sub>0</sub>[2] with 12<br />
V<sub>1</sub> = { 1, 2, 12, 4, 5, 6 }<br /><br />

2.) t = ( A(=2) * R1(=6) + D(=2) ) % 2 = 0 --&gt; top-2 max of V<sub>0</sub>[0..3] =  4 ,  3<br />
R1 = 4, R2 = 3<br />
Updating index = ( B(=2) * R1(=4) + D(=2) ) % N(=6) = 4 with value =  ( C(=2) * R2(=3) + D(=2) ) % M(=1000) = 8<br />
V<sub>2</sub> = { 1, 2, 12, 4, 8, 6 }<br /><br />

3.) t = 1 --&gt; top-2 max of V<sub>1</sub>[1..3] =  12 , 4<br />
Updating V<sub>2</sub>[2] = 10<br />
V<sub>3</sub> = { 1, 2, 10, 4, 8, 6 }<br /><br />

4.) t = 2 --&gt; top-2 max of V<sub>2</sub>[2..5] =  12 , 8<br />
Updating V<sub>3</sub>[2] = 18<br />
V<sub>4</sub> = { 1, 2, 18, 4, 8, 6 }<br /><br /></p>