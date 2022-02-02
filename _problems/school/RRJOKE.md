---
{"category_name":"school","problem_code":"RRJOKE","problem_name":"Good Joke!","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"tuananh93","date_added":"18-12-2014","tags":{"0":"Rubanenko","1":"ad","2":"cook53","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/RRJOKE","time":{"view_start_date":1419186799,"submit_start_date":1419186799,"visible_start_date":1419186799,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/mandarin/RRJOKE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/russian/RRJOKE.pdf">Russian</a> as well.</h3>


<p>
Vadim and Roman like discussing challenging problems with each other. One day Vadim told his friend following problem:
<p> Given <b>N</b> points on a plane. Each point <b>p</b> is defined by it's two integer coordinates — <b>p<sub>x</sub></b> and <b>p<sub>y</sub></b>. The distance between points <b>a</b> and <b>b</b> is <b>min(|a<sub>x</sub> - b<sub>x</sub>|, |a<sub>y</sub> - b<sub>y</sub>|)</b>. You should choose a starting point and make a route visiting every point exactly once, i.e. if we write down numbers of points in order you visit them we should obtain a permutation. Of course, overall distance walked should be as small as possible. The number of points may be up to <b>40</b>.
</p>
"40? Maybe 20? Are you kidding?" – asked Roman. "No, it's not a joke" – replied Vadim. So Roman had nothing to do, but try to solve this problem. Since Roman is really weak in problem solving and you are the only friend, except Vadim, with whom Roman can discuss challenging tasks, he has nobody else to ask for help, but you!
</p>
<p> </p>


<h3>Input</h3>
<p>Input description.</p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.The first line of each test case contains a single integer <b>N</b> denoting the number of points on a plane. The following <b>N</b> lines contain two space-separated integers each — coordinates of points. 
<p> </p>

<h3>Output</h3>
<p>Output description.</p>
Output the answer for every test case in a separate line. The answer for every test case is a permutation of length <b>N</b>. In case there are several solutions that lead to minimal distance walked, you should choose the lexicographically smallest one. Let <b>P</b> denote such permutation. To make output smaller, you should output <b>H(P)</b>. <b>H(P) = P<sub>1</sub> xor P<sub>2</sub> xor ... xor P<sub>N</sub></b>. Have a look at the example and it's explanation for better understanding. 
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>40</b></li>
<li><b>0</b> ≤ <b>absolute value of each coordinate</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ sum over all <b>N</b> in a single test file ≤ <b>120</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 2
0 0
3
3 3
0 0
0 3
<b>Output:</b>
3
0
</pre>
<p> </p>
<h3>Explanation</h3>
<p>For the first test case permutation <b>[1, 2]</b> is optimal. <b> 1 xor 2 = 3</b>.
<br>
For the second one both <b>[2, 3, 1]</b> and <b>[1, 3, 2]</b> lead us to the shortest walk, but the second one is lexicographically smaller. So the answer is <b>H([1, 3, 2]) = 1 xor 3 xor 2 = 0 </b>.
 </p>
