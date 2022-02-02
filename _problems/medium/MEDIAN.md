---
{"category_name":"medium","problem_code":"MEDIAN","problem_name":"Little Elephant and Median","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"subra","date_added":"5-12-2011","tags":{"0":"may12","1":"medium","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/MEDIAN","time":{"view_start_date":1336723117,"submit_start_date":1336723117,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant from Zoo of Lviv likes medians so much. Let us define <b>median</b> term for some array <b>A</b>. Let <b>B</b> be the same array <b>A</b>, but sorted in non-decreasing order. Median of <b>A</b> is <b>B<sub>m</sub></b> (1-based indexing), where <b>m</b> equals to <b>(n div 2)+1</b>. Here <b>'div'</b> is an integer division operation. So, for a sorted array with 5 elements, median is the 3rd element and for a sorted array with 6 elements, it is the 4th element.

</p><p>Little Elephant has an array <b>A</b> with <b>n</b> integers. In one turn he can apply the following operation to any consecutive subarray <b>A[l..r]</b>: assign to all <b>A<sub>i</sub> (l &lt;= i &lt;= r)</b> median of subarray <b>A[l..r]</b>.

</p><p>Let <b>max</b> be the maximum integer of <b>A</b>. Little Elephant wants to know the minimum number of operations needed to change <b>A</b> to an array of <b>n</b> integers each with value <b>max</b>.

</p><p>For example, let <b>A = [1, 2, 3]</b>. Little Elephant wants to change it to <b>[3, 3, 3]</b>. He can do this in two operations, first for subarray <b>A[2..3]</b> (after that <b>A</b> equals to <b>[1, 3, 3]</b>), then operation to <b>A[1..3]</b>.

<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow, each of such format: first line - integer <b>n</b>, second line - array <b>A</b> consisted of <b>n</b> integers.

<h3>Output</h3>
</p><p>In <b>T</b> lines print the results for each test case, one per line.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 100
</p><p>
1 &lt;= <b>n</b> &lt;= 30
</p><p>
1 &lt;= <b>A[i]</b> &lt;= 10^9

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 2 3
4
2 1 1 2

<b>Output:</b>
2
1
</pre></p>