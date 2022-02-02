---
{"category_name":"medium","problem_code":"LUCKY4","problem_name":"Lucky Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"22-11-2011","tags":{"0":"april12","1":"medium","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKY4","time":{"view_start_date":1334137578,"submit_start_date":1334137578,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.

</p><p> Chef likes sequences of <b>n</b> positive integers, each of which does not exceed <b>m</b>. The total number of such sequences is equal to <b>m^n</b>.

</p><p> Chef has an array <b>C</b> of <b>n-1</b> integers. Let <b>F(x)</b> be equal to the number of lucky digits in decimal representation of integer <b>x</b>.  Let there be a sequence <b>A</b> of <b>n</b> integers (1-based numeration). Chef calls it lucky when the following hold: if for each <b>i (1 &lt;= i &lt; n)</b> if <b>C[i]</b> equals to <b>1</b>, then <b>F(A[i])</b> must be equal to <b>F(A[i+1])</b> and if <b>C[i]</b> equals to <b>0</b>, then <b>F(A[i])</b> must not be equal to <b>F(A[i+1])</b>.

</p><p> Chef has integers <b>n, m, k</b> and an array <b>C</b>. He wants to find out the <b>k-th</b> lucky sequence for a given array <b>C</b>. Help him. If the <b>k-th</b> lucky sequence does not exist, print the only integer <b>-1</b>.

</p><p> The <b>k-th</b> lucky sequence is the <b>k-th</b> (1-based numeration) sequence in lexicographically sorted list of all lucky sequences for given integers <b>n, m</b> and an array <b>C</b>. The sequence <b>A</b> is lexicographic less than the sequence <b>B</b> if there exits integer <b>x (1 &lt;= x &lt;= n)</b> that <b>A[x] &lt; B[x]</b> and <b>A[y] = B[y]</b> for all <b>y (1 &lt;= y &lt; x)</b>.

<h3>Input</h3>
</p><p>First line contains one number <b>T</b> - the number of test cases. Each test is formed as following: first line contains <b>3</b> integers <b>n, m,</b> and <b>k</b>. Next line contains <b>n-1</b> integers - array <b>C</b> for corresponding test.

<h3>Output</h3>
</p><p>For each <b>T</b> test cases print sequence of integers - answer for corresponding test.

<h3>Constraints</h3>
</p><p>
2 &lt;= <b>T</b> &lt;= 10
</p><p>
2 &lt;= <b>n</b> &lt;= 50
</p><p>
1 &lt;= <b>m, k</b> &lt;= 10^9
</p><p>
0 &lt;= <b>C[i]</b> &lt;= 1

<h3>Example</h3>

<pre><b>Input:</b>
2
2 4 7
0
3 7 4
0 1

<b>Output:</b>
-1
1 7 7</pre></p>