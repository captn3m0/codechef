---
{"category_name":"hard","problem_code":"PUPPYGCD","problem_name":"Puppy and GCD","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"zedthirtyeight","date_added":"23-06-2015","tags":{"0":"ltime26","1":"math","2":"number","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/PUPPYGCD","time":{"view_start_date":1437900300,"submit_start_date":1437900300,"visible_start_date":1437900300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/mandarin/PUPPYGCD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/russian/PUPPYGCD.pdf">Russian</a>.</h3>
<p>One fine sunny day Tuzik was waiting for his master Vanka near their house. Time kept going by but the boy just wouldn't come out of the house. "Oh no, maybe he is participating in some programming contest like Lunchtime again. If I help him, we can go and start playing some interesting game outdoors sooner." - thought Tuzik, so he went into the house.</p>
<p>Vanka was struggling with the last problem indeed. The statement was: "Given integers <b>N</b> and <b>D</b>, find how many pairs of integers <b>(i, j)</b> such that <b>1 ≤ i ≤ j ≤ N</b> have the greatest common divisor exactly <b>D</b>."</p>
<p>"LOL, even I can solve it faster than him." - thought Tuzik. Unfortunately he is just a little puppy so he can't explain or code up the solution. But he wants to go outdoors with his master, so please help Vanka solve this problem for Tuzik's sake.</p>
<h3>Input</h3>
<p>The first line contains one integer <b>T</b> denoting the number of test cases.<br />
The following <b>T</b> lines contain two space-separated integers each: <b>N</b> and <b>D</b> - description of each test case.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer for this test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, D</b> ≤ <b>5*10<sup>8</sup></b></li>
<li>Subtask #1[20 points]: <b>1</b> ≤ <b>N, D</b> ≤ <b>500</b></li>
<li>Subtask #2[25 points]: <b>1</b> ≤ <b>N, D</b> ≤ <b>10<sup>5</sup></b></li>
<li>Subtask #3[25 points]: <b>1</b> ≤ <b>N, D</b> ≤ <b>2*10<sup>8</sup></b></li>
<li>Subtask #4[30 points]:<b>1</b> ≤ <b>N, D</b> ≤ <b>5*10<sup>8</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
12 3

<b>Output:</b>
6
</pre><h3>Explanation</h3>
<p>6 such pairs: (3, 3), (3, 6), (3, 9), (3, 12), (6, 9), and (9, 12).</p>
