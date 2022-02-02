---
{"category_name":"easy","problem_code":"AMMEAT2","problem_name":"Andrew and the Meatballs again","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"21-04-2013","tags":{"0":"ad","1":"cook33","2":"simple","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/AMMEAT2","time":{"view_start_date":1366569000,"submit_start_date":1366569000,"visible_start_date":1728420665,"end_date":1735669800},"layout":"problem"}
---
<p>Andrew likes meatballs very much as you know.</p>
<p>He has <b>N</b> plates of meatballs, here the <b>i</b><sup>th</sup> plate contains exactly <b>i</b> meatballs. Andrew wants to take exactly <b>K</b> plates to his trip to Las Vegas.</p>
<p>On this occasion, he wants to choose the <b>K</b> plates by a strange way: if both <b>i</b><sup>th</sup> and <b>j</b><sup>th</sup> plates are chosen, then <b>i</b> and <b>j</b> must not be <a href="http://en.wikipedia.org/wiki/Coprime_integers">relative prime</a>, for all <b>1 ≤ i &lt; j ≤ N</b>.</p>
<p>Please help him to choose <b>K</b> plates. Output one of the possible choices.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line and only line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output <b>K</b> distinct integers, denoting the number of selected plates, where the plates are numbered from <b>1</b> to <b>N</b>. If there are multiple solutions, any one will do. If it is impossible to choose <b>K</b> plates, print only one integer <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b> ≤ <b>777</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
100 3
100 100

<b>Output:</b>
45 63 35
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: One of the possible choices is that he takes <b>45</b><sup>th</sup> plate, <b>63</b><sup>rd</sup> plate, and <b>35</b><sup>th</sup> plate. Because<br /><b>GCD(45, 63) = 9</b>,<br /><b>GCD(45, 35) = 5</b>,<br /><b>GCD(63, 35) = 7</b>.<br /></p>
<p><b>Example case 2</b>: He must choose all <b>N = K</b> plates in this case. But, for example, the pair of <b>3</b><sup>rd</sup> plate and <b>5</b><sup>th</sup> plate does not satisfy his desire. So it is impossible to choose <b>K</b> plates.</p>
