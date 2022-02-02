---
{"category_name":"easy","problem_code":"WORLDCUP","problem_name":"Strategy for the World Cup","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"anudeep2011","date_added":"4-02-2015","tags":{"0":"combinatorics","1":"cook55","2":"devuy11","3":"dynamic","4":"maths","5":"simple"},"editorial_url":"http://discuss.codechef.com/problems/WORLDCUP","time":{"view_start_date":1424025020,"submit_start_date":1424025020,"visible_start_date":1735108720,"end_date":1735669800},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/mandarin/WORLDCUP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/russian/WORLDCUP.pdf">Russian</a> as well.</h3>
<p>Captain Dehatti from Bawanian village is making strategy to win the Fake Cricket World Cup organised in his village. </p>
<p>He want his team to score runs only in 4's and 6's because he believes that scoring any runs by running will make them tired. </p>
<p>He also wants that the team does not loose more than  <b>L</b> wickets.</p>
<p>He now wonders in how many ways his team can score exactly <b>R</b> runs in <b>B</b> balls. Ofcourse, he assumes that the opponent bowling is awesome and will not concede any extra runs. </p>
<p>Formally, He wonders how many ways can his team score exactly <b>R</b> runs in <b>B</b> balls, given that each ball can result in 4, 6, 0 , or W(wicket wont add anything to score). Atmost <b>L</b> wicktes are allowed [i.e. Atmost <b>L</b> 'W' can be there in B balls ].</p>
<p><b>Note:</b> His batting order is fixed i.e. After each wicket , next player to come is fixed.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases.</p>
<p>Each test case contains 3 space separated integers, <b>R, B and L</b></p>
<h3>Output</h3>
<p>For each test cases output the number of ways modulo 1e9+7 (i.e. 1000000007) </p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 25000</b></li>
<li><b>0 ≤ R ≤ 10<sup>9</sup></b></li>
<li><b>1 ≤ B ≤ 300</b></li>
<li><b>0 ≤ L ≤ 9</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b><br />
6
10 2 9
6 2 9
6 1 9
4 1 9
5 1 9
10 3 9<br />
<b>Output:</b><br />
2
4
1
1
0
12
</pre><h3> Explanation </h3>
<pre>
Explanation for the sample input 1:

All possible ways to face 2 deliveries:

00
04
06
0W
W0
W4
W6
WW
40
44
46
4W
60
64
66
6W

Only possible ways to win the match are 46 and 64. Hence answer is 2.

You need to consider all sample space i.e. 4^B

Note that the answer to R = 0 , B = 2 , W =1 is 3  [ 00 , 0W , W0 ]
</pre>