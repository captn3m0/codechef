---
{"category_name":"easy","problem_code":"LEMOUSE","problem_name":"Little Elephant and Mouses","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"tuananh93","date_added":"20-03-2012","tags":{"0":"dynamic","1":"june13","2":"simple","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEMOUSE","time":{"view_start_date":1371461400,"submit_start_date":1371461400,"visible_start_date":1371461400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>It is well-known that the elephants are afraid of mouses. The Little Elephant from the Zoo of Lviv is not an exception.

<p>The Little Elephant is on a board <b>A</b> of <b>n</b> rows and <b>m</b> columns (0-based numeration). At the beginning he is in cell with coordinates <b>(0; 0)</b> and he wants to go to cell with coordinates <b>(n-1; m-1)</b>. From cell <b>(x; y)</b> Little Elephant can go either to <b>(x+1; y)</b> or <b>(x; y+1)</b>.

<p>Each cell of the board contains either <b>1</b> or <b>0</b>. If <b>A[i][j] = 1</b>, then there is a single mouse in cell <b>(i; j)</b>. Mouse at cell <b>(i; j)</b> scared Little Elephants if and only if during the path there was at least one such cell <b>(x; y)</b> (which belongs to that path) and <b>|i-x| + |j-y| <= 1</b>.

<p>Little Elephant wants to find some correct path from <b>(0; 0)</b> to <b>(n-1; m-1)</b> such that the number of mouses that have scared the Little Elephant is minimal possible. Print that number.

<h3>Input</h3>
<p>First line contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow. First line of each test case contain pair of integers <b>n</b> and <b>m</b> - the size of the board. Next <b>n</b> lines contain <b>n</b> strings, each of size <b>m</b> and consisted of digits <b>0</b> and <b>1</b>.

<h3>Output</h3>
<p>In <b>T</b> lines print <b>T</b> integer - the answers for the corresponding test.

<h3>Constraints</h3>
<p>
<b>1</b> <= <b>T</b> <= <b>50</b>
<p>
<b>2</b> <= <b>n, m</b> <= <b>100</b>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 9
001000001
111111010
100100100
7 9
010101110
110110111
010011111
100100000
000010100
011011000
000100101

<b>Output:</b>
9
10

</pre>

<h3>Explanation</h3>
<p><b>Example case 1: </b>
The optimized path is: (0, 0) -> (0, 1) -> (0, 2) -> (0, 3) -> (0, 4) -> (0, 5) -> (0, 6) -> (0, 7) -> (0, 8) -> (1, 8) -> (2, 8). The mouses that scared the Little Elephant are at the following cells: (1, 0), (1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 7), (0, 2), (0, 8).
</p>

<p><b>Example case 2: </b>
The optimized path is: (0, 0) -> (1, 0) -> (1, 1) -> (2, 1) -> (2, 2) -> (3, 2) -> (3, 3) -> (4, 3) -> (4, 4) -> (5, 4) -> (5, 5) -> (6, 5) -> (6, 6) -> (6, 7) -> (6, 8). The 10 mouses that scared the Little Elephant are at the following cells: (0, 1), (1, 0), (1, 1), (2, 1), (3, 3), (4, 4), (5, 4), (5, 5), (6, 6), (6, 8).
</p>