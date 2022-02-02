---
{"category_name":"medium","problem_code":"NOKIA","problem_name":"Connecting Soldiers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"laycurse","date_added":"7-06-2012","tags":{"0":"cook23","1":"flying_ant","2":"recursion","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/NOKIA","time":{"view_start_date":1339959713,"submit_start_date":1339959713,"visible_start_date":1339959300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">
To protect people from evil, 
a long and tall wall was constructed a few years ago. 
But just a wall is not safe, there should also be soldiers on it, 
always keeping vigil. 
The wall is very long and connects the left and the right towers. 
There are exactly <b>N</b> spots (numbered 1 to <b>N</b>) on the wall for soldiers. 
The <i>K</i><sup>th</sup> spot is <i>K</i> miles far from the left tower and (<b>N</b>+1-<i>K</i>) miles from the right tower.

</p><p align="justify">
Given a permutation of spots <i>P</i> of {1, 2, ..., <b>N</b>}, soldiers occupy the <b>N</b> spots in that order. 
The <i>P</i>[<i>i</i>]<sup>th</sup> spot is occupied before the <i>P</i>[<i>i</i>+1]<sup>th</sup> spot. 
When a soldier occupies a spot, he is connected to his nearest soldier already placed to his left. 
If there is no soldier to his left, he is connected to the left tower. The same is the case with right side. 
A connection between two spots requires a wire of length equal to the distance between the two.

</p><p align="justify">
The realm has already purchased a wire of <b>M</b> miles long from Nokia, 
possibly the wire will be cut into smaller length wires. 
As we can observe, the total length of the used wire depends on the permutation of the spots <i>P</i>. Help the realm in minimizing the length of the unused wire. If there is not enough wire, output -1.

<h3>Input</h3>
</p><p align="justify">First line contains an integer <b>T</b> (number of test cases, 1 ≤ <b>T</b> ≤ 10 ). Each of the next <b>T</b> lines contains two integers <b>N M</b>, as explained in the problem statement (1 ≤ <b>N</b> ≤ 30 , 1 ≤ <b>M</b> ≤ 1000).

<h3>Output</h3>
</p><p align="justify">For each test case, output the minimum length of the unused wire, or -1 if the the wire is not sufficient.

<h3>Example</h3>

<pre>
<b>Input:</b>
4
3 8
3 9
2 4
5 25

<b>Output:</b>
0
0
-1
5
</pre>
<br /><br />
<b>Explanation:</b><br />
In the 1st case, for example, the permutation <i>P</i> = {2, 1, 3} will use the exact 8 miles wires in total.<br /><br />
In the 2nd case, for example, the permutation <i>P</i> = {1, 3, 2} will use the exact 9 miles wires in total.<br /><br />
To understand the first two cases, you can see the following figures:<br />
<img src="http://www.codechef.com/download/NOKIA1.png" width="500" height="683" /><br />
<br /><br />
<img src="http://www.codechef.com/download/NOKIA2.png" width="500" height="692" /><br />
<br /><br />
In the 3rd case, the minimum length of wire required is 5, for any of the permutations {1,2} or {2,1}, so length 4 is not sufficient.<br /><br />
In the 4th case, for the permutation {1, 2, 3, 4, 5} we need the maximum length of the wire = 20. So minimum possible unused wire length = 25 - 20 = 5.</p>