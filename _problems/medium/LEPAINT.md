---
{"category_name":"medium","problem_code":"LEPAINT","problem_name":"Little Elephant and Painting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"20-03-2012","tags":{"0":"dynamic","1":"july14","2":"medium","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEPAINT","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/LEPAINT1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/LEPAINT.pdf">Russian</a>.</h3>

<p>Little Elephant from Zoo of Lviv likes to paint.

</p><p>He has <b>n</b> objects to paint, ordered in a row and numbered form left to right starting from <b>1</b>. There are totally <b>c</b> colors, numbered from <b>0</b> to <b>c-1</b>. At the beggining all objects are colored in color with number <b>1</b>. When object with color <b>a</b> is painted in color <b>b</b>, the resulting color will have number <b>(a*b) mod c</b>.

</p><p>Little Elephant is going to make <b>k</b> turns. At <b>i-th</b> (0-based numeration) turn he will randomly choose any subset (even empty) of objects with indices in range <b>[L<sub>i</sub>; R<sub>i</sub>]</b> (inclusive) and paint all objects in chosen subset with random color (the same for all objects in the subset).

</p><p>Little Elephant wants to know the expected sum of all colors over all <b>n</b> objects after making all <b>k</b> turns. Help him.

<h3>Input</h3>
</p><p>First line contain single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains three integers <b>n</b>, <b>c</b> and <b>k</b>. Next <b>k</b> lines of each test case contain <b>k</b> pairs of integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, one pair per line.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases.

</p><p>Any results within 10^-6 absolute error will be accepted.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n, k</b> &lt;= 50
</p><p>
2 &lt;= <b>c</b> &lt;= 100
</p><p>
1 &lt;= <b>L<sub>i</sub></b> &lt;= <b>R<sub>i</sub></b> &lt;= <b>n</b>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
4 3 4
1 2
2 4
3 3
1 4
7 10 7
7 7
3 4
1 2
5 5
4 5
2 7
3 3

<b>Output:</b>
3.444444444
22.943125000

</pre></p>