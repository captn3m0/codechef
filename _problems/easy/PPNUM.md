---
{"category_name":"easy","problem_code":"PPNUM","problem_name":"Polo the Penguin and the Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"23-09-2013","tags":{"0":"ad","1":"cook39","2":"easy","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/PPNUM","time":{"view_start_date":1382293800,"submit_start_date":1382293800,"visible_start_date":1382293800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPNUM.pdf">here</a></h3>
<p>Polo, the Penguin, likes numbers. He says that the goodness of a number is itself multiplied by the number of digits in it's decimal representation. For example, the goodness of the integer <b>474</b> is <b>474*3 = 1422</b>.</p>
<p>Help him to count the sum of goodness of all integers from <b>L</b> to <b>R</b>, inclusive. Since the answer can be too large, output it modulo <b>1,000,000,007 (10^9+7)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains the pair of integers <b>L</b> and <b>R</b>, separated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1,000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>1,000,000,000 (10^9)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
9 12

<b>Output:</b>
75

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The answer is <b>9*1 + 10*2 + 11*2 + 12*2 = 75</b>.</p>
<p> </p>
