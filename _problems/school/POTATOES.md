---
{"category_name":"school","problem_code":"POTATOES","problem_name":"Farmer Feb","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/jKyNsu6xGXM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"mischievous_me","problem_tester":"shiplu","date_added":"5-01-2014","tags":{"0":"ad","1":"april14","2":"cakewalk","3":"mischievous_me"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/POTATOES","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POTATOES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="https://www.codechef.com/download/translated/APRIL14/mandarin/POTATOES.pdf">Mandarin Chinese </a> and <a target="_blank" href="https://www.codechef.com/download/translated/APRIL14/russian/POTATOES.pdf">Russian</a>.</h3>

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
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>