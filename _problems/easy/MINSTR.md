---
{"category_name":"easy","problem_code":"MINSTR","problem_name":"Minimize the string","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"7-12-2017","tags":{"0":"acm17chn","1":"admin2","2":"chn17rol","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/MINSTR","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given <b>n</b> strings <b>s<sub>1</sub>, s<sub>2</sub>, ..., s<sub>n</sub></b>. Each of these strings consists only of letters 'a' and 'b', and the length of each string can be at most 2. In other words, the only allowed strings are "a", "b", "aa", "ab", "ba" and "bb".</p>

<p>Consider a permutation <b>p</b> = {<b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>, ..., <b>p<sub>n</sub></b>} of the integers {1, 2, ..., <b>n</b>}. Using this permutation, you can obtain a new string <b>S = s<sub>p<sub>1</sub></sub> + s<sub>p<sub>2</sub></sub> + ... + s<sub>p<sub>n</sub></sub></b>, where the operator + denotes concatenation of strings.</p>

<p>You can shorten the string <b>S</b> by performing the following operation any number of times: choose two consecutive equal characters and remove one of these characters from the string. For example, the string "aabb" can be shortened to "abb" or "aab" in one operation, and then optionally it could still be shortened to "ab".</p>

<p>You are allowed to choose any permutation <b>p</b>. Take the string <b>S</b> obtained using this permutation, and using any sequence of operations, minimize the string length. Find the minimum possible length of the string  obtainable.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>n</b>.</p>
<p>The second line of each test case contains <b>n</b> space-separated strings <b>s<sub>1</sub>, s<sub>2</sub>, ..., s<sub>n</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer corresponding to the minimum possible length of the shortened string.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>sum of <b>n</b> over all test cases won't exceed 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
2
ba ab
4
a b a b

<b>Output</b>
3
2
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b></p> 
<p>You can consider the permutation (2, 1). Using this, you get the string <b>S</b> = <b>s<sub>p<sub>1</sub></sub></b> + <b>s<sub>p<sub>2</sub></sub></b> = ab + ba = abba. You can then take the two adjacent b's and remove one of them to get aba, whose length is 3. You cannot do any better, and hence the answer is 3.</p>

<p><b>Testcase 2:</b></p> 
<p>You can consider the permutation (1, 3, 2, 4). Using this, you get the string <b>S</b> = <b>s<sub>p<sub>1</sub></sub></b> + <b>s<sub>p<sub>3</sub></sub></b> + <b>s<sub>p<sub>2</sub></sub></b> + <b>s<sub>p<sub>4</sub></sub></b> = a + a + b + b = aabb. You can then take the two adjacent b's and remove one of them to get aab. Then you can take the two adjacent a's and remove one of them to get ab. We end up with a length of 2, and you cannot do any better. Hence the answer is 2.</p>