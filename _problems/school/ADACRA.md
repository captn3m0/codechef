---
{"category_name":"school","problem_code":"ADACRA","problem_name":"Ada and crayons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"deadwing97","date_added":"25-02-2016","tags":{"0":"alei","1":"cakewalk","2":"cook83"},"editorial_url":"https://discuss.codechef.com/problems/ADACRA","time":{"view_start_date":1497812400,"submit_start_date":1497812400,"visible_start_date":1497812400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/mandarin/ADACRA.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/russian/ADACRA.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/vietnamese/ADACRA.pdf">vietnamese</a> as well.</h3>

<p>
Ada has an array of <b>N</b>  crayons, some crayons are pointing upwards and some downwards.
Ada thinks that an array of crayons is beautiful if all the crayons are pointing in the same direction.
</p>
<p>
In one step you can flip any segment of consecutive crayons. After flipping a segment, all crayons pointing downwards will point upwards and visceversa</p>
<p>
What is the minimum number of steps to make the array of crayons beautiful?
</p>


<h3>Input</h3>
<p>
The first line of the input contains <b>T</b> the number of test cases.
Each test case is described in one line containing a string <b>S</b> of <b>N</b> characters, the i-th character is 'U' if the i-th crayon is pointing upwards and 'D' if it is pointing downwards.
</p>

<h3>Output</h3>
<p>
For each test case, output a single line containing the minimum number of flips needed to make all crayons point to the same direction.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 3000</b></li>
<li>1 ≤ <b>N</b> ≤ 50</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
UUDDDUUU

<b>Output:</b>
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In one step we can flip all the crayons pointing downwards </p>