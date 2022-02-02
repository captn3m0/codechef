---
{"category_name":"easy","problem_code":"CHEFSOC2","problem_name":"Chef and Big Soccer","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"kevinsogo","date_added":"12-04-2016","tags":{"0":"berezin","1":"dynamic","2":"easy","3":"may16"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSOC2","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/CHEFSOC2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/CHEFSOC2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/CHEFSOC2.pdf">Vietnamese</a> as well.</h3>
<p>Chef is a big fan of soccer! He loves soccer so much, that he even invented soccer for his pet dogs! Here are the rules of the game:</p>
<ul>
<li>There are <b>N</b> dogs numerated from <b>1</b> to <b>N</b> stay in a line, so dogs <b>i</b> and <b>i + 1</b> are adjacent. </li>
<li>There is a ball which dogs will pass around. Initially, dog <b>s</b> has the ball.</li>
<li>A dog with ball can pass it to another dog. If the current pass-strength of dog is <b>x</b>, then it can pass the ball to either  dog <b>i - x</b> or dog <b>i + x</b> (provided such dog/s exist).</li>
</ul>

<p>
To make it even more exciting, Chef created an array <b>A</b> of <b>M</b> positive integers denoting pass strengths. In i-th pass, current pass-strength of the dog making the pass will be given by <b>A<sub>i</sub></b>.<br />
Chef asks dogs to execute these <b>M</b> passes one by one. As stated before, dog <b>s</b> will make the first pass, then some other dog and so on till <b>M</b> passes.
</p>
<p>
Dogs quickly found out that there can be lot of possible sequences of passes which will end up with a dog having the ball. Now each dog asks your help in finding number of different pass sequences which result in this dog ending up ball. Two pass sequences are considered different if after some number of passes they lead the ball to different dogs. As the answer could be quite large, output it modulo <b>10<sup>9</sup> + 7 (1000000007)</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space separated integers <b>N, M, s</b> denoting the number of dogs, number of pass strengths and number of dog having a ball at the beginning. </li>
<li>The second line contains <b>M</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>M</sub></b> denoting the pass strengths.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing <b>N</b> space-separated integers, where i-th integer should be equal to number of different valid pass sequences leading the ball to i-th dog modulo <b>10<sup>9</sup> + 7</b>. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10^3</b></li>
<li><b>1</b> ≤ <b>s</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^3</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points) : <b>N, M</b> ≤ <b>10</b></li>
<li>Subtask #2 (70 points) : <b>Original constraints</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 2
1 2 
3 3 3
1 1 1
3 1 1
3

<b>Output:</b>
1 0 1
0 2 0
0 0 0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
Possible sequence for dog <b>1</b> is <b>2->3->1</b>.<br />
Possible sequence for dog <b>3</b> is <b>2->1->3</b>.
</p>
<p><b>Example case 2.</b><br />
Possible sequences for dog <b>2</b> are <b>3->2->1->2</b> and <b>3->2->3->2</b>.
</p>
<p><b>Example case 3.</b><br />
There are no valid sequences for such input.
</p>
