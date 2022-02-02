---
{"category_name":"hard","problem_code":"LPARTY","problem_name":"Little Party","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.2,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"xcwgf666","date_added":"25-02-2015","tags":{"0":"april15","1":"backtracking","2":"bitmasking","3":"hard","4":"maths","5":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/LPARTY","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/LPARTY.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/LPARTY.pdf">Russian</a>.</h3>
<p>A little party never killed nobody... After listening to this song  many times Leha has decided to get together with his friends and have some fun again. But things are not as simple as you might think.</p>
<p> Leha has <b>N</b> friends and he already had <b>M</b> parties with them and for some reason all these events were not good. He guesses that sometimes guys can't get across with each other. </p>
<p>All his friends respect him and they always have come independently of their mood. And here is the problem: there is always some subset of his friends at the party that guys from these subset become angry. </p>
<p>Now Leha wants to analyze previous events and find some groups of his friends(maybe empty) with correspondent moods which usually lead to problems. He perfectly remembers their states during previous time. A friend could have come either with good mood(in this case we will denote it as an upper-case Latin letter) or with bad mood(in this case we will denote it as an lower-case Latin letter). The same letters(even if their cases differ) correspond to one friend and different letters correspond to different friends.</p>
<p>Let's consider an example: Leha has 3 friends and he had 3 parties with them with states <b>AbC</b>(friends A and C were in good mood, but B was in bad mood), <b>Abc</b>(A was in good mood, others were in bad), <b>aBC</b>(A was in bad mood, others were in good). During all these parties something had gone wrong. We can notice that when there is subset <b>Ab</b>(A was in good mood, but B was in bad mood) party is spoiled and the mood of friend <b>C</b> doesn't matter. We also have party with state <b>aBC</b> which gives us problems. We can't say anything special about other subsets(for example: here all parties are spoiled with subsets <b>A</b>, <b>b</b> but we don't have enough information to assume that these subsets are always bad)</p>
<p>So we have two subsets which if are presented guarantee us some problems: <b>Ab</b> and <b>aBC</b>. We will call them <i>key subsets</i>. Leha wants to find several key subsets with minimal total size that describe all problem parties. In the example enough key subsets with minimal total size are: <b>Ab</b> and <b>aBC</b> with total size of 5. He could also find subsets straightforwardly <b>AbC</b>, <b>Abc</b>, <b>aBC</b> but their total size would be 9, so he will choose the first option.</p>
<p>The idea of finding problem key subsets with minimal total size is good, but Leha doesn't like time-consuming and boring tasks. He asks you to do this job for him. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the  following<b>T</b> test cases starts with two integer numbers <b>N</b> and <b>M</b>. <b>M</b> strings describing failed parties that already have been hold follow(one string per one line). Each string consists of <b>N</b> first Latin letters.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer - the minimal possible total size of key subsets.</p>
<p> </p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>120</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>1000</b></li>
</ul>
</p>
<p>Subtask 1 (23 points):</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3</b></li>
</ul>

<p>Subtask 2 (77 points)</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
AbC
Abc
aBC
3 2
abc
AbC
<b>Output:</b>
5
6
</pre><p> </p>
<h3>Explanation</h3>
<p>The first test case is explained in the problem statement.</p>
<p>In the second test case we can only take two given subsets and can't find anything less.</p>
