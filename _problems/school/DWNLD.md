---
{"category_name":"school","problem_code":"DWNLD","problem_name":"Download file","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"errichto","date_added":"20-10-2016","tags":{"0":"cakewalk","1":"cook79","2":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/DWNLD","time":{"view_start_date":1487529000,"submit_start_date":1487529000,"visible_start_date":1487529000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/mandarin/DWNLD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/russian/DWNLD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/vietnamese/DWNLD.pdf">Vietnamese</a> as well.</h3>

<p>Chef has recently got a broadband internet connection. His history of internet data usage is provided as below.</p>

<p>During the first <b>T<sub>1</sub></b> minutes, the internet data used was <b>D<sub>1</sub></b> MBs per minute, and during the next <b>T<sub>2</sub></b> minutes, it was <b>D<sub>2</sub></b> MBs per minute, and so on till during last <b>T<sub>N</b> minutes it was <b>D<sub>N</sub></b> MBs per minute.</p>

<p>The internet provider charges the Chef <b>1</b> dollar for every <b>1</b> MB data used, except for the first <b>K</b> minutes, when the internet data is free as part of the plan provided to Chef.</p>

<p>Please find out the total amount that Chef has to pay the internet provider (in dollars).</p>

<h3>Input</h3>
<p>First line of the input contains a single integer <b>TC</b> the number of test cases. Description of <b>TC</b> test cases follow.</p>
<p>First line of each test case contains two space separated integers <b>N</b> and <b>K</b>.</p>
<p>Next <b>N</b> lines of each test case contains information about the internet data usage. Specifically, in the <b>i</b>-th line, there will be two space separated integers: <b>T<sub>i</sub></b> and <b>D<sub>i</sub></b>.</p> 

<h3>Output</h3>
<p>For each test case output a single integer in separate line, the amount that Chef has to pay in dollars.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>TC</b> ≤ <b>1,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>T<sub>1</sub> + T<sub>2</sub> + ... + T<sub>N</sub> </b></li>
<li><b>1</b> ≤ <b>T<sub>i</sub></b>, <b>D<sub>i</sub></b> ≤ <b>10</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
2 1
2 3
2 2
1 2
2 3
3 0
1 2
2 4
10 10
<b>Output:</b>
6
3
110
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> For the first two minutes, internet data of usage of Chef is free. He has to pay for last 2 minutes only, for which he will be charged at 3 dollars per minute, i.e. total 6 dollars.</p>

<p><b>Example case 2.</b> For the first two minutes, internet data of usage of Chef is free. He has to pay for last 1 minute only, for which he is being charged at 3 dollars per minute. So, in total he has to pay 3 dollars.</p>

<p><b>Example case 3.</b> This time, Chef is not provided any free data usage. He has to pay 
for entire data usage, which comes out to be 1 * 2 + 2 * 4 + 10 * 10 = 110 dollars.</p>
