---
{"category_name":"school","problem_code":"CHEFDETE","problem_name":"Chef-Detective","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"iscsi","date_added":"11-10-2015","tags":{"0":"cakewalk","1":"cenadar","2":"feb16","3":"hashing","4":"tree"},"editorial_url":"http://discuss.codechef.com/problems/CHEFDETE","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/CHEFDETE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/CHEFDETE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/CHEFDETE.pdf">Vietnamese</a> as well.</h3>

<p>Chef is a private detective. He was asked to investigate a case of murder in the city of Frangton.</p>
<p>Chef arrived in Frangton to find out that the mafia was involved in the case. Chef spent some time watching for people that belong to the clan and was able to build a map of relationships between them. He knows that a mafia's organizational structure consists of a single Don, heading a hierarchical criminal organization. Each member reports exactly to one other member of the clan. It's obvious that there are no cycles in the reporting system of the mafia.</p>
<p>There are <b>N</b> people in the clan, for simplicity indexed from <b>1</b> to <b>N</b>, and Chef knows who each of them report to. Member <b>i</b> reports to member <b>R<sub>i</sub></b>.</p>
<p>Now, Chef needs to identfy all potential killers to continue his investigation. Having considerable knowledge about the mafia's activities, Chef knows that the killer must be a minor criminal, that is, one of the members who nobody reports to. Please find the list of potential killers for Chef. Since Don reports to nobody, his <b>R<sub>i</sub></b> will be equal to <b>0</b>.</p>

<h3>Input</h3>
<p>The first line of input contains one integer <b>N</b>.</p>
<p>Next line has <b>N</b> space-separated integers, the <b>i<sup>th</sup></b> integer denotes <b>R<sub>i</sub></b> — the person whom the <b>i<sup>th</sup></b> member reports to.</p>

<h3>Output</h3>
<p>Output a list of space-separated integers in ascending order — the indices of potential killers.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b> except for Don, whose <b>R<sub>i</sub></b> equals to <b>0</b>.</li>
<li>It is guaranteed that there are no cycles in the reporting structure.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [50 points]: N ≤ 10000</b></li>
<li><b>Subtask #2 [50 points]: No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6
0 1 1 2 2 3

<b>Output:</b>
4 5 6
</pre>

<h3>Explanation</h3>
<p>The reporting structure:</p>
<img src="https://lh3.googleusercontent.com/UrdUW05iT_LOZiLTYN51Khch-mIuc8NjhtOISQZZ1y_N24kkUZxFvGGNGKSE9sh_Qxxa3MqcI0o6ppT0J8YsQ9UYMP7GGA9mrASzAhErKZq5ALY5doBsDUGxndatF2dNKxpJdvD4xKpEpmhl_yLGjfU_cLPf4ylKSH01v_-w_xv7b5H_DokIRpIJSW7sUmLkVG7uYCVSR9Es8QwFZO5FBJpC-DPo4liLZYhHPpcWt1rZq2afrajg6gwrKzMYlDVT1TcXa2IUGZSfXL_jqgkGOEVIHweFh9nouuqEfPfapchv_hFxa3CqeXcK9sa8HEvr4EUW3kx0cmDAGjWH4xDzMzEsWiVyZINbQeocOKaledrfspyXZyaL1Pls7vKKH5OkUwKuzMG0jc24iCuq2M7kJgLoVmld5Wn-AsYTpaGYpn3oMnudnfJG5jUkdZ0rC7Ak_n-N5G2MuyH93gA_MGLMf-ko3s22LFGqTnSf1dTipyEgU1KiX9k5c2hyjfHVP6WMtoITZk0usFiKPbqkh0EDKa-fl5KYuWoMVr9ag5lPxQk=w412-h416-no" />
