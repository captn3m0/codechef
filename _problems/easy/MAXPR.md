---
{"category_name":"easy","problem_code":"MAXPR","problem_name":"Maxim and Progressions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"25-05-2013","tags":{"0":"combinatorics","1":"dynamic","2":"easy","3":"june14","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/MAXPR","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/MAXPR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/MAXPR.pdf">Russian</a>.</h3>
<p>Maxim likes arithmetic progressions and does not like sequences which are not arithmetic progressions.</p>
<p>Now he is interested in the question: how many subsequences of his sequence <b>a</b>, consisting of <b>n</b> elements, are not arithmetic progressions.</p>
<p>Sequence <b>s[1],  s[2],  ...,  s[k]</b> is called a subsequence of sequence <b>a[1],  a[2],  ...,  a[n]</b>, if there will be such increasing sequence of indices <b>i[1], i[2], ..., i[k] (1  ≤  i[1]  &lt;  i[2]  &lt; ...   &lt;  i[k]  ≤  n)</b>, that <b>a[i[j]]</b>  =  <b>s[j]</b>. In other words, sequence <b>s</b> can be obtained from the <b>a</b> by deleting some elements.</p>
<p>Sequence <b>s[1],  s[2],  ...,  s[k]</b> is called an arithmetic progression, if it can be represented as : </p>
<li><b>s[1]</b> = <b>p</b>, where <b>p</b> — some integer;</li>
<li><b>s[i]</b> = <b>p + (i - 1)·q (i > 1)</b>, where <b>q</b> — some integer.</li>
<p>In particular, the empty sequence or a sequence of one element is an arithmetic progression.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each test case contains an integer <b>n</b> — the number of elements in the sequence. The next line of the test case contains <b>n</b> integer, <b>a[1], a[2], ..., a[n]</b> — elements of the sequence.
</p>
<h3>Output</h3>
<p>For each test case print the remainder of the division the answer on <b>1000000007 (10^9 + 7)</b>. All answers print on different lines. </p>
<h3>Constraints</h3>
<p> <b>1 ≤ T ≤ 10</b></p>
<p> 1 ≤ n ≤ 200000</p>
<p> 1 ≤ a[i] ≤ 100</p>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
1
3
1 2 1

<b>Output:</b>
0
1

</pre><p> </p>
