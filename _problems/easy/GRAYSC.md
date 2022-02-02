---
{"category_name":"easy","problem_code":"GRAYSC","problem_name":"The Gray-Similar Code","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"laycurse","date_added":"9-05-2012","tags":{"0":"july12","1":"medium","2":"pigeonhole","3":"search","4":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/GRAYSC","time":{"view_start_date":1342000207,"submit_start_date":1342000207,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Gray code (see <a href="http://en.wikipedia.org/wiki/Gray_code">wikipedia</a> for more details) is a well-known concept.
One of its important properties is that every two adjacent numbers have exactly one different digit in their binary representation.
</p>
<p>
In this problem, we will give you <b>n</b> non-negative integers in a sequence <b>A[1..n] (0&lt;=A[i]&lt;2^64)</b>, such that every two adjacent integers have exactly one different digit in their binary representation, similar to the Gray code.
</p>
<p>
Your task is to check whether there exist 4 numbers <b>A[i1], A[i2], A[i3], A[i4] (1 &lt;= i1 &lt; i2 &lt; i3 &lt; i4 &lt;= n)</b> out of the given <b>n</b> numbers such that <b>A[i1] xor A[i2] xor A[i3] xor A[i4] = 0</b>. Here <b>xor</b> is a <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise operation</a> which is same as <b>^</b> in C, C++, Java and <b>xor</b> in Pascal.
</p>
<h3>Input</h3>
<p>First line contains one integer <b>n (4&lt;=n&lt;=100000)</b>.
Second line contains <b>n</b> space seperated non-negative integers denoting the sequence <b>A</b>.
<h3>Output</h3>
</p><p>Output “Yes” (quotes exclusive) if there exist four distinct indices <b>i1, i2, i3, i4</b> such that <b>A[i1] xor A[i2] xor A[i3] xor A[i4] = 0</b>. Otherwise, output "No" (quotes exclusive) please.
<h3>Example</h3>
<pre>
<b>Input:</b>

5
1 0 2 3 7


<b>Output:</b>

Yes
</pre></p>