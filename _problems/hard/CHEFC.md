---
{"category_name":"hard","problem_code":"CHEFC","problem_name":"Chef and medium problem ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"stzgd","date_added":"17-09-2014","tags":{"0":"furko","1":"hard","2":"ltime16","3":"substring","4":"treaps"},"editorial_url":"http://discuss.codechef.com/problems/CHEFC","time":{"view_start_date":1411893000,"submit_start_date":1411893000,"visible_start_date":1411893000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFC.pdf">Russian</a>.</h3>
<p>Chef has an array. The size of the array is equal to <b>N</b>.<br />
Chef wants to make <b>M</b> queries. Each query has one of the two types:</p>
<p><ul>
<li><b>1 l r</b> - Calculate some interesting function <b>F</b> for subarray indexed from <b>l</b> to <b>r</b> inclusive.
</li><li><b>2 l r</b> - Modify the given array by removing all elements having indices in range from <b>l</b> to <b>r</b> and then putting these numbers at the beginning of<br />
array. Order of all other elements remains same.
</li></ul>
</p>
<p>For example: you have array [1, 2, 3, 4, 5, 6, 7, 8] and query (2 4 6), the modified array after the operation will look like [4, 5, 6, 1, 2, 3, 7, 8].<br />
All queries that goes after this query have to be executed at new the array. </p>
<p>Now let us define the interesting function <b>F</b> :). <br />
Lets call this array <b>B</b>. Let <b>|B|</b> be the length of array <b>B</b>. Assume that <b>B</b> is having 1 based indexing.<br />
Then the function <b>F</b> can be calculated by following code.</p>
<p>
<code></code></p>
<pre>
X = 1;
for (i = 2; i &lt;= |B|; i++)
    if (B[i] != B[i - 1])
        X++;
X is the output of the function F(B).
</pre><p>
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of the elements in given array.</p>
<p>Next line contains <b>N</b> numbers denoting the elements of given array.</p>
<p>Third line contains a single integer <b>M</b> denoting the number of queries that Chef wants to execute.</p>
<p>Each of the next <b>M</b> lines describes a single query in the format given in the statement.</p>
<h3>Output</h3>
<p>For each query of the first type output a single line containing a single integer - the answer for this query.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
<li>Subtask 1 (15 points): 1 ≤ <b>N</b> ≤ 100, 1 ≤ <b>M</b> ≤ 1000</li>
<li>Subtask 2 (25 points): 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup>, there is no query with type 2</li>
<li>Subtask 3 (60 points): 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 1 2 1 3
5
1 1 5
1 2 4
2 2 3
1 1 5
2 3 3

<b>Output:</b>
4
3
4
</pre>
