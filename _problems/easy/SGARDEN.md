---
{"category_name":"easy","problem_code":"SGARDEN","problem_name":"Garden Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"22-01-2014","tags":{"0":"berezin","1":"easy","2":"july14","3":"lcm"},"editorial_url":"http://discuss.codechef.com/problems/SGARDEN","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/SGARDEN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/SGARDEN.pdf">Russian</a>.</h3>
<p>All bandits are afraid of Sheriff. Sheriff constantly fights crime, but when bandits lay low, he gets bored and starts to entertain himself. </p>
<p>This time Sheriff gathered all the bandits in his garden and ordered them to line up. After the whistle all bandits should change the order in which they stand. </p>
<p>Sheriff gave all the bandits numbers from 1 to N. For each place <b>i</b> he determined the <b>unique</b> position <b>j</b>. After whistling the bandit  staying on position <b>i</b> should run to the <b>j</b>-th position. Sheriff loved seeing how the bandits move around, and he continued whistling until the evening. He finished the game only when he noticed that the bandits are in the same order in which they were standing originally.</p>
<p>Now the Sheriff asks the question: How many times has he whistled?</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of bandits. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting that the bandit staying on position <b>i</b> should run to the <b>A<sub>i</sub></b>-th position after the whistle.</li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing number of times the sheriff had to whistle, print it modulo 10^9 + 7.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li>All <b>A<sub>i</sub></b> are distinct numbers from <b>1</b> to <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre> <p>
<b>Input:</b>

2
3
1 2 3
5
2 3 1 5 4

<b>Output:</b>

1
6
</p>
</pre><p> </p>
<h3>Explanation</h3>
<pre> <p>
<b>Example case 2.</b>
the bandits positions are:
0. 1 2 3 4 5
1. 3 1 2 5 4
2. 2 3 1 4 5
3. 1 2 3 5 4
4. 3 1 2 4 5
5. 2 3 1 5 4
6. 1 2 3 4 5.
</p></pre>