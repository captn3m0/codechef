---
{"category_name":"hard","problem_code":"SEAEQ","problem_name":"Sereja and Equality","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"16-03-2014","tags":{"0":"dynamic","1":"hard","2":"july14","3":"maths","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAEQ","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/SEAEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/SEAEQ.pdf">Russian</a>.</h3>
<p>Sereja call two arrays <b>A</b> and <b>B</b> with length <b>n</b> almost equal if for every <b>i (1 &lt;= i &lt;= n) CA(A[i]) = CB(B[i])</b>. <b>CX[x]</b> equal to number of index <b>j (1 &lt;=j &lt;= n)</b> such that <b>X[j] &lt; x</b>.</p>
<p> </p>
<p>For two permutations <b>P1</b> and <b>P2</b> Sereja found new function <b>F(P1, P2)</b> that is equal to number of pairs <b>(l,r) (1 &lt;= l &lt;= r &lt;= n)</b> such that <b>P1[l..r]</b> is almost equal to <b>P2[l..r]</b> and array <b>P1[l..r]</b> contain not more then <b>E</b> inversions. </p>
<p> </p>
<p>Now Sereja is insterested in next question: what is the sum <b>F(P1,P2)</b> by all possible permutations <b>P1, P2</b> from <b>n</b> elements.</p>
<p> </p>
<h3>Input</h3>
<p>First line contain integer <b>T</b> - number of testcases. <b>T</b> tests follow. The only line of each testcase contain integers <b>n, E</b>.</p>
<h3>Output</h3>
<p>For each testcase output answer modulo <b>1000000007 (10^9+7)</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>1000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 2
2 1
2 0
1 1

<b>Output:</b>
10
10
9
1

</pre><p> </p>
