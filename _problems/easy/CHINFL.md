---
{"category_name":"easy","problem_code":"CHINFL","problem_name":"Chef and Inflation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"antoniuk1","date_added":"23-02-2015","tags":{"0":"dynamic","1":"jan16","2":"medium","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CHINFL","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/CHINFL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/CHINFL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/CHINFL.pdf">Vietnamese</a> as well.</h3>

<p>
A recent glut in Chefland's markets has caused the local currency <em>Peppercorn</em> to devaluate sharply. (Peppercorns are getting cheaper on an average, though there could be ups and downs).
</p>
<p>
And Chef needs to rescue his wealth! Initially, he had <b>D</b> Peppercorns. There are <b>N</b> exchange kiosks in the city he lives in, where he can go and exchange his Peppercorns for a well-known stable currency, the Antarctican Dollar. For each kiosk, the exchange rate for the first <b>M</b> seconds of the day is known (both for buying and selling). All kiosks are arranged in a row, and to travel from the <b>i<sup>th</sup></b> to the <b>j<sup>th</sup></b> kiosk, you need to spend <b>|i-j|</b> seconds, and to exchange currency at any kiosk, you also need <b>1</b> second. So, starting at point of time <b>0</b> at any of the kiosks (he can get there before trading starts for the day), Chef runs from one kiosk to another to buy and sell currency. You need to find the maximum amount of Peppercorns Chef could have after the <b>M<sup>th</sup></b> second.
</p>

<h3>Note</h3>
<ul>
<li>If <b>X</b> is a buying rate, the kiosk will pay you <b>X</b> Peppercorns for <b>1</b> Antarctican Dollar.</li>
<li>If <b>X</b> is a selling rate, you will pay the kiosk <b>X</b> Peppercorns for <b>1</b> Antarctican Dollar.</li>
</ul>

<h3>Input</h3>
<p>First line of input contains three numbers — <b>N</b>, <b>M</b> and <b>D</b>. <b>N</b> lines follow.
<b>i</b>th line (<b>i = 0 … N-1</b>) contains <b>2*M</b> integers — currency rate for <b>i<sup>th</sup></b> kiosk. Numbers <b>A<sub>i, 2j</sub></b> and <b>A<sub>i, 2j+1</sub></b> (<b>j = 0 … M-1</b>) are the selling and buying rates, respectively, at the <b>j<sup>th</sup></b> second for the <b>i<sup>th</sup></b> kiosk.
</p>

<h3>Output</h3>
<p>Output a single number: the maximum amount of money (in Peppercorns - in the end Chef ought to have all the money converted to local currency since it's the only valid currency in the country for financial operations) he could have after <b>M</b> seconds, with absolute or relative error not more than <b>1e-6</b>. </p>
<p>If the amount of money of any currency that Chef will own at any point of time exceeds <b>10<sup>18</sup></b>, output file should contain <b>only a single line</b> containing  the string <i>“Quintillionnaire”</i> (without quotes, followed by a newline character).</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i, j</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>A<sub>i, 2j</sub></b> > <b>A<sub>i, 2j+1</sub></b> (because there are no miracles in Chefland — you’ll always pay more than what the kiosk will pay you. Otherwise, one could’ve indefinitely sold and bought and increased their money this way).</li>
</ul>

<h3>Subtasks</h3>
<b>Subtask 1 (20 points): </b>
<ul>
<li><b>1 ≤ N ≤ 100</b></li>
<li><b>1 ≤ M ≤ 100</b></li>
<li><b>1 ≤ D ≤ 10<sup>3</sup></b></li>
<li><b>1 ≤ A<sub>i,j</sub> ≤ 10<sup>3</sup></b></li>
</ul> 
<b>Subtask 2 (30 points):</b>
<ul>
<li><b>1 ≤ N ≤ 100</b></li>
<li><b>1 ≤ M ≤ 100</b></li>
</ul> 
<b>Subtask 3 (50 points):</b> No additional constraints </b>

<h3>Example</h3>
<pre><b>Input:</b>
3 3 5
2 1 5 3 7 6
2 1 4 3 6 5
10 9 8 7 6 5

<b>Output:</b>
15.0000000000
</pre>