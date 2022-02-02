---
{"category_name":"medium","problem_code":"AGENTS","problem_name":"Special Agents","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"16-03-2015","tags":{"0":"cook57","1":"hard","2":"kostya_by","3":"linear","4":"math"},"editorial_url":"http://discuss.codechef.com/problems/AGENTS","time":{"view_start_date":1429470000,"submit_start_date":1429470000,"visible_start_date":1429470000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/mandarin/AGENTS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/russian/AGENTS.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>A <i>special agent</i> is usually the title for a detective or investigator for a state, county, municipal, federal or tribal government who conducts criminal investigations and has arrest authority. An agent is a federal law enforcement officer with arrest authority but who does not conduct major criminal investigations or who may conduct investigations but does not have arrest authority. Special agents are distinctly able to do both.</p>
<p>Special agents are often involved in breaking secret ciphers. In this problem we'll consider one of the challenges that agents usually face while decrypting secret messages.</p>
<p>Quite often, decrypting involves solving equations. In this problem, it will be an integral equation. You are given two polynomials <b>Q(x) = q<sub>0</sub> + q<sub>1</sub> x + q<sub>2</sub> x<sup>2</sup> + ... + q<sub>n</sub> x<sup>n</sup></b>(<b>q<sub>n</sub></b> ≠ 0) and <b>T(x) = t<sub>0</sub> + t<sub>1</sub> x + t<sub>2</sub> x<sup>2</sup> + ... + t<sub>m</sub> x<sup>m</sup></b>(<b>t<sub>m</sub></b> ≠ 0) with integer coefficients. Your task is to solve an equation of the following form:</p>
<p>
    <img src="/download/extimages/ef52b01d7dd2d76e6f460c52e0ea848b.png" width="250" />
</p>
<p>
To solve that equation means to find such a function <b>P(x)</b> that turns it into an equality for every real <b>x</b>. One can easily prove, that <b>P(x)</b> is a polynomial. Also, you may assume that such a polynomial always exists and unique.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>K</b> denoting the number of test cases. The description of <b>K</b> test cases follows.</p>
<p>The first line of the test case description contains one integer <b>n</b> denoting the degree of polynomial <b>Q</b>.</p>
<p>The second line contains <b>n + 1</b> integers <b>q<sub>0</sub></b>, <b>q<sub>1</sub></b>, ..., <b>q<sub>n</sub></b> denoting the coefficients of <b>Q</b>.</p>
<p>The third line contains one integer <b>m</b> denoting the degree of polynomial <b>T</b>.</p>
<p>The fourth line contains <b>m + 1</b> integers <b>t<sub>0</sub></b>, <b>t<sub>1</sub></b>, ..., <b>t<sub>m</sub></b> denoting the coefficients of <b>T</b>.</p>
<h3>Output</h3>
<p>For each query, output two lines: the first line contains one integer denoting the degree of polynom <b>P</b>, the second line contains the coefficients of <b>P</b> in the format described above with one exception: the coefficients may be real. Your answer will be accepted if the absolute error is not greater than 10<sup>-6</sup>.</p>
<p>It's guaranteed that the correct polynomial <b>P(x)</b> is not a zero polynomial.</p>
<h3>Constraints</h3>
<p><ui></ui></p>
<li>1 ≤ <b>K</b> ≤ 50</li>
<li>0 ≤ <b>N</b> ≤ 50</li>
<li>0 ≤ <b>M</b> ≤ 50</li>
<li><b>|q<sub>i</sub>|</b>, <b>|t<sub>i</sub>|</b> ≤ 50</li>
<li><b>q<sub>n</sub></b> ≠ 0</li>
<li><b>t<sub>m</sub></b> ≠ 0</li>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
1
1
1 2
0
5

<b>Output:</b>
1
-1.5 2

</pre><h3>Explanation</h3>
<p>In the sample case, we are given the following data:</p>
<p><img src="/download/extimages/fb9f4d56106bc391ad1a5869cae0793d.png" width="100" /></p>
<p><img src="/download/extimages/4950faeb8c94ff6f607eed880a4fd6e2.png" width="63" /></p>
<p><b>P(x)</b> can be defined as following:</p>
<p><img src="/download/extimages/5edfbd14cd32ee3924162aad243d04ad.png" width="200" /></p>
<p>As we can see from the output, the answer is</p>
<p><img src="/download/extimages/ed6c8882189de08f38678338830ef970.png" width="120" /></p>
<p>We can simply replace <b>P(x)</b> with its value from the output to make sure, that all the equation solved correctly:</p>
<p><img src="/download/extimages/c9ba63accb73a80cbece7216110beba1.png" width="450" /></p>
