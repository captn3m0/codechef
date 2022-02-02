---
{"category_name":"easy","problem_code":"MIKE3","problem_name":"Mike and Stamps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"26-01-2014","tags":{"0":"easy","1":"kostya_by","2":"march14","3":"search"},"editorial_url":"http://discuss.codechef.com/problems/MIKE3","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/MIKE3.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/MIKE3.pdf">Russian</a>.</h3>
<p>Mike is fond of collecting stamps. He has a lot of rare and unusual ones in his collection. Unfortunately, a few days ago he was fired from his well-paid job.</p>
<p>But he doesn't complain about that, he acts! That's why Mike picked up <b>N</b> stamps from his collection and is going to sell them. He has already placed an announcement on the Internet and got <b>M</b> offers. Each offer can be described as a set of stamps, that the buyer wants to buy. Now Mike needs your help to choose a set of offers, that he should accept. </p>
<p>He can't accept offers partially. Also, as far as Mike has the only copy of each stamp, he can sell one stamp to at most one buyer.</p>
<p>Of course, Mike wants to maximize the number of accepted offers. Help him!
</p>
<h3>Input</h3>

<p>The first line contains two integer <b>N</b> and <b>M</b>, denoting the number of the stamps and the number of the offers.</p>
<p>The next <b>M</b> lines contain the descriptions of the offers. The <b>(i+1)</b>'th line of the input contains the description of the <b>i</b>'th offer and corresponds to the following pattern: <b>K<sub>i</sub></b> <b>A<sub>i,  1</sub></b> <b>A<sub>i,  2</sub></b>, ..., <b>A<sub>i,     K<sub>i</sub></sub></b>. <b>K<sub>i</sub></b> - is the number of the stamps, which the <b>i</b>'th buyer wants to buy, <b>A<sub>i</sub></b> - is the list of the stamps sorted in the ascending order.</p>
<p> </p>
<h3>Output</h3>
<p>Output should contain the only integer, denoting the maximal number of the offers, that Mike can accept.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 20,000</p>
<p>1 ≤ <b>M</b> ≤ 20</p>
<p>1 ≤ <b>K<sub>i</sub></b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 3
2 1 2
2 2 3
2 3 4

<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p>In the example test Mike should accept the first and the third offer.</p>
