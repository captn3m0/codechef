---
{"category_name":"easy","problem_code":"CO92SUBW","problem_name":"Chef Goes to the Cinema","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"15-03-2018","tags":{"0":"cook92","1":"easy","2":"implementation","3":"kefaa"},"editorial_url":"https://discuss.codechef.com/problems/CO92SUBW","time":{"view_start_date":1521397800,"submit_start_date":1521397800,"visible_start_date":1521397800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/mandarin/CO92SUBW.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/russian/CO92SUBW.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK92/vietnamese/CO92SUBW.pdf">Vietnamese</a> as well.</h3>

<p>Chef lives in Chefcity. Chefcity can be represented as a straight line with Chef's house at point 0 on this line. There is an infinite number of subway stations in Chefcity, numbered by positive integers. The first station is located at point 1 and for each <b>i</b> ≥ 1, the distance between stations <b>i</b> and <b>i+1</b> is equal to <b>i+1</b>. (Station <b>i+1</b> is always located at a higher coordinate than station <b>i</b>, i.e., the subway stations are located at points 1, 3, 6, 10, 15 etc.)</p>

<p>Subway trains in Chefcity allow Chef to move between any pair of adjacent stations in one minute, regardless of the distance between them. Chef can also move by walking; his walking speed is one unit of distance in one minute. Chef can enter or exit the subway at any station.</p>

<p>Chef has decided to go to the cinema. The only cinema in Chefcity is located at point <b>X</b>. (Note that the cinema can be placed at the same point as a subway station.) Help Chef determine the minimum possible time required to get to the cinema from his house.</p>

<h3>Input</h3>

<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains a single integer <b>X</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer - the minimum possible travel time.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 200</li>
<li>1 ≤ <b>X</b> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

4
1
2
3
9

<b>Output:</b>

1
2
2
5
</pre>

<h3>Explanation</h3>
<p><b>Example case 4:</b> Chef will walk from <b>x</b> = 0 to <b>x</b> = 1 in one minute, then he will enter the subway and move from station 1 (at <b>x</b> = 1) to station 2 (at <b>x</b> = 3) in one minute, then from station 2 to station 3 (at <b>x</b> = 6) in one minute, from station 3 to station 4 (at <b>x</b> = 10) in one minute, and finally, he will walk from <b>x</b> = 10 to <b>x</b> = 9 in one minute, which makes the total travel time 5 minutes.</p>
