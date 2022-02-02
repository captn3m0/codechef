---
{"category_name":"easy","problem_code":"WITMATH","problem_name":"Witua and Math","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"pieguy","date_added":"2-08-2012","tags":{"0":"Rubanenko","1":"may13","2":"miller","3":"primenumbers","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/WITMATH","time":{"view_start_date":1368440876,"submit_start_date":1368441000,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Witua is a little student from the University of Lviv. He enjoys studying math. Witua knows a lot of famous mathematicians like Eratosthenes, Pythagoras, Fermat, Diophantus, Furko, Gauss and so on. However, his favorite one is Euler. The only thing Witua likes more than Euler is <a href = "http://en.wikipedia.org/wiki/Euler%27s_totient_function">Euler’s totient function</a> <b>φ</b>. He is exploring the nature of this function. One of the steps of his work is finding φ(i)/i for all 2≤i≤<b>N</b>. He doesn’t need to know every such value, but Witua wonders for what value i, is φ(i)/i the maximum he can get? Help little student to find such i that φ(i)/i is maximum among all the  2≤i≤<b>N</b>.</p>
<h3>Input</h3>
<p>The first line contains single integer <b>T</b> - the number of test cases. Each of the next T lines contains a single integer <b>N</b>. </p>
<h3>Output</h3>
<p> For every test case output i such that φ(i)/i is maximum among all i (2≤i≤<b>N</b>) in a separate line.</p>
<h3>Constrains</h3>
<p> <b>T</b> (1≤<b>T</b>≤500 )</p>
<p>  <b>N</b>(2≤<b>N</b>≤10^18)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
3
4

<b>Output:</b>
2
3
3

<b>Explanation</b>
<b>φ(2)/2=1/2
φ(3)/3=2/3
φ(4)/4=2/4</b>
</pre>