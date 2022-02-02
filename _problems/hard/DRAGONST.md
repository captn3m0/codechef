---
{"category_name":"hard","problem_code":"DRAGONST","problem_name":"Dragonstone","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"2-08-2014","tags":{"0":"graph","1":"kostya_by","2":"lca","3":"ltime15","4":"medium","5":"mst","6":"tree"},"editorial_url":"http://discuss.codechef.com/problems/DRAGONST","time":{"view_start_date":1409473800,"submit_start_date":1409473800,"visible_start_date":1409473800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/mandarin/DRAGONST.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/russian/DRAGONST.pdf">Russian</a>.</h3>
<p><i>Dragonstone is the name of the island located at the entrance to Blackwater Bay and the castle thereon, which was shaped from stone to look like dragons. Dragonstone was the original seat of House Targaryen in Westeros, which they had colonized and fortified as the westernmost outpost of the Valyrian Freehold.</i></p>
<p align="right">(c) A Wiki of Ice and Fire</p>
<p><img src="/download/extimages/5423a2b5abc2376c9e1cab20b3b68ddf.jpg" height="250" /></p>
<p>After Robert's Rebellion(also known as the War of the Usurper), the island passed to Stannis Baratheon, who became the Lord of Dragonstone. It turned out, that there's a lot of secret chambers hidden underground the castle.</p>
<p>In this problem we assume, that the secret chambers can be described as <b>N</b> points on the Cartesian plane, both coordinates of which are integers. The points are indexed with integers from 1 to <b>N</b>. There's a bidirected passage between any pair of the chambers.</p>
<p>Let's consider two chambers <b>A(x<sub>1</sub>, y<sub>1</sub>)</b> and <b>B(x<sub>2</sub>, y<sub>2</sub>)</b>. Then it takes <b>|x1 - x2| + |y1 - y2|</b> minutes to travel through the passage, that connects chambers <b>A</b> and <b>B</b>.</p>
<p>The passages are extremely dark, so it isn't safe to travel through them without a lantern.</p>
<p>Stannis Baratheon has a very special lantern, which he's planning to use during the next <b>Q</b> trips between the secret chambers. Let's consider a single trip:</p>
<p>At first, Stannis chooses a chamber <b>S</b> - where he's starting the trip - and a chamber <b>F</b> - where he's finishing the trip. After that, he chooses an integer <b>C</b>, which is the <i>capacity</i> of the lantern for the current trip. Stannis can refill the oil in his lantern at any chamber, but not passage. It means, that he cannot walk passages, that take more than <b>C</b> minutes to travel through. If <b>C</b> is too small, then there's a chance that Stannis won't be able to travel from chamber <b>S</b> to chamber <b>F</b>. On other hand, if <b>C</b> is too large, then the lantern will be quite heavy and Stannis will be exhausted by the end of the trip.</p>
<p>Your task is pretty simple: determine the minimal number <b>C</b> for each Stannis's trip, such that he will be able to travel from <b>S</b> to <b>F</b>.</p>
<h3>Note</h3>
<p>
Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:</p>
<ul>
<li>Cartesian plane: <a href="http://en.wikipedia.org/wiki/Cartesian_plane">http://en.wikipedia.org/wiki/Cartesian_plane</a></li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of testcases. The description of <b>T</b> testcases follows.</p>

<p>The first line of each testcase contains an integer <b>N</b>, denoting the number of the secret chambers.</p>
<p>The next <b>N</b> lines contain two integers <b>X</b> and <b>Y</b> each, denoting the coordinates of the corresponding chamber.</p>
<p>The next line contains an integer <b>Q</b>, denoting the number of Stannis's trips between the secret chambers.</p>
<p>The next <b>Q</b> lines contain two integers <b>S</b> and <b>F</b> each, denoting the start and the finish chambers of the corresponding trip.</p>
<h3>Output</h3>
<p>The output of each test case should contain <b>Q</b> lines, <b>i</b>'th line should contain one integer: the minimal number <b>C</b> for <b>i</b>'th Stannis's trip, such that he will be able to travel from <b>S</b> to <b>F</b>.</p>
<p>Do not add any newlines between different testcases.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 4, for each input file;</li>
<li>1 ≤ <b>S</b> ≠ <b>F</b> ≤ <b>N</b>, for each testcase;</li>
<li>0 ≤ <b>X</b>, <b>Y</b> ≤ 10<sup>9</sup>, for each testcase.</li>
<li>Subtask 1(15 points): 1 ≤ <b>N</b> ≤ 5000, 1 ≤ <b>Q</b> ≤ 5;</li>
<li>Subtask 2(15 points): 1 ≤ <b>N</b> ≤ 5000, 1 ≤ <b>Q</b> ≤ 200000;</li>
<li>Subtask 3(35 points): 1 ≤ <b>N</b> ≤ 200000, 1 ≤ <b>Q</b> ≤ 5;</li>
<li>Subtask 4(35 points): 1 ≤ <b>N</b> ≤ 200000, 1 ≤ <b>Q</b> ≤ 200000.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
0 0
0 1
1 0 
1 1
2
1 2
1 4
4
0 0
0 2
0 9
0 12
2
1 4
3 4


<b>Output:</b>
1
1
7
3
</pre><h3>Explanation</h3>
<p>First testcase: </p>
<p>First trip: When <b>C</b> = 1, Stannis can use 1-2 passage and he will reach the destination;</p>
<p>Second trip: When <b>C</b> = 1, Stannis can use 1-2 and 2-4 passages and he will reach the destination.</p>

<p>Second testcase: </p>
<p>First trip: When <b>C</b> = 7, Stannis can use 1-2, 2-3 and 3-4 passage and he will reach the destination;</p>
<p>Second trip: When <b>C</b> = 3, Stannis can use 3-4 passages and he will reach the destination.</p>
