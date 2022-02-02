---
{"category_name":"school","problem_code":"CHEGLOVE","problem_name":"Chef and Glove","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"27-02-2018","tags":{"0":"admin2","1":"implementation","2":"march18","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEGLOVE","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/CHEGLOVE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/CHEGLOVE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/CHEGLOVE.pdf">Vietnamese</a> as well.</h3>

<p>Winter has finally come to Chefland, so Chef bought a glove for herself. Chef has a hand with <b>N</b> fingers (for the sake of simplicity, let us consider the thumb a finger too) numbered 1 through <b>N</b> and the glove has <b>N</b> sheaths numbered 1 through <b>N</b>. Exactly one finger has to be inserted into each sheath. You are given the lengths of Chef's fingers, as seen from left to right. You are also given the lengths of the sheaths of the glove, from left to right, as seen from the front.</p>

<p>Chef can wear the glove normally (the front side of the glove matching the front of Chef's hand), or she can flip the glove and then insert her hand in it. In the first case, the first finger will go into the first sheath, the second finger into the second one, and so on. However, when she flips the glove, her first finger will go into the <b>N</b>-th sheath, the second finger into the (<b>N-1</b>)-th and so on — the <b>i</b>-th finger will go into the <b>N+1-i</b>-th sheath for each valid <b>i</b>. Of course, for her to wear the glove comfortably, each finger's length should be less than or equal to the length of the sheath it goes into.</p>

<p>Find out whether Chef can wear the glove by keeping its front side facing her, or if she can wear it by flipping it over and facing its back side. If she can only wear the glove in the former way, output "front"; if she can wear it only in the latter way, output "back". If both front and back orientations can be used, output "both", and if she can't wear it either way, output "none".</p>

<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of Chef's fingers.</p>
<p>The second line contains <b>N</b> space-separated integers <b>L<sub>1</sub>, L<sub>2</sub>, ..., L<sub>N</sub></b> denoting the lengths of Chef's fingers.</p>
<p>The third line contains <b>N</b> space-separated integers <b>G<sub>1</sub>, G<sub>2</sub>, ..., G<sub>N</sub></b>, denoting the lengths of sheaths of the glove.</p>

<h3>Output</h3>
<p>For each test case, print a single line containing one of the strings <tt>"front"</tt>, <tt>"back"</tt>, <tt>"both"</tt>, or <tt>"none"</tt>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>L<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>1 ≤ <b>G<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points):</b> 1 ≤ <b>N</b> ≤ 10<sup>2</sup></p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre>
<b>Input</b>

4
3
1 2 3
2 3 4
3
1 2 1
1 2 1
3
3 2 1
1 2 3
4
1 3 2 4
1 2 3 5

<b>Output</b>

front
both
back
none
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The glove can be worn normally, with its front side facing Chef. The lengths of the glove sheaths are 2, 3, 4. The lengths of the fingers are 1, 2, 3. Each of the fingers will fit in the corresponding glove sheath, that is, 1 ≤ 2, 2 ≤ 3 and 3 ≤ 4.</p>

<p>However, if Chef tries to wear the glove with its back facing her, then the lengths of the sheaths will be 4, 3, 2. The first two fingers, which have lengths 1 and 2, will fit into the corresponding sheaths, but the 3rd finger won't fit because its length is 3, and the length of the corresponding sheath is 2. Hence, this glove can be worn only in one way, and we output "front".</p>
