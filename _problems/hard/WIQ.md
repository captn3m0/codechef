---
{"category_name":"hard","problem_code":"WIQ","problem_name":"Waiting in a Queue","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"fudail","problem_tester":null,"date_added":"31-05-2017","tags":{"0":"fudail"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/WIQ.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/WIQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/WIQ.pdf">Vietnamese</a> as well.</h3>

<p>You have <b>n</b> requests in a queue, and each request has distinct owner. That is, there are <b>n</b> owners, and each of them own exactly one of the requests. The requests are numbered from 1 to <b>n</b>, and they are initially in order in the queue. That is, Request 1 is at the head (beginning) of the queue, and Request <b>n</b> is at the tail (end). The process starts at time = 1, ie. the first minute. But not all the owners are ready from the beginning. The owner of Request i has a <b>b<sub>i</sub></b> associated with him, which is the minute from which he will be ready.</p>

<p>Each time you pick the first request in the queue. Suppose that is Request i. If its owner isn't ready (that is, <b>b<sub>i</sub></b> is strictly greater than the current time), you put the request at the end of the queue. Otherwise, you do the request, which takes <b>a<sub>i</sub></b> minutes. But the process of checking whether an owner is ready or not takes one minute by itself. Assume that other operations are done instantaneously.</p>

<p>Note that we check if the owner is ready at that exact minute, even though the job does not start at this minute. That is, if we are checking at time = 5, we know that the job won't start until time = 6, but we still check if the owner is ready at time = 5. Please look at the Example and Explanation given below for a better understanding of the process.</p>

<p>For every request, output the minute in which it is completed. That is, Request i has duration <b>a<sub>i</sub></b> minutes, and so it has to run from time = x, for some x, till time = (x +  <b>a<sub>i</sub></b> - 1). And the answer for this would be (x +  <b>a<sub>i</sub></b> - 1).</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b>, denoting the number of test cases.</li>
<li>Each test case contains three lines. The first line contains one integer <b>n</b>, denoting the number of requests.</li>
<li>The second line contains <b>n</b> space-separated integers where the i-th integer denotes <b>a<sub>i</sub></b>.</li>
<li>The third line contains <b>n</b> space-separated integers where the i-th integer denotes <b>b<sub>i</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, output a single line containing <b>n</b> integers, the i-th integer being the minute when the Request i is done.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 150</li>
<li>The sum of <b>n</b> in all test cases won't exceed 10<sup>6</sup></li>
<li>1 ≤ <b>a<sub>i</sub></b> , <b>b<sub>i</sub></b> ≤ 10<sup>12</sup></li>

</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
2
3 2
2 2

<b>Output:</b>
8 4
</pre>

<h3>Explanation</h3>
<p>We will see what happens at every minute:</p>
<ul>
<li>time = 1: The queue is (1, 2), and so the owner of Request 1 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is not ready, because <b>b<sub>1</sub></b> > time (2 > 1). So the queue now becomes (2, 1).</li>
<li>time = 2: The owner of Request 2 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is ready, because <b>b<sub>2</sub></b> ≤ time (2 ≤ 2).</li>
<li>time = 3, and 4: These two (<b>a<sub>2</sub></b>) minutes are taken to finish Request 2. So Request 2 is completed in minute 4.</li>
<li>time = 5: The queue is now (1). The owner of Request 1 is checked as to whether he is ready or not. This checking process takes up this entire minute. He is ready, because <b>b<sub>1</sub></b> ≤ time (2 ≤ 5).</li>
<li>time = 6, 7 and 8: These three (<b>a<sub>1</sub></b>) minutes are taken to finish Request 1. So Request 1 is completed in minute 8.</li>
</ul>
