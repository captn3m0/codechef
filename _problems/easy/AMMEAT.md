---
{"category_name":"easy","problem_code":"AMMEAT","problem_name":"Andrew and the Meatballs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"28-03-2013","tags":{"0":"ad","1":"cakewalk","2":"cook33","3":"sorting","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/AMMEAT","time":{"view_start_date":1366569000,"submit_start_date":1366569000,"visible_start_date":1728420626,"end_date":1735669800},"layout":"problem"}
---
<p>Andrew likes meatballs very much.</p>
<p>He has <b>N</b> plates of meatballs, here the <b>i</b><sup>th</sup> plate contains <b>P<sub>i</sub></b> meatballs. You need to find the minimal number of plates Andrew needs to take to his trip to Las Vegas, if he wants to eat there at least <b>M</b> meatballs. Note that each plate is already packed, i.e. he cannot change the amount of meatballs on any plate.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>. The second line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>
For each test case, output an integer, denoting the minimum number of plates. If it's impossible to take at least <b>M</b> meatballs, print <b>-1</b>.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7777</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>M, P<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 7
1 2 3 4

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>If he takes <b>3</b><sup>rd</sup> and <b>4</b><sup>th</sup> plates, then we may eat <b>P<sub>3</sub> + P<sub>4</sub> = 7</b> meatballs in Las Vegas. This is the only way for eating at least <b>M = 7</b> meatballs with <b>2</b> plates.</p>
