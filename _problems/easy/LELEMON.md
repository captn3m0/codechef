---
{"category_name":"easy","problem_code":"LELEMON","problem_name":"Little Elephant and Lemonade","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"white_king","date_added":"25-04-2012","tags":{"0":"ad","1":"aug13","2":"simple","3":"sorting","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LELEMON","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant likes lemonade.

</p><p>When Little Elephant visits any room, he finds the bottle of the lemonade in that room that contains the greatest number of litres of lemonade and drinks it all.

</p><p>There are <b>n</b> rooms (numbered from <b>0</b> to <b>n-1</b>), each contains <b>C<sub>i</sub></b> bottles. Each bottle has a volume (in litres). The first room visited by Little Elephant was <b>P<sub>0</sub>-th</b>, the second - <b>P<sub>1</sub>-th</b>, ..., the <b>m-th</b> - <b>P<sub>m-1</sub>-th</b> room. Note that Little Elephant may visit a room more than once.

</p><p>Find for Little Elephant the total volume of lemonade he has drunk.

<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains pair of integers <b>n</b> and <b>m</b>. Second line contains <b>m</b> integers separated by a single space - array <b>P</b>. Next <b>n</b> lines describe bottles in each room in such format: <b>C<sub>i</sub> V<sub>0</sub> V<sub>1</sub> ... V<sub>C<sub>i</sub>-1</sub></b>, where <b>V</b> is the list of volumes (in liters) of all bottles in <b>i-th</b> room.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> integers - the answers for the corresponding test cases.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n, C<sub>i</sub></b> &lt;= 100
</p><p>
1 &lt;= <b>m</b> &lt;= 10^4
</p><p>
0 &lt;= <b>P<sub>i</sub></b> &lt; n
</p><p>
1 &lt;= <b>V<sub>i</sub></b> &lt;= 10^5

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 3
0 2 1
3 1 2 3
1 7
2 4 7
4 7
0 1 3 0 1 0 0
1 7
3 9 4 5
7 1 2 3 4 5 6 7
1 1

<b>Output:</b>
17
22

</pre></p>