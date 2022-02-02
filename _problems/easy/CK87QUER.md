---
{"category_name":"easy","problem_code":"CK87QUER","problem_name":"Chef and Weird Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"saeed_sryhini","problem_tester":"kingofnumbers","date_added":"20-10-2017","tags":{"0":"cook87","1":"mhammad1","2":"saeed_sryhini","3":"simple","4":"sorting","5":"two"},"time":{"view_start_date":1508697000,"submit_start_date":1508697000,"visible_start_date":1508697000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/mandarin/CK87QUER.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/russian/CK87QUER.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK87/vietnamese/CK87QUER.pdf">Vietnamese</a> as well.</h3>

<p>When the final results for the employement competition were announced, Nour Eddin Ramadan was thrilled to find his name among the accepted co-Chefs.</p>

<p>However, after a while Nour started wasting time at the kitchen. He would usually spend hours talking to girls, and he even invited a girl to the kitchen pretending that he is the most valuable employer at Chef's restaurant.</p>

<p>When Chef found out about it, he decided that it was time to teach Nour a lesson. Before going home that night, Chef called Nour to his office and asked him to solve the following problem, saying that he better come to work tomorrow with a solution for it, or otherwise, it would be better if he doesn't come at all:</p>

<p>Given <b>T</b> queries, where each query contains a single number <b>Y</b>, Nour has to find the number of pairs <b>A</b> and <b>B</b>, such that the following equation holds true:</p>

<p><b>A<sup>2</sup> + B ≤ Y</b></p>

<p>Where <b>A</b> is any <b>positive</b> integer, and <b>B</b> holds <b>(1 ≤ B ≤ 700)</b>.</p>

<p>Nour was really busy that night (Yeah he got that girl to go out with him after all!), and he asked for your help.</p>
<p> </p>


<h3>Input</h3>
<p>The first line contains <b>T</b> denoting the number of test cases.</p>

<p><b>T</b> lines follows, Each line contains a single integer <b>Y</b> denoting the right side of the formula.</p>

<h3>Output</h3>
<p>For each test print a single line, containing a single number, indicating the answer for the test.</p>


<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ Y ≤ 10<sup>10</sup></b></li>
<li>Note that <b>A</b> must be any <b>positive</b> integer, and <b>B</b> must hold <b>1</b> ≤ <b>B</b> ≤ <b>700</b>.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2
3
4
10000000000

<b>Output:</b>
1
2
3
69999300

</pre>
<p> </p>