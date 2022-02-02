---
{"category_name":"hard","problem_code":"LEBOXES","problem_name":"Little Elephant and Boxes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"subra","date_added":"8-04-2012","tags":{"0":"hard","1":"may12","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBOXES","time":{"view_start_date":1336723200,"submit_start_date":1336723200,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant from Zoo of Lviv has <b>n</b> boxes. He don't know what is in the boxes, but he thinks that <b>i-th</b> box (0-based numeration) contains <b>V<sub>i</sub></b> dollars. The probability that <b>i-th</b> box will contain money is <b>P<sub>i</sub></b> percents. Instead of money <b>i-th</b> box may contain a single diamond (with the probability <b>100-P<sub>i</sub></b> percents).

</p><p>There are <b>m</b> things to buy, numbered from <b>0</b> to <b>m-1</b>, <b>j-th</b> thing costs exactly <b>C<sub>j</sub></b> dollars plus <b>D<sub>j</sub></b> diamonds. Little Elephant is very smart and if he has some number of dollars and diamonds he will always buy the maximal possible number of things he can afford. Note that there is just one copy of all <b>m</b> things.

</p><p>Help Little Elephant to find the expected number of things he will buy.

<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains pair of integers <b>n</b> and <b>m</b>. Next <b>n</b> lines of each test case contain pairs of integers <b>V<sub>i</sub></b> and <b>P<sub>i</sub></b>, one pair per line. Next <b>m</b> lines of each test case contain pairs of integers <b>C<sub>j</sub></b> and <b>D<sub>j</sub></b>, one pair per line.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the corresponding test cases. Round each number to <b>4</b> digits after decimal point.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 5
</p><p>
2 &lt;= <b>n</b> &lt;= 30
</p><p>
1 &lt;= <b>m</b> &lt;= 30
</p><p>
1 &lt;= <b>V<sub>i</sub></b>, <b>C<sub>j</sub></b> &lt;= 10^7
</p><p>
0 &lt;= <b>D<sub>j</sub></b> &lt;= 30
</p><p>
0 &lt;= <b>P<sub>i</sub></b> &lt;= 100

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 2
2 50
2 100
2 0
2 0
2 2
2 100
2 50
0 2
0 1

<b>Output:</b>
1.5000
0.5000

</pre></p>