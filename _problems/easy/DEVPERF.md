---
{"category_name":"easy","problem_code":"DEVPERF","problem_name":"Devu and Perfume","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"mgch","date_added":"20-12-2015","tags":{"0":"ad","1":"admin2","2":"cakewalk","3":"jan16"},"editorial_url":"http://discuss.codechef.com/problems/DEVPERF","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/DEVPERF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/DEVPERF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/DEVPERF.pdf">Vietnamese</a> as well.</h3>
<p>
There is a haunted town called HauntedLand. The structure of HauntedLand can be thought of as a grid of size <b>n * m</b>. There is a house in each cell of the grid. Some people have fled from their houses because they were haunted. '.' represents a haunted house whereas '*' represents a house in which people are living.
</p>
<p>
One day, Devu, the famous perfumer came to town with a perfume whose smell can hypnotize people. Devu can put the perfume in at most one of the houses. This takes Devu one second. Then, the perfume spreads from one house (need not be inhabited by people) to all its adjacent houses in one second, and the cycle continues. Two houses are said to be a adjacent to each other, if they share a corner or an edge, i.e., each house (except those on the boundaries) will have 8 adjacent houses.
</p>
<p>
You want to save people from Devu's dark perfumery by sending them a message to flee from the town. So, you need to estimate the minimum amount of time Devu needs to hypnotize all the people? Note that if there are no houses inhabited by people, Devu doesn't need to put perfume in any cell.
</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line of each test case contains two space separated integers <b>n, m</b> denoting the dimensions of the town.</p>
<p>For each of next <b>n</b> lines, each line has <b>m</b> characters (without any space) denoting a row of houses of the town.</p>
<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
</ul>
<p>
<b>Subtask #1:</b> (40 points) </p>
<ul>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>100</b></li>
</ul>
<p><b>Subtask #2:</b> (60 points) </p>
<ul>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>1000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
<font face="monospace">*.</font>
<font face="monospace">..</font>
3 4
<font face="monospace">.*..</font>
<font face="monospace">***.</font>
<font face="monospace">.*..</font>

<b>Output:</b>
1
2
</pre><h3>Explanation</h3>
<p><b>In the first example</b>, it will take Devu one second for putting the perfume at the only house. So, the answer is 1.
</p>
<p><b>In the second example</b>, He will first put the perfume at the * at cell (1, 1) (assuming 0-based indexing).<br />
Now, it will take Devu 1 secs to put perfume. In the next second, the perfume will spread to all of its adjacent cells, thus making each house haunted.<br />
So, the answer is 2.
</p>
