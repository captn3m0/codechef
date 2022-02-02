---
{"category_name":"medium","problem_code":"HAIRCUT","problem_name":"Bear and Haircut","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"kingofnumbers","date_added":"22-03-2017","tags":{"0":"dynamic","1":"errichto","2":"ltime46","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/HAIRCUT","time":{"view_start_date":1490461200,"submit_start_date":1490461200,"visible_start_date":1490461200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/mandarin/HAIRCUT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/russian/HAIRCUT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME46/vietnamese/HAIRCUT.pdf">Vietnamese</a> as well.</h3>


<p>
Bear Limak has just gotten his hair cut.
Looking in a mirror, he realized that his fur looks so-so just after a haircut.
After some thinking, he stated that he <i>looks good</i> when his most recent haircut was between <b>A</b> and <b>B</b> days ago (inclusive).
It's guaranteed that <b>A</b> ≥ 1, so Limak doesn't look good on a day of a haircut in particular (you can assume that he gets a haircut in the morning).
</p>

<p>
After his new realization, Limak decided to plan his haircuts.
Today is the day 0, and he has just gotten a haircut.
For each of the following days, starting from the day 1, he can decide whether to get a haircut or not.
It's allowed to get a haircut many days in a row.
</p>

<p>
There will be <b>N</b> days that are important for Limak (because he's going to meet a girl he likes).
The i-th of them is the day <b>t</b><sub>i</sub>.
Limak wants to look good on as many of those days as possible.
</p>

<p>
Please, find the maximum possible number of important days when Limak will look good.
</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The first line of each test case contains three integers <b>N</b>, <b>A</b> and <b>B</b>, denoting the number of important days and values describing when Limak looks good respectively.
</p>

<p>
The second line contains <b>N</b> distinct integers <b>t</b><sub>1</sub>, <b>t</b><sub>2</sub>, ..., <b>t<sub>N</sub></b>, denoting important days.
These values are sorted increasingly.
</p>



<h3>Output</h3>
<p>For each test case, output a single line containing one integer — the maximum possible number of important days when Limak will look good.</p>



<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 6</li>
<li>1 ≤ <b>N</b> ≤ 150,000</li>
<li>1 ≤ <b>A</b> ≤ <b>B</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>t</b><sub>i</sub> ≤ 10<sup>9</sup></li>
<li><b>t</b><sub>i</sub> < <b>t</b><sub>i+1</sub></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): 1 ≤ <b>N</b>, <b>t</b><sub>i</sub>, <b>A</b>, <b>B</b> ≤ 50</li>
<li>Subtask #2 (20 points): 1 ≤ <b>N</b> ≤ 1000</li>
<li>Subtask #3 (20 points): <b>A</b> = 1</li>
<li>Subtask #4 (40 points): Original constraints.</li>
</ul>



<h3>Example</h3>
<pre><b>Input:</b>
6
5 4 8
2 3 6 8 9
8 6 12
8 9 12 13 15 17 18 25
8 6 12
8 9 12 13 15 17 18 24
5 50000123 100000123
700000123 710000123 770000123 780000123 790000123
22 6 20
3 9 12 22 24 25 34 46 47 51 53 62 64 66 68 73 79 92 93 95 96 98
3 1 1000
1 17 1000

<b>Output:</b>
3
6
5
5
20
3
</pre>


<h3>Explanation</h3>

<p><b>Test case 1.</b>
There are 5 important days.
Since Limak had his hair cut on the day 0, he can just wait and he will look good on days 4 through 8 (during that time, the number of days from the most recent haircut will be between <b>A</b> and <b>B</b>).
There are 2 important days (6 and 8) in that interval.
There exists a strategy that allows Limak to look good on 3 important days.
For example, he could get a new haircut on the day 1 — then he will look good on days 5 through 9, including 3 important days.
It turns out that it's impossible that Limak would look good on 4 or more important days.
So the answer is 3.
</p>

<p><b>Test case 2.</b>
Limak should get a haircut on the day 6, to look good on days 12 through 18.
Then he should get a haircut on the day 19, to look good on days 25 through 31.
In total, he will look good on 6 important days: 12, 13, 15, 17, 18, 25.
</p>
