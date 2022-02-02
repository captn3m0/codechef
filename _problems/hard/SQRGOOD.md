---
{"category_name":"hard","problem_code":"SQRGOOD","problem_name":"Simplify the Square Root","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"liouzhou_101","problem_tester":null,"date_added":"8-12-2017","tags":{"0":"dirichlet","1":"hard","2":"jan18","3":"liouzhou_101","4":"number"},"editorial_url":"https://discuss.codechef.com/problems/SQRGOOD","time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/mandarin/SQRGOOD.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/russian/SQRGOOD.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JAN18/vietnamese/SQRGOOD.pdf">Vietnamese</a> as well.</h3>

<p>
Tiny Wong the chef used to be a mathematics teacher in a senior high school. At that time, he always used to tell his students that when there is a square root of some number in one’s final result, it should be simplified by factoring out the largest square divisor of this number. For example, √<span style="text-decoration:overline;"> 12 </span> = 2 √<span style="text-decoration:overline;"> 3 </span>. Therefore, if an integer <b>n</b> has a square divisor, i.e. there is a number <b>d</b> > 1 such that <b>d<sup>2</sup></b> divides <b>n</b>, then the square root of <b>n</b> needs to be simplified.
</p>

<p>
Tiny himself should generate for homework some number whose square root needs simplifying. Since he used to major in Computer Science, he prefers random numbers. Therefore, he randomly chose a number <b>n</b> and decided to use the <b>n</b>-th smallest number whose square root needs simplifying in today’s homework.
</p>

<p>
Since the <b>n</b>-th such number is too large for him to deal with, Tiny Wong is lost in thought. Would you please help him?
</p>

<h3>Input</h3>
<p>
The first and only line of the input contains a single integer <b>n</b>.
</p>

<p><b>Note</b>: the number <b>n</b> is not fixed for each test case. Instead, it will be generated dynamically, so it may be different for each run of your program. For each test case, <b>n</b> is generated in the following way: we have two fixed numbers <b>L</b> and <b>R</b>; <b>n</b> will be chosen uniformly at random from all integers between <b>L</b> and <b>R</b> inclusive.</p>

<p><b>Note 2</b>: Due to dynamically generated test cases, the problem is technically configured as interactive, thus reading until EOF will not work. Attempting to use any input method that expects EOF at the end will result in TLE verdict.</p>

<h3>Output</h3>
<p>Print a single line containing one integer — the <b>n</b>-th number whose square root needs simplifying.</p>

<h3>Constraints</h3>
<ul>1 ≤ <b>n</b> ≤ 10<sup>18</sup></ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (6 points):</b> 1 ≤ <b>n</b> ≤ 10<sup>7</sup></p>
<p><b>Subtask #2 (17 points):</b> 1 ≤ <b>n</b> ≤ 10<sup>14</sup></p>
<p><b>Subtask #3 (27 points):</b> 1 ≤ <b>n</b> ≤ 10<sup>16</sup></p>
<p><b>Subtask #4 (50 points):</b> 1 ≤ <b>n</b> ≤ 10<sup>18</sup></p>

<h3>Example</h3>
<pre><b>Input:</b>

4

<b>Output:</b>

12
</pre>

<h3>Explanation</h3>
<p>The first 4 numbers whose square roots need simplifying are 4, 8, 9 and 12.</p>