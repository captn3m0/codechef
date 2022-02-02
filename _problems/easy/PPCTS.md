---
{"category_name":"easy","problem_code":"PPCTS","problem_name":"Puppy and Catchers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kostya_by","date_added":"24-01-2016","tags":{"0":"cook67","1":"geometry","2":"implementation","3":"maths","4":"pavel1996","5":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/PPCTS","time":{"view_start_date":1456081200,"submit_start_date":1456081200,"visible_start_date":1456081200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/mandarin/PPCTS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/russian/PPCTS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/vietnamese/PPCTS.pdf">Vietnamese</a> as well.</h3>


<p>Today, puppy Tuzik is going to a new dog cinema. He has already left his home and just realised that he forgot his dog-collar! This is a real problem because the city is filled with catchers looking for stray dogs.</p>
<p>A city where Tuzik lives in can be considered as an infinite grid, where each cell has exactly <b>four</b> neighbouring cells: those sharing a common side with the cell. Such a property of the city leads to the fact, that the distance between cells <b>(x<sub>A</sub>, y<sub>A</sub>)</b> and <b>(x<sub>B</sub>, y<sub>B</sub>)</b> equals <b>|x<sub>A</sub> - x<sub>B</sub>| + |y<sub>A</sub> - y<sub>B</sub>|</b>.</p>

<p>Initially, the puppy started at the cell with coordinates <b>(0, 0)</b>. There are <b>N</b> dog-catchers located at the cells with the coordinates <b>(x<sub>i</sub>, y<sub>i</sub>)</b>, where <b>1 ≤ i ≤ N</b>. Tuzik's path can be described as a string <b>S</b> of <b>M</b> characters, each of which belongs to the set <b>{'D', 'U', 'L', 'R'}</b> (corresponding to it moving down, up, left, and right, respectively). To estimate his level of safety, Tuzik wants to know the sum of the distances from each cell on his path to all the dog-catchers. You don't need to output this sum for the staring cell of the path (i.e. the cell with the coordinates <b>(0, 0)</b>).</p>

<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>M</b>.</p>
<p>The following <b>N</b> lines contain two integers <b>x<sub>i</sub> and y<sub>i</sub></b> each, describing coordinates of the dog-catchers.</p>
<p>The last line of the input contains string <b>S</b> of <b>M</b> characters on the set <b>{'D', 'U', 'L', 'R'}</b>.</p>
<ul>
<li>'D' - decrease <b>y</b> by 1</li>
<li>'U' - increase <b>y</b> by 1</li>
<li>'L' - decrease <b>x</b> by 1</li>
<li>'R' - increase <b>x</b> by 1</li>
</ul>

<h3>Output</h3>
<p>Output <b>M</b> lines: for each cell of the path (<b>except the starting cell</b>), output the required sum of the distances.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3 ✕ 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>3 ✕ 10<sup>5</sup></b></li>
<li><b>-10<sup>6</sup></b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2 3
1 2
0 1
RDL

<b>Output:</b>
4
6
6
</pre>

<h3>Explanation</h3>
<p>
Initially Tuzik stays at cell <b>(0, 0)</b>. Let's consider his path:
<ul>
<li>Move <b>'R'</b> to the cell (1, 0). Distance to the catcher <b>(1, 2)</b> equals 2, distance to the catcher <b>(0, 1)</b> equals 2, so the total distance equals 4</li>
<li>Move <b>'D'</b> to the cell (1, -1). Distance to the catcher <b>(1, 2)</b> equals 3, distance to the catcher <b>(0, 1)</b> equals 3, so the total distance equals 6</li>
<li>Move <b>'L'</b> to the cell (0, -1). Distance to the catcher <b>(1, 2)</b> equals 4, distance to the catcher <b>(0, 1)</b> equals 2, so the total distance equals 6</li>
</ul>
</p>