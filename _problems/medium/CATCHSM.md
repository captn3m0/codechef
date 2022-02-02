---
{"category_name":"medium","problem_code":"CATCHSM","problem_name":"Catch Spider-Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"7-07-2016","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/CATCHSM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/CATCHSM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/CATCHSM.pdf">Vietnamese</a> as well.</h3>


<p>
Spider-Chef is well revered in Chefland for his generous behavior of helping hungry people by collecting food for them by flying places to places. All was going good, until one day, a dark liquid from a far away galaxy came and turned the Spider-Chef into an evil person and his famous red suit turned into a dark suit. Now he just likes to scare children by flying around and shouting at them.
</p>

<p>Spider-Chef has a set of <b>n</b> points: <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>, .., <b>p<sub>n</sub></b> which will be determining his motion. He starts initially at coordinates <b>(0, 0)</b>. He shoots his web at point <b>p<sub>1</sub></b> and revolves around this point in anti-clockwise direction till he traverses one quarter of the circle, i.e. till he covers 90' angle in anti-clockwise direction. After that, from that point, he will shoot a web at <b>p<sub>2</sub></b> and will start revolving around <b>p<sub>2</sub></b> in anti-clockwise fashion again for an angle of 90'. He does this for the entire set of <b>n</b> points. He stops after revolving 90' around <b>p<sub>n</sub></b>.</p>

<p>
When Bat-Chef learned about Spider-Chef's condition, he was extremely sad and wanted to catch Spider-Chef so that he can remove the dark liquid from Spider-Chef's body and turn him into a good person again. Unlike Spider-Chef, Bat-Chef can move in any way he desires. Bat-Chef does not want to delay things any more and wants to catch Spider-Chef as soon as possible. Help him in finding the minimum time required to catch the Spider-Chef.</p>

<p>
Note that the speed of both Spider-Chef and Bat-Chef is same and is equal to 1 unit per second.
</p>

<p>We are not quite sure about the initial position of Bat-Chef. So, we will ask <b>Q</b> queries. Each of the queries will contain a possible initial position of Bat-Chef. For each query, you have to tell minimum time required for Bat-Chef to catch Spider-Chef.</p>

<h3>Input</h3>
<p>The first line contains a single integer <b>n</b> denoting the number of points</p>
<p>Each of the next <b>n</b> lines contains two space separated integers denoting the <b>x</b> and <b>y</b> coordinates of <b>i</b>-th point <b>p<sub>i</sub></b>.</p>
<p>Next line contains a single integer <b>Q</b>.</p>
<p>Each of the next <b>Q</b> lines contains two space separated integers denoting the <b>x</b> and <b>y</b> coordinates of initial starting position of Bat-Chef.</p>

<h3>Output</h3>
<p>For each test case, for each query, output a single line containing the minimum time required for Bat-Chef to catch Spider-Chef. Your answer will be considered correct if it has an absolute or relative error less than or equal to <b>10<sup>-6</sup></b>.</p> 

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>1,000,000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100,000</b></li>
<li><b>-10<sup>7</sup></b> ≤ <b>x</b> and <b>y</b> coordinates of all the points in the input (i.e. for all <b>p<sub>i</sub></b> and initial query positions of Bat-Chef)  ≤ <b>10<sup>7</sup></b></li>
<li>Spider-Chef can shoot his web no farther than 100 unit distance from his current place. Therefore, it is guaranteed that the distance between the point where he finishes the 90' revolution with <b>p<sub>i</sub></b>, and <b>p<sub>i+1</sub></b>, is atmost 100 units.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
-1 0
0 2
4
0 0
-2 1
2 0
10 10</tt>


<b>Output:</b>
<tt>0.00000000
1.2837616026
2.3803973373
12.7279220614</tt>


</pre>

<h3>Explanation</h3>
<img src="https://s3.amazonaws.com/codechef_shared/download/upload/SNCKFL16/2.png" height="150">
<p><b>Example case 1.</b> Luckily initial position of Bat-Chef and Spider-Chef is precisely the same, so it won't take any time to Bat-Chef to catch Spider-Chef.</p>


