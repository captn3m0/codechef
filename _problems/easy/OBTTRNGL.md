---
{"category_name":"easy","problem_code":"OBTTRNGL","problem_name":"Real obtuse","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"melnik","problem_tester":"kingofnumbers","date_added":"17-08-2017","tags":{"0":"cook85","1":"easy","2":"math","3":"melnik"},"editorial_url":"https://discuss.codechef.com/problems/OBTTRNGL","time":{"view_start_date":1503253800,"submit_start_date":1503253800,"visible_start_date":1503253800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/mandarin/OBTTRNGL.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/russian/OBTTRNGL.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/vietnamese/OBTTRNGL.pdf">vietnamese</a> as well.</h3>

<p>On the occasion of the birthday, Chef bought a large circular cake and decorated it with <b> k </b> candles placed equally spaced around the circumference of the cake, i.e. the lengths of the arcs that connect any two adjacent candles are equal. </p>

<p> Chef enumerated the candles from <b> 1</b> to <b> k </b> in clockwise manner. He then chose two candles, say <b> A </b> and <b> B </b> and lit them up. Now, he left the kitchen and decided to come back in some time with friends to celebrate the birthday.</p>

<p>Meanwhile Chef's little brother came to the kitchen and saw the cake. He wants to light up one of the not lit candles <b>C</b> such that angle <b> ACB </b> is an obtuse angle. He believes that such a pattern of lit candles will be auspicious. Can you find out how many candles <b>C</b> he can light up?</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. Each test case is described by a single line containing three space-separated integers <b>k</b>, <b>A</b>, <b>B</b>. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer: the answer for the test case.</p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10<sup>5</sup> </b></li>
<li><b>3</b> ≤ <b>k</b> ≤ <b> 10<sup>9</sup> </b></li>
<li><b>1</b> ≤ <b>A</b>, <b>B</b> ≤ <b>k</b> </b></li>
<li> <b>A</b> ≠ <b>B</b> </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
6 1 3
6 1 4
10 1 5
<b>Output:</b>
1
0
3
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Only candle with number <b>2</b> is suitable.</p>
<p><b>Example case 2.</b> No matter how we choose <b>C</b> the angle would have <b>90</b> degrees.</p>
<p><b>Example case 3.</b> Candles with numbers <b>2,3,4</b> are suitable.</p>