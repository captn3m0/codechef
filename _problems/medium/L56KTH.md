---
{"category_name":"medium","problem_code":"L56KTH","problem_name":"Chef and Function","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":"mgch","date_added":"18-01-2018","tags":{"0":"binary","1":"kefaa","2":"ltime56","3":"medium","4":"persistence","5":"trie"},"editorial_url":"https://discuss.codechef.com/problems/L56KTH","time":{"view_start_date":1517073000,"submit_start_date":1517073000,"visible_start_date":1517073000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/mandarin/L56KTH.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/russian/L56KTH.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/vietnamese/L56KTH.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a sequence <b>A</b> containing <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> and an integer <b>K</b>.</p>

<p>For each pair (<b>l</b>, <b>r</b>) such that 1 ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b>, Chef defines functions <b>MIN</b>(<b>l</b>, <b>r</b>) = <b>min</b>(<b>a<sub>l</sub></b>, <b>a<sub>l+1</sub></b>, ..., <b>a<sub>r</sub></b>) and <b>XOR</b>(<b>l</b>, <b>r</b>) = <b>a<sub>l</sub> xor a<sub>l+1</sub> xor ... xor a<sub>r</sub></b>. Then, Chef defines a function <b>f</b>(<b>l</b>, <b>r</b>) = <b>MIN</b>(<b>l</b>, <b>r</b>) ∙ <b>XOR</b>(<b>l</b>, <b>r</b>).</p>

<p>Chef wants to know the <b>K</b>-th smallest possible value of <b>f</b>(<b>l</b>, <b>r</b>). Formally, consider a sorted array of all <b>N(N+1)/2</b> possible values of <b>f</b>(<b>l</b>, <b>r</b>) for all possible pairs (<b>l</b>, <b>r</b>); Chef wants to know the <b>K</b>-th element of this array after it's sorted.</p>

<p>Help Chef!</p>

<h3>Input</h3>
<ul>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the <b>K</b>-th smallest value of <b>f</b>(<b>l</b>, <b>r</b>).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 50,000</li>
<li>1 ≤ <b>K</b> ≤ <b>N ∙ (N+1) / 2</b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 50,000 for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 100 for each valid <b>i</b></li>
</ul>
</p>

<p>
<b>Subtask #2 (20 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10,000</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 100 for each valid <b>i</b></li>
</ul>
</p>

<p>
<b>Subtask #3 (30 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 30,000 </li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 30,000 for each valid <b>i</b></li>
</ul>
</p>

<p>
<b>Subtask #4 (40 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

4 7
1 3 6 4

<b>Output:</b>

9
</pre>

<h3>Example</h3>
<p>There are <b>N(N+1)/2</b> = 10 distinct pairs (<b>l</b>, <b>r</b>). The values of <b>MIN</b>(<b>l</b>, <b>r</b>), <b>XOR</b>(<b>l</b>, <b>r</b>) and <b>f</b>(<b>l</b>, <b>r</b>) for each pair are:
<ul>
<li><b>l</b> = 1, <b>r</b> = 1: <b>MIN</b> = 1, <b>XOR</b> = 1, <b>f</b> = 1</li>
<li><b>l</b> = 1, <b>r</b> = 2: <b>MIN</b> = 1, <b>XOR</b> = 2, <b>f</b> = 2</li>
<li><b>l</b> = 1, <b>r</b> = 3: <b>MIN</b> = 1, <b>XOR</b> = 4, <b>f</b> = 4</li>
<li><b>l</b> = 1, <b>r</b> = 4: <b>MIN</b> = 1, <b>XOR</b> = 0, <b>f</b> = 0</li>
<li><b>l</b> = 2, <b>r</b> = 2: <b>MIN</b> = 3, <b>XOR</b> = 3, <b>f</b> = 9</li>
<li><b>l</b> = 2, <b>r</b> = 3: <b>MIN</b> = 3, <b>XOR</b> = 5, <b>f</b> = 15</li>
<li><b>l</b> = 2, <b>r</b> = 4: <b>MIN</b> = 3, <b>XOR</b> = 1, <b>f</b> = 3</li>
<li><b>l</b> = 3, <b>r</b> = 3: <b>MIN</b> = 6, <b>XOR</b> = 6, <b>f</b> = 36</li>
<li><b>l</b> = 3, <b>r</b> = 4: <b>MIN</b> = 4, <b>XOR</b> = 2, <b>f</b> = 8</li>
<li><b>l</b> = 4, <b>r</b> = 4: <b>MIN</b> = 4, <b>XOR</b> = 4, <b>f</b> = 16</li>
</ul></p>

<p>It's easy to see that the <b>K</b>=7-th smallest value of <b>MIN</b>(<b>l</b>, <b>r</b>) ∙ <b>XOR</b>(<b>l</b>, <b>r</b>) is 9.</p>

<h3>Note</h3>: <p>The time limit multiplier for python has been decreased to 3 from 5. </p>