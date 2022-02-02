---
{"category_name":"medium","problem_code":"XORSUMS","problem_name":"Bear and Xor of Sums","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4.5,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"mnbvmar","date_added":"19-04-2017","tags":{"0":"cook81","1":"errichto","2":"medium","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/XORSUMS","time":{"view_start_date":1492972200,"submit_start_date":1492972200,"visible_start_date":1492972200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/mandarin/XORSUMS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/russian/XORSUMS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/vietnamese/XORSUMS.pdf">Vietnamese</a> as well.</h3>


<p>Limak is a problem setter.
Since he is lazy and cunning, he usually takes old problems and modifies them a bit (to not be accused of plagiarism), e.g. by swapping two words in the statement.
This is how he created the following problem (and your task is to solve it):</p>

<p>Given a sequence with <b>N</b> positive integers, find the <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> of sums of all non-empty segments of the sequence.</p>

<p>In other words, for each of <b>N</b>*(<b>N</b>+1)/2 non-empty consecutive subsequences find its sum of elements, and print the xor of those sums.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>N</b> denoting the size of the sequence.</p>

<p>The second line contains <b>N</b> integers <b>a</b><sub>1</sub>, <b>a</b><sub>2</sub>, ..., <b>a<sub>N</sub></b> — elements of the sequence.</p>



<h3>Output</h3>

<p>Print one integer — the xor of sums of all non-empty segments of the sequence.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>N</b> ≤ 300,000</li>
<li>0 ≤ <b>a</b><sub>i</sub> ≤ 50</li>
</ul>



<h3>Example</h3>

<pre><b>Input1:</b>
3
7 5 13

<b>Output1:</b>
8

<b>Input2:</b>
6
11 4 4 13 11 5

<b>Output2:</b>
14
</pre>



<h3>Explanation</h3>

<p>In the first example test, there are six non-empty segments.
Their sums of elements are: 7, 7+5=12, 7+5+13=25, 5, 5+13=18, 13.
The answer is 7 xor 12 xor 25 xor 5 xor 18 xor 13 = 8.</p>