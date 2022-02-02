---
{"category_name":"easy","problem_code":"ANKPAREN","problem_name":"Longest non regular parentheses sub-sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":"rubanenko","date_added":"9-06-2015","tags":{"0":"basic","1":"code_master01","2":"cook59","3":"easy","4":"pattern","5":"stack"},"editorial_url":"http://discuss.codechef.com/problems/ANKPAREN","time":{"view_start_date":1434911400,"submit_start_date":1434911400,"visible_start_date":1434911400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/mandarin/ANKPAREN.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/russian/ANKPAREN.pdf">Russian</a> as well.</h3>


<p>Chef has recently learnt about sequences of parentheses. These are special sequences that contain only the characters <em>'('</em> and <em>')'</em>.</p>
<p>A regular parentheses sequence follows the following definition:  
</p>
<ul>
<li>An empty sequence is regular</li>
<li>If <strong>S</strong> is a regular sequence, then <strong>(S)</strong> is also regular</li>
<li>If <strong>A</strong> and <strong>B</strong> represent two regular sequences, then their concatenation <strong>AB</strong> is also regular.</li>
</ul>

<p>Therefore, the sequences <strong>(), ()()</strong> and <strong>(())()</strong> are regular, while <strong>()(, )</strong> and <strong>))()</strong> are non-regular.</p>
<p>Now, you need to find the longest subsequence of the given sequence which is non-regular. Amongst all such <strong>distinct</strong> answers, output the lexicographically <strong>K<sup>th</sup></strong> amongst them. If the number of distinct subsequences with maximum length is less than <strong>K</strong>, please output -1 instead.</p>
<h3>Input:</h3>
<p>The first line contains a single integer <strong>T</strong>, denoting the number of test cases to follow.<br />
Each of the test cases have exactly two lines, the first contains the parentheses sequence and the second contains the value of <b>K</b>.</p>
<h3>Output:</h3>
<p>Output exactly <strong>T</strong> lines, each containing answer to the corresponding query.</p>
<h3>Constraints:</h3>
<ul>
<li>1 ≤ <strong>T</strong> ≤ 10</li>
<li>1 ≤ |<strong>S</strong>| ≤ 10<sup>5</sup></li>
<li>1 ≤ <strong>K</strong> ≤ 10<sup>9</sup></li>
</ul>
<h3>Example:</h3>
<p><strong>Sample Input:</strong></p>
<pre>
5
()
2
(()
1
(()
2
(())
2
(())
3

</pre>
<p><strong>Sample Output:</strong></p>
<pre>
)
(()
-1
())
-1

</pre>
<h3>Explanation:</h3>
<p><strong>Case 1:</strong>
Following are the subsequences:  
</p>
<pre>
Length   Subsequence   Regular/Non-Regular

  1			(			Non-regular
  1			)			Non-regular
  2			()			Regular

</pre>
<p>There are two non-regular subsequences of equal length:'(' and ')'.<br />
We are asked for the lexicographically 2nd, so output should be ')'.</p>
<p><strong>Case 2:</strong>
Following are the subsequences:  
</p>
<pre>
Length   Subsequence   Regular/Non-Regular
  1			(			Non-Regular
  1			)			Non-Regular
  2			((			Non-Regular
  2			()			Regular
  3			(()			Non-Regular

</pre>
<p>In this case, there are non-regular subsequences of lengths 1, 2, and 3. But, as 3 is the maximum among these, we choose, <strong>(()</strong>.</p>
<p><strong>Case 3:</strong><br />
The string is same as Case 2, and we realize that there is only one subsequence of the maximum length 3, thus we must output -1.</p>
<p><strong>Case 4:</strong><br />
We can find that following subsequences have maximum length and are non-regular.</p>
<pre>
Length 	Subsequence
  3			())	
  3			(()

</pre>
<p>In lexicographical order, we have following subsequences: [ ((), ()) ]<br />
The query asks for 2nd subsequence, thus the required output is ()).</p>
<p><strong>Case 5:</strong><br />
This is the same sequence as last case, and we know that there are exactly 2 distinct subsequences of maximum length. Thus, answer should be -1.</p>
<h3>Notes:</h3>
<ul>
<li>A subsequence of a given sequence <strong>A</strong> is a non-empty sequence obtained by removing zero or more characters from <strong>A</strong>. It does not need to be contiguous.</li>
<li>A sequence <strong>A</strong> is called different from another sequence <strong>B</strong>, if there exists an integer <strong>k</strong>, such that 1 ≤ <strong>k</strong> ≤ <strong>N</strong> (<strong>N </strong> is the length of both sequences), and <strong>A<sub>k</sub> != B<sub>k</sub>.</strong></li>
<li>Consider two different <b>N</b>-length sequences, <b>A</b> and <b>B</b>. Let <b>k</b> be the smallest integer such that <strong>A[k] != B[k]</strong> and 1 ≤ <b>k</b> ≤ <b>N</b>. If <b>A[k] < B[k]</b>, then <b>A</b> is said to be lexicographically smaller than <b>B</b>, and vice-versa.</li>
</ul>