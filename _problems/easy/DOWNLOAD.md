---
{"category_name":"easy","problem_code":"DOWNLOAD","problem_name":"Alien Chefs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"laycurse","date_added":"11-06-2012","tags":{"0":"bit","1":"cook23","2":"flying_ant","3":"medium","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/DOWNLOAD","time":{"view_start_date":1339959753,"submit_start_date":1339959753,"visible_start_date":1339959300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">
The aliens living in outer space are very advanced in technology, 
intelligence and everything, except one, and that is Cooking. 
Each year they spend millions of dollars in research, to crack famous recipes prepared by humans.

</p><p align="justify">
Recently they came to know about Khana-Academy, 
a non-profit organization streaming free cooking lesson videos on earth. 
There are <b>N</b> recipes, 
numbered 1 to <b>N</b>, and the video of the <i>i</i><sup>th</sup> recipe is live in the time interval [<b>S</b><sub><i>i</i></sub>, <b>E</b><sub><i>i</i></sub>]. 
An alien can visit earth but can not survive for more than just a small moment (earth is so advanced in pollution). 
An alien visits the earth at an integer time <b>t</b> and instantly downloads the complete video of all the lessons 
that are live at that moment of time <b>t</b> and leaves earth immediately. 
You are given the visiting times of a small group of <b>K</b> aliens. 
Find the number of different recipes aliens can learn by watching the downloaded videos. 
Not just one group of aliens, there are <b>Q</b> such groups, 
so you have to find the answer for each of these <b>Q</b> groups.

<h3>Input</h3>
</p><p align="justify">
The first line has an integer <b>N</b>. 
Each of the following <b>N</b> lines has two integers <b>S</b><sub><i>i</i></sub> <b>E</b><sub><i>i</i></sub>. 
The next line has an integer <b>Q</b>, the number of groups. 
Each of the following <b>Q</b> lines has information of a group of aliens. 
The first integer is <b>K</b>, the number of aliens in that group, followed by <b>K</b> integers in the same line, 
the integer visiting times <b>t</b> of the aliens.<br /><br />
1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)<br />
1 ≤ <b>Q</b> ≤ 5000 (5 · 10<sup>3</sup>)<br />
1 ≤ <b>K</b> ≤ 20<br />
1 ≤ <b>S</b><sub><i>i</i></sub>, <b>E</b><sub><i>i</i></sub>, <b>t</b> ≤ 1000000000 (10<sup>9</sup>)<br />
<b>S</b><sub><i>i</i></sub> &lt; <b>E</b><sub><i>i</i></sub><br /><br />

<h3>Output</h3>
</p><p align="justify">
For each of the <b>Q</b> groups, output the number of different recipes that group of aliens can learn by watching the downloaded videos.

<h3>Example</h3>

<pre>
<b>Input:</b>
4
1 4
3 10
2 6
5 8
3
1 5
2 2 6
3 1 10 9

<b>Output:</b>
3
4
2
</pre>
<br />
<b>Explanation:</b><br />
Given videos of 4 recipes in the following closed intervals.<br />
1. [ 1 , 4 ]<br />
2. [ 3 , 10 ]<br />
3. [ 2 , 6 ]<br />
4. [ 5 , 8 ]<br />
<br />
In the first query, only one alien arrives at t = 5 and can download 3 recipes 2, 3, 4.<br /><br />

In the second query, two aliens arrive at t = 2 and 6. They can learn all the 4 recipes.<br /><br />

In the third query, three aliens arrive at t = 1, 10 and 9. They can learn only two recipes, 1 and 2.<br /><br /></p>