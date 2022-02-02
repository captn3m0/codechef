---
{"category_name":"medium","problem_code":"TAPOINT","problem_name":"Find The Point","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"errichto","date_added":"15-09-2016","tags":{"0":"cook74","1":"geometry","2":"math","3":"medium","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAPOINT","time":{"view_start_date":1474223400,"submit_start_date":1474223400,"visible_start_date":1474223400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/mandarin/TAPOINT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/russian/TAPOINT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/vietnamese/TAPOINT.pdf">Vietnamese</a> as well.</h3>



<p>
Jem is going to buy a house in Bearland.
Can you help him to choose it?
</p>

<p>
Bearland has shape of circle with radius <b>R</b> metres and center at the point <b>(0, 0)</b>.
There is a house at every point with integer coordinates (expressed in metres), excluding the border.
Since Jem likes traveling abroad, he wants to live very close to the border.
More precisely, his house must be at most <b>K</b> centimeters away from the circular border.
He also requires that the coordinates of his house must be positive.
Find and print coordinates of any house fulfilling Jem's wishes.
If there is no such house, print <b>-1</b>.
</p>

<h3>Input</h3>

<p>The first line of the input contains one integer <b>T</b> — the number of test cases.</p>
<p>The <b>i</b>-th of following <b>T</b> lines contains two integers <b>R<sub>i</sub></sub></b> and <b>K<sub>i</sub></b>, describing one test case.</p>

<h3>Output</h3>
<p>
For each test case print the answer in a separate line — two integer coordinates of any house Jem can buy,
		or print <b>-1</b> if none house satisfies the described conditions.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>2 ≤ R<sub>i</sub> ≤ 10<sup>9</sup></b></li>
<li><b>1 ≤ K<sub>i</sub> ≤ 99</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input 1</b>:
2
10 16
12 1

<b>Output 1</b>:
9 4
-1
</pre>

<h3>Explanation</h3>
<p>
<b>test #1:</b> Jem's house must be at most 16 centimeters - which is equal to 0.16 metres away from the border. The distance from the point (9, 4) to the border is: 10 - sqrt(9<sup>2</sup> + 4<sup>2</sup>) ~ 0.15 < 0.16.
</p>
