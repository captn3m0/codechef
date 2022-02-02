---
{"category_name":"school","problem_code":"COOMILK","problem_name":"Bear and Milky Cookies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"errichto","date_added":"22-02-2017","tags":{"0":"cakewalk","1":"errichto","2":"ltime45"},"editorial_url":"https://discuss.codechef.com/problems/COOMILK","time":{"view_start_date":1488042300,"submit_start_date":1488042300,"visible_start_date":1488042300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/mandarin/COOMILK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/russian/COOMILK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/vietnamese/COOMILK.pdf">Vietnamese</a> as well.</h3>

<p>Limak is a little polar bear, who loves eating cookies and drinking milk.
For this reason he often visits Chef's kitchen.</p>

<p>Limak is going to spend <b>N</b> minutes in the kitchen.
Each minute he either eats a cookie or drinks milk.
Cookies are very sweet and thus Limak's parents have instructed him, that after eating a cookie, he has to drink milk in the next minute.</p>

<p>You are given whether he ate a cookie or drank milk in each of the <b>N</b> minutes. Your task is to check if Limak followed his parents' instructions. That is, you need to verify whether after each eaten cookie he drinks milk in the next minute.
Print "YES" or "NO" for each test case accordingly.</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains an integer <b>N</b> denoting the number of minutes.</p>

<p>The second line of a test case contains <b>N</b> space-separated strings <b>S</b><sub>1</sub>, <b>S</b><sub>2</sub>, ..., <b>S<sub>N</sub></b>.
The string <b>S</b><sub>i</sub> is either "cookie" (if Limak eats a cookie in the i-th minute) or "milk" (otherwise).</p>



<h3>Output</h3>

<p>For each test case, output a single line containing the answer — "YES" if Limak followed his parents' instructions, and "NO" otherwise, both without the quotes.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>N</b> ≤ 50</li>
<li> Each <b>S</b><sub>i</sub> is either "cookie" or "milk" (without the quotes).
</ul>



<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (40 points) <b>N</b> = 2</li>
<li>Subtask #2 (60 points) Original constraints</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
4
7
cookie milk milk cookie milk cookie milk
5
cookie cookie milk milk milk
4
milk milk milk milk
1
cookie

<b>Output:</b>
YES
NO
YES
NO</pre>




<h3>Explanation</h3>

<p><b>Test case 1.</b> Limak is in the kitchen for 7 minutes.
He eats three cookies and after each of them he indeed drinks milk in the next minute.
The answer is "YES".</p>

<p><b>Test case 2.</b> Limak is in the kitchen for 5 minutes.
In the first minute he eats a cookie and in the second minute he eats a cookie again, instead of drinking milk.
The answer is "NO".</p>

<p><b>Test case 3.</b> Here Limak doesn't eat any cookies.
The answer is "YES" because the condition is satisfied (there is no situation when Limak eats a cookie but doesn't drink milk in the next minute).</p>

<p><b>Test case 4.</b> Limak eats a cookie and doesn't drink milk in the next minute so the answer is "NO".</p>