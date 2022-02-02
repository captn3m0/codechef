---
{"category_name":"hard","problem_code":"EASYEX","problem_name":"Easy exam","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"5 - 20","source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"mugurelionut","date_added":"13-06-2015","tags":{"0":"advanced","1":"combinatorics","2":"fft","3":"hard","4":"july15","5":"maths","6":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/EASYEX","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="/download/translated/JULY15/mandarin/EASYEX.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/JULY15/russian/EASYEX.pdf" target="_blank">Russian</a>.</h3>
<p>One day Chef had an exam on probability theory. Nothing interesting, but the exam was going fishily easy. And finally Chef got to the last question:<br /><br /> "Suppose you have a dice with <b>K</b> faces with  numbers from <b>1</b> to <b>K</b> written on it, and integers <b>L</b> and <b>F</b>(<b>0 &lt; L &lt;= K</b>). You roll it <b>N</b> times. Let <b>a<sub>i</sub></b> be the number of times (out of the <b>N</b> rolls) that a face with number <b>i</b> written on it came up as the top face of the dice. Find the mathematical expectation of the value <b>a<sub>1</sub><sup>F</sup> * a<sub>2</sub><sup>F</sup> * ... * a<sub>L</sub></b><sup>F</sup>." <br /><br /> "I'll drop out of university and won't be allowed to cook" - Chef is frightened! Help him now or he will never be able to please you with tasty dishes again.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines describe one test case and contain 4 space-separated integers <b>N, K, L</b> and <b>F</b>.</p>
<h3>Output</h3>
<p>Let the answer for a test case be an fraction<b> P / Q</b>, where <b>P</b> and <b>Q</b> are integers. Let integer <b>X</b> be <b>P * Q<sup>-1</sup> modulo 2003</b>, where <b>Q<sup>-1</sup> modulo 2003</b> is the modular multiplicative inverse of <b>Q</b> modulo <b>2003</b> or <b>0</b> if <b>Q<sup>-1</sup> modulo 2003</b> doesn't exist. For each test case, output a single line containing the integer <b>X</b> for this test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>0</b> &lt; <b>N, K</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> &lt; <b>F ≤ 1000 </b></li>
<li><b>0</b> &lt; <b>L * F</b> ≤ <b>50 000</b></li>
<li><b>Subtask #1[39 points]: F = 1</b> </li>
<li><b>Subtask #2[61 points] : no additional constraints</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
1
2 6 2 1

<b>Output:</b>
779
</pre>
<h3>Explanation</h3>
<p>We roll the 6-face dice 2 times, and we are interested in the value  <b>a<sub>1</sub> * a<sub>2</sub></b>. The only two possible scenarios when this value is not zero are <b>(1, 2)</b> and <b>(2, 1)</b>. Both of them have <b>a<sub>1</sub> * a<sub>2</sub> = 1</b> and happen with probability <b>1 / 36</b> each. It means that <b>P / Q = (1 + 1) / 36 = 1 / 18</b>, so the answer is, <b>X = 779</b>.</p>