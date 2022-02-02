---
{"category_name":"school","problem_code":"CATSDOGS","problem_name":"Cats and Dogs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"iscsi","date_added":"11-04-2016","tags":{"0":"ad","1":"admin2","2":"cakewalk","3":"jan17"},"editorial_url":"https://discuss.codechef.com/problems/CATSDOGS","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/CATSDOGS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/CATSDOGS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/CATSDOGS.pdf">Vietnamese</a> as well.</h3>

<p>Chef is a farmer and a pet lover. He has a lot of his favorite pets cats and dogs in the barn. He does not know their exact count. But he knows that there are <b>C</b> cats and <b>D</b> dogs in the barn. Also, one day went to field and found that there were <b>L</b> legs of the animals touching the ground. Chef knows that cats love to ride on the dogs. So, they might ride on the dogs, and their legs won't touch the ground and Chef would miss counting their legs. Chef's dogs are strong enough to ride at max two cats on their back.</p>

<p>It was a cold foggy morning, when Chef did this counting. So he is now wondering whether he counted the legs properly or not. Specifically, he is wondering is there a some possibility of his counting being correct. Please help Chef in finding it.</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting number of test cases. <b>T</b> test cases follow.</p>
<p>The only line of each test case contains three space separated integers <b>C, D, L</b> denoting number of the cats, number of the dogs and number of legs of animals counted by Chef, respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing a string "yes" or "no" (both without quotes) according to the situation.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ C, D, L ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (20 points)</b> 
<ul>
<li><b>1 ≤ T ≤ 10<sup>4</sup></b></li>
<li><b>0 ≤ C, D ≤ 10<sup>2</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #2 (30 points)</b> 
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ C, D ≤ 10<sup>3</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #3 (50 points)</b> 
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 8
1 1 4
1 1 2

<b>Output:</b>
yes
yes
no
</pre>

<h3>Explanation</h3>
<p><b>Example 1.</b> There is one cat and one dog. The number of legs of these animals on the ground are 8, it can be possible when both cat and dog are standing on the ground.</p>
<p><b>Example 2.</b> There is one cat and one dog. The number of legs of these animals on the ground are 4, it can be possible if the cat will ride on the dog, so its legs won't be counted by Chef, only the dog's legs will be counted.</p>
<p><b>Example 3.</b> There is one cat and one dog. The number of legs of these animals are 2, it can not be true at all, Chef might have made some mistake. Hence answer is "no".</p>
