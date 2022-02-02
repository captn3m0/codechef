---
{"category_name":"easy","problem_code":"CHSTR","problem_name":"Chef and String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":null,"date_added":"6-04-2015","tags":{"0":"antoniuk1","1":"combinatorics","2":"june15","3":"medium","4":"suffix","5":"zfunction"},"editorial_url":"http://discuss.codechef.com/problems/CHSTR","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/CHSTR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/CHSTR.pdf">Russian</a>.</h3>
<p>Chef has a string <b>S</b> consisting of <b>N</b> lowercase English alphabets. He has prepared a list <b>L</b> consisting of all non empty <a href="http://en.wikipedia.org/wiki/Substring">substrings</a> of the string <b>S</b>.</p>
<p>Now he asks you <b>Q</b> questions. To <b>i<sup>th</sup></b> question, you need to count the number of ways to choose exactly <b>K<sub>i</sub></b> equal strings from the list <b>L</b>. As answer could be large you need to find it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. First line of each test case contains two space-separated integers <b>N</b> and <b>Q</b> denoting the length of the string <b>S</b> and amount of questions. The next line of each test case contains a single string <b>S</b>. Each of the next <b>Q</b> lines contains a single integer <b>K<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output <b>Q</b> lines, each line should contain one integer - amount of ways to choose exactly <b>K<sub>i</sub></b> equal strings from the list <b>L</b>.</p>
<h3>Constraints</h3>
<p><b>Subtask 1: (10 points)</b></p>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ N ≤ 5</b></li>
<li><b>1 ≤ Q ≤ 5</b></li>
<li><b>1 ≤ K<sub>i</sub> ≤ 5</b></li>
</ul>
<p><br />
<b>Subtask 2: (20 points)</b></p>
<ul>
<li><b>T = 1</b></li>
<li><b>1 ≤ N ≤ 500</b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ K<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>
<p><br />
<b>Subtask 3: (70 points)</b></p>
<ul>
<li><b>T = 1</b></li>
<li><b>1 ≤ N ≤ 5000</b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ K<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 4
ababa
2
1
3
4
<b>Output:</b>
7
15
1
0
</pre><h3>Explanation</h3>
<p><b>L</b> = {<b>"a", "b", "a", "b", "a", "ab", "ba", "ab", "ba", "aba", "bab", "aba", "abab", "baba", "ababa"</b>}.</p>
<ul>
<li><b>k<sub>1</sub> = 2</b>: There are seven ways to choose two equal strings ("a", "a"), ("a", "a"), ("a", "a"), ("b", "b"), ("ab", "ab"), ("ba", "ba"), ("aba", "aba"). </li>
<li><b>k<sub>2</sub> = 1</b>: We can choose any string from <b>L</b> (15 ways). </li>
<li><b>k<sub>3</sub> = 3</b>: There is one way to choose three equal strings - ("a", "a", "a"). </li>
<li><b>k<sub>4</sub> = 4</b>: There are no four equal strings in <b>L</b> . </li>
</ul>
