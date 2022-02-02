---
{"category_name":"easy","problem_code":"LEBALONS","problem_name":"Little Elephant and Balloons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"25-04-2012","tags":{"0":"dynamic","1":"easy","2":"may14","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBALONS","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/LEBALONS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/LEBALONS.pdf">Russian</a>.</h3>
<p>The Little Elephant from the Zoo of Lviv is going to the Birthday Party of  the Big Hippo tomorrow. Now he wants to prepare a gift for the Big Hippo.

</p><p>He has <b>N</b> balloons, numbered from <b>1</b> to <b>N</b>. The <b>i-th</b> balloon has the color <b>C<sub>i</sub></b> and it costs <b>P<sub>i</sub></b> dollars. The gift for the Big Hippo will be any subset (chosen randomly, possibly empty) of the balloons such that the number of different colors in that subset is at least <b>M</b>.

</p><p>Help Little Elephant to find the expected cost of the gift.

<h3>Input</h3>
</p><p>The first line of the input contains a single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a pair of integers <b>N</b> and <b>M</b>. The next <b>N</b> lines contain <b>N</b> pairs of integers <b>C<sub>i</sub></b> and <b>P<sub>i</sub></b>, one pair per line.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases. Your answer will considered correct if it has at most <b>10^-6</b> absolute or relative error.</p>

<h3>Constraints</h3>

<li><b>1</b> ≤ <b>T</b> ≤ <b>40</b></li>
<li><b>1</b> ≤ <b>N</b>,  <b>C<sub>i</sub></b>≤ <b>40</b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>1000000</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>K</b>, where <b>K</b> is the number of different colors in the test case.</li>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 2
1 4
2 7
2 1
1 4
2 7

<b>Output:</b>
11.000000000
7.333333333

</pre>