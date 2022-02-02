---
{"category_name":"easy","problem_code":"LEBAMBOO","problem_name":"Little Elephant and Bamboo","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"shangjingbo","date_added":"6-04-2012","tags":{"0":"ad","1":"oct13","2":"simple","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBAMBOO","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/LEBAMBOO.pdf">here</a></h3>

<h3>Problem Statement</h3>
<p>Little Elephant from Zoo of Lviv likes bamboo very much. He currently has <b>n</b> stems of bamboo, <b>H<sub>i</sub></b> - height of <b>i-th</b> stem of bamboo (0-based numeration). 

</p><p>Today inspector Andrii from World Bamboo Association is visiting the plantation. He doesn't like current situation. He wants the height of <b>i-th</b> stem to be <b>D<sub>i</sub></b>, for each <b>i</b> from <b>0</b> to <b>n-1</b>, inclusive.

</p><p>Little Elephant is going to buy some special substance. One bottle of such substance he can use to single stem of bamboo. After using substance for stem <b>i</b>, the height of <b>i-th</b> stem is decrased by <b>1</b> and the height of <b>j-th</b> stem is increased by <b>1</b> for each <b>j</b> not equal to <b>i</b>. Note that it is possible for some of the stems to have negative height, but after all transformations all stems should have positive height.

</p><p>Substance is very expensive. Help Little Elephant and find the minimal number of bottles of substance required for changing current plantation to one that inspector wants. If it's impossible, print <b>-1</b>.

<h3>Input</h3>
</p><p>First line contain single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains single integer <b>n</b> - the number of stems in the plantation. Second line contains <b>n</b> integers separated by single space - starting plantation. Next line of each test case contains <b>n</b> integers - plantation that inspector Andrii requires.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> integers - the answers for the corresponding test cases.

<h3>Constraints</h3>

</p><p>
1 &lt;= <b>T</b> &lt;= 50
</p><p>
1 &lt;= <b>n</b> &lt;= 50
</p><p>
1 &lt;= <b>H<sub>i</sub>, D<sub>i</sub></b> &lt;= 50

<h3>Example</h3>

<pre>
<b>Input:</b>
3
1
1
2
2
1 2
2 1
3
3 2 2
4 5 3


<b>Output:</b>
-1
1
5

</pre></p>