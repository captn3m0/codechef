---
{"category_name":"easy","problem_code":"POTATOES","problem_name":"Farmer Feb","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"mischievous_me","problem_tester":"shiplu","date_added":"5-01-2014","tags":{"0":"ad","1":"april14","2":"cakewalk","3":"mischievous_me"},"editorial_url":"http://discuss.codechef.com/problems/POTATOES","time":{"view_start_date":1397467923,"submit_start_date":1397467923,"visible_start_date":1397467923,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/POTATOES.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/POTATOES.pdf">Russian</a>.</h3>

<p> </p>
<p>Farmer Feb has three fields with potatoes planted in them. He harvested <b>x</b> potatoes from the first field, <b>y</b> potatoes from the second field and is yet to harvest potatoes from the third field. Feb is very superstitious and believes that if the sum of potatoes he harvests from the three fields is a prime number (<a href="http://en.wikipedia.org/wiki/Prime_number">http://en.wikipedia.org/wiki/Prime_number</a>), he'll make a huge profit. Please help him by calculating for him the minimum number of potatoes that if harvested from the third field will make the sum of potatoes prime. At least one potato should be harvested from the third field.</p>
<p></p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contain 2 integers separated by single space: <b>x</b> and <b>y</b>.</p>
<p> </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>y</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 3
4 3

<b>Output:</b>
1
4
</pre>
<h3>Explanation</h3>
<p>
In example case 1: the farmer harvested a potato from the first field and 3 potatoes from the second field. The sum is 4. If he is able to harvest a potato from the third field, that will make the sum 5, which is prime. Hence the answer is 1(he needs one more potato to make the sum of harvested potatoes prime.)
</p>