---
{"category_name":"easy","problem_code":"CHEARMY","problem_name":"Chef And The Hiring Event","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"iscsi","date_added":"16-07-2015","tags":{"0":"easy","1":"june16","2":"prateekg603","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEARMY","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/CHEARMY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/CHEARMY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/CHEARMY.pdf">Vietnamese</a> as well.</h3>
<p>
The Head Chef is receiving a lot of orders for cooking the best of the problems lately. For this, he organized an hiring event to hire some talented Chefs. He gave the following problem to test the skills of the participating Chefs. Can you solve this problem and be eligible for getting hired by Head Chef.
</p>
<p>
A non-negative number <b>n</b> is said to be <em>magical</em> if it satisfies the following property. Let <b>S</b> denote the multi-set of numbers corresponding to the non-empty subsequences of the digits of the number <b>n</b> in decimal representation. Please note that the numbers in the set <b>S</b> can have <b>leading zeros</b>. Let us take an element <b>s</b> of the multi-set <b>S</b>, <b>prod(s)</b> denotes the product of all the digits of number <b>s</b> in decimal representation.<br />
The number <b>n</b> will be called magical if sum of <b>prod(s)</b> for all elements <b>s</b> in <b>S</b>, is even. </p>
<p>
For example, consider a number 246, its all possible non-empty subsequence will be <b>S = {2, 4, 6, 24, 46, 26, 246}</b>. Products of digits of these subsequences will be <b>{prod(2) = 2, prod(4) = 4, prod(6) = 6, prod(24) = 8, prod(46) = 24, prod(26) = 12, prod(246) = 48</b>, i.e. <b>{2, 4, 6, 8, 24, 12, 48}</b>. Sum of all of these is 104, which is even. Hence 246 is a <em>magical</em> number.
</p>
<p>Please note that multi-set <b>S</b> can contain repeated elements, e.g. if number is 55, then <b>S = {5, 5, 55}</b>. Products of digits of these subsequences will be <b>{prod(5) = 5, prod(5) = 5, prod(55) = 25}</b>, i.e. <b>{5, 5, 25}</b>. Sum of all of these is 35 which is odd. Hence 55 is not a<br />
 <em>magical</em> number.
</p>
<p>Consider a number 204, then <b>S = {2, 0, 4, 20, 04, 24, 204}</b>. Products of digits of these subsequences will be <b>{2, 0, 4, 0, 0, 8, 0}</b>. Sum of all these elements will be 14 which is even. So 204 is a <em>magical</em> number.
</p>
<p>
The task was to simply find the <b>K<sup>th</sup></b> <em>magical</em> number.
</p>
<h3>Input</h3>
<ul>
<li>First line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>Each of the next <b>T</b> lines contains a single integer <b>K</b>.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single integer corresponding to the <b>K<sup>th</sup></b> magical number.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>12</sup></b>.</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (20 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>4</sup></b>.</li>
</ul>

<p>
<b>Subtask 2 : (80 points) </b></p>
<ul>Original Constraints</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
5

<b>Output:</b>
2
8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
2 is the 2<sup>nd</sup> magical number, since it satisfies the property of the magical number. The first magical number will be of course 0.
</p>
