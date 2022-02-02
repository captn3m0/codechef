---
{"category_name":"school","problem_code":"BRACKETS","problem_name":"Brackets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"25-10-2014","tags":{"0":"basics","1":"cakewalk","2":"cook52","3":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/BRACKETS","time":{"view_start_date":1416767794,"submit_start_date":1416767794,"visible_start_date":1416767794,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/BRACKETS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/BRACKETS.pdf">Russian</a> as well.</h3>


<p>
	A valid parentheses sequence is a non-empty string where each character is either '<b>(</b>' or '<b>)</b>', which satisfies the following constraint:
</p>

<p>
	<em>You can find a way to repeat erasing adjacent pairs of parentheses </em>'<b>()</b>'<em> until it becomes empty.</em>
</p>

<p>
	For example, '<b>(())</b>' and '<b>()((()()))</b>' are valid parentheses sequences, but '<b>)()(</b>' and '<b>(()</b>' are not.
</p>

<p>
	Mike has a valid parentheses sequence. He really likes everything about his sequence, except the fact that it is quite long. So Mike has recently decided that he will replace his parentheses sequence with a new one in the near future. But not every valid parentheses sequence will satisfy him. To help you understand his requirements we'll introduce the pseudocode of function <b>F(S)</b>:
</p>

<pre>
	FUNCTION F( S - a valid parentheses sequence )
	BEGIN
		balance = 0
		max_balance = 0
		FOR index FROM 1 TO LENGTH(S)
		BEGIN
			if S[index] == '(' then balance = balance + 1
			if S[index] == ')' then balance = balance - 1
			max_balance = max( max_balance, balance )
		END
		RETURN max_balance
	END
</pre>

<p>
	In other words, <b>F(S)</b> is equal to the maximal balance over all prefixes of <b>S</b>.
</p>

<p>
	Let's denote <b>A</b> as Mike's current parentheses sequence, and <b>B</b> as a candidate for a new one. Mike is willing to replace <b>A</b> with <b>B</b> if <b>F(A)</b> is equal to <b>F(B)</b>. He would also like to choose <b>B</b> with the minimal possible length amongst ones satisfying the previous condition. If there are several such strings with the minimal possible length, then Mike will choose the least one lexicographically, considering '<b>(</b>' to be less than '<b>)</b>'.
</p>

<p>
	Help Mike!
</p>

<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>T</b> denoting the number of testcases to process.
</p>
<p>
	The only line of each testcase contains one string <b>A</b> denoting Mike's parentheses sequence. It is guaranteed that <b>A</b> only consists of the characters <b>'('</b> and <b>')'</b>. It is also guaranteed that <b>A</b> is a valid parentheses sequence.
</p>

<h3>Output</h3>
<p>
	The output should contain exactly <b>T</b> lines, one line per each testcase in the order of their appearance. The only line of each testcase should contain one string <b>B</b> denoting the valid parentheses sequence that should be chosen by Mike to replace <b>A</b>.
</p>

<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 5;</p>
<p>1 ≤ <b>|A|</b> ≤ 100000(10<sup>5</sup>).</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
()((()()))

<b>Output:</b>
((()))

</pre>