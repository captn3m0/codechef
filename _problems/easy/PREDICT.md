---
{"category_name":"easy","problem_code":"PREDICT","problem_name":"Predictopus","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mkagenius","problem_tester":"tuananh93","date_added":"22-04-2013","tags":{"0":"easy","1":"june13","2":"mkagenius","3":"probability"},"editorial_url":"http://discuss.codechef.com/problems/PREDICT","time":{"view_start_date":1371462362,"submit_start_date":1371462362,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef Datta likes betting in Indian Premier League very much.</p>
<p>He has <b>10000</b> rupees. Today the match is between <i>team A</i> and <i>team B</i>. The winning probability of <i>team A</i> is <b>P<sub>A</sub></b>, and hence winning probability of <i>team B</i> is <b>P<sub>B</sub> = 1 − P<sub>A</sub></b>. <br /><br />
Datta is free to bet any integral amount of money on any of the two teams as long as the total amount of money bet is at most <b>10000</b> rupees.<br />
Help him know the expected amount of money he will eventually have if today he places his bet(s) optimally.<br /> </p>
<h3>Rules of the game:</h3>
<p>If <i>team X</i> with winning probability <b>P<sub>X</sub></b> actually wins and someone bets <b>M</b> rupees on this team, he will gain <b>(2*(1−P<sub>X</sub>)) * M</b> rupees.</p>
<p>If <i>team X</i> with winning probability <b>P<sub>X</sub></b> actually loses and someone bets <b>N</b> rupees on this team, he will just lose <b>N</b> rupees.</p>
<h3>Input</h3>
<p>First line contains single integer <b>T</b>, the number of testcases. Then <b>T</b> lines follow, each line contains <b>P<sub>A</sub></b> the probability that <i>team A</i> wins.</p>
<h3>Output</h3>
<p>For each test case output single line containing the expected amount of money Datta will eventually have today if he places his bet(s) optimally. Your answer will be accepted if the absolute error is less than <b>10<sup>−6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100001 (10<sup>5</sup>+1)</b></li>
<li><b>0.0</b> ≤ <b> P<sub>A</sub> </b> ≤ <b>1.0</b></li>
<li><b>P<sub>A</sub></b> has at most <b>5</b> digits after the decimal point.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
0.510

<b>Output:</b>
10098
</pre><p><br /></p>
<h3>Example bet:</h3>
<p>Look at the following situation:<br />
<br /><br />
<br /><br />
<img src="//codechef.com/download/PREDICT.png" width="238" height="97" alt="june-codechef" /><br />
<br /><br />
<br /><br />
If chef  Datta bets <b>6,000</b> on <i>team A</i> and <b>4,000</b> on <i>team B</i>, the expected amount of money he will have after the bet is settled is <b>10,018</b>. Apparently that is not the best he can do <b>;)</b></p>
